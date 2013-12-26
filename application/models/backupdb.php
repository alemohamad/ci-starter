<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Copyright (c) 2013 Paul Radich


/**
* backupdb 
* 
* @uses CI_Model
* @package backupdb for Codeigniter 
* @copyright Copyright (c) 2013, Paul Radich
* @author Paul Radich 
*/
 
// The dbbackup Class use the CI FTP library and the CI DB utility 
 
class backupdb extends CI_Model
{
  
  function __construct()
    {
        parent::__construct();
        // Load the DB util class
        $this->load->dbutil();
        // Load Config file & suppress errors if it does not exist
        $this->config->load('backups', FALSE, TRUE);
		$this->load->helper('file');
        $this->localPath = $this->config->item('backup_local_path');
        $this->remotePath = $this->config->item('backup_remote_path');
    }
    
  /**
  * backup
  *
  * This function Should be ran from the controller to kick of the backup.
  *
  * @access  public
  * @return  string     path to save backup file
  */
    
  public function backup(){
      
    $prefs = array(
       'tables'      => array(),           // Array of tables to backup.
       'ignore'      => array(),           // List of tables to omit from the backup
       'format'      => 'zip',             // gzip, zip, txt
       'filename'    => 'db-backup.sql',    // File name - NEEDED ONLY WITH ZIP FILES
       'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
       'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
       'newline'     => "\n"               // Newline character used in backup file
    );
    
    //Build the file
    $file = $this->dbutil->backup($prefs);
    
    //Setup the filename
    $date = date('Ymd-His');
    $fileName = $this->config->item('backup_file_name').$date.'.zip';
    
    //Write the file to the server
    if(write_file($this->localPath.$fileName,$file)){
        log_message('debug', 'Model: backupdb; Method: backup(); backup file '.$fileName.' written to the server.');
    }else{
        log_message('error', 'Model: backupdb; Method: backup(); backup file '.$fileName.' failed to write to the server.');
    }
    
    //Upload the file via FTP
    if($this->config->item('backup_use_ftp')){
        $this->ftpFile($this->localPath.$fileName, $fileName);
    } 
    
    //Return the file path
    return $this->localPath.$fileName;
  }
  
  /**
  * ftpFile
  *
  * This function writes the backup file to the FTP server.
  * @access  public
  * @return boolean     True if successful / False on failure
  */
  
  
  private function ftpFile($file = '', $filename = ''){
      if($file != '' && $filename != ''){
          $this->load->library('ftp');
          
          $config['hostname'] = $this->config->item('backup_ftp_hostname');
          $config['username'] = $this->config->item('backup_ftp_username');
          $config['password'] = $this->config->item('backup_ftp_password');
          $config['debug']    = TRUE;
        
          $this->ftp->connect($config);
        
          $this->ftp->upload($file, $this->remotePath.$filename, '', 0775);
          
          log_message('debug', 'Model: backupdb; Method: ftpFile(); backup file '.$filename.' written to the FTP server.');
          
          $this->ftp->close();
          return TRUE;
      }else{
          log_message('error', 'Model: backupdb; Method: ftpFile(); backup file '.$filename.' failed to write to the FTP server.');
          return FALSE;
      }
  }
    
}

/* End of file backupdb.php */
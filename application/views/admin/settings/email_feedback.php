<!DOCTYPE html>
<html lang="en">
<body>
    <table width="640" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#f8f8f8" border="1">
        <tr>
            <td rowspan="9" width="20"></td>
            <td height="10"></td>
            <td rowspan="9" width="20"></td>
        </tr>
        <tr>
            <td height="85" style="font-family:Helvetica, Arial, sans-serif;font-weight:normal;font-size:18px;color:#666;text-align:center;font-style:normal;letter-spacing:1px;" >USER FEEDBACK</td>
        </tr>
        <tr>
            <td style="height:1px;width:599px;background:#999;"></td>
        </tr>
        <tr>
            <td style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:36px;color:#333;padding-top:60px;padding-bottom:60px;padding-right:10px;padding-left:30px;text-align:left;" >
                <span style="color:#999;">Name:</span> <?=$name?><br>
                <span style="color:#999;">Username:</span> <?=$user?><br>
                <span style="color:#999;">Subject:</span> <?=$subject?></td>
        </tr>
        <tr>
            <td style="height:1px;width:599px;background:#999;"></td>
        </tr>
        <tr>
            <td height="125" style="font-family:Georgia, 'Times New Roman', Times, serif;font-weight:normal;font-size:16px;color:#666;text-align:left;font-style:normal;letter-spacing:1px;padding-left:30px;padding-right:10px;" ><?=$message?></td>
        </tr>
        <tr>
            <td style="height:1px;width:599px;background:#999;"></td>
        </tr>
        <tr>
            <td height="125" style="font-family:Helvetica, Arial, sans-serif;font-weight:normal;font-size:12px;color:#666;text-align:center;font-style:normal;letter-spacing:1px;" ><a href="<?=site_url('/')?>"
                style="color:#666;">VISIT THE <?=strtoupper(ADMIN_PROJECT)?> WEBSITE</a><br><br><span style="color:#999;font-size:0.92em;">Greetings from <span style="font-weight:bold;"><?=ADMIN_CLIENT?></span></span></td>
        </tr>
    </table>
</body>
</html>

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Extras extends MY_Controller
{

    // protected $models = array( 'news' );

    public function sitemap()
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        // first load the library
        $this->load->library('sitemap');

        // create new instance
        $sitemap = new Sitemap();

        // add items to your sitemap (url, date, priority, freq)
        $sitemap->add(site_url('/'), date("Y-m-d\TH:i:sP", strtotime('2013-08-05')), '1.0', 'weekly');
        $sitemap->add(site_url('/news'), date("Y-m-d\TH:i:sP", strtotime('2013-08-05')), '1.0', 'weekly');
        $sitemap->add(site_url('/contact'), date("Y-m-d\TH:i:sP", strtotime('2013-08-05')), '1.0', 'weekly');

        // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        $sitemap->render('xml');
    }

    public function rss()
    {
        $this->layout = FALSE;
        $this->view = FALSE;

        // creating rss feed with our most recent 10 posts in variable $post
        $posts = $this->data['list_items'] = $this->news
                                                  ->order_by('date', 'DESC')
                                                  ->limit(10, 0)
                                                  ->get_many_by( array('visible' => '1' ) );

        // first load the library
        $this->load->library('feed');

        // create new instance
        $feed = new Feed();

        // set your feed's title, description, link, pubdate and language
        $feed->title = 'CodeIgniter Project Starter';
        $feed->description = 'This is a custom "project starter" curated by Ale Mohamad (myself) for me.';
        $feed->link = site_url('feed');
        $feed->lang = 'en';
        $feed->pubdate = $posts[0]->created_at; // date of your last update (in this example create date of your latest post)

        // add posts to the feed
        foreach ($posts as $post) {
            // set item's title, author, url, pubdate and description
            $feed->add($post->title, $post->author, site_url('news/article/' . $post->slug), $post->created_at, '<img src="' . site_url('/assets/uploads/' . $post->picture) .'_l.jpg" border="0" />' . nl2br($post->text));
        }

        // show your feed (options: 'atom' (recommended) or 'rss')
        $feed->render('atom');
    }

    public function error()
    {
        $this->view = 'error/index';
    }

    public function robots()
    {
        $this->layout = FALSE;

        switch(ENVIRONMENT) {
            case 'development':
            case 'testing':
                $this->view = 'robots_txt/development';
                break;
            case 'production':
                $this->view = 'robots_txt/production';
                break;
        }
    }

}

/* End of file extras.php */
/* Location: ./application/controllers/extras.php */
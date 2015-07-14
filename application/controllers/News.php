<?php

//News.php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
        }//end constructor

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                echo '<pre>';
                var_dump($data['news']);
                echo '</pre>';
        }//end index

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);
        }//end view
}//end News

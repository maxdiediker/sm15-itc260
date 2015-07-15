<?php

//News.php
class News extends CI_Controller {


        public function index()
        {
          // $request = "http://rss.news.yahoo.com/rss/software";
          $request = "http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=tc&output=rss";
          $response = file_get_contents($request);
          $xml = simplexml_load_string($response);
          print '<h1>' . $xml->channel->title . '</h1>';
          foreach($xml->channel->item as $story)
          {
          echo '<a href="' . $story->link . '">' . $story->title . '</a><br />';
          echo '<p>' . $story->description . '</p><br /><br />';
          }
        }//end index()



}//end News

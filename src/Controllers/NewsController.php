<?php
namespace App\Controllers;

class NewsController {
    public function showNewsFeed($request, $response, $args) {
        // Your RSS feed logic goes here (refer to your current newsfeed.html script)
        return $this->get('view')->render($response, 'newsfeed.html');
    }
}

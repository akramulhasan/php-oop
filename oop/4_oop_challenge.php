<?php

class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = true;
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article('This is the Title One', 'Here will go some cotent of the article');
$article1->publish();

$article2 = new Article("Here is another title", "Some article long content will go here");

var_dump($article1->isPublished());
var_dump($article2->isPublished());

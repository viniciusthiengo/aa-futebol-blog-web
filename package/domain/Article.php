<?php


class Article
{
    public $id;
    public $title;
    public $content;
    public $imageUrl;
    public $summary;
    public $numViews;
    public $numComments;
    public $timeToRead;

    public function __construct(
        $id,
        $title,
        $content,
        $imageUrl,
        $summary,
        $numViews,
        $numComments,
        $timeToRead )
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->imageUrl = $imageUrl;
        $this->summary = $summary;
        $this->numViews = $numViews;
        $this->numComments = $numComments;
        $this->timeToRead = $timeToRead;
    }
}
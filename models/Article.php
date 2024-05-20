<?php

class Article
{
    public string $id;
    public string $header;
    public string $shortText;
    public string $fullText;

    public function __construct($id,$header, $shortText, $fullText)
    {
        $this->id = $id;
        $this->header = $header;
        $this->shortText = $shortText;
        $this->fullText = $fullText;
    }
    public function getId(): string
    {
        return "<p>{$this->id}</p>";
    }
    public function getHeader(): string
    {
        return "<p>{$this->header}</p>";

    }
    public function getShortText(): string
    {
        return "<p>{$this->shortText}</p>";
    }
    public function getFullText(): string
    {
        return "<p>{$this->fullText}</p>";
    }

}
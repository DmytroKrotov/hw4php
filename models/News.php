<?php
require_once "Article.php";

class News
{
    public array $listArticles = [];
    public function __construct(array $listArticles)
    {
        $this->listArticles = $listArticles;
    }
    public function getListArticles()
    {

        foreach ($this->listArticles as $article)
        {
            echo("<div class='card' style='width: 100%; margin: auto;'>
            <img src='' class='card-img-top' alt=''>
            <div class='card-body'>
            <h5 class='card-title'>$article->header</h5>
            <p class='card-text'>$article->shortText</p>
            <a href='index.php?page=article&header=$article->header&short=$article->shortText&full=$article->fullText' class='btn btn-primary'>Read more</a>
            </div>
            </div>");
        }

    }
    public function getListArticle(string $id): string
    {
        return "";
    }
}
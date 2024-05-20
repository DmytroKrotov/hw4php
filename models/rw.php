<?php
    require_once "Article.php";

    function writeNews(array $articles,string $filename)
    {
        $toFile=json_encode($articles);
        file_put_contents($filename,$toFile);
    }
    function readNews(array &$articles,string $filename)
    {
        if(file_exists($filename)) {
            $data = json_decode(file_get_contents($filename));
            foreach ($data as $item) {
                $articles[] = new Article($item->id, $item->header, $item->shortText, $item->fullText);
            }
        }
    }
?>
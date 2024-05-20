<?php
    require_once "models/News.php";
    require_once "models/rw.php";

    $articles=[];
    readNews($articles,"db.json");
    if(isset($_POST["add"]))
    {
        $id=$_POST["id"];
        $header=$_POST["header"];
        $shortText=$_POST["short"];
        $fullText=$_POST["full"];
        $newArticle=new Article($id,$header,$shortText,$fullText);
        $articles[]=$newArticle;
        writeNews($articles,"db.json");
    }
    if(isset($_POST["delete"]))
    {
        $id=$_POST["id"];
        $articles=array_filter($articles,function($article) use ($id){return $article->id !== $id;});
        writeNews($articles,"db.json");
    }
//    $news=new News([new Article("1","First news","First news is about art","lorem
//    ipsum dolor sit amet"),new Article("2","Second news","Second news is about math","lorem
//    ipsum dolor sit amet"),new Article("3","Third news","Third news is about sport","lorem
//    ipsum dolor sit amet"),new Article("4","Fourth news","Fourth news is about hobby","lorem
//    ipsum dolor sit amet"),new Article("5","Fifth news","Fifth news is about history","lorem
//    ipsum dolor sit amet")]);
    $news=new News($articles);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">

        </header>
    </div>
    <div class="row">
        <nav class="col-sm-12 col-md-12 col-lg-12">
            <?php require_once('pages/navbar.php'); ?>
        </nav>
    </div>
    <div class="row">

            <?php
            if($_GET["page"]=="article"){require_once("pages/fullarticle.php");}
            if($_GET["add"]=="true") {require_once('pages/newsManager.php');}

            if($_GET["add"]!="true"&&$_GET["page"]!="article"){$news->getListArticles();}


            ?>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
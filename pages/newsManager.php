<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>News</title>-->
<!--    <link href="../css/bootstrap.min.css" rel="stylesheet">-->
<!--</head>-->
<!--<body>-->

<div class="w-50 m-auto">
    <form  method="post" action="index.php">

        <div class="mb-3">
            <label for="articleId" class="form-label">Id</label>
            <input type="text" class="form-control" name="id" id="articleId">
        </div>
        <div class="mb-3">
            <label for="articleHeader" class="form-label">Header</label>
            <input type="text" class="form-control" name="header" id="articleHeader">
        </div>
        <div class="mb-3">
            <label for="articleShortText" class="form-label">Description</label>
            <input type="text" class="form-control" name="short" id="articleShortText">
        </div>
        <div class="mb-3">
            <label for="articleFullText" class="form-label">Text</label>
            <input type="text" class="form-control" name="full" id="articleFullText">
        </div>


        <button type="submit" name="add" class="btn btn-primary">Add</button>
    </form>
</div>
<div class="w-50">
    <form  method="post" action="index.php">

        <div class="mb-3">
            <label for="articleId" class="form-label">Id</label>
            <input type="text" class="form-control" name="id" id="articleId">
        </div>

        <button type="submit" name="delete" class="btn btn-primary">Delete</button>
    </form>
</div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
<!--<script src="../js/bootstrap.min.js"></script>-->
<!--</body>-->
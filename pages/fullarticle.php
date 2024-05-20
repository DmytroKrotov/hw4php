<?php
$header=$_GET['header'];
$shortText=$_GET['short'];
$fullText=$_GET['full'];
?>
<div class='card'>
    <div class='card-header'>
        <?php echo $header; ?>
    </div>
    <div class='card-body'>
        <h5 class='card-title'><?php echo $shortText ?></h5>
        <p class='card-text'><?php echo $fullText  ?></p>
    </div>
</div>
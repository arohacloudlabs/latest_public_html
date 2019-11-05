<style>
body {
    width: 550px;
    font-family: Arial;
}

.post-item {
    border-bottom: 1px #F0F0F0 solid;
    padding: 10px;
}
.post-message {
    font-size: 1em;
    padding-bottom: 8px;
}

.post-date {
    color: #b7b7b7;
    font-size: 0.9em;
    font-style: italic;
}
</style>

<h1>Reading Facebook Feed using  PHP</h1>

<?php
if (! empty($obj)) {
    for($x=0; $x<$feed_item_count; $x++) {
        $picture = '';
        if(isset($obj['data'][$x]['picture'])) {
            $picture = $obj['data'][$x]['picture'];    
        }
        
?>
<div class="post">
  <div class="post-image post-image-1">
    <img src="<?= $picture ?>" alt="">
  </div>
  <div class="post-content">
    <div class="post-excerpt">
      <p><?= $obj['data'][$x]['description'] ?></p>
    </div>
    <a class="post-link" href="<?= $obj['data'][$x]['link'] ?>">Read More</a>
  </div>
</div>
<?php
    }
}
?>

<?php if ($totalPost > 0){  ?>
<div class="hero-card-container">
    <div class="hero-card desktop<?php if($p > 1){ echo ' hide';}  ?>">
        <img class="hero-image" src="<?=  imgPipe($heroPost->thumbnail); ?>" alt="">
        <div class="hero-body">
            <div class="hero-title">
            <?=  $heroPost->headline; ?>
            </div>
            <p class="hero-text">
            <?=  substr($heroPost->article, 0, 200) . '...' ; ?>
            </p>
            <div class="hero-button">
                <a href="post.php?id=<?=  $heroPost->id; ?>" class="btn">Weiterlesen</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php
  $heroPost = $postRepository->getLatestPost();
    
  $p = $_GET['page'] ?? 1;
  $p = $p == 0 ? 1 : $p;
  $p = intval($p);
  
  $limit = 10;
  $offset = ($p * $limit) - $limit;
  $posts = $postRepository->getLimitedPosts($limit, $offset);

  $totalPost = count($postRepository->getPosts()) ?? 0;

  function handleBackButton($p) {
    return $p > 1 ? --$p : $p; 
  }
  function handleNextButton($p) {
    global $totalPost;
    $pagecount = ceil(($totalPost) / 10 );
    return $pagecount > $p ? ++$p : $p;
  }
?>
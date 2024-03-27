<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  ;

  $filename = Form::upload($_FILES['thumbnail'], 'public/uploads/');

  if (!$filename) {
    $error = (object)["variant" => "danger", "message" => "Upload failed"];
  } else {

    $formData = Form::sanitize([...$_POST, 'thumbnail' => $filename]);
    $post = $postRepository->findPosts(['headline' => $formData['headline']]);
    // dd($_POST, $formData, $users);

    if (count($post) > 0) {
      $error = (object)["variant" => "danger", "message" => "article already exists"];
    } else {
      $auth = $postRepository->addPost($formData);
      // dd($_POST, $formData, $auth);
      if ($auth > 0) {
        $error = (object)["variant" => "success", "message" => "Article added successfully"];
      } else {
        $error = (object)["variant" => "danger", "message" => "Article not added"];
      }
    }
  } 
}
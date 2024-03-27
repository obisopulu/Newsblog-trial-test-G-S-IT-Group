<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  ;

  $formData = Form::sanitize($_POST);
  $comment = $commentRepository->addComment($formData);

    if ($comment > 0) {
      $error = (object)["variant" => "success", "message" => "Comment added successfully"];
      nav('?id='.$formData['post_id']);
    } else {
      $error = (object)["variant" => "danger", "message" => "Comment not added"];
    }
  
}

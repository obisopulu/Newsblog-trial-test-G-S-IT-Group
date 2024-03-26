<?php

class Mail
{
  static function text($from, $to, $subject, $body)
  {
    $message = wordwrap($body, 70, "\r\n");
    $headers = "From: " . $from . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $compose = mail($to, $subject, $message, $headers);
    return $_SERVER['SERVER_NAME'] == 'localhost' ? true : $compose;
  }

  static function html($from, $to, $subject, $body)
  {
    // $from eg. "Staff Name" <staff@company.com>
    $message = $body;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $from . "\r\n";
    $compose = mail($to, $subject, $message, $headers);
    return $_SERVER['SERVER_NAME'] == 'localhost' ? true : $compose;
  }
}

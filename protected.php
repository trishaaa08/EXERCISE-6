<?php


if (!isset($_COOKIE['logged_in'])) {
  header('HTTP/1.1 401 Unauthorized');
  exit;
}
?>



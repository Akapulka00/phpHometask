<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  function find_cakes(){
    $get = $_GET;
    $title = $get['title']; // Барабаны
    $count = $get['count']; // 1
    global $items;
    foreach ($items as $item) {
      if ($title === $item['title'] && $count - $item['count'] > 0) {
        return 1;
      }
    }
    return 0;
  }
  echo  find_cakes();
}

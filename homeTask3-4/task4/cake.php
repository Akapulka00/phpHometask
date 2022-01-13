<?php
$get = $_GET; // ['id' => 1]
$id = $get['id']; // '1' или '2' или '45' или 'irgnawria'
if (!isset($id)) {
    header("Location: cakes.php");
}
function getCake(int $id) {
    $cakes = require_once 'cakes_data.php';
    foreach ($cakes as $cake){
        if ($id === $cake['id']) return $cake;
    }
}
$cake = getCake($id);
echo $cake;
if (!isset($cake)) {
    header("Location: cakes.php");
}
?>

<?php
$fn = (isset($_SERVER['HTTP_X_FILENAME']) ? $_SERVER['HTTP_X_FILENAME'] : false);

if ($fn) {
    // AJAX
    file_put_contents('uploads/' . $fn, file_get_contents('php://input'));
    echo "$fn carregado com sucesso";
    exit();
}
?>
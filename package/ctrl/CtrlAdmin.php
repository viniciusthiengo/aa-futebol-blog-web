<?php
    include '../domain/Article.php';
    include '../apl/AplAdmin.php';
    ini_set('display_errors', 0);


    sleep(2);
    $articles = AplAdmin::getArticles();
    echo json_encode($articles);

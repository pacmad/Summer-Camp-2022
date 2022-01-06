<?php

function remove_article(int $id) {
    $all = file_get_contents('../data/articles.json');
    $all = json_decode($all, true);
    $jsonfile = $all["articles"];
    $jsonfile = $jsonfile[$id];

    if ($jsonfile) {
        unset($all["articles"][$id]);
        $all["articles"] = array_values($all["articles"]);
        file_put_contents("../data/articles.json", json_encode($all));
    }
    header("Location: http://localhost:8080/articles/articles.php");
}

if (isset($_GET["id"])) {
    remove_article((int) $_GET["id"]);
}
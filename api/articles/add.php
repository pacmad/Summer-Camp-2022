<?php

function create_article(string $title , string $description)
{
    $file = file_get_contents('../data/articles.json');
    $data = json_decode($file, true);
    $data["articles"] = array_values($data["articles"]);
    $article = array(
        'title' => $title,
        'description' => $description,
        'date' => strtotime("now"),
    );
    array_push($data["articles"], $article);
    file_put_contents("../data/articles.json", json_encode($data));
    header("Location: http://localhost:8000/articles/articles.php");
}

if (isset($_POST["add"])) {
    $file = file_get_contents('../data/articles.json');
    $data = json_decode($file, true);
    unset($_POST["add"]);
    create_article($_POST["title"], $_POST["description"]);
}
?>

<form action="http://localhost:8000/articles/add.php" method="POST">
    <input type="text" name="title" placeholder="title"/>
    <input type="text" name="description" placeholder="description"/>
    <input type="submit" name="add"/>
</form>

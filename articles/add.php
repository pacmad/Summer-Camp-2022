<form action="http://localhost:8080/articles/add.php" method="POST">
    <input type="text" name="title" placeholder="title"/>
    <input type="text" name="description" placeholder="description"/>
    <input type="submit" name="add"/>
</form>
<?php
if (isset($_POST["add"])) {
    $file = file_get_contents('../data/articles.json');
    $data = json_decode($file, true);
    unset($_POST["add"]);
    var_dump($_POST);
    $data["articles"] = array_values($data["articles"]);
    $article = array(
        'title' => $_POST["title"],
        'description' => $_POST["description"],
        'date' => strtotime("now"),
    );
    array_push($data["articles"], $article);
    file_put_contents("../data/articles.json", json_encode($data));
    header("Location: http://localhost:8080/articles/articles.php");
}
?>
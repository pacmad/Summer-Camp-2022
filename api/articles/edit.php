<?php

function edit_article(int $id, string $title, string $description) {
    $getfile = file_get_contents('../data/articles.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["articles"];
    $jsonfile = $jsonfile[$id];

    $post["title"] = isset($title) ? $title : "";
    $post["description"] = isset($description) ? $description : "";
    $post["date"] = $jsonfile["date"];

    if ($jsonfile) {
        unset($all["articles"][$id]);
        $all["articles"][$id] = $post;
        $all["articles"] = array_values($all["articles"]);
        file_put_contents("../data/articles.json", json_encode($all));
    }
    header("Location: http://localhost:8080/articles/articles.php");
}

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('../data/articles.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["articles"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    edit_article((int) $_POST["id"], $_POST["title"], $_POST["description"]);
}
?>
<?php if (isset($_GET["id"])): ?>
    <form action="http://localhost:8080/articles/edit.php" method="POST">
        <input type="hidden" value="<?php echo $id ?>" name="id"/>
        <input type="hidden" value="<?php echo $jsonfile["date"] ?>" name="date"/>
        <input type="text" value="<?php echo $jsonfile["title"] ?>" name="title"/>
        <input type="text" value="<?php echo $jsonfile["description"] ?>" name="description"/>
        <input type="submit"/>
    </form>
<?php endif; ?>

<?php
$getfile = file_get_contents('../data/articles.json', true);
$jsonfile = json_decode($getfile);

if (isset($_GET["get"]) and $_GET["get"] == "true") {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($jsonfile);
    return;
}
?>

<p><a href="add.php">Add</a></p>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Date</th>
    </thead>
    <tbody>
        <?php foreach ($jsonfile->articles as $index => $obj): ?>
            <tr>
                <td><?php echo $index; ?></td>
                <td><?php echo $obj->title; ?></td>
                <td><?php echo $obj->description; ?></td>
                <td><?php echo $obj->date; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $index; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $index; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        ?>
    </tbody>
</table>
</body>
</html>
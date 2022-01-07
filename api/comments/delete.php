<?php

function delete_comment(int $comment_id)
{
    $comments = json_decode(file_get_contents("data/comments.json"));
    unset($comments[$comment_id]);
    $comments = array_values($comments);
    file_put_contents("data/comments.json", json_encode($comments));
}

?>
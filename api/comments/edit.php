<?php

function edit_comment(int $comment_id, string $message)
{
    $comments = json_decode(file_get_contents("data/comments.json"));
    $comments[$comment_id] = $message;
    file_put_contents("data/comments.json", json_encode($comments));
}

?>
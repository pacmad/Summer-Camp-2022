<?php

function add_comment(int $article_id, string $user, string $message)
{
    $comments = json_decode(file_get_contents("data/comments.json"));
    $comments[] = array(
        'id' => count($comments),
        'article' => $article_id,
        'user' => $user,
        'date' => strtotime("now"),
        'message' => $message
    );
    file_put_contents("data/comments.json", json_encode($comments));
}

?>
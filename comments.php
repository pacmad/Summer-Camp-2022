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

function remove_comment(int $comment_id)
{
    $comments = json_decode(file_get_contents("data/comments.json"));
    unset($comments[$comment_id]);
    $comments = array_values($comments);
    file_put_contents("data/comments.json", json_encode($comments));
}

function get_article_comments(int $article_id): array
{
    $article_comments = [];
    $all_comments = json_decode(file_get_contents("data/comments.json"));
    foreach ($all_comments as $comment) {
        if ($comment->article == $article_id) {
            $article_comments[] = $comment;
        }
    }
    return $article_comments;
}

function update_comment(int $comment_id, string $message)
{
    $comments = json_decode(file_get_contents("data/comments.json"));
    $comments[$comment_id] = $message;
    file_put_contents("data/comments.json", json_encode($comments));
}

?>
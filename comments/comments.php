<?php

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

?>
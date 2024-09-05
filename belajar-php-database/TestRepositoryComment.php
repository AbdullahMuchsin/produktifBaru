<?php

use Model\Comment;
use Repository\CommentRepositoryImpl;

require_once __DIR__ . "/getConnection.php";
require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

$comment = new CommentRepositoryImpl(getConnection());

$data = $comment->getDataAll();

var_dump($data);

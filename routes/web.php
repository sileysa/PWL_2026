<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'. $postId ." Komentar ke-: ". $commentId;
=======
Route::get('/hello', function () {
    return 'Hello World';
>>>>>>> aeebc038ca235fd7f95f764971815bfaf6ea925c
});

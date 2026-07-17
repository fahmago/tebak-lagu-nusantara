<?php
session_start();

$songs = $_SESSION['shuffle'];

$current =
$songs[$_SESSION['question']];

$userAnswer = $_GET['answer'];

# cek jawaban benar
if($userAnswer == $current['title']){

    $_SESSION['score'] += 10;
}

# lanjut ke soal berikutnya
$_SESSION['question']++;

# jika soal habis
if($_SESSION['question'] >= count($songs)){

    header("Location: result.php");
    exit;
}

# kembali ke game
header("Location: game.php");
exit;
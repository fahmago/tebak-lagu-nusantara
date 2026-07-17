<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include "config/koneksi.php";

$query =
mysqli_query($conn, "SELECT * FROM lagu");

$songs = [];

while($row = mysqli_fetch_assoc($query)){

    $songs[] = $row;
}

/* Fisher-Yates Shuffle */

if(!isset($_SESSION['shuffle'])){

    shuffle($songs);

    $_SESSION['shuffle'] = $songs;

    $_SESSION['question'] = 0;

    $_SESSION['score'] = 0;
}

$songs = $_SESSION['shuffle'];

if($_SESSION['question'] >= count($songs)){

    header("Location: result.php");
    exit;
}

$current =
$songs[$_SESSION['question']];
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Tebak Lagu Nusantara</title>

<link
rel="stylesheet"
href="style.css?v=2">

</head>

<body>

<div class="game-container">

    <h1 class="title">
        🎵 Tebak Lagu Nusantara
    </h1>

    <p class="subtitle">
        Kenali lagu daerah Indonesia dengan cara bermain
    </p>

    <!-- Progress -->

    <div class="progress-box">

        <div
        class="progress-bar"

        style="
        width:
        <?= ($_SESSION['question'] + 1)
        / count($songs) * 100 ?>%;
        ">

        </div>

    </div>

    <!-- Info -->

    <div class="info-box">

        <div class="score-box">

            Skor:
            <?= $_SESSION['score']; ?>

        </div>

        <div>

            Soal
            <?= $_SESSION['question'] + 1; ?>
            /
            <?= count($songs); ?>

        </div>

    </div>

    <!-- Audio -->

    <div class="audio-box">

        <audio controls autoplay>

            <source

            src="assets/audio/<?= $current['audio']; ?>"

            type="audio/mpeg">

        </audio>

    </div>

    <!-- Pertanyaan -->

    <div class="question-text">

        Pilih Judul Lagu yang Benar

    </div>

    <!-- Pilihan -->

    <?php

    $options = [

        $current['option1'],
        $current['option2'],
        $current['option3'],
        $current['option4']

    ];

    shuffle($options);

    foreach($options as $option):

    ?>

    <button

    type="button"

    class="option-btn"

    onclick="checkAnswer(

    '<?= addslashes($option); ?>',

    '<?= addslashes($current['title']); ?>'

    )">

        <?= $option; ?>

    </button>

    <?php endforeach; ?>

    <!-- Feedback -->

    <div id="feedback"></div>

</div>

<script>

function checkAnswer(userAnswer, correctAnswer){

    const feedback =
    document.getElementById("feedback");

    const buttons =
    document.querySelectorAll(".option-btn");

    buttons.forEach(btn => {

        btn.disabled = true;
    });

    if(userAnswer === correctAnswer){

        feedback.className = "correct";

        feedback.innerHTML =
        "✅ Jawaban Benar!";

    }else{

        feedback.className = "wrong";

        feedback.innerHTML =
        "❌ Jawaban Salah!<br><br>" +

        "Jawaban benar:<br><b>" +

        correctAnswer +

        "</b>";
    }

    setTimeout(() => {

        window.location.href =

        "next.php?answer=" +

        encodeURIComponent(userAnswer);

    },2000);
}

</script>

</body>
</html>
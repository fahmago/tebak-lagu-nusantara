<?php

session_start();

$score =
$_SESSION['score'] ?? 0;

$total =
count($_SESSION['shuffle'] ?? []);

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Hasil Permainan</title>

<link
rel="stylesheet"
href="style.css?v=5">

<style>

.result-container{

    width:100%;
    max-width:700px;

    background:#111827;

    border-radius:35px;

    padding:50px;

    text-align:center;

    box-shadow:
    0 20px 50px rgba(0,0,0,0.5);

    border:
    1px solid rgba(255,255,255,0.08);

    position:relative;

    overflow:hidden;
}

/* glow */

.result-container::before{

    content:"";

    position:absolute;

    width:250px;
    height:250px;

    background:
    rgba(59,130,246,0.2);

    border-radius:50%;

    top:-100px;
    left:-100px;

    filter:blur(50px);
}

.result-container::after{

    content:"";

    position:absolute;

    width:250px;
    height:250px;

    background:
    rgba(139,92,246,0.2);

    border-radius:50%;

    bottom:-100px;
    right:-100px;

    filter:blur(50px);
}

/* icon */

.result-icon{

    font-size:90px;

    margin-bottom:20px;

    position:relative;

    z-index:2;
}

/* title */

.result-title{

    color:white;

    font-size:42px;

    margin-bottom:15px;

    position:relative;

    z-index:2;
}

.result-subtitle{

    color:#cbd5e1;

    font-size:18px;

    margin-bottom:35px;

    line-height:1.8;

    position:relative;

    z-index:2;
}

/* score */

.score-card{

    background:
    linear-gradient(
    135deg,
    #2563eb,
    #7c3aed
    );

    padding:35px;

    border-radius:25px;

    margin-bottom:35px;

    position:relative;

    z-index:2;
}

.score-label{

    font-size:20px;

    color:white;

    margin-bottom:10px;
}

.score-value{

    font-size:70px;

    font-weight:bold;

    color:white;
}

.score-total{

    font-size:24px;

    color:#ddd;
}

/* motivasi */

.message-box{

    background:#1e293b;

    padding:25px;

    border-radius:20px;

    margin-bottom:35px;

    color:#e2e8f0;

    line-height:1.8;

    position:relative;

    z-index:2;
}

/* button */

.button-group{

    display:flex;

    justify-content:center;

    gap:20px;

    flex-wrap:wrap;

    position:relative;

    z-index:2;
}

.result-btn{

    padding:16px 35px;

    border-radius:18px;

    text-decoration:none;

    color:white;

    font-size:18px;

    font-weight:bold;

    transition:0.3s;
}

.play-again{

    background:
    linear-gradient(
    135deg,
    #2563eb,
    #7c3aed
    );
}

.home-btn{

    background:
    linear-gradient(
    135deg,
    #0ea5e9,
    #06b6d4
    );
}

.result-btn:hover{

    transform:
    translateY(-4px)
    scale(1.03);

    box-shadow:
    0 10px 25px rgba(0,0,0,0.35);
}

@media(max-width:600px){

    .result-container{
        padding:30px;
    }

    .result-title{
        font-size:32px;
    }

    .score-value{
        font-size:55px;
    }

    .button-group{
        flex-direction:column;
    }
}

</style>

</head>

<body>

<div class="result-container">

    <div class="result-icon">
        🏆
    </div>

    <h1 class="result-title">

        Permainan Selesai

    </h1>

    <p class="result-subtitle">

        Terima kasih telah bermain
        Tebak Lagu Nusantara 🎵

    </p>

    <!-- skor -->

    <div class="score-card">

        <div class="score-label">
            Skor Akhir
        </div>

        <div class="score-value">

            <?= $score; ?>

        </div>

        <div class="score-total">

            / <?= $total; ?>

        </div>

    </div>

    <!-- motivasi -->

    <div class="message-box">

        <?php

        if($score >= 8){

            echo "
            Hebat! 🎉<br>
            Kamu sangat mengenal
            lagu daerah Indonesia.
            ";

        }elseif($score >= 5){

            echo "
            Bagus 👍<br>
            Kamu cukup mengenal
            lagu Nusantara.
            ";

        }else{

            echo "
            Tetap semangat 💪<br>
            Yuk belajar lagi
            mengenal lagu daerah Indonesia.
            ";
        }

        ?>

    </div>

    <!-- tombol -->

    <div class="button-group">

        <a
        href="reset.php"
        class="result-btn play-again">

            🔄 Main Lagi

        </a>

        <a
        href="index.php"
        class="result-btn home-btn">

            🏠 Home

        </a>

    </div>

</div>

</body>
</html>
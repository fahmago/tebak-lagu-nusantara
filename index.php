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

<style>

.home-container{

    width:100%;
    max-width:850px;

    background:#111827;

    border-radius:35px;

    padding:50px;

    box-shadow:
    0 20px 50px rgba(0,0,0,0.5);

    border:
    1px solid rgba(255,255,255,0.08);

    text-align:center;

    position:relative;

    overflow:hidden;
}

/* glow */

.home-container::before{

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

.home-container::after{

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

.logo{

    font-size:70px;

    margin-bottom:20px;

    position:relative;

    z-index:2;
}

.home-title{

    font-size:48px;

    color:white;

    margin-bottom:15px;

    position:relative;

    z-index:2;
}

.home-subtitle{

    color:#cbd5e1;

    font-size:18px;

    line-height:1.8;

    margin-bottom:35px;

    position:relative;

    z-index:2;
}

/* card fitur */

.feature-grid{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(200px,1fr));

    gap:20px;

    margin-bottom:40px;

    position:relative;

    z-index:2;
}

.feature-card{

    background:#1e293b;

    padding:25px;

    border-radius:20px;

    border:
    1px solid rgba(255,255,255,0.06);

    transition:0.3s;
}

.feature-card:hover{

    transform:
    translateY(-5px);

    box-shadow:
    0 10px 20px rgba(0,0,0,0.3);
}

.feature-icon{

    font-size:40px;

    margin-bottom:15px;
}

.feature-title{

    color:white;

    font-size:20px;

    margin-bottom:10px;
}

.feature-text{

    color:#cbd5e1;

    font-size:15px;

    line-height:1.6;
}

/* tombol */

.play-btn{

    display:inline-block;

    padding:18px 40px;

    border-radius:18px;

    background:
    linear-gradient(
    135deg,
    #2563eb,
    #7c3aed
    );

    color:white;

    text-decoration:none;

    font-size:22px;

    font-weight:bold;

    transition:0.3s;

    position:relative;

    z-index:2;
}

.play-btn:hover{

    transform:
    translateY(-4px)
    scale(1.03);

    box-shadow:
    0 10px 25px rgba(0,0,0,0.35);
}

@media(max-width:600px){

    .home-container{
        padding:30px;
    }

    .home-title{
        font-size:34px;
    }

    .logo{
        font-size:50px;
    }
}

</style>

</head>

<body>

<div class="home-container">

    <div class="logo">
        🎵
    </div>

    <h1 class="home-title">

        Tebak Lagu Nusantara

    </h1>

    <p class="home-subtitle">

        Game edukasi interaktif untuk mengenal
        lagu daerah Indonesia dengan cara yang
        menyenangkan dan modern.

    </p>

    <!-- fitur -->

    <div class="feature-grid">

        <div class="feature-card">

            <div class="feature-icon">
                🎶
            </div>

            <div class="feature-title">
                Audio Lagu
            </div>

            <div class="feature-text">
                Dengarkan potongan lagu daerah
                dan tebak judulnya.
            </div>

        </div>

        <div class="feature-card">

            <div class="feature-icon">
                🔀
            </div>

            <div class="feature-title">
                Fisher-Yates Shuffle
            </div>

            <div class="feature-text">
                Soal diacak otomatis tanpa
                pengulangan.
            </div>

        </div>

        <div class="feature-card">

            <div class="feature-icon">
                🏆
            </div>

            <div class="feature-title">
                Skor Otomatis
            </div>

            <div class="feature-text">
                Dapatkan skor terbaik setiap
                permainan.
            </div>

        </div>

    </div>

    <!-- tombol -->

    <a
    href="reset.php"
    class="play-btn">

        ▶ Mulai Bermain

    </a>

</div>

</body>
</html>
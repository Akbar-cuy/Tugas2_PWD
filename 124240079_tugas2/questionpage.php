<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petualangan Kuliner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="questionpage.css">
</head>
<body>

<div class="container text-center">
    <h1 class="title">Selamat Datang di Petualangan Kuliner</h1>
    <p class="subtitle">Jawab beberapa pertanyaan berikut untuk mengetahui selera kulinermu!</p>

    <form action="result.php" method="POST">
        <div id="questionCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <h4>Pertanyaan 1: Apa jenis makanan kesukaanmu?</h4>
                    <div class="question-container">
                        <label class="option">
                            <input type="radio" name="question1" value="italia" required>
                            <img src="pasta.jpg" alt="Pasta">
                            <span>Pasta</span>
                        </label>
                        <label class="option">
                            <input type="radio" name="question1" value="jepang">
                            <img src="sushi.jpg" alt="Sushi dan Ramen">
                            <span>Sushi dan Ramen</span>
                        </label>
                        <label class="option">
                            <input type="radio" name="question1" value="meksiko">
                            <img src="burrito.jpg" alt="Tacos dan Burritos">
                            <span>Tacos dan Burritos</span>
                        </label>
                    </div>
                </div>

                <div class="carousel-item">
                    <h4>Pertanyaan 2: Apa bahan makanan yang kamu minati?</h4>
                    <div class="question-container">
                        <label class="option">
                            <input type="radio" name="question2" value="italia" required>
                            <img src="cheese.jpg" alt="Cheese">
                            <span>Cheese</span>
                        </label>
                        <label class="option">
                            <input type="radio" name="question2" value="jepang">
                            <img src="seafood.jpg" alt="Seafood">
                            <span>Seafood</span>
                        </label>
                        <label class="option">
                            <input type="radio" name="question2" value="meksiko">
                            <img src="chili.jpg" alt="Chili">
                            <span>Chili</span>
                        </label>
                    </div>
                </div>

                <div class="carousel-item">
                    <h4>Pertanyaan 3: Bagaimana kondisi ruangan sekitar?</h4>
                    <div class="question-container">
                        <label class="option">
                            <input type="radio" name="question3" value="italia" required>
                            <img src="hangat.jpg" alt="Hangat">
                            <span>Hangat</span>
                        </label>
                        <label class="option">
                            <input type="radio" name="question3" value="jepang">
                            <img src="terang.jpg" alt="Terang">
                            <span>Terang</span>
                        </label>
                        <label class="option">
                            <input type="radio" name="question3" value="meksiko">
                            <img src="meriah.jpg" alt="Meriah">
                            <span>Meriah</span>
                        </label>
                    </div>
                </div>

            </div>
        
            <button class="carousel-control-prev" type="button" data-bs-target="#questionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#questionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <button type="submit" class="btn btn-danger mt-3">Cari Tahu</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

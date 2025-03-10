<?php
session_start();

$hasil = $_SESSION['hasil'] ?? '';

$bgClass = '';
if ($hasil == 'MEKSIKO') {
    $bgClass = 'bg-mexico';
} elseif ($hasil == 'JEPANG') {
    $bgClass = 'bg-japan';
} elseif ($hasil == 'ITALIA') {
    $bgClass = 'bg-italy';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $italia = 0;
    $jepang = 0;
    $meksiko = 0;


    if ($_POST["question1"] == "italia") $italia++;
    if ($_POST["question1"] == "jepang") $jepang++;
    if ($_POST["question1"] == "meksiko") $meksiko++;

    if ($_POST["question2"] == "italia") $italia++;
    if ($_POST["question2"] == "jepang") $jepang++;
    if ($_POST["question2"] == "meksiko") $meksiko++;

    if ($_POST["question3"] == "italia") $italia++;
    if ($_POST["question3"] == "jepang") $jepang++;
    if ($_POST["question3"] == "meksiko") $meksiko++;

    $negara = "";
    $deskripsi = "";
    $gambar = "";

    if ($italia >= $jepang && $italia >= $meksiko) {
        $negara = "ITALIA";
        $deskripsi = "Nikmati kelezatan pasta, pizza, dan suasana hangat khas Italia!";
        $gambar = "italy.jpg";
    } elseif ($jepang >= $italia && $jepang >= $meksiko) {
        $negara = "JEPANG";
        $deskripsi = "Temukan kesegaran sushi, ramen, dan budaya kuliner unik dari Jepang!";
        $gambar = "japan.jpg";
    } else if ($meksiko == $jepang && $meksiko == $italia) {
        $hasil = 'TIDAK ADA HASIL';
    } else {
        $negara = "MEKSIKO";
        $deskripsi = "Tingkatkan rasa pedasmu dengan taco, burrito, dan guacamole!";
        $gambar = "mexico.jpg";
    }


    $_SESSION['hasil'] = $negara;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Petualangan Kuliner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="result.css"> 
</head>
<body class="<?= $bgClass ?>"> 
    <div class="result-container">
        <h1 class="result-title">Petualangan Kuliner Kamu Menunggu!</h1>
        <h2 class="result-country"><?php echo $negara; ?></h2>
        <div class="result-img-container">
            <img src="<?php echo $gambar; ?>" alt="<?php echo $negara; ?>" class="result-img">
        </div>
        <p class="result-description"><?php echo $deskripsi; ?></p>
        <a href="landingpage.html" class="btn btn-light result-button">Coba Lagi</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .foto{
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.7)), url(math.jpg);
        min-height: 100vh;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: stretch;
        }

        .card {
            box-shadow: 3px 3px 8px rgba(114, 108, 111, 0.8);
        }

        .btn:hover{
            letter-spacing: .1rem;
        }
    </style>
</head>
<body class="bg-light">

<?php include 'header.php'; ?>

<div class = "foto" id = "intro">
    <div class="container py-5">
        <h2 class="text-center">Hasil Perhitungan</h2>
        <?php
        // Mengambil nilai variabel dari halaman input
        $nilai_a = $_POST['nilai_a'];
        $nilai_b = $_POST['nilai_b'];
        $sudut_Y = $_POST['sudut_Y'];

        // Menghitung panjang sisi c menggunakan fungsi hukum kosinus
        $sudut_Y_rad = deg2rad($sudut_Y);
        $panjang_sisi_c = sqrt(pow($nilai_a, 2) + pow($nilai_b, 2) - 2 * $nilai_a * $nilai_b * cos($sudut_Y_rad));
        ?>
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
            <div class="card mb-4">
                <div class="card-body text-center">
                <ul class="list-unstyled text-center">
                        <h2>Nilai Variabel yang Dimasukkan</h2>
                        <li>Nilai a: <?php echo $nilai_a; ?></li>
                        <li>Nilai b: <?php echo $nilai_b; ?></li>
                        <li>Sudut Y (dalam derajat): <?php echo $sudut_Y; ?></li>
                </ul>
                <p class="lead"><h2>Rumus Hukum Kosinus:</h2></p>
                    <img src="rumus.png" alt="Rumus Hukum Kosinus" class="img-fluid mb-3 mx-auto d-block">
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                <p class="lead"><h2>Hasil Perhitungan:</h2></p>
                    <ul class="list-unstyled text-center">
                        <li>Panjang Sisi C adalah <b><?php echo $panjang_sisi_c; ?></b></li>
                    </ul>
                    <form action="input.php" method="post">
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <input type="submit" value="Kembali" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trigonometri Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
<body>

<?php include 'header.php'; ?>

<div class = "foto" id = "intro">
    <div class="container py-5">
        <div class="row mt-4">
            <!-- Bagian kiri untuk input nilai variabel -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>Input Nilai Variabel</h2>
                            <form action="output.php" method="post">
                                <label for="nilai_a" class="form-label">Nilai a :</label>
                                <input type="number" id="nilai_a" name="nilai_a" class="form-control" required><br>

                                <label for="nilai_b" class="form-label">Nilai b :</label>
                                <input type="number" id="nilai_b" name="nilai_b" class="form-control" required><br>

                                <label for="sudut_Y" class="form-label">Sudut Y (dalam derajat) :</label>
                                <input type="number" id="sudut_c" name="sudut_Y" class="form-control" required><br>
                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <input type="submit" value="Hitung" class="btn btn-dark">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian kanan untuk definisi rumus dan penjelasan -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Definisi Rumus</h2>
                        <p>Rumus hukum cosinus digunakan untuk menghitung panjang sisi segitiga yang tidak diketahui berdasarkan panjang dua sisi yang diketahui dan sudut di antara kedua sisi tersebut.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>Penjelasan Rumus</h2>
                        <p>Rumus hukum cosinus:</p>
                        <img src="rumus.png" alt="Foto Rumus">
                        <ul>
                            <li>c adalah panjang sisi yang tidak diketahui.</li>
                            <li>a dan b adalah panjang dua sisi yang diketahui.</li>
                            <li>Y adalah sudut di antara kedua sisi \( a \) dan \( b \).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
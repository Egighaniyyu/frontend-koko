<?php
$sumber = 'http://127.0.0.1:8000/api/tanaman-hias';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&family=Poppins:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/product.css">

    <title>Hello, world!</title>
</head>

<body>
    <section id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Koko Garden</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link active" href="#">Home</a>
                            <a class="nav-link" href="#">Why Choose Us</a>
                            <a class="nav-link" href="#">Location</a>
                            <a class="nav-product">Product</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section id="product">
        <div class="container">
            <div class="text-center">
                <h1 class="mt-5 text-header-color">Produk</h1>
                <p class="text-small mb-5">Temukan Tanaman Yang Berkualitas Hanya Di Koko Garden</p>
                <div class="row">
                    <?php foreach ($data as $produk) : ?>
                        <div class="col-md-4 mb-3 ">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $produk['img']; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $produk['nama_tanaman']; ?></h5>
                                    <p class="card-text">IDR <?= $produk['harga']; ?></p>
                                    <a href="#" class="mt-2 btn-detail">Beli</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>

    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
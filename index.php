<?php
session_start();
include_once 'Connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Halaman dashboard</title>
</head>

<body>
  <div class="container ">
    <nav class="navbar navbar-light bg-success object-fit-cover border rounded mt-3">
      <div class="container-fluid">
        <a class="navbar-brand"><img src="image/laptop.png " width="50" class="rounded float-start" alt=""></a>

      </div>
    </nav>
    <div class="container">

      <figure class="text-center mt-4">
        <blockquote class="blockquote">
          <p>Rolan Seprian Store</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">Data Pembeli</cite>
        </figcaption>
      </figure>
      <h1>Selamat Datang</h1>
      <h6>Rolan Seprian Store</h6>
      <p>Harga laptop merupakan harga device penting yang selalu dipertimbangkan banyak kalangan. Hal ini karena laptop selalu dapat dindalkan terutama karena kemampuan laptop beberapa tahun terakhir mengalami peningkatan. Laptop yang dirilis di tahun sebelumnya atau laptop tahun ini memiliki spesifikasi yang jauh lebih canggih namun dengan harga laptop yang jauh lebih terjangkau bahkan lebih murah. Hal ini tentu menguntungkan Anda sebagai seorang personal atau sebagai penyedia kebutuhan perangkat pada korporasi.

      </p>
      <a href="login.php">
        <button type="button" class="btn btn-primary mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill m-2" viewBox="0 0 16 16">
            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z" />
          </svg>Masuk
        </button>
      </a><br>
    </div>
</body>

</html>
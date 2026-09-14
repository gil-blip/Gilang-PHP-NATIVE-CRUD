<?php

include 'koneksi1.php';

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM tabelnama WHERE id = '$id'"
);

$data = mysqli_fetch_assoc($query);


if (isset($_POST['update'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $gmail = $_POST['email'];


    $query = "UPDATE tabelnama SET

                nis = '$nis',
                nama = '$nama',
                umur = '$umur',
                email = '$gmail'

              WHERE id = '$id'";


    mysqli_query($koneksi, $query);


    header("Location: home.php");

    exit;
}

?>


<!doctype html>

<html lang="en">


<head>

    <meta charset="utf-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1">

    <title>Edit Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>


<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">

            <a class="navbar-brand" href="home.php">
                StudentAPP
            </a>

        </div>

    </nav>


    <div class="container mt-5">

        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">
                    Edit Data Siswa
                </h5>

            </div>


            <div class="card-body">


                <form method="post">


                    <!-- NIS -->

                    <div class="mb-3">

                        <label class="form-label">
                            NIS
                        </label>

                        <input type="text"
                            name="nis"
                            class="form-control"
                            value="<?= $data['nis']; ?>"
                            required>

                    </div>


                    <!-- NAMA -->

                    <div class="mb-3">

                        <label class="form-label">
                            Nama
                        </label>

                        <input type="text"
                            name="nama"
                            class="form-control"
                            value="<?= $data['nama']; ?>"
                            required>

                    </div>


                    <!-- UMUR -->

                    <div class="mb-3">

                        <label class="form-label">
                            Umur
                        </label>

                        <input type="number"
                            name="umur"
                            class="form-control"
                            value="<?= $data['umur']; ?>"
                            required>

                    </div>


                    <!-- GMAIL -->

                    <div class="mb-3">

                        <label class="form-label">
                            Gmail
                        </label>

                        <input type="email"
                            name="email"
                            class="form-control"
                            value="<?= $data['email']; ?>"
                            required>

                    </div>


                    <button type="submit"
                        name="update"
                        class="btn btn-primary">

                        Update

                    </button>


                    <a href="home.php"
                        class="btn btn-secondary">

                        Kembali

                    </a>


                </form>


            </div>

        </div>

    </div>


</body>

</html>
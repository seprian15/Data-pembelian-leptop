<?php
$conn = mysqli_connect("localhost", "root", "", "db_laptop");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $tanggal_lahir = ($data["tanggal_lahir"]);
    $jenis_kelamin = ($data["jenis_kelamin"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $merk_laptop = htmlspecialchars($data["merk_laptop"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO data_laptop VALUES ('','$nama','$alamat','$email','$tanggal_lahir',
  '$jenis_kelamin','$telepon','$merk_laptop','$jenis','$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
            alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }
    $gambarvalid = ['jpg', 'jpeg', 'png'];
    $eksengambar = explode('.', $namaFile);
    $eksengambar = strtolower(end($eksengambar));
    if (!in_array($eksengambar, $gambarvalid)) {
        echo "<script>
            alert('silakan pilih gambar kembali');
        </script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran foto terlalu besar');
    </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $eksengambar;
    move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_laptop WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $email = htmlspecialchars($data["email"]);
    $tanggal_lahir = ($data["tanggal_lahir"]);
    $jenis_kelamin = ($data["jenis_kelamin"]);
    $merk_laptop = htmlspecialchars($data["merk_laptop"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE data_laptop SET nama ='$nama', alamat ='$alamat',
  email = '$email', tanggal_lahir= '$tanggal_lahir',
  jenis_kelamin = '$jenis_kelamin', telepon = '$telepon', merk_laptop = '$merk_laptop', jenis = '$jenis',gambar = '$gambar'
  WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($key)
{
    $query = "SELECT * FROM data_laptop WHERE 
    nama LIKE '%$key%' OR
    alamat LIKE '%$key%' OR
    email LIKE '%$key%' OR
    merk_laptop LIKE '%$key%' OR
    jenis LIKE '%$key%'
    ";

    return query($query);
}

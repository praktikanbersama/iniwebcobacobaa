<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];

    echo "<head><title>My Guest Book</head></title>";
    $fp = fopen("guestbook.txt", "a+");
    fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
    fclose($fp);

    echo "Terimakasih atas Partisipasi Anda mengisi buku Tamu";
    echo "<a href=tampilan.html> Isi Buku Tamu </a><br>";
    echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
?>
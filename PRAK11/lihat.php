<?php 
    echo "<head><title>My Guest Book</head></title>";
    $fp = fopen("guestbook.txt", "a+");
    echo "<table border=0>";

    while($isi = fgets($fp, 80)) {
        $pisah = explode("|", $isi);
        echo "<tr><td> Nama : </td><td> $pisah[0] </td></tr>";
        echo "<tr><td> Alamat : </td><td> $pisah[1] </td></tr>";
        echo "<tr><td> Email : </td><td> $pisah[2] </td></tr>";
        echo "<tr><td> Status : </td><td> $pisah[3] </td></tr>";
        echo "<tr><td> Komentar : </td><td> $pisah[4] </td></tr>";
        echo "<tr><td> &nbsp; <hr></td></td> &nbsp; <hr></td></tr>";
    }

    echo "</table>";
    echo "<a href=tampilan.php> Klik Disini </a> Isi Form Buku Tamu";
?>
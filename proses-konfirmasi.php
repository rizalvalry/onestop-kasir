<?php
    include "include/koneksi.php";

    $No_Order 		=  $_GET['No_Order'];
    $Tanggal 		=  date('Y-m-d H:i:s');
    $status 		=  "selesai";

          $sql = "UPDATE `transaksi` SET `Tgl_Ambil`='$Tanggal', `status`='$status' WHERE `No_Order` = '$No_Order'";
          $kueri = mysqli_query($conn, $sql);
          echo "<script language='javascript'>alert('Pakaian Sudah Diambil');</script>";
          echo '<meta http-equiv="refresh" content="0; url=transaksi.php">';

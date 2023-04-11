<?php
    include("konfigurasi.php");
   
  $hasil = mysqli_connect(DBHOST,DBUSER,DBPASS);

  if($hasil){
    echo "koneksi ke Mysql sukses";
  }else{
        echo "koneksi ke Mysql gagal";   
    }
  
<?php
  // Variable user
  $nama = 'Mochamad Noval Ilham Maliki';
  $umur = 19;
  $berat = 37;

  

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
  echo "<br />";
  echo "<h3 style='color: cyan'>Nama saya $nama, umur saya $umur, berat saya $berat</h3>";
  echo "<br />";

  // Variable sistem
  // variable built in php
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variable konstan
  // adalah variable yang tidak bisa diubah nilainya
  define('makanan', 'sushi');
  // define('makanan', 'jambu');
  echo '<h1 style="color: blue">'.makanan.'</h1>';
  echo makanan;
?>
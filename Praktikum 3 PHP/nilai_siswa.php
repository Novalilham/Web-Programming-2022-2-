<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
           body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        font-size: 30px;
    }
        
                .header {
        margin-bottom: 5px;
        padding: 2px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h4>Sistem Penilaian</h4>
    </div>
    <div class="m-5 border border-success p-4 rounded">
    <?php
        $nilai_akhir = ($_POST['nilai_uts'] + $_POST['nilai_uas'] + $_POST['nilai_tugas']) / 3;
     echo 'Nama : '. $_POST['nama'] . '<br/>';
     echo 'Mata Kuliah : '. $_POST['matkul'] . '<br/>';
     echo 'Nilai UTS : '. $_POST['nilai_uts'] . '<br/>';
     echo 'Nilai UAS : '. $_POST['nilai_uas'] . '<br/>';
     echo 'Nilai Tugas : '. $_POST['nilai_tugas']. '<br/>';
     echo 'Nilai Akhir : ' .$nilai_akhir .'<br/>';
     
    if($nilai_akhir <= 35){
        echo 'Grade : E = "Sangat Kurang" ';
    }elseif($nilai_akhir >=36 && $nilai_akhir <=55){
        echo 'Grade : D = "Kurang" ';
    }elseif($nilai_akhir >=56 && $nilai_akhir <=69){
        echo 'Grade : C = "Cukup" ';
    }elseif($nilai_akhir >=70 && $nilai_akhir <=84){
        echo 'Grade : B = "Memuaskan" ';
    }elseif($nilai_akhir >=85 && $nilai_akhir <=100){
        echo 'Grade : A = "Sangat Memuaskan" ';
    }else{
        echo 'Grade : I = "Tidak Ada" ';
    }
    ?>
     </div>
</body>
</html>

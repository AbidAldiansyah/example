<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="nama" placeholder="nama lengkap" id=""><br>
        <input type="text" name="nilai_uts" placeholder="nilai_uts" id=""><br>
        <input type="text" name="nilai_uas" placeholder="nilai_uas" id="">
        <button>kirim data</button>
    </form>

    <?php

    
    $nama = $_GET ['nama'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $total = ($_GET['nilai_uts'] + $_GET['nilai_uas']);


    if ($total > 90){
        $nilai ='A';
    } elseif ($total > 80) {
        $nilai ='B';
    } elseif ($total > 70) {
        $nilai ='C';
    } elseif ($total > 60){
        $nilai = 'D';
    } elseif ($total <= 60) {
        $nilai = 'E';
    }


    echo 'nama: '.$nama;
    echo 'nilai uts: '.$nilai_uts;
    echo 'nilai uas: '.$nilai_uas;
    echo 'total nilai: '.$total;
    echo 'predikat nilai: '.$nilai;
    
    ?>    
</body>
</html>
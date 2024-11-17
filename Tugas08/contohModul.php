<?php

    echo "<h3>Contoh IF</h3>";
    //contoh penggunaan if
    $total_belanja = 150000;

    if($total_belanja > 100000){
        echo "Anda dapat hadiah!";
    }
    echo "<hr>";

    echo "<h3>Contoh IF Else</h3>";
    //contoh penggunaan if else
    $umur = 13;

    if ($umur < 18 ){
        echo "Kamu tidak boleh membuka situs ini!";
    } else {
        echo "Selamat datang di website kami!";
    }
    echo "<hr>";

    echo "<h3>Contoh IF/elseIf/else</h3>";
    //contoh penggunaan if elseif else
    $nilai = 88;

    if ($nilai > 90) {
        $grade = "A+";
    } elseif($nilai > 80){
        $grade = "A";
    } elseif($nilai > 70){
        $grade = "B+";
    } elseif($nilai > 60){
        $grade = "B";
    } elseif($nilai > 50){
        $grade = "C+";
    } elseif($nilai > 40){
        $grade = "C";
    } elseif($nilai > 30){
        $grade = "D";
    } elseif($nilai > 20){
        $grade = "E";
    } else {
        $grade = "F";
    }

    echo "Nilai anda: $nilai<br>";
    echo "Grade: $grade";
    echo "<hr>";

    echo "<h3>Contoh Switch case</h3>";
    //contoh penggunaan switch case
    $level = 3;

    switch($level){
        case 1:
            echo "Pelajari HTML";
            break;
        case 2:
            echo "Pelajari CSS";
            break;
        case 3:
            echo "Pelajari Javascript";
            break;
        case 4:
            echo "Pelajari PHP";
            break;
        default:
            echo "Kamu bukan programmer!";
    }

?>

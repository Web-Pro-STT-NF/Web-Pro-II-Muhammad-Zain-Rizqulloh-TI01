<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<header>Sistem Penilaian</header><br>


    <?php
    error_reporting(0);
    $proses= $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];


 
        echo 'Hasil Form: ' .$proses;
        echo '<br/>Nama: ' .$nama_siswa;
        echo '<br/>Nmata kuliah: ' .$mata_kuliah;
        echo '<br/>Nilai UTS: ' .$nilai_uts;
        echo '<br/>Nilai UAS: ' .$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum: ' .$nilai_tugas; 


        if (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100) > 55 ) {
            $ket = 'Lulus';
        }

            else {
                $ket = 'Tidak Lulus';
            }

        echo '<br/>Keterangan: ' .$ket;

        if (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 35 ) {
            $grade = 'E';
        }
            elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 55 ) {
                $grade = 'D';
            }
            elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 69 ) {
                $grade = 'C';
            }
            elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 84 ) {
                $grade = 'B';
            }
            elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 100 ) {
                $grade = 'A';
            }
            else {
                $grade = 'I';
            }
        echo '<br/>Grade Nilai: ' .$grade;

        switch ($grade) {
            case "I":
                echo ", Tidak ada";
                break;
            case "A":
            echo ", Sangat memuaskan";
            break;
            case "B":
            echo ", Memuaskan";
            break;
            case "C":
            echo ", Cukup";
            break;
            case "D":
            echo ", Kurang";
            break;
            case "E":
            echo ", Sangat kurang";
            break;
            default:
            echo ", Status Nilai = Belum terinput";
        }


    ?>

<footer>Develop by @zainrizqulloh. Copyright 2022</footer>
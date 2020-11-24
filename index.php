<?php
$no = array("1", "2", "3");
$nama = array("Cristiano Messi", "Bejo Leonardo", "Alfa Midi");
$tbadan = array("180", "167", "190");
$posisi = array("Striker", "Midfielder", "Defender");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>UTS-DPW</title>
</head>

<body style="background-color:#495057;">
    <header class="text-white">
        <h2 style="text-align: center;">Ujian Tengah Semester Desain Pemrograman Web</h2>
    </header>
    <section>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tinggi Badan</th>
                    <th scope="col">Posisi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $no[0] ?></td>
                    <td><?= $nama[0] ?></td>
                    <td><?= $tbadan[0] ?></td>
                    <td><?= $posisi[0] ?></td>
                </tr>
                <tr>
                    <td><?= $no[1] ?></td>
                    <td><?= $nama[1] ?></td>
                    <td><?= $tbadan[1] ?></td>
                    <td><?= $posisi[1] ?></td>
                </tr>
                <tr>
                    <td><?= $no[2] ?></td>
                    <td><?= $nama[2] ?></td>
                    <td><?= $tbadan[2] ?></td>
                    <td><?= $posisi[2] ?></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>
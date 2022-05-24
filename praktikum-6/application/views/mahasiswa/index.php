<h1>Daftar mahasiswa</h1>


<table border='1' width='50%'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama Mahasiswa</th>
            <th>Gender</th>
            <th>ipk</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($list_mahasiswa as $obj){
    ?>    
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->nim?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->gender?></td>
            <td><?=$obj->ipk?></td>
            <td><?=$obj->predikat()?></td>
        </tr>
    <?php
    $nomor++;
    }
    ?>
    </tbody>
</table>
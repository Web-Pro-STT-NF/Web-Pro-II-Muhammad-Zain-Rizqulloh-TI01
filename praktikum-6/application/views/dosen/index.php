<h1>Daftar Dosen</h1>


<table border='1' width='50%'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nidn</th>
            <th>Nama Dosen</th>
            <th>Gender</th>
            <th>Pendidikan</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($list_dosen as $obj){
    ?>    
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->nidn?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->gender?></td>
            <td><?=$obj->pendidikan?></td>
        </tr>
    <?php
    $nomor++;
    }
    ?>
    </tbody>
</table>
<h1>Daftar Matakuliah</h1>


<table border='1' width='50%'>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS Perkuliahan</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($list_matakuliah as $obj){
    ?>    
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->kode?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->sks?></td>
        </tr>
    <?php
    $nomor++;
    }
    ?>
    </tbody>
</table>
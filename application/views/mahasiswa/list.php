<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <thead>
        <tr><th>NIM</th>
        <th>NAMA</th>
        <th>ID JURUSAN</th>
        <th>ALAMAT</th>
        <th>ACTION</th></tr>
    </thead>
    <tbody>
        <?php
    foreach ($mahasiswa as $m){
        echo "<tr>
              <td>$m->nim</td>
              <td>$m->nama</td>
              <td>$m->id_jurusan</td>
              <td>$m->alamat</td>
              <td>".anchor('mahasiswa/edit/'.$m->nim,'Edit')."
                  ".anchor('mahasiswa/delete/'.$m->nim,'Delete')."</td>
              </tr>";
    }
    ?>
    </tbody>
    
</table>
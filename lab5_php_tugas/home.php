<?php
$database = new Database();
$data = $database->main("tb_lab5");
?>
<div class="main">
    <a class="tambah" href="add">tambah</a>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach($data as $row) {
        ?>
            <tr>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama']; ?></td>
            <td><?=$row['kelas']; ?></td>
            <td>
              <a href="update?nim=<?= $row['nim']; ?>"><button>update</button></a>
              <a href="delete?nim=<?= $row['nim']; ?>"><button>delete</button></a>
            </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
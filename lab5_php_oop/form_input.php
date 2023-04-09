<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";
include "database.php";
$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas']
    ];
    $database->insert("tb_lab5", $data);
}

echo "<html><head><link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" /><title>Mahasiswa</title></head><body><div class=\"container\">";
$form = new Form("form_input.php","submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("kelas", "Kelas");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";

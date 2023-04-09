<?php

include "form.php";
include "database.php";
$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas']
    ];
    $database->update("tb_lab5", $data, "nim=" . $nim);
    header("location: form_input.php");
}

$data = $database->get("tb_lab5", "where nim=" . $nim);

echo "<html><head><link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" /><title>Mahasiswa</title></head><body><div class=\"container\">";
$form = new Form("", "submit");
$form->addField("nim", "Nim", $data["nim"]);
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("kelas", "Kelas", $data["kelas"]);
$form->displayForm();
echo "</div></body></html>";

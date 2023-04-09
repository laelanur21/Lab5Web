<?php

require("database.php");
require_once("header.php");
require_once("form.php");

 class lab5{
    private $config = [];
    public function __construct($tugas)
    {
        $this->config=$tugas;
    }
    public function a($lab5){
        if (array_key_exists($lab5,$this->config)){
            require($this->config[$lab5]);
        }
        else{
            require($this->config["home"]);
        }
    }
}

$url=[
    "home"=>"home.php",
    "about"=>"about.php",
    "contact"=>"contact.php",
    "add"=>"add.php",
    "update"=>"update.php",
    "delete"=>"delete.php"
];
$web = new lab5($url);
$web->a(@$_REQUEST["mod"]);
require_once("footer.php");
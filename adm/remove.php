<?php

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    include_once'../MJcode.php';
    $MJcode = new MJcode();
    $MJcode->deleteContact($_GET['id']);
}
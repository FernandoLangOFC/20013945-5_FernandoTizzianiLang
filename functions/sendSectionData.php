<?php
    include("./data/data.php");
    session_start();
    function setSection($item_arr){
        $_SESSION["item_id"]= $item_arr['id'];
    }
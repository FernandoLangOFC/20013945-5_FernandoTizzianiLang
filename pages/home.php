<?php

    include("data/data.php");
    include("functions/sendSectionData.php");

    foreach($data as $d){
        $img = $d['src'];
        $title = $d['item_name'];
        $price = $d['price'];
        $item_id = $d['id'];
        $desc = $d['description'];
        $param = http_build_query(array("asParam" => $d));
        echo "
            <div id='mycard' class='card' style='height: 60%; width: 18rem;  -webkit-filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.576) ); filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.576));'>
                <img class='{$item_id} card-img-top' src='{$img}' alt='aaaaaaaaa'/> 
                <div class='card-body'>
                    <h5 class='{$item_id} card-title'> {$title} </h5>
                    <p class='{$item_id} card-text' style='width: 30ch '>"."R$ " .number_format($price, 2, ',', '.')  ." unidade</br> {$desc} </p>
                    <a id='". $item_id ."'  class='btn btn-primary ' href='./pages/item.php?{$param}' target='_blank'>go</a>
                </div>
            </div>
        ";
       
        
    }
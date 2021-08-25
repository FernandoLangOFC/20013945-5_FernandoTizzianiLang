<?php
    include("data/data.php");

    foreach($data as $d){
        $img = $d['src'];
        $title = $d['item_name'];
        $price = $d['price'];
        echo "
            <div id='mycard' class='card' style='width: 18rem;'>

                <img class='card-img-top' src='{$img}' alt='aaaaaaaaa'/> 
                <div class='card-body'>
                    <h5 class='card-title'> {$title} </h5>
                    <p class='card-text'>"."R$ " .number_format($price, 2, ',', '.')  ." </p>
        

                    <a class='btn btn-primary ' href='' target='_blank'>go</a>

                </div>
            </div>
        ";
        
    }
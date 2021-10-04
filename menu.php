<?php
    $items = [
        "formations" => "Nos formations",
        "about" => "À propos",
        "contact" => "Contact",
    ];

    foreach($items as $url => $menuText){
        echo "<li><a href='{$url}.php'>{$menuText}</a></li>";
    }
?>
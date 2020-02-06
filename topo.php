<?php

    $landen = array("Japan"=>"tokyo", "mexico"=>"mexico city", "USA"=>"washington D.C.", "india"=>"new delhi", "zuid-korea"=>"seoul", "china"=>"peking", "nigeria"=>"abuja", "argentina"=>"buenos aires", "egypt"=>"cairo", "UK"=>"london");


    foreach($landen as $land => $val){
        echo("Wat is de hoofdstad van ".$land.PHP_EOL);
        $hoofdstad = readline();

        if ($hoofdstad == $val){
            echo("dat klopt ga maar door".PHP_EOL);
        } else {
            echo("helaas $hoofdstad is niet de hoofdstad van $land");
            exit;
        }
    }
?>
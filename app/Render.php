<?php

namespace  ITApp;

class Render{

    static public function Show($data){
        foreach ($data as $item=> $itemValue){
            echo "<tr><td>";
            echo $item;
            echo $itemValue;
            echo "</td></tr>";
        }
    }
}

<?php
    $arr = array("The_Magnificent_Sand_Structures", "Mont_Saint_Michel_Abbey", "The_Butterfly_Island", "Utah_Natural_Bridges", "Moraine_Lake", "Bloomingdale", "Multnomah_Falls", "Tropical_Rainforests", "The_Cagition_Valley", "Lago_Federa");
    
    $ass_arr = array();
    foreach ($arr as $cookie_name) {
        if(isset($_COOKIE[$cookie_name])) {
            $ass_arr[$cookie_name] = unserialize($_COOKIE[$cookie_name])[$cookie_value_index];
        }   
    }
    
    arsort($ass_arr);

    $count = 0;
    foreach ($ass_arr as $key=>$value){
    	$count += 1;
    	echo "<h3>".$count.". ".$key."</h3>"; 
    	echo "<br>";
    	if($count == 5){
    	    break;
    	}
    }
?>

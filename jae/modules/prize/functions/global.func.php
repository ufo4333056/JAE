<?php 

function get_rand($proArr) { 
    $result = ''; 
    //����������ܸ��ʾ��� 
    $proSum = array_sum($proArr); 
 
    //��������ѭ�� 
    foreach ($proArr as $key => $proCur) { 
        $randNum = mt_rand(1, $proSum); 
        if ($randNum <= $proCur) { 
            $result = $key; 
            break; 
        } else { 
            $proSum -= $proCur; 
        } 
    } 
    unset ($proArr); 
 
    return $result; 
} 

?>
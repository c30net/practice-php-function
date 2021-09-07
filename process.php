<?php

$contacts = array (
    array("name" => "Morteza Avini", "phone" => '09362013001', "sex" => "male"),
    array("name" => "Kolsom Barati", "phone" => "09362013002", "sex" => "female"),
    array("name" => "Mohsen Rezai", "phone" => "09362013003", "sex" => "male"),
    array("name" => "Anna Turki", "phone" => "09362013004", "sex" => "female")
);

if(!empty($_POST['inputSp'])){
    $searchKey = $_POST['inputSp'];
    $i = 0;
    $str = '';
    foreach($contacts as $contact){
        if(stripos($contact['phone'], $searchKey) !== false ){
            $str .= '<div>'.$contact['name'].' ('.$contact['phone'].') '.'</div>'.PHP_EOL;
            $i++;
        }
    }
    $str = str_ireplace($searchKey, "<b>$searchKey</b>", $str);
    if($i == 0) {
        echo 'Not Found';
    } else {
        echo $str;
    }
}



if(!empty($_POST['inputSc'])){
    $searchKey = $_POST['inputSc'];
    $i = 0;
    $str = '';
    foreach($contacts as $contact){
        if(stripos($contact['name'], $searchKey) !== false ){
            $str .= '<div>'.$contact['name'].' ('.$contact['phone'].') '.'</div>'.PHP_EOL;
            $i++;
        }
    }
    $str = str_ireplace($searchKey, "<b>$searchKey</b>", $str);
    if($i == 0) {
        echo 'Not Found';
    } else {
        echo $str;
    }
}


if(!empty($_POST['sex'])){
    $sex = $_POST['sex'];
    $i = 0;
    $str = '';
    foreach($contacts as $contact){
        if($contact['sex'] === $sex or $sex === 'all'){
            $str .= '<div>'.$contact['name'].' ('.$contact['phone'].') '.'</div>'.PHP_EOL;
            $i++;
        }
    }

    if($i === 0) {
        echo 'Not Found';
    } else {
        echo $str;
    }
}

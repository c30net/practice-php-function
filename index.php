<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




</head>
<body>
<?php
$contacts = array (
  array("name" => "Morteza Avini", "phone" => '09362013001', "sex" => "male"),
  array("name" => "Kolsom Barati", "phone" => "09362013002", "sex" => "female"),
  array("name" => "Mohsen Rezai", "phone" => "09362013003", "sex" => "male"),
  array("name" => "Anna Turki", "phone" => "09362013004", "sex" => "female")
);
?>


<form action="" method="post">
    <fieldset class="form-group">
        <input type="text" name="sp" placeholder="Search Phone" class="form-control col-md-3 m-2">
        <button class="btn btn-info m-2" type="submit">Search Phone</button>
    </fieldset>
</form>


<form action="" method="post">
    <fieldset class="form-group">
        <input type="text" name="sc" placeholder="Search Name" class="form-control col-md-3 m-2">
        <button class="btn btn-primary m-2" type="submit">Search Contacts</button>
    </fieldset>
</form>



<form method="post">
    <fieldset class="form-group ml-3 ">
        <select name="sex">
            <option value="all">All</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <button class="btn btn-dark m-2" type="submit">List</button>
    </fieldset>
</form>



<?php


if(!empty($_POST['sp'])){
    $searchKey = $_POST['sp'];
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



if(!empty($_POST['sc'])){
    $searchKey = $_POST['sc'];
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

?>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
include_once 'connect.php';
include_once 'cities.php';
if(!empty($_GET['id'])){
    $id = $_GET['id'];
    foreach ($regions as $region=>$value){
        if($id == $region){
           $region_id = $value;
            $result = mysqli_query($link,"SELECT title_ru FROM _cities _regions WHERE region_id=$region_id");
            $cities = mysqli_fetch_all($result);
            break;
        }
    }
    foreach ($cities as $city=>$value){
        foreach ($value as $v){
            echo $v.'<br>';
        }
    }
}
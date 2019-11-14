<?php
include_once 'connect.php';
include_once 'cities.php';
$result = mysqli_query($link,"SELECT title_ru FROM _regions WHERE country_id=2");
$regions = mysqli_fetch_all($result);
//echo '<pre>';
//var_dump($regions);
foreach ($regions as $region=>$value){
    foreach ($value as $v){
        ?>
        <a href="city.php?id=<?php foreach ($cities as $city=>$val){
            if($val == $v){
                echo $city;
            }
        }?>"><?php echo $v?></a><br>
        <?php
    }
}
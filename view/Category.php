<?php
echo '<li class = "submenuunit"><a href = "all">All</a></li></br>';
foreach($arr as $value) {
    echo '<li class = "submenuunit"><a href ="categoria?id='.$value['id'].'">'.$value['Name'].'</a></li></ br>';
}
?>



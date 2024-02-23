<?php

include '../classes/showdata_class.php';

if(isset($_POST['user'])){
    $showdata = new Showdata();
    $data = $showdata->show_all_data();
    print_r(json_encode($data)); 
}


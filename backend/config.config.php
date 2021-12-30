<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$con = mysqli_connect("localhost", "root", "", "crudajax") OR die("Cannot connect to this DB");

$datas = array();

if(isset($_GET['action'])){
    if($_GET['action'] == 'All'){
        $datas['items'][] = {
            {'name': "Grace",
                "age": 24},
                {'name': "Mapendano",
                "age": 24}
        }
        print json_encode(datas);
    }
}
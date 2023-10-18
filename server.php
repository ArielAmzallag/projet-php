<?php

//$_SERVER => HASHMAP contenat
//information requete

function route_request(){
    $route = $_SERVER['REQUEST_URI'];

    if ($route === "/tutu"){
        
        require_once('./displayTasks/controller.php');
        display_tasks();

        return;
    }

   


    echo "<h1>404 NOT FOUND</h1>";

}
route_request();
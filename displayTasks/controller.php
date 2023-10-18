<?php 

require_once './tutu/view.php';

function display_tasks(){

    $tasks = get_tasks();
    $html = display_tasks_view($tasks);
    echo $html;

}


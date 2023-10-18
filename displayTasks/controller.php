<?php

require_once 'view.php';
require_once 'data.php';

class Controller {
    
    public static function display_main_page(){
        $data = Data::get_main_page_data();
        display_main_page($data);
    }
    
    // ... other controller actions
}

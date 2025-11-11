<?php
namespace BlockWise\App\Helpers;

class WPMenuHelpers {
    use SingletonTrait;

    public function something() {
        wp_die('this is working');
    }
    
}
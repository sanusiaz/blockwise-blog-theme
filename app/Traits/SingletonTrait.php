<?php
/**
 * Signelton Trait
 * 
 * @package blockwise
 */

namespace Blockwise\App\Traits;

trait SingletonTrait {

    // prevents objects cloning
    public function __clone() {}

    final public static function getInstance() {
        static $instance = [];
        $calledClass = get_called_class();
        
        if ( !isset( $instance[$calledClass] ) ) {
            // create a new instance of the class
            $instance[$calledClass] = new $calledClass;

            // just incase theme wants to inject here
            do_action( sprintf('blockwise_theme_singleton_init%s', $calledClass) );
        }

        return $instance[$calledClass];
    }
}
<?php
/**
 * Theme autoloader
 * This function uses spl_autoload_register to load classes based on the
 * PSR-4 naming convention.
 * 
 * @param string $base_directory The absolute path to the directory *containing* the 'app' folder.
 * Usually, this is just __DIR__ / Theme Directory.
 * @package BlockWise
 */

function register_blockwise_autoloader( $base_directory ) {
    /**
     * The autoloader function.
     *
     * @param string $class_name The fully qualified class name (e.g., BlockWise\App\Services\ExampleService).
     */
    $autoloader_function = function( $class_name ) use ( $base_directory ) {
        
        // Define the namespace prefix we are responsible for.
        $namespace_prefix = 'BlockWise\\App\\';

        // Check if the requested class uses our namespace prefix.
        // strncmp is faster than substr for this.
        if ( strncmp( $namespace_prefix, $class_name, strlen( $namespace_prefix ) ) !== 0 ) {
            // No, it's not our class. Return and let another autoloader (if any) handle it.
            return;
        }

        // Get the part of the class name *after* the prefix.
        // e.g., "Services\ExampleService" from "BlockWise\APP\Services\ExampleService"
        $relative_class = substr( $class_name, strlen( $namespace_prefix ) );

        // Build the file path.
        // - Replace namespace separators (\) with directory separators (DIRECTORY_SEPARATOR)
        // - Append .php
        
        $file_path = $base_directory . '/app/' . str_replace( '\\', DIRECTORY_SEPARATOR, $relative_class ) . '.php';

        // 5. If the file exists, require it.
        if ( file_exists( $file_path ) ) {
            require_once $file_path;
        }
    };

    spl_autoload_register($autoloader_function);
}

<?php
spl_autoload_register('load_all_clases_in_folder');
// it run in file you include index.php 
// how it run?


function load_all_clases_in_folder($className)
{
    $file_path = 'E:\xampp\htdocs\lern-php\php-oop\how_include_files_together\classes/' . $className . '.php';
    // $file_path = str_replace('\\', DIRECTORY_SEPARATOR, $file_path); // Handle namespaces on different operating systems

    if (file_exists($file_path)) {

        include_once $file_path;
    } else {
        // Handle autoload failure gracefully
        echo "Class file not found: $file_path";
    }
}
?>
<!-- 
In this example:

load_all_clases_in_folder() is a custom function that constructs the file
path based on the class name provided.
It assumes all class files are located in a directory named namespace/.
When a class is instantiated (new MyClass()), 
PHP will automatically call my_autoloader('MyClass') to include the MyClass.php file. 
-->
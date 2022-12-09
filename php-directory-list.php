<?php

    /* 
        scandir()
        glob()
    */

    //$files = array_filter(scandir('.'), 'is_dir');
    //print_r($files);

    //$files = glob('*{/,txt}', GLOB_BRACE);
    //print_r($files);

    function file_list($directory_name){
        $files = scandir($directory_name);
        echo '<ul>';
        foreach ($files as $file) {
            if (!in_array($file, ['.','..'])) {
                echo '<li>' . $file;
                 if (is_dir($directory_name . '/' . $file)) {
                    file_list($directory_name . '/' . $file);
                 }
                echo '</li>';
            }
        }
        echo '</ul>';
    }
    //file_list('.');

    function lıst($directory_name)
    {
        echo '<ul>';
        $files = glob($directory_name);
        foreach ($files as $file) {
            echo '<li>' . $file;
            if (is_dir($file)) {
                lıst($file . '/*');
            }
            echo '</li>';
        }
        echo '</ul>';
    }
    lıst('*');
?>
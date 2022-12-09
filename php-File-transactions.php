<?php

    // create file
    // touch()

    //touch('test.txt');
    // touch('test2.txt', time() - 840000);
    /*
        r
        r+
        w
        w+
        a
        a+
    */

    /*
        fopen() 
        fclose() 
        fwrite()
        fread()
        fgets()
        feof()
        filesize()
        unlink()
    */
    /*
        file_get_contents()
        file_put_contents()
    */

    $contents = 'this is example.' . rand(0,1000) . "\n";

    $file = fopen('test.txt','a+');
    //fwrite($file, $contents);
    // echo fread($file, filesize('test.txt'));

   
   //while (!feof($file)) {
    // echo fgets($file) . '<br>';
   //}


    $values = file('test.txt');
    //print_r($values);

    // print_r(feof($file));
    fclose($file);
    // unlink('test2.txt');

    // $contents2 = file_get_contents('#');
    // echo $contents2;

    file_put_contents('test.txt','This is a new value',FILE_APPEND);
?>
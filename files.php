<?php
    // $readFile = readfile('webdictionary.txt');
    
    
    $myfile = fopen('webdictionary.txt','r');
    $size = filesize('webdictionary.txt');
    // print fread($myfile,$size);

    while(!feof($myfile)){
        print fgets($myfile)."<br>";//get the line
                                    // fgetc get one character
    }
    fclose($myfile);

    $myfile = fopen('webdictionary.txt',"a");
    fwrite($myfile,"\nHello\n");
    fclose($myfile);




?>
<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 19/09/2018
 * Time: 11:17
 */

try{
    undefinedFunction();
}catch (\Throwable $error){
    echo 'Now you can write the bad code and catch it '. $error->getMessage();
}

echo "\n\n Continue processing file... ";

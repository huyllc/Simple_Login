<?php
    function printError($error, $type) 
    {
        if (isset($error[$type])) {
            echo $error[$type];
        }
    }

    function isValid() 
    {
        if ($_SERVER["REQUEST_METHOD"]=='POST') {
            return true;
        } else {
            return false;
        }
    }

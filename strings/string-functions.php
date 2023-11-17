
<?php
    $str = "My name is HIMANSHU";
    // 1. strtolower()
    $strToLower = strtolower($str);
    echo $strToLower . "<br>";

    // 2. strtoupper()
    $strToUpper = strtoupper($str);
    echo $strToUpper . "<br>";

    //ucfirst()
    $strUC = ucfirst($str);
    echo $strUC . " <br>";

    //lcfirst()
    $strLC = lcfirst($str);
    echo $strLC . " <br>";

    //ucwords()
    $UC_words = ucwords($str);
    echo $UC_words . "<br>";

    //strrev()
    $strREVERSE = strrev($str);
    echo $strREVERSE . "<br>";

    //strlen()
    $len = strlen($str);
    echo $len;
?>
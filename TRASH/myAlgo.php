<?php

    $result = array(" ");

    function in_arrayi($needle, $haystack) {
        return in_array(strtolower($needle), array_map('strtolower', $haystack));
    }
    
    function check_dictionary($str)
    {
        $wordStore = array("Volvo", "BMW", "Toyota", "to" );        
        return in_arrayi($str, $wordStore);
    }

    function word_slice($str)
    {
        $size = strlen($str);

        if ($size == 0)  return true;
        
        for ($i=1; $i<=$size; $i++)
        {
            if (check_dictionary( substr($str, 0, $i) ) && word_slice( substr($str, $i, $size-$i) ))
            {
                //echo "<b>".substr($str, 0, $i)."</b>"."&nbsp;&nbsp;";
                array_push($GLOBALS['result'],substr($str, 0, $i));
                return true;
            }
        }

        return false;
    }

    
    
    $testString = "volvobmwtoyotatotovolvo";
    echo "<b>input string :</b> $testString <br/><br/>";
    echo "<b>output string : </b>";
    word_slice($testString);
    $len = count($result);
    for($i=$len-1;$i>=0;$i--)
        echo $result[$i]."&nbsp;&nbsp;";
        
?>
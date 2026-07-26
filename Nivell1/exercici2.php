<?php
//nombre del archivo
echo "Hello, you are on this file: " . __FILE__;

echo "<br>";
function ejemplo(){
    echo "this function is called: " . __FUNCTION__;
}

echo "<br>";

ejemplo();

echo "<br>";
echo "This code ends on line: " . __LINE__;



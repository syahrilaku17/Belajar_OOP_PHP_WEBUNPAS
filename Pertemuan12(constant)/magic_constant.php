<?php 

echo __LINE__;
echo "<hr>";
echo __FILE__;
echo "<hr>";
echo __DIR__;
echo "<hr>";    
class hallo {
    public $a = __CLASS__;
}
function set12Eror(){
    return __FUNCTION__;
}
$obj = new hallo;
echo $obj->a;

echo set12Eror();
?>
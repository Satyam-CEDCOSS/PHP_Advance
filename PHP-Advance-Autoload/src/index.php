<?php
// session_start();
function my_function(){
    include_once('./classes/Text.php');
}
spl_autoload_register('my_function');
$class = new text();
echo $class::message()
?>
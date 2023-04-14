<?php
include_once "config.php";
$operation = $_POST["operation"];
switch ($operation) {
    case 'display':
        $txt="<option value=''>-Select-</option>";
        foreach ($products as $category => $value) {
            $txt .= "<option value=".$category.">".$category."</option>";  
        }
        echo $txt;
        break;

    case 'item':
        $cat = $_POST["category"];
        $txt="<option value=''>-Select-</option>";
        foreach ($products as $category => $value) {
            foreach ($value as $item => $parameter) {
                if ($cat == $category){
                    $txt .= "<option value=".$item.">".$item."</option>";
                }
            }
        }
        echo $txt;
        break;

    case 'id':
        $cat = $_POST["category"];
        $txt="<option value=''>-Select-</option>";
        foreach ($products as $category => $value) {
            foreach ($value as $item => $parameter) {
                foreach ($parameter as $id => $data) {
                    if ($cat == $item){
                        $txt .= "<option value=".$data["id"].">".$data["id"]."</option>";
                    }
                }
            }
        }
        echo $txt;
        break;

    case 'table':
        $cat = $_POST["category"];
        $txt="<tr><th>ID</th><th>Name</th><th>Brand</th></tr>";
        foreach ($products as $category => $value) {
            foreach ($value as $item => $parameter) {
                foreach ($parameter as $id => $data) {
                    if ($cat == $data["id"]){
                        $txt .= "<tr><td>".$data["id"]."</td><td>".$data["name"]."</td><td>".$data["brand"]."</td></tr>";
                    }
                }
            }
        }
        echo $txt;
        break;
    
    default:
        break;
}

?>
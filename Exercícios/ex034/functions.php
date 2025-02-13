<?php 
function showError($error){
    if(!empty($error) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        return true;
    } else {
        return false;
    }
}
?>
<?php
function renderView($view){
    include('layout/header.php');
    include($view);
    include('layout/footer.php');
}
?>
<?php

if(isset($_SESSION['error'])){
    $errorType = $_SESSION['error'][0];
    $errorMSG = $_SESSION['error'][1];
    $errorDisplay = 'Something went wrong!';
    if($errorType == "danger"){ $errorDisplay = 'Something went wrong!'; }
    if($errorType == "success"){ $errorDisplay = 'Everything is ok!'; }

    echo '<div class="callout callout-'.$_SESSION['error'][0].'">';
    echo '<h4>'.$errorDisplay.'</h4>';
    echo '<p>'.$errorMSG.'</p>';
    echo '</div>';
}

?>
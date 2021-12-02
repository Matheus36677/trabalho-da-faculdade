<?php
    session_start();
    session_destroy();
    header("location: index.php?msm=Até breve");

?>
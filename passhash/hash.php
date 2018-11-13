#!/usr/local/bin/hhvm
<?php
    $password = 'adminpass1234';
    echo hash('sha256', $password)."\n";
?>

<?php

$metros = $_POST['number'];

function converter ($metros) {
    $centimetros = $metros * 100;

    echo "$centimetros ctm";
}

converter($metros);
<?php

function loadTemplate($name) {
    include $_SERVER["DOCUMENT_ROOT"]."/project/templates/$name.php";
}
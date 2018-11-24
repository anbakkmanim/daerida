<?php

function alertRegister($name, $msg) {
    echo "<script>alert('{$name}{$msg}')</script>";
}

function alertLogin($msg) {
    echo "<script>alert('{$msg}')</script>";
}

function move($msg) {
    echo "<script>location.replace('{$msg}')</script>";
}

function back() {
    echo "<script>history.back()</script>";
}
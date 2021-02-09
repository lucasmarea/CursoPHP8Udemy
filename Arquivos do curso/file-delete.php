<?php

if(file_exists("./arquvio.csv")) {
    unlink("./arquivo.csv");
}

if(file_exists("./arquvio.csv")) {
    rmdir("./arquivo.csv");
}
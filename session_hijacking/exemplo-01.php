<?php

session_start();

//Depois de verificar login e senha reinie o ID da sess�o
session_destroy();

session_start();

session_regenerate_id();

echo session_id();
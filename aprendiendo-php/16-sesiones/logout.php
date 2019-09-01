<?php

session_start();

//destruyo la sesion
//con esto , las paginas que estén consumiendo la sesion no podrán acceder a ella ni a sus variables obviamente
session_destroy();
echo "<h2>Session destroyed!</h2>";

<?php

// Consumo la variable de sesion que generé en index.php

//tengo que invocar a la sesion de todas formas
session_start();
echo $_SESSION['variable_persistente'];

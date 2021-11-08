<?php


session_start();
session_unset();

date_default_timezone_set('Europe/Madrid');

$suma = 0;

if (empty($_SESSION['tienda'])) {
    setcookie('fecha', date("d/m/y G:i:s"));
}

if (isset($_POST['btnGestionar'])) {
    if (!isset($_COOKIE['pedidos'])) {
        $suma = 1;
        setcookie('pedidos', $suma);
    } else {
        $suma++;
        $suma = $_COOKIE['pedidos'] + $suma;
        setcookie('pedidos', $suma);
    }
}
if (isset($_POST['btnDeshacerPedido'])) {
    $suma = $_COOKIE['pedidos'] - 1;
    setcookie('pedidos', $suma);
    if($_COOKIE['pedidos'] ==0){
        $suma = 0;
        setcookie('pedidos', $suma);
    }
}

if (isset($_POST['btnBorrarHistorial'])) {
    $suma = 0;
    setcookie('pedidos', $suma);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/site.css" type="text/css">
    <title>Carrito - Práctica 1 - DWES</title>
</head>

<body class="bg-secondary">
    <div class="text-center bg-dark">
        <a><b class="text-info text-warning" style="font-size:30px;">
                <?php
                if (!isset($_SESSION['tienda'])) {
                    echo "NOSTROMO";
                }
                ?></b></a>
    </div>
    <div class="text-center">
        <div class="container mt-5 contenedores">
            <?php
            if (isset($_COOKIE['pedidos'])) {

                echo "Numero de pedidos: " . $suma . "<br/>";
                echo "Fecha del último pedido: " . $_COOKIE['fecha'] . "<br/>";
            } else if (!isset($_COOKIE['pedidos'])) {
                echo "Numero de pedidos: 0<br/>";
                echo "Fecha del último pedido: " . $_COOKIE['fecha'] . "<br/>";
            }
            ?>
            <div class="row justify-content-center col-12">
                <div class="text-center mt-3 pl-4">
                    <form action="pedidos.php" method="POST">
                        <input type="submit" value="Deshacer pédido" name="btnDeshacerPedido" />
                        <input type="submit" value="Borrar historial" name="btnBorrarHistorial" />
                        <input type="button" onclick="window.location.href='inicio.php';" value="Regresar a Inicio" />
                    </form>
                </div>
            </div>
        </div>
        </div>
</body>
</html>
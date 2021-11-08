<?php

        session_start();

        // COMPRUEBO SI EXISTE EL BOTON, SI EXISTE RECOJO LOS DATOS
        if (isset($_POST['btnAgregar'])) {

            if (empty($_POST['articulos'])) {
            } else {
                $nombrePrecio = explode("-", $_POST['articulos']);
                $titulo = $nombrePrecio[0];
                $cantidad = $_POST['cantidad'];
                $precio = $nombrePrecio[1];

                // SI NO EXISTE SESIÓN LA CREA, SINO AÑADE LOS PRODUCTOS
                if (!isset($_SESSION['tienda'])) {
                    $_SESSION['tienda'] = [];
                }
                $_SESSION['tienda'][] = [$titulo, $cantidad, $precio];
                // RECORRO CON UN FOR PARA COMPROBAR SI EXISTE YA EL TITULO, Y SI EXISTE SUMAMOS LA CANTIDAD ANTERIOR
                for ($i = 0; $i < count($_SESSION['tienda']) - 1; $i++) {
                    if ($_SESSION['tienda'][$i][0] == $titulo) {
                        $_SESSION['tienda'][$i][1] += $cantidad;
                        unset($_SESSION['tienda'][count($_SESSION['tienda']) - 1]);
                    }
                }
            }
        }

//session_unset();
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
                if (isset($_SESSION['tienda'])) {
                    echo "NOSTROMO";
                }
                //SESIÓN NO INICIADA
                else {
                    echo "ERROR";
                    header('Refresh: 2; URL=inicio.php');
                }
                ?></b></a>
    </div>
    <div class="container mt-5 contenedores">
        <?php
        if (isset($_SESSION['tienda'])) {
        ?>
            <div class="col-12 mt-2">
                <table class="table table-striped table-dark text-center" border="2">
                    <tr>
                        <th colspan="4" class="font-weight-bolder text-center">
                            <h4>Resumen de pedido:</h4>
                        </th>
                    </tr>
                    <tr>
                        <th>Nombre del producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    $precioTotal = [];
                    if (isset($titulo) && ($cantidad) && ($precio)) {
                        for ($i = 0; $i < count($_SESSION['tienda']); $i++) {
                            $precioTotal[] = $_SESSION['tienda'][$i][1] * $_SESSION['tienda'][$i][2];
                            echo "<tr>";
                            echo "<td>" . $_SESSION['tienda'][$i][0] . "</td>";
                            echo "<td>" . $_SESSION['tienda'][$i][1] . "</td>";
                            echo "<td>" . $_SESSION['tienda'][$i][2] . "</td>";
                            echo "<td>" . $precioTotal[$i] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td>ERROR, INTRODUCE UN TÍTULO. VUELVE A EMPEZAR.</td>";
                        echo "<tr>";
                        session_unset();
                        header('Refresh: 2; URL=inicio.php');
                    }
                    ?>
                    <tr>
                        <th class="text-light" colspan="2">Total:</th>
                        <th class="text-light">
                            <?php
                            echo "<td>" . array_sum($precioTotal) . "</td>";
                            ?>
                        </th>
                    </tr>
                </table>
            </div>
    </div>
<?php
        } else {
?>
    <div class="col-12 mt-2">
        <table class="table table-striped table-dark text-center" border="1">
            <tr>
                <th colspan="4" class="font-weight-bolder text-center">
                    <h4>Resumen de pedido:</h4>
                </th>
            </tr>
            <tr>
                <th>Nombre del producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>
                    <p>ERROR, VUELVE A EMPEZAR.</p>
                </td>
            </tr>
        </table>
    </div>
    </div>
<?php
        }
?>
<div class="row justify-content-center col-12">
    <div class="text-center">
        <form action="inicio.php" method="POST">
            <input type="submit" class="btn btn-info bg-danger" value="Volver a Comprar" name="btnComprar" onclick="window.location.href='inicio.php'">
        </form>
    </div>
    <div class="text-center">
        <form action="pedidos.php" method="POST">
            <input type="submit" class="btn btn-info bg-danger" value="Gestionar Pedido" name="btnGestionar" onclick="window.location.href='pedidos.php'">
        </form>
    </div>
</div>
</div>
</body>
</html>
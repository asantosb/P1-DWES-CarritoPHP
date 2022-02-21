# P1_DWES_CarritoPHP

Implemente una aplicación web en PHP que emule el funcionamiento de un carrito de compra de una tienda. Para ello cree tres páginas web en dicha aplicación:

Una página donde seleccione el artículo que quiero comprar y la cantidad de dicho artículo.

Una página con el carrito de compra, es decir, con la lista de productos que he añadido. En dicha página habrá dos botones: “Seguir comprando” (que me llevará a la página primera) y “Procesar pedido” (que borrará la lista y me llevará al historial).

Una página de historial, que muestre un mensaje con el número total de pedidos que he hecho y la fecha del último pedido. En dicha página habrá un botón que me permita borrar el historial.

Se pide:

Crear tres páginas PHP: inicio.php y carrito.php y pedidos.php para gestionar los productos, el carrito y el historial.

En inicio.php habrá un formulario con un elementos desplegable para los artículos, un campo numérico para la cantidad de cada artículo y un botón para añadir al carrito de compra. Cuando pulse en el botón me llevará a carrito.php.

La lista de carrito.php estará gestionada mediante sesiones, de tal forma que al entrar directamente en la página me aparezca la lista que estoy comprando. Al procesar el pedido la lista se borrará. Si no hay productos saldrá un mensaje de información al usuario.

La página de pedidos.php se gestionará mediante cookies.

Tener en cuenta que el cliente puede acceder en cualquier momento mediante URL a cualquiera de las tres páginas, así que no debería aparecer mensajes de error.

NOTAS:

Para conseguir una calificación "EXCELENTE" en pedidos.php, simplemente añadir un botón que reduce el número de pedidos.
Para conseguir una calificación de "EXCELENTE" en el apartado "Más funcionalidad", habría que definir un precio cada artículo. Sólo afectaría al carrito, no al historial. 

<?php



    function mostrarusuario()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_cliente, nombre_cliente,apellido_paterno,apellido_materno FROM tabla_cliente');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostrarcategoria()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_categoria, nombre_categoria FROM tabla_categoria');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }

    }
    function mostrarsubcategoria()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT tabla_subcategoria.id_subcategoria, tabla_subcategoria.nombre_subcategoria, tabla_categoria.id_categoria, tabla_categoria.nombre_categoria FROM tabla_subcategoria INNER JOIN tabla_categoria ON tabla_subcategoria.id_categoria=tabla_categoria.id_categoria');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }
    function mostraropcategoria()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT tabla_op_categoria.id_op_categoria, tabla_op_categoria.nombre_op_categoria, tabla_subcategoria.id_subcategoria FROM tabla_op_categoria INNER JOIN tabla_subcategoria ON tabla_op_categoria.id_subcategoria=tabla_subcategoria.id_subcategoria');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }
    function mostrarmarca()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_marca, nombre_marca FROM tabla_marca');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }

    function mostrartalla()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_talla,nombre_talla FROM tabla_talla');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;

        }
    }

    function mostrarcolor()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_color, nombre_color FROM tabla_color');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }

    function mostrarproducto()
    {
      try {
          include 'conexion.php';
          return $conn->query('SELECT tabla_producto.id_producto, tabla_producto.id_codigo_producto, tabla_producto.nombre_producto, tabla_producto.stock_producto, tabla_op_categoria.nombre_op_categoria, tabla_marca.nombre_marca, tabla_talla.nombre_talla, tabla_color.nombre_color, tabla_precio.precio, tabla_precio.descuento, tabla_imagen.url_imagen FROM tabla_producto INNER JOIN tabla_op_categoria ON tabla_producto.id_op_categoria=tabla_op_categoria.id_op_categoria INNER JOIN tabla_marca ON tabla_producto.id_marca=tabla_marca.id_marca INNER JOIN tabla_talla ON tabla_producto.id_talla=tabla_talla.id_talla INNER JOIN tabla_color ON tabla_producto.id_color=tabla_color.id_color INNER JOIN tabla_precio ON tabla_producto.id_producto=tabla_precio.id_producto INNER JOIN tabla_imagen ON tabla_producto.id_producto=tabla_imagen.id_producto ORDER BY tabla_producto.id_codigo_producto');
      } catch (Exception $e) {
        echo "El error es: " . $e->getMessage();
        return false;
      }

    }
    function mosproductoid($id)
    {
      try {
          include 'conexion.php';
          return $conn->query('SELECT tabla_producto.id_producto, tabla_producto.nombre_producto, tabla_producto.stock_producto, tabla_producto.id_op_categoria, tabla_producto.id_marca, tabla_producto.id_talla, tabla_producto.id_color, tabla_precio.precio, tabla_precio.descuento, tabla_imagen.url_imagen FROM tabla_producto LEFT JOIN tabla_imagen ON tabla_producto.id_producto=tabla_imagen.id_producto LEFT JOIN tabla_precio ON tabla_producto.id_producto=tabla_precio.id_producto WHERE tabla_producto.id_producto='.$id);
      } catch (Exception $e) {
        echo "El error es: " . $e->getMessage();
        return false;
      }

    }


?>

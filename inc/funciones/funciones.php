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

?>

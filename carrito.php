<?php
    include_once 'inc/templates/header.php';
    include_once 'inc/templates/navegador.php';
    include_once 'inc/funciones/funciones.php';

?>
        <!-- Content Wrapper. Contains page content -->
        <br>
        <div class="content-wrapper">
          
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Categoria</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formulariocategoria" method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre Cliente</label>
                                                    <select class="form-control select2" style="width: 100%;" id="tipousuario" name="tipousuario">
                                                        <option selected="selected" value="0">Seleccione Usuario</option>
                                                        <?php
                                                        $tipo=mostrarusuario();
                                                        if($tipo->num_rows)
                                                        {
                                                            foreach ($tipo as $tipos) {
                                                            ?>
                                                            <option value="<?php echo $tipos['id_cliente']; ?>">hola</option>
                                                        <?php  }
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipocat" value="crearcat">
                                            <button type="submit" class="btn btn-block btn-outline-info">Registrar</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<?php
    include_once 'inc/templates/footer.php';
?>

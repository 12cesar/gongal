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
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Subcategoria</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formsubca" method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre de Subcategoria</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="nombresub">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                <label>Multiple</label>
                                                <select class="select2" multiple="multiple" data-placeholder="Seleccione una opcion" style="width: 100%;" id="id_categoria">
                                                <?php 
                                                $cate=mostrarcategoria();
                                                if($cate->num_rows)
                                                {
                                                    foreach ($cate as $cate1) { ?>
                                                        <option value="<?php echo $cate1['id_categoria'] ?>"><?php echo $cate1['nombre_categoria'] ?></option>

                                                    <?php }
                                                }
                                                ?>                                            
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tiposub" value="crearsub">
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
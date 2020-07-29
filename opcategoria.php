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
                                    <h3 class="card-title">Registro de OPCategoria</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formop" method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre de OPCategoria</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="nombreop">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                <label>Multiple</label>
                                                <select class="select2" multiple="multiple" data-placeholder="Seleccione una opcion" style="width: 100%;" id="id_subcategoria">
                                                <?php 
                                                $subca=mostrarsubcategoria();
                                                if($subca->num_rows)
                                                {
                                                    foreach ($subca as $subca1) { ?>
                                                        <option value="<?php echo $subca1['id_subcategoria']; ?>"><?php echo $subca1['nombre_subcategoria']; ?></option>

                                                    <?php }
                                                }
                                                ?>                                            
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipoop" value="crearop">
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
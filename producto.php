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
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Registro Producto</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formpro" method="post"  enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre del producto</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="nombrepro">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Stock</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="stockpro">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                <label>Seleccione op_categoria</label>
                                                <select class="select2" multiple="multiple" data-placeholder="Seleccione una opcion" style="width: 100%;" id="id_op_categoria">
                                                <?php
                                                $subop=mostraropcategoria();
                                                if($subop->num_rows)
                                                {
                                                    foreach ($subop as $subop1) { ?>
                                                        <option value="<?php echo $subop1['id_op_categoria']; ?>"><?php echo $subop1['nombre_op_categoria']; ?></option>

                                                    <?php }
                                                }
                                                ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                <label>Seleccione Marca</label>
                                                <select class="select2" multiple="multiple" data-placeholder="Seleccione una opcion" style="width: 100%;" id="id_marca">
                                                <?php
                                                $mar=mostrarmarca();
                                                if($mar->num_rows)
                                                {
                                                    foreach ($mar as $mar1) { ?>
                                                        <option value="<?php echo $mar1['id_marca']; ?>"><?php echo $mar1['nombre_marca']; ?></option>

                                                    <?php }
                                                }
                                                ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Precio</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="precio">
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- text input -->
                                                <div class="form-group" id="check">
                                                    <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" onclick="validarcheck('ocudes')">
                                                    <label class="custom-control-label" for="customSwitch1">Descuento</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2" id="ocudes">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Descuento %</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="descuento">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Seleccione una talla</label>
                                                    <select class="select2" multiple="multiple" data-placeholder="Seleccione una opcion" style="width: 100%;" id="id_talla">
                                                    <?php
                                                    $tall=mostrartalla();
                                                    if($tall->num_rows)
                                                    {
                                                        foreach ($tall as $tall1) { ?>
                                                            <option value="<?php echo $tall1['id_talla']; ?>"><?php echo $tall1['nombre_talla']; ?></option>

                                                        <?php }
                                                    }
                                                    ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Seleccione un color</label>
                                                    <select class="select2" multiple="multiple" data-placeholder="Seleccione una opcion" style="width: 100%;" id="id_color">
                                                    <?php
                                                    $col=mostrarcolor();
                                                    if($tall->num_rows)
                                                    {
                                                        foreach ($col as $col1) { ?>
                                                            <option value="<?php echo $col1['id_color']; ?>"><?php echo $col1['nombre_color']; ?></option>

                                                        <?php }
                                                    }
                                                    ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Seleccione una imagen</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipopro" value="crearpro">
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

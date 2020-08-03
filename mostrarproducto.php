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
                            <div class="card card-info" >
                                <div class="card-header" >
                                    <h3 class="card-title">Mostrar Categoria</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                <div class="card">
              <div class="card-header" id="notipro">
                <h3 class="card-title" id="mostre">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped tb_pro" name="">
                  <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Op_categoria</th>
                    <th>Marca</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Agregar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                  $mospro=mostrarproducto();
                  if($mospro->num_rows){
                    foreach ($mospro as $mospro1) {?>

                      <tr>
                        <td> <?php echo $mospro1['id_codigo_producto'];?> </td>
                        <td> <?php echo $mospro1['nombre_producto'];?> </td>
                        <td> <?php echo $mospro1['stock_producto'];?> </td>
                        <td> <?php echo $mospro1['nombre_op_categoria'];?> </td>
                        <td> <?php echo $mospro1['nombre_marca'];?> </td>
                        <td> <?php echo $mospro1['nombre_talla'];?> </td>
                        <td> <?php echo $mospro1['nombre_color'];?> </td>
                        <td><a class="btn btn-app ag_stock"  data-id="<?php echo $mospro1['id_producto']; ?>">
                          <i class="fas fa-plus" data-toggle="modal" data-target="#modal-secondary"></i> Stock
                        </a></td>
                        <td><a class="btn btn-app" id="edit_pro" data-id="<?php echo $mospro1['id_producto']; ?>">
                          <i class="fas fa-edit" data-toggle="modal" data-target="#modal-success"></i> Editar
                        </a></td>
                        <td><a class="btn btn-app" id="dele_pro" data-id="<?php echo $mospro1['id_producto']; ?>">
                          <i class="fas fa-trash"></i> Eliminar
                        </a></td>
                      </tr>

                      <?php
                  }
                  }?>

                  </tbody>
                </table>
              </div>
              <div class="modal fade modagrepro" id="modal-secondary">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h4 class="modal-title">Añadir mas stock</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <form class="" action="index.html" method="post">
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="text" class="form-control" placeholder="Enter ..."id="stock">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="" value="" id="id_producto">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal" id="agregar_stock">Guardar cambios</button>
                      </div>
                    </form>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <div class="modal fade" id="modal-success">
                <div class="modal-dialog">
                  <div class="modal-content bg-success">
                    <div class="modal-header">
                      <h4 class="modal-title">Success Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.card-body -->
            </div>
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

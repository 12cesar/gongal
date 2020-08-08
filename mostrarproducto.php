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
                    <th>Precio</th>
                    <th>Descuento %</th>
                    <th>Url</th>
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
                        <td> <?php echo $mospro1['precio']; ?> </td>
                        <td> <?php echo $mospro1['descuento']; ?> </td>
                        <td> <?php echo $mospro1['url_imagen']; ?> </td>
                        <td><a class="btn btn-app ag_stock"  data-id="<?php echo $mospro1['id_producto']; ?>">
                          <i class="fas fa-plus" data-toggle="modal" data-target="#modal-secondary"></i> Stock
                        </a></td>
                        <td><a class="btn btn-app ed_pro" id="edit_pro" data-id="<?php echo $mospro1['id_producto']; ?>">
                          <i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg"></i> Editar
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
                        <button type="button" class="btn btn-outline-light"  id="agregar_stock">Guardar cambios</button>
                      </div>
                    </form>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

              <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Success Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <form role="form" id="formedipro" method="post"  enctype="multipart/form-data">
                    <div class="modal-body">

                          <div class="row">
                              <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Nombre del producto</label>
                                      <input type="text" class="form-control" placeholder="Enter ..."id="nombre">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Stock</label>
                                      <input type="text" class="form-control" placeholder="Enter ..."id="sto">
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                  <label>Seleccione op_categoria</label>
                                  <select  style="width: 100%;height:40px;" id="id_op">

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
                                  <select style="width: 100%;height:40px;" id="id_mar">
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
                                      <input type="text" class="form-control" placeholder="Enter ..."id="prec">
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
                                      <input type="text" class="form-control" placeholder="Enter ..."id="des">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Seleccione una talla</label>
                                      <select style="width: 100%;height:40px;" id="id_ta">

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
                                      <select style="width: 100%;height:40px;" id="id_co">

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
                                              <input type="file" class="custom-file-input" id="inputfile" name="files">
                                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12" id="img_sele">
                                  <div class="form-group">
                                      <div class="row">
                                        <div class="col-sm-10">
                                          <label for="exampleInputFile">Imagen Seleccionada</label>
                                          <div class="input-group">
                                            <img  src="" alt="" id="img">
                                          </div>
                                        </div>
                                        <div class="col-sm-2">
                                          <input type="hidden" name="" id="id_imagen" value="">
                                          <a class="btn btn-app">
                                            <i class="fas fa-trash" id="delete_img" onclick="dele_img()"></i> Eliminar
                                          </a>
                                        </div>
                                      </div>
                                  </div>
                              </div>

                          </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>

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

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
                                    <h3 class="card-title">Mostrar Op Categoria</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Item</th>
                    <th>Op_Categoria</th>
                    <th>Subcategoria</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                  $mosop=mostraropcategoria();
                  if($mosop->num_rows){
                    foreach ($mosop as $mosop1) {?>

                      <tr>
                        <td> <?php echo $mosop1['id_op_categoria']; ?> </td>
                        <td> <?php echo $mosop1['nombre_op_categoria']; ?> </td>
                        <td> <?php echo $mosop1['id_subcategoria'];?> </td>
                      </tr>

                      <?php
                  }
                  }?>


                  </tbody>
                </table>
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

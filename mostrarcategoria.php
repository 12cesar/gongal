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
                                    <h3 class="card-title">Mostrar Categoria</h3>
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
                    <th>Categoria</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                  $moscate=mostrarcategoria();
                  if($moscate->num_rows){
                    foreach ($moscate as $moscate1) {?>

                      <tr>
                        <td> <?php echo $moscate1['id_categoria'];?> </td>
                        <td> <?php echo $moscate1['nombre_categoria'];?> </td>
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

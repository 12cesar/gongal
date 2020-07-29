<?php
    include_once 'inc/templates/header.php';
    include_once 'inc/templates/navegador.php';
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
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Registro Color</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formcolor" method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..."id="nombrecolor">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipocolor" value="crearcolor">
                                            <button type="submit" class="btn btn-block btn-outline-info">REGISTRAR</button>
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

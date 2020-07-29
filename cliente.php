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
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Categoria</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <form role="form" id="formularioregistrocliente" method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="nombrecliente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Apellido paterno</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="apellidopaterno">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Apellido materno</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="apellidomaterno">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Celular</label>
                                                    <input type="text" class="form-control" placeholder="Enter ..." id="celularcliente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <input type="email" class="form-control" placeholder="Enter ..." id="correocliente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Contraseña</label>
                                                    <input type="password" class="form-control" placeholder="Enter ..." id="passwordcliente">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                            <input type="hidden" name="" id="tipousuario" value="crearusuario">
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
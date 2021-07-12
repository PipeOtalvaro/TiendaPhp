<div class="box-principal">
    <h3 class="titulo">Editar cliente <?php echo $datos['nombre']; ?>
        <hr>
    </h3>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Editar cliente <?php echo $datos['nombre']; ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="img-responsive" src="<?php echo URL; ?>Views/template/images/avatars/<?php echo $datos['foto']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Nombre del cliente</label>
                            <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Primer Apellido</label>
                            <input class="form-control" value="<?php echo $datos['primer_apellido']; ?>" name="primerApellido" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Segundo Apellido</label>
                            <input class="form-control" value="<?php echo $datos['segundo_apellido']; ?>" name="segundoApellido" type="text">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Telefono</label>
                            <input class="form-control" value="<?php echo $datos['telefono']; ?>" name="telefono" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input class="form-control" value="<?php echo $datos['email']; ?>" name="email" type="email" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">direccion</label>
                            <input class="form-control" value="<?php echo $datos['direccion']; ?>" name="direccion" type="text" required>
                        </div>
                        <input value="<?php echo $datos['id']; ?>" name="id" type="hidden" required>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <button type="reset" class="btn btn-warning">Borrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-principal">
    <h3 class="titulo">Cliente <?php echo $datos['nombre']; ?>
        <hr>
    </h3>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Perfil del cliente <?php echo $datos['nombre']; ?><b></b></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive" src="<?php echo URL; ?>Views/template/images/avatars/<?php echo $datos['foto']; ?>">
                </div>
                <div class="col-md-9">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b>Nombre: </b><?php echo $datos['nombre']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Edad: </b><?php echo $datos['primer_apellido']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Edad: </b><?php echo $datos['segundo_apellido']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Promedio: </b><?php echo $datos['telefono']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Sección: </b><?php echo $datos['email']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Sección: </b><?php echo $datos['direccion']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Fecha de registro: </b><?php echo $datos['create_at']; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
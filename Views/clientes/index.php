<div class="box-principal">
    <h3 class="titulo">Listado de Clientes
        <hr>
    </h3>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de clientes</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($datos)) { ?>
                        <tr>
                            <td><img class="imagen-avatar" src="<?php echo URL; ?>Views/template/images/avatars/<?php echo $row['foto']; ?>"></td>
                            <td><a href="<?php echo URL; ?>clientes/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></a></td>
                            <td><?php echo $row['primerApellido' . 'segundoApellido']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><a class="btn btn-warning" href="<?php echo URL; ?>clientes/editar/<?php echo $row['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="<?php echo URL; ?>clientes/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php require_once 'static/header.html';?>
    <div class="container-fluid">
        <div class="container-user" style="width:100%;">
            <section>
                <h1>Users</h1>
                <button type="button" class="btn btn-success">Agregar nuevo usuario</button>
                <br>
                <br>
            </section>
            <section>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CI</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <!--<th scope="col">Cripto Key</th>-->
                            <th scope="col">Tipo</th>
                            <th scope="col">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($res as $r):
                        ?>
                            <tr>
                                <th scope="row"><?php echo $r['id_user'] ?></th>
                                <td><?php echo $r['ci'] ?></td>
                                <td><?php echo $r['first_name']; ?></td>
                                <td><?php echo $r['last_name'];?></td>
                                <!---<td><?php //echo $r['password'];?></td>-->
                                <td><?php echo $r['type_user'];?></td>
                                <td>
                                <button type="button" class="btn btn-primary" >Editar</button>
                                <button type="button" class="btn btn-danger" onclick="deleteUser(<?php echo $r['id_user'] ?>);" >Eliminar</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <?php require_once 'static/footer.html';?>
</body>
<script src="/src/js/index.js"></script>
<script>
    function deleteUser(id){
    swal({
        closeOnClickOutside: false,
        title: "Aviso!",
        text: "Esta seguro que desea eliminar este usuario",
        icon: "warning",
        buttons: {
            si:{
                text: "Si",
                value: "si"
            },
            no:{
                text: "No",
                value: "no"
            }
        }
    }).then((val) => {
        switch(val){
            case "si":
                $.ajax({
                    type: 'GET',
                    url: 'index.php?c=Admin&a=deleteUser',
                    async: true,
                    data: "id="+id,
                    success: (res) =>{
                        console.log(res);
                        if(!res){
                            swal(
                                "Usuario eliminado",
                                "Eliminacion Existosa",
                                "success"
                            )
                        }else{
            
                        }
                    }
                });
                break;
            case "no":
                break;
        }
    });
}
</script>
</html>
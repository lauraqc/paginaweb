<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <!--- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">CRUD con PHP</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">

                <?php if (isset($_SESSION['mensaje'])) { ?>
                    <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['mensaje']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();
                } ?>


                <div class="card card-body">
                    <form action="guardar.php" method="POST">
                        <div class="mb-3">
                            <label for="id">Identificacion</label>
                                <br>
                                <input type="number" name="id" placeholder="ID" id="id" title="Ingrese su fecha de nacimiento" class="form-control" required>
            
                        </div>
                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                                <br>
                                <input type="text" name="nombre" placeholder="Nombre" id="nombre" title="Ingrese su nombre" class="form-control" required>
                            
                        </div>
                        <div class="mb-3">
                            <label for="fecha-Nacimiento">Fecha de Nacimiento</label>
                                <br>
                                <input type="date" name="fecha-Nacimiento" id="Fecha-Nacimiento" title="Ingrese su fecha de nacimiento" class="form-control">
                            
                        </div>
                        <div class="mb-3">
                            <label for="papa">papa</label>
                                <br>
                                <input type="number" name="papa" placeholder="PAPA" id="papa" title="Ingrese su papa" class="form-control" onchange="verificar()">
                            
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                    </form>

                </div>
            </div>
            <div class="col-md-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">PAPA</th>
                            </tr>
                        </thead>
                    </table>
                </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
<script src="verificar.js"></script>
</html>
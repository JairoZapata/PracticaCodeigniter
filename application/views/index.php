<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <?php print_r(base_url('index.php/UsuarioController/store')) ?>

    <form action="<?php var_dump(base_url()) ?>" method="POST" class="d-flex justify-content-center m-5">
        <div class="card" style="width: 35rem;">
            <h3 class="m-3">Formulario</h3>
            <div class="m-3">
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label"><strong>Numero natural:</strong></label>
                        <input type="number" class="form-control" id="exampleCheck1" name="natural" placeholder="Numeros naturales.." value="">
                        
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label"><strong>Numero entero:</strong></label>
                        <input type="number" class="form-control" id="exampleCheck1" name="entero" placeholder="Numeros enteros..">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-check-label" for="exampleCheck1"><strong>Numero racional:</strong></label>
                        <input type="text" class="form-control" id="exampleCheck1" name="racional" placeholder="Numeros racionales..">
                        
                    </div>
                    <div class="col">
                        <label class="form-check-label" for="exampleCheck1"><strong>Numero irracional:</strong></label>
                        <input type="text" class="form-control" id="exampleCheck1" name="irracional" placeholder="Numeros irracionales..">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-check-label" for="exampleCheck1"><strong>Numero primo:</strong></label>
                        <input type="text" class="form-control" id="exampleCheck1" name="primo" placeholder="Numeros primos..">
                        
                    </div>
                    <div class="col">
                        <label class="form-check-label" for="exampleCheck1"><strong>Numero compuesto:</strong></label>
                        <select class="form-select" aria-label="Default select example" name="select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        
                    </div>
                </div>
                <button type="submit" name="enviar" class="btn btn-primary mt-2">Guardar</button>
                <a href=""  class="btn btn-dark mt-2">Consultar Datos Insertados</a>
            </div>
        </div>
    </form>

</body>
</html>
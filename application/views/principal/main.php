<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gastos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col md4">
                <div class="card">
                    <div class="card-body">
                        <h3>ingresar gastos</h3>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">nombre del producto</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <select class="form-select" aria-label="Default select example">
                            <input type="text" class="form-control" id="tipo" name="tipo">
                                <option selected>varios</option>
                            </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">inporte</label>
                                <input type="text" class="form-control" id="inporte" name="inporte">
                            </div>
                            <button type="submit" class="btn btn-primary">subir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">descripcion</th>
                        <th scope="col">tipo</th>
                        <th scope="col">inporte</th>
                        <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">algo textp info</th>
                        <td>varios</td>
                        <td>30$</td>
                        <td>papelera</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
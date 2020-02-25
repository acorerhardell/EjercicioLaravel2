<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        </head>
    <body>
        <h2>Titulo</h2>
        <div class="container">
            <form action="/guarda" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input class="form-control" type="text"  name="nombre" id="Nombre" Required>
                </div>
                <div class="form-group">
                    <label for="apellidop">Apellido Paterno</label>
                    <input class="form-control" type="text"  name="apellidop" id="apellidop" Required>
                </div>
    
                <div class="form-group">
                    <label for="apellidom">Apellido Materno</label>
                    <input class="form-control" type="text" name="apellidom" id="apellidom" Required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            
            <div class="container">
                
                <a href="/detalle/12" class="btn btn-success">12</a>
                <a href="/detalle/35" class="btn btn-success">35</a>
                <a href="/detalle/64" class="btn btn-success">64</a>
            </div>
        </div>
</html>

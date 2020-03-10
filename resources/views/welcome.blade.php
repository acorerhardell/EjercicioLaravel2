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
        <h2 class=" h2 text-center">Vista</h2>
        <div class="container-xl d-flex justify-content-around">
            @foreach ($datos as $dato)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$dato->nombre}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$dato->sabor}}</h6>
                  <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non repellat est iste fugit, assumenda nemo?</p>
                  <p class="card-text"><small class="text-muted">${{$dato->precio}}</small></p>
                <a href="{{$dato->id}}" class="btn btn-primary">Comprar</a>
                </div>
              </div>
            @endforeach
        </div>
</html>

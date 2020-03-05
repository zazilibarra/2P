<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Laravel</title>
    </head>
    <body>
        <div class="container-fluid">
            <a href="/detalle/12" class="btn btn-secondary">12</a>
            <a href="/detalle/21" class="btn btn-secondary">21</a>
            <a href="/detalle/40" class="btn btn-secondary">40</a>

            <div>
                @foreach($datos as $d)
                    <div class="row">
                        <label for="">Sabor: </label> {{$d->sabor}}
                        <label for="">Precio: </label> {{$d->precio}}
                        <label for="">Costo: </label> {{$d->costo}}
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>

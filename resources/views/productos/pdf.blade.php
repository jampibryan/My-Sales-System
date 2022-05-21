<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Productos</title>

</head>

<body>
    <h1>LISTA PRODUCTOS</h1>

    <table class="table table-dark table-hover mt-4">
        <thead class="thead">
            <tr>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
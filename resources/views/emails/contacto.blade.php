<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <h4>Correo enviado desde la página web Trilha Inca Cusco</h4>
    <table class="table table-hover" style="text-align: left">
        <tbody>
            <tr>
                <th scope="row">Nombre:</th>
                <td>{{ $nombre }}</td>

            </tr>
            <tr>
                <th scope="row">Email:</th>
                <td>{{ $email }}</td>

            </tr>
            <tr>
                <th scope="row">Adultos:</th>
                <td>{{ $adultos }}</td>
            </tr>
            <tr>
                <th scope="row">Niños:</th>
                <td>{{ $childs }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha de arrivo:</th>
                <td>{{ $date }}</td>
            </tr>
            <tr>
                <th scope="row">Teléfono:</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th scope="row">Tour:</th>
                <td>{{ $tour }}</td>
            </tr>
            <tr>
                <th scope="row">Mensaje:</th>
                <td>{{ $mensaje }}</td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <div class="conteiner">
        <div class="col-lg-12 text-center">
            Copiryght 2023 © todos los derechos reservados | NC Travel Cusco | Hecho por DJM2
        </div>
    </div>
</body>

</html>

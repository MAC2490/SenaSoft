<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    @extends('Cliente.layout.menu')
    @section('content')
        <div class="container" style="margin-top: 13%">
            <form class="row justify-content-center" action="{{ route('url.store') }}" method="POST" > 
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input name="apellido" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Documento</label>
                        <input name="documento" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
            </form>
        </div>
    @endsection
</body>
</html>
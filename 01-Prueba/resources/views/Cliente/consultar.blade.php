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
        <div class="m-5">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $datos)
                        <tr>
                            <td id="nombre-{{ $datos->id }}">{{ $datos->nombre }}</td>
                            <td id="apellido-{{ $datos->id }}">{{ $datos->apellido }}</td>
                            <td id="documento-{{ $datos->id }}">{{ $datos->documento }}</td>
                            <td id="estado-{{ $datos->id }}">{{ $datos->estado }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#edit" data-id="{{ $datos->id }}">
                                    Editar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="edit">Editar Informacion Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Formulario --}}
                            <form action="{{ route('url.update', ['url' => $datos->id]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="datos_id" value="">
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
                                <div class="mb-3">
                                    <label class="form-label">Estado</label>
                                    <input name="estado" type="text" class="form-control">
                                    <select name="estado" class="form-select mt-2" aria-label="Cambiar estado">
                                        <option value="" selected>Cambiar estado</option>
                                        <option value="Activo">Activar</option>
                                        <option value="Inactivo">Desactivar</option>
                                    </select>
                                </div>
                                <button type="subbmit" class="btn btn-primary">Aceptar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            var id = $(this).data('id');
            var nombre = $('#nombre-' + id).text();
            var apellido = $('#apellido-' + id).text();
            var documento = $('#documento-' + id).text();
            var estado = $('#estado-' + id).text();

            $('#edit input[name="datos_id"]').val(id);
            $('#edit input[name="nombre"]').val(nombre);
            $('#edit input[name="apellido"]').val(apellido);
            $('#edit input[name="documento"]').val(documento);
            $('#edit input[name="estado"]').val(estado);
        });
    });
</script>

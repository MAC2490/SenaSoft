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

    @extends('layout.menu')
    @section('content')
        <div class="mt-4">
            <div class="bg-success p-2 text-white">This is default success background</div>
            <div class="bg-success p-2 text-white bg-opacity-75">This is 75% opacity success background</div>
            <div class="bg-success p-2 text-dark bg-opacity-50">This is 50% opacity success background</div>
            <div class="bg-success p-2 text-dark bg-opacity-25">This is 25% opacity success background</div>
            <div class="bg-success p-2 text-dark bg-opacity-10">This is 10% opacity success background</div>
        </div>
    @endsection
</body>
</html>
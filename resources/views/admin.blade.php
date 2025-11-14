<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>

     @vite(['resources/js/admin.js'])


    {{-- Carga el bundle del template (de la carpeta public/js) --}}
    <script defer src="{{ asset('js/app.bundle.js') }}"></script>

</head>
<body>
    <div id="admin"></div>
</body>
</html>

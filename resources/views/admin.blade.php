<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Panel Admin</title>

    @vite(['resources/js/admin.js'])
    
    <!-- Tus estilos del dashboard -->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>


    {{-- Carga el bundle del template (de la carpeta public/js) --}}
    <script defer src="{{ asset('js/app.bundle.js') }}"></script>

</head>
<body>
    <div id="admin"></div>
</body>
</html>

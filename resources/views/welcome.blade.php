<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maloka Store</title>

    {{-- Carga Vue + tus scripts compilados por Vite --}}
    @vite(['resources/js/app.js'])

    {{-- Carga el bundle del template (de la carpeta public/js) --}}
    <script defer src="{{ asset('js/app.bundle.js') }}"></script>
</head>
<body>
    <div id="app"></div>
</body>
</html>

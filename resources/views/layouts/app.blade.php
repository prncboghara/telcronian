<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Telcorn</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- <div> -->
    @include('partials.header') <!-- Static -->
    <!-- </div> -->
    <!-- <div> -->
    <!-- <main> -->
    @yield('content') <!-- More dynamic content -->
    <!-- </main> -->
    <!-- </div> -->

    @include('partials.footer') <!-- Static -->

</body>

</html>
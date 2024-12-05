<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet">
</head>
<body class="min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center">
        <div class="cover-container">
            <header class="mb-4">
                <h1 class="display-3 fw-bold text-light">¡Bienvenido!</h1>
            </header>
            <main>
                <p class="lead text-light mb-4">
                    ¿Qué te gustaría hacer hoy?
                </p>
                <div class="btn-group-vertical w-100">
                    <a href="create_publication" class="btn btn-custom btn-lg mb-3">Publicar</a>
                    <a href="view_publications" class="btn btn-custom btn-lg mb-3">Explorar publicaciones</a>
                    <a href="my_publications" class="btn btn-custom btn-lg mb-3">Ver publicaciones propias</a>
                </div>
            </main>
            <footer class="mt-5">
                <p class="text-light">&copy; 2024 Yennifer</p>
            </footer>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet">
</head>
<body class="min-vh-100 d-flex align-items-center justify-content-center">

    <a href="dashboard" class="btn btn-secondary" style="position: absolute; top:30px; left:30px">
        Dashboard
    </a>
    
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="card p-4 form-inherit" >
            <h1 class="mb-4">Nueva publicacion</h1>
            <form action="{{ route('add_publication') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="content" class="form-label text-light"></label>
                    <textarea name="content" id="content" class="form-control" rows="10" cols="20"></textarea>
                </div>
                <button type="submit" class="btn btn-custom w-100">Publicar</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
    
    <div class="d-flex align-items-center justify-content-center text-center">
        <div class="card p-4 form-inherit">
            <h1 class="mb-4">Sign up</h1>
            <form action="{{ route('add_user') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label text-light">Username</label>
                    <input type="text" id="username" name="username" class="form-control text-light" 
                        required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label text-light">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control text-light" required>
                </div>
                
                <div class="mb-3">
                    <label for="lastname" class="form-label text-light">Apellido</label>
                    <input type="text" id="lastname" name="lastname" class="form-control text-light" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" id="email" name="email" class="form-control text-light" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" id="password" name="password" class="form-control text-light" 
                        required>
                </div>
                <button type="submit" class="btn btn-custom w-100">Registrarse</button>
            </form>
            <footer class="mt-4">
                <p class="text-light">
                    ¿Ya tienes una cuenta? - - - <a href="login" class="text-info">Ingresa aqui</a>
                </p>
            </footer>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

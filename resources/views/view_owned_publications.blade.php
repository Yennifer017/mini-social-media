<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <link href="{{ asset('assets/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-1">
                <a class="btn btn-secondary" href="dashboard">Dashboard</a>
            </div>
            <div class="col-11">
                <h1 class="text-center">Mis publicaciones</h1>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="products-display">
            @foreach ($publications as $publication)
            <div class="col">
                <div class="card h-100 shadow-sm bg-dark text-white">
                    <div class="card-header bg-secondary">
                        <h5 class="text-center">Publicación id: {{ $publication->id }}</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <input type="hidden" name="publication_id" value="{{ $publication->id }}">
                            <div class="mb-3">
                                <textarea class="form-control text-light border" 
                                    name="content" rows="4">{{ $publication->content }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Editar</button>
                        </form>
            
                        <form method="POST" class="mt-2">
                            <input type="hidden" name="publication_id" value="{{ $publication->id }}">
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                    <div class="card-footer text-light">
                        Creado: {{$publication->created_at}}
                        <br>
                        Actualizado: {{$publication->updated_at}}
                    </div>
                </div>
            </div>
            
            
            @endforeach
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>

</html>

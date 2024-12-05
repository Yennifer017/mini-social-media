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

<body>
    <a class="btn btn-secondary" href="{{route('view_publications')}}" 
        style="position: absolute; top: 30px; left:30px">
        Regresar
    </a>

    <div class="container mt-5">
        <h1 class="text-center">Publicacion</h1>
    </div>

    <section class="container">
        <div class="row mt-3">
            <div class="col">
                <div class="card h-100 shadow-sm bg-dark bg-gradient">
                    <div class="card-body bg-dark text-light">
                        <div class="mb-3">
                            <p class="" name="content" rows="4">
                                {{ $publication->content }}</p>
                        </div>
                        <hr>
                        <small>
                            @if ($publication->status == 'edited')
                                Editado*
                                <br>
                            @endif
                            <span>Creado: {{ $publication->created_at }}</span> |
                            <span>Actualizado: {{ $publication->updated_at }}</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <h1 class="text-center mt-5">Comentarios</h1>
    <div class="container col-md-8">
        @foreach ($comments as $comment)
            <div class="row mt-3">
                <div class="col">
                    <div class="card h-100 shadow-sm bg-dark bg-gradient">
                        <div class="card-body bg-dark text-light">
                            <div class="mb-3">
                                <p class="" name="content" rows="4">
                                    {{ $comment->content }}</p>
                            </div>
                            <hr>
                            <small>
                                @if ($comment->status == 'edited')
                                    Editado*
                                    <br>
                                @endif
                                <span>Creado: {{ $comment->created_at }}</span> |
                                <span>Actualizado: {{ $comment->updated_at }}</span>
                            </small>
                            @if ($comment->id == $user)
                                <button class="btn btn-danger">Eliminar</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

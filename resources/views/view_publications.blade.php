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
    <div class="container">
        <div class="row pt-5">
            <div class="col-1">
                <a class="btn btn-secondary" href="dashboard">Dashboard</a>
            </div>
            <div class="col-11">
                <h1 class="text-center">Publicaciones</h1>
            </div>
        </div>
    </div>

    <div class="container col-md-8">
        @foreach ($publications as $publication)
            <div class="row mt-3">
                <div class="col">
                    <div class="card h-100 shadow-sm bg-dark bg-gradient" >
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
                        <div class="card-footer text-muted">
                            <form method="POST" action="{{ route('add_comment') }}">
                                @csrf
                                <div class="d-flex mb-3 flex-column flex-sm-row">
                                    <div class="input-group flex-grow-1 me-2">
                                        <input type="hidden" name="id_publication" value="{{ $publication->id }}">
                                        <textarea class="form-control text-light" name="content" rows="1"></textarea>
                                        <button class="btn btn-primary text-light" type="submit">
                                            Comentar
                                        </button>
                                    </div>
                                    <button class="btn btn-secondary mt-2 mt-sm-0 ms-sm-2 w-sm-auto">
                                        Ver comentarios
                                    </button>
                                </div>               
                            </form>
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

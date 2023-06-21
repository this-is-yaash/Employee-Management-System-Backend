<html>
    <head>

    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/css/styles.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>
        Admin Login
    </title>
    <body>
        <style>
            h1{
                color: rgb(60, 47, 148);
                text-align: left;
                font-size: 50px;
                font-weight:lighter;
                font-family: 'Trebuchet MS', sans-serif;
            }
        </style>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="d-flex align-items-center justify-content-center h-100"><!-- align-items-center(align vertical)justify-content-center(align horizontal) -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Admin Login</h1>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
                            </div>
                                <button type="submit" class="btn btn-secondary">Login</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 
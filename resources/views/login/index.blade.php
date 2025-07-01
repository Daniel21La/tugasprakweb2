<!doctype html>
<html lang="en">

<head>
    <title>title</title>
    <!-- required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- bootstrap css v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384t3c6coii6ulra9tneneoa7rxnatzjcdscmg1mxxsr1gasxev/dwwykc2mpk8m2hn" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto py-5">
                <div class="card border-dark">
                    <div class="card-body">
                        <h2 class="text-center">login</h2>
                        <form action="{{ route('login.autentikasi') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">email</label>
                                <input type="text" class="form-control" name="email" />
                                @error('email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">password</label>
                                <input type="password" class="form-control" name="password" />
                                @error('password')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">masuk</button>
                            <a href="{{ route('registrasi') }}" class="btn btn-outline-success">registrasi</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap javascript libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384
    i7e8vvd/ismytf4hnipjvp/zjvgyol6vfvrkx/vr+vc4jqkc+hvqc2pm8odewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min
     .js" integrity="sha384
    bbtl+egjrgqqaumxj7pmwbeyer4l1g+o15p+16ep7q9q+zqx6gsbd85u4mg4qzx+" crossorigin="anonymous"></script>
</body>

</html>

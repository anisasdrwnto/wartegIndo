<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/signup.js"></script>
    <script src="/global.js"></script>
</head>
<body>
    <div class="vh-100 d-flex align-items-center justify-content-center" style="background-image: url('/img/background.jpg'); background-size: cover; background-position: center;">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <form class="p-4 border rounded bg-light">
                    <h3 class="text-center mb-4">Sign Up</h3>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="idNama">
                </div>  
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="idEmail">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="idPassword">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="idCheck">
                    <label class="form-check-label" for="checking">Remember Me</label>
                </div>
                <button type="button" class="btn btn-primary" id="btnSignUp">Submit</button>
                </form>
                <p class="mb-0 mt-3 text-center">
                    <a href="/login" class="text-center">Already have an account? Login here</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Login Page</title><!--begin::Primary Meta Tags-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)-->
</head> <!--end::Head--> <!--begin::Body-->

<body class="login-page bg-body-secondary">
<div class="login-box">
    <div class="login-logo"> <a href="../index2.html"><b>Admin</b>LTE</a> </div> <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="input-group mb-3"> <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                </div>
                <div class="input-group mb-3"> <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                </div> <!--begin::Row-->

                <select class="form-control">
                    <option class="form-control" name="admin">admin</option>
                    <option class="form-control" name="guest">guest</option>
                    <option class="form-control" name="manager">manager</option>
                </select>
                <br>
                <div class="row">
                    <div class="col-8">
                        <div class="form-check"> <input class="form-check-input"  name="remember" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label> </div>
                    </div> <!-- /.col -->
                    <div class="col-4">
                        <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button> </div>
                    </div> <!-- /.col -->
                </div> <!--end::Row-->
            </form>
            <p class="mb-0"> <a href="{{route('register')}}" class="text-center">
                    Register
                </a> </p>
            <div class="social-auth-links text-center mb-3 d-grid gap-2">
                <p>- OR -</p> <a href="#" class="btn btn-primary"> <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                </a> <a href="#" class="btn btn-danger"> <i class="bi bi-google me-2"></i> Sign in using Google+
                </a>
            </div> <!-- /.social-auth-links -->
            <p class="mb-1"> <a href="forgot-password.html">I forgot my password</a> </p>

        </div> <!-- /.login-card-body -->
    </div>
</div> <!-- /.login-box --> <!--begin::Third Party Plugin(OverlayScrollbars)-->
</body><!--end::Body-->

</html>

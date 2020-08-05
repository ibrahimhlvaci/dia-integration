<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('../../assets/media/image/favicon.png')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('../../vendors/bundle.css')}}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('../../assets/css/app.min.css')}}" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">

    </div>
    <!-- ./ logo -->


    <h5>Dia GİRİŞ</h5>

    <!-- form -->
    @include('layouts.partials.errors')
    <form method="POST" action="{{route('diagiris')}}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Sunucu Adı" name="sunucuadi" required autofocus>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullanici_adi" required autofocus>
        </div>
        <div class="form-group">
            <input name="sifre" type="password" class="form-control" placeholder="Şifre" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Beni Hatırla</label>
            </div>
            <a href="recovery-password.html"></a>
        </div>
        <button class="btn btn-primary btn-block">Giriş Yap</button>
        <hr>
        <p class="text-muted">Login with your social media account.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-behance">
                    <i class="fa fa-behance"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="register.html" class="btn btn-outline-light btn-sm">Register now!</a>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="{{asset('../../vendors/bundle.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('../../assets/js/app.min.js')}}"></script>
</body>
</html>

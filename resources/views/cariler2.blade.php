<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('../../assets/media/image/favicon.png')}}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('../../vendors/bundle.css')}}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Datatable -->
    <link rel="stylesheet" href="{{asset('../../vendors/dataTable/datatables.min.css')}}" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="{{asset('../../assets/css/app.min.css')}}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-between">
                    Settings
                    <a class="btn-sidebar-close" href="#">
                        <i class="ti-close"></i>
                    </a>
                </h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

    <!-- BEGIN: Chat List -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-between">
                    Chats
                    <a class="btn-sidebar-close" href="#">
                        <i class="ti-close"></i>
                    </a>
                </h6>
                <div class="list-group list-group-flush">
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-start">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-start">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/man_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-start">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Chat List -->

</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href=index.html>
                        <img class="logo" src="../../assets/media/image/logo.png" alt="logo">
                    </a>
                </div>
            </div>

            <div class="header-body">
                <div class="header-body-left">

                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">





                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">

                                <a style="color: white" href="{{route('oturumukapat')}}"><span class="ml-2 d-sm-inline d-none">Oturumu Kapat</span></a>

                            </a>

                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-header">
                <span>Navigation</span>
                <a href="#">
                    <i class="ti-close"></i>
                </a>
            </div>
            <div class="navigation-menu-body">
                <ul>

                    <li>
                        <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="shopping-cart"></i>
                    </span>
                            <span>Cariler</span>
                        </a>
                        <ul>
                            <li>
                                <a  class="active"
                                    href="{{route('cariler')}}">Cari Çek</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">

                <div class="page-header d-md-flex justify-content-between">


                </div>

                <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Cariler</h6>
                                <div class="table-responsive">

                                    <table class="table table-sm">
                                        <thead>
                                        <tr>
                                            <th scope="col">Ünvan</th>
                                            <th scope="col">Seçenekler</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @include('layouts.partials.errors')
                                        @foreach($response['result'] as $cari)
                                        <tr>
                                            <td>{{$cari['unvan']}}</td>
                                            <td> <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-floating"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-more-alt"></i>
                                                    </a>


                                                    <div class="dropdown-menu">


                                                        <form action="{{route('cariekle',[$firmakodu1,$donemkodu,$cari['_key']])}}"  method="POST">
                                                            {{csrf_field()}}

                                                            <div class="form-row">
                                                                <div class="form-group " style="padding: 5px;">
                                                                    <label for="inputState"></label>
                                                                    <select name="firmakodu" id="firmakodu" class="form-control">
                                                                        @foreach($response1['result'] as $firma)
                                                                            <option value="{{$firma['firmakodu']}}" selected>{{$firma['firmaadi']}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                    <select name="donem" disabled="disabled"    id="donem" class="form-control">

                                                                        <option value=""  selected></option>


                                                                    </select>

                                                                    <div class="form-group col-md-4">
                                                                        <label for="inputState"></label> <br>

                                                                        <input class="btn btn-primary" type="submit" value="Aktar">
                                                                    </div>
                                                                </div>



                                                            </div>


                                                        </form>
                                                    </div>
                                                </div></td>
                                        </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ./ Content -->


            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<script type="text/javascript">

    $(document).ready(function() {
        $('select[name="firmakodu"]').on('change', function() {
            var firmakodu = $(this).val();
            var row = "";

            $('select[name="donem"]').attr("disabled",false).html("");
            if(firmakodu != null) {

                @foreach($response1['result'] as $firma)
                if({{$firma['firmakodu']}} == firmakodu)
                {   @foreach($firma['donemler'] as $donem)
                $('select[name="donem"]').append('<option value="'+ {{$donem['donemkodu']}} +'">' + "{{$donem['baslangictarihi']." ".$donem['bitistarihi']}}" + '</option>');
                    @endforeach

                }


                @endforeach






            }
        });
    });
</script>

<!-- Main scripts -->
<script src="{{asset('../../vendors/bundle.js')}}"></script>

<!-- Datatable -->
<script src="{{asset('../../vendors/dataTable/datatables.min.js')}}"></script>

<script src="{{asset('../../assets/js/examples/pages/orders.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('../../assets/js/app.min.js')}}"></script>
</body>
</html>

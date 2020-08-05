@extends('layouts.master')
<!doctype html>
<html lang="en">

<body>
@section('content')
<!-- Preloader -->



        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                @include('layouts.partials.errors')

                <div class="page-header d-md-flex justify-content-between">

                    <div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('caricek')}}"  method="POST">
                            {{csrf_field()}}

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Firma Adı</label>
                                    <select name="firmakodu" id="firmakodu" class="form-control">
                                        @foreach($response['result'] as $firma)
                                        <option value="{{$firma['firmakodu']}}" selected>{{$firma['firmaadi']}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Dönem</label>
                                    <select name="donem"    id="donem" class="form-control">

                                            <option value=""  selected></option>


                                    </select>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState"></label> <br>

                                    <input class="btn btn-primary" type="submit" value="Cari Çek">
                                </div>

                            </div>


                        </form>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ./ Content -->

<script type="text/javascript">

    $(document).ready(function() {
        $('select[name="firmakodu"]').on('change', function() {
            var firmakodu = $(this).val();
            var row = "";

            $("#donem").attr("disabled",false).html("");
            if(firmakodu != null) {

                @foreach($response['result'] as $firma)
                if({{$firma['firmakodu']}} == firmakodu)
                {   @foreach($firma['donemler'] as $donem)
                    $('select[name="donem"]').append('<option value="'+ {{$donem['donemkodu']}} +'">' + "{{$donem['baslangictarihi']." ".$donem['bitistarihi']}}" + '</option>');
                    @endforeach

                }


                @endforeach



                console.log(firmakodu);


            }
        });
    });
</script>

@endsection
</body>
</html>

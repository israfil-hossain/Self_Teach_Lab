<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/js/toaster.js')}}">
    <link rel="stylesheet" href="{{asset('asset/js/toaster.min.js')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

        <script src="../vendors/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <header>
        <div class="container header-pad">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('classicquiz')}}"><span>Home</span> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <!--<a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </div>
                    </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="modal-content">
            <div class="header">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Quiz Name</h4>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-3">
                        <h4>timer : <?php

                                    $time = 2500;
                                    for ($i=0; $i < $time; $i--) {
                                        echo $i;
                                    }
                            ?>

                        </h4>
                    </div>
                </div>
            </div>

            <form action="{{ route('result_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               @isset($other_lavel_data)
                @foreach($other_lavel_data as $key => $value)

                <div class="question-section" id="question_list">

                    <input type="hidden" value="{{ $value->id }}" name="qst_id[{{ $key }}]">
                    <div id="qst-1" class="">
                        <div id="qiestion1" class="question">
                            <h3>{{ $value->question }}</h3>
                            <h3 id="question"></h3>
                        </div>
                        <div class="options">
                            <table class="table table-dark">
                                <tbody>
                                    <tr class="table-active">
                                        <td><input type="radio" name="option[{{ $key }}]" value="1" id="first_opt[{{ $key }}]">
                                            <label for="first_opt[{{ $key }}]" id="first_opt">{{ $value->first_option }}</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="option[{{ $key }}]" value="2" id="secound_option[{{ $key }}]">
                                            <label for="secound_option[{{ $key }}]" id="secound_option">{{ $value->secound_option }}</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="radio" name="option[{{ $key }}]" value="3" id="third_option[{{ $key }}]">
                                            <label for="third_option[{{ $key }}]" id="third_option">{{ $value->third_option  }}</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="option[{{ $key }}]" value="4" id="fourth_option[{{ $key }}]">
                                            <label for="fourth_option[{{ $key }}]" id="fourth_option">{{ $value->fourth_option }}</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
            @endisset

                <div class="footer">
                    <div class="row">
                        <div class="col-md-6">
                            <nav aria-label="...">
                                {{-- <ul class="pagination">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item">
                                        <a onclick="changeQuestion()" class="page-link" href="#">Next</a>
                                    </li>
                                </ul> --}}
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="submit-btn btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}" ></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script> --}}

<script src="{{ asset('asset/js/popper.min.js') }}"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script> --}}
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script> --}}

@include('sweetalert::alert')
   @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>

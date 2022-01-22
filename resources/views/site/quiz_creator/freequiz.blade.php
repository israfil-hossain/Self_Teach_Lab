<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="../vendors/jquery/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
        <div class="container header-pad">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('homepage')}}"><span>Home</span> </a>
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
        <h1>Free Quiz</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="level-title"> <b>Level One</b> </h4>
                        <a href="javascript:void(0);" id="myBtn"class="btn btn-primary" onclick="lavel_one_quiz(1)">Play</a>
                        {{-- {{ url('freequiz/1') }} --}}

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="level-title"> <b>Level Two</b> </h4>
                        <a href="{{ url('freequiz/other/2')}}"class="btn btn-primary">Play</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="level-title"> <b>Level Three</b> </h4>
                        <a href="{{ url('freequiz/other/3')}}"class="btn btn-primary">Play</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="level-title"> <b>Level Four</b> </h4>
                        <a href="{{ url('freequiz/other/4')}}"class="btn btn-primary">Play</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="caption">
                <h1>Leaderboard</h1>
            </div>
            <div class="leaderboard">
                <table class="table">
                    <thead class="table-head">
                        <th>SN</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Scored Point</th>
                        <th>Level</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rayhan</td>
                            <td>Kobir</td>
                            <td>125</td>
                            <td>Two</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nahid</td>
                            <td>Hasan</td>
                            <td>115</td>
                            <td>Two</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Israfil</td>
                            <td>Islam</td>
                            <td>105</td>
                            <td>Two</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div id="myModal" class="modal" style="display: none">

        {{-- @foreach($quiz_info as $key => $value) --}}

        <div class="modal-content">
            <div class="header">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Quiz Name</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>timer
                            <?php
                            // for($i=0; $i<1000; $i++){
                            //     echo $i*3600;
                            //     }


                             ?>
                        </h4>
                    </div>
                    <div class="col-md-4">
                        <i class="close"><span onclick="closeModal();">&times;</span></i>
                    </div>
                </div>
            </div>

            <form action="{{ route('result_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

               @isset($quiz_info)
                @foreach($quiz_info as $key => $value)

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
        {{-- @endforeach --}}


    </div>

    </div>

    <script>
        function lavel_one_quiz(lavel_id){
            $("#myModal").show();

            $.ajax({
                type: "GET",
                url: "freequiz/" + lavel_id,
                dataType: "json",
            });

        }

        function closeModal(){
            $("#myModal").hide();
        }


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>

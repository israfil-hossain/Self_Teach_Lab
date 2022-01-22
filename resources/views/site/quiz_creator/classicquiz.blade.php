@extends('layouts.include.master')
@section('title','Classic Quiz')
@section('main_section')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    {{-- <span id="msg"></span> --}}
    <header>
        <div class="container header-pad">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{route('home')}}"><span align:center;>Home</span> </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
        <h1>Classic Quiz</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="level-title"> <b>SSC Preparation</b> </h4>
                      <a id="myBtn" href="{{ route('ssc_preparation') }}" class="btn btn-primary">Play</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>HSC Preparation</b> </h4>
                    <a href="{{ route('hsc_preparation') }}" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Admission</b> </h4>
                    <a href="{{ route('admission_preparation') }}" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>BCS Preparation</b> </h4>
                    <a href="{{ route('bcs_preparation') }}" id="last-btn" class="btn btn-primary">Play</a>
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
        <div id="myModal" class="modal" style="display: none">
            <div class="container">
                <div class="modal-content">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-4">
                                <span id="quiz_name"></span>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <i class="close"><span onclick="closeModal();">&times;</span></i>
                            </div>
                        </div>
                    </div>
                        <div class="main_body p-5">

                            <input type="hidden" value="" id="quiz_class_type" name="quiz_class_type">

                            <div class="row">

                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                      <div class="card-body">
                                        <h4 class="level-title"> <b>Physics</b> </h4>
                                        <a href="javascript:void(0);" id="last-btn" onclick="quiz_view(1)" class="btn btn-primary">Play</a>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <h4 class="level-title"> <b>Math</b> </h4>
                                      <a href="javascript:void(0);" onclick="quiz_view(2)" id="myBtn"class="btn btn-primary">Play</a>
                                    </div>
                                  </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                        <h4 class="level-title"> <b>Chemestry</b> </h4>
                                        <a href="javascript:void(0);" onclick="quiz_view(3)" id="last-btn" class="btn btn-primary">Play</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                        <h4 class="level-title"> <b>Biology</b> </h4>
                                        <a href="javascript:void(0);" onclick="quiz_view(4)" id="last-btn" class="btn btn-primary">Play</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>

    function quiz_class_name(class_type){
        if(class_type == 1){
            $("#quiz_name").html('<h4>SSC Preparation</h4>');
            $("#quiz_class_type").val(1);
        }else if(class_type == 2){
             $("#quiz_name").html('<h4>HSC Preparation</h4>');
             $("#quiz_class_type").val(2);

        }else if(class_type == 3){
             $("#quiz_name").html('<h4>Admission</h4>');
             $("#quiz_class_type").val(3);

        }else if(class_type == 4){
             $("#quiz_name").html('<h4>BCS Preparation</h4>');
             $("#quiz_class_type").val(4);
        }
        $('#myModal').show();
    }

    function closeModal(){
        $('#myModal').hide();
    }

    function quiz_view(subject_id){
        var quiz_class_type_id =  $("#quiz_class_type").val();

        // window.open("classic_quiz/" + quiz_class_type_id + "/" + subject_id);

        // $.ajax({
        //     type: "POST",
        //     url: "/classic_quiz/view",
        //     data:{
        //         quiz_class_type_id,
        //         subject_id,
        //     },
        //     dataType: "json",
        //     success: function (data) {
        //             $("#msg").html(data.html);
        //         }
        // )};
    }
    </script>
@endsection





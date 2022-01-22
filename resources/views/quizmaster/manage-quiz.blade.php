<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz Master Create Quiz</title>

    <!-- Custom fonts for this template-->
    <link href="../vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="../vendors/jquery/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" onload="field_hide();">
    @if(Session::has('message'))
        <p class="alert alert-info float-right">{{ Session::get('message') }}</p>
    @endif
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-text mx-3">QUIZ MASTER <sup><small>welcome</small></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            {{-- <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('homepage')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Create Quiz</h6>
                        <a class="collapse-item active" href="{{route('quizmaster.create-quiz')}}">Quiz</a>
                        <a class="collapse-item " href="{{route('quizmaster.manage-quiz')}}">Manage Quiz</a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nahid Hasan</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Manage Quiz</h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Select to manage Quiz</h6>
                                </div>
                               <form action="{{asset('quiz/view')}}" method="get" enctype="multipart/form-data" id="quiz_view_form">
                                @csrf
                                <div class="card-body">
                                    <div class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Quiz Type</label>
                                        </div>
                                        <select onchange="quizTypeChanger()" required name="quiz_type" class="custom-select" id="inputGroupSelect01">
                                        <option selected value="">==select Quiz Type First==</option>
                                          <option value="1">Free Quiz</option>
                                          <option value="2">Classic Quiz</option>
                                        </select>
                                    </div>

                                    <div id="class-level" class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Class level</label>
                                        </div>
                                        <select class="custom-select" name="class_lavel" id="inputGroupSelect02">
                                          <option value="">==select class lavel==</option>
                                          <option value="1">SSC</option>
                                          <option value="2">HSC</option>
                                          <option value="3">University Admission</option>
                                          <option value="4">BCS</option>
                                        </select>
                                    </div>
                                    <div id="quiz-level" class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect03">Quiz level</label>
                                        </div>
                                        <select class="custom-select" name="quiz_lavel" id="inputGroupSelect03">
                                        <option selected value="">==select Quiz lavel==</option>
                                          <option  value="1">level One</option>
                                          <option value="2">level two</option>
                                          <option value="3">level three</option>
                                          <option value="4">level four</option>
                                        </select>
                                    </div>
                                    <div id="subject" class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect04">Subject</label>
                                        </div>
                                        <select onchange="" class="custom-select" name="subject" id="inputGroupSelect04">
                                            <option selected value="">==select Subject==</option>
                                          <option  value="1">Math</option>
                                          <option value="2">English</option>
                                          <option value="3">Physics</option>
                                          <option value="4">Chemistry</option>
                                        </select>
                                    </div>

                                    <div id="subject" class="input-group mb-3 mt-3">
                                        <button type="submit" value="submit">View Quiz</button>
                                    </div>

                                </div>

                               </form>
                            </div>



                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6"><h6 class="m-0 font-weight-bold text-primary">Edit Question</h6></div>
                                        <div id="add-question" class="col-md-6 col-sm-6">  </div>
                                    </div>


                                </div>

                <form action="{{ route('update_quiz') }}" method="post" enctype="multipart/form-data">
                    @csrf

                                    @if (isset($quiz_data))
                                        @foreach ($quiz_data as $key => $value)

                                        <div id="card-body" class="card-body">
                                            <div id="card-items" class="card-item">

                                                <h6 class="text-center">Question no: <span class="counter">{{ ++$key }}</span></h6>

                                                <input type="hidden" name="qst_id[]" value="{{ $value->id }}">

                                                <input id="question" type="text" name="question[]" class="form-control" value="{{ $value->question }}" placeholder="Write you Question here" aria-label="Question" aria-describedby="basic-addon1">

                                                <input id="secondoption" type="text" name="first_option[]" value="{{ $value->first_option }}" class="form-control" placeholder="First option" aria-label="Question" aria-describedby="basic-addon1">

                                                <input id="thirdoption" type="text" name="secound_option[]" class="form-control" value="{{ $value->secound_option }}" placeholder="Secoond option" aria-label="Question" aria-describedby="basic-addon1">

                                                <input type="text" name="third_option[]" class="form-control" value="{{ $value->third_option }}" placeholder="Third option" aria-label="Question" aria-describedby="basic-addon1">

                                                <input type="text" name="fourth_option[]" class="form-control" value="{{ $value->fourth_option }}" placeholder="Fourth option" aria-label="Question" aria-describedby="basic-addon1">

                                                <input type="number" name="result[]" class="form-control" value="{{ $value->result }}" placeholder="Result No" aria-label="Question" aria-describedby="basic-addon1">

                                                <i  onclick="deleteBtn(this)" class="fas fa-fw fa-trash text-danger float-right mt-4 delete-btn"></i><br>

                                            </div>
                                        </div>
                                        @endforeach
                                    @endif

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6"><h6 class="m-0 font-weight-bold text-primary">Are you want to save changes?</h6></div>
                                    </div>
                                </div>
                                <div id="card-body" class="card-body">
                                    <div id="" class="card-item">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Save
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title id="exampleModalLabel">Are you sure to save changes?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    Quiz are save to the target Quiz level. Please make sure your quiz question and level are correct!
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" value="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SelfTeachLab 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logOut') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->

    <script src="../vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <script>
        function field_hide(){
            $("#class-level").hide();
            $("#quiz-level").hide();
            $("#subject").hide();
        }
        function quizTypeChanger(){
            var type = $("#inputGroupSelect01").val();

            if(type == 1){
                $("#class-level").hide();
                $("#quiz-level").show();
                $("#subject").hide();
            }else{
                $("#class-level").show();
                $("#quiz-level").hide();
                $("#subject").show();
            }

        }
        // function lavel_wize_quiz(){
        //     var lavel_type = $("#inputGroupSelect03").val();
        //     var quiz_type = $("#inputGroupSelect01").val();
        //     // console.log(lavel_type)
        //     $.ajax({
        //         type: "GET",
        //         url: "quiz/view",
        //         data:{
        //             lavel_type,
        //             quiz_type,
        //             "_token": "{{ csrf_token() }}",
        //         },
        //         dataType: "json",
        //     });
        // }
    </script>

</body>

</html>

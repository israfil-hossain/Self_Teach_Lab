<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="url" content="{{ url('/') }}">
    <meta name="_token" content="{{ csrf_token() }}">



    <script src="{{asset('sweetalert2.all.min.js')}}"></script>

    <title>Quiz Master Create Quiz</title>

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css')}}" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendors/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"/>
        

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

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

                    <!-- Topbar Search -->
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
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
                    <h1 class="h3 text-head mb-4 text-gray-800">Create Quiz</h1>

                <form action="{{ route('quiz_save') }}" method="POST" id="quiz_save_form" enctype="multipart/form-data">
                {{-- <form action="javascript:void(0)" method="" id="quiz_save_form" enctype="multipart/form-data" onsubmit="saveQuiz()"> --}}
                    @csrf
                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Quiz</h6>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect01">Quiz Type</label>
                                        </div>
                                        <select onchange="quizTypeChanger()" name="quiz_type" class="quiz_type custom-select" id="inputGroupSelect01">
                                          <option  value="1">Free Quiz</option>
                                          <option  value="2">Classic Quiz</option>
                                        </select>
                                    </div>

                                    <div id="level_class_id" class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text" for="inputGroupSelect02">Class level</label>
                                        </div>
                                        <select class="custom-select" name="level_class_id" id="inputGroupSelect02">
                                          <option value="1">SSC</option>
                                          <option value="2">HSC</option>
                                          <option value="3">University Admission</option>
                                          <option value="4">BCS</option>
                                        </select>
                                    </div>
                                    <div id="subject" class="input-group">
                                        <span class="input-group-text">Subject Name</span>
                                        {{-- <input class="form-control subject_name" name="subject_name" aria-label="With textarea"></input> --}}
                                        <select onchange="" class="custom-select" name="subject_name">
                                            <option selected value="">==select Subject==</option>
                                          <option  value="1">Math</option>
                                          <option value="2">English</option>
                                          <option value="3">Physics</option>
                                          <option value="4">Chemistry</option>
                                        </select>
                                    </div>

                                    <div id="level" class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                          <label class="input-group-text "  for="inputGroupSelect04">Level</label>
                                        </div>
                                        <select class="custom-select level"name="lavel" id="inputGroupSelect04">
                                          <option selected value="">==select Lavel==</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                          <option value="4">Four</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6"><h6 class="m-0 font-weight-bold text-primary">Add your Question</h6></div>
                                        <div id="add-question" class="col-md-6 col-sm-6"> <i class="add-qus-btn fas fa-fw fa-plus float-right"></i> </div>
                                    </div>


                                </div>
                                <div id="card-body" class="card-body">
                                    <div id="card-items" class="card-item">

                                    </div>
                                </div>
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
                                                <button type="submit" class="btn btn-primary">Save changes</button>
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
                        <span>Copyright &copy; SelfteachLab 2020</span>
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
    <script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendors/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script>
        var count=1;
        var element;
        var token = $("meta[name='_token']").attr("content");

let path = $("meta[name='url']").attr("content");
        addQuestion();
        quizTypeChanger();
        document.getElementById('add-question').addEventListener("click", function(){
            addQuestion();
        })


        function addQuestion(){
            $(document).ready(function() {
                $('#card-items').append(
                    $('<div>').prop({
                        id: 'innerdiv',
                        innerHTML: '<h6 class="text-center">Question no: <span class="counter">0</span></h6><input type="text" id="question" name="question[]" class="m-2 form-control" placeholder="Write you Question here" aria-label="Question" aria-describedby="basic-addon1"><input type="text" class=" m-2 form-control" id="first_option" name="first_option[]" placeholder="First option" aria-label="Question" aria-describedby="basic-addon1"><input type="text" class=" m-2 form-control" id="secound_option" name="secound_option[]" placeholder="Secoond option" aria-label="Question" aria-describedby="basic-addon1"><input type="text" class="m-2 form-control" id="third_option" name="third_option[]" placeholder="Third option" aria-label="Question" aria-describedby="basic-addon1"><input type="text" class="m-2 form-control" id="forth_option" name="forth_option[]" placeholder="Fourth option" aria-label="Question" aria-describedby="basic-addon1"><input type="text" class=" m-2 form-control" id="result" name="result[]" placeholder="Enter Your result" aria-label="Question" aria-describedby="basic-addon1"><i  onclick="deleteBtn(this)" class="fas fa-fw fa-trash text-danger float-right mt-4 delete-btn"></i><br>',
                        className: 'item mb-3 '
                    })

                );
                counter();
            });

        }

        function counter(){
            var num = document.getElementsByClassName('counter');
            for(var i=0; i<num.length; i++){
                num[i].innerHTML=i+1;
            }
        }

        function reorderQuestion(){
            var num = document.getElementsByClassName('counter');
            for(var i=0; i<num.length; i++){
                num[i].innerHTML=i+1;
            }
        }

        function deleteBtn(id){
            id.parentNode.parentNode.removeChild(id.parentNode);
            reorderQuestion();
        }

        function quizTypeChanger(){
            const quizType = document.getElementById('inputGroupSelect01').value;
            const classLevel = document.getElementById('level_class_id');
            const level = document.getElementById('level');
            const subject = document.getElementById('subject');
            if(quizType==1){
                classLevel.setAttribute('style', 'display: none');
                subject.setAttribute('style', 'display: none');
                level.removeAttribute('style', 'display: none');

            }
            if(quizType==2){
                classLevel.removeAttribute('style', 'display: block');
                subject.removeAttribute('style', 'display: block');
                level.setAttribute('style', 'display: none');
            }
        }

        // function save_quiz(){
        //     var list = [];


        //     for (let i = 0; i < array.length; i++) {

        //         list[i] = ;

        //     }
        // }


    </script>

   @include('sweetalert::alert')
   @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>

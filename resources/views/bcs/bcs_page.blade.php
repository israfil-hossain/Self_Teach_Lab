<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <div class="container header-pad">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{route('home')}}"><span>Home</span> </a>
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
        <h1>Quiz Area</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="level-title"> <b>Math</b> </h4>
                  <form action="{{ route('ssc_questions') }}" method="get">
                    {{-- @csrf --}}
                    <input type="hidden" value="4" name="class_id">
                    <input type="hidden" value="1" name="subject_id">
                    <button type="submit" class="btn btn-primary">Play</button>
                </form>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Chemestry</b> </h4>
                    <form action="{{ route('ssc_questions') }}" method="get">
                        {{-- @csrf --}}
                        <input type="hidden" value="4" name="class_id">
                        <input type="hidden" value="2" name="subject_id">
                        <button type="submit" class="btn btn-primary">Play</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Biology</b> </h4>
                    <form action="{{ route('ssc_questions') }}" method="get">
                        {{-- @csrf --}}
                        <input type="hidden" value="4" name="class_id">
                        <input type="hidden" value="3" name="subject_id">
                        <button type="submit" class="btn btn-primary">Play</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Physics</b> </h4>
                    <form action="{{ route('ssc_questions') }}" method="get">
                        {{-- @csrf --}}
                        <input type="hidden" value="4" name="class_id">
                        <input type="hidden" value="4" name="subject_id">
                        <button type="submit" class="btn btn-primary">Play</button>
                    </form>
                  </div>
                </div>
              </div>

        </div>
    </div>
</div>

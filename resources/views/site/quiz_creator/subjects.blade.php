<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <div class="container header-pad">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><span>Home</span> </a>
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
                  <h4 class="level-title"> <b>Physics</b> </h4>
                  <a href="#"  id="myBtn"class="btn btn-primary">Play</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="level-title"> <b>Math</b> </h4>
                        <a href="#" id="last-btn" onclick="fun()" class="btn btn-primary">Play</a>
                      </div>
                    </div>
                  </div>
                  
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Chemestry</b> </h4>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Biology</b> </h4>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>



        </div>
    </div>
</div>

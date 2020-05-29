<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Us | Safe Yourself and Others</title>
    

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Added Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('assets/Dist/Icon/logo.png')}}">
</head>
<body>

        {{-- Navbar Website --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/Dist/Icon/Safe-us.png') }}" width="160" height="52" class="d-inline-block align-top" alt="" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Symptoms</a>
                        <a class="nav-item nav-link" href="#">Contagion</a>
                        <a class="nav-item nav-link" href="#">Prevention</a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                        <button class="btnme btn-navbar"><i class="fas fa-phone-alt"></i> Emergency Call</button>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Content --}}
        <div class="container">
            <div class="working-area">
                <div class="row content-area">
                    <div class="col-md-6 area-left">
                        <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Alert</span>
                        <h3 class="message-covid-1">Stay At Home Quarantine<br>To Stop Corona Virus</h3>
                        <p class="desc-covid-1">There Is No Spesific Medicine To Prevent Or Treat Coronovirus<br>
                        Disease (COVID-19).People May Need Supportive Care To.</p>
                        <button type="button" class="btn btnme2 btn-symptoms">Check Symptoms</button>
                    </div>
                    <div class="col-md-6 area-right">
                        <img src="{{ asset('assets/Dist/Design/Art-1.png')}}" width="574px" height="666px" alt="Symptoms Covid-19">
                    </div>
                </div>
            </div>
        </div>


    {{-- Added Script --}}
    <script src="{{asset('assets/Js/main.js')}}" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/0ef25f29a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
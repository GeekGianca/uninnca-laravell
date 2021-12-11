<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Uninnca Laravel Project</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="page-top">
<header class="bg-primary text-center py-5 mb-4">
    <div class="container">
        <h1 class="fw-light text-white">Meet Laravel Uninnca Team</h1>
    </div>
</header>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Team Member 1 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('images/ic_1.jpeg')}}" width="350" height="250" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50"><a href="/cv1">Diego Ernesto Puentes</a></div>
                    <div class="card-text text-black-50"><a href="/form1">Formulario</a></div>
                </div>
            </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('images/Deivis.png')}}" width="350" height="250" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50"><a href="/cv2">Deivis Javier Miranda</a></div>
                    <div class="card-text text-black-50"><a href="/form4">Formulario</a></div>
                </div>
            </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('images/ic_3.jpg')}}" width="350" height="250" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50"><a href="/cv4">Gian Carlos Cuello</a></div>
                    <div class="card-text text-black-50"><a href="/form3">Formulario</a></div>
                </div>
            </div>
        </div>
        <!-- Team Member 4 -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('images/ic_2.jpeg')}}" width="350" height="250" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Team Member</h5>
                    <div class="card-text text-black-50"><a href="/cv3">Javier Rodriguez</a></div>
                    <div class="card-text text-black-50"><a href="/form2">Formulario</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
</body>
</html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @include('Layout.layout')
</head>


<body>

<div class="container-fluid">

    <div class="row header-web">
        <div class="col">
            @include('Common templates.header')
        </div>
    </div>

    <div class="row header-mobile">
        <div class="col">
            @include('Common templates.mobile_header')
        </div>
    </div>


    <div>
        <div class="row" >
            <div class="col-4">
                {{--image moet er nog bij--}}
                <img src="" alt="het werkt niet">




            </div>

            <div class="col-4">

                <p> Mannen fiets</p>

            </div>




        </div>
    </div>
</div>
</body>
</html>
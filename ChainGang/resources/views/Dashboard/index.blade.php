<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        {{--<thead class="thead-dark">--}}
        <h1>Nieuwste review</h1>
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">Review</th>
            <th style="color: #ffffff" scope="col">Waardering</th>
        </tr>
        {{--</thead>--}}
        <tbody>
        @foreach($review as  $data)
            <tr>
                <td><a>{{$data->review_omschrijving}}</a></td>
                <td>{{$data->review_waardering}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table">
        {{--<thead class="thead-dark">--}}
        <h1>Nieuwste klant</h1>
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">Gebruikersnaam</th>
            <th style="color: #ffffff" scope="col">Email</th>
            <th style="color: #ffffff" scope="col">Voornaam</th>
            <th style="color: #ffffff" scope="col">Achternaam</th>
            <th style="color: #ffffff" scope="col">Telefoonnummer</th>
            <th style="color: #ffffff" scope="col">Straat</th>
            <th style="color: #ffffff" scope="col">Postcode</th>
            <th style="color: #ffffff" scope="col">Plaats</th>
        </tr>
        {{--</thead>--}}
        <tbody>
        @foreach($user as  $data)
            <tr>
                <td><a>{{$data->user_gebruikersnaam}}</a></td>
                <td>{{$data->email}}</td>
                <td>{{$data->user_voornaam}}</td>
                <td>{{$data->user_achternaam}}</td>
                <td>{{$data->user_telefoonnummer}}</td>
                <td>{{$data->user_straat}}</td>
                <td>{{$data->user_postcode}}</td>
                <td>{{$data->user_plaats}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table">
        {{--<thead class="thead-dark">--}}
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">Voornaam klant</th>
            <th style="color: #ffffff" scope="col">Achternaam klant</th>
            <th style="color: #ffffff" scope="col">Rekeningnummer</th>
            <th style="color: #ffffff" scope="col">Straat</th>
        </tr>
        {{--</thead>--}}
        <tbody>
        @foreach($bestelling as  $data)
            <tr>
                <td><a>{{$data->voornaam}}</a></td>
                <td>{{$data->achternaam}}</td>
                <td>{{$data->rekeningnummer}}</td>
                <td>{{$data->adres}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>









{{--<table style="width:100%" border="1">--}}
{{--<tr>--}}
{{--<th>Id</th>--}}
{{--<th>First name</th>--}}
{{--<th>Prefix</th>--}}
{{--<th>Last name</th>--}}
{{--<th>Email</th>--}}
{{--<th>Department</th>--}}
{{--<th>Edit</th>--}}
{{--<th>Delete</th>--}}
{{--</tr>--}}

{{--</table>--}}


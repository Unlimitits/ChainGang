<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        {{--<thead class="thead-dark">--}}
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
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
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
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
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
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


<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Lastname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Email')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Department')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Role')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Department')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Role')}}</th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach($medewerker as  $data)--}}
        <tr>
            <td><a>{{$klant->user_gebruikersnaam}}</a></td>
            <td>{{$klant->email}}</td>
            <td>{{$klant->user_voornaam}}</td>
            <td>{{$klant->user_achternaam}}</td>
            <td>{{$klant->user_telefoonnummer}}</td>
            <td>{{$klant->user_straat}}</td>
            <td>{{$klant->user_postcode}}</td>
            <td>{{$klant->user_plaats}}</td>

        </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
</div>

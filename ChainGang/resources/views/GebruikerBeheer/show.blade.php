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
            <th style="color: #ffffff" scope="col"></th>
            <th style="color: #ffffff" scope="col"></th>
            <th style="color: #ffffff" scope="col"></th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach($medewerker as  $data)--}}
            <tr>
                <td><a>{{$medewerker->gebruiker_voornaam}}</a></td>
                <td>{{$medewerker->gebruiker_achternaam}}</td>
                <td>{{$medewerker->gebruiker_emailadres}}</td>
                <td>{{$medewerker->gebruiker_telefoonnummer}}</td>
                <td>{{$medewerker->gebruiker_gebruikersnaam}}</td>
                <td>{{$medewerker->gebruiker_wachtwoord}}</td>




                <td>
                    <form method="post" action="{{route('medewerker.edit', [$medewerker->gebruiker_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="Edit" class="btn btn-outline-dark">{{__('user.Edit')}}</button>
                    </form>

                </td>


                <td>
                    <form method="post" action="{{route('medewerker.destroy', [$medewerker->gebruiker_id])}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" value="Delete"
                                class="btn btn-outline-dark">{{__('user.Delete')}}</button>
                    </form>

                </td>
            </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
</div>

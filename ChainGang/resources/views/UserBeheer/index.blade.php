<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        {{--<thead class="thead-dark">--}}
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Lastname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Email')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Department')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Role')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Email')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Department')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Role')}}</th>
            <th style="color: #ffffff" scope="col"></th>
            <th style="color: #ffffff" scope="col"></th>
            <th style="color: #ffffff" scope="col"></th>
        </tr>
        {{--</thead>--}}
        <tbody>
        @foreach($klant as  $data)
            <tr>
                <td><a>{{$data->user_gebruikersnaam}}</a></td>
                <td>{{$data->email}}</td>
                <td>{{$data->user_voornaam}}</td>
                <td>{{$data->user_achternaam}}</td>
                <td>{{$data->user_telefoonnummer}}</td>
                <td>{{$data->user_straat}}</td>
                <td>{{$data->user_postcode}}</td>
                <td>{{$data->user_plaats}}</td>


                <td>
                    <form method="post" action="{{route('klant.show', [$data->id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>
                    </form>

                </td>


                <td>
                    <form method="post" action="{{route('klant.destroy', [$data->id])}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" value="Delete"
                                class="btn btn-outline-dark">{{__('user.Delete')}}</button>
                    </form>

                </td>
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


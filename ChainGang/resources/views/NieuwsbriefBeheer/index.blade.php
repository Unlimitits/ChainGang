<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        {{--<thead class="thead-dark">--}}
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Lastname')}}</th>
            <th style="color: #ffffff" scope="col"></th>
        </tr>
        {{--</thead>--}}
        <tbody>
        @foreach($nieuwsbrief as  $data)
            <tr>
                <td><a>{{$data->nieuwsbrief_titel}}</a></td>
                {{--<td>{{$data->nieuwsbrief_text}}</td>--}}
                <td>{{str_limit($data->nieuwsbrief_text, 500)}}</td>

                <td>{{$data->nieuwsbrief_datum}}</td>


                <td>
                    <form method="post" action="{{route('nieuwsbrief.show', [$data->nieuwsbrief_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>
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


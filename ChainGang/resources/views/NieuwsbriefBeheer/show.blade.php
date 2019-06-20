<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Lastname')}}</th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach($medewerker as  $data)--}}
        <tr>
            <td><a>{{$nieuwsbrief->nieuwsbrief_titel}}</a></td>
            <td>{{$nieuwsbrief->nieuwsbrief_text, 500}}</td>
            <td>{{$nieuwsbrief->nieuwsbrief_datum}}</td>

        </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
</div>



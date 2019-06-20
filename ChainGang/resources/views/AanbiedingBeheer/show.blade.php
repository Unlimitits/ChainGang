<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach($medewerker as  $data)--}}
            <tr>
                <td>{{$aanbieding->aanbieding_naam}}</td>
                <td>{{$aanbieding->aanbieding_kortingpct}}</td>
            </tr>
        {{--@endforeach--}}
        </tbody>
    </table>
</div>
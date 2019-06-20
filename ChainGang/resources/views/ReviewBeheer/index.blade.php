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
        @foreach($review as  $data)
            <tr>
                <td><a>{{$data->review_omschrijving}}</a></td>
                <td>{{$data->review_waardering}}</td>

                <td>
                    <form method="post" action="{{route('review-beheer.destroy', [$data->review_id])}}">
                        @method('DELETE')
                        @csrf
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


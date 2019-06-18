<h1>index</h1>

@include('Layout.layout')


<div class="container">
    <table class="table">
        {{--<thead class="thead-dark">--}}
        <tr style="background-color: #000000">
            <th style="color: #ffffff" scope="col">{{__('user.Firstname')}}</th>
            <th style="color: #ffffff" scope="col">{{__('user.Prefix')}}</th>
            <th style="color: #ffffff" scope="col"></th>
            <th style="color: #ffffff" scope="col"></th>
            <th style="color: #ffffff" scope="col"></th>
        </tr>
        {{--</thead>--}}
        <tbody>
        @foreach($aanbieding as  $data)
            <tr>
                <td>{{$data->aanbieding_naam}}</td>
                <td>{{$data->aanbieding_kortingpct}}</td>

                <td>
                    <form method="post" action="{{route('aanbieding.show', [$data->aanbieding_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>
                    </form>

                </td>

                <td>
                    <form method="post" action="{{route('aanbieding.edit', [$data->aanbieding_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="Edit" class="btn btn-outline-dark">{{__('user.Edit')}}</button>
                    </form>

                </td>


                <td>
                    <form method="post" action="{{route('aanbieding.destroy', [$data->aanbieding_id])}}">
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
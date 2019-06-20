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
        @foreach($fiets as  $data)

            <tr>
                <td>{{$data->fiets_naam}}</td>
                <td>{{$data->fiets_merk}}</td>
                <td>{{$data->fiets_serie}}</td>
                <td>{{$data->fiets_type}}</td>
                <td>{{$data->fiets_motorpositie}}</td>
                <td>{{$data->fiets_kleur}}</td>
                <td>{{$data->fiets_frameType}}</td>
                <td>{{$data->fiets_jaar}}</td>
                <td>{{$data->fiets_motortechniek}}</td>

                <td>
                    <form method="post" action="{{route('fiets-beheer.show', [$data->fiets_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="View" class="btn btn-outline-dark">{{__('user.View')}}</button>
                    </form>

                </td>

                <td>
                    <form method="post" action="{{route('fiets-beheer.edit', [$data->fiets_id])}}">
                        {{ csrf_field() }}
                        @method('GET')
                        <button type="submit" value="Edit" class="btn btn-outline-dark">{{__('user.Edit')}}</button>
                    </form>

                </td>


                <td>
                    <form method="post" action="{{route('fiets-beheer.destroy', [$data->fiets_id])}}">
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
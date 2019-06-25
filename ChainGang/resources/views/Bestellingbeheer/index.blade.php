@foreach($bestelling as  $data)
    <tr>
        <td>{{$data->voornaam}}</td>
        <br>
        <td>{{$data->achternaam}}</td>
        <br>
        <td>{{$data->rekeningnummer}}</td>
        <br>
        <td>{{$data->adres}}</td>
    </tr>
    @endforeach

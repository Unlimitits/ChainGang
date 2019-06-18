{{--@extends('layouts.app')--}}
@include('Layout.layout')
<div class="container">
    <h1>Create medewerker</h1>
    <form action="{{ route('aanbieding.update', $id) }}" method="post" >

        @csrf
        <input name="_method" type="hidden" value="PATCH">

        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul class=" navbar-nav mr-auto">
                    @foreach ($errors->all() as $error)
                        <li class="nav-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Naam</label>
                <input type="text" class="form-control" name="aanbieding_naam" placeholder="Naam" required value="{{$aanbieding->aanbieding_naam}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_kortingpct">Percentage</label>
                <input type="number" class="form-control" name="aanbieding_kortingpct" min="1" max="99" placeholder="Percentage" required value="{{$aanbieding->aanbieding_kortingpct}}">
            </div>
        </div>

        <button type="submit" class="btn btn-light" style="background-color: #000000; color: #ffffff">Submit</button>

    </form>

</div>




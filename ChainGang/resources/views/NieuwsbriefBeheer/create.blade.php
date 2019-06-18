{{--@extends('layouts.app')--}}
@include('Layout.layout')
<div class="container">
    <h1>Create Aanbieding</h1>
    <form action="{{ route('nieuwsbrief.store') }}" method="post" >
        @csrf

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
            <div class="form-group col-md-12">
                <label for="aanbieding_naam">Naam</label>
                <input type="text" class="form-control" name="nieuwsbrief_titel" placeholder="Naam" required>
            </div>

            <div class="form-group col-md-12">
                <label for="aanbieding_kortingpct">Tekst</label>
                <textarea name="nieuwsbrief_text" class="form-control" cols="30" rows="10" required></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-light" style="background-color: #000000; color: #ffffff">Submit</button>


    </form>

</div>




{{--@extends('layouts.app')--}}
@include('Layout.layout')
<div class="container">
    <h1>Create medewerker</h1>
    <form action="{{ route('fiets-beheer.update', $id) }}" method="post" >

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
                <input type="text" class="form-control" name="fiets_naam" placeholder="Naam" required value="{{$fiets->fiets_naam}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">serie</label>
                <input type="text" class="form-control" name="fiets_serie" placeholder="serie" required value="{{$fiets->fiets_serie}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Motor techniek</label>
                <input type="text" class="form-control" name="fiets_motortechniek" placeholder="motor techniek" required value="{{$fiets->fiets_motortechniek}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Motor positie</label>
                <input type="text" class="form-control" name="fiets_motorpositie" placeholder="Motor positie" required value="{{$fiets->fiets_motorpositie}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Versnellingen</label>
                <input type="text" class="form-control" name="fiets_versnellingen" placeholder="versnellingen" required value="{{$fiets->fiets_versnellingen}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Materiaal</label>
                <input type="text" class="form-control" name="fiets_materiaal" placeholder="Fiets materiaal" required value="{{$fiets->fiets_materiaal}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Kleur</label>
                <input type="text" class="form-control" name="fiets_kleur" placeholder="Kleur" required value="{{$fiets->fiets_kleur}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">frame Type</label>
                <input type="text" class="form-control" name="fiets_frameType" placeholder="Frame type" required value="{{$fiets->fiets_frameType}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">jaar</label>
                <input type="text" class="form-control" name="fiets_jaar" placeholder="jaar" required value="{{$fiets->fiets_jaar}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Merk</label>
                <input type="text" class="form-control" name="fiets_merk" placeholder="Merk" required value="{{$fiets->fiets_merk}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Type</label>
                <input type="text" class="form-control" name="fiets_type" placeholder="Type" required value="{{$fiets->fiets_type}}">
            </div>

            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Prijs</label>
                <input type="text" class="form-control" name="fiets_prijs" placeholder="Prijs" required value="{{$fiets->fiets_prijs}}">
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="aanbieding_naam">Omschrijving</label>
                <input type="text" class="form-control" name="fiets_omschrijving" placeholder="Naam" required value="{{$fiets->fiets_omschrijving}}">
            </div>

            <div class="form-group col-md-4">
                <label for="department_id" >{{__('user.selectadepartment')}}</label>
                <select name="aanbieding_id"  class="custom-select" id="inputGroupSelect01">
                    @foreach(\App\Aanbieding::orderBy('aanbieding_naam')->get() as $aanbieding)
                        <option value="{{$aanbieding->aanbieding_id}}" {{$fiets->aanbieding_id == $aanbieding->id  ? 'selected' : ''}}>{{$aanbieding->aanbieding_naam}}</option>
                    @endforeach
                </select>
            </div>


        </div>

        <button type="submit" class="btn btn-light" style="background-color: #000000; color: #ffffff">Submit</button>

    </form>

</div>




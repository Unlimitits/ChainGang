{{--@extends('layouts.app')--}}
@include('Layout.layout')
    <div class="container">
        <h1>Create Aanbieding</h1>
        <form action="{{ route('fiets-beheer.store') }}" method="post" enctype="multipart/form-data">
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
                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Naam</label>
                    <input type="text" class="form-control" name="fiets_naam" placeholder="Naam" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">serie</label>
                    <input type="text" class="form-control" name="fiets_serie" placeholder="serie" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Motor techniek</label>
                    <input type="text" class="form-control" name="fiets_motortechniek" placeholder="motor techniek" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Motor positie</label>
                    <input type="text" class="form-control" name="fiets_motorpositie" placeholder="Motor positie" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Versnellingen</label>
                    <input type="text" class="form-control" name="fiets_versnellingen" placeholder="versnellingen" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Materiaal</label>
                    <input type="text" class="form-control" name="fiets_materiaal" placeholder="Fiets materiaal" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Kleur</label>
                    <input type="text" class="form-control" name="fiets_kleur" placeholder="Kleur" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">frame Type</label>
                    <input type="text" class="form-control" name="fiets_frameType" placeholder="Frame type" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">jaar</label>
                    <input type="text" class="form-control" name="fiets_jaar" placeholder="jaar" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Merk</label>
                    <input type="text" class="form-control" name="fiets_merk" placeholder="Merk" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Type</label>
                    <input type="text" class="form-control" name="fiets_type" placeholder="Type" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Prijs</label>
                    <input type="text" class="form-control" name="fiets_prijs" placeholder="Prijs" required>
                </div>
            </div>



            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="aanbieding_naam">Omschrijving</label>
                    <input type="text" class="form-control" name="fiets_omschrijving" placeholder="Naam" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="work_hours">{{__('user.Selectarole')}}</label>
                    <select name="aanbieding_id" class="custom-select" id="inputGroupSelect01">
                        <option>{{__('user.Selectarole')}}</option>
                        @foreach(\App\Aanbieding::orderBy('aanbieding_naam')->get() as $aanbieding)
                            <option value="{{$aanbieding->aanbieding_id}}">{{$aanbieding->aanbieding_naam}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
                </div>
            </div>

            <button type="submit" class="btn btn-light" style="background-color: #000000; color: #ffffff">Submit</button>


        </form>

    </div>




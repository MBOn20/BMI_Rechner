@extends('posts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 30px; font-weight: bold; line-height: 36px; margin: 0 0 24px;">Neuer Eintrag:</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('posts.index') }}"> Zurück</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lebensmittel:</strong>
                <input type="text" name="lebensmittel" class="form-control" placeholder="Trage den Namen ein">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kalorien:</strong>
                <input type="text" name="kcals" class="form-control" placeholder="kcals">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gut für:</strong>
                <input type="text" name="gutfuer" class="form-control" placeholder="Wo für ist das Lebensmittel gut?">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anmerkung:</strong>
                <input type="text" name="anmerkung" class="form-control" placeholder="Sonstige Anmerkungen">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Hinzufügen</button>
        </div>
    </div>
   
</form>
@endsection
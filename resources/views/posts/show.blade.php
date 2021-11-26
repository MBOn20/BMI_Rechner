@extends('posts.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-size: 30px; font-weight: bold; line-height: 36px; margin: 0 0 24px;"> 
                Lebsensmittelübersicht:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('posts.index') }}"> Zurück</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lebensmittel:</strong>
                {{ $post->lebensmittel }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kalorien:</strong>
                {{ $post->kcals }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gut für:</strong>
                {{ $post->gutfuer }}
            </div>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anmerkungen:</strong>
                {{ $post->anmerkung }}
            </div>
        </div>
    </div>
@endsection
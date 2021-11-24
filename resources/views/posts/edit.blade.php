@extends('posts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
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
  
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
   
            Eintrag bearbeiten
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lebensmittel:</strong>
                    <input type="text" name="lebensmittel" value="{{ $post->lebensmittel }}" class="form-control" placeholder="Trage den Namen ein">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kalorien:</strong>
                    <input type="text" name="kcals" value="{{ $post->kcals }}" class="form-control" placeholder="kcals">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gut für:</strong>
                    <input type="text" name="gutfuer"value="{{ $post->gutfuer }}" class="form-control" placeholder="Wo für ist das Lebensmittel gut?">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Anmerkung:</strong>
                    <input type="text" name="anmerkung" value="{{ $post->anmerkung }}" class="form-control" placeholder="Sonstige Anmerkungen">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Hinzufügen</button>
            </div>
        </div>
   
    </form>
@endsection
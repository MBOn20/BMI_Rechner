@extends('posts.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
        <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('posts.create') }}"> Erstelle einen neuen Eintrag</a>
            </div>
            <div class="pull-left">
                <h1 style="font-size: 30px; font-weight: bold; line-height: 36px;">Hallo!</h1>
             </br> <p style="font-size: 23px;">Hier kannst du Lebensmittel die dir gefallen mit anderen zusammen sammeln!</p>
            </div>
            <br><br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Eintragsnummer</th>
            <th>Lebensmittel</th>
            <th>Kalorien</th>
            <th>Gut für:</th>
            <th>Anmerkungen</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->lebensmittel }}</td>
            <td>{{ $value->kcals }}</td>
            <td>{{ $value->gutfuer }}</td>
            <td>{{ $value->anmerkung }}</td>
            <td>
            <div class="pull-middle">
                <form action="{{ route('posts.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-success" href="{{ route('posts.show',$value->id) }}">anzeigen</a> </br></br>   
                    <a class="btn btn-warning" href="{{ route('posts.edit',$value->id) }}">bearbeiten</a></br></br>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">löschen</button>
                </form>
            </td>
        </tr>
</div>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection
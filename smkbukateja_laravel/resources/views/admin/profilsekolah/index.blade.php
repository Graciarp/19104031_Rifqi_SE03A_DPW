@extends('layouts.app')

@section('content')
<div class="container">
<h3>Profil Sekolah</h3>

<br>

<div class="table-responsive">
    <table class="table">
        <tr>
            <td>
                key
            </td>
            <td>
                value
            </td>
            <td>
    
            </td>
        </tr>
    
        @foreach ($profilsekolah as $item)
            <tr>
                <td>
                    {{$item->key}}
                </td>
                <td>
                    {{$item->value}}
                </td>
                <td>
                    <a href="/profilsekolah/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    
    
    </table>
</div>
</div>
@endsection

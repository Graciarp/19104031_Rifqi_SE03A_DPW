@extends('layouts.app')

@section('content')
<div class="container">
<h4>profil sekolah</h4>
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
                <a href="/profilsekolah/edit/{{$item->id}}" class="btn btn-warning">edit</a>
            </td>
        </tr>
    @endforeach


</table>
</div>
@endsection

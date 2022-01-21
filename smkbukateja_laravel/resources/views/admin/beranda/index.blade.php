@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Beranda</h4>
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

        @foreach ($beranda as $b)
            <tr>
                <td>
                    {{$b->key}}
                </td>
                <td>
                    {{$b->value}}
                </td>
                <td>
                    <a href="/beranda/editBeranda/{{$b->id}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Beranda</h3>

    <br>

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
                    @if ($b->key == 'banner_beranda')
                        <img src="{{url('img' . '/' . $b->value)}}" width="150px" alt="" srcset="">
                    @else
                        {!!($b->value)!!}
                    @endif
                </td>
                <td>
                    <a href="/beranda/editBeranda/{{$b->id}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

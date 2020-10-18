@extends('layouts')

@section('content')

@foreach ($UserRowset as $item)
<p>
<a href="{{ route('user.show', ['id' => $item->id]) }}">{{$item->name}}</a>
</p>


@endforeach

@endsection
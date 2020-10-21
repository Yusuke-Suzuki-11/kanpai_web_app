@extends('layouts')

@section('content')

@foreach ($UserRowset as $UserRow)
    <p>
        <a href="{{ route('user.show', ['id' => $UserRow->id]) }}">{{$UserRow->name}}</a>
    </p>
@endforeach

<div>
    <p>検索する</p>
    {{Form::open(["route" => "user.index", "method" => "get"])}}
    {{Form::text("keyWord", "", ["placeholder" => "検索ワードを入力"])}}

    {{Form::submit("検索！！")}}
    {{Form::close()}}
</div>
<div>
    @if (!empty($SearchUserRowset))
    @foreach ($SearchUserRowset as $SearchUserRow)
    {{$SearchUserRow->name}}

    @endforeach

    @endif
</div>


@endsection
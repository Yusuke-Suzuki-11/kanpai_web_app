@extends('layouts')

@section('content')

<p>名前::{{$UserRow->name}}</p>
<p>メール::{{$UserRow->email}}</p>
@foreach (config('const.User.GENDER_TYPE') as $key => $val)
    @if ($UserRow->gender_type == $key)
        <p>{{$val}}</p>
    @endif
@endforeach
@foreach (config('const.User.DIFFICULTY_POINT') as $key => $val)
    @if ($UserRow->difficulty_point == $key)
        <p>{{$val}}</p>
    @endif
@endforeach
<p>{{$UserRow->membership_num}}</p>
<p>プロフ画像</p>

<p><a href="{{ route('user.index') }}">ユーザー一覧に戻る</a></p>
<p><a href="{{ route('user.edit', ['id' => $UserRow->id]) }}">編集する</a></p>


@endsection
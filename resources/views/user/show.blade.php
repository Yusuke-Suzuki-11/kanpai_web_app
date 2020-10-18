@extends('layouts')

@section('content')

<p>名前::{{$UserRow->name}}</p>
<p>メール::{{$UserRow->email}}</p>
<p>プロフ画像</p>

<p><a href="{{ route('user.index') }}">ユーザー一覧に戻る</a></p>

@endsection
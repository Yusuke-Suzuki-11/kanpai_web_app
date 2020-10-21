@extends('layouts')

@section('content')

<p>名前::{{$AuthUserRow->name}}</p>
<p>メール::{{$AuthUserRow->email}}</p>
<p>プロフ画像</p>

{{Form::open(["route" => ["user.update", $AuthUserRow->id], "method" => "post", ])}}
{{Form::text("name", "", ["placeholder" => "名前"])}}
{{Form::text("email", "", ["placeholder" => "メールアドレス"])}}
{{Form::submit("変更！！")}}
{{Form::close()}}


@endsection
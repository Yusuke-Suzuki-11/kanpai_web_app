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

<div style="margin-top: 30px">
    @if(Auth::user()->user_type == 0)
    <div>
        <h3>管理者としてユーザー追加</h1>
        <form action="{{route('user.create')}}" method="post">
        @csrf
            <input name="name" type="text" placeholder="名前">
            <input name="email" type="email" placeholder="メールアドレス"><br>
            <p>性別</p>
            @foreach (config('const.User.GENDER_TYPE') as $key => $val)
                <label><input type="radio" name="gender_type" value="{{$key}}">{{$val}}</label><br>
            @endforeach
            <label for="difficulty_point">ストレスポイント</label><br>
            <select id="difficulty_point" name="difficulty_point">
                @foreach (config('const.User.DIFFICULTY_POINT') as $key => $val)
                    <option value="{{ $key }}" {{ $key == 3 ? "selected" : "" }} >{{ $val }}</option>
                @endforeach
            </select>
            <br>
            <input name="membership_num" type="string" placeholder="会員番号を入力">
            <button type="submit">新規登録</button>
        </form>
    </div>
    @endif
</div>


@endsection
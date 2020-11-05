@extends('layouts')

@section('content')
    <div style="margin-top: 30px">
        @if(Auth::user()->user_type == 0)
        <div>
            <h3>管理者としてグループを追加</h1>
            <form action="{{route('user.store')}}" method="post">
            @csrf
                <input name="name" type="string" placeholder="クラス名を入力"><br>

                <select name="grade">
                    @foreach (config('const.Group.GRADE') as $key => $val)
                        <option value="{{ $key }}" {{ $key == 1 ? "selected" : "" }} >{{ $val }}</option>
                    @endforeach
                </select>

                <select name="week_day_type">
                    @foreach (config('const.Group.WEEK_DAY_TYPE') as $key => $val)
                        <option value="{{ $key }}" {{ $key == 1 ? "selected" : "" }} >{{ $val }}</option>
                    @endforeach
                </select>

                <select name="start_time">
                    @foreach (config('const.Group.WEEK_DAY_TYPE') as $key => $val)
                        <option value="{{ $key }}" {{ $key == 1 ? "selected" : "" }} >{{ $val }}</option>
                    @endforeach
                </select>

                <input type="text" name="limit_person" placeholder="人数の上限を入力してください">

                <input type="text" name="limit_difficulty_point" placeholder="ストレスポイントの上限を入力してください">
                <button type="submit">新規登録</button>
            </form>
        </div>
        @endif
    </div>
@endsection

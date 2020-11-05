@extends('layouts')

@section('content')
	@if (!count($GroupRowset))
		クラスがありません
	@else
		@foreach ($GroupRowset as $GroupRow)
			{{$GroupRow->name}}
		@endforeach
	@endif
@endsection
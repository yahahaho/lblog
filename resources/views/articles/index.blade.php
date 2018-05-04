@extends('layouts.app')
@section('content')
	<a href="{{ route('articles.create') }}" style="padding:5px;border:1px dashed gray;">
		+ New Article
	</a>
@endsection
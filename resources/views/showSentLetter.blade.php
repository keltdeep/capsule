@extends('layouts.app')
@section('content')
    <show_video
        name="{{$value['user_name']}}"
    >
    </show_video>
    <footer_all></footer_all>
@endsection

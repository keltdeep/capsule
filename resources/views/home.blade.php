@extends('layouts.app')

@section('content')
    <show_client_letter
        date="{{$dateFinal['date']}}"
        name="{{$dateFinal['name']}}"
    >
    </show_client_letter>
    <footer_all></footer_all>
@endsection

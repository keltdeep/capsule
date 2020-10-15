@extends('layouts.app')
@push('scripts')
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="application/javascript" src="https://cdn.webrtc-experiment.com/RecordRTC.js"></script>
    <script type="application/javascript" src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
    <script type="application/javascript" src="{{ asset('js/mediaController.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/patterns.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')
<roof_show_form></roof_show_form>

<register_form>

    <template v-slot:name="name">
        <register_login
{{--            @error('name')--}}
{{--                v-bind:active="true"--}}
{{--            @enderror--}}
{{--            @if(old('name'))--}}
{{--                v-bind:value="{{old('name')}}"--}}
{{--            @endif--}}
        ></register_login>
{{--        @error('name')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </span>--}}
{{--        @enderror--}}
    </template>

    <template v-slot:phone>
        <register_phone></register_phone>
    </template>

    <template v-slot:email>
        <register_email
        ></register_email>
    </template>

    <template v-slot:password>
        <register_password
        ></register_password>
    </template>

</register_form>

@endsection

@extends('layouts.app')

@section('content')
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.webrtc-experiment.com/RecordRTC.js"></script>
        <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
        <script src="{{ asset('js/mediaController.js') }}"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @endpush
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{$data['name']}}" required autocomplete="{{$data['name']}}"
                                           autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           value="{{$data['phone']}}" name="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{$data['email']}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text_letter"
                                       class="col-md-4 col-form-label text-md-right">{{ __('text') }}</label>

                                <div class="col-md-6">
                                    <textarea id="text_letter" type="text" class="form-control" name="text_letter"
                                              required>
                                    </textarea>
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="video_src" id="video-src">

                            </div>


                            <div class="form-group row">
                                <div class="col-md-4 col-form-label text-md-right">
                                    <button>Upload media</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 col-form-label text-md-right">
                                    <input id="dateLetter" type="date" name="dateLetter">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit">

                                        {{--                                <button type="submit" class="btn btn-primary">--}}
                                        {{ __('Написать в будущее!') }}
                                        {{--                                </button>--}}

                                    </button>

                                </div>
                            </div>
                        </form>
                        <div>
                            <video id="my-preview" class="movie" controls autoplay></video>
                            <video id="video-show" class="movie" controls autoplay></video>
                        </div>
                        <button id="btn-start-recording">start</button>
                        <button id="btn-stop-recording">stop</button>
                        <button><a id="btn-save-video">save</a></button>

                        <div>
                            <div class="col-md-4 col-form-label text-md-right">
                                <button id="video-record">Record</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

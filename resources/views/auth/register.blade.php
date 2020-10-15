@extends('layouts.app')
@push('scripts')
    <script type="application/javascript" src="{{ asset('js/patterns.js') }}"></script>
@endpush
@section('content')
    <modal_login>

    <template v-slot:email-modal>
        <register_email
{{--            @error('email')--}}
{{--            v-bind:active="true"--}}
{{--            @enderror--}}
{{--            @if(old('email'))--}}
{{--            v-bind:value="{{old('email')}}"--}}
{{--            @endif--}}
        ></register_email>
    </template>

    <template v-slot:password-modal>
        <register_confirm>
        </register_confirm>
    </template>

    </modal_login>

    <first_block>
        <template v-slot:name="name">
            <register_login
{{--                @error('name')--}}
{{--                v-bind:active="true"--}}
{{--                @enderror--}}
{{--                @if(old('name'))--}}
{{--                v-bind:value="{{old('name')}}"--}}
{{--                @endif--}}
            ></register_login>
        </template>

        <template v-slot:phone>
            <register_phone
            ></register_phone>
        </template>

        <template v-slot:email>
            <register_email
            ></register_email>
        </template>
        <template v-slot:button>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">

                    <button type="submit">
                        Написать в будущее
                    </button>
                </div>
            </div>
        </template>
    </first_block>
    <reasons></reasons>
    <advertising_video></advertising_video>
    <reviews></reviews>
    <footer_all></footer_all>
@endsection


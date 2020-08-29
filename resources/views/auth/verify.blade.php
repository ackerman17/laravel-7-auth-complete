@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-light d-flex align-items-center justify-content-between">
                    <div>
                        {{ __('Silahkan verifikasi email anda') }}
                    </div>
                    <div class="text-light">
                        {{ Auth::user()->email }}
                    </div>
                </div>

                <div class="card-body">


                    <span class="alert alert-warning"> {{ __('Kunjungi link berikut.') }}</span>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik bro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

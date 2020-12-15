@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu dirección de correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link ha sido enviado a su dirección de correo') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor revise su correo.') }}
                    {{ __('Si no has recibido ningún e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click aquí para volver a enviar e-mail.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

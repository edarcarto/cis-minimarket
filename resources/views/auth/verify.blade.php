@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verifica tu correo Electronico</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Se ha enviado un correo para que puedas verificar tus datos
                            </div>
                        @endif
                        <p>Antes de continuar, revise su correo electrónico para obtener un enlace de verificación. Si no recibió el correo electrónico,</p>
                        <a href="{{ route('verification.resend') }}">haga clic aquí para solicitar otro</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
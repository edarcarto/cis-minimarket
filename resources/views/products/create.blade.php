@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Producto
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'products.store']) !!}

                        @include('products.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script type="text/javascript">
Dropzone.autoDiscover = false;
$(document).ready(function() {
    console.log( "ready!" );
    $("#upLoad").dropzone({
        addRemoveLinks: true,
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/api/upload/images/products",
        success: function(file,response){
            console.log("[response]",response);
            $("#contentImages").append(`<input type="hidden" id="${response.body.asset_id}" name="images_products[]" value="${response.body.public_id}|${response.body.asset_id}|${response.body.secure_url}" />`);
        },
        error: function(e){
            console.log("[error]",e);
        },
        removedfile: function(file) {
            console.log(`La success`,file);
            $.ajax({
                method: 'post',
                url: '/api/delete/images',
                data: JSON.parse(file.xhr.response),
                success: function(respuesta) {
                    console.log("respuesta",respuesta);
                    let cnt = JSON.parse(file.xhr.response);
                    $(`#${cnt.body.asset_id}`).remove();
                    file.previewElement.remove();
                },
                error: function(e) {
                    console.log("No se ha podido obtener la información",e);
                }
            });
        }
    });
});
</script>
@endpush
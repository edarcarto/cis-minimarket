@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Marca
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($trademark, ['route' => ['trademarks.update', $trademark->id], 'method' => 'patch']) !!}

                        @include('trademarks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
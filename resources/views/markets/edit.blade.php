@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tienda
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($market, ['route' => ['markets.update', $market->id], 'method' => 'patch']) !!}

                        @include('markets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
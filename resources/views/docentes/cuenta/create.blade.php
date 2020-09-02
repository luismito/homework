@extends('layouts.app_d')

@section('content')
<div class="container-fluid">
    
<div class="row">
    <div class="col-sm-11">
<div class="container">
    
    <div class="row">
        <div class="col-12">
        	<h1 class="display-3" style="color: #4fafb2;font-weight: bold;">Agregar cuenta bancaria</h1>
            
            @include('docentes.cuenta.form.cuentaform')
            
        </div> 
    </div>

</div>
</div>
    <div class="col px-0 sticky-right" style="background-color: #d9d9d9;">
        <div class="my-3" ><a href="{{route('exercises.index')}}"><img class="w-75" src="{{asset("img/ofert_doc.png")}}"></a></div>
        <div class="my-3 w-100" ><a href="{{route('exercises.create')}}"><img class="w-75" src="{{asset("img/buzon.png")}}"></a></div>
        <div class="my-3" style="background-color: #c6c1c1"><a href="#"><img class="w-75" src="{{asset("img/retiro.png")}}"></a></div>
        
    </div>
</div>
</div>
@endsection

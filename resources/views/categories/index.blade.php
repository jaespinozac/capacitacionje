

@extends('layouts.app')
@section('content')
index de categories 

<div class="card">
 <div class="card-header">
   Featured
 </div>
 <div class="card-body">
   <h5 class="card-title">Special title treatment</h5>
   <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
   <a href="{{ route('categories.create') }}" class="btn btn-primary">AGREGAR</a>
   <!--<a href="" class="btn btn-primary">AGREGAR</a>-->
 </div>
</div>
@endsection



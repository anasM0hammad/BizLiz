@extends('layouts.app')

@section('content')
 
 <h1 class="text-center">Create Listing</h1>
  
 <div class="container">
  <div class="card">
   <div class="card-body">	 
    {!!Form::open(['action' => 'ListingController@store' , 'method' => 'POST']) !!}
    {{Form::bsText('name','', ['placeholder' => 'Comapny Name'])}}
    {{Form::bsText('email', '', ['placeholder'=> 'Email']) }}
    {{Form::bsText('phone' , '' , ['placeholder' => 'Phone Number'])}}
    {{Form::bsText('website' , '' , ['placeholder' => 'Your Website'])}}
    {{Form::bsText('address' , '' , ['placeholder' => 'Address'])}}
    {{Form::bsTextArea('bio' , '' , ['placeholder' => 'About Your Business'])}}
    {{Form::bsSubmit('submit' , ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
   </div>
  </div>
 </div> 
  
@endsection
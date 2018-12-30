@extends('layouts.app')

@section('content')
 
 <h1 class="text-center">Edit Listing</h1>
  
 <div class="container">
  <div class="card">
   <div class="card-body">	 
    {!!Form::open(['action' => ['ListingController@update' , $listing->id] , 'method' => 'POST']) !!}
    {{Form::bsText('name',$listing->name, ['placeholder' => 'Comapny Name'])}}
    {{Form::bsText('email', $listing->email, ['placeholder'=> 'Email']) }}
    {{Form::bsText('phone' ,$listing->phone , ['placeholder' => 'Phone Number'])}}
    {{Form::bsText('website' ,$listing->website , ['placeholder' => 'Your Website'])}}
    {{Form::bsText('address' ,$listing->address , ['placeholder' => 'Address'])}}
    {{Form::bsTextArea('bio' , $listing->bio , ['placeholder' => 'About Your Business'])}}
    {{Form::hidden('_method' , 'PUT')}}
    {{Form::bsSubmit('Edit' , ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
   </div>
  </div>
 </div> 
  
@endsection
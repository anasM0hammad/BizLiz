@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="listings/create" class="btn btn-success btn-sm">Add Business</a></span></div>
                <div class="card-body">
                    <h3 class="text-center">Your Lists</h3>

                    @if(count($listings))
                     <table class="table table-striped">
                      <thead>  
                       <tr>
                         <th>Comapny</th> 
                         <th></th>
                         <th></th> 
                       </tr> 
                      </thead> 
                      @foreach($listings as $list)
                      <tbody>
                       <tr>
                          <td>{{$list->name}}</th>
                          <td><a href="listings/{{$list->id}}/edit" class="btn btn-primary btn-sm float-right">Edit</a></td>
                          <td>
                              {!!Form::open(['action' => ['ListingController@destroy' , $list->id] , 'method' => 'POST' ])!!}
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::bsSubmit('Delete' , ['class' => 'btn btn-sm btn-danger float-right'])}}
                              {!!Form::close()!!}
                          </td> 
                       </tr>
                      </tbody> 
                      @endforeach 
                     </table>
                    @endif 


                    
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection



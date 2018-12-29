@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
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
                          <td></td>
                          <td></td> 
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



<!DOCTYPE html>
@extends('layouts.mainlayout')

@section('title','vehicle type')

@section('content')

<div class="container">
  <div class="row">

    <div class="container" id="faccontainer">
<br><br><br><br><br><br>
    <h1>Vehicle condition Details</h1>
        <div class="row">
                <div class="col-md-12">
               
                <form action="/Vehicle/public/conditionid" method="POST"> 
               @csrf
                <div class="form-group form-row">
                <label class="col-sm-3" for="input-vhtype">Vehicle condition</label>
                <div class="col-sm-9">
       

        
        <input value="" class="form-control" type="text" name="vehicle_condition" placeholder="AC/Non AC" required="required" id="">

        
        
               </div>
              </div>              
             
            </br>
            <input type="submit" class="btn btn-primary" value="SAVE">
            <input type="button" class="btn btn-warning" value="CLEAR">
            </br> </br>     
            </form>
            <table class="table table-dark" border="0">
              <tr>
            <th>ID</th> 
            <th>vehicle_condition </th>
            <th>Action</th>
             
            
</tr>

      
            @foreach($vhcondition as $vehicle_condition)


            <tr>

   <td >   {{  $loop->iteration  }}
</td>

           
            <td>  {{$vehicle_condition->vehicle_condition}} </td>
         <td>
 
<a href="/Vehicle/public/conditionid/{{$vehicle_condition->id}}" class="btn btn-danger">Delete</a>
<a href="/Vehicle/public/updateconditionid/{{$vehicle_condition->id}}" class="btn btn-warning">Update</a>
</td>
            </tr>

            @endforeach  
          </table>
            </div>
    </div>




 </div>

</div>

</div> 


<style> 
#faccontainer {
text-align: left;
/* margin-top: 100px;
margin-bottom: 80px; */
}

h1{
text-align: center;
}

</style>
@endsection  

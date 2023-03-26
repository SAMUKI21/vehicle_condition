<!DOCTYPE html>
@extends('layouts.mainlayout')
 


@section('content')
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">

    <div class="col-md-10">
    <br> <br> <br> <br> <br> <br>
    @include('layouts.nav')
                <form  method="POST" action="/conditionidupdate">
                   @csrf
                
                    <div class="form-group">
                      <input value="{{$data['id']}}" hidden class="form-control" type="text" name="id" placeholder="AC/Non AC" required="required" id="">
                  
                    <label for="vehicle_tpe">vehicle_Condition</label>
                          <input type="text" class="form-control" id="vhtype" placeholder="Edit Conditio ID" name="vehicle_condition" value="{{$data['vehicle_condition']}}">
                  

                      <button type="submit" class="btn btn-primary">Update</button>
                
                </form>
    <br><br><br><br>
    
    </div>

   
  </div>
  </div>
    
</body>
</html>
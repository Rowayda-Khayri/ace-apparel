



@extends('adminLayout')


@section('adminPageContent')


<h1> Edit Contact Info </h1>

</br>


<form method="POST" action="/admin/contactInfo/update">
    
    
    
    <label> Address :</label>
    
    <textarea  style="height: 50px;" class="form-control" name="address"  required>{{$contact->address}}</textarea>
                  
        
    </br></br>
    
    <label> Phone :</label>
    <input  type="text" name="phone" value="{{$contact->phone}}" required>
    
    </br></br>
    
    <label> Email :</label>
    <input  type="text" name="email" value="{{$contact->email}}" required>
    
    </br></br>
    
     <label> Facebook :</label>
    <input  type="text" name="facebook" value="{{$contact->facebook}}" required>
    
    </br></br>
    
     <label> Twitter :</label>
    <input  type="text" name="twitter" value="{{$contact->twitter}}" required>
    
    </br></br>
    
    <label> Bussiness Hours :</label>
    
    <textarea  style="height: 50px;" class="form-control" name="hours"  required>{{$hours->content}}</textarea>
    <!--<input  type="text" name="postBody" value="" required>-->
    </br></br>
    
    
    
    
    <input  type="submit" name="edit" value="Update" class="btn btn-primary" />
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!--<button type="submit">ADDDD</button>-->
    
</form>
    







   
@stop



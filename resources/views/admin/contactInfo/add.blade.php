



@extends('adminLayout')


@section('adminPageContent')


<h1> Add Contact Info </h1>

</br>


<form method="POST" action="/admin/contactInfo/store">
    
    
    
    <label> Address :</label>
    
    <textarea  style="height: 50px;" class="form-control" name="address"  required></textarea>
                  
        
    </br></br>
    
    <label> Phone :</label>
    <input  type="text" name="phone" value="" required>
    
    </br></br>
    
    <label> Email :</label>
    <input  type="text" name="email" value="" required>
    
    </br></br>
    
     <label> Facebook :</label>
    <input  type="text" name="facebook" value="" required>
    
    </br></br>
    
     <label> Twitter :</label>
    <input  type="text" name="twitter" value="" required>
    
    </br></br>
    
    <label> Bussiness Hours :</label>
    
    <textarea  style="height: 50px;" class="form-control" name="hours" placeholder="Monday - Friday - 9am to 5pm / Sunday - Closed" required></textarea>
    <!--<input  type="text" name="postBody" value="" required>-->
    </br></br>
    
    
    
    
    
    
    <input  type="submit" name="add" value="Store" class="btn btn-primary" />
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
    
</form>
    


   
@stop


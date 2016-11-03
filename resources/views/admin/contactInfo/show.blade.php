



@extends('adminLayout')


@section('adminPageContent')


<h1> Contact Info </h1>

</br>


<form method="POST" action="/admin/contactInfo/add">
    
    
    <input  type="submit" name="add" value="Add Contact Info" class="btn btn-primary" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
    </br> </br>
    
    @if($contact)
    
    <a style="margin-left: 100px;" href="/admin/contactInfo/edit/{{$contact->id}}">Edit Contact Info</a>
    
    </br>    </br>
    
    <label> Address :</label>
    <label> {{$contact->address}} </label>
    
                  
        
    </br></br>
    
    <label> Phone :</label>
    <label> {{$contact->phone}}</label> 
    
    </br></br>
    
    <label> Email :</label>
    <label> {{$contact->email}}</label>

    
    </br></br>
    
    <label> Facebook :</label>
    <label> {{$contact->facebook}}:</label>
    
    </br></br>
    
    <label> Twitter :</label>
    <label> {{$contact->twitter}}</label>

    
    </br></br>
    
    <label> Bussiness Hours :</label>
    <label> {{$hours->content}}</label>

    </br></br>
    
    @endif
    
  
    
   
    
</form>
    







   
@stop




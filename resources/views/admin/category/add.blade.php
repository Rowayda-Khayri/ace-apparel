@extends('adminLayout')


@section('adminPageContent')

<h1> Add Blog Category </h1>

</br>


<form method="POST" action="/admin/category/store">
    
    <label>Category Name :</label>
    <input  type="text" name="categoryName" value="" required>
    <input  type="submit" name="add" value="Add" class="btn btn-primary" />
    
   
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!--<button type="submit">ADDDD</button>-->
    
</form>
    
   
@stop

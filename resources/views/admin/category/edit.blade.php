@extends('adminLayout')


@section('adminPageContent')

<h1> Edit Category </h1>

<form method="POST" action="/admin/category/update/{{$category->id}}">
    
    <div>
        <label>Category Name :</label>
        <input  type="text" name="categoryName" value="{{$category->name}}">
        <input  type="submit" name="edit" value="Edit" class="btn btn-primary" />
    
    </div>
    
    </br></br></br></br>
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

</form>

@stop


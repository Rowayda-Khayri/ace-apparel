
@extends('adminLayout')


@section('adminPageContent')

<!--<h1> Categories </h1>-->
<form method="POST" action="/admin/category/add">
    
    
        <table class="table ">
            <tr>
                <td >
                    <h1>Blog Categories</h1>
                </td>
                
                
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><input  type="submit" name="add" value="Add New Category" class="btn btn-primary" /> </td>
            </tr> 
    
            @foreach($categories as $category)
            
        
            <tr>
                <td style="font-size: 20px;margin-right: 100px;" class="col-sm-6">{{$category->name }} </td>
                
                
                
                
                <td> 
                    <a href="/admin/category/edit/{{$category->id}}">Edit</a>
                    <!--<input  type="submit" name="edit{{$category->id}}" value="Edit" class="btn btn-primary"/>-->
                </td>
                
                <td>
                    <a href="/admin/category/destroy/{{$category->id}}">Delete</a>
                    <!--<input  type="submit" name="delete" value="Delete" class="btn btn-primary" />-->
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                </td>
            </tr>
            
            
            @endforeach
            
        </table>
    
</form>




@stop

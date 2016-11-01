
@extends('adminLayout')


@section('adminPageContent')

<!--<h1> Categories </h1>-->
<form method="POST" action="/admin/post/add">
    
    <input  type="submit" name="add" value="Add New Post" class="btn btn-primary" />
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        
</form>




@stop


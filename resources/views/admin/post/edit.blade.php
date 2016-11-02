@extends('adminLayout')


@section('adminPageContent')

<h1> Edit Blog Category </h1>

</br>


<form method="POST" action="/admin/post/update">
     @foreach($posts as $post)
    <label> Post Category :</label>
    
    <select name="postCategory">
                    <option  selected></option>
                    
                    @foreach($categories as $category)
                    
                    <option  >{{$category->name}}</option>
                    @endforeach
                </select>
    </br></br>
    
    <label> Post Author :</label>
    
    <input  type="text" name="postAuthor" value="{{$post->category_name}}" required>
                   
        
    </br></br>
    
    <label> Post Title :</label>
    <input  type="text" name="postTitle" value="" required>
    
    </br></br>
    
    <label> Post Body :</label>
    
    <textarea class="form-control" name="postBody" placeholder="Type your post here .." required></textarea>
    <!--<input  type="text" name="postBody" value="" required>-->
    </br></br>
    
    
    
    
    
    
    <input  type="submit" name="add" value="Add" class="btn btn-primary" />
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!--<button type="submit">ADDDD</button>-->

@endforeach    
</form>
    
   
@stop


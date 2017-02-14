@extends('adminLayout')


@section('adminPageContent')

<h1> Edit Blog Post </h1>

</br>

 @foreach($posts as $post)
<form method="POST" action="/admin/post/update/{{$post->id}}">
    
    <label> Post Category :</label>
    
    <select name="postCategory">
                    <option  selected>{{$post->category_name}}</option>
                    
                    @foreach($categories as $category)
                    
                    <option  >{{$category->name}}</option>
                    @endforeach
                </select>
    </br></br>
    
    <label> Post Author :</label>
    
    <input  type="text" name="postAuthor" value="{{$post->author}}" required>
                   
        
    </br></br>
    
    <label> Post Title :</label>
    <input  type="text" name="postTitle" value="{{$post->title}}" required>
    
    </br></br>
    
    <label> Post Body :</label>
    
    <textarea style="height: 250px;" class="form-control" name="postBody" placeholder="Type your post here .." required>{{$post->body}}</textarea>
    <!--<input  type="text" name="postBody" value="" required>-->
    </br></br>
    
    
    
    
    
    
    <input  type="submit" name="edit" value="Edit" class="btn btn-primary" />
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <!--<button type="submit">ADDDD</button>-->

@endforeach    
</form>
    
   
@stop


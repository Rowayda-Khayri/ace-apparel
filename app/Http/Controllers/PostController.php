<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Category;
use App\Contact_info;
use App\Hour;

use DateTime;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        
        return view('admin.post.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $postCategory= Category::where("name","$request->postCategory")->first();
        $post = new Post;
        
        $post->title = $request->postTitle;
        $post->category_id = $postCategory->id;
        $post->body = $request->postBody;
        $post->author = $request->postAuthor;

        
        $post->save();
        
        return redirect('/admin/post/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posts = Post::query()
                        ->leftjoin('categories as c', 'c.id', '=', 'posts.category_id')
                        ->get([
                            'posts.*',
                            'c.name as category_name'
                              ])->sortByDesc("created_at");
        
        return view('admin.post.show', compact('posts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $posts = Post::query()
                        ->leftjoin('categories as c', 'c.id', '=', 'posts.category_id')
                        ->where("posts.id", "=", "$id")
                        ->get([
                            'posts.*',
                            'c.name as category_name'
                              ]);

        
        $categories= Category::all();
        
        return view('admin.post.edit', compact('posts','categories'));
//        return "$id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $postCategory= Category::where("name","$request->postCategory")->first();

                
        $post= Post::find($id);
        $post->title = $request->postTitle;
        $post->author = $request->postAuthor;
        $post->body = $request->postBody;
        $post->category_id = $postCategory->id;
        $post->updated_at = new DateTime;
        $post->save();
        

        return redirect('/admin/post/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        
        $post->deleted_at = new DateTime();
        
        $post->save();
        
        return redirect('/admin/post/show');
    }
    
    
    
    public function indexBlog()   // show latest 3 posts in Blog section in index page
    {
        
        $lastPosts = Post::orderBy('created_at','desc')->take(3)->get();
        
        //to show in footer
        $contact = Contact_info::orderBy('created_at', 'desc')->first();
        $hours = Hour::orderBy('created_at', 'desc')->first();
        
        
        
        // to show blog categories in header
        $categories= Category::all();
        
        
        return view('index', compact('lastPosts','contact','hours','categories'));

        
    }
    
    
    public function blogSingle($id)   // 
    {
        
        
        
        $post = Post::query()
                        ->leftjoin('categories as c', 'c.id', '=', 'posts.category_id')
                        ->where("posts.id", "=", "$id")
                        ->get([
                            'posts.*',
                            'c.name as category_name' ])->first();
        
        
        //to show in footer
        $contact = Contact_info::orderBy('created_at', 'desc')->first();
        $hours = Hour::orderBy('created_at', 'desc')->first();
        
        
        
        // to show blog categories in header
        $categories= Category::all();
        
        
        return view('blogSingle', compact('post','contact','hours','categories'));
    }
    
    

    
    
}

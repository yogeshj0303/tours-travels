<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'blog_title' => 'required|string',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to store images
            'blog_date_time' => 'required|date_format:Y-m-d\TH:i',
            'blog_content' => 'required|string',
        ]);

      
        // Create a new Blog instance
        $blog = new Blog();
        $blog->title = $request->input('blog_title');
        if ($request->hasfile('blog_image')) {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $blog->image_path = $filename;
          } 
        $blog->date_time = $request->input('blog_date_time');
        $blog->content = $request->input('blog_content');
        $blog->save();

        return response()->json(['message' => 'Blog post created successfully', 'blog' => $blog]);
    }

    
    public function destroy($id)
    {
        // Find the blog post by its ID
        $blog = Blog::find($id);

        // Check if the blog post exists
        if (!$blog) {
            return response()->json(['error' => 'Blog post not found'], 404);
        }

        // Delete the blog post
        $blog->delete();

        // Return a success response
        return response()->json(['message' => 'Blog post deleted successfully'], 200);
    }
    
}

<?php

namespace App\Http\Controllers;
use App\Models\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.Gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   
        public function store(Request $request)
        {
            
            // Define common validation rules
            $commonRules = [
                'gallery_location' => 'required|string|max:255',
                'gallery_type' => 'required|in:photo,video',
            ];
        
            // Define conditional validation rules based on gallery_type
            $conditionalRules = [
                'photo' => [
                    'gallery_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ],
                'video' => [
                    'gallery_video' => 'required|file|mimes:mp4,mov,avi|max:20480',
                ],
            ];
        
            // Merge common rules with conditional rules based on gallery_type
            $rules = array_merge($commonRules, $conditionalRules[$request->input('gallery_type')] ?? []);
        
            // Validate the request
            $validatedData = $request->validate($rules);
            $validatedData['gallery_location_id'] = $request->input('gallery_location');
            // Handle image upload
            // Handle image upload
if ($request->hasFile('gallery_image')) {
    $image = $request->file('gallery_image');
    $extension = $image->getClientOriginalExtension();
    $imageName = time() . '.' . $extension;
    $image->move('gallery_images', $imageName);
    $validatedData['gallery_photo'] = $imageName;
} else {
    // Set a default value if no file is uploaded
    $validatedData['gallery_photo'] = 'nodata';
}

// Handle video upload
if ($request->hasFile('gallery_video')) {
    $video = $request->file('gallery_video');
    $extension = $video->getClientOriginalExtension();
    $videoName = time() . '.' . $extension;
    $video->move('gallery_videos', $videoName);
    $validatedData['gallery_video'] = $videoName;
} else {
    // Set a default value if no file is uploaded
    $validatedData['gallery_video'] = 'nodata';
}

        
            // Store the gallery record in the database
           $gallery= Gallery::create($validatedData);
        
            // Optionally, you can redirect the user or send a response back
            return response()->json(['message' => 'Gallery added successfully','gallery'=>$gallery], 200);
        }
        
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the blog post by its ID
        $blog = Gallery::find($id);

        // Check if the blog post exists
        if (!$blog) {
            return response()->json(['error' => 'Gallery not found'], 404);
        }

        // Delete the blog post
        $blog->delete();

        // Return a success response
        return response()->json(['message' => ' Gallery deleted successfully'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|exists:categories,name',
        //     'slug' => 'required|string|exists:categories,slug',
        //     'text' => 'required|string',
        //     'tags' => 'nullable|array|exists:tags,name',
        //     'image' => 'nullable|image|max:2048'
        // ]);

        $service = new PostService();
        // dd(12, $service);


        $category = $service->getCategory($request->name);
        $slug = $service->getSlug($request->name, $request->slug);
        $post = $service->createPost($request->only(['text','image']), $category, $slug);
        $service->createTags($post, $request->tags);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

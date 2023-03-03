<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
     $blogs =Blog::all();  //
     return response() -> json($blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       $blog = Blog::create($request->post()); //
       return responde()->json(['blog'=>$blog]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog): Response
    {
      return response()->json($blog);  //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog): RedirectResponse
    {
      $blog->fill($request->post() ->save()); //
      return response()->json(['blog'->$blog]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
      $blog->delete();  //
      return responde()->json(['mensaje'=>'Blog eliminado']);
    }
}

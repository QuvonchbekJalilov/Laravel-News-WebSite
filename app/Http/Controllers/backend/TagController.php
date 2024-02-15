<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = Tag::paginate(5);

        return view('backend.tags.index', compact('tags'));
    }

   
    public function create()
    {
        return view('backend.tags.create');
    }

    
    public function store(StoreTagRequest $request)
    {
        $tags = Tag::all();

        if ($tags->where('name', $request->name)->isNotEmpty()){
            return redirect()->back();
        }

        Tag::create($request->all());

        return redirect()->back();
    }

    
    

    
    public function edit(Tag $tag)
    {
        $tag = Tag::find($tag->id);

        return view('backend.tags.edit', compact('tag'));
    }

   
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->all());

        return redirect()->back();
    }

   
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->back();
    }
}

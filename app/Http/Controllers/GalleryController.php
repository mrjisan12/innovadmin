<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    private  $gallery, $galleries;

    public function index()
    {
        $this->galleries = Gallery::all();
        return view('admin.gallery.index', ['galleries' => $this->galleries]);
    }
    public function create(Request $request)
    {
        Gallery::newGallery($request);
        return back()->with('message', 'Gallery info Create Successfully');
    }
    public function manage()
    {
        $this->galleries = Gallery::all();
        return view('admin.gallery.manage', ['galleries' => $this->galleries]);
    }
    public function edit($id)
    {
        $this->gallery = Gallery::find($id);
        return view('admin.gallery.edit', ['gallery' => $this->gallery]);
    }
    public function update(Request $request, $id)
    {
        Gallery::updateGallery($request, $id);
        return redirect('/gallery/manage')->with('message', 'Gallery Info Update Successfully');
    }
    public function delete($id)
    {
        Gallery::deleteGallery($id);
        return back()->with('message', 'Gallery Info Delete Successfully');
    }

}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryGallery;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($id){
        $gallery = Gallery::where('cate_gallery_id',$id)->get();
        $gl_id = CategoryGallery::find($id);

        return view('admin.pages.gallery', compact('gallery' , 'gl_id'));
    }
}

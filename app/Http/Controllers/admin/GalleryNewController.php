<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryNews;
use App\Models\News;
use Illuminate\Http\Request;

class GalleryNewController extends Controller
{
    public function index($id){
        $gallery = GalleryNews::where('new_id',$id)->get();
        $new_id = News::find($id);

        return view('admin.pages.newGallery', compact('gallery' , 'new_id'));
    }
}
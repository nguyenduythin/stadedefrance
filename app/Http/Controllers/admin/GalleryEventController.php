<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;

class GalleryEventController extends Controller
{
    public function index($id){
        $gallery = GalleryEvent::where('event_id',$id)->get();
        $event_id = Event::find($id);
        return view('admin.pages.eventGallery', compact('gallery' , 'event_id'));
    }
}

<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $gallery = GalleryEvent::where('event_id',$id)->get();
        return  response()->json($gallery);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new GalleryEvent();
        $model->fill($request->all());
        if ($request->hasFile('url')) {
            $model->url = $request->file('url')->storeAs('/images/gallery-event', uniqid() . '-' . $request->url->getClientOriginalName());
        }
        $query =  $model->save();
        $galleryFirsy = GalleryEvent::orderBy('created_at', 'desc')->first();

        if (!$query) {
            return response()->json(['code' => 0, 'msg' => 'Thêm mới không thành công !']);
        } else {
            return response()->json($galleryFirsy);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = GalleryEvent::find($id);
        Storage::delete($model->url);
        $model->delete();
        return  response()->json(['success' => 'Xóa thành công!']);
    }
}

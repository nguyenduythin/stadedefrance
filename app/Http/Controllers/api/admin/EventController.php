<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Event::all();
        return response()->json($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Event();
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $model->image = $request->file('image')->storeAs('/images/event', uniqid() . '-' . $request->image->getClientOriginalName());
        }
        $query =  $model->save();
        if (!$query) {
            return response()->json(['code' => 0, 'msg' => 'Thêm mới không thành công !']);
        } else {
            return response()->json(['code' => 1, 'msg' => 'Thêm mới thành công !']);
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
        $model = Event::find($id);
        return response()->json($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model = Event::find($request->id);
        if ($request->hasFile('image')) {
            Storage::delete($model->image);
        }
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            
            $model->image = $request->file('image')->storeAs('/images/event', uniqid() . '-' . $request->image->getClientOriginalName());
        }

        $query =  $model->save();
        if (!$query) {
            return response()->json(['code' => 0, 'msg' => 'Sửa mới không thành công !']);
        } else {
            return response()->json(['code' => 1, 'msg' => 'Sửa mới thành công !']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Event::find($id);

        Storage::delete($products->image);
        $model = GalleryEvent::where('event_id', $id)->get();
        foreach ($model as $value) {
            $onlyG = GalleryEvent::find($value->id);
            Storage::delete($value->url);
            $onlyG->delete();
        }
        Storage::delete($products->image);
        $products->delete();
        return  response()->json(['success' => 'Xóa thành công!']);
    }
}

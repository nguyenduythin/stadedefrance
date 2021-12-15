<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = SocialMedia::all();
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
        $model = new SocialMedia();
        $count = $model->count();
        if ($count >= 5 ) {
            return response()->json(['code' => 3, 'msg' => 'Bạn chỉ có thể thêm 5 Liên kết mạng xã hội !']);
        }else{
            $model->fill($request->all());
            $query =  $model->save();
        
            if (!$query) {
                return response()->json(['code' => 0, 'msg' => 'Thêm mới không thành công !']);
            } else {
                return response()->json(['code' => 1, 'msg' => 'Thêm mới thành công !']);
            }
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
        $model = SocialMedia::find($id);
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
        $model = SocialMedia::find($request->id);
        $model->fill($request->all());
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
        $model = SocialMedia::find($id);
        $model->delete();
        return  response()->json(['success' => 'Xóa thành công!']);
    }
}

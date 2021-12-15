<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Setting::all();
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
        $model = new Setting();
        $count = $model->count();
        if ($count >= 2 ) {
            return response()->json(['code' => 3, 'msg' => 'Bạn chỉ có thể thêm 2 thông tin cửa hàng !']);
        }else{
                $model->fill($request->all());
            if ($request->hasFile('logo')) {
                $model->logo = $request->file('logo')->storeAs('/images/setting', uniqid() . '-' . $request->logo->getClientOriginalName());
            }
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
        $model = Setting::find($id);
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
        $model = Setting::find($request->id);
        if ($request->hasFile('logo')) {
            Storage::delete($model->logo);
        }
        $model->fill($request->all());
      
        if ($request->hasFile('logo')) {
            $model->logo = $request->file('logo')->storeAs('/images/setting', uniqid() . '-' . $request->logo->getClientOriginalName());
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
        $model = Setting::find($id);
        Storage::delete($model->logo);
        $model->delete();
        return  response()->json(['success' => 'Xóa thành công!']);
    }
}

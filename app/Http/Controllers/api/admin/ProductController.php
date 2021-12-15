<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $products->load('cate');
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Product();
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $model->image = $request->file('image')->storeAs('/images/products', uniqid() . '-' . $request->image->getClientOriginalName());
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
        $model = Product::find($id);
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
        $model = Product::find($request->id);
        if ($request->hasFile('image')) {
            Storage::delete($model->image);
        }
        $model->fill($request->all());
        if ($request->hasFile('image')) {
            $model->image = $request->file('image')->storeAs('/images/products', uniqid() . '-' . $request->image->getClientOriginalName());
            
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
        $products = Product::find($id);
        Storage::delete($products->image);
        $products->delete();
        return  response()->json(['success' => 'Xóa thành công!']);
    }
}

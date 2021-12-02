<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginAdminController extends Controller
{
    public function login(Request $request)
    {
        
        $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
        if (!preg_match($regex, $request->email)) {
            return response()->json(['error' => 'email không đúng định dạng!']);
        }
        $admin = AdminAuth::where('email', $request->email)->first();
        
        if (!$admin && empty($request->email) || empty($request->password) || !Hash::check($request->password, $admin->password)) {
            return response()->json(['error' => 'Tài khoản mật khẩu không chính xácsss!']);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['success' => 'Admin đăng nhập thành công!']);
        }
        return response()->json(['error' => 'Không có vai trò !']);
    }
    public function logout(Request $request)
    {
        if (Auth::logout()) {
            return response()->json(['success' => 'Đăng Xuất Thành Công!']);
        } else {
            return response()->json(['error' => 'Đăng Xuất Không Thành Công!']);
        }
    }
}

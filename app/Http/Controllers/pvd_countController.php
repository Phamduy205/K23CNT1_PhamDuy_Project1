<?php

namespace App\Http\Controllers;
use App\Models\pvd_chi_tiet;
use App\Models\pvd_hoa_don;
use App\Models\pvd_khach_hang;
use App\Models\pvd_loai_san_pham;
use App\Models\pvd_san_pham;
use App\Models\pvd_quan_tri;
use Illuminate\Http\Request;

class pvd_countController extends Controller
{
    //
    public function __construct()
    {
        // Áp dụng middleware cho tất cả các hành động trong controller này
        $this->middleware('natcheckAdminSession');
    }   
    public function getSessionData(Request $request)
    {
        // Kiểm tra xem session có chứa admin ID hay không
        if ($request->session()->has('admin.id')) {
            // Lấy dữ liệu từ model (hoặc logic)
            // $pvdtotalUsers = pvdKhachHang::count(); // Đếm số lượng người dùng (giả sử có model User)
            $pvdlsp = pvd_loai_san_pham::count(); // Tương tự với sản phẩm
            $pvdsp = pvd_san_pham::count(); // Tương tự với bình luận
            $pvdqt = pvd_quan_tri::count(); // Tương tự với admin
            // $pvdtotalHoaDon = pvdHoaDon::count();
            // $pvdtotalctHoaDon = pvdChiTietHoaDon::count();
            $pvduseramdmin = $request->session()->get('admin.email', 'Quản trị viên');
            // Truyền dữ liệu sang view
            return view('natAdmin.natDashboard', compact('nattotalUsers', 'nattotalTypeProducts', 'nattotalProducts', 'nattotalAdmins', 'natUserAdmin', 'nattotalHoaDon','nattotalctHoaDon'));
        } else {
            return redirect('admins.pvdlogin');
        }
    }


    #Lưu dữ liệu vào session
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','pvd');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }

    #Xóa dữ liệu trong session
    public function deleteSessionData(Request $request)
    {
        // Xóa session với khóa 'admin.id'
        $request->session()->forget('admin');

        // Thông báo dữ liệu đã được xóa khỏi session
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";

        // Chuyển hướng về trang login
        return redirect('admins.pvdlogin')->with('pvd-error', 'Đăng xuất thành công!');

    }
}

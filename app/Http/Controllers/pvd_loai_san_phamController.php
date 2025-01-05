<?php

namespace App\Http\Controllers;
use App\Models\pvd_loai_san_pham;
use Illuminate\Http\Request;

class pvd_loai_san_phamController extends Controller
{
    //admin: CRUD

    //list
    public function pvdList()
    {
        $pvdloaisp = pvd_loai_san_pham::all();
        return view('/pvdAdmins/pvdloaisanpham/pvd-List',['pvdloaisanpham'=>$pvdloaisp]);
    }

    //create
    public function pvdCreate()
    {
        return view('pvdAdmins.pvdloaisanpham.pvd-create');
    }

    public function pvdCreateSubmit(Request $request)
    { 
        //validation data 
        $validationdata = $request->validate([ 
            'pvdmaloai' => 'required|unique:pvd_loai_san_pham',
            'pvdtenloai' => 'required',
            ]); 
            $pvdlsp = new pvd_loai_san_pham; 
            $pvdlsp->pvdmaloai = $request->pvdmaloai; 
            $pvdlsp->pvdtenloai = $request->pvdtenloai; 
            $pvdlsp->pvdtrangthai = $request->pvdtrangthai; 
            $pvdlsp->save(); return redirect()->route('pvdadmin.pvd-list');
            {
                //validation data
                $validationdata = $request->validate([
                    'pvdmaloai'=> 'required|unique:pvd_loai_san_pham',
                    'pvdtenloai'=> 'required',
                ]);
        
                $pvdlsp = new pvd_loai_san_pham;
                $pvdlsp -> pvdmaloai = $request -> pvdmaloai;
                $pvdlsp -> pvdtenloai = $request -> pvdtenloai;
                $pvdlsp -> pvdtrangthai = $request -> pvdtrangthai;
        
                $pvdlsp ->save();
        
                return redirect()->route('pvdadmin.pvd-list');
            }
    }
    
    //CHI TIET
    public function pvdchitietsanpham($pvdID)
    {
        // Truy vấn dữ liệu từ bảng pvdloaisanpham theo mã loại sản phẩm
        $pvdlsp = pvd_loai_san_pham::where('id', $pvdID)->first();

        // Nếu không tìm thấy loại sản phẩm
        if (!$pvdlsp) {
            return redirect()->route('pvdadmin.pvdloaisanpham');
        }

        // Trả về view với dữ liệu loại sản phẩm
        return view('pvdAdmins.pvdloaisanpham.pvdDetail', compact('pvdlsp'));
    }

    //edit
    public function pvdeditloaisanpham($pvdID){
        $pvdlsp = pvd_loai_san_pham::where('id', $pvdID)->first(); 
        if (!$pvdlsp) { 
            return redirect()->route('pvdadmin.pvdloaisanpham'); 
        } return view('pvdAdmins.pvdloaisanpham.pvd-edit', compact('pvdlsp')); 
    }

    public function pvdeditloaisanphamSubmit(Request $request)
    {
        // Lấy dữ liệu từ request
        $pvdID = $request->pvdID; // ID bản ghi
        $pvdmaloai = $request->pvdmaloai; // Mã loại sản phẩm
        $pvdtenloai = $request->pvdtenloai; // Tên loại sản phẩm
        $pvdtrangthai = $request->pvdtrangthai; // Trạng thái sản phẩm

        // Lấy bản ghi cần cập nhật từ database
        $pvdlsp = pvd_loai_san_pham::find($pvdID);

        // Kiểm tra xem bản ghi có tồn tại không
        if ($pvdlsp) {
            // Cập nhật các trường dữ liệu
            $pvdlsp->pvdmaloai = $request->pvdmaloai; 
            $pvdlsp->pvdtenloai =$request->pvdtenloai;
            $pvdlsp->pvdtrangthai = $request->pvdtrangthai;

            // Lưu lại thay đổi vào database
            $pvdlsp->save();

            // Redirect về trang cần thiết với thông báo thành công
            return redirect()->route('pvdadmin.pvd-list')->with('message', 'Sửa loại sản phẩm thành công!');
        } else {
            // Xử lý nếu không tìm thấy bản ghi
            return redirect()->route('pvdadmin.pvd-list')->with('message', 'Không tìm thấy bản ghi!');
        }
    }


    //xóa
    public function pvdDelete($pvdID) {
        $pvdLoaiSanPham = pvd_loai_san_pham::findOrFail($pvdID);
        $pvdLoaiSanPham->delete();
        return redirect()->route('pvdadmin.pvd-list')->with('message', 'Loại sản phẩm đã được xoá thành công!');
    }
}
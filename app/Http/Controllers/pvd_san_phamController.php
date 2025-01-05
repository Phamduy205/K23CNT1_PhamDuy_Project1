<?php

namespace App\Http\Controllers;
use App\Models\pvd_loai_san_pham;
use App\Models\pvd_san_pham;
use Illuminate\Http\Request;

class pvd_san_phamController extends Controller
{
    //
    public function pvdList(){
        $pvdsanphams = pvd_san_pham::paginate(5);
        return view("pvdadmins.pvdsanpham.pvd-List", ['pvdsanphams'=>$pvdsanphams]);
    }

    //create 
    public function pvdCreate(){
        $pvdloaisanphams = pvd_loai_san_pham::all();
        return view('pvdadmins.pvdsanpham.pvd-Create', compact('pvdloaisanphams'));
    }

    public function pvdCreateSubmit(Request $request)
    {   
        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'pvdmasanpham' => 'required|min:1|unique:pvd_san_pham,pvdmasanpham',
            'pvdtensanpham' => 'required|string|max:255',
            'pvdsoluong' => 'required|integer|min:1',
            'pvddongia' => 'required|numeric|min:0',
            'pvdtrangthai' => 'required|in:1,0',
            'pvdmaloai'=>'required',
            'pvdhinhanh' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'pvdmasanpham.required'=>'Mã sản phẩm là bắt buộc',
            'pvdmasanpham.unique'=> 'Mã này đã tồn tại',
            'pvdtensanpham.required' => 'Tên sản phẩm là bắt buộc.',
            'pvdsoluong.required' => 'Số lượng sản phẩm là bắt buộc.',
            'pvddongia.required' => 'Đơn giá là bắt buộc.',
            'pvdmaloai.required'=>'Mã loại là bắt buộc',
            'pvdhinhanh.image' => 'Hình ảnh phải có định dạng hợp lệ (jpg, jpeg, png, gif).',
            'pvdhinhanh.max' => 'Hình ảnh không được vượt quá 2MB.',
        ]);

        // Tạo đối tượng sản phẩm mới
        $pvdsanpham = new pvd_san_pham;
        $pvdsanpham->pvdmasanpham = $request->pvdmasanpham;
        $pvdsanpham->pvdtensanpham = $request->pvdtensanpham;
        $pvdsanpham->pvdsoluong = $request->pvdsoluong;
        $pvdsanpham->pvddongia = $request->pvddongia;
        $pvdsanpham->pvdmaloai = $request->pvdmaloai;
        $pvdsanpham->pvdtrangthai = $request->pvdtrangthai;

        // Xử lý hình ảnh nếu có
        if ($request->hasFile('pvdhinhanh')) {
            $image = $request->file('pvdhinhanh');
            if ($image->isValid()) {
                // Tạo tên file ảnh duy nhất
                $fileName = time() . '_' . $image->getClientOriginalName();
                // Di chuyển tệp vào thư mục lưu trữ cố định
                $image->move(public_path('images/san-pham'), $fileName);

                // Lưu đường dẫn vào CSDL
                $pvdsanpham->pvdhinhanh = 'images/san-pham/' . $fileName;
            } else {
                return redirect()->back()->with('error', 'Ảnh không hợp lệ hoặc không được chọn.');
            }
        }

        try {
            // Lưu sản phẩm vào cơ sở dữ liệu
            $pvdsanpham->save();
            return redirect()->route('pvdadmin.pvdsanphams')->with('success', 'Thêm sản phẩm thành công!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi thêm sản phẩm: ' . $e->getMessage());
        }
    }

    //edit
    public function pvdeditsanpham($pvdID){
        $pvdsanpham = pvd_san_pham::where('id', $pvdID)->first();
        if (!$pvdsanpham) {
            return redirect()->route('pvdadmin.pvdsanphams');
        }
        $pvdloaisanphams = pvd_loai_san_pham::all();
        return view('pvdadmins.pvdsanpham.pvd-edit', compact('pvdsanpham', 'pvdloaisanphams'));
    }
    public function pvdeditsanphamSubmit(Request $request)
    {
        try {
            // Tìm sản phẩm
            $pvdsanpham = pvd_san_pham::find($request->pvdID);

            if ($pvdsanpham) {
                if ($request->hasFile('pvdhinhanh')) {
                    $image = $request->file('pvdhinhanh');
                    if ($image->isValid()) {
                        // Tạo tên file ảnh duy nhất
                        $fileName = time() . '_' . $image->getClientOriginalName();
                        // Di chuyển tệp vào thư mục lưu trữ cố định
                        $image->move(public_path('images/san-pham'), $fileName);

                        // Lưu đường dẫn vào CSDL
                        $pvdsanpham->pvdhinhanh = 'images/san-pham/' . $fileName;
                    } else {
                        return redirect()->back()->with('error', 'Ảnh không hợp lệ hoặc không được chọn.');
                    }
                }

                // Cập nhật các trường khác
                $pvdsanpham->pvdtensanpham = $request->pvdtensanpham;
                $pvdsanpham->pvdsoluong = $request->pvdsoluong;
                $pvdsanpham->pvddongia = $request->pvddongia;
                $pvdsanpham->pvdmaloai = $request->pvdmaloai;
                $pvdsanpham->pvdtrangthai = $request->pvdtrangthai;

                $pvdsanpham->save();

                return redirect()
                    ->intendeḍ̣̣̣(route('pvdadmin.pvdsanpham.pvd-List')) 
                    ->with('message', 'Sửa sản phẩm thành công!');
            }

            return redirect()
                ->route('pvdadmin.pvdsanpham.pvd-List')
                ->with('error', 'Không tìm thấy sản phẩm!');

        } catch (\Exception $e) {
            Log::error('Upload error: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    public function pvdDelete($pvdID){
        $pvdLoaiSanPham = pvd_san_pham::findOrFail($pvdID);
        $pvdLoaiSanPham->delete();

        return redirect()->route('pvdadmin.pvdsanpham.pvd-List')->with('message', 'Sản phẩm đã được xoá thành công!');
    }
}
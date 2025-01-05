{{-- @extends('_layouts.khach._master')
@section('title','Danh sách loại sản phẩm')

@push('styles')
    
@endpush

@section('content')
    <article>
        <section class="sp-chinh container py-4">
            <div class="main-sp">
                <h2 class="tx-bang">Sản Phẩm Mới 2025</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/nasa.webp" class="card-img-top" alt="Laptop 1">
                            <div class="card-body text-center">
                                <h5 class="tensp">Laptop ASUS</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">30,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/msi.webp" class="card-img-top" alt="Laptop 2">
                            <div class="card-body text-center">
                                <h5 class="tensp">Laptop MSI</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">20,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/laptopdell.webp" class="card-img-top" alt="Laptop Văn Phòng">
                            <div class="card-body text-center">
                                <h5 class="tensp">Laptop Văn Phòng</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">10,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/gaming.webp" class="card-img-top" alt="Laptop Gaming">
                            <div class="card-body text-center">
                                <h5 class="tensp">Laptop Gaming</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">25,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sp-chinh container py-4">
            <div class="main-sp">
                <h2 class="tx-bang">Điện Thoại Mới</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/ip16prm.webp" class="card-img-between" alt="iPhone 16 Pro Max">
                            <div class="card-body text-center">
                                <h5 class="tensp">iPhone 16 Pro Max 256GB</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">50,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/ip15prm.webp" class="card-img-between" alt="iPhone 15">
                            <div class="card-body text-center">
                                <h5 class="tensp">iPhone 15 128GB</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">40,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/ip14prm.webp" class="card-img-between" alt="iPhone 14 Pro Max">
                            <div class="card-body text-center">
                                <h5 class="tensp">iPhone 14 Pro Max 128GB</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">20,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="/images/ip16pr.webp" class="card-img-betweenbetween" alt="iPhone 16 Pro">
                            <div class="card-body text-center">
                                <h5 class="tensp">iPhone 16 Pro 512GB</h5>
                                <p class="gia">Giá: <span class="text-danger font-weight-bold">30,000,000 VNĐ</span></p>
                                <a href="#" class="btn">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
    
    <footer style="background-color: #000000; color: #fff; padding: 20px 0;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; flex-wrap: wrap;">

          <div style="flex: 1; min-width: 200px;">
            <h3 style="border-bottom: 1px solid #444; padding-bottom: 5px;">ĐỊA CHỈ CỬA HÀNG</h3>
            <ul style="list-style: none; padding: 0; margin: 10px 0;">
              <li><a href="#" style="color: #00aaff; text-decoration: none;">Hà Nội</a></li>
              <li><a href="#" style="color: #00aaff; text-decoration: none;">Hồ Chí Minh</a></li>
              <li><a href="#" style="color: #00aaff; text-decoration: none;">Đà Nẵng</a></li>
              <li><a href="#" style="color: #00aaff; text-decoration: none;">Hải Phòng</a></li>
              <li><a href="#" style="color: #00aaff; text-decoration: none;">Quảng ninh</a></li>
            </ul>
          </div>
      
          <div style="flex: 1; min-width: 200px;">
            <h3 style="border-bottom: 1px solid #444; padding-bottom: 5px;">CTY CHÚNG TÔI</h3>
            <ul style="list-style: none; padding: 0; margin: 10px 0;">
              <li><a href="#" style="color: #fff; text-decoration: none;">Giới thiệu</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Thông tin tuyển dụng</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Liên hệ</a></li>
            </ul>
            <h3 style="border-bottom: 1px solid #444; padding-bottom: 5px;">TIN TỨC</h3>
            <ul style="list-style: none; padding: 0; margin: 10px 0;">
              <li><a href="#" style="color: #fff; text-decoration: none;">Tin công nghệ</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Tin khuyến mãi</a></li>
            </ul>
          </div>
      
          <div style="flex: 1; min-width: 200px;">
            <h3 style="border-bottom: 1px solid #444; padding-bottom: 5px;">CHĂM SÓC KHÁCH HÀNG</h3>
            <ul style="list-style: none; padding: 0; margin: 10px 0;">
              <li><a href="#" style="color: #fff; text-decoration: none;">Chính sách bảo hành</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Chính sách giao hàng</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Chính sách thanh toán</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Hướng dẫn mua hàng trả góp</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Chính sách bảo mật</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Hướng dẫn mua hàng Online</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Mua trả góp</a></li>
              <li><a href="#" style="color: #fff; text-decoration: none;">Hàng limited</a></li>
            </ul>
          </div>
      
          <div style="flex: 1; min-width: 200px;">
            <h3 style="border-bottom: 1px solid #444; padding-bottom: 5px;">LIÊN HỆ NHANH</h3>
            <p>Hotline bán hàng: <a href="tel:0834821988" style="color: #fff; text-decoration: none;">1234.56.7890</a> - <a href="tel:0123456789" style="color: #fff; text-decoration: none;">0123.456.789</a></p>
            <p>Hotline kỹ thuật: <a href="tel:0889393555" style="color: #fff; text-decoration: none;">1234.56.7890</a></p>
            <p>Email CSKH: <a href="mailto:kinhdoanh@surfaceviet.vn" style="color: #fff; text-decoration: none;">phamvanduy.vn</a></p>
          </div>
        </div>
      </footer>
@endsection --}}
{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
    Giới thiệu Phúc Bích Store
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url('{{ asset('/img/banner_about.jpeg') }}');">
        <h2 class="ltext-105 cl0 txt-center">
            PHÚC BÍCH STORE
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Về Chúng Tôi
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Bích Táo với kinh nghiệm 3 năm trong lĩnh vực điện thoại di động đã và đang trong quá
                            trình khẳng định mình trên thị trường điện thoại, máy tính bảng tại Việt Nam, Shop luôn nỗ lực
                            hết sức để cung cấp dịch vụ tốt nhất thị trường về điện thoại và thiết bị di động để mỗi khách
                            hàng khi đến với chúng tôi sẽ cảm thấy sự khác biệt so với những dịch vụ khác như chế độ bảo
                            hành và nhiều chương trình chăm sóc khách hàng khác mà di động mới sẽ triển khai trong tương
                            lai.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Tại Bích Táo Store , chúng tôi luôn hướng tới những giá trị của sự bền vững xây dựng trên lòng tin
                            của khách hàng. Chúng tôi cam kết đem đến cho khách hàng những sản phẩm tốt nhất để mỗi khách
                            hàng khi đến với Bích Táo Store sẽ cảm thấy hoàn toàn tin tưởng.

                        </p>
                        
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ asset('/img/vechungtoi.webp') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row p-b-148">
                


                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Đối với khách hàng: 
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Bích Táo Store không chỉ là một nơi bạn thoả mãn niềm đam mê công nghệ của
                            mình, mà còn là nơi bạn có thể tìm hiểu về thông tin, kiến thức chuyên sâu về điện thoại và
                            thiết bị di động nhằm chuẩn bị cho mình những kiến thức về một trào lưu sản phẩm công nghệ đang
                            phát triển như vũ bão trên thế giới. Chúng tôi rất mong sẽ nhận được nhiều góp ý của khách hàng
                            về dịch vụ, sản phẩm của công ty, để tiếp tục cải thiện mình, tiếp tục là một người bạn công
                            nghệ gần gũi với tất cả mọi người.
            
                        </p>
                        <p class="stext-113 cl6 p-b-26">
                            Xin chân thành cảm ơn quý khách đã ủng hộ Bích Táo Store, sự hài lòng của quý khách chính là niềm
                            vui của chúng tôi !
                        </p>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ asset('themes/cozastore/images/about-02.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            CHẾ ĐỘ BẢO HÀNH:
                        </h3>

                        <ul class="stext-113 cl6 p-b-26">
                            <li> - Tặng Cáp sạc zin chuẩn apple, bảo hành sạc cáp trọn đời máy</li>
                            <li>- Tặng Cường lực chống va đập cực tốt trị giá 100 ngàn đồng, thay cường lực miên miễn phí trọn đời máy
                            </li>
                            <li> - Bảo hành 6 tháng lỗi 1 đổi 1</li>
                           
                            
                        </ul>
                        
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ asset('/img/baohanh.jpeg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection

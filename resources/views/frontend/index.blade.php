{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
Shop Phúc Bích
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')
    {{-- <div class="container text-center">
        <h1 style="font-size: 20px"><marquee style="width: 60%">{{ __('sunshine.welcome') }}</marquee></h1>
    </div> --}}

<!-- Slider -->
@include('frontend.widgets.homepage-slider')
<!-- Banner -->
<!-- Product -->
@include('frontend.widgets.product-list', [$data = $danhsachsanpham])
@include('frontend.widgets.homepage-banner', [$data = $ds_top3_newest_loaisanpham])
{{-- @include('frontend.widgets.homepage-banner'); --}}
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
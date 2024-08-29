@extends('users.layouts.default')

@push('styles')
    <style>
        .main-image{
            width: 100%;
        }
        .second-image{
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
@endpush


@section('content')
    <!--end::Header Section-->
    <div class="mb-n10 mb-10 z-index-2">
        <div class="container mb-10">
            <div class="text-center mb-17">
                <h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works"
                    data-kt-scroll-offset="{default: 100, lg: 150}">Thông tin sản phẩm</h3>

            </div>
            <div class="row w-100 gy-10 mb-md-20 d-flex">
                <div class="col-xl-2 p-4">
                    <img src="{{ asset($product->images[0]->image_url) }}" alt="" class="main-image">
                    <hr>
                    <div class="d-flex flex-wrap">
                        @foreach($product->images as $value)
                            <img src="{{ asset($value->image_url) }}" alt="" class="second-image">
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-9">
                    <p>Tên sản phẩm: {{ $product->name }}</p>
                    <p>Giá sản phẩm: {{ number_format($product->price) }} VNĐ</p>
                    <p>Mô tả sản phẩm: {{ $product->description }}</p>
                    <p>Danh mục: {{ $product->category->name }}</p>

                    <form action="{{ route('users.addToCart') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="number" name="quantity" value="1"> <br>
                        <button class="btn btn-success">Mua hàng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::How It Works Section-->



@endsection

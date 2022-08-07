@extends('client.layouts.master')

@section('client-content')
<section class="shop__area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="shop__sidebar">
                    <div class="sidebar__widget mb-55">
                        <div class="sidebar__widget-title mb-25">
                            <h3>Danh mục sản phẩm </h3>
                        </div>
                        <div class="sidebar__widget-content">
                            @foreach ($category as $cate)

                            <div class="categories">

                                <div >
                                        
                                    <div class="card">
                                        <div class="card-header white-bg" >
                                        <h5 class="mb-0">
                                            <button class="shop-accordion-btn collapsed" data-toggle="collapse" data-target="#collapsecloth" aria-expanded="false" aria-controls="collapsecloth">
                                                 <a href="{{route('client.category', $cate->id)}}">{{$cate->name}}</a>
                                            </button>
                                        </h5>
                                        </div>
                                        <div  class="collapse" aria-labelledby="cloth" data-parent="#accordion">
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>


   
                    
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8">
                <div class="shop__content-area">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                            <div class="row custom-row-10">
                                <div class="col-xl-4 col-lg-4 ">
                                    @foreach ($product as $item)  
                                    <div class="product__wrapper mb-60">
                                        <div class="product__thumb">
                                            <a href="{{route('client.product.productDetail', $item->id)}}" class="w-img">
                                                <img src="{{asset($item->avatar)}}" alt="product-img">
                                            </a>
                                            <div class="product__sale">
                                                <span class="new">new</span>
                                                <span class="percent">-16%</span>
                                            </div>
                                        </div>
                                        <div class="product__content p-relative">
                                            <div class="product__content-inner">
                                                <h4><a href="{{route('client.product.productDetail', $item->id)}}">{{$item->name}}</a></h4>
                                                <div class="product__price transition-3">   
                                                    <span>{{$item->promotion}}</span>
                                                    <span class="old-price">{{$item->price}}</span>
                                                </div>
                                            </div>
                                            <div class="add-cart p-absolute transition-3">
                                                <a href="#">+ Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-40">
                        <div class="col-xl-12">
                            <div class="shop-pagination-wrapper d-md-flex justify-content-between align-items-center">
                                <div class="basic-pagination">
                                    <ul>
                                        <li><a href="#"><</a></li>
                                        <li class="active"><a href="#">01</a></li>
                                        <li ><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('client.layouts.master')

@section('client-content')
<section class="shop__area pb-65">
    <div class="shop__top grey-bg-6 pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">
                                    <a class="item nav-link " id="pro--tab" data-toggle="tab" href="" role="tab" aria-controls="pro-" aria-selected="true">
                                        <div class=" w-img">
                                            <img src="{{asset($productDetail->avatar)}}"  alt="">
                                        </div>
                                    </a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mb-20" id="product-detailsContent">
                            <div class="tab-pane fade show " id="pro-" role="tabpanel" aria-labelledby="pro--tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-16%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content product__modal-content-2">
                        <h4><a href="product-details.html">{{$productDetail->name}}</a></h4>
                        <div class="product__price-2 mb-25">
                        <h5><a href="#">Giá sản phẩm</a></h5>

                            <span>{{$productDetail->promotion}}</span>
                            <span class="old-price">{{$productDetail->price}}</span>
                        </div>
  
                        <div class="product__modal-form mb-30">
                            <form action="#">
                                <div class="product__price-2 mb-25">
                                    <h5><a href="#">Kích thước</a></h5>
            
                                        <span>{{$productDetail->size->name}}</span>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="des" role="tabpanel">
                                    <div class="product__details-des">
                                        <h5><a href="">Chi tiết</a></h5>
                                        <p>{{$productDetail->description}} </p>    
                                    </div>
                                </div>
                    
                                <div class="pro-quan-area d-sm-flex align-items-center">
                                    <div class="product-quantity-title">
                                        <label>Số lượng</label>
                                    </div>
                                    <div class="product-quantity mr-20 mb-20">
                                        <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                    </div>
                                    <div class="pro-cart-btn">
                                        <a href="#" class="add-cart-btn mb-20">+ Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                       
                        <div class="product__tag mb-25">
                            <span>Danh mục:</span>
                            <span><a href="{{route('client.category', $productDetail->category->id)}}">{{$productDetail->category->name}}</a></span>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                    {{-- <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Mô tả</a> --}}
                                    <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Đánh giá</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
                            <div class="product__details-review">
                                <div class="postbox__comments">
                                    <div class="postbox__comment-title mb-30">
                                        <h3>Đánh giá</h3>
                                    </div>
                                    <div class="latest-comments mb-30">
                                        <ul>
                                            <li>
                                                @foreach($comment_list as $comment)
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>{{$comment->user->name}}</h5>
                                                            <span> {{$comment->created_at}} </span>
                                                        </div>
                                                        <p>{{$comment->content}}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </li>

                                
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-comments-form mb-100">
                                    <div class="post-comments-title mb-30">
                                        <h3>Đánh giá của bạn</h3>
                                    </div>
                                    @if(Auth::user())
                                    <form id="contacts-form" class="conatct-post-form" action="{{route('client.comment', $productDetail->id)}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-icon p-relative contacts-message">
                                                    <textarea name="content" cols="30" rows="10" placeholder="Bình luận"></textarea>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="os-btn os-btn-black" type="submit">Đăng bình luận</button>
                                            </div>
                                        </div>
                                    </form>
                                    @else
                                        <span>Bạn cần đăng nhập để bình luận sản phẩm này !</span>
                                    @endif
                                </div>
                            <div class="tab-pane fade" id="review" role="tabpanel">
                                
                                    
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
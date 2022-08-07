@extends('client.layouts.master')

@section('client-content')
<section class="contact__area pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact__info">
                    <h3> Tìm chúng tôi ở đây</h3>
                    <ul class="mb-55">
                        <li class="d-flex mb-35">
                            <div class="contact__info-icon mr-20">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact__info-content">
                                <h6>Địa chỉ<h6>
                                <span>Mai Dịch, Cầu Giấy, Hà Nội</span>
                            </div>
                        </li>
                        <li class="d-flex mb-35">
                            <div class="contact__info-icon mr-20">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="contact__info-content">
                                <h6>Email:</h6>
                                <span>laiducpho2002@gmail.com</span>
                            </div>
                        </li>
                        <li class="d-flex mb-35">
                            <div class="contact__info-icon mr-20">
                                <i class="fal fa-phone-alt"></i>
                            </div>
                            <div class="contact__info-content">
                                <h6>Số điện thoại</h6>
                                <span>0965509035</span>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact__form">
                    <h3>Liên hệ với chúng tôi</h3>
                    <form action="" id="contact-form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact__input">
                                    <label>Họ tên <span class="required">*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact__input">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__input">
                                    <label>Nội dung</label>
                                    <textarea cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact__submit">
                                    <button type="submit" class="os-btn os-btn-black">Gửi </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
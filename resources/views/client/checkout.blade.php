@extends('client.layouts.master')

@section('client-content')
<section class="checkout-area pb-70 mt-70">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkbox-form">
                        <h3>Thông tin </h3>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Họ tên <span class="required">*</span></label>
                                    <input type="text" placeholder="Nguyễn Văn A">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="text" placeholder="a@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <input type="text" placeholder="0123456789">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input type="text" placeholder="Mai Dịch, Cầu Giấy, Hà Nội">
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="your-order mb-30 ">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name"> Tên Sản phẩm </th>
                                        <th class="product-total">Giá</th>
                                    </tr>
                                </thead>
                                <tfoot>
                       
                                
                                    <tr class="order-total">
                                        <th>Tổng tiền</th>
                                        <td><strong><span class="amount">50.000.000 VNĐ</span></strong>
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Thanh toán</option>
                            <option value="1">Thanh toán khi nhận hàng</option>
                            <option value="2">Thanh toán bằng thẻ ngân hàng</option>
                          </select>

                        <div class="payment-method">

                            <div class="order-button-payment mt-20">
                                <button type="submit" class="os-btn os-btn-black">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
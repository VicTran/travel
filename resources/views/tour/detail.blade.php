@extends('layouts.master')
@section('title')
   Travel Tour
@endsection
@section('content')
                   
        <!--page-welcome-area start -->
        <!--tours-details-area-content start -->
        <div class="tours-details-area-content section-padding">
            <div class="container">aaa
                <div class="row">
                    <div class="col-md-8">
                        <div class="tours-details-content-left">
                            <div class="tours-gallery-heading">
                                <h2>Nam Mỹ - 5 ngày ở hồ Tahoe</h2>
                                <h4>5 ngày - 4 đêm</h4>
                            </div>
                            <div class="tours-details-gallery owl-carousel padding-bottom">
                                <div class="tours-details-gallery-single" data-dot="<img src='{{asset('assets/img/tours-details-gallery-single1.jpg')}}' alt=''>">
                                    <img src="{{asset('assets/img/tours-details-gallery-single1.jpg')}}" alt="">
                                </div>
                                <div class="tours-details-gallery-single" data-dot="<img src='{{asset('assets/img/tours-details-gallery-single2.jpg')}}' alt=''>">
                                    <img src="{{asset('assets/img/tours-details-gallery-single2.jpg')}}" alt="">
                                </div>
                                <div class="tours-details-gallery-single" data-dot="<img src='{{asset('assets/img/tours-details-gallery-single3.jpg')}}' alt=''>">
                                    <img src="{{asset('assets/img/tours-details-gallery-single3.jpg')}}" alt="">
                                </div>
                                <div class="tours-details-gallery-single" data-dot="<img src='{{asset('assets/img/tours-details-gallery-single2.jpg')}}' alt=''>">
                                    <img src="{{asset('assets/img/tours-details-gallery-single2.jpg')}}" alt="">
                                </div>
                            </div>
                            
                            <div class="tours-details-menu">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">Detail</a></li>
                                    <li><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab">Hành Trình</a></li>
                                    <li><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Bản đồ</a></li>
                                    <li><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Duyệt lại</a></li>
                                </ul>
                            </div>
                            <div class="tab-content tours-details-tab-content padding-top">
                                <div role="tabpanel" class="tab-pane fade in active" id="detail">
                                   <div class="tours-details-menu-bottom">
                                        <h2>Về Nam Mỹ</h2>
                                        <p>Nam Mỹ là phần lục địa nằm ở phía tây của Nam bán cầu Trái Đất thuộc châu Mỹ, bắt đầu từ phía nam kênh đào Panama trở xuống. Du lịch Nam Mỹ ngày càng được du khách quan tâm với các tour Rio De Janeiro - Cusco - Machu Picchu-Lima-Thác. Vùng này cũng chiếm phần lớn khu vực Mỹ Latinh do người dân ở đây chủ yếu sử dụng tiếng Tây Ban Nha và tiếng Bồ Đào Nha.</p>
                                        <p>Iceland ngoài là quốc gia bình yên nhất 6 năm liên tiếp do tạp chí Forbes bình chọn còn rất đặc biệt khi lực lượng hành pháp ở đây không mang theo súng.Iceland không có thác nước cao nhất thế giới nhưng có thể tự hào về độ đa dạng của những thác nước sở hữu. Dettifoss là thác nước đẹp và nổi tiếng nhất châu Âu. Khi nước xối thẳng từ độ cao 45m xuống đất, những bọt nước trắng bắn tung trời tạo ra cảnh tượng rất ngoạn mục.</p>
                                    </div>
                                    <div class="tourist-details-information">
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Điểm khởi hành và vị trí trở về</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Sân vay quốc tế Nội Bài <a href="#">(Google Map)</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Giờ khởi hành</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>5 giờ trước khi bay</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Bao gồm hoặc không bao gồm</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li>Giá vé máy bay</li>
                                                        <li>3 đêm ở khách sạn Accomodation</li>
                                                        <li>Tất cả đồ uống</li>
                                                        <li>Tất cả vé thăm bảo tàng</li>
                                                        <li class="crossed-list">Phí hướng dẫn dịch vụ</li>
                                                        <li class="crossed-list">Bất kỳ khoản chi riêng</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="itinerary">
                                    <div class="tourist-details-information">
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Nơi khởi hành và điểm trở lại</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Sahazalal. International Airport <a href="#">(Google Map)</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Thời gian khởi hành</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>5 giờ trước khi bay</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Bao gồm và không bao gồm</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li>Giá vé máy bay</li>
                                                        <li>3 đêm ở khách sạn Accomodation</li>
                                                        <li>Tất cả đồ uống</li>
                                                        <li>Tất cả vé thăm bảo tàng</li>
                                                        <li class="crossed-list">Guide Service Fee</li>
                                                        <li class="crossed-list">Any Private Expenses</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="map">
                                   <div class="tours-details-menu-bottom">
                                        <h2>Về Châu Âu</h2>
                                        <p>Khám phá vẻ đẹp lộng lẫy đặc trưng của Châu Âu khi đặt chân lên các thành phố nổi tiếng thế giới: Paris - Bruxelles - Amsterdam ánh nắng chan hòa pha chút lạnh dịu nhẹ vô cùng thú vị, Nice, Monaco.., ghé thăm Barcelona nhộn nhịp với những vũ điệu Samba... .</p>
                                        <p>Tham quan nhiều điểm nổi tiếng “không thể không đến” tại châu Âu: tháp Eiffel, du thuyền sông Seine, Nhà Thờ Đức Bà, Bảo tàng Louvre, Khải hoàn môn, đại lộ Champs Elyséem (Pháp); Tháp nghiêng Pisa, Vatican - quốc gia nhỏ nhất trong lòng nước Ý, tượng Chú Bé Tè Mannequin Pis ....</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="reviews">
                                    <div class="tourist-details-information">
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Điểm khởi hành và nơi trở về</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Sahazalal. International Airport <a href="#">(Google Map)</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Điểm khởi hành</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>5 giờ trước khi bay</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tourist-details-single-row">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Bao gồm và không bao gồm</h5>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li>Giá vé máy bay</li>
                                                        <li>3 đêm ở khách sạn Accomodation</li>
                                                        <li>Tất cả đồ uống</li>
                                                        <li>Tất cả vé thăm bảo tàng</li>
                                                        <li class="crossed-list">Phí hướng dẫn dịch vụ</li>
                                                        <li class="crossed-list">Bất kỳ khoản chi riêng</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tours-details-content-right">
                            <div class="right-details-form padding-bottom">
                                <h3><span>Giá cả</span> $1500</h3>
                                <h4>Đặt tour du lịch</h4>
                                <form action="https://formspree.io/rabukushia@gmail.com" method="POST">
                                    <input type="text" placeholder="Name" name="name">
                                    <input type="email" placeholder="Email" name="email">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="select-item-adults-kids">
                                                Người lớn 
                                                <select name="adult-select" id="adult-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select-item-adults-kids">
                                                Trẻ em 
                                                <select name="kids-select" id="kids-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" placeholder="Phone" name="phone">
                                    <input type="text" placeholder="Date Book" name="date-book">
                                    <textarea name="details-message" id="details-message" cols="30" rows="10" placeholder="Message"></textarea>
                                    <button type="submit" class="pink-btn">Đặt ngay</button>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--tours-details-area-content end -->
        <!--footer-area start -->
        
        <!--footer-area end -->

        <!--jquery.min.js-->


@endsection


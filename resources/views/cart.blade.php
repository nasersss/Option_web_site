<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>المزادات </title>

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    @extends('master')
    @section('content')
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2">السلة</span></div>
                    <hr>
                    
                    <div class="d-flex justify-content-between"><span>لديك منتجين في سلتك</span>
                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">فرز حسب:</span>
                            <div class="price ml-2"><span class="mr-1">السعر</span><i class="fa fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="assets/images/mobile_listing_main_01.jpg" width="100">
                            <div class="ml-2"><span class="font-weight-bold d-block">نيسان KICKS SV+NAV</span><span class="spec">بترول, أحمر</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold">$9000</span><a href="#"><img src="assets/images/delete-button-svgrepo-com.svg" width="30"></a></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="assets/images/e-class-coupe-brilliant-blue-metallic.jpg" width="100">
                            <div class="ml-2"><span class="font-weight-bold d-block">مرسيدس بنز COUPE</span><span class="spec">بترول ,أزرق</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold">$15000</span><a href="#"><img src="assets/images/delete-button-svgrepo-com.svg" width="30"></a></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row">
                            <div class="ml-2"><span class="font-weight-bold d-block"></span><span class="spec"></span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold"></span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row">
                            <div class="ml-2"><span class="font-weight-bold d-block"></span><span class="spec"></span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"></span><span class="d-block ml-5 font-weight-bold"></span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>تفاصيل بطاقةالدفع</span><img class="rounded" src="assets/images/users/avatar-3.jpg" width="30"></div><span class="type d-block mt-3 mb-1">نوع بطاقة الدفع</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png"/></span> </label>

<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png"/></span> </label>

<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png"/></span> </label>


<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png"/></span> </label>
                    <div><label class="credit-card-label">إسم الطاقة</label><input type="text" class="form-control credit-inputs" placeholder="الإسم"></div>
                    <div><label class="credit-card-label">رقم البطاقة</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">التاريخ</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                    </div>
                    <hr class="line">
                   
                    <div class="d-flex justify-content-between information"><span>الشحن</span><span>$20.00</span></div>
                    <div class="d-flex justify-content-between information"><span>الإجمالي(Incl. taxes)</span><span>$2420.00</span></div><button class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"><span>$2420.00</span><span>الدفع<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>
            </div>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" id="warning">
    <strong>تحذير!</strong> في حال نقر المستخدم على زر الحذف سيتم خصم عربون الإشتراك
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
    </div>
             
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


  </body>

</html>
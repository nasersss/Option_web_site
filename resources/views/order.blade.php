<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/app-ar.min.css')}}" rel="stylesheet" type="text/css" id="light-style">


    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">

    <title>التوصيل</title>
</head>

<body>
    @extends('master')
    @section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <!-- Checkout Steps -->
                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                            <li class="nav-item">
                                <a href="#billing-information" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                    <i class="mdi mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">المعلومات الشخصية</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#shipping-information" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                    <i class="mdi mdi-truck-fast font-18"></i>
                                    <span class="d-none d-lg-block">معلومات التوصيل</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Steps Information -->
                        <div class="tab-content">

                            <!-- Billing Content-->
                            <div class="tab-pane show active" id="billing-information" style="margin-top: -100px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mt-2">المعلومات الشخصية</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-first-name" class="form-label">الاسم</label><span class="text-danger">*</span>
                                                        <input class="form-control" type="text" placeholder="ادخل الاسم" id="billing-first-name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-phone" class="form-label">رقم الهاتف <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="billing-phone">
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-email-address" class="form-label">البريد الالكتروني<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="email" placeholder="ادخل الايميل" id="billing-email-address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="billing-phone" class="form-label">رقم الهاتف <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="billing-phone">
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->

                                            <div>

                                                    <div class="text-sm-end">
                                                        <button class="btn btn-danger" onclick="myFunction()" style="float: left;">
                                                            <i class="mdi mdi-truck-fast me-1"></i> الخطوة التالي </button>

                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </form>
                                    </div>

                                </div> <!-- end row-->
                            </div>
                            <!-- End Billing Information Content-->

                            <!-- Shipping Content-->
                            <div class="tab-pane" id="shipping-information" style="margin-top: -100px;">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mt-2">معلومات الموقع</h4>
                                        <form>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="new-adr-address" class="form-label">العنوان</label>
                                                        <input class="form-control" type="text" placeholder="ادخل عنوانك" id="new-adr-address">
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="new-adr-town-city" class="form-label">المحافظة</label>
                                                        <input class="form-control" type="text" placeholder="مثلا حضرموت" id="new-adr-town-city">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="new-adr-state" class="form-label">المدينة</label>
                                                        <input class="form-control" type="text" placeholder="مثلا المكلا" id="new-adr-state">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="new-adr-zip-postal" class="form-label">المنطقة</label>
                                                        <input class="form-control" type="text" placeholder="مثلا الشرج" id="new-adr-zip-postal">
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-right"></i>الخطوة السابقة</a>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                            <i class="mdi mdi-cash-multiple me-1"></i>أكمال الدفع</a>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                            <h4 class="header-title mb-3">اجمالي الطلب</h4>

                                            <div class="table-responsive">
                                                <table class="table table-centered mb-0">
                                                    <tbody>
                                                    <tr class="text-end">
                                                        <td>
                                                            <h6 class="m-0">سعر السيارة:</h6>
                                                        </td>
                                                        <td class="text-end">
                                                            $5000
                                                        </td>
                                                    </tr>
                                                    <tr class="text-end">
                                                        <td>
                                                            <h6 class="m-0">سعر التوصيل:</h6>
                                                        </td>
                                                        <td class="text-end">
                                                            مجاني
                                                        </td>
                                                    </tr>
                                                    <tr class="text-end">
                                                        <td>
                                                            <h5 class="m-0">الإجمالي:</h5>
                                                        </td>
                                                        <td class="text-end fw-semibold">
                                                            $5000
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div> <!-- end .border-->

                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                            </div>
                            <!-- End Shipping Information Content-->



                        </div> <!-- end tab content-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>

    </div>
    <script>
        const tab = document.getElementById("billing-information");
        const tab = document.getElementById("shipping-information");
    </script>


    @endsection

    <script src="assets/js/pages/demo.form-wizard.js"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/vendor.min.js"></script>




</body>

</html>

@extends('admin.layouts.main')

@section('title')
تحديث انواع المركبات

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
   المركبات
@endsection
@section('breadcrumb-item2')
    تحديث مركبة
@endsection

@section('breadcrumb-item-active')
    المركبات
@endsection

@section('page-title')
    تحديث  مركبه
@endsection

@section('content')
    @if($errors->any())
    @foreach($errors->all() as $err)
        <p>{{$err}}</p>
        @endforeach
    @endif
    <div class="row">
        <div class="col-12">
            <div id="msg" class="alert alert-danger">
                <strong id="err-msg"></strong>
                </div>
            {{-- @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @endif --}}
                            @include('message')

            <div class="card">
                <div class="card-body">
                    <form method="post" id="vehicle_types" class="validation" action="{{ route('update_vehicle',$vehicle->id) }}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">اسم المركبة  </label>
                                <input type="text" name="name" class="form-control" value="{{  $vehicle->name }}" id="inputAddress" placeholder="مثال حضرموت..">
                            </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">الحالة</label>
                            <select name="is_active" class="form-select mb-3">
                                <option @if($vehicle->is_active==1) selected @endif value="1">نشط</option>
                                <option @if($vehicle->is_active==-1) selected @endif value="-1">غير نشط</option>



                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">تحديث</button>

                    </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>



@endsection

@section('script')
<script src="/assets/js/validation.js"></script>
@endsection



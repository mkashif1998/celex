@extends('layout.main-layout')
@push('Title')
    <title>Edit Product</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="login_form_container">
            <div class="account_login_form">
                <form action="{{ url('/') }}/admin/product-update/{{ $product_edit->id }}" enctype="multipart/form-data"
                    method="post">
                    @if (Session::has('productadd'))
                        <div class="alert alert-success">{{ Session::get('productadd') }}</div>
                    @endif
                    @if (Session::has('productfail'))
                        <div class="alert alert-success">{{ Session::get('productfail') }}</div>
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Name</label>
                                <input type="text" name="product_name" value="{{ $product_edit->product_name }}">
                            </div>
                            <span class="text-danger">
                                @error('product_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Category</label>
                                <input type="text" name="product_category" value="{{ $product_edit->product_category }}">
                            </div>
                            <span class="text-danger">
                                @error('product_category')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Product Tag</label>
                            <select class="form-select form-control" name="product_tag">
                                <option value="{{ $product_edit->product_tag }}" selected >
                                    {{ $product_edit->product_tag }}</option>
                                <option value="New">New</option>
                                <option value="Sale">Sale</option>
                                <option value="Both">Both</option>
                            </select>
                            <span class="text-danger">
                                @error('product_tag')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Type</label>
                                <select class="form-select form-control" name="product_type">
                                    <option value="{{ $product_edit->product_type }}" selected >
                                        {{ $product_edit->product_type }}</option>
                                    <option value="On Sales">On Sales</option>
                                    <option value="Sale Items">Sale Items </option>
                                    <option value="Best Sellers">Best Sellers</option>
                                    <option value="Features Products">Features Products</option>
                                </select>
                            </div>
                            <span class="text-danger">
                                @error('product_type')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Stock</label>
                                <input type="number" name="product_stock" value="{{ $product_edit->product_stock }}">
                            </div>
                            <span class="text-danger">
                                @error('product_stock')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Price</label>
                                <input type="number" name="product_price" value="{{ $product_edit->product_price }}">
                            </div>
                            <span class="text-danger">
                                @error('product_price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Price Off %</label>
                                <input type="number" name="product_price_off"
                                    value="{{ $product_edit->product_price_off }}">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="default-form-box mb-20">
                                <label>Product Other Info</label>
                                <input type="text" name="product_other_info"
                                    value="{{ $product_edit->product_other_info }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="default-form-box mb-20">
                                <label>Product Description</label>
                                <textarea type="text" row="3" name="product_description"> {{ $product_edit->product_description }}</textarea>
                            </div>
                            <span class="text-danger">
                                @error('product_description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="button_outer file_uploading file_uploaded">
                                    <div class="btn_upload">
                                        <input type="file" id="add_product_image_upload" name="product_image"> Upload
                                        Product Image
                                    </div>
                                    <div class="processing_bar"></div>
                                    <div class="success_box"></div>
                                </div>
                            </div>
                            <span class="text-danger">
                                @error('product_image')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="error_msg"></div>
                            <div class="uploaded_file_view show" id="uploaded_view" style="border: px solid black;">
                                <span class="file_remove">X</span>
                                <img src="{{url('/')}}/images/add-product/{{$product_edit->product_image}}"
                                    alt="1662187761.png">
                            </div>
                        </div>
                    </div>
                    <div class="save_button mt-3">
                        <button class="btn btn-color-dark btn-hover-color-primary" type="submit">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $('.panel').hide();
        var btnUpload = $("#add_product_image_upload"),
            btnOuter = $(".button_outer");
        btnUpload.on("change", function(e) {
            var ext = btnUpload.val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                $(".error_msg").text("Not an Image...");
            } else {
                $(".error_msg").text("");
                btnOuter.addClass("file_uploading");
                setTimeout(function() {
                    btnOuter.addClass("file_uploaded");
                }, 3000);
                var uploadedFile = URL.createObjectURL(e.target.files[0]);
                setTimeout(function() {
                    $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass("show");
                }, 3500);
            }
        });
        $(".file_remove").on("click", function(e) {
            // $('.panel').show();
            $("#uploaded_view").removeClass("show");
            $("#uploaded_view").find("img").remove();
            btnOuter.removeClass("file_uploading");
            btnOuter.removeClass("file_uploaded");
        });
    </script>
@endsection

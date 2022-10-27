@extends('layout.main-layout')
@push('Title')
<title>Slider</title>
@endpush
@section('main-section')
<div class="container">
    <div class="mb-3 mt-5  p-1 d-flex justify-content-between" style="border: 1px solid lightgray;border-radius:10px" style="border: 1px solid lightgray;border-raddius:10px">
        <h6 class="text-secondary pt-1">Add New Home Slider Image and Details</h6>
        <div class="mr-5 mt-1">
            <svg id="updownbtn" class="text-secondary cursor pt-1 pr-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="35" height="35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
        </div>
    </div>
    <form action="slider-data-save" method="POST" enctype="multipart/form-data">
        @csrf
        @if (Session::has('slideradd'))
        <div class="alert alert-success">{{ Session::get('slideradd') }}</div>
        @endif
        @if(Session::has('sliderfail'))
        <div class="alert alert-fail">{{ Session::get('sliderfail') }}</div>
        @endif
        <div class="row p-1 up_down_function">
            <div class="col-md-6 align-self-stretch">
                <div class="row">
                    <div class="default-form-box mb-20">
                        <label>Slider Title</label>
                        <input type="text" name="slider_title" placeholder="Please enter slider title" value="{{ old('slider_title')}}">
                        <span class="text-danger">
                            @error('slider_title')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="default-form-box mb-20">
                        <label>Slider Text</label>
                        <input type="text" name="slider_text" placeholder="Please enter slider text" value="{{ old('slider_text')}}">
                        <span class="text-danger">
                            @error('slider_text')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <button class="btn btn-color-dark btn-hover-color-primary float-right mb-3" type="submit">Submit</button>
            </div>
            <div class="col-md-6 align-self-stretch">
                <label class="slider_picture" for="slider_picture__input" tabIndex="0">
                    <span class="slider_picture__image"></span>
                </label>
                <input type="file" name="slider_picture" id="slider_picture__input">
                <span class="text-danger">
                    @error('slider_picture')
                    {{ $message }}
                    @enderror
                </span>
            </div>
        </div>
    </form>
    <div class="row mt-4">
        @foreach ($slider_view as $slider_data)
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card" style="width: 100%">
                <img src="{{ url('/') }}/images/slider/{{ $slider_data->slider_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">{{ $slider_data->slider_title }}</h6>
                  <p class="card-text">{{ $slider_data->slider_text }}</p>
                </div>
                <div class=" p-2 card-border">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="text-light font-weight-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="20" height="20" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                              </svg>
                        </a>
                        <a href="{{ url('/') }}/admin/slider-delete/{{ $slider_data->id }}" class="text-light font-weight-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="20" height="20" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                        </a>
                    </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection



@section('script')
<script>
    const inputFile = document.querySelector("#slider_picture__input");
const slider_pictureImage = document.querySelector(".slider_picture__image");
const slider_pictureImageTxt = "Choose an image";
slider_pictureImage.innerHTML = slider_pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("slider_picture__img");

      slider_pictureImage.innerHTML = "";
      slider_pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    slider_pictureImage.innerHTML = slider_pictureImageTxt;
  }
});
$(".up_down_function").hide();
$("#updownbtn").click(function(){
  $(".up_down_function").toggle(1000);
});
</script>
@endsection

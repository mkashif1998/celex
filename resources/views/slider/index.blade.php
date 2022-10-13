@extends('layout.main-layout')
@push('Title')
<title>Slider</title>
@endpush
@section('main-section')
<div class="container">
    <form action="slider-data-save" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
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
        <button class="btn btn-color-dark btn-hover-color-primary float-right mb-3" type="submit">Submit</button>
    </form>

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
</script>
@endsection

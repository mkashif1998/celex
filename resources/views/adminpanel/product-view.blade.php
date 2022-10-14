@extends('layout.main-layout')
@push('Title')
    <title>Products</title>
@endpush
@section('CSSStyle')
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css'>
<style>
@media only screen and (max-width: 2600px) and (min-width: 1200px)  {
    .display
    {
        max-width: 1130px !important;
    }
}
@media only screen and (max-width: 1200px) and (min-width: 990px)  {
    .display
    {
        max-width: 730px !important;
    }
}
</style>
@endsection

{{-- @section('product-search')
<div class="col d-none d-lg-block">
    <div class="dropdown_search">
        <form class="action-form" action="#">
            <input class="form-control" name="search" placeholder="Search" aria-label="Search"  placeholder="Search Your Products" value="{{$searchkey}}" type="search">
            <button class="submit" type="submit"><i class="ion-ios-search"></i></button>
        </form>
    </div>
</div>
@endsection --}}
@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-end" >
            <a href="{{url('/')}}/admin/add-product" class="btn btn-color-dark btn-hover-color-primary  mb-3" type="button">Add New Product</a>
        </div>
        <div style="border:px solid red">
          <table id="tabeljs" class="display" style="">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Product Tag</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Product Stock</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Price Off %</th>
                    <th scope="col">Product Other Info</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($displayproduct as $product)
                <tr >
                    <th scope="row">{{$product->id}}</th>
                    <th >{{$product->id}}</th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_category}}</td>
                    <td>{{$product->product_tag}}</td>
                    <td>{{$product->product_type}}</td>
                    <td>{{$product->product_stock}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_price_off}}</td>
                    <td>{{$product->product_other_info}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>
                        <a href="{{url('/')}}/admin/product-edit/{{$product->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="20px" height="20px" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                              </svg>
                        </a>
                        <a href="{{url('/')}}/admin/product-delete/{{$product->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="20px" height="20px" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                        </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection

@section('script')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>
<script>
    $(document).ready(function() {
        var table = $('#tabeljs').DataTable({
                select: false,
                "columnDefs": [{
                    className: "Name",
                    "targets":[0],
                    "visible": false,
                    "searchable":false
                }]
            });
        $('#tabeljs tbody').on( 'click', 'tr', function () {
            // alert(table.row( this ).data()[0]);
        } );
    });
</script>
@endsection

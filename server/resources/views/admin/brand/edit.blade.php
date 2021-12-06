@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit brand</div>
          <div class="card-body">
            <form action="{{ url('brand/update/' . $brand->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
              <div class="form-group">
                <label for="exampleInputEmail1">Update Brand Name</label>
                <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('brand_name', $brand->brand_name) }}">
                @error('brand_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Update Brand Image</label>
                <input type="file" class="form-control" name="brand_image" value="{{ $brand->brand_image }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('brand_image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <img src="{{ asset($brand->brand_image) }}" style="width: 400px; height: 200px">
              </div>
              <button type="submit" class="btn btn-primary">Update Brand</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

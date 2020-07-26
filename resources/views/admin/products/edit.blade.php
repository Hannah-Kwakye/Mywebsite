@extends('layouts.app_admin')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="pricing">
            <div class="card card_border mb-12">
              <div class="card-body">
                <form action="{{ route('admin.products.update') }}" method="POST" role="form" enctype="multipart/form-data">
                         @csrf
                    <section class="w3l-pricing1">
                      <div class="row px-2">
                        <div class="col-md-12 px-2">
                            <div class="mb-2 price-card price-card2 p-lg-2 p-md-2 p-2 recomemded-price">
                                <a href="{{ route('admin.products.index') }}" class="btn btn-primary pull-right mt-2">Cancel</a>
                                <button type="submit" class="btn btn-primary pull-right m-2">Update Product</button>
                            {{-- <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1> --}}
                                <h3 class="tile-title">{{ $subTitle }}</h3>  
                                <div class="card-header p-0 card-heading">
                                    Update Product Information
                                </div>
                            </div>
                            @include('partials.flash')
                        
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="tile">
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <input
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        type="text"
                                                        placeholder="Enter attribute name"
                                                        id="name"
                                                        name="name"
                                                        value="{{ old('name', $product->name) }}"
                                                    />
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <div class="invalid-feedback active">
                                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('name') <span>{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="sku">SKU</label>
                                                            <input
                                                                class="form-control @error('sku') is-invalid @enderror"
                                                                type="text"
                                                                placeholder="Enter product sku"
                                                                id="sku"
                                                                name="sku"
                                                                value="{{ old('sku', $product->sku) }}"
                                                            />
                                                            <div class="invalid-feedback active">
                                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('sku') <span>{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="brand_id">Brand</label>
                                                            {{-- @error('brand_id') is-invalid @enderror --}}
                                                            <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                                                                <option value="0">Select a brand</option>
                                                                @foreach($brands as $brand)
                                                                    @if ($product->brand_id == $brand->id)
                                                                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                                    @else
                                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback active">
                                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('brand_id') <span>{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="categories">Categories</label>
                                                            <select name="categories[]" id="categories" class="form-control" multiple>
                                                                @foreach($categories as $category)
                                                                    @php $check = in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : ''@endphp
                                                                    <option value="{{ $category->id }}" {{ $check }}>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="price">Price</label>
                                                            <input
                                                                class="form-control @error('price') is-invalid @enderror"
                                                                type="text"
                                                                placeholder="Enter product price"
                                                                id="price"
                                                                name="price"
                                                                value="{{ old('price', $product->price) }}"
                                                            />
                                                            <div class="invalid-feedback active">
                                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('price') <span>{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="special_price">Special Price</label>
                                                            <input
                                                                class="form-control"
                                                                type="text"
                                                                placeholder="Enter product special price"
                                                                id="special_price"
                                                                name="special_price"
                                                                value="{{ old('special_price', $product->special_price) }}"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="quantity">Quantity</label>
                                                            <input
                                                                class="form-control @error('quantity') is-invalid @enderror"
                                                                type="number"
                                                                placeholder="Enter product quantity"
                                                                id="quantity"
                                                                name="quantity"
                                                                value="{{ old('quantity', $product->quantity) }}"
                                                            />
                                                            <div class="invalid-feedback active">
                                                                <i class="fa fa-exclamation-circle fa-fw"></i> @error('quantity') <span>{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="weight">Weight</label>
                                                            <input
                                                                class="form-control"
                                                                type="text"
                                                                placeholder="Enter product weight"
                                                                id="weight"
                                                                name="weight"
                                                                value="{{ old('weight', $product->weight) }}"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="description">Description</label>
                                                    <textarea name="description" id="description" rows="8" class="form-control">{{ old('description', $product->description) }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input"
                                                                   type="checkbox"
                                                                   id="status"
                                                                   name="status"
                                                                   {{ $product->status == 1 ? 'checked' : '' }}
                                                                />Status
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input"
                                                                   type="checkbox"
                                                                   id="featured"
                                                                   name="featured"
                                                                   {{ $product->featured == 1 ? 'checked' : '' }}
                                                                />Featured
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                     </div>
                   </section>
                </form>
              </div>
            </div>
      </section>
   </div>
</div>
          
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/select2.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('#categories').select2();
        });
    </script>
@endpush
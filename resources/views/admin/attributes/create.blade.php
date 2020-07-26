@extends('layouts.app_admin')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="pricing">
            <div class="card card_border mb-12">
              <div class="card-body">
                <form action="{{ route('admin.attributes.store') }}" method="POST" role="form" enctype="multipart/form-data">
                         @csrf
                    <section class="w3l-pricing1">
                      <div class="row px-2">
                        <div class="col-md-12 px-2">
                            <div class="mb-2 price-card price-card2 p-lg-2 p-md-2 p-2 recomemded-price">
                                <a href="{{ route('admin.attributes.index') }}" class="btn btn-danger pull-right mt-2">Go Back</a>
                                <button type="submit" class="btn btn-primary pull-right m-2">Update Attribute</button>
                            {{-- <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1> --}}
                                <h3 class="tile-title">{{ $subTitle }}</h3>  
                                <div class="card-header p-0 card-heading">
                                    Attribute Information
                                </div>
                            </div>
                            @include('partials.flash')
                        
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="tile">
                    
                                            <div class="tile-body">
                                                <div class="form-group">
                                                    <label class="control-label" for="code">Code</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter attribute code"
                                                        id="code"
                                                        name="code"
                                                        value="{{ old('code') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter attribute name"
                                                        id="name"
                                                        name="name"
                                                        value="{{ old('name') }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="frontend_type">Frontend Type</label>
                                                    @php $types = ['select' => 'Select Box', 'radio' => 'Radio Button', 'text' => 'Text Field', 'text_area' => 'Text Area']; @endphp
                                                    <select name="frontend_type" id="frontend_type" class="form-control">
                                                        @foreach($types as $key => $label)
                                                            <option value="{{ $key }}">{{ $label }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" id="is_filterable" name="is_filterable"/>Filterable
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" id="is_required" name="is_required"/>Required
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
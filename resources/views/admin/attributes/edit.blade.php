@extends('layouts.app_admin')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="pricing">
            <div class="card card_border mb-12">
              <div class="card-body">
                <form action="{{ route('admin.attributes.update') }}" method="POST" role="form" enctype="multipart/form-data">
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
                                <ul class="nav flex-column nav-tabs user-tabs">
                                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#values" data-toggle="tab">Attribute Values</a></li>
                                </ul>
                            </div>
                            @include('partials.flash')
                            <!--attribute section 3-->
                           
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
                                                        value="{{ old('code', $attribute->code) }}"
                                                    />
                                                </div>
                                                <input type="hidden" name="id" value="{{ $attribute->id }}">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <input
                                                        class="form-control"
                                                        type="text"
                                                        placeholder="Enter attribute name"
                                                        id="name"
                                                        name="name"
                                                        value="{{ old('name', $attribute->name) }}"
                                                    />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="frontend_type">Frontend Type</label>
                                                    @php $types = ['select' => 'Select Box', 'radio' => 'Radio Button', 'text' => 'Text Field', 'text_area' => 'Text Area']; @endphp
                                                    <select name="frontend_type" id="frontend_type" class="form-control">
                                                        @foreach($types as $key => $label)
                                                            @if ($attribute->frontend_type == $key)
                                                                <option value="{{ $key }}" selected>{{ $label }}</option>
                                                            @else
                                                                <option value="{{ $key }}">{{ $label }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input"
                                                                   type="checkbox"
                                                                   id="is_filterable"
                                                                   name="is_filterable"
                                                                {{ $attribute->is_filterable == 1 ? 'checked' : '' }}/>Filterable
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input"
                                                                   type="checkbox"
                                                                   id="is_required"
                                                                   name="is_required"
                                                                {{ $attribute->is_required == 1 ? 'checked' : '' }}/>Required
                                                        </label>
                                                    </div>
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
                <div class="col-md-9">
                    <div class="tab-content">
                            <div class="tab-pane" id="values">
                                <attribute-values :attributeid="{{ $attribute->id }}"></attribute-values>
                            </div>
                        </div>
                       
                    </div>
              </div>
            </div>
      </section>
   </div>
</div>
          
@endsection
@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
@extends('layouts.app_admin')
@section('title') {{ $pageTitle }} @endsection

@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="pricing">
            <div class="card card_border mb-12">
                <div class="card-body">
                    <section class="w3l-pricing1">
                        <div class="row px-2">
                            <div class="col-md-12 px-2">
                                    <div class="mb-2 price-card price-card2 p-lg-2 p-md-2 p-2 recomemded-price">
                                        <a href="{{ route('admin.brands.create') }}" class="btn btn-primary pull-right">Add Brand</a>
                                            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
                                            <p>{{ $subTitle }}</p>
                                        <div class="card-header p-0 card-heading">
                                        </div>
                                    </div>
                                    @include('partials.flash')
                                <div class="container-fluid content-top-gap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tile">
                                                <div class="tile-body">
                                                    <table class="table table-hover table-bordered" id="sampleTable">
                                                        <thead>
                                                        <tr>
                                                            <th> # </th>
                                                            <th> Name </th>
                                                            <th> Slug </th>
                                                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($brands as $brand)
                                                            <tr>
                                                                <td>{{ $brand->id }}</td>
                                                                <td>{{ $brand->name }}</td>
                                                                <td>{{ $brand->slug }}</td>
                                                                <td class="text-center">
                                                                    <div class="btn-group" role="group" aria-label="Second group">
                                                                        <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                                        <a href="{{ route('admin.brands.delete', $brand->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</div>



@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush

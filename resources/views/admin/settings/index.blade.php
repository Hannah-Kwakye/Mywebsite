@extends('layouts.app_admin')

@section('title') {{ $pageTitle }} @endsection

@section('content')

  
    
    @include('partials.flash')
<div class="main-content">
 <!-- content -->
 <div class="app-title">
    <div>
        <h1><i class="fa fa-cogs"></i> {{ $pageTitle }}</h1>
    </div>
</div>
    <div class="container-fluid content-top-gap">
    <section class="pricing">
    <div class="card card_border mb-5">
      <div class="card-body">
        <section class="w3l-pricing1">
          <div class="row px-2">
            <div class="col-md-4 px-2">
              <div class="mb-4 price-card price-card2 p-lg-4 p-md-3 p-4 recomemded-price">
                <div class="card-header p-0 card-heading">
                  <h4 class="mb-4">Setting </h4>
                </div>
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                    <li class="nav-item"><a class="nav-link" href="#site-logo" data-toggle="tab">Site Logo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer-seo" data-toggle="tab">Footer &amp; SEO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social-links" data-toggle="tab">Social Links</a></li>
                    <li class="nav-item"><a class="nav-link" href="#analytics" data-toggle="tab">Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#payments" data-toggle="tab">Payments</a></li>
              </ul>
               
              </div>
            </div>
             
          </div>
          <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    @include('admin.settings.includes.general')
                </div>
                <div class="tab-pane fade" id="site-logo">
                    @include('admin.settings.includes.logo')
                </div>
                <div class="tab-pane fade" id="footer-seo">
                    @include('admin.settings.includes.footer_seo')
                </div>
                <div class="tab-pane fade" id="social-links">
                    @include('admin.settings.includes.social_links')
                </div>
                <div class="tab-pane fade" id="analytics">
                    @include('admin.settings.includes.analytics')
                </div>
                <div class="tab-pane fade" id="payments">
                    @include('admin.settings.includes.payments')
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
    </div>
</div>

@endsection



<section class="forms">
  <div class="kt-login__body">
      <form method="POST" action="{{ route('admin.settings.update') }}" >
          @csrf
      <!--begin::Signin-->
      <div class="kt-login__title">
          <h3>General Settings</h3>
      </div>
        <hr>
      <div class="kt-login__form">
          <!--begin::Form-->
              <div class="form-group">
                  <input
                  class="form-control @error('site name') is-invalid @enderror"
                  type="text"
                  placeholder="Enter site name"
                  id="site_name"
                  name="site_name"
                  value="{{ config('settings.site_name') }}"/>
               
                  @error('site name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
             <div class="form-group">
              <input
              class="form-control @error('site_title') is-invalid @enderror"
              type="text"
              placeholder="Enter site name"
              id="site_title"
              name="site_title"
              value="{{ config('settings.site_name') }}"/>
           
              @error('site title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
             </div>
             
              <div class="form-group">
                  <input
                      class="form-control"
                      type="email"
                      placeholder="Enter store default email address"
                      id="default_email_address"
                      name="default_email_address"
                      value="{{ config('settings.default_email_address') }}"
                  />
              </div>
              <div class="form-group">
                  <input
                      class="form-control"
                      type="text"
                      placeholder="Enter store currency code"
                      id="currency_code"
                      name="currency_code"
                      value="{{ config('settings.currency_code') }}"
                  />
              </div>
              <div class="form-group">
                  <input
                      class="form-control"
                      type="text"
                      placeholder="Enter store currency symbol"
                      id="currency_symbol"
                      name="currency_symbol"
                      value="{{ config('settings.currency_symbol') }}"
                  />
              </div>
          </div>

               <!--begin::Action-->
              <div class="kt-login__actions">
                  <button  type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">{{ __('Update Settings') }}
                  </button>
                  
                  
              </div>
       

          <!--end::Form-->

          
      </div>
  </form>
      <!--end::Signin-->
  </div> 
</section>
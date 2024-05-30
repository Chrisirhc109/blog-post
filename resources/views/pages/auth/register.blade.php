<x-auth-layout>

    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <img class="card-img-top" src="/registerAndLogin/Logo.png" alt="Card image cap">
    
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('register') }}">
            @csrf
    
            <div class="card-body">
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder mb-3">
                        Sign Up
                    </h1>
                    <!--end::Title-->
                </div>
                <!--begin::Heading-->
    
                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Name-->
                    <input type="text" placeholder="Name" name="name" autocomplete="off" class="form-control bg-transparent"/>
                    <!--end::Name-->
                </div>
    
                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/>
                    <!--end::Email-->
                </div>
    
                <!--begin::Input group-->
                <div class="fv-row mb-8" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off"/>
    
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->
    
                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->
    
                    <!--begin::Hint-->
                    <div class="text-muted">
                        Use 8 or more characters with a mix of letters, numbers & symbols.
                    </div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group--->
    
                <!--end::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Repeat Password-->
                    <input placeholder="Repeat Password" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent"/>
                    <!--end::Repeat Password-->
                </div>
                <!--end::Input group--->
    
                <!--begin::Input group--->
                <div class="fv-row mb-10">
                    <div class="form-check form-check-custom form-check-solid form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1"/>
    
                        <label class="form-check-label fw-semibold text-gray-700 fs-6">
                            I Agree &
    
                            <a href="#" class="ms-1 link-primary">Terms and conditions</a>.
                        </label>
                    </div>
                </div>
                <!--end::Input group--->
    
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                        @include('partials/general/_button-indicator', ['label' => 'Sign Up'])
                    </button>
                </div>
                <!--end::Submit button-->
    
                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6 card-footer">
                    Already have an Account?
    
                    <a href="/login" class="link-primary fw-semibold">
                        Login
                    </a>
                </div>
                <!--end::Sign up-->
            </div>
        </form>
        <!--end::Form-->
    
    </div>
    
    </x-auth-layout>
    
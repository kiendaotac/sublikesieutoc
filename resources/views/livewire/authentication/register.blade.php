<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>body { background-image: url('{{ asset('assets/media/auth/bg10.jpeg') }}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset('assets/media/auth/bg10-dark.jpeg') }}'); }</style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <!--begin::Image-->
                <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets/media/auth/agency.png') }}" alt="" />
                <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets/media/auth/agency-dark.png') }}" alt="" />
                <!--end::Image-->
{{--                <!--begin::Title-->--}}
{{--                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>--}}
{{--                <!--end::Title-->--}}
{{--                <!--begin::Text-->--}}
{{--                <div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,--}}
{{--                    <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed--}}
{{--                    <br />and provides some background information about--}}
{{--                    <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their--}}
{{--                    <br />work following this is a transcript of the interview.</div>--}}
{{--                <!--end::Text-->--}}
            </div>
            <!--end::Content-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <!--begin::Wrapper-->
            <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="../../demo39/dist/authentication/layouts/overlay/sign-in.html" action="#">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Đăng ký</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">Sử dụng mạng xã hội</div>
                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Login options-->
                            <div class="row g-3 mb-9">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Google link=-->
                                    <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Sign in with Google</a>
                                    <!--end::Google link=-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Google link=-->
                                    <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
                                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                                    <!--end::Google link=-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Login options-->
                            <!--begin::Separator-->
                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">hoặc email</span>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Email-->
                                <input wire:model.debounce="form.email" type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Email-->
                                @error('form.email')
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="password" data-validator="notEmpty">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Username-->
                                <input wire:model.debounce="form.username" type="text" placeholder="Tài khoản" name="username" autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Username-->
                                @error('form.username')
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="password" data-validator="notEmpty">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-8" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input wire:model.debounce="form.password" class="form-control bg-transparent" type="password" placeholder="Mật khẩu" name="password" autocomplete="off" />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="ki-outline ki-eye-slash fs-2"></i>
                                            <i class="ki-outline ki-eye fs-2 d-none"></i>
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
                                <div class="text-muted">Mật khẩu phải lơn hơn 8 ký tự, gồm chữ hoa, chữ thường và ký tự đặc biệt.</div>
                                <!--end::Hint-->
                                @error('form.password')
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="password" data-validator="notEmpty">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <!--end::Input group=-->
                            <!--end::Input group=-->
                            <div class="fv-row mb-8">
                                <!--begin::Repeat Password-->
                                <input wire:model.debounce="form.password_confirmation" placeholder="Nhập lại mật khẩu" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Repeat Password-->
                                @error('form.password_confirmation')
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="password" data-validator="notEmpty">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Accept-->
                            <div class="fv-row mb-8">
                                <label class="form-check form-check-inline">
                                    <input wire:model.debounce="form.accept" class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Đồng ý với những
                                        <a href="#" class="ms-1 link-primary">điều khoản</a></span>
                                </label>
                                @error('form.accept')
                                <div class="fv-plugins-message-container invalid-feedback">
                                    <div data-field="password" data-validator="notEmpty">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>
                            <!--end::Accept-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button wire:click.prevent="register" type="button" id="kt_sign_up_submit" class="btn btn-primary">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Đăng ký</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->
                            <!--begin::Sign up-->
                            <div class="text-gray-500 text-center fw-semibold fs-6">Đã có tài khoản?
                                <a href="{{ route('login') }}" class="link-primary fw-semibold">Đăng nhập</a></div>
                            <!--end::Sign up-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Footer-->
                    <div class="w-lg-500px d-flex flex-stack">
                        <!--begin::Languages-->
                        <div class="me-10">
                            <!--begin::Toggle-->
                            <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                                <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="assets/media/flags/united-states.svg" alt="" />
                                <span data-kt-element="current-lang-name" class="me-1">English</span>
                                <i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>
                            </button>
                            <!--end::Toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
												</span>
                                        <span data-kt-element="lang-name">English</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
												</span>
                                        <span data-kt-element="lang-name">Spanish</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
												</span>
                                        <span data-kt-element="lang-name">German</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
												</span>
                                        <span data-kt-element="lang-name">Japanese</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
												<span class="symbol symbol-20px me-4">
													<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/france.svg" alt="" />
												</span>
                                        <span data-kt-element="lang-name">French</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Languages-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="#" target="_blank">Terms</a>
                            <a href="#" target="_blank">Plans</a>
                            <a href="#" target="_blank">Contact Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-up-->
</div>
@push('js')
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endpush
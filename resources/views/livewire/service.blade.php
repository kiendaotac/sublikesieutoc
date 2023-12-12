@push('css')
{{--    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />--}}
@endpush
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <!--begin::Toolbar wrapper-->
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">{{ $service->name }}</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">@lang('Home')</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">@lang('Dashboard')</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">{{ $service->parent->name }}</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Form-->
            <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo39/dist/apps/ecommerce/sales/listing.html">
                <!--begin::Aside column-->
                <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
                    <!--begin::Order details-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{ __('Chi tiết dịch vụ') }}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-10">
                                <div class="fv-row">
                                    <label class="form-label">{!! $service->description !!}</label>
                                </div>
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Order details-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                    <!--begin::Order details-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Chi tiết dịch vụ</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="col-12">
                                <!--begin::List Widget 3-->
                                <div class="card card-xl-stretch mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0">
                                        <h3 class="card-title fw-bold text-dark">Chọn chi tiết dịch vụ</h3>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2">
                                        @foreach($service->products as $product)
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-2 border-bottom-1">
                                                <!--begin::Bullet-->
{{--                                                <span class="bullet bullet-vertical h-40px bg-success"></span>--}}
                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-custom form-check-solid mx-5">
                                                    <input id="product_{{ $product->id }}" wire:model.live="orderForm.product_id" class="form-check-input" type="radio" value="{{ $product->id }}" />
                                                </div>
                                                <!--end::Checkbox-->
                                                <!--begin::Description-->
                                                <label for="product_{{ $product->id }}" class="mx-2 text-gray-800 text-hover-primary fw-bold fs-8 cursor-pointer">{{ $product->name }}</label>
                                                <span class="mx-2 text-muted fw-semibold d-block fs-8">{{ $product->description }}</span>
                                                <span class="mx-2 badge badge-light-success fs-8 fw-bold">{{ \Illuminate\Support\Number::currency($product->price, 'VND', 'vi') }}</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end:Item-->
                                        @endforeach
                                        @if($selectedProduct->note ?? '')
                                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-3 p-2 mt-9">
                                                <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <div class="fw-semibold">
                                                        <div class="fs-6 text-gray-700">{{ $selectedProduct->note ?? '' }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @error('orderForm.product')
                                            <div class="form-text text-danger">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end:List Widget 3-->
                            </div>
                            <!--begin::Billing address-->
                            <div class="d-flex flex-column gap-5 gap-md-7">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5">
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label for="target_identify" class="required form-label">Link bài viết</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input id="target_identify" wire:model.debounce="orderForm.targetIdentify" class="form-control" placeholder="Link bài viết" />
                                        <!--end::Input-->
                                        @error('orderForm.targetIdentify')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5">
                                    <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                        <label for="original" class="required form-label">Số lượng ban đầu</label>
                                        <input id="original" wire:model.debounce="orderForm.original" class="form-control" placeholder="Số lượng ban đầu" type="number" />
                                        @error('orderForm.original')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="fv-row flex-row-fluid fv-plugins-icon-container">
                                        <label for="target" class="required form-label">Số lượng tăng thêm</label>
                                        <input id="target" wire:model.live="orderForm.target" class="form-control" placeholder="Số lượng tăng thêm" type="number" />
                                        @error('orderForm.target')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <label for="note" class="fs-6 fw-semibold form-label mt-3">
                                        <span>Ghi chú</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Thêm ghi chú của bạn." data-bs-original-title="Thêm ghi chú của bạn." data-kt-initialized="1">
                                            <i class="ki-outline ki-information fs-7"></i>
                                        </span>
                                    </label>
                                    <textarea id="note" wire:model.debounce="orderForm.note" class="form-control" name="notes" style="height: 200px"></textarea>
                                    @error('orderForm.note')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="fw-bold fs-4">Tổng tiền = (số lượng) x (giá):
                                    <span id="kt_ecommerce_edit_order_total_price">{{ \Illuminate\Support\Number::currency((intval($productPrice) * intval($orderForm->target)) ?? 0, 'VND', 'vi') }}</span>
                                </div>
                                <div class="form-check form-check-custom form-check-solid">
                                    <input wire:model.debounce="orderForm.term" class="form-check-input cursor-pointer" id="term" type="checkbox" />
                                    <label class="form-check-label cursor-pointer"  for="term">Tôi đã kiểm tra kỹ thông tin trước khi đặt hàng</label>
                                </div>
                                @error('orderForm.term')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('orderForm.error')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!--end::Billing address-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order details-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <button wire:click.prevent="store" type="button" class="btn btn-primary">
                            <span wire:loading class="indicator-progress">
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                Đang
                            </span>
                            <span class="indicator-label">Thanh toán</span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>

@push('js')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/ecommerce/sales/save-order.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endpush

@push('css')
    <style>
        .form-check .form-check-input:not(:checked) {
            background-color: var(--bs-gray-400)!important;
        }
    </style>
@endpush
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
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">Trang chủ</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Trang chủ</a>
                        </li>
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
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="ki-duotone ki-tag fs-2hx text-success">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($user->balance, 0, ',', '.') }} đ</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-400">Số dư</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
               <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="fas fa-money-check-dollar fs-2hx text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($user->balanceHistories->where('type', 'DEPOSIT')->sum('amount'), 0, ',', '.') }} đ</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-4 text-gray-400">Tổng số đã nạp</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
               <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="fas fa-money-check fs-2hx text-danger">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($user->balanceHistories->where('type', 'PURCHASE')->sum('amount'), 0, ',', '.') }} đ</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-400">Tổng số đã thanh toán</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
               <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="ki-duotone ki-handcart fs-2x fs-2hx text-warning">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($user->orders->count(), 0, ',', '.') }}</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-400">Số đơn hàng</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12 mb-5 mb-xl-10">
                    <!--begin::Table Widget 4-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Danh sách orders</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">{{ $user->orders->count() }} {{ \Illuminate\Support\Str::plural('order', $user->orders->count()) }}</span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-2">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-100px">Order ID</th>
                                    <th class="min-w-100px">Dịch vụ</th>
                                    <th class="min-w-125px">Số lượng</th>
                                    <th class="min-w-100px">Giá</th>
                                    <th class="min-w-100px">Tổng tiền</th>
                                    <th class="min-w-100px">Ghi chú</th>
                                    <th class="min-w-50px">Ngày tạo</th>
                                    <th class="min-w-50px">Trạng thái</th>
                                    <th class="text-end"></th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                @foreach($user->orders ?? [] as $order)
                                    <tr>
                                        <td><span class="text-gray-800 fw-bolder">#{{ $order->id }}</span></td>
                                        <td><a href="{{ route('service', $order->service->slug) }}" class="text-gray-600 text-hover-primary">{{ $order->service->name ?? '' }}</a></td>
                                        <td>{{ number_format($order->target ?? 0) }}</td>
                                        <td><span class="text-gray-800 fw-bolder">{{ number_format($order->price ?? 0, 0, ',', '.') }} đ</span></td>
                                        <td><span class="text-gray-800 fw-bolder">{{ number_format($order->amount ?? 0, 0, ',', '.') }} đ</span></td>
                                        <td><span>{{ $order->note }}</span></td>
                                        <td><span>{{ $order->created_at->format('d/m/Y H:i:s') }}</span></td>
                                        <td>
                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">{{ $order->status }}</span>
                                        </td>
                                        <td>
                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                                <button class="btn btn-icon btn-sm h-25px w-25px btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                    <i class="ki-outline ki-dots-square fs-1"></i>
                                                </button>
                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Action-->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
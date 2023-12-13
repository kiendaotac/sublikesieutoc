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
                        <div class="card-body pt-2">
                            <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                <thead>
                                <tr class="fw-bold text-muted">
                                    <th>Order ID</th>
                                    <th>Dịch vụ</th>
                                    <th>Link bài</th>
                                    <th>Số lượng</th>
                                    <th>SL ban đầu</th>
                                    <th>SL hoàn thành</th>
                                    <th>% Hoàn thành</th>
                                    <th>Giá</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày hoàn thành</th>
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold text-gray-600">
                                @foreach($user->orders ?? [] as $order)
                                    <tr>
                                        <td>
                                            <span class="text-dark fw-bold text-hover-primary fs-6">{{ $order->id }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $order->service->name ?? '' }}</a>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">Sản phẩm: {{ $order->product->name ?? '' }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ $order->target_identify }}" class="text-primary fw-bold text-hover-primary d-block mb-1 fs-6">Link bài</a>
                                        </td>
                                        <td>{{ \Illuminate\Support\Number::format(intval($order->target), locale: 'vi') }}</td>
                                        <td>{{ \Illuminate\Support\Number::format(intval($order->original), locale: 'vi') }}</td>
                                        <td>{{ \Illuminate\Support\Number::format(intval($order->done), locale: 'vi') }}</td>
                                        <td>{{ \Illuminate\Support\Number::percentage(intval($order->done)/intval($order->target) * 100, locale: 'vi') }}</td>
                                        <td>{{ \Illuminate\Support\Number::format(floatval($order->product->price ?? 0)) }} đ</td>
                                        <td>{{ \Illuminate\Support\Number::format(floatval($order->product->price ?? 0) * intval($order->target)) }} đ</td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $order->created_at->format('d/m/Y H:i:s') }}</a>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $order->created_at->diffForHumans() }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $order->finished_at?->format('d/m/Y H:i:s') }}</a>
                                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $order->finished_at?->diffForHumans() }}</span>
                                        </td>
                                        <td>
                                            <span class="badge {{ $order->status->color() }}">{{ $order->status->name() }}</span>
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
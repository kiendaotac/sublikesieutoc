<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Lịch sử mua hàng</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ $orders->count() }} bản ghi</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">
                    <th class="min-w-100px">Order ID</th>
                    <th class="min-w-100px">Dịch vụ</th>
                    <th class="min-w-100px">Link bài</th>
                    <th class="min-w-125px">Số lượng</th>
                    <th class="min-w-125px">SL ban đầu</th>
                    <th class="min-w-125px">SL hoàn thành</th>
                    <th class="min-w-125px">% Hoàn thành</th>
                    <th class="min-w-100px">Giá</th>
                    <th class="min-w-100px">Tổng tiền</th>
                    <th class="min-w-50px">Ngày tạo</th>
                    <th class="min-w-50px">Ngày hoàn thành</th>
                    <th class="min-w-50px">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders ?? [] as $order)
                    <tr>
                        <td>
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $order->id }}</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $order->service->name ?? '' }}</a>
                            <span class="text-muted fw-semibold text-muted d-block fs-7">Sản phẩm: {{ $order->product->name ?? '' }}</span>
                        </td>
                        <td>
                            <a href="{{ $order->target_identify }}" class="text-primary fw-bold text-hover-primary d-block mb-1 fs-6">Link bài</a>
                        </td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::format(intval($order->target), locale: 'vi') }}</td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::format(intval($order->original), locale: 'vi') }}</td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::format(intval($order->done), locale: 'vi') }}</td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::percentage(intval($order->done)/intval($order->target) * 100, locale: 'vi') }}</td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::format(floatval($order->product->price ?? 0)) }} đ</td>
                        <td class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::format(floatval($order->product->price ?? 0) * intval($order->target)) }} đ</td>
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
            </table>
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
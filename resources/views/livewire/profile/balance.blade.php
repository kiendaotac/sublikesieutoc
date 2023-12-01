<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Lịch sử nạp tiền</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ $deposits->count() }} bản ghi</span>
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
                    <th class="min-w-100px">STT</th>
                    <th class="min-w-100px">Số dư cũ</th>
                    <th class="min-w-100px">Số tiền nạp</th>
                    <th class="min-w-100px">Số dư mới</th>
                    <th class="min-w-100px">Nội dung</th>
                    <th class="min-w-50px">Ngày tạo</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @foreach($deposits ?? [] as $deposit)
                    <tr>
                        <td>
                            <span class="text-dark fw-bold text-hover-primary fs-6">{{ $loop->iteration }}</span>
                        </td>
                        <td>
                            <span class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::currency($deposit->old_balance, 'VND', 'vi') }}</span>
                        </td>
                        <td>
                            <span class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::currency($deposit->amount, 'VND', 'vi') }}</span>
                        </td>
                        <td>
                            <span class="text-dark fw-bold text-hover-primary fs-6">{{ \Illuminate\Support\Number::currency($deposit->balance, 'VND', 'vi') }}</span>
                        </td>
                        <td>
                            <span class="text-muted fw-semibold text-muted d-block fs-7 text-wrap">{!! $deposit->reason !!}</span>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $deposit->created_at->format('d/m/Y H:i:s') }}</a>
                            <span class="text-muted fw-semibold text-muted d-block fs-7">{{ $deposit->created_at->diffForHumans() }}</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            {{ $deposits->links() }}
            {{--<div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex flex-wrap py-2 mr-3">
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></a>

                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>

                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
                </div>
                <div class="d-flex align-items-center py-3">
                    <div class="d-flex align-items-center">
                        <div class="mr-2 text-muted">Loading...</div>
                        <div class="spinner spinner-primary mr-10"></div>
                    </div>

                    <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="text-muted">Displaying 10 of 230 records</span>
                </div>
            </div>--}}
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Wrapper-->
    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 my-lg-2" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper" data-kt-scroll-offset="5px">
        <!--begin::Sidebar menu-->
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-6 mb-5">
            @foreach($services ?? [] as $service)
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            {!! $service->icon !!}
                        </span>
                        <span class="menu-title">{{ $service->name }}</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion show">
                        @foreach($service->children as $child)
                            <!--begin:Menu item-->
                            <div class="menu-item {{ request()->routeIs('service', $child->slug) ? 'active' : '' }}">
                                <!--begin:Menu link-->
                                <a href="{{ route('service', $child->slug) }}" class="menu-link">
                                    <span class="menu-bullet">
                                        {!! $child->icon !!}
                                    </span>
                                    <span class="menu-title">{{ $child->name }}</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        @endforeach
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
            @endforeach
        </div>
        <!--end::Sidebar menu-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Sidebar-->
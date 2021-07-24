<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu List</li>
                <li>
                    <a href="<?= base_url() ?>" class="<?= base_url() === current_url() ? "mm-active" : "" ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        My Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url("kecamatan") ?>" class="<?= base_url("kecamatan") === current_url() ? "mm-active" : "" ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Kecamatan
                    </a>
                </li>
                <li>
                    <a href="<?= route_to("circle_maker") ?>" class="<?= base_url("leaflet/circle-maker") === current_url() ? "mm-active" : "" ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Leaflet Maker & Circle
                    </a>
                </li>
                <li>
                    <a href="<?= route_to("polyline") ?>" 
                    class="<?= base_url("leaflet/polyline") === current_url() ? "mm-active" : "" ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Leaflet Polyline 
                    </a>
                </li>
                <li>
                    <a href="<?= route_to("routing") ?>" 
                    class="<?= base_url("leaflet/route") === current_url() ? "mm-active" : "" ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Leaflet Routing / Rute
                    </a>
                </li>
                <li>
                    <a href="<?= route_to("polygon") ?>" 
                    class="<?= base_url("leaflet/polygon") === current_url() ? "mm-active" : "" ?>">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Leaflet Poligon
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Get Koordinat 
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= route_to("drag_marker") ?>" 
                            class="<?= base_url("leaflet/get-coordinat/drag-marker") === current_url() ? "mm-active" : "" ?>">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Leaflet Koordinat Peta
                            </a>
                        </li>
                        <li>
                            <a href="<?= route_to("marker_tps") ?>" 
                            class="<?= base_url("leaflet/get-coordinat/marker-tps") === current_url() ? "mm-active" : "" ?>">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Marker TPS
                            </a>
                        </li>
                        <li>
                            <a href="<?= route_to("circle_tps") ?>" 
                            class="<?= base_url("leaflet/get-coordinat/circle-tps") === current_url() ? "mm-active" : "" ?>">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Circle TPS
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
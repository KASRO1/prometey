@section("aside")
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <!-- Logo -->

                <!-- End Logo -->


                <!-- End Navbar Vertical Toggle -->

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">


                        <span class="dropdown-header mt-4">Страницы</span>
                        <small class="bi-three-dots nav-subtitle-replacer"></small>

                        <!-- Collapse -->
                        <div class="navbar-nav nav-compact">

                        </div>
                        <div id="navbarVerticalMenuPagesMenu">
                            <!-- Collapse -->
                            <div class="nav-item">
                                <a class="nav-link  "  href="{{route("lk")}}" role="button">
                                    <i class="bi-people nav-icon"></i>
                                    <span class="nav-link-title">Основное</span>
                                </a>


                            </div>

                            <div class="nav-item">
                                <a class="nav-link  " href="{{route("lk.settings")}}" role="button">
                                    <i class="bi-gear nav-icon"></i>
                                    <span class="nav-link-title">Настройки</span>
                                </a>


                            </div>


                        </div>
                        <!-- End Content -->


                    </div>
                </div>
    </aside>
@endsection

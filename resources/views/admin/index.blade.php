@include('admin.elements.aside')
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Главная</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/admin/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/admin/assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
    <link rel="stylesheet" href="/admin/assets/vendor/flatpickr/dist/flatpickr.min.css">
    <script src="/admin/assets/vendor/flatpickr/dist/flatpickr.js"></script>

    <!-- CSS Front Template -->

    <link rel="preload" href="/admin/assets/css/theme.min.css" data-hs-appearance="default" as="style">
    <link rel="preload" href="/admin/assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

    <style data-hs-appearance-onload-styles>
        * {
            transition: unset !important;
        }

        body {
            opacity: 0;
        }
    </style>

    <script>
        window.hs_config = {
            "autopath": "@@autopath",
            "deleteLine": "hs-builder:delete",
            "deleteLine:build": "hs-builder:build-delete",
            "deleteLine:dist": "hs-builder:dist-delete",
            "previewMode": false,
            "startPath": "/index.html",
            "vars": {
                "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
                "version": "?v=1.0"
            },
            "layoutBuilder": {
                "extend": {"switcherSupport": true},
                "header": {"layoutMode": "default", "containerMode": "container-fluid"},
                "sidebarLayout": "default"
            },
            "themeAppearance": {
                "layoutSkin": "default",
                "sidebarSkin": "default",
                "styles": {
                    "colors": {
                        "primary": "#377dff",
                        "transparent": "transparent",
                        "white": "#fff",
                        "dark": "132144",
                        "gray": {"100": "#f9fafc", "900": "#1e2022"}
                    }, "font": "Inter"
                }
            },
            "languageDirection": {"lang": "en"},
            "skipFilesFromBundle": {
                "dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "assets/js/demo.js"],
                "build": ["assets/css/theme.css", "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js", "assets/js/demo.js", "assets/css/theme-dark.css", "assets/css/docs.css", "assets/vendor/icon-set/style.css", "assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js", "assets/js/demo.js"]
            },
            "minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
            "copyDependencies": {
                "dist": {"*assets/js/theme-custom.js": ""},
                "build": {"*assets/js/theme-custom.js": "", "node_modules/bootstrap-icons/font/*fonts/**": "assets/css"}
            },
            "buildFolder": "",
            "replacePathsToCDN": {},
            "directoryNames": {"src": "./src", "dist": "./dist", "build": "./build"},
            "fileNames": {
                "dist": {"js": "theme.min.js", "css": "theme.min.css"},
                "build": {
                    "css": "theme.min.css",
                    "js": "theme.min.js",
                    "vendorCSS": "vendor.min.css",
                    "vendorJS": "vendor.min.js"
                }
            },
            "fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
        }
        window.hs_config.gulpRGBA = (p1) => {
            const options = p1.split(',')
            const hex = options[0].toString()
            const transparent = options[1].toString()

            var c;
            if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                c = hex.substring(1).split('');
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = '0x' + c.join('');
                return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
            }
            throw new Error('Bad Hex');
        }
        window.hs_config.gulpDarken = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = -parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
        window.hs_config.gulpLighten = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
    </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

<script src="/admin/assets/js/hs.theme-appearance.js"></script>

<script src="/admin/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

<!-- ========== HEADER ========== -->

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->
@yield("aside")
<!-- End Navbar Vertical -->

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Главная</h1>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal"
                       data-bs-target="#access_modal">
                        <i class="bi-person-plus-fill me-1"></i> Выдать доступ
                    </a>
                    <a class="btn btn-danger" href="javascript:;" data-bs-toggle="modal"
                       data-bs-target="#ban_modal">
                        <i class="bi-person-dash-fill me-1"></i> Заблокировать
                    </a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->


        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-header-title">Все пользователи</h4>

                            <!-- Datatable Info -->

                            <!-- End Datatable Info -->
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                        <!-- Filter -->
                        <div class="row align-items-sm-center">

                            <div class="col-md">
                                <form>
                                    <!-- Search -->
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend input-group-text">
                                            <i class="bi-search"></i>
                                        </div>
                                        <input id="datatableSearch" type="search" class="form-control"
                                               placeholder="Поиск пользователя" aria-label="Search users">
                                    </div>
                                    <!-- End Search -->
                                </form>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Filter -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                       class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                       data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 1, 4],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="table-column-pe-0">

                        </th>
                        <th class="table-column-ps-0">Email</th>
                        <th>Статус</th>
                        <th>Telegram</th>
                        <th>Полное имя</th>
                        <th>Дата создания аккаунта</th>
                        <th>Блокировка до</th>
                        <th>Выдан доступ до</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="table-column-pe-0">

                            </td>
                            <td class="table-column-ps-0">
                                <a class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-soft-primary avatar-circle">
                                            <span class="avatar-initials">{{$user['email'][0]}}</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-inherit mb-0">{{$user['email']}}</h5>
                                    </div>
                                </a>
                            </td>
                            <td>
                                @if($user['isBan'] == 1)
                                    <span class="badge bg-soft-danger">Заблокирован</span>
                                @elseif($user['access'] == 1)
                                    <span class="badge bg-soft-success">Доступ открыт</span>
                                @elseif($user['ban'] !== 1)
                                    <span class="badge bg-soft-primary">В ожидании</span>

                                @endif
                            </td>
                            <td>{{$user['tg_username'] ? $user['tg_username'] : "Отсутвует"}}</td>
                            <td>{{$user['full_name'] ? $user['full_name'] : "Отсутвует"}}</td>
                            <td>{{$user['created_at']}}</td>
                            <td>{{$user['ban_expiried'] ? $user['ban_expiried'] : "Отсутствует"}}</td>
                            <td>{{$user['access_expiried'] ? $user['access_expiried'] : "Отсутствует"}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

        </div>
        <!-- End Card -->
        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-header-title">Постбеки</h4>

                            <!-- Datatable Info -->

                            <!-- End Datatable Info -->
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                        <!-- Filter -->

                        <!-- End Filter -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable1"
                       class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                       data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 1, 4],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty1"
                   },
                   "search": "#datatableSearch1",
                   "entries": "#datatableEntries1",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination1"
                 }'>
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="table-column-pe-0">

                        </th>
                        <th>Reg</th>
                        <th>Conf</th>
                        <th>Ftd</th>
                        <th>Dep</th>
                        <th>Click ID</th>
                        <th>Site ID</th>
                        <th>Trader ID</th>
                        <th>Sumdep</th>
                        <th>A</th>
                        <th>AC</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($PKT as $notify)
                        <tr>
                            <td class="table-column-pe-0">

                            </td>
                            <td class="table-column-ps-0">
                                {{$notify['reg']}}
                            </td>
                            <td>
                                {{$notify['conf']}}
                            </td>
                            <td>
                                {{$notify['ftd']}}
                            </td>
                            <td>
                                {{$notify['dep']}}
                            </td>
                            <td>
                                {{$notify['click_id']}}
                            </td>
                            <td>
                                {{$notify['site_id']}}
                            </td>
                            <td>
                                {{$notify['trader_id']}}
                            </td>
                            <td>
                                {{$notify['sumdep']}}
                            </td>
                            <td>
                                {{$notify['a']}}
                            </td>
                            <td>
                                {{$notify['ac']}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->

<!-- Keyboard Shortcuts -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts"
     aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
        <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
                <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="fw-semibold">Bold</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">b</kbd>
                    </div>
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <em>italic</em>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">i</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <u>Underline</u>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">u</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <s>Strikethrough</s>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">s</kbd>
                        <!-- End Col -->
                    </div>
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="small">Small text</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">s</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <mark>Highlight</mark>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">e</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
                <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Mention person <a href="#">(@Brian)</a></span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">@</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">+</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <a href="#">#hashtag</a>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">#hashtag</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Date</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">/date</kbd>
                        <kbd class="d-inline-block mb-1">Space</kbd>
                        <kbd class="d-inline-block mb-1">/datetime</kbd>
                        <kbd class="d-inline-block mb-1">/datetime</kbd>
                        <kbd class="d-inline-block mb-1">Space</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Time</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">/time</kbd>
                        <kbd class="d-inline-block mb-1">Space</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Note box</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">/note</kbd>
                        <kbd class="d-inline-block mb-1">Enter</kbd>
                        <kbd class="d-inline-block mb-1">/note red</kbd>
                        <kbd class="d-inline-block mb-1">/note red</kbd>
                        <kbd class="d-inline-block mb-1">Enter</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
                <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Find and replace</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">r</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Find next</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">n</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Find previous</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">p</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Indent</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Tab</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Un-indent</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Tab</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Move line up</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Move line down</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Add a comment</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">m</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Undo</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">z</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Redo</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">y</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>

        <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
                <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Create new doc</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">n</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Present</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">p</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Share</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">s</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Search docs</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">o</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span>Keyboard shortcuts</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-7 text-end">
                        <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                            class="d-inline-block mb-1">/</kbd>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>

        </div>
    </div>
</div>
<!-- End Keyboard Shortcuts -->

<!-- Activity -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream"
     aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
        <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Step -->
        <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar" src="/admin/assets/img/160x160/img9.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="mb-1">Iana Robinson</h5>

                        <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

                        <ul class="list-group list-group-sm">
                            <!-- List Item -->
                            <li class="list-group-item list-group-item-light">
                                <div class="row gx-1">
                                    <div class="col-6">
                                        <!-- Media -->
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs"
                                                     src="/admin/assets/svg/brands/excel-icon.svg"
                                                     alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <span class="d-block fs-6 text-dark text-truncate"
                                                      title="weekly-reports.xls">weekly-reports.xls</span>
                                                <span class="d-block small text-muted">12kb</span>
                                            </div>
                                        </div>
                                        <!-- End Media -->
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-6">
                                        <!-- Media -->
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs"
                                                     src="/admin/assets/svg/brands/word-icon.svg"
                                                     alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <span class="d-block fs-6 text-dark text-truncate"
                                                      title="weekly-reports.xls">weekly-reports.xls</span>
                                                <span class="d-block small text-muted">4kb</span>
                                            </div>
                                        </div>
                                        <!-- End Media -->
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->
                            </li>
                            <!-- End List Item -->
                        </ul>

                        <span class="small text-muted text-uppercase">Now</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-dark">B</span>

                    <div class="step-content">
                        <h5 class="mb-1">Bob Dean</h5>

                        <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span
                                class="badge bg-soft-success text-success rounded-pill"><span
                                    class="legend-indicator bg-success"></span>"Completed"</span></p>

                        <span class="small text-muted text-uppercase">Today</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar-img" src="/admin/assets/img/160x160/img3.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="h5 mb-1">Crane</h5>

                        <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

                        <ul class="list-group list-group-sm">
                            <li class="list-group-item list-group-item-light">
                                <div class="row gx-1">
                                    <div class="col">
                                        <img class="img-fluid rounded" src="/admin/assets/svg/components/card-1.svg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid rounded" src="/admin/assets/svg/components/card-2.svg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid rounded" src="/admin/assets/svg/components/card-3.svg"
                                             alt="Image Description">
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="text-center">
                                            <a href="#">+2</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <span class="small text-muted text-uppercase">May 12</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-info">D</span>

                    <div class="step-content">
                        <h5 class="mb-1">David Lidell</h5>

                        <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

                        <span class="small text-muted text-uppercase">May 15</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar-img" src="/admin/assets/img/160x160/img7.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="mb-1">Rachel King</h5>

                        <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span
                                class="badge bg-soft-success text-success rounded-pill"><span
                                    class="legend-indicator bg-success"></span>"Completed"</span></p>

                        <span class="small text-muted text-uppercase">Apr 29</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
                    <div class="step-avatar">
                        <img class="step-avatar-img" src="/admin/assets/img/160x160/img5.jpg" alt="Image Description">
                    </div>

                    <div class="step-content">
                        <h5 class="mb-1">Finch Hoot</h5>

                        <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i>
                            badge</p>

                        <span class="small text-muted text-uppercase">Apr 06</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

                    <div class="step-content">
                        <h5 class="mb-1">Project status updated</h5>

                        <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i
                                    class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span
                                class="badge bg-soft-primary text-primary rounded-pill"><span
                                    class="legend-indicator bg-primary"></span>"In progress"</span></p>

                        <span class="small text-muted text-uppercase">Feb 10</span>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->
        </ul>
        <!-- End Step -->

        <div class="d-grid">
            <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
        </div>
    </div>
</div>
<!-- End Activity -->
<div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true" style="top: 20px; right: 20px; z-index: 1000;">
    <div class="toast-header">
        <div class="d-flex align-items-center flex-grow-1">
            <div class="flex-shrink-0">
                <img class="avatar avatar-sm avatar-circle" src="/favicon.ico" alt="Image description">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="mb-0">PRO OPTION OLUS</h5>
                <small class="ms-auto">1 sec ago</small>
            </div>
            <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <div id="messageText" class="toast-body">

    </div>
</div>

<!-- Welcome Message Modal -->
<div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-close">
                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i class="bi-x-lg"></i>
                </button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body p-sm-5">
                <div class="text-center">
                    <div class="w-75 w-sm-50 mx-auto mb-4">
                        <img class="img-fluid" src="/admin/assets/svg/illustrations/oc-collaboration.svg"
                             alt="Image Description" data-hs-theme-appearance="default">
                        <img class="img-fluid" src="/admin/assets/svg/illustrations-light/oc-collaboration.svg"
                             alt="Image Description" data-hs-theme-appearance="dark">
                    </div>

                    <h4 class="h1">Welcome to Front</h4>

                    <p>We're happy to see you in our community.</p>
                </div>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="modal-footer d-block text-center py-sm-5">
                <small class="text-cap text-muted">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/gitlab-gray.svg"
                                 alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/fitbit-gray.svg"
                                 alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/flow-xo-gray.svg"
                                 alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/admin/assets/svg/brands/layar-gray.svg"
                                 alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>

<!-- End Welcome Message Modal -->

<!-- Create a new user Modal -->
<div class="modal fade" id="access_modal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="inviteUserModalLabel">Выдать доступ</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form id="access_form" class="modal-body">
                <!-- Form -->
                @csrf
                <div class="mb-4">
                    <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control" name="user_email" placeholder="Введите email пользователя">

                        <div class="input-group-append input-group-append-last-sm-down-none">
                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-end">
                                <input type="text" name="date_expiried" class="js-flatpickr form-control flatpickr-custom" placeholder="Выберите дату окончания подписки"
                                       data-hs-flatpickr-options='{
         "dateFormat": "d-m-Y"
       }'>
                            </div>
                            <!-- End Select -->

                            <button type="submit" class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Выдать доступ</button>
                        </div>
                    </div>

                </div>
                <!-- End Form -->

            </form>
            <!-- End Body -->

        </div>
    </div>
</div>
<div class="modal fade" id="ban_modal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="inviteUserModalLabel">Заблокировать пользователя</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form id="ban_form" class="modal-body">
                <!-- Form -->
                @csrf
                <div class="mb-4">
                    <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control" name="user_email" placeholder="Введите email пользователя">

                        <div class="input-group-append input-group-append-last-sm-down-none">
                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-end">
                                <input type="text" name="date_expiried" class="js-flatpickr form-control flatpickr-custom" placeholder="Выберите дату окончания подписки"
                                       data-hs-flatpickr-options='{
         "dateFormat": "d-m-Y"
       }'>
                            </div>
                            <!-- End Select -->

                            <button type="submit" class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Выдать доступ</button>
                        </div>
                    </div>

                </div>
                <!-- End Form -->

            </form>
            <!-- End Body -->

        </div>
    </div>
</div>
<!-- End Create a new user Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Global Compulsory  -->
<script src="/admin/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/admin/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/admin/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
<script src="/admin/assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

<script src="/admin/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="/admin/assets/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js"></script>
<script src="/admin/assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
<script src="/admin/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="/admin/assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="/admin/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
<script src="/admin/assets/vendor/clipboard/dist/clipboard.min.js"></script>
<script src="/admin/assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/admin/assets/vendor/datatables.net.extensions/select/select.min.js"></script>

<!-- JS Front -->
<script src="/admin/assets/js/theme.min.js"></script>
<script src="/admin/assets/js/hs.theme-appearance-charts.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
        select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
                checkAll: '#datatableCheckAll',
                counter: '#datatableCounter',
                counterInfo: '#datatableCounterInfo'
            }
        },
        language: {
            zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="/admin/assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="/admin/assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
        item.addEventListener('change', function (e) {
            const elVal = e.target.value,
                targetColumnIndex = e.target.getAttribute('data-target-column-index'),
                targetTable = e.target.getAttribute('data-target-table');

            HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
        })
    })

</script>

<!-- JS Plugins Init. -->
<script>
    (function () {
        localStorage.removeItem('hs_theme')

        window.onload = function () {


            // INITIALIZATION OF NAVBAR VERTICAL ASIDE
            // =======================================================
            new HSSideNav('.js-navbar-vertical-aside').init()

            HSCore.components.HSFlatpickr.init('.js-flatpickr')
            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            const HSFormSearchInstance = new HSFormSearch('.js-form-search')

            if (HSFormSearchInstance.collection.length) {
                HSFormSearchInstance.getItem(1).on('close', function (el) {
                    el.classList.remove('top-0')
                })

                document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
                    let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
                        $menu = document.querySelector(dataOptions.dropMenuElement)

                    $menu.classList.add('top-0')
                    $menu.style.left = 0
                })
            }


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF CHARTJS
            // =======================================================
            HSCore.components.HSChartJS.init('.js-chart')


            // INITIALIZATION OF CHARTJS
            // =======================================================
            HSCore.components.HSChartJS.init('#updatingBarChart')
            const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

            // Call when tab is clicked
            document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
                item.addEventListener('click', e => {
                    let keyDataset = e.currentTarget.getAttribute('data-datasets')

                    const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

                    if (keyDataset === 'lastWeek') {
                        updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
                        updatingBarChart.data.datasets = [
                            {
                                "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                                "backgroundColor": styles.data.datasets[0].backgroundColor,
                                "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                                "borderColor": styles.data.datasets[0].borderColor,
                                "maxBarThickness": 10
                            },
                            {
                                "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                                "backgroundColor": styles.data.datasets[1].backgroundColor,
                                "borderColor": styles.data.datasets[1].borderColor,
                                "maxBarThickness": 10
                            }
                        ];
                        updatingBarChart.update();
                    } else {
                        updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
                        updatingBarChart.data.datasets = [
                            {
                                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                                "backgroundColor": styles.data.datasets[0].backgroundColor,
                                "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                                "borderColor": styles.data.datasets[0].borderColor,
                                "maxBarThickness": 10
                            },
                            {
                                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                                "backgroundColor": styles.data.datasets[1].backgroundColor,
                                "borderColor": styles.data.datasets[1].borderColor,
                                "maxBarThickness": 10
                            }
                        ]
                        updatingBarChart.update();
                    }
                })
            })


            // INITIALIZATION OF CHARTJS
            // =======================================================
            HSCore.components.HSChartJS.init('.js-chart-datalabels', {
                plugins: [ChartDataLabels],
                options: {
                    plugins: {
                        datalabels: {
                            anchor: function (context) {
                                var value = context.dataset.data[context.dataIndex];
                                return value.r < 20 ? 'end' : 'center';
                            },
                            align: function (context) {
                                var value = context.dataset.data[context.dataIndex];
                                return value.r < 20 ? 'end' : 'center';
                            },
                            color: function (context) {
                                var value = context.dataset.data[context.dataIndex];
                                return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                            },
                            font: function (context) {
                                var value = context.dataset.data[context.dataIndex],
                                    fontSize = 25;

                                if (value.r > 50) {
                                    fontSize = 35;
                                }

                                if (value.r > 70) {
                                    fontSize = 55;
                                }

                                return {
                                    weight: 'lighter',
                                    size: fontSize
                                };
                            },
                            formatter: function (value) {
                                return value.r
                            },
                            offset: 2,
                            padding: 0
                        }
                    },
                }
            })

            // INITIALIZATION OF SELECT
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')


            // INITIALIZATION OF CLIPBOARD
            // =======================================================
            HSCore.components.HSClipboard.init('.js-clipboard')
        }
    })()
</script>

<!-- Style Switcher JS -->

<script>
    (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
            $variants.forEach($item => {
                if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                    $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                    return $item.classList.add('active')
                }

                $item.classList.remove('active')
            })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
            $item.addEventListener('click', function () {
                HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
            })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
            setActiveStyle()
        })
    })()
</script>


<script>
    const access_form = document.getElementById("access_form")
    access_form.addEventListener("submit", (e) => {
        e.preventDefault()
        const formData = new FormData(access_form)
        const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
        const messageText = document.getElementById('messageText');
        $.ajax({
            url: '{{route("admin.user.access")}}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                messageText.innerHTML = data.message
                liveToast.show()

            },
            error: function (data) {
                const errors = data.responseJSON.errors;
                messageText.innerHTML = errors.user_email[0]
                liveToast.show()

            }

        })

    })
    const ban_form = document.getElementById("ban_form")
    ban_form.addEventListener("submit", (e) => {
        e.preventDefault()
        const formData = new FormData(ban_form)
        const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
        const messageText = document.getElementById('messageText');
        $.ajax({
            url: '{{route("admin.user.ban")}}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                messageText.innerHTML = data.message
                liveToast.show()

            },
            error: function (data) {
                const errors = data.responseJSON.errors;
                messageText.innerHTML = errors.user_email[0]
                liveToast.show()

            }

        })

    })
</script>
<!-- End Style Switcher JS -->
</body>
</html>

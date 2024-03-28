@include('admin.elements.aside')
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Настройки</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">
    <script src="/admin/assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/admin/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/admin/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

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
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">


                    <h1 class="page-header-title">Настройки</h1>
                </div>
                <!-- End Col -->


                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">

            <div class="">
                <div class="d-grid gap-3 gap-lg-5">
                    <!-- Card -->

                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title h4">Основное</h2>
                        </div>

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form -->
                            <form action="{{route("admin.settings.save")}}" method="post">
                                <!-- Form -->
                                @csrf

                                <div class="row mb-4">
                                    <label for="title" class="col-sm-3 col-form-label form-label">Текст в заголовке(В
                                        табе браузера)</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="title" id="title" placeholder="Введите title"
                                               aria-label="Email" value="{{$settings['title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="header_nav_1" class="col-sm-3 col-form-label form-label">Текст в Header
                                        в навигации 1</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="header_nav_1" id="header_nav_1"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['header_nav_1']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="header_nav_1" class="col-sm-3 col-form-label form-label">Текст в Header
                                        в навигации 2</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="header_nav_2" id="header_nav_2"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['header_nav_2']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="header_nav_3" class="col-sm-3 col-form-label form-label">Текст в Header
                                        в навигации 3</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="header_nav_3" id="header_nav_3"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['header_nav_3']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_1_title" class="col-sm-3 col-form-label form-label">Блок 1,
                                        заголовок</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_1_title" id="block_1_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_1_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_1_title_marked" class="col-sm-3 col-form-label form-label">Блок 1,
                                        заголовок(выделенный текст)</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_1_title_marked"
                                               id="block_1_title_marked" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_1_title_marked']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_1_description" class="col-sm-3 col-form-label form-label">Блок 1,
                                        описание</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_1_description" id="block_1_description"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_1_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_1_button_text" class="col-sm-3 col-form-label form-label">Блок 1,
                                        текст в кнопке</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_1_button_text" id="block_1_button_text"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_1_button_text']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_1_button_link" class="col-sm-3 col-form-label form-label">Блок 1,
                                        ссылка в кнопке</label>

                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_1_button_link" id="block_1_button_link"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_1_button_link']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_1_button_link" class="col-sm-3 col-form-label form-label">Блок 1,
                                        ссылка в кнопке</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_1_button_link" id="block_1_button_link"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_1_button_link']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_2_nav_1" class="col-sm-3 col-form-label form-label">Блок 2,
                                        элемент 1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_2_nav_1" id="block_1_button_link"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_2_nav_1']}}">
                                    </div>
                                </div>
{{--                                <div class="row mb-4">--}}
{{--                                    <label for="block_2_nav_icon_1" class="col-sm-3 col-form-label form-label">Блок 2,--}}
{{--                                        элемент 1 иконка</label>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <input type="file" class="form-control" name="block_2_nav_icon_1"--}}
{{--                                               id="block_2_nav_icon_1" placeholder="Введите текст" aria-label="Email"--}}
{{--                                               value="{{$settings['block_2_nav_4']}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row mb-4">
                                    <label for="block_2_nav_2" class="col-sm-3 col-form-label form-label">Блок 2,
                                        элемент 2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_2_nav_2" id="block_2_nav_2"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_2_nav_2']}}">
                                    </div>
                                </div>
{{--                                <div class="row mb-4">--}}
{{--                                    <label for="block_2_nav_icon_2" class="col-sm-3 col-form-label form-label">Блок 2,--}}
{{--                                        элемент 2 иконка</label>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <input type="file" class="form-control" name="block_2_nav_icon_2"--}}
{{--                                               id="block_2_nav_icon_2" placeholder="Введите текст" aria-label="Email"--}}
{{--                                               value="{{$settings['block_2_nav_4']}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row mb-4">
                                    <label for="block_2_nav_3" class="col-sm-3 col-form-label form-label">Блок 2,
                                        элемент 3</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_2_nav_3" id="block_2_nav_3"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_2_nav_3']}}">
                                    </div>
                                </div>
{{--                                <div class="row mb-4">--}}
{{--                                    <label for="block_2_nav_icon_3" class="col-sm-3 col-form-label form-label">Блок 2,--}}
{{--                                        элемент 3 иконка</label>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <input type="file" class="form-control" name="block_2_nav_icon_3"--}}
{{--                                               id="block_2_nav_icon_3" placeholder="Введите текст" aria-label="Email"--}}
{{--                                               value="{{$settings['block_2_nav_4']}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row mb-4">
                                    <label for="block_2_nav_4" class="col-sm-3 col-form-label form-label">Блок 2,
                                        элемент 4</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_2_nav_4" id="block_2_nav_4"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_2_nav_4']}}">
                                    </div>
                                </div>
    {{--                                <div class="row mb-4">--}}
    {{--                                    <label for="block_2_nav_icon_4" class="col-sm-3 col-form-label form-label">Блок 2,--}}
    {{--                                        элемент 4 иконка</label>--}}
    {{--                                    <div class="col-sm-9">--}}
    {{--                                        <input type="file" class="form-control" name="block_2_nav_icon_4"--}}
    {{--                                               id="block_2_nav_icon_4" placeholder="Введите текст" aria-label="Email"--}}
    {{--                                               value="{{$settings['block_2_nav_4']}}">--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
                                <div class="row mb-4">
                                    <label for="block_3_title" class="col-sm-3 col-form-label form-label">Блок 3,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_title" id="block_3_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_3_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_title_marked" class="col-sm-3 col-form-label form-label">Блок 3,
                                        заголовок выделенный текст</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_title_marked"
                                               id="block_3_title_marked" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_3_title_marked']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_decription" class="col-sm-3 col-form-label form-label">Блок 3,
                                        описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_decription" id="block_3_decription"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_3_decription']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_1" class="col-sm-3 col-form-label form-label">Блок
                                        3, процент статистики 1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_1"
                                               id="block_3_static_procent_1" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_3_static_procent_1']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_text_1"
                                           class="col-sm-3 col-form-label form-label">Блок 3, текст под статистистикой
                                        1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_text_1"
                                               id="block_3_static_procent_text_1" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_3_static_procent_text_1']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_2" class="col-sm-3 col-form-label form-label">Блок
                                        3, процент статистики 2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_2"
                                               id="block_3_static_procent_2" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_3_static_procent_2']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_text_2"
                                           class="col-sm-3 col-form-label form-label">Блок 3, текст под статистикой
                                        2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_text_2"
                                               id="block_3_static_procent_text_2" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_3_static_procent_text_2']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_3" class="col-sm-3 col-form-label form-label">Блок
                                        3, процент статистики 3</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_3"
                                               id="block_3_static_procent_3" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_3_static_procent_3']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_text_3"
                                           class="col-sm-3 col-form-label form-label">Блок 3, текст под статистикой
                                        3</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_text_3"
                                               id="block_3_static_procent_text_3" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_3_static_procent_text_3']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_4" class="col-sm-3 col-form-label form-label">Блок
                                        3, процент статистики 4</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_4"
                                               id="block_3_static_procent_4" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_3_static_procent_4']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_static_procent_text_4"
                                           class="col-sm-3 col-form-label form-label">Блок 3, текст под статистикой
                                        4</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_static_procent_text_4"
                                               id="block_3_static_procent_text_4" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_3_static_procent_text_4']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_3_text_under_video" class="col-sm-3 col-form-label form-label">Блок
                                        3, текст под видео</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_3_text_under_video"
                                               id="block_3_text_under_video" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_3_text_under_video']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_4_title" class="col-sm-3 col-form-label form-label">Блок 4,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_4_title" id="block_4_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_4_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_title_marked" class="col-sm-3 col-form-label form-label">Блок 5,
                                        выделенный заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_title_marked"
                                               id="block_5_title_marked" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_title_marked']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_title" class="col-sm-3 col-form-label form-label">Блок 5,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_title" id="block_5_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_description" class="col-sm-3 col-form-label form-label">Блок 5,
                                        описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_description" id="block_5_description"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_button_text" class="col-sm-3 col-form-label form-label">Блок 5,
                                        текст в кнопке</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_button_text" id="block_5_button_text"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_button_text']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_button_link" class="col-sm-3 col-form-label form-label">Блок 5,
                                        ссылка в кнопке</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_button_link" id="block_5_button_link"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_button_link']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_step1_title" class="col-sm-3 col-form-label form-label">Блок 5,
                                        шаг 1 заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_step1_title" id="block_5_step1_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_step1_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_step1_description" class="col-sm-3 col-form-label form-label">Блок
                                        5, шаг 1 описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_step1_description"
                                               id="block_5_step1_description" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_5_step1_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_step2_title" class="col-sm-3 col-form-label form-label">Блок 5,
                                        шаг 2 заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_step2_title" id="block_5_step2_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_step2_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_step2_description" class="col-sm-3 col-form-label form-label">Блок
                                        5, шаг 2 описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_step2_description"
                                               id="block_5_step2_description" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_5_step2_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_step3_title" class="col-sm-3 col-form-label form-label">Блок 5,
                                        шаг 3 заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_step3_title" id="block_5_step3_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_5_step3_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_5_step3_description" class="col-sm-3 col-form-label form-label">Блок
                                        5, шаг 3 описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_5_step3_description"
                                               id="block_5_step3_description" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_5_step3_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_6_title" class="col-sm-3 col-form-label form-label">Блок 6,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_6_title" id="block_6_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_6_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_6_title_marked" class="col-sm-3 col-form-label form-label">Блок 6,
                                        выделенный заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_6_title_marked"
                                               id="block_6_title_marked" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_6_title_marked']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_6_description" class="col-sm-3 col-form-label form-label">Блок 6,
                                        описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_6_description" id="block_6_description"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_6_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_7_title_marked" class="col-sm-3 col-form-label form-label">Блок 7,
                                        выделенный заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_7_title_marked"
                                               id="block_7_title_marked" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_7_title_marked']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_7_title" class="col-sm-3 col-form-label form-label">Блок 7,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_7_title" id="block_7_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_7_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_7_description" class="col-sm-3 col-form-label form-label">Блок 7,
                                        описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_7_description" id="block_7_description"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_7_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_title_1" class="col-sm-3 col-form-label form-label">Блок
                                        8, элемент заголовок 1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_title_1"
                                               id="block_8_element_title_1" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_8_element_title_1']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_description_1"
                                           class="col-sm-3 col-form-label form-label">Блок 8, элемент описание 1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_description_1"
                                               id="block_8_element_description_1" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_8_element_description_1']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_title_2" class="col-sm-3 col-form-label form-label">Блок
                                        8, элемент заголовок 2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_title_2"
                                               id="block_8_element_title_2" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_8_element_title_2']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_description_2"
                                           class="col-sm-3 col-form-label form-label">Блок 8, элемент описание 2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_description_2"
                                               id="block_8_element_description_2" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_8_element_description_2']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_title_3" class="col-sm-3 col-form-label form-label">Блок
                                        8, элемент заголовок 3</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_title_3"
                                               id="block_8_element_title_3" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_8_element_title_3']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_description_3"
                                           class="col-sm-3 col-form-label form-label">Блок 8, элемент описание 3</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_description_3"
                                               id="block_8_element_description_3" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_8_element_description_3']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_title_4" class="col-sm-3 col-form-label form-label">Блок
                                        8, элемент заголовок 4</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_title_4"
                                               id="block_8_element_title_4" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_8_element_title_4']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_description_4"
                                           class="col-sm-3 col-form-label form-label">Блок 8, элемент описание 4</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_description_4"
                                               id="block_8_element_description_4" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_8_element_description_4']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_title_5" class="col-sm-3 col-form-label form-label">Блок
                                        8, элемент заголовок 5</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_title_5"
                                               id="block_8_element_title_5" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_8_element_title_5']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_description_5"
                                           class="col-sm-3 col-form-label form-label">Блок 8, элемент описание 5</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_description_5"
                                               id="block_8_element_description_5" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_8_element_description_5']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_title_6" class="col-sm-3 col-form-label form-label">Блок
                                        8, элемент заголовок 6</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_title_6"
                                               id="block_8_element_title_6" placeholder="Введите текст"
                                               aria-label="Email" value="{{$settings['block_8_element_title_6']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_8_element_description_6"
                                           class="col-sm-3 col-form-label form-label">Блок 8, элемент описание 6</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_8_element_description_6"
                                               id="block_8_element_description_6" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_8_element_description_6']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_9_title" class="col-sm-3 col-form-label form-label">Блок 9,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_9_title" id="block_9_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_9_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_9_description" class="col-sm-3 col-form-label form-label">Блок 9,
                                        описание</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_9_description" id="block_9_description"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_9_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_9_button_text" class="col-sm-3 col-form-label form-label">Блок 9,
                                        текст в кнопке</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_9_button_text" id="block_9_button_text"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_9_button_text']}}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="block_9_button_link" class="col-sm-3 col-form-label form-label">Блок 9,
                                        ссылка в кнопке</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_9_button_link" id="block_9_button_link"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_9_button_link']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_10_title" class="col-sm-3 col-form-label form-label">Блок 10,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_10_title" id="block_10_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_10_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_10_static_1" class="col-sm-3 col-form-label form-label">Блок 10,
                                        процент статистики 1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_10_static_1" id="block_10_static_1"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_10_static_1']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_10_static_1_description"
                                           class="col-sm-3 col-form-label form-label">Блок 10, описание статистики
                                        1</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_10_static_1_description"
                                               id="block_10_static_1_description" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_10_static_1_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_10_static_2" class="col-sm-3 col-form-label form-label">Блок 10,
                                        процент статистики 2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_10_static_2" id="block_10_static_2"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_10_static_2']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_10_static_2_description"
                                           class="col-sm-3 col-form-label form-label">Блок 10, описание статистики
                                        2</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_10_static_2_description"
                                               id="block_10_static_2_description" placeholder="Введите текст"
                                               aria-label="Email"
                                               value="{{$settings['block_10_static_2_description']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_10_static_3" class="col-sm-3 col-form-label form-label">Блок 10,
                                        процент статистики 3</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_10_static_3" id="block_10_static_3"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_10_static_3']}}">
                                    </div>
                                </div>
                                {{-- ЗДЕСЬ ДОЛЖНЫ БЫТЬ ОТЗЫВЫ --}}



                                {{-- КОНЕЦ ОТЗЫВОВ --}}
                                <div class="row mb-4">
                                    <label for="block_12_title" class="col-sm-3 col-form-label form-label">Блок 12,
                                        заголовок</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_12_title" id="block_12_title"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_12_title']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_12_button_text" class="col-sm-3 col-form-label form-label">Блок
                                        11, текст кнопки</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_12_button_text"
                                               id="block_12_button_text" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_12_button_text']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="block_12_button_link" class="col-sm-3 col-form-label form-label">Блок
                                        12, ссылка кнопки</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="block_12_button_link"
                                               id="block_12_button_link" placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['block_12_button_link']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="footer_tg_link" class="col-sm-3 col-form-label form-label">Footer,
                                        ссылка на телеграм</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="footer_tg_link" id="footer_tg_link"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['footer_tg_link']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="footer_email" class="col-sm-3 col-form-label form-label">Footer,
                                        Почта</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="footer_email" id="footer_email"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['footer_email']}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="footer_other_text" class="col-sm-3 col-form-label form-label">Footer,
                                        текст</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="footer_other_text" id="footer_other_text"
                                               placeholder="Введите текст" aria-label="Email"
                                               value="{{$settings['footer_other_text']}}">
                                    </div>
                                </div>


                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                            <div class="card">
                                <!-- Header -->
                                <div class="card-header card-header-content-md-between">
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountAddAddressModal" class="btn btn-primary">Добавить отзыв</a>
                                </div>
                                <!-- End Header -->

                                <!-- Table -->
                                <div class="table-responsive datatable-custom">
                                    <div id="datatable_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dt-buttons">
                                            <button class="dt-button buttons-copy buttons-html5 d-none" tabindex="0"
                                                    aria-controls="datatable" type="button"><span>Copy</span></button>
                                            <button class="dt-button buttons-excel buttons-html5 d-none" tabindex="0"
                                                    aria-controls="datatable" type="button"><span>Excel</span></button>
                                            <button class="dt-button buttons-csv buttons-html5 d-none" tabindex="0"
                                                    aria-controls="datatable" type="button"><span>CSV</span></button>
                                            <button class="dt-button buttons-pdf buttons-html5 d-none" tabindex="0"
                                                    aria-controls="datatable" type="button"><span>PDF</span></button>
                                            <button class="dt-button buttons-print d-none" tabindex="0"
                                                    aria-controls="datatable" type="button"><span>Print</span></button>
                                        </div>
                                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="" placeholder=""
                                                    aria-controls="datatable"></label></div>
                                        <table id="datatable"
                                               class="table table-borderless table-thead-bordered table-nowrap card-table dataTable no-footer"
                                               data-hs-datatables-options="{
                   &quot;columnDefs&quot;: [{
                      &quot;targets&quot;: [0, 3, 6],
                      &quot;orderable&quot;: false
                    }],
                   &quot;order&quot;: [],
                   &quot;info&quot;: {
                     &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                   },
                   &quot;search&quot;: &quot;#datatableSearch&quot;,
                   &quot;entries&quot;: &quot;#datatableEntries&quot;,
                   &quot;pageLength&quot;: 5,
                   &quot;isResponsive&quot;: false,
                   &quot;isShowPaging&quot;: false,
                   &quot;pagination&quot;: &quot;datatablePagination&quot;
                 }" role="grid" aria-describedby="datatable_info">
                                            <thead class="thead-light">
                                            <tr role="row">
                                                <th scope="col" class="table-column-pe-0 sorting_disabled" rowspan="1"
                                                    colspan="1" aria-label="




                " style="width: 24px;">
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" aria-label="Product: activate to sort column ascending"
                                                    style="width: 196.648px;">Пользователи
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" aria-label="Reviewer: activate to sort column ascending"
                                                    style="width: 183.305px;">Отзыв
                                                </th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Review"
                                                    style="width: 288px;">Дата
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" aria-label="Date: activate to sort column ascending"
                                                    style="width: 139.664px;">Статус
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" aria-label="Status: activate to sort column ascending"
                                                    style="width: 71.922px;">Действия
                                                </th>

                                            </tr>
                                            </thead>

                                            <tbody>


                                            @foreach($reviews as $review)
                                                <tr role="row" class="odd">
                                                    <td class="table-column-pe-0">

                                                    </td>

                                                    <td>
                                                        <a class="d-flex align-items-center" href="./user-profile.html">
                                                            <div class="avatar avatar-circle">
                                                                <img class="avatar-img" src="/{{$review['avatar_path']}}"
                                                                     alt="Image Description">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                            <span class="card-title h5 text-inherit">{{$review['name']}} <i
                                                                    class="bi-patch-check-fill text-primary"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    aria-label="Verified purchase"
                                                                    data-bs-original-title="Verified purchase"></i></span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="text-wrap" style="width: 18rem;">


                                                            <p>{{$review['text']}}</p>
                                                        </div>
                                                    </td>
                                                    <td>{{\Illuminate\Support\Carbon::parse($review['created_at'])->format("d/m/y H:i")}}</td>
                                                    <td><span
                                                            class="badge bg-soft-success text-success ms-2">Published</span>
                                                    </td>
                                                    <td>
                                                        <!-- Unfold -->
                                                        <div class="hs-unfold">
                                                            <button type="button"
                                                                    class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                                                                    id="settingsDropdown1" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                <i class="bi-three-dots-vertical"></i>
                                                            </button>

                                                            <div class="dropdown-menu dropdown-menu-end mt-1"
                                                                 aria-labelledby="settingsDropdown1">
                                                                <span class="dropdown-header">Настройки</span>

                                                                <a class="dropdown-item" href="#">
                                                                    <i class="bi-pencil-fill dropdown-item-icon"></i> Изменить
                                                                </a>

                                                                <a class="dropdown-item" href="{{route("admin.reviews.delete:id", $review['id'])}}">
                                                                    <i class="bi-trash dropdown-item-icon"></i> Удалить
                                                                </a>


                                                            </div>
                                                        </div>
                                                        <!-- End Unfold -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="datatable_info" role="status"
                                             aria-live="polite">Showing 1 to 5 of 7 entries
                                        </div>
                                    </div>
                                </div>
                                <!-- End Table -->


                            </div>
                            <!-- End Form -->
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->


                </div>

                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
        </div>
        <!-- End Row -->
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
<div class="modal fade" id="accountAddAddressModal" tabindex="-1" aria-labelledby="accountAddAddressModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="accountAddAddressModalLabel">Добавить отзыв</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body">
                <!-- Form -->
                <form id="add_reviews">
                    <!-- Form -->
                    @csrf


                    <!-- Form -->
                    <div class="row mb-4">
                        <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label mb-4">Имя</label>

                        <div class="col-sm-9">
                            <input type="text" class="js-masked-input form-control" name="name" id="zipCodeLabel" placeholder="Введите текст отзыва" aria-label="Your zip code" >
                        </div>
                        <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">Аватар</label>

                        <div class="col-sm-9 mb-5">
                            <input type="file" class="js-masked-input form-control" name="avatar" >
                        </div>
                        <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">Текст отзыва</label>

                        <div class="col-sm-9">
                            <textarea type="text" class="js-masked-input form-control" name="text" cols="5" rows="5" aria-label="Your zip code" ></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-sm-3">
                        <button type="button" class="btn btn-white me-2 me-sm-0" data-dismiss="modal">Закрыть</button>
                        <button id="btn_add_reviews" type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Welcome Message Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- JS Global Compulsory  -->
<script src="/admin/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/admin/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/admin/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
<script src="/admin/assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

<script src="/admin/assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
<script src="/admin/assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
<script src="/admin/assets/vendor/hs-scrollspy/dist/hs-scrollspy.min.js"></script>
<script src="/admin/assets/vendor/imask/dist/imask.min.js"></script>
<script src="/admin/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

<!-- JS Front -->
<script src="/admin/assets/js/theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
    (function () {
        window.onload = function () {


            // INITIALIZATION OF NAVBAR VERTICAL ASIDE
            // =======================================================
            new HSSideNav('.js-navbar-vertical-aside').init()


            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            new HSFormSearch('.js-form-search')


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF SELECT
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')

            new HSAddField('.js-add-field')

            // INITIALIZATION OF INPUT MASK
            // =======================================================
            HSCore.components.HSMask.init('.js-input-mask')


            // INITIALIZATION OF FILE ATTACHMENT
            // =======================================================
            new HSFileAttach('.js-file-attach')


            // INITIALIZATION OF STICKY BLOCKS
            // =======================================================
            new HSStickyBlock('.js-sticky-block', {
                targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
            })


            // SCROLLSPY
            // =======================================================
            new bootstrap.ScrollSpy(document.body, {
                target: '#navbarSettings',
                offset: 100
            })

            new HSScrollspy('#navbarVerticalNavMenu', {
                breakpoint: 'lg',
                scrollOffset: -20
            })
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
    const btn_add_reviews = document.getElementById('btn_add_reviews');
    const add_reviews = document.getElementById('add_reviews');
    const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
    const messageText = document.getElementById('messageText');
    btn_add_reviews.addEventListener('click', function () {
        let formData = new FormData(add_reviews);
        $.ajax({
            url: '{{route('admin.reviews.create')}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                messageText.innerHTML = data.message;
                liveToast.show()
            },

        })


    })

</script>

<!-- End Style Switcher JS -->
</body>
</html>

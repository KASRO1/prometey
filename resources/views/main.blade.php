<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>{{$settings['title']}}</title>
    <link rel="stylesheet" type="text/css" href="styles/main%EF%B9%96213312321233.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <!-- Favicon -->

    <!-- Open Graph. -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Prometey">
    <meta property="og:url" content="https://Prometey.knott.fun">
    <meta property="og:locale" content="en">
    <meta property="og:title" content="Prometey | Home">
    <meta property="og:description" content="Зарабатывайте от 100$ в день на арбитраже котировок">
    <meta property="og:image" content="/favicons/android-chrome-512x512.png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <!-- Open Graph. -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94425112, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/94425112" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>

<!-- Header. -->
<div class="header">
    <div class="bone">
        <div class="header_net __flex-center">
            <div class="header_logo" onclick="scroll_to('html')">
                <img width="100" height="100" src="images/svg/logo.svg" alt>
            </div>
            <div class="header_nav __flex-align" id="nav-desktop">
                <a href="#about" class="header_nav_li __hover_line">{{$settings['header_nav_1']}}</a>
                <a href="#advantages" class="header_nav_li __hover_line">{{$settings['header_nav_2']}}</a>
                <a href="#reviews" class="header_nav_li __hover_line">{{$settings['header_nav_3']}}</a>
            </div>
            <div class="header_right __flex-align">
                <div id="btn_sign_in-desktop">
                    <a class="__btn-outline" href="{{route("login")}}" target="_blank">Вход</a>
                </div>
                <div id="btn_sign_up-desktop">
                    <div class="__btn" onclick="location.href = '{{route("signup")}}'">Регистрация</div>
                </div>
                <div class="bar">
                    <div class="bar_burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="bar_wrapper">
                        <div class="bar_net __flex">
                            <div class="bar_nav" id="nav-mobile"></div>
                            <div class="bar_btn __felx">
                                <div id="btn_sign_in-mobile"></div>
                                <div id="btn_sign_up-mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header. -->

<div class="main">
    <div class="main_bg">
        <picture>
            <source srcset="images/main_bg.webp" type="image/webp">
            <img width="100" height="100" src="images/main_bg.jpg" alt srcset="images/main_bg.jpg 1x, images/main_bg@2x.jpg 2x">
        </picture>
    </div>
    <div class="main_fire">
        <picture>
            <source srcset="images/main_fire.webp" type="image/webp">
            <img width="100" height="100" src="images/main_fire.png" alt srcset="images/main_fire.png 1x, images/main_fire@2x.png 2x">
        </picture>
    </div>
    <div class="bone">
        <div class="main_net __flex-start">
            <div class="main_info __anim _anim-x anim_wis">
                <h1 class="main_title">
                    <span class="_gr">{!! $settings['block_1_title'] !!}</span>
                    <br>
                    <span class="_pr">{!! $settings['block_1_title_marked'] !!}</span>
                    <br>
                    <span class="_gr">
                        {!! $settings['block_1_title_2'] !!}

						</span>
                </h1>
                <div class="main_text">{!! $settings['block_1_description'] !!}</div>
                <div class="main_btn">
                    <div class="__btn _icon" onclick="location.href = 'https://lk.prometey.trade/registration'">
                        <span class="__icon-arrow">{!! $settings['block_1_button_text'] !!}</span>
                    </div>
                </div>
            </div>
            <div class="main_img">
                <div class="main_coins">
                    <div class="main_coin __anim _d-83 _coin-up">
                        <img width="100" height="100" src="images/coins/coin_m-1.svg" alt>
                    </div>
                    <div class="main_coin __anim _d-83 _coin-up_40">
                        <img width="100" height="100" src="images/coins/coin_m-2.svg" alt>
                    </div>
                    <div class="main_coin">
                        <img width="100" height="100" src="images/coins/coin_m-3.svg" alt>
                    </div>
                    <div class="main_coin __anim _d-83 _coin-up_60">
                        <img width="100" height="100" src="images/coins/coin_m-4.svg" alt>
                    </div>
                    <div class="main_coin">
                        <img width="100" height="100" src="images/coins/coin_m-5.svg" alt>
                    </div>
                    <div class="main_coin">
                        <img width="100" height="100" src="images/coins/coin_m-6.svg" alt>
                    </div>
                    <div class="main_coin">
                        <img width="100" height="100" src="images/coins/coin_m-7.svg" alt>
                    </div>
                </div>
                <picture>
                    <source srcset="images/phone.webp" type="image/webp">
                    <img width="100" height="100" class="_img __anim anim_wis _anim-x_r _d-43 _s-83" src="images/phone.png" alt srcset="images/phone.png 1x, images/phone@2x.png 2x">
                </picture>
            </div>
        </div>
    </div>
</div>


<div class="four">
    <div class="bone">
        <div class="four_items anim_wis __grid-four _glass __anim _anim-y">
            <div class="four_item">
                <div class="four_item_icon">
                    <img width="100" height="100" src="images/svg/f1.svg" alt>
                </div>
                <div class="four_item_text">{!! $settings['block_2_nav_1'] !!}</div>
            </div>
            <div class="four_item">
                <div class="four_item_icon">
                    <img width="100" height="100" src="images/svg/f2.svg" alt>
                </div>
                <div class="four_item_text">{!! $settings['block_2_nav_2'] !!}</div>
            </div>
            <div class="four_item">
                <div class="four_item_icon">
                    <img width="100" height="100" src="images/svg/f3.svg" alt>
                </div>
                <div class="four_item_text">{!! $settings['block_2_nav_3'] !!}</div>
            </div>
            <div class="four_item">
                <div class="four_item_icon">
                    <img width="100" height="100" src="images/svg/f4.svg" alt>
                </div>
                <div class="four_item_text">{!! $settings['block_2_nav_4'] !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="work" id="about">
    <div class="work_coins">
        <div class="work_coin _coin-down_40">
            <img width="100" height="100" src="images/coins/coin_a-1.svg" alt>
        </div>
        <div class="work_coin">
            <img width="100" height="100" src="images/coins/coin_a-2.svg" alt>
        </div>
        <div class="work_coin">
            <img width="100" height="100" src="images/coins/coin_a-3.svg" alt>
        </div>
    </div>
    <div class="bone">
        <div class="work_net __flex-center">
            <div class="work_left __anim _anim-x anim_wis">
                <div class="work_left_bg">
                    <picture>
                        <source srcset="images/w.webp" type="image/webp">
                        <img width="100" height="100" src="images/w.png" alt srcset="images/w.png 1x, images/w@2x.png 2x">
                    </picture>
                </div>
                <div class="work_left_video">
                    <div class="video stop">
							<span>
								<i></i>
							</span>
                        <video playsinline poster="images/preload.webp">
                            <source src="video/v1.mp4" type="video/mp4">
                            <source src="video/v1.webm" type="video/webm">
                        </video>
                    </div>
                </div>
                <div class="work_left_bottom __icon-fire">{{$settings['block_3_text_under_video']}}</div>
            </div>
            <div class="work_info">
                <h3 class="work_info_title __anim _anim-y">
                   {!! $settings['block_3_title'] !!}
                    <br><span class="_gr-orange">
							{!! $settings['block_3_title_marked'] !!}
						</span>
                </h3>
                <div class="work_info_text __anim _anim-y">
                    {!! $settings['block_3_description'] !!}
                </div>
                <div class="work_info_bottom __grid-twoo">
                    <div class="work_info_bottom_li __anim _anim-y">
                        <div class="work_info_bottom_num _gr-orange"><span data-number="{{$settings['block_3_static_procent_1']}}">0</span>%</div>
                        <div class="work_info_bottom_text">{{$settings['block_3_static_procent_text_1']}}</div>
                    </div>
                    <div class="work_info_bottom_li __anim _anim-y">
                        <div class="work_info_bottom_num _gr-orange"><span data-number="{{$settings['block_3_static_procent_2']}}">0</span>%</div>
                        <div class="work_info_bottom_text">{{$settings['block_3_static_procent_text_2']}}</div>
                    </div>
                    <div class="work_info_bottom_li __anim _anim-y">
                        <div class="work_info_bottom_num _gr-orange">$<span data-number="{{$settings['block_3_static_procent_3']}}">0</span></div>
                        <div class="work_info_bottom_text">{{$settings['block_3_static_procent_text_3']}}</div>
                    </div>
                    <div class="work_info_bottom_li __anim _anim-y">
                        <div class="work_info_bottom_num _gr-orange"><span data-number="{{$settings['block_3_static_procent_4']}}" data-seperator="en">0</span>+</div>
                        <div class="work_info_bottom_text">{{$settings['block_3_static_procent_text_4']}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="education">
    <div class="education_coins __anim _anim-y anim_wis">
        <div class="education_coin _coin _coin-up">
            <img width="100" height="100" src="images/coins/coin_e-1.svg" alt>
        </div>
        <div class="education_coin _coin _coin-up_60">
            <img width="100" height="100" src="images/coins/coin_e-2.svg" alt>
        </div>
        <div class="education_coin _coin _coin-up_20">
            <img width="100" height="100" src="images/coins/coin_e-3.svg" alt>
        </div>
        <div class="education_coin _coin">
            <img width="100" height="100" src="images/coins/coin_e-4.svg" alt>
        </div>
    </div>
    <div class="education_bg">
        <picture>
            <source srcset="images/education.webp" type="image/webp">
            <img width="100" height="100" src="images/education.jpg" alt srcset="images/education.jpg 1x, images/education@2x.jpg 2x">
        </picture>
    </div>
    <div class="bone">
        <h4 class="education_title _gr-orange">
            {!! $settings['block_4_title'] !!}

        </h4>
        <div class="education_text">
            {!! $settings['block_4_description'] !!}
        </div>
    </div>
</div>

<div class="steeps">
    <div class="bone">
        <div class="steeps_net __flex">
            <div class="steeps_left __anim _anim-x anim_wis">
                <div class="steeps_left_bg">
                    <img src="images/svg/gradient.svg" alt>
                </div>
                <h3 class="steeps_title">
                    <span class="_pr">{{$settings['block_5_title_marked']}}</span>
                    <br>{{$settings['block_5_title_marked']}}
                </h3>
                <div class="steeps_text">{{$settings['block_5_description']}}</div>
                <div class="steeps_btn">
                    <div class="__btn _icon" onclick="location.href = 'https://lk.prometey.trade/registration'">
                        <span class="__icon-arrow">{{$settings['block_5_button_text']}}</span>
                    </div>
                </div>
            </div>
            <div class="steeps_items">
                <div class="steeps_item _glass">
                    <span class="step_line"></span>
                    <div class="steeps_item_bg">
                        <picture>
                            <source srcset="images/steep_bg.webp" type="image/webp">
                            <img width="100" height="100" src="images/steep_bg.png" alt srcset="images/steep_bg.png 1x, images/steep_bg@2x.png 2x">
                        </picture>
                    </div>
                    <h5 class="steeps_item_name _gr-orange">{!! $settings['block_5_step1_title'] !!}</h5>
                    <div class="steeps_item_text">{{$settings['block_5_step1_description']}}</div>
                </div>
                <div class="steeps_item _glass">
                    <span class="step_line"></span>
                    <div class="steeps_item_bg">
                        <picture>
                            <source srcset="images/steep_bg.webp" type="image/webp">
                            <img width="100" height="100" src="images/steep_bg.png" alt srcset="images/steep_bg.png 1x, images/steep_bg@2x.png 2x">
                        </picture>
                    </div>
                    <h5 class="steeps_item_name _gr-orange">{{$settings['block_5_step2_title']}}</h5>
                    <div class="steeps_item_text">{{$settings['block_5_step2_description']}}</div>
                </div>
                <div class="steeps_item _glass">
                    <div class="steeps_item_bg">
                        <picture>
                            <source srcset="images/steep_bg.webp" type="image/webp">
                            <img width="100" height="100" src="images/steep_bg.png" alt srcset="images/steep_bg.png 1x, images/steep_bg@2x.png 2x">
                        </picture>
                    </div>
                    <h5 class="steeps_item_name _gr-orange">{{$settings['block_5_step3_title']}}</h5>
                    <div class="steeps_item_text">{{$settings['block_5_step3_description']}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="brokers __anim _anim-y anim_wis">
    <div class="bone">
        <h3 class="brokers_title">{{$settings['block_6_title']}}</h3>
        <div class="brokers_label _gr-orange">{{$settings['block_6_title_marked']}}</div>
        <div class="brokers_text">{{$settings['block_6_description']}}</div>
        <div class="brokers_items __flex">
            <picture>
                <source srcset="images/b1.webp" type="image/webp">
                <img width="100" height="100" src="images/b1.png" alt srcset="images/b1.png 1x, images/b1@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b2.webp" type="image/webp">
                <img width="100" height="100" src="images/b2.png" alt srcset="images/b2.png 1x, images/b2@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b3.webp" type="image/webp">
                <img width="100" height="100" src="images/b3.png" alt srcset="images/b3.png 1x, images/b3@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b4.webp" type="image/webp">
                <img width="100" height="100" src="images/b4.png" alt srcset="images/b4.png 1x, images/b4@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b5.webp" type="image/webp">
                <img width="100" height="100" src="images/b5.png" alt srcset="images/b5.png 1x, images/b5@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b6.webp" type="image/webp">
                <img width="100" height="100" src="images/b6.png" alt srcset="images/b6.png 1x, images/b6@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b7.webp" type="image/webp">
                <img width="100" height="100" src="images/b7.png" alt srcset="images/b7.png 1x, images/b7@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b8.webp" type="image/webp">
                <img width="100" height="100" src="images/b8.png" alt srcset="images/b8.png 1x, images/b8@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b9.webp" type="image/webp">
                <img width="100" height="100" src="images/b9.png" alt srcset="images/b9.png 1x, images/b9@2x.png 2x">
            </picture>
            <picture>
                <source srcset="images/b10.webp" type="image/webp">
                <img width="100" height="100" src="images/b10.png" alt srcset="images/b10.png 1x, images/b10@2x.png 2x">
            </picture>
        </div>
    </div>
</div>

<div class="theory">
    <div class="theory_coins">
        <div class="theory_coin _coin-up">
            <img width="100" height="100" src="images/coins/coin_t-1.svg" alt>
        </div>
        <div class="theory_coin _coin-up_20">
            <img width="100" height="100" src="images/coins/coin_t-2.svg" alt>
        </div>
        <div class="theory_coin">
            <img width="100" height="100" src="images/coins/coin_t-3.svg" alt>
        </div>
        <div class="theory_coin">
            <img width="100" height="100" src="images/coins/coin_t-5.svg" alt>
        </div>
        <div class="theory_coin _coin-up_60">
            <img width="100" height="100" src="images/coins/coin_t-6.svg" alt>
        </div>
    </div>
    <div class="theory_bg">
        <picture>
            <source srcset="images/theory_bg.webp" type="image/webp">
            <img width="100" height="100" src="images/theory_bg.png" alt srcset="images/theory_bg.png 1x, images/theory_bg@2x.png 2x">
        </picture>
    </div>
    <div class="bone">
        <div class="theory_top __anim _anim-x anim_wis" id="advantages">
            <h2 class="theory_title _pr">{{$settings['block_7_title_marked']}}</h2>
            <div class="theory_top_net __flex">
                <h2 class="theory_title_twoo _gr-orange">{{$settings['block_7_title']}}</h2>
                <div class="theory_top_text">
                   {!! $settings['block_7_description'] !!}
                </div>
            </div>
        </div>
        <div class="theory_items __grid-three">
            <div class="theory_item  __anim _anim-y anim_wis">
                <div class="theory_item_icon">
                    <img width="100" height="100" src="images/svg/th1.svg" alt>
                </div>
                <div class="theory_item_name">{!! $settings['block_8_element_title_1'] !!}</div>
                <div class="theory_item_text">{!! $settings['block_8_element_description_1'] !!}</div>
            </div>
            <div class="theory_item  __anim _anim-y anim_wis">
                <div class="theory_item_icon">
                    <img width="100" height="100" src="images/svg/th2.svg" alt>
                </div>
                <div class="theory_item_name">{!! $settings['block_8_element_title_2'] !!}</div>
                <div class="theory_item_text">{!! $settings['block_8_element_description_2'] !!}</div></div>
            <div class="theory_item  __anim _anim-y anim_wis">
                <div class="theory_item_icon">
                    <img width="100" height="100" src="images/svg/th3.svg" alt>
                </div>
                <div class="theory_item_name">{!! $settings['block_8_element_title_3'] !!}</div>
                <div class="theory_item_text">{!! $settings['block_8_element_description_3'] !!}</div></div>
            <div class="theory_item  __anim _anim-y anim_wis">
                <div class="theory_item_icon">
                    <img width="100" height="100" src="images/svg/th4.svg" alt>
                </div>
                <div class="theory_item_name">{!! $settings['block_8_element_title_4'] !!}</div>
                <div class="theory_item_text">{!! $settings['block_8_element_description_4'] !!}</div>
                 </div>
            <div class="theory_item  __anim _anim-y anim_wis">
                <div class="theory_item_icon">
                    <img width="100" height="100" src="images/svg/th5.svg" alt>
                </div>
                <div class="theory_item_name">{!! $settings['block_8_element_title_5'] !!}</div>
                <div class="theory_item_text">{!! $settings['block_8_element_description_5'] !!}</div></div>
            <div class="theory_item  __anim _anim-y anim_wis">
                <div class="theory_item_icon">
                    <img width="100" height="100" src="images/svg/th6.svg" alt>
                </div>
                <div class="theory_item_name">{!! $settings['block_8_element_title_6'] !!}</div>
                <div class="theory_item_text">{!! $settings['block_8_element_description_6'] !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="cta">
    <div class="cta_bg">
        <picture>
            <source srcset="images/cta.webp" type="image/webp">
            <img width="100" height="100" src="images/cta.jpg" alt srcset="images/cta.jpg 1x, images/cta@2x.jpg 2x">
        </picture>
    </div>
    <div class="bone  __anim _anim-x anim_wis">
        <div class="cta_label _gr-orange">{!!  $settings['block_9_title'] !!}</div>
        <h3 class="cta_title">{!! $settings['block_9_description'] !!}</h3>
        <div class="cta_btn">
            <div class="__btn _icon" onclick="location.href = 'https://lk.prometey.trade/registration'">
                <span class="__icon-arrow">{!! $settings['block_9_button_text'] !!}</span>
            </div>
        </div>
    </div>
</div>

<div class="result">
    <div class="bone">
        <div class="result_net __flex-start">
            <div class="result_info">
                <h2 class="result_title __anim _anim-y">
                    {!! $settings['block_10_title'] !!}
                </h2>
                <div class="result_info_li __anim _anim-y">
                    <div class="result_info_num _gr-orange"><span data-number="{{$settings['block_10_static_1']}}">0</span>+</div>
                    <div class="result_info_text">
                        {!! $settings['block_10_static_1_description'] !!}
                    </div>
                </div>
                <div class="result_info_li __anim _anim-y">
                    <div class="result_info_num _gr-orange">$<span data-number="{{$settings['block_10_static_2']}}" data-seperator="en">0</span></div>
                    <div class="result_info_text">
                        {!! $settings['block_10_static_2_description'] !!}
                    </div>
                </div>
                <div class="result_info_li __anim _anim-y">
                    <div class="result_info_num _gr-orange"><span data-number="{{$settings['block_10_static_3']}}">0</span>+</div>
                    <div class="result_info_text">
                        {!! $settings['block_10_static_3_description'] !!}
                    </div>
                </div>
            </div>
            <div class="result_img anim_wis __anim _anim-x_r _s-83">
                <picture>
                    <source srcset="images/result.webp" type="image/webp">
                    <img width="100" height="100" src="images/result.png" alt srcset="images/result.png 1x, images/result@2x.png 2x">
                </picture>
            </div>
        </div>
    </div>
</div>

<div class="reviews" id="reviews">
    <div class="bone">
        <div class="reviews_slider anim_wis __anim _anim-y _s-83">
           @foreach($reviews as $review)
                <div class="reviews_slide _glass">
                    <div class="reviews_top __flex-center">
                        <div class="reviews_top_info __flex-align">
                            <a class="reviews_top_ava __icon-tg" href="#">
                                <picture>
                                    <img width="100" height="100" src="{{$review['avatar_path']}}" alt >
                                </picture>
                            </a>
                            <h5 class="reviews_top_name _gr-orange">{{$review['name']}}</h5>
                        </div>

                    </div>
                    <div class="reviews_text">{{$review['text']}}</div>
                </div>
           @endforeach
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/artemun_irk">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a2.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a2.jpg" alt srcset="images/a2.jpg 1x, images/a2@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Артём</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_photo_2')">--}}
{{--                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M11.0819 6.15385C11.2451 6.15385 11.4017 6.08901 11.5171 5.9736C11.6325 5.8582 11.6973 5.70167 11.6973 5.53846V5.03003C11.6956 4.20552 11.3738 3.41389 10.7998 2.82198C10.2258 2.23006 9.44446 1.88409 8.62039 1.85698V0.615385C8.62039 0.452174 8.55555 0.295649 8.44015 0.180242C8.32474 0.064835 8.16821 0 8.005 0C7.84179 0 7.68527 0.064835 7.56986 0.180242C7.45446 0.295649 7.38962 0.452174 7.38962 0.615385V1.85698C6.65968 1.88024 5.96002 2.15417 5.40832 2.63268C4.85662 3.1112 4.48654 3.76511 4.36033 4.48443C4.23412 5.20374 4.35947 5.94458 4.71531 6.58234C5.07115 7.22009 5.63576 7.71584 6.31417 7.98622L9.23879 9.15662C9.66019 9.32522 10.0097 9.63532 10.2273 10.0336C10.4449 10.432 10.517 10.8936 10.4311 11.3393C10.3453 11.785 10.1069 12.1869 9.75697 12.4759C9.40701 12.7649 8.96731 12.923 8.51344 12.9231H7.49657C6.97876 12.9225 6.48232 12.7165 6.11617 12.3504C5.75001 11.9842 5.54405 11.4878 5.54347 10.97V10.4615C5.54347 10.2983 5.47863 10.1418 5.36322 10.0264C5.24782 9.91099 5.09129 9.84615 4.92808 9.84615C4.76487 9.84615 4.60835 9.91099 4.49294 10.0264C4.37753 10.1418 4.3127 10.2983 4.3127 10.4615V10.97C4.31445 11.7945 4.63623 12.5861 5.21021 13.178C5.78419 13.7699 6.56555 14.1159 7.38962 14.143V15.3846C7.38962 15.5478 7.45446 15.7044 7.56986 15.8198C7.68527 15.9352 7.84179 16 8.005 16C8.16821 16 8.32474 15.9352 8.44015 15.8198C8.55555 15.7044 8.62039 15.5478 8.62039 15.3846V14.143C9.35033 14.1198 10.05 13.8458 10.6017 13.3673C11.1534 12.8888 11.5235 12.2349 11.6497 11.5156C11.7759 10.7963 11.6505 10.0554 11.2947 9.41766C10.9389 8.77991 10.3743 8.28416 9.69584 8.01378L6.77122 6.84338C6.34982 6.67478 6.00029 6.36468 5.7827 5.96636C5.56511 5.56804 5.49304 5.10637 5.57887 4.66068C5.6647 4.215 5.90308 3.81311 6.25304 3.52409C6.603 3.23507 7.0427 3.07696 7.49657 3.07692H8.51344C9.03125 3.07751 9.52769 3.28347 9.89384 3.64962C10.26 4.01577 10.466 4.51221 10.4665 5.03003V5.53846C10.4665 5.70167 10.5314 5.8582 10.6468 5.9736C10.7622 6.08901 10.9187 6.15385 11.0819 6.15385Z" fill="url(#paint0_linear_5_5387)"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_5_5387" x1="8.005" y1="0" x2="8.005" y2="16" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">Всем привет! Если коротко о продукте, то он клёвый, заработать можно легко и 100% к депозиту за несколько часов. Но в таком случае возникают вопросы при выводе средств. Поэтому наглеть не нужно и в размеренном режиме спокойно торговать, используя PROMETEY, уделяя пару часов в день. Конечно лучше пройти первоначально недельное обучение, всё разложить по полочкам и кофортно зарабатывать. Всем профита!!!</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/gnothiseauton">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a3.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a3.jpg" alt srcset="images/a3.jpg 1x, images/a3@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Арсений</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_video_3')">--}}
{{--                            <svg class="_stroke" width="12" height="14" viewbox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M0.85 0.673951L11.05 6.56292L0.85 12.4519L0.85 0.673951Z" stroke="url(#paint0_linear_14_6938)" stroke-width="1.2"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_14_6938" x1="6" y1="0" x2="6" y2="13.1258" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_photo_3')">--}}
{{--                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M11.0819 6.15385C11.2451 6.15385 11.4017 6.08901 11.5171 5.9736C11.6325 5.8582 11.6973 5.70167 11.6973 5.53846V5.03003C11.6956 4.20552 11.3738 3.41389 10.7998 2.82198C10.2258 2.23006 9.44446 1.88409 8.62039 1.85698V0.615385C8.62039 0.452174 8.55555 0.295649 8.44015 0.180242C8.32474 0.064835 8.16821 0 8.005 0C7.84179 0 7.68527 0.064835 7.56986 0.180242C7.45446 0.295649 7.38962 0.452174 7.38962 0.615385V1.85698C6.65968 1.88024 5.96002 2.15417 5.40832 2.63268C4.85662 3.1112 4.48654 3.76511 4.36033 4.48443C4.23412 5.20374 4.35947 5.94458 4.71531 6.58234C5.07115 7.22009 5.63576 7.71584 6.31417 7.98622L9.23879 9.15662C9.66019 9.32522 10.0097 9.63532 10.2273 10.0336C10.4449 10.432 10.517 10.8936 10.4311 11.3393C10.3453 11.785 10.1069 12.1869 9.75697 12.4759C9.40701 12.7649 8.96731 12.923 8.51344 12.9231H7.49657C6.97876 12.9225 6.48232 12.7165 6.11617 12.3504C5.75001 11.9842 5.54405 11.4878 5.54347 10.97V10.4615C5.54347 10.2983 5.47863 10.1418 5.36322 10.0264C5.24782 9.91099 5.09129 9.84615 4.92808 9.84615C4.76487 9.84615 4.60835 9.91099 4.49294 10.0264C4.37753 10.1418 4.3127 10.2983 4.3127 10.4615V10.97C4.31445 11.7945 4.63623 12.5861 5.21021 13.178C5.78419 13.7699 6.56555 14.1159 7.38962 14.143V15.3846C7.38962 15.5478 7.45446 15.7044 7.56986 15.8198C7.68527 15.9352 7.84179 16 8.005 16C8.16821 16 8.32474 15.9352 8.44015 15.8198C8.55555 15.7044 8.62039 15.5478 8.62039 15.3846V14.143C9.35033 14.1198 10.05 13.8458 10.6017 13.3673C11.1534 12.8888 11.5235 12.2349 11.6497 11.5156C11.7759 10.7963 11.6505 10.0554 11.2947 9.41766C10.9389 8.77991 10.3743 8.28416 9.69584 8.01378L6.77122 6.84338C6.34982 6.67478 6.00029 6.36468 5.7827 5.96636C5.56511 5.56804 5.49304 5.10637 5.57887 4.66068C5.6647 4.215 5.90308 3.81311 6.25304 3.52409C6.603 3.23507 7.0427 3.07696 7.49657 3.07692H8.51344C9.03125 3.07751 9.52769 3.28347 9.89384 3.64962C10.26 4.01577 10.466 4.51221 10.4665 5.03003V5.53846C10.4665 5.70167 10.5314 5.8582 10.6468 5.9736C10.7622 6.08901 10.9187 6.15385 11.0819 6.15385Z" fill="url(#paint0_linear_5_5387)"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_5_5387" x1="8.005" y1="0" x2="8.005" y2="16" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">Занимаюсь криптой. В моменты когда просел рынок, очень вовремя пришел «Прометей». Для того что бы не фиксировать крипту себе в минус, зарабатываю на жизнь торговлей на бинарках через бота! По 100-150 баксов в день, получается делать за 2-3 часа времени. Отличная тема ребят!</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/VitaliyMemphis">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a4.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a4.jpg" alt srcset="images/a4.jpg 1x, images/a4@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Виталий</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_photo_4')">--}}
{{--                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M11.0819 6.15385C11.2451 6.15385 11.4017 6.08901 11.5171 5.9736C11.6325 5.8582 11.6973 5.70167 11.6973 5.53846V5.03003C11.6956 4.20552 11.3738 3.41389 10.7998 2.82198C10.2258 2.23006 9.44446 1.88409 8.62039 1.85698V0.615385C8.62039 0.452174 8.55555 0.295649 8.44015 0.180242C8.32474 0.064835 8.16821 0 8.005 0C7.84179 0 7.68527 0.064835 7.56986 0.180242C7.45446 0.295649 7.38962 0.452174 7.38962 0.615385V1.85698C6.65968 1.88024 5.96002 2.15417 5.40832 2.63268C4.85662 3.1112 4.48654 3.76511 4.36033 4.48443C4.23412 5.20374 4.35947 5.94458 4.71531 6.58234C5.07115 7.22009 5.63576 7.71584 6.31417 7.98622L9.23879 9.15662C9.66019 9.32522 10.0097 9.63532 10.2273 10.0336C10.4449 10.432 10.517 10.8936 10.4311 11.3393C10.3453 11.785 10.1069 12.1869 9.75697 12.4759C9.40701 12.7649 8.96731 12.923 8.51344 12.9231H7.49657C6.97876 12.9225 6.48232 12.7165 6.11617 12.3504C5.75001 11.9842 5.54405 11.4878 5.54347 10.97V10.4615C5.54347 10.2983 5.47863 10.1418 5.36322 10.0264C5.24782 9.91099 5.09129 9.84615 4.92808 9.84615C4.76487 9.84615 4.60835 9.91099 4.49294 10.0264C4.37753 10.1418 4.3127 10.2983 4.3127 10.4615V10.97C4.31445 11.7945 4.63623 12.5861 5.21021 13.178C5.78419 13.7699 6.56555 14.1159 7.38962 14.143V15.3846C7.38962 15.5478 7.45446 15.7044 7.56986 15.8198C7.68527 15.9352 7.84179 16 8.005 16C8.16821 16 8.32474 15.9352 8.44015 15.8198C8.55555 15.7044 8.62039 15.5478 8.62039 15.3846V14.143C9.35033 14.1198 10.05 13.8458 10.6017 13.3673C11.1534 12.8888 11.5235 12.2349 11.6497 11.5156C11.7759 10.7963 11.6505 10.0554 11.2947 9.41766C10.9389 8.77991 10.3743 8.28416 9.69584 8.01378L6.77122 6.84338C6.34982 6.67478 6.00029 6.36468 5.7827 5.96636C5.56511 5.56804 5.49304 5.10637 5.57887 4.66068C5.6647 4.215 5.90308 3.81311 6.25304 3.52409C6.603 3.23507 7.0427 3.07696 7.49657 3.07692H8.51344C9.03125 3.07751 9.52769 3.28347 9.89384 3.64962C10.26 4.01577 10.466 4.51221 10.4665 5.03003V5.53846C10.4665 5.70167 10.5314 5.8582 10.6468 5.9736C10.7622 6.08901 10.9187 6.15385 11.0819 6.15385Z" fill="url(#paint0_linear_5_5387)"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_5_5387" x1="8.005" y1="0" x2="8.005" y2="16" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">В общем моя история такова: Завел 120$. Вел себя в течение недели как новичок. Баланс гонял туда-сюда. Вторую неделю отторговывал в плюс, потом сливал, чтобы показать брокеру, что я просто человек, которому везет и не везет. Спустя две недели поставил на вывод 20 баксов чтобы пройти верификацию. Пополнял с карты и все, что попросили - это фото паспорта и карту(фото и выписку). Третью неделю слил до 20 баксов. А на 4-ю начал отжимать. В итоге в первый день сделал х4,5 за 3 часа и начал по чуть-чуть выводить каждый день. По итогу сделал больше чем х2 к депозиту. 130 баксов сверху. На скриншоте все видно.</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/dabro8">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a5.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a5.jpg" alt srcset="images/a5.jpg 1x, images/a5@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Клим</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_video_5')">--}}
{{--                            <svg class="_stroke" width="12" height="14" viewbox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M0.85 0.673951L11.05 6.56292L0.85 12.4519L0.85 0.673951Z" stroke="url(#paint0_linear_14_6938)" stroke-width="1.2"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_14_6938" x1="6" y1="0" x2="6" y2="13.1258" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">С Прометеем совсем недолго работаю. Рынок в этот период оставляет желать лучшего, но даже при таких условиях вижу, что депозит растёт. Радует поддержка тренера и ребят в чате.</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/akhvostoff">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a6.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a6.jpg" alt srcset="images/a6.jpg 1x, images/a6@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Андрей <br>Хвостов</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_photo_5')">--}}
{{--                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M11.0819 6.15385C11.2451 6.15385 11.4017 6.08901 11.5171 5.9736C11.6325 5.8582 11.6973 5.70167 11.6973 5.53846V5.03003C11.6956 4.20552 11.3738 3.41389 10.7998 2.82198C10.2258 2.23006 9.44446 1.88409 8.62039 1.85698V0.615385C8.62039 0.452174 8.55555 0.295649 8.44015 0.180242C8.32474 0.064835 8.16821 0 8.005 0C7.84179 0 7.68527 0.064835 7.56986 0.180242C7.45446 0.295649 7.38962 0.452174 7.38962 0.615385V1.85698C6.65968 1.88024 5.96002 2.15417 5.40832 2.63268C4.85662 3.1112 4.48654 3.76511 4.36033 4.48443C4.23412 5.20374 4.35947 5.94458 4.71531 6.58234C5.07115 7.22009 5.63576 7.71584 6.31417 7.98622L9.23879 9.15662C9.66019 9.32522 10.0097 9.63532 10.2273 10.0336C10.4449 10.432 10.517 10.8936 10.4311 11.3393C10.3453 11.785 10.1069 12.1869 9.75697 12.4759C9.40701 12.7649 8.96731 12.923 8.51344 12.9231H7.49657C6.97876 12.9225 6.48232 12.7165 6.11617 12.3504C5.75001 11.9842 5.54405 11.4878 5.54347 10.97V10.4615C5.54347 10.2983 5.47863 10.1418 5.36322 10.0264C5.24782 9.91099 5.09129 9.84615 4.92808 9.84615C4.76487 9.84615 4.60835 9.91099 4.49294 10.0264C4.37753 10.1418 4.3127 10.2983 4.3127 10.4615V10.97C4.31445 11.7945 4.63623 12.5861 5.21021 13.178C5.78419 13.7699 6.56555 14.1159 7.38962 14.143V15.3846C7.38962 15.5478 7.45446 15.7044 7.56986 15.8198C7.68527 15.9352 7.84179 16 8.005 16C8.16821 16 8.32474 15.9352 8.44015 15.8198C8.55555 15.7044 8.62039 15.5478 8.62039 15.3846V14.143C9.35033 14.1198 10.05 13.8458 10.6017 13.3673C11.1534 12.8888 11.5235 12.2349 11.6497 11.5156C11.7759 10.7963 11.6505 10.0554 11.2947 9.41766C10.9389 8.77991 10.3743 8.28416 9.69584 8.01378L6.77122 6.84338C6.34982 6.67478 6.00029 6.36468 5.7827 5.96636C5.56511 5.56804 5.49304 5.10637 5.57887 4.66068C5.6647 4.215 5.90308 3.81311 6.25304 3.52409C6.603 3.23507 7.0427 3.07696 7.49657 3.07692H8.51344C9.03125 3.07751 9.52769 3.28347 9.89384 3.64962C10.26 4.01577 10.466 4.51221 10.4665 5.03003V5.53846C10.4665 5.70167 10.5314 5.8582 10.6468 5.9736C10.7622 6.08901 10.9187 6.15385 11.0819 6.15385Z" fill="url(#paint0_linear_5_5387)"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_5_5387" x1="8.005" y1="0" x2="8.005" y2="16" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">На понимание базовых принципов работы при должной жадности поглощения информации нужно буквально пару дней. Ещё неделя тестов. После чего 50$ день минимальный результат, который можно получать каждый рабочий день!</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/aiv555">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a7.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a7.jpg" alt srcset="images/a7.jpg 1x, images/a7@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Иван <br>Артюшин</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">Всем привет. Меня зовут Иван, меньше месяца я прохожу обучение по роботу Прометей,  на реальный счет пока не переходил, учусь на Демо счёте, уже есть первые результаты. Скрины прилагаю</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/gritsenko_vlad">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a8.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a8.jpg" alt srcset="images/a8.jpg 1x, images/a8@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Владислав <br>Гриценко</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">Я всегда ищу более короткие и более лёгкие пути к своим целям, в том числе и при зарабатывании денег. Торговая система PROMETEY позволяет начать зарабатывать быстро и при этом достаточно просто. Шикарная поддержка и обучение, все просто и понятно. Спасибо за возможность повысить качество своей жизни с помощью торгового робота</div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/Evgeny_mosienko">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a9.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a9.jpg" alt srcset="images/a9.jpg 1x, images/a9@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Евгений <br>Мосиенко</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_photo_9')">--}}
{{--                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M11.0819 6.15385C11.2451 6.15385 11.4017 6.08901 11.5171 5.9736C11.6325 5.8582 11.6973 5.70167 11.6973 5.53846V5.03003C11.6956 4.20552 11.3738 3.41389 10.7998 2.82198C10.2258 2.23006 9.44446 1.88409 8.62039 1.85698V0.615385C8.62039 0.452174 8.55555 0.295649 8.44015 0.180242C8.32474 0.064835 8.16821 0 8.005 0C7.84179 0 7.68527 0.064835 7.56986 0.180242C7.45446 0.295649 7.38962 0.452174 7.38962 0.615385V1.85698C6.65968 1.88024 5.96002 2.15417 5.40832 2.63268C4.85662 3.1112 4.48654 3.76511 4.36033 4.48443C4.23412 5.20374 4.35947 5.94458 4.71531 6.58234C5.07115 7.22009 5.63576 7.71584 6.31417 7.98622L9.23879 9.15662C9.66019 9.32522 10.0097 9.63532 10.2273 10.0336C10.4449 10.432 10.517 10.8936 10.4311 11.3393C10.3453 11.785 10.1069 12.1869 9.75697 12.4759C9.40701 12.7649 8.96731 12.923 8.51344 12.9231H7.49657C6.97876 12.9225 6.48232 12.7165 6.11617 12.3504C5.75001 11.9842 5.54405 11.4878 5.54347 10.97V10.4615C5.54347 10.2983 5.47863 10.1418 5.36322 10.0264C5.24782 9.91099 5.09129 9.84615 4.92808 9.84615C4.76487 9.84615 4.60835 9.91099 4.49294 10.0264C4.37753 10.1418 4.3127 10.2983 4.3127 10.4615V10.97C4.31445 11.7945 4.63623 12.5861 5.21021 13.178C5.78419 13.7699 6.56555 14.1159 7.38962 14.143V15.3846C7.38962 15.5478 7.45446 15.7044 7.56986 15.8198C7.68527 15.9352 7.84179 16 8.005 16C8.16821 16 8.32474 15.9352 8.44015 15.8198C8.55555 15.7044 8.62039 15.5478 8.62039 15.3846V14.143C9.35033 14.1198 10.05 13.8458 10.6017 13.3673C11.1534 12.8888 11.5235 12.2349 11.6497 11.5156C11.7759 10.7963 11.6505 10.0554 11.2947 9.41766C10.9389 8.77991 10.3743 8.28416 9.69584 8.01378L6.77122 6.84338C6.34982 6.67478 6.00029 6.36468 5.7827 5.96636C5.56511 5.56804 5.49304 5.10637 5.57887 4.66068C5.6647 4.215 5.90308 3.81311 6.25304 3.52409C6.603 3.23507 7.0427 3.07696 7.49657 3.07692H8.51344C9.03125 3.07751 9.52769 3.28347 9.89384 3.64962C10.26 4.01577 10.466 4.51221 10.4665 5.03003V5.53846C10.4665 5.70167 10.5314 5.8582 10.6468 5.9736C10.7622 6.08901 10.9187 6.15385 11.0819 6.15385Z" fill="url(#paint0_linear_5_5387)"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_5_5387" x1="8.005" y1="0" x2="8.005" y2="16" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">--}}
{{--                    Всем привет! Когда у меня был долг в 1.000.000₽, мой друг PROMETEY помог решить эту задачу 🫶--}}
{{--                    <br>Всем, кто читает мой отзыв, я от души хочу сказать, что данный продукт достоен своих денег и вашего внимания, с данным продуктом можно зарабатывать 500,1000,5000$ в месяц, доход будет зависеть только от вас.--}}
{{--                    <br>Это не кнопка бабло, тут нужна определенная сноровка, чтобы делать кеш 🫰🏼--}}
{{--                    <br>И это гораздо легче, чем вести свой малый бизнес, а доход примерно один и тот же, с прометеем даже выше 🫢--}}
{{--                    <br>Мой рекорд по доходу на Прометее 769.000₽ за месяц💣--}}
{{--                    <br>Мои слова не пусты, мои слова подтверждены фактами 📋 Малую часть выводов с моих аккаунтов смотрите на скриншотах 💸--}}
{{--                    <br>Кто хочет пообщаться со мной лично, пишите, с удовольствием отвечу на ваши вопросы 🤝--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="reviews_slide _glass">--}}
{{--                <div class="reviews_top __flex-center">--}}
{{--                    <div class="reviews_top_info __flex-align">--}}
{{--                        <a class="reviews_top_ava __icon-tg" href="https://t.me/aleksandrkorotkov">--}}
{{--                            <picture>--}}
{{--                                <source srcset="images/a10.webp" type="image/webp">--}}
{{--                                <img width="100" height="100" src="images/a10.jpg" alt srcset="images/a10.jpg 1x, images/a10@2x.jpg 2x">--}}
{{--                            </picture>--}}
{{--                        </a>--}}
{{--                        <h5 class="reviews_top_name _gr-orange">Александр <br>Коротков</h5>--}}
{{--                    </div>--}}
{{--                    <div class="reviews_top_right __flex-align">--}}
{{--                        <div class="reviews_top_right_li" onclick="modal('_photo_10')">--}}
{{--                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M11.0819 6.15385C11.2451 6.15385 11.4017 6.08901 11.5171 5.9736C11.6325 5.8582 11.6973 5.70167 11.6973 5.53846V5.03003C11.6956 4.20552 11.3738 3.41389 10.7998 2.82198C10.2258 2.23006 9.44446 1.88409 8.62039 1.85698V0.615385C8.62039 0.452174 8.55555 0.295649 8.44015 0.180242C8.32474 0.064835 8.16821 0 8.005 0C7.84179 0 7.68527 0.064835 7.56986 0.180242C7.45446 0.295649 7.38962 0.452174 7.38962 0.615385V1.85698C6.65968 1.88024 5.96002 2.15417 5.40832 2.63268C4.85662 3.1112 4.48654 3.76511 4.36033 4.48443C4.23412 5.20374 4.35947 5.94458 4.71531 6.58234C5.07115 7.22009 5.63576 7.71584 6.31417 7.98622L9.23879 9.15662C9.66019 9.32522 10.0097 9.63532 10.2273 10.0336C10.4449 10.432 10.517 10.8936 10.4311 11.3393C10.3453 11.785 10.1069 12.1869 9.75697 12.4759C9.40701 12.7649 8.96731 12.923 8.51344 12.9231H7.49657C6.97876 12.9225 6.48232 12.7165 6.11617 12.3504C5.75001 11.9842 5.54405 11.4878 5.54347 10.97V10.4615C5.54347 10.2983 5.47863 10.1418 5.36322 10.0264C5.24782 9.91099 5.09129 9.84615 4.92808 9.84615C4.76487 9.84615 4.60835 9.91099 4.49294 10.0264C4.37753 10.1418 4.3127 10.2983 4.3127 10.4615V10.97C4.31445 11.7945 4.63623 12.5861 5.21021 13.178C5.78419 13.7699 6.56555 14.1159 7.38962 14.143V15.3846C7.38962 15.5478 7.45446 15.7044 7.56986 15.8198C7.68527 15.9352 7.84179 16 8.005 16C8.16821 16 8.32474 15.9352 8.44015 15.8198C8.55555 15.7044 8.62039 15.5478 8.62039 15.3846V14.143C9.35033 14.1198 10.05 13.8458 10.6017 13.3673C11.1534 12.8888 11.5235 12.2349 11.6497 11.5156C11.7759 10.7963 11.6505 10.0554 11.2947 9.41766C10.9389 8.77991 10.3743 8.28416 9.69584 8.01378L6.77122 6.84338C6.34982 6.67478 6.00029 6.36468 5.7827 5.96636C5.56511 5.56804 5.49304 5.10637 5.57887 4.66068C5.6647 4.215 5.90308 3.81311 6.25304 3.52409C6.603 3.23507 7.0427 3.07696 7.49657 3.07692H8.51344C9.03125 3.07751 9.52769 3.28347 9.89384 3.64962C10.26 4.01577 10.466 4.51221 10.4665 5.03003V5.53846C10.4665 5.70167 10.5314 5.8582 10.6468 5.9736C10.7622 6.08901 10.9187 6.15385 11.0819 6.15385Z" fill="url(#paint0_linear_5_5387)"/>--}}
{{--                                <defs>--}}
{{--                                    <lineargradient id="paint0_linear_5_5387" x1="8.005" y1="0" x2="8.005" y2="16" gradientunits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#F8AC2D"/>--}}
{{--                                        <stop offset="1" stop-color="#DE5E2F"/>--}}
{{--                                    </lineargradient>--}}
{{--                                </defs>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="reviews_text">Хочу поблагодарить разработчиков за такую разработку. Прометеем пользуюсь уже 2 месяца. Сначала не очень получалось, но через пару недель практики втянулся и началось получаться. По итогу за 2 месяца я с помощью программы наторговал на свой долг, и перекрыл его полностью в банке. Еще раз спасибо. Теперь буду торговать на свадьбу, уверен, что за месяца 2-3 заработаю нужную сумму 💪🏻💪🏻💪🏻</div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

<div class="cta _center">
    <div class="cta_coins">
        <div class="cta_coin">
            <img width="100" height="100" src="images/coins/coin_%D1%81-2.svg" alt>
        </div>
        <div class="cta_coin _coin-up_80">
            <img width="100" height="100" src="images/coins/coin_%D1%81-1.svg" alt>
        </div>
        <div class="cta_coin">
            <img width="100" height="100" src="images/coins/coin_%D1%81-3.svg" alt>
        </div>
    </div>
    <div class="bone  __anim _anim-y">
        <h3 class="cta_title">{{$settings['block_12_title']}}</h3>
        <div class="cta_btn">
            <div class="__btn _icon" onclick="location.href = 'https://lk.prometey.trade/registration'">
                <span class="__icon-arrow">{{$settings['block_12_button_text']}}</span>
            </div>
        </div>
    </div>
</div>

<div class="up" onclick="scroll_to('html')"></div>

<!-- Footer. -->
<div class="footer">
    <div class="footer_bg">
        <picture>
            <source srcset="images/footer_bg.webp" type="image/webp">
            <img width="100" height="100" src="https://prometey.trade/images/footer_bg.jpg" alt srcset="https://prometey.trade/images/footer_bg.jpg 1x, https://prometey.trade/images/footer_bg@2x.jpg 2x">
        </picture>
    </div>
    <div class="footer_fire">
        <picture>
            <source srcset="images/main_fire.webp" type="image/webp">
            <img width="100" height="100" src="https://prometey.trade/images/main_fire.jpg" alt srcset="https://prometey.trade/images/main_fire.jpg 1x, https://prometey.trade/images/main_fire@2x.jpg 2x">
        </picture>
    </div>
    <div class="bone">
        <div class="footer_net __flex-center">
            <div class="footer_logo  __anim _anim-x" onclick="scroll_to('html')">
                <img width="100" height="100" src="images/svg/logo.svg" alt>
            </div>
            <a class="footer_tg __icon-tg __anim _anim-y" href="{{$settings['footer_tg_link']}}" target="_blank">Наш телеграм канал</a>
            <a class="footer_mail  __anim _anim-y" href="mailto:support@prometey.trade">{{$settings['footer_email']}}</a>
        </div>
        <hr>
        <div class="footer_net __flex-center">
            <div class="footer_cop  __anim _anim-x">{{$settings['footer_other_text']}}</div>
            <a class="footer_policy __hover_line  __anim _anim-x_r" href="https://prometey.trade/privacy" target="_blank">Политика конфиденциальности</a>
        </div>
    </div>
</div>
<!-- Footer. -->

<div class="modal _sign">
    <div class="modal_wrapper _glass">
        <div class="modal_close _close"></div>
        <div class="modal_scroll">
            <h4>
                Заполните простую форму,
                <br>
                <span class="_gr-orange">чтобы получить доступ</span>
            </h4>
            <form>
                <input type="text" placeholder="Ваше имя">
                <input type="email" placeholder="Ваш email">
                <button class="btn">Получить доступ</button>

            </form>
        </div>
    </div>
    <div class="modal_viel"></div>
</div>

<script src="js/libraries/jquery.min.js"></script>
<script src="js/libraries/slick.min.js"></script>
<script src="js/libraries/lax.min.js"></script>
<script src="js/libraries/jquery.overlayScrollbars.js"></script>
<script src="js/main%EF%B9%9633.js"></script>

</body>
</html>

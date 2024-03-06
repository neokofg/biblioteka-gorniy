<!DOCTYPE html>
<html lang="ru">

<x-head></x-head>

<body>
    
    <!-- Шапка -->
    <x-navbar>
    </x-navbar>
    <!-- Шапка -->
    @if (\Session::has('success'))
    <div class="container" style="margin-top: 24px;">
        <div class="panel" style="background-color: hsla(147, 68%, 50%, 0.26);">
            <div class="panel-body panel-body-small">
                <div class="text-small">
                    <img src="/images/icons/bx-check-circle.svg.svg">{!! \Session::get('success') !!}
                </div>
            </div>
        </div>
    </div>
@endif
    @if($errors->any())
        <div class="container" style="margin-top: 24px;">
        <div class="panel" style="background-color: hsla(0, 80%, 46%, 0.26);">
            <div class="panel-body panel-body-small">
                <div class="text-small">
                    <img src="/images/icons/bx-error-circle.svg.svg"> Ошибка:
                    <ul style="margin-left: 20px;">
                        @foreach($errors->all() as $error)
                		<li>{{$error}}</li>
        		@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
        <div class="container" style="margin-top: 24px;">

        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider" role="region" aria-label="карусель">
            

            
            <div class="rounded-image w-slider-mask" id="w-slider-mask-1">
                <div class="w-slide" aria-label="1 из 2" role="group" style="transform: translateX(0px); opacity: 1;">
                    <div class="section hero-panel">
                        <div class="background-image-wrapper">
                            <div class="hero-bg-1"></div>
                        </div>
                        <div class="panel-body align-content-center">
                            <div class="content-width-extra-large">
                                <h5 class="panel-subheading">МБУ "МЦБС"</h5>
                                <h1 class="display-heading-2">Горнайдааҕы кииннэммит библиотечнай<br>ситим</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($mainvideo->take(3) as $video)
                <?php if($video->youtube == 0){}else{ 
                    
                        $url = $video->youtube;
                        if (str_contains($url, '&')) {
                            $url = explode('&', $url);
                            $url = $url[0];
                        }
                        $substr = "=";
                        if (strpos($url, $substr) !== false) {
                            $url_arr  = explode("=", $url);
                            $video_id = $url_arr[1];
                        } else {
                            $url_arr  = explode("/", $url);
                            $video_id = $url_arr[3];
                        } }?>
                <div class="w-slide" aria-label="2 из 2" role="group" aria-hidden="true" style="transform: translateX(0px); opacity: 1; overflow:hidden;">
                    <div class="section hero-panel">
                        <div class="background-image-wrapper">
                            @if($video->youtube == 0)
                            @if(Auth::check())
			                @if(Auth::user()->role)
                                <div class="hdb">
                                    <div class="header-delete-btn ">
                                        <form action="{{route('DeleteMainVideo')}}" method="GET">
                                            @csrf
                                            <input type="text" name="id" value="{{$video->id}}" style="display:none">
                                            <input type="submit" id="h-del" value="Удалить" class="button-small w-button">
                                        </form>
                                    </div>
                                </div>
                            @endif
                            @endif
                            <?php 
                            $videoexplode = $video->video;
                            $videoexploded = explode('.', $videoexplode);
                            $mime = $videoexploded[1]
                            ?>
                            @if($mime == 'webm' OR $mime == 'mp4' OR $mime == 'avi')
                                <video width='100%' height='100%' loop autoplay muted>
                                  <source style="width:100%;height:100%" src="/images/{{$video->video}}">
                                  Your browser does not support the video tag.
                                </video>
                            @else
                            <img src="/images/{{$video->video}}" style="width:100%;height:100%">
                            @endif
                            @else
                            @if(Auth::check())
			                @if(Auth::user()->role)
                            <div class="hdb">
                                    <div class="header-delete-btn ">
                                        <form action="{{route('DeleteMainVideo')}}" method="GET">
                                            @csrf
                                            <input type="text" name="id" value="{{$video->id}}" style="display:none">
                                            <input type="submit" id="h-del" value="Удалить" class="button-small w-button">
                                        </form>
                                    </div>
                                </div>
                            @endif
                            @endif
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$video_id}}?rel=0&controls=1&modestbranding=0&autoplay=1&loop=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                        </div>
                        <div class="panel-body align-content-center" style="pointer-events: none;">
                            <div class="content-width-extra-large">
                                <h5 style="opacity: 0;" class="panel-subheading">МБУ "МЦБС"</h5>
                                <h1 style="opacity: 0;" class="display-heading-2">Горнайдааҕы кииннэммит библиотечнай<br>ситим</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <style>
                    #myVideo {
                        position: fixed;
                        right: 0;
                        bottom: 0;
                        min-width: 100%;
                        min-height: 100%;
                    }
                </style>



                <div aria-live="off" aria-atomic="true" class="w-slider-aria-label" data-wf-ignore=""></div>
            </div>
            <div class="slider-navigation-previous button-circle bg-white w-slider-arrow-left" role="button" tabindex="0" aria-controls="w-slider-mask-1" aria-label="предыдущий слайд"><img src="https://assets.website-files.com/5dcb2e333e05bec4ef2fee2f/5de4a87c747d417a2e7dae53_icon-chevron-left.svg" alt="" class="button-circle-icon"></div>
            <div class="slider-navigation-next button-circle bg-white w-slider-arrow-right" role="button" tabindex="0" aria-controls="w-slider-mask-1" aria-label="следующий слайд"><img src="https://assets.website-files.com/5dcb2e333e05bec4ef2fee2f/5de4a87d3719a11f82ef8c37_icon-chevron-right.svg" alt="" class="button-circle-icon"></div>
            <div class="content-on-image-slider-navigation w-slider-nav w-round">
                <div class="w-slider-dot w-active" data-wf-ignore="" aria-label="Показать слайд 1 из 2" aria-selected="true" role="button" tabindex="0"></div>
                <div class="w-slider-dot" data-wf-ignore="" aria-label="Показать слайд 2 из 2" aria-selected="false" role="button" tabindex="-1"></div>
            </div>
        </div>


    </div>

    <div class="container">
        <div class="card-about">
            <div class="columns-ab w-row">
                <div class="column-ab w-col w-col-6">
                    <div class="tag-about">
                        <div class="text-block">О бибиотеке</div>
                    </div>
                    <div class="c-h-text">Центральная библиотека<br>имени П.Д.Аввакумова</div>
                    <div class="c-p-text">Берет свое начало в 1936 году. Она координирует деятельность филиальных библиотек, обеспечивает методическое руководство, комплектует фонды, организует подписку на периодические издания.<br><br>В настоящее время предоставляет услуги
                        информационного и досугового характера. Миссия библиотеки заключается в создании единого информационного культурно-образовательного пространства, обеспечении доступными ресурсами для интеллектуального и творческого развития и самообразования
                        читателей.
                    </div>
                </div>
                <div class="column-2-ab w-col w-col-6"><img src="/images/main/1.png" loading="lazy" alt=""></div>
            </div>
        </div>
        <div class="card-media">
            <div class="w-row">
                <div class="xcvxcv w-col w-col-6">
                    <div class="crd-l">
                        <div class="tag-events">
                            <div class="text-block-2">Медиа</div>
                        </div>
                        <div class="media-h">Мероприятия</div>
                        <div class="media-p">Наши мероприятия</div>
                        <a class="link-newd" href="{{route('events')}}">Перейти</a>
                        <div class="crd-pic"><img src="/images/main/2.png" loading="lazy" alt=""></div>
                    </div>
                </div>
                <div class="column w-col w-col-6">
                    <div class="crd-l">
                        <div class="tag-events-1">
                            <div class="text-block-3">Медиа</div>
                        </div>
                        <div class="media-h">Новости</div>
                        <div class="media-p">Последние обновления</div>
                        <a class="link-newd" href="{{route('news')}}">Перейти</a>
                        <div class="crd-pic-1"><img src="/images/main/3.png" loading="lazy" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-reader">
            <div class="w-row">
                <div class="column-4 w-col w-col-6">
                    <div class="crd-reader-yell-pic"><img src="/images/main/4.png" loading="lazy" alt=""></div>
                </div>
                <div class="column-3 w-col w-col-6">
                    <div class="tag-reader">
                        <div>Социальная</div>
                    </div>
                    <div class="media-h">Читателям</div>
                    <div class="media-p">Уголок читателя.</div>
                    <a class="link-newd" href="{{route('readers')}}">Перейти</a>
                </div>
            </div>
        </div>
        <div class="card-video-proj">
            <div class="w-row">
                <div class="column-6 w-col w-col-8">
                    <div class="crd-videos">
                        <div class="tag-grn">
                            <div class="text-block-4">Медиа</div>
                        </div>
                        <div class="media-h">Видеоконтент библиотеки</div>
                        <a class="link-newd" href="videos">Перейти</a>
                        <div class="crd-pic-grn"><img src="/images/main/5.png" loading="lazy" alt=""></div>
                    </div>
                </div>
                <div class="column-5 w-col w-col-4">
                    <div class="crd-projects">
                        <div class="tag-proj">
                            <div>Социальная</div>
                        </div>
                        <div class="media-h">Проекты библиотеки</div>
                        <a class="link-newd" href="{{route('projects')}}">Перейти</a><img src="/images/main/6.png" loading="lazy" alt=""></div>
                </div>
            </div>
        </div>
        <div class="card-cont-live">
            <div class="w-row">
                <div class="column-7 w-col w-col-4">
                    <div class="qcont">
                        <div class="asdasdasd w-row">
                            <div class="w-col w-col-6">
                                <div class="tag-contact">
                                    <div class="text-block-5">Наши контакты</div>
                                </div>
                            </div>
                            <div class="asdasd w-col w-col-6">
                                <a class="link-newd" href="{{route('contacts')}}">Перейти</a>
                            </div>
                        </div><img src="/images/main/7.png" loading="lazy" alt=""></div>
                </div>
                <div class="column-8 w-col w-col-8">
                    <div class="div-block-2">
                        <div class="w-row">
                            <div class="w-col w-col-8">
                                <div class="tag-live">
                                    <div>Социальная</div>
                                </div>
                                <div class="media-h">Жизнь библиотеки</div>
                                <div class="media-p">Новости и блог нашей библиотеки.</div>
                                <a class="link-newd" href="{{route('live')}}">Перейти</a>
                            </div>
                            <div class="w-col w-col-4"><img src="/images/main/8.png" loading="lazy" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <style>
            .bf-87__decor{
                width: 620px;
                overflow: hidden;
                border-radius: 8px;
            }
            #js-show-iframe-wrapper {
                margin-top: 120px;
                margin-bottom: 160px;
            }
            @media screen and (max-width: 632px) {
              .bf-87__text{
                width:500px;
              }
            }
            @media screen and (max-width: 567px) {
              .bf-87__text{
                width:400px;
              }
            }
            @media screen and (max-width: 453px) {
              .bf-87__text{
                width:350px;
              }
            }
            @media screen and (max-width: 400px) {
              .bf-87__text{
                width:300px;
              }
            }
            @media screen and (max-width: 397px) {
              .bf-87__text{
                width:210px;
              }
            }
        </style>
        <script>
    
(function() { "use strict"; function ownKeys(e, t) { var n = Object.keys(e); if (Object.getOwnPropertySymbols) { var r = Object.getOwnPropertySymbols(e); if (t) r = r.filter(function(t) { return Object.getOwnPropertyDescriptor(e, t).enumerable }); n.push.apply(n, r) } return n } function _objectSpread(e) { for (var t = 1; t < arguments.length; t++) { var n = null != arguments[t] ? arguments[t] : {}; if (t % 2) ownKeys(Object(n), true).forEach(function(t) { _defineProperty(e, t, n[t]) }); else if (Object.getOwnPropertyDescriptors) Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)); else ownKeys(Object(n)).forEach(function(t) { Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t)) }) } return e } function _defineProperty(e, t, n) { if (t in e) Object.defineProperty(e, t, { value: n, enumerable: true, configurable: true, writable: true }); else e[t] = n; return e } var POS_PREFIX_87 = "--pos-banner-fluid-87__", posOptionsInitialBanner87 = { background: "#FFFFFF", "grid-template-columns": "1fr 1fr", "grid-template-rows": "300px", "max-width": "1422px", "text-font-size": "32px", "text-small-font-size": "18px", "text-margin": "0 0px 12px 0", "description-margin": "0 0 24px 0", "button-wrap-max-width": "118px", "bg-url": "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-0.svg')", "bg-url-position": "center top", "content-padding": "42px 50px", "logo-wrap-padding": "20px 16px 16px", "logo-width": "78px", "logo-wrap-top": "0", "slogan-font-size": "15px", "logo-box-shadow": "none", "text-small-margin": "0px 150px 0px 0", "content-grid-row": 1 }, setStyles = function(e, t) { var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : POS_PREFIX_87; Object.keys(e).forEach(function(r) { t.style.setProperty(n + r, e[r]) }) }, removeStyles = function(e, t) { var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : POS_PREFIX_87; Object.keys(e).forEach(function(e) { t.style.removeProperty(n + e) }) }; function changePosBannerOnResize() { var e = document.documentElement, t = _objectSpread({}, posOptionsInitialBanner87), n = document.getElementById("js-show-iframe-wrapper"), r = n ? n.offsetWidth : document.body.offsetWidth; if (r > 300) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-1.svg')", t["grid-template-rows"] = "244px auto", t["grid-template-columns"] = "53% 1", t["text-font-size"] = "14px"; if (r > 360) t["description-margin"] = "0 0 20px 0", t["content-padding"] = "20px 55px 20px 24px", t["button-wrap-max-width"] = "118px", t["grid-template-columns"] = "53% 1", t["text-font-size"] = "16px"; if (r > 415) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-2.svg')", t["content-padding"] = "36px 25px 52px 24px", t["grid-template-columns"] = "53% 1", t["text-font-size"] = "18px"; if (r > 568) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83.svg')", t["text-font-size"] = "24px", t["text-small-font-size"] = "14px", t["grid-template-columns"] = "53% 1", t["grid-template-rows"] = "332px", t["content-grid-row"] = "1", t["content-padding"] = "54px 28px", t["description-margin"] = "0 0 24px 0", t["button-wrap-max-width"] = "245px"; if (r > 783) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-3.svg')", t["grid-template-columns"] = "1fr 1fr", t["grid-template-rows"] = "268px", t["text-small-font-size"] = "14px", t["content-padding"] = "40px 24px 40px 50px", t["button-wrap-max-width"] = "118px", t["text-font-size"] = "24px"; if (r > 991) t["grid-template-columns"] = "1fr 1fr"; if (r > 1098) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-4.svg')", t["grid-template-rows"] = "300px", t["text-font-size"] = "32px", t["text-small-font-size"] = "18px", t["content-padding"] = "42px 50px", t["logo-width"] = "78px", t["slogan-font-size"] = "15px", t["logo-wrap-padding"] = "20px 16px 16px", t["text-small-margin"] = "0px 150px 0px 0"; if (r > 1400) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-5.svg')", t["max-width"] = "1422px", t["grid-template-columns"] = "1fr 1fr", t["content-padding"] = "34px 0px 34px 100px", t["logo-box-shadow"] = "0px 1px 4px #E3EBFC, 0px 24px 48px rgba(230, 235, 245, 0.4)", t["text-small-margin"] = "0", t["text-margin"] = "0 140px 12px 0"; setStyles(t, e) } changePosBannerOnResize(), window.addEventListener("resize", changePosBannerOnResize), window.onunload = function() { var e = document.documentElement, t = _objectSpread({}, posOptionsInitialBanner87); window.removeEventListener("resize", changePosBannerOnResize), removeStyles(t, e) }; })()
</script>
    <div id="js-show-iframe-wrapper" bis_skin_checked="1" class="">
        <div class="pos-banner-fluid bf-87" bis_skin_checked="1">
    
            <div class="bf-87__decor" bis_skin_checked="1">
                <div class="bf-87__logo-wrap" bis_skin_checked="1">
                    <img class="bf-87__logo" src="https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg" alt="Госуслуги">
                    <div class="bf-87__slogan" bis_skin_checked="1">Решаем вместе</div>
                </div>
            </div>
            <div class="bf-87__content" bis_skin_checked="1">
                <div class="bf-87__description" bis_skin_checked="1">
                    <span class="bf-87__text">
                Сложности с получением «Пушкинской карты» или приобретением билетов? Знаете, как улучшить работу учреждений культуры?
              </span>
            <span class="bf-87__text bf-87__text_small">
                Напишите&nbsp;— решим!
              </span>
          </div>
    
          <div class="bf-87__bottom-wrap" bis_skin_checked="1">
            <div class="bf-87__btn-wrap" bis_skin_checked="1">
              <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
              <button class="pos-banner-btn_2" type="button">Написать
              </button>
            </div>
          </div>
        </div>
    
      </div>
     </div>
    <!-- FAQ -->
<div class="section" style="margin-bottom: 144px;">
        <div class="container grid-container">
            <div class="section-title">
                <h5 class="panel-subheading text-primary-1">Часто задаваемые вопросы</h5>
                <h3 class="display-heading-4 no-bottom-space">FAQ</h3>
            </div>

            <div class="accordion-list">
                <div class="panel">
                    <div class="panel-body accordion">
                        <div class="accordion-head">
                            <h5 class="accordion-head-text" style="color: rgba(42, 51, 50, 0.5);">На какой срок мож но взять книги?</h5>
                            <div class="icon-circle-small bg-gray-3"><img src="/images/icons/faq.svg" alt="" class="icon-small"></div>
                        </div>
                        <div class="accordion-body" style="display: none; opacity: 1;">
                            <div>- На дом можно взять одновременно не более 5 книг или других
                                изданий
                                сроком на 15 дней.<br>
                                - Редкие, единственные экземпляры на дом не выдаются. Ими можно
                                .пользоваться в читальном зале.</div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body accordion">
                        <div class="accordion-head">
                            <h5 class="accordion-head-text" style="color: rgba(42, 51, 50, 0.5);">Как продлить срок пользования книгой?</h5>
                            <div class="icon-circle-small bg-gray-3"><img src="/images/icons/faq.svg" alt="" class="icon-small"></div>
                        </div>
                        <div class="accordion-body" style="display: none; opacity: 0;">
                            <div>- Если ты не успел прочитать книги, срок пользования можно продлить
                                еще
                                на 15 дней.<br>
                                - Чтобы продлить срок пользования книгой, нужно прийти в
                                библиотеку или
                                позвонить по телефону.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body accordion">
                        <div class="accordion-head">
                            <h5 class="accordion-head-text" style="color: rgba(42, 51, 50, 0.5);">Что делать в случае утраты библиотечной книги?</h5>
                            <div class="icon-circle-small bg-gray-3"><img src="/images/icons/faq.svg" alt="" class="icon-small"></div>
                        </div>
                        <div class="accordion-body" style="display: none; opacity: 0;">
                            <div>- Если библиотечная книга потерялась, ее можно заменить другой
                                равноценной или возместить её стоимость.</div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body accordion">
                        <div class="accordion-head">
                            <h5 class="accordion-head-text" style="color: rgba(42, 51, 50, 0.5);">Обязанности читателя</h5>
                            <div class="icon-circle-small bg-gray-3"><img src="/images/icons/faq.svg" alt="" class="icon-small"></div>
                        </div>
                        <div class="accordion-body" style="display: none; opacity: 0;">
                            <div>- соблюдать Правила пользования библиотекой<br>
                                - бережно относиться к книгам и журналам из фонда библиотеки<br>
                                - при получении литературы тщательно её просматривать и об
                                обнаруженных
                                дефектах сообщать библиотекарю<br>
                                - строго соблюдать сроки возврата книг и журналов, ведь они нужны
                                другим ребятам<br>
                                - при посещении отделов библиотеки сдавать верхнюю одежду,
                                портфели и
                                сумки в гардероб<br>
                                - в залах библиотеки соблюдать тишину и чистоту<br>
                                - при систематическом нарушении Правил библиотеки читатель теряет
                                право пользоваться ее услугами.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ -->

    <!-- Футер -->
    <div class="footer wf-section">
        <div class="container">
            <div class="panel">
                <div class="panel-body footer-1-panel-body">
                    <div class="footer-3-top-row">
                        <div class="footer-3-left-column">
                            <div class="footer-contact-methods">
                                <div>
                                    <h5>Контакты</h5>
                                    <div>
                                        <div>+7 (41131) 41292</div><a href="mailto:berlib@list.ru">berlib@list.ru</a></div>
                                </div>
                                <div>
                                    <h5>Посетите нас</h5>
                                    <div>
                                        <div>678030<br> Республика Саха, Горный район<br> с. Бердигестях, ул. Ленина д. 8 А</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-layout-grid vertical-menu-grid"><a href="/" class="text-link">Главная</a><a href="news" class="text-link">Новости</a><a href="events" class="text-link">Мероприятия</a><a href="documents" class="text-link">Документы</a><a href="contacts" class="text-link">Контакты</a></div>
                            <div class="w-layout-grid vertical-menu-grid" id="ft-two">
                                <a href="projects" class="text-link">Проекты</a>
                                <a href="readers" class="text-link">Читателем</a>
                                <a href="videos" class="text-link">Видео</a>
                                <a href="live" class="text-link">Жизнь бибиотеки</a>
                                <a href="brandbook" class="text-link">Брендбук</a>
                                <a href="history" class="text-link">История</a>
                            </div>
                        </div>
                        <div class="simbioss">
                            Разработка и Дизайн:<br>
                            <div class="simbios">
                                <a target="_blank" href="https://simbios.agency">
                                    <br>
                                    <img src="/images/icons/simbios.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-1-bottom-row">
                        <!-- <div class="text-small">© Горнайдааҕы Кииннэммит Библиотечнай Ситим •&nbsp;Разработано <a href="https://simbios.agency" target="_blank">Simbios | Digital Agency</a></div> -->
                        <div class="text-small">© Горнайдааҕы Кииннэммит Библиотечнай Ситим<br>Использование материалов сайта согласуется с администрацией учреждения.</div>
                        <div class="social-list">
                            <a target="_blank" href="https://www.youtube.com/channel/UCWMNEbsL2EN7Qtp2mcJ_HWA" class="social-link-item w-inline-block"><img src="/images/icons/youtube.svg" alt=""></a>
                            <a target="_blank" href="https://vk.com/gornylibrary" class="social-link-item w-inline-block"><img src="/images/icons/vk.svg" alt=""></a>
                            <a target="_blank" href="https://t.me/berlib22" class="social-link-item w-inline-block"><img src="/images/icons/telegram.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Футер -->
    </div>
    
      
    <!-- СКРИПТЫ -->
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
 <script>Widget("https://pos.gosuslugi.ru/form", 352763)</script>
    <!-- СКРИПТЫ -->
</body>

</html>
<!DOCTYPE html>
<html lang="ru">

<x-head></x-head>

<body>
    
    <!-- Шапка -->
    <x-navbar>
    </x-navbar>
    <!-- Шапка -->
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

                <div class="w-slide" aria-label="2 из 2" role="group" aria-hidden="true" style="transform: translateX(0px); opacity: 1; overflow:hidden;">
                    <div class="section hero-panel">
                        <div class="background-image-wrapper">
                            <video id="myVideo" style="pointer-events: none;" loop="loop" autoplay muted controls="false" poster="/images/head.jpg">
                                    <source src="/images/video_2.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером. 
                                </video>
                        </div>
                        <div class="panel-body align-content-center" style="pointer-events: none;">
                            <div class="content-width-extra-large">
                                <h5 style="opacity: 0;" class="panel-subheading">МБУ "МЦБС"</h5>
                                <h1 style="opacity: 0;" class="display-heading-2">Горнайдааҕы кииннэммит библиотечнай<br>ситим</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-slide" aria-label="3 из 3" role="group" aria-hidden="true" style="transform: translateX(0px); opacity: 1; overflow:hidden;">
                    <div class="section hero-panel">
                        <div class="background-image-wrapper">
                            <video id="myVideo" style="pointer-events: none;" loop="loop" autoplay muted controls="false" poster="/images/head.jpg">
                                    <source src="/images/video_1.webm" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером. 
                                </video>
                        </div>
                        <div class="panel-body align-content-center" style="pointer-events: none;">
                            <div class="content-width-extra-large">
                                <h5 style="opacity: 0;" class="panel-subheading">МБУ "МЦБС"</h5>
                                <h1 style="opacity: 0;" class="display-heading-2">Горнайдааҕы кииннэммит библиотечнай<br>ситим</h1>
                            </div>
                        </div>
                    </div>
                </div>


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

    <!-- Заголовок -->
    <!--<div>-->
    <!--    <div class="container">-->
    <!--        <div class="panel section hero-panel">-->
    <!--            <div class="background-image-wrapper">-->
    <!--                <div class="hero-bg-1"></div>-->
    <!--            </div>-->
    <!--            <div class="panel-body align-content-center">-->
    <!--                <div class="content-width-extra-large">-->
    <!--                    <h5 class="panel-subheading">МБУ "МЦБС"</h5>-->
    <!--                    <h1 class="display-heading-2">Горнайдааҕы кииннэммит библиотечнай<br>ситим</h1>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Заголовок -->

    <!-- О бибиотеке -->
    <div>
        <div class="container">
            <div class="panel section">
                <div class="panel-body align-content-center">
                    <div class="center-content content-width-medium"><img src="/images/icons/kvk.svg" alt="" class="space-bottom">
                        <div class="display-heading-4" id="abt">Центральная библиотека имени<br><span class="text-primary-1">П.Д. Аввакумова</span></div>

                        <div class="text-lead-xs">Берет свое начало в 1936 году. Она координирует деятельность филиальных библиотек, обеспечивает методическое руководство, комплектует фонды, организует подписку на периодические издания. В настоящее время Центральная библиотека
                            — многофункциональный центр, который предоставляет услуги информационного и досугового характера. Миссия библиотеки заключается в создании единого информационного культурно-образовательного пространства, обеспечении доступными
                            ресурсами для интеллектуального и творческого развития и самообразования читателей.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- О бибиотеке -->

    <!-- Цифры библиотеки -->
    <div class="section">
        <div class="container grid-container">
            <div class="content-width-extra-large section-title">
                <h3 class="large-heading display-inline">Главное богатство библиотеки —</h3>
                <h3 class="large-heading display-inline text-gray-4" style="color: #2a323552">ценные книги и читатели</h3>
            </div>
            <div class="content-width-extra-large">
                <div class="vertical-metrics-grid">
                    <div data-w-id="cce840ac-5ded-1835-27a0-06152fa72834" class="panel bg-gradient-9" style="will-change: opacity, transform; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); transform-style: preserve-3d;">
                        <div class="panel-body panel-body-large">
                            <div class="metric-row">
                                <div class="display-heading-4 no-bottom-space" style="color: #fff">27.856</div>
                                <div class="text-lead horizontal-metric-text" style="color: #fff">В нем хранится около экземпляров</div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="2be7494d-8afe-b29f-c81b-0588b94b743c" class="panel bg-gradient-6-reverse" style="will-change: opacity, transform; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); transform-style: preserve-3d;">
                        <div class="panel-body panel-body-large">
                            <div class="metric-row">
                                <div class="display-heading-4 no-bottom-space" style="color: #fff">2.500+</div>
                                <div class="text-lead horizontal-metric-text" style="color: #fff">Услугами библиотеки ежегодно пользуются более</div>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="a629d19e-835c-ef2c-f392-b584049b3ddf" class="panel bg-gradient-3" style="will-change: opacity, transform; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg); transform-style: preserve-3d;">
                        <div class="panel-body panel-body-large">
                            <div class="metric-row">
                                <div class="display-heading-4 no-bottom-space" style="color: #fff">108.000</div>
                                <div class="text-lead horizontal-metric-text" style="color: #fff">Документов и материалов.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Цифры библиотеки -->

    <!-- Новости -->
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div class="section-title">
                    <h5 class="panel-subheading text-primary-1">Последние</h5>
                    <h3 class="display-heading-4 no-bottom-space">Новости</h3>
                </div>
                <div role="list" class="blog-grid w-dyn-items">
                    <!-- Запись -->
                    @foreach($news->take(3) as $onenews)
                    <div role="listitem" class="blog-grid-item w-dyn-item">
                        <div class="panel">
                            <a href="{{route('NewsLink',['id' => $onenews->id])}}" class="panel-image-link w-inline-block"><img src="/images/{{$onenews->image}}" class="panel-top-image"></a>
                            <div class="panel-body panel-body-small">
                                <a href="{{route('NewsLink',['id' => $onenews->id])}}" class="w-inline-block">
                                    <h4 class="medium-heading">{{Str::limit($onenews->name, 50, ' ...')}}</h4>

                                        <div class="text-lead-news">{{Str::limit($onenews->description, 115, ' ...')}}</div>
                                </a>
                                <div class="blog-panel-foot">
                                    <div class="blog-panel-meta-text">
                                        <div>{{$onenews->created_at}}</div>
                                    </div>
                                    <a style="background-color:#3c5ccf; color: #ffffff;" href="{{route('NewsLink',['id' => $onenews->id])}}" class="badge w-inline-block">
                                            <div>Читать</div>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Запись -->
                </div>
                <a href="{{route('news')}}" class="button-large-outline w-button">Показать все</a>
            </div>
        </div>
    </div>
    <!-- Новости -->
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
        
        
    </style>
    
    <div id='js-show-iframe-wrapper'>
    <div class='pos-banner-fluid bf-87'>

        <div class='bf-87__decor'>
            <div class='bf-87__logo-wrap'>
                <img class='bf-87__logo' src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg' alt='Госуслуги' />
                <div class='bf-87__slogan'>Решаем вместе</div>
            </div>
        </div>
        <div class='bf-87__content'>
            <div class='bf-87__description'>
                <span class='bf-87__text'>
            Сложности с получением «Пушкинской карты» или приобретением билетов? Знаете, как улучшить работу учреждений культуры?
          </span >
        <span class='bf-87__text bf-87__text_small'>
            Напишите&nbsp;— решим!
          </span >
      </div >

      <div class='bf-87__bottom-wrap'>
        <div class='bf-87__btn-wrap'>
          <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
          <button
            class='pos-banner-btn_2'
            type='button'
          >Написать
          </button >
        </div >
      </div>
    </div >

  </div >
</div >

    <!-- Мероприятия -->
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div class="section-title">
                    <h5 class="panel-subheading text-primary-1">Последние</h5>
                    <h3 class="display-heading-4 no-bottom-space">Мероприятия</h3>
                </div>
                <div role="list" class="blog-grid w-dyn-items">
                    @foreach($events->take(3) as $event)
                    <div role="listitem" class="blog-grid-item w-dyn-item">
                        <div class="panel">
                            <a href="{{route('EventsLink',['id' => $event->id])}}" class="panel-image-link w-inline-block"><img src="/images/{{$event->image}}" class="panel-top-image"></a>
                            <div class="panel-body panel-body-small">
                                <a href="{{route('EventsLink',['id' => $event->id])}}" class="w-inline-block">
                                    <h4 class="medium-heading">{{Str::limit($event->name, 50, ' ...')}}</h4>

                                        <div class="text-lead-news">{{Str::limit($event->description, 115, ' ...')}}</div>
                                </a>
                                <div class="blog-panel-foot">
                                    <div class="blog-panel-meta-text">
                                        <div>{{$event->date}}</div>
                                        <!-- <div class="row">
                                            <div>By&nbsp;</div>
                                            <div class="blog-post-panel-author">Luke Hansen</div>
                                        </div> -->
                                    </div>
                                    <a style="background-color:#3ccf91" class="badge w-inline-block">
                                        <div>{{$event->time   }}</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{route('events')}}" class="button-large-outline w-button details">Показать все</a>
            </div>
        </div>
    </div>
    <!-- Мероприятия -->
    <!-- Проекты -->
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div class="section-title">
                    <h5 class="panel-subheading text-primary-1">Последние</h5>
                    <h3 class="display-heading-4 no-bottom-space">Проекты</h3>
                </div>
                <div role="list" class="blog-grid w-dyn-items">
                    <!-- Запись -->
                    @foreach($projects->take(3)  as $project)
                    <div role="listitem" class="blog-grid-item w-dyn-item">
                        <div class="panel">
                            <a href="{{route('ProjectsLink',['id' => $project->id])}}" class="panel-image-link w-inline-block"><img src="/images/{{$project->image}}" class="panel-top-image"></a>
                            <div class="panel-body panel-body-small">
                                <a href="{{route('ProjectsLink',['id' => $project->id])}}" class="w-inline-block">
                                    <h4 class="medium-heading">{{Str::limit($project->name, 50, ' ...')}}</h4>

                                        <div class="text-lead-news">{{Str::limit($project->description, 115, ' ...')}}</div>
                                </a>
                                <div class="blog-panel-foot">
                                    <div class="blog-panel-meta-text">
                                        <div>{{$project->date}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Запись -->
                </div>
                <a href="{{route('projects')}}" class="button-large-outline w-button">Показать все</a>
            </div>
        </div>
    </div>
    <!-- Проекты -->
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
      
    <!-- СКРИПТЫ -->
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
    <script>
(function(){
"use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);if(t)r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,r)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_87="--pos-banner-fluid-87__",posOptionsInitialBanner87={background:"#FFFFFF","grid-template-columns":"100%","grid-template-rows":"264px auto","max-width":"1422px","text-font-size":"20px","text-small-font-size":"14px","text-margin":"0 0px 12px 0","description-margin":"0 0 24px 0","button-wrap-max-width":"245px","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-0.svg')","bg-url-position":"center top","content-padding":"40px 24px 48px","logo-wrap-padding":"12px 14px 10px 12px","logo-width":"65px","logo-wrap-top":"0","slogan-font-size":"12px","logo-box-shadow":"none","text-small-margin":0},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_87;Object.keys(e).forEach(function(r){t.style.setProperty(n+r,e[r])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_87;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner87),n=document.getElementById("js-show-iframe-wrapper"),r=n?n.offsetWidth:document.body.offsetWidth;if(r>300)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-1.svg')",t["grid-template-rows"]="244px auto";if(r>360)t["description-margin"]="0 0 20px 0",t["content-padding"]="20px 55px 20px 24px",t["button-wrap-max-width"]="118px";if(r>415)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-2.svg')",t["content-padding"]="36px 25px 52px 24px";if(r>568)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83.svg')",t["text-font-size"]="24px",t["text-small-font-size"]="14px",t["grid-template-columns"]="53% 47%",t["grid-template-rows"]="332px",t["content-grid-row"]="1",t["content-padding"]="54px 28px",t["description-margin"]="0 0 24px 0",t["button-wrap-max-width"]="245px";if(r>783)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-3.svg')",t["grid-template-columns"]="1fr 1fr",t["grid-template-rows"]="268px",t["text-small-font-size"]="14px",t["content-padding"]="40px 24px 40px 50px",t["button-wrap-max-width"]="118px",t["text-font-size"]="24px";if(r>1098)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-4.svg')",t["grid-template-rows"]="300px",t["text-font-size"]="32px",t["text-small-font-size"]="18px",t["content-padding"]="42px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px",t["text-small-margin"]="0px 150px 0px 0";if(r>1400)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/83/banner-fluid-bg-83-5.svg')",t["max-width"]="1422px",t["grid-template-columns"]="1fr 1fr",t["content-padding"]="34px 0px 34px 100px",t["logo-box-shadow"]="0px 1px 4px #E3EBFC, 0px 24px 48px rgba(230, 235, 245, 0.4)",t["text-small-margin"]="0",t["text-margin"]="0 140px 12px 0";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner87);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
})()
</script>
 <script>Widget("https://pos.gosuslugi.ru/form", 352763)</script>
    <!-- СКРИПТЫ -->
</body>

</html>
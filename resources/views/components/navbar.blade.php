<div class="navbar-wrapper sticky-top" style="background: rgba(249, 249, 249, 0.8); backdrop-filter: blur(15px); box-shadow: 0px 0px 10px rgb(0 0 0 / 0%);">
    <style>
        #specialButton {
        position: fixed;
        top: 0;
        right: 40px;
        }
        @media screen and (min-width:100px) and (max-width:1688px) {
        #specialButton {
        position: fixed;
        top: 73px;
        right: 0;
        left: 8px;
        }
        }
    </style>
    <img id="specialButton" style="cursor:pointer;" src="/images/look.svg" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" />
    <div class="container">
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
            <div class="navbar-row">
                <div>
                    <a href="/" class="navbar-1-brand w-nav-brand"><img src="/images/logo.svg" alt=""></a>
                    <nav role="navigation" class="nav-menu w-nav-menu">

                        <nav role="navigation" class="nav-menu w-nav-menu"><a href="{{route('news')}}" class="nav-link w-nav-link">Новости</a>
                            <a href="{{route('events')}}" class="nav-link w-nav-link">Мероприятия</a>
                            <div data-delay="0" data-hover="true" class="w-dropdown">
                                <div class="nav-link row w-dropdown-toggle" id="w-dropdown-toggle-1" aria-controls="w-dropdown-list-1" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                                    <div class="row row-align-center">
                                        <div>Страницы</div><img src="/images/icons/ico-down.svg" alt="" class="dropdown-link-icon"></div>
                                </div>
                                <nav class="dropdown-list w-dropdown-list" id="w-dropdown-list-1" aria-labelledby="w-dropdown-toggle-1">
                                    <div class="dropdown-list-wrapper">
                                        <div class="dropdown-bg"></div>
                                        <div class="dropdown-grid-halves">
                                            <a href="{{route('projects')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <h6 class="dropdown-item-heading">Проекты</h6>
                                                <div class="text-small">Проекты библиотеки</div>
                                            </a>
                                            <a href="{{route('readers')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <h6 class="dropdown-item-heading">Читателям</h6>
                                                <div class="text-small">Уголок читателя</div>
                                            </a>
                                            <a href="{{route('videos')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <h6 class="dropdown-item-heading">Видео</h6>
                                                <div class="text-small">Видеоконтент библиотеки
                                                </div>
                                            </a>
                                            <a href="{{route('live')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <h6 class="dropdown-item-heading">Жизнь библиотеки</h6>
                                                <div class="text-small">Рабочие будни.</div>
                                            </a>
                                            <a href="{{route('filialy')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <h6 class="dropdown-item-heading">Филиалы</h6>
                                                <div class="text-small">Филиалы библиотеки.</div>
                                            </a>
                                            <a href="{{route('editor')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <?php use App\Models\editorpage; ?>
                                                @foreach(editorpage::all() as $editorpage)
                                                <h6 class="dropdown-item-heading">{{ $editorpage->name }}</h6>
                                                <div class="text-small">{{ $editorpage->description }}</div>
                                                @endforeach
                                            </a>
                                            <a href="{{route('listablebooks')}}" class="dropdown-item dropdown-item-large w-inline-block" tabindex="0">
                                                <h6 class="dropdown-item-heading">Книги</h6>
                                                <div class="text-small">Онлайн библиотека.</div>
                                            </a>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div data-delay="0" data-hover="true" class="w-dropdown">
                                <div class="nav-link w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                                    <div class="row row-align-center">
                                        <div>О библиотеке</div><img src="/images/icons/ico-down.svg" alt="" class="dropdown-link-icon"></div>
                                </div>
                                <nav class="dropdown-list w-dropdown-list" id="w-dropdown-list-0" aria-labelledby="w-dropdown-toggle-0">
                                    <div class="dropdown-list-wrapper">
                                        <a href="{{route('contacts')}}" aria-current="page" class="dropdown-item w-dropdown-link w--current" tabindex="0">Контакты</a>
                                        <a href="{{route('documents')}}" aria-current="page" class="dropdown-item w-dropdown-link w--current" tabindex="1">Документы</a>
                                        <a href="{{route('brandbook')}}" aria-current="page" class="dropdown-item w-dropdown-link w--current" tabindex="2">Брендбук</a>
                                        <a href="{{route('history')}}" aria-current="page" class="dropdown-item w-dropdown-link w--current" tabindex="3">История</a>
                                        <div class="dropdown-bg"></div>
                                    </div>
                                </nav>
                                <div class="navbar-buttonss">
                                    <div style="margin-right: 12px;" class="">
                                        @if(Auth::check())
                                        <a href="{{route('private')}}" class="button icon-button bg-gray-1 w-inline-block"><img src="/images/icons/user.svg" alt="" class="icon-button-icon">
                                            <div style="padding-top: 28px; padding-bottom: 28px;" class="icon-button-text">Личный кабинет</div>
                                        </a>
                                        @else
                                        <a href="{{route('auth')}}" class="button icon-button bg-gray-1 w-inline-block"><img src="/images/icons/user.svg" alt="" class="icon-button-icon">
                                            <div style="padding-top: 28px; padding-bottom: 28px;" class="icon-button-text">Войти</div>
                                        </a>
                                        @endif
                                    </div>
                                    <a href="{{route('ilim')}}" style="padding-top: 28px; padding-bottom: 28px;" class="button w-button">Библиопоиск «Илим»</a>
                                </div>
                            </div>
                        </nav>
                    </nav>
                </div>
                <div class="navbar-controls">
                    <div class="navbar-buttons">
                        @if(Auth::check())
                        @if(Auth::user()->role)
                        <a href="{{route('admin')}}" class="button icon-button bg-gray-1 w-inline-block">
                            <div class="icon-button-text">Админ</div>
                        </a>
                        @endif
                        @endif
                        <div class="">
                            @if(Auth::check())
                            <a href="{{route('private')}}" class="button icon-button bg-gray-1 w-inline-block"><img src="/images/icons/user.svg" alt="" class="icon-button-icon">
                                <div class="icon-button-text">Личный кабинет</div>
                            </a>
                            @else
                            <a href="{{route('auth')}}" class="button icon-button bg-gray-1 w-inline-block loggg"><img src="/images/icons/user.svg" alt="" class="icon-button-icon">
                                <div class="icon-button-text">Войти</div>
                            </a>
                            @endif
                        </div>
                        <div class="modal-container" style="opacity: 0;">
                            <div class="modal-background"></div>
                            <div class="content-width-medium modal-content">
                                <div class="panel modal-panel">
                                    <div class="modal-panel-bg"></div>
                                    <div class="panel-body modal-panel-body">
                                        <form action="/search" class="search-form w-form"><input type="search" class="form-input form-input-large search-modal-input w-input" autofocus="true" maxlength="256" name="query" placeholder="Название книги" id="search" required=""><input type="submit" value="Поиск"
                                                                                                                                                                                                                                                                                        class="button search-form-button w-button"></form>
                                    </div>
                                </div>
                            </div>
                        </div><a href="{{route('ilim')}}" class="button w-button">Библиопоиск «Илим»</a></div>
                    <div class="menu-button w-nav-button" abtaria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false"><img src="/images/icons/three.svg" alt=""></div>
                </div>
            </div>
            <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        </div>
    </div>
</div>

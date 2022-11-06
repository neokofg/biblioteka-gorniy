<!DOCTYPE html>
<html lang="ru">

<x-head></x-head>

<body>
    <x-navbar></x-navbar>
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div class="section-title">
                    <h5 class="panel-subheading text-primary-1">Все</h5>
                    <h3 class="display-heading-4 no-bottom-space">Мероприятия</h3>
                </div>

                <!-- Дата -->
                <form action="{{route('GetEventsWithName')}}" method="GET">
                    @csrf
                <div class="w-dyn-list">
                    <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">

                        <input type="text" name="search" class="form-input w-input" maxlength="256" placeholder="Запрос" id="Standard-Input">

                        <div class="w-dyn-list">
                            <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">
                                <input type="submit" style="height: 48px;" value="Поиск " class="button button-large w-button ">
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="w-dyn-list">
                    <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">


                        <div class="w-dyn-list">
                            <div class="grid-halves w-dyn-items" style="font-size: 12px; margin-top:20px; margin-bottom: -18px;">
                                <p>От</p>
                                <p>До</p>
                            </div>
                        </div>

                        <div class="w-dyn-list">
                            <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{route('GetEventsWithDate')}}" method="GET">
                    @csrf
                <div class="w-dyn-list">
                    <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">
                        <div class="w-dyn-list">
                            <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">
                                <input type="date" class="form-input w-select events-f" name="start_date">
                                <input type="date" class="form-input w-select events-f" name="end_date">
                            </div>
                        </div>

                        <div class="w-dyn-list">
                            <div data-w-id="a0c4cab8-f6fd-ee4b-20e6-87a0d6e23055" role="list" class="grid-halves w-dyn-items">
                                <input type="submit" style="height: 48px;" value="Фильтр по дате " class="button button-large w-button "><br>
                            </div>
                        </div>

                    </div>
                </div>
                </form>
                <div role="list" class="blog-grid w-dyn-items">
                    @foreach($events as $event)
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
                                        <div style="background-color:#3ccf91" class="badge w-inline-block">{{$event->time}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    </div>
        <script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
</body>

</html>
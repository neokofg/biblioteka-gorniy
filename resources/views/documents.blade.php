<!DOCTYPE html>
<html lang="ru">

<x-head></x-head>

<body>
    <x-navbar>  </x-navbar>
    <div class="section">
        <div class="container justify-content-center">
            <div class="center-content content-width-large">
                <h1 class="display-heading-2 no-bottom-space">Документы</h1>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container grid-container">

            <div>
                <div class="panel">
                    <div class="panel-body panel-body-small">
                        <ul role="list" class="w-list-unstyled">
                            <!-- Файлы -->
                            @foreach($documents as $document)
                                <li class="bordered-list-item">
                                    <div class="row row-align-center row-justify-between">
                                        <h6 class="no-bottom-space">
                                            <a href="images/{{$document->document}}"><ya-tr-span>{{$document->name}}</ya-tr-span></a>
                                        </h6>
                                        <div>
                                            @if(Auth::check())
                                            @if(Auth::user()->role)
                                                <form style="display:inline" action="{{route('DeleteDocument')}}" method="GET">
                                                    @csrf
                                                    <input type="text" value="{{$document->id}}" name="id" style="display:none">
                                                        <button class="button-small w-button" style="display:inline; border:#da2525; background-color:#da2525; margin-right: 18px;">Удалить</button>
                                                </form>
                                            @endif
                                            @endif
                                            <a href="images/{{$document->document}}" download>
                                                <ya-tr-span>Скачать</ya-tr-span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <!-- Файлы -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
<x-footer></x-footer>
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
    <script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
</body>

</html>
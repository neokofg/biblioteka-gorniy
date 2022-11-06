<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>
<body>
    <x-navbar></x-navbar>
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
    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Книги
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <div class="w-form">
                                <form style="display:inline" action="{{route('GiveBook')}}" method="POST">
                                    @csrf
                                <h6>Отдать книгу</h6>
                                <input type="text" class="form-input w-input" name="booknamenew" maxlength="256" placeholder="Название книги"><br>
                                <h6>Пользователь</h6>
                                <input type="text" class="form-input w-input" maxlength="256" value="+7" name="phonenumber" placeholder="Номер телефона"><br>
                                <h6>Выбрать дату сдачи</h6>
                                <input type="date" class="form-input w-input" name="bookdate">
                                    <br>
                                <button class="button w-button">
                                    Добавить
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Книги
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <div class="w-form">
                                <form action="{{route('GetBook')}}" method="POST">
                                    @csrf
                                    <h6>Получить книгу</h6>
                                    <input type="text" class="form-input w-input" name="id" maxlength="256" placeholder="ID книги"><br>
                                    <button class="button w-button">
                                        Получить
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>
    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Создание новости
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <form action="{{route('UploadNews')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="w-form">
                                <h6>Изображения</h6>
                                <input name="file" type="file"><br><br>
                                <h6>Заголовок</h6>
                                <input type="text" class="form-input w-input" maxlength="256" name="name" placeholder="Название"><br>
                                <h6>Краткое описание</h6>
                                <input type="text" class="form-input w-input" name="description" maxlength="256" placeholder="Описание"><br>
                                <h6>Контент</h6>
                                <textarea placeholder="Контент" name="content" maxlength="5000" class="form-input textarea w-input" style="width: 435px; height: 181px;"></textarea><br>
                                <button class="button w-button">
                                    Добавить
                                </button>
                                @error('news')
                                <div>{{ $message }}</div>
                                @enderror
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Создание мероприятия
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <div class="w-form">
                                <form action="{{route('UploadEvents')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <h6>Изображения</h6>
                                <input name="file" type="file"><br><br>
                                <h6>Заголовок</h6>
                                <input type="text" name="name" class="form-input w-input" maxlength="256" placeholder="Название"><br>
                                <h6>Краткое описание</h6>
                                <input type="text" name="description" class="form-input w-input" maxlength="256" placeholder="Описание"><br>
                                <h6>Выбрать дату</h6>
                                <input type="date" class="form-input w-input" name="date">
                                <h6>Время</h6>
                                <input type="text" name="time" class="form-input w-input" maxlength="256" placeholder="00:00"><br>
                                <h6>Контент</h6>
                                <textarea name="content" placeholder="Контент" maxlength="5000" class="form-input textarea w-input" style="width: 435px; height: 181px;"></textarea><br>
                                <button class="button w-button">
                                    Добавить
                                </button>
                                    @error('events')
                                    <div>{{ $message }}</div>
                                    @enderror
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Создание проектов
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <form action="{{route('UploadProjects')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="w-form">
                                    <h6>Изображения</h6>
                                    <input name="file" type="file"><br><br>
                                    <h6>Заголовок</h6>
                                    <input type="text" class="form-input w-input" maxlength="256" name="name" placeholder="Название"><br>
                                    <h6>Краткое описание</h6>
                                    <input type="text" class="form-input w-input" name="description" maxlength="256" placeholder="Описание"><br>
                                    <h6>Выбрать дату</h6>
                                    <input type="date" class="form-input w-input" name="date">
                                    <h6>Контент</h6>
                                    <textarea placeholder="Контент" name="content" maxlength="5000" class="form-input textarea w-input" style="width: 435px; height: 181px;"></textarea><br>
                                    <button class="button w-button">
                                        Добавить
                                    </button>
                                    @error('projects')
                                    <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Создание видео
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <div class="w-form">
                                <form action="{{route('UploadVideos')}}" method="POST">
                                    @csrf
                                <h6>Заголовок</h6>
                                <input type="text" class="form-input w-input" name="name"  maxlength="256" placeholder="Название"><br>
                                <h6>Краткое описание</h6>
                                <input type="text" class="form-input w-input" name="description" maxlength="256" placeholder="Описание"><br>
                                <h6>Ссылка на YouTube</h6>
                                <input type="text" class="form-input w-input" name="youtube_url" maxlength="256" placeholder="https://www.youtube.com/watch?v=XXXXXXXX"><br>
                                <button href="#" class="button w-button">
                                    Добавить
                                </button>
                                    @error('videos')
                                    <div>{{ $message }}</div>
                                    @enderror
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="style-guide-container">
                <div class="panel">
                    <div class="panel-body">
                        <div>
                            <h4 class="heading">
                                Создание Документа
                            </h4>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-guide-content">

                    <div class="row">
                        <div class="style-guide-content-item">
                            <div class="w-form">
                                <form action="{{route('UploadDocument')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <h6>Название документа</h6>
                                <input type="text" name="name" class="form-input w-input" maxlength="256" placeholder="Название"><br>
                                <h6>Файл</h6>
                                <input name="file" type="file"><br><br>
                                <button class="button w-button">
                                    Добавить
                                </button>
                                    @error('documents')
                                    <div>{{ $message }}</div>
                                    @enderror
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
</body>

</html>
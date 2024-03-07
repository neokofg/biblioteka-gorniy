<!doctype html>
<html lang="en">
<x-head></x-head>
<body>
    <!-- Шапка -->
    <x-navbar>
    </x-navbar>
    <!-- Шапка -->
    <div class="container" style="margin-top: 24px;">
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
            <div class="section-title">
                <h3 class="display-heading-4 no-bottom-space">Книги</h3>
            </div>
        <div role="list" style="margin-bottom: 25px" class="blog-grid w-dyn-items">
            @foreach($books as $book)
                <div role="listitem" style="height: 300px; width: 100%" class="w-dyn-item">
                    <div class="panel" style="height: 100%">
                        <img src="" alt="">
                        <div class="panel-body panel-body-small">
                            <h6 class="medium-heading">{{$book->name}}</h6>
                            <p>{{$book->description}}</p>
                            <div class="blog-panel-foot">
                                <button style="background-color:#3c5ccf; color: #ffffff;" class="badge w-inline-block " onclick="openBook('/books/{{$book->file}}')"> Открыть </button>
                                @if(Auth::check())
                                    @if(Auth::user()->role)
                                        <form style="display:inline" action="{{route('DeleteListableBook')}}" method="GET">
                                            @csrf
                                            <input type="text" value="{{$book->id}}" name="id" style="display:none">
                                            <button class="badge w-inline-block" style="display:inline; border:#da2525; background-color:#da2525; color: #ffffff; margin-right: 18px;">Удалить</button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div id="bookModal">
        <div onclick="closeBook()" id="background"></div>
        <img src="/loading.gif" id="loading" alt="">
        <div id="flipbook">
        </div>
    </div>
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
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/turnjs4/lib/turn.min.js"  type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
    <script type="text/javascript">
        async function openBook(filePath) {
            $('#bookModal').css('display','flex');
            $('#flipbook').innerHTML = '';
            $('#loading').show();

            const pdfDoc = await pdfjsLib.getDocument(filePath).promise;

            // Начальная инициализация flipbook с первой страницей
            async function initializeWithFirstPage() {
                const firstPage = await pdfDoc.getPage(1);
                const viewport = firstPage.getViewport({scale: 1.5});
                const canvas = document.createElement('canvas');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                await firstPage.render({
                    canvasContext: canvas.getContext('2d'),
                    viewport: viewport
                }).promise;

                const img = document.createElement('img');
                img.src = canvas.toDataURL();
                $('#flipbook').append(img);
                var windowWidth = $(window).width();
                var flipbookSizeOptions;

                // Проверка ширины экрана
                if (windowWidth <= 768) {
                    // Для экранов меньше 768 пикселей
                    flipbookSizeOptions = {
                        width: '100%',
                        height: '50%',
                    };
                } else {
                    // Для экранов больше или равных 768 пикселей
                    flipbookSizeOptions = {
                        width: 800,
                        height: 600,
                        autoCenter: true
                    };
                }
                $('#flipbook').turn(flipbookSizeOptions);
                $('#loading').hide();
            }

            await initializeWithFirstPage();

            // Постепенно загружаем и добавляем оставшиеся страницы
            for (let num = 2; num <= pdfDoc.numPages; num++) {
                const page = await pdfDoc.getPage(num);
                var viewport = page.getViewport({scale: 1.5});
                var canvas = document.createElement('canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                await page.render({
                    canvasContext: context,
                    viewport: viewport
                }).promise;

                // Конвертация canvas в изображение и добавление в flipbook
                var img = document.createElement('img');
                img.src = canvas.toDataURL();
                $(`#flipbook`).turn('addPage', img, num);
            }
        }

        function closeBook() {
            $('#bookModal').hide();
        }
    </script>
</body>
</html>

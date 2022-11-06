<!DOCTYPE html>
<html lang="ru">

<x-head></x-head>
<body>
    <x-navbar></x-navbar>
    <div class="section wf-section">
        <div class="container">
            <div class="w-layout-grid job-listing-grid">
                <div>
                    <div class="panel job-listing-title">
                        <div class="panel-body">
                            <div class="space-bottom">
                                <ul role="list" class="w-list-unstyled">
                                    @foreach($userdata as $user)
                                    <!-- Файлы -->
                                    <h5 class="display-inline">{{$user->name}}</h5>
                                    <hr style="margin-top: 24px; margin-bottom: 24px;">
                                    <li class="bordered-list-item">
                                        <div class="row row-align-center row-justify-between">
                                            <div>
                                                Телефон:
                                            </div>
                                            <h6 class="no-bottom-space">
                                                <ya-tr-span>{{$user->phonenumber}}</ya-tr-span>
                                            </h6>

                                        </div>
                                    </li>
                                    <li class="bordered-list-item">
                                        <div class="row row-align-center row-justify-between">
                                            <div>
                                                ID:
                                            </div>
                                            <h6 class="no-bottom-space">
                                                <ya-tr-span>{{$user->id}}</ya-tr-span>
                                            </h6>

                                        </div>
                                    </li>
                                @endforeach
                                    <!-- Файлы -->
                                </ul>
                                <!-- <div>
                                    <h5 class="display-inline">Попов Айтал Семенович</h5> <br>
                                    <hr>
                                    <h5 class="display-inline">Телефон:</h5>
                                    <h5 class="display-inline">+79841041105</h5><br>
                                    <h5 class="display-inline">ID:</h5>
                                    <h5 class="display-inline">1</h5>
                                </div> -->
                            </div>

                            <div class="row"><a href="{{route('LogoutUser')}}" class="button-large w-button" style="background-color: #DA2525;">Выход</a></div>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="text-lead job-listing-short-description w-richtext">
                        <h3>Одолженные книги</h3>
                    </div>
                    <div class="w-richtext">

                        <table class="ikswebs">
                            <tbody>
                                <tr>
                                    <td style="width: 400px;">Книга</td>
                                    <td style="width: 100px; text-align: center;">Получен</td>
                                    <td style="width: 100px; text-align: center;">Дата&nbsp;сдачи</td>
                                    <td style="width: 50px; text-align: center;">ID</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="iksweb">
                            <tbody>
                                <!-- КНИГА -->
                                @foreach($bookdata as $book)
                                    <tr>
                                        <td style="width: 400px;">{{$book->name}}</td>
                                        <td style="width: 100px; text-align: center;">{{$book->created_at}}</td>
                                        <td style="width: 100px; text-align: center;">{{$book->date}}</td>
                                        <td style="width: 50px; text-align: center;">{{$book->id}}</td>
                                    </tr>
                                @endforeach
                                <!-- /КНИГА -->


                                <!-- КОД ЕСЛИ ТАМ ПУСТО⬇️⬇️⬇️ -->
                                <!-- <h3 style="color: #2a323548; text-align: center;"> У вас нет одолженных книг</h3> -->


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="horizontal-rule blog-post-horizontal-rule"></div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
    <script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
</body>

</html>
<!DOCTYPE html>
<html lang="ru">
    
<x-head></x-head>

<body>
<x-navbar></x-navbar>
    <div class="fullscreen-section-content">
        <div class="container align-content-center">
            <div class="content-width-small">
                <div class="panel">
                    <div class="panel-body">
                        <div class="space-bottom">
                            <h1 class="card-heading no-bottom-space">С возвращением.</h1>
                            <div class="text-lead-news" style="margin-top: 24px">Войдите в систему, используя данные своей учетной записи</div>
                        </div>
                        <div class=" ">
                            <form class="form-vertical" method="GET" action="{{route('LoginUser')}}">
                                @csrf
                                <input type="text" class="form-input form-input-large w-input " maxlength="256 " name="phonenumber" placeholder="Номер телефона" id="email " required=" ">
                                <div>
                                    <input type="password" class="form-input form-input-large w-input " maxlength="256" name="password" placeholder="Пароль " id="Password-2 ">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                    </div>
                                <input type="submit" value="Войти " class="button button-large w-button ">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="text-small form-subtext ">
                    <div class="text-center ">Ещё не аккаунта?&nbsp;<a href="{{route('register')}}" >Создать</a></div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
<script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
</body>

</html>
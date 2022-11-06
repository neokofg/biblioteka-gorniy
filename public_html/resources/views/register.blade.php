<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>

<body>
<x-navbar></x-navbar>
    <div class="fullscreen-section-content">
        <div class="container">
            <div class="w-layout-grid sign-up-grid-halves space-bottom">
                <div class="panel">
                    <div class="panel-body">
                        <div class="space-bottom">
                            <h1 class="display-inline">Создать аккаунт</h1>
                            <div class="text-lead-news" style="margin-top: 24px">Муниципальное бюджетное учреждение «Межпоселенческая централизованная библиотечная система» Муниципального района «Горный улус» Республики Саха (Якутия) (МБУ "МЦБС")</div>
                        </div>
                        <div class="">
                            <form class="form-vertical" method="POST" action="{{route('CreateUser')}}">
                                @csrf
                                <input type="text" class="form-input form-input-large w-input" maxlength="256" required name="name" placeholder="ФИО">
                                <input type="text" class="form-input form-input-large w-input" maxlength="256" required name="phonenumber" value="+7" placeholder="Номер телефона">
                                <input type="password" class="form-input form-input-large w-input" maxlength="256" required name="password" placeholder="Пароль">
                                <input type="password" class="form-input form-input-large w-input" maxlength="256" name="password_confirm" placeholder="Повтор пароля">
                                @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                                @endforeach
                                <input type="submit" class="button button-large w-button" value="Зарегистрироваться">
                                <label class="w-checkbox field-row">
                                </label>
                            </form>
                        </div>
                    </div>
                </div><img src="/images/register-img.jpg" alt="" class="rounded-image"></div>
            <div class="text-small form-subtext ">
                <div class="text-center ">Есть аккаунт?&nbsp;
                    <a href="{{route('auth')}} ">Войти</a></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
<script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
</body>

</html>
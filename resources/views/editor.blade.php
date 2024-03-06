<!DOCTYPE html>
<html lang="ru">
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<x-head></x-head>
<x-head.tinymce-config/>
<body>
<x-navbar></x-navbar>

<div class="container">

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
    @foreach($pagecontents as $pagecontent)
    @if(Auth::check())
        @if(Auth::user()->role == 1)
        <br>
            <button style="height: 48px" margin-left: 20px; id="editbtn" class="button button-large w-button "><i class='bx bxs-edit' ></i>&nbsp;Редактировать</button>
            <button style="height: 48px; display:none" id="backbtn" class="button button-large w-button ">Назад</button>
            <br><br>
            <div id="textdiv" style="display:none">
                <form method="post" action="{{route('EditorPageUpload')}}">
                    @csrf
                    <br>
                    <input name="name" value="{{$pagecontent->name}}" placeholder="Название страницы">
                    <input name="description" value="{{$pagecontent->description}}" placeholder="Описание страницы">
                    <textarea id="textarea" name="pageedit">{!! $pagecontent->pagecontent !!}</textarea>
                    <br>
                    <button style="height: 48px"  class="button button-large w-button ">Отправить</button>
                    <br>
                </form>
            </div>

        @endif
    @endif
    <div style="display:block" id="pagecontent">
        {!! $pagecontent->pagecontent !!}
    </div>
    @endforeach
    @if(Auth::check())
        @if(Auth::user()->role == 1)
            <script type="text/javascript">
                let editbtn = document.getElementById('editbtn')
                let backbtn = document.getElementById('backbtn')
                let texteditor = document.getElementById('textdiv')
                let pagecontent = document.getElementById('pagecontent')
                editbtn.onclick = function(){
                    backbtn.style.display = "inline"
                    editbtn.style.display = "none"
                    texteditor.style.display = "inline"
                    pagecontent.style.display = "none"
                }
                backbtn.onclick = function(){
                    backbtn.style.display = "none"
                    editbtn.style.display = "inline"
                    texteditor.style.display = "none"
                    pagecontent.style.display = "inline"
                }
            </script>
        @endif
    @endif
    
    </div>
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>
   <x-footer></x-footer>
</body>

</html>
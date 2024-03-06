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
    @foreach($news as $onenews)
    <div class="section section-small wf-section">
        <div class="container">
            <div class="content-width-medium article-title-wrapper">
                @if(Auth::check()) 
                @if(Auth::user()->role)
                <form style="display:inline" action="{{route('DeletePost')}}" method="get">
                    @csrf
                    <input type="text" style="display:none" name="postType" value="{{$tabletype}}">
                    <input type="text" style="display:none" name="id" value="{{$onenews->id}}">
                    <input type="submit" style="height: 48px; background-color: #DA2525" value="Удалить" class="button button-large w-button ">
                </form>
                <input type="button" style="height: 48px" id="pageedit" value="Редактировать " class="button button-large w-button ">
                <input type="button" style="height: 48px;display:none" id="pagecancel" value="Отмена" class="button button-large w-button">
                <form style="display:inline" action="{{route('EditPage')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input class="form-input w-input" type="text" style="display:none" name="postType" value="{{$tabletype}}">
                    <input class="form-input w-input" type="text" style="display:none" name="id" value="{{$onenews->id}}">
                    <input class="form-input w-input" type="text" style="display:none" name="oldpageimage" value="{{$onenews->image}}">
                    <!-- нужные инпуты которые надо поменять -->
                    <input class="form-input w-input" type="text" style="display:none" id="newpagename" name="newpagename" placeholder="Название" value="{{$onenews->name}}"><br><br>
                    <input type="file" style="display:none" id="newpageimage" name="newpageimage" value="{{$onenews->image}}"><br><br>
                    <input class="form-input w-input" type="text" style="display:none" id="newpagedescription" name="newpagedescription" placeholder="Краткое описание" value="{{$onenews->description}}"><br><br>
                    <textarea class="form-input w-input" type="text" style="display:none;width:600px" id="newpagecontent" name="newpagecontent" placeholder="Контент">{{$onenews->content}}</textarea><br><br>
                    <!-- нужные инпуты которые надо поменять -->
                    <input type="submit" style="display:none;height: 48px" value="Отправить" id="pagesubmit" class="button button-large w-button">
                </form>
                @endif
                @endif
                <h1 class="display-heading-3" id="pagename">{{$onenews->name}}</h1>
                <div class="post-meta-wrapper">
                    <a href="/team/luke-hansen" class="w-inline-block"><img src="/images/favicon.ico" alt="" class="avatar"></a>
                    <div class="space-left">
                        <div>{{$onenews->updated_at}}</div>
                        <div class="row">
                            <div>От&nbsp;</div><a href="/" class="blog-post-panel-author">МБУ "МЦБС"</a></div>
                    </div>
                </div>
                <div style="margin-top: 24px;" class="content-width-extra-large"><img src="/images/{{$onenews->image}}" id="pageimage" class="rounded-image"></div>
                <h3 id="pagedescription" style="margin-top: 24px;">{{$onenews->description}}</h3>
                <div style="margin-top: 24px;" class="text-lead blog-post-summary" id="pagecontent">{{$onenews->content}}</div>
                <div class="article w-richtext">
                </div>
            </div>
        </div>
    </div>
    @if(Auth::check()) 
                @if(Auth::user()->role)
    <script type="text/javascript">
            var pagename = document.getElementById('pagename')
            var pageimage = document.getElementById('pageimage')
            var pagedescription = document.getElementById('pagedescription')
            var pagecontent = document.getElementById('pagecontent')
            var newpagename = document.getElementById('newpagename')
            var newpagedescription = document.getElementById('newpagedescription')
            var newpageimage = document.getElementById('newpageimage')
            var newpagecontent = document.getElementById('newpagecontent')
            var pagecancel = document.getElementById('pagecancel')
            var pagecreated_at = document.getElementById('pagecreated_at')
            var pagesubmit = document.getElementById('pagesubmit')
            var pageedit = document.getElementById('pageedit')
            pageedit.onclick = function() {
                pagename.style.display = "none"
                pageimage.style.display = "none"
                pagedescription.style.display = "none"
                pagecontent.style.display = "none"
                pageedit.style.display = "none"
                newpagename.style.display = "inline"
                newpagedescription.style.display = "inline"
                newpageimage.style.display = "inline"
                newpagecontent.style.display = "inline"
                pagecancel.style.display = "inline"
                pagesubmit.style.display = "inline"
            }
            pagecancel.onclick = function() {
                pagename.style.display = "inline"
                pageimage.style.display = "inline"
                pagedescription.style.display = "inline"
                pagecontent.style.display = "inline"
                pageedit.style.display = "inline"
                newpagename.style.display = "none"
                newpagedescription.style.display = "none"
                newpageimage.style.display = "none"
                newpagecontent.style.display = "none"
                pagecancel.style.display = "none"
                pagesubmit.style.display = "none"
            }
        </script>
        @endif 
        @endif
    @endforeach
        <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
        <script src="js/main.js " type="text/javascript "></script>
        <x-footer></x-footer>
</body>

</html>
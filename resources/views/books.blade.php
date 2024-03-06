<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>

<body>
<x-navbar></x-navbar>

    <div class="section">
        <div class="container grid-container">

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
    <div class="section-title">
                    <h3 class="display-heading-4 no-bottom-space">Книги</h3>
                </div>
    <form action="{{route('GetBooksWithName')}}" method="GET">
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
    <div>
        <br><br>
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
      <div role="list" class="blog-grid w-dyn-items">
                    <!-- Запись -->
                     @foreach($books as $book)
                        <div role="listitem" class="blog-grid-item w-dyn-item">
                                    <div class="panel">
                                        <img src="/images/{{$book->image}}" sizes="(max-width: 479px)" class=" panel-top-image ">
                                        <div class="panel-body ">
                                            <div class="space-bottom-large ">
                                                <h4>{{$book->name}}</h4>
                                                <div class="text-lead ">{{Str::limit($book->description, 115, ' ...')}}</div>
                                            </div>
                        
                                            <a href="/images/{{$book->pdf}}" class="link-arrow w-inline-block">
                                                <div>Читать</div>
                                            </a>
                                            <a href="/images/{{$book->pdf}}" download class="link-arrow w-inline-block ">
                                                <div>Скачать</div>
                                            </a>@if(Auth::Check()) @if(Auth::user()->role == 1)
                        
                                            <div class="row-inline ">
                                                <form method="GET" action="{{route('DeleteBooks')}}">
                                                    @csrf
                                                    <input type="text" value="{{$book->id}}" name="id" style="display:none">
                                                    <button style="height: 48px; background-color: #DA2525" class="button button-large w-button ">Удалить</button>
                                                </form>
                                                @endif @endif
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    @endforeach
                    <!-- Запись -->
                </div>
            </div>
        </div>
    </div>
    <br><br>
<x-footer></x-footer>
<script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
<script src="js/main.js " type="text/javascript "></script>
<script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
</body>

</html>
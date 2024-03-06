<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>
<body>
<x-navbar></x-navbar>
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div class="section-title">
                    <h3 class="display-heading-4 no-bottom-space">Видео</h3>
                </div>
                <div role="list" class="blog-grid w-dyn-items">
                    <!-- Запись -->
                    @foreach($videos as $video)
                        <?php $url = $video->youtube_url;
                        $substr = "=";
                        if (strpos($url, $substr) !== false) {
                            $url_arr  = explode("=", $url);
                            $video_id = $url_arr[1];
                        } else {
                            $url_arr  = explode("/", $url);
                            $video_id = $url_arr[3];
                        } ?>
                            <div role="listitem" class="blog-grid-item w-dyn-item">
                                <div class="panel">
                                    <iframe width="100%" height="42%" src="https://www.youtube.com/embed/{{$video_id}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <div class="panel-body panel-body-small">
                                        <a href="#" class="w-inline-block">
                                            <h4 class="medium-heading">{{Str::limit($video->name, 50, ' ...')}}</h4>

                                        <div class="text-lead-news">{{Str::limit($video->description, 115, ' ...')}}</div>
                                        </a>
                                        <div class="blog-panel-foot">
                                            <div class="blog-panel-meta-text">
						@if(Auth::check())
			@if(Auth::user()->role)
			<form style="display:inline" action="{{route('DeleteVideo')}}" method="get">
			@csrf
			<input type="text" style="display:none" name="id" value="{{$video->id}}">
                        <input type="submit" style="height: 48px; background-color: #DA2525" value="Удалить" class="button button-large w-button ">
			</form>
			@endif
@endif
                                            </div>
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
<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>

<body>
<x-navbar></x-navbar>
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div class="section-title">
                    <h3 class="display-heading-4 no-bottom-space">Проекты</h3>
                </div>
                <div role="list" class="blog-grid w-dyn-items">
                    <!-- Запись -->
                    @foreach($projects as $project)
                    <div role="listitem" class="blog-grid-item w-dyn-item">
                        <div class="panel">
                            <a href="{{route('ProjectsLink',['id' => $project->id])}}" class="panel-image-link w-inline-block"><img src="/images/{{$project->image}}" class="panel-top-image"></a>
                            <div class="panel-body panel-body-small">
                                <a href="{{route('ProjectsLink',['id' => $project->id])}}" class="w-inline-block">
                                    <h4 class="medium-heading">{{Str::limit($project->name, 50, ' ...')}}</h4>

                                        <div class="text-lead-news">{{Str::limit($project->description, 115, ' ...')}}</div>
                                </a>
                                <div class="blog-panel-foot">
                                    <div class="blog-panel-meta-text">
                                        <div>{{$project->date}}</div>
                                        <!-- <div class="row">
                                            <div>By&nbsp;</div>
                                            <div class="blog-post-panel-author">Luke Hansen</div>
                                        </div> -->
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
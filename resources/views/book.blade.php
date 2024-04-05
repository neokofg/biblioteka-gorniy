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
        <div class="container" id="bookDetails">

        </div>
    <div>
        <br><br>
    <div class="wf-section">
        <div class="container">
            <div class="w-dyn-list">
                <div role="list" class="blog-grid w-dyn-items">
                </div>
            </div>
        </div>
    </div>
    <br><br>
<x-footer></x-footer>
<script src='/js/main.js' type="text/javascript "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
<script>
    $.ajax({
        url: '{{env('APP_URL')}}/books/2024040313125aad2501d069b746377daf6a92acc4828c04830ca75402ac60e2a520b380fc51/html_pages/page_1.html',
        type: 'GET',
        success: function(res) {
            var content = $(res.responseText).text();
            $('#bookDetails').html(content);
        }
    });

</script>
</body>

</html>

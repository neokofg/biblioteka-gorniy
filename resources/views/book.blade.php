<?php header("Content-Type: application/xml; charset=utf-8"); ?>
    <!DOCTYPE html>
<html lang="ru" style="padding: 0; margin: 0">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('styles/main.css')}}" rel="stylesheet">
    <link href="{{asset('styles/20.12.22.css')}}" rel="stylesheet">
    <link href="{{asset('styles/book.css')}}" rel="stylesheet">
    <title>МБУ "МЦБС"</title>
    <link rel="shortcut icon" href="{{asset('images/biblogo.png')}}">
    <meta property="og:image" content="{{asset('images/head.jpg')}}">
    <meta property="twitter:image" content="{{asset('images/head.jpg')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:description"
          content='Муниципальное бюджетное учреждение «Межпоселенческая
          централизованная библиотечная система» Муниципального района «Горный улус» Республики Саха (Якутия)
(МБУ "МЦБС")'>
    <meta property="og:type" content="website">
    <meta name="description " content='Муниципальное бюджетное учреждение «Межпоселенческая централизованная библиотечная система» Муниципального района «Горный улус» Республики Саха (Якутия)
(МБУ "МЦБС")'>

</head>

<body style="padding: 0; margin: 0">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 8.68vh;display: flex;align-items: center; border-bottom: 3px solid #6380E4;">
    <div class="container-fluid" style="position: relative; width: -webkit-fill-available;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="display: flex; align-items: center;">
                <a class="nav-link" href="{{route('listablebooks')}}">< Назад</a>
            </ul>
        </div>
        <div id="titleBook"></div>
    </div>
</nav>
<div class="container-book">
    <svg class="btnNavigation" style="left: 10px;" id="prevPage" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.354 1.64604C11.4006 1.69249 11.4375 1.74766 11.4627 1.80841C11.4879 1.86915 11.5009 1.93427 11.5009 2.00004C11.5009 2.06581 11.4879 2.13093 11.4627 2.19167C11.4375 2.25242 11.4006 2.30759 11.354 2.35404L5.707 8.00004L11.354 13.646C11.4479 13.7399 11.5006 13.8673 11.5006 14C11.5006 14.1328 11.4479 14.2602 11.354 14.354C11.2601 14.4479 11.1328 14.5007 11 14.5007C10.8672 14.5007 10.7399 14.4479 10.646 14.354L4.646 8.35404C4.59944 8.30759 4.56249 8.25242 4.53729 8.19167C4.51208 8.13093 4.49911 8.06581 4.49911 8.00004C4.49911 7.93427 4.51208 7.86915 4.53729 7.80841C4.56249 7.74766 4.59944 7.69248 4.646 7.64604L10.646 1.64604C10.6924 1.59948 10.7476 1.56253 10.8084 1.53733C10.8691 1.51212 10.9342 1.49915 11 1.49915C11.0658 1.49915 11.1309 1.51212 11.1916 1.53733C11.2524 1.56253 11.3076 1.59948 11.354 1.64604Z" fill="#212529"/>
    </svg>
    <svg class="btnNavigation" style="right: 10px;" id="nextPage" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.646 1.64604C4.69245 1.59948 4.74762 1.56253 4.80837 1.53733C4.86911 1.51212 4.93423 1.49915 5 1.49915C5.06577 1.49915 5.13089 1.51212 5.19163 1.53733C5.25238 1.56253 5.30756 1.59948 5.354 1.64604L11.354 7.64604C11.4006 7.69248 11.4375 7.74766 11.4627 7.80841C11.4879 7.86915 11.5009 7.93427 11.5009 8.00004C11.5009 8.06581 11.4879 8.13093 11.4627 8.19167C11.4375 8.25242 11.4006 8.30759 11.354 8.35404L5.354 14.354C5.26011 14.4479 5.13278 14.5007 5 14.5007C4.86723 14.5007 4.73989 14.4479 4.646 14.354C4.55211 14.2602 4.49937 14.1328 4.49937 14C4.49937 13.8673 4.55211 13.7399 4.646 13.646L10.293 8.00004L4.646 2.35404C4.59944 2.30759 4.56249 2.25242 4.53729 2.19167C4.51208 2.13093 4.49911 2.06581 4.49911 2.00004C4.49911 1.93427 4.51208 1.86915 4.53729 1.80841C4.56249 1.74766 4.59944 1.69249 4.646 1.64604Z" fill="#212529"/>
    </svg>

    <div class="zoomBtns">
        <svg class="btnZoom" style="background: white; " id="zoomOut" width="16" height="16" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2323_31)">
                <path d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0H2Z" fill="#212529"/>
                <path d="M4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8Z" fill="#212529"/>
            </g>
            <defs>
                <clipPath id="clip0_2323_31">
                    <rect width="16" height="16" fill="white"/>
                </clipPath>
            </defs>
        </svg>

        <svg class="btnZoom" style="background: white;" id="zoomIn" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2323_30)">
                <path d="M14 1C14.2652 1 14.5196 1.10536 14.7071 1.29289C14.8946 1.48043 15 1.73478 15 2V14C15 14.2652 14.8946 14.5196 14.7071 14.7071C14.5196 14.8946 14.2652 15 14 15H2C1.73478 15 1.48043 14.8946 1.29289 14.7071C1.10536 14.5196 1 14.2652 1 14V2C1 1.73478 1.10536 1.48043 1.29289 1.29289C1.48043 1.10536 1.73478 1 2 1H14ZM2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V14C0 14.5304 0.210714 15.0391 0.585786 15.4142C0.960859 15.7893 1.46957 16 2 16H14C14.5304 16 15.0391 15.7893 15.4142 15.4142C15.7893 15.0391 16 14.5304 16 14V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0H2Z" fill="#212529"/>
                <path d="M8 4C8.13261 4 8.25979 4.05268 8.35355 4.14645C8.44732 4.24021 8.5 4.36739 8.5 4.5V7.5H11.5C11.6326 7.5 11.7598 7.55268 11.8536 7.64645C11.9473 7.74021 12 7.86739 12 8C12 8.13261 11.9473 8.25979 11.8536 8.35355C11.7598 8.44732 11.6326 8.5 11.5 8.5H8.5V11.5C8.5 11.6326 8.44732 11.7598 8.35355 11.8536C8.25979 11.9473 8.13261 12 8 12C7.86739 12 7.74021 11.9473 7.64645 11.8536C7.55268 11.7598 7.5 11.6326 7.5 11.5V8.5H4.5C4.36739 8.5 4.24021 8.44732 4.14645 8.35355C4.05268 8.25979 4 8.13261 4 8C4 7.86739 4.05268 7.74021 4.14645 7.64645C4.24021 7.55268 4.36739 7.5 4.5 7.5H7.5V4.5C7.5 4.36739 7.55268 4.24021 7.64645 4.14645C7.74021 4.05268 7.86739 4 8 4Z" fill="#212529"/>
            </g>
            <defs>
                <clipPath id="clip0_2323_30">
                    <rect width="16" height="16" fill="white"/>
                </clipPath>
            </defs>
        </svg>
        <svg class="btnZoom" style="background: white;" id="rotateBtn" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_2327_51)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15 2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V14C1 14.2652 1.10536 14.5196 1.29289 14.7071C1.48043 14.8946 1.73478 15 2 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V2ZM0 2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0L14 0C14.5304 0 15.0391 0.210714 15.4142 0.585786C15.7893 0.960859 16 1.46957 16 2V14C16 14.5304 15.7893 15.0391 15.4142 15.4142C15.0391 15.7893 14.5304 16 14 16H2C1.46957 16 0.960859 15.7893 0.585786 15.4142C0.210714 15.0391 0 14.5304 0 14V2Z" fill="#212529"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99932 4.98011C7.27889 4.98042 6.57794 5.23597 6.00146 5.70849C5.42498 6.18102 5.00399 6.84508 4.80156 7.60121C4.59913 8.35735 4.62615 9.16486 4.87858 9.90279C5.131 10.6407 5.59524 11.2694 6.20176 11.6945C6.80828 12.1197 7.52444 12.3186 8.24296 12.2613C8.96148 12.204 9.6437 11.8937 10.1874 11.3768C10.7311 10.8599 11.1071 10.1643 11.259 9.39411C11.4109 8.62394 11.3305 7.82069 11.03 7.10465C10.9973 7.0176 10.9966 6.92008 11.0281 6.8325C11.0597 6.74493 11.121 6.67409 11.1992 6.63481C11.2774 6.59553 11.3665 6.59085 11.4478 6.62176C11.529 6.65267 11.5963 6.71676 11.6353 6.80063C11.996 7.65991 12.0924 8.62386 11.91 9.54808C11.7277 10.4723 11.2765 11.307 10.6239 11.9273C9.9714 12.5475 9.15268 12.9198 8.29041 12.9885C7.42815 13.0571 6.56876 12.8184 5.84096 12.308C5.11317 11.7977 4.55616 11.0432 4.25336 10.1576C3.95056 9.27204 3.91828 8.30299 4.16134 7.39564C4.40441 6.48829 4.90974 5.69149 5.60164 5.12458C6.29354 4.55768 7.13477 4.25119 7.99932 4.25103V4.98011Z" fill="#212529"/>
                <path d="M7.99932 6.04895V3.1822C7.99933 3.14757 8.00836 3.11365 8.02536 3.08443C8.04236 3.05521 8.06662 3.03189 8.0953 3.0172C8.12398 3.00252 8.1559 2.99707 8.1873 3.0015C8.21871 3.00593 8.24832 3.02005 8.27265 3.04222L9.84598 4.47559C9.92598 4.5485 9.92598 4.68265 9.84598 4.75556L8.27265 6.18893C8.24832 6.21109 8.21871 6.22522 8.1873 6.22965C8.1559 6.23408 8.12398 6.22863 8.0953 6.21394C8.06662 6.19926 8.04236 6.17594 8.02536 6.14671C8.00836 6.11749 7.99933 6.08358 7.99932 6.04895Z" fill="#212529"/>
            </g>
            <defs>
                <clipPath id="clip0_2327_51">
                    <rect width="16" height="16" fill="white"/>
                </clipPath>
            </defs>
        </svg>

    </div>


    <div style="overflow-y: overlay; overflow-x: overlay; height: 77.57vh;">
        <div id="loading" style="display: none; width: 100%; height: -webkit-fill-available; ">
            <div style="display: flex; justify-content: center; align-items: center; width: 100%;height: -webkit-fill-available;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

        </div>
        <div class="bookPage" id="bookDetails">
            <div id="bookContent" style="align-content: start;z-index: -1;rotate: 0deg;height: -webkit-fill-available;"></div>
        </div>
    </div>
    <div class="book_navigation">
        <input type="range" value=1 class="form-range" id="pagesRange">
        <p id="currentPage">
            <span>Страница </span>
            <input type="text" id="currentPageInput" style="width: 50px; text-align: center;" />
            <span> из </span>
            <span id="allPages"> из </span>
        </p>
    </div>
</div>


<script src='{{asset('js/main.js')}}' type="text/javascript "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="//code.jivo.ru/widget/pPTVUYW9y8" async=""></script>
<script>
    var currentPage = 1; // Текущая страница
    var totalPages = 0; // Общее количество страниц
    var allPagesUrl = []
    var cache = {}; // Кэш для страниц



    var scale = 1; // Начальный масштаб
    var rotate = 0;


    $('#zoomIn').click(function() {
        scale += 0.1;
        $('.bookPage').css('transform', 'scale(' + scale + ')');
    });

    $('#zoomOut').click(function() {
        if (scale > 0.1) {
            scale -= 0.1;
            $('.bookPage').css('transform', 'scale(' + scale + ')');
        }
    });
    $('#rotateBtn').click(function() {
        if(rotate < 360) {
            rotate += 90;
            console.log(rotate)
            $('#bookContent').css('rotate', rotate + 'deg');
        } else {
            rotate = 0
            $('#bookContent').css('rotate', rotate + 'deg');

        }
    });

    $.ajax({
        url: '{{env('APP_URL')}}api/book/{{$id}}',
        type: 'GET',
        success: function(res) {
            totalPages = res.count_pages; // Установка общего количества страниц
            allPagesUrl = res.html_pages
            $('#titleBook').text(res.name)
            $('#pagesRange').attr({
                "max": res.count_pages,
                "min": 1,
                "step": 1,

            });

            loadPage(1); // Загрузка первой страницы
        }
    });

    function loadPage(page) {
        $('#loading').show();
        if (cache[page]) {
            // Если страница в кэше, используйте кэшированную версию
            $('#bookContent').html(cache[page]);
            currentPage = page;
            $('#currentPageInput').val(currentPage);
            $('#allPages').text(totalPages)
            $('#pagesRange').attr({
                "value": currentPage
            });
            $('#loading').hide();
        } else {
            // Если страницы нет в кэше, загрузите ее
            $.ajax({
                url: allPagesUrl[page-1],
                type: 'GET',
                success: function(res) {
                    cache[page] = res; // Добавление страницы в кэш
                    $('#bookContent').html(res);
                    currentPage = page;
                    $('#allPages').text(totalPages)
                    $('#currentPageInput').val(currentPage);
                    $('#pagesRange').attr({
                        "value": currentPage
                    });
                    if (currentPage === 1) {
                        $('#prevPage').css('display', 'none');
                    } else {
                        $('#prevPage').css('display', 'block');
                    }
                    if (currentPage === totalPages) {
                        $('#nextPage').css('display', 'none');
                    } else {
                        $('#nextPage').css('display', 'block');
                    }
                    $('#loading').hide();
                }
            });
        }
        $('#loading').hide();
    }

    $('#currentPageInput').on('change', function() {
        var newPage = parseInt($(this).val());
        if (!isNaN(newPage) && newPage >= 1 && newPage <= totalPages) {
            loadPage(newPage);
        }
    });

    $('#pagesRange').on('change', function () {
        var newPage = parseInt($(this).val())
        loadPage(newPage)
    })

    $('#prevPage').click(function(e) {
        e.preventDefault();
        if (currentPage > 1) {
            loadPage(currentPage - 1);
        } else {
            return
        }
    });

    $('#nextPage').click(function(e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            loadPage(currentPage + 1);
        } else {
            return
        }
    });

    $(document).on('touchstart', touch);
    $(document).on('touchmove', move);

    const pageAction = $('.bookPage');

    let x1 = null;
    let y1 = null;

    function touch(event) {
        const firstTouch = event.touches[0];
        x1 = firstTouch.clientX;
        y1 = firstTouch.clientY;
        // console.log(x1, y1);
    }
    function move (event) {
        if(!x1 || !y1) return false;
        let x2 = event.touches[0].clientX
        let y2 = event.touches[0].clientY
        console.log(x2, y2)
        let xDiff = x2 - x1
        let yDiff = y2 - y1

        if(Math.abs(xDiff) > Math.abs(yDiff)) {
            if(xDiff > 0) if(currentPage > 1) loadPage(currentPage - 1)
            else if(currentPage < totalPages) loadPage(currentPage + 1)
        }

        x1 = null
        y1 = null
    }
</script>
</body>

</html>

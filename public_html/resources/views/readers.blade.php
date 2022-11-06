<!DOCTYPE html>
<html lang="ru">
<x-head></x-head>
<body>
<x-navbar></x-navbar>
<div class="container">
        <div class="section-title">
            <h3 class="display-heading-4 no-bottom-space">Читателям</h3>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="content-width-extra-large">
                <div data-duration-in="300" data-duration-out="100" class="tabs-vertical w-tabs">
                    <div class="tabs-vertical-menu w-tab-menu" role="tablist">
                        <a data-w-tab="Tab 1" class="tabs-vertical-tab w-inline-block w-tab-link" tabindex="-1" id="w-tabs-1-data-w-tab-0" href="#w-tabs-1-data-w-pane-0" role="tab" aria-controls="w-tabs-1-data-w-pane-0" aria-selected="false">
                            <div>График работы</div>
                        </a>
                        <a data-w-tab="Tab 2" class="tabs-vertical-tab w-inline-block w-tab-link" tabindex="-1" id="w-tabs-1-data-w-tab-1" href="#w-tabs-1-data-w-pane-1" role="tab" aria-controls="w-tabs-1-data-w-pane-1" aria-selected="false">
                            <div>Правила пользования</div>
                        </a>
                        <!--<a data-w-tab="Tab 3" class="tabs-vertical-tab w-inline-block w-tab-link" tabindex="-1" id="w-tabs-1-data-w-tab-2" href="#w-tabs-1-data-w-pane-2" role="tab" aria-controls="w-tabs-1-data-w-pane-2" aria-selected="false">-->
                        <!--    <div>Отзывы читателей</div>-->
                        <!--</a>-->
                        <a data-w-tab="Tab 4" class="tabs-vertical-tab w-inline-block w-tab-link w--current" id="w-tabs-1-data-w-tab-3" href="#w-tabs-1-data-w-pane-3" role="tab" aria-controls="w-tabs-1-data-w-pane-3" aria-selected="true">
                            <div>Отзывы читателей</div>
                        </a>
                    </div>
                    <div class="w-tab-content">
                        <div data-w-tab="Tab 1" class="w-tab-pane" id="w-tabs-1-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-1-data-w-tab-0">
                            <div class="panel">
                                <div class="panel-body">
                                    
                                    
                                    <div class="space-bottom-large">
                                        <h5 class="panel-subheading text-primary-1">График работы</h5>
                                        <div>
                                            <h3 class="card-heading display-inline">Центральная библиотека им. П.Д.Аввакумова</h3>
                                            
                                        </div>
                                    </div>
                                    <div class="text-lead">Выходной: воскресенье, праздничные дни, каждый последний день месяца - санитарный день. </div>
                                
                                
                                    <div class="grafik-test">
	<div data-day="1"><div class="grafik-test">
	<div data-day="1">Пн<span>9:00–19:00 без перерыва на обед.</span></div>
	<div data-day="2">Вт<span>9:00–19:00 без перерыва на обед.</span></div>
	<div data-day="3">Ср<span>9:00–19:00 без перерыва на обед.</span></div>
	<div data-day="4">Чт<span>9:00–19:00 без перерыва на обед.</span></div>
	<div data-day="5">Пт<span>9:00–19:00 без перерыва на обед.</span></div>
	<div class="halfs" data-day="6">Сб<span>10:00-18:00 с перерывом на обед с 13-14.</span></div>
	<div class="halfs" data-day="7">Вс<span>Выходной</span></div>
	</div></div>
</div>



                                    
                                    <div class="space-bottom-large">
                                        <h5 class="panel-subheading text-primary-1">График работы</h5>
                                        <div>
                                            <h3 class="card-heading display-inline">Филиалы </h3>
                                            
                                        </div>
                                    </div>
                                    <div class="text-lead">Выходные: суббота, воскресенье, праздничные дни, каждый последний день месяца - санитарный день.  </div>
                                
                                
                                    <div class="grafik-test">
	<div data-day="1"><div class="grafik-test">
	<div data-day="1">Пн<span>10:00–19:00 с перерывом на обед с 13 до 14 ч.</span></div>
	<div data-day="2">Вт<span>11:00–18:00 с перерывом на обед с 13 до 14 ч.</span></div>
	<div data-day="3">Ср<span>11:00–18:00 с перерывом на обед с 13 до 14 ч.</span></div>
	<div data-day="4">Чт<span>11:00–18:00 с перерывом на обед с 13 до 14 ч.</span></div>
	<div data-day="5">Пт<span>11:00–18:00 с перерывом на обед с 13 до 14 ч.</span></div>
	<div class="halfs" data-day="6">Сб<span>Выходной</span></div>
	<div class="halfs" data-day="7">Вс<span>Выходной</span></div>
	</div></div>
</div>
                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
                                    <script>
jQuery(document).ready(function(){
var date = new Date(); // Создаём переменную типа Date()
var weekdays = ["7", "1", "2", "3", "4", "5", "6"]; // Создаём массив дней
var weekday = weekdays[date.getDay()]; //Получаем номер текущего день
jQuery('.grafik-test div[data-day="'+weekday+'"]').addClass('today'); //Добавляем класс 
});
</script>
<style>
    .grafik-test{
	display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.grafik-test div{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    background: #fff;
    border-radius: 5px;
    margin: 10px !important;
}
.grafik-test div span{

}
.grafik-test div.today{
	background: #3c5ccf;
    color: #fff;
}
</style>
                                </div>
                            </div>
                        </div>
                        <div data-w-tab="Tab 2" class="w-tab-pane" id="w-tabs-1-data-w-pane-1" role="tabpanel" aria-labelledby="w-tabs-1-data-w-tab-1">
                            <div class="panel">
                                <div class="panel-body">
                                                <h3 class="display-heading-4">Правила пользования библиотекой МБУ "МЦБС"</h3>
            <a style="width: 300px; margin-bottom:24px" href="/images/правила пользования.pdf" class="button w-button">
                <ya-tr-span data-index="141-0" data-translated="false" data-source-lang="en" data-target-lang="ru" data-value="Standard" data-translation="Стандартный" data-ch="0" data-type="trSpan" data-selected="false">правила пользования.pdf</ya-tr-span>
            </a>
                                    <iframe src="/images/правила пользования.pdf" width="100%" height="1000px"></iframe>
                                </div>
                            </div>
                        </div>
                        <div data-w-tab="Tab 3" class="w-tab-pane" id="w-tabs-1-data-w-pane-2" role="tabpanel" aria-labelledby="w-tabs-1-data-w-tab-2"></div>

                        <div data-w-tab="Tab 4" class="w-tab-pane w--tab-active" id="w-tabs-1-data-w-pane-3" role="tabpanel" aria-labelledby="w-tabs-1-data-w-tab-3">
                            <style>
                                i {
                                    cursor: pointer;
                                }
                                
                                #selected {
                                    color: #f7c10c;
                                }
                                
                                #unselected {
                                    color: gray;
                                }
                            </style>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>Оставить отзыв</h3>
                                    <form action="{{route('UploadReview')}}" method="POST">
                                        @csrf
                                    <div class="space-bottom-large">
                                        <i style="font-size: 24px;" class="fa fa-star star-1"></i>
                                        <i style="font-size: 24px;" class=" fa fa-star star-2 "></i>
                                        <i style="font-size: 24px;" class="fa fa-star star-3"></i>
                                        <i style="font-size: 24px;" class=" fa fa-star star-4 "></i>
                                        <i style="font-size: 24px;" class="fa fa-star star-5"></i>
                                        <sub class="autoRating">
                                            (<span>0</span> / 5)
                                            <input name="mark" type="text" value="0" id="inp" style="display:none">
                                            <br><br>
                                        <textarea name="review" placeholder="Написать отзыв..." maxlength="5000" class="form-input textarea w-input" style="width: 100%; height: 181px;"></textarea>
                                        <input type="submit" style=" margin-top: 16px; width: 100%; height: 48px;" value="Отправить" class="button button-large w-button ">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                                @foreach($reviews as $review)
                                
                            <div class="panel" style="margin-top: 16px">
                                <div class="panel-body">
                                    <h3>{{$review->userid}}</h3>
                                    <p>{{$review->review}}</p><br>
                                    <div style="display: flex">
                                                                            <h5><i style="font-size: 24px; color: #f7c10c; margin-right: 6px; pointer-events: none;" class="fa fa-star star-5"></i>{{$review->mark}}</h5>
                                    <p style="margin-left: 8px">| {{$review->updated_at}}</p>
                                    </div>

                                </div>
                            </div>
                                @endforeach

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=5dcb2e333e05bec4ef2fee2f " type="text/javascript " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
    <script src="js/main.js " type="text/javascript "></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>
        function changeStarColor(ratingArg) {
            let rating = ratingArg;
            for (let i = 1; i <= rating; i++) {
                $(`.star-${i}`).attr("id", "selected");
            }
            for (let i = rating + 1; i <= 5; i++) {
                $(`.star-${i}`).attr("id", "unselected");
            }
            $(".autoRating > span").html(rating);
            $(".autoRating > #inp").attr('value', rating);
        }

        let selectedRating = 0;

        $("i").hover(function() {
            let starClass = parseInt($(this).attr("class").split("star-")[1]);
            changeStarColor(starClass);
        }, function() {
            if (selectedRating == 0) {
                changeStarColor(0);
                $(".autoRating > span").html("0");
                $(".autoRating > #inp").attr('value', 0);
            } else {
                changeStarColor(selectedRating);
            }
        });

        $("i").click(function() {
            let starClass = parseInt($(this).attr("class").split("star-")[1]);
            changeStarColor(starClass);
            selectedRating = starClass;
        });
    </script>
</body>

</html>
@extends('master')

<body>
        
    @section('title', 'home')
    @section('content')
    
        <!-- ================================================================================================== -->
        <!-- <div class="content"> -->
            <div class="drum">
            
                <div class="important-news">
                    <a href="">
                        <img src="{{ url('img/office.jpg') }}">
                    </a>
                    <div class="important-news-text">
                        <a class="name" href="">Слишком большие надежды: как корпорации хоронят стартапы</a>
                        <div class="author">
                            <a href="">jon</a>
                        </div>
                    </div>
                </div>
            
                <div class="main">
            
                    <div class="position_news" style=""> 
                        <a class="newsid newsid-m15" href="#">Новости дня</a>
                    </div>
            
                    @foreach ($mains_not_photo as  $main_photo)
                        <div class="home_post_container">
                            <div class="post_info">
                                <div class="post_info_date">
                                    <b>{!! date('H:i', strtotime($main_photo->time_create)) !!}</b>
                                </div>
                                <div class="post_info_filter">
                                    {!! $main_photo->filter !!}
                                </div>
                                <div class="post_info_author">
                                    {!! $main_photo->author !!}
                                </div>
                            </div>
                            <a href="{!!    action('ContentController@show',    $main_photo->id)  !!}">
                                <h2 class="title">{!! $main_photo->content_main !!}</h2>
                            </a>
                        </div>
                    @endforeach
            
                </div>
            </div>
            <!-- ============================================================================================== -->
    
    
            <div class="drum_buttom">
                <div class="sidebar">
                    <div class="population_news">
                        Сейчас читают
                    </div>
                    <div>
                            <div class="content_news">
                                @foreach($siderights as $sideright)
                                <li class="item">
                                    <a href="{!!    action('ContentController@showSide',    $sideright->id)  !!}">
                                        <span class="list_time">
                                            <b>{!! date('F d', strtotime($sideright->time_create))!!}</b>
                                                
                                        </span>
                                        <span class="list_item_text">
                                            {!! $sideright->content !!}
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </div>
                    </div>
                </div>

                <div>
                    @foreach ($mains as  $main)
                        <div class="main_with_photo">
                             <img  class="mainphoto" src="/storage/image/{{ $main->image }}">
                             <div class="post_with_photo">
                                 <div class="post_info_photo">
                                     <div class="post_date_photo">
                                         <b>{!! date('H:i', strtotime($main->time_create)) !!}</b>
                                     </div>
                                     <div class="post_filter_photo">
                                         {!! $main->filter !!}
                                     </div>
                                     <div class="post_author_photo">
                                         {!! $main->author !!}
                                     </div>
                                 </div>
                                 <a href="{!!    action('ContentController@showPhoto',    $main->id)  !!}">
                                    <h2 class="title_photo">{!! $main->content_main !!}</h2>
                                 </a>
                                 <div class="post_content_photo"> 
                                    <p> {!! $main->content !!}</p>        
                                 </div>
                             </div>
                        </div>
                    @endforeach
                    <div class="poginate">
                        {{ $mains->links() }}
                    </div>
                </div>
            </div>






            <div style="background-color: white">
                <div class="drum_inline">
                    <div>
                        <div class="item-material" style="min-height: 376px;">
                            <a class="ahref" href="/forbeslife/352437-dlya-kogo-roman-abramovich-kupil-chetvertyy-dom-v-nyu-yorke-za-18-mln">
                                <img src="{{ url('img/mandarin.jpg') }}" width="520" height="400" alt="Steven Wang Architects">    <span class="name-material"><span class="field-content">Для кого Роман Абрамович купил четвертый дом в Нью-Йорке за $18 млн </span></span>
                            </a>
                            <div class="author-material"><a class="ahref-author" href="/profile/347403-darya-gordeeva">Дарья Гордеева</a>, Forbes Contributor</div>
                        </div>
                    </div>

                    <div>
                        <div class="item-material" style="min-height: 376px;">
                            <a class="ahref" href="/forbeslife/352437-dlya-kogo-roman-abramovich-kupil-chetvertyy-dom-v-nyu-yorke-za-18-mln">
                                <img src="{{ url('img/drub_inline.jpg') }}" width="520" height="400" alt="Steven Wang Architects">    <span class="name-material"><span class="field-content">Для кого Роман Абрамович купил четвертый дом в Нью-Йорке за $18 млн </span></span>
                            </a>
                            <div class="author-material"><a class="ahref-author" href="/profile/347403-darya-gordeeva">Дарья Гордеева</a>, Forbes Contributor</div>
                        </div>
                    </div>

                    <div>
                        <div class="item-material" style="min-height: 376px;">
                            <a class="ahref" href="/forbeslife/352437-dlya-kogo-roman-abramovich-kupil-chetvertyy-dom-v-nyu-yorke-za-18-mln">
                                <img src="{{ url('img/roman.jpg') }}" width="520" height="400" alt="Steven Wang Architects">    <span class="name-material"><span class="field-content">Для кого Роман Абрамович купил четвертый дом в Нью-Йорке за $18 млн </span></span>
                            </a>
                            <div class="author-material"><a class="ahref-author" href="/profile/347403-darya-gordeeva">Дарья Гордеева</a>, Forbes Contributor</div>
                        </div>
                    </div>


                    <div>
                        <div class="item-material" style="min-height: 376px;">
                            <a class="ahref" href="/forbeslife/352437-dlya-kogo-roman-abramovich-kupil-chetvertyy-dom-v-nyu-yorke-za-18-mln">
                                <img src="{{ url('img/dev.jpg') }}" width="520" height="400" alt="Steven Wang Architects">    <span class="name-material"><span class="field-content">Для кого Роман Абрамович купил четвертый дом в Нью-Йорке за $18 млн </span></span>
                            </a>
                            <div class="author-material"><a class="ahref-author" href="/profile/347403-darya-gordeeva">Дарья Гордеева</a>, Forbes Contributor</div>
                        </div>
                    </div>
                </div>
            </div>



    @endsection
    
</body>


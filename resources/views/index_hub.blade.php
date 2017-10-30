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
                                    {{$main_photo->filter}}
                                </div>
                                <div class="post_info_author">
                                    {{$main_photo->author}}
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
                                    <a href="">
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
                             <img  class="mainphoto" src="{{ asset('img/'.$main->image) }}">
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
                                 <h2 class="title_photo">{!! $main->content_main !!}</h2>
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

    @endsection
    
</body>


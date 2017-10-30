<div class="sidebar">
                
                    <div class="population_news">
                        Сейчас читают
                    </div>
                    <div class="content_news">
                        @foreach($sidebars as $sidebar)
                            <li class="item">
                                <a href="">
                                    <span class="list_time">
                                        <b>{!! $sidebar->time_create !!}</b>
                                            
                                    </span>
                                    <span class="list_item_text">
                                        {!! $sidebar->content !!}
                                    </span>
                                </a>
                            </li>
                        @endforech
                    </div>
                
                </div>
<!-- @extends(index_hub)




@section('sidebar')
                            @foreach ($sidebars as $sidebar)
                            <div class="sidebar"> 
                                    <div class="sideright ">


                                    	<!-- <a class="newsid newsid-m15" href="#">Главные новости</a> -->
                                    				<!-- <div class="position_news" style="">  -->
                                    				<a class="newsid newsid-m15" href="#">Главные новости</a>
                                    				</div>

                                    				



                                    	<div class="content_news list_item">
                                    		<div class="custom_scroll custom_scroll2">


                                    			
                                    			<li class="list_item">
                                    				<a class="list_item_lenta" href="">
                                    					<span class="list_item_time">
                                    						<b>{{ $sidebar->time_create }}</b>
                                    						
                                    					</span>

                                    					<span class="list_item_text">
                                    						{{$sidebar->content}}
                                    					</span>
                                    					

                                    				</a>
                                    				
                                    			</li>

                                    		</div>
                                    		
                                    	</div>
	                                	
                                	                                	
	                                </div>
 
                            </div>
                            @endforeach
                            @endsection -->
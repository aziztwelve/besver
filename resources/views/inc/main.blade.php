<head>
    <meta charset="utf-8">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- <link href="style.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">   
    <link rel="stylesheet" type="text/css" href="{{ url('css/style_hub.css') }}">
    <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" scr="{{ url('js/bootstrap.js') }}"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 </head>


<div class="main_container">

		<div id="page"> 

			<div class="content">



	 

	


							<!-- @section('article') -->
	                        <article class="article">

                    	       <div id="content_box"> 
                    
	                    		   <div class="post excerpt date_con_handler"> 

	                                 <div class="main">
        
        		                        <div class="ya"> 
        
        		                             <img  class="mainphoto" src="{{ url('img/leo.jpg') }}">
        		          
                    		                 <div class="home_post_container"> 
        
                    		        	           <div class="post_info">

                                                        <div class="post_info_date">
                                                             <b>{{ date( ' jS \of F  h:i', time()) }}</b>  
                                                        </div>


                                                        <div class="post_info_author">
                                                       	   <!-- {{$mains->author}} -->tiktu
                                                        </div>     

                                                        <div class="post_info_filter">
                                                        	  <!-- {{$mains->filter}} -->es5tusr
                                                        </div>

                    		        	            </div>



                    		        	            <h2 class="title">
                    		        	            	<!-- {{$mains->content_main}} -->
                    		        	            	Мифы о запуске на Product Hunt и почему вам это действительно нужно   
                                                    </h2>
        
        
                    		        	            <div class="post_content"> 
        
                 	     	                            <p id="tetxid">
                 	     	                        	     <!-- {{$mains->content}} -->
                 	     	                        		 Опыт графического редактора Crello, который собрал больше 3000 голосов и вошел в топ-50 проектов на Product Hunt за все время. 
                                                        </p>        
         	     	                                </div>        
        
        
        
                 	     	                      
        
                 	     	                     </div>
        
                                        </div>

                                        <div class="entry_footer entry_footer--short">
                 	     	                      	
                 	     	            </div>
        
                        
 	                                 </div>

        
                        
 	                                 </div>





                                </div>
                                 
 	                               
                             </article>

                            <!-- @show -->



                     

                            <!-- @section('sidebar') -->
                            <div class="sidebar"> 
                                    <div class="sideright ">


                                    	<!-- <a class="newsid newsid-m15" href="#">Главные новости</a> -->
                                    				<div class="position_news" style=""> 
                                    				<a class="newsid newsid-m15" href="#">Главные новости</a>
                                    				</div>

                                    				



                                    	<div class="content_news list_item">
                                    		<div class="custom_scroll custom_scroll2">


                                    			
                                    			<li class="list_item">
                                    				<a class="list_item_lenta" href="">
                                    					<span class="list_item_time">
                                    						<b>{{ date( 'g:i ', time()) }}</b>
                                    						
                                    					</span>

                                    					<span class="list_item_text">
                                    						Вице-премьер Аркадий Дворкович рассказал, когда решится судьба "ВИМ-Авиа"
                                    					</span>
                                    					

                                    				</a>
                                    				
                                    			</li>

                                    		</div>
                                    		
                                    	</div>
	                                	
                                	                                	
	                                </div>
 
                            </div>
                            <!-- @show -->
                         

            </div><!-- CONTENT -->

        </div><!-- PAGE -->


</div><!-- MAIN_CONTAINER -->
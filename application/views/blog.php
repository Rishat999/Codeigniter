<section id="blogs">
	<div class="row" style="margin-right: 0px !important;">
		<div class="container">
			<div id="secondary" class="secondary col-sm-3">
				<div id="widget-area" class="widget-area" role="complementary">
					<aside id="search-3" class="widget widget_search">
						<button class="btn add_blog_btn btn-success" data-toggle="modal" data-target="#add_new_blog"><i class="fa fa-edit"></i> Add New Blog                            
                        </button>						
							<div>
								<label class="screen-reader-text" for="s"></label>
								<input class="form-control" placeholder="Search..." type="text"  name="blog_name" id="blog_name">
								<input class="btn btn-success" style="margin-top: 10px;width: 40%;" id="searchsubmit" value="Search">
							</div>
					</aside>
				<aside id="recent-posts-widget-with-thumbnails-2" class="widget recent-posts-widget-with-thumbnails minheight">
					<div id="rpwwt-recent-posts-widget-with-thumbnails-2" class="rpwwt-widget">
						<h4 class="widget-title">Latest Blogs</h4>	
						<?php
							for($i = 0; $i < 5; $i++)
							{?>								
								<div class="col-md-12 not-padding latest_individual_blog" >
									<div class="col-md-4 not-padding">
										<img src="<?php if(!empty($blogs[$i]['photo'])) echo $blogs[$i]['photo']; else echo "/assets/img/default_gallery.png";?>" style="width: 75px;    height: 75px;">
									</div>
									<div class="col-md-8 not-padding lastest_individual_blog_content" >
										<p class="latest_title"><b class="dashed-bottom">	<?php 
						                    if(strlen($blogs[$i]['title']) > 15) echo substr($blogs[$i]['title'], 0,12).'..'; else
						                    echo $blogs[$i]['title'];?></b>
						                </p>
						                <p class="latest_content" data-toggle="tooltip" data-placement="bottom" title="<?php echo $blogs[$i]['content'];?>"><b class="dashed-bottom">	<?php 
						                    if(strlen($blogs[$i]['content']) > 20) echo substr($blogs[$i]['content'], 0,20).'..'; else
						                    echo $blogs[$i]['content'];?></b>
						                </p>
						                <p class="latest_author"><b class="dashed-bottom">By&nbsp;<?php 
						                    if(strlen($blogs[$i]['username']) > 15) echo substr($blogs[$i]['username'], 0,12).'..'; else
						                    echo $blogs[$i]['username'];?></b>
						                </p>
									</div>
								</div>
							<?php }
						?>
					</div>
				</aside>			
			</div>
		</div>
			<div class="col-sm-9 blog_show filter_data">
				<?php
				if(!empty($blogs)){
					foreach($blogs as $row)
					{?>
						<a href="blog/detail_blog?id=<?php echo $row['id'];?>">
							<div class="col-md-3 individual_blog">
				                <div class="view">			                    
				                    <img src="<?php echo $row['photo'];?>" class="dog_photo">
				                    <div class="propertyType commercial" style="   background-color: #0e34e2;"><?php echo substr($row['created_at'], 0,10);?></div>
				                </div>
				                <div class="info">
				                    <p class="large" style="text-overflow: ellipsis"><b><?php 
				                    if(strlen($row['title']) > 15) echo substr($row['title'], 0,12).'...'; else
				                    echo $row['title'];?></b></p>
				                    <p class="small wb-red"  data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['content'];?>">
				                    	<?php
				                    if(strlen($row['content']) > 22 ) echo substr($row['content'], 0, 20).'...'; else echo $row['content']?></p>
				                    
				                    
				                </div>
				                <div class="stats wb-red-bg">
				                    <span class="fa fa-paw" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['username']; ?>">&nbsp;By<strong><?php if(strlen($row['username']) > 15) echo substr($row['username'], 0, 12).'...'; else echo ' '.$row['username']; ?></strong></span>
				                    <!-- <span class="fa fa-paw" style="float: right; margin-top: 2%;"> <strong><?php echo $row['gender'];?></strong></span>	 -->
				                </div>
				            </div>
				        </a>
					<?php }}
				else
				{?>
					<section class="content" style="padding-top: 0px;">
		                <div class="row">
		                    <div class="col-xs-12">
		                        <div class="box" >           
		                            <p class="text-center">
		                              <img src="<?php echo base_url(); ?>assets/img/Users-icon.png" style="width: 245px;">
		                            </p>
		                            <p class="text-center text-danger" style="font-size:1.5em;">Woohoo! No <b>blogs &nbsp;</b>exist! | <a href="#" onclick='location.reload(true); return false;'>Reload</a>
		                            </p>
		                            <div class="error-page" style="font-size:1.5em;margin-top: 5%;padding-left: 5%;padding-right: 5%;color: #fff;">
		                                <br>
		                                <h2 class="text-yellow" style="margin-top: 0px;"> 404</h2>
		                                <div class="error-content">
		                                  <h3 style="color: #fffefe;"><i class="fa fa-warning text-yellow"></i> Oops! No Blogs!</h3>
		                                  <p style="color: #fff;">
		                                    We could not find the blogs at all.
		                                    Meanwhile, you may refresh this page or you can do <a href="#" onclick='location.reload(true); return false;'>Reload</a>&nbsp;Now 
		                                  </p>                      
		                                </div>
		                            </div>  
		                        </div>   
		                    </div>
		                </div>  
		        	</section>
				<?php }
				?> 
			</div>
			<div id="pagination_blog" class="light-theme simple-pagination">
            </div> 
		</div>		
	</div>
</section>
<div class="modal fade" id="add_new_blog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-plus"></i>Add New Blog</h4>
            </div>
            <div class="modal-body col-md-12">     
            	<form method="POST" class="add_blog_form">
	            	<div class="form-group col-md-12" style="text-align: center;">
	    				<h4>Blog Image</h4>
	    				<style type="text/css">
	    					.wrap-custom-file 
								{
								    position: relative;
								    display: inline-block;
								    width: 180px;
								    height: 180px;
								    margin: 0 0.5rem 1rem;
								    text-align: center;
								    left: 0px !important;
								}
							.dropzone .dz-image img
						      {
						        width: 165px !important;
						        height: 165px !important;
						      }	
	    				</style>
	      				<div class="col-md-12 imagepart1">    
	    					<div class="wrap-custom-file">                
			                    <input type="file" name="photo" id="photo" accept=".gif, .jpg, .png">
			                    <label for="photo">
			                        <span>Click here</span>
			                        <i class="fa fa-plus-circle"></i>
			                    </label>     
			                </div>
	    				</div>            				          				
	    			</div>
	                <div class="form-group col-md-6">
		                <label>Username</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tower"></i>
			                </span>
			                <input type="text" class="username form-control" placeholder="User Name here" name="username" id="username" required="">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Title</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-calendar"></i>
			                </span>
			                <input type="text" class="title form-control" placeholder="Name" name="title" id="title" required="">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>URL</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="glyphicon glyphicon-tag"></i>
			                </span>
			                <input type="text" class="url form-control" placeholder="URL here" name="url" id="url" required="">
		                </div>
		            </div>
		            <div class="form-group col-md-6">
		                <label>Email</label>
		                <div class="input-group">
			                <span class="input-group-addon">
			                    <i class="fa fa-envelope"></i>
			                </span>
			                <input type="email" class="email form-control" placeholder="Email here" name="email" id="email" required="">
		                </div>
		            </div>	            
		            	            
		            <div class="form-group col-md-12">
			            <label>Blog Content</label>
			            <div class="input-group" style="width: 100%;">      
			            	<textarea rows="5" cols="50" id="content" name="content" placeholder="Blog contents here..." class="form-control" required="" ></textarea>
			            </div>
			        </div>
			        <div class="row col-xs-12">
	            		<div class="col-xs-4">	            		
		            	</div>
		            	<div class="col-xs-4">
		            		<button type="submit" name="add_new_blog" class="btn-add_new_blog btn btn-primary"><i class="fa fa-plus"></i> Add New Blog</button>
		            	</div>
	            	</div>
			    </form>
            </div>
            <div class="modal-footer">
            	
            	
                
                
            </div>
        </div>
    </div>
</div>
<script>
    $("#searchsubmit").click(function(e){
    	filter_data();
    });
    pagaination_reset();
    function pagaination_reset()
    {	
    	var items = $(".individual_blog");
	    var numItems = items.length;
	    var perPage = 12;
	    items.slice(perPage).hide();
	    $("#pagination_blog").pagination({
	        items: numItems,
	        itemsOnPage: perPage,
	        cssStyle: "light-theme",
	        onPageClick: function(pageNumber) {
	            var showFrom = perPage * (pageNumber - 1);
	            var showTo = showFrom + perPage;
	            items.hide()
	                 .slice(showFrom, showTo).show();
	        }
	    });
	    function checkFragment() {
	        var hash = window.location.hash || "#page-1";
	        hash = hash.match(/^#page-(\d+)$/);
	        if(hash) {
	            $("#pagination_blog").pagination("selectPage", parseInt(hash[1]));
	        }
	    };
	    $(window).bind("popstate", checkFragment);
	    checkFragment();
    }
    function filter_data()
    {
        $('.filter_data').html("<div id ='loading'></div>");
        $("#pagination_blog").show();
        var blog_name = $('#blog_name').val();
        $.ajax({
          url:"blog/search_blog",
          method:"POST",
          data:{'blog_name' : blog_name},
          success:function(data){
          	console.log(data);
          	console.log(data.toString().search("individual_blog"));
          	$('.filter_data').html(data);
          	if(data.toString().search("individual_blog") == -1)
          	{	
          		$("#pagination_blog").hide();
		    }
		    else
		    {	
          		pagaination_reset();
		    }
          }
       });
   }
   
                
</script>
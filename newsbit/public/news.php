<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>	
	
	<section class="ptb-0">
		<div class="mb-30 brdr-ash-1 opacty-5"></div>
		<div class="container">
			<a class="mt-10" href="index.html"><i class="mr-5 ion-ios-home"></i>Home<i class="mlr-10 ion-chevron-right"></i></a>
			<a class="mt-10 color-ash" href="archive-page.html">Blog Archive</a>
		</div><!-- container -->
	</section>
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					
					<h4 class="p-title"><b>GIDES & ANLYTICS</b></h4>
					<div class="row">
					
					<?php 
                        
                        $per_page = 3;
                        
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            $page = $page*$per_page - $per_page;
                        } else {
                            $page = "0";
                        }
                        
                        if($page <=0){
                            $page = "0";
                        }
                        
                    
                        $query = mysqli_query($connection, "SELECT * FROM news, category WHERE news.category_id = category.cate_id LIMIT $page,$per_page");
                        
                        
                        $query_find_count = mysqli_query($connection, "SELECT * FROM news");
                        $count = mysqli_num_rows($query_find_count);
                        $count = ceil($count / $per_page);
                       
                        
                        
                        while($row = mysqli_fetch_array($query)){
                           ?> 
                            
                            <div class="col-sm-6">
							<img src="images/crypto-news-6-600x450.jpg" alt="">
							<h4 class="pt-20"><a href="#"><b><?php echo $row['news_title']; ?></b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b><?php echo $row["cate_title"]; ?></b></a></li>
							</ul>
						</div><!-- col-sm-6 -->
                            
                            
                     <?php  } ?>
                        
                    
					
						
						
						
						
					</div><!-- row -->
					
					
<!--                    pager-->
                  <nav aria-label="Page navigation example">
                   <ul class="pagination justify-content-center">
                      
                      <?php 
                       
                       for($i = 1; $i <= $count; $i++){
                           echo "<li class='page-item'><a class='page-link' href='news.php?page={$i}'>{$i}</a></li>";
                       }
                       
                       ?>
                       
                       
                   </ul>
                   </nav>
                    
                    
                    
				</div><!-- col-md-9 -->
				
				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						<ul class="list-block list-li-ptb-15 list-btm-border-white bg-primary text-center">
							<li><b>1 BTC = $13,2323</b></li>
							<li><b>1 BCH = $13,2323</b></li>
							<li><b>1 ETH = $13,2323</b></li>
							<li><b>1 LTC = $13,2323</b></li>
							<li><b>1 DAS = $13,2323</b></li>
							<li><b>1 BCC = $13,2323</b></li>
						</ul>
						
						<div class="mtb-50">
							<h4 class="p-title"><b>POPULAR POSTS</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-1-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-2-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-3-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img src="images/polular-4-100x100.jpg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>Bitcoin Billionares Hidding in Plain Sight</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 pos-relative">
							<img src="images/banner-1-600x450.jpg" alt="">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>Available for mobile & desktop</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Download for free</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
								information, discount, etc..</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Your email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div><!-- mtb-50 -->
						
					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
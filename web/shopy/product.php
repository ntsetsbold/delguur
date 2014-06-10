<?php include 'inc/pre-header.php'; ?>
	
	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="css/jquery.nouislider.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/innerpage.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="product-single">
			
	<?php include 'inc/header.php'; ?>
	
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">Нүүр</a></li>
						<li><a href="products.php">Цүнх</a></li>
						<li class="active">Solo Vintage Collection 17'-н нотебүүкний цүнх</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
					
			<section class="section">
				<div class="container">
					<div class="row">
						<!-- PRODUCT PREVIEW -->
						<div class="col-xs-12 col-sm-6">
							
							<div class="product-preview">
								<div class="big-image">
									<a href="images/product0.jpg" data-toggle="lightbox">
										<img src="images/product0.jpg" alt=""  style="width: 450px;"/>
									</a>
								</div>
								<ul class="thumbs unstyled clearfix">
                                    <?php for($i = 0; $i<3; $i++):?>
									<li><a href="images/product<?php echo $i ?>.jpg"><img src="images/product<?php echo $i ?>.jpg" alt="" /></a></li>
                                    <?php endfor; ?>
								</ul>
							</div>
							
						</div>
						<!-- // PRODUCT PREVIEW -->
						<div class="space40 visible-xs"></div>
						<!-- PRODUCT DETAILS -->
						<div class="col-xs-12 col-sm-6">
							<section class="product-details add-cart">
								<header class="entry-header">
									<h3 class="entry-title uppercase">
                                        Solo Vintage Collection 17'-н нотебүүкний цүнх
									</h3>
								</header>
								<article class="entry-content">
									<figure>
										<span class="entry-price inline-middle">120'000₮</span>
										<div class="rate-bar inline-middle">
											<input type="range" value="4.5" step="0.5" id="backing0" />
											<div class="rateit" data-rateit-backingfld="#backing0" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
										</div>
										<span class="entry-review-count inline-middle">( 2 үнэлгээ )</span>
										
										<ul class="entry-meta unstyled">
											<li>
												<span class="key">Брэнд:</span>
												<span class="value">Solo</span>
											</li>
											<li>
												<span class="key">Барааны код:</span>
												<span class="value">GF-123456</span>
											</li>
										</ul>
										
										<div class="clearfix"></div>
										
										<figcaption class="m-b-sm">
											<h5 class="subheader uppercase">Товч танилцуулга:</h5>
											<p>Ut suscipit senectus ligula in non nisi nam lobortis sapien curabitur diam, fames morbi pharetra adipiscing massa ornare habitant quam eu placerat himenaeos, sem mattis tortor pretium tortor varius pretium nam metus euismod.</p>
										</figcaption>
										
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<h5 class="subheader uppercase">Өнгө:</h5>
												<div class="inline-middle styled-dd">
													<select>
														<option>-- Сонгоно уу --</option>
														<option value="Black">Хар</option>
														<option value="Aubergine">Хүрэн</option>
													</select>
												</div>
											</div>
											<div class="space30 visible-xs"></div>
											<div class="col-xs-12 col-sm-6">
												<h5 class="subheader uppercase">Хэмжээ:</h5>
												<div class="inline-middle styled-dd">
													<select>
														<option>-- Сонгоно уу --</option>
														<option value="xs">X-Small</option>
														<option value="s">Small</option>
													</select>
												</div>
											</div>
										</div>
										
										<ul class="inline-li li-m-r-l m-t-lg" style="padding-left: 0px; margin-left: -4px;">
											<li>
												<a href="#" class="btn btn-default btn-lg btn-round add-to-cart">сагсанд нэмэх</a>
											</li>
											<li>
												<a href="#">+ хүслийн жагсаалтанд нэмэх</a>
											</li>
										</ul>
										
									</figure>
								</article>
							</section>
						</div>
						<!-- // PRODUCT DETAILS -->
					</div>
					<div class="m-t-lg">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#product-description" data-toggle="tab">Тайлбар</a></li>
							<li><a href="#product-reviews" data-toggle="tab">Үнэлгээ</a></li>
							<li><a href="#product-shipping" data-toggle="tab">Хүргэлт</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="product-description">
								<p>Ultricies et consectetur rhoncus lorem mattis, ligula interdum nibh dolor ipsum, venenatis ultrices sem nisl senectus phasellus lectus facilisis gravida curabitur interdum pretium et pellentesque nullam auctor vestibulum aenean ipsum placerat erat volutpat lectus mi est lacinia sociosqu, pretium habitasse aenean eros tristique augue a vivamus ac, sapien blandit nullam et neque curabitur varius nostra dui dictum cras orci congue.</p>
								<ul>
									<li>Sed ornare cras donec litora </li>
									<li>Integer curabitur orci </li>
									<li>At nullam aliquam libero nam himenaeos </li>
								</ul>
							</div>
							<div class="tab-pane fade in" id="product-reviews">
								<div class="comments-list">
									<div id="disqus_thread"></div>
									<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
									<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
								</div>
							</div>
							<div class="tab-pane fade in" id="product-shipping">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
								<h5 class="m-b-xs"><i class="iconfont-gift inline-middle m-r-sm"></i><span class="inline-middle">Gift Wrap</span></h5>
								<p>Aenean tincidunt a ante a molestie. Fusce in elit urna. Etiam ornare blandit feugiat. Donec a risus volutpat, placerat mauris quis, scelerisque urna. Donec commodo pretium aliquet. Maecenas mollis tellus ut arcu aliquet, eget lobortis velit volutpat. Proin venenatis non erat venenatis lobortis. </p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- FEATURED PRODUCTS -->
			<section class="section featured visible-items-4">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">онцлох бараа бүтээгдэхүүн</h3>
							<p class="section-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit ac lobortis lacus</p>
						</header>
						
						<div class="clearfix"></div>
						
						<!-- BEGIN CAROUSEL -->
						<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
						
							<div class="owl-controls clickable top">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
									<div class="owl-next"><i class="iconfont-angle-right"></i></div>
								</div>
							</div>
							
							<div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true">
                                <?php for($i = 0; $i < 12; $i++): ?>
								<div class="product" data-product-id="<?php echo $i ?>">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">Sale</div>
												</li>
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing1" />
												<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="product.php">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount">$ 350.00</s>
											<strong class="accent-color price">$ 250.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
										</div>
									</div>
								</div>
                                <?php endfor; ?>
								
							</div>
								
						</div>
						<!-- // END CAROUSEL -->
						
					</div>
				</div>
			</section>
			<!-- // FEATURED PRODUCTS -->
			
		</main>
		<!-- // SITE MAIN CONTENT -->
		
	<?php include 'inc/footer.php'; ?>

	<!-- Particular Page Javascripts -->
	<script src="js/jquery.nouislider.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/products.js"></script>
	<!-- // Particular Page Javascripts -->
	
	<!-- Disqus -->
	<script type="text/javascript">
	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	var disqus_shortname = 'gfashion';		// required: replace example with your forum shortname

	/* * * DON'T EDIT BELOW THIS LINE * * */
	(function() {
		var dsq = document.createElement('script'); dsq.async = true;
		dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
	</script>
	<!-- // Disqus -->
	
</body>
</html>
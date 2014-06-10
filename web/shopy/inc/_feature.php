<!-- BEGIN CAROUSEL -->
<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

    <div class="owl-controls clickable outside">
        <div class="owl-buttons">
            <div class="owl-prev"><i class="iconfont-angle-left"></i></div>
            <div class="owl-next"><i class="iconfont-angle-right"></i></div>
        </div>
    </div>

    <div class="owl-carousel owl-small owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
        <?php for($i = 0; $i < 12; $i++): ?>
            <div class="product" data-product-id="<?php echo $i ?>">
                <div class="entry-media">
                    <img data-src="images/450x450.png" alt="" class="thumb" />
                    <div class="hover">
                        <a href="product.php" class="entry-url"></a>
                        <ul class="icons unstyled">
                            <li>
                                <div class="circle ribbon ribbon-sale" style="font-size: 10px ;">Sale</div>
                            </li>
                            <li>
                                <a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                            </li>
                            <li>
                                <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                            </li>
                        </ul>
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
                        <a href="#" class="pull-left m-r">+ Хүслийн жагсаалт</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>

</div>
<!-- // END CAROUSEL -->

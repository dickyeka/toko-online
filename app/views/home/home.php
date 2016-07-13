<?= $element->getNav(); ?>

<!-- content -->

<div class="new-content">
	<div class="container deal-container">
		<div class="row new-deal">
			<h2 class="deal-heading">Promo Terbaru</h2>
				<div class="clearfix"></div>
				<div id="new-carousel" class="pull-left">
					<?php  foreach ($data['new_products'] as $product) : ?>	
						<div class="new-deal-box deal-box lazyload" >
							<div class="overlay-new-deal overlay-box">
								<a href="<?= url('cart/add/'.$product->id.'/1') ?>" class="detail-button new-detail-button">Buy</a>	
							</div>
							<div class="deal-img">
								<img src="<?= asset('images/'.$product->image) ?>" class="lazyload" width="437">
							</div>
							<div class="deal-box-content">
								<div class="deal-title">
									<h3 id="promo-title"><?= str_limit($product->title,50) ?></h3>
								</div>
								<div class="merchant-name pull-left">
									<h4 id="merchant-title"><img src="frontend/images/merchant_icon.png" alt="Merchant" height="13"><?= $product->merchant->name ?></h4>
								</div>
								<div class="sold-amount pull-right">
									<p>Stok <?= $product->stok ?></p>
								</div>
								<div class="clearfix"></div>
								
								<div class="price-box pull-left">
									<p class="discount-price">Rp.<?= $product->price ?></p>
								</div>
								
							</div>
						</div>	
					<?php endforeach ?>
				</div>

			<div class="new-carousel-nav">
				<div class="new-carousel-button">
					<div class="next">
						<a href="deals/home.htm#" id="new-next"><img src="frontend/images/next_button.png" alt="Next Button"></a>
					</div>
					<div class="new-separator"></div>
					<div class="prev">
						<a href="deals/home.htm#" id="new-prev"><img src="frontend/images/prev_button.png" alt="Previous Button"></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row normal-deal">
			<h2 class="deal-heading">Semua Promo</h2>
			<div class="clearfix"></div>
			<?php  
			$i=0;
			foreach ($data['new_products'] as $product) : 
				$i++;
				
				$last = false;

				if ($i%3==0){
					$last = true;
				}

			?>	
			
			<div class="normal-deal-box deal-box lazyload  <?= $last ? 'last' : '' ?>" >
				
				<div class="overlay-normal-deal overlay-box ">
					<a href="<?= url('cart/add/'.$product->id.'/1') ?>" class="detail-button normal-detail-button">Buy</a>	
				</div>

				<div class="deal-img">
					<img src="<?= asset('images/'.$product->image) ?>" class="lazyload" width="345">
				</div>
				<div class="deal-box-content">
					<div class="deal-title">
						<h3 id="promo-title"><?= str_limit($product->title,50) ?></h3>
					</div>
					<div class="merchant-name pull-left">
						<h4 id="merchant-title"><?= $product->merchant->name ?></h4>
					</div>
						<div class="sold-amount pull-right">
							<p>Stok <?= $product->stok ?></p>
						</div>
					<div class="clearfix"></div>
					
					<div class="price-box pull-left">
						<p class="discount-price">Rp <?= $product->price?></p>
					</div>
				</div>
			</div>
			

			<?php endforeach ?>
		
	</div>

<?=  $element->getFooter(); ?>				
		

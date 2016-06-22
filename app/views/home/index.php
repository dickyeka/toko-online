<?= $element->getNav(); ?>

<!-- Title -->
<div class="row">
    <div class="col-lg-12">
        <h3>Latest Features</h3>
    </div>
</div>
<!-- /.row -->


<div class="row text-center">
<?php  foreach ($data['products'] as $product) : ?>
	<div class="col-md-3 col-sm-6 hero-feature">
	    <div class="thumbnail">
	        <img src="http://placehold.it/800x500" alt="">
	        <div class="caption">
	            <h4><?=  str_limit($product->title,30) ?></h4>
	            <p ><?=  str_limit($product->description,100) ?></p>
	            <p>
	                <a href="<?= url('cart/add/'.$product->id.'/1') ?>" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
	            </p>
	        </div>
	    </div>
	</div>

<?php endforeach ?>
</div>

<?=  $element->getFooter(); ?>

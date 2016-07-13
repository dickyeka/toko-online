<?= $element->getNav(); ?>

<div class="new-content">
	<div class="container">
		<h3 class="title-section">Purchase History</h3>
		<div role="tabpanel">
			<ul class="nav nav-tabs tabs-history" role="tablist" id="tab-history">
				<li role="presentation" class="active"><a href="#myvoucher" aria-controls="myvoucher" role="tab" data-toggle="tab"><strong>My Vouchers</strong></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="myvoucher">
						<?php foreach ($data['orders'] as $order): ?>
						<div class="history-record">
							<div class="history-detail pull-left">
								<h4 class="col-sm-12 history-title">#<?= $order->hash?></h4>
								<div class="col-sm-12 history-row-first">
									<div class="col-sm-4"><p class="history-label">Sales ID</p><p class="history-value">#<?= $order->hash?></p></div>
								<div class="col-sm-4"><p class="history-label">Total Pembayaran</p><p class="history-value" class="history-value">Rp <?= $order->total?></p></div>
								</div>	
								
								
								<div class="col-sm-12 history-row-second">
									<div class="payment-indicator onprocess pull-left"></div> <div class="text-uppercase pull-left history-value">
										<?=  $order->paid ? 'Sudah Bayar' : 'Belum Bayar' ?>
									</div>								
									
								</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
							<div class="history-footer">
								<div class="invoice-link-section pull-left">
									<p>
										<a href="<?=  url('order/show/'.$order->id)?>" class="text-uppercase history-footer-link">detail</a>
									</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<hr>
						<?php endforeach ?>
													

				</div>
			</div>
		</div>


		<div class="blank-separator"></div>




	</div>
</div>

<?=  $element->getFooter(); ?>
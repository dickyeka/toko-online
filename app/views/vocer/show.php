<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Vocer </title>
	<link rel="stylesheet" href="">
</head>
<body>
<table cellspacing="0" cellpadding="5" border="0" width="800" bgcolor="#FAF9F9" style="font-family: sans-serif; color:#444; margin:10px 0 0;-webkit-text-size-adjust: none;border: 1px solid #EEE;">
<tbody>

<tr>
	<td>
		<table class="header-container" style="width:800px">
		<tbody>
		<tr>
			<td>
				<h1 style="font-size: 1.6em;width: 355px;float:left;margin:0.3em 0 0 0;padding:0;">Vocer</h1>
				<td> <h5 style="text-align: right;width: 220px;margin:0;padding:0;float:right;"><strong><a style="color:green;text-decoration:none;" href="javascript:window.print()"><span style="color:green;text-decoration:none;">Cetak</span></a></strong></h5></td>
			</td>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr class="invoice-separator">
			<td colspan="2">
				<div style="margin: 15px 0 5px;border: 0;border-top: 1px solid #EEE;border-bottom: 1px solid white;">
				</div>
			</td>
		</tr>
		<tr>
			<td style="width: 300px">
				<h5 style="padding:0; margin:0.5em 0;"><strong>Nomor Vocer:</strong><span style="clear:both;display:block;font-weight:normal;"><?= $data['order']->hash; ?></span></h5>
				<h5 style="padding:0; margin:0.5em 0;"><strong>Tanggal Invoice:</strong><span style="clear:both;display:block;font-weight:normal;"><?= $data['order']->created_at; ?></span></h5>
                
			</td>
			
		</tr>
		</tbody>
		</table>
		<table class="detail-container" style="width:800px">
		<tbody>
		<tr class="invoice-separator">
			<td>
				<div style="margin: 18px 0;border: 0;border-top: 1px solid #EEE;border-bottom: 1px solid white;">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-size: .83em;">
					Daftar produk 
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<table style="width: 100%;font-size: 95%;">
				<thead style="background: green;color: white;font-size: 12px;">
				<tr colspan="6">
					<th width="30%" style="padding:5px 0;">
						Nama Produk
					</th>
					<th  style="padding:5px 0;">
						Toko
					</th>
					<th>
						Jumlah Barang
					</th>
					<th>
						Harga Barang
					</th>
					<th>
						Subtotal
					</th>


				</tr>
				</thead>
				<tbody>
					<?php foreach ($data['order_product'] as $order_product): ?>
                    <tr>
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;font-weight:bold;word-break:break-word">
                        	<?=  $order_product->product->title ?>
                        </td>
                        
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;">
                        
                        	<?=  $order_product->product->merchant->name ?>
                        </td>
                          <td style="padding: 3px;line-height: 20px;vertical-align: top;">
                        	<?=  $order_product->qty ?>
                        </td>
                        
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;">Rp <?=  $order_product->product->price ?></td>
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;">Rp <?=  $order_product->product->price*$order_product->qty ?></td>
                    </tr>
                    <?php endforeach ?>
     
                
                </tbody>
				<tfoot style="background: #FBFCF0;font-size: 14px;font-weight: bold;">
             
				    
                    <tr>
                        <td colspan="1" style="padding: 3px;line-height: 20px;vertical-align: top;border-bottom: 1px solid #DDD;"><strong>Total Pembayaran</strong></td>
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;border-bottom: 1px solid #DDD;"></td>
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;border-bottom: 1px solid #DDD;"></td>
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;border-bottom: 1px solid #DDD;"></td>
                        <td style="padding: 3px;line-height: 20px;vertical-align: top;border-bottom: 1px solid #DDD;">Rp <?= $data['order']->total ?></td>
                    </tr>
				</tfoot>
				</table>
			</td>
		</tr>
		</tbody>
		</table>
		
		<table class="footer-container" width="800px">
		<tbody>
		<tr class="invoice-separator">
			<td colspan="2">
				<div style="margin: 18px 0;border: 0;">
				</div>
			</td>
		</tr>

        
		<tr>
			<td colspan="2" style="padding: 10px;background-color: white;border: 1px solid #EEE; word-break: break-all;">
				<h4 style="margin:0.5em 0;font-size:1em;"><strong>Nama Pemesan:</strong></h4>
                <h5 style="margin:0.5em 0;font-weight:normal;"><strong>Dicky Eka S</strong></h5>
			</td>
		</tr>
		
		</tbody>
		</table>
		
	</td>
</tr>
<tr>
	<td colspan="2"><div style="margin: 18px 0;border-top: 1px solid #EEE;border-bottom: 1px solid white;"></div></td>
</tr>
</tbody>
</table>
</body>
</html>
	
</body>
</html>
</div>
<script type="text/javascript" src="<?= asset('frontend/js/app.js')?>"></script>
<script type="text/javascript">
	$(function(){

		window.lazySizesConfig = {
		addClasses: true
		};
		$('.deal-box').on('click',function(){
			window.location = $(this).data("location");
		});
		$('#new-carousel').carouFredSel({ 
		width:917, 
		height:489,
		items:2,
		auto:{
			play:false
		},
		scroll:{
			items:1,
			duration:500
		},
        prev : { 
	      button : "#new-prev",
	      key : "left"
	   },

	   next : { 
	      button : "#new-next",
	      key : "right"
	   }
	});

	$('#limited-carousel').carouFredSel({ 
		width:978, 
		height:398,
		items:3,
		auto:{
			play:false
		},
		scroll:{
			items:1,
			duration:500
		},
        prev : { 
	      button : "#limited-prev",
	      key : "left"
	   },
	   
	   next : { 
	      button : "#limited-next",
	      key : "right"
	   }
	});
		$(window).scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('.hotline-icon').fadeIn(200);
			$('.top-phone').fadeIn(200);
		} else {
			$('.hotline-icon').fadeOut(200);
			$('.top-phone').fadeOut(200);
		}

		if ($(this).scrollTop() > 100) {
			$('.gotop').fadeIn(200);
		} else {
			$('.gotop').fadeOut(200);
		}
		});

		
	$('.gotop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

	$('#banner_img').on('click', function(e){
    
        var banner = $(this);
         var banner_id = banner.data("id");
          $.ajax({
              type: "POST",
              url: 'https://dealjava.com/home/add_click_banner',
              data: {
                      banner_id: banner_id
                      
                    }
             }).done(function(data){
                  console.log("success");

             });
      });
	});
</script>

<div class="clearfix"></div>
	<div class="footer changealertingrefresh ubahputih">
		<div class="container">
			<div class="foot-nav pull-left foot-section">
				
				<ul class="footer-nav">
					
					<li><a href="home/contact_us_2.htm">Daftar Usaha Anda</a></li>
					
					<li><a href="https://dealjava.com/faq/terms_of_services.htm">Terms of Services</a></li>
				</ul>
				<div class="mini-separator"></div>
				<div class="copyright">
					<p>&copy; 2016 Voceria. All rights reserved.</p>					
				</div>
			</div>
			<div class="customer-service pull-left foot-section">
				<h4 class="footer-heading">Layanan Pelanggan</h4>
				<p>Jam Operasional</p>
				<p>Senin - Sabtu (09.00 - 18.00 WIB)<br />
					Minggu (12.00 - 17.00 WIB)<br />
					Hari Libur Nasional (Tutup)
				</p>

				
			</div>
			<div class="social-media pull-left foot-section">
				
				<div class="clearfix"></div>
				<div class="blank-separator"></div>
				<p class="text-uppercase"><strong>Stay in Touch</strong></p>
				<a href="#"><img src="<?= asset('frontend/images/ig_icon.jpg')?>" alt="Instagram" class="pull-left social-icon"></a>
				<a href="#"><img src="<?= asset('frontend/images/fb_icon.jpg')?>" alt="Facebook" class="pull-left social-icon"></a>
			</div>
		</div>
	</div>

<script type="text/javascript" src="<?= asset('frontend/js/header.js')?>"></script>
<script type="text/javascript">
	$(function(){
		$(window).scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('.hotline-icon').fadeIn(200);
			$('.top-phone').fadeIn(200);
		} else {
			$('.hotline-icon').fadeOut(200);
			$('.top-phone').fadeOut(200);
		}

		});
		$('#search-button').on('click', function(){
		
			if($.trim($('.search-control').val()) === ''){
				alert('Silahkan masukkan nama promo atau lokasi yang ingin dicari');
				return false;
			}else{
				$('#search-form').submit();
			}
		});

		
		
	});
</script>
<script id="_webengage_script_tag" type="text/javascript">
 var _weq = _weq || {};
 _weq['webengage.licenseCode'] = '11b563db2';
 _weq['webengage.widgetVersion'] = "4.0";
 
 (function(d){
   var _we = d.createElement('script');
   _we.type = 'text/javascript';
   _we.async = true;
   _we.src = (d.location.protocol == 'https:' ? "https://ssl.widgets.webengage.com" : "http://cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-4.0.js";
   var _sNode = d.getElementById('_webengage_script_tag');
   _sNode.parentNode.insertBefore(_we, _sNode);
 })(document);
</script>
<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>	
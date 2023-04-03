<?php
error_reporting(0);

//$shopurl = 'http://anpower.ue.shopserve.jp/';
//$shopurl = 'https://form.run/@anpower';
$shopurl = '#cv-cafe';

$ga = "
<!-- Global site tag (gtag.js) - Google Analytics--> 
<script async='' src='https://www.googletagmanager.com/gtag/js?id=UA-153554536-1'></script> 
<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-153554536-1');
      gtag('config', 'G-4YPY6VYN1J');
    </script>
    
<!-- Global site tag (gtag.js) - Google Ads: 663600296 -->
<script async src='https://www.googletagmanager.com/gtag/js?id=AW-663600296'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-663600296');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 500119727 -->
<script async src='https://www.googletagmanager.com/gtag/js?id=AW-500119727'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-500119727');
</script>

<!-- Event snippet for 購入 conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-500119727/Yt3lCIyiuOUBEK_xvO4B',
      'value': 1.0,
      'currency': 'JPY',
      'transaction_id': ''
  });
</script>
";

$GL_HEADJS = $ga.'
<script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
<script>
window.yjDataLayer = window.yjDataLayer || [];
function ytag() { yjDataLayer.push(arguments); }
ytag({"type":"ycl_cookie"});
ytag({"type":"ycl_cookie_extended"});
</script>

      <SCRIPT TYPE="text/javascript">
      <!--
      function search_back(){
        var isMSIE = /*@cc_on!@*/false;
        if (isMSIE) {
          if(document.charset!="utf-8"){
            document.charset="utf-8";
          }
        }
      }
      function openPage(url, form){
        var linkerUrl = url;
       var clickUrl  = "/_ga/" + url.replace(/https:\/\//,"");
       ga("send", "pageview", {"page": clickUrl,"title":""});
       ga(function(tracker) {
           var linkerParam = tracker.get("linkerParam");
           linkerUrl += "?" + linkerParam;
       });
        window.open(linkerUrl,form,"width=640,height=580,scrollbars=yes").focus();
        return false;
      }
      //-->
      </SCRIPT>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="google-site-verification" content="47NIyfI7mwhbnIorUT7GwzRE4AJQLivWiPEfy0DBFOI">

<!-- ファビコン -->
<link rel="icon" href="/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/slick.css">
<link rel="stylesheet" href="/css/slick-theme.css">
<link rel="stylesheet" href="/css/gnav.css" media="screen and (max-width:1024px)">
<link rel="stylesheet" href="/css/lower.css">
<style>
.header_pc .header_top .header_top_in .header_l ul.gnav li {
  padding: 0 10px;
}
</style>

';

$GL_HEADER = '
<header id="header" class="header cf">
		<div class="header_pc pc">
				<div class="header_top">
						<div class="header_top_in d-flex">
								<div class="header_l d-flex">
										<h1><a href="/"><img src="/img/lower/logo_low_logo.png" alt="anpower"></a></h1>
										<ul class="gnav d-flex">
												<li><a href="/development.html"><img src="/img/lower/logo_low_nav.png" alt="開発ストーリー"></a></li>
												<li><a href="/nutrition.html"><img src="/img/lower/logo_low_nav01.png" alt="成分情報"></a></li>
												<li><a href="/shop_list.html"><img src="/img/lower/logo_low_nav02.png" alt="販売店リスト"></a></li>
												<li><a href="'.$shopurl.'" target="_blank"><img src="/img/lower/logo_low_nav03.png" alt="ネット購入"></a></li>
												<li><a  onclick="javascript:openPage(\'https://shop.anpower.jp/CART/login.php\',\'mypage\'); return false;" href="https://shop.anpower.jp/CART/login.php" target="_blank"><img src="/img/lower/logo_low_nav04.png" alt="マイページ"></a></li>
										</ul>
										<ul class="sns d-flex">
												<li><a href="https://www.facebook.com/anpower-%E3%82%A2%E3%83%B3%E3%83%91%E3%83%AF%E3%83%BC-%E7%89%B9%E8%A3%BD%E7%BE%8A%E7%BE%B9-%E3%82%B9%E3%83%9D%E3%83%BC%E3%83%84%E3%82%92%E9%A0%91%E5%BC%B5%E3%82%8B%E3%81%82%E3%81%AA%E3%81%9F%E3%81%AB-418408365405273/" target="_blank"><img src="img/lower/logo_low_icon_face.png" alt="Facebook"></a></li>
										</ul>
								</div>
								<div class="header_r">
										<p class="logo"><a href="https://www.kogetsu.com/" target="_blank"><img src="/img/lower/logo_low_kogetsu.png" alt="鼓月"></a></p>
								</div>
						</div>
				</div>
		</div>
		<div class="header_sp sp">
				<div class="header_main cf">
						<div class="logo">
								<p><a href="/"><img src="/img/sp/logo.png" alt="anpower"></a></p>
						</div>
						<p class="right_logo"><a href="https://www.kogetsu.com/" target="_blank"><img src="/img/sp/hum_logo.png" alt="鼓月"></a></p>
				</div>
				<nav class="gnav gnav--gift">
						<button type="button" class="gnav__button"></button>
						<div class="gnav__container">
								<ul class="gnav__menu">
										<li class="gnav__menu__item lg_hidden">
												<ul>
														<li><a href="/"><img src="/img/sp/hum_nav01.png" alt="ホーム"></a></li>
														<li><a href="/development.html"><img src="/img/sp/hum_nav02.png" alt="開発ストーリー"></a></li>
														<li><a href="/nutrition.html"><img src="/img/sp/hum_nav03.png" alt="成分情報"></a></li>
														<li><a href="/shop_list.html"><img src="/img/sp/hum_nav04.png" alt="販売店リスト"></a></li>
														<li><a href="'.$shopurl.'" target="_blank"><img src="/img/sp/hum_nav05.png" alt="ネット購入"></a></li>
														<li><a  onclick="javascript:openPage(\'https://shop.anpower.jp/CART/login.php\',\'mypage\'); return false;" href="https://shop.anpower.jp/CART/login.php" target="_blank"><img src="/img/sp/hum_nav06.png" alt="マイページ"></a></li>
												</ul>
										</li>
								</ul>
								<p class="logo"><a href="https://www.kogetsu.com/" target="_blank"><img src="/img/sp/hum_logo.png" alt="鼓月"></a></p>
								<ul class="sns">
										<li><a href="https://www.facebook.com/anpower-%E3%82%A2%E3%83%B3%E3%83%91%E3%83%AF%E3%83%BC-%E7%89%B9%E8%A3%BD%E7%BE%8A%E7%BE%B9-%E3%82%B9%E3%83%9D%E3%83%BC%E3%83%84%E3%82%92%E9%A0%91%E5%BC%B5%E3%82%8B%E3%81%82%E3%81%AA%E3%81%9F%E3%81%AB-418408365405273/" target="_blank"><img src="img/icon_face.png" alt="Facebook"></a></li>
								</ul>
						</div>
				</nav>
		</div>
</header>
';

$GL_FOOTER = '
<footer id="footer">
		<div class="footer_in">
				<div class="foot_top">
						<div class="tel d-flex">
								<p><a href="tel:0120122262"><img src="/img/footer_tel.png" alt="0120-122-262"></a></p>
								<p>商品・発送に関するお問い合わせはお電話にて承っております。<br>
										<span>受付時間：9:00～17:00 （日曜を除く）</span></p>
						</div>
						<p class="toriyose">※鼓月直営店にご来店またはお電話にてお取り寄せが可能ですので、詳しくはお近くの鼓月直営店にご相談ください。<br>
								鼓月の百貨店店舗では取り扱っておりません。</p>
						<h2><a href="https://www.kogetsu.com/" target="_blank"><img src="/img/footer_logo.png" alt="鼓月"></a></h2>
				</div>
			<div class="foot_bottom">
				<p class="privacy2" style="font-size: 80%;"><a href="https://www.kogetsu.com/company/policy.html" target="_blank">プライバシーポリシー</a>　<a href="https://shop.anpower.jp/hpgen/HPB/shop/business.html" target="_blank">特定商取引法に関する表示</a>　<a href="https://shop.anpower.jp/hpgen/HPB/shop/shoppinguide.html" target="_blank">ご利用案内</a>　<a onclick="javascript:openPage(\'https://shop.anpower.jp/CART/login.php\',\'mypage\'); return false;" href="https://shop.anpower.jp/CART/login.php"><i class="fas fa-sign-in-alt"></i>マイページ ログイン</a></p>
				<small>Copyright &#169; KOGETSU co,ltd. All rights reserved.</small>
			</div>
		</div>
</footer>

';

$GL_FOOTJS = '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/js/slick.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script> 
<script type="text/javascript" src="/js/lib/console.js?ver=0.1"></script> 
<script type="text/javascript" src="/js/script.js?ver=0.1"></script> 
<script type="text/javascript" src="/js/jquery-accd.js?ver=0.1"></script> 
<script type="text/javascript" src="/js/smoothscroll.js"></script> 
';


// section cv
$SECT_cv = '
		<section id="cv">
				<div class="cv_in">
						<div class="d-flex cf">
								<div class="area_r sp"><img src="/img/cv_img.png" alt="アンパワー"></div>
								<div class="area_l">
										<h2><img src="/img/cv_title.png" alt="アンパワー"></h2>
										<p class="text">アクティブなシーンでのエネルギー補給に<br>
												片手でサッと食べれるスポーツ羊羹「アンパワー」</p>
										<p class="price"><img src="/img/cv_price.png" alt="1箱5本入り 700円(税抜)"></p>
										<p class="buy"><a href="'.$shopurl.'" target="_blank"><img src="/img/btn_buy.png" alt="ネットで購入する"></a></p>
										<p class="choice"><a href="/shop_list.html"><img src="/img/btn_search.png" alt="販売店を調べる"></a></p>
								</div>
								<div class="area_r pc"><img src="/img/cv_img.png" alt="アンパワー"></div>
						</div>
				</div>
		</section>
		<div id="pagetop"><a href="#"><img src="/img/arrow_up.png" alt="トップへ"></a></div>
';


$SECT_cv = '
<style>
.area_r.pc img {
	//width: 300px;
	width: 200px;
}
.area_l.mgt {
	margin-bottom: 1em;
}
.buyboxline .area_l, .buyboxline .area_r {
	width: 45%;
}
.buyboxline .area_f {
	width: 95%;
}

.buybox {
	margin: 1em 0;
	padding: 0;
	text-align: center;
	border-top: 2px solid #ca7d79;
	border-bottom: 2px solid #ca7d79;
	background: #811e1a;
}
.buybox .itemrow {
	padding: 1em ;
}
.ftr {
	border-top: 2px solid #fff;
	border-bottom: 2px solid #fff;
//	padding: 0 1em 1em 1em;
}
.fbelt {
	padding: 5px;
	background: #fff;
	color: #811e19;
	font-weight: bold;
	font-size: 120%;
	//border-radius: 10vh;
	display: block;
}
.fbelt span {
	padding: 5px 15px;
	margin: 3px 15px 3px 15px;
	background: #7f1e19;
	color: #fff;
	font-weight: normal;
	//font-size: 120%;
	border-radius: 10vh;
	display: inline-block;
}
.cntsel {
	display: block;
	text-align: center;
	margin: 0 auto 0.4em auto;
	border: 1px solid rgba(0,0,0,0.15);
	border-radius: 0.25rem;
}
.itemlbl {
	//padding: 20px 10px 10px 10px;
	padding-bottom: 0.4em;
	font-size: 130%;
}
.pricelbl {
	padding: 0px 10px 10px 10px;
	font-size: 140%;
	font-weight: bold;
}
.pricelbl small {
	font-size: 75%;
	font-weight: normal;
}
.it-cp10 {
	float: right;
	width: 250px;
	margin: -20px 100px 0px 0px;
}


#cv-rep .cntsel { width: 7em; }

@media screen and (max-width: 1024px) {
.buyboxline .area_l, .buyboxline .area_r, .buyboxline .area_f {
	width: 100%;
}

.area_l img, .area_r img {
	width: 100% !important;
	max-width: 100% !important;
}

.ftr span {
	float: none;
}

.it-cp10 {
	float: none;
	width: 100%;
	margin: 0px;
}

}
</style>
<section id="cv-cafe">
				<div class="cv_in">
						<div class="d-flex cf">
								<div class="area_r sp"><img src="/img/an-cafe_title02.png" alt="アンパワーカフェイン入り"></div>
								<div class="area_l mgt">
										<h2><img src="/img/an-cafe_title01.png" alt="アンパワーカフェイン入り"></h2>
										<p class="text">スポーツ羊羹「アンパワー」に、カフェイン配合タイプが登場。<br>
											パラチノースも配合で、さらに高みへ！</p>
										
										
								</div>
								<div class="area_r pc"><img src="/img/an-cafe_title02.png" alt="アンパワーカフェイン入り"></div>
						</div>
						
						
						<div class="d-flex cf buyboxline">
							<div class="area_f">
								<div class="buybox ftr" style="background: #5b150d;">
								<span class="fbelt"><span style="background: #5b150d;">NEW</span> <i style="color:#333; font-style:normal">anpower がご自宅のポストに届く！</i> ネット限定！</span>
								<form class="itemrow" name="cart_cafe_a" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
								<img src="/img/anpower-cp10-cafe.png" alt="アンパワーカフェイン入り" class="it-cp10">
									<p class="itemlbl">10本入りお得セット</p>
									<p class="pricelbl">1,836円 <small> + 送料330円(税込)</small></p>
									<select size="1" name="CNT" class="cntsel">
									<option value="1">1 セット</option>
									<option value="2">2 セット</option>
									<option value="3">3 セット</option>
									<option value="4">4 セット</option>
									<option value="5">5 セット</option>
									<option value="6">6 セット</option>
									<option value="7">7 セット</option>
									<option value="8">8 セット</option>
									<option value="9">9 セット</option>
									<option value="10">10 セット</option>
									</select>
									<input type="hidden" name="ITM" value="12160">
									<a href="javascript:void(0)" onclick="document.cart_cafe_a.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: 0em"><br>
								※1セットあたりの送料です。</p>
									<br style="clear: both;">
								</form>
								</div>
							</div>
						</div>
						
						
						<div class="d-flex cf buyboxline">
							<div class="area_l">
								<div class="buybox">
								<form class="itemrow" name="cart_cafe_b" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
									<p class="itemlbl">5本入り</p>
									<p class="pricelbl"> 918円 <small>(税込) + 送料</small></p>
									<select size="1" name="CNT" class="cntsel">
									<option value="1">1 箱</option>
									<option value="2">2 箱</option>
									<option value="3">3 箱</option>
									<option value="4">4 箱</option>
									<option value="5">5 箱</option>
									<option value="6">6 箱</option>
									<option value="7">7 箱</option>
									<option value="8">8 箱</option>
									<option value="9">9 箱</option>
									<option value="10">10 箱</option>
									</select>
									<input type="hidden" name="ITM" value="12155">
									<a href="javascript:void(0)" onclick="document.cart_cafe_b.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: .8em">※配送はヤマト運輸でお届けいたします。 送料は地域により変更となります。</p>
								</form>
								</div>
							</div>
							<div class="area_r">
								<div class="buybox">
								<form class="itemrow" name="cart_cafe_c" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
									<p class="itemlbl">12本入り</p>
									<p class="pricelbl">2,204円 <small>(税込) + 送料</small></p>
									<select size="1" name="CNT" class="cntsel">
									<option value="1">1 箱</option>
									<option value="2">2 箱</option>
									<option value="3">3 箱</option>
									<option value="4">4 箱</option>
									<option value="5">5 箱</option>
									<option value="6">6 箱</option>
									<option value="7">7 箱</option>
									<option value="8">8 箱</option>
									<option value="9">9 箱</option>
									<option value="10">10 箱</option>
									</select>
									<input type="hidden" name="ITM" value="12162">
									<a href="javascript:void(0)" onclick="document.cart_cafe_c.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: .8em">※配送はヤマト運輸でお届けいたします。 送料は地域により変更となります。</p>
								</form>
								</div>
							</div>
						</div>
						<p class="choice" style="margin-top: 1em;"><a href="/shop_list.html"><img src="/img/btn_search.png" alt="販売店を調べる"></a></p>

				</div>
		</section>
		<section id="cv">
				<div class="cv_in">
						<div class="d-flex cf">
								<div class="area_r sp"><img src="/img/cv_img.png" alt="アンパワー"></div>
								<div class="area_l mgt">
										<h2><img src="/img/cv_title.png" alt="アンパワー"></h2>
										<p class="text">アクティブなシーンでのエネルギー補給に<br>
												片手でサッと食べれるスポーツ羊羹「アンパワー」</p>
										<!--p class="price"><img src="/img/cv_price.png" alt="1箱5本入り 700円(税抜)"></p-->
										
								</div>
								<div class="area_r pc"><img src="/img/cv_img.png" alt="アンパワー"></div>
						</div>
						
						
						<div class="d-flex cf buyboxline">
							<div class="area_f">
								<div class="buybox ftr" style="background: #5b150d;">
								<span class="fbelt"><span style="background: #5b150d;">NEW</span> <i style="color:#333; font-style:normal">anpower がご自宅のポストに届く！</i> ネット限定！</span>
								<form class="itemrow" name="cart_aa" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
								<img src="/img/anpower-cp10.png" alt="アンパワー" class="it-cp10">
									<p class="itemlbl">10本入りお得セット</p>
									<p class="pricelbl">1,512円 <small> + 送料330円(税込)</small></p>
									<select size="1" name="CNT" class="cntsel">
									<option value="1">1 セット</option>
									<option value="2">2 セット</option>
									<option value="3">3 セット</option>
									<option value="4">4 セット</option>
									<option value="5">5 セット</option>
									<option value="6">6 セット</option>
									<option value="7">7 セット</option>
									<option value="8">8 セット</option>
									<option value="9">9 セット</option>
									<option value="10">10 セット</option>
									</select>
									<input type="hidden" name="ITM" value="12110">
									<a href="javascript:void(0)" onclick="document.cart_aa.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: 0em"><br>
								※1セットあたりの送料です。</p>
									<br style="clear: both;">
								</form>
								</div>
							</div>
						</div>
						
						
						<!--
						<div class="d-flex cf buyboxline">
							<div class="area_l">
								<div class="buybox ftr">
								<span class="fbelt"><span>期間限定商品</span> 送料無料</span>
								<form class="itemrow" name="cart_aa" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
									<p class="itemlbl">12本入り×2箱セット</p>
									<p class="pricelbl">3,360円 <small>(税込 3,629円)</small></p>
									<input type="hidden" name="ITM" value="anpower12-2">
									<input type="hidden" name="CNT" value="1">
									<a href="javascript:void(0)" onclick="document.cart_aa.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
								</form>
								</div>
							</div>
							<div class="area_r">
								<div class="buybox ftr">
								<span class="fbelt"><span>期間限定商品</span> 送料無料</span>
								<form class="itemrow" name="cart_bb" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
									<p class="itemlbl">12本入り×3箱セット</p>
									<p class="pricelbl">5,040円 <small>(税込 5,444円)</small></p>
									<input type="hidden" name="ITM" value="anpower12-3">
									<input type="hidden" name="CNT" value="1">
									<a href="javascript:void(0)" onclick="document.cart_bb.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
								</form>
								</div>
							</div>
						</div>
						-->
						
						<div class="d-flex cf buyboxline">
							<div class="area_l">
								<div class="buybox">
								<form class="itemrow" name="cart_a" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
									<p class="itemlbl">5本入り</p>
									<p class="pricelbl"> 756円 <small>(税込) + 送料</small></p>
									<select size="1" name="CNT" class="cntsel">
									<option value="1">1 箱</option>
									<option value="2">2 箱</option>
									<option value="3">3 箱</option>
									<option value="4">4 箱</option>
									<option value="5">5 箱</option>
									<option value="6">6 箱</option>
									<option value="7">7 箱</option>
									<option value="8">8 箱</option>
									<option value="9">9 箱</option>
									<option value="10">10 箱</option>
									</select>
									<input type="hidden" name="ITM" value="12100">
									<a href="javascript:void(0)" onclick="document.cart_a.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: .8em">※配送はヤマト運輸でお届けいたします。 送料は地域により変更となります。</p>
								</form>
								</div>
							</div>
							<div class="area_r">
								<div class="buybox">
								<form class="itemrow" name="cart_b" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank" method="get">
									<p class="itemlbl">12本入り</p>
									<p class="pricelbl">1,815円 <small>(税込) + 送料</small></p>
									<select size="1" name="CNT" class="cntsel">
									<option value="1">1 箱</option>
									<option value="2">2 箱</option>
									<option value="3">3 箱</option>
									<option value="4">4 箱</option>
									<option value="5">5 箱</option>
									<option value="6">6 箱</option>
									<option value="7">7 箱</option>
									<option value="8">8 箱</option>
									<option value="9">9 箱</option>
									<option value="10">10 箱</option>
									</select>
									<input type="hidden" name="ITM" value="12112">
									<a href="javascript:void(0)" onclick="document.cart_b.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: .8em">※配送はヤマト運輸でお届けいたします。 送料は地域により変更となります。</p>
								</form>
								</div>
							</div>
						</div>
						<p class="choice" style="margin-top: 1em;"><a href="/shop_list.html"><img src="/img/btn_search.png" alt="販売店を調べる"></a></p>

				</div>
		</section>
		
		
		<section id="cv-rep" style="background: #407349;">
				<div class="cv_in">
						<div class="d-flex cf">
								<div class="area_r sp"><img src="/img/cv_img-span.png" alt="アンパワー"></div>
								<div class="area_l mgt">
										<h2><img src="/img/cv_title-span.png" alt="アンパワー"></h2>
										<p class="text">1度のご注文で毎月1回anpowerを定期的にお届けいたします。<br>
										お届けご希望日は1日着か15日着からご指定ください。<br>
										決済方法はクレジットカードでの自動引き落としとなります。<br>
										ご購入には会員登録が必要です。<br>
										「購入する」ボタンからのご購入手続きにて、会員登録へお進みください。<br>
										会員登録後は解約や一時休止、お届けスケジュールの変更が可能です。<br>
										</p>
										<!--p class="price"><img src="/img/cv_price.png" alt="1箱5本入り 700円(税抜)"></p-->
										
								</div>
								<div class="area_r pc"><img src="/img/cv_img-span.png" alt="アンパワー"></div>
						</div>
						
						
						
						
						<div class="d-flex cf buyboxline">
							<div class="area_f">
								<div class="buybox ftr" style="background: #5b150d;">
								<span class="fbelt"><span style="background: #5b150d;">定期購入</span> <i style="color:#333; font-style:normal">anpower が定期的にご自宅に届く！</i> 練習用のストックに！</span>
								<form class="itemrow" name="cart_ra2" action="https://shop.anpower.jp/CART/cart.php" target="_blank" method="get">
								<img src="/img/anpower-cp12x.png" alt="アンパワー" class="it-cp10">
									<p class="itemlbl">anpower  <small>24本・36本</small></p>
									<p class="pricelbl">１配送 3,629円 〜 <small>(税込) + 送料</small> </p>
									<input type="hidden" name="ITM-1" value="ECTA">
									<input type="hidden" name="ITEM_NO" value="ECTA">
									<select size="1" name="VAR1-1" class="cntsel" style="width: 30%">
									<option value="24本入">24本入：3,629円</option>
									<option value="36本入">36本入：5,444円 </option>
									</select>
									<input type="hidden" name="CNT-1" value="1">
									<input type="hidden" name="elapsed_time" value="">
									
									<a href="javascript:void(0)" onclick="document.cart_ra2.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: 0em"><br>
								※送料は通常送料です。通常の12本入りを2箱or3箱まとめて送ります。</p>
									<br style="clear: both;">
								</form>
								</div>
							</div>
						</div>
						
						<div class="d-flex cf buyboxline">
							<div class="area_f">
								<div class="buybox ftr" style="background: #5b150d;">
								<form class="itemrow" name="cart_rb" action="https://shop.anpower.jp/CART/cart.php" target="_blank" method="get">
								<img src="/img/anpowercf-cp12x.png" alt="アンパワー" class="it-cp10">
									<p class="itemlbl">anpowerカフェイン  <small>24本・36本</small></p>
									<p class="pricelbl">１配送 4,407円 〜 <small>(税込) + 送料</small> </p>
									<input type="hidden" name="ITM-1" value="ECTK">
									<input type="hidden" name="ITEM_NO" value="ECTK">
									<select size="1" name="VAR1-1" class="cntsel" style="width: 30%">
									<option value="24本入">24本入：4,407円</option>
									<option value="36本入">36本入：6,610円</option>
									</select>
									<input type="hidden" name="CNT-1" value="1">
									<input type="hidden" name="elapsed_time" value="">
									
									<a href="javascript:void(0)" onclick="document.cart_rb.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: 0em"><br>
								※送料は通常送料です。通常の12本入りを2箱or3箱まとめて送ります。</p>
									<br style="clear: both;">
								</form>
								</div>
							</div>
						</div>
						
						<div class="d-flex cf buyboxline">
							<div class="area_f">
								<div class="buybox ftr" style="background: #5b150d;">
								<form class="itemrow" name="cart_rc" action="https://shop.anpower.jp/CART/cart.php" target="_blank" method="get">
								<img src="/img/anpowermx-cp12x.png" alt="アンパワー" class="it-cp10">
									<p class="itemlbl">ミックス  <small>24本・36本</small></p>
									<p class="pricelbl">１配送 4,018円 〜 <small>(税込) + 送料</small> </p>
									<input type="hidden" name="ITM-1" value="ECTM">
									<input type="hidden" name="ITEM_NO" value="ECTM">
									<select size="1" name="VAR1-1" class="cntsel" style="width: 50%">
									<option value="24本（anpower12本+カフェイン12本）">24本（anpower12本+カフェイン12本）：4,018円</option>
									<option value="36本（anpower24本+カフェイン12本）">36本（anpower24本+カフェイン12本）：5,832円</option>
									</select>
									<input type="hidden" name="CNT-1" value="1">
									<input type="hidden" name="elapsed_time" value="">
									
									<a href="javascript:void(0)" onclick="document.cart_rc.submit();"><img src="/img/btn_buy2.png" alt="購入する"></a>
									<p style="font-size: 11px; line-height: 1.4em; margin-top: 0em"><br>
								※送料は通常送料です。通常の12本入りを2箱or3箱まとめて送ります。</p>
									<br style="clear: both;">
								</form>
								</div>
							</div>
						</div>
						
						
						
						

				</div>
		</section>
		
		
		<div id="pagetop"><a href="#"><img src="/img/arrow_up.png" alt="トップへ"></a></div>
';


$SECT_cvss = '
<style>
		*{
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
		.content{
			margin: 0 auto;
			padding: 30px;
		}
		.modal{
			display: none;
			height: 100vh;
			position: fixed;
			top: 0;
			width: 100%;
		}
		.modal__bg{
			background: rgba(0,0,0,0.8);
			height: 100vh;
			position: absolute;
			width: 100%;
		}
		.modal__content{
			background: #fff;
			left: 50%;
			padding: 40px;
			position: absolute;
			top: 50%;
			transform: translate(-50%,-50%);
			width: 80%;
		}
		.modal__content p {
			margin-bottom: 5px;
		}
		.modal__content h2 {
			text-align: center;
			background: #900;
			color: #fff;
			padding: 10px;
			border-radius: 10px;
			display: block;
			margin-bottom: 10px;
		}
		.modal__content hr {
			color: #fff;
			height: 1px;
			border-top: 1px solid #999;
			width: 100%;
			margin: 10px auto;
		}
		.modal__content a {
			text-decoration: none;
			display: block;
			color: #000;
		}
		.modal__content a.item {
			text-decoration: none;
			display: block;
			color: #000;
			border-radius: 10px;
			border: 1px solid #ddd;
			
			background: url("./img/arrow_right_gr.png");
background-position: 15px;
background-repeat: no-repeat;
text-decoration: none;
color: #333;
padding: 10px 10px 10px 35px;

		}
		a.item span {
			float: right;
			background: #d00;
			color: #fff;
			font-weight: bold;
			padding: 3px 10px;
			font-size: 14px;
		}
		a.lmitem {
			color:#900 !important;
			font-weight: bold;
		}
		.js-modal-close {
			text-align: right;
			font-size: 12px;
		}
</style>
		<section id="cv">
				<div class="cv_in">
						<div class="d-flex cf">
								<div class="area_r sp"><img src="/img/cv_img.png" alt="アンパワー"></div>
								<div class="area_l">
										<h2><img src="/img/cv_title.png" alt="アンパワー"></h2>
										<p class="text">アクティブなシーンでのエネルギー補給に<br>
												片手でサッと食べれるスポーツ羊羹「アンパワー」</p>
										<p class="price"><img src="/img/cv_price.png" alt="1箱5本入り 700円(税抜)"></p>
										<p class="buy"><a class="js-modal-open" href=""><img src="/img/btn_buy.png" alt="ネットで購入する"></a></p>
										<p class="choice"><a href="/shop_list.html"><img src="/img/btn_search.png" alt="販売店を調べる"></a></p>
								</div>
								<div class="area_r pc"><img src="/img/cv_img.png" alt="アンパワー"></div>
						</div>
				</div>
		</section>
		<div id="pagetop"><a href="#"><img src="/img/arrow_up.png" alt="トップへ"></a></div>


	<div class="modal js-modal">
		<div class="modal__bg js-modal-close"></div>
		<div class="modal__content">
<h2>1週間の期間限定商品</h2>
<p><a href="" onclick="document.cart_aa.submit();" class="item lmitem">12本入り×2箱セット: 3,360円 　<small>(税込 3,696円)</small>　<span>送料無料</span></a></p>
<form method="post" name="cart_aa" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank">
<input type="hidden" name="ITM" value="anpower12-2">
<input type="hidden" name="CNT" value="1">
</form>
<p><a href="" onclick="document.cart_bb.submit();" class="item lmitem">12本入り×3箱セット: 5,040円 　<small>(税込 5,544円)</small>　<span>送料無料</span></a></p>
<form method="post" name="cart_bb" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank">
<input type="hidden" name="ITM" value="anpower12-3">
<input type="hidden" name="CNT" value="1">
</form>
<hr>
<p><a href="" onclick="document.cart_a.submit();" class="item">5本入り: 700円 　<small>(税込 770円)</small></a></p>
<form method="post" name="cart_a" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank">
<input type="hidden" name="ITM" value="anpower5">
<input type="hidden" name="CNT" value="1">
</form>
<p><a href="" onclick="document.cart_b.submit();" class="item">12本入り: 1,600円 　<small>(税込 1,760円)</small></a></p>
<form method="post" name="cart_b" action="https://cart9.shopserve.jp/anpower.ue/cart.php" target="_blank">
<input type="hidden" name="ITM" value="anpower12">
<input type="hidden" name="CNT" value="1">
</form>
<p style="color:#333; padding: 10px; font-size: 14px;">※￥3,000以上お買い上げの方は送料無料とさせていただきます。</p>


			<a class="js-modal-close" href="">[閉じる]</a>
		</div><!--modal__inner-->
	</div><!--modal-->

<script>
$(function(){
	$(".js-modal-open").on("click",function(){
		$(".js-modal").fadeIn();
		return false;
	});
	$(".js-modal-close").on("click",function(){
		$(".js-modal").fadeOut();
		return false;
	});	
});
</script>
';



?>

<!DOCTYPE html>
<html lang="ja">

<?php include_once('./includes/head.php') ?>

<?php include_once('./includes/header.php') ?>
<body>

  <div id="wrapper">
    <div id="contents">
      <article>
        <div id="main-column" style="padding-top: 0px;">
          <table id="enter" cellspacing="0" cellpadding="0" border="0">
            <?php
            $flag_send = false;
            if (count($_POST) > 0) {

              $message = "
    <html>
    <head>
        <title>Web form CONTACT</title>
    </head>
    <body>

        <p>
            Company name: " . $_POST["text-company-name"] . "<br>
            Person in charge: " . $_POST["your-name"] . "<br>
            Email: " . $_POST["your-email"] . "<br>
            Phone number: " . $_POST["tel"] . "<br>            
            Message: " . $_POST["your-message"] . "<br>
            How did you learn about the platform?: " . $_POST["text-where-know"] . "<br>
            </p>
        </body>
    </html>
    ";
              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
              $headers .= "From: info@equipmentforest.com\r\n";
              $rta = @mail('ramiro.mpdev@gmail.com', 'Web CONTACT', $message, $headers);
              if ($rta) {
                $flag_send = true;
                echo '<h4 style="text-align: center; margin: 70px 0px;">クエリが送信されました</h4>';
              }
            }

            if (!$flag_send) { ?>
           <section class="avada-page-titlebar-wrapper" aria-label="ページタイトルバー">
	<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
		<div class="fusion-page-title-row">
			<div class="fusion-page-title-wrapper">
				<div class="fusion-page-title-captions">

																							<h1 class="entry-title fusion-responsive-typography-calculated" data-fontsize="20" style="--fontSize: 20; line-height: 1.08; --minFontSize: 20;" data-lineheight="21.6px">営業関連のお問い合わせ</h1>

											
					
				</div>

													
			</div>
		</div>
	</div>
</section>
<main id="main" class="clearfix ">
				<div class="fusion-row" style="">
<section id="content" style="width: 100%;">
					<div id="post-4605" class="post-4605 page type-page status-publish hentry">
			<span class="entry-title rich-snippet-hidden">営業関連のお問い合わせ</span>
			
			<div class="post-content">
				<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;"><div class="fusion-builder-row fusion-row"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-first" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_3_5 3_5 fusion-three-fifth" style="--awb-bg-size:cover;width:60%;width:calc(60% - ( ( 4% + 4% ) * 0.6 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div role="form" class="wpcf7" id="wpcf7-f4554-p4605-o1" lang="ja" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="salesContact" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="4554">
<input type="hidden" name="_wpcf7_version" value="5.5.6.1">
<input type="hidden" name="_wpcf7_locale" value="ja">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4554-p4605-o1">
<input type="hidden" name="_wpcf7_container_post" value="4605">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
<input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA4j-ODPw4LYJgWHoibwy0riaHDe8LFwP0iD8vybZijr0q8Mj8P2MXyCIJzEIig0Wjo0qyVc8QE5fKy3xHWpmuLlZTR-NNGkNo341CiaDn-sjvdeY_rfU2i5U2JWXWC3LFyT7D8d8nPa5TSFiC58hueQQcWFf6rfoPw5qYxVMLSKK-PBsTKt-g2L9P0d3rDwQBXfyTZrU9YQ27OAEQr1vIO0D1kEqHSUcC_RL2Tq6v6lquG3SSg5eJ0J13UfGGItNqLmAh3NwOWe5PPKLUYlks4e0QrQXo9CsPW5UzszRElj8gPCflAP0UmieczfHPdkZufz3stMqwI5Lc4_FiI87b22k80YCN_eDa6mgJ9PG51WkQIsMQIb29tKf_X1TzT_OCUZpQFk7OVOAT5rwDQjMobMtLKVmIBwUWl1fjiAH_tjXNSHRW75F8UlF0ae1BzLKNsv7EoKq_7l_EcDjnrGD22--1JvTuC6Jt37GZ-8y_riWST-iC-KLs1znA5LmUvNOVdxTBNCGg1G1BLZlbctIu06qnlA5zajYwfg5ZXScZ68TDg7RcM">
</div>
<p><span class="wpcf7-form-control-wrap checkbox-category"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-category[]" value="豌豆(ワンドウ)プラットフォームとの協業について話したい"><span class="wpcf7-list-item-label">豌豆(ワンドウ)プラットフォームとの協業について話したい</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-category[]" value="その他"><span class="wpcf7-list-item-label">その他</span></label></span></span></span></p>
<p><label> 御社名<br>
<span class="wpcf7-form-control-wrap text-company-name"><input type="text" name="text-company-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label></p>
<p>　業種<br>
<span class="wpcf7-form-control-wrap radio-75"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="radio-75" value="メーカー様もしくは正規代理のお客様・卸業者様" checked="checked"><span class="wpcf7-list-item-label">メーカー様もしくは正規代理のお客様・卸業者様</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="radio-75" value="その他"><span class="wpcf7-list-item-label">その他</span></label></span></span></span></p>
<p><label> ご担当者名 <br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> メールアドレス <br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 電話番号 <br>
<span class="wpcf7-form-control-wrap tel"><input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> WEBサイトURL<br>
<span class="wpcf7-form-control-wrap text-url"><input type="text" name="text-url" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> メッセージ本文<br>
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" style="width: 100%" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><label>どちらでインアゴーラ/豌豆(ワンドウ)プラットフォームを知りましたか？<br>
    <span class="wpcf7-form-control-wrap text-where-know"><input type="text" name="text-where-know" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label></p>
<p><label>弊社からのお知らせメール（越境ECセミナー等）<br>
<span class="wpcf7-form-control-wrap checkbox-966"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><input type="checkbox" name="checkbox-966[]" value="希望する"><span class="wpcf7-list-item-label">希望する</span></span></span></span></label></p>
<p><input type="submit" value="送信" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
<p style="display: none !important;"><label>Δ<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="1700660655012"><script>document.getElementById("ak_js_1").setAttribute("value",(new Date()).getTime());</script></p><div style="display: none;" class="fusion-alert alert custom alert-custom fusion-alert-center wpcf7-response-output fusion-alert-capitalize awb-alert-native-link-color alert-dismissable awb-alert-close-boxed" style="--awb-border-top-left-radius:0px;--awb-border-top-right-radius:0px;--awb-border-bottom-left-radius:0px;--awb-border-bottom-right-radius:0px;" role="alert"><div class="fusion-alert-content-wrapper"><span class="fusion-alert-content"></span></div><button type="button" class="close toggle-alert" data-dismiss="alert" aria-label="Close">×</button></div></form></div><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-last" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div></div></div>
							</div>
																													</div>
	</section>
						
					</div>  <!-- fusion-row -->
				</main>
            <?php } ?>
          </table>
        </div>
      </article>

    </div>
  </div>

  <?php include_once('./includes/footer.php') ?>

</body>

</html>
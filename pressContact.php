<!DOCTYPE html>
<html lang="ja">

<?php include_once('./includes/head.php') ?>

<?php include_once('./includes/header.php') ?>
<body>

  <div id="wrapper">
    <div id="contents">
      <article>
        <div id="main-column" style="padding-top: 45px;">
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
           <section class="avada-page-titlebar-wrapper" aria-label="page title bar">
	<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
		<div class="fusion-page-title-row">
			<div class="fusion-page-title-wrapper">
				<div class="fusion-page-title-captions">

																							<h1 class="entry-title fusion-responsive-typography-calculated" data-fontsize="20" style="--fontSize: 20; line-height: 1.08; --minFontSize: 20;" data-lineheight="21.6px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">広報関連のお問い合わせ</font></font></h1>

											
					
				</div>

													
			</div>
		</div>
	</div>
</section>
<main id="main" class="clearfix ">
				<div class="fusion-row" style="">
<section id="content" style="width: 100%;">
					<div id="post-4613" class="post-4613 page type-page status-publish hentry">
			<span class="entry-title rich-snippet-hidden">広報関連のお問い合わせ</span>
			
			<div class="post-content">
				<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;"><div class="fusion-builder-row fusion-row"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-first" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_3_5 3_5 fusion-three-fifth" style="--awb-bg-size:cover;width:60%;width:calc(60% - ( ( 4% + 4% ) * 0.6 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div role="form" class="wpcf7" id="wpcf7-f4610-p4613-o1" lang="ja" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/contact/press/#wpcf7-f4610-p4613-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="4610">
<input type="hidden" name="_wpcf7_version" value="5.5.6.1">
<input type="hidden" name="_wpcf7_locale" value="ja">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4610-p4613-o1">
<input type="hidden" name="_wpcf7_container_post" value="4613">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
<input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA5V6_BDhVovFysgoyuztqpR9Zj3dm5pQLoQ818WMdaHSdhSOOymbChHhSOqcaBcennA6l8Un4f2rvQCs8I3_stl7UzSTpK5kt_8L_WSq4knTWGZVqJDtHiZGSHzvGzxS_s8tkuyBKoWk5LaQylBftbLPbZJkwDkrb6_GJuaGvgEWG9Fb-LUzoVFLGYopm_EFjuGZHWcAOLBhdL0n9yMkvTSPKz49ZDSfh8ezEGBIgpKlX3Hu4b0d8a4zOvDsboze1Oht9SAbR1mvifr_qWkA33TXwpD6iE96OtlSawALd_XvOSqhmfkgzsJgD1eN09XG87PYaIwxP4nxW8-FiZyEbBqGKjojZJyxb0i312XDwOaTl7DO42aU7CM0Uo_moekbThZe2frC8-G6kwnK4xSolB3gOMB6hXlx4Owa307I8KXyTeSYTGbC6sD1sbkiJe1eOqk-_JZo8FZKiOKPD18TZA5eX8G8anp8m_to6JiBJhH5qGVz17Bx3csWVKpmu-v2fVeHGMnC_Lp3JAUvwLgrIWRI102G46omDmXSP9gl48C_r-zi2sw4B6XQQbP--PHG0JMk8WyaYou9kWPCpCbEM0hkf2Jlg">
</div>
<p><label> 御社名<br>
    <span class="wpcf7-form-control-wrap text-company-name"><input type="text" name="text-company-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label></p>
<p><label> ご担当者名 <br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> メールアドレス <br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 電話番号 <br>
<span class="wpcf7-form-control-wrap tel"><input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> メッセージ本文<br>
    <span class="wpcf7-form-control-wrap your-message"><textarea style="width: 100%" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p>どちらでインアゴーラ/豌豆(ワンドウ)プラットフォームを知りましたか？<br>
    <span class="wpcf7-form-control-wrap text-where-know"><input type="text" name="text-where-know" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></p>
<p><input type="submit" value="送信" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
<p style="display: none !important;"><label>Δ<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="1700660641427"><script>document.getElementById("ak_js_1").setAttribute("value",(new Date()).getTime());</script></p><div style="display: none;" class="fusion-alert alert custom alert-custom fusion-alert-center wpcf7-response-output fusion-alert-capitalize awb-alert-native-link-color alert-dismissable awb-alert-close-boxed" style="--awb-border-top-left-radius:0px;--awb-border-top-right-radius:0px;--awb-border-bottom-left-radius:0px;--awb-border-bottom-right-radius:0px;" role="alert"><div class="fusion-alert-content-wrapper"><span class="fusion-alert-content"></span></div><button type="button" class="close toggle-alert" data-dismiss="alert" aria-label="Close">×</button></div></form></div><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-last" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div></div></div>
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
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
            Website URL: " . $_POST["company-url"] . "<br>
            Scheduled sales product URL: " . $_POST["product-url"] . "<br>
            Amount of sales: " . $_POST["sales"] . "<br>
            Sales status in China: " . $_POST["situation"] . "<br>
            Message: " . $_POST["your-message"] . "<br>
        
            </p>
        </body>
    </html>
    ";
              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
              $headers .= "From: contact@bugle-link.com\r\n";
              $rta = @mail('contact@bugle-link.com', 'Web CONTACT', $message, $headers);
              if ($rta) {
                $flag_send = true;
                echo '<h4 class="confirmSend" >
<div>
  クエリが送信されました
</div>
<a class="confirmLink" href="./index.php">メインページに戻る</a>
</h4>';
              }
            }

            if (!$flag_send) { ?>
            <section class="avada-page-titlebar-wrapper" aria-label="ページタイトルバー">
	<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
		<div class="fusion-page-title-row">
			<div class="fusion-page-title-wrapper">
				<div class="fusion-page-title-captions">

																							<h1 class="entry-title fusion-responsive-typography-calculated" data-fontsize="20" style="--fontSize: 20; line-height: 1.08; --minFontSize: 20;" data-lineheight="21.6px">プラットフォーム事業関連のお問い合わせ</h1>

											
					
				</div>

													
			</div>
		</div>
	</div>
</section>
              <main id="main" class="clearfix ">
				<div class="fusion-row" style="">
<section id="content" style="width: 100%;">
					<div id="post-14225" class="post-14225 page type-page status-publish hentry">
			<span class="entry-title rich-snippet-hidden">プラットフォーム事業関連のお問い合わせ</span>
			
			<div class="post-content">
				<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;"><div class="fusion-builder-row fusion-row"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-first" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_3_5 3_5 fusion-three-fifth" style="--awb-bg-size:cover;width:60%;width:calc(60% - ( ( 4% + 4% ) * 0.6 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div role="form" class="wpcf7" id="wpcf7-f14227-p14225-o1" lang="ja" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="platformContact" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="14227">
<input type="hidden" name="_wpcf7_version" value="5.5.6.1">
<input type="hidden" name="_wpcf7_locale" value="ja">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f14227-p14225-o1">
<input type="hidden" name="_wpcf7_container_post" value="14225">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
<input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA7ANuGb6SeDMnkRWu6vu5CDGNNYWjFyiuLbChzXrfl1dCSuysY5nfBfAz6zqcta1y2BkUHEibqZhTNJAokJEjNR6zv5e9F7jFhfHLmXGTUo-MF6tYQZqGGrQVgixMyxa4jHyTjMMugtEb4ZQ3yCtOPZn6FdYVO1i9WJwTtWw_GbHllUd3bjiXskCP_TNo4z7O-vWE9Kj0p5D9E_5tOEIrlJzqNiV5h_IGue1hMxdnFWDKceipWEbk1aMTTcs787xUux2rmWXigOw9FlEOomXwMPa2e9qVB4KoAE693SOv7Ff93AzoxvN-zrr2kCvxljxsiADIqWLlLS_kiw8E2GOfDDNvL9FG1pwKah47om3H3Ck4x5wxZINGDi-PDM_nM1gpXnfmBpJHpQNlJdbuljb2mYYxP-eZ9XVTWuYE_cHU9iGs3seYbCjjSN0fUVWhctxW9b3fp3IlzSFXV0NjQ3JRXDhq3KL8E7FHaCQbk86l6UxEN4hOfdAhjbQHGYrbUyHKeUuDFmVmP0Jy3Yfr7RDI2DVuYj8ulCcA1PAwEb8or2AJBqpdc">
</div>
<p>※出店には審査がございます。<br>
ご期待に添えない場合もございますのであらかじめご了承ください</p>
<p><span class="wpcf7-form-control-wrap checkbox-285"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><input type="checkbox" name="checkbox-285[]" value="中国に自社商品を販売したい"><span class="wpcf7-list-item-label">中国に自社商品を販売したい</span></span><span class="wpcf7-list-item last"><input type="checkbox" name="checkbox-285[]" value="中国に商品を卸したい"><span class="wpcf7-list-item-label">中国に商品を卸したい</span></span></span></span></p>
<p><label> 御社名<br>
    <span class="wpcf7-form-control-wrap text-company-name"><input type="text" name="text-company-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label></p>
<p><label> ご担当者名 <br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> メールアドレス <br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 電話番号 <br>
<span class="wpcf7-form-control-wrap tel"><input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> WEBサイトURL<br>
<span class="wpcf7-form-control-wrap company-url"><input type="text" name="company-url" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 販売予定商品URL<br>
<span class="wpcf7-form-control-wrap product-url"><input type="text" name="product-url" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> 売上高<br>
<span class="wpcf7-form-control-wrap sales"><input type="text" name="sales" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span>　</label></p>
<p><label> 中国での販売状況<br>
<span class="wpcf7-form-control-wrap situation"><input type="text" name="situation" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label>どちらでBugle Link/豌豆(ワンドウ)プラットフォームを知りましたか？<br>
    <span class="wpcf7-form-control-wrap text-where-know-wandou"><input type="text" name="text-where-know-wandou" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span></label></p>
<p><label> メッセージ本文<br>
    <span class="wpcf7-form-control-wrap your-message"><textarea style="width: 100%" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> </label></p>
<p>※お返事に1週間程度頂きます。</p>
<p><input type="submit" value="送信" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
<p style="display: none !important;"><label>Δ<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="1700575503584"><script>document.getElementById("ak_js_1").setAttribute("value",(new Date()).getTime());</script></p><div style="display: none" class="fusion-alert alert custom alert-custom fusion-alert-center wpcf7-response-output fusion-alert-capitalize awb-alert-native-link-color alert-dismissable awb-alert-close-boxed" style="--awb-border-top-left-radius:0px;--awb-border-top-right-radius:0px;--awb-border-bottom-left-radius:0px;--awb-border-bottom-right-radius:0px;" role="alert"><div class="fusion-alert-content-wrapper"><span class="fusion-alert-content"></span></div><button type="button" class="close toggle-alert" data-dismiss="alert" aria-label="Close">×</button></div></form></div><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-last" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div></div></div>
							</div>
																													</div>
	</section>
						
					</div>  <!-- fusion-row -->
				</main>
        <form action="platformContact" name="frm" method="post">
            <?php } ?>
          </table>
        </div>
      </article>

    </div>
  </div>

  <?php include_once('./includes/footer.php') ?>

</body>

</html>
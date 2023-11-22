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

            Name: " . $_POST["your-name"] . "<br>
            Email: " . $_POST["your-email"] . "<br>

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

																							<h1 class="entry-title fusion-responsive-typography-calculated" data-fontsize="20" style="--fontSize: 20; line-height: 1.08; --minFontSize: 20;" data-lineheight="21.6px">採用関連のお問い合わせ</h1>

											
					
				</div>

													
			</div>
		</div>
	</div>
</section>
<main id="main" class="clearfix ">
				<div class="fusion-row" style="">
<section id="content" style="width: 100%;">
					<div id="post-4612" class="post-4612 page type-page status-publish hentry">
			<span class="entry-title rich-snippet-hidden">採用関連のお問い合わせ</span>
			
			<div class="post-content">
				<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;"><div class="fusion-builder-row fusion-row"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-first" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_3_5 3_5 fusion-three-fifth" style="--awb-bg-size:cover;width:60%;width:calc(60% - ( ( 4% + 4% ) * 0.6 ) );margin-right: 4%;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div role="form" class="wpcf7" id="wpcf7-f4611-p4612-o1" lang="ja" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="recuitContact" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="4611">
<input type="hidden" name="_wpcf7_version" value="5.5.6.1">
<input type="hidden" name="_wpcf7_locale" value="ja">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4611-p4612-o1">
<input type="hidden" name="_wpcf7_container_post" value="4612">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
<input type="hidden" name="_wpcf7_recaptcha_response" value="03AFcWeA5WBbeC_8w_W1NZNiNSr7Qya1cc-2Q48EFYH9ZGQOuWjbpbYZCT9xMbIaJQHtE3DCeBfk8kAWuCIszpX-uuIpxpjhTfYj5097OevFGrvVhXu5FADvaKutZ0jZVNI3e9pNWik1oNT-pqsGf8uP4jodenaNlJOGE7gug5hpmv5D7OQkfvFFvqzocueyqq_52JbyJxg2YfIeDjWMf8QAcNs86x-0jLu_r4RDl4DZDUTYnL6GTtur9mdrMth4YXS1mld7ilO42BhZ84XFlGE1kxQjR2ymHSPpzTXmXlqY2GqLJ5En2ERpABc8mo5ZD5rbjMTDOg6jAzgNOv_THtLn9mRB1lZ-3jG3wpdgXcoF2T1792bTZ3w-wqQ0gE_tOpWfLVcczs11k2nKlhlXk_ayNwtD64heD6hU9jg_kuZScJap5uSa300uBJzkcrMt1QWvkcy3EWR9mPek3AXyYwDzF0wnzNSpYUAgZto-YpnI8f4kjdXhEhNeONbNPIxs4Vthp5_ptaxTFS5j4BW1sbQrPe7GzQSOBbtzCwg0h2xuls9MfJyZaNrY4">
</div>
<p><label> お名前<br>
<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label></p>
<p><label> ふりがな <br>
<span class="wpcf7-form-control-wrap your-name-furigana"><input type="text" name="your-name-furigana" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> メールアドレス <br>
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 電話番号 <br>
<span class="wpcf7-form-control-wrap tel"><input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 履歴書 <br>
送信可能なファイル形式：zip / pdf / doc / docx / txt （10MB以内）<br>
<span class="wpcf7-form-control-wrap file-804"><input type="file" name="file-804" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".zip,.pdf,.doc,.docx,.txt" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> 職務履歴書 <br>
送信可能なファイル形式：zip / pdf / doc / docx / txt （10MB以内）<br>
<span class="wpcf7-form-control-wrap file-119"><input type="file" name="file-119" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" accept=".zip,.pdf,.doc,.docx,.txt" aria-required="true" aria-invalid="false"></span></label></p>
<p><label> ポートフォリオ (クリエイティブ職のみ)<br>
送信可能なファイル形式：zip / pdf / doc / docx<br>
<span class="wpcf7-form-control-wrap file-322"><input type="file" name="file-322" size="40" class="wpcf7-form-control wpcf7-file" accept=".zip,.pdf,.doc,.docx" aria-invalid="false"></span></label></p>
<p>希望職種<br>
<span class="wpcf7-form-control-wrap menu-633"><div class="wpcf7-select-parent"><select name="menu-633" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="インストックマネジメント責任者">インストックマネジメント責任者</option><option value="物流責任者">物流責任者</option><option value="物流リーダー候補(契約社員)">物流リーダー候補(契約社員)</option><option value="サーバエンジニア(PHP)">サーバエンジニア(PHP)</option><option value="サーバエンジニア(Ruby)">サーバエンジニア(Ruby)</option><option value="インフラエンジニア(SRE)">インフラエンジニア(SRE)</option><option value="インフラエンジニア(社内SE)">インフラエンジニア(社内SE)</option><option value="テストエンジニア(QA)">テストエンジニア(QA)</option><option value="フロントエンジニア">フロントエンジニア</option><option value="クライアントサイトエンジニア(Android)">クライアントサイトエンジニア(Android)</option></select><div class="select-arrow" style="height: 27px; width: 27px; line-height: 27px;"></div></div></span></p>
<p><label> 自己PRや応募動機<br>
<span class="wpcf7-form-control-wrap textarea-653"><textarea style="width:100%" name="textarea-653" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span></label></p>
<p>当社を知ったきっかけを教えてください<br>
<span class="wpcf7-form-control-wrap checkbox-953"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first"><label><input type="checkbox" name="checkbox-953[]" value="1.検索エンジン"><span class="wpcf7-list-item-label">1.検索エンジン</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-953[]" value="2.indeed"><span class="wpcf7-list-item-label">2.indeed</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-953[]" value="3.プレスリリース"><span class="wpcf7-list-item-label">3.プレスリリース</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-953[]" value="4. 求人サイト"><span class="wpcf7-list-item-label">4. 求人サイト</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-953[]" value="5.人材紹介会社"><span class="wpcf7-list-item-label">5.人材紹介会社</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-953[]" value="6.友人・知人"><span class="wpcf7-list-item-label">6.友人・知人</span></label></span><span class="wpcf7-list-item last"><label><input type="checkbox" name="checkbox-953[]" value="7.その他"><span class="wpcf7-list-item-label">7.その他</span></label></span></span></span></p>
<p><label>プライバシーポリシー （<a href="/privacypolicy/">詳細はこちら</a>）<br>
<span class="wpcf7-form-control-wrap checkbox-522"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="checkbox-522[]" value="同意する"><span class="wpcf7-list-item-label">同意する</span></label></span></span></span></label></p>
<p><input type="submit" value="送信" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span></p>
<p style="display: none !important;"><label>Δ<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="1700661284776"><script>document.getElementById("ak_js_1").setAttribute("value",(new Date()).getTime());</script></p><div style="display: none;" class="fusion-alert alert custom alert-custom fusion-alert-center wpcf7-response-output fusion-alert-capitalize awb-alert-native-link-color alert-dismissable awb-alert-close-boxed" style="--awb-border-top-left-radius:0px;--awb-border-top-right-radius:0px;--awb-border-bottom-left-radius:0px;--awb-border-bottom-right-radius:0px;" role="alert"><div class="fusion-alert-content-wrapper"><span class="fusion-alert-content"></span></div><button type="button" class="close toggle-alert" data-dismiss="alert" aria-label="Close">×</button></div></form></div><div class="fusion-clearfix"></div></div></div><div class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-last" style="--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% ) * 0.2 ) );"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><div class="fusion-clearfix"></div></div></div></div></div>
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
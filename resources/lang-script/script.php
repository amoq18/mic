									<div style="margin-top:5px;margin-left:10px;">
								                  <!-- Use CSS to replace link text with flag icons -->
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(en)';location.reload();"><img src="<?php echo $URL;?>images/lang/en.png" align="center"> </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(de)';location.reload();"><img src="<?php echo $URL;?>images/lang/de.png" align="center"> </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(es)';location.reload();"><img src="<?php echo $URL;?>images/lang/es.png" align="center">  </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(fr)';location.reload();"><img src="<?php echo $URL;?>images/lang/fr.png" align="center">  </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(nl)';location.reload();"><img src="<?php echo $URL;?>images/lang/nl.png" align="center">  </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(ro)';location.reload();"><img src="<?php echo $URL;?>images/lang/ro.png" align="center"> </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(mn)';location.reload();"><img src="<?php echo $URL;?>images/lang/mn.png" align="center"> </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(dk)';location.reload();"><img src="<?php echo $URL;?>images/lang/drapeau-danemark.png" width="24" height="24" align="center"> </a>&nbsp;
								            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(se)';location.reload();"><img src="<?php echo $URL;?>images/lang/simaia-soyidias.png" width="24" height="24" align="center"> </a>&nbsp;								               
								                 <!-- Code provided by Google -->
								            <div style="display:none"><div id="google_translate_element"></div><script type="text/javascript">
								            function googleTranslateElementInit() {
								                new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
								                }
								            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div>

								            <!-- Flag click handler -->
								            <!-- Flag click handler -->
								            <script type="text/javascript">
								                $('.translation-links a').click(function() {
								                  var lang = $(this).data('lang');
								                  var $frame = $('.goog-te-menu-frame:first');
								                  if (!$frame.size()) {
								                    alert("Error: Could not find Google translate frame.");
								                    return false;
								                  }
								                  $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
								                  return false;
								                });
								            </script>
								    </div>
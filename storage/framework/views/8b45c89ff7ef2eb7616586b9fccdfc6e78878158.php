
<?php if(basicControl()->analytic_status): ?>

    <!--Start of Google analytic Script-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(trim(basicControl()->MEASUREMENT_ID)); ?>"></script>
	<script>
		"use strict";
		$(document).ready(function () {
			var MEASUREMENT_ID = "<?php echo e(basicControl()->MEASUREMENT_ID); ?>";
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}

			gtag('js', new Date());
			gtag('config', MEASUREMENT_ID);
		});
	</script>
    <!--End of Google analytic Script-->
<?php endif; ?>


<?php if(basicControl()->tawk_status): ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        $(document).ready(function () {
             var Tawk_SRC = 'https://embed.tawk.to/' + "<?php echo e(trim(basicControl()->tawk_id)); ?>";
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = Tawk_SRC;
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        });
    </script>
    <!--End of Tawk.to Script-->
<?php endif; ?>


<?php if(basicControl()->fb_messenger_status): ?>


    <!--start of Facebook Messenger Script-->
	<div id="fb-root"></div>
	<script>
		"use strict";
		$(document).ready(function () {
			var fb_app_id = "<?php echo e(basicControl()->fb_app_id); ?>";
			window.fbAsyncInit = function () {
				FB.init({
					appId: fb_app_id,
					autoLogAppEvents: true,
					xfbml: true,
					version: 'v10.0'
				});
			};
			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s);
				js.id = id;
				js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		});
	</script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
	<div class="fb-customerchat" page_id="<?php echo e(basicControl()->fb_page_id); ?>"></div>
    <!--End of Facebook Messenger Script-->
<?php endif; ?>



<script>
    "use strict";
    var root = document.querySelector(':root');
    root.style.setProperty('--primary', '<?php echo e(config('basic.base_color')??'#cc54f4'); ?>');
    root.style.setProperty('--secondary', '<?php echo e(config('basic.secondary_color')??'#488ff9'); ?>');

</script>
<?php /**PATH D:\digital land project\digitalland\resources\views/plugins.blade.php ENDPATH**/ ?>
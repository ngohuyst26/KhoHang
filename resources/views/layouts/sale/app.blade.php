<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
		@charset "UTF-8";

		[ng\:cloak],
		[ng-cloak],
		[data-ng-cloak],
		[x-ng-cloak],
		.ng-cloak,
		.x-ng-cloak,
		.ng-hide:not(.ng-hide-animate) {
			display: none !important;
		}

		ng\:form {
			display: block;
		}

		.ng-animate-shim {
			visibility: hidden;
		}

		.ng-anchor {
			position: absolute;
		}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chi nhánh trung tâm - Bán hàng</title>
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta http-equiv="cleartype" content="on">

    <!-- No Cache index -->
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">

    <link rel="icon" type="image/x-icon" href="https://cdn-app.kiotviet.vn/retailler/Content/img/favicon.ico" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/assets/css/mains.92303bb3.css">
    @stack('style')
</head>

<body ui-sref-active="{login:'login', expire: 'expireTime'}" class="mode-1 expand-delivery" ng-class="{'mode-1': $root.saleScreenMode === 1 || $root.activeCart.isWarrantyCart(),
   'mode-refund' : $root.activeCart.isRefund(),
   'normal-mode' : ($root.saleScreenMode === 2) &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart(),
   'international-version' : $root.session.isHiddenFeatures('kiotviet_finance'),
   'currency-peso': $root.currencyPeso,
    'en-US': $root.session.User.lang === 'en-US' }" data-new-gr-c-s-check-loaded="14.1189.0" data-gr-ext-installed="">
<div id="loading-bar-spinner" style="display: none;">
    <div class="no-freeze-spinner">
        <div class="spinner--container">
            <i class="fas fa-shopping-basket"></i>
            <i class="fas fa-user"></i>
            <div></div>
        </div>
    </div>
</div>

<!---->
<div ui-view="">
    <div class="wrapper home-page fast-mode invoice warranty kv-ship-v4" ng-class="{'home-page-extend': !($root.saleScreenMode === 1) &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart(), 'fast-mode': ($root.saleScreenMode === 1) &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart(), 'normal-mode' : ($root.saleScreenMode === 2) &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart(), 'delivery-mode' : ($root.saleScreenMode === 3) &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart(), 'invoice': $root.activeCart.isInvoice(), 'order': $root.activeCart.isOrder(), 'refund': $root.activeCart.isRefund(), 'medicine' : $root.session.IsActiveGppDrugStore, 'warranty' : $root.saleScreenMode === 1 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart(), 'kv-ship-v4' : $root.session.IsUsingKShipV4Toggle}" kv-disabled-control="$root.activeCart.Code.indexOf('HDO') === 0 || $root.activeCart.Code.indexOf('THO') === 0" kv-disabled-watch-var="$root.activeCart.Code">
        <x-sale.header></x-sale.header>
        @yield('content')
        <x-sale.footer></x-sale.footer>
        <div id="widget" style="z-index: 10004;">
            <div id="k-finance-widget-onboarding">
                <div>
                    <div data-v-04106524="" id="k-finance-widget-onboarding"></div>
                </div><!---->
            </div>
            <div id="k-pay-widget-register"></div>
            <div id="k-finance-widget-popup"></div>
            <div id="k-finance-callback"></div>
        </div>
        <div data-v-f869179a="" id="k-target-popup" class="k-target-popup">
            <div data-v-f869179a="" tabindex="-1" class="vodal k-target-dialog" style="animation-duration: 801ms; display: none;">
                <div class="vodal-mask"></div>
                <div class="vodal-dialog" style="width: 830px; height: 390px; animation-duration: 801ms; display: none;">
                    <span class="vodal-close"></span>
                    <div data-v-f869179a="" class="k-target-container k-target-popup">
                        <div data-v-f869179a="" class="k-target-body">
                            <div data-v-f869179a="" class="k-target-swiper">
                                <div data-v-f869179a="" class="swiper-container swiper swiper-container-initialized swiper-container-horizontal" style="height: 390px;">
                                    <div class="swiper-wrapper" style="transition: all 300ms ease 0s;"></div>
                                    <div data-v-f869179a="" class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" style="display: none;"></div>
                                    <div data-v-f869179a="" class="swiper-button-prev" style="display: none;"></div>
                                    <div data-v-f869179a="" class="swiper-button-next" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-f869179a="" class="k-target-footer">
                            <div data-v-f869179a="" class="wrap-popup-hidden">
                                <label data-v-f869179a="" class="popup-hidden left"><input data-v-f869179a="" type="checkbox" class="checkbox-design">
                                    <span data-v-f869179a="" class="checkmark"></span>
                                    Không hiển thị lại lần sau
                                </label> <!----></div>
                            <label data-v-f869179a="" class="hotline"><img data-v-f869179a="" src="https://api-ktarget.citigo.com.vn/icons/phone.png" class="img-phone">
                                <span data-v-f869179a="" class="k-target-footer-items">Hotline 19006522</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-f869179a="" tabindex="-1" class="vodal-success vodal k-target-dialog" style="animation-duration: 801ms; display: none;">
                <div class="vodal-mask"></div>
                <div class="vodal-dialog" style="width: 830px; height: 390px; animation-duration: 801ms; display: none;">
                    <span class="vodal-close"></span> <i data-v-f869179a="" class="fa fa-close"></i>
                    <img data-v-f869179a="" src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2022/08/dang-ky-thanh-cong.png" class="img-success">
                </div>
            </div>
        </div>
        <div id="k-target-banner"></div>
    </div>
</div>

<script type="text/javascript">
    function getChromeVersion() {
        var raw = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);

        return raw ? parseInt(raw[2], 10) : false;
    }

    function loadFallBackImage(element) {

        var linkCdn = window.cdnPrefixFolder
        var lstCdnPrefix = linkCdn.CdnPrefixs;
        var forderPath = '';

        lstCdnPrefix.forEach(item => {
            if (element.src.indexOf(item) > -1) {
                forderPath = element.src.replace(`${item}/`, '')
            }
        });
        for (let index = 0; index < lstCdnPrefix.length; index++) {
            var item = lstCdnPrefix[index];
            if (element.src.indexOf(item) == -1 && forderPath) {
                element.src = `${item}/${forderPath}`;
                break;
            }
        }
    }

    var chromeVer = getChromeVersion();
    if ('serviceWorker' in navigator && navigator.serviceWorker.onmessage !== undefined && chromeVer > 70) {
        window.addEventListener('load', function () {
            const swUrl = window.location.pathname + 'sw.js';
            navigator.serviceWorker.register(swUrl).then(function (registration) {
                console.log('[KV] SW registered: ', registration);
            }).catch(function (registrationError) {
                console.log('[KV] SW registration failed: ', registrationError);
            });
        });
    }
</script>
@stack('script')
</body>

</html>
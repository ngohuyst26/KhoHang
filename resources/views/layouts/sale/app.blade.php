<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
		[uib-typeahead-popup].dropdown-menu {
			display: block;
		}
    </style>
    <style type="text/css">
		.uib-time input {
			width: 50px;
		}
    </style>
    <style type="text/css">
		[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,
		[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,
		[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,
		[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,
		[uib-popover-popup].popover.top-left > .arrow,
		[uib-popover-popup].popover.top-right > .arrow,
		[uib-popover-popup].popover.bottom-left > .arrow,
		[uib-popover-popup].popover.bottom-right > .arrow,
		[uib-popover-popup].popover.left-top > .arrow,
		[uib-popover-popup].popover.left-bottom > .arrow,
		[uib-popover-popup].popover.right-top > .arrow,
		[uib-popover-popup].popover.right-bottom > .arrow,
		[uib-popover-html-popup].popover.top-left > .arrow,
		[uib-popover-html-popup].popover.top-right > .arrow,
		[uib-popover-html-popup].popover.bottom-left > .arrow,
		[uib-popover-html-popup].popover.bottom-right > .arrow,
		[uib-popover-html-popup].popover.left-top > .arrow,
		[uib-popover-html-popup].popover.left-bottom > .arrow,
		[uib-popover-html-popup].popover.right-top > .arrow,
		[uib-popover-html-popup].popover.right-bottom > .arrow,
		[uib-popover-template-popup].popover.top-left > .arrow,
		[uib-popover-template-popup].popover.top-right > .arrow,
		[uib-popover-template-popup].popover.bottom-left > .arrow,
		[uib-popover-template-popup].popover.bottom-right > .arrow,
		[uib-popover-template-popup].popover.left-top > .arrow,
		[uib-popover-template-popup].popover.left-bottom > .arrow,
		[uib-popover-template-popup].popover.right-top > .arrow,
		[uib-popover-template-popup].popover.right-bottom > .arrow {
			top: auto;
			bottom: auto;
			left: auto;
			right: auto;
			margin: 0;
		}

		[uib-popover-popup].popover,
		[uib-popover-html-popup].popover,
		[uib-popover-template-popup].popover {
			display: block !important;
		}
    </style>
    <style type="text/css">
		.uib-datepicker-popup.dropdown-menu {
			display: block;
			float: none;
			margin: 0;
		}

		.uib-button-bar {
			padding: 10px 9px 2px;
		}
    </style>
    <style type="text/css">
		.uib-position-measure {
			display: block !important;
			visibility: hidden !important;
			position: absolute !important;
			top: -9999px !important;
			left: -9999px !important;
		}

		.uib-position-scrollbar-measure {
			position: absolute !important;
			top: -9999px !important;
			width: 50px !important;
			height: 50px !important;
			overflow: scroll !important;
		}

		.uib-position-body-scrollbar-measure {
			overflow: scroll !important;
		}
    </style>
    <style type="text/css">
		.uib-datepicker .uib-title {
			width: 100%;
		}

		.uib-day button,
		.uib-month button,
		.uib-year button {
			min-width: 100%;
		}

		.uib-left,
		.uib-right {
			width: 100%
		}
    </style>
    <style type="text/css">
		.ng-animate.item:not(.left):not(.right) {
			-webkit-transition: 0s ease-in-out left;
			transition: 0s ease-in-out left
		}
    </style>
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


    <!-- APP CONFIG -->
    <script type="text/javascript">
        window.commitHash = '5ac03db0-7/26/2024, 12:15:36 PM';
        window.cfg_pricebookItemsNoSync = ['ttpt']; // ( offline mode will not work)
        window.useVsRepeatForRetailer = ['namphuongbd'];
        var kvSession = JSON.parse(localStorage.getItem("kvSession"));
        var defaultCurrencyFormat = {
            Abbreviation: "VND",
            Code: "vi-VN",
            CurrencyDecimalPlace: 0,
            CurrencyDecimalPlaceForProduct: 2,
            CurrencyDecimalSep: ".",
            CurrencyGroupSep: ",",
            CurrencySymbol: "",
            IsRemovePrecision: true,
            IsRemovePrecisionForProduct: true,
            IsUseCurrency: true,
            Name: "Đồng Việt Nam (VND)",
            Status: 1
        };

        var defaultCurrencies = [{
            CurrencyDecimalSep: ".",
            CurrencyGroupSep: ",",
            CurrencyDecimalPlace: 0,
            Code: "vi-VN",
            CurrencyDecimalPlaceForProduct: 2,
            Abbreviation: "VND",
            Status: 0,
            IsRemovePrecision: true,
            IsRemovePrecisionForProduct: true,
            CurrencyCode: "VND",
            CurrencyName: "Đồng Việt Nam",
            CurrencySymbol: "",
            IsLocal: true,
            BaseCurrency: "VND",
            ExchangeRate: 1,
        }];

        var defaultDateTimeFormat = {
            ShortTimePattern: "HH:mm",
            LongTimePattern: "HH:mm:ss",
            ShortDatePattern: "dd/MM/yyyy",
            LongDatePattern: "dddd, MMMM dd, yyyy",
            ShortDateTimePattern: "dd/MM/yyyy HH:mm",
            LongDateTimePattern: "dd/MM/yyyy HH:mm:ss",
            YearMonthPattern: "MMMM, yyyy",
            MonthDayPattern: "dd/MM",
        };

        if (kvSession != null && kvSession != undefined) {
            if (kvSession.CurrencyFormat != null && kvSession.CurrencyFormat != undefined) {
                window.GlobalCurrencyFormat = kvSession.CurrencyFormat;
            }
            else {
                window.GlobalCurrencyFormat = defaultCurrencyFormat;
            }
            if (kvSession.DateTimeFormat != null && kvSession.DateTimeFormat != undefined) {
                window.GlobalDateTimeFormat = kvSession.DateTimeFormat;
            }
            else {
                window.GlobalDateTimeFormat = defaultDateTimeFormat;
            }
            if (kvSession.DateTimeFormat != null && kvSession.DateTimeFormat != undefined) {
                window.GlobalDateTimeFormat = kvSession.DateTimeFormat;
            }
            else {
                window.GlobalDateTimeFormat = defaultDateTimeFormat;
            }
            window.TimeZoneSetting = kvSession.CurrentBranch.TimeZone;
            window.IsUsingTimezone = kvSession.IsUsingTimezone;
            if (kvSession.IsUsingMultiCurrency != undefined) {
                window.IsUsingMultiCurrency = kvSession.IsUsingMultiCurrency;
            }
            // Đọc dữ liệu Currencies từ session
            if (kvSession.Currencies != null && kvSession.Currencies != undefined) {
                window.MultiCurrencySetting = kvSession.Currencies;
            }
            // Đọc dữ liệu Currencies từ kv-currencies mới nhất
            var kvCurrencies = JSON.parse(localStorage.getItem("kv-currencies"));
            if (kvCurrencies != null && kvCurrencies != undefined) {
                window.MultiCurrencySetting = kvCurrencies;
            }

        }
        else {
            window.GlobalCurrencyFormat = defaultCurrencyFormat;
            window.GlobalDateTimeFormat = defaultDateTimeFormat;
            window.TimeZoneSetting = '';
            window.IsUsingTimezone = false;
            window.MultiCurrencySetting = [];
            window.IsUsingMultiCurrency = false;
        }
    </script>
    <!-- APP CONFIG -->
    <script src="https://cdn-app.kiotviet.vn/clientsdk/kv-sdk-3.0.5.js"></script>
    <link rel="stylesheet" href="https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/assets/css/mains.92303bb3.css">
{{--    <script src="https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/app/vendor.6e26f171.js"></script>--}}
    <style>
		.swal2-popup.swal2-toast {
			box-sizing: border-box;
			grid-column: 1/4 !important;
			grid-row: 1/4 !important;
			grid-template-columns: min-content auto min-content;
			padding: 1em;
			overflow-y: hidden;
			background: #fff;
			box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
			pointer-events: all
		}

		.swal2-popup.swal2-toast > * {
			grid-column: 2
		}

		.swal2-popup.swal2-toast .swal2-title {
			margin: .5em 1em;
			padding: 0;
			font-size: 1em;
			text-align: initial
		}

		.swal2-popup.swal2-toast .swal2-loading {
			justify-content: center
		}

		.swal2-popup.swal2-toast .swal2-input {
			height: 2em;
			margin: .5em;
			font-size: 1em
		}

		.swal2-popup.swal2-toast .swal2-validation-message {
			font-size: 1em
		}

		.swal2-popup.swal2-toast .swal2-footer {
			margin: .5em 0 0;
			padding: .5em 0 0;
			font-size: .8em
		}

		.swal2-popup.swal2-toast .swal2-close {
			grid-column: 3/3;
			grid-row: 1/99;
			align-self: center;
			width: .8em;
			height: .8em;
			margin: 0;
			font-size: 2em
		}

		.swal2-popup.swal2-toast .swal2-html-container {
			margin: .5em 1em;
			padding: 0;
			overflow: initial;
			font-size: 1em;
			text-align: initial
		}

		.swal2-popup.swal2-toast .swal2-html-container:empty {
			padding: 0
		}

		.swal2-popup.swal2-toast .swal2-loader {
			grid-column: 1;
			grid-row: 1/99;
			align-self: center;
			width: 2em;
			height: 2em;
			margin: .25em
		}

		.swal2-popup.swal2-toast .swal2-icon {
			grid-column: 1;
			grid-row: 1/99;
			align-self: center;
			width: 2em;
			min-width: 2em;
			height: 2em;
			margin: 0 .5em 0 0
		}

		.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
			display: flex;
			align-items: center;
			font-size: 1.8em;
			font-weight: bold
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
			width: 2em;
			height: 2em
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
			top: .875em;
			width: 1.375em
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
			left: .3125em
		}

		.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
			right: .3125em
		}

		.swal2-popup.swal2-toast .swal2-actions {
			justify-content: flex-start;
			height: auto;
			margin: 0;
			margin-top: .5em;
			padding: 0 .5em
		}

		.swal2-popup.swal2-toast .swal2-styled {
			margin: .25em .5em;
			padding: .4em .6em;
			font-size: 1em
		}

		.swal2-popup.swal2-toast .swal2-success {
			border-color: #a5dc86
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
			position: absolute;
			width: 1.6em;
			height: 3em;
			border-radius: 50%
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
			top: -0.8em;
			left: -0.5em;
			transform: rotate(-45deg);
			transform-origin: 2em 2em;
			border-radius: 4em 0 0 4em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
			top: -0.25em;
			left: .9375em;
			transform-origin: 0 1.5em;
			border-radius: 0 4em 4em 0
		}

		.swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
			width: 2em;
			height: 2em
		}

		.swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
			top: 0;
			left: .4375em;
			width: .4375em;
			height: 2.6875em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
			height: .3125em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
			top: 1.125em;
			left: .1875em;
			width: .75em
		}

		.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
			top: .9375em;
			right: .1875em;
			width: 1.375em
		}

		.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
			animation: swal2-toast-animate-success-line-tip .75s
		}

		.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
			animation: swal2-toast-animate-success-line-long .75s
		}

		.swal2-popup.swal2-toast.swal2-show {
			animation: swal2-toast-show .5s
		}

		.swal2-popup.swal2-toast.swal2-hide {
			animation: swal2-toast-hide .1s forwards
		}

		div:where(.swal2-container) {
			display: grid;
			position: fixed;
			z-index: 1060;
			inset: 0;
			box-sizing: border-box;
			grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
			grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
			height: 100%;
			padding: .625em;
			overflow-x: hidden;
			transition: background-color .1s;
			-webkit-overflow-scrolling: touch
		}

		div:where(.swal2-container).swal2-backdrop-show,
		div:where(.swal2-container).swal2-noanimation {
			background: rgba(0, 0, 0, .4)
		}

		div:where(.swal2-container).swal2-backdrop-hide {
			background: rgba(0, 0, 0, 0) !important
		}

		div:where(.swal2-container).swal2-top-start,
		div:where(.swal2-container).swal2-center-start,
		div:where(.swal2-container).swal2-bottom-start {
			grid-template-columns: minmax(0, 1fr) auto auto
		}

		div:where(.swal2-container).swal2-top,
		div:where(.swal2-container).swal2-center,
		div:where(.swal2-container).swal2-bottom {
			grid-template-columns: auto minmax(0, 1fr) auto
		}

		div:where(.swal2-container).swal2-top-end,
		div:where(.swal2-container).swal2-center-end,
		div:where(.swal2-container).swal2-bottom-end {
			grid-template-columns: auto auto minmax(0, 1fr)
		}

		div:where(.swal2-container).swal2-top-start > .swal2-popup {
			align-self: start
		}

		div:where(.swal2-container).swal2-top > .swal2-popup {
			grid-column: 2;
			place-self: start center
		}

		div:where(.swal2-container).swal2-top-end > .swal2-popup,
		div:where(.swal2-container).swal2-top-right > .swal2-popup {
			grid-column: 3;
			place-self: start end
		}

		div:where(.swal2-container).swal2-center-start > .swal2-popup,
		div:where(.swal2-container).swal2-center-left > .swal2-popup {
			grid-row: 2;
			align-self: center
		}

		div:where(.swal2-container).swal2-center > .swal2-popup {
			grid-column: 2;
			grid-row: 2;
			place-self: center center
		}

		div:where(.swal2-container).swal2-center-end > .swal2-popup,
		div:where(.swal2-container).swal2-center-right > .swal2-popup {
			grid-column: 3;
			grid-row: 2;
			place-self: center end
		}

		div:where(.swal2-container).swal2-bottom-start > .swal2-popup,
		div:where(.swal2-container).swal2-bottom-left > .swal2-popup {
			grid-column: 1;
			grid-row: 3;
			align-self: end
		}

		div:where(.swal2-container).swal2-bottom > .swal2-popup {
			grid-column: 2;
			grid-row: 3;
			place-self: end center
		}

		div:where(.swal2-container).swal2-bottom-end > .swal2-popup,
		div:where(.swal2-container).swal2-bottom-right > .swal2-popup {
			grid-column: 3;
			grid-row: 3;
			place-self: end end
		}

		div:where(.swal2-container).swal2-grow-row > .swal2-popup,
		div:where(.swal2-container).swal2-grow-fullscreen > .swal2-popup {
			grid-column: 1/4;
			width: 100%
		}

		div:where(.swal2-container).swal2-grow-column > .swal2-popup,
		div:where(.swal2-container).swal2-grow-fullscreen > .swal2-popup {
			grid-row: 1/4;
			align-self: stretch
		}

		div:where(.swal2-container).swal2-no-transition {
			transition: none !important
		}

		div:where(.swal2-container) div:where(.swal2-popup) {
			display: none;
			position: relative;
			box-sizing: border-box;
			grid-template-columns: minmax(0, 100%);
			width: 32em;
			max-width: 100%;
			padding: 0 0 1.25em;
			border: none;
			border-radius: 5px;
			background: #fff;
			color: #545454;
			font-family: inherit;
			font-size: 1rem
		}

		div:where(.swal2-container) div:where(.swal2-popup):focus {
			outline: none
		}

		div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
			overflow-y: hidden
		}

		div:where(.swal2-container) h2:where(.swal2-title) {
			position: relative;
			max-width: 100%;
			margin: 0;
			padding: .8em 1em 0;
			color: inherit;
			font-size: 1.875em;
			font-weight: 600;
			text-align: center;
			text-transform: none;
			word-wrap: break-word
		}

		div:where(.swal2-container) div:where(.swal2-actions) {
			display: flex;
			z-index: 1;
			box-sizing: border-box;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
			width: auto;
			margin: 1.25em auto 0;
			padding: 0
		}

		div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
			opacity: .4
		}

		div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
			background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
		}

		div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
			background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
		}

		div:where(.swal2-container) div:where(.swal2-loader) {
			display: none;
			align-items: center;
			justify-content: center;
			width: 2.2em;
			height: 2.2em;
			margin: 0 1.875em;
			animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
			border-width: .25em;
			border-style: solid;
			border-radius: 100%;
			border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
		}

		div:where(.swal2-container) button:where(.swal2-styled) {
			margin: .3125em;
			padding: .625em 1.1em;
			transition: box-shadow .1s;
			box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
			font-weight: 500
		}

		div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
			cursor: pointer
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
			border: 0;
			border-radius: .25em;
			background: initial;
			background-color: #7066e0;
			color: #fff;
			font-size: 1em
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus {
			box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-deny {
			border: 0;
			border-radius: .25em;
			background: initial;
			background-color: #dc3741;
			color: #fff;
			font-size: 1em
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus {
			box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
			border: 0;
			border-radius: .25em;
			background: initial;
			background-color: #6e7881;
			color: #fff;
			font-size: 1em
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus {
			box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
		}

		div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus {
			box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
		}

		div:where(.swal2-container) button:where(.swal2-styled):focus {
			outline: none
		}

		div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
			border: 0
		}

		div:where(.swal2-container) div:where(.swal2-footer) {
			margin: 1em 0 0;
			padding: 1em 1em 0;
			border-top: 1px solid #eee;
			color: inherit;
			font-size: 1em;
			text-align: center
		}

		div:where(.swal2-container) .swal2-timer-progress-bar-container {
			position: absolute;
			right: 0;
			bottom: 0;
			left: 0;
			grid-column: auto !important;
			overflow: hidden;
			border-bottom-right-radius: 5px;
			border-bottom-left-radius: 5px
		}

		div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
			width: 100%;
			height: .25em;
			background: rgba(0, 0, 0, .2)
		}

		div:where(.swal2-container) img:where(.swal2-image) {
			max-width: 100%;
			margin: 2em auto 1em
		}

		div:where(.swal2-container) button:where(.swal2-close) {
			z-index: 2;
			align-items: center;
			justify-content: center;
			width: 1.2em;
			height: 1.2em;
			margin-top: 0;
			margin-right: 0;
			margin-bottom: -1.2em;
			padding: 0;
			overflow: hidden;
			transition: color .1s, box-shadow .1s;
			border: none;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0);
			color: #ccc;
			font-family: monospace;
			font-size: 2.5em;
			cursor: pointer;
			justify-self: end
		}

		div:where(.swal2-container) button:where(.swal2-close):hover {
			transform: none;
			background: rgba(0, 0, 0, 0);
			color: #f27474
		}

		div:where(.swal2-container) button:where(.swal2-close):focus {
			outline: none;
			box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
		}

		div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
			border: 0
		}

		div:where(.swal2-container) .swal2-html-container {
			z-index: 1;
			justify-content: center;
			margin: 1em 1.6em .3em;
			padding: 0;
			overflow: auto;
			color: inherit;
			font-size: 1.125em;
			font-weight: normal;
			line-height: normal;
			text-align: center;
			word-wrap: break-word;
			word-break: break-word
		}

		div:where(.swal2-container) input:where(.swal2-input),
		div:where(.swal2-container) input:where(.swal2-file),
		div:where(.swal2-container) textarea:where(.swal2-textarea),
		div:where(.swal2-container) select:where(.swal2-select),
		div:where(.swal2-container) div:where(.swal2-radio),
		div:where(.swal2-container) label:where(.swal2-checkbox) {
			margin: 1em 2em 3px
		}

		div:where(.swal2-container) input:where(.swal2-input),
		div:where(.swal2-container) input:where(.swal2-file),
		div:where(.swal2-container) textarea:where(.swal2-textarea) {
			box-sizing: border-box;
			width: auto;
			transition: border-color .1s, box-shadow .1s;
			border: 1px solid #d9d9d9;
			border-radius: .1875em;
			background: rgba(0, 0, 0, 0);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
			color: inherit;
			font-size: 1.125em
		}

		div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
		div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
		div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
			border-color: #f27474 !important;
			box-shadow: 0 0 2px #f27474 !important
		}

		div:where(.swal2-container) input:where(.swal2-input):focus,
		div:where(.swal2-container) input:where(.swal2-file):focus,
		div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
			border: 1px solid #b4dbed;
			outline: none;
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
		}

		div:where(.swal2-container) input:where(.swal2-input)::placeholder,
		div:where(.swal2-container) input:where(.swal2-file)::placeholder,
		div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
			color: #ccc
		}

		div:where(.swal2-container) .swal2-range {
			margin: 1em 2em 3px;
			background: #fff
		}

		div:where(.swal2-container) .swal2-range input {
			width: 80%
		}

		div:where(.swal2-container) .swal2-range output {
			width: 20%;
			color: inherit;
			font-weight: 600;
			text-align: center
		}

		div:where(.swal2-container) .swal2-range input,
		div:where(.swal2-container) .swal2-range output {
			height: 2.625em;
			padding: 0;
			font-size: 1.125em;
			line-height: 2.625em
		}

		div:where(.swal2-container) .swal2-input {
			height: 2.625em;
			padding: 0 .75em
		}

		div:where(.swal2-container) .swal2-file {
			width: 75%;
			margin-right: auto;
			margin-left: auto;
			background: rgba(0, 0, 0, 0);
			font-size: 1.125em
		}

		div:where(.swal2-container) .swal2-textarea {
			height: 6.75em;
			padding: .75em
		}

		div:where(.swal2-container) .swal2-select {
			min-width: 50%;
			max-width: 100%;
			padding: .375em .625em;
			background: rgba(0, 0, 0, 0);
			color: inherit;
			font-size: 1.125em
		}

		div:where(.swal2-container) .swal2-radio,
		div:where(.swal2-container) .swal2-checkbox {
			align-items: center;
			justify-content: center;
			background: #fff;
			color: inherit
		}

		div:where(.swal2-container) .swal2-radio label,
		div:where(.swal2-container) .swal2-checkbox label {
			margin: 0 .6em;
			font-size: 1.125em
		}

		div:where(.swal2-container) .swal2-radio input,
		div:where(.swal2-container) .swal2-checkbox input {
			flex-shrink: 0;
			margin: 0 .4em
		}

		div:where(.swal2-container) label:where(.swal2-input-label) {
			display: flex;
			justify-content: center;
			margin: 1em auto 0
		}

		div:where(.swal2-container) div:where(.swal2-validation-message) {
			align-items: center;
			justify-content: center;
			margin: 1em 0 0;
			padding: .625em;
			overflow: hidden;
			background: #f0f0f0;
			color: #666;
			font-size: 1em;
			font-weight: 300
		}

		div:where(.swal2-container) div:where(.swal2-validation-message)::before {
			content: "!";
			display: inline-block;
			width: 1.5em;
			min-width: 1.5em;
			height: 1.5em;
			margin: 0 .625em;
			border-radius: 50%;
			background-color: #f27474;
			color: #fff;
			font-weight: 600;
			line-height: 1.5em;
			text-align: center
		}

		div:where(.swal2-container) .swal2-progress-steps {
			flex-wrap: wrap;
			align-items: center;
			max-width: 100%;
			margin: 1.25em auto;
			padding: 0;
			background: rgba(0, 0, 0, 0);
			font-weight: 600
		}

		div:where(.swal2-container) .swal2-progress-steps li {
			display: inline-block;
			position: relative
		}

		div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
			z-index: 20;
			flex-shrink: 0;
			width: 2em;
			height: 2em;
			border-radius: 2em;
			background: #2778c4;
			color: #fff;
			line-height: 2em;
			text-align: center
		}

		div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
			background: #2778c4
		}

		div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step ~ .swal2-progress-step {
			background: #add8e6;
			color: #fff
		}

		div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step ~ .swal2-progress-step-line {
			background: #add8e6
		}

		div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
			z-index: 10;
			flex-shrink: 0;
			width: 2.5em;
			height: .4em;
			margin: 0 -1px;
			background: #2778c4
		}

		div:where(.swal2-icon) {
			position: relative;
			box-sizing: content-box;
			justify-content: center;
			width: 5em;
			height: 5em;
			margin: 2.5em auto .6em;
			border: 0.25em solid rgba(0, 0, 0, 0);
			border-radius: 50%;
			border-color: #000;
			font-family: inherit;
			line-height: 5em;
			cursor: default;
			user-select: none
		}

		div:where(.swal2-icon) .swal2-icon-content {
			display: flex;
			align-items: center;
			font-size: 3.75em
		}

		div:where(.swal2-icon).swal2-error {
			border-color: #f27474;
			color: #f27474
		}

		div:where(.swal2-icon).swal2-error .swal2-x-mark {
			position: relative;
			flex-grow: 1
		}

		div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
			display: block;
			position: absolute;
			top: 2.3125em;
			width: 2.9375em;
			height: .3125em;
			border-radius: .125em;
			background-color: #f27474
		}

		div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
			left: 1.0625em;
			transform: rotate(45deg)
		}

		div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
			right: 1em;
			transform: rotate(-45deg)
		}

		div:where(.swal2-icon).swal2-error.swal2-icon-show {
			animation: swal2-animate-error-icon .5s
		}

		div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
			animation: swal2-animate-error-x-mark .5s
		}

		div:where(.swal2-icon).swal2-warning {
			border-color: #facea8;
			color: #f8bb86
		}

		div:where(.swal2-icon).swal2-warning.swal2-icon-show {
			animation: swal2-animate-error-icon .5s
		}

		div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
			animation: swal2-animate-i-mark .5s
		}

		div:where(.swal2-icon).swal2-info {
			border-color: #9de0f6;
			color: #3fc3ee
		}

		div:where(.swal2-icon).swal2-info.swal2-icon-show {
			animation: swal2-animate-error-icon .5s
		}

		div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
			animation: swal2-animate-i-mark .8s
		}

		div:where(.swal2-icon).swal2-question {
			border-color: #c9dae1;
			color: #87adbd
		}

		div:where(.swal2-icon).swal2-question.swal2-icon-show {
			animation: swal2-animate-error-icon .5s
		}

		div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
			animation: swal2-animate-question-mark .8s
		}

		div:where(.swal2-icon).swal2-success {
			border-color: #a5dc86;
			color: #a5dc86
		}

		div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
			position: absolute;
			width: 3.75em;
			height: 7.5em;
			border-radius: 50%
		}

		div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
			top: -0.4375em;
			left: -2.0635em;
			transform: rotate(-45deg);
			transform-origin: 3.75em 3.75em;
			border-radius: 7.5em 0 0 7.5em
		}

		div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
			top: -0.6875em;
			left: 1.875em;
			transform: rotate(-45deg);
			transform-origin: 0 3.75em;
			border-radius: 0 7.5em 7.5em 0
		}

		div:where(.swal2-icon).swal2-success .swal2-success-ring {
			position: absolute;
			z-index: 2;
			top: -0.25em;
			left: -0.25em;
			box-sizing: content-box;
			width: 100%;
			height: 100%;
			border: .25em solid rgba(165, 220, 134, .3);
			border-radius: 50%
		}

		div:where(.swal2-icon).swal2-success .swal2-success-fix {
			position: absolute;
			z-index: 1;
			top: .5em;
			left: 1.625em;
			width: .4375em;
			height: 5.625em;
			transform: rotate(-45deg)
		}

		div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
			display: block;
			position: absolute;
			z-index: 2;
			height: .3125em;
			border-radius: .125em;
			background-color: #a5dc86
		}

		div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
			top: 2.875em;
			left: .8125em;
			width: 1.5625em;
			transform: rotate(45deg)
		}

		div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
			top: 2.375em;
			right: .5em;
			width: 2.9375em;
			transform: rotate(-45deg)
		}

		div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
			animation: swal2-animate-success-line-tip .75s
		}

		div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
			animation: swal2-animate-success-line-long .75s
		}

		div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
			animation: swal2-rotate-success-circular-line 4.25s ease-in
		}

		[class^=swal2] {
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
		}

		.swal2-show {
			animation: swal2-show .3s
		}

		.swal2-hide {
			animation: swal2-hide .15s forwards
		}

		.swal2-noanimation {
			transition: none
		}

		.swal2-scrollbar-measure {
			position: absolute;
			top: -9999px;
			width: 50px;
			height: 50px;
			overflow: scroll
		}

		.swal2-rtl .swal2-close {
			margin-right: initial;
			margin-left: 0
		}

		.swal2-rtl .swal2-timer-progress-bar {
			right: 0;
			left: auto
		}

		@keyframes swal2-toast-show {
			0% {
				transform: translateY(-0.625em) rotateZ(2deg)
			}

			33% {
				transform: translateY(0) rotateZ(-2deg)
			}

			66% {
				transform: translateY(0.3125em) rotateZ(2deg)
			}

			100% {
				transform: translateY(0) rotateZ(0deg)
			}
		}

		@keyframes swal2-toast-hide {
			100% {
				transform: rotateZ(1deg);
				opacity: 0
			}
		}

		@keyframes swal2-toast-animate-success-line-tip {
			0% {
				top: .5625em;
				left: .0625em;
				width: 0
			}

			54% {
				top: .125em;
				left: .125em;
				width: 0
			}

			70% {
				top: .625em;
				left: -0.25em;
				width: 1.625em
			}

			84% {
				top: 1.0625em;
				left: .75em;
				width: .5em
			}

			100% {
				top: 1.125em;
				left: .1875em;
				width: .75em
			}
		}

		@keyframes swal2-toast-animate-success-line-long {
			0% {
				top: 1.625em;
				right: 1.375em;
				width: 0
			}

			65% {
				top: 1.25em;
				right: .9375em;
				width: 0
			}

			84% {
				top: .9375em;
				right: 0;
				width: 1.125em
			}

			100% {
				top: .9375em;
				right: .1875em;
				width: 1.375em
			}
		}

		@keyframes swal2-show {
			0% {
				transform: scale(0.7)
			}

			45% {
				transform: scale(1.05)
			}

			80% {
				transform: scale(0.95)
			}

			100% {
				transform: scale(1)
			}
		}

		@keyframes swal2-hide {
			0% {
				transform: scale(1);
				opacity: 1
			}

			100% {
				transform: scale(0.5);
				opacity: 0
			}
		}

		@keyframes swal2-animate-success-line-tip {
			0% {
				top: 1.1875em;
				left: .0625em;
				width: 0
			}

			54% {
				top: 1.0625em;
				left: .125em;
				width: 0
			}

			70% {
				top: 2.1875em;
				left: -0.375em;
				width: 3.125em
			}

			84% {
				top: 3em;
				left: 1.3125em;
				width: 1.0625em
			}

			100% {
				top: 2.8125em;
				left: .8125em;
				width: 1.5625em
			}
		}

		@keyframes swal2-animate-success-line-long {
			0% {
				top: 3.375em;
				right: 2.875em;
				width: 0
			}

			65% {
				top: 3.375em;
				right: 2.875em;
				width: 0
			}

			84% {
				top: 2.1875em;
				right: 0;
				width: 3.4375em
			}

			100% {
				top: 2.375em;
				right: .5em;
				width: 2.9375em
			}
		}

		@keyframes swal2-rotate-success-circular-line {
			0% {
				transform: rotate(-45deg)
			}

			5% {
				transform: rotate(-45deg)
			}

			12% {
				transform: rotate(-405deg)
			}

			100% {
				transform: rotate(-405deg)
			}
		}

		@keyframes swal2-animate-error-x-mark {
			0% {
				margin-top: 1.625em;
				transform: scale(0.4);
				opacity: 0
			}

			50% {
				margin-top: 1.625em;
				transform: scale(0.4);
				opacity: 0
			}

			80% {
				margin-top: -0.375em;
				transform: scale(1.15)
			}

			100% {
				margin-top: 0;
				transform: scale(1);
				opacity: 1
			}
		}

		@keyframes swal2-animate-error-icon {
			0% {
				transform: rotateX(100deg);
				opacity: 0
			}

			100% {
				transform: rotateX(0deg);
				opacity: 1
			}
		}

		@keyframes swal2-rotate-loading {
			0% {
				transform: rotate(0deg)
			}

			100% {
				transform: rotate(360deg)
			}
		}

		@keyframes swal2-animate-question-mark {
			0% {
				transform: rotateY(-360deg)
			}

			100% {
				transform: rotateY(0)
			}
		}

		@keyframes swal2-animate-i-mark {
			0% {
				transform: rotateZ(45deg);
				opacity: 0
			}

			25% {
				transform: rotateZ(-25deg);
				opacity: .4
			}

			50% {
				transform: rotateZ(15deg);
				opacity: .8
			}

			75% {
				transform: rotateZ(-5deg);
				opacity: 1
			}

			100% {
				transform: rotateX(0);
				opacity: 1
			}
		}

		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
			overflow: hidden
		}

		body.swal2-height-auto {
			height: auto !important
		}

		body.swal2-no-backdrop .swal2-container {
			background-color: rgba(0, 0, 0, 0) !important;
			pointer-events: none
		}

		body.swal2-no-backdrop .swal2-container .swal2-popup {
			pointer-events: all
		}

		body.swal2-no-backdrop .swal2-container .swal2-modal {
			box-shadow: 0 0 10px rgba(0, 0, 0, .4)
		}

		@media print {
			body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
				overflow-y: scroll !important
			}

			body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) > [aria-hidden=true] {
				display: none
			}

			body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
				position: static !important
			}
		}

		body.swal2-toast-shown .swal2-container {
			box-sizing: border-box;
			width: 360px;
			max-width: 100%;
			background-color: rgba(0, 0, 0, 0);
			pointer-events: none
		}

		body.swal2-toast-shown .swal2-container.swal2-top {
			inset: 0 auto auto 50%;
			transform: translateX(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-top-end,
		body.swal2-toast-shown .swal2-container.swal2-top-right {
			inset: 0 0 auto auto
		}

		body.swal2-toast-shown .swal2-container.swal2-top-start,
		body.swal2-toast-shown .swal2-container.swal2-top-left {
			inset: 0 auto auto 0
		}

		body.swal2-toast-shown .swal2-container.swal2-center-start,
		body.swal2-toast-shown .swal2-container.swal2-center-left {
			inset: 50% auto auto 0;
			transform: translateY(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-center {
			inset: 50% auto auto 50%;
			transform: translate(-50%, -50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-center-end,
		body.swal2-toast-shown .swal2-container.swal2-center-right {
			inset: 50% 0 auto auto;
			transform: translateY(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-bottom-start,
		body.swal2-toast-shown .swal2-container.swal2-bottom-left {
			inset: auto auto 0 0
		}

		body.swal2-toast-shown .swal2-container.swal2-bottom {
			inset: auto auto 0 50%;
			transform: translateX(-50%)
		}

		body.swal2-toast-shown .swal2-container.swal2-bottom-end,
		body.swal2-toast-shown .swal2-container.swal2-bottom-right {
			inset: auto 0 0 auto
		}
    </style>
    <style id="angular-vs-repeat-style">
		.vs-repeat-debug-element {
			top: 50%;
			left: 0;
			right: 0;
			height: 1px;
			background: red;
			z-index: 99999999;
			box-shadow: 0 0 20px red;
		}

		.vs-repeat-debug-element + .vs-repeat-debug-element {
			display: none;
		}

		.vs-repeat-before-content,
		.vs-repeat-after-content {
			border: none !important;
			padding: 0 !important;
		}
    </style>
{{--    <script src="https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/app/resource.a6cdd786.js"></script>--}}
    <style type="text/css">
		.__react_component_tooltip {
			border-radius: 3px;
			display: inline-block;
			font-size: 13px;
			left: -999em;
			opacity: 0;
			padding: 8px 21px;
			position: fixed;
			pointer-events: none;
			transition: opacity 0.3s ease-out;
			top: -999em;
			visibility: hidden;
			z-index: 999;
		}

		.__react_component_tooltip.allow_hover,
		.__react_component_tooltip.allow_click {
			pointer-events: auto;
		}

		.__react_component_tooltip:before,
		.__react_component_tooltip:after {
			content: "";
			width: 0;
			height: 0;
			position: absolute;
		}

		.__react_component_tooltip.show {
			opacity: 0.9;
			margin-top: 0px;
			margin-left: 0px;
			visibility: visible;
		}

		.__react_component_tooltip.type-dark {
			color: #fff;
			background-color: #222;
		}

		.__react_component_tooltip.type-dark.place-top:after {
			border-top-color: #222;
			border-top-style: solid;
			border-top-width: 6px;
		}

		.__react_component_tooltip.type-dark.place-bottom:after {
			border-bottom-color: #222;
			border-bottom-style: solid;
			border-bottom-width: 6px;
		}

		.__react_component_tooltip.type-dark.place-left:after {
			border-left-color: #222;
			border-left-style: solid;
			border-left-width: 6px;
		}

		.__react_component_tooltip.type-dark.place-right:after {
			border-right-color: #222;
			border-right-style: solid;
			border-right-width: 6px;
		}

		.__react_component_tooltip.type-dark.border {
			border: 1px solid #fff;
		}

		.__react_component_tooltip.type-dark.border.place-top:before {
			border-top: 8px solid #fff;
		}

		.__react_component_tooltip.type-dark.border.place-bottom:before {
			border-bottom: 8px solid #fff;
		}

		.__react_component_tooltip.type-dark.border.place-left:before {
			border-left: 8px solid #fff;
		}

		.__react_component_tooltip.type-dark.border.place-right:before {
			border-right: 8px solid #fff;
		}

		.__react_component_tooltip.type-success {
			color: #fff;
			background-color: #8DC572;
		}

		.__react_component_tooltip.type-success.place-top:after {
			border-top-color: #8DC572;
			border-top-style: solid;
			border-top-width: 6px;
		}

		.__react_component_tooltip.type-success.place-bottom:after {
			border-bottom-color: #8DC572;
			border-bottom-style: solid;
			border-bottom-width: 6px;
		}

		.__react_component_tooltip.type-success.place-left:after {
			border-left-color: #8DC572;
			border-left-style: solid;
			border-left-width: 6px;
		}

		.__react_component_tooltip.type-success.place-right:after {
			border-right-color: #8DC572;
			border-right-style: solid;
			border-right-width: 6px;
		}

		.__react_component_tooltip.type-success.border {
			border: 1px solid #fff;
		}

		.__react_component_tooltip.type-success.border.place-top:before {
			border-top: 8px solid #fff;
		}

		.__react_component_tooltip.type-success.border.place-bottom:before {
			border-bottom: 8px solid #fff;
		}

		.__react_component_tooltip.type-success.border.place-left:before {
			border-left: 8px solid #fff;
		}

		.__react_component_tooltip.type-success.border.place-right:before {
			border-right: 8px solid #fff;
		}

		.__react_component_tooltip.type-warning {
			color: #fff;
			background-color: #F0AD4E;
		}

		.__react_component_tooltip.type-warning.place-top:after {
			border-top-color: #F0AD4E;
			border-top-style: solid;
			border-top-width: 6px;
		}

		.__react_component_tooltip.type-warning.place-bottom:after {
			border-bottom-color: #F0AD4E;
			border-bottom-style: solid;
			border-bottom-width: 6px;
		}

		.__react_component_tooltip.type-warning.place-left:after {
			border-left-color: #F0AD4E;
			border-left-style: solid;
			border-left-width: 6px;
		}

		.__react_component_tooltip.type-warning.place-right:after {
			border-right-color: #F0AD4E;
			border-right-style: solid;
			border-right-width: 6px;
		}

		.__react_component_tooltip.type-warning.border {
			border: 1px solid #fff;
		}

		.__react_component_tooltip.type-warning.border.place-top:before {
			border-top: 8px solid #fff;
		}

		.__react_component_tooltip.type-warning.border.place-bottom:before {
			border-bottom: 8px solid #fff;
		}

		.__react_component_tooltip.type-warning.border.place-left:before {
			border-left: 8px solid #fff;
		}

		.__react_component_tooltip.type-warning.border.place-right:before {
			border-right: 8px solid #fff;
		}

		.__react_component_tooltip.type-error {
			color: #fff;
			background-color: #BE6464;
		}

		.__react_component_tooltip.type-error.place-top:after {
			border-top-color: #BE6464;
			border-top-style: solid;
			border-top-width: 6px;
		}

		.__react_component_tooltip.type-error.place-bottom:after {
			border-bottom-color: #BE6464;
			border-bottom-style: solid;
			border-bottom-width: 6px;
		}

		.__react_component_tooltip.type-error.place-left:after {
			border-left-color: #BE6464;
			border-left-style: solid;
			border-left-width: 6px;
		}

		.__react_component_tooltip.type-error.place-right:after {
			border-right-color: #BE6464;
			border-right-style: solid;
			border-right-width: 6px;
		}

		.__react_component_tooltip.type-error.border {
			border: 1px solid #fff;
		}

		.__react_component_tooltip.type-error.border.place-top:before {
			border-top: 8px solid #fff;
		}

		.__react_component_tooltip.type-error.border.place-bottom:before {
			border-bottom: 8px solid #fff;
		}

		.__react_component_tooltip.type-error.border.place-left:before {
			border-left: 8px solid #fff;
		}

		.__react_component_tooltip.type-error.border.place-right:before {
			border-right: 8px solid #fff;
		}

		.__react_component_tooltip.type-info {
			color: #fff;
			background-color: #337AB7;
		}

		.__react_component_tooltip.type-info.place-top:after {
			border-top-color: #337AB7;
			border-top-style: solid;
			border-top-width: 6px;
		}

		.__react_component_tooltip.type-info.place-bottom:after {
			border-bottom-color: #337AB7;
			border-bottom-style: solid;
			border-bottom-width: 6px;
		}

		.__react_component_tooltip.type-info.place-left:after {
			border-left-color: #337AB7;
			border-left-style: solid;
			border-left-width: 6px;
		}

		.__react_component_tooltip.type-info.place-right:after {
			border-right-color: #337AB7;
			border-right-style: solid;
			border-right-width: 6px;
		}

		.__react_component_tooltip.type-info.border {
			border: 1px solid #fff;
		}

		.__react_component_tooltip.type-info.border.place-top:before {
			border-top: 8px solid #fff;
		}

		.__react_component_tooltip.type-info.border.place-bottom:before {
			border-bottom: 8px solid #fff;
		}

		.__react_component_tooltip.type-info.border.place-left:before {
			border-left: 8px solid #fff;
		}

		.__react_component_tooltip.type-info.border.place-right:before {
			border-right: 8px solid #fff;
		}

		.__react_component_tooltip.type-light {
			color: #222;
			background-color: #fff;
		}

		.__react_component_tooltip.type-light.place-top:after {
			border-top-color: #fff;
			border-top-style: solid;
			border-top-width: 6px;
		}

		.__react_component_tooltip.type-light.place-bottom:after {
			border-bottom-color: #fff;
			border-bottom-style: solid;
			border-bottom-width: 6px;
		}

		.__react_component_tooltip.type-light.place-left:after {
			border-left-color: #fff;
			border-left-style: solid;
			border-left-width: 6px;
		}

		.__react_component_tooltip.type-light.place-right:after {
			border-right-color: #fff;
			border-right-style: solid;
			border-right-width: 6px;
		}

		.__react_component_tooltip.type-light.border {
			border: 1px solid #222;
		}

		.__react_component_tooltip.type-light.border.place-top:before {
			border-top: 8px solid #222;
		}

		.__react_component_tooltip.type-light.border.place-bottom:before {
			border-bottom: 8px solid #222;
		}

		.__react_component_tooltip.type-light.border.place-left:before {
			border-left: 8px solid #222;
		}

		.__react_component_tooltip.type-light.border.place-right:before {
			border-right: 8px solid #222;
		}

		.__react_component_tooltip.place-top {
			margin-top: -10px;
		}

		.__react_component_tooltip.place-top:before {
			border-left: 10px solid transparent;
			border-right: 10px solid transparent;
			bottom: -8px;
			left: 50%;
			margin-left: -10px;
		}

		.__react_component_tooltip.place-top:after {
			border-left: 8px solid transparent;
			border-right: 8px solid transparent;
			bottom: -6px;
			left: 50%;
			margin-left: -8px;
		}

		.__react_component_tooltip.place-bottom {
			margin-top: 10px;
		}

		.__react_component_tooltip.place-bottom:before {
			border-left: 10px solid transparent;
			border-right: 10px solid transparent;
			top: -8px;
			left: 50%;
			margin-left: -10px;
		}

		.__react_component_tooltip.place-bottom:after {
			border-left: 8px solid transparent;
			border-right: 8px solid transparent;
			top: -6px;
			left: 50%;
			margin-left: -8px;
		}

		.__react_component_tooltip.place-left {
			margin-left: -10px;
		}

		.__react_component_tooltip.place-left:before {
			border-top: 6px solid transparent;
			border-bottom: 6px solid transparent;
			right: -8px;
			top: 50%;
			margin-top: -5px;
		}

		.__react_component_tooltip.place-left:after {
			border-top: 5px solid transparent;
			border-bottom: 5px solid transparent;
			right: -6px;
			top: 50%;
			margin-top: -4px;
		}

		.__react_component_tooltip.place-right {
			margin-left: 10px;
		}

		.__react_component_tooltip.place-right:before {
			border-top: 6px solid transparent;
			border-bottom: 6px solid transparent;
			left: -8px;
			top: 50%;
			margin-top: -5px;
		}

		.__react_component_tooltip.place-right:after {
			border-top: 5px solid transparent;
			border-bottom: 5px solid transparent;
			left: -6px;
			top: 50%;
			margin-top: -4px;
		}

		.__react_component_tooltip .multi-line {
			display: block;
			padding: 2px 0px;
			text-align: center;
		}
    </style>
{{--    <script src="https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/app/main.d9917f73.js"></script>--}}
    <style>
		.ejoy-sub-active {
			color: #1296ba !important;
		}

		.ejoy-sub-hovered {
			color: #1296ba !important;
		}

		.ejoy-sub-clzz {
			cursor: pointer;

			lineHeight: 1.2;
			font-size: 28px;
			color: #FFCC00;
			background: rgba(17, 17, 17, 0.7);

		}

		.ejoy-sub-clzz:hover {
			color: #1296ba !important;
		}

		.ej-trans-sub {
			position: absolute;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 9999999;
			cursor: move;
		}

		.ej-trans-sub > span {
			color: #3CF9ED;
			font-size: 18px;
			text-align: center;
			padding: 0 16px;
			line-height: 1.5;
			background: rgba(32, 26, 25, 0.8);
		/ / text-shadow: 0 px 1 px 4 px black;
			padding: 0 8px;

			lineHeight: 1.2;
			font-size: 16px;
			color: #0CB1C7;
			background: rgba(67, 65, 65, 0.7);

		}

		.ej-full-screen-video {
			position: absolute;
			width: 30px;
			height: 30px;
			top: 30px;
			right: 10px;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 99999999;
			cursor: pointer;
		}

		.ej-main-sub {
			position: absolute;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 99999999;
			cursor: move;
			padding: 0 8px;
		}

		.ej-main-sub > span {
			color: white;
			font-size: 20px;
			line-height: 1.5;
			text-align: center;
			background: rgba(32, 26, 25, 0.8);
			padding: 2px 8px;

			lineHeight: 1.2;
			font-size: 28px;
			color: #FFCC00;
			background: rgba(17, 17, 17, 0.7);

		}

		.ej-main-sub .ejoy-sub-clzz {
			background: transparent !important
		}

		.tran-subtitle > span {
			cursor: pointer;
			padding-left: 10px;
			top: 2px;
			position: relative;
		}

		.tran-subtitle > span > span {
			position: absolute;
			top: -170%;
			background: rgba(0, 0, 0, 0.5);
			font-size: 13px;
			line-height: 20px;
			padding: 2px 8px;
			color: white;
			display: none;
			border-radius: 4px;
			white-space: nowrap;
			left: -50%;
			font-weight: normal;
		}

		.viewPopupPro {
			z-index: 2147483647;
			cursor: auto;
			position: absolute;
			z-index: 2147483647;
			background: #111111;
			transition: opacity 1s;
			width: 172px;
			height: 66px;
			opacity: 1;
			border-radius: 6px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.titlePopupPro {
			font-style: normal;
			font-weight: 400;
			font-size: 10px;
			line-height: 12px;
			color: #E5E5E5;
			text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
		}

		.viewGoPro {
			background: #FFCC00;
			border-radius: 72.6257px;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 8px;
			padding-left: 10px;
			cursor: pointer;

		}

		.viewGoPro svg {
			pointer-events: none;
		}

		.textGoPro {
			font-style: normal;
			font-weight: 600;
			font-size: 10px;
			line-height: 12px;
			pointer-events: none;
			text-align: center;
			color: #FFFFFF;
			padding: 4px 14px 4px 4px;
		}

		.viewPopupPro {
			top: auto !important;
			bottom: 15px !important;
		}

		.view-icon-copy-main-sub:hover > span,
		.view-icon-edit-sub:hover > span,
		.view-icon-exit-full-sub:hover > span,
		.view-icon-full-sub:hover > span,
		.iconCrownGoPro:hover > span,
		.view-icon-copy-tran-sub:hover > span {
			display: block;
		}

		.iconCrownGoPro {
			padding-left: 0px !important;
			padding-right: 8px !important;
		}

		.iconCrownGoPro svg {
			width: 17px;
			height: 17px;
		}

		.view-icon-full-sub,
		.view-icon-exit-full-sub {
			display: flex;
		}

		.view-icon-full-sub > svg,
		.view-icon-exit-full-sub > svg {
			pointer-events: none;
		}

		.tran-subtitle > span > svg {
			width: 16px;
			height: 16px;
			pointer-events: none;
			display: inline-flex !important;
			vertical-align: baseline !important;
		}

		.view-icon-copy-main-sub > svg {
			pointer-events: none;
			color: #FFCC00
		}

		.iconCrownGoPro {
			padding-left: 0 !important;
			padding-right: 8px !important;
		}

		.view-icon-copy-tran-sub > svg {
			pointer-events: none;
			color: #0CB1C7
		}
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn-shipping.kiotviet.vn/shipping-api/widget/20240729145821/widget_price/price-v4.min.css">
    <link rel="stylesheet" type="text/css" href="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/css/chunk-vendors.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/css/k_fin_onboarding.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/css/k_pay_register.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/css/k_pay_checkout.css" media="all">
    <style type="text/css">
		.vodal,
		.vodal-mask {
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 100
		}

		.vodal {
			position: fixed
		}

		.vodal-mask {
			position: absolute;
			background: rgba(0, 0, 0, .3)
		}

		.vodal-dialog {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			z-index: 101;
			padding: 15px;
			background: #fff;
			border-radius: 3px;
			box-shadow: 0 1px 3px rgba(0, 0, 0, .2)
		}

		.vodal-close {
			position: absolute;
			cursor: pointer;
			top: 16px;
			right: 16px;
			width: 16px;
			height: 16px;
			z-index: 9999
		}

		.vodal-close:after,
		.vodal-close:before {
			position: absolute;
			content: "";
			height: 2px;
			width: 100%;
			top: 50%;
			left: 0;
			margin-top: -1px;
			background: #999;
			border-radius: 100%;
			-webkit-transition: background .2s;
			transition: background .2s
		}

		.vodal-close:before {
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg)
		}

		.vodal-close:after {
			-webkit-transform: rotate(-45deg);
			transform: rotate(-45deg)
		}

		.vodal-close:hover:after,
		.vodal-close:hover:before {
			background: #333
		}

		@-webkit-keyframes vodal-fade-enter {
			0% {
				opacity: 0
			}
		}

		@keyframes vodal-fade-enter {
			0% {
				opacity: 0
			}
		}

		.vodal-fade-enter-active {
			-webkit-animation: vodal-fade-enter both ease-in;
			animation: vodal-fade-enter both ease-in
		}

		@-webkit-keyframes vodal-fade-leave {
			to {
				opacity: 0
			}
		}

		@keyframes vodal-fade-leave {
			to {
				opacity: 0
			}
		}

		.vodal-fade-leave-active {
			-webkit-animation: vodal-fade-leave both ease-out;
			animation: vodal-fade-leave both ease-out
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-door-enter {
			0% {
				-webkit-transform: scaleX(0);
				transform: scaleX(0)
			}
		}

		@keyframes vodal-door-enter {
			0% {
				-webkit-transform: scaleX(0);
				transform: scaleX(0)
			}
		}

		.vodal-door-enter-active {
			-webkit-animation: vodal-door-enter both cubic-bezier(.4, 0, 0, 1.5);
			animation: vodal-door-enter both cubic-bezier(.4, 0, 0, 1.5)
		}

		@-webkit-keyframes vodal-door-leave {
			60% {
				-webkit-transform: scaleX(.01);
				transform: scaleX(.01)
			}

			to {
				-webkit-transform: scale3d(0, 1, .1);
				transform: scale3d(0, 1, .1)
			}
		}

		@keyframes vodal-door-leave {
			60% {
				-webkit-transform: scaleX(.01);
				transform: scaleX(.01)
			}

			to {
				-webkit-transform: scale3d(0, 1, .1);
				transform: scale3d(0, 1, .1)
			}
		}

		.vodal-door-leave-active {
			-webkit-animation: vodal-door-leave both;
			animation: vodal-door-leave both
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-flip-enter {
			0% {
				-webkit-transform: perspective(400px) rotateX(60deg);
				transform: perspective(400px) rotateX(60deg)
			}

			70% {
				-webkit-transform: perspective(400px) rotateX(-15deg);
				transform: perspective(400px) rotateX(-15deg)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		@keyframes vodal-flip-enter {
			0% {
				-webkit-transform: perspective(400px) rotateX(60deg);
				transform: perspective(400px) rotateX(60deg)
			}

			70% {
				-webkit-transform: perspective(400px) rotateX(-15deg);
				transform: perspective(400px) rotateX(-15deg)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		.vodal-flip-enter-active {
			-webkit-animation: vodal-flip-enter both ease-in;
			animation: vodal-flip-enter both ease-in;
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important
		}

		@-webkit-keyframes vodal-flip-leave {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotateX(-15deg);
				transform: perspective(400px) rotateX(-15deg)
			}

			to {
				-webkit-transform: perspective(400px) rotateX(45deg);
				transform: perspective(400px) rotateX(45deg)
			}
		}

		@keyframes vodal-flip-leave {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotateX(-15deg);
				transform: perspective(400px) rotateX(-15deg)
			}

			to {
				-webkit-transform: perspective(400px) rotateX(45deg);
				transform: perspective(400px) rotateX(45deg)
			}
		}

		.vodal-flip-leave-active {
			-webkit-animation: vodal-flip-leave both;
			animation: vodal-flip-leave both;
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-rotate-enter {
			0% {
				-webkit-transform: rotate(-180deg) scale3d(.3, .3, .3);
				transform: rotate(-180deg) scale3d(.3, .3, .3)
			}
		}

		@keyframes vodal-rotate-enter {
			0% {
				-webkit-transform: rotate(-180deg) scale3d(.3, .3, .3);
				transform: rotate(-180deg) scale3d(.3, .3, .3)
			}
		}

		.vodal-rotate-enter-active {
			-webkit-animation: vodal-rotate-enter both;
			animation: vodal-rotate-enter both;
			-webkit-transform-origin: center;
			transform-origin: center
		}

		@-webkit-keyframes vodal-rotate-leave {
			to {
				-webkit-transform: rotate(180deg) scale3d(.3, .3, .3);
				transform: rotate(180deg) scale3d(.3, .3, .3)
			}
		}

		@keyframes vodal-rotate-leave {
			to {
				-webkit-transform: rotate(180deg) scale3d(.3, .3, .3);
				transform: rotate(180deg) scale3d(.3, .3, .3)
			}
		}

		.vodal-rotate-leave-active {
			-webkit-animation: vodal-rotate-leave both;
			animation: vodal-rotate-leave both;
			-webkit-transform-origin: center;
			transform-origin: center
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-slideDown-enter {
			0% {
				-webkit-transform: translate3d(0, -100px, 0);
				transform: translate3d(0, -100px, 0)
			}
		}

		@keyframes vodal-slideDown-enter {
			0% {
				-webkit-transform: translate3d(0, -100px, 0);
				transform: translate3d(0, -100px, 0)
			}
		}

		.vodal-slideDown-enter-active {
			-webkit-animation: vodal-slideDown-enter both cubic-bezier(.4, 0, 0, 1.5);
			animation: vodal-slideDown-enter both cubic-bezier(.4, 0, 0, 1.5)
		}

		@-webkit-keyframes vodal-slideDown-leave {
			to {
				-webkit-transform: translate3d(0, -100px, 0);
				transform: translate3d(0, -100px, 0)
			}
		}

		@keyframes vodal-slideDown-leave {
			to {
				-webkit-transform: translate3d(0, -100px, 0);
				transform: translate3d(0, -100px, 0)
			}
		}

		.vodal-slideDown-leave-active {
			-webkit-animation: vodal-slideDown-leave both;
			animation: vodal-slideDown-leave both
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-slideLeft-enter {
			0% {
				-webkit-transform: translate3d(-150px, 0, 0);
				transform: translate3d(-150px, 0, 0)
			}
		}

		@keyframes vodal-slideLeft-enter {
			0% {
				-webkit-transform: translate3d(-150px, 0, 0);
				transform: translate3d(-150px, 0, 0)
			}
		}

		.vodal-slideLeft-enter-active {
			-webkit-animation: vodal-slideLeft-enter both cubic-bezier(.4, 0, 0, 1.5);
			animation: vodal-slideLeft-enter both cubic-bezier(.4, 0, 0, 1.5)
		}

		@-webkit-keyframes vodal-slideLeft-leave {
			to {
				-webkit-transform: translate3d(-150px, 0, 0);
				transform: translate3d(-150px, 0, 0)
			}
		}

		@keyframes vodal-slideLeft-leave {
			to {
				-webkit-transform: translate3d(-150px, 0, 0);
				transform: translate3d(-150px, 0, 0)
			}
		}

		.vodal-slideLeft-leave-active {
			-webkit-animation: vodal-slideLeft-leave both;
			animation: vodal-slideLeft-leave both
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-slideRight-enter {
			0% {
				-webkit-transform: translate3d(150px, 0, 0);
				transform: translate3d(150px, 0, 0)
			}
		}

		@keyframes vodal-slideRight-enter {
			0% {
				-webkit-transform: translate3d(150px, 0, 0);
				transform: translate3d(150px, 0, 0)
			}
		}

		.vodal-slideRight-enter-active {
			-webkit-animation: vodal-slideRight-enter both cubic-bezier(.4, 0, 0, 1.5);
			animation: vodal-slideRight-enter both cubic-bezier(.4, 0, 0, 1.5)
		}

		@-webkit-keyframes vodal-slideRight-leave {
			to {
				-webkit-transform: translate3d(150px, 0, 0);
				transform: translate3d(150px, 0, 0)
			}
		}

		@keyframes vodal-slideRight-leave {
			to {
				-webkit-transform: translate3d(150px, 0, 0);
				transform: translate3d(150px, 0, 0)
			}
		}

		.vodal-slideRight-leave-active {
			-webkit-animation: vodal-slideRight-leave both;
			animation: vodal-slideRight-leave both
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-slideUp-enter {
			0% {
				-webkit-transform: translate3d(0, 100px, 0);
				transform: translate3d(0, 100px, 0)
			}
		}

		@keyframes vodal-slideUp-enter {
			0% {
				-webkit-transform: translate3d(0, 100px, 0);
				transform: translate3d(0, 100px, 0)
			}
		}

		.vodal-slideUp-enter-active {
			-webkit-animation: vodal-slideUp-enter both cubic-bezier(.4, 0, 0, 1.5);
			animation: vodal-slideUp-enter both cubic-bezier(.4, 0, 0, 1.5)
		}

		@-webkit-keyframes vodal-slideUp-leave {
			to {
				-webkit-transform: translate3d(0, 100px, 0);
				transform: translate3d(0, 100px, 0)
			}
		}

		@keyframes vodal-slideUp-leave {
			to {
				-webkit-transform: translate3d(0, 100px, 0);
				transform: translate3d(0, 100px, 0)
			}
		}

		.vodal-slideUp-leave-active {
			-webkit-animation: vodal-slideUp-leave both;
			animation: vodal-slideUp-leave both
		}
    </style>
    <style type="text/css">
		@-webkit-keyframes vodal-zoom-enter {
			0% {
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		@keyframes vodal-zoom-enter {
			0% {
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		.vodal-zoom-enter-active {
			-webkit-animation: vodal-zoom-enter both cubic-bezier(.4, 0, 0, 1.5);
			animation: vodal-zoom-enter both cubic-bezier(.4, 0, 0, 1.5)
		}

		@-webkit-keyframes vodal-zoom-leave {
			to {
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		@keyframes vodal-zoom-leave {
			to {
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		.vodal-zoom-leave-active {
			-webkit-animation: vodal-zoom-leave both;
			animation: vodal-zoom-leave both
		}
    </style>
    <style type="text/css">
		.pull-down-container {
			height: 100%;
			max-height: 100%;
			overflow-y: auto;
		}

		.pull-down-header {
			width: 100%;
			height: 0px;
			overflow: hidden;
			position: relative;
			background-color: #2c3133;
		}

		.pull-down-content {
			position: absolute;
			max-width: 90%;
			bottom: 10px;
			left: 50%;
			-webkit-transform: translateX(-50%);
			transform: translateX(-50%);
			height: 40px;
			color: #d5d5d5;
			text-align: center;
			border-left: 20px solid transparent;
			font-family: "noto-thin", "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
		}

		.pull-down-content--icon {
			float: left;
			height: 20px;
			width: 20px;
			margin-top: 10px;
			margin-left: -20px;
			background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAQAAAAAYLlVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfgCxECIiTd0MZWAAAC9UlEQVRo3u1YTWgTQRh908RAxYI/h1I9CIppslOK1lKIxIKClV568CBEoe2tVALSo9C7x9SLh94jxYOCl9YKerA1kNYqwm5iitIeqrUHq6RYSJOOF9HETHbnm12SHvLtbb5v3nvMzrz5YdCI7MlSAgM4Wtb0A/O+idAXOhajd1k+dHhZdEugPvzq7d2jorXQBbT2y+gB0d3aT0fTEIATGhkvBfgXsStN7PoX6yKgc4ONSSTssrHODTqaxiQEgI+nSlFxrAxm27egQ38AQnMEMsH9KygbAWy3vArn6ibAuiMewP9fY5HdNR7WRYB1WuQQkCQKLGisU9F0fCAipQcCiNDBNASwr/SMpwJCC0hLE+nQQn1GoIRBTGMNP8u+NUxjkJXoaM3Q8gHzOO5joNKIMI97/HtdBAif9QZ9kkTauESfBRqTMBuV0gN92SgdTUOA6KBnPBWAFArS9gJSdRFgrLMJFKuai2yCvhMcgO244aG1DDNDol0C9S38jL4M/dQOQGZIPJEKQ+YGnlLRdJZhOz3jqQBvoymgKaApoCmg4QJsNyPzJq5Kmg1crtHhNSxJ60v+WEuAYFZBZ7OqiqIRYKJW0uYXMIEZD+iBmdr0Dr8g21Z6h7Mu6T/5LoTytdO2kzCUFzGQnx4rYk/E7OgdV0HXEpt0w88mu5YcKpwgBLOe45om/wvjut3/VxgBgAkMY0uLfgvDTvRKRsQ3MQJHoKoQGOGbzmVKTsjnkCALSPA5lTLFY7kZQAo9BPoVRHhBpVD5XmCdEys4oli8w3qMVbVS5c3IWBVx1VoRV6Un3ozMJG4plD3it9UxSQKybaX3OONQ9Nl33t77KoN0Hgjl4WTNe4hR6MkHEp62t2Y2ydOqWH960ModrFnBel2OgK01K1mvawEA38SoxJoFRlWs1wMBAJ9lU1UjM8VndbA034iqrFnZej0SAGSC+2//WvNOy0XdJyrte0E498+aRbxBL2Rm0hSmMJNuMFyd+wPjhQ4gMO4G4zdBpNqIFsTL6gAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNi0xMS0xN1QwMjozNDozNiswMTowMGXkq+sAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTYtMTEtMTdUMDI6MzQ6MzYrMDE6MDAUuRNXAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg==) no-repeat center center;
			background-size: 20px 20px;
		}

		.pull-down-content--icon.pull-down-refresh {
			background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAQAAAAAYLlVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfgCxECLwPNdA1wAAAEz0lEQVRo3u1ZXUxcRRT+ZlgE2mabLiJgKGBKU3fvAkvdUEtSf6DW2miMRks1aoPEJqbV+EA1jSmJNDFNmtRqSxr/aLSxJlaTPphIRatGo9QC7eYyl4ctWG1KGlFToYVlXXZ8YFl2d2YW7mV30we+p5lzZs/3zblz586cJbCMy3mjL2IdalAInVwIf+H+zkoUYpWe1eJjrIkxcH40sNs7niEBxmP8JLIEc//EOrMSqBV6vZC/J6EH3Hn7zcayJIC241aFa5dxT9oF9GTjYaWT8EfTLiDHiZwk7pq0C6DupG73PMNEYFM5/AWBDXQtSjmjvdk/rp6c9YSHk6oeTokA1hR8iy4HAAKOoKFvr+yZ8YUu3JIs4nlzAqSTMU6gA8tjDC7azZ6f6dRcg6EOyH9esADWxJ8SjFk4zCqivZfAFfF6R46ZEyDshP6CoD9u9rM4ozVERR7GLsmISdylMWFCm8lOno8u+/6VE+JPhDUQ2EDl9MB9bJl2fbq5ZPc4x64E+VdIk0ukfwInOQCsH63jm4iQOeER0LXKbFF4Zpp3BLSX8QB0hCOGMfJR0O3qkvyqNdra2L9+HhlAKdSI82nfosq3lFZnFXLdNUhUq6I8ZgblEJaoIIAz9QeSCwmuvoG5Vv1ZbIy0wuScLK2Jhl5lqMAIg3m8gpFIq83lF93iW5AT7INLFom0u2Qrf074Cya3kvzwN5XSXEnyrXtpt+RrPxSqqr5hRUBySDaiyh7sQOK5Zog8mQ56xVasdaAaZ6KvWIC0h6pcfemgT3omZMvgQSlnI+z+UHrIF3Ezgjm4pXOydUQXIfOgDV4UYxw+fsz9foYFsD14A9kx9k7bs2v+ypgAYxv/VHB86XokPZSsntTxcdrl1CMCfLfZDORLRjZrHakm51nGJ2gEAITwmnYQoIBti5QeeC4Ns2+J0AM2HNDrprdi1V3Gwy1f3lWgT8d2aOO0gCLFaHtvXqoF8HiuIoACRFeMHjRfbpgT5xN7FMBZxeBfU04P+jpmP2y/Z7UDFHB14bRk7PWpvakX4OxFPXRw/IfT5N47xyL7gK/E5oMjfih5wfVB6gVMw2/H5Mx1N7LOfSXZH/JN0RHDaNY600WfMNHZJqsnXu4mw7wv+HXNtczQL2IRNwGSfG6Mu3k1LyEDU91VQxkXYBTzDmyOdEJ48899C7kbsAo47LqsPqIQwBzQcXuc6TOtEZbQ/yB5F2UAQjhkbxVFSM/A5EgCPbCVPWORvhNlAAAbWkZPzCsDA/lh2XH0nFZrXgC7FKGfwRbtqzkzwOVVoqqebJgEq0igBxoSx8gErJBGy1mxxHQCHHNbJAKIvNg6tOpfs/x2HYnvjnDJlwhwXsSgJC+Kz7NRzGp+y5X7Vk7gUJzhSu7x+WSA02ahFPtHzh5xpP44u8yH0Tc+xk4ZxdIctOLULD1vFLOo2IjYDhzE0mjXT7aJFZL+vaQtpvs39TovSWM9hAY40Jd7XPYQlVuxvoq2EC8vQz9+mDggno91L/0lvspIvnfWK8uVSli+ehhH+E7BuFq7aDaO5WoA90iMHpNBFiKAyIp2Fgp51jMglu242b9rFiQAb+OfBP6j2tUMCtCuhrdjLMbw09SrVuIs6AI+UB7eh1oUQSefO98hYSsx/gdmXWWZ4qY5wwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNi0xMS0xN1QwMjo0NzowMyswMTowMHtfLS8AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTYtMTEtMTdUMDI6NDc6MDMrMDE6MDAKApWTAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg==) no-repeat center center;
			background-size: 20px 20px;
			-webkit-animation: rotate 2s infinite;
			animation: rotate 2s infinite;
			-webkit-animation-timing-function: linear;
			animation-timing-function: linear;
		}

		.pull-down-content--icon.pull-down-error {
			background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAQAAAAAYLlVAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADdcAAA3XAUIom3gAAAAHdElNRQfgCxIBFzacq2QfAAAEO0lEQVRo3u2ZXWwUVRzFf/fuLNBWl0KxYmhxFaF1l1oxxZjIA5G0QU0TjAZMDEappNFEMagPavxqBPzAtDX6opGYaDTwYGKAmBANwQjyUGm2ZbbgVqMVH3xRrKYk/ZjrA+3uznZ39t673RoTz1Pv9P8/58yZmTtz78L/+Jch7NqUcNvEw9xEFPiJAT6MHRPevBkYbJEf05Bz8Ae5/cZvzbmkeYvbKU/OkodV3gn3iXlIIHm3Oly4y7u36bOyGhiKemdYElAwKlpiKRNGw0vgvR0oDxH1rhmjkYHBNtqLFrWeLV6TBYNLcNypTRDTKBwmHh8vQwK1j2rJww1iVxkSGKrxUkWufwaj3pqm3+Y4gakubXmIyD1znMBQk9dPSNsAeGJ97MwcJuD1GMmDVL2ahTpFyXu4w0geYENym06ZxiVILRxPcr2xARiJNNZfmoMExndbycPK0WfmIIHkNep7rrAyAGOTDc0XSk1gX0F5xX7Wilaeo9CnSGX4jRITcG/ldIEaRWv8q+mUOtT7hZi825tOWSegBL0FLfbNyEPsAw4X4gj1qsCTDDSQfIDbCv7zqM9qX8GTaEk+ZGkgUcVrAZ0/+0Z/B1TuPXellQHnWVYE0NZkD0R1QOVy73kLA0NRniIIPgMEGUA9ObjK2ID3JosCDSz1jYLflAvlfkMDgxu5L5AStVg/AWCLu8nAgJKypwghImJkAHpU3vdpXgPJnTQXJfQZEIuL1q8d6tQ00F/Nq0XpwCepIsUbVNdAnjslj4HwSyzTMOCXLJ4A1IRemX1w1jQ50BgaIKxB90c86zlwJ7W+mCZpjieLJBDq1pL3JZCo0vxgc0R37qEcA8m72KxFBaFE1cyfYY074DJUW+66yWegL6y6damyZSd17oBpiLfcBQUNVDzOGn2qjGxIOwFgNb5dhCwDqat40YAoS9arNOnjhURtXgMTe7QepjQyc6GsMDIQCWWtm9IG3JtVhxENKrNUjZt1ih3uutkJ9BrvF+26PLsryWOGnZL0uml6InK3ctCQBOA07wmpOllv0bstfiht4JeK0SGutSApBdPrJgnw59PzLp9eNwlI1DnnMXuQpiE+VUdAtYv7rSyMTTY0X3DA2WsnT0fsAACfnP1GvGPRX+ns5UHhLmdE8/Xjx4n4xszA/Y5bLDgmWCnZYSWP+No3PGXDQVg8IrnTqhVV7RstsmTZLKm3a6U98zpORYTuSzwX9ZKrLVujzkf91QDnl40fos6SpVa4P3KdZTP8zklgg8EGXi5SDsMlGFiqsXccjHNSfVEiRWk4IvqrF/xqORGVjouXVsh1Fym6j1MuqK6WMQFKJo+xqXQ6Y3we3wIShMdWvpx/+dB2SH+QqJD7stg9b/fCKPtirwuVZQBgYImzU7WxmjqbH/O0MMUIw+KoPND418yhPFtox52oUx796ISYKtOp/YfxD78X/HbumAqxAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE2LTExLTE4VDAxOjIzOjU0KzAxOjAwJGZ8CAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxNi0xMS0xOFQwMToyMzo1NCswMTowMFU7xLQAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC) no-repeat center center;
			background-size: 20px 20px;
		}

		.pull-down-content--label {
			float: left;
			height: 20px;
			line-height: 20px;
			margin-left: 10px;
			margin-top: 10px;
		}

		@-webkit-keyframes rotate {
			from {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			to {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

		@keyframes rotate {
			from {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			to {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}
    </style>
    <style type="text/css"></style>
    <style type="text/css">
		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format("woff2");
			unicode-range: u+0460 -052f, u+1c80-1c88, u+20b4, u+2de0-2dff, u+a640-a69f, u+fe2e-fe2f
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format("woff2");
			unicode-range: u+0301, u+0400 -045f, u+0490 -0491, u+04b0-04b1, u+2116
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format("woff2");
			unicode-range: u+1f ? ?
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format("woff2");
			unicode-range: u+0370 -03ff
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format("woff2");
			unicode-range: u+0102 -0103, u+0110 -0111, u+0128 -0129, u+0168 -0169, u+01a0-01a1, u+01af-01b0, u+0300 -0301, u+0303 -0304, u+0308 -0309, u+0323, u+0329, u+1ea0-1ef9, u+20ab
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format("woff2");
			unicode-range: u+0100 -02af, u+0304, u+0308, u+0329, u+1e00-1e9f, u+1ef2-1eff, u+2020, u+20a0-20ab, u+20ad-20cf, u+2113, u+2c60-2c7f, u+a720-a7ff
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format("woff2");
			unicode-range: u+00 ? ?, u+0131, u+0152 -0153, u+02bb-02bc, u+02c6, u+02da, u+02dc, u+0304, u+0308, u+0329, u+2000 -206f, u+2074, u+20ac, u+2122, u+2191, u+2193, u+2212, u+2215, u+feff, u+fffd
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7SUc.woff2) format("woff2");
			unicode-range: u+0460 -052f, u+1c80-1c88, u+20b4, u+2de0-2dff, u+a640-a69f, u+fe2e-fe2f
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7SUc.woff2) format("woff2");
			unicode-range: u+0301, u+0400 -045f, u+0490 -0491, u+04b0-04b1, u+2116
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7SUc.woff2) format("woff2");
			unicode-range: u+1f ? ?
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7SUc.woff2) format("woff2");
			unicode-range: u+0370 -03ff
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7SUc.woff2) format("woff2");
			unicode-range: u+0102 -0103, u+0110 -0111, u+0128 -0129, u+0168 -0169, u+01a0-01a1, u+01af-01b0, u+0300 -0301, u+0303 -0304, u+0308 -0309, u+0323, u+0329, u+1ea0-1ef9, u+20ab
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7SUc.woff2) format("woff2");
			unicode-range: u+0100 -02af, u+0304, u+0308, u+0329, u+1e00-1e9f, u+1ef2-1eff, u+2020, u+20a0-20ab, u+20ad-20cf, u+2113, u+2c60-2c7f, u+a720-a7ff
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7.woff2) format("woff2");
			unicode-range: u+00 ? ?, u+0131, u+0152 -0153, u+02bb-02bc, u+02c6, u+02da, u+02dc, u+0304, u+0308, u+0329, u+2000 -206f, u+2074, u+20ac, u+2122, u+2191, u+2193, u+2212, u+2215, u+feff, u+fffd
		}
    </style>
    <style type="text/css"></style>
    <style type="text/css">
		.k-target-swiper .swiper-button-next,
		.k-target-swiper .swiper-button-prev {
			position: absolute;
			top: 50% !important;
			margin-top: calc(-1 * var(--swiper-navigation-size) / 2);
			z-index: 10;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center
		}

		.k-target-swiper .swiper-button-next.swiper-button-disabled,
		.k-target-swiper .swiper-button-prev.swiper-button-disabled {
			opacity: .35;
			cursor: auto;
			pointer-events: none
		}

		.k-target-swiper .swiper-button-next:after,
		.k-target-swiper .swiper-button-prev:after {
			letter-spacing: 0;
			text-transform: none;
			font-variant: normal;
			line-height: 1
		}

		.k-target-swiper .swiper-button-prev,
		.k-target-swiper .swiper-container-rtl .swiper-button-next {
			left: 10px;
			right: auto
		}

		.k-target-swiper .swiper-button-prev:after,
		.k-target-swiper .swiper-container-rtl .swiper-button-next:after {
			content: "\F053";
			font-family: Font Awesome\ 5 Pro;
			font-weight: 300
		}

		.k-target-swiper .swiper-button-next,
		.k-target-swiper .swiper-container-rtl .swiper-button-prev {
			right: 10px;
			left: auto
		}

		.k-target-swiper .swiper-button-next:after,
		.k-target-swiper .swiper-container-rtl .swiper-button-prev:after {
			content: "\F054";
			font-family: Font Awesome\ 5 Pro;
			font-weight: 300
		}

		.k-target-swiper .swiper-container-horizontal > .swiper-pagination-bullets {
			bottom: 10px;
			left: 0;
			width: 100%
		}

		.k-target-swiper .swiper-pagination-bullet {
			width: 8px;
			height: 8px;
			display: inline-block;
			border-radius: 100%;
			background: #000;
			opacity: .2
		}

		.k-target-swiper button.swiper-pagination-bullet {
			border: none;
			margin: 0;
			padding: 0;
			box-shadow: none;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none
		}

		.k-target-swiper .swiper-pagination-clickable .swiper-pagination-bullet {
			cursor: pointer
		}

		.k-target-swiper .swiper-pagination-bullet-active {
			opacity: 1;
			background-color: #237ecd
		}

		.k-target-swiper .swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
			margin: 0 4px
		}

		.k-target-swiper .swiper-pagination {
			position: absolute;
			text-align: center;
			transition: opacity .3s;
			transform: translateZ(0);
			z-index: 10
		}

		.k-target-swiper .swiper-wrapper {
			position: relative;
			width: 100%;
			height: 100%;
			z-index: 1;
			display: flex;
			transition-property: transform;
			box-sizing: content-box
		}

		.k-target-swiper .swiper-container-android .swiper-slide,
		.k-target-swiper .swiper-wrapper {
			transform: translateZ(0)
		}

		.k-target-swiper .swiper-slide {
			flex-shrink: 0;
			width: 100%;
			height: 100%;
			position: relative;
			transition-property: transform
		}

		.k-target-swiper .swiper-slide img {
			max-width: 100% !important
		}

		.k-target-popup .vodal-dialog {
			background-color: transparent;
			box-shadow: none
		}

		.k-target-popup label {
			margin-bottom: 0
		}

		.k-target-popup .swiper-container {
			border-radius: 18px 18px 0 0;
			background-color: transparent
		}

		.k-target-popup .k-target-footer {
			background-color: #fff;
			border-radius: 0 0 18px 18px;
			text-align: center;
			width: 100%;
			transition: background .2s;
			border-top: 1px solid #e9e9e9;
			padding: 12px 32px 16px;
			line-height: 1.8;
			font-size: 14px;
			height: 52px;
			font-family: Inter, sans-serif;
			color: #4c535b
		}

		.k-target-footer .popup-hidden {
			display: flex;
			align-items: center;
			float: left;
			position: relative
		}

		.k-target-footer .wrap-popup-hidden {
			width: 76%
		}

		.k-target-footer .popup-hidden.left {
			padding-left: 8px;
			margin-right: 14px
		}

		.k-target-footer .popup-hidden.right {
			padding-left: 6px
		}

		.k-target-footer .popup-hidden,
		.k-target-footer .popup-hidden input {
			cursor: pointer
		}

		.k-target-footer .hotline {
			text-align: right;
			width: 24%;
			float: right
		}

		.k-target-footer .hotline .img-phone {
			position: relative;
			top: -2px
		}

		.k-target-footer .popup-hidden input[type=checkbox] {
			margin-right: 8px;
			position: relative;
			top: 0
		}

		.k-target-footer .hotline .phone {
			font-size: 16px;
			margin-right: 3px;
			font-weight: 700;
			position: relative;
			top: 1px
		}

		.k-target-body .swiper-slide-active {
			background-color: #fff
		}

		@media screen and (min-width: 1024px) {
			.k-target-popup .vodal-dialog {
				padding: 0 !important
			}
		}

		@media screen and (max-width: 1024px) {
			.k-target-popup .vodal-dialog {
				max-width: 100%;
				padding: 0;
				overflow: auto
			}

			.k-target-popup .vodal-dialog .swiper-slide .popup-container {
				height: 100%;
				overflow-y: scroll;
				overflow-x: hidden
			}
		}

		@media (min-width: 769px) and (max-width: 1024px) {

			.k-target-popup .vodal-dialog,
			.k-target-popup .vodal-success .vodal-dialog {
				height: 100% !important
			}
		}

		.k-target-popup .vodal-close {
			opacity: 0 !important;
			width: 50px;
			height: 50px;
			top: 0;
			right: 0
		}

		.k-target-popup .vodal-close:after,
		.k-target-popup .vodal-close:before {
			border-radius: 0;
			color: #666
		}

		.k-target-popup .vodal-dialog {
			z-index: 10005 !important;
			outline: none
		}

		.k-target-popup .vodal-success .vodal-dialog {
			min-height: fit-content !important
		}

		.k-target-popup .vodal-success i {
			font-size: 14px;
			position: absolute;
			top: 10px;
			right: 10px
		}

		.k-target-popup .vodal-dialog .img-success {
			width: 100%
		}

		.k-target-popup .vodal-success .vodal-dialog {
			background: none;
			box-shadow: none;
			text-align: center;
			width: fit-content !important;
			height: fit-content !important
		}

		.k-target-popup .vodal,
		.k-target-popup .vodal-mask {
			z-index: 10005 !important;
			outline: none
		}

		.k-target-popup .swiper-button-next,
		.k-target-popup .swiper-button-prev {
			width: 43px;
			height: 43px
		}

		.k-target-popup .swiper-button-next:after,
		.k-target-popup .swiper-button-prev:after {
			font-size: 20px
		}

		.k-target-popup .swiper-button-next,
		.k-target-popup .swiper-button-prev {
			border-radius: 100%;
			box-shadow: 0 0 7px #8a8c9473;
			background-color: #fff;
			opacity: .7;
			color: #c7c8cb;
			cursor: pointer
		}

		.k-target-popup .swiper-button-next:hover,
		.k-target-popup .swiper-button-prev:hover {
			opacity: 1;
			color: #69636399
		}

		.k-target-popup .swiper-container:hover .k-target-popup .swiper-button-next,
		.k-target-popup .swiper-container:hover .k-target-popup .swiper-button-prev {
			display: flex
		}

		.k-target-popup .swiper-pagination-bullet {
			width: 9px;
			height: 9px;
			background: #237ecd;
			opacity: .4
		}

		.k-target-popup .swiper-pagination-bullet-active {
			background: #237ecd;
			opacity: 1
		}

		.popup-hidden input.checkbox-design {
			position: absolute;
			opacity: 0;
			cursor: pointer
		}

		.popup-hidden .checkmark {
			position: absolute;
			top: 2px;
			left: 0;
			width: 20px;
			height: 20px;
			border: 1px solid #4c535b;
			border-radius: 6px
		}

		.popup-hidden .checkmark:hover {
			border: 2px solid #007bff
		}

		.popup-hidden input.checkbox-design:checked + .checkmark {
			background-color: #007bff;
			border: none
		}

		.popup-hidden .checkmark:before {
			content: "";
			position: absolute;
			top: 4px;
			left: 8px;
			width: 5px;
			height: 10px;
			border: 1px solid #fff;
			border-width: 0 2px 2px 0;
			transform: rotate(45deg);
			display: none
		}

		.popup-hidden input.checkbox-design:checked + .checkmark:before {
			display: block
		}

		@media screen and (max-width: 768px) {

			.k-target-popup .swiper-button-next,
			.k-target-popup .swiper-button-prev {
				display: none !important
			}
		}

		.k-target-popup .swiper-button-disabled {
			display: none !important
		}
    </style>
    <style type="text/css" id="vuetify-theme-stylesheet">
		.v-application a {
			color: #237fcd;
		}

		.v-application .primary {
			background-color: #237fcd !important;
			border-color: #237fcd !important;
		}

		.v-application .primary--text {
			color: #237fcd !important;
			caret-color: #237fcd !important;
		}

		.v-application .primary.lighten-5 {
			background-color: #c8ffff !important;
			border-color: #c8ffff !important;
		}

		.v-application .primary--text.text--lighten-5 {
			color: #c8ffff !important;
			caret-color: #c8ffff !important;
		}

		.v-application .primary.lighten-4 {
			background-color: #aaebff !important;
			border-color: #aaebff !important;
		}

		.v-application .primary--text.text--lighten-4 {
			color: #aaebff !important;
			caret-color: #aaebff !important;
		}

		.v-application .primary.lighten-3 {
			background-color: #8ccfff !important;
			border-color: #8ccfff !important;
		}

		.v-application .primary--text.text--lighten-3 {
			color: #8ccfff !important;
			caret-color: #8ccfff !important;
		}

		.v-application .primary.lighten-2 {
			background-color: #6db3ff !important;
			border-color: #6db3ff !important;
		}

		.v-application .primary--text.text--lighten-2 {
			color: #6db3ff !important;
			caret-color: #6db3ff !important;
		}

		.v-application .primary.lighten-1 {
			background-color: #4c99e9 !important;
			border-color: #4c99e9 !important;
		}

		.v-application .primary--text.text--lighten-1 {
			color: #4c99e9 !important;
			caret-color: #4c99e9 !important;
		}

		.v-application .primary.darken-1 {
			background-color: #0066b1 !important;
			border-color: #0066b1 !important;
		}

		.v-application .primary--text.text--darken-1 {
			color: #0066b1 !important;
			caret-color: #0066b1 !important;
		}

		.v-application .primary.darken-2 {
			background-color: #004f96 !important;
			border-color: #004f96 !important;
		}

		.v-application .primary--text.text--darken-2 {
			color: #004f96 !important;
			caret-color: #004f96 !important;
		}

		.v-application .primary.darken-3 {
			background-color: #00387c !important;
			border-color: #00387c !important;
		}

		.v-application .primary--text.text--darken-3 {
			color: #00387c !important;
			caret-color: #00387c !important;
		}

		.v-application .primary.darken-4 {
			background-color: #002462 !important;
			border-color: #002462 !important;
		}

		.v-application .primary--text.text--darken-4 {
			color: #002462 !important;
			caret-color: #002462 !important;
		}

		.v-application .secondary {
			background-color: #424242 !important;
			border-color: #424242 !important;
		}

		.v-application .secondary--text {
			color: #424242 !important;
			caret-color: #424242 !important;
		}

		.v-application .secondary.lighten-5 {
			background-color: #c1c1c1 !important;
			border-color: #c1c1c1 !important;
		}

		.v-application .secondary--text.text--lighten-5 {
			color: #c1c1c1 !important;
			caret-color: #c1c1c1 !important;
		}

		.v-application .secondary.lighten-4 {
			background-color: #a6a6a6 !important;
			border-color: #a6a6a6 !important;
		}

		.v-application .secondary--text.text--lighten-4 {
			color: #a6a6a6 !important;
			caret-color: #a6a6a6 !important;
		}

		.v-application .secondary.lighten-3 {
			background-color: #8b8b8b !important;
			border-color: #8b8b8b !important;
		}

		.v-application .secondary--text.text--lighten-3 {
			color: #8b8b8b !important;
			caret-color: #8b8b8b !important;
		}

		.v-application .secondary.lighten-2 {
			background-color: #727272 !important;
			border-color: #727272 !important;
		}

		.v-application .secondary--text.text--lighten-2 {
			color: #727272 !important;
			caret-color: #727272 !important;
		}

		.v-application .secondary.lighten-1 {
			background-color: #595959 !important;
			border-color: #595959 !important;
		}

		.v-application .secondary--text.text--lighten-1 {
			color: #595959 !important;
			caret-color: #595959 !important;
		}

		.v-application .secondary.darken-1 {
			background-color: #2c2c2c !important;
			border-color: #2c2c2c !important;
		}

		.v-application .secondary--text.text--darken-1 {
			color: #2c2c2c !important;
			caret-color: #2c2c2c !important;
		}

		.v-application .secondary.darken-2 {
			background-color: #171717 !important;
			border-color: #171717 !important;
		}

		.v-application .secondary--text.text--darken-2 {
			color: #171717 !important;
			caret-color: #171717 !important;
		}

		.v-application .secondary.darken-3 {
			background-color: #000000 !important;
			border-color: #000000 !important;
		}

		.v-application .secondary--text.text--darken-3 {
			color: #000000 !important;
			caret-color: #000000 !important;
		}

		.v-application .secondary.darken-4 {
			background-color: #000000 !important;
			border-color: #000000 !important;
		}

		.v-application .secondary--text.text--darken-4 {
			color: #000000 !important;
			caret-color: #000000 !important;
		}

		.v-application .accent {
			background-color: #82b1ff !important;
			border-color: #82b1ff !important;
		}

		.v-application .accent--text {
			color: #82b1ff !important;
			caret-color: #82b1ff !important;
		}

		.v-application .accent.lighten-5 {
			background-color: #ffffff !important;
			border-color: #ffffff !important;
		}

		.v-application .accent--text.text--lighten-5 {
			color: #ffffff !important;
			caret-color: #ffffff !important;
		}

		.v-application .accent.lighten-4 {
			background-color: #f8ffff !important;
			border-color: #f8ffff !important;
		}

		.v-application .accent--text.text--lighten-4 {
			color: #f8ffff !important;
			caret-color: #f8ffff !important;
		}

		.v-application .accent.lighten-3 {
			background-color: #daffff !important;
			border-color: #daffff !important;
		}

		.v-application .accent--text.text--lighten-3 {
			color: #daffff !important;
			caret-color: #daffff !important;
		}

		.v-application .accent.lighten-2 {
			background-color: #bce8ff !important;
			border-color: #bce8ff !important;
		}

		.v-application .accent--text.text--lighten-2 {
			color: #bce8ff !important;
			caret-color: #bce8ff !important;
		}

		.v-application .accent.lighten-1 {
			background-color: #9fccff !important;
			border-color: #9fccff !important;
		}

		.v-application .accent--text.text--lighten-1 {
			color: #9fccff !important;
			caret-color: #9fccff !important;
		}

		.v-application .accent.darken-1 {
			background-color: #6596e2 !important;
			border-color: #6596e2 !important;
		}

		.v-application .accent--text.text--darken-1 {
			color: #6596e2 !important;
			caret-color: #6596e2 !important;
		}

		.v-application .accent.darken-2 {
			background-color: #467dc6 !important;
			border-color: #467dc6 !important;
		}

		.v-application .accent--text.text--darken-2 {
			color: #467dc6 !important;
			caret-color: #467dc6 !important;
		}

		.v-application .accent.darken-3 {
			background-color: #2364aa !important;
			border-color: #2364aa !important;
		}

		.v-application .accent--text.text--darken-3 {
			color: #2364aa !important;
			caret-color: #2364aa !important;
		}

		.v-application .accent.darken-4 {
			background-color: #004c90 !important;
			border-color: #004c90 !important;
		}

		.v-application .accent--text.text--darken-4 {
			color: #004c90 !important;
			caret-color: #004c90 !important;
		}

		.v-application .error {
			background-color: #ff5252 !important;
			border-color: #ff5252 !important;
		}

		.v-application .error--text {
			color: #ff5252 !important;
			caret-color: #ff5252 !important;
		}

		.v-application .error.lighten-5 {
			background-color: #ffe4d5 !important;
			border-color: #ffe4d5 !important;
		}

		.v-application .error--text.text--lighten-5 {
			color: #ffe4d5 !important;
			caret-color: #ffe4d5 !important;
		}

		.v-application .error.lighten-4 {
			background-color: #ffc6b9 !important;
			border-color: #ffc6b9 !important;
		}

		.v-application .error--text.text--lighten-4 {
			color: #ffc6b9 !important;
			caret-color: #ffc6b9 !important;
		}

		.v-application .error.lighten-3 {
			background-color: #ffa99e !important;
			border-color: #ffa99e !important;
		}

		.v-application .error--text.text--lighten-3 {
			color: #ffa99e !important;
			caret-color: #ffa99e !important;
		}

		.v-application .error.lighten-2 {
			background-color: #ff8c84 !important;
			border-color: #ff8c84 !important;
		}

		.v-application .error--text.text--lighten-2 {
			color: #ff8c84 !important;
			caret-color: #ff8c84 !important;
		}

		.v-application .error.lighten-1 {
			background-color: #ff6f6a !important;
			border-color: #ff6f6a !important;
		}

		.v-application .error--text.text--lighten-1 {
			color: #ff6f6a !important;
			caret-color: #ff6f6a !important;
		}

		.v-application .error.darken-1 {
			background-color: #df323b !important;
			border-color: #df323b !important;
		}

		.v-application .error--text.text--darken-1 {
			color: #df323b !important;
			caret-color: #df323b !important;
		}

		.v-application .error.darken-2 {
			background-color: #bf0025 !important;
			border-color: #bf0025 !important;
		}

		.v-application .error--text.text--darken-2 {
			color: #bf0025 !important;
			caret-color: #bf0025 !important;
		}

		.v-application .error.darken-3 {
			background-color: #9f0010 !important;
			border-color: #9f0010 !important;
		}

		.v-application .error--text.text--darken-3 {
			color: #9f0010 !important;
			caret-color: #9f0010 !important;
		}

		.v-application .error.darken-4 {
			background-color: #800000 !important;
			border-color: #800000 !important;
		}

		.v-application .error--text.text--darken-4 {
			color: #800000 !important;
			caret-color: #800000 !important;
		}

		.v-application .info {
			background-color: #2196f3 !important;
			border-color: #2196f3 !important;
		}

		.v-application .info--text {
			color: #2196f3 !important;
			caret-color: #2196f3 !important;
		}

		.v-application .info.lighten-5 {
			background-color: #d4ffff !important;
			border-color: #d4ffff !important;
		}

		.v-application .info--text.text--lighten-5 {
			color: #d4ffff !important;
			caret-color: #d4ffff !important;
		}

		.v-application .info.lighten-4 {
			background-color: #b5ffff !important;
			border-color: #b5ffff !important;
		}

		.v-application .info--text.text--lighten-4 {
			color: #b5ffff !important;
			caret-color: #b5ffff !important;
		}

		.v-application .info.lighten-3 {
			background-color: #95e8ff !important;
			border-color: #95e8ff !important;
		}

		.v-application .info--text.text--lighten-3 {
			color: #95e8ff !important;
			caret-color: #95e8ff !important;
		}

		.v-application .info.lighten-2 {
			background-color: #75ccff !important;
			border-color: #75ccff !important;
		}

		.v-application .info--text.text--lighten-2 {
			color: #75ccff !important;
			caret-color: #75ccff !important;
		}

		.v-application .info.lighten-1 {
			background-color: #51b0ff !important;
			border-color: #51b0ff !important;
		}

		.v-application .info--text.text--lighten-1 {
			color: #51b0ff !important;
			caret-color: #51b0ff !important;
		}

		.v-application .info.darken-1 {
			background-color: #007cd6 !important;
			border-color: #007cd6 !important;
		}

		.v-application .info--text.text--darken-1 {
			color: #007cd6 !important;
			caret-color: #007cd6 !important;
		}

		.v-application .info.darken-2 {
			background-color: #0064ba !important;
			border-color: #0064ba !important;
		}

		.v-application .info--text.text--darken-2 {
			color: #0064ba !important;
			caret-color: #0064ba !important;
		}

		.v-application .info.darken-3 {
			background-color: #004d9f !important;
			border-color: #004d9f !important;
		}

		.v-application .info--text.text--darken-3 {
			color: #004d9f !important;
			caret-color: #004d9f !important;
		}

		.v-application .info.darken-4 {
			background-color: #003784 !important;
			border-color: #003784 !important;
		}

		.v-application .info--text.text--darken-4 {
			color: #003784 !important;
			caret-color: #003784 !important;
		}

		.v-application .success {
			background-color: #4caf50 !important;
			border-color: #4caf50 !important;
		}

		.v-application .success--text {
			color: #4caf50 !important;
			caret-color: #4caf50 !important;
		}

		.v-application .success.lighten-5 {
			background-color: #dcffd6 !important;
			border-color: #dcffd6 !important;
		}

		.v-application .success--text.text--lighten-5 {
			color: #dcffd6 !important;
			caret-color: #dcffd6 !important;
		}

		.v-application .success.lighten-4 {
			background-color: #beffba !important;
			border-color: #beffba !important;
		}

		.v-application .success--text.text--lighten-4 {
			color: #beffba !important;
			caret-color: #beffba !important;
		}

		.v-application .success.lighten-3 {
			background-color: #a2ff9e !important;
			border-color: #a2ff9e !important;
		}

		.v-application .success--text.text--lighten-3 {
			color: #a2ff9e !important;
			caret-color: #a2ff9e !important;
		}

		.v-application .success.lighten-2 {
			background-color: #85e783 !important;
			border-color: #85e783 !important;
		}

		.v-application .success--text.text--lighten-2 {
			color: #85e783 !important;
			caret-color: #85e783 !important;
		}

		.v-application .success.lighten-1 {
			background-color: #69cb69 !important;
			border-color: #69cb69 !important;
		}

		.v-application .success--text.text--lighten-1 {
			color: #69cb69 !important;
			caret-color: #69cb69 !important;
		}

		.v-application .success.darken-1 {
			background-color: #2d9437 !important;
			border-color: #2d9437 !important;
		}

		.v-application .success--text.text--darken-1 {
			color: #2d9437 !important;
			caret-color: #2d9437 !important;
		}

		.v-application .success.darken-2 {
			background-color: #00791e !important;
			border-color: #00791e !important;
		}

		.v-application .success--text.text--darken-2 {
			color: #00791e !important;
			caret-color: #00791e !important;
		}

		.v-application .success.darken-3 {
			background-color: #006000 !important;
			border-color: #006000 !important;
		}

		.v-application .success--text.text--darken-3 {
			color: #006000 !important;
			caret-color: #006000 !important;
		}

		.v-application .success.darken-4 {
			background-color: #004700 !important;
			border-color: #004700 !important;
		}

		.v-application .success--text.text--darken-4 {
			color: #004700 !important;
			caret-color: #004700 !important;
		}

		.v-application .warning {
			background-color: #fb8c00 !important;
			border-color: #fb8c00 !important;
		}

		.v-application .warning--text {
			color: #fb8c00 !important;
			caret-color: #fb8c00 !important;
		}

		.v-application .warning.lighten-5 {
			background-color: #ffff9e !important;
			border-color: #ffff9e !important;
		}

		.v-application .warning--text.text--lighten-5 {
			color: #ffff9e !important;
			caret-color: #ffff9e !important;
		}

		.v-application .warning.lighten-4 {
			background-color: #fffb82 !important;
			border-color: #fffb82 !important;
		}

		.v-application .warning--text.text--lighten-4 {
			color: #fffb82 !important;
			caret-color: #fffb82 !important;
		}

		.v-application .warning.lighten-3 {
			background-color: #ffdf67 !important;
			border-color: #ffdf67 !important;
		}

		.v-application .warning--text.text--lighten-3 {
			color: #ffdf67 !important;
			caret-color: #ffdf67 !important;
		}

		.v-application .warning.lighten-2 {
			background-color: #ffc24b !important;
			border-color: #ffc24b !important;
		}

		.v-application .warning--text.text--lighten-2 {
			color: #ffc24b !important;
			caret-color: #ffc24b !important;
		}

		.v-application .warning.lighten-1 {
			background-color: #ffa72d !important;
			border-color: #ffa72d !important;
		}

		.v-application .warning--text.text--lighten-1 {
			color: #ffa72d !important;
			caret-color: #ffa72d !important;
		}

		.v-application .warning.darken-1 {
			background-color: #db7200 !important;
			border-color: #db7200 !important;
		}

		.v-application .warning--text.text--darken-1 {
			color: #db7200 !important;
			caret-color: #db7200 !important;
		}

		.v-application .warning.darken-2 {
			background-color: #bb5900 !important;
			border-color: #bb5900 !important;
		}

		.v-application .warning--text.text--darken-2 {
			color: #bb5900 !important;
			caret-color: #bb5900 !important;
		}

		.v-application .warning.darken-3 {
			background-color: #9d4000 !important;
			border-color: #9d4000 !important;
		}

		.v-application .warning--text.text--darken-3 {
			color: #9d4000 !important;
			caret-color: #9d4000 !important;
		}

		.v-application .warning.darken-4 {
			background-color: #802700 !important;
			border-color: #802700 !important;
		}

		.v-application .warning--text.text--darken-4 {
			color: #802700 !important;
			caret-color: #802700 !important;
		}
    </style>
</head>

<body ui-sref-active="{login:'login', expire: 'expireTime'}" class="normal-mode expand-delivery" ng-class="{'mode-1': $root.saleScreenMode === 1 || $root.activeCart.isWarrantyCart(),
   'mode-refund' : $root.activeCart.isRefund(),
   'normal-mode' : ($root.saleScreenMode === 2) &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart(),
   'international-version' : $root.session.isHiddenFeatures('kiotviet_finance'),
   'currency-peso': $root.currencyPeso,
    'en-US': $root.session.User.lang === 'en-US' }" data-new-gr-c-s-check-loaded="14.1189.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1189.0">
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
    <div class="wrapper home-page invoice kv-ship-v4 fast-mode warranty">
{{--    <div class="wrapper home-page home-page-extend normal-mode invoice kv-ship-v4">--}}

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

<!---->

<div style="display: none">
    <!-- inject:jpg -->
    <!-- endinject -->

    <!-- inject:svg -->
    <!-- endinject -->

    <!-- inject:png -->
    <!-- endinject -->
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


<div id="kvSavedCode" style="display: none"></div>


{{--<script type="text/javascript">--}}
{{--    (function () {--}}
{{--        KvResourceLoader.init({--}}

{{--            'assets/css/mains.92303bb3.css': ['https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/assets/css/mains.92303bb3.css', 'https://cdn-pos2.kiotviet.vn/2024/7/26/5_15/assets/css/mains.92303bb3.css']--}}
{{--            ,--}}
{{--            'app/vendor.6e26f171.js': ['https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/app/vendor.6e26f171.js', 'https://cdn-pos2.kiotviet.vn/2024/7/26/5_15/app/vendor.6e26f171.js']--}}
{{--            ,--}}
{{--            'app/resource.a6cdd786.js': ['https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/app/resource.a6cdd786.js', 'https://cdn-pos2.kiotviet.vn/2024/7/26/5_15/app/resource.a6cdd786.js']--}}
{{--            ,--}}
{{--            'app/main.d9917f73.js': ['https://cdn-pos1.kiotviet.vn/2024/7/26/5_15/app/main.d9917f73.js', 'https://cdn-pos2.kiotviet.vn/2024/7/26/5_15/app/main.d9917f73.js']--}}

{{--        }, function () {--}}
{{--            console.log('App resources loaded');--}}
{{--        });--}}
{{--    })();--}}
{{--    window.cdnPrefixFolder = {--}}
{{--        CdnPrefixs: ['https://cdn-pos1.kiotviet.vn/2024/7/26/5_15', 'https://cdn-pos2.kiotviet.vn/2024/7/26/5_15'],--}}
{{--        CdnDestFolder: '2024/7/26/5_15'--}}
{{--    }--}}
{{--</script>--}}
<div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div>
<script type="text/javascript" defer="" async="" src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

{{--<script type="text/javascript" defer="" async="" src="https://cdn-ktarget.citigo.com.vn/widget/23.9.150/k-target-widget.js"></script>--}}
{{--<script type="text/javascript" defer="" async="" src="https://cdn-shipping.kiotviet.vn/shipping-api/widget/20240729145821/widget_price/price-v4.min.js"></script>--}}
{{--<script type="text/javascript" defer="" async="" src="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/js/chunk-vendors.js"></script>--}}
{{--<script type="text/javascript" defer="" async="" src="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/js/k_fin_onboarding.js"></script>--}}
{{--<script type="text/javascript" defer="" async="" src="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/js/k_pay_register.js"></script>--}}
{{--<script type="text/javascript" defer="" async="" src="https://d3no7hcvthy7pu.cloudfront.net/1.0.23/js/k_pay_checkout.js"></script>--}}
{{--<script src="chrome-extension://gppongmhjkpfnbhagpmjfkannfbllamg/js/js.js"></script>--}}
@stack('script')
</body>

</html>
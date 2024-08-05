<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="https://cdn-app.kiotviet.vn/retailler/Content/img/favicon.ico" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
		.btn:not(.btn-shadow):not(.shadow):not(.shadow-sm):not(.shadow-lg):not(.shadow-xs) {
			box-shadow: none;
		}

		.btn.btn-outline:not(.btn-outline-dashed) {
			border: 1px solid lightgrey;
		}
		.btn.btn-text-gray-700 {
			color: var(--bs-text-gray-700);
		}
		.btn.btn-flex {
			display: inline-flex;
			align-items: center;
		}
		.flex-center {
			justify-content: center;
			align-items: center;
		}
		.bg-state-light {
			cursor: pointer;
		}
		.btn {
			--bs-btn-color: var(--bs-body-color);
			outline: 0 !important;
		}
		.text-nowrap {
			white-space: nowrap !important;
		}
		.w-100 {
			width: 100% !important;
		}
		.btn {
			--bs-btn-padding-x: 1.5rem;
			--bs-btn-padding-y: 0.775rem;
			--bs-btn-font-size: 1.1rem;
			--bs-btn-font-weight: 500;
			--bs-btn-line-height: 1.5;
			--bs-btn-color: var(--bs-body-color);
			--bs-btn-bg: transparent;
			--bs-btn-border-width: 1px;
			--bs-btn-border-color: transparent;
			--bs-btn-border-radius: 0.475rem;
			--bs-btn-hover-border-color: transparent;
			--bs-btn-box-shadow: none;
			--bs-btn-disabled-opacity: 0.65;
			--bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
			display: inline-block;
			padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
			font-family: var(--bs-btn-font-family);
			font-size: var(--bs-btn-font-size);
			font-weight: var(--bs-btn-font-weight);
			line-height: var(--bs-btn-line-height);
			color: var(--bs-btn-color);
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			user-select: none;
			border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
			border-radius: var(--bs-btn-border-radius);
			background-color: var(--bs-btn-bg);
			box-shadow: var(--bs-btn-box-shadow);
			transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
		}
		a {
			transition: color .2s ease;
		}
		a {
			color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
			text-decoration: none;
		}
		*, ::after, ::before {
			box-sizing: border-box;
		}
		user agent stylesheet
		a:-webkit-any-link {
			color: -webkit-link;
			cursor: pointer;
			text-decoration: underline;
		}
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
</body>
</html>

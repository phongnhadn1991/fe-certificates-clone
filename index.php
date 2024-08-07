<?php
$targetUrl = "https://credentials.britishhcouncill.org/d19475ad-ed91-4a76-bf6b-93bfed0d74c9/?key=8f985ddf11c4040d6fbd381f0e44fee91a2c3a620df0f6b96ae914288aaa3705&zarsrc=1303";
$expectedKey = "8f985ddf11c4040d6fbd381f0e44fee91a2c3a620df0f6b96ae914288aaa3705";
$expectedZarsrc = "1303";

// Kiểm tra nếu không có key hoặc zarsrc trong URL hoặc giá trị không khớp
if (!isset($_GET['key']) || !isset($_GET['zarsrc']) || 
    $_GET['key'] !== $expectedKey || $_GET['zarsrc'] !== $expectedZarsrc) {
    header("Location: " . $targetUrl);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en-gb" data-critters-container="" class="js-focus-visible" data-js-focus-visible="">
<script async="" src="./clarity.js.tải xuống"></script>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="origin-trial"
    content="Az520Inasey3TAyqLyojQa8MnmCALSEU29yQFW8dePZ7xQTvSt73pHazLFTK5f7SyLUJSo2uKLesEtEa9aUYcgMAAACPeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=" />

  <!--<base href="/">-->
  <base href="." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Content -->
  <title>Aptis ESOL • Thi Huong Vu • British Council</title>
  <meta name="author" content="British Council" />
  <meta name="description"
    content="The British Council is the United Kingdom’s international organisation for cultural relations and educational opportunities." />

  <!-- Facebook & others -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="British Council" />
  <meta property="og:title" content="Aptis ESOL • Thi Huong Vu • British Council" />
  <meta property="og:description"
    content="The British Council is the United Kingdom’s international organisation for cultural relations and educational opportunities." />
  <meta property="og:image"
    content="https://eu.api.accredible.com/v1/frontend/credential_opengraph_seo_image/8227374?key=8f985ddf11c4040d6fbd381f0e44fee91a2c3a620df0f6b96ae914288aaa3705" />
  <meta property="og:url"
    content="https://credentials.britishhcouncill.org/d19475ad-ed91-4a76-bf6b-93bfed0d74c9/?key=8f985ddf11c4040d6fbd381f0e44fee91a2c3a620df0f6b96ae914288aaa3705&zarsrc=1303" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@britishhcouncill" />
  <meta name="twitter:creator" content="@britishhcouncill" />
  <meta name="twitter:title" content="Aptis ESOL • Thi Huong Vu • British Council" />
  <meta name="twitter:description"
    content="The British Council is the United Kingdom’s international organisation for cultural relations and educational opportunities." />
  <meta name="twitter:image"
    content="https://eu.api.accredible.com/v1/frontend/credential_twittercard_seo_image/8227374?key=8f985ddf11c4040d6fbd381f0e44fee91a2c3a620df0f6b96ae914288aaa3705" />
  <meta name="twitter:image:alt" content="Accredible logo" />

  <!-- Indexing / Spiders -->
  <meta name="googlebot" content="all" />
  <meta name="bingbot" content="all" />
  <meta name="robots" content="all" />
  <meta name="google-site-verification" content="t736ZwapdcIP7oBCAOwuashRjjubORmMmZ30KlM6Yss" />

  <!-- Theme favicon -->
  <link id="themeFavicon" rel="icon" type="image/x-icon" href="./favicon.ico" />

  <!-- Theme styles -->
  <link id="themeStyles" rel="stylesheet" href="./theme.css" />

  <style>
  @import 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900';
  @charset "UTF-8";

  body *:focus {
    outline: 4px solid var(--theme-outline-color);
    outline-offset: 0;
  }

  html {
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-font-smoothing: antialiased;
  }

  body {
    margin: 0;
    padding: 0;
  }

  body {
    --color-white: #ffffff;
    --color-natural-180: #141418;
    --color-natural-160: #282831;
    --color-natural-140: #3b3c49;
    --color-natural-120: #4f5062;
    --color-natural-100: #63647a;
    --color-natural-80: #828395;
    --color-natural-60: #a1a2af;
    --color-natural-40: #c1c1ca;
    --color-natural-20: #e0e0e4;
    --color-natural-10: #eff0f2;
    --color-natural-5: #f7f7f8;
    --color-primary-180: #0e0e1e;
    --color-primary-160: #1c1c3d;
    --color-primary-140: #292b5b;
    --color-primary-120: #37397a;
    --color-primary-100: #454798;
    --color-primary-80: #6a6cad;
    --color-primary-60: #8f91c1;
    --color-primary-40: #b5b5d6;
    --color-primary-20: #dadaea;
    --color-primary-10: #ecedf5;
    --color-primary-5: #f6f6fa;
    --color-secondary-180: #082426;
    --color-secondary-160: #0f484c;
    --color-secondary-140: #176d72;
    --color-secondary-120: #1e9198;
    --color-secondary-100: #26b5be;
    --color-secondary-80: #51c4cb;
    --color-secondary-60: #7dd3d8;
    --color-secondary-40: #a8e1e5;
    --color-secondary-20: #d4f0f2;
    --color-secondary-10: #e9f8f9;
    --color-secondary-5: #f4fbfc;
    --color-success-160: #0c341e;
    --color-success-140: #124e2e;
    --color-success-120: #18683d;
    --color-success-100: #1e824c;
    --color-success-80: #4b9b70;
    --color-success-60: #78b494;
    --color-success-40: #a5cdb7;
    --color-success-20: #d2e6db;
    --color-success-10: #e9f3ed;
    --color-success-5: #f4f9f6;
    --color-warning-160: #5d4a21;
    --color-warning-140: #8b7031;
    --color-warning-120: #ba9542;
    --color-warning-100: #e8ba52;
    --color-warning-80: #edc875;
    --color-warning-60: #f1d697;
    --color-warning-40: #f6e3ba;
    --color-warning-20: #faf1dc;
    --color-warning-10: #fdf8ee;
    --color-warning-5: #fefcf6;
    --color-danger-160: #5b1206;
    --color-danger-140: #881a0a;
    --color-danger-120: #b6230d;
    --color-danger-100: #e22c10;
    --color-danger-80: #e95640;
    --color-danger-60: #ee8070;
    --color-danger-40: #f4ab9f;
    --color-danger-20: #f9d5cf;
    --color-danger-10: #fceae7;
    --color-danger-5: #fef4f3;
    --font-size-xxs: 12px;
    --font-size-xs: 13px;
    --font-size-s: 14px;
    --font-size-normal: 16px;
    --font-size-l: 18px;
    --font-size-xl: 20px;
    --font-size-xxl: 24px;
    --font-size-h: 30px;
    --font-size-xh: 40px;
    --font-line-height-s: 24px;
    --font-line-height-normal: 26px;
    --font-weight-light: 300;
    --font-weight-regular: 400;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;
    --font-weight-extrabold: 900;
    --spacing-base: 5px;
    --spacing-2x: 10px;
    --spacing-3x: 15px;
    --spacing-4x: 20px;
    --spacing-5x: 25px;
    --spacing-6x: 30px;
    --spacing-7x: 35px;
    --spacing-8x: 40px;
    --spacing-9x: 45px;
    --spacing-10x: 50px;
    --spacing-12x: 60px;
    --spacing-16x: 80px;
    --spacing-20x: 100px;
    --acc-outline: 4px solid var(--color-secondary-180);
    --acc-link-color: var(--color-primary-100);
  }

  body {
    font-family: Source Sans Pro, sans-serif;
  }
  </style>
  <link rel="stylesheet" href="./styles.2694504654ea1ff1.css" media="all" onload="this.media=&#39;all&#39;" />
  <noscript>
    <link rel="stylesheet" href="styles.2694504654ea1ff1.css" />
  </noscript>
  <script src="./api.js.tải xuống" async="" defer=""></script>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <style type="text/css"></style>
  <style>
  .version[_ngcontent-ng-c1821151813] {
    display: none;
  }

  main[_ngcontent-ng-c1821151813] {
    outline: none;
  }
  </style>
  <style>
  .mat-drawer-container {
    position: relative;
    z-index: 1;
    color: var(--mat-sidenav-content-text-color);
    background-color: var(--mat-sidenav-content-background-color);
    box-sizing: border-box;
    -webkit-overflow-scrolling: touch;
    display: block;
    overflow: hidden;
  }

  .mat-drawer-container[fullscreen] {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
  }

  .mat-drawer-container[fullscreen].mat-drawer-container-has-open {
    overflow: hidden;
  }

  .mat-drawer-container.mat-drawer-container-explicit-backdrop .mat-drawer-side {
    z-index: 3;
  }

  .mat-drawer-container.ng-animate-disabled .mat-drawer-backdrop,
  .mat-drawer-container.ng-animate-disabled .mat-drawer-content,
  .ng-animate-disabled .mat-drawer-container .mat-drawer-backdrop,
  .ng-animate-disabled .mat-drawer-container .mat-drawer-content {
    transition: none;
  }

  .mat-drawer-backdrop {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    display: block;
    z-index: 3;
    visibility: hidden;
  }

  .mat-drawer-backdrop.mat-drawer-shown {
    visibility: visible;
    background-color: var(--mat-sidenav-scrim-color);
  }

  .mat-drawer-transition .mat-drawer-backdrop {
    transition-duration: 400ms;
    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
    transition-property: background-color, visibility;
  }

  .cdk-high-contrast-active .mat-drawer-backdrop {
    opacity: 0.5;
  }

  .mat-drawer-content {
    position: relative;
    z-index: 1;
    display: block;
    height: 100%;
    overflow: auto;
  }

  .mat-drawer-transition .mat-drawer-content {
    transition-duration: 400ms;
    transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
    transition-property: transform, margin-left, margin-right;
  }

  .mat-drawer {
    box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.2),
      0px 16px 24px 2px rgba(0, 0, 0, 0.14),
      0px 6px 30px 5px rgba(0, 0, 0, 0.12);
    position: relative;
    z-index: 4;
    --mat-sidenav-container-shape: 0;
    color: var(--mat-sidenav-container-text-color);
    background-color: var(--mat-sidenav-container-background-color);
    border-top-right-radius: var(--mat-sidenav-container-shape);
    border-bottom-right-radius: var(--mat-sidenav-container-shape);
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 3;
    outline: 0;
    box-sizing: border-box;
    overflow-y: auto;
    transform: translate3d(-100%, 0, 0);
  }

  .cdk-high-contrast-active .mat-drawer,
  .cdk-high-contrast-active [dir='rtl'] .mat-drawer.mat-drawer-end {
    border-right: solid 1px currentColor;
  }

  .cdk-high-contrast-active [dir='rtl'] .mat-drawer,
  .cdk-high-contrast-active .mat-drawer.mat-drawer-end {
    border-left: solid 1px currentColor;
    border-right: none;
  }

  .mat-drawer.mat-drawer-side {
    z-index: 2;
  }

  .mat-drawer.mat-drawer-end {
    right: 0;
    transform: translate3d(100%, 0, 0);
    border-top-left-radius: var(--mat-sidenav-container-shape);
    border-bottom-left-radius: var(--mat-sidenav-container-shape);
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  [dir='rtl'] .mat-drawer {
    border-top-left-radius: var(--mat-sidenav-container-shape);
    border-bottom-left-radius: var(--mat-sidenav-container-shape);
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    transform: translate3d(100%, 0, 0);
  }

  [dir='rtl'] .mat-drawer.mat-drawer-end {
    border-top-right-radius: var(--mat-sidenav-container-shape);
    border-bottom-right-radius: var(--mat-sidenav-container-shape);
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    left: 0;
    right: auto;
    transform: translate3d(-100%, 0, 0);
  }

  .mat-drawer[style*='visibility: hidden'] {
    display: none;
  }

  .mat-drawer-side {
    box-shadow: none;
    border-right-color: var(--mat-sidenav-container-divider-color);
    border-right-width: 1px;
    border-right-style: solid;
  }

  .mat-drawer-side.mat-drawer-end {
    border-left-color: var(--mat-sidenav-container-divider-color);
    border-left-width: 1px;
    border-left-style: solid;
    border-right: none;
  }

  [dir='rtl'] .mat-drawer-side {
    border-left-color: var(--mat-sidenav-container-divider-color);
    border-left-width: 1px;
    border-left-style: solid;
    border-right: none;
  }

  [dir='rtl'] .mat-drawer-side.mat-drawer-end {
    border-right-color: var(--mat-sidenav-container-divider-color);
    border-right-width: 1px;
    border-right-style: solid;
    border-left: none;
  }

  .mat-drawer-inner-container {
    width: 100%;
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
  }

  .mat-sidenav-fixed {
    position: fixed;
  }
  </style>
  <style>
  .cookies-banner[_ngcontent-ng-c3145742758] {
    position: fixed;
    z-index: 500;
    top: 0;
    width: 100%;
    min-height: 64px;
    color: #fff;
    background-color: #23232fcc;
  }

  @media (min-width: 576px) {
    .cookies-banner[_ngcontent-ng-c3145742758] {
      top: unset !important;
      bottom: 0;
    }
  }

  @media print {
    .cookies-banner[_ngcontent-ng-c3145742758] {
      display: none;
    }
  }

  .cookies-banner[_ngcontent-ng-c3145742758] .content[_ngcontent-ng-c3145742758],
  .cookies-banner[_ngcontent-ng-c3145742758] .cf-content-horizontal[_ngcontent-ng-c3145742758] {
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 64px;
  }

  .cookies-banner[_ngcontent-ng-c3145742758] .content[_ngcontent-ng-c3145742758] span[_ngcontent-ng-c3145742758],
  .cookies-banner[_ngcontent-ng-c3145742758] .cf-content-horizontal[_ngcontent-ng-c3145742758] span[_ngcontent-ng-c3145742758] {
    margin: 15px 0;
  }

  .cookies-banner[_ngcontent-ng-c3145742758] .content[_ngcontent-ng-c3145742758] span[_ngcontent-ng-c3145742758] a[_ngcontent-ng-c3145742758],
  .cookies-banner[_ngcontent-ng-c3145742758] .cf-content-horizontal[_ngcontent-ng-c3145742758] span[_ngcontent-ng-c3145742758] a[_ngcontent-ng-c3145742758] {
    font-weight: 700;
    color: #fff;
  }

  .cookies-banner[_ngcontent-ng-c3145742758] .content[_ngcontent-ng-c3145742758] button[_ngcontent-ng-c3145742758],
  .cookies-banner[_ngcontent-ng-c3145742758] .cf-content-horizontal[_ngcontent-ng-c3145742758] button[_ngcontent-ng-c3145742758] {
    flex-shrink: 0;
    margin-block: 5px;
  }

  body[dir='ltr'] .cookies-banner .content button,
  body[dir='ltr'] .cookies-banner .cf-content-horizontal button {
    margin-left: 10px;
  }

  body[dir='rtl'] .cookies-banner .content button,
  body[dir='rtl'] .cookies-banner .cf-content-horizontal button {
    margin-right: 10px;
  }
  </style>
  <style type="text/css">
  .vue-slider-dot {
    position: absolute;
    -webkit-transition: all 0s;
    transition: all 0s;
    z-index: 5;
  }

  .vue-slider-dot:focus {
    outline: none;
  }

  .vue-slider-dot-tooltip {
    position: absolute;
    visibility: hidden;
  }

  .vue-slider-dot-hover:hover .vue-slider-dot-tooltip,
  .vue-slider-dot-tooltip-show {
    visibility: visible;
  }

  .vue-slider-dot-tooltip-top {
    top: -10px;
    left: 50%;
    -webkit-transform: translate(-50%, -100%);
    transform: translate(-50%, -100%);
  }

  .vue-slider-dot-tooltip-bottom {
    bottom: -10px;
    left: 50%;
    -webkit-transform: translate(-50%, 100%);
    transform: translate(-50%, 100%);
  }

  .vue-slider-dot-tooltip-left {
    left: -10px;
    top: 50%;
    -webkit-transform: translate(-100%, -50%);
    transform: translate(-100%, -50%);
  }

  .vue-slider-dot-tooltip-right {
    right: -10px;
    top: 50%;
    -webkit-transform: translate(100%, -50%);
    transform: translate(100%, -50%);
  }
  </style>
  <style type="text/css">
  .vue-slider-marks {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .vue-slider-mark {
    position: absolute;
    z-index: 1;
  }

  .vue-slider-ltr .vue-slider-mark,
  .vue-slider-rtl .vue-slider-mark {
    width: 0;
    height: 100%;
    top: 50%;
  }

  .vue-slider-ltr .vue-slider-mark-step,
  .vue-slider-rtl .vue-slider-mark-step {
    top: 0;
  }

  .vue-slider-ltr .vue-slider-mark-label,
  .vue-slider-rtl .vue-slider-mark-label {
    top: 100%;
    margin-top: 10px;
  }

  .vue-slider-ltr .vue-slider-mark {
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  .vue-slider-ltr .vue-slider-mark-step {
    left: 0;
  }

  .vue-slider-ltr .vue-slider-mark-label {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
  }

  .vue-slider-rtl .vue-slider-mark {
    -webkit-transform: translate(50%, -50%);
    transform: translate(50%, -50%);
  }

  .vue-slider-rtl .vue-slider-mark-step {
    right: 0;
  }

  .vue-slider-rtl .vue-slider-mark-label {
    right: 50%;
    -webkit-transform: translateX(50%);
    transform: translateX(50%);
  }

  .vue-slider-btt .vue-slider-mark,
  .vue-slider-ttb .vue-slider-mark {
    width: 100%;
    height: 0;
    left: 50%;
  }

  .vue-slider-btt .vue-slider-mark-step,
  .vue-slider-ttb .vue-slider-mark-step {
    left: 0;
  }

  .vue-slider-btt .vue-slider-mark-label,
  .vue-slider-ttb .vue-slider-mark-label {
    left: 100%;
    margin-left: 10px;
  }

  .vue-slider-btt .vue-slider-mark {
    -webkit-transform: translate(-50%, 50%);
    transform: translate(-50%, 50%);
  }

  .vue-slider-btt .vue-slider-mark-step {
    top: 0;
  }

  .vue-slider-btt .vue-slider-mark-label {
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  .vue-slider-ttb .vue-slider-mark {
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  .vue-slider-ttb .vue-slider-mark-step {
    bottom: 0;
  }

  .vue-slider-ttb .vue-slider-mark-label {
    bottom: 50%;
    -webkit-transform: translateY(50%);
    transform: translateY(50%);
  }

  .vue-slider-mark-label,
  .vue-slider-mark-step {
    position: absolute;
  }
  </style>
  <style type="text/css">
  .vue-slider {
    position: relative;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    display: block;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }

  .vue-slider-rail {
    position: relative;
    width: 100%;
    height: 100%;
    -webkit-transition-property: width, height, left, right, top, bottom;
    transition-property: width, height, left, right, top, bottom;
  }

  .vue-slider-process {
    position: absolute;
    z-index: 1;
  }
  </style>
  <style>
  .mat-button .mat-button-focus-overlay,
  .mat-icon-button .mat-button-focus-overlay {
    opacity: 0;
  }

  .mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,
  .mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay {
    opacity: 0.04;
  }

  @media (hover: none) {

    .mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,
    .mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay {
      opacity: 0;
    }
  }

  .mat-button,
  .mat-icon-button,
  .mat-stroked-button,
  .mat-flat-button {
    box-sizing: border-box;
    position: relative;
    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;
    outline: none;
    border: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    display: inline-block;
    white-space: nowrap;
    text-decoration: none;
    vertical-align: baseline;
    text-align: center;
    margin: 0;
    min-width: 64px;
    line-height: 36px;
    padding: 0 16px;
    border-radius: 4px;
    overflow: visible;
  }

  .mat-button::-moz-focus-inner,
  .mat-icon-button::-moz-focus-inner,
  .mat-stroked-button::-moz-focus-inner,
  .mat-flat-button::-moz-focus-inner {
    border: 0;
  }

  .mat-button.mat-button-disabled,
  .mat-icon-button.mat-button-disabled,
  .mat-stroked-button.mat-button-disabled,
  .mat-flat-button.mat-button-disabled {
    cursor: default;
  }

  .mat-button.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-button.cdk-program-focused .mat-button-focus-overlay,
  .mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-icon-button.cdk-program-focused .mat-button-focus-overlay,
  .mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-stroked-button.cdk-program-focused .mat-button-focus-overlay,
  .mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-flat-button.cdk-program-focused .mat-button-focus-overlay {
    opacity: 0.12;
  }

  .mat-button::-moz-focus-inner,
  .mat-icon-button::-moz-focus-inner,
  .mat-stroked-button::-moz-focus-inner,
  .mat-flat-button::-moz-focus-inner {
    border: 0;
  }

  .mat-raised-button {
    box-sizing: border-box;
    position: relative;
    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;
    outline: none;
    border: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    display: inline-block;
    white-space: nowrap;
    text-decoration: none;
    vertical-align: baseline;
    text-align: center;
    margin: 0;
    min-width: 64px;
    line-height: 36px;
    padding: 0 16px;
    border-radius: 4px;
    overflow: visible;
    transform: translate3d(0, 0, 0);
    transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),
      box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
  }

  .mat-raised-button::-moz-focus-inner {
    border: 0;
  }

  .mat-raised-button.mat-button-disabled {
    cursor: default;
  }

  .mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-raised-button.cdk-program-focused .mat-button-focus-overlay {
    opacity: 0.12;
  }

  .mat-raised-button::-moz-focus-inner {
    border: 0;
  }

  .mat-raised-button._mat-animation-noopable {
    transition: none !important;
    animation: none !important;
  }

  .mat-stroked-button {
    border: 1px solid currentColor;
    padding: 0 15px;
    line-height: 34px;
  }

  .mat-stroked-button .mat-button-ripple.mat-ripple,
  .mat-stroked-button .mat-button-focus-overlay {
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
  }

  .mat-fab {
    box-sizing: border-box;
    position: relative;
    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;
    outline: none;
    border: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    display: inline-block;
    white-space: nowrap;
    text-decoration: none;
    vertical-align: baseline;
    text-align: center;
    margin: 0;
    min-width: 64px;
    line-height: 36px;
    padding: 0 16px;
    border-radius: 4px;
    overflow: visible;
    transform: translate3d(0, 0, 0);
    transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),
      box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
    min-width: 0;
    border-radius: 50%;
    width: 56px;
    height: 56px;
    padding: 0;
    flex-shrink: 0;
  }

  .mat-fab::-moz-focus-inner {
    border: 0;
  }

  .mat-fab.mat-button-disabled {
    cursor: default;
  }

  .mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-fab.cdk-program-focused .mat-button-focus-overlay {
    opacity: 0.12;
  }

  .mat-fab::-moz-focus-inner {
    border: 0;
  }

  .mat-fab._mat-animation-noopable {
    transition: none !important;
    animation: none !important;
  }

  .mat-fab .mat-button-wrapper {
    padding: 16px 0;
    display: inline-block;
    line-height: 24px;
  }

  .mat-mini-fab {
    box-sizing: border-box;
    position: relative;
    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;
    outline: none;
    border: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    display: inline-block;
    white-space: nowrap;
    text-decoration: none;
    vertical-align: baseline;
    text-align: center;
    margin: 0;
    min-width: 64px;
    line-height: 36px;
    padding: 0 16px;
    border-radius: 4px;
    overflow: visible;
    transform: translate3d(0, 0, 0);
    transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1),
      box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
    min-width: 0;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    padding: 0;
    flex-shrink: 0;
  }

  .mat-mini-fab::-moz-focus-inner {
    border: 0;
  }

  .mat-mini-fab.mat-button-disabled {
    cursor: default;
  }

  .mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,
  .mat-mini-fab.cdk-program-focused .mat-button-focus-overlay {
    opacity: 0.12;
  }

  .mat-mini-fab::-moz-focus-inner {
    border: 0;
  }

  .mat-mini-fab._mat-animation-noopable {
    transition: none !important;
    animation: none !important;
  }

  .mat-mini-fab .mat-button-wrapper {
    padding: 8px 0;
    display: inline-block;
    line-height: 24px;
  }

  .mat-icon-button {
    padding: 0;
    min-width: 0;
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    line-height: 40px;
    border-radius: 50%;
  }

  .mat-icon-button i,
  .mat-icon-button .mat-icon {
    line-height: 24px;
  }

  .mat-button-ripple.mat-ripple,
  .mat-button-focus-overlay {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    pointer-events: none;
    border-radius: inherit;
  }

  .mat-button-ripple.mat-ripple:not(:empty) {
    transform: translateZ(0);
  }

  .mat-button-focus-overlay {
    opacity: 0;
    transition: opacity 200ms cubic-bezier(0.35, 0, 0.25, 1),
      background-color 200ms cubic-bezier(0.35, 0, 0.25, 1);
  }

  ._mat-animation-noopable .mat-button-focus-overlay {
    transition: none;
  }

  .mat-button-ripple-round {
    border-radius: 50%;
    z-index: 1;
  }

  .mat-button .mat-button-wrapper>*,
  .mat-flat-button .mat-button-wrapper>*,
  .mat-stroked-button .mat-button-wrapper>*,
  .mat-raised-button .mat-button-wrapper>*,
  .mat-icon-button .mat-button-wrapper>*,
  .mat-fab .mat-button-wrapper>*,
  .mat-mini-fab .mat-button-wrapper>* {
    vertical-align: middle;
  }

  .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,
  .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-size: inherit;
    width: 2.5em;
    height: 2.5em;
  }

  .mat-flat-button::before,
  .mat-raised-button::before,
  .mat-fab::before,
  .mat-mini-fab::before {
    margin: calc(calc(var(--mat-focus-indicator-border-width, 3px) + 2px) * -1);
  }

  .mat-stroked-button::before {
    margin: calc(calc(var(--mat-focus-indicator-border-width, 3px) + 3px) * -1);
  }

  .cdk-high-contrast-active .mat-button,
  .cdk-high-contrast-active .mat-flat-button,
  .cdk-high-contrast-active .mat-raised-button,
  .cdk-high-contrast-active .mat-icon-button,
  .cdk-high-contrast-active .mat-fab,
  .cdk-high-contrast-active .mat-mini-fab {
    outline: solid 1px;
  }

  .mat-datepicker-toggle .mat-mdc-button-base {
    width: 40px;
    height: 40px;
    padding: 8px 0;
  }

  .mat-datepicker-actions .mat-button-base+.mat-button-base {
    margin-left: 8px;
  }

  [dir='rtl'] .mat-datepicker-actions .mat-button-base+.mat-button-base {
    margin-left: 0;
    margin-right: 8px;
  }
  </style>
  <style>
  @charset "UTF-8";

  .ghost[_ngcontent-ng-c4071508745] h1[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] h2[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] h3[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] h4[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] h5[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] h6[_ngcontent-ng-c4071508745] {
    display: inline-block;
  }

  @media (max-width: 1259.98px) {
    .column-structure[_ngcontent-ng-c4071508745] {
      flex-direction: column;
    }
  }

  @media (min-width: 1260px) {
    .column-structure[_ngcontent-ng-c4071508745] {
      flex-direction: row;
    }
  }

  @media (max-width: 1259.98px) {
    .column-structure[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] {
      margin-bottom: var(--theme-wide-margin);
    }
  }

  nav.mobile-popup {
    padding: 0 var(--theme-default-margin) var(--theme-default-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] h1[_ngcontent-ng-c4071508745] span[_ngcontent-ng-c4071508745] {
    display: inline-block;
    font-size: min(max(0.75em, 22px), 28px);
    line-height: 1.4;
  }

  @media (min-width: 768px) {
    .main-panel[_ngcontent-ng-c4071508745] h1[_ngcontent-ng-c4071508745] span[_ngcontent-ng-c4071508745] {
      display: unset;
      font-size: 1em;
      line-height: inherit;
    }
  }

  .main-panel[_ngcontent-ng-c4071508745] .verified-issuer[_ngcontent-ng-c4071508745] {
    position: absolute;
    z-index: 11;
    top: -5px;
    height: 24px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: center;
    margin-bottom: var(--theme-medium-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] .issuer-logo[_ngcontent-ng-c4071508745] {
    position: relative;
    display: flex;
    align-items: center;
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] .issuer-logo[_ngcontent-ng-c4071508745] mat-icon.verified-icon[_ngcontent-ng-c4071508745] {
    color: var(--primary-color);
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] .issuer-logo[_ngcontent-ng-c4071508745] mat-icon.verified-icon[_ngcontent-ng-c4071508745]:after {
    position: absolute;
    z-index: -1;
    top: -28px;
    left: 2px;
    font-size: 60px;
    color: #fff;
    content: '\2022';
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] .link-with-icon[_ngcontent-ng-c4071508745] {
    font-size: 24px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] .link-with-icon[_ngcontent-ng-c4071508745]:hover accredible-icon[_ngcontent-ng-c4071508745] .icon-external {
    text-decoration: none;
  }

  .main-panel[_ngcontent-ng-c4071508745] .issuer-info[_ngcontent-ng-c4071508745] .link-with-icon[_ngcontent-ng-c4071508745] accredible-icon[_ngcontent-ng-c4071508745] {
    display: inline-block;
    width: 16px;
    height: 16px;
    font-size: 16px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] {
    display: none;
    height: 40px;
  }

  @media (min-width: 576px) {
    .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] {
      display: block;
    }
  }

  .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] accredible-responsive-menu[_ngcontent-ng-c4071508745] {
    color: var(--theme-subtle-darker-color);
  }

  .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] accredible-responsive-menu[_ngcontent-ng-c4071508745] .responsive-menu-container {
    width: 100%;
  }

  .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] accredible-responsive-menu[_ngcontent-ng-c4071508745] .responsive-menu-container .mat-button-wrapper {
    display: flex;
    align-items: center;
    text-transform: uppercase;
  }

  .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] accredible-responsive-menu[_ngcontent-ng-c4071508745] accredible-icon[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: center;
  }

  .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] accredible-responsive-menu[_ngcontent-ng-c4071508745] [menutriggerbutton][_ngcontent-ng-c4071508745] mat-icon[_ngcontent-ng-c4071508745] {
    margin: 0 0 0 4px;
    line-height: 36px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .mobile-menu-buttons[_ngcontent-ng-c4071508745] {
    display: flex;
    justify-content: space-around;
  }

  @media (min-width: 576px) {
    .main-panel[_ngcontent-ng-c4071508745] .mobile-menu-buttons[_ngcontent-ng-c4071508745] {
      display: none;
    }
  }

  .main-panel[_ngcontent-ng-c4071508745] .mobile-menu-buttons[_ngcontent-ng-c4071508745] .mobile-popup-trigger[_ngcontent-ng-c4071508745] {
    align-items: center;
    flex: 1;
    justify-content: space-evenly;
    padding: 0 var(--theme-wide-margin) 2px;
    border-radius: 4px !important;
  }

  .main-panel[_ngcontent-ng-c4071508745] .mobile-menu-buttons[_ngcontent-ng-c4071508745] .mobile-popup-trigger[_ngcontent-ng-c4071508745] mat-icon[_ngcontent-ng-c4071508745] {
    width: 14px;
    height: 14px;
    font-size: 14px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .sign-in-more-options[_ngcontent-ng-c4071508745] {
    margin-top: var(--theme-slight-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .main-panel-expand-container[_ngcontent-ng-c4071508745] {
    margin-top: var(--theme-wide-margin);
  }

  @media (min-width: 576px) {
    .main-panel[_ngcontent-ng-c4071508745] .main-panel-expand-container[_ngcontent-ng-c4071508745] {
      max-height: none !important;
      -webkit-mask-image: none !important;
    }
  }

  .main-panel[_ngcontent-ng-c4071508745] .expand-button-container[_ngcontent-ng-c4071508745] {
    display: flex;
    justify-content: center;
    margin-top: var(--theme-default-margin);
  }

  @media (min-width: 576px) {
    .main-panel[_ngcontent-ng-c4071508745] .expand-button-container[_ngcontent-ng-c4071508745] {
      display: none;
    }
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] {
    margin-bottom: var(--theme-wide-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: flex-start;
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] {
    width: 100%;
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .name[_ngcontent-ng-c4071508745] {
    margin-bottom: 0;
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-top: calc(var(--theme-slight-margin) / 2);
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745]>div[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: center;
    margin-bottom: var(--theme-slight-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745] .social-medium[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: center;
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745] .social-medium[_ngcontent-ng-c4071508745] mat-icon[_ngcontent-ng-c4071508745] {
    width: 20px;
    height: 20px;
    font-size: 20px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745] .social-medium[_ngcontent-ng-c4071508745] span[_ngcontent-ng-c4071508745] {
    text-transform: capitalize;
  }

  .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745] accredible-divider[_ngcontent-ng-c4071508745] {
    height: 20px;
    margin: 0 var(--theme-slight-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .description[_ngcontent-ng-c4071508745] {
    margin: var(--theme-wide-margin) 0;
    white-space: pre-line;
  }

  .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] {
    margin: var(--theme-wide-margin) 0;
  }

  .main-panel[_ngcontent-ng-c4071508745] .skills-knowledge[_ngcontent-ng-c4071508745] {
    margin: var(--theme-default-margin) 0;
  }

  .main-panel[_ngcontent-ng-c4071508745] .skills-knowledge[_ngcontent-ng-c4071508745] .mat-h4[_ngcontent-ng-c4071508745] {
    display: inline-block;
  }

  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] {
    margin-top: var(--theme-wide-margin);
    margin-bottom: calc(var(--theme-default-margin) * -1);
  }

  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] .mat-h4[_ngcontent-ng-c4071508745] {
    margin-bottom: var(--theme-default-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] .reference-tile[_ngcontent-ng-c4071508745],
  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] .add-evidence-btn[_ngcontent-ng-c4071508745] {
    height: 350px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] .add-evidence-btn[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
  }

  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] .add-evidence-btn[_ngcontent-ng-c4071508745] img[_ngcontent-ng-c4071508745] {
    height: 150px;
    margin-bottom: var(--theme-default-margin);
  }

  .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] .add-evidence-btn[_ngcontent-ng-c4071508745] span[_ngcontent-ng-c4071508745] {
    font-size: 16px;
  }

  .main-panel[_ngcontent-ng-c4071508745] .job-insights-container[_ngcontent-ng-c4071508745] {
    margin-top: var(--theme-wide-margin);
  }

  @media (min-width: 576px) {
    .detail-panel[_ngcontent-ng-c4071508745] {
      min-width: 360px;
    }
  }

  .detail-panel[_ngcontent-ng-c4071508745]>div[_ngcontent-ng-c4071508745],
  .detail-panel[_ngcontent-ng-c4071508745] aside[_ngcontent-ng-c4071508745]:not(:last-of-type) {
    margin-bottom: var(--theme-wide-margin);
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] h1[_ngcontent-ng-c4071508745] {
    width: 35%;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] h1[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] {
    pointer-events: none;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] accredible-responsive-menu .responsive-menu-container> :first-child {
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    visibility: visible;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] button[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .menu-container[_ngcontent-ng-c4071508745] a[_ngcontent-ng-c4071508745] {
    visibility: hidden;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .sign-in-more-options[_ngcontent-ng-c4071508745] {
    width: 200px;
    height: 20px;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .sign-in-more-options[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .sign-in-more-options[_ngcontent-ng-c4071508745]>a[_ngcontent-ng-c4071508745] {
    visibility: hidden;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .name[_ngcontent-ng-c4071508745] {
    width: 150px;
    height: 24px;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .name[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745] {
    width: 100px;
    height: 14px;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
    overflow: hidden;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745]>a[_ngcontent-ng-c4071508745] {
    border: none;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .recipient-issuer[_ngcontent-ng-c4071508745] .recipient[_ngcontent-ng-c4071508745] .info[_ngcontent-ng-c4071508745] .subtitle[_ngcontent-ng-c4071508745]>*[_ngcontent-ng-c4071508745] {
    visibility: hidden;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .description[_ngcontent-ng-c4071508745] {
    width: 100%;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .description[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .issued-on[_ngcontent-ng-c4071508745] h2[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .issued-on[_ngcontent-ng-c4071508745] div[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .expires-on[_ngcontent-ng-c4071508745] h2[_ngcontent-ng-c4071508745],
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .expires-on[_ngcontent-ng-c4071508745] div[_ngcontent-ng-c4071508745] {
    width: 40%;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .issued-on[_ngcontent-ng-c4071508745] h2[_ngcontent-ng-c4071508745]:after,
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .issued-on[_ngcontent-ng-c4071508745] div[_ngcontent-ng-c4071508745]:after,
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .expires-on[_ngcontent-ng-c4071508745] h2[_ngcontent-ng-c4071508745]:after,
  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .dates[_ngcontent-ng-c4071508745] .expires-on[_ngcontent-ng-c4071508745] div[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .skills-knowledge[_ngcontent-ng-c4071508745] .mat-h3[_ngcontent-ng-c4071508745] {
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .skills-knowledge[_ngcontent-ng-c4071508745] .mat-h3[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .main-panel[_ngcontent-ng-c4071508745] .evidence-container[_ngcontent-ng-c4071508745] {
    visibility: hidden;
  }

  .ghost[_ngcontent-ng-c4071508745] .detail-panel[_ngcontent-ng-c4071508745] .mat-h4[_ngcontent-ng-c4071508745] {
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
  }

  .ghost[_ngcontent-ng-c4071508745] .detail-panel[_ngcontent-ng-c4071508745] .mat-h4[_ngcontent-ng-c4071508745]:after {
    content: 'G';
  }

  .ghost[_ngcontent-ng-c4071508745] .detail-panel[_ngcontent-ng-c4071508745]>div[_ngcontent-ng-c4071508745] {
    display: flex;
    align-items: flex-start;
    flex-direction: column;
  }

  .ghost[_ngcontent-ng-c4071508745] .detail-panel[_ngcontent-ng-c4071508745] .verify[_ngcontent-ng-c4071508745] .btn-verify[_ngcontent-ng-c4071508745] {
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    box-shadow: none !important;
  }

  .ghost[_ngcontent-ng-c4071508745] .detail-panel[_ngcontent-ng-c4071508745] .verify[_ngcontent-ng-c4071508745]>div[_ngcontent-ng-c4071508745] {
    visibility: hidden;
  }

  rp-physical-awards-widget[_ngcontent-ng-c4071508745] {
    display: block;
    margin-top: var(--spacing-2x);
  }

  body[dir='ltr'] .column-structure>.main-panel .issuer-info .issuer-logo {
    margin-right: var(--theme-slight-margin);
  }

  body[dir='ltr'] .column-structure>.main-panel .issuer-info .issuer-logo.verified {
    margin-right: var(--theme-medium-margin);
  }

  body[dir='ltr'] .column-structure>.main-panel .issuer-info .issuer-logo .verified-issuer {
    left: calc(var(--theme-wide-margin) - 6px);
  }

  body[dir='ltr'] .column-structure>.main-panel .issuer-info .issuer-logo .verified-issuer:after {
    z-index: -1;
    left: 3px;
  }

  @media (min-width: 992px) {
    body[dir='ltr'] .column-structure>.detail-panel {
      margin-left: 0;
    }
  }

  @media (min-width: 1260px) {
    body[dir='ltr'] .column-structure>.detail-panel {
      margin-left: calc(calc(1.5 * var(--theme-wide-margin)));
    }
  }

  @media (min-width: 1440px) {
    body[dir='ltr'] .column-structure>.detail-panel {
      margin-left: calc(calc(1.7 * var(--theme-wide-margin)));
    }
  }

  body[dir='rtl'] .column-structure>.main-panel .issuer-info .issuer-logo {
    margin-left: var(--theme-slight-margin);
  }

  body[dir='rtl'] .column-structure>.main-panel .issuer-info .issuer-logo.verified {
    margin-left: var(--theme-medium-margin);
  }

  body[dir='rtl'] .column-structure>.main-panel .issuer-info .issuer-logo .verified-issuer {
    right: calc(var(--theme-wide-margin) - 6px);
  }

  body[dir='rtl'] .column-structure>.main-panel .issuer-info .issuer-logo .verified-issuer:after {
    z-index: -1;
    right: 3px;
  }

  @media (min-width: 992px) {
    body[dir='rtl'] .column-structure>.detail-panel {
      margin-right: 0;
    }
  }

  @media (min-width: 1260px) {
    body[dir='rtl'] .column-structure>.detail-panel {
      margin-right: calc(calc(1.5 * var(--theme-wide-margin)));
    }
  }

  @media (min-width: 1440px) {
    body[dir='rtl'] .column-structure>.detail-panel {
      margin-right: calc(calc(1.7 * var(--theme-wide-margin)));
    }
  }
  </style>
  <style>
  .ghost[_ngcontent-ng-c2907855935] h1[_ngcontent-ng-c2907855935],
  .ghost[_ngcontent-ng-c2907855935] h2[_ngcontent-ng-c2907855935],
  .ghost[_ngcontent-ng-c2907855935] h3[_ngcontent-ng-c2907855935],
  .ghost[_ngcontent-ng-c2907855935] h4[_ngcontent-ng-c2907855935],
  .ghost[_ngcontent-ng-c2907855935] h5[_ngcontent-ng-c2907855935],
  .ghost[_ngcontent-ng-c2907855935] h6[_ngcontent-ng-c2907855935] {
    display: inline-block;
  }

  .banner-container[_ngcontent-ng-c2907855935] {
    padding: calc(var(--theme-default-margin) * 2) 0;
    background-color: var(--theme-credential-banner-bg-color);
  }

  .banner-container[_ngcontent-ng-c2907855935] .content[_ngcontent-ng-c2907855935] {
    position: relative;
    display: flex;
    align-items: center;
    flex-direction: column-reverse;
    justify-content: center;
  }

  @media (min-width: 992px) {
    .banner-container[_ngcontent-ng-c2907855935] .content[_ngcontent-ng-c2907855935] {
      align-items: flex-start;
      flex-direction: row;
    }
  }

  .chip-wrapper[_ngcontent-ng-c2907855935] {
    position: relative;
    display: flex;
    align-self: flex-start;
    margin-bottom: var(--theme-default-margin);
  }

  @media (min-width: 992px) {
    .chip-wrapper[_ngcontent-ng-c2907855935] {
      position: absolute;
      top: 0;
      align-items: flex-end;
      flex-direction: column;
    }
  }

  .chip-wrapper[_ngcontent-ng-c2907855935] accredible-chip[_ngcontent-ng-c2907855935] {
    margin-bottom: var(--theme-slight-margin);
    box-shadow: 0 2px 4px #00000029;
  }

  .chip-wrapper[_ngcontent-ng-c2907855935] accredible-chip.unverified[_ngcontent-ng-c2907855935] {
    color: var(--text-alert-color);
    background-color: var(--alert-color);
  }

  .chip-wrapper[_ngcontent-ng-c2907855935] accredible-chip.expired[_ngcontent-ng-c2907855935] {
    color: var(--text-warn-color);
    background-color: var(--warn-color);
  }

  .switcher[_ngcontent-ng-c2907855935] {
    display: flex;
    margin-top: var(--theme-default-margin);
  }

  @media (min-width: 992px) {
    .switcher[_ngcontent-ng-c2907855935] {
      flex-direction: column;
      margin-top: 0;
    }
  }

  .switcher.order-reversed[_ngcontent-ng-c2907855935] {
    flex-direction: row-reverse;
  }

  @media (min-width: 992px) {
    .switcher.order-reversed[_ngcontent-ng-c2907855935] {
      flex-direction: column-reverse;
    }
  }

  .switcher[_ngcontent-ng-c2907855935] .badge[_ngcontent-ng-c2907855935],
  .switcher[_ngcontent-ng-c2907855935] .certificate[_ngcontent-ng-c2907855935] {
    display: flex;
    align-items: center;
    justify-content: center;
    height: calc(100px + var(--theme-slight-margin) * 2);
    cursor: pointer;
  }

  .switcher[_ngcontent-ng-c2907855935] .badge.selected[_ngcontent-ng-c2907855935],
  .switcher[_ngcontent-ng-c2907855935] .certificate.selected[_ngcontent-ng-c2907855935] {
    background-color: var(--theme-credential-banner-selected-color);
    border-radius: var(--theme-border-radius);
  }

  .switcher[_ngcontent-ng-c2907855935] .badge[_ngcontent-ng-c2907855935]>div[_ngcontent-ng-c2907855935],
  .switcher[_ngcontent-ng-c2907855935] .certificate[_ngcontent-ng-c2907855935]>div[_ngcontent-ng-c2907855935] {
    width: 100px;
  }

  .switcher[_ngcontent-ng-c2907855935] .badge[_ngcontent-ng-c2907855935] {
    margin-bottom: var(--theme-default-margin);
    padding: 0 var(--theme-slight-margin);
  }

  .switcher[_ngcontent-ng-c2907855935] .certificate[_ngcontent-ng-c2907855935] {
    padding: 0 var(--theme-default-margin);
  }

  .banner[_ngcontent-ng-c2907855935] {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    width: 100%;
    padding: 1px;
    overflow: hidden;
  }

  .banner.a8.landscape[_ngcontent-ng-c2907855935] {
    max-width: 335px;
    max-height: 234px;
  }

  .banner.a8.portrait[_ngcontent-ng-c2907855935] {
    max-width: 234px;
    max-height: 335px;
  }

  @media (min-width: 768px) {
    .banner[_ngcontent-ng-c2907855935] {
      width: 100%;
    }

    .banner.a8.landscape[_ngcontent-ng-c2907855935] {
      max-width: 379px;
      max-height: 266px;
    }

    .banner.a8.portrait[_ngcontent-ng-c2907855935] {
      max-width: 266px;
      max-height: 379px;
    }
  }

  @media (min-width: 992px) {
    .banner[_ngcontent-ng-c2907855935] {
      width: 100%;
    }
  }

  .banner[_ngcontent-ng-c2907855935] .badge-wrapper[_ngcontent-ng-c2907855935] {
    display: inline-block;
    max-width: 400px;
  }

  @media (min-width: 992px) {
    body[dir='ltr'] rp-credential-banner .chip-wrapper {
      right: var(--theme-default-margin);
    }
  }

  body[dir='ltr'] rp-credential-banner .chip-wrapper accredible-chip:first-of-type {
    margin-right: var(--theme-slight-margin);
  }

  @media (min-width: 992px) {
    body[dir='ltr'] rp-credential-banner .chip-wrapper accredible-chip:first-of-type {
      margin-right: 0;
    }
  }

  @media (min-width: 992px) {
    body[dir='ltr'] rp-credential-banner .switcher {
      margin-right: calc(var(--theme-default-margin) * 2);
      margin-left: calc(-100px - var(--theme-default-margin) * 4);
    }
  }

  @media (min-width: 992px) {
    body[dir='rtl'] rp-credential-banner .chip-wrapper {
      left: var(--theme-default-margin);
    }
  }

  body[dir='rtl'] rp-credential-banner .chip-wrapper accredible-chip:first-of-type {
    margin-left: var(--theme-slight-margin);
  }

  @media (min-width: 992px) {
    body[dir='rtl'] rp-credential-banner .chip-wrapper accredible-chip:first-of-type {
      margin-left: 0;
    }
  }

  @media (min-width: 992px) {
    body[dir='rtl'] rp-credential-banner .switcher {
      margin-left: calc(var(--theme-default-margin) * 2);
      margin-right: calc(-100px - var(--theme-default-margin) * 4);
    }
  }

  .ghost[_ngcontent-ng-c2907855935] .banner[_ngcontent-ng-c2907855935] {
    height: 65vw;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    max-height: 500px;
  }

  @media (min-width: 992px) {
    .ghost[_ngcontent-ng-c2907855935] .banner[_ngcontent-ng-c2907855935] {
      height: 35vw;
      background-color: var(--theme-ghost-color);
      border: none;
      border-radius: var(--theme-border-radius);
      box-shadow: var(--theme-box-shadow);
      pointer-events: none;
      color: transparent;
    }
  }
  </style>
  <style>
  .ghost[_ngcontent-ng-c411516096] h1[_ngcontent-ng-c411516096],
  .ghost[_ngcontent-ng-c411516096] h2[_ngcontent-ng-c411516096],
  .ghost[_ngcontent-ng-c411516096] h3[_ngcontent-ng-c411516096],
  .ghost[_ngcontent-ng-c411516096] h4[_ngcontent-ng-c411516096],
  .ghost[_ngcontent-ng-c411516096] h5[_ngcontent-ng-c411516096],
  .ghost[_ngcontent-ng-c411516096] h6[_ngcontent-ng-c411516096] {
    display: inline-block;
  }

  [_nghost-ng-c411516096] {
    display: inline-block;
  }

  [default-image-header][_nghost-ng-c411516096] .wrapper[_ngcontent-ng-c411516096] .avatar.default[_ngcontent-ng-c411516096] mat-icon[_ngcontent-ng-c411516096] {
    color: var(--theme-header-text-color);
    opacity: 0.6;
  }

  .wrapper[_ngcontent-ng-c411516096] {
    position: relative;
    border-radius: 50%;
  }

  .wrapper.square[_ngcontent-ng-c411516096],
  .wrapper.square[_ngcontent-ng-c411516096] .avatar[_ngcontent-ng-c411516096] {
    border-radius: 10%;
  }

  .wrapper.with-border[_ngcontent-ng-c411516096] {
    border: 1px solid var(--theme-border-color);
  }

  .wrapper[_ngcontent-ng-c411516096] .avatar[_ngcontent-ng-c411516096] {
    position: absolute;
    z-index: 10;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 50%;
    overflow: hidden;
  }

  .wrapper[_ngcontent-ng-c411516096] .avatar.contain[_ngcontent-ng-c411516096] {
    background-size: contain;
  }

  .wrapper[_ngcontent-ng-c411516096] .avatar.default[_ngcontent-ng-c411516096] {
    z-index: 0;
    color: var(--theme-ghost-alternate-color);
  }

  .wrapper[_ngcontent-ng-c411516096] .avatar.default[_ngcontent-ng-c411516096] mat-icon[_ngcontent-ng-c411516096] {
    width: 100%;
    height: 100%;
  }

  .wrapper[_ngcontent-ng-c411516096] .avatar[_ngcontent-ng-c411516096]:not(.default) {
    background-color: #fff;
  }

  .ghost.wrapper.square[_ngcontent-ng-c411516096] .avatar[_ngcontent-ng-c411516096] {
    border-radius: 10%;
  }

  .ghost.wrapper[_ngcontent-ng-c411516096] .avatar[_ngcontent-ng-c411516096] {
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    border-radius: 50%;
  }
  </style>
  <style>
  [_nghost-ng-c3153074854] {
    display: block;
  }

  [vertical][_nghost-ng-c3153074854] {
    display: inline-block;
  }

  [vertical][_nghost-ng-c3153074854] mat-divider[_ngcontent-ng-c3153074854] {
    height: 100%;
  }
  </style>
  <style>
  .earning-criteria-container {
    display: flex;
    flex-direction: column;
    margin-top: var(--theme-wide-margin);
  }

  .earning-criteria-container h2,
  .earning-criteria-container h5 {
    margin-bottom: var(--theme-slight-margin);
  }

  .earning-criteria-container .criteria-list-container {
    height: 100%;
    margin-bottom: var(--theme-wide-margin);
  }

  @media (min-width: 768px) {
    .earning-criteria-container .criteria-list-container .criteria-row {
      display: flex;
      align-items: center;
      gap: var(--theme-slight-margin);
    }
  }

  .earning-criteria-container .criteria-list-container .criteria-row:not(:last-child) {
    margin-bottom: var(--theme-default-margin);
  }

  .earning-criteria-container .criteria-list-container .criteria-row accredible-chip {
    align-self: flex-start;
    margin-bottom: calc(var(--theme-slight-margin) / 2);
    padding: 5px 0;
    text-transform: capitalize;
  }

  @media (min-width: 768px) {
    .earning-criteria-container .criteria-list-container .criteria-row accredible-chip {
      min-width: 140px;
      max-width: 140px;
      margin-bottom: 0;
    }
  }

  .earning-criteria-container .criteria-list-container .criteria-row accredible-chip>div {
    justify-content: flex-start;
  }

  .earning-criteria-container .criteria-list-container .criteria-row accredible-chip>div span {
    padding: 0;
  }

  .earning-criteria-container .criteria-list-container .criteria-row accredible-chip .chip-text {
    white-space: normal;
    text-overflow: inherit;
    overflow: auto;
  }

  .earning-criteria-container .criteria-list-container .criteria-row accredible-chip accredible-icon {
    align-self: flex-start;
    margin-top: calc(var(--theme-trailing-margin) / 2);
    color: var(--theme-chip-text-color);
  }

  .earning-criteria-container .criteria-list-container .criteria-row>div {
    align-self: flex-start;
    padding: calc(var(--theme-trailing-margin) / 2) 0;
    white-space: pre-line;
  }

  .earning-criteria-container .criteria-list-container .criteria-row>div a {
    color: var(--theme-link-color);
    text-decoration-line: underline;
  }
  </style>
  <style>
  mat-icon,
  mat-icon.mat-primary,
  mat-icon.mat-accent,
  mat-icon.mat-warn {
    color: var(--mat-icon-color);
  }

  .mat-icon {
    -webkit-user-select: none;
    user-select: none;
    background-repeat: no-repeat;
    display: inline-block;
    fill: currentColor;
    height: 24px;
    width: 24px;
    overflow: hidden;
  }

  .mat-icon.mat-icon-inline {
    font-size: inherit;
    height: inherit;
    line-height: inherit;
    width: inherit;
  }

  .mat-icon.mat-ligature-font[fontIcon]::before {
    content: attr(fontIcon);
  }

  [dir='rtl'] .mat-icon-rtl-mirror {
    transform: scale(-1, 1);
  }

  .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
  .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
    display: block;
  }

  .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
  .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
    margin: auto;
  }
  </style>
  <style>
  .pop-up-content[_ngcontent-ng-c777058696] {
    display: block;
    width: 100%;
    background-color: #fff;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    overflow: hidden;
    transition: transform 0.5s cubic-bezier(0.61, 1, 0.88, 1);
    transform: translateY(100%);
  }

  .pop-up-content.move[_ngcontent-ng-c777058696] {
    transform: translateY(0);
  }

  .pop-up-content[_ngcontent-ng-c777058696] .header[_ngcontent-ng-c777058696] {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: var(--theme-slight-margin);
    padding: var(--theme-default-margin) var(--theme-default-margin) 0;
  }
  </style>
  <style>
  .mat-divider {
    --mat-divider-width: 1px;
    display: block;
    margin: 0;
    border-top-style: solid;
    border-top-color: var(--mat-divider-color);
    border-top-width: var(--mat-divider-width);
  }

  .mat-divider.mat-divider-vertical {
    border-top: 0;
    border-right-style: solid;
    border-right-color: var(--mat-divider-color);
    border-right-width: var(--mat-divider-width);
  }

  .mat-divider.mat-divider-inset {
    margin-left: 80px;
  }

  [dir='rtl'] .mat-divider.mat-divider-inset {
    margin-left: auto;
    margin-right: 80px;
  }
  </style>
  <style>
  [_nghost-ng-c1468157071] {
    visibility: hidden;
    display: block;
    width: 100%;
  }

  .align-start[_nghost-ng-c1468157071] .responsive-menu-container[_ngcontent-ng-c1468157071] {
    justify-content: flex-start;
  }

  .responsive-menu-container[_ngcontent-ng-c1468157071] {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: flex-end;
  }

  ul[_ngcontent-ng-c1468157071] li.top-divider[_ngcontent-ng-c1468157071] {
    border-top: 1px solid var(--theme-border-color);
  }

  body[dir='ltr'] accredible-responsive-menu accredible-icon {
    margin-right: var(--theme-trailing-margin);
  }

  body[dir='rtl'] accredible-responsive-menu accredible-icon {
    margin-left: var(--theme-trailing-margin);
  }
  </style>
  <style>
  mat-menu {
    display: none;
  }

  .mat-menu-panel {
    min-width: 112px;
    max-width: 280px;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    max-height: calc(100vh - 48px);
    border-radius: 4px;
    outline: 0;
    min-height: 64px;
    position: relative;
  }

  .mat-menu-panel.ng-animating {
    pointer-events: none;
  }

  .cdk-high-contrast-active .mat-menu-panel {
    outline: solid 1px;
  }

  .mat-menu-content:not(:empty) {
    padding-top: 8px;
    padding-bottom: 8px;
  }

  .mat-menu-item {
    -webkit-user-select: none;
    user-select: none;
    cursor: pointer;
    outline: none;
    border: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    line-height: 48px;
    height: 48px;
    padding: 0 16px;
    text-align: left;
    text-decoration: none;
    max-width: 100%;
    position: relative;
  }

  .mat-menu-item::-moz-focus-inner {
    border: 0;
  }

  .mat-menu-item[disabled] {
    cursor: default;
  }

  [dir='rtl'] .mat-menu-item {
    text-align: right;
  }

  .mat-menu-item .mat-icon {
    margin-right: 16px;
    vertical-align: middle;
  }

  .mat-menu-item .mat-icon svg {
    vertical-align: top;
  }

  [dir='rtl'] .mat-menu-item .mat-icon {
    margin-left: 16px;
    margin-right: 0;
  }

  .mat-menu-item[disabled]::after {
    display: block;
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
  }

  .cdk-high-contrast-active .mat-menu-item {
    margin-top: 1px;
  }

  .mat-menu-item-submenu-trigger {
    padding-right: 32px;
  }

  [dir='rtl'] .mat-menu-item-submenu-trigger {
    padding-right: 16px;
    padding-left: 32px;
  }

  .mat-menu-submenu-icon {
    position: absolute;
    top: 50%;
    right: 16px;
    transform: translateY(-50%);
    width: 5px;
    height: 10px;
    fill: currentColor;
  }

  [dir='rtl'] .mat-menu-submenu-icon {
    right: auto;
    left: 16px;
    transform: translateY(-50%) scaleX(-1);
  }

  .cdk-high-contrast-active .mat-menu-submenu-icon {
    fill: CanvasText;
  }

  button.mat-menu-item {
    width: 100%;
  }

  .mat-menu-item .mat-menu-ripple {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    pointer-events: none;
  }
  </style>
  <style>
  .widget[_ngcontent-ng-c2611373039] .header[_ngcontent-ng-c2611373039] {
    display: flex;
    justify-content: space-between;
  }

  .widget[_ngcontent-ng-c2611373039] .header[_ngcontent-ng-c2611373039] h2[_ngcontent-ng-c2611373039] {
    margin-bottom: var(--theme-slight-margin);
  }

  .widget[_ngcontent-ng-c2611373039] .header[_ngcontent-ng-c2611373039] .trailing-margin[_ngcontent-ng-c2611373039] {
    margin-bottom: var(--theme-medium-margin);
  }

  .widget[_ngcontent-ng-c2611373039] .header[_ngcontent-ng-c2611373039] img[_ngcontent-ng-c2611373039] {
    align-self: start;
  }

  .widget[_ngcontent-ng-c2611373039] rp-get-social[_ngcontent-ng-c2611373039] {
    margin-bottom: var(--theme-medium-margin);
  }

  .widget[_ngcontent-ng-c2611373039] rp-get-social[_ngcontent-ng-c2611373039]:last-child {
    margin-bottom: 0;
  }

  .widget[_ngcontent-ng-c2611373039] button.linkedin-add[_ngcontent-ng-c2611373039] {
    width: 100%;
    padding: var(--theme-slight-margin) var(--theme-default-margin);
    font-size: 18px;
    white-space: normal;
    transition: 0.2s all;
  }

  .widget[_ngcontent-ng-c2611373039] button.linkedin-add[_ngcontent-ng-c2611373039] mat-icon[_ngcontent-ng-c2611373039] {
    margin-bottom: 3px;
  }
  </style>
  <style>
  .pathway-enrolments-title-wrapper[_ngcontent-ng-c406427267] {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .pathway-enrolments-title-wrapper[_ngcontent-ng-c406427267] img[_ngcontent-ng-c406427267] {
    width: 66px;
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] {
    border-bottom: 1px solid var(--theme-border-color);
    padding-block: var(--theme-default-margin);
  }

  .pathway-enrolment[_ngcontent-ng-c406427267]:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-details[_ngcontent-ng-c406427267] {
    display: flex;
    align-items: center;
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-details[_ngcontent-ng-c406427267]>img[_ngcontent-ng-c406427267] {
    width: 62px;
    margin-bottom: calc(0.5 * var(--theme-slight-margin));
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-details[_ngcontent-ng-c406427267] .issuer-wrapper[_ngcontent-ng-c406427267] {
    display: flex;
    margin-bottom: calc(0.5 * var(--theme-slight-margin));
    font-size: 14px;
    line-height: 18px;
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-details[_ngcontent-ng-c406427267] .issuer-wrapper[_ngcontent-ng-c406427267] img[_ngcontent-ng-c406427267] {
    width: 24px;
    max-height: 24px;
    object-fit: contain;
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-details[_ngcontent-ng-c406427267] .issuer-wrapper[_ngcontent-ng-c406427267] div[_ngcontent-ng-c406427267] mat-icon[_ngcontent-ng-c406427267] {
    width: auto;
    height: auto;
    font-size: 16px;
    color: var(--primary-color);
    transform: translateY(3px);
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-link[_ngcontent-ng-c406427267] {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: var(--theme-slight-margin);
  }

  .pathway-enrolment[_ngcontent-ng-c406427267] .pathway-enrolment-link[_ngcontent-ng-c406427267] a[_ngcontent-ng-c406427267] {
    width: 100%;
  }

  .pathway-sequence-list[_ngcontent-ng-c406427267] {
    margin-top: var(--theme-default-margin);
  }

  .pathway-sequence[_ngcontent-ng-c406427267] {
    display: flex;
    gap: var(--theme-medium-margin);
    margin: var(--theme-medium-margin) 0;
  }

  .pathway-sequence[_ngcontent-ng-c406427267]:last-child {
    margin-bottom: 0;
  }

  .pathway-sequence-name[_ngcontent-ng-c406427267] {
    display: block;
    font-weight: 600;
    font-size: 18px;
    margin-bottom: var(--theme-slight-margin);
    color: #000;
  }

  .explore-more-pathways[_ngcontent-ng-c406427267] {
    display: flex;
    justify-content: center;
    padding-top: var(--theme-default-margin);
  }

  .explore-more-pathways[_ngcontent-ng-c406427267] a[_ngcontent-ng-c406427267] {
    display: flex;
    align-items: center;
    color: var(--theme-link-color);
    cursor: pointer;
  }

  .explore-more-pathways[_ngcontent-ng-c406427267] a[_ngcontent-ng-c406427267] mat-icon[_ngcontent-ng-c406427267] {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 20px;
    font-size: 16px;
  }
  </style>
  <style>
  .widget[_ngcontent-ng-c2768773076] h2[_ngcontent-ng-c2768773076] {
    margin-bottom: var(--theme-medium-margin);
  }

  .widget[_ngcontent-ng-c2768773076]>div[_ngcontent-ng-c2768773076] {
    display: flex;
    align-items: center;
    margin-bottom: var(--theme-slight-margin);
  }

  .widget[_ngcontent-ng-c2768773076]>div[_ngcontent-ng-c2768773076]:last-of-type {
    margin-bottom: var(--theme-medium-margin);
  }

  .widget[_ngcontent-ng-c2768773076]>div[_ngcontent-ng-c2768773076] mat-icon.verified-small[_ngcontent-ng-c2768773076] {
    color: var(--primary-color);
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] {
    display: flex;
    align-items: flex-start;
    flex-direction: column;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: var(--theme-slight-margin);
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076]>div[_ngcontent-ng-c2768773076] {
    display: flex;
    align-items: center;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076]>div[_ngcontent-ng-c2768773076] .bitcoin-address[_ngcontent-ng-c2768773076] {
    font-weight: 700;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] img[_ngcontent-ng-c2768773076] {
    width: 20px;
    height: 20px;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] button[_ngcontent-ng-c2768773076] {
    width: initial;
    color: var(--theme-link-color);
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] button[_ngcontent-ng-c2768773076] div[_ngcontent-ng-c2768773076] {
    display: flex;
    align-items: center;
    font-size: 16px;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] button[_ngcontent-ng-c2768773076] div[_ngcontent-ng-c2768773076]:hover {
    opacity: 0.8;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] button[_ngcontent-ng-c2768773076] div[_ngcontent-ng-c2768773076] mat-icon[_ngcontent-ng-c2768773076] {
    padding-top: 5px;
    font-size: 14px;
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .top-container[_ngcontent-ng-c2768773076] button[_ngcontent-ng-c2768773076] div.copied-state[_ngcontent-ng-c2768773076] {
    color: var(--theme-success-color);
  }

  .widget[_ngcontent-ng-c2768773076]>div.blockchain-container[_ngcontent-ng-c2768773076] .block-address[_ngcontent-ng-c2768773076] {
    max-width: 100%;
    font-weight: 700;
    overflow-wrap: break-word;
  }

  .widget[_ngcontent-ng-c2768773076] button[_ngcontent-ng-c2768773076] {
    width: 100%;
    padding: 2px;
    font-size: 18px;
    background: #fffc;
  }

  body[dir='ltr'] .widget>div.blockchain-container .top-container>div .bitcoin-address {
    margin-left: var(--theme-slight-margin);
  }

  body[dir='ltr'] .widget>div.blockchain-container .top-container img {
    margin-right: calc(var(--theme-slight-margin) / 2);
  }

  body[dir='ltr'] .widget>div.blockchain-container .block-address {
    padding-left: 24px;
  }

  body[dir='rtl'] .widget>div.blockchain-container .top-container>div .bitcoin-address {
    margin-right: var(--theme-slight-margin);
  }

  body[dir='rtl'] .widget>div.blockchain-container .top-container img {
    margin-left: calc(var(--theme-slight-margin) / 2);
  }

  body[dir='rtl'] .widget>div.blockchain-container .block-address {
    padding-right: 24px;
  }
  </style>
  <style>
  .ghost[_ngcontent-ng-c3788934295] h1[_ngcontent-ng-c3788934295],
  .ghost[_ngcontent-ng-c3788934295] h2[_ngcontent-ng-c3788934295],
  .ghost[_ngcontent-ng-c3788934295] h3[_ngcontent-ng-c3788934295],
  .ghost[_ngcontent-ng-c3788934295] h4[_ngcontent-ng-c3788934295],
  .ghost[_ngcontent-ng-c3788934295] h5[_ngcontent-ng-c3788934295],
  .ghost[_ngcontent-ng-c3788934295] h6[_ngcontent-ng-c3788934295] {
    display: inline-block;
  }

  [_nghost-ng-c3788934295] {
    display: inline-block;
    height: auto;
    font-size: 14px;
    font-weight: 500;
    white-space: nowrap;
    color: var(--theme-chip-text-color);
    background-color: var(--theme-chip-color);
    border-radius: 4px;
  }

  [_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    padding: 0 12px;
  }

  [_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] accredible-icon[_ngcontent-ng-c3788934295] .mat-icon {
    display: block;
  }

  [_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] span[_ngcontent-ng-c3788934295] {
    display: inline-block;
    max-width: 100%;
    padding: 5px;
    word-break: break-word;
  }

  [_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] .btn-remove[_ngcontent-ng-c3788934295] {
    width: 18px;
    height: 18px;
    line-height: 16px;
  }

  [_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] .btn-remove[_ngcontent-ng-c3788934295] mat-icon[_ngcontent-ng-c3788934295] {
    width: 18px;
    height: 18px;
    font-size: 18px;
    line-height: 18px;
  }

  .small[_nghost-ng-c3788934295] {
    min-height: 26px;
    font-size: 11px;
    border-radius: 4px;
  }

  .small[_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] {
    padding: 2px 7px;
  }

  .small[_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] span[_ngcontent-ng-c3788934295] {
    padding: 0 5px;
  }

  .big[_nghost-ng-c3788934295] {
    min-height: 38px;
    font-size: 17px;
    border-radius: 4px;
  }

  .big[_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] {
    padding: 7px 14px;
  }

  .big[_nghost-ng-c3788934295]>div[_ngcontent-ng-c3788934295] span[_ngcontent-ng-c3788934295] {
    padding: 0;
  }

  .ghost[_nghost-ng-c3788934295] {
    width: 200px;
    background-color: var(--theme-ghost-color);
    border: none;
    border-radius: var(--theme-border-radius);
    box-shadow: var(--theme-box-shadow);
    pointer-events: none;
    color: transparent;
    white-space: nowrap;
    border-radius: 4px;
  }

  .ghost[_nghost-ng-c3788934295]:after {
    content: 'G';
  }
  </style>
  <link id="gs-new_social_buttons_css" href="./new_social_buttons.css" type="text/css" rel="stylesheet" media="all" />

  <link rel="stylesheet" href="./stylescustom.css" media="all" />

  <script src="./134625931.js.tải xuống" type="text/javascript" async="" data-ueto="ueto_deed535704"></script>
  <style id="_goober">
  .go2933276541 {
    position: fixed;
    display: block;
    width: 100%;
    height: 0px;
    margin: 0px;
    padding: 0px;
    overflow: visible;
    transform-style: preserve-3d;
    background: transparent;
    backface-visibility: hidden;
    pointer-events: none;
    left: 0px;
    z-index: 9998;
  }

  .go2369186930 {
    top: 0px;
    z-index: 9999;
    height: 100%;
    width: 100%;
  }

  .go1348078617 {
    bottom: 0px;
  }

  .go2417249464 {
    position: fixed;
    z-index: 9989;
  }

  .go3921366393 {
    left: 0;
    bottom: 0;
  }

  .go3967842156 {
    right: 0;
    bottom: 0;
  }

  .go613305155 {
    left: 0;
    top: 0;
  }

  .go471583506 {
    right: 0;
    top: 0;
  }

  .go3670563033 {
    position: relative;
    overflow: hidden;
    display: none;
  }

  .go1041095097 {
    display: block;
  }

  .go1632949049 {
    position: absolute;
    pointer-events: none;
    width: 101vw;
    height: 101vh;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    z-index: -1;
  }

  .go2512015367 {
    z-index: 99998;
    opacity: 0.8;
    visibility: visible;
    pointer-events: all;
    cursor: pointer;
  }

  .go1432718904 {
    overflow: hidden;
  }

  .go812842568 {
    display: block !important;
    position: static !important;
    box-sizing: border-box !important;
    background: transparent !important;
    border: none;
    min-height: 0px !important;
    max-height: none !important;
    margin: 0px;
    padding: 0px !important;
    height: 100% !important;
    width: 1px !important;
    max-width: 100% !important;
    min-width: 100% !important;
  }

  .go2729809544 {
    z-index: 99999;
    visibility: hidden;
    position: absolute;
    inset: 50vh auto auto 50%;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
    opacity: 0;
    pointer-events: none;
    max-height: 95%;
    max-width: 95%;
  }

  .go1011812720 {
    pointer-events: auto !important;
    visibility: visible;
    opacity: 1;
    transition: opacity 1s ease-in;
  }

  .go456419034 {
    transition: opacity 0.3s ease-in;
  }

  .go3128134379 {
    pointer-events: auto !important;
    visibility: visible !important;
    max-height: 95vh !important;
    transition: max-height 1s ease-in;
  }

  .go494047706 {
    z-index: 9999;
    width: 100%;
    max-height: 95%;
    position: fixed;
    visibility: hidden;
  }

  .go2481764524 {
    z-index: 9999;
    width: 100%;
    max-height: 95%;
    position: fixed;
    visibility: hidden;
    bottom: 0px;
  }

  .go2685733372 {
    visibility: hidden;
  }

  .go2985984737 {
    visibility: visible !important;
  }

  .go3281949485 {
    pointer-events: auto !important;
    visibility: visible !important;
    max-height: 95vh !important;
    transform: none !important;
  }

  .go3539422596 {
    z-index: 9999;
    width: 100%;
    max-height: 95%;
    position: fixed;
    visibility: hidden;
    transition: transform 0.5s cubic-bezier(0.31, -0.2, 0.04, 1.47);
  }

  .go988075951 {
    z-index: 9999;
    position: fixed;
    left: 10px;
    top: 10px;
    max-height: 95vh !important;
    max-width: 95%;
    visibility: hidden;
  }

  .go2699082514 {
    z-index: 9999;
    position: fixed;
    right: 10px;
    top: 10px;
    max-height: 95vh !important;
    max-width: 95%;
    visibility: hidden;
  }

  .go1595992025 {
    z-index: 9999;
    position: fixed;
    left: 10px;
    bottom: 10px;
    max-height: 95vh !important;
    max-width: 95%;
    visibility: hidden;
  }

  .go1222083472 {
    z-index: 9999;
    position: fixed;
    right: 10px;
    bottom: 10px;
    max-height: 95vh !important;
    max-width: 95%;
    visibility: hidden;
  }

  .go722322694 {
    transition: none !important;
  }

  .go26732895 {
    cursor: pointer;
  }

  .go2083580917 {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  </style>
  <style type="text/css">
  html.hs-messages-widget-open.hs-messages-mobile,
  html.hs-messages-widget-open.hs-messages-mobile body {
    overflow: hidden !important;
    position: relative !important;
  }

  html.hs-messages-widget-open.hs-messages-mobile body {
    height: 100% !important;
    margin: 0 !important;
  }

  #hubspot-messages-iframe-container {
    display: initial !important;
    z-index: 2147483647;
    position: fixed !important;
    bottom: 0 !important;
  }

  #hubspot-messages-iframe-container.widget-align-left {
    left: 0 !important;
  }

  #hubspot-messages-iframe-container.widget-align-right {
    right: 0 !important;
  }

  #hubspot-messages-iframe-container.internal {
    z-index: 1016;
  }

  #hubspot-messages-iframe-container.internal iframe {
    min-width: 108px;
  }

  #hubspot-messages-iframe-container .hs-shadow-container {
    display: initial !important;
    z-index: -1;
    position: absolute;
    width: 0;
    height: 0;
    bottom: 0;
    content: '';
  }

  #hubspot-messages-iframe-container .hs-shadow-container.internal {
    display: none !important;
  }

  #hubspot-messages-iframe-container .hs-shadow-container.active {
    width: 400px;
    height: 400px;
  }

  #hubspot-messages-iframe-container iframe {
    display: initial !important;
    width: 100% !important;
    height: 100% !important;
    border: none !important;
    position: absolute !important;
    bottom: 0 !important;
    right: 0 !important;
    background: transparent !important;
  }

  .hs-drag-handle {
    position: absolute;
    bottom: 16px;
    cursor: grab;
    height: 60px;
    display: none;
    align-items: center;
  }

  .hs-drag-handle--right {
    right: 76px;
  }

  .hs-drag-handle--left {
    left: 76px;
  }

  .hs-drag-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    user-select: none;
    z-index: 999;
    display: none;
  }
  </style>
  <style>
  .message-banner[_ngcontent-ng-c1911940002] {
    background-color: transparent;
    border-bottom: 1px solid var(--theme-border-color);
  }

  .message-banner.expired[_ngcontent-ng-c1911940002] {
    color: var(--text-warn-color);
    background-color: var(--warn-color);
  }

  .message-banner.expired[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .icon[_ngcontent-ng-c1911940002] {
    color: var(--text-warn-color);
  }

  .message-banner.expired[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .btn-wrapper[_ngcontent-ng-c1911940002] a[_ngcontent-ng-c1911940002],
  .message-banner.expired[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .btn-wrapper[_ngcontent-ng-c1911940002] button[_ngcontent-ng-c1911940002] {
    color: var(--text-primary-color);
    background-color: var(--primary-color);
  }

  @media (min-width: 992px) {
    .message-banner.mobile-wallet[_ngcontent-ng-c1911940002] {
      display: none;
    }
  }

  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] {
    display: flex;
    flex-direction: column;
    padding-top: var(--theme-default-margin);
    padding-bottom: var(--theme-default-margin);
  }

  @media (min-width: 768px) {
    .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] {
      align-items: center;
      flex-direction: row;
    }
  }

  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .info[_ngcontent-ng-c1911940002] {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: var(--theme-default-margin);
  }

  @media (min-width: 768px) {
    .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .info[_ngcontent-ng-c1911940002] {
      flex-wrap: nowrap;
      margin-bottom: 0;
    }
  }

  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .info[_ngcontent-ng-c1911940002] .message-text[_ngcontent-ng-c1911940002] {
    width: 100%;
    margin-top: var(--theme-slight-margin);
  }

  @media (min-width: 768px) {
    .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .info[_ngcontent-ng-c1911940002] .message-text[_ngcontent-ng-c1911940002] {
      width: auto;
      margin-top: 0;
    }
  }

  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .info[_ngcontent-ng-c1911940002] .icon-text[_ngcontent-ng-c1911940002] {
    font-weight: 600;
  }

  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .btn-wrapper[_ngcontent-ng-c1911940002] {
    display: flex;
  }

  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .btn-wrapper[_ngcontent-ng-c1911940002] a[_ngcontent-ng-c1911940002],
  .message-banner[_ngcontent-ng-c1911940002] .content[_ngcontent-ng-c1911940002] .btn-wrapper[_ngcontent-ng-c1911940002] button[_ngcontent-ng-c1911940002] {
    text-transform: uppercase;
    color: var(--theme-link-color);
  }

  body[dir='ltr'] rp-message-banners .content .btn-wrapper {
    margin-left: auto;
  }

  body[dir='rtl'] rp-message-banners .content .btn-wrapper {
    margin-right: auto;
  }
  </style>
  <style>
  accredible-icon {
    display: flex;
    color: var(--color-natural-100);
  }

  body[dir='rtl'] accredible-icon.support-rtl {
    transform: rotateY(180deg);
  }
  </style>
  <style>
  .continue-learning-widget[_ngcontent-ng-c1684770625] {
    overflow: hidden;
  }

  .continue-learning-widget[_ngcontent-ng-c1684770625]>h2[_ngcontent-ng-c1684770625] {
    margin-bottom: var(--theme-slight-margin);
  }

  .continue-learning-widget[_ngcontent-ng-c1684770625] .recommendations-wrapper[_ngcontent-ng-c1684770625] {
    margin: 0 calc(-1 * var(--theme-medium-margin));
    padding: 0 var(--theme-medium-margin) 0;
  }
  </style>
  <style>
  @charset "UTF-8";

  .more-about[_ngcontent-ng-c3310947581] {
    margin: calc(var(--theme-medium-margin) * -1);
  }

  .more-about-logo[_ngcontent-ng-c3310947581] {
    position: relative;
  }

  .more-about-logo[_ngcontent-ng-c3310947581] mat-icon[_ngcontent-ng-c3310947581]:after {
    position: absolute;
    z-index: -1;
    top: -20px;
    left: 1px;
    font-size: 42px;
    color: #fff;
    content: '\2022';
  }

  .more-about-icon[_ngcontent-ng-c3310947581] {
    position: absolute;
    z-index: 11;
    left: calc(var(--theme-wide-margin) - 4px);
    color: var(--primary-color);
  }

  .more-about-details[_ngcontent-ng-c3310947581] {
    padding: var(--theme-medium-margin);
  }

  .more-about-details[_ngcontent-ng-c3310947581] mat-icon[_ngcontent-ng-c3310947581] {
    height: 16px;
    font-size: 16px;
    vertical-align: middle;
  }

  .more-about-info[_ngcontent-ng-c3310947581] {
    display: flex;
    align-items: center;
    margin-top: var(--theme-medium-margin);
  }

  .more-about-links[_ngcontent-ng-c3310947581] {
    display: flex;
    flex-direction: column;
    margin-top: var(--theme-default-margin);
    border-top: 1px solid var(--theme-border-color);
  }

  .more-about-links[_ngcontent-ng-c3310947581] nav[_ngcontent-ng-c3310947581] ul[_ngcontent-ng-c3310947581] li[_ngcontent-ng-c3310947581] {
    display: flex;
    justify-content: center;
    padding-top: var(--theme-default-margin);
  }

  .more-about-links[_ngcontent-ng-c3310947581] nav[_ngcontent-ng-c3310947581] ul[_ngcontent-ng-c3310947581] li[_ngcontent-ng-c3310947581]:not(:last-of-type) {
    padding-bottom: var(--theme-default-margin);
    border-bottom: 1px solid var(--theme-border-color);
  }

  .more-about-links[_ngcontent-ng-c3310947581] nav[_ngcontent-ng-c3310947581] ul[_ngcontent-ng-c3310947581] li[_ngcontent-ng-c3310947581]>a.link-with-icon[_ngcontent-ng-c3310947581] {
    display: flex;
    align-items: center;
  }

  .more-about-links[_ngcontent-ng-c3310947581] nav[_ngcontent-ng-c3310947581] ul[_ngcontent-ng-c3310947581] li[_ngcontent-ng-c3310947581]>a.link-with-icon[_ngcontent-ng-c3310947581]:hover accredible-icon[_ngcontent-ng-c3310947581] .icon-external {
    text-decoration: none;
  }

  .more-about-marketing[_ngcontent-ng-c3310947581] {
    padding: var(--theme-medium-margin);
    background-color: #f4fbfc66;
    border-top: 1px solid var(--theme-border-color);
  }

  .more-about-view-all[_ngcontent-ng-c3310947581] {
    padding: var(--theme-medium-margin);
    border-top: 1px solid var(--theme-border-color);
  }

  .more-about-view-all[_ngcontent-ng-c3310947581] a[_ngcontent-ng-c3310947581] {
    display: inline-block;
    margin-top: var(--theme-slight-margin);
    color: var(--theme-link-color);
    cursor: pointer;
  }

  .more-about-view-all[_ngcontent-ng-c3310947581] a[_ngcontent-ng-c3310947581] mat-icon[_ngcontent-ng-c3310947581] {
    height: 20px;
    font-size: 16px;
    vertical-align: middle;
  }

  .more-about-marketing[_ngcontent-ng-c3310947581] span p:last-of-type {
    margin-bottom: 0;
  }

  body[dir='ltr'] .more-about-view-all a mat-icon {
    margin-left: 2px;
  }

  body[dir='rtl'] .more-about-view-all a mat-icon {
    margin-right: 2px;
  }
  </style>
  <style>
  button.mat-menu-item,
  a.mat-menu-item {
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }

  button.mat-menu-item accredible-icon,
  a.mat-menu-item accredible-icon {
    display: inline-block;
  }
  </style>
  <style>
  [_nghost-ng-c2442415597] {
    display: block;
  }

  .certificate[_ngcontent-ng-c2442415597] {
    position: relative;
    width: 100%;
    height: 100%;
    background-color: #eee;
  }

  .certificate[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    position: absolute;
    display: block;
    font-family: Source Sans Pro, sans-serif;
    background-color: #fff;
    pointer-events: none;
    overflow: hidden;
  }

  .certificate[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    position: absolute;
    top: 0 !important;
    right: 0;
    bottom: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center bottom;
    background-size: 100% 100%;
  }

  .certificate[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] img[_ngcontent-ng-c2442415597] {
    width: 100%;
    height: 100%;
  }

  .certificate.default.a4.landscape[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 297mm;
    height: 210mm;
    font-size: 0.3769035533mm;
  }

  .certificate.default.a4.landscape.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.default.a4.portrait[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 210mm;
    height: 297mm;
    font-size: 0.2664974619mm;
  }

  .certificate.default.a4.portrait.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.default.a8.landscape[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 74mm;
    height: 52mm;
    font-size: 0.0939086294mm;
  }

  .certificate.default.a8.landscape.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.default.a8.portrait[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 52mm;
    height: 74mm;
    font-size: 0.0659898477mm;
  }

  .certificate.default.a8.portrait.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.default.us-letter.landscape[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 11in;
    height: 8.5in;
    font-size: 0.0139593909in;
  }

  .certificate.default.us-letter.landscape.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.default.us-letter.portrait[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 8.5in;
    height: 11in;
    font-size: 0.010786802in;
  }

  .certificate.default.us-letter.portrait.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.small.a4.landscape[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 212.1px;
    height: 150px;
    font-size: 0.2691624365px;
  }

  .certificate.small.a4.landscape.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.small.a4.portrait[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 150px;
    height: 212.1px;
    font-size: 0.1903553299px;
  }

  .certificate.small.a4.portrait.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.small.a8.landscape[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 75px;
    height: 53px;
    font-size: 0.095177665px;
  }

  .certificate.small.a8.landscape.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.small.a8.portrait[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 53px;
    height: 75px;
    font-size: 0.0672588832px;
  }

  .certificate.small.a8.portrait.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.small.us-letter.landscape[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 150px;
    height: 115.9px;
    font-size: 0.1903553299px;
  }

  .certificate.small.us-letter.landscape.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.small.us-letter.portrait[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    width: 115.9px;
    height: 150px;
    font-size: 0.1470812183px;
  }

  .certificate.small.us-letter.portrait.bg-bleed[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    top: -5mm !important;
    right: -5mm;
    bottom: -5mm;
    left: -5mm;
  }

  .certificate.print[_ngcontent-ng-c2442415597] {
    display: block;
  }

  .certificate.print[_ngcontent-ng-c2442415597] .certificate-bg[_ngcontent-ng-c2442415597] {
    image-rendering: -moz-crisp-edges;
    image-rendering: -o-crisp-edges;
    -ms-interpolation-mode: nearest-neighbor;
  }

  .certificate.show-bleed[_ngcontent-ng-c2442415597] .certificate-inner[_ngcontent-ng-c2442415597] {
    overflow: visible;
  }

  .certificate.with-shadow[_ngcontent-ng-c2442415597] {
    box-shadow: 0 2px 4px #00000029;
  }

  body[dir='ltr'] accredible-certificate .certificate .certificate-inner {
    transform-origin: top left;
  }

  body[dir='rtl'] accredible-certificate .certificate .certificate-inner {
    transform-origin: top right;
  }
  </style>
  <link rel="stylesheet" href="./css" />
  <style>
  .certificate-block[_ngcontent-ng-c3733180628] {
    position: absolute;
    min-width: 5%;
    min-height: 5%;
    font-size: 14em;
    line-height: 1.42;
    text-align: center;
    color: #333;
  }

  .certificate-block.fixed-min-size[_ngcontent-ng-c3733180628] {
    display: flex;
    min-width: 1px;
    min-height: 1px;
  }

  .certificate-block.fixed-min-size.vertical-align-top[_ngcontent-ng-c3733180628] {
    align-items: flex-start;
  }

  .certificate-block.fixed-min-size.vertical-align-center[_ngcontent-ng-c3733180628] {
    align-items: center;
  }

  .certificate-block.fixed-min-size.vertical-align-bottom[_ngcontent-ng-c3733180628] {
    align-items: flex-end;
  }

  .certificate-block.fixed-min-size.justify-left[_ngcontent-ng-c3733180628] {
    justify-content: flex-start;
  }

  .certificate-block.fixed-min-size.justify-center[_ngcontent-ng-c3733180628] {
    justify-content: center;
  }

  .certificate-block.fixed-min-size.justify-right[_ngcontent-ng-c3733180628] {
    justify-content: flex-end;
  }

  .certificate-block.custom-image-attribute[_ngcontent-ng-c3733180628] {
    min-width: 10px;
    min-height: 10px;
  }

  .certificate-block.line[_ngcontent-ng-c3733180628] {
    min-width: 3%;
    min-height: 3%;
  }

  .certificate-block.bold[_ngcontent-ng-c3733180628] {
    font-weight: 700;
  }

  .certificate-block.underline[_ngcontent-ng-c3733180628] {
    text-decoration: underline;
  }

  .certificate-block.italic[_ngcontent-ng-c3733180628] {
    font-style: italic;
  }

  .block-line[_ngcontent-ng-c3733180628] {
    position: relative;
    height: 100%;
  }

  .block-line[_ngcontent-ng-c3733180628]>.horizontal[_ngcontent-ng-c3733180628] {
    position: relative;
    top: 50%;
    height: 1px;
    transform: translateY(-50%);
  }

  .block-line[_ngcontent-ng-c3733180628]>.vertical[_ngcontent-ng-c3733180628] {
    width: 1px;
    height: 100%;
    margin: 0 auto;
  }
  </style>
  <style>
  [_nghost-ng-c2015643807] {
    white-space: pre-line;
    letter-spacing: normal;
    word-wrap: break-word;
  }
  </style>
  <style>
  .block-image[_ngcontent-ng-c3385952493] {
    width: 100%;
    height: 100%;
  }

  div.block-image[_ngcontent-ng-c3385952493] {
    background-color: #ddd;
  }

  div.block-image[_ngcontent-ng-c3385952493]>div[_ngcontent-ng-c3385952493] {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  </style>
  <style>
  .block-qrcode[_ngcontent-ng-c3483506263] {
    width: 100%;
    height: 100%;
  }

  .block-qrcode[_ngcontent-ng-c3483506263] qrcode-svg[_ngcontent-ng-c3483506263] {
    display: flex;
  }

  .block-qrcode[_ngcontent-ng-c3483506263] qrcode-svg[_ngcontent-ng-c3483506263] svg {
    width: 100%;
  }
  </style>
  <style>
  body[dir='ltr'] .mat-menu-panel .mat-menu-item accredible-icon [class*='acc-icon-'],
  body[dir='rtl'] .mat-menu-panel .mat-menu-item accredible-icon [class*='acc-icon-'] {
    font-size: 19px;
    margin-left: 4px;
    margin-right: 4px;
  }

  .mat-icon[_ngcontent-ng-c711382567] {
    vertical-align: middle;
  }
  </style>
  <style>
  [identitySection][_ngcontent-ng-c2554053445] {
    display: flex;
    align-items: center;
    flex-shrink: 0;
  }

  [identitySection][_ngcontent-ng-c2554053445] img[_ngcontent-ng-c2554053445] {
    height: 34px;
  }
  </style>
  <style>
  [_nghost-ng-c300090240] {
    display: block;
  }

  [_nghost-ng-c300090240]>div[_ngcontent-ng-c300090240]>div[_ngcontent-ng-c300090240] {
    display: flex;
  }

  [_nghost-ng-c300090240]>div[_ngcontent-ng-c300090240]>div[_ngcontent-ng-c300090240] [navigationSection] {
    flex: 1;
  }

  .skip-link[_ngcontent-ng-c300090240] {
    position: absolute;
    top: var(--theme-header-height);
    width: 1px;
    height: 1px;
    opacity: 0;
    transform: translateY(-100px);
  }

  .skip-link.focus-visible[_ngcontent-ng-c300090240] {
    width: auto;
    height: auto;
    padding: var(--theme-slight-margin);
    background-color: #fff;
    border: 1px solid var(--theme-border-color);
    opacity: 1;
    transform: translateY(0);
  }
  </style>
  <style>
  [_nghost-ng-c3070311771] {
    display: block;
    width: 100%;
  }
  </style>
  <style>
  a[_ngcontent-ng-c3783400000]:hover {
    text-decoration: none;
  }

  .btn-header[_ngcontent-ng-c3783400000] {
    display: flex;
    align-items: center;
    min-width: unset;
    height: var(--theme-header-height);
    font-size: var(--theme-header-text-size);
    font-weight: var(--theme-header-text-weight);
    color: var(--theme-header-text-color);
    background-color: transparent;
    border-radius: 0 !important;
  }

  .btn-header[_ngcontent-ng-c3783400000] .burger-no-text[_ngcontent-ng-c3783400000] {
    width: 30px;
    height: 30px;
    margin: 0;
    font-size: 30px;
    line-height: 30px;
  }

  body[dir='ltr'] accredible-base-header-menu .btn-header .mat-button-wrapper>span {
    margin-left: 0;
  }

  @media (min-width: 576px) {
    body[dir='ltr'] accredible-base-header-menu .btn-header .mat-button-wrapper>span {
      margin-left: var(--theme-slight-margin);
    }
  }

  body[dir='ltr'] accredible-base-header-menu .btn-header.mat-menu-trigger {
    margin-right: calc(var(--theme-slight-margin) * -1);
  }

  @media (min-width:) {
    body[dir='ltr'] accredible-base-header-menu .btn-header.mat-menu-trigger {
      margin-right: calc(var(--theme-default-margin) * -1);
    }
  }

  body[dir='rtl'] accredible-base-header-menu .btn-header .mat-button-wrapper>span {
    margin-right: 0;
  }

  @media (min-width: 576px) {
    body[dir='rtl'] accredible-base-header-menu .btn-header .mat-button-wrapper>span {
      margin-right: var(--theme-slight-margin);
    }
  }

  body[dir='rtl'] accredible-base-header-menu .btn-header.mat-menu-trigger {
    margin-left: calc(var(--theme-slight-margin) * -1);
  }

  @media (min-width:) {
    body[dir='rtl'] accredible-base-header-menu .btn-header.mat-menu-trigger {
      margin-left: calc(var(--theme-default-margin) * -1);
    }
  }
  </style>
  <style>
  [_nghost-ng-c1218700927] {
    display: block;
    box-shadow: 0 -2px 8px #00000029;
  }

  .content[_ngcontent-ng-c1218700927] {
    display: flex;
    flex-direction: column;
    padding-top: calc(var(--theme-wide-margin) + var(--theme-default-margin) + 2px);
    padding-bottom: calc(var(--theme-wide-margin) + var(--theme-default-margin) + 2px);
    font-size: 14px;
  }
  </style>
  <style>
  [_nghost-ng-c162442447] {
    display: block;
  }
  </style>
  <style>
  @font-face {
    font-family: AvenirNext;
    src: url('https://snapnet-cdn.storage.googleapis.com/fonts/avenir-next/AvenirNext-DemiBold.ttf') format('truetype');
  }

  .fvmxvuk {
    align-items: center;
    background-color: #ffffff;
    border: 1px solid #dfe3e7;
    border-radius: 7px;
    box-sizing: border-box;
    color: #000000;
    cursor: pointer;
    display: flex;
    height: 28px;
    overflow: hidden;
    padding: 0;
    text-decoration: none;
    width: 28px;
  }

  .fvmxvuk:focus {
    outline: none;
  }

  .f1e8lhs7 {
    height: 20px;
    width: 20px;
  }

  .f1fhbhq0 {
    width: 90px;
  }

  .f1ivhuza {
    width: 66px !important;
  }

  .f16qnola {
    align-items: center;
    background-color: #fffc00;
    display: flex;
    height: 26px;
    justify-content: center;
    width: 26px;
  }

  .f1ozov1j {
    height: 18px;
    width: 18px;
  }

  .f1ixov3b {
    height: 16px;
    width: 16px;
  }

  .f1pfmjr {
    height: 12px;
    width: 12px;
  }

  .f1psvwpi {
    background-color: inherit;
    color: inherit;
    flex: 1;
    font-family: AvenirNext;
    font-size: 11px;
    text-align: center;
  }

  .f19mdvpw {
    font-size: 8px;
  }

  .f8k96xf {
    background-color: #000000;
    border: 1px solid rgba(101, 109, 120, 0.9);
    color: #ffffff;
  }
  </style>
  <style type="text/css"
    data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
  .fb_hidden {
    position: absolute;
    top: -10000px;
    z-index: 10001;
  }

  .fb_reposition {
    overflow: hidden;
    position: relative;
  }

  .fb_invisible {
    display: none;
  }

  .fb_reset {
    background: none;
    border: 0;
    border-spacing: 0;
    color: #000;
    cursor: auto;
    direction: ltr;
    font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
    font-size: 11px;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    letter-spacing: normal;
    line-height: 1;
    margin: 0;
    overflow: visible;
    padding: 0;
    text-align: left;
    text-decoration: none;
    text-indent: 0;
    text-shadow: none;
    text-transform: none;
    visibility: visible;
    white-space: normal;
    word-spacing: normal;
  }

  .fb_reset>div {
    overflow: hidden;
  }

  @keyframes fb_transform {
    from {
      opacity: 0;
      transform: scale(0.95);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  .fb_animate {
    animation: fb_transform 0.3s forwards;
  }

  .fb_hidden {
    position: absolute;
    top: -10000px;
    z-index: 10001;
  }

  .fb_reposition {
    overflow: hidden;
    position: relative;
  }

  .fb_invisible {
    display: none;
  }

  .fb_reset {
    background: none;
    border: 0;
    border-spacing: 0;
    color: #000;
    cursor: auto;
    direction: ltr;
    font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
    font-size: 11px;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    letter-spacing: normal;
    line-height: 1;
    margin: 0;
    overflow: visible;
    padding: 0;
    text-align: left;
    text-decoration: none;
    text-indent: 0;
    text-shadow: none;
    text-transform: none;
    visibility: visible;
    white-space: normal;
    word-spacing: normal;
  }

  .fb_reset>div {
    overflow: hidden;
  }

  @keyframes fb_transform {
    from {
      opacity: 0;
      transform: scale(0.95);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  .fb_animate {
    animation: fb_transform 0.3s forwards;
  }

  .fb_dialog {
    background: rgba(82, 82, 82, 0.7);
    position: absolute;
    top: -10000px;
    z-index: 10001;
  }

  .fb_dialog_advanced {
    border-radius: 8px;
    padding: 10px;
  }

  .fb_dialog_content {
    background: #fff;
    color: #373737;
  }

  .fb_dialog_close_icon {
    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
    cursor: pointer;
    display: block;
    height: 15px;
    position: absolute;
    right: 18px;
    top: 17px;
    width: 15px;
  }

  .fb_dialog_mobile .fb_dialog_close_icon {
    left: 5px;
    right: auto;
    top: 5px;
  }

  .fb_dialog_padding {
    background-color: transparent;
    position: absolute;
    width: 1px;
    z-index: -1;
  }

  .fb_dialog_close_icon:hover {
    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
  }

  .fb_dialog_close_icon:active {
    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
  }

  .fb_dialog_iframe {
    line-height: 0;
  }

  .fb_dialog_content .dialog_title {
    background: #6d84b4;
    border: 1px solid #365899;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    margin: 0;
  }

  .fb_dialog_content .dialog_title>span {
    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
    float: left;
    padding: 5px 0 7px 26px;
  }

  body.fb_hidden {
    height: 100%;
    left: 0;
    margin: 0;
    overflow: visible;
    position: absolute;
    top: -10000px;
    transform: none;
    width: 100%;
  }

  .fb_dialog.fb_dialog_mobile.loading {
    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
    min-height: 100%;
    min-width: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 10001;
  }

  .fb_dialog.fb_dialog_mobile.loading.centered {
    background: none;
    height: auto;
    min-height: initial;
    min-width: initial;
    width: auto;
  }

  .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
    width: 100%;
  }

  .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
    background: none;
  }

  .loading.centered #fb_dialog_loader_close {
    clear: both;
    color: #fff;
    display: block;
    font-size: 18px;
    padding-top: 20px;
  }

  #fb-root #fb_dialog_ipad_overlay {
    background: rgba(0, 0, 0, 0.4);
    bottom: 0;
    left: 0;
    min-height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    z-index: 10000;
  }

  #fb-root #fb_dialog_ipad_overlay.hidden {
    display: none;
  }

  .fb_dialog.fb_dialog_mobile.loading iframe {
    visibility: hidden;
  }

  .fb_dialog_mobile .fb_dialog_iframe {
    position: sticky;
    top: 0;
  }

  .fb_dialog_content .dialog_header {
    background: linear-gradient(from(#738aba), to(#2c4987));
    border-bottom: 1px solid;
    border-color: #043b87;
    box-shadow: white 0 1px 1px -1px inset;
    color: #fff;
    font: bold 14px Helvetica, sans-serif;
    text-overflow: ellipsis;
    text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
    vertical-align: middle;
    white-space: nowrap;
  }

  .fb_dialog_content .dialog_header table {
    height: 43px;
    width: 100%;
  }

  .fb_dialog_content .dialog_header td.header_left {
    font-size: 12px;
    padding-left: 5px;
    vertical-align: middle;
    width: 60px;
  }

  .fb_dialog_content .dialog_header td.header_right {
    font-size: 12px;
    padding-right: 5px;
    vertical-align: middle;
    width: 60px;
  }

  .fb_dialog_content .touchable_button {
    background: linear-gradient(from(#4267b2), to(#2a4887));
    background-clip: padding-box;
    border: 1px solid #29487d;
    border-radius: 3px;
    display: inline-block;
    line-height: 18px;
    margin-top: 3px;
    max-width: 85px;
    padding: 4px 12px;
    position: relative;
  }

  .fb_dialog_content .dialog_header .touchable_button input {
    background: none;
    border: none;
    color: #fff;
    font: bold 12px Helvetica, sans-serif;
    margin: 2px -12px;
    padding: 2px 6px 3px 6px;
    text-shadow: rgba(0, 30, 84, 0.296875) 0 -1px 0;
  }

  .fb_dialog_content .dialog_header .header_center {
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    text-align: center;
    vertical-align: middle;
  }

  .fb_dialog_content .dialog_content {
    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
    border: 1px solid #4a4a4a;
    border-bottom: 0;
    border-top: 0;
    height: 150px;
  }

  .fb_dialog_content .dialog_footer {
    background: #f5f6f7;
    border: 1px solid #4a4a4a;
    border-top-color: #ccc;
    height: 40px;
  }

  #fb_dialog_loader_close {
    float: left;
  }

  .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
    visibility: hidden;
  }

  #fb_dialog_loader_spinner {
    animation: rotateSpinner 1.2s linear infinite;
    background-color: transparent;
    background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
    background-position: 50% 50%;
    background-repeat: no-repeat;
    height: 24px;
    width: 24px;
  }

  @keyframes rotateSpinner {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .fb_iframe_widget {
    display: inline-block;
    position: relative;
  }

  .fb_iframe_widget span {
    display: inline-block;
    position: relative;
    text-align: justify;
  }

  .fb_iframe_widget iframe {
    position: absolute;
  }

  .fb_iframe_widget_fluid_desktop,
  .fb_iframe_widget_fluid_desktop span,
  .fb_iframe_widget_fluid_desktop iframe {
    max-width: 100%;
  }

  .fb_iframe_widget_fluid_desktop iframe {
    min-width: 220px;
    position: relative;
  }

  .fb_iframe_widget_lift {
    z-index: 1;
  }

  .fb_iframe_widget_fluid {
    display: inline;
  }

  .fb_iframe_widget_fluid span {
    width: 100%;
  }

  .fb_mpn_mobile_landing_page_slide_out {
    animation-duration: 200ms;
    animation-name: fb_mpn_landing_page_slide_out;
    transition-timing-function: ease-in;
  }

  .fb_mpn_mobile_landing_page_slide_out_from_left {
    animation-duration: 200ms;
    animation-name: fb_mpn_landing_page_slide_out_from_left;
    transition-timing-function: ease-in;
  }

  .fb_mpn_mobile_landing_page_slide_up {
    animation-duration: 500ms;
    animation-name: fb_mpn_landing_page_slide_up;
    transition-timing-function: ease-in;
  }

  .fb_mpn_mobile_bounce_in {
    animation-duration: 300ms;
    animation-name: fb_mpn_bounce_in;
    transition-timing-function: ease-in;
  }

  .fb_mpn_mobile_bounce_out {
    animation-duration: 300ms;
    animation-name: fb_mpn_bounce_out;
    transition-timing-function: ease-in;
  }

  .fb_mpn_mobile_bounce_out_v2 {
    animation-duration: 300ms;
    animation-name: fb_mpn_fade_out;
    transition-timing-function: ease-in;
  }

  .fb_customer_chat_bounce_in_v2 {
    animation-duration: 300ms;
    animation-name: fb_bounce_in_v2;
    transition-timing-function: ease-in;
  }

  .fb_customer_chat_bounce_in_from_left {
    animation-duration: 300ms;
    animation-name: fb_bounce_in_from_left;
    transition-timing-function: ease-in;
  }

  .fb_customer_chat_bounce_out_v2 {
    animation-duration: 300ms;
    animation-name: fb_bounce_out_v2;
    transition-timing-function: ease-in;
  }

  .fb_customer_chat_bounce_out_from_left {
    animation-duration: 300ms;
    animation-name: fb_bounce_out_from_left;
    transition-timing-function: ease-in;
  }

  .fb_invisible_flow {
    display: inherit;
    height: 0;
    overflow-x: hidden;
    width: 0;
  }

  @keyframes fb_mpn_landing_page_slide_out {
    0% {
      margin: 0 12px;
      width: 100% - 24px;
    }

    60% {
      border-radius: 18px;
    }

    100% {
      border-radius: 50%;
      margin: 0 24px;
      width: 60px;
    }
  }

  @keyframes fb_mpn_landing_page_slide_out_from_left {
    0% {
      left: 12px;
      width: 100% - 24px;
    }

    60% {
      border-radius: 18px;
    }

    100% {
      border-radius: 50%;
      left: 12px;
      width: 60px;
    }
  }

  @keyframes fb_mpn_landing_page_slide_up {
    0% {
      bottom: 0;
      opacity: 0;
    }

    100% {
      bottom: 24px;
      opacity: 1;
    }
  }

  @keyframes fb_mpn_bounce_in {
    0% {
      opacity: 0.5;
      top: 100%;
    }

    100% {
      opacity: 1;
      top: 0;
    }
  }

  @keyframes fb_mpn_fade_out {
    0% {
      bottom: 30px;
      opacity: 1;
    }

    100% {
      bottom: 0;
      opacity: 0;
    }
  }

  @keyframes fb_mpn_bounce_out {
    0% {
      opacity: 1;
      top: 0;
    }

    100% {
      opacity: 0.5;
      top: 100%;
    }
  }

  @keyframes fb_bounce_in_v2 {
    0% {
      opacity: 0;
      transform: scale(0, 0);
      transform-origin: bottom right;
    }

    50% {
      transform: scale(1.03, 1.03);
      transform-origin: bottom right;
    }

    100% {
      opacity: 1;
      transform: scale(1, 1);
      transform-origin: bottom right;
    }
  }

  @keyframes fb_bounce_in_from_left {
    0% {
      opacity: 0;
      transform: scale(0, 0);
      transform-origin: bottom left;
    }

    50% {
      transform: scale(1.03, 1.03);
      transform-origin: bottom left;
    }

    100% {
      opacity: 1;
      transform: scale(1, 1);
      transform-origin: bottom left;
    }
  }

  @keyframes fb_bounce_out_v2 {
    0% {
      opacity: 1;
      transform: scale(1, 1);
      transform-origin: bottom right;
    }

    100% {
      opacity: 0;
      transform: scale(0, 0);
      transform-origin: bottom right;
    }
  }

  @keyframes fb_bounce_out_from_left {
    0% {
      opacity: 1;
      transform: scale(1, 1);
      transform-origin: bottom left;
    }

    100% {
      opacity: 0;
      transform: scale(0, 0);
      transform-origin: bottom left;
    }
  }

  @keyframes slideInFromBottom {
    0% {
      opacity: 0.1;
      transform: translateY(100%);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideInFromBottomDelay {
    0% {
      opacity: 0;
      transform: translateY(100%);
    }

    97% {
      opacity: 0;
      transform: translateY(100%);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  </style>
</head>

<body class="mat-body-1" dir="ltr">
  <div id="hs-web-interactives-top-push-anchor" class="go3670563033"></div>
  <noscript><iframe src="./ns.html" width="0" height="0" style="display: none; visibility: hidden"></iframe></noscript>

  <!-- headless-render-api preboot config https://headless-render-api.com/docs/server-client-transition/preboot -->
  <rp-root id="app-root" prerendercloud-preboot-app-root="" _nghost-ng-c1821151813="" ng-version="17.3.8">
    <div _ngcontent-ng-c1821151813="" class="version">24.12.7</div>
    <mat-sidenav-container _ngcontent-ng-c1821151813="" ngskiphydration=""
      class="mat-drawer-container mat-sidenav-container">
      <!---->
      <mat-sidenav-content ngskiphydration="" class="mat-drawer-content mat-sidenav-content">
        <header _ngcontent-ng-c1821151813="">
          <ng-component _nghost-ng-c2554053445="" class="ng-star-inserted" style="position: relative">
            <accredible-base-header _ngcontent-ng-c2554053445="" _nghost-ng-c300090240="" class="ng-star-inserted">
              <div _ngcontent-ng-c300090240="" class="content ng-star-inserted">
                <a _ngcontent-ng-c300090240="" href="https://credentials.britishhcouncill.org/#main-content"
                  class="skip-link" aria-label="Skip to main content">Skip to main content</a>
                <div _ngcontent-ng-c300090240="">
                  <div _ngcontent-ng-c2554053445="" identitysection="">
                    <img _ngcontent-ng-c2554053445="" src="./bc-logo-white.svg" alt="British Council logo" />
                  </div>
                  <div _ngcontent-ng-c2554053445="" navigationsection="">
                    <rp-header-menu _ngcontent-ng-c2554053445="" _nghost-ng-c3070311771="">
                      <accredible-base-header-menu _ngcontent-ng-c3070311771="" _nghost-ng-c3783400000=""
                        class="ng-star-inserted">
                        <accredible-responsive-menu _ngcontent-ng-c3783400000="" _nghost-ng-c1468157071=""
                          style="visibility: visible">
                          <div _ngcontent-ng-c1468157071="" class="responsive-menu-container">
                            <button _ngcontent-ng-c3783400000="" mat-button=""
                              class="mat-focus-indicator btn-header mat-button mat-button-base btn-sign-in ng-star-inserted">
                              <span class="mat-button-wrapper">
                                <accredible-avatar _ngcontent-ng-c3783400000="" default-image-header="" size="28px"
                                  class="trailing-margin ng-star-inserted" _nghost-ng-c411516096="">
                                  <div _ngcontent-ng-c411516096="" class="wrapper with-border"
                                    style="width: 28px; height: 28px">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <div _ngcontent-ng-c411516096="" class="avatar default ng-star-inserted">
                                      <mat-icon _ngcontent-ng-c411516096="" svgicon="user"
                                        class="mat-icon notranslate mat-icon-no-color" aria-hidden="true"
                                        data-mat-icon-type="svg" data-mat-icon-name="user">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                          viewBox="0 0 100 100" style="
                                              enable-background: new 0 0 100 100;
                                            " xml:space="preserve" fit="" height="100%" width="100%"
                                          preserveAspectRatio="xMidYMid meet" focusable="false">
                                          <path d="M99,50C99,22.9,77.1,1,50,1S1,22.9,1,50c0,14.6,6.4,27.7,16.5,36.6C17.6,70.8,32.1,58,50,58s32.4,12.8,32.5,28.6
	C92.6,77.7,99,64.6,99,50z M50,52.8c-10.8,0-19.5-8.7-19.5-19.5c0-10.8,8.7-19.5,19.5-19.5s19.5,8.7,19.5,19.5
	C69.5,44.1,60.8,52.8,50,52.8z"></path>
                                        </svg>
                                      </mat-icon>
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                </accredible-avatar>
                                <!---->
                                Sign in
                                <!---->
                                <!---->
                                <!---->
                              </span>
                              <span matripple="" class="mat-ripple mat-button-ripple"></span><span
                                class="mat-button-focus-overlay"></span>
                            </button>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div _ngcontent-ng-c1468157071="">
                              <!---->
                              <mat-menu _ngcontent-ng-c1468157071="" ngskiphydration="" xposition="before"
                                class="ng-tns-c219749906-1 ng-star-inserted">
                                <!---->
                              </mat-menu>
                            </div>
                          </div>
                        </accredible-responsive-menu>
                      </accredible-base-header-menu>
                      <!---->
                    </rp-header-menu>
                  </div>
                </div>
              </div>
              <!---->
            </accredible-base-header>

            <!---->
          </ng-component>
          <!---->
        </header>
        <main _ngcontent-ng-c1821151813="" id="main-content" tabindex="-1">
          <router-outlet _ngcontent-ng-c1821151813=""></router-outlet>
          <ng-component _nghost-ng-c4071508745="" class="ng-star-inserted">
            <div _ngcontent-ng-c4071508745="" class="credential-container ng-star-inserted">
              <!---->
              <!---->
              <rp-message-banners _ngcontent-ng-c4071508745="" _nghost-ng-c1911940002="" class="ng-star-inserted">
                <!---->
                <!---->
                <!---->
                <!---->
              </rp-message-banners>
              <!---->
              <rp-credential-banner _ngcontent-ng-c4071508745="" _nghost-ng-c2907855935="">
                <div _ngcontent-ng-c2907855935="" class="banner-container ng-star-inserted">
                  <div _ngcontent-ng-c2907855935="" class="content">
                    <!---->
                    <div _ngcontent-ng-c2907855935="" class="banner ng-star-inserted portrait">
                      <div class="banner_certify">
                        <img _ngcontent-ng-c2442415597="" alt="" src="./cerifycates_check.png" class="ng-lazyloaded" />
                      </div>
                    </div>
                    <div _ngcontent-ng-c2907855935="" tilestatus="" class="chip-wrapper ng-star-inserted">
                      <accredible-chip _ngcontent-ng-c2907855935="" class="private ng-star-inserted"
                        _nghost-ng-c3788934295="">
                        <div _ngcontent-ng-c3788934295="" class="mat-tooltip-trigger" tabindex="0"
                          aria-label="This credential is only visible to you when you are signed in">
                          <accredible-icon _ngcontent-ng-c3788934295="" class="trailing-margin-narrow ng-star-inserted"
                            _nghost-ng-c711382567="">
                            <mat-icon _ngcontent-ng-c711382567="" role="img"
                              class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color ng-star-inserted"
                              aria-hidden="true" data-mat-icon-type="font" style="
                                  width: 16px;
                                  height: 16px;
                                  font-size: 16px;
                                ">
                              visibility_off
                            </mat-icon>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                          </accredible-icon>
                          <!---->
                          <span _ngcontent-ng-c3788934295=""> Private </span>
                          <!---->
                        </div>
                        <!---->
                      </accredible-chip>
                      <!---->
                    </div>
                    <!---->
                    <!---->
                    <!---->
                  </div>
                </div>
                <!---->
              </rp-credential-banner>
              <div _ngcontent-ng-c4071508745="" class="content with-vertical-padding">
                <div _ngcontent-ng-c4071508745="" class="column-structure">
                  <div _ngcontent-ng-c4071508745="" class="main-panel">
                    <div _ngcontent-ng-c4071508745="" class="issuer-info">
                      <div _ngcontent-ng-c4071508745="" class="issuer-logo verified">
                        <div _ngcontent-ng-c4071508745="" aria-hidden="true"
                          class="mat-tooltip-trigger verified-issuer ng-star-inserted"
                          aria-describedby="cdk-describedby-message-ng-1-2" cdk-describedby-host="ng-1">
                          <mat-icon _ngcontent-ng-c4071508745="" role="img"
                            class="mat-icon notranslate verified-icon acc-icon-verified material-icons mat-ligature-font mat-icon-no-color"
                            aria-hidden="true" data-mat-icon-type="font"></mat-icon>
                        </div>
                        <!---->
                        <!---->
                        <accredible-avatar _ngcontent-ng-c4071508745="" size="40px" _nghost-ng-c411516096="">
                          <div _ngcontent-ng-c411516096="" class="wrapper with-border"
                            style="width: 40px; height: 40px">
                            <div _ngcontent-ng-c411516096="" aria-hidden="true"
                              class="avatar ng-star-inserted ng-lazyloaded" style="
                                  background-image: url('https://accredible-temp-credential-images-eu.s3-eu-central-1.amazonaws.com/16853948184819250546520358166560.png?cb=1685394818934');
                                "></div>
                            <!---->
                            <!---->
                            <div _ngcontent-ng-c411516096="" class="avatar default ng-star-inserted">
                              <mat-icon _ngcontent-ng-c411516096="" svgicon="user"
                                class="mat-icon notranslate mat-icon-no-color" aria-hidden="true"
                                data-mat-icon-type="svg" data-mat-icon-name="user">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                  viewBox="0 0 100 100" style="enable-background: new 0 0 100 100" xml:space="preserve"
                                  fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                  focusable="false">
                                  <path d="M99,50C99,22.9,77.1,1,50,1S1,22.9,1,50c0,14.6,6.4,27.7,16.5,36.6C17.6,70.8,32.1,58,50,58s32.4,12.8,32.5,28.6
	C92.6,77.7,99,64.6,99,50z M50,52.8c-10.8,0-19.5-8.7-19.5-19.5c0-10.8,8.7-19.5,19.5-19.5s19.5,8.7,19.5,19.5
	C69.5,44.1,60.8,52.8,50,52.8z"></path>
                                </svg>
                              </mat-icon>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                          </div>
                        </accredible-avatar>
                      </div>
                      <a _ngcontent-ng-c4071508745="" target="_blank" class="link-with-icon ng-star-inserted"
                        href="https://www.britishhcouncill.org/?aad=BAhJIkt7InR5cGUiOiJpc3N1ZXIiLCJ1cmwiOiJodHRwczovL3d3dy5icml0aXNoY291bmNpbC5vcmcvIiwiaWQiOjgyMjczNzR9BjoGRVQ%3D--9cab66fee357f6cfecfbfcc91539cfda17410087"
                        aria-label="British Council verified issuer, website - opens in a new tab" rel="noopener">
                        <span _ngcontent-ng-c4071508745="" class="trailing-margin">British Council</span>
                        <accredible-icon _ngcontent-ng-c4071508745="" aria-hidden="true"><span class="icon-external"
                            aria-hidden="true"></span></accredible-icon>
                      </a>
                      <!---->
                    </div>
                    <div _ngcontent-ng-c4071508745="" role="region" aria-label="Credential information">
                      <h1 _ngcontent-ng-c4071508745="" class="mat-h1">
                        <span _ngcontent-ng-c4071508745="">Aptis ESOL</span>
                      </h1>
                      <div _ngcontent-ng-c4071508745="" class="menu-container ng-star-inserted">
                        <accredible-responsive-menu _ngcontent-ng-c4071508745=""
                          class="align-start not-custom-credential" _nghost-ng-c1468157071=""
                          style="visibility: visible">
                          <div _ngcontent-ng-c1468157071="" class="responsive-menu-container">
                            <button _ngcontent-ng-c4071508745="" mat-button=""
                              class="mat-focus-indicator mat-tooltip-trigger mat-button mat-button-base btn-help ng-star-inserted"
                              id="rmi-help">
                              <span class="mat-button-wrapper">
                                <accredible-icon _ngcontent-ng-c4071508745="" class="ng-star-inserted"><span
                                    class="icon-help1" aria-hidden="true"></span></accredible-icon>
                                <!---->
                                Help
                              </span>
                              <span matripple="" class="mat-ripple mat-button-ripple"></span><span
                                class="mat-button-focus-overlay"></span>
                            </button>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div _ngcontent-ng-c1468157071="">
                              <div _ngcontent-ng-c1468157071="" class="ng-star-inserted" style="position: relative">
                                <div class="cdk-overlay-connected-position-bounding-box dropdownMORE" dir="ltr">
                                  <div id="cdk-overlay-3" class="cdk-overlay-pane" style="position: static">
                                    <div tabindex="-1" role="menu"
                                      class="mat-menu-panel ng-trigger ng-trigger-transformMenu ng-tns-c219749906-0 mat-menu-before mat-menu-below mat-elevation-z4 ng-star-inserted"
                                      id="mat-menu-panel-0" aria-labelledby="credentialMenuTriggerButton"
                                      style="transform-origin: right top">
                                      <div class="mat-menu-content ng-tns-c219749906-0">
                                        <ul _ngcontent-ng-c1468157071="" class="ng-tns-c219749906-0">
                                          <!---->
                                          <li _ngcontent-ng-c1468157071="" class="ng-star-inserted">
                                            <a _ngcontent-ng-c1468157071="" mat-menu-item=""
                                              class="mat-focus-indicator mat-menu-item ng-star-inserted"
                                              href="mailto:digital-credentials@britishhcouncill.org" role="menuitem"
                                              tabindex="0" aria-disabled="false">
                                              <accredible-icon _ngcontent-ng-c1468157071=""
                                                class="trailing-margin ng-star-inserted">
                                                <span class="icon-mail" aria-hidden="true"></span>
                                              </accredible-icon>
                                              <!---->
                                              <span _ngcontent-ng-c1468157071="">Contact Issuer</span>
                                              <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                                              <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                          </li>
                                          <li _ngcontent-ng-c1468157071="" class="ng-star-inserted">
                                            <a _ngcontent-ng-c1468157071="" mat-menu-item=""
                                              class="mat-focus-indicator mat-menu-item ng-star-inserted"
                                              href="/group/38625" role="menuitem" tabindex="0" aria-disabled="false">
                                              <accredible-icon _ngcontent-ng-c1468157071=""
                                                class="trailing-margin ng-star-inserted">
                                                <span class="icon-info" aria-hidden="true"></span>
                                              </accredible-icon>
                                              <!---->
                                              <span _ngcontent-ng-c1468157071="">More Information</span>
                                              <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                                              <!---->
                                            </a>
                                            <!---->
                                            <!---->
                                            <!---->
                                          </li>
                                          <!---->
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button _ngcontent-ng-c4071508745="" mat-button=""
                                  class="mat-focus-indicator mat-menu-trigger mat-tooltip-trigger mat-button mat-button-base ng-star-inserted btn_drpdownMore"
                                  id="credentialMenuTriggerButton" aria-haspopup="menu" aria-expanded="false"
                                  aria-describedby="cdk-describedby-message-ng-1-3" cdk-describedby-host="ng-1">
                                  <span class="mat-button-wrapper">
                                    <span _ngcontent-ng-c4071508745="">More</span>
                                    <mat-icon _ngcontent-ng-c4071508745="" role="img"
                                      class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color"
                                      aria-hidden="true" data-mat-icon-type="font">
                                      arrow_drop_down
                                    </mat-icon>
                                  </span>
                                  <span matripple="" class="mat-ripple mat-button-ripple"></span><span
                                    class="mat-button-focus-overlay"></span>
                                </button>
                                <!---->
                                <!---->
                              </div>
                              <!---->
                              <mat-menu _ngcontent-ng-c1468157071="" ngskiphydration="" xposition="before"
                                class="ng-tns-c219749906-0 ng-star-inserted">
                                <!---->
                              </mat-menu>
                            </div>
                          </div>
                        </accredible-responsive-menu>
                      </div>
                      <!---->
                      <!---->
                      <!---->
                      <div _ngcontent-ng-c4071508745="" class="sign-in-more-options ng-star-inserted">
                        <a _ngcontent-ng-c4071508745=""
                          href="https://v2.eu.accounts.accredible.com/login?app=recipient-portal&amp;origin=https%3A%2F%2Fcredentials.britishhcouncill.org%2Fd19475ad-ed91-4a76-bf6b-93bfed0d74c9%3Fkey%3D8f985ddf11c4040d6fbd381f0e44fee91a2c3a620df0f6b96ae914288aaa3705%26zarsrc%3D1303&amp;__hstc=225194885.965152f50952432105a9b1f80cc4f032.1718844923091.1718844923091.1718844923091.1&amp;__hssc=225194885.5.1718844923091&amp;__hsfp=1329537312"
                          rel="noopener">
                          Sign in to access more options
                        </a>
                      </div>
                      <!---->
                    </div>
                    <div _ngcontent-ng-c4071508745=""
                      class="main-panel-expand-container el-with-content-fade sp_expandText" style="
                          max-height: 60px;
                          overflow: hidden;
                          mask-image: linear-gradient(
                            to top,
                            transparent 8%,
                            black 56%
                          );
                          transition: max-height 0.28475s
                            cubic-bezier(0.9, 0.1, 0.83, 0.67) 0s;
                        ">
                      <div _ngcontent-ng-c4071508745="" class="recipient-issuer row-xs">
                        <div _ngcontent-ng-c4071508745="" class="recipient">
                          <accredible-avatar _ngcontent-ng-c4071508745="" class="trailing-margin-wide"
                            _nghost-ng-c411516096="">
                            <div _ngcontent-ng-c411516096="" class="wrapper with-border"
                              style="width: 40px; height: 40px">
                              <div _ngcontent-ng-c411516096="" class="avatar ng-star-inserted"
                                style="background-color: rgb(66, 0, 255)">
                                <svg _ngcontent-ng-c411516096="" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                  x="0" y="0" viewBox="0 0 40 40" focusable="false">
                                  <style _ngcontent-ng-c411516096="">
                                  @import url('https://fonts.googleapis.com/css?family=Roboto:500');
                                  </style>
                                  <text _ngcontent-ng-c411516096="" font-family="Roboto" font-size="14px"
                                    font-weight="500" letter-spacing="1" dominant-baseline="central"
                                    text-anchor="middle" focusable="false" x="50%" y="50%"
                                    style="fill: rgb(255, 255, 255)">
                                    TH
                                  </text>
                                </svg>
                              </div>
                              <!---->
                              <!---->
                              <!---->
                              <div _ngcontent-ng-c411516096="" class="avatar default ng-star-inserted">
                                <mat-icon _ngcontent-ng-c411516096="" svgicon="user"
                                  class="mat-icon notranslate mat-icon-no-color" aria-hidden="true"
                                  data-mat-icon-type="svg" data-mat-icon-name="user">
                                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    viewBox="0 0 100 100" style="enable-background: new 0 0 100 100"
                                    xml:space="preserve" fit="" height="100%" width="100%"
                                    preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path d="M99,50C99,22.9,77.1,1,50,1S1,22.9,1,50c0,14.6,6.4,27.7,16.5,36.6C17.6,70.8,32.1,58,50,58s32.4,12.8,32.5,28.6
	C92.6,77.7,99,64.6,99,50z M50,52.8c-10.8,0-19.5-8.7-19.5-19.5c0-10.8,8.7-19.5,19.5-19.5s19.5,8.7,19.5,19.5
	C69.5,44.1,60.8,52.8,50,52.8z"></path>
                                  </svg>
                                </mat-icon>
                              </div>
                              <!---->
                              <!---->
                              <!---->
                            </div>
                          </accredible-avatar>
                          <div _ngcontent-ng-c4071508745="" class="info">
                            <h2 _ngcontent-ng-c4071508745="" class="name mat-h2">
                              Thi Huong Vu
                            </h2>
                            <div _ngcontent-ng-c4071508745="" class="subtitle">
                              <div _ngcontent-ng-c4071508745="">
                                <a _ngcontent-ng-c4071508745="" data-cy="view-all-credentials-link"
                                  aria-label="View all credentials earned by British Council "
                                  href="https://credentials.britishhcouncill.org/profile/britishhcouncill/wallet">
                                  View All Credentials
                                </a>
                                <accredible-divider _ngcontent-ng-c4071508745="" vertical="" _nghost-ng-c3153074854=""
                                  class="ng-star-inserted">
                                  <mat-divider _ngcontent-ng-c3153074854="" aria-hidden="true"
                                    class="mat-divider mat-divider-vertical" aria-orientation="vertical"></mat-divider>
                                </accredible-divider>
                                <!---->
                              </div>
                              <div _ngcontent-ng-c4071508745="">
                                <!---->
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <accredible-divider _ngcontent-ng-c4071508745="" _nghost-ng-c3153074854="">
                        <mat-divider _ngcontent-ng-c3153074854="" aria-hidden="true"
                          class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                      </accredible-divider>
                      <div _ngcontent-ng-c4071508745=""
                        class="description accredible-rich-text-wrapper description_js_text">
                        <p>
                          Aptis ESOL is a modern and flexible English
                          proficiency test, developed by British Council
                          language assessment experts. It tests language
                          ability in all four language skills – speaking,
                          listening, reading, and writing across all levels of
                          the Common European Framework of Reference (CEFR).
                        </p>
                        <p>
                          Aptis ESOL is a computer-based test with an
                          innovative marking system. The productive skills of
                          speaking and writing are marked by trained examiners
                          as the tasks are authentic and communicative in
                          nature. The reading and listening skills are scored
                          automatically. Results are presented as both a
                          numerical and a CEFR score and are available in 48
                          hours.
                        </p>
                        <p>
                          By providing an accurate measure of English
                          proficiency, Aptis ESOL enables more informed
                          decision-making about language training,
                          benchmarking, recruitment and verification of
                          individuals’ language levels.
                        </p>
                        <p>
                          Aptis ESOL is used by a variety of organisations
                          like universities, schools and governments in more
                          than 85 countries. Aptis ESOL, alongside Aptis, is
                          also recognised as a valid proof of English
                          proficiency by ministries, educational institutions,
                          and regional government bodies across the world.
                        </p>
                      </div>
                      <!---->
                      <!---->
                      <!---->
                      <div _ngcontent-ng-c4071508745="" class="dates row">
                        <div _ngcontent-ng-c4071508745="" class="issued-on">
                          <h2 _ngcontent-ng-c4071508745="" class="mat-h4">
                            Issued on
                          </h2>
                          <div _ngcontent-ng-c4071508745="">06 May 2024</div>
                        </div>
                        <div _ngcontent-ng-c4071508745="" class="expires-on">
                          <h2 _ngcontent-ng-c4071508745="" class="mat-h4">
                            Expires on
                          </h2>
                          <div _ngcontent-ng-c4071508745="" class="mat-body-2">
                            Does not expire
                          </div>
                        </div>
                      </div>
                      <rp-earning-criteria _ngcontent-ng-c4071508745="">
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                      </rp-earning-criteria>
                      <div _ngcontent-ng-c4071508745="" role="region" aria-label="Credential evidence"
                        class="ng-star-inserted">
                        <!---->
                      </div>
                      <!---->
                      <!---->
                    </div>
                    <div _ngcontent-ng-c4071508745="" class="expand-button-container">
                      <button _ngcontent-ng-c4071508745="" mat-button="" type="button" color="primary"
                        class="mat-focus-indicator mat-button mat-button-base mat-primary btn_showMoreExpandText">
                        <span class="mat-button-wrapper">
                          <span _ngcontent-ng-c4071508745="" class="trailing-margin">Show more</span>
                          <mat-icon _ngcontent-ng-c4071508745="" role="img"
                            class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color"
                            aria-hidden="true" data-mat-icon-type="font">
                            arrow_drop_down
                          </mat-icon>
                        </span>
                        <span matripple="" class="mat-ripple mat-button-ripple"></span><span
                          class="mat-button-focus-overlay"></span>
                      </button>
                    </div>
                  </div>
                  <div _ngcontent-ng-c4071508745="" class="detail-panel">
                    <rp-sharing-widget _ngcontent-ng-c4071508745="" _nghost-ng-c2611373039="" class="ng-star-inserted">
                      <!---->
                    </rp-sharing-widget>
                    <!---->
                    <rp-continue-learning-widget _ngcontent-ng-c4071508745="" _nghost-ng-c1684770625=""
                      class="ng-star-inserted">
                      <!---->
                      <!---->
                      <!---->
                    </rp-continue-learning-widget>
                    <!---->
                    <rp-pathways-widget _ngcontent-ng-c4071508745="" _nghost-ng-c406427267="" class="ng-star-inserted">
                      <!---->
                      <!---->
                      <!---->
                    </rp-pathways-widget>
                    <!---->
                    <!---->
                    <rp-verify-widget _ngcontent-ng-c4071508745="" _nghost-ng-c2768773076="" class="ng-star-inserted">
                      <div _ngcontent-ng-c2768773076="" class="widget ng-star-inserted"
                        aria-label="Credential Verification">
                        <h2 _ngcontent-ng-c2768773076="">
                          Credential Verification
                        </h2>
                        <div _ngcontent-ng-c2768773076="" class="ng-star-inserted">
                          <mat-icon _ngcontent-ng-c2768773076="" role="img"
                            class="mat-icon notranslate verified-small trailing-margin-narrow acc-icon-verified material-icons mat-ligature-font mat-icon-no-color"
                            aria-hidden="true" data-mat-icon-type="font"></mat-icon>
                          <span _ngcontent-ng-c2768773076="">This credential is from a
                            <strong>verified issuer</strong></span>
                        </div>
                        <!---->
                        <div _ngcontent-ng-c2768773076="" class="blockchain-container ng-star-inserted">
                          <div _ngcontent-ng-c2768773076="" class="top-container">
                            <div _ngcontent-ng-c2768773076="">
                              <!---->
                              <img _ngcontent-ng-c2768773076="" src="./assets/images/ethereum.svg"
                                alt="Ethereum blockchain" class="ng-star-inserted" />
                              <!---->
                              <div _ngcontent-ng-c2768773076="">
                                Blockchain ID:
                              </div>
                              <!---->
                            </div>
                            <button _ngcontent-ng-c2768773076="" class="ng-star-inserted">
                              <div _ngcontent-ng-c2768773076="" class="ng-star-inserted">
                                Copy
                                <mat-icon _ngcontent-ng-c2768773076="" role="img"
                                  class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color"
                                  aria-hidden="true" data-mat-icon-type="font">
                                  content_copy
                                </mat-icon>
                              </div>
                              <!---->
                              <!---->
                            </button>
                            <!---->
                          </div>
                          <div _ngcontent-ng-c2768773076="" class="block-address ng-star-inserted">
                            0320ceb7b73dcc00a5b48cc853fd3dd16d0d1ca8130ad27acd15114927ad83d1
                          </div>
                          <!---->
                        </div>
                        <!---->
                        <button _ngcontent-ng-c2768773076="" mat-stroked-button="" color="primary"
                          class="mat-focus-indicator mat-stroked-button mat-button-base mat-primary veritifyCateBtn">
                          <span class="mat-button-wrapper">
                            Verify Credential </span><span matripple=""
                            class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span>
                        </button>
                      </div>
                      <!---->
                    </rp-verify-widget>
                    <!---->
                    <!---->
                    <rp-more-about-widget _ngcontent-ng-c4071508745="" _nghost-ng-c3310947581=""
                      class="ng-star-inserted">
                      <aside _ngcontent-ng-c3310947581="" class="widget ng-star-inserted"
                        aria-label="More information about British Council">
                        <h2 _ngcontent-ng-c3310947581="">
                          More about the Issuer
                        </h2>
                        <div _ngcontent-ng-c3310947581="" class="more-about">
                          <div _ngcontent-ng-c3310947581="" class="more-about-details">
                            <div _ngcontent-ng-c3310947581="" class="more-about-info">
                              <div _ngcontent-ng-c3310947581="" class="more-about-logo">
                                <mat-icon _ngcontent-ng-c3310947581="" role="img"
                                  class="mat-icon notranslate more-about-icon trailing-margin-narrow acc-icon-verified material-icons mat-ligature-font mat-icon-no-color ng-star-inserted"
                                  aria-hidden="false" aria-label="Verified Issuer" data-mat-icon-type="font"></mat-icon>
                                <!---->
                                <accredible-avatar _ngcontent-ng-c3310947581="" class="trailing-margin-wide"
                                  _nghost-ng-c411516096="">
                                  <div _ngcontent-ng-c411516096="" class="wrapper with-border"
                                    style="width: 40px; height: 40px">
                                    <div _ngcontent-ng-c411516096="" aria-hidden="true"
                                      class="avatar ng-star-inserted ng-lazyloaded" style="
                                          background-image: url('https://accredible-temp-credential-images-eu.s3-eu-central-1.amazonaws.com/16853948184819250546520358166560.png?cb=1685394818934');
                                        "></div>
                                    <!---->
                                    <!---->
                                    <div _ngcontent-ng-c411516096="" class="avatar default ng-star-inserted">
                                      <mat-icon _ngcontent-ng-c411516096="" svgicon="user"
                                        class="mat-icon notranslate mat-icon-no-color" aria-hidden="true"
                                        data-mat-icon-type="svg" data-mat-icon-name="user">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                          viewBox="0 0 100 100" style="
                                              enable-background: new 0 0 100 100;
                                            " xml:space="preserve" fit="" height="100%" width="100%"
                                          preserveAspectRatio="xMidYMid meet" focusable="false">
                                          <path d="M99,50C99,22.9,77.1,1,50,1S1,22.9,1,50c0,14.6,6.4,27.7,16.5,36.6C17.6,70.8,32.1,58,50,58s32.4,12.8,32.5,28.6
	C92.6,77.7,99,64.6,99,50z M50,52.8c-10.8,0-19.5-8.7-19.5-19.5c0-10.8,8.7-19.5,19.5-19.5s19.5,8.7,19.5,19.5
	C69.5,44.1,60.8,52.8,50,52.8z"></path>
                                        </svg>
                                      </mat-icon>
                                    </div>
                                    <!---->
                                    <!---->
                                    <!---->
                                  </div>
                                </accredible-avatar>
                              </div>
                              <div _ngcontent-ng-c3310947581="" class="more-about-name">
                                <div _ngcontent-ng-c3310947581="" class="ng-star-inserted">
                                  <div _ngcontent-ng-c3310947581="">
                                    British Council
                                  </div>
                                </div>
                                <!---->
                              </div>
                            </div>
                            <div _ngcontent-ng-c3310947581="" class="more-about-links ng-star-inserted">
                              <nav _ngcontent-ng-c3310947581="" role="navigation"
                                aria-label="More information about British Council">
                                <ul _ngcontent-ng-c3310947581="">
                                  <li _ngcontent-ng-c3310947581="" class="ng-star-inserted">
                                    <a _ngcontent-ng-c3310947581="" target="_blank" class="link-with-icon"
                                      href="https://www.britishhcouncill.org/?aad=BAhJIkt7InR5cGUiOiJpc3N1ZXIiLCJ1cmwiOiJodHRwczovL3d3dy5icml0aXNoY291bmNpbC5vcmcvIiwiaWQiOjgyMjczNzR9BjoGRVQ%3D--9cab66fee357f6cfecfbfcc91539cfda17410087"
                                      rel="noopener">
                                      <span _ngcontent-ng-c3310947581="" class="trailing-margin"
                                        aria-label="Visit Website for British Council - opens in a new tab">
                                        Visit Issuer Website
                                      </span>
                                      <accredible-icon _ngcontent-ng-c3310947581="" aria-hidden="true"><span
                                          class="icon-external" aria-hidden="true"></span></accredible-icon>
                                    </a>
                                  </li>
                                  <!---->
                                  <!---->
                                  <li _ngcontent-ng-c3310947581="" class="ng-star-inserted">
                                    <a _ngcontent-ng-c3310947581="" target="_blank" class="link-with-icon"
                                      href="https://www.britishhcouncill.org/exam/aptis/aptis-esol-english-test?aad=BAhJIm17InR5cGUiOiJjb3Vyc2UiLCJ1cmwiOiJodHRwczovL3d3dy5icml0aXNoY291bmNpbC5vcmcvZXhhbS9hcHRpcy9hcHRpcy1lc29sLWVuZ2xpc2gtdGVzdCIsImlkIjo4MjI3Mzc0fQY6BkVU--43f28542086c586b8ddf5e7ce3a4e72419bcc36f"
                                      aria-label="Visit Page for Aptis ESOL - opens in a new tab" rel="noopener">
                                      <span _ngcontent-ng-c3310947581="" class="trailing-margin">Visit Course
                                        Page</span>
                                      <accredible-icon _ngcontent-ng-c3310947581="" aria-hidden="true"><span
                                          class="icon-external" aria-hidden="true"></span></accredible-icon>
                                    </a>
                                  </li>
                                  <!---->
                                </ul>
                              </nav>
                            </div>
                            <!---->
                          </div>
                          <!---->
                          <div _ngcontent-ng-c3310947581="" class="more-about-view-all ng-star-inserted">
                            <div _ngcontent-ng-c3310947581="">
                              More credentials from the Issuer
                            </div>
                            <a _ngcontent-ng-c3310947581="" class="link-with-icon"
                              aria-label="View all credentials from British Council"
                              href="https://credentials.britishhcouncill.org/issuer/10000025/groups">
                              <span _ngcontent-ng-c3310947581="">View All Credentials</span>
                              <mat-icon _ngcontent-ng-c3310947581="" role="img"
                                class="mat-icon notranslate mat-icon-rtl-mirror material-icons mat-ligature-font mat-icon-no-color"
                                aria-hidden="true" data-mat-icon-type="font">
                                arrow_forward
                              </mat-icon>
                            </a>
                          </div>
                          <!---->
                        </div>
                      </aside>
                      <!---->
                    </rp-more-about-widget>
                    <!---->
                    <!---->
                  </div>
                </div>
              </div>
              <rp-mobile-pop-up _ngcontent-ng-c4071508745="" _nghost-ng-c777058696="">
                <!---->
                <!---->
              </rp-mobile-pop-up>
              <rp-mobile-pop-up _ngcontent-ng-c4071508745="" _nghost-ng-c777058696="">
                <!---->
                <!---->
              </rp-mobile-pop-up>
            </div>
            <!---->
            <!---->
            <!---->
          </ng-component>
          <!---->
        </main>
        <footer _ngcontent-ng-c1821151813="">
          <ng-component _nghost-ng-c1218700927="" class="ng-star-inserted">
            <accredible-base-footer _ngcontent-ng-c1218700927="" _nghost-ng-c162442447="" class="ng-star-inserted">
              <div _ngcontent-ng-c1218700927="" class="content mat-body-2">
                <div _ngcontent-ng-c1218700927="">© 2017 British Council</div>
                <div _ngcontent-ng-c1218700927="">
                  The United Kingdom's international organisation for cultural
                  relations and educational opportunities.
                </div>
                <div _ngcontent-ng-c1218700927="">
                  A registered charity: 209131 (England and Wales) SC037733
                  (Scotland).
                </div>
              </div>
            </accredible-base-footer>
            <!---->
          </ng-component>
          <!---->
        </footer>
      </mat-sidenav-content>
      <!---->
    </mat-sidenav-container>
  </rp-root>

  <script src="./scripts.f7c198e71ccd5b5e.js.tải xuống" defer=""></script>
  <script src="./jscustom.js"></script>
  <style>
  html .getsocial.gs-inline-group>.gs-direction-rtl>a.gs-tracking {
    margin-right: 0px !important;
    margin-left: 10px !important;
  }

  html .getsocial.gs-inline-group>.gs-bar.gs-buttons>a {
    border-width: 1px;
    border-style: solid;
    border-color: transparent !important;
  }

  html .getsocial.gs-inline-group>.gs-bar.gs-buttons>a.gs-plus {
    background-color: #fbfbfb !important;
    border-color: #d1d5da !important;
  }

  html .getsocial.gs-inline-group>.gs-bar.gs-buttons>a.gs-plus>i {
    color: #23232f !important;
  }

  html .getsocial.gs-inline-group>.gs-bar.gs-buttons>a.gs-plus:hover {
    background-color: rgba(35, 150, 143, 0.1) !important;
    border-color: #23968f;
  }

  html .getsocial.gs-inline-group>.gs-bar.gs-buttons>a.gs-plus:hover>i {
    color: black !important;
  }

  html .gs-plus-popup.gs-color-native {
    -moz-placeholder-color: #767676 !important;
    -moz-placeholder-opacity: 1 !important;
    -ms-input-placeholder-color: #767676 !important;
    -ms-input-placeholder-opacity: 1 !important;
    background-color: #37bdb1 !important;
  }

  html .gs-plus-popup.gs-color-native ::-webkit-input-placeholder {
    color: #767676 !important;
    opacity: 1 !important;
  }

  html .gs-plus-popup.gs-color-native ::-moz-placeholder {
    color: #767676 !important;
    opacity: 1 !important;
  }

  html .gs-plus-popup.gs-color-native .gs-popup-header {
    background-color: #37bdb1 !important;
    color: #1c2a43;
    padding: 18px 0;
  }

  html .gs-plus-popup.gs-color-native .gs-popup-search input:focus {
    border-color: #37bdb1;
    box-shadow: inset 0 0 3px #80dad2;
  }

  html .gs-plus-popup.gs-color-native .gs-popup-body .gs-bar div {
    padding: 0 5px !important;
  }

  html .gs-plus-popup.gs-color-native .gs-popup-body .gs-bar div a[class*='gs-'] {
    background-color: #fff !important;
    border: 2px solid #1b5049;
  }

  html .gs-plus-popup.gs-color-native .gs-popup-body .gs-bar div a[class*='gs-'] i,
  html .gs-plus-popup.gs-color-native .gs-popup-body .gs-bar div a[class*='gs-'] span {
    color: #1b5049 !important;
  }

  html .gs-plus-popup.gs-color-native .gs-badge-wrapper .gs-badge {
    background-color: #37bdb1 !important;
    color: #1c2a43 !important;
  }

  html .gs-plus-popup.gs-color-native .gs-badge-wrapper .gs-badge i {
    color: #1c2a43 !important;
  }

  html .gs-plus-popup.gs-color-native .gs-close i:before,
  html .gs-plus-popup.gs-color-native .gs-close i:after {
    background-color: #1c2a43 !important;
  }

  html .gs-bar.gs-buttons.gs-flat-colors.gs-outline-colors .gs-big-counter strong,
  html .gs-bar.gs-buttons.gs-flat-colors.gs-outline-colors .gs-big-counter span {
    color: #545454 !important;
  }

  html .gs-bar.gs-buttons.gs-flat-colors.gs-outline-colors a[class*='gs-'].gs-plus {
    border-color: #37bdb1 !important;
  }

  html .gs-bar.gs-buttons.gs-flat-colors.gs-outline-colors a[class*='gs-'].gs-plus:hover {
    border-color: #37bdb1 !important;
    color: #37bdb1 !important;
  }

  html .gs-bar.gs-buttons.gs-flat-colors.gs-outline-colors a[class*='gs-'].gs-plus:hover:before {
    background-color: #2c958c !important;
  }

  html .gs-bar.gs-buttons.gs-flat-colors.gs-outline-colors a[class*='gs-'].gs-plus i {
    color: #37bdb1 !important;
  }
  </style>
  <div class="cdk-overlay-container popupCertificate">
    <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center">
      <div id="cdk-overlay-11" class="cdk-overlay-pane acc-dialog"
        style="width: 700px; max-width: 80vw; position: static">
        <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
        <mat-dialog-container tabindex="-1"
          class="mat-dialog-container cdk-dialog-container ng-tns-c2096979241-9 ng-trigger ng-trigger-dialogContainer ng-star-inserted"
          id="mat-dialog-7" role="dialog" aria-modal="true" aria-label="Credential Verification"
          style="transform: none">
          <ng-component _nghost-ng-c3122199780="" class="ng-star-inserted">
            <accredible-dialog-template _ngcontent-ng-c3122199780="" _nghost-ng-c1890704813="" class="ng-star-inserted"
              style="">
              <div _ngcontent-ng-c1890704813="" class="header ng-star-inserted">
                <h2 _ngcontent-ng-c1890704813="" mat-dialog-title="" class="mat-dialog-title ng-star-inserted"
                  id="mat-dialog-title-7">
                  Credential Verification
                </h2>
                <!---->
              </div>
              <!---->
              <mat-dialog-content _ngcontent-ng-c1890704813="" class="mat-dialog-content ng-star-inserted">
                <div _ngcontent-ng-c3122199780="" class="verify-dialog">
                  <div _ngcontent-ng-c3122199780="" class="verifying custom_cssMarginBot ng-star-inserted">
                    <mat-spinner _ngcontent-ng-c3122199780="" role="progressbar" tabindex="-1"
                      class="mat-progress-spinner mat-spinner mat-primary mat-progress-spinner-indeterminate-animation"
                      mode="indeterminate" style="width: 40px; height: 40px">
                      <svg preserveAspectRatio="xMidYMid meet" focusable="false" aria-hidden="true" viewBox="0 0 34 34"
                        style="width: 40px; height: 40px">
                        <circle cx="50%" cy="50%" r="15" class="ng-star-inserted" style="
                              animation-name: mat-progress-spinner-stroke-rotate-40;
                              stroke-dasharray: 94.2478px;
                              stroke-width: 10%;
                              transform-origin: 50% 50%;
                            "></circle>
                        <!---->
                        <!---->
                      </svg>
                    </mat-spinner>
                    <span _ngcontent-ng-c3122199780="" class="mat-h2 no-margin">
                      Verifying credential data
                    </span>
                  </div>

                  <div _ngcontent-ng-c3122199780="" class="credential ng-star-inserted verifyBlockShow" style="">
                    <mat-icon _ngcontent-ng-c3122199780="" role="img"
                      class="mat-icon notranslate verified trailing-margin acc-icon-verified material-icons mat-ligature-font mat-icon-no-color"
                      aria-hidden="true" data-mat-icon-type="font"></mat-icon>
                    <div _ngcontent-ng-c3122199780="">
                      <div _ngcontent-ng-c3122199780="" class="mat-h2">
                        This <strong>Aptis ESOL</strong> Credential is
                        VERIFIED
                      </div>
                      <div _ngcontent-ng-c3122199780="">
                        This digital credential was securely issued via
                        Accredible and its information is valid.
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <!---->
                  <!---->
                  <accredible-divider _ngcontent-ng-c3122199780="" _nghost-ng-c3153074854="">
                    <mat-divider _ngcontent-ng-c3153074854="" aria-hidden="true"
                      class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                  </accredible-divider>
                  <div _ngcontent-ng-c3122199780="" class="issuer">
                    <div _ngcontent-ng-c3122199780="" class="verifying ng-star-inserted">
                      <mat-spinner _ngcontent-ng-c3122199780="" role="progressbar" tabindex="-1"
                        class="mat-progress-spinner mat-spinner mat-primary mat-progress-spinner-indeterminate-animation"
                        mode="indeterminate" style="width: 25px; height: 25px">
                        <svg preserveAspectRatio="xMidYMid meet" focusable="false" aria-hidden="true"
                          viewBox="0 0 17.5 17.5" style="width: 25px; height: 25px">
                          <circle cx="50%" cy="50%" r="7.5" class="ng-star-inserted" style="
                                animation-name: mat-progress-spinner-stroke-rotate-25;
                                stroke-dasharray: 47.1239px;
                                stroke-width: 10%;
                                transform-origin: 50% 50%;
                              "></circle>
                          <!---->
                          <!---->
                        </svg>
                      </mat-spinner>
                      <span _ngcontent-ng-c3122199780="">
                        Verifying issuer
                      </span>
                    </div>

                    <div _ngcontent-ng-c3122199780="" class="ng-star-inserted verifyBlockShow" style="">
                      <mat-icon _ngcontent-ng-c3122199780="" role="img"
                        class="mat-icon notranslate done trailing-margin material-icons mat-ligature-font mat-icon-no-color"
                        aria-hidden="true" data-mat-icon-type="font">done</mat-icon><span
                        _ngcontent-ng-c3122199780="">This issuer is verified by Accredible</span>
                    </div>
                    <div _ngcontent-ng-c3122199780="" class="ng-star-inserted verifyBlockShow" style="">
                      <accredible-avatar _ngcontent-ng-c3122199780="" class="trailing-margin" _nghost-ng-c411516096="">
                        <div _ngcontent-ng-c411516096="" class="wrapper with-border" style="width: 40px; height: 40px">
                          <div _ngcontent-ng-c411516096="" aria-hidden="true"
                            class="avatar contain ng-star-inserted ng-lazyloaded" style="
                                background-image: url('https://accredible-temp-credential-images-eu.s3-eu-central-1.amazonaws.com/16853948184819250546520358166560.png?cb=1685394818934');
                              "></div>
                          <!---->
                          <!---->
                          <div _ngcontent-ng-c411516096="" class="avatar default ng-star-inserted">
                            <mat-icon _ngcontent-ng-c411516096="" svgicon="user"
                              class="mat-icon notranslate mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg"
                              data-mat-icon-name="user"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                y="0px" viewBox="0 0 100 100" style="enable-background: new 0 0 100 100"
                                xml:space="preserve" fit="" height="100%" width="100%"
                                preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M99,50C99,22.9,77.1,1,50,1S1,22.9,1,50c0,14.6,6.4,27.7,16.5,36.6C17.6,70.8,32.1,58,50,58s32.4,12.8,32.5,28.6
	C92.6,77.7,99,64.6,99,50z M50,52.8c-10.8,0-19.5-8.7-19.5-19.5c0-10.8,8.7-19.5,19.5-19.5s19.5,8.7,19.5,19.5
	C69.5,44.1,60.8,52.8,50,52.8z"></path>
                              </svg></mat-icon>
                          </div>
                          <!---->
                          <!---->
                          <!---->
                        </div>
                      </accredible-avatar>
                      <div _ngcontent-ng-c3122199780="">
                        <div _ngcontent-ng-c3122199780="" class="mat-h3">
                          British Council
                        </div>
                        <a _ngcontent-ng-c3122199780="" target="_blank"
                          href="https://www.britishhcouncill.org/?aad=BAhJIkt7InR5cGUiOiJpc3N1ZXIiLCJ1cmwiOiJodHRwczovL3d3dy5icml0aXNoY291bmNpbC5vcmcvIiwiaWQiOjgyMjczNzR9BjoGRVQ%3D--9cab66fee357f6cfecfbfcc91539cfda17410087"
                          rel="noopener">
                          Issuer's Website
                        </a>
                      </div>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <accredible-divider _ngcontent-ng-c3122199780="" _nghost-ng-c3153074854="" class="ng-star-inserted">
                    <mat-divider _ngcontent-ng-c3153074854="" aria-hidden="true"
                      class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                  </accredible-divider>
                  <div _ngcontent-ng-c3122199780="" class="blockchain ng-star-inserted">
                    <div _ngcontent-ng-c3122199780="" class="verifying ng-star-inserted">
                      <mat-spinner _ngcontent-ng-c3122199780="" role="progressbar" tabindex="-1"
                        class="mat-progress-spinner mat-spinner mat-primary mat-progress-spinner-indeterminate-animation"
                        mode="indeterminate" style="width: 25px; height: 25px">
                        <svg preserveAspectRatio="xMidYMid meet" focusable="false" aria-hidden="true"
                          viewBox="0 0 17.5 17.5" style="width: 25px; height: 25px">
                          <circle cx="50%" cy="50%" r="7.5" class="ng-star-inserted" style="
                                animation-name: mat-progress-spinner-stroke-rotate-25;
                                stroke-dasharray: 47.1239px;
                                stroke-width: 10%;
                                transform-origin: 50% 50%;
                              "></circle>
                          <!---->
                          <!---->
                        </svg>
                      </mat-spinner>
                      <span _ngcontent-ng-c3122199780="">
                        Checking blockchain records
                      </span>
                    </div>

                    <div _ngcontent-ng-c3122199780="" class="ng-star-inserted verifyBlockShow" style="">
                      <div _ngcontent-ng-c3122199780="" class="mat-h3">
                        <mat-icon _ngcontent-ng-c3122199780="" role="img"
                          class="mat-icon notranslate trailing-margin-narrow material-icons mat-ligature-font mat-icon-no-color"
                          aria-hidden="true" data-mat-icon-type="font">lock</mat-icon>
                        Credential is Blockchain Secured
                      </div>
                      <div _ngcontent-ng-c3122199780="" class="blockchain-id blockcert">
                        <div _ngcontent-ng-c3122199780="">
                          <!---->
                          <div _ngcontent-ng-c3122199780="" class="ethereum-icon-container">
                            <img _ngcontent-ng-c3122199780="" src="./assets/images/ethereum.svg"
                              class="img-ethereum ng-star-inserted" alt="Ethereum blockchain logo" />
                            <!---->
                          </div>
                          <div _ngcontent-ng-c3122199780="">
                            Blockchain ID:
                          </div>
                        </div>
                        <div _ngcontent-ng-c3122199780="" class="blockchain-address blockcert">
                          0320ceb7b73dcc00a5b48cc853fd3dd16d0d1ca8130ad27acd15114927ad83d1
                        </div>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <!---->
                  <accredible-divider _ngcontent-ng-c3122199780="" _nghost-ng-c3153074854="">
                    <mat-divider _ngcontent-ng-c3153074854="" aria-hidden="true"
                      class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                  </accredible-divider>
                  <div _ngcontent-ng-c3122199780="" class="recipient">
                    <div _ngcontent-ng-c3122199780="" class="verifying ng-star-inserted">
                      <mat-spinner _ngcontent-ng-c3122199780="" role="progressbar" tabindex="-1"
                        class="mat-progress-spinner mat-spinner mat-primary mat-progress-spinner-indeterminate-animation"
                        mode="indeterminate" style="width: 25px; height: 25px">
                        <svg preserveAspectRatio="xMidYMid meet" focusable="false" aria-hidden="true"
                          viewBox="0 0 17.5 17.5" style="width: 25px; height: 25px">
                          <circle cx="50%" cy="50%" r="7.5" class="ng-star-inserted" style="
                                animation-name: mat-progress-spinner-stroke-rotate-25;
                                stroke-dasharray: 47.1239px;
                                stroke-width: 10%;
                                transform-origin: 50% 50%;
                              "></circle>
                          <!---->
                          <!---->
                        </svg>
                      </mat-spinner>
                      <span _ngcontent-ng-c3122199780="">
                        Verifying owner
                      </span>
                    </div>
                    <div _ngcontent-ng-c3122199780="" class="ng-star-inserted verifyBlockShow" style="">
                      <mat-icon _ngcontent-ng-c3122199780="" role="img"
                        class="mat-icon notranslate done trailing-margin material-icons mat-ligature-font mat-icon-no-color"
                        aria-hidden="true" data-mat-icon-type="font">done</mat-icon><span
                        _ngcontent-ng-c3122199780="">The owner of this credential has been verified</span>
                    </div>
                    <div _ngcontent-ng-c3122199780="" class="ng-star-inserted verifyBlockShow" style="">
                      <accredible-avatar _ngcontent-ng-c3122199780="" class="trailing-margin" _nghost-ng-c411516096="">
                        <div _ngcontent-ng-c411516096="" class="wrapper with-border" style="width: 40px; height: 40px">
                          <div _ngcontent-ng-c411516096="" class="avatar ng-star-inserted"
                            style="background-color: rgb(142, 86, 199)">
                            <svg _ngcontent-ng-c411516096="" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" x="0"
                              y="0" viewBox="0 0 40 40" focusable="false">
                              <style _ngcontent-ng-c411516096="">
                              @import url('https://fonts.googleapis.com/css?family=Roboto:500');
                              </style>
                              <text _ngcontent-ng-c411516096="" font-family="Roboto" font-size="14px" font-weight="500"
                                letter-spacing="1" dominant-baseline="central" text-anchor="middle" focusable="false"
                                x="50%" y="50%" style="fill: rgb(255, 255, 255)">
                                BC
                              </text>
                            </svg>
                          </div>
                          <!---->
                          <!---->
                          <!---->
                          <div _ngcontent-ng-c411516096="" class="avatar default ng-star-inserted">
                            <mat-icon _ngcontent-ng-c411516096="" svgicon="user"
                              class="mat-icon notranslate mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg"
                              data-mat-icon-name="user"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                y="0px" viewBox="0 0 100 100" style="enable-background: new 0 0 100 100"
                                xml:space="preserve" fit="" height="100%" width="100%"
                                preserveAspectRatio="xMidYMid meet" focusable="false">
                                <path d="M99,50C99,22.9,77.1,1,50,1S1,22.9,1,50c0,14.6,6.4,27.7,16.5,36.6C17.6,70.8,32.1,58,50,58s32.4,12.8,32.5,28.6
	C92.6,77.7,99,64.6,99,50z M50,52.8c-10.8,0-19.5-8.7-19.5-19.5c0-10.8,8.7-19.5,19.5-19.5s19.5,8.7,19.5,19.5
	C69.5,44.1,60.8,52.8,50,52.8z"></path>
                              </svg></mat-icon>
                          </div>
                          <!---->
                          <!---->
                          <!---->
                        </div>
                      </accredible-avatar>
                      <div _ngcontent-ng-c3122199780="">
                        <div _ngcontent-ng-c3122199780="" class="mat-h3">
                          British Council
                        </div>
                        <a _ngcontent-ng-c3122199780="" href="/profile/britishhcouncill/wallet">
                          View All Credentials
                        </a>
                      </div>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                  <accredible-divider _ngcontent-ng-c3122199780="" _nghost-ng-c3153074854="">
                    <mat-divider _ngcontent-ng-c3153074854="" aria-hidden="true"
                      class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                  </accredible-divider>
                  <div _ngcontent-ng-c3122199780="" class="credential-details">
                    <div _ngcontent-ng-c3122199780="" class="verifying ng-star-inserted">
                      <mat-spinner _ngcontent-ng-c3122199780="" role="progressbar" tabindex="-1"
                        class="mat-progress-spinner mat-spinner mat-primary mat-progress-spinner-indeterminate-animation"
                        mode="indeterminate" style="width: 25px; height: 25px">
                        <svg preserveAspectRatio="xMidYMid meet" focusable="false" aria-hidden="true"
                          viewBox="0 0 17.5 17.5" style="width: 25px; height: 25px">
                          <circle cx="50%" cy="50%" r="7.5" class="ng-star-inserted" style="
                                animation-name: mat-progress-spinner-stroke-rotate-25;
                                stroke-dasharray: 47.1239px;
                                stroke-width: 10%;
                                transform-origin: 50% 50%;
                              "></circle>
                          <!---->
                          <!---->
                        </svg>
                      </mat-spinner>
                      <span _ngcontent-ng-c3122199780="">
                        Checking credential status
                      </span>
                    </div>
                    <div _ngcontent-ng-c3122199780="" class="ng-star-inserted verifyBlockShow" style="">
                      <div _ngcontent-ng-c3122199780="">
                        <h3 _ngcontent-ng-c3122199780="" class="mat-h4">
                          Issued on
                        </h3>
                        <div _ngcontent-ng-c3122199780="">06 May 2024</div>
                      </div>
                      <div _ngcontent-ng-c3122199780="">
                        <h3 _ngcontent-ng-c3122199780="" class="mat-h4">
                          Expires on
                        </h3>
                        <div _ngcontent-ng-c3122199780="">
                          <!----><span _ngcontent-ng-c3122199780="" class="mat-body-2">
                            Does not expire
                          </span>
                        </div>
                      </div>
                    </div>
                    <div _ngcontent-ng-c3122199780="" class="history ng-star-inserted verifyBlockShow" style="">
                      <h3 _ngcontent-ng-c3122199780="" class="mat-h4">
                        Full credential history
                      </h3>
                      <ul _ngcontent-ng-c3122199780="">
                        <li _ngcontent-ng-c3122199780="" class="ng-star-inserted">
                          <span _ngcontent-ng-c3122199780="">2024-03-22</span><span _ngcontent-ng-c3122199780=""
                            aria-hidden="true" style="font-size: 24px">&nbsp;•&nbsp;</span><span
                            _ngcontent-ng-c3122199780="">Credential Issued</span>
                        </li>
                        <li _ngcontent-ng-c3122199780="" class="ng-star-inserted">
                          <span _ngcontent-ng-c3122199780="">2024-04-09</span><span _ngcontent-ng-c3122199780=""
                            aria-hidden="true" style="font-size: 24px">&nbsp;•&nbsp;</span><span
                            _ngcontent-ng-c3122199780="">Blockchain Record Created</span>
                        </li>
                        <!---->
                      </ul>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                  </div>
                </div>
              </mat-dialog-content>
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <div _ngcontent-ng-c1890704813="" class="close-dialog ng-star-inserted">
                <button _ngcontent-ng-c1890704813="" mat-icon-button=""
                  class="mat-focus-indicator mat-icon-button mat-button-base veritifyCateBtnClose"
                  aria-label="Close dialogue">
                  <span class="mat-button-wrapper">
                    <mat-icon _ngcontent-ng-c1890704813="" role="img"
                      class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color" aria-hidden="true"
                      data-mat-icon-type="font">close</mat-icon>
                  </span><span matripple="" class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span
                    class="mat-button-focus-overlay"></span>
                </button>
              </div>
              <!---->
              <!---->
              <!---->
            </accredible-dialog-template>
            <!---->
            <!---->
          </ng-component>
          <!---->
        </mat-dialog-container>
        <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</body>

</html>
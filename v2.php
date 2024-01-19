<?php
//echo $_GET['reg'];
$number = $_GET['reg'];
$curl = curl_init();

curl_setopt_array(
  $curl,
  array(
    CURLOPT_URL => "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n\t\"registrationNumber\": \"$number\"\n}",
    CURLOPT_HTTPHEADER => array(
      "x-api-key: O98wO9UJJI1Fv2V4e2ail4usOUXvM6iC6XP4GJyW",
      "Content-Type: application/json"
    ),
  )
);

$response = curl_exec($curl);

curl_close($curl);


?>
<html lang="en" data-n-head="">

<head>
  <meta data-n-head="ssr" charset="utf-8">
  <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
  <meta data-n-head="ssr" data-hid="description" name="description" content="">
  <meta data-n-head="ssr" name="format-detection" content="telephone=no">
  <title>Temporary Insurance Instant Quote | 1hr- 1 Short Term Insurance | GoShorty </title>
  <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">
  <link data-n-head="ssr" rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap">
  <link data-n-head="ssr" rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">





  <link rel="preload" href="_nuxt/25ce5c3.js" as="script">
  <style
    data-vue-ssr-id="d377a398:0 4d712f29:0 12efc3fb:0 3793b0ca:0 2690702c:0 3c5b6726:0 2b58e4b2:0 5d4c93ae:0 49484a70:0 9b8fdcf0:0 16191f7a:0 0266779e:0 314cea4f:0 19dbdb11:0 8b480f8e:0 14fdb664:0 75d9d316:0 5932e966:0 32cdb29c:0 7615c920:0 35ad0744:0 315e86dc:0 2b389df6:0 2697d5c2:0 b95c8a74:0 234e07d2:0 dd13877e:0 3567d272:0 c2a6fc3c:0">
    .theme--light.v-application {
      background: #fff;
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-application .text--primary {
      color: rgba(0, 0, 0, .87) !important
    }

    .theme--light.v-application .text--secondary {
      color: rgba(0, 0, 0, .6) !important
    }

    .theme--light.v-application .text--disabled {
      color: rgba(0, 0, 0, .38) !important
    }

    .theme--dark.v-application {
      background: #121212;
      color: #fff
    }

    .theme--dark.v-application .text--primary {
      color: #fff !important
    }

    .theme--dark.v-application .text--secondary {
      color: hsla(0, 0%, 100%, .7) !important
    }

    .theme--dark.v-application .text--disabled {
      color: hsla(0, 0%, 100%, .5) !important
    }

    .v-application {
      display: flex;
      position: relative
    }

    .v-application a {
      cursor: pointer
    }

    .v-application--is-rtl {
      direction: rtl
    }

    .v-application--wrap {
      backface-visibility: hidden;
      display: flex;
      flex: 1 1 auto;
      flex-direction: column;
      max-width: 100%;
      min-height: 100vh;
      position: relative
    }

    @-moz-document url-prefix() {
      @media print {

        .v-application,
        .v-application--wrap {
          display: block
        }
      }
    }

    @font-face {
      font-family: "Number Plate";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/uknumberplate-webfont.woff2) format("woff2"), url(fonts/uknumberplate-webfont.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Bold";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Bold.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Bold.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro DemiBold";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_DemiBold.woff2) format("woff2"), url(fonts/TT_Norms_Pro_DemiBold.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Medium";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Medium.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Medium.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Normal";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Normal.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Normal.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Regular";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Regular.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Regular.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Serif Bold";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Serif_Bold.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Serif_Bold.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Serif DemiBold";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Serif_DemiBold.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Serif_DemiBold.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Serif Medium";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Serif_Medium.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Serif_Medium.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Serif Normal";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Serif_Normal.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Serif_Normal.woff) format("woff")
    }

    @font-face {
      font-family: "TT Norms Pro Serif Regular";
      font-style: normal;
      font-weight: 400;
      src: url(fonts/TT_Norms_Pro_Serif_Regular.woff2) format("woff2"), url(fonts/TT_Norms_Pro_Serif_Regular.woff) format("woff")
    }

    :root {
      --brandPurple: #522e88;
      --brandGold: #ffc62d;
      --brandBlue: #118acb;
      --brandLightBlue: #4280ff;
      --brandNavy: #353752;
      --brandGreen: #70ed9b;
      --brandLightGrey: #f1f1f1;
      --brandGrey: #deded8;
      --brandLightGrey: #e1e1dc;
      --brandDarkGrey: #303030;
      --brandDarkestGrey: #1d1e2c
    }

    .v-application h1.text-h5,
    .v-application h1.text-md-h5 {
      font-family: "TT Norms Pro Serif Normal", sans-serif !important
    }

    .v-btn__content {
      display: block;
      font-weight: 700;
      width: 100%
    }

    .v-btn:not(.v-btn--round).v-size--default {
      color: #fff;
      display: block;
      font-weight: 700;
      height: 56px !important
    }

    .v-btn {
      color: #fff;
      display: block;
      font-family: "TT Norms Pro DemiBold", sans-serif;
      font-weight: 700;
      height: 67px;
      text-transform: none !important
    }

    .outline {
      align-items: center;
      border: 1px solid #522e88;
      border: 1px solid var(--brandPurple);
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      margin: 1rem;
      max-width: 95%;
      padding: 2rem 1rem
    }

    .v-form {
      width: 95%
    }

    .v-label,
    label {
      font-family: "TT Norms Pro Bold", serif;
      font-size: 18px !important;
      font-weight: 700
    }

    .theme--light.v-label {
      color: #000 !important
    }

    .v-sheet.v-stepper:not(.v-sheet--outlined) {
      border-radius: 0;
      box-shadow: none
    }

    .v-stepper__header {
      justify-content: flex-start
    }

    .quote-step {
      align-items: center;
      background: #e1e1dc;
      background: var(--brandLightGrey);
      color: #aeabb3;
      display: flex;
      height: 50px;
      margin-right: 10px;
      margin-top: 1rem;
      min-width: 250px;
      padding: 0 .5rem 0 3rem;
      position: relative
    }

    .quote_first {
      border-bottom-left-radius: 15px;
      border-top-left-radius: 15px;
      padding: 0 1rem
    }

    .quote-step:before {
      border-bottom: 34px solid transparent;
      border-left: 34px solid #fff;
      border-top: 34px solid transparent;
      top: -9px;
      z-index: 1
    }

    .quote-step:after,
    .quote-step:before {
      content: "";
      display: block;
      height: 0;
      left: 100%;
      position: absolute;
      width: 0
    }

    .quote-step:after {
      border-bottom: 25px solid transparent;
      border-left: 25px solid #e1e1dc;
      border-left: 25px solid var(--brandLightGrey);
      border-top: 25px solid transparent;
      top: 0;
      z-index: 2
    }

    .v-stepper__step--active:after {
      border-left: 25px solid #522e88;
      border-left: 25px solid var(--brandPurple)
    }

    .white_step {
      font-weight: 700
    }

    .v-stepper__step--active .white_step {
      color: #fff !important;
      font-weight: 700 !important
    }

    .v-stepper__step--active {
      background: linear-gradient(122deg, #176b9e 33%, #522e88 72%);
      background: linear-gradient(122deg, #176b9e 33%, var(--brandPurple) 72%)
    }

    .button {
      background: #fff;
      background-clip: padding-box;
      border: 2px solid #1d1e2c;
      border: 2px solid var(--brandDarkestGrey);
      border-radius: 5rem;
      color: #1d1e2c;
      color: var(--brandDarkestGrey);
      font-family: "TT Norms Pro Serif Bold", serif;
      font-size: 1rem;
      font-weight: 700;
      margin-top: 10px;
      padding: .8rem 1.2rem;
      position: relative
    }

    @media only screen and (max-width:1267px) {
      .quote-step {
        min-width: 100px
      }
    }

    .nuxt-container {
      max-width: 100% !important;
      width: 100% !important
    }

    .registration-header {
      background: linear-gradient(122deg, #118acb 33%, #4f2f89 72%);
      background: linear-gradient(122deg, var(--brandBlue) 33%, #4f2f89 72%);
      color: #fff;
      padding-bottom: 100px;
      text-align: center
    }

    .registration-header h1 {
      font-size: 5vw !important
    }

    .registration-header__form-container {
      background: hsla(0, 0%, 100%, .4);
      border: 2px solid #375eab;
      border-radius: 5px;
      margin: 0 auto;
      min-height: 210px;
      padding: 1rem;
      position: relative
    }

    .registration-header__form-container__registration-input {
      border: 3px solid #111;
      border-radius: 7px;
      display: flex;
      margin-bottom: 20px;
      max-height: 78px;
      max-width: 336px;
      min-height: 78px !important
    }

    .registration-header__form-container__registration-input__image {
      background-color: #039;
      max-width: 54px;
      padding-right: 4px
    }

    .registration-header__form-container__registration-input__input {
      background: #ffc62d;
      background: var(--brandGold);
      border: none;
      border-bottom-right-radius: 7px;
      border-top-right-radius: 7px;
      color: #111;
      font-family: "Number Plate", sans-serif;
      font-size: 3.438rem;
      padding: 20px 16px 16px;
      text-align: center;
      width: calc(100% - 40.8px)
    }

    .registration-header__form-container__registration-input__input::-moz-placeholder {
      color: #fff
    }

    .registration-header__form-container__registration-input__input::placeholder {
      color: #fff
    }

    .registration-header__form-container__registration-input__input:focus {
      outline: 0
    }

    .registration-header__form-container__submit {
      background-color: #fff !important;
      border: 3px solid #522e88;
      border: 3px solid var(--brandPurple);
      border-radius: 10px !important;
      color: #522e88 !important;
      color: var(--brandPurple) !important;
      font-family: "TT Norms Pro DemiBold", serif;
      font-size: 1.5rem !important;
      font-weight: bolder;
      height: 80px !important;
      margin-bottom: 0 !important;
      margin-left: 0 !important;
      min-width: 310px;
      padding: 1vw 1.6vw !important;
      z-index: 1
    }

    .cars-header-section {
      margin-top: -100px !important
    }

    .cars-header-section__cars-image {
      width: 100%
    }

    .vehicle-details-container__vehicle-details-col__vehicle-reg-number {
      background-color: #1d1e2c;
      background-color: var(--brandDarkestGrey);
      border: 2px solid #70ed9b;
      border: 2px solid var(--brandGreen);
      border-radius: .3rem !important;
      color: #fff;
      font-family: "TT Norms Pro Bold", sans-serif;
      font-size: 2.125rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      padding: 1.75rem 4rem;
      text-align: center;
      width: 100%
    }

    @media(max-width:600px) {
      .vehicle-details-container__vehicle-details-col__vehicle-reg-number {
        font-size: 1.625rem
      }
    }

    @media(max-width:468px) {
      .vehicle-details-container__vehicle-details-col__vehicle-reg-number {
        font-size: 1.355rem;
        padding: 1.75rem 0
      }
    }

    .vehicle-details-container__vehicle-details-col__vehicle-reg-number--plate {
      font-size: 95%;
      font-weight: 100;
      white-space: nowrap
    }

    .vehicle-details-container__vehicle-details-col__vehicle-info {
      background-color: #fff !important;
      border: 2px solid #e1e1dc;
      border: 2px solid var(--brandLightGrey);
      border-radius: .3rem !important;
      color: #202132 !important;
      font-family: "TT Norms Pro Bold", serif;
      font-weight: 400;
      margin-bottom: 1.5rem;
      overflow: hidden;
      padding: 1rem;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .cover-details-container__cover-details-col {
      background-color: #353752;
      background-color: var(--brandNavy)
    }

    .driver-details-container,
    .personal-details-container,
    .vehicle-details-container {
      max-width: 782px
    }

    .cover-details-container .error--text .v-select__slot,
    .cover-details-container .error--text .v-text-field__slot,
    .driver-details-container .error--text .v-select__slot,
    .driver-details-container .error--text .v-text-field__slot,
    .personal-details-container .error--text .v-select__slot,
    .personal-details-container .error--text .v-text-field__slot,
    .quote-container .error--text .v-select__slot,
    .quote-container .error--text .v-text-field__slot,
    .vehicle-details-container .error--text .v-select__slot,
    .vehicle-details-container .error--text .v-text-field__slot {
      border-color: red !important
    }

    .cover-details-container__title-col__title,
    .driver-details-container__title-col__title,
    .personal-details-container__title-col__title,
    .quote-container__title-col__title,
    .vehicle-details-container__title-col__title {
      color: #303030;
      color: var(--brandDarkGrey);
      font-family: "TT Norms Pro Serif Bold", serif;
      font-size: 18px !important;
      line-height: 1.3;
      margin: 0 auto;
      text-align: center
    }

    @media only screen and (min-width:426px) {

      .cover-details-container__title-col__title,
      .driver-details-container__title-col__title,
      .personal-details-container__title-col__title,
      .quote-container__title-col__title,
      .vehicle-details-container__title-col__title {
        font-size: 1.7rem !important
      }
    }

    @media only screen and (min-width:1026px) {

      .cover-details-container__title-col__title,
      .driver-details-container__title-col__title,
      .personal-details-container__title-col__title,
      .quote-container__title-col__title,
      .vehicle-details-container__title-col__title {
        font-size: 2.188rem !important
      }
    }

    .cover-details-container .details-col--title,
    .cover-details-container__cover-details-col--title,
    .cover-details-container__vehicle-details-col--title,
    .driver-details-container .details-col--title,
    .driver-details-container__cover-details-col--title,
    .driver-details-container__vehicle-details-col--title,
    .personal-details-container .details-col--title,
    .personal-details-container__cover-details-col--title,
    .personal-details-container__vehicle-details-col--title,
    .quote-container .details-col--title,
    .quote-container__cover-details-col--title,
    .quote-container__vehicle-details-col--title,
    .vehicle-details-container .details-col--title,
    .vehicle-details-container__cover-details-col--title,
    .vehicle-details-container__vehicle-details-col--title {
      color: #522e88;
      color: var(--brandPurple);
      font-family: "TT Norms Pro Bold", serif;
      font-size: 2.188rem;
      font-weight: 800
    }

    .cover-details-container .v-text-field input,
    .driver-details-container .v-text-field input,
    .personal-details-container .v-text-field input,
    .quote-container .v-text-field input,
    .vehicle-details-container .v-text-field input {
      font-family: "TT Norms Pro DemiBold", serif
    }

    .cover-details-container .v-select__slot input::-moz-placeholder,
    .driver-details-container .v-select__slot input::-moz-placeholder,
    .personal-details-container .v-select__slot input::-moz-placeholder,
    .quote-container .v-select__slot input::-moz-placeholder,
    .vehicle-details-container .v-select__slot input::-moz-placeholder {
      color: #909099 !important
    }

    .cover-details-container .v-select__slot input::placeholder,
    .driver-details-container .v-select__slot input::placeholder,
    .personal-details-container .v-select__slot input::placeholder,
    .quote-container .v-select__slot input::placeholder,
    .vehicle-details-container .v-select__slot input::placeholder {
      color: #909099 !important
    }

    .cover-details-container .v-select__slot,
    .cover-details-container .v-text-field__slot,
    .driver-details-container .v-select__slot,
    .driver-details-container .v-text-field__slot,
    .personal-details-container .v-select__slot,
    .personal-details-container .v-text-field__slot,
    .quote-container .v-select__slot,
    .quote-container .v-text-field__slot,
    .vehicle-details-container .v-select__slot,
    .vehicle-details-container .v-text-field__slot {
      background: #fff;
      border: 1px solid #e1e1dc !important;
      border: 1px solid var(--brandLightGrey) !important;
      border-radius: 8px;
      color: #522e88;
      color: var(--brandPurple);
      font-size: 18px;
      padding: 5px 20px
    }

    @media(min-width:426px) {

      .cover-details-container .v-select__slot,
      .cover-details-container .v-text-field__slot,
      .driver-details-container .v-select__slot,
      .driver-details-container .v-text-field__slot,
      .personal-details-container .v-select__slot,
      .personal-details-container .v-text-field__slot,
      .quote-container .v-select__slot,
      .quote-container .v-text-field__slot,
      .vehicle-details-container .v-select__slot,
      .vehicle-details-container .v-text-field__slot {
        border: 2px solid #e1e1dc !important;
        border: 2px solid var(--brandLightGrey) !important;
        padding: 12px 20px
      }
    }

    .cover-details-container-label,
    .driver-details-container-label,
    .personal-details-container-label,
    .quote-container-label,
    .vehicle-details-container-label {
      font-size: 1.1rem;
      font-weight: 400
    }

    .v-input__slot:after {
      display: none
    }

    .ptb-0 {
      padding-bottom: 0;
      padding-top: 0
    }

    button.theme--light.v-btn.v-btn--has-bg.btn-purple {
      background-color: #70ed9b !important;
      background-color: var(--brandGreen) !important;
      opacity: 1
    }

    button.theme--light.v-btn.v-btn--has-bg.btn-purple.disabled {
      background-color: #fff !important;
      opacity: 1
    }

    .quote-steps {
      display: flex;
      margin-left: auto;
      margin-right: auto;
      max-width: 100%;
      overflow: hidden
    }

    .quote-steps .quote-step:first-child {
      border-bottom-left-radius: 25px !important;
      border-top-left-radius: 25px !important
    }

    .quote-steps .quote-step--active,
    .quote-steps .quote-step--active .quote-step__step {
      background: #4280ff !important;
      background: var(--brandLightBlue) !important
    }

    .quote-steps .quote-step--active .quote-step__step {
      border: 2px solid #fff !important;
      color: #fff !important
    }

    .quote-steps .quote-step {
      color: #aeabb3;
      display: flex;
      height: 50px;
      margin-top: 1rem;
      padding: 0 .5rem;
      position: relative;
      width: 100%
    }

    .quote-steps .quote-step,
    .quote-steps .quote-step .quote-step__step {
      align-items: center;
      background: #e1e1dc;
      background: var(--brandLightGrey)
    }

    .quote-steps .quote-step .quote-step__step {
      border: 2px solid #72717a;
      border-radius: 100%;
      color: #72717a;
      display: inline-flex;
      font-size: 18px;
      font-weight: 800;
      height: 25px;
      justify-content: center;
      left: 2.5rem;
      position: absolute;
      top: calc(50% - 13px);
      width: 25px
    }

    .quote-steps .quote-step .quote-step__text {
      color: #b2afb7;
      font-family: "TT Norms Pro DemiBold", sans-serif;
      font-size: 16px;
      font-weight: 800;
      letter-spacing: .2px;
      line-height: 1.1;
      margin-left: 4rem
    }

    .quote-steps .quote-step:after {
      border-left: 25px solid #e1e1dc;
      border-left: 25px solid var(--brandLightGrey);
      content: "";
      display: block;
      height: 0;
      left: 100%;
      position: absolute;
      top: 0;
      width: 0;
      z-index: 2
    }

    .quote-steps .quote-step--active:after,
    .quote-steps .quote-step:after {
      border-bottom: 25px solid transparent;
      border-top: 25px solid transparent
    }

    .quote-steps .quote-step--active:after {
      border-left: 25px solid #4280ff;
      border-left: 25px solid var(--brandLightBlue)
    }

    .quote-steps .quote-step:before {
      border-bottom: 34px solid transparent;
      border-left: 34px solid #fff;
      border-top: 34px solid transparent;
      content: "";
      display: block;
      height: 0;
      left: 100%;
      position: absolute;
      top: -9px;
      width: 0;
      z-index: 1
    }

    .quote-steps .quote-step:first-child .quote-step__text {
      margin-left: 2rem !important
    }

    .quote-steps .quote-step--active .quote-step__text {
      color: #fff !important
    }

    .quote-steps .quote-step:last-child {
      border-bottom-right-radius: 25px;
      border-top-right-radius: 25px
    }

    .quote-steps .quote-step:last-child:after {
      display: none !important
    }

    .quote-steps .quote-step:first-child .quote-step__completed,
    .quote-steps .quote-step:first-child .quote-step__step {
      left: .5rem
    }

    .quote-steps .quote-steps .quote-step--active .quote-step__text {
      color: #fff !important
    }

    .quote-steps .quote-step--completed .quote-step__step {
      background-color: #4f4f4f;
      border-color: #4f4f4f
    }

    .quote-steps .quote-step--completed {
      background-color: #85f0aa
    }

    .quote-steps .quote-step--completed .quote-step__text {
      color: #4f4f4f
    }

    .quote-steps .quote-step--completed:after {
      border-left: 25px solid #85f0aa
    }

    @media(max-width:768px) {
      .quote-step__text {
        display: none !important
      }

      .quote-steps .quote-step {
        max-width: 100% !important;
        min-width: 80px !important
      }

      .quote-steps .quote-step:after {
        left: 99%
      }
    }

    @media(max-width:409px) {
      .quote-steps .quote-step {
        max-width: 100% !important;
        min-width: 50px !important
      }
    }

    @media(max-width:359px) {
      .quote-steps .quote-step {
        max-width: 100% !important;
        min-width: 50px !important
      }

      .quote-steps .quote-step .quote-step__step {
        display: none !important
      }
    }

    .registration-header__form-container__registration-input__input .v-text-field__slot {
      border: none !important
    }

    .vehicle-details-container__vehicle-details-col .v-text-field {
      margin-top: 0
    }

    @media(max-width:411px) {
      .registration-header__form-container__submit {
        margin-left: 0 !important;
        min-width: 100% !important;
        padding: 0 !important
      }
    }

    @media(min-width:411px) {
      .registration-header__form-container__submit {
        margin-left: 12px !important;
        max-width: 336px;
        min-width: 336px;
        padding: 0 !important
      }
    }

    @media(min-width:768px) {
      .registration-header__form-container__registration-input {
        max-width: 336px;
        min-width: 336px
      }

      .formFlex,
      .regForm_form {
        display: flex !important;
        justify-content: center;
        width: 100%
      }
    }

    .v-input,
    input {
      cursor: pointer
    }

    .theme--light.v-btn.v-btn--disabled.v-btn--has-bg.v-size--default {
      background-color: #deded8 !important;
      background-color: var(--brandGrey) !important;
      color: #000 !important
    }

    .cta-submit-button {
      font-family: "TT Norms Pro Serif Bold", serif;
      font-size: 20px !important
    }

    .cta-back-button {
      align-items: center;
      display: flex;
      font-family: "TT Norms Pro Serif DemiBold", serif;
      justify-content: center;
      margin-top: 20px;
      width: 100%
    }

    .cta-back-button span {
      cursor: pointer;
      -webkit-text-decoration: underline;
      text-decoration: underline
    }

    .container {
      margin-left: auto;
      margin-right: auto;
      padding: 12px;
      width: 100%
    }

    @media(min-width:960px) {
      .container {
        max-width: 900px
      }
    }

    @media(min-width:1264px) {
      .container {
        max-width: 1185px
      }
    }

    @media(min-width:1904px) {
      .container {
        max-width: 1785px
      }
    }

    .container--fluid {
      max-width: 100%
    }

    .row {
      display: flex;
      flex: 1 1 auto;
      flex-wrap: wrap;
      margin: -12px
    }

    .row+.row {
      margin-top: 12px
    }

    .row+.row--dense {
      margin-top: 4px
    }

    .row--dense {
      margin: -4px
    }

    .row--dense>.col,
    .row--dense>[class*=col-] {
      padding: 4px
    }

    .row.no-gutters {
      margin: 0
    }

    .row.no-gutters>.col,
    .row.no-gutters>[class*=col-] {
      padding: 0
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
      padding: 12px;
      width: 100%
    }

    .col {
      flex-basis: 0;
      flex-grow: 1;
      max-width: 100%
    }

    .col-auto {
      flex: 0 0 auto;
      max-width: 100%;
      width: auto
    }

    .col-1 {
      flex: 0 0 8.3333333333%;
      max-width: 8.3333333333%
    }

    .col-2 {
      flex: 0 0 16.6666666667%;
      max-width: 16.6666666667%
    }

    .col-3 {
      flex: 0 0 25%;
      max-width: 25%
    }

    .col-4 {
      flex: 0 0 33.3333333333%;
      max-width: 33.3333333333%
    }

    .col-5 {
      flex: 0 0 41.6666666667%;
      max-width: 41.6666666667%
    }

    .col-6 {
      flex: 0 0 50%;
      max-width: 50%
    }

    .col-7 {
      flex: 0 0 58.3333333333%;
      max-width: 58.3333333333%
    }

    .col-8 {
      flex: 0 0 66.6666666667%;
      max-width: 66.6666666667%
    }

    .col-9 {
      flex: 0 0 75%;
      max-width: 75%
    }

    .col-10 {
      flex: 0 0 83.3333333333%;
      max-width: 83.3333333333%
    }

    .col-11 {
      flex: 0 0 91.6666666667%;
      max-width: 91.6666666667%
    }

    .col-12 {
      flex: 0 0 100%;
      max-width: 100%
    }

    .v-application--is-ltr .offset-1 {
      margin-left: 8.3333333333%
    }

    .v-application--is-rtl .offset-1 {
      margin-right: 8.3333333333%
    }

    .v-application--is-ltr .offset-2 {
      margin-left: 16.6666666667%
    }

    .v-application--is-rtl .offset-2 {
      margin-right: 16.6666666667%
    }

    .v-application--is-ltr .offset-3 {
      margin-left: 25%
    }

    .v-application--is-rtl .offset-3 {
      margin-right: 25%
    }

    .v-application--is-ltr .offset-4 {
      margin-left: 33.3333333333%
    }

    .v-application--is-rtl .offset-4 {
      margin-right: 33.3333333333%
    }

    .v-application--is-ltr .offset-5 {
      margin-left: 41.6666666667%
    }

    .v-application--is-rtl .offset-5 {
      margin-right: 41.6666666667%
    }

    .v-application--is-ltr .offset-6 {
      margin-left: 50%
    }

    .v-application--is-rtl .offset-6 {
      margin-right: 50%
    }

    .v-application--is-ltr .offset-7 {
      margin-left: 58.3333333333%
    }

    .v-application--is-rtl .offset-7 {
      margin-right: 58.3333333333%
    }

    .v-application--is-ltr .offset-8 {
      margin-left: 66.6666666667%
    }

    .v-application--is-rtl .offset-8 {
      margin-right: 66.6666666667%
    }

    .v-application--is-ltr .offset-9 {
      margin-left: 75%
    }

    .v-application--is-rtl .offset-9 {
      margin-right: 75%
    }

    .v-application--is-ltr .offset-10 {
      margin-left: 83.3333333333%
    }

    .v-application--is-rtl .offset-10 {
      margin-right: 83.3333333333%
    }

    .v-application--is-ltr .offset-11 {
      margin-left: 91.6666666667%
    }

    .v-application--is-rtl .offset-11 {
      margin-right: 91.6666666667%
    }

    @media(min-width:600px) {
      .col-sm {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-sm-auto {
        flex: 0 0 auto;
        max-width: 100%;
        width: auto
      }

      .col-sm-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-sm-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-sm-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-sm-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-sm-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-sm-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-sm-9 {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-sm-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-sm-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-sm-12 {
        flex: 0 0 100%;
        max-width: 100%
      }

      .v-application--is-ltr .offset-sm-0 {
        margin-left: 0
      }

      .v-application--is-rtl .offset-sm-0 {
        margin-right: 0
      }

      .v-application--is-ltr .offset-sm-1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .offset-sm-1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .offset-sm-2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .offset-sm-2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .offset-sm-3 {
        margin-left: 25%
      }

      .v-application--is-rtl .offset-sm-3 {
        margin-right: 25%
      }

      .v-application--is-ltr .offset-sm-4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .offset-sm-4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .offset-sm-5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .offset-sm-5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .offset-sm-6 {
        margin-left: 50%
      }

      .v-application--is-rtl .offset-sm-6 {
        margin-right: 50%
      }

      .v-application--is-ltr .offset-sm-7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .offset-sm-7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .offset-sm-8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .offset-sm-8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .offset-sm-9 {
        margin-left: 75%
      }

      .v-application--is-rtl .offset-sm-9 {
        margin-right: 75%
      }

      .v-application--is-ltr .offset-sm-10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .offset-sm-10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .offset-sm-11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .offset-sm-11 {
        margin-right: 91.6666666667%
      }
    }

    @media(min-width:960px) {
      .col-md {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-md-auto {
        flex: 0 0 auto;
        max-width: 100%;
        width: auto
      }

      .col-md-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-md-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-md-3 {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-md-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-md-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-md-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-md-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-md-9 {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-md-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-md-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%
      }

      .v-application--is-ltr .offset-md-0 {
        margin-left: 0
      }

      .v-application--is-rtl .offset-md-0 {
        margin-right: 0
      }

      .v-application--is-ltr .offset-md-1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .offset-md-1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .offset-md-2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .offset-md-2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .offset-md-3 {
        margin-left: 25%
      }

      .v-application--is-rtl .offset-md-3 {
        margin-right: 25%
      }

      .v-application--is-ltr .offset-md-4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .offset-md-4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .offset-md-5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .offset-md-5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .offset-md-6 {
        margin-left: 50%
      }

      .v-application--is-rtl .offset-md-6 {
        margin-right: 50%
      }

      .v-application--is-ltr .offset-md-7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .offset-md-7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .offset-md-8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .offset-md-8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .offset-md-9 {
        margin-left: 75%
      }

      .v-application--is-rtl .offset-md-9 {
        margin-right: 75%
      }

      .v-application--is-ltr .offset-md-10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .offset-md-10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .offset-md-11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .offset-md-11 {
        margin-right: 91.6666666667%
      }
    }

    @media(min-width:1264px) {
      .col-lg {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-lg-auto {
        flex: 0 0 auto;
        max-width: 100%;
        width: auto
      }

      .col-lg-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-lg-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-lg-3 {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-lg-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-lg-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-lg-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-lg-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-lg-9 {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-lg-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-lg-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-lg-12 {
        flex: 0 0 100%;
        max-width: 100%
      }

      .v-application--is-ltr .offset-lg-0 {
        margin-left: 0
      }

      .v-application--is-rtl .offset-lg-0 {
        margin-right: 0
      }

      .v-application--is-ltr .offset-lg-1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .offset-lg-1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .offset-lg-2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .offset-lg-2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .offset-lg-3 {
        margin-left: 25%
      }

      .v-application--is-rtl .offset-lg-3 {
        margin-right: 25%
      }

      .v-application--is-ltr .offset-lg-4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .offset-lg-4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .offset-lg-5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .offset-lg-5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .offset-lg-6 {
        margin-left: 50%
      }

      .v-application--is-rtl .offset-lg-6 {
        margin-right: 50%
      }

      .v-application--is-ltr .offset-lg-7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .offset-lg-7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .offset-lg-8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .offset-lg-8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .offset-lg-9 {
        margin-left: 75%
      }

      .v-application--is-rtl .offset-lg-9 {
        margin-right: 75%
      }

      .v-application--is-ltr .offset-lg-10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .offset-lg-10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .offset-lg-11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .offset-lg-11 {
        margin-right: 91.6666666667%
      }
    }

    @media(min-width:1904px) {
      .col-xl {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-xl-auto {
        flex: 0 0 auto;
        max-width: 100%;
        width: auto
      }

      .col-xl-1 {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-xl-2 {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-xl-3 {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-xl-4 {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-xl-5 {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-xl-6 {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-xl-7 {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-xl-8 {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-xl-9 {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-xl-10 {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-xl-11 {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-xl-12 {
        flex: 0 0 100%;
        max-width: 100%
      }

      .v-application--is-ltr .offset-xl-0 {
        margin-left: 0
      }

      .v-application--is-rtl .offset-xl-0 {
        margin-right: 0
      }

      .v-application--is-ltr .offset-xl-1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .offset-xl-1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .offset-xl-2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .offset-xl-2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .offset-xl-3 {
        margin-left: 25%
      }

      .v-application--is-rtl .offset-xl-3 {
        margin-right: 25%
      }

      .v-application--is-ltr .offset-xl-4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .offset-xl-4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .offset-xl-5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .offset-xl-5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .offset-xl-6 {
        margin-left: 50%
      }

      .v-application--is-rtl .offset-xl-6 {
        margin-right: 50%
      }

      .v-application--is-ltr .offset-xl-7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .offset-xl-7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .offset-xl-8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .offset-xl-8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .offset-xl-9 {
        margin-left: 75%
      }

      .v-application--is-rtl .offset-xl-9 {
        margin-right: 75%
      }

      .v-application--is-ltr .offset-xl-10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .offset-xl-10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .offset-xl-11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .offset-xl-11 {
        margin-right: 91.6666666667%
      }
    }

    .container.grow-shrink-0 {
      flex-grow: 0;
      flex-shrink: 0
    }

    .container.fill-height {
      align-items: center;
      display: flex;
      flex-wrap: wrap
    }

    .container.fill-height>.row {
      flex: 1 1 100%;
      max-width: calc(100% + 24px)
    }

    .container.fill-height>.layout {
      flex: 1 1 auto;
      height: 100%
    }

    .container.fill-height>.layout.grow-shrink-0 {
      flex-grow: 0;
      flex-shrink: 0
    }

    .container.grid-list-xs .layout .flex {
      padding: 1px
    }

    .container.grid-list-xs .layout:only-child {
      margin: -1px
    }

    .container.grid-list-xs .layout:not(:only-child) {
      margin: auto -1px
    }

    .container.grid-list-xs :not(:only-child) .layout:first-child {
      margin-top: -1px
    }

    .container.grid-list-xs :not(:only-child) .layout:last-child {
      margin-bottom: -1px
    }

    .container.grid-list-sm .layout .flex {
      padding: 2px
    }

    .container.grid-list-sm .layout:only-child {
      margin: -2px
    }

    .container.grid-list-sm .layout:not(:only-child) {
      margin: auto -2px
    }

    .container.grid-list-sm :not(:only-child) .layout:first-child {
      margin-top: -2px
    }

    .container.grid-list-sm :not(:only-child) .layout:last-child {
      margin-bottom: -2px
    }

    .container.grid-list-md .layout .flex {
      padding: 4px
    }

    .container.grid-list-md .layout:only-child {
      margin: -4px
    }

    .container.grid-list-md .layout:not(:only-child) {
      margin: auto -4px
    }

    .container.grid-list-md :not(:only-child) .layout:first-child {
      margin-top: -4px
    }

    .container.grid-list-md :not(:only-child) .layout:last-child {
      margin-bottom: -4px
    }

    .container.grid-list-lg .layout .flex {
      padding: 8px
    }

    .container.grid-list-lg .layout:only-child {
      margin: -8px
    }

    .container.grid-list-lg .layout:not(:only-child) {
      margin: auto -8px
    }

    .container.grid-list-lg :not(:only-child) .layout:first-child {
      margin-top: -8px
    }

    .container.grid-list-lg :not(:only-child) .layout:last-child {
      margin-bottom: -8px
    }

    .container.grid-list-xl .layout .flex {
      padding: 12px
    }

    .container.grid-list-xl .layout:only-child {
      margin: -12px
    }

    .container.grid-list-xl .layout:not(:only-child) {
      margin: auto -12px
    }

    .container.grid-list-xl :not(:only-child) .layout:first-child {
      margin-top: -12px
    }

    .container.grid-list-xl :not(:only-child) .layout:last-child {
      margin-bottom: -12px
    }

    .layout {
      display: flex;
      flex: 1 1 auto;
      flex-wrap: nowrap;
      min-width: 0
    }

    .layout.reverse {
      flex-direction: row-reverse
    }

    .layout.column {
      flex-direction: column
    }

    .layout.column.reverse {
      flex-direction: column-reverse
    }

    .layout.column>.flex {
      max-width: 100%
    }

    .layout.wrap {
      flex-wrap: wrap
    }

    .layout.grow-shrink-0 {
      flex-grow: 0;
      flex-shrink: 0
    }

    @media (min-width:0) {
      .flex.xs12 {
        flex-basis: 100%;
        flex-grow: 0;
        max-width: 100%
      }

      .flex.order-xs12 {
        order: 12
      }

      .flex.xs11 {
        flex-basis: 91.6666666667%;
        flex-grow: 0;
        max-width: 91.6666666667%
      }

      .flex.order-xs11 {
        order: 11
      }

      .flex.xs10 {
        flex-basis: 83.3333333333%;
        flex-grow: 0;
        max-width: 83.3333333333%
      }

      .flex.order-xs10 {
        order: 10
      }

      .flex.xs9 {
        flex-basis: 75%;
        flex-grow: 0;
        max-width: 75%
      }

      .flex.order-xs9 {
        order: 9
      }

      .flex.xs8 {
        flex-basis: 66.6666666667%;
        flex-grow: 0;
        max-width: 66.6666666667%
      }

      .flex.order-xs8 {
        order: 8
      }

      .flex.xs7 {
        flex-basis: 58.3333333333%;
        flex-grow: 0;
        max-width: 58.3333333333%
      }

      .flex.order-xs7 {
        order: 7
      }

      .flex.xs6 {
        flex-basis: 50%;
        flex-grow: 0;
        max-width: 50%
      }

      .flex.order-xs6 {
        order: 6
      }

      .flex.xs5 {
        flex-basis: 41.6666666667%;
        flex-grow: 0;
        max-width: 41.6666666667%
      }

      .flex.order-xs5 {
        order: 5
      }

      .flex.xs4 {
        flex-basis: 33.3333333333%;
        flex-grow: 0;
        max-width: 33.3333333333%
      }

      .flex.order-xs4 {
        order: 4
      }

      .flex.xs3 {
        flex-basis: 25%;
        flex-grow: 0;
        max-width: 25%
      }

      .flex.order-xs3 {
        order: 3
      }

      .flex.xs2 {
        flex-basis: 16.6666666667%;
        flex-grow: 0;
        max-width: 16.6666666667%
      }

      .flex.order-xs2 {
        order: 2
      }

      .flex.xs1 {
        flex-basis: 8.3333333333%;
        flex-grow: 0;
        max-width: 8.3333333333%
      }

      .flex.order-xs1 {
        order: 1
      }

      .v-application--is-ltr .flex.offset-xs12 {
        margin-left: 100%
      }

      .v-application--is-rtl .flex.offset-xs12 {
        margin-right: 100%
      }

      .v-application--is-ltr .flex.offset-xs11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .flex.offset-xs11 {
        margin-right: 91.6666666667%
      }

      .v-application--is-ltr .flex.offset-xs10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .flex.offset-xs10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .flex.offset-xs9 {
        margin-left: 75%
      }

      .v-application--is-rtl .flex.offset-xs9 {
        margin-right: 75%
      }

      .v-application--is-ltr .flex.offset-xs8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .flex.offset-xs8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .flex.offset-xs7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .flex.offset-xs7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .flex.offset-xs6 {
        margin-left: 50%
      }

      .v-application--is-rtl .flex.offset-xs6 {
        margin-right: 50%
      }

      .v-application--is-ltr .flex.offset-xs5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .flex.offset-xs5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .flex.offset-xs4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .flex.offset-xs4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .flex.offset-xs3 {
        margin-left: 25%
      }

      .v-application--is-rtl .flex.offset-xs3 {
        margin-right: 25%
      }

      .v-application--is-ltr .flex.offset-xs2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .flex.offset-xs2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .flex.offset-xs1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .flex.offset-xs1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .flex.offset-xs0 {
        margin-left: 0
      }

      .v-application--is-rtl .flex.offset-xs0 {
        margin-right: 0
      }
    }

    @media (min-width:600px) {
      .flex.sm12 {
        flex-basis: 100%;
        flex-grow: 0;
        max-width: 100%
      }

      .flex.order-sm12 {
        order: 12
      }

      .flex.sm11 {
        flex-basis: 91.6666666667%;
        flex-grow: 0;
        max-width: 91.6666666667%
      }

      .flex.order-sm11 {
        order: 11
      }

      .flex.sm10 {
        flex-basis: 83.3333333333%;
        flex-grow: 0;
        max-width: 83.3333333333%
      }

      .flex.order-sm10 {
        order: 10
      }

      .flex.sm9 {
        flex-basis: 75%;
        flex-grow: 0;
        max-width: 75%
      }

      .flex.order-sm9 {
        order: 9
      }

      .flex.sm8 {
        flex-basis: 66.6666666667%;
        flex-grow: 0;
        max-width: 66.6666666667%
      }

      .flex.order-sm8 {
        order: 8
      }

      .flex.sm7 {
        flex-basis: 58.3333333333%;
        flex-grow: 0;
        max-width: 58.3333333333%
      }

      .flex.order-sm7 {
        order: 7
      }

      .flex.sm6 {
        flex-basis: 50%;
        flex-grow: 0;
        max-width: 50%
      }

      .flex.order-sm6 {
        order: 6
      }

      .flex.sm5 {
        flex-basis: 41.6666666667%;
        flex-grow: 0;
        max-width: 41.6666666667%
      }

      .flex.order-sm5 {
        order: 5
      }

      .flex.sm4 {
        flex-basis: 33.3333333333%;
        flex-grow: 0;
        max-width: 33.3333333333%
      }

      .flex.order-sm4 {
        order: 4
      }

      .flex.sm3 {
        flex-basis: 25%;
        flex-grow: 0;
        max-width: 25%
      }

      .flex.order-sm3 {
        order: 3
      }

      .flex.sm2 {
        flex-basis: 16.6666666667%;
        flex-grow: 0;
        max-width: 16.6666666667%
      }

      .flex.order-sm2 {
        order: 2
      }

      .flex.sm1 {
        flex-basis: 8.3333333333%;
        flex-grow: 0;
        max-width: 8.3333333333%
      }

      .flex.order-sm1 {
        order: 1
      }

      .v-application--is-ltr .flex.offset-sm12 {
        margin-left: 100%
      }

      .v-application--is-rtl .flex.offset-sm12 {
        margin-right: 100%
      }

      .v-application--is-ltr .flex.offset-sm11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .flex.offset-sm11 {
        margin-right: 91.6666666667%
      }

      .v-application--is-ltr .flex.offset-sm10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .flex.offset-sm10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .flex.offset-sm9 {
        margin-left: 75%
      }

      .v-application--is-rtl .flex.offset-sm9 {
        margin-right: 75%
      }

      .v-application--is-ltr .flex.offset-sm8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .flex.offset-sm8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .flex.offset-sm7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .flex.offset-sm7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .flex.offset-sm6 {
        margin-left: 50%
      }

      .v-application--is-rtl .flex.offset-sm6 {
        margin-right: 50%
      }

      .v-application--is-ltr .flex.offset-sm5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .flex.offset-sm5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .flex.offset-sm4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .flex.offset-sm4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .flex.offset-sm3 {
        margin-left: 25%
      }

      .v-application--is-rtl .flex.offset-sm3 {
        margin-right: 25%
      }

      .v-application--is-ltr .flex.offset-sm2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .flex.offset-sm2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .flex.offset-sm1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .flex.offset-sm1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .flex.offset-sm0 {
        margin-left: 0
      }

      .v-application--is-rtl .flex.offset-sm0 {
        margin-right: 0
      }
    }

    @media (min-width:960px) {
      .flex.md12 {
        flex-basis: 100%;
        flex-grow: 0;
        max-width: 100%
      }

      .flex.order-md12 {
        order: 12
      }

      .flex.md11 {
        flex-basis: 91.6666666667%;
        flex-grow: 0;
        max-width: 91.6666666667%
      }

      .flex.order-md11 {
        order: 11
      }

      .flex.md10 {
        flex-basis: 83.3333333333%;
        flex-grow: 0;
        max-width: 83.3333333333%
      }

      .flex.order-md10 {
        order: 10
      }

      .flex.md9 {
        flex-basis: 75%;
        flex-grow: 0;
        max-width: 75%
      }

      .flex.order-md9 {
        order: 9
      }

      .flex.md8 {
        flex-basis: 66.6666666667%;
        flex-grow: 0;
        max-width: 66.6666666667%
      }

      .flex.order-md8 {
        order: 8
      }

      .flex.md7 {
        flex-basis: 58.3333333333%;
        flex-grow: 0;
        max-width: 58.3333333333%
      }

      .flex.order-md7 {
        order: 7
      }

      .flex.md6 {
        flex-basis: 50%;
        flex-grow: 0;
        max-width: 50%
      }

      .flex.order-md6 {
        order: 6
      }

      .flex.md5 {
        flex-basis: 41.6666666667%;
        flex-grow: 0;
        max-width: 41.6666666667%
      }

      .flex.order-md5 {
        order: 5
      }

      .flex.md4 {
        flex-basis: 33.3333333333%;
        flex-grow: 0;
        max-width: 33.3333333333%
      }

      .flex.order-md4 {
        order: 4
      }

      .flex.md3 {
        flex-basis: 25%;
        flex-grow: 0;
        max-width: 25%
      }

      .flex.order-md3 {
        order: 3
      }

      .flex.md2 {
        flex-basis: 16.6666666667%;
        flex-grow: 0;
        max-width: 16.6666666667%
      }

      .flex.order-md2 {
        order: 2
      }

      .flex.md1 {
        flex-basis: 8.3333333333%;
        flex-grow: 0;
        max-width: 8.3333333333%
      }

      .flex.order-md1 {
        order: 1
      }

      .v-application--is-ltr .flex.offset-md12 {
        margin-left: 100%
      }

      .v-application--is-rtl .flex.offset-md12 {
        margin-right: 100%
      }

      .v-application--is-ltr .flex.offset-md11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .flex.offset-md11 {
        margin-right: 91.6666666667%
      }

      .v-application--is-ltr .flex.offset-md10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .flex.offset-md10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .flex.offset-md9 {
        margin-left: 75%
      }

      .v-application--is-rtl .flex.offset-md9 {
        margin-right: 75%
      }

      .v-application--is-ltr .flex.offset-md8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .flex.offset-md8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .flex.offset-md7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .flex.offset-md7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .flex.offset-md6 {
        margin-left: 50%
      }

      .v-application--is-rtl .flex.offset-md6 {
        margin-right: 50%
      }

      .v-application--is-ltr .flex.offset-md5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .flex.offset-md5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .flex.offset-md4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .flex.offset-md4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .flex.offset-md3 {
        margin-left: 25%
      }

      .v-application--is-rtl .flex.offset-md3 {
        margin-right: 25%
      }

      .v-application--is-ltr .flex.offset-md2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .flex.offset-md2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .flex.offset-md1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .flex.offset-md1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .flex.offset-md0 {
        margin-left: 0
      }

      .v-application--is-rtl .flex.offset-md0 {
        margin-right: 0
      }
    }

    @media (min-width:1264px) {
      .flex.lg12 {
        flex-basis: 100%;
        flex-grow: 0;
        max-width: 100%
      }

      .flex.order-lg12 {
        order: 12
      }

      .flex.lg11 {
        flex-basis: 91.6666666667%;
        flex-grow: 0;
        max-width: 91.6666666667%
      }

      .flex.order-lg11 {
        order: 11
      }

      .flex.lg10 {
        flex-basis: 83.3333333333%;
        flex-grow: 0;
        max-width: 83.3333333333%
      }

      .flex.order-lg10 {
        order: 10
      }

      .flex.lg9 {
        flex-basis: 75%;
        flex-grow: 0;
        max-width: 75%
      }

      .flex.order-lg9 {
        order: 9
      }

      .flex.lg8 {
        flex-basis: 66.6666666667%;
        flex-grow: 0;
        max-width: 66.6666666667%
      }

      .flex.order-lg8 {
        order: 8
      }

      .flex.lg7 {
        flex-basis: 58.3333333333%;
        flex-grow: 0;
        max-width: 58.3333333333%
      }

      .flex.order-lg7 {
        order: 7
      }

      .flex.lg6 {
        flex-basis: 50%;
        flex-grow: 0;
        max-width: 50%
      }

      .flex.order-lg6 {
        order: 6
      }

      .flex.lg5 {
        flex-basis: 41.6666666667%;
        flex-grow: 0;
        max-width: 41.6666666667%
      }

      .flex.order-lg5 {
        order: 5
      }

      .flex.lg4 {
        flex-basis: 33.3333333333%;
        flex-grow: 0;
        max-width: 33.3333333333%
      }

      .flex.order-lg4 {
        order: 4
      }

      .flex.lg3 {
        flex-basis: 25%;
        flex-grow: 0;
        max-width: 25%
      }

      .flex.order-lg3 {
        order: 3
      }

      .flex.lg2 {
        flex-basis: 16.6666666667%;
        flex-grow: 0;
        max-width: 16.6666666667%
      }

      .flex.order-lg2 {
        order: 2
      }

      .flex.lg1 {
        flex-basis: 8.3333333333%;
        flex-grow: 0;
        max-width: 8.3333333333%
      }

      .flex.order-lg1 {
        order: 1
      }

      .v-application--is-ltr .flex.offset-lg12 {
        margin-left: 100%
      }

      .v-application--is-rtl .flex.offset-lg12 {
        margin-right: 100%
      }

      .v-application--is-ltr .flex.offset-lg11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .flex.offset-lg11 {
        margin-right: 91.6666666667%
      }

      .v-application--is-ltr .flex.offset-lg10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .flex.offset-lg10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .flex.offset-lg9 {
        margin-left: 75%
      }

      .v-application--is-rtl .flex.offset-lg9 {
        margin-right: 75%
      }

      .v-application--is-ltr .flex.offset-lg8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .flex.offset-lg8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .flex.offset-lg7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .flex.offset-lg7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .flex.offset-lg6 {
        margin-left: 50%
      }

      .v-application--is-rtl .flex.offset-lg6 {
        margin-right: 50%
      }

      .v-application--is-ltr .flex.offset-lg5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .flex.offset-lg5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .flex.offset-lg4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .flex.offset-lg4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .flex.offset-lg3 {
        margin-left: 25%
      }

      .v-application--is-rtl .flex.offset-lg3 {
        margin-right: 25%
      }

      .v-application--is-ltr .flex.offset-lg2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .flex.offset-lg2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .flex.offset-lg1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .flex.offset-lg1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .flex.offset-lg0 {
        margin-left: 0
      }

      .v-application--is-rtl .flex.offset-lg0 {
        margin-right: 0
      }
    }

    @media (min-width:1904px) {
      .flex.xl12 {
        flex-basis: 100%;
        flex-grow: 0;
        max-width: 100%
      }

      .flex.order-xl12 {
        order: 12
      }

      .flex.xl11 {
        flex-basis: 91.6666666667%;
        flex-grow: 0;
        max-width: 91.6666666667%
      }

      .flex.order-xl11 {
        order: 11
      }

      .flex.xl10 {
        flex-basis: 83.3333333333%;
        flex-grow: 0;
        max-width: 83.3333333333%
      }

      .flex.order-xl10 {
        order: 10
      }

      .flex.xl9 {
        flex-basis: 75%;
        flex-grow: 0;
        max-width: 75%
      }

      .flex.order-xl9 {
        order: 9
      }

      .flex.xl8 {
        flex-basis: 66.6666666667%;
        flex-grow: 0;
        max-width: 66.6666666667%
      }

      .flex.order-xl8 {
        order: 8
      }

      .flex.xl7 {
        flex-basis: 58.3333333333%;
        flex-grow: 0;
        max-width: 58.3333333333%
      }

      .flex.order-xl7 {
        order: 7
      }

      .flex.xl6 {
        flex-basis: 50%;
        flex-grow: 0;
        max-width: 50%
      }

      .flex.order-xl6 {
        order: 6
      }

      .flex.xl5 {
        flex-basis: 41.6666666667%;
        flex-grow: 0;
        max-width: 41.6666666667%
      }

      .flex.order-xl5 {
        order: 5
      }

      .flex.xl4 {
        flex-basis: 33.3333333333%;
        flex-grow: 0;
        max-width: 33.3333333333%
      }

      .flex.order-xl4 {
        order: 4
      }

      .flex.xl3 {
        flex-basis: 25%;
        flex-grow: 0;
        max-width: 25%
      }

      .flex.order-xl3 {
        order: 3
      }

      .flex.xl2 {
        flex-basis: 16.6666666667%;
        flex-grow: 0;
        max-width: 16.6666666667%
      }

      .flex.order-xl2 {
        order: 2
      }

      .flex.xl1 {
        flex-basis: 8.3333333333%;
        flex-grow: 0;
        max-width: 8.3333333333%
      }

      .flex.order-xl1 {
        order: 1
      }

      .v-application--is-ltr .flex.offset-xl12 {
        margin-left: 100%
      }

      .v-application--is-rtl .flex.offset-xl12 {
        margin-right: 100%
      }

      .v-application--is-ltr .flex.offset-xl11 {
        margin-left: 91.6666666667%
      }

      .v-application--is-rtl .flex.offset-xl11 {
        margin-right: 91.6666666667%
      }

      .v-application--is-ltr .flex.offset-xl10 {
        margin-left: 83.3333333333%
      }

      .v-application--is-rtl .flex.offset-xl10 {
        margin-right: 83.3333333333%
      }

      .v-application--is-ltr .flex.offset-xl9 {
        margin-left: 75%
      }

      .v-application--is-rtl .flex.offset-xl9 {
        margin-right: 75%
      }

      .v-application--is-ltr .flex.offset-xl8 {
        margin-left: 66.6666666667%
      }

      .v-application--is-rtl .flex.offset-xl8 {
        margin-right: 66.6666666667%
      }

      .v-application--is-ltr .flex.offset-xl7 {
        margin-left: 58.3333333333%
      }

      .v-application--is-rtl .flex.offset-xl7 {
        margin-right: 58.3333333333%
      }

      .v-application--is-ltr .flex.offset-xl6 {
        margin-left: 50%
      }

      .v-application--is-rtl .flex.offset-xl6 {
        margin-right: 50%
      }

      .v-application--is-ltr .flex.offset-xl5 {
        margin-left: 41.6666666667%
      }

      .v-application--is-rtl .flex.offset-xl5 {
        margin-right: 41.6666666667%
      }

      .v-application--is-ltr .flex.offset-xl4 {
        margin-left: 33.3333333333%
      }

      .v-application--is-rtl .flex.offset-xl4 {
        margin-right: 33.3333333333%
      }

      .v-application--is-ltr .flex.offset-xl3 {
        margin-left: 25%
      }

      .v-application--is-rtl .flex.offset-xl3 {
        margin-right: 25%
      }

      .v-application--is-ltr .flex.offset-xl2 {
        margin-left: 16.6666666667%
      }

      .v-application--is-rtl .flex.offset-xl2 {
        margin-right: 16.6666666667%
      }

      .v-application--is-ltr .flex.offset-xl1 {
        margin-left: 8.3333333333%
      }

      .v-application--is-rtl .flex.offset-xl1 {
        margin-right: 8.3333333333%
      }

      .v-application--is-ltr .flex.offset-xl0 {
        margin-left: 0
      }

      .v-application--is-rtl .flex.offset-xl0 {
        margin-right: 0
      }
    }

    .child-flex>*,
    .flex {
      flex: 1 1 auto;
      max-width: 100%
    }

    .child-flex>.grow-shrink-0,
    .flex.grow-shrink-0 {
      flex-grow: 0;
      flex-shrink: 0
    }

    .grow,
    .spacer {
      flex-grow: 1 !important
    }

    .grow {
      flex-shrink: 0 !important
    }

    .shrink {
      flex-grow: 0 !important;
      flex-shrink: 1 !important
    }

    .fill-height {
      height: 100%
    }

    .theme--light.v-divider {
      border-color: rgba(0, 0, 0, .12)
    }

    .theme--dark.v-divider {
      border-color: hsla(0, 0%, 100%, .12)
    }

    .v-divider {
      border: solid;
      border-width: thin 0 0;
      display: block;
      flex: 1 1 0px;
      height: 0;
      max-height: 0;
      max-width: 100%;
      transition: inherit
    }

    .v-divider--inset:not(.v-divider--vertical) {
      max-width: calc(100% - 72px)
    }

    .v-application--is-ltr .v-divider--inset:not(.v-divider--vertical) {
      margin-left: 72px
    }

    .v-application--is-rtl .v-divider--inset:not(.v-divider--vertical) {
      margin-right: 72px
    }

    .v-divider--vertical {
      align-self: stretch;
      border: solid;
      border-width: 0 thin 0 0;
      display: inline-flex;
      height: inherit;
      margin: 0 -1px;
      max-height: 100%;
      max-width: 0;
      min-height: 100%;
      vertical-align: text-bottom;
      width: 0
    }

    .v-divider--vertical.v-divider--inset {
      margin-top: 8px;
      max-height: calc(100% - 16px);
      min-height: 0
    }

    .theme--light.v-footer {
      background-color: #f5f5f5;
      color: rgba(0, 0, 0, .87)
    }

    .theme--dark.v-footer {
      background-color: #272727;
      color: #fff
    }

    .v-sheet.v-footer {
      border-radius: 0
    }

    .v-sheet.v-footer:not(.v-sheet--outlined) {
      box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
    }

    .v-sheet.v-footer.v-sheet--shaped {
      border-radius: 24px 0
    }

    .v-footer {
      align-items: center;
      display: flex;
      flex: 0 1 auto !important;
      flex-wrap: wrap;
      padding: 6px 16px;
      position: relative;
      transition-duration: .2s;
      transition-property: background-color, left, right;
      transition-timing-function: cubic-bezier(.4, 0, .2, 1)
    }

    .v-footer:not([data-booted=true]) {
      transition: none !important
    }

    .v-footer--absolute,
    .v-footer--fixed {
      z-index: 3
    }

    .v-footer--absolute {
      position: absolute
    }

    .v-footer--absolute:not(.v-footer--inset) {
      width: 100%
    }

    .v-footer--fixed {
      position: fixed
    }

    .v-footer--padless {
      padding: 0
    }

    .theme--light.v-sheet {
      background-color: #fff;
      border-color: #fff;
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-sheet--outlined {
      border: thin solid rgba(0, 0, 0, .12)
    }

    .theme--dark.v-sheet {
      background-color: #1e1e1e;
      border-color: #1e1e1e;
      color: #fff
    }

    .theme--dark.v-sheet--outlined {
      border: thin solid hsla(0, 0%, 100%, .12)
    }

    .v-sheet {
      border-radius: 0
    }

    .v-sheet:not(.v-sheet--outlined) {
      box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
    }

    .v-sheet.v-sheet--shaped {
      border-radius: 24px 0
    }

    @keyframes v-shake {
      59% {
        margin-left: 0
      }

      60%,
      80% {
        margin-left: 2px
      }

      70%,
      90% {
        margin-left: -2px
      }
    }

    .v-application .black {
      background-color: #000 !important;
      border-color: #000 !important
    }

    .v-application .black--text {
      caret-color: #000 !important;
      color: #000 !important
    }

    .v-application .white {
      background-color: #fff !important;
      border-color: #fff !important
    }

    .v-application .white--text {
      caret-color: #fff !important;
      color: #fff !important
    }

    .v-application .transparent {
      background-color: transparent !important;
      border-color: transparent !important
    }

    .v-application .transparent--text {
      caret-color: transparent !important;
      color: transparent !important
    }

    .v-application .red {
      background-color: #f44336 !important;
      border-color: #f44336 !important
    }

    .v-application .red--text {
      caret-color: #f44336 !important;
      color: #f44336 !important
    }

    .v-application .red.lighten-5 {
      background-color: #ffebee !important;
      border-color: #ffebee !important
    }

    .v-application .red--text.text--lighten-5 {
      caret-color: #ffebee !important;
      color: #ffebee !important
    }

    .v-application .red.lighten-4 {
      background-color: #ffcdd2 !important;
      border-color: #ffcdd2 !important
    }

    .v-application .red--text.text--lighten-4 {
      caret-color: #ffcdd2 !important;
      color: #ffcdd2 !important
    }

    .v-application .red.lighten-3 {
      background-color: #ef9a9a !important;
      border-color: #ef9a9a !important
    }

    .v-application .red--text.text--lighten-3 {
      caret-color: #ef9a9a !important;
      color: #ef9a9a !important
    }

    .v-application .red.lighten-2 {
      background-color: #e57373 !important;
      border-color: #e57373 !important
    }

    .v-application .red--text.text--lighten-2 {
      caret-color: #e57373 !important;
      color: #e57373 !important
    }

    .v-application .red.lighten-1 {
      background-color: #ef5350 !important;
      border-color: #ef5350 !important
    }

    .v-application .red--text.text--lighten-1 {
      caret-color: #ef5350 !important;
      color: #ef5350 !important
    }

    .v-application .red.darken-1 {
      background-color: #e53935 !important;
      border-color: #e53935 !important
    }

    .v-application .red--text.text--darken-1 {
      caret-color: #e53935 !important;
      color: #e53935 !important
    }

    .v-application .red.darken-2 {
      background-color: #d32f2f !important;
      border-color: #d32f2f !important
    }

    .v-application .red--text.text--darken-2 {
      caret-color: #d32f2f !important;
      color: #d32f2f !important
    }

    .v-application .red.darken-3 {
      background-color: #c62828 !important;
      border-color: #c62828 !important
    }

    .v-application .red--text.text--darken-3 {
      caret-color: #c62828 !important;
      color: #c62828 !important
    }

    .v-application .red.darken-4 {
      background-color: #b71c1c !important;
      border-color: #b71c1c !important
    }

    .v-application .red--text.text--darken-4 {
      caret-color: #b71c1c !important;
      color: #b71c1c !important
    }

    .v-application .red.accent-1 {
      background-color: #ff8a80 !important;
      border-color: #ff8a80 !important
    }

    .v-application .red--text.text--accent-1 {
      caret-color: #ff8a80 !important;
      color: #ff8a80 !important
    }

    .v-application .red.accent-2 {
      background-color: #ff5252 !important;
      border-color: #ff5252 !important
    }

    .v-application .red--text.text--accent-2 {
      caret-color: #ff5252 !important;
      color: #ff5252 !important
    }

    .v-application .red.accent-3 {
      background-color: #ff1744 !important;
      border-color: #ff1744 !important
    }

    .v-application .red--text.text--accent-3 {
      caret-color: #ff1744 !important;
      color: #ff1744 !important
    }

    .v-application .red.accent-4 {
      background-color: #d50000 !important;
      border-color: #d50000 !important
    }

    .v-application .red--text.text--accent-4 {
      caret-color: #d50000 !important;
      color: #d50000 !important
    }

    .v-application .pink {
      background-color: #e91e63 !important;
      border-color: #e91e63 !important
    }

    .v-application .pink--text {
      caret-color: #e91e63 !important;
      color: #e91e63 !important
    }

    .v-application .pink.lighten-5 {
      background-color: #fce4ec !important;
      border-color: #fce4ec !important
    }

    .v-application .pink--text.text--lighten-5 {
      caret-color: #fce4ec !important;
      color: #fce4ec !important
    }

    .v-application .pink.lighten-4 {
      background-color: #f8bbd0 !important;
      border-color: #f8bbd0 !important
    }

    .v-application .pink--text.text--lighten-4 {
      caret-color: #f8bbd0 !important;
      color: #f8bbd0 !important
    }

    .v-application .pink.lighten-3 {
      background-color: #f48fb1 !important;
      border-color: #f48fb1 !important
    }

    .v-application .pink--text.text--lighten-3 {
      caret-color: #f48fb1 !important;
      color: #f48fb1 !important
    }

    .v-application .pink.lighten-2 {
      background-color: #f06292 !important;
      border-color: #f06292 !important
    }

    .v-application .pink--text.text--lighten-2 {
      caret-color: #f06292 !important;
      color: #f06292 !important
    }

    .v-application .pink.lighten-1 {
      background-color: #ec407a !important;
      border-color: #ec407a !important
    }

    .v-application .pink--text.text--lighten-1 {
      caret-color: #ec407a !important;
      color: #ec407a !important
    }

    .v-application .pink.darken-1 {
      background-color: #d81b60 !important;
      border-color: #d81b60 !important
    }

    .v-application .pink--text.text--darken-1 {
      caret-color: #d81b60 !important;
      color: #d81b60 !important
    }

    .v-application .pink.darken-2 {
      background-color: #c2185b !important;
      border-color: #c2185b !important
    }

    .v-application .pink--text.text--darken-2 {
      caret-color: #c2185b !important;
      color: #c2185b !important
    }

    .v-application .pink.darken-3 {
      background-color: #ad1457 !important;
      border-color: #ad1457 !important
    }

    .v-application .pink--text.text--darken-3 {
      caret-color: #ad1457 !important;
      color: #ad1457 !important
    }

    .v-application .pink.darken-4 {
      background-color: #880e4f !important;
      border-color: #880e4f !important
    }

    .v-application .pink--text.text--darken-4 {
      caret-color: #880e4f !important;
      color: #880e4f !important
    }

    .v-application .pink.accent-1 {
      background-color: #ff80ab !important;
      border-color: #ff80ab !important
    }

    .v-application .pink--text.text--accent-1 {
      caret-color: #ff80ab !important;
      color: #ff80ab !important
    }

    .v-application .pink.accent-2 {
      background-color: #ff4081 !important;
      border-color: #ff4081 !important
    }

    .v-application .pink--text.text--accent-2 {
      caret-color: #ff4081 !important;
      color: #ff4081 !important
    }

    .v-application .pink.accent-3 {
      background-color: #f50057 !important;
      border-color: #f50057 !important
    }

    .v-application .pink--text.text--accent-3 {
      caret-color: #f50057 !important;
      color: #f50057 !important
    }

    .v-application .pink.accent-4 {
      background-color: #c51162 !important;
      border-color: #c51162 !important
    }

    .v-application .pink--text.text--accent-4 {
      caret-color: #c51162 !important;
      color: #c51162 !important
    }

    .v-application .purple {
      background-color: #9c27b0 !important;
      border-color: #9c27b0 !important
    }

    .v-application .purple--text {
      caret-color: #9c27b0 !important;
      color: #9c27b0 !important
    }

    .v-application .purple.lighten-5 {
      background-color: #f3e5f5 !important;
      border-color: #f3e5f5 !important
    }

    .v-application .purple--text.text--lighten-5 {
      caret-color: #f3e5f5 !important;
      color: #f3e5f5 !important
    }

    .v-application .purple.lighten-4 {
      background-color: #e1bee7 !important;
      border-color: #e1bee7 !important
    }

    .v-application .purple--text.text--lighten-4 {
      caret-color: #e1bee7 !important;
      color: #e1bee7 !important
    }

    .v-application .purple.lighten-3 {
      background-color: #ce93d8 !important;
      border-color: #ce93d8 !important
    }

    .v-application .purple--text.text--lighten-3 {
      caret-color: #ce93d8 !important;
      color: #ce93d8 !important
    }

    .v-application .purple.lighten-2 {
      background-color: #ba68c8 !important;
      border-color: #ba68c8 !important
    }

    .v-application .purple--text.text--lighten-2 {
      caret-color: #ba68c8 !important;
      color: #ba68c8 !important
    }

    .v-application .purple.lighten-1 {
      background-color: #ab47bc !important;
      border-color: #ab47bc !important
    }

    .v-application .purple--text.text--lighten-1 {
      caret-color: #ab47bc !important;
      color: #ab47bc !important
    }

    .v-application .purple.darken-1 {
      background-color: #8e24aa !important;
      border-color: #8e24aa !important
    }

    .v-application .purple--text.text--darken-1 {
      caret-color: #8e24aa !important;
      color: #8e24aa !important
    }

    .v-application .purple.darken-2 {
      background-color: #7b1fa2 !important;
      border-color: #7b1fa2 !important
    }

    .v-application .purple--text.text--darken-2 {
      caret-color: #7b1fa2 !important;
      color: #7b1fa2 !important
    }

    .v-application .purple.darken-3 {
      background-color: #6a1b9a !important;
      border-color: #6a1b9a !important
    }

    .v-application .purple--text.text--darken-3 {
      caret-color: #6a1b9a !important;
      color: #6a1b9a !important
    }

    .v-application .purple.darken-4 {
      background-color: #4a148c !important;
      border-color: #4a148c !important
    }

    .v-application .purple--text.text--darken-4 {
      caret-color: #4a148c !important;
      color: #4a148c !important
    }

    .v-application .purple.accent-1 {
      background-color: #ea80fc !important;
      border-color: #ea80fc !important
    }

    .v-application .purple--text.text--accent-1 {
      caret-color: #ea80fc !important;
      color: #ea80fc !important
    }

    .v-application .purple.accent-2 {
      background-color: #e040fb !important;
      border-color: #e040fb !important
    }

    .v-application .purple--text.text--accent-2 {
      caret-color: #e040fb !important;
      color: #e040fb !important
    }

    .v-application .purple.accent-3 {
      background-color: #d500f9 !important;
      border-color: #d500f9 !important
    }

    .v-application .purple--text.text--accent-3 {
      caret-color: #d500f9 !important;
      color: #d500f9 !important
    }

    .v-application .purple.accent-4 {
      background-color: #a0f !important;
      border-color: #a0f !important
    }

    .v-application .purple--text.text--accent-4 {
      caret-color: #a0f !important;
      color: #a0f !important
    }

    .v-application .deep-purple {
      background-color: #673ab7 !important;
      border-color: #673ab7 !important
    }

    .v-application .deep-purple--text {
      caret-color: #673ab7 !important;
      color: #673ab7 !important
    }

    .v-application .deep-purple.lighten-5 {
      background-color: #ede7f6 !important;
      border-color: #ede7f6 !important
    }

    .v-application .deep-purple--text.text--lighten-5 {
      caret-color: #ede7f6 !important;
      color: #ede7f6 !important
    }

    .v-application .deep-purple.lighten-4 {
      background-color: #d1c4e9 !important;
      border-color: #d1c4e9 !important
    }

    .v-application .deep-purple--text.text--lighten-4 {
      caret-color: #d1c4e9 !important;
      color: #d1c4e9 !important
    }

    .v-application .deep-purple.lighten-3 {
      background-color: #b39ddb !important;
      border-color: #b39ddb !important
    }

    .v-application .deep-purple--text.text--lighten-3 {
      caret-color: #b39ddb !important;
      color: #b39ddb !important
    }

    .v-application .deep-purple.lighten-2 {
      background-color: #9575cd !important;
      border-color: #9575cd !important
    }

    .v-application .deep-purple--text.text--lighten-2 {
      caret-color: #9575cd !important;
      color: #9575cd !important
    }

    .v-application .deep-purple.lighten-1 {
      background-color: #7e57c2 !important;
      border-color: #7e57c2 !important
    }

    .v-application .deep-purple--text.text--lighten-1 {
      caret-color: #7e57c2 !important;
      color: #7e57c2 !important
    }

    .v-application .deep-purple.darken-1 {
      background-color: #5e35b1 !important;
      border-color: #5e35b1 !important
    }

    .v-application .deep-purple--text.text--darken-1 {
      caret-color: #5e35b1 !important;
      color: #5e35b1 !important
    }

    .v-application .deep-purple.darken-2 {
      background-color: #512da8 !important;
      border-color: #512da8 !important
    }

    .v-application .deep-purple--text.text--darken-2 {
      caret-color: #512da8 !important;
      color: #512da8 !important
    }

    .v-application .deep-purple.darken-3 {
      background-color: #4527a0 !important;
      border-color: #4527a0 !important
    }

    .v-application .deep-purple--text.text--darken-3 {
      caret-color: #4527a0 !important;
      color: #4527a0 !important
    }

    .v-application .deep-purple.darken-4 {
      background-color: #311b92 !important;
      border-color: #311b92 !important
    }

    .v-application .deep-purple--text.text--darken-4 {
      caret-color: #311b92 !important;
      color: #311b92 !important
    }

    .v-application .deep-purple.accent-1 {
      background-color: #b388ff !important;
      border-color: #b388ff !important
    }

    .v-application .deep-purple--text.text--accent-1 {
      caret-color: #b388ff !important;
      color: #b388ff !important
    }

    .v-application .deep-purple.accent-2 {
      background-color: #7c4dff !important;
      border-color: #7c4dff !important
    }

    .v-application .deep-purple--text.text--accent-2 {
      caret-color: #7c4dff !important;
      color: #7c4dff !important
    }

    .v-application .deep-purple.accent-3 {
      background-color: #651fff !important;
      border-color: #651fff !important
    }

    .v-application .deep-purple--text.text--accent-3 {
      caret-color: #651fff !important;
      color: #651fff !important
    }

    .v-application .deep-purple.accent-4 {
      background-color: #6200ea !important;
      border-color: #6200ea !important
    }

    .v-application .deep-purple--text.text--accent-4 {
      caret-color: #6200ea !important;
      color: #6200ea !important
    }

    .v-application .indigo {
      background-color: #3f51b5 !important;
      border-color: #3f51b5 !important
    }

    .v-application .indigo--text {
      caret-color: #3f51b5 !important;
      color: #3f51b5 !important
    }

    .v-application .indigo.lighten-5 {
      background-color: #e8eaf6 !important;
      border-color: #e8eaf6 !important
    }

    .v-application .indigo--text.text--lighten-5 {
      caret-color: #e8eaf6 !important;
      color: #e8eaf6 !important
    }

    .v-application .indigo.lighten-4 {
      background-color: #c5cae9 !important;
      border-color: #c5cae9 !important
    }

    .v-application .indigo--text.text--lighten-4 {
      caret-color: #c5cae9 !important;
      color: #c5cae9 !important
    }

    .v-application .indigo.lighten-3 {
      background-color: #9fa8da !important;
      border-color: #9fa8da !important
    }

    .v-application .indigo--text.text--lighten-3 {
      caret-color: #9fa8da !important;
      color: #9fa8da !important
    }

    .v-application .indigo.lighten-2 {
      background-color: #7986cb !important;
      border-color: #7986cb !important
    }

    .v-application .indigo--text.text--lighten-2 {
      caret-color: #7986cb !important;
      color: #7986cb !important
    }

    .v-application .indigo.lighten-1 {
      background-color: #5c6bc0 !important;
      border-color: #5c6bc0 !important
    }

    .v-application .indigo--text.text--lighten-1 {
      caret-color: #5c6bc0 !important;
      color: #5c6bc0 !important
    }

    .v-application .indigo.darken-1 {
      background-color: #3949ab !important;
      border-color: #3949ab !important
    }

    .v-application .indigo--text.text--darken-1 {
      caret-color: #3949ab !important;
      color: #3949ab !important
    }

    .v-application .indigo.darken-2 {
      background-color: #303f9f !important;
      border-color: #303f9f !important
    }

    .v-application .indigo--text.text--darken-2 {
      caret-color: #303f9f !important;
      color: #303f9f !important
    }

    .v-application .indigo.darken-3 {
      background-color: #283593 !important;
      border-color: #283593 !important
    }

    .v-application .indigo--text.text--darken-3 {
      caret-color: #283593 !important;
      color: #283593 !important
    }

    .v-application .indigo.darken-4 {
      background-color: #1a237e !important;
      border-color: #1a237e !important
    }

    .v-application .indigo--text.text--darken-4 {
      caret-color: #1a237e !important;
      color: #1a237e !important
    }

    .v-application .indigo.accent-1 {
      background-color: #8c9eff !important;
      border-color: #8c9eff !important
    }

    .v-application .indigo--text.text--accent-1 {
      caret-color: #8c9eff !important;
      color: #8c9eff !important
    }

    .v-application .indigo.accent-2 {
      background-color: #536dfe !important;
      border-color: #536dfe !important
    }

    .v-application .indigo--text.text--accent-2 {
      caret-color: #536dfe !important;
      color: #536dfe !important
    }

    .v-application .indigo.accent-3 {
      background-color: #3d5afe !important;
      border-color: #3d5afe !important
    }

    .v-application .indigo--text.text--accent-3 {
      caret-color: #3d5afe !important;
      color: #3d5afe !important
    }

    .v-application .indigo.accent-4 {
      background-color: #304ffe !important;
      border-color: #304ffe !important
    }

    .v-application .indigo--text.text--accent-4 {
      caret-color: #304ffe !important;
      color: #304ffe !important
    }

    .v-application .blue {
      background-color: #2196f3 !important;
      border-color: #2196f3 !important
    }

    .v-application .blue--text {
      caret-color: #2196f3 !important;
      color: #2196f3 !important
    }

    .v-application .blue.lighten-5 {
      background-color: #e3f2fd !important;
      border-color: #e3f2fd !important
    }

    .v-application .blue--text.text--lighten-5 {
      caret-color: #e3f2fd !important;
      color: #e3f2fd !important
    }

    .v-application .blue.lighten-4 {
      background-color: #bbdefb !important;
      border-color: #bbdefb !important
    }

    .v-application .blue--text.text--lighten-4 {
      caret-color: #bbdefb !important;
      color: #bbdefb !important
    }

    .v-application .blue.lighten-3 {
      background-color: #90caf9 !important;
      border-color: #90caf9 !important
    }

    .v-application .blue--text.text--lighten-3 {
      caret-color: #90caf9 !important;
      color: #90caf9 !important
    }

    .v-application .blue.lighten-2 {
      background-color: #64b5f6 !important;
      border-color: #64b5f6 !important
    }

    .v-application .blue--text.text--lighten-2 {
      caret-color: #64b5f6 !important;
      color: #64b5f6 !important
    }

    .v-application .blue.lighten-1 {
      background-color: #42a5f5 !important;
      border-color: #42a5f5 !important
    }

    .v-application .blue--text.text--lighten-1 {
      caret-color: #42a5f5 !important;
      color: #42a5f5 !important
    }

    .v-application .blue.darken-1 {
      background-color: #1e88e5 !important;
      border-color: #1e88e5 !important
    }

    .v-application .blue--text.text--darken-1 {
      caret-color: #1e88e5 !important;
      color: #1e88e5 !important
    }

    .v-application .blue.darken-2 {
      background-color: #1976d2 !important;
      border-color: #1976d2 !important
    }

    .v-application .blue--text.text--darken-2 {
      caret-color: #1976d2 !important;
      color: #1976d2 !important
    }

    .v-application .blue.darken-3 {
      background-color: #1565c0 !important;
      border-color: #1565c0 !important
    }

    .v-application .blue--text.text--darken-3 {
      caret-color: #1565c0 !important;
      color: #1565c0 !important
    }

    .v-application .blue.darken-4 {
      background-color: #0d47a1 !important;
      border-color: #0d47a1 !important
    }

    .v-application .blue--text.text--darken-4 {
      caret-color: #0d47a1 !important;
      color: #0d47a1 !important
    }

    .v-application .blue.accent-1 {
      background-color: #82b1ff !important;
      border-color: #82b1ff !important
    }

    .v-application .blue--text.text--accent-1 {
      caret-color: #82b1ff !important;
      color: #82b1ff !important
    }

    .v-application .blue.accent-2 {
      background-color: #448aff !important;
      border-color: #448aff !important
    }

    .v-application .blue--text.text--accent-2 {
      caret-color: #448aff !important;
      color: #448aff !important
    }

    .v-application .blue.accent-3 {
      background-color: #2979ff !important;
      border-color: #2979ff !important
    }

    .v-application .blue--text.text--accent-3 {
      caret-color: #2979ff !important;
      color: #2979ff !important
    }

    .v-application .blue.accent-4 {
      background-color: #2962ff !important;
      border-color: #2962ff !important
    }

    .v-application .blue--text.text--accent-4 {
      caret-color: #2962ff !important;
      color: #2962ff !important
    }

    .v-application .light-blue {
      background-color: #03a9f4 !important;
      border-color: #03a9f4 !important
    }

    .v-application .light-blue--text {
      caret-color: #03a9f4 !important;
      color: #03a9f4 !important
    }

    .v-application .light-blue.lighten-5 {
      background-color: #e1f5fe !important;
      border-color: #e1f5fe !important
    }

    .v-application .light-blue--text.text--lighten-5 {
      caret-color: #e1f5fe !important;
      color: #e1f5fe !important
    }

    .v-application .light-blue.lighten-4 {
      background-color: #b3e5fc !important;
      border-color: #b3e5fc !important
    }

    .v-application .light-blue--text.text--lighten-4 {
      caret-color: #b3e5fc !important;
      color: #b3e5fc !important
    }

    .v-application .light-blue.lighten-3 {
      background-color: #81d4fa !important;
      border-color: #81d4fa !important
    }

    .v-application .light-blue--text.text--lighten-3 {
      caret-color: #81d4fa !important;
      color: #81d4fa !important
    }

    .v-application .light-blue.lighten-2 {
      background-color: #4fc3f7 !important;
      border-color: #4fc3f7 !important
    }

    .v-application .light-blue--text.text--lighten-2 {
      caret-color: #4fc3f7 !important;
      color: #4fc3f7 !important
    }

    .v-application .light-blue.lighten-1 {
      background-color: #29b6f6 !important;
      border-color: #29b6f6 !important
    }

    .v-application .light-blue--text.text--lighten-1 {
      caret-color: #29b6f6 !important;
      color: #29b6f6 !important
    }

    .v-application .light-blue.darken-1 {
      background-color: #039be5 !important;
      border-color: #039be5 !important
    }

    .v-application .light-blue--text.text--darken-1 {
      caret-color: #039be5 !important;
      color: #039be5 !important
    }

    .v-application .light-blue.darken-2 {
      background-color: #0288d1 !important;
      border-color: #0288d1 !important
    }

    .v-application .light-blue--text.text--darken-2 {
      caret-color: #0288d1 !important;
      color: #0288d1 !important
    }

    .v-application .light-blue.darken-3 {
      background-color: #0277bd !important;
      border-color: #0277bd !important
    }

    .v-application .light-blue--text.text--darken-3 {
      caret-color: #0277bd !important;
      color: #0277bd !important
    }

    .v-application .light-blue.darken-4 {
      background-color: #01579b !important;
      border-color: #01579b !important
    }

    .v-application .light-blue--text.text--darken-4 {
      caret-color: #01579b !important;
      color: #01579b !important
    }

    .v-application .light-blue.accent-1 {
      background-color: #80d8ff !important;
      border-color: #80d8ff !important
    }

    .v-application .light-blue--text.text--accent-1 {
      caret-color: #80d8ff !important;
      color: #80d8ff !important
    }

    .v-application .light-blue.accent-2 {
      background-color: #40c4ff !important;
      border-color: #40c4ff !important
    }

    .v-application .light-blue--text.text--accent-2 {
      caret-color: #40c4ff !important;
      color: #40c4ff !important
    }

    .v-application .light-blue.accent-3 {
      background-color: #00b0ff !important;
      border-color: #00b0ff !important
    }

    .v-application .light-blue--text.text--accent-3 {
      caret-color: #00b0ff !important;
      color: #00b0ff !important
    }

    .v-application .light-blue.accent-4 {
      background-color: #0091ea !important;
      border-color: #0091ea !important
    }

    .v-application .light-blue--text.text--accent-4 {
      caret-color: #0091ea !important;
      color: #0091ea !important
    }

    .v-application .cyan {
      background-color: #00bcd4 !important;
      border-color: #00bcd4 !important
    }

    .v-application .cyan--text {
      caret-color: #00bcd4 !important;
      color: #00bcd4 !important
    }

    .v-application .cyan.lighten-5 {
      background-color: #e0f7fa !important;
      border-color: #e0f7fa !important
    }

    .v-application .cyan--text.text--lighten-5 {
      caret-color: #e0f7fa !important;
      color: #e0f7fa !important
    }

    .v-application .cyan.lighten-4 {
      background-color: #b2ebf2 !important;
      border-color: #b2ebf2 !important
    }

    .v-application .cyan--text.text--lighten-4 {
      caret-color: #b2ebf2 !important;
      color: #b2ebf2 !important
    }

    .v-application .cyan.lighten-3 {
      background-color: #80deea !important;
      border-color: #80deea !important
    }

    .v-application .cyan--text.text--lighten-3 {
      caret-color: #80deea !important;
      color: #80deea !important
    }

    .v-application .cyan.lighten-2 {
      background-color: #4dd0e1 !important;
      border-color: #4dd0e1 !important
    }

    .v-application .cyan--text.text--lighten-2 {
      caret-color: #4dd0e1 !important;
      color: #4dd0e1 !important
    }

    .v-application .cyan.lighten-1 {
      background-color: #26c6da !important;
      border-color: #26c6da !important
    }

    .v-application .cyan--text.text--lighten-1 {
      caret-color: #26c6da !important;
      color: #26c6da !important
    }

    .v-application .cyan.darken-1 {
      background-color: #00acc1 !important;
      border-color: #00acc1 !important
    }

    .v-application .cyan--text.text--darken-1 {
      caret-color: #00acc1 !important;
      color: #00acc1 !important
    }

    .v-application .cyan.darken-2 {
      background-color: #0097a7 !important;
      border-color: #0097a7 !important
    }

    .v-application .cyan--text.text--darken-2 {
      caret-color: #0097a7 !important;
      color: #0097a7 !important
    }

    .v-application .cyan.darken-3 {
      background-color: #00838f !important;
      border-color: #00838f !important
    }

    .v-application .cyan--text.text--darken-3 {
      caret-color: #00838f !important;
      color: #00838f !important
    }

    .v-application .cyan.darken-4 {
      background-color: #006064 !important;
      border-color: #006064 !important
    }

    .v-application .cyan--text.text--darken-4 {
      caret-color: #006064 !important;
      color: #006064 !important
    }

    .v-application .cyan.accent-1 {
      background-color: #84ffff !important;
      border-color: #84ffff !important
    }

    .v-application .cyan--text.text--accent-1 {
      caret-color: #84ffff !important;
      color: #84ffff !important
    }

    .v-application .cyan.accent-2 {
      background-color: #18ffff !important;
      border-color: #18ffff !important
    }

    .v-application .cyan--text.text--accent-2 {
      caret-color: #18ffff !important;
      color: #18ffff !important
    }

    .v-application .cyan.accent-3 {
      background-color: #00e5ff !important;
      border-color: #00e5ff !important
    }

    .v-application .cyan--text.text--accent-3 {
      caret-color: #00e5ff !important;
      color: #00e5ff !important
    }

    .v-application .cyan.accent-4 {
      background-color: #00b8d4 !important;
      border-color: #00b8d4 !important
    }

    .v-application .cyan--text.text--accent-4 {
      caret-color: #00b8d4 !important;
      color: #00b8d4 !important
    }

    .v-application .teal {
      background-color: #009688 !important;
      border-color: #009688 !important
    }

    .v-application .teal--text {
      caret-color: #009688 !important;
      color: #009688 !important
    }

    .v-application .teal.lighten-5 {
      background-color: #e0f2f1 !important;
      border-color: #e0f2f1 !important
    }

    .v-application .teal--text.text--lighten-5 {
      caret-color: #e0f2f1 !important;
      color: #e0f2f1 !important
    }

    .v-application .teal.lighten-4 {
      background-color: #b2dfdb !important;
      border-color: #b2dfdb !important
    }

    .v-application .teal--text.text--lighten-4 {
      caret-color: #b2dfdb !important;
      color: #b2dfdb !important
    }

    .v-application .teal.lighten-3 {
      background-color: #80cbc4 !important;
      border-color: #80cbc4 !important
    }

    .v-application .teal--text.text--lighten-3 {
      caret-color: #80cbc4 !important;
      color: #80cbc4 !important
    }

    .v-application .teal.lighten-2 {
      background-color: #4db6ac !important;
      border-color: #4db6ac !important
    }

    .v-application .teal--text.text--lighten-2 {
      caret-color: #4db6ac !important;
      color: #4db6ac !important
    }

    .v-application .teal.lighten-1 {
      background-color: #26a69a !important;
      border-color: #26a69a !important
    }

    .v-application .teal--text.text--lighten-1 {
      caret-color: #26a69a !important;
      color: #26a69a !important
    }

    .v-application .teal.darken-1 {
      background-color: #00897b !important;
      border-color: #00897b !important
    }

    .v-application .teal--text.text--darken-1 {
      caret-color: #00897b !important;
      color: #00897b !important
    }

    .v-application .teal.darken-2 {
      background-color: #00796b !important;
      border-color: #00796b !important
    }

    .v-application .teal--text.text--darken-2 {
      caret-color: #00796b !important;
      color: #00796b !important
    }

    .v-application .teal.darken-3 {
      background-color: #00695c !important;
      border-color: #00695c !important
    }

    .v-application .teal--text.text--darken-3 {
      caret-color: #00695c !important;
      color: #00695c !important
    }

    .v-application .teal.darken-4 {
      background-color: #004d40 !important;
      border-color: #004d40 !important
    }

    .v-application .teal--text.text--darken-4 {
      caret-color: #004d40 !important;
      color: #004d40 !important
    }

    .v-application .teal.accent-1 {
      background-color: #a7ffeb !important;
      border-color: #a7ffeb !important
    }

    .v-application .teal--text.text--accent-1 {
      caret-color: #a7ffeb !important;
      color: #a7ffeb !important
    }

    .v-application .teal.accent-2 {
      background-color: #64ffda !important;
      border-color: #64ffda !important
    }

    .v-application .teal--text.text--accent-2 {
      caret-color: #64ffda !important;
      color: #64ffda !important
    }

    .v-application .teal.accent-3 {
      background-color: #1de9b6 !important;
      border-color: #1de9b6 !important
    }

    .v-application .teal--text.text--accent-3 {
      caret-color: #1de9b6 !important;
      color: #1de9b6 !important
    }

    .v-application .teal.accent-4 {
      background-color: #00bfa5 !important;
      border-color: #00bfa5 !important
    }

    .v-application .teal--text.text--accent-4 {
      caret-color: #00bfa5 !important;
      color: #00bfa5 !important
    }

    .v-application .green {
      background-color: #4caf50 !important;
      border-color: #4caf50 !important
    }

    .v-application .green--text {
      caret-color: #4caf50 !important;
      color: #4caf50 !important
    }

    .v-application .green.lighten-5 {
      background-color: #e8f5e9 !important;
      border-color: #e8f5e9 !important
    }

    .v-application .green--text.text--lighten-5 {
      caret-color: #e8f5e9 !important;
      color: #e8f5e9 !important
    }

    .v-application .green.lighten-4 {
      background-color: #c8e6c9 !important;
      border-color: #c8e6c9 !important
    }

    .v-application .green--text.text--lighten-4 {
      caret-color: #c8e6c9 !important;
      color: #c8e6c9 !important
    }

    .v-application .green.lighten-3 {
      background-color: #a5d6a7 !important;
      border-color: #a5d6a7 !important
    }

    .v-application .green--text.text--lighten-3 {
      caret-color: #a5d6a7 !important;
      color: #a5d6a7 !important
    }

    .v-application .green.lighten-2 {
      background-color: #81c784 !important;
      border-color: #81c784 !important
    }

    .v-application .green--text.text--lighten-2 {
      caret-color: #81c784 !important;
      color: #81c784 !important
    }

    .v-application .green.lighten-1 {
      background-color: #66bb6a !important;
      border-color: #66bb6a !important
    }

    .v-application .green--text.text--lighten-1 {
      caret-color: #66bb6a !important;
      color: #66bb6a !important
    }

    .v-application .green.darken-1 {
      background-color: #43a047 !important;
      border-color: #43a047 !important
    }

    .v-application .green--text.text--darken-1 {
      caret-color: #43a047 !important;
      color: #43a047 !important
    }

    .v-application .green.darken-2 {
      background-color: #388e3c !important;
      border-color: #388e3c !important
    }

    .v-application .green--text.text--darken-2 {
      caret-color: #388e3c !important;
      color: #388e3c !important
    }

    .v-application .green.darken-3 {
      background-color: #2e7d32 !important;
      border-color: #2e7d32 !important
    }

    .v-application .green--text.text--darken-3 {
      caret-color: #2e7d32 !important;
      color: #2e7d32 !important
    }

    .v-application .green.darken-4 {
      background-color: #1b5e20 !important;
      border-color: #1b5e20 !important
    }

    .v-application .green--text.text--darken-4 {
      caret-color: #1b5e20 !important;
      color: #1b5e20 !important
    }

    .v-application .green.accent-1 {
      background-color: #b9f6ca !important;
      border-color: #b9f6ca !important
    }

    .v-application .green--text.text--accent-1 {
      caret-color: #b9f6ca !important;
      color: #b9f6ca !important
    }

    .v-application .green.accent-2 {
      background-color: #69f0ae !important;
      border-color: #69f0ae !important
    }

    .v-application .green--text.text--accent-2 {
      caret-color: #69f0ae !important;
      color: #69f0ae !important
    }

    .v-application .green.accent-3 {
      background-color: #00e676 !important;
      border-color: #00e676 !important
    }

    .v-application .green--text.text--accent-3 {
      caret-color: #00e676 !important;
      color: #00e676 !important
    }

    .v-application .green.accent-4 {
      background-color: #00c853 !important;
      border-color: #00c853 !important
    }

    .v-application .green--text.text--accent-4 {
      caret-color: #00c853 !important;
      color: #00c853 !important
    }

    .v-application .light-green {
      background-color: #8bc34a !important;
      border-color: #8bc34a !important
    }

    .v-application .light-green--text {
      caret-color: #8bc34a !important;
      color: #8bc34a !important
    }

    .v-application .light-green.lighten-5 {
      background-color: #f1f8e9 !important;
      border-color: #f1f8e9 !important
    }

    .v-application .light-green--text.text--lighten-5 {
      caret-color: #f1f8e9 !important;
      color: #f1f8e9 !important
    }

    .v-application .light-green.lighten-4 {
      background-color: #dcedc8 !important;
      border-color: #dcedc8 !important
    }

    .v-application .light-green--text.text--lighten-4 {
      caret-color: #dcedc8 !important;
      color: #dcedc8 !important
    }

    .v-application .light-green.lighten-3 {
      background-color: #c5e1a5 !important;
      border-color: #c5e1a5 !important
    }

    .v-application .light-green--text.text--lighten-3 {
      caret-color: #c5e1a5 !important;
      color: #c5e1a5 !important
    }

    .v-application .light-green.lighten-2 {
      background-color: #aed581 !important;
      border-color: #aed581 !important
    }

    .v-application .light-green--text.text--lighten-2 {
      caret-color: #aed581 !important;
      color: #aed581 !important
    }

    .v-application .light-green.lighten-1 {
      background-color: #9ccc65 !important;
      border-color: #9ccc65 !important
    }

    .v-application .light-green--text.text--lighten-1 {
      caret-color: #9ccc65 !important;
      color: #9ccc65 !important
    }

    .v-application .light-green.darken-1 {
      background-color: #7cb342 !important;
      border-color: #7cb342 !important
    }

    .v-application .light-green--text.text--darken-1 {
      caret-color: #7cb342 !important;
      color: #7cb342 !important
    }

    .v-application .light-green.darken-2 {
      background-color: #689f38 !important;
      border-color: #689f38 !important
    }

    .v-application .light-green--text.text--darken-2 {
      caret-color: #689f38 !important;
      color: #689f38 !important
    }

    .v-application .light-green.darken-3 {
      background-color: #558b2f !important;
      border-color: #558b2f !important
    }

    .v-application .light-green--text.text--darken-3 {
      caret-color: #558b2f !important;
      color: #558b2f !important
    }

    .v-application .light-green.darken-4 {
      background-color: #33691e !important;
      border-color: #33691e !important
    }

    .v-application .light-green--text.text--darken-4 {
      caret-color: #33691e !important;
      color: #33691e !important
    }

    .v-application .light-green.accent-1 {
      background-color: #ccff90 !important;
      border-color: #ccff90 !important
    }

    .v-application .light-green--text.text--accent-1 {
      caret-color: #ccff90 !important;
      color: #ccff90 !important
    }

    .v-application .light-green.accent-2 {
      background-color: #b2ff59 !important;
      border-color: #b2ff59 !important
    }

    .v-application .light-green--text.text--accent-2 {
      caret-color: #b2ff59 !important;
      color: #b2ff59 !important
    }

    .v-application .light-green.accent-3 {
      background-color: #76ff03 !important;
      border-color: #76ff03 !important
    }

    .v-application .light-green--text.text--accent-3 {
      caret-color: #76ff03 !important;
      color: #76ff03 !important
    }

    .v-application .light-green.accent-4 {
      background-color: #64dd17 !important;
      border-color: #64dd17 !important
    }

    .v-application .light-green--text.text--accent-4 {
      caret-color: #64dd17 !important;
      color: #64dd17 !important
    }

    .v-application .lime {
      background-color: #cddc39 !important;
      border-color: #cddc39 !important
    }

    .v-application .lime--text {
      caret-color: #cddc39 !important;
      color: #cddc39 !important
    }

    .v-application .lime.lighten-5 {
      background-color: #f9fbe7 !important;
      border-color: #f9fbe7 !important
    }

    .v-application .lime--text.text--lighten-5 {
      caret-color: #f9fbe7 !important;
      color: #f9fbe7 !important
    }

    .v-application .lime.lighten-4 {
      background-color: #f0f4c3 !important;
      border-color: #f0f4c3 !important
    }

    .v-application .lime--text.text--lighten-4 {
      caret-color: #f0f4c3 !important;
      color: #f0f4c3 !important
    }

    .v-application .lime.lighten-3 {
      background-color: #e6ee9c !important;
      border-color: #e6ee9c !important
    }

    .v-application .lime--text.text--lighten-3 {
      caret-color: #e6ee9c !important;
      color: #e6ee9c !important
    }

    .v-application .lime.lighten-2 {
      background-color: #dce775 !important;
      border-color: #dce775 !important
    }

    .v-application .lime--text.text--lighten-2 {
      caret-color: #dce775 !important;
      color: #dce775 !important
    }

    .v-application .lime.lighten-1 {
      background-color: #d4e157 !important;
      border-color: #d4e157 !important
    }

    .v-application .lime--text.text--lighten-1 {
      caret-color: #d4e157 !important;
      color: #d4e157 !important
    }

    .v-application .lime.darken-1 {
      background-color: #c0ca33 !important;
      border-color: #c0ca33 !important
    }

    .v-application .lime--text.text--darken-1 {
      caret-color: #c0ca33 !important;
      color: #c0ca33 !important
    }

    .v-application .lime.darken-2 {
      background-color: #afb42b !important;
      border-color: #afb42b !important
    }

    .v-application .lime--text.text--darken-2 {
      caret-color: #afb42b !important;
      color: #afb42b !important
    }

    .v-application .lime.darken-3 {
      background-color: #9e9d24 !important;
      border-color: #9e9d24 !important
    }

    .v-application .lime--text.text--darken-3 {
      caret-color: #9e9d24 !important;
      color: #9e9d24 !important
    }

    .v-application .lime.darken-4 {
      background-color: #827717 !important;
      border-color: #827717 !important
    }

    .v-application .lime--text.text--darken-4 {
      caret-color: #827717 !important;
      color: #827717 !important
    }

    .v-application .lime.accent-1 {
      background-color: #f4ff81 !important;
      border-color: #f4ff81 !important
    }

    .v-application .lime--text.text--accent-1 {
      caret-color: #f4ff81 !important;
      color: #f4ff81 !important
    }

    .v-application .lime.accent-2 {
      background-color: #eeff41 !important;
      border-color: #eeff41 !important
    }

    .v-application .lime--text.text--accent-2 {
      caret-color: #eeff41 !important;
      color: #eeff41 !important
    }

    .v-application .lime.accent-3 {
      background-color: #c6ff00 !important;
      border-color: #c6ff00 !important
    }

    .v-application .lime--text.text--accent-3 {
      caret-color: #c6ff00 !important;
      color: #c6ff00 !important
    }

    .v-application .lime.accent-4 {
      background-color: #aeea00 !important;
      border-color: #aeea00 !important
    }

    .v-application .lime--text.text--accent-4 {
      caret-color: #aeea00 !important;
      color: #aeea00 !important
    }

    .v-application .yellow {
      background-color: #ffeb3b !important;
      border-color: #ffeb3b !important
    }

    .v-application .yellow--text {
      caret-color: #ffeb3b !important;
      color: #ffeb3b !important
    }

    .v-application .yellow.lighten-5 {
      background-color: #fffde7 !important;
      border-color: #fffde7 !important
    }

    .v-application .yellow--text.text--lighten-5 {
      caret-color: #fffde7 !important;
      color: #fffde7 !important
    }

    .v-application .yellow.lighten-4 {
      background-color: #fff9c4 !important;
      border-color: #fff9c4 !important
    }

    .v-application .yellow--text.text--lighten-4 {
      caret-color: #fff9c4 !important;
      color: #fff9c4 !important
    }

    .v-application .yellow.lighten-3 {
      background-color: #fff59d !important;
      border-color: #fff59d !important
    }

    .v-application .yellow--text.text--lighten-3 {
      caret-color: #fff59d !important;
      color: #fff59d !important
    }

    .v-application .yellow.lighten-2 {
      background-color: #fff176 !important;
      border-color: #fff176 !important
    }

    .v-application .yellow--text.text--lighten-2 {
      caret-color: #fff176 !important;
      color: #fff176 !important
    }

    .v-application .yellow.lighten-1 {
      background-color: #ffee58 !important;
      border-color: #ffee58 !important
    }

    .v-application .yellow--text.text--lighten-1 {
      caret-color: #ffee58 !important;
      color: #ffee58 !important
    }

    .v-application .yellow.darken-1 {
      background-color: #fdd835 !important;
      border-color: #fdd835 !important
    }

    .v-application .yellow--text.text--darken-1 {
      caret-color: #fdd835 !important;
      color: #fdd835 !important
    }

    .v-application .yellow.darken-2 {
      background-color: #fbc02d !important;
      border-color: #fbc02d !important
    }

    .v-application .yellow--text.text--darken-2 {
      caret-color: #fbc02d !important;
      color: #fbc02d !important
    }

    .v-application .yellow.darken-3 {
      background-color: #f9a825 !important;
      border-color: #f9a825 !important
    }

    .v-application .yellow--text.text--darken-3 {
      caret-color: #f9a825 !important;
      color: #f9a825 !important
    }

    .v-application .yellow.darken-4 {
      background-color: #f57f17 !important;
      border-color: #f57f17 !important
    }

    .v-application .yellow--text.text--darken-4 {
      caret-color: #f57f17 !important;
      color: #f57f17 !important
    }

    .v-application .yellow.accent-1 {
      background-color: #ffff8d !important;
      border-color: #ffff8d !important
    }

    .v-application .yellow--text.text--accent-1 {
      caret-color: #ffff8d !important;
      color: #ffff8d !important
    }

    .v-application .yellow.accent-2 {
      background-color: #ff0 !important;
      border-color: #ff0 !important
    }

    .v-application .yellow--text.text--accent-2 {
      caret-color: #ff0 !important;
      color: #ff0 !important
    }

    .v-application .yellow.accent-3 {
      background-color: #ffea00 !important;
      border-color: #ffea00 !important
    }

    .v-application .yellow--text.text--accent-3 {
      caret-color: #ffea00 !important;
      color: #ffea00 !important
    }

    .v-application .yellow.accent-4 {
      background-color: #ffd600 !important;
      border-color: #ffd600 !important
    }

    .v-application .yellow--text.text--accent-4 {
      caret-color: #ffd600 !important;
      color: #ffd600 !important
    }

    .v-application .amber {
      background-color: #ffc107 !important;
      border-color: #ffc107 !important
    }

    .v-application .amber--text {
      caret-color: #ffc107 !important;
      color: #ffc107 !important
    }

    .v-application .amber.lighten-5 {
      background-color: #fff8e1 !important;
      border-color: #fff8e1 !important
    }

    .v-application .amber--text.text--lighten-5 {
      caret-color: #fff8e1 !important;
      color: #fff8e1 !important
    }

    .v-application .amber.lighten-4 {
      background-color: #ffecb3 !important;
      border-color: #ffecb3 !important
    }

    .v-application .amber--text.text--lighten-4 {
      caret-color: #ffecb3 !important;
      color: #ffecb3 !important
    }

    .v-application .amber.lighten-3 {
      background-color: #ffe082 !important;
      border-color: #ffe082 !important
    }

    .v-application .amber--text.text--lighten-3 {
      caret-color: #ffe082 !important;
      color: #ffe082 !important
    }

    .v-application .amber.lighten-2 {
      background-color: #ffd54f !important;
      border-color: #ffd54f !important
    }

    .v-application .amber--text.text--lighten-2 {
      caret-color: #ffd54f !important;
      color: #ffd54f !important
    }

    .v-application .amber.lighten-1 {
      background-color: #ffca28 !important;
      border-color: #ffca28 !important
    }

    .v-application .amber--text.text--lighten-1 {
      caret-color: #ffca28 !important;
      color: #ffca28 !important
    }

    .v-application .amber.darken-1 {
      background-color: #ffb300 !important;
      border-color: #ffb300 !important
    }

    .v-application .amber--text.text--darken-1 {
      caret-color: #ffb300 !important;
      color: #ffb300 !important
    }

    .v-application .amber.darken-2 {
      background-color: #ffa000 !important;
      border-color: #ffa000 !important
    }

    .v-application .amber--text.text--darken-2 {
      caret-color: #ffa000 !important;
      color: #ffa000 !important
    }

    .v-application .amber.darken-3 {
      background-color: #ff8f00 !important;
      border-color: #ff8f00 !important
    }

    .v-application .amber--text.text--darken-3 {
      caret-color: #ff8f00 !important;
      color: #ff8f00 !important
    }

    .v-application .amber.darken-4 {
      background-color: #ff6f00 !important;
      border-color: #ff6f00 !important
    }

    .v-application .amber--text.text--darken-4 {
      caret-color: #ff6f00 !important;
      color: #ff6f00 !important
    }

    .v-application .amber.accent-1 {
      background-color: #ffe57f !important;
      border-color: #ffe57f !important
    }

    .v-application .amber--text.text--accent-1 {
      caret-color: #ffe57f !important;
      color: #ffe57f !important
    }

    .v-application .amber.accent-2 {
      background-color: #ffd740 !important;
      border-color: #ffd740 !important
    }

    .v-application .amber--text.text--accent-2 {
      caret-color: #ffd740 !important;
      color: #ffd740 !important
    }

    .v-application .amber.accent-3 {
      background-color: #ffc400 !important;
      border-color: #ffc400 !important
    }

    .v-application .amber--text.text--accent-3 {
      caret-color: #ffc400 !important;
      color: #ffc400 !important
    }

    .v-application .amber.accent-4 {
      background-color: #ffab00 !important;
      border-color: #ffab00 !important
    }

    .v-application .amber--text.text--accent-4 {
      caret-color: #ffab00 !important;
      color: #ffab00 !important
    }

    .v-application .orange {
      background-color: #ff9800 !important;
      border-color: #ff9800 !important
    }

    .v-application .orange--text {
      caret-color: #ff9800 !important;
      color: #ff9800 !important
    }

    .v-application .orange.lighten-5 {
      background-color: #fff3e0 !important;
      border-color: #fff3e0 !important
    }

    .v-application .orange--text.text--lighten-5 {
      caret-color: #fff3e0 !important;
      color: #fff3e0 !important
    }

    .v-application .orange.lighten-4 {
      background-color: #ffe0b2 !important;
      border-color: #ffe0b2 !important
    }

    .v-application .orange--text.text--lighten-4 {
      caret-color: #ffe0b2 !important;
      color: #ffe0b2 !important
    }

    .v-application .orange.lighten-3 {
      background-color: #ffcc80 !important;
      border-color: #ffcc80 !important
    }

    .v-application .orange--text.text--lighten-3 {
      caret-color: #ffcc80 !important;
      color: #ffcc80 !important
    }

    .v-application .orange.lighten-2 {
      background-color: #ffb74d !important;
      border-color: #ffb74d !important
    }

    .v-application .orange--text.text--lighten-2 {
      caret-color: #ffb74d !important;
      color: #ffb74d !important
    }

    .v-application .orange.lighten-1 {
      background-color: #ffa726 !important;
      border-color: #ffa726 !important
    }

    .v-application .orange--text.text--lighten-1 {
      caret-color: #ffa726 !important;
      color: #ffa726 !important
    }

    .v-application .orange.darken-1 {
      background-color: #fb8c00 !important;
      border-color: #fb8c00 !important
    }

    .v-application .orange--text.text--darken-1 {
      caret-color: #fb8c00 !important;
      color: #fb8c00 !important
    }

    .v-application .orange.darken-2 {
      background-color: #f57c00 !important;
      border-color: #f57c00 !important
    }

    .v-application .orange--text.text--darken-2 {
      caret-color: #f57c00 !important;
      color: #f57c00 !important
    }

    .v-application .orange.darken-3 {
      background-color: #ef6c00 !important;
      border-color: #ef6c00 !important
    }

    .v-application .orange--text.text--darken-3 {
      caret-color: #ef6c00 !important;
      color: #ef6c00 !important
    }

    .v-application .orange.darken-4 {
      background-color: #e65100 !important;
      border-color: #e65100 !important
    }

    .v-application .orange--text.text--darken-4 {
      caret-color: #e65100 !important;
      color: #e65100 !important
    }

    .v-application .orange.accent-1 {
      background-color: #ffd180 !important;
      border-color: #ffd180 !important
    }

    .v-application .orange--text.text--accent-1 {
      caret-color: #ffd180 !important;
      color: #ffd180 !important
    }

    .v-application .orange.accent-2 {
      background-color: #ffab40 !important;
      border-color: #ffab40 !important
    }

    .v-application .orange--text.text--accent-2 {
      caret-color: #ffab40 !important;
      color: #ffab40 !important
    }

    .v-application .orange.accent-3 {
      background-color: #ff9100 !important;
      border-color: #ff9100 !important
    }

    .v-application .orange--text.text--accent-3 {
      caret-color: #ff9100 !important;
      color: #ff9100 !important
    }

    .v-application .orange.accent-4 {
      background-color: #ff6d00 !important;
      border-color: #ff6d00 !important
    }

    .v-application .orange--text.text--accent-4 {
      caret-color: #ff6d00 !important;
      color: #ff6d00 !important
    }

    .v-application .deep-orange {
      background-color: #ff5722 !important;
      border-color: #ff5722 !important
    }

    .v-application .deep-orange--text {
      caret-color: #ff5722 !important;
      color: #ff5722 !important
    }

    .v-application .deep-orange.lighten-5 {
      background-color: #fbe9e7 !important;
      border-color: #fbe9e7 !important
    }

    .v-application .deep-orange--text.text--lighten-5 {
      caret-color: #fbe9e7 !important;
      color: #fbe9e7 !important
    }

    .v-application .deep-orange.lighten-4 {
      background-color: #ffccbc !important;
      border-color: #ffccbc !important
    }

    .v-application .deep-orange--text.text--lighten-4 {
      caret-color: #ffccbc !important;
      color: #ffccbc !important
    }

    .v-application .deep-orange.lighten-3 {
      background-color: #ffab91 !important;
      border-color: #ffab91 !important
    }

    .v-application .deep-orange--text.text--lighten-3 {
      caret-color: #ffab91 !important;
      color: #ffab91 !important
    }

    .v-application .deep-orange.lighten-2 {
      background-color: #ff8a65 !important;
      border-color: #ff8a65 !important
    }

    .v-application .deep-orange--text.text--lighten-2 {
      caret-color: #ff8a65 !important;
      color: #ff8a65 !important
    }

    .v-application .deep-orange.lighten-1 {
      background-color: #ff7043 !important;
      border-color: #ff7043 !important
    }

    .v-application .deep-orange--text.text--lighten-1 {
      caret-color: #ff7043 !important;
      color: #ff7043 !important
    }

    .v-application .deep-orange.darken-1 {
      background-color: #f4511e !important;
      border-color: #f4511e !important
    }

    .v-application .deep-orange--text.text--darken-1 {
      caret-color: #f4511e !important;
      color: #f4511e !important
    }

    .v-application .deep-orange.darken-2 {
      background-color: #e64a19 !important;
      border-color: #e64a19 !important
    }

    .v-application .deep-orange--text.text--darken-2 {
      caret-color: #e64a19 !important;
      color: #e64a19 !important
    }

    .v-application .deep-orange.darken-3 {
      background-color: #d84315 !important;
      border-color: #d84315 !important
    }

    .v-application .deep-orange--text.text--darken-3 {
      caret-color: #d84315 !important;
      color: #d84315 !important
    }

    .v-application .deep-orange.darken-4 {
      background-color: #bf360c !important;
      border-color: #bf360c !important
    }

    .v-application .deep-orange--text.text--darken-4 {
      caret-color: #bf360c !important;
      color: #bf360c !important
    }

    .v-application .deep-orange.accent-1 {
      background-color: #ff9e80 !important;
      border-color: #ff9e80 !important
    }

    .v-application .deep-orange--text.text--accent-1 {
      caret-color: #ff9e80 !important;
      color: #ff9e80 !important
    }

    .v-application .deep-orange.accent-2 {
      background-color: #ff6e40 !important;
      border-color: #ff6e40 !important
    }

    .v-application .deep-orange--text.text--accent-2 {
      caret-color: #ff6e40 !important;
      color: #ff6e40 !important
    }

    .v-application .deep-orange.accent-3 {
      background-color: #ff3d00 !important;
      border-color: #ff3d00 !important
    }

    .v-application .deep-orange--text.text--accent-3 {
      caret-color: #ff3d00 !important;
      color: #ff3d00 !important
    }

    .v-application .deep-orange.accent-4 {
      background-color: #dd2c00 !important;
      border-color: #dd2c00 !important
    }

    .v-application .deep-orange--text.text--accent-4 {
      caret-color: #dd2c00 !important;
      color: #dd2c00 !important
    }

    .v-application .brown {
      background-color: #795548 !important;
      border-color: #795548 !important
    }

    .v-application .brown--text {
      caret-color: #795548 !important;
      color: #795548 !important
    }

    .v-application .brown.lighten-5 {
      background-color: #efebe9 !important;
      border-color: #efebe9 !important
    }

    .v-application .brown--text.text--lighten-5 {
      caret-color: #efebe9 !important;
      color: #efebe9 !important
    }

    .v-application .brown.lighten-4 {
      background-color: #d7ccc8 !important;
      border-color: #d7ccc8 !important
    }

    .v-application .brown--text.text--lighten-4 {
      caret-color: #d7ccc8 !important;
      color: #d7ccc8 !important
    }

    .v-application .brown.lighten-3 {
      background-color: #bcaaa4 !important;
      border-color: #bcaaa4 !important
    }

    .v-application .brown--text.text--lighten-3 {
      caret-color: #bcaaa4 !important;
      color: #bcaaa4 !important
    }

    .v-application .brown.lighten-2 {
      background-color: #a1887f !important;
      border-color: #a1887f !important
    }

    .v-application .brown--text.text--lighten-2 {
      caret-color: #a1887f !important;
      color: #a1887f !important
    }

    .v-application .brown.lighten-1 {
      background-color: #8d6e63 !important;
      border-color: #8d6e63 !important
    }

    .v-application .brown--text.text--lighten-1 {
      caret-color: #8d6e63 !important;
      color: #8d6e63 !important
    }

    .v-application .brown.darken-1 {
      background-color: #6d4c41 !important;
      border-color: #6d4c41 !important
    }

    .v-application .brown--text.text--darken-1 {
      caret-color: #6d4c41 !important;
      color: #6d4c41 !important
    }

    .v-application .brown.darken-2 {
      background-color: #5d4037 !important;
      border-color: #5d4037 !important
    }

    .v-application .brown--text.text--darken-2 {
      caret-color: #5d4037 !important;
      color: #5d4037 !important
    }

    .v-application .brown.darken-3 {
      background-color: #4e342e !important;
      border-color: #4e342e !important
    }

    .v-application .brown--text.text--darken-3 {
      caret-color: #4e342e !important;
      color: #4e342e !important
    }

    .v-application .brown.darken-4 {
      background-color: #3e2723 !important;
      border-color: #3e2723 !important
    }

    .v-application .brown--text.text--darken-4 {
      caret-color: #3e2723 !important;
      color: #3e2723 !important
    }

    .v-application .blue-grey {
      background-color: #607d8b !important;
      border-color: #607d8b !important
    }

    .v-application .blue-grey--text {
      caret-color: #607d8b !important;
      color: #607d8b !important
    }

    .v-application .blue-grey.lighten-5 {
      background-color: #eceff1 !important;
      border-color: #eceff1 !important
    }

    .v-application .blue-grey--text.text--lighten-5 {
      caret-color: #eceff1 !important;
      color: #eceff1 !important
    }

    .v-application .blue-grey.lighten-4 {
      background-color: #cfd8dc !important;
      border-color: #cfd8dc !important
    }

    .v-application .blue-grey--text.text--lighten-4 {
      caret-color: #cfd8dc !important;
      color: #cfd8dc !important
    }

    .v-application .blue-grey.lighten-3 {
      background-color: #b0bec5 !important;
      border-color: #b0bec5 !important
    }

    .v-application .blue-grey--text.text--lighten-3 {
      caret-color: #b0bec5 !important;
      color: #b0bec5 !important
    }

    .v-application .blue-grey.lighten-2 {
      background-color: #90a4ae !important;
      border-color: #90a4ae !important
    }

    .v-application .blue-grey--text.text--lighten-2 {
      caret-color: #90a4ae !important;
      color: #90a4ae !important
    }

    .v-application .blue-grey.lighten-1 {
      background-color: #78909c !important;
      border-color: #78909c !important
    }

    .v-application .blue-grey--text.text--lighten-1 {
      caret-color: #78909c !important;
      color: #78909c !important
    }

    .v-application .blue-grey.darken-1 {
      background-color: #546e7a !important;
      border-color: #546e7a !important
    }

    .v-application .blue-grey--text.text--darken-1 {
      caret-color: #546e7a !important;
      color: #546e7a !important
    }

    .v-application .blue-grey.darken-2 {
      background-color: #455a64 !important;
      border-color: #455a64 !important
    }

    .v-application .blue-grey--text.text--darken-2 {
      caret-color: #455a64 !important;
      color: #455a64 !important
    }

    .v-application .blue-grey.darken-3 {
      background-color: #37474f !important;
      border-color: #37474f !important
    }

    .v-application .blue-grey--text.text--darken-3 {
      caret-color: #37474f !important;
      color: #37474f !important
    }

    .v-application .blue-grey.darken-4 {
      background-color: #263238 !important;
      border-color: #263238 !important
    }

    .v-application .blue-grey--text.text--darken-4 {
      caret-color: #263238 !important;
      color: #263238 !important
    }

    .v-application .grey {
      background-color: #9e9e9e !important;
      border-color: #9e9e9e !important
    }

    .v-application .grey--text {
      caret-color: #9e9e9e !important;
      color: #9e9e9e !important
    }

    .v-application .grey.lighten-5 {
      background-color: #fafafa !important;
      border-color: #fafafa !important
    }

    .v-application .grey--text.text--lighten-5 {
      caret-color: #fafafa !important;
      color: #fafafa !important
    }

    .v-application .grey.lighten-4 {
      background-color: #f5f5f5 !important;
      border-color: #f5f5f5 !important
    }

    .v-application .grey--text.text--lighten-4 {
      caret-color: #f5f5f5 !important;
      color: #f5f5f5 !important
    }

    .v-application .grey.lighten-3 {
      background-color: #eee !important;
      border-color: #eee !important
    }

    .v-application .grey--text.text--lighten-3 {
      caret-color: #eee !important;
      color: #eee !important
    }

    .v-application .grey.lighten-2 {
      background-color: #e0e0e0 !important;
      border-color: #e0e0e0 !important
    }

    .v-application .grey--text.text--lighten-2 {
      caret-color: #e0e0e0 !important;
      color: #e0e0e0 !important
    }

    .v-application .grey.lighten-1 {
      background-color: #bdbdbd !important;
      border-color: #bdbdbd !important
    }

    .v-application .grey--text.text--lighten-1 {
      caret-color: #bdbdbd !important;
      color: #bdbdbd !important
    }

    .v-application .grey.darken-1 {
      background-color: #757575 !important;
      border-color: #757575 !important
    }

    .v-application .grey--text.text--darken-1 {
      caret-color: #757575 !important;
      color: #757575 !important
    }

    .v-application .grey.darken-2 {
      background-color: #616161 !important;
      border-color: #616161 !important
    }

    .v-application .grey--text.text--darken-2 {
      caret-color: #616161 !important;
      color: #616161 !important
    }

    .v-application .grey.darken-3 {
      background-color: #424242 !important;
      border-color: #424242 !important
    }

    .v-application .grey--text.text--darken-3 {
      caret-color: #424242 !important;
      color: #424242 !important
    }

    .v-application .grey.darken-4 {
      background-color: #212121 !important;
      border-color: #212121 !important
    }

    .v-application .grey--text.text--darken-4 {
      caret-color: #212121 !important;
      color: #212121 !important
    }

    .v-application .shades.black {
      background-color: #000 !important;
      border-color: #000 !important
    }

    .v-application .shades--text.text--black {
      caret-color: #000 !important;
      color: #000 !important
    }

    .v-application .shades.white {
      background-color: #fff !important;
      border-color: #fff !important
    }

    .v-application .shades--text.text--white {
      caret-color: #fff !important;
      color: #fff !important
    }

    .v-application .shades.transparent {
      background-color: transparent !important;
      border-color: transparent !important
    }

    .v-application .shades--text.text--transparent {
      caret-color: transparent !important;
      color: transparent !important
    }

    /*!
 * ress.css • v2.0.4
 * MIT License
 * github.com/filipelinhares/ress
 */
    html {
      -webkit-text-size-adjust: 100%;
      box-sizing: border-box;
      overflow-y: scroll;
      -moz-tab-size: 4;
      -o-tab-size: 4;
      tab-size: 4;
      word-break: normal
    }

    *,
    :after,
    :before {
      background-repeat: no-repeat;
      box-sizing: inherit
    }

    :after,
    :before {
      text-decoration: inherit;
      vertical-align: inherit
    }

    * {
      margin: 0;
      padding: 0
    }

    hr {
      height: 0;
      overflow: visible
    }

    details,
    main {
      display: block
    }

    summary {
      display: list-item
    }

    small {
      font-size: 80%
    }

    [hidden] {
      display: none
    }

    abbr[title] {
      border-bottom: none;
      text-decoration: underline;
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    a {
      background-color: transparent
    }

    a:active,
    a:hover {
      outline-width: 0
    }

    code,
    kbd,
    pre,
    samp {
      font-family: monospace, monospace
    }

    pre {
      font-size: 1em
    }

    b,
    strong {
      font-weight: bolder
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    input {
      border-radius: 0
    }

    [disabled] {
      cursor: default
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    [type=search]::-webkit-search-cancel-button,
    [type=search]::-webkit-search-decoration {
      -webkit-appearance: none
    }

    textarea {
      overflow: auto;
      resize: vertical
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font: inherit
    }

    optgroup {
      font-weight: 700
    }

    button {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    [role=button],
    [type=button],
    [type=reset],
    [type=submit],
    button {
      color: inherit;
      cursor: pointer
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
      border-style: none;
      padding: 0
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button:-moz-focusring {
      outline: 1px dotted ButtonText
    }

    [type=reset],
    [type=submit],
    button,
    html [type=button] {
      -webkit-appearance: button
    }

    button,
    input,
    select,
    textarea {
      background-color: transparent;
      border-style: none
    }

    select {
      -moz-appearance: none;
      -webkit-appearance: none
    }

    select::-ms-expand {
      display: none
    }

    select::-ms-value {
      color: currentColor
    }

    legend {
      border: 0;
      color: inherit;
      display: table;
      max-width: 100%;
      white-space: normal
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      color: inherit;
      font: inherit
    }

    img {
      border-style: none
    }

    progress {
      vertical-align: baseline
    }

    @media screen {
      [hidden~=screen] {
        display: inherit
      }

      [hidden~=screen]:not(:active):not(:focus):not(:target) {
        clip: rect(0 0 0 0) !important;
        position: absolute !important
      }
    }

    [aria-busy=true] {
      cursor: progress
    }

    [aria-controls] {
      cursor: pointer
    }

    [aria-disabled=true] {
      cursor: default
    }

    .v-application .elevation-24 {
      box-shadow: 0 11px 15px -7px rgba(0, 0, 0, .2), 0 24px 38px 3px rgba(0, 0, 0, .14), 0 9px 46px 8px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-23 {
      box-shadow: 0 11px 14px -7px rgba(0, 0, 0, .2), 0 23px 36px 3px rgba(0, 0, 0, .14), 0 9px 44px 8px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-22 {
      box-shadow: 0 10px 14px -6px rgba(0, 0, 0, .2), 0 22px 35px 3px rgba(0, 0, 0, .14), 0 8px 42px 7px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-21 {
      box-shadow: 0 10px 13px -6px rgba(0, 0, 0, .2), 0 21px 33px 3px rgba(0, 0, 0, .14), 0 8px 40px 7px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-20 {
      box-shadow: 0 10px 13px -6px rgba(0, 0, 0, .2), 0 20px 31px 3px rgba(0, 0, 0, .14), 0 8px 38px 7px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-19 {
      box-shadow: 0 9px 12px -6px rgba(0, 0, 0, .2), 0 19px 29px 2px rgba(0, 0, 0, .14), 0 7px 36px 6px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-18 {
      box-shadow: 0 9px 11px -5px rgba(0, 0, 0, .2), 0 18px 28px 2px rgba(0, 0, 0, .14), 0 7px 34px 6px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-17 {
      box-shadow: 0 8px 11px -5px rgba(0, 0, 0, .2), 0 17px 26px 2px rgba(0, 0, 0, .14), 0 6px 32px 5px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-16 {
      box-shadow: 0 8px 10px -5px rgba(0, 0, 0, .2), 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-15 {
      box-shadow: 0 8px 9px -5px rgba(0, 0, 0, .2), 0 15px 22px 2px rgba(0, 0, 0, .14), 0 6px 28px 5px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-14 {
      box-shadow: 0 7px 9px -4px rgba(0, 0, 0, .2), 0 14px 21px 2px rgba(0, 0, 0, .14), 0 5px 26px 4px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-13 {
      box-shadow: 0 7px 8px -4px rgba(0, 0, 0, .2), 0 13px 19px 2px rgba(0, 0, 0, .14), 0 5px 24px 4px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-12 {
      box-shadow: 0 7px 8px -4px rgba(0, 0, 0, .2), 0 12px 17px 2px rgba(0, 0, 0, .14), 0 5px 22px 4px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-11 {
      box-shadow: 0 6px 7px -4px rgba(0, 0, 0, .2), 0 11px 15px 1px rgba(0, 0, 0, .14), 0 4px 20px 3px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-10 {
      box-shadow: 0 6px 6px -3px rgba(0, 0, 0, .2), 0 10px 14px 1px rgba(0, 0, 0, .14), 0 4px 18px 3px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-9 {
      box-shadow: 0 5px 6px -3px rgba(0, 0, 0, .2), 0 9px 12px 1px rgba(0, 0, 0, .14), 0 3px 16px 2px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-8 {
      box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-7 {
      box-shadow: 0 4px 5px -2px rgba(0, 0, 0, .2), 0 7px 10px 1px rgba(0, 0, 0, .14), 0 2px 16px 1px rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-6 {
      box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-5 {
      box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 5px 8px 0 rgba(0, 0, 0, .14), 0 1px 14px 0 rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-4 {
      box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-3 {
      box-shadow: 0 3px 3px -2px rgba(0, 0, 0, .2), 0 3px 4px 0 rgba(0, 0, 0, .14), 0 1px 8px 0 rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-2 {
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-1 {
      box-shadow: 0 2px 1px -1px rgba(0, 0, 0, .2), 0 1px 1px 0 rgba(0, 0, 0, .14), 0 1px 3px 0 rgba(0, 0, 0, .12) !important
    }

    .v-application .elevation-0 {
      box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12) !important
    }

    .carousel-transition-enter {
      transform: translate(100%)
    }

    .carousel-transition-leave,
    .carousel-transition-leave-to {
      position: absolute;
      top: 0;
      transform: translate(-100%)
    }

    .carousel-reverse-transition-enter {
      transform: translate(-100%)
    }

    .carousel-reverse-transition-leave,
    .carousel-reverse-transition-leave-to {
      position: absolute;
      top: 0;
      transform: translate(100%)
    }

    .dialog-transition-enter-active,
    .dialog-transition-leave-active {
      pointer-events: none !important
    }

    .dialog-transition-enter,
    .dialog-transition-leave-to {
      opacity: 0;
      transform: scale(.5)
    }

    .dialog-transition-enter-to,
    .dialog-transition-leave {
      opacity: 1
    }

    .dialog-bottom-transition-enter,
    .dialog-bottom-transition-leave-to {
      transform: translateY(100%)
    }

    .dialog-top-transition-enter,
    .dialog-top-transition-leave-to {
      transform: translateY(-100%)
    }

    .picker-reverse-transition-enter-active,
    .picker-reverse-transition-leave-active,
    .picker-transition-enter-active,
    .picker-transition-leave-active {
      transition: .3s cubic-bezier(0, 0, .2, 1)
    }

    .picker-reverse-transition-enter,
    .picker-reverse-transition-leave-to,
    .picker-transition-enter,
    .picker-transition-leave-to {
      opacity: 0
    }

    .picker-reverse-transition-leave,
    .picker-reverse-transition-leave-active,
    .picker-reverse-transition-leave-to,
    .picker-transition-leave,
    .picker-transition-leave-active,
    .picker-transition-leave-to {
      position: absolute !important
    }

    .picker-transition-enter {
      transform: translateY(100%)
    }

    .picker-reverse-transition-enter,
    .picker-transition-leave-to {
      transform: translateY(-100%)
    }

    .picker-reverse-transition-leave-to {
      transform: translateY(100%)
    }

    .picker-title-transition-enter-to,
    .picker-title-transition-leave {
      transform: translate(0)
    }

    .picker-title-transition-enter {
      transform: translate(-100%)
    }

    .picker-title-transition-leave-to {
      opacity: 0;
      transform: translate(100%)
    }

    .picker-title-transition-leave,
    .picker-title-transition-leave-active,
    .picker-title-transition-leave-to {
      position: absolute !important
    }

    .tab-transition-enter {
      transform: translate(100%)
    }

    .tab-transition-leave,
    .tab-transition-leave-active {
      position: absolute;
      top: 0
    }

    .tab-transition-leave-to {
      position: absolute
    }

    .tab-reverse-transition-enter,
    .tab-transition-leave-to {
      transform: translate(-100%)
    }

    .tab-reverse-transition-leave,
    .tab-reverse-transition-leave-to {
      position: absolute;
      top: 0;
      transform: translate(100%)
    }

    .expand-transition-enter-active,
    .expand-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .expand-transition-move {
      transition: transform .6s
    }

    .expand-x-transition-enter-active,
    .expand-x-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .expand-x-transition-move {
      transition: transform .6s
    }

    .scale-transition-enter-active,
    .scale-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scale-transition-move {
      transition: transform .6s
    }

    .scale-transition-enter,
    .scale-transition-leave,
    .scale-transition-leave-to {
      opacity: 0;
      transform: scale(0)
    }

    .scale-rotate-transition-enter-active,
    .scale-rotate-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scale-rotate-transition-move {
      transition: transform .6s
    }

    .scale-rotate-transition-enter,
    .scale-rotate-transition-leave,
    .scale-rotate-transition-leave-to {
      opacity: 0;
      transform: scale(0) rotate(-45deg)
    }

    .scale-rotate-reverse-transition-enter-active,
    .scale-rotate-reverse-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scale-rotate-reverse-transition-move {
      transition: transform .6s
    }

    .scale-rotate-reverse-transition-enter,
    .scale-rotate-reverse-transition-leave,
    .scale-rotate-reverse-transition-leave-to {
      opacity: 0;
      transform: scale(0) rotate(45deg)
    }

    .message-transition-enter-active,
    .message-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .message-transition-move {
      transition: transform .6s
    }

    .message-transition-enter,
    .message-transition-leave-to {
      opacity: 0;
      transform: translateY(-15px)
    }

    .message-transition-leave,
    .message-transition-leave-active {
      position: absolute
    }

    .slide-y-transition-enter-active,
    .slide-y-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .slide-y-transition-move {
      transition: transform .6s
    }

    .slide-y-transition-enter,
    .slide-y-transition-leave-to {
      opacity: 0;
      transform: translateY(-15px)
    }

    .slide-y-reverse-transition-enter-active,
    .slide-y-reverse-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .slide-y-reverse-transition-move {
      transition: transform .6s
    }

    .slide-y-reverse-transition-enter,
    .slide-y-reverse-transition-leave-to {
      opacity: 0;
      transform: translateY(15px)
    }

    .scroll-y-transition-enter-active,
    .scroll-y-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scroll-y-transition-move {
      transition: transform .6s
    }

    .scroll-y-transition-enter,
    .scroll-y-transition-leave-to {
      opacity: 0
    }

    .scroll-y-transition-enter {
      transform: translateY(-15px)
    }

    .scroll-y-transition-leave-to {
      transform: translateY(15px)
    }

    .scroll-y-reverse-transition-enter-active,
    .scroll-y-reverse-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scroll-y-reverse-transition-move {
      transition: transform .6s
    }

    .scroll-y-reverse-transition-enter,
    .scroll-y-reverse-transition-leave-to {
      opacity: 0
    }

    .scroll-y-reverse-transition-enter {
      transform: translateY(15px)
    }

    .scroll-y-reverse-transition-leave-to {
      transform: translateY(-15px)
    }

    .scroll-x-transition-enter-active,
    .scroll-x-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scroll-x-transition-move {
      transition: transform .6s
    }

    .scroll-x-transition-enter,
    .scroll-x-transition-leave-to {
      opacity: 0
    }

    .scroll-x-transition-enter {
      transform: translateX(-15px)
    }

    .scroll-x-transition-leave-to {
      transform: translateX(15px)
    }

    .scroll-x-reverse-transition-enter-active,
    .scroll-x-reverse-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .scroll-x-reverse-transition-move {
      transition: transform .6s
    }

    .scroll-x-reverse-transition-enter,
    .scroll-x-reverse-transition-leave-to {
      opacity: 0
    }

    .scroll-x-reverse-transition-enter {
      transform: translateX(15px)
    }

    .scroll-x-reverse-transition-leave-to {
      transform: translateX(-15px)
    }

    .slide-x-transition-enter-active,
    .slide-x-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .slide-x-transition-move {
      transition: transform .6s
    }

    .slide-x-transition-enter,
    .slide-x-transition-leave-to {
      opacity: 0;
      transform: translateX(-15px)
    }

    .slide-x-reverse-transition-enter-active,
    .slide-x-reverse-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .slide-x-reverse-transition-move {
      transition: transform .6s
    }

    .slide-x-reverse-transition-enter,
    .slide-x-reverse-transition-leave-to {
      opacity: 0;
      transform: translateX(15px)
    }

    .fade-transition-enter-active,
    .fade-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .fade-transition-move {
      transition: transform .6s
    }

    .fade-transition-enter,
    .fade-transition-leave-to {
      opacity: 0 !important
    }

    .fab-transition-enter-active,
    .fab-transition-leave-active {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .fab-transition-move {
      transition: transform .6s
    }

    .fab-transition-enter,
    .fab-transition-leave-to {
      transform: scale(0) rotate(-45deg)
    }

    .v-application .blockquote {
      font-size: 18px;
      font-weight: 300;
      padding: 16px 0 16px 24px
    }

    .v-application code,
    .v-application kbd {
      border-radius: 3px;
      font-size: 85%;
      font-weight: 400
    }

    .v-application code {
      padding: .2em .4em
    }

    .v-application kbd {
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
      padding: .2em .4rem
    }

    .theme--light.v-application code {
      background-color: rgba(0, 0, 0, .05);
      color: currentColor
    }

    .theme--light.v-application kbd {
      background: #212529;
      color: #fff
    }

    .theme--dark.v-application code {
      background-color: hsla(0, 0%, 100%, .1);
      color: currentColor
    }

    .theme--dark.v-application kbd {
      background: #212529;
      color: #fff
    }

    html {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      -webkit-tap-highlight-color: transparent;
      font-size: 16px;
      overflow-x: hidden;
      text-rendering: optimizeLegibility
    }

    html.overflow-y-hidden {
      overflow-y: hidden !important
    }

    .v-application {
      font-family: "TT Norms Pro Regular";
      line-height: 1.5
    }

    .v-application ::-ms-clear,
    .v-application ::-ms-reveal {
      display: none
    }

    @supports(-webkit-touch-callout:none) {
      body {
        cursor: pointer
      }
    }

    .v-application .theme--light.heading {
      color: rgba(0, 0, 0, .87)
    }

    .v-application .theme--dark.heading {
      color: #fff
    }

    .v-application ol,
    .v-application ul {
      padding-left: 24px
    }

    .v-application .display-4 {
      font-family: "TT Norms Pro Serif Medium" !important;
      font-size: 6rem !important;
      font-weight: 300;
      letter-spacing: -.015625em !important;
      line-height: 6rem
    }

    .v-application .display-3 {
      font-family: "TT Norms Pro Serif Medium" !important;
      font-size: 3.75rem !important;
      font-weight: 300;
      letter-spacing: -.0083333333em !important;
      line-height: 3.75rem
    }

    .v-application .display-2 {
      font-family: "TT Norms Pro Serif Medium" !important;
      font-size: 3rem !important;
      font-weight: 400;
      letter-spacing: normal !important;
      line-height: 3.125rem
    }

    .v-application .display-1 {
      font-family: "TT Norms Pro Serif Medium" !important;
      font-size: 2.125rem !important;
      font-weight: 400;
      letter-spacing: .0073529412em !important;
      line-height: 2.5rem
    }

    .v-application .headline {
      font-size: 1.5rem !important;
      font-weight: 400;
      letter-spacing: normal !important;
      line-height: 2rem
    }

    .v-application .headline,
    .v-application .title {
      font-family: "TT Norms Pro Serif Medium" !important
    }

    .v-application .title {
      font-size: 1.25rem !important;
      font-weight: 500;
      letter-spacing: .0125em !important;
      line-height: 2rem
    }

    .v-application .subtitle-2 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: .875rem !important;
      font-weight: 500;
      letter-spacing: .0071428571em !important;
      line-height: 1.375rem
    }

    .v-application .subtitle-1 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: 1rem !important;
      font-weight: 400;
      letter-spacing: .009375em !important;
      line-height: 1.75rem
    }

    .v-application .body-2 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: .875rem !important;
      font-weight: 400;
      letter-spacing: .0178571429em !important;
      line-height: 1.25rem
    }

    .v-application .body-1 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: 1rem !important;
      font-weight: 400;
      letter-spacing: .03125em !important;
      line-height: 1.5rem
    }

    .v-application .caption {
      font-weight: 400;
      letter-spacing: .0333333333em !important;
      line-height: 1.25rem
    }

    .v-application .caption,
    .v-application .overline {
      font-family: "TT Norms Pro Regular" !important;
      font-size: .75rem !important
    }

    .v-application .overline {
      font-weight: 500;
      letter-spacing: .1666666667em !important;
      line-height: 2rem;
      text-transform: uppercase
    }

    .v-application p {
      margin-bottom: 16px
    }

    @media only print {
      .v-application .hidden-print-only {
        display: none !important
      }
    }

    @media only screen {
      .v-application .hidden-screen-only {
        display: none !important
      }
    }

    @media only screen and (max-width:599.98px) {
      .v-application .hidden-xs-only {
        display: none !important
      }
    }

    @media only screen and (min-width:600px)and (max-width:959.98px) {
      .v-application .hidden-sm-only {
        display: none !important
      }
    }

    @media only screen and (max-width:959.98px) {
      .v-application .hidden-sm-and-down {
        display: none !important
      }
    }

    @media only screen and (min-width:600px) {
      .v-application .hidden-sm-and-up {
        display: none !important
      }
    }

    @media only screen and (min-width:960px)and (max-width:1263.98px) {
      .v-application .hidden-md-only {
        display: none !important
      }
    }

    @media only screen and (max-width:1263.98px) {
      .v-application .hidden-md-and-down {
        display: none !important
      }
    }

    @media only screen and (min-width:960px) {
      .v-application .hidden-md-and-up {
        display: none !important
      }
    }

    @media only screen and (min-width:1264px)and (max-width:1903.98px) {
      .v-application .hidden-lg-only {
        display: none !important
      }
    }

    @media only screen and (max-width:1903.98px) {
      .v-application .hidden-lg-and-down {
        display: none !important
      }
    }

    @media only screen and (min-width:1264px) {
      .v-application .hidden-lg-and-up {
        display: none !important
      }
    }

    @media only screen and (min-width:1904px) {
      .v-application .hidden-xl-only {
        display: none !important
      }
    }

    .d-sr-only,
    .d-sr-only-focusable:not(:focus) {
      clip: rect(0, 0, 0, 0) !important;
      border: 0 !important;
      height: 1px !important;
      margin: -1px !important;
      overflow: hidden !important;
      padding: 0 !important;
      position: absolute !important;
      white-space: nowrap !important;
      width: 1px !important
    }

    .v-application .font-weight-thin {
      font-weight: 100 !important
    }

    .v-application .font-weight-light {
      font-weight: 300 !important
    }

    .v-application .font-weight-regular {
      font-weight: 400 !important
    }

    .v-application .font-weight-medium {
      font-weight: 500 !important
    }

    .v-application .font-weight-bold {
      font-weight: 700 !important
    }

    .v-application .font-weight-black {
      font-weight: 900 !important
    }

    .v-application .font-italic {
      font-style: italic !important
    }

    .v-application .transition-fast-out-slow-in {
      transition: .3s cubic-bezier(.4, 0, .2, 1) !important
    }

    .v-application .transition-linear-out-slow-in {
      transition: .3s cubic-bezier(0, 0, .2, 1) !important
    }

    .v-application .transition-fast-out-linear-in {
      transition: .3s cubic-bezier(.4, 0, 1, 1) !important
    }

    .v-application .transition-ease-in-out {
      transition: .3s cubic-bezier(.4, 0, .6, 1) !important
    }

    .v-application .transition-fast-in-fast-out {
      transition: .3s cubic-bezier(.25, .8, .25, 1) !important
    }

    .v-application .transition-swing {
      transition: .3s cubic-bezier(.25, .8, .5, 1) !important
    }

    .v-application .overflow-auto {
      overflow: auto !important
    }

    .v-application .overflow-hidden {
      overflow: hidden !important
    }

    .v-application .overflow-visible {
      overflow: visible !important
    }

    .v-application .overflow-x-auto {
      overflow-x: auto !important
    }

    .v-application .overflow-x-hidden {
      overflow-x: hidden !important
    }

    .v-application .overflow-y-auto {
      overflow-y: auto !important
    }

    .v-application .overflow-y-hidden {
      overflow-y: hidden !important
    }

    .v-application .d-none {
      display: none !important
    }

    .v-application .d-inline {
      display: inline !important
    }

    .v-application .d-inline-block {
      display: inline-block !important
    }

    .v-application .d-block {
      display: block !important
    }

    .v-application .d-table {
      display: table !important
    }

    .v-application .d-table-row {
      display: table-row !important
    }

    .v-application .d-table-cell {
      display: table-cell !important
    }

    .v-application .d-flex {
      display: flex !important
    }

    .v-application .d-inline-flex {
      display: inline-flex !important
    }

    .v-application .float-none {
      float: none !important
    }

    .v-application .float-left {
      float: left !important
    }

    .v-application .float-right {
      float: right !important
    }

    .v-application--is-rtl .float-end {
      float: left !important
    }

    .v-application--is-ltr .float-end,
    .v-application--is-rtl .float-start {
      float: right !important
    }

    .v-application--is-ltr .float-start {
      float: left !important
    }

    .v-application .flex-fill {
      flex: 1 1 auto !important
    }

    .v-application .flex-row {
      flex-direction: row !important
    }

    .v-application .flex-column {
      flex-direction: column !important
    }

    .v-application .flex-row-reverse {
      flex-direction: row-reverse !important
    }

    .v-application .flex-column-reverse {
      flex-direction: column-reverse !important
    }

    .v-application .flex-grow-0 {
      flex-grow: 0 !important
    }

    .v-application .flex-grow-1 {
      flex-grow: 1 !important
    }

    .v-application .flex-shrink-0 {
      flex-shrink: 0 !important
    }

    .v-application .flex-shrink-1 {
      flex-shrink: 1 !important
    }

    .v-application .flex-wrap {
      flex-wrap: wrap !important
    }

    .v-application .flex-nowrap {
      flex-wrap: nowrap !important
    }

    .v-application .flex-wrap-reverse {
      flex-wrap: wrap-reverse !important
    }

    .v-application .justify-start {
      justify-content: flex-start !important
    }

    .v-application .justify-end {
      justify-content: flex-end !important
    }

    .v-application .justify-center {
      justify-content: center !important
    }

    .v-application .justify-space-between {
      justify-content: space-between !important
    }

    .v-application .justify-space-around {
      justify-content: space-around !important
    }

    .v-application .align-start {
      align-items: flex-start !important
    }

    .v-application .align-end {
      align-items: flex-end !important
    }

    .v-application .align-center {
      align-items: center !important
    }

    .v-application .align-baseline {
      align-items: baseline !important
    }

    .v-application .align-stretch {
      align-items: stretch !important
    }

    .v-application .align-content-start {
      align-content: flex-start !important
    }

    .v-application .align-content-end {
      align-content: flex-end !important
    }

    .v-application .align-content-center {
      align-content: center !important
    }

    .v-application .align-content-space-between {
      align-content: space-between !important
    }

    .v-application .align-content-space-around {
      align-content: space-around !important
    }

    .v-application .align-content-stretch {
      align-content: stretch !important
    }

    .v-application .align-self-auto {
      align-self: auto !important
    }

    .v-application .align-self-start {
      align-self: flex-start !important
    }

    .v-application .align-self-end {
      align-self: flex-end !important
    }

    .v-application .align-self-center {
      align-self: center !important
    }

    .v-application .align-self-baseline {
      align-self: baseline !important
    }

    .v-application .align-self-stretch {
      align-self: stretch !important
    }

    .v-application .order-first {
      order: -1 !important
    }

    .v-application .order-0 {
      order: 0 !important
    }

    .v-application .order-1 {
      order: 1 !important
    }

    .v-application .order-2 {
      order: 2 !important
    }

    .v-application .order-3 {
      order: 3 !important
    }

    .v-application .order-4 {
      order: 4 !important
    }

    .v-application .order-5 {
      order: 5 !important
    }

    .v-application .order-6 {
      order: 6 !important
    }

    .v-application .order-7 {
      order: 7 !important
    }

    .v-application .order-8 {
      order: 8 !important
    }

    .v-application .order-9 {
      order: 9 !important
    }

    .v-application .order-10 {
      order: 10 !important
    }

    .v-application .order-11 {
      order: 11 !important
    }

    .v-application .order-12 {
      order: 12 !important
    }

    .v-application .order-last {
      order: 13 !important
    }

    .v-application .ma-0 {
      margin: 0 !important
    }

    .v-application .ma-1 {
      margin: 4px !important
    }

    .v-application .ma-2 {
      margin: 8px !important
    }

    .v-application .ma-3 {
      margin: 12px !important
    }

    .v-application .ma-4 {
      margin: 16px !important
    }

    .v-application .ma-5 {
      margin: 20px !important
    }

    .v-application .ma-6 {
      margin: 24px !important
    }

    .v-application .ma-7 {
      margin: 28px !important
    }

    .v-application .ma-8 {
      margin: 32px !important
    }

    .v-application .ma-9 {
      margin: 36px !important
    }

    .v-application .ma-10 {
      margin: 40px !important
    }

    .v-application .ma-11 {
      margin: 44px !important
    }

    .v-application .ma-12 {
      margin: 48px !important
    }

    .v-application .ma-13 {
      margin: 52px !important
    }

    .v-application .ma-14 {
      margin: 56px !important
    }

    .v-application .ma-15 {
      margin: 60px !important
    }

    .v-application .ma-16 {
      margin: 64px !important
    }

    .v-application .ma-auto {
      margin: auto !important
    }

    .v-application .mx-0 {
      margin-left: 0 !important;
      margin-right: 0 !important
    }

    .v-application .mx-1 {
      margin-left: 4px !important;
      margin-right: 4px !important
    }

    .v-application .mx-2 {
      margin-left: 8px !important;
      margin-right: 8px !important
    }

    .v-application .mx-3 {
      margin-left: 12px !important;
      margin-right: 12px !important
    }

    .v-application .mx-4 {
      margin-left: 16px !important;
      margin-right: 16px !important
    }

    .v-application .mx-5 {
      margin-left: 20px !important;
      margin-right: 20px !important
    }

    .v-application .mx-6 {
      margin-left: 24px !important;
      margin-right: 24px !important
    }

    .v-application .mx-7 {
      margin-left: 28px !important;
      margin-right: 28px !important
    }

    .v-application .mx-8 {
      margin-left: 32px !important;
      margin-right: 32px !important
    }

    .v-application .mx-9 {
      margin-left: 36px !important;
      margin-right: 36px !important
    }

    .v-application .mx-10 {
      margin-left: 40px !important;
      margin-right: 40px !important
    }

    .v-application .mx-11 {
      margin-left: 44px !important;
      margin-right: 44px !important
    }

    .v-application .mx-12 {
      margin-left: 48px !important;
      margin-right: 48px !important
    }

    .v-application .mx-13 {
      margin-left: 52px !important;
      margin-right: 52px !important
    }

    .v-application .mx-14 {
      margin-left: 56px !important;
      margin-right: 56px !important
    }

    .v-application .mx-15 {
      margin-left: 60px !important;
      margin-right: 60px !important
    }

    .v-application .mx-16 {
      margin-left: 64px !important;
      margin-right: 64px !important
    }

    .v-application .mx-auto {
      margin-left: auto !important;
      margin-right: auto !important
    }

    .v-application .my-0 {
      margin-bottom: 0 !important;
      margin-top: 0 !important
    }

    .v-application .my-1 {
      margin-bottom: 4px !important;
      margin-top: 4px !important
    }

    .v-application .my-2 {
      margin-bottom: 8px !important;
      margin-top: 8px !important
    }

    .v-application .my-3 {
      margin-bottom: 12px !important;
      margin-top: 12px !important
    }

    .v-application .my-4 {
      margin-bottom: 16px !important;
      margin-top: 16px !important
    }

    .v-application .my-5 {
      margin-bottom: 20px !important;
      margin-top: 20px !important
    }

    .v-application .my-6 {
      margin-bottom: 24px !important;
      margin-top: 24px !important
    }

    .v-application .my-7 {
      margin-bottom: 28px !important;
      margin-top: 28px !important
    }

    .v-application .my-8 {
      margin-bottom: 32px !important;
      margin-top: 32px !important
    }

    .v-application .my-9 {
      margin-bottom: 36px !important;
      margin-top: 36px !important
    }

    .v-application .my-10 {
      margin-bottom: 40px !important;
      margin-top: 40px !important
    }

    .v-application .my-11 {
      margin-bottom: 44px !important;
      margin-top: 44px !important
    }

    .v-application .my-12 {
      margin-bottom: 48px !important;
      margin-top: 48px !important
    }

    .v-application .my-13 {
      margin-bottom: 52px !important;
      margin-top: 52px !important
    }

    .v-application .my-14 {
      margin-bottom: 56px !important;
      margin-top: 56px !important
    }

    .v-application .my-15 {
      margin-bottom: 60px !important;
      margin-top: 60px !important
    }

    .v-application .my-16 {
      margin-bottom: 64px !important;
      margin-top: 64px !important
    }

    .v-application .my-auto {
      margin-bottom: auto !important;
      margin-top: auto !important
    }

    .v-application .mt-0 {
      margin-top: 0 !important
    }

    .v-application .mt-1 {
      margin-top: 4px !important
    }

    .v-application .mt-2 {
      margin-top: 8px !important
    }

    .v-application .mt-3 {
      margin-top: 12px !important
    }

    .v-application .mt-4 {
      margin-top: 16px !important
    }

    .v-application .mt-5 {
      margin-top: 20px !important
    }

    .v-application .mt-6 {
      margin-top: 24px !important
    }

    .v-application .mt-7 {
      margin-top: 28px !important
    }

    .v-application .mt-8 {
      margin-top: 32px !important
    }

    .v-application .mt-9 {
      margin-top: 36px !important
    }

    .v-application .mt-10 {
      margin-top: 40px !important
    }

    .v-application .mt-11 {
      margin-top: 44px !important
    }

    .v-application .mt-12 {
      margin-top: 48px !important
    }

    .v-application .mt-13 {
      margin-top: 52px !important
    }

    .v-application .mt-14 {
      margin-top: 56px !important
    }

    .v-application .mt-15 {
      margin-top: 60px !important
    }

    .v-application .mt-16 {
      margin-top: 64px !important
    }

    .v-application .mt-auto {
      margin-top: auto !important
    }

    .v-application .mr-0 {
      margin-right: 0 !important
    }

    .v-application .mr-1 {
      margin-right: 4px !important
    }

    .v-application .mr-2 {
      margin-right: 8px !important
    }

    .v-application .mr-3 {
      margin-right: 12px !important
    }

    .v-application .mr-4 {
      margin-right: 16px !important
    }

    .v-application .mr-5 {
      margin-right: 20px !important
    }

    .v-application .mr-6 {
      margin-right: 24px !important
    }

    .v-application .mr-7 {
      margin-right: 28px !important
    }

    .v-application .mr-8 {
      margin-right: 32px !important
    }

    .v-application .mr-9 {
      margin-right: 36px !important
    }

    .v-application .mr-10 {
      margin-right: 40px !important
    }

    .v-application .mr-11 {
      margin-right: 44px !important
    }

    .v-application .mr-12 {
      margin-right: 48px !important
    }

    .v-application .mr-13 {
      margin-right: 52px !important
    }

    .v-application .mr-14 {
      margin-right: 56px !important
    }

    .v-application .mr-15 {
      margin-right: 60px !important
    }

    .v-application .mr-16 {
      margin-right: 64px !important
    }

    .v-application .mr-auto {
      margin-right: auto !important
    }

    .v-application .mb-0 {
      margin-bottom: 0 !important
    }

    .v-application .mb-1 {
      margin-bottom: 4px !important
    }

    .v-application .mb-2 {
      margin-bottom: 8px !important
    }

    .v-application .mb-3 {
      margin-bottom: 12px !important
    }

    .v-application .mb-4 {
      margin-bottom: 16px !important
    }

    .v-application .mb-5 {
      margin-bottom: 20px !important
    }

    .v-application .mb-6 {
      margin-bottom: 24px !important
    }

    .v-application .mb-7 {
      margin-bottom: 28px !important
    }

    .v-application .mb-8 {
      margin-bottom: 32px !important
    }

    .v-application .mb-9 {
      margin-bottom: 36px !important
    }

    .v-application .mb-10 {
      margin-bottom: 40px !important
    }

    .v-application .mb-11 {
      margin-bottom: 44px !important
    }

    .v-application .mb-12 {
      margin-bottom: 48px !important
    }

    .v-application .mb-13 {
      margin-bottom: 52px !important
    }

    .v-application .mb-14 {
      margin-bottom: 56px !important
    }

    .v-application .mb-15 {
      margin-bottom: 60px !important
    }

    .v-application .mb-16 {
      margin-bottom: 64px !important
    }

    .v-application .mb-auto {
      margin-bottom: auto !important
    }

    .v-application .ml-0 {
      margin-left: 0 !important
    }

    .v-application .ml-1 {
      margin-left: 4px !important
    }

    .v-application .ml-2 {
      margin-left: 8px !important
    }

    .v-application .ml-3 {
      margin-left: 12px !important
    }

    .v-application .ml-4 {
      margin-left: 16px !important
    }

    .v-application .ml-5 {
      margin-left: 20px !important
    }

    .v-application .ml-6 {
      margin-left: 24px !important
    }

    .v-application .ml-7 {
      margin-left: 28px !important
    }

    .v-application .ml-8 {
      margin-left: 32px !important
    }

    .v-application .ml-9 {
      margin-left: 36px !important
    }

    .v-application .ml-10 {
      margin-left: 40px !important
    }

    .v-application .ml-11 {
      margin-left: 44px !important
    }

    .v-application .ml-12 {
      margin-left: 48px !important
    }

    .v-application .ml-13 {
      margin-left: 52px !important
    }

    .v-application .ml-14 {
      margin-left: 56px !important
    }

    .v-application .ml-15 {
      margin-left: 60px !important
    }

    .v-application .ml-16 {
      margin-left: 64px !important
    }

    .v-application .ml-auto {
      margin-left: auto !important
    }

    .v-application--is-ltr .ms-0 {
      margin-left: 0 !important
    }

    .v-application--is-rtl .ms-0 {
      margin-right: 0 !important
    }

    .v-application--is-ltr .ms-1 {
      margin-left: 4px !important
    }

    .v-application--is-rtl .ms-1 {
      margin-right: 4px !important
    }

    .v-application--is-ltr .ms-2 {
      margin-left: 8px !important
    }

    .v-application--is-rtl .ms-2 {
      margin-right: 8px !important
    }

    .v-application--is-ltr .ms-3 {
      margin-left: 12px !important
    }

    .v-application--is-rtl .ms-3 {
      margin-right: 12px !important
    }

    .v-application--is-ltr .ms-4 {
      margin-left: 16px !important
    }

    .v-application--is-rtl .ms-4 {
      margin-right: 16px !important
    }

    .v-application--is-ltr .ms-5 {
      margin-left: 20px !important
    }

    .v-application--is-rtl .ms-5 {
      margin-right: 20px !important
    }

    .v-application--is-ltr .ms-6 {
      margin-left: 24px !important
    }

    .v-application--is-rtl .ms-6 {
      margin-right: 24px !important
    }

    .v-application--is-ltr .ms-7 {
      margin-left: 28px !important
    }

    .v-application--is-rtl .ms-7 {
      margin-right: 28px !important
    }

    .v-application--is-ltr .ms-8 {
      margin-left: 32px !important
    }

    .v-application--is-rtl .ms-8 {
      margin-right: 32px !important
    }

    .v-application--is-ltr .ms-9 {
      margin-left: 36px !important
    }

    .v-application--is-rtl .ms-9 {
      margin-right: 36px !important
    }

    .v-application--is-ltr .ms-10 {
      margin-left: 40px !important
    }

    .v-application--is-rtl .ms-10 {
      margin-right: 40px !important
    }

    .v-application--is-ltr .ms-11 {
      margin-left: 44px !important
    }

    .v-application--is-rtl .ms-11 {
      margin-right: 44px !important
    }

    .v-application--is-ltr .ms-12 {
      margin-left: 48px !important
    }

    .v-application--is-rtl .ms-12 {
      margin-right: 48px !important
    }

    .v-application--is-ltr .ms-13 {
      margin-left: 52px !important
    }

    .v-application--is-rtl .ms-13 {
      margin-right: 52px !important
    }

    .v-application--is-ltr .ms-14 {
      margin-left: 56px !important
    }

    .v-application--is-rtl .ms-14 {
      margin-right: 56px !important
    }

    .v-application--is-ltr .ms-15 {
      margin-left: 60px !important
    }

    .v-application--is-rtl .ms-15 {
      margin-right: 60px !important
    }

    .v-application--is-ltr .ms-16 {
      margin-left: 64px !important
    }

    .v-application--is-rtl .ms-16 {
      margin-right: 64px !important
    }

    .v-application--is-ltr .ms-auto {
      margin-left: auto !important
    }

    .v-application--is-rtl .ms-auto {
      margin-right: auto !important
    }

    .v-application--is-ltr .me-0 {
      margin-right: 0 !important
    }

    .v-application--is-rtl .me-0 {
      margin-left: 0 !important
    }

    .v-application--is-ltr .me-1 {
      margin-right: 4px !important
    }

    .v-application--is-rtl .me-1 {
      margin-left: 4px !important
    }

    .v-application--is-ltr .me-2 {
      margin-right: 8px !important
    }

    .v-application--is-rtl .me-2 {
      margin-left: 8px !important
    }

    .v-application--is-ltr .me-3 {
      margin-right: 12px !important
    }

    .v-application--is-rtl .me-3 {
      margin-left: 12px !important
    }

    .v-application--is-ltr .me-4 {
      margin-right: 16px !important
    }

    .v-application--is-rtl .me-4 {
      margin-left: 16px !important
    }

    .v-application--is-ltr .me-5 {
      margin-right: 20px !important
    }

    .v-application--is-rtl .me-5 {
      margin-left: 20px !important
    }

    .v-application--is-ltr .me-6 {
      margin-right: 24px !important
    }

    .v-application--is-rtl .me-6 {
      margin-left: 24px !important
    }

    .v-application--is-ltr .me-7 {
      margin-right: 28px !important
    }

    .v-application--is-rtl .me-7 {
      margin-left: 28px !important
    }

    .v-application--is-ltr .me-8 {
      margin-right: 32px !important
    }

    .v-application--is-rtl .me-8 {
      margin-left: 32px !important
    }

    .v-application--is-ltr .me-9 {
      margin-right: 36px !important
    }

    .v-application--is-rtl .me-9 {
      margin-left: 36px !important
    }

    .v-application--is-ltr .me-10 {
      margin-right: 40px !important
    }

    .v-application--is-rtl .me-10 {
      margin-left: 40px !important
    }

    .v-application--is-ltr .me-11 {
      margin-right: 44px !important
    }

    .v-application--is-rtl .me-11 {
      margin-left: 44px !important
    }

    .v-application--is-ltr .me-12 {
      margin-right: 48px !important
    }

    .v-application--is-rtl .me-12 {
      margin-left: 48px !important
    }

    .v-application--is-ltr .me-13 {
      margin-right: 52px !important
    }

    .v-application--is-rtl .me-13 {
      margin-left: 52px !important
    }

    .v-application--is-ltr .me-14 {
      margin-right: 56px !important
    }

    .v-application--is-rtl .me-14 {
      margin-left: 56px !important
    }

    .v-application--is-ltr .me-15 {
      margin-right: 60px !important
    }

    .v-application--is-rtl .me-15 {
      margin-left: 60px !important
    }

    .v-application--is-ltr .me-16 {
      margin-right: 64px !important
    }

    .v-application--is-rtl .me-16 {
      margin-left: 64px !important
    }

    .v-application--is-ltr .me-auto {
      margin-right: auto !important
    }

    .v-application--is-rtl .me-auto {
      margin-left: auto !important
    }

    .v-application .ma-n1 {
      margin: -4px !important
    }

    .v-application .ma-n2 {
      margin: -8px !important
    }

    .v-application .ma-n3 {
      margin: -12px !important
    }

    .v-application .ma-n4 {
      margin: -16px !important
    }

    .v-application .ma-n5 {
      margin: -20px !important
    }

    .v-application .ma-n6 {
      margin: -24px !important
    }

    .v-application .ma-n7 {
      margin: -28px !important
    }

    .v-application .ma-n8 {
      margin: -32px !important
    }

    .v-application .ma-n9 {
      margin: -36px !important
    }

    .v-application .ma-n10 {
      margin: -40px !important
    }

    .v-application .ma-n11 {
      margin: -44px !important
    }

    .v-application .ma-n12 {
      margin: -48px !important
    }

    .v-application .ma-n13 {
      margin: -52px !important
    }

    .v-application .ma-n14 {
      margin: -56px !important
    }

    .v-application .ma-n15 {
      margin: -60px !important
    }

    .v-application .ma-n16 {
      margin: -64px !important
    }

    .v-application .mx-n1 {
      margin-left: -4px !important;
      margin-right: -4px !important
    }

    .v-application .mx-n2 {
      margin-left: -8px !important;
      margin-right: -8px !important
    }

    .v-application .mx-n3 {
      margin-left: -12px !important;
      margin-right: -12px !important
    }

    .v-application .mx-n4 {
      margin-left: -16px !important;
      margin-right: -16px !important
    }

    .v-application .mx-n5 {
      margin-left: -20px !important;
      margin-right: -20px !important
    }

    .v-application .mx-n6 {
      margin-left: -24px !important;
      margin-right: -24px !important
    }

    .v-application .mx-n7 {
      margin-left: -28px !important;
      margin-right: -28px !important
    }

    .v-application .mx-n8 {
      margin-left: -32px !important;
      margin-right: -32px !important
    }

    .v-application .mx-n9 {
      margin-left: -36px !important;
      margin-right: -36px !important
    }

    .v-application .mx-n10 {
      margin-left: -40px !important;
      margin-right: -40px !important
    }

    .v-application .mx-n11 {
      margin-left: -44px !important;
      margin-right: -44px !important
    }

    .v-application .mx-n12 {
      margin-left: -48px !important;
      margin-right: -48px !important
    }

    .v-application .mx-n13 {
      margin-left: -52px !important;
      margin-right: -52px !important
    }

    .v-application .mx-n14 {
      margin-left: -56px !important;
      margin-right: -56px !important
    }

    .v-application .mx-n15 {
      margin-left: -60px !important;
      margin-right: -60px !important
    }

    .v-application .mx-n16 {
      margin-left: -64px !important;
      margin-right: -64px !important
    }

    .v-application .my-n1 {
      margin-bottom: -4px !important;
      margin-top: -4px !important
    }

    .v-application .my-n2 {
      margin-bottom: -8px !important;
      margin-top: -8px !important
    }

    .v-application .my-n3 {
      margin-bottom: -12px !important;
      margin-top: -12px !important
    }

    .v-application .my-n4 {
      margin-bottom: -16px !important;
      margin-top: -16px !important
    }

    .v-application .my-n5 {
      margin-bottom: -20px !important;
      margin-top: -20px !important
    }

    .v-application .my-n6 {
      margin-bottom: -24px !important;
      margin-top: -24px !important
    }

    .v-application .my-n7 {
      margin-bottom: -28px !important;
      margin-top: -28px !important
    }

    .v-application .my-n8 {
      margin-bottom: -32px !important;
      margin-top: -32px !important
    }

    .v-application .my-n9 {
      margin-bottom: -36px !important;
      margin-top: -36px !important
    }

    .v-application .my-n10 {
      margin-bottom: -40px !important;
      margin-top: -40px !important
    }

    .v-application .my-n11 {
      margin-bottom: -44px !important;
      margin-top: -44px !important
    }

    .v-application .my-n12 {
      margin-bottom: -48px !important;
      margin-top: -48px !important
    }

    .v-application .my-n13 {
      margin-bottom: -52px !important;
      margin-top: -52px !important
    }

    .v-application .my-n14 {
      margin-bottom: -56px !important;
      margin-top: -56px !important
    }

    .v-application .my-n15 {
      margin-bottom: -60px !important;
      margin-top: -60px !important
    }

    .v-application .my-n16 {
      margin-bottom: -64px !important;
      margin-top: -64px !important
    }

    .v-application .mt-n1 {
      margin-top: -4px !important
    }

    .v-application .mt-n2 {
      margin-top: -8px !important
    }

    .v-application .mt-n3 {
      margin-top: -12px !important
    }

    .v-application .mt-n4 {
      margin-top: -16px !important
    }

    .v-application .mt-n5 {
      margin-top: -20px !important
    }

    .v-application .mt-n6 {
      margin-top: -24px !important
    }

    .v-application .mt-n7 {
      margin-top: -28px !important
    }

    .v-application .mt-n8 {
      margin-top: -32px !important
    }

    .v-application .mt-n9 {
      margin-top: -36px !important
    }

    .v-application .mt-n10 {
      margin-top: -40px !important
    }

    .v-application .mt-n11 {
      margin-top: -44px !important
    }

    .v-application .mt-n12 {
      margin-top: -48px !important
    }

    .v-application .mt-n13 {
      margin-top: -52px !important
    }

    .v-application .mt-n14 {
      margin-top: -56px !important
    }

    .v-application .mt-n15 {
      margin-top: -60px !important
    }

    .v-application .mt-n16 {
      margin-top: -64px !important
    }

    .v-application .mr-n1 {
      margin-right: -4px !important
    }

    .v-application .mr-n2 {
      margin-right: -8px !important
    }

    .v-application .mr-n3 {
      margin-right: -12px !important
    }

    .v-application .mr-n4 {
      margin-right: -16px !important
    }

    .v-application .mr-n5 {
      margin-right: -20px !important
    }

    .v-application .mr-n6 {
      margin-right: -24px !important
    }

    .v-application .mr-n7 {
      margin-right: -28px !important
    }

    .v-application .mr-n8 {
      margin-right: -32px !important
    }

    .v-application .mr-n9 {
      margin-right: -36px !important
    }

    .v-application .mr-n10 {
      margin-right: -40px !important
    }

    .v-application .mr-n11 {
      margin-right: -44px !important
    }

    .v-application .mr-n12 {
      margin-right: -48px !important
    }

    .v-application .mr-n13 {
      margin-right: -52px !important
    }

    .v-application .mr-n14 {
      margin-right: -56px !important
    }

    .v-application .mr-n15 {
      margin-right: -60px !important
    }

    .v-application .mr-n16 {
      margin-right: -64px !important
    }

    .v-application .mb-n1 {
      margin-bottom: -4px !important
    }

    .v-application .mb-n2 {
      margin-bottom: -8px !important
    }

    .v-application .mb-n3 {
      margin-bottom: -12px !important
    }

    .v-application .mb-n4 {
      margin-bottom: -16px !important
    }

    .v-application .mb-n5 {
      margin-bottom: -20px !important
    }

    .v-application .mb-n6 {
      margin-bottom: -24px !important
    }

    .v-application .mb-n7 {
      margin-bottom: -28px !important
    }

    .v-application .mb-n8 {
      margin-bottom: -32px !important
    }

    .v-application .mb-n9 {
      margin-bottom: -36px !important
    }

    .v-application .mb-n10 {
      margin-bottom: -40px !important
    }

    .v-application .mb-n11 {
      margin-bottom: -44px !important
    }

    .v-application .mb-n12 {
      margin-bottom: -48px !important
    }

    .v-application .mb-n13 {
      margin-bottom: -52px !important
    }

    .v-application .mb-n14 {
      margin-bottom: -56px !important
    }

    .v-application .mb-n15 {
      margin-bottom: -60px !important
    }

    .v-application .mb-n16 {
      margin-bottom: -64px !important
    }

    .v-application .ml-n1 {
      margin-left: -4px !important
    }

    .v-application .ml-n2 {
      margin-left: -8px !important
    }

    .v-application .ml-n3 {
      margin-left: -12px !important
    }

    .v-application .ml-n4 {
      margin-left: -16px !important
    }

    .v-application .ml-n5 {
      margin-left: -20px !important
    }

    .v-application .ml-n6 {
      margin-left: -24px !important
    }

    .v-application .ml-n7 {
      margin-left: -28px !important
    }

    .v-application .ml-n8 {
      margin-left: -32px !important
    }

    .v-application .ml-n9 {
      margin-left: -36px !important
    }

    .v-application .ml-n10 {
      margin-left: -40px !important
    }

    .v-application .ml-n11 {
      margin-left: -44px !important
    }

    .v-application .ml-n12 {
      margin-left: -48px !important
    }

    .v-application .ml-n13 {
      margin-left: -52px !important
    }

    .v-application .ml-n14 {
      margin-left: -56px !important
    }

    .v-application .ml-n15 {
      margin-left: -60px !important
    }

    .v-application .ml-n16 {
      margin-left: -64px !important
    }

    .v-application--is-ltr .ms-n1 {
      margin-left: -4px !important
    }

    .v-application--is-rtl .ms-n1 {
      margin-right: -4px !important
    }

    .v-application--is-ltr .ms-n2 {
      margin-left: -8px !important
    }

    .v-application--is-rtl .ms-n2 {
      margin-right: -8px !important
    }

    .v-application--is-ltr .ms-n3 {
      margin-left: -12px !important
    }

    .v-application--is-rtl .ms-n3 {
      margin-right: -12px !important
    }

    .v-application--is-ltr .ms-n4 {
      margin-left: -16px !important
    }

    .v-application--is-rtl .ms-n4 {
      margin-right: -16px !important
    }

    .v-application--is-ltr .ms-n5 {
      margin-left: -20px !important
    }

    .v-application--is-rtl .ms-n5 {
      margin-right: -20px !important
    }

    .v-application--is-ltr .ms-n6 {
      margin-left: -24px !important
    }

    .v-application--is-rtl .ms-n6 {
      margin-right: -24px !important
    }

    .v-application--is-ltr .ms-n7 {
      margin-left: -28px !important
    }

    .v-application--is-rtl .ms-n7 {
      margin-right: -28px !important
    }

    .v-application--is-ltr .ms-n8 {
      margin-left: -32px !important
    }

    .v-application--is-rtl .ms-n8 {
      margin-right: -32px !important
    }

    .v-application--is-ltr .ms-n9 {
      margin-left: -36px !important
    }

    .v-application--is-rtl .ms-n9 {
      margin-right: -36px !important
    }

    .v-application--is-ltr .ms-n10 {
      margin-left: -40px !important
    }

    .v-application--is-rtl .ms-n10 {
      margin-right: -40px !important
    }

    .v-application--is-ltr .ms-n11 {
      margin-left: -44px !important
    }

    .v-application--is-rtl .ms-n11 {
      margin-right: -44px !important
    }

    .v-application--is-ltr .ms-n12 {
      margin-left: -48px !important
    }

    .v-application--is-rtl .ms-n12 {
      margin-right: -48px !important
    }

    .v-application--is-ltr .ms-n13 {
      margin-left: -52px !important
    }

    .v-application--is-rtl .ms-n13 {
      margin-right: -52px !important
    }

    .v-application--is-ltr .ms-n14 {
      margin-left: -56px !important
    }

    .v-application--is-rtl .ms-n14 {
      margin-right: -56px !important
    }

    .v-application--is-ltr .ms-n15 {
      margin-left: -60px !important
    }

    .v-application--is-rtl .ms-n15 {
      margin-right: -60px !important
    }

    .v-application--is-ltr .ms-n16 {
      margin-left: -64px !important
    }

    .v-application--is-rtl .ms-n16 {
      margin-right: -64px !important
    }

    .v-application--is-ltr .me-n1 {
      margin-right: -4px !important
    }

    .v-application--is-rtl .me-n1 {
      margin-left: -4px !important
    }

    .v-application--is-ltr .me-n2 {
      margin-right: -8px !important
    }

    .v-application--is-rtl .me-n2 {
      margin-left: -8px !important
    }

    .v-application--is-ltr .me-n3 {
      margin-right: -12px !important
    }

    .v-application--is-rtl .me-n3 {
      margin-left: -12px !important
    }

    .v-application--is-ltr .me-n4 {
      margin-right: -16px !important
    }

    .v-application--is-rtl .me-n4 {
      margin-left: -16px !important
    }

    .v-application--is-ltr .me-n5 {
      margin-right: -20px !important
    }

    .v-application--is-rtl .me-n5 {
      margin-left: -20px !important
    }

    .v-application--is-ltr .me-n6 {
      margin-right: -24px !important
    }

    .v-application--is-rtl .me-n6 {
      margin-left: -24px !important
    }

    .v-application--is-ltr .me-n7 {
      margin-right: -28px !important
    }

    .v-application--is-rtl .me-n7 {
      margin-left: -28px !important
    }

    .v-application--is-ltr .me-n8 {
      margin-right: -32px !important
    }

    .v-application--is-rtl .me-n8 {
      margin-left: -32px !important
    }

    .v-application--is-ltr .me-n9 {
      margin-right: -36px !important
    }

    .v-application--is-rtl .me-n9 {
      margin-left: -36px !important
    }

    .v-application--is-ltr .me-n10 {
      margin-right: -40px !important
    }

    .v-application--is-rtl .me-n10 {
      margin-left: -40px !important
    }

    .v-application--is-ltr .me-n11 {
      margin-right: -44px !important
    }

    .v-application--is-rtl .me-n11 {
      margin-left: -44px !important
    }

    .v-application--is-ltr .me-n12 {
      margin-right: -48px !important
    }

    .v-application--is-rtl .me-n12 {
      margin-left: -48px !important
    }

    .v-application--is-ltr .me-n13 {
      margin-right: -52px !important
    }

    .v-application--is-rtl .me-n13 {
      margin-left: -52px !important
    }

    .v-application--is-ltr .me-n14 {
      margin-right: -56px !important
    }

    .v-application--is-rtl .me-n14 {
      margin-left: -56px !important
    }

    .v-application--is-ltr .me-n15 {
      margin-right: -60px !important
    }

    .v-application--is-rtl .me-n15 {
      margin-left: -60px !important
    }

    .v-application--is-ltr .me-n16 {
      margin-right: -64px !important
    }

    .v-application--is-rtl .me-n16 {
      margin-left: -64px !important
    }

    .v-application .pa-0 {
      padding: 0 !important
    }

    .v-application .pa-1 {
      padding: 4px !important
    }

    .v-application .pa-2 {
      padding: 8px !important
    }

    .v-application .pa-3 {
      padding: 12px !important
    }

    .v-application .pa-4 {
      padding: 16px !important
    }

    .v-application .pa-5 {
      padding: 20px !important
    }

    .v-application .pa-6 {
      padding: 24px !important
    }

    .v-application .pa-7 {
      padding: 28px !important
    }

    .v-application .pa-8 {
      padding: 32px !important
    }

    .v-application .pa-9 {
      padding: 36px !important
    }

    .v-application .pa-10 {
      padding: 40px !important
    }

    .v-application .pa-11 {
      padding: 44px !important
    }

    .v-application .pa-12 {
      padding: 48px !important
    }

    .v-application .pa-13 {
      padding: 52px !important
    }

    .v-application .pa-14 {
      padding: 56px !important
    }

    .v-application .pa-15 {
      padding: 60px !important
    }

    .v-application .pa-16 {
      padding: 64px !important
    }

    .v-application .px-0 {
      padding-left: 0 !important;
      padding-right: 0 !important
    }

    .v-application .px-1 {
      padding-left: 4px !important;
      padding-right: 4px !important
    }

    .v-application .px-2 {
      padding-left: 8px !important;
      padding-right: 8px !important
    }

    .v-application .px-3 {
      padding-left: 12px !important;
      padding-right: 12px !important
    }

    .v-application .px-4 {
      padding-left: 16px !important;
      padding-right: 16px !important
    }

    .v-application .px-5 {
      padding-left: 20px !important;
      padding-right: 20px !important
    }

    .v-application .px-6 {
      padding-left: 24px !important;
      padding-right: 24px !important
    }

    .v-application .px-7 {
      padding-left: 28px !important;
      padding-right: 28px !important
    }

    .v-application .px-8 {
      padding-left: 32px !important;
      padding-right: 32px !important
    }

    .v-application .px-9 {
      padding-left: 36px !important;
      padding-right: 36px !important
    }

    .v-application .px-10 {
      padding-left: 40px !important;
      padding-right: 40px !important
    }

    .v-application .px-11 {
      padding-left: 44px !important;
      padding-right: 44px !important
    }

    .v-application .px-12 {
      padding-left: 48px !important;
      padding-right: 48px !important
    }

    .v-application .px-13 {
      padding-left: 52px !important;
      padding-right: 52px !important
    }

    .v-application .px-14 {
      padding-left: 56px !important;
      padding-right: 56px !important
    }

    .v-application .px-15 {
      padding-left: 60px !important;
      padding-right: 60px !important
    }

    .v-application .px-16 {
      padding-left: 64px !important;
      padding-right: 64px !important
    }

    .v-application .py-0 {
      padding-bottom: 0 !important;
      padding-top: 0 !important
    }

    .v-application .py-1 {
      padding-bottom: 4px !important;
      padding-top: 4px !important
    }

    .v-application .py-2 {
      padding-bottom: 8px !important;
      padding-top: 8px !important
    }

    .v-application .py-3 {
      padding-bottom: 12px !important;
      padding-top: 12px !important
    }

    .v-application .py-4 {
      padding-bottom: 16px !important;
      padding-top: 16px !important
    }

    .v-application .py-5 {
      padding-bottom: 20px !important;
      padding-top: 20px !important
    }

    .v-application .py-6 {
      padding-bottom: 24px !important;
      padding-top: 24px !important
    }

    .v-application .py-7 {
      padding-bottom: 28px !important;
      padding-top: 28px !important
    }

    .v-application .py-8 {
      padding-bottom: 32px !important;
      padding-top: 32px !important
    }

    .v-application .py-9 {
      padding-bottom: 36px !important;
      padding-top: 36px !important
    }

    .v-application .py-10 {
      padding-bottom: 40px !important;
      padding-top: 40px !important
    }

    .v-application .py-11 {
      padding-bottom: 44px !important;
      padding-top: 44px !important
    }

    .v-application .py-12 {
      padding-bottom: 48px !important;
      padding-top: 48px !important
    }

    .v-application .py-13 {
      padding-bottom: 52px !important;
      padding-top: 52px !important
    }

    .v-application .py-14 {
      padding-bottom: 56px !important;
      padding-top: 56px !important
    }

    .v-application .py-15 {
      padding-bottom: 60px !important;
      padding-top: 60px !important
    }

    .v-application .py-16 {
      padding-bottom: 64px !important;
      padding-top: 64px !important
    }

    .v-application .pt-0 {
      padding-top: 0 !important
    }

    .v-application .pt-1 {
      padding-top: 4px !important
    }

    .v-application .pt-2 {
      padding-top: 8px !important
    }

    .v-application .pt-3 {
      padding-top: 12px !important
    }

    .v-application .pt-4 {
      padding-top: 16px !important
    }

    .v-application .pt-5 {
      padding-top: 20px !important
    }

    .v-application .pt-6 {
      padding-top: 24px !important
    }

    .v-application .pt-7 {
      padding-top: 28px !important
    }

    .v-application .pt-8 {
      padding-top: 32px !important
    }

    .v-application .pt-9 {
      padding-top: 36px !important
    }

    .v-application .pt-10 {
      padding-top: 40px !important
    }

    .v-application .pt-11 {
      padding-top: 44px !important
    }

    .v-application .pt-12 {
      padding-top: 48px !important
    }

    .v-application .pt-13 {
      padding-top: 52px !important
    }

    .v-application .pt-14 {
      padding-top: 56px !important
    }

    .v-application .pt-15 {
      padding-top: 60px !important
    }

    .v-application .pt-16 {
      padding-top: 64px !important
    }

    .v-application .pr-0 {
      padding-right: 0 !important
    }

    .v-application .pr-1 {
      padding-right: 4px !important
    }

    .v-application .pr-2 {
      padding-right: 8px !important
    }

    .v-application .pr-3 {
      padding-right: 12px !important
    }

    .v-application .pr-4 {
      padding-right: 16px !important
    }

    .v-application .pr-5 {
      padding-right: 20px !important
    }

    .v-application .pr-6 {
      padding-right: 24px !important
    }

    .v-application .pr-7 {
      padding-right: 28px !important
    }

    .v-application .pr-8 {
      padding-right: 32px !important
    }

    .v-application .pr-9 {
      padding-right: 36px !important
    }

    .v-application .pr-10 {
      padding-right: 40px !important
    }

    .v-application .pr-11 {
      padding-right: 44px !important
    }

    .v-application .pr-12 {
      padding-right: 48px !important
    }

    .v-application .pr-13 {
      padding-right: 52px !important
    }

    .v-application .pr-14 {
      padding-right: 56px !important
    }

    .v-application .pr-15 {
      padding-right: 60px !important
    }

    .v-application .pr-16 {
      padding-right: 64px !important
    }

    .v-application .pb-0 {
      padding-bottom: 0 !important
    }

    .v-application .pb-1 {
      padding-bottom: 4px !important
    }

    .v-application .pb-2 {
      padding-bottom: 8px !important
    }

    .v-application .pb-3 {
      padding-bottom: 12px !important
    }

    .v-application .pb-4 {
      padding-bottom: 16px !important
    }

    .v-application .pb-5 {
      padding-bottom: 20px !important
    }

    .v-application .pb-6 {
      padding-bottom: 24px !important
    }

    .v-application .pb-7 {
      padding-bottom: 28px !important
    }

    .v-application .pb-8 {
      padding-bottom: 32px !important
    }

    .v-application .pb-9 {
      padding-bottom: 36px !important
    }

    .v-application .pb-10 {
      padding-bottom: 40px !important
    }

    .v-application .pb-11 {
      padding-bottom: 44px !important
    }

    .v-application .pb-12 {
      padding-bottom: 48px !important
    }

    .v-application .pb-13 {
      padding-bottom: 52px !important
    }

    .v-application .pb-14 {
      padding-bottom: 56px !important
    }

    .v-application .pb-15 {
      padding-bottom: 60px !important
    }

    .v-application .pb-16 {
      padding-bottom: 64px !important
    }

    .v-application .pl-0 {
      padding-left: 0 !important
    }

    .v-application .pl-1 {
      padding-left: 4px !important
    }

    .v-application .pl-2 {
      padding-left: 8px !important
    }

    .v-application .pl-3 {
      padding-left: 12px !important
    }

    .v-application .pl-4 {
      padding-left: 16px !important
    }

    .v-application .pl-5 {
      padding-left: 20px !important
    }

    .v-application .pl-6 {
      padding-left: 24px !important
    }

    .v-application .pl-7 {
      padding-left: 28px !important
    }

    .v-application .pl-8 {
      padding-left: 32px !important
    }

    .v-application .pl-9 {
      padding-left: 36px !important
    }

    .v-application .pl-10 {
      padding-left: 40px !important
    }

    .v-application .pl-11 {
      padding-left: 44px !important
    }

    .v-application .pl-12 {
      padding-left: 48px !important
    }

    .v-application .pl-13 {
      padding-left: 52px !important
    }

    .v-application .pl-14 {
      padding-left: 56px !important
    }

    .v-application .pl-15 {
      padding-left: 60px !important
    }

    .v-application .pl-16 {
      padding-left: 64px !important
    }

    .v-application--is-ltr .ps-0 {
      padding-left: 0 !important
    }

    .v-application--is-rtl .ps-0 {
      padding-right: 0 !important
    }

    .v-application--is-ltr .ps-1 {
      padding-left: 4px !important
    }

    .v-application--is-rtl .ps-1 {
      padding-right: 4px !important
    }

    .v-application--is-ltr .ps-2 {
      padding-left: 8px !important
    }

    .v-application--is-rtl .ps-2 {
      padding-right: 8px !important
    }

    .v-application--is-ltr .ps-3 {
      padding-left: 12px !important
    }

    .v-application--is-rtl .ps-3 {
      padding-right: 12px !important
    }

    .v-application--is-ltr .ps-4 {
      padding-left: 16px !important
    }

    .v-application--is-rtl .ps-4 {
      padding-right: 16px !important
    }

    .v-application--is-ltr .ps-5 {
      padding-left: 20px !important
    }

    .v-application--is-rtl .ps-5 {
      padding-right: 20px !important
    }

    .v-application--is-ltr .ps-6 {
      padding-left: 24px !important
    }

    .v-application--is-rtl .ps-6 {
      padding-right: 24px !important
    }

    .v-application--is-ltr .ps-7 {
      padding-left: 28px !important
    }

    .v-application--is-rtl .ps-7 {
      padding-right: 28px !important
    }

    .v-application--is-ltr .ps-8 {
      padding-left: 32px !important
    }

    .v-application--is-rtl .ps-8 {
      padding-right: 32px !important
    }

    .v-application--is-ltr .ps-9 {
      padding-left: 36px !important
    }

    .v-application--is-rtl .ps-9 {
      padding-right: 36px !important
    }

    .v-application--is-ltr .ps-10 {
      padding-left: 40px !important
    }

    .v-application--is-rtl .ps-10 {
      padding-right: 40px !important
    }

    .v-application--is-ltr .ps-11 {
      padding-left: 44px !important
    }

    .v-application--is-rtl .ps-11 {
      padding-right: 44px !important
    }

    .v-application--is-ltr .ps-12 {
      padding-left: 48px !important
    }

    .v-application--is-rtl .ps-12 {
      padding-right: 48px !important
    }

    .v-application--is-ltr .ps-13 {
      padding-left: 52px !important
    }

    .v-application--is-rtl .ps-13 {
      padding-right: 52px !important
    }

    .v-application--is-ltr .ps-14 {
      padding-left: 56px !important
    }

    .v-application--is-rtl .ps-14 {
      padding-right: 56px !important
    }

    .v-application--is-ltr .ps-15 {
      padding-left: 60px !important
    }

    .v-application--is-rtl .ps-15 {
      padding-right: 60px !important
    }

    .v-application--is-ltr .ps-16 {
      padding-left: 64px !important
    }

    .v-application--is-rtl .ps-16 {
      padding-right: 64px !important
    }

    .v-application--is-ltr .pe-0 {
      padding-right: 0 !important
    }

    .v-application--is-rtl .pe-0 {
      padding-left: 0 !important
    }

    .v-application--is-ltr .pe-1 {
      padding-right: 4px !important
    }

    .v-application--is-rtl .pe-1 {
      padding-left: 4px !important
    }

    .v-application--is-ltr .pe-2 {
      padding-right: 8px !important
    }

    .v-application--is-rtl .pe-2 {
      padding-left: 8px !important
    }

    .v-application--is-ltr .pe-3 {
      padding-right: 12px !important
    }

    .v-application--is-rtl .pe-3 {
      padding-left: 12px !important
    }

    .v-application--is-ltr .pe-4 {
      padding-right: 16px !important
    }

    .v-application--is-rtl .pe-4 {
      padding-left: 16px !important
    }

    .v-application--is-ltr .pe-5 {
      padding-right: 20px !important
    }

    .v-application--is-rtl .pe-5 {
      padding-left: 20px !important
    }

    .v-application--is-ltr .pe-6 {
      padding-right: 24px !important
    }

    .v-application--is-rtl .pe-6 {
      padding-left: 24px !important
    }

    .v-application--is-ltr .pe-7 {
      padding-right: 28px !important
    }

    .v-application--is-rtl .pe-7 {
      padding-left: 28px !important
    }

    .v-application--is-ltr .pe-8 {
      padding-right: 32px !important
    }

    .v-application--is-rtl .pe-8 {
      padding-left: 32px !important
    }

    .v-application--is-ltr .pe-9 {
      padding-right: 36px !important
    }

    .v-application--is-rtl .pe-9 {
      padding-left: 36px !important
    }

    .v-application--is-ltr .pe-10 {
      padding-right: 40px !important
    }

    .v-application--is-rtl .pe-10 {
      padding-left: 40px !important
    }

    .v-application--is-ltr .pe-11 {
      padding-right: 44px !important
    }

    .v-application--is-rtl .pe-11 {
      padding-left: 44px !important
    }

    .v-application--is-ltr .pe-12 {
      padding-right: 48px !important
    }

    .v-application--is-rtl .pe-12 {
      padding-left: 48px !important
    }

    .v-application--is-ltr .pe-13 {
      padding-right: 52px !important
    }

    .v-application--is-rtl .pe-13 {
      padding-left: 52px !important
    }

    .v-application--is-ltr .pe-14 {
      padding-right: 56px !important
    }

    .v-application--is-rtl .pe-14 {
      padding-left: 56px !important
    }

    .v-application--is-ltr .pe-15 {
      padding-right: 60px !important
    }

    .v-application--is-rtl .pe-15 {
      padding-left: 60px !important
    }

    .v-application--is-ltr .pe-16 {
      padding-right: 64px !important
    }

    .v-application--is-rtl .pe-16 {
      padding-left: 64px !important
    }

    .v-application .rounded-0 {
      border-radius: 0 !important
    }

    .v-application .rounded-sm {
      border-radius: 2px !important
    }

    .v-application .rounded {
      border-radius: 4px !important
    }

    .v-application .rounded-lg {
      border-radius: 8px !important
    }

    .v-application .rounded-xl {
      border-radius: 24px !important
    }

    .v-application .rounded-pill {
      border-radius: 9999px !important
    }

    .v-application .rounded-circle {
      border-radius: 50% !important
    }

    .v-application .rounded-t-0 {
      border-top-left-radius: 0 !important;
      border-top-right-radius: 0 !important
    }

    .v-application .rounded-t-sm {
      border-top-left-radius: 2px !important;
      border-top-right-radius: 2px !important
    }

    .v-application .rounded-t {
      border-top-left-radius: 4px !important;
      border-top-right-radius: 4px !important
    }

    .v-application .rounded-t-lg {
      border-top-left-radius: 8px !important;
      border-top-right-radius: 8px !important
    }

    .v-application .rounded-t-xl {
      border-top-left-radius: 24px !important;
      border-top-right-radius: 24px !important
    }

    .v-application .rounded-t-pill {
      border-top-left-radius: 9999px !important;
      border-top-right-radius: 9999px !important
    }

    .v-application .rounded-t-circle {
      border-top-left-radius: 50% !important;
      border-top-right-radius: 50% !important
    }

    .v-application .rounded-r-0 {
      border-bottom-right-radius: 0 !important;
      border-top-right-radius: 0 !important
    }

    .v-application .rounded-r-sm {
      border-bottom-right-radius: 2px !important;
      border-top-right-radius: 2px !important
    }

    .v-application .rounded-r {
      border-bottom-right-radius: 4px !important;
      border-top-right-radius: 4px !important
    }

    .v-application .rounded-r-lg {
      border-bottom-right-radius: 8px !important;
      border-top-right-radius: 8px !important
    }

    .v-application .rounded-r-xl {
      border-bottom-right-radius: 24px !important;
      border-top-right-radius: 24px !important
    }

    .v-application .rounded-r-pill {
      border-bottom-right-radius: 9999px !important;
      border-top-right-radius: 9999px !important
    }

    .v-application .rounded-r-circle {
      border-bottom-right-radius: 50% !important;
      border-top-right-radius: 50% !important
    }

    .v-application .rounded-b-0 {
      border-bottom-left-radius: 0 !important;
      border-bottom-right-radius: 0 !important
    }

    .v-application .rounded-b-sm {
      border-bottom-left-radius: 2px !important;
      border-bottom-right-radius: 2px !important
    }

    .v-application .rounded-b {
      border-bottom-left-radius: 4px !important;
      border-bottom-right-radius: 4px !important
    }

    .v-application .rounded-b-lg {
      border-bottom-left-radius: 8px !important;
      border-bottom-right-radius: 8px !important
    }

    .v-application .rounded-b-xl {
      border-bottom-left-radius: 24px !important;
      border-bottom-right-radius: 24px !important
    }

    .v-application .rounded-b-pill {
      border-bottom-left-radius: 9999px !important;
      border-bottom-right-radius: 9999px !important
    }

    .v-application .rounded-b-circle {
      border-bottom-left-radius: 50% !important;
      border-bottom-right-radius: 50% !important
    }

    .v-application .rounded-l-0 {
      border-bottom-left-radius: 0 !important;
      border-top-left-radius: 0 !important
    }

    .v-application .rounded-l-sm {
      border-bottom-left-radius: 2px !important;
      border-top-left-radius: 2px !important
    }

    .v-application .rounded-l {
      border-bottom-left-radius: 4px !important;
      border-top-left-radius: 4px !important
    }

    .v-application .rounded-l-lg {
      border-bottom-left-radius: 8px !important;
      border-top-left-radius: 8px !important
    }

    .v-application .rounded-l-xl {
      border-bottom-left-radius: 24px !important;
      border-top-left-radius: 24px !important
    }

    .v-application .rounded-l-pill {
      border-bottom-left-radius: 9999px !important;
      border-top-left-radius: 9999px !important
    }

    .v-application .rounded-l-circle {
      border-bottom-left-radius: 50% !important;
      border-top-left-radius: 50% !important
    }

    .v-application .rounded-tl-0 {
      border-top-left-radius: 0 !important
    }

    .v-application .rounded-tl-sm {
      border-top-left-radius: 2px !important
    }

    .v-application .rounded-tl {
      border-top-left-radius: 4px !important
    }

    .v-application .rounded-tl-lg {
      border-top-left-radius: 8px !important
    }

    .v-application .rounded-tl-xl {
      border-top-left-radius: 24px !important
    }

    .v-application .rounded-tl-pill {
      border-top-left-radius: 9999px !important
    }

    .v-application .rounded-tl-circle {
      border-top-left-radius: 50% !important
    }

    .v-application .rounded-tr-0 {
      border-top-right-radius: 0 !important
    }

    .v-application .rounded-tr-sm {
      border-top-right-radius: 2px !important
    }

    .v-application .rounded-tr {
      border-top-right-radius: 4px !important
    }

    .v-application .rounded-tr-lg {
      border-top-right-radius: 8px !important
    }

    .v-application .rounded-tr-xl {
      border-top-right-radius: 24px !important
    }

    .v-application .rounded-tr-pill {
      border-top-right-radius: 9999px !important
    }

    .v-application .rounded-tr-circle {
      border-top-right-radius: 50% !important
    }

    .v-application .rounded-br-0 {
      border-bottom-right-radius: 0 !important
    }

    .v-application .rounded-br-sm {
      border-bottom-right-radius: 2px !important
    }

    .v-application .rounded-br {
      border-bottom-right-radius: 4px !important
    }

    .v-application .rounded-br-lg {
      border-bottom-right-radius: 8px !important
    }

    .v-application .rounded-br-xl {
      border-bottom-right-radius: 24px !important
    }

    .v-application .rounded-br-pill {
      border-bottom-right-radius: 9999px !important
    }

    .v-application .rounded-br-circle {
      border-bottom-right-radius: 50% !important
    }

    .v-application .rounded-bl-0 {
      border-bottom-left-radius: 0 !important
    }

    .v-application .rounded-bl-sm {
      border-bottom-left-radius: 2px !important
    }

    .v-application .rounded-bl {
      border-bottom-left-radius: 4px !important
    }

    .v-application .rounded-bl-lg {
      border-bottom-left-radius: 8px !important
    }

    .v-application .rounded-bl-xl {
      border-bottom-left-radius: 24px !important
    }

    .v-application .rounded-bl-pill {
      border-bottom-left-radius: 9999px !important
    }

    .v-application .rounded-bl-circle {
      border-bottom-left-radius: 50% !important
    }

    .v-application .text-left {
      text-align: left !important
    }

    .v-application .text-right {
      text-align: right !important
    }

    .v-application .text-center {
      text-align: center !important
    }

    .v-application .text-justify {
      text-align: justify !important
    }

    .v-application .text-start {
      text-align: left !important
    }

    .v-application .text-end {
      text-align: right !important
    }

    .v-application .text-decoration-line-through {
      -webkit-text-decoration: line-through !important;
      text-decoration: line-through !important
    }

    .v-application .text-decoration-none {
      -webkit-text-decoration: none !important;
      text-decoration: none !important
    }

    .v-application .text-decoration-overline {
      -webkit-text-decoration: overline !important;
      text-decoration: overline !important
    }

    .v-application .text-decoration-underline {
      -webkit-text-decoration: underline !important;
      text-decoration: underline !important
    }

    .v-application .text-wrap {
      white-space: normal !important
    }

    .v-application .text-no-wrap {
      white-space: nowrap !important
    }

    .v-application .text-pre {
      white-space: pre !important
    }

    .v-application .text-pre-line {
      white-space: pre-line !important
    }

    .v-application .text-pre-wrap {
      white-space: pre-wrap !important
    }

    .v-application .text-break {
      word-wrap: break-word !important;
      word-break: break-word !important
    }

    .v-application .text-truncate {
      overflow: hidden !important;
      text-overflow: ellipsis !important;
      white-space: nowrap !important
    }

    .v-application .text-none {
      text-transform: none !important
    }

    .v-application .text-capitalize {
      text-transform: capitalize !important
    }

    .v-application .text-lowercase {
      text-transform: lowercase !important
    }

    .v-application .text-uppercase {
      text-transform: uppercase !important
    }

    .v-application .text-h1 {
      font-size: 6rem !important;
      font-weight: 300;
      letter-spacing: -.015625em !important;
      line-height: 6rem
    }

    .v-application .text-h1,
    .v-application .text-h2 {
      font-family: "TT Norms Pro Serif Medium" !important
    }

    .v-application .text-h2 {
      font-size: 3.75rem !important;
      font-weight: 300;
      letter-spacing: -.0083333333em !important;
      line-height: 3.75rem
    }

    .v-application .text-h3 {
      font-size: 3rem !important;
      font-weight: 400;
      letter-spacing: normal !important;
      line-height: 3.125rem
    }

    .v-application .text-h3,
    .v-application .text-h4 {
      font-family: "TT Norms Pro Serif Medium" !important
    }

    .v-application .text-h4 {
      font-size: 2.125rem !important;
      font-weight: 400;
      letter-spacing: .0073529412em !important;
      line-height: 2.5rem
    }

    .v-application .text-h5 {
      font-size: 1.5rem !important;
      font-weight: 400;
      letter-spacing: normal !important;
      line-height: 2rem
    }

    .v-application .text-h5,
    .v-application .text-h6 {
      font-family: "TT Norms Pro Serif Medium" !important
    }

    .v-application .text-h6 {
      font-size: 1.25rem !important;
      font-weight: 500;
      letter-spacing: .0125em !important;
      line-height: 2rem
    }

    .v-application .text-subtitle-1 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: 1rem !important;
      font-weight: 400;
      letter-spacing: .009375em !important;
      line-height: 1.75rem
    }

    .v-application .text-subtitle-2 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: .875rem !important;
      font-weight: 500;
      letter-spacing: .0071428571em !important;
      line-height: 1.375rem
    }

    .v-application .text-body-1 {
      font-family: "TT Norms Pro Regular" !important;
      font-size: 1rem !important;
      font-weight: 400;
      letter-spacing: .03125em !important;
      line-height: 1.5rem
    }

    .v-application .text-body-2 {
      font-weight: 400;
      letter-spacing: .0178571429em !important;
      line-height: 1.25rem
    }

    .v-application .text-body-2,
    .v-application .text-button {
      font-family: "TT Norms Pro Regular" !important;
      font-size: .875rem !important
    }

    .v-application .text-button {
      font-weight: 500;
      letter-spacing: .0892857143em !important;
      line-height: 2.25rem;
      text-transform: uppercase !important
    }

    .v-application .text-caption {
      font-weight: 400;
      letter-spacing: .0333333333em !important;
      line-height: 1.25rem
    }

    .v-application .text-caption,
    .v-application .text-overline {
      font-family: "TT Norms Pro Regular" !important;
      font-size: .75rem !important
    }

    .v-application .text-overline {
      font-weight: 500;
      letter-spacing: .1666666667em !important;
      line-height: 2rem;
      text-transform: uppercase !important
    }

    @media(min-width:600px) {
      .v-application .d-sm-none {
        display: none !important
      }

      .v-application .d-sm-inline {
        display: inline !important
      }

      .v-application .d-sm-inline-block {
        display: inline-block !important
      }

      .v-application .d-sm-block {
        display: block !important
      }

      .v-application .d-sm-table {
        display: table !important
      }

      .v-application .d-sm-table-row {
        display: table-row !important
      }

      .v-application .d-sm-table-cell {
        display: table-cell !important
      }

      .v-application .d-sm-flex {
        display: flex !important
      }

      .v-application .d-sm-inline-flex {
        display: inline-flex !important
      }

      .v-application .float-sm-none {
        float: none !important
      }

      .v-application .float-sm-left {
        float: left !important
      }

      .v-application .float-sm-right {
        float: right !important
      }

      .v-application--is-rtl .float-sm-end {
        float: left !important
      }

      .v-application--is-ltr .float-sm-end,
      .v-application--is-rtl .float-sm-start {
        float: right !important
      }

      .v-application--is-ltr .float-sm-start {
        float: left !important
      }

      .v-application .flex-sm-fill {
        flex: 1 1 auto !important
      }

      .v-application .flex-sm-row {
        flex-direction: row !important
      }

      .v-application .flex-sm-column {
        flex-direction: column !important
      }

      .v-application .flex-sm-row-reverse {
        flex-direction: row-reverse !important
      }

      .v-application .flex-sm-column-reverse {
        flex-direction: column-reverse !important
      }

      .v-application .flex-sm-grow-0 {
        flex-grow: 0 !important
      }

      .v-application .flex-sm-grow-1 {
        flex-grow: 1 !important
      }

      .v-application .flex-sm-shrink-0 {
        flex-shrink: 0 !important
      }

      .v-application .flex-sm-shrink-1 {
        flex-shrink: 1 !important
      }

      .v-application .flex-sm-wrap {
        flex-wrap: wrap !important
      }

      .v-application .flex-sm-nowrap {
        flex-wrap: nowrap !important
      }

      .v-application .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important
      }

      .v-application .justify-sm-start {
        justify-content: flex-start !important
      }

      .v-application .justify-sm-end {
        justify-content: flex-end !important
      }

      .v-application .justify-sm-center {
        justify-content: center !important
      }

      .v-application .justify-sm-space-between {
        justify-content: space-between !important
      }

      .v-application .justify-sm-space-around {
        justify-content: space-around !important
      }

      .v-application .align-sm-start {
        align-items: flex-start !important
      }

      .v-application .align-sm-end {
        align-items: flex-end !important
      }

      .v-application .align-sm-center {
        align-items: center !important
      }

      .v-application .align-sm-baseline {
        align-items: baseline !important
      }

      .v-application .align-sm-stretch {
        align-items: stretch !important
      }

      .v-application .align-content-sm-start {
        align-content: flex-start !important
      }

      .v-application .align-content-sm-end {
        align-content: flex-end !important
      }

      .v-application .align-content-sm-center {
        align-content: center !important
      }

      .v-application .align-content-sm-space-between {
        align-content: space-between !important
      }

      .v-application .align-content-sm-space-around {
        align-content: space-around !important
      }

      .v-application .align-content-sm-stretch {
        align-content: stretch !important
      }

      .v-application .align-self-sm-auto {
        align-self: auto !important
      }

      .v-application .align-self-sm-start {
        align-self: flex-start !important
      }

      .v-application .align-self-sm-end {
        align-self: flex-end !important
      }

      .v-application .align-self-sm-center {
        align-self: center !important
      }

      .v-application .align-self-sm-baseline {
        align-self: baseline !important
      }

      .v-application .align-self-sm-stretch {
        align-self: stretch !important
      }

      .v-application .order-sm-first {
        order: -1 !important
      }

      .v-application .order-sm-0 {
        order: 0 !important
      }

      .v-application .order-sm-1 {
        order: 1 !important
      }

      .v-application .order-sm-2 {
        order: 2 !important
      }

      .v-application .order-sm-3 {
        order: 3 !important
      }

      .v-application .order-sm-4 {
        order: 4 !important
      }

      .v-application .order-sm-5 {
        order: 5 !important
      }

      .v-application .order-sm-6 {
        order: 6 !important
      }

      .v-application .order-sm-7 {
        order: 7 !important
      }

      .v-application .order-sm-8 {
        order: 8 !important
      }

      .v-application .order-sm-9 {
        order: 9 !important
      }

      .v-application .order-sm-10 {
        order: 10 !important
      }

      .v-application .order-sm-11 {
        order: 11 !important
      }

      .v-application .order-sm-12 {
        order: 12 !important
      }

      .v-application .order-sm-last {
        order: 13 !important
      }

      .v-application .ma-sm-0 {
        margin: 0 !important
      }

      .v-application .ma-sm-1 {
        margin: 4px !important
      }

      .v-application .ma-sm-2 {
        margin: 8px !important
      }

      .v-application .ma-sm-3 {
        margin: 12px !important
      }

      .v-application .ma-sm-4 {
        margin: 16px !important
      }

      .v-application .ma-sm-5 {
        margin: 20px !important
      }

      .v-application .ma-sm-6 {
        margin: 24px !important
      }

      .v-application .ma-sm-7 {
        margin: 28px !important
      }

      .v-application .ma-sm-8 {
        margin: 32px !important
      }

      .v-application .ma-sm-9 {
        margin: 36px !important
      }

      .v-application .ma-sm-10 {
        margin: 40px !important
      }

      .v-application .ma-sm-11 {
        margin: 44px !important
      }

      .v-application .ma-sm-12 {
        margin: 48px !important
      }

      .v-application .ma-sm-13 {
        margin: 52px !important
      }

      .v-application .ma-sm-14 {
        margin: 56px !important
      }

      .v-application .ma-sm-15 {
        margin: 60px !important
      }

      .v-application .ma-sm-16 {
        margin: 64px !important
      }

      .v-application .ma-sm-auto {
        margin: auto !important
      }

      .v-application .mx-sm-0 {
        margin-left: 0 !important;
        margin-right: 0 !important
      }

      .v-application .mx-sm-1 {
        margin-left: 4px !important;
        margin-right: 4px !important
      }

      .v-application .mx-sm-2 {
        margin-left: 8px !important;
        margin-right: 8px !important
      }

      .v-application .mx-sm-3 {
        margin-left: 12px !important;
        margin-right: 12px !important
      }

      .v-application .mx-sm-4 {
        margin-left: 16px !important;
        margin-right: 16px !important
      }

      .v-application .mx-sm-5 {
        margin-left: 20px !important;
        margin-right: 20px !important
      }

      .v-application .mx-sm-6 {
        margin-left: 24px !important;
        margin-right: 24px !important
      }

      .v-application .mx-sm-7 {
        margin-left: 28px !important;
        margin-right: 28px !important
      }

      .v-application .mx-sm-8 {
        margin-left: 32px !important;
        margin-right: 32px !important
      }

      .v-application .mx-sm-9 {
        margin-left: 36px !important;
        margin-right: 36px !important
      }

      .v-application .mx-sm-10 {
        margin-left: 40px !important;
        margin-right: 40px !important
      }

      .v-application .mx-sm-11 {
        margin-left: 44px !important;
        margin-right: 44px !important
      }

      .v-application .mx-sm-12 {
        margin-left: 48px !important;
        margin-right: 48px !important
      }

      .v-application .mx-sm-13 {
        margin-left: 52px !important;
        margin-right: 52px !important
      }

      .v-application .mx-sm-14 {
        margin-left: 56px !important;
        margin-right: 56px !important
      }

      .v-application .mx-sm-15 {
        margin-left: 60px !important;
        margin-right: 60px !important
      }

      .v-application .mx-sm-16 {
        margin-left: 64px !important;
        margin-right: 64px !important
      }

      .v-application .mx-sm-auto {
        margin-left: auto !important;
        margin-right: auto !important
      }

      .v-application .my-sm-0 {
        margin-bottom: 0 !important;
        margin-top: 0 !important
      }

      .v-application .my-sm-1 {
        margin-bottom: 4px !important;
        margin-top: 4px !important
      }

      .v-application .my-sm-2 {
        margin-bottom: 8px !important;
        margin-top: 8px !important
      }

      .v-application .my-sm-3 {
        margin-bottom: 12px !important;
        margin-top: 12px !important
      }

      .v-application .my-sm-4 {
        margin-bottom: 16px !important;
        margin-top: 16px !important
      }

      .v-application .my-sm-5 {
        margin-bottom: 20px !important;
        margin-top: 20px !important
      }

      .v-application .my-sm-6 {
        margin-bottom: 24px !important;
        margin-top: 24px !important
      }

      .v-application .my-sm-7 {
        margin-bottom: 28px !important;
        margin-top: 28px !important
      }

      .v-application .my-sm-8 {
        margin-bottom: 32px !important;
        margin-top: 32px !important
      }

      .v-application .my-sm-9 {
        margin-bottom: 36px !important;
        margin-top: 36px !important
      }

      .v-application .my-sm-10 {
        margin-bottom: 40px !important;
        margin-top: 40px !important
      }

      .v-application .my-sm-11 {
        margin-bottom: 44px !important;
        margin-top: 44px !important
      }

      .v-application .my-sm-12 {
        margin-bottom: 48px !important;
        margin-top: 48px !important
      }

      .v-application .my-sm-13 {
        margin-bottom: 52px !important;
        margin-top: 52px !important
      }

      .v-application .my-sm-14 {
        margin-bottom: 56px !important;
        margin-top: 56px !important
      }

      .v-application .my-sm-15 {
        margin-bottom: 60px !important;
        margin-top: 60px !important
      }

      .v-application .my-sm-16 {
        margin-bottom: 64px !important;
        margin-top: 64px !important
      }

      .v-application .my-sm-auto {
        margin-bottom: auto !important;
        margin-top: auto !important
      }

      .v-application .mt-sm-0 {
        margin-top: 0 !important
      }

      .v-application .mt-sm-1 {
        margin-top: 4px !important
      }

      .v-application .mt-sm-2 {
        margin-top: 8px !important
      }

      .v-application .mt-sm-3 {
        margin-top: 12px !important
      }

      .v-application .mt-sm-4 {
        margin-top: 16px !important
      }

      .v-application .mt-sm-5 {
        margin-top: 20px !important
      }

      .v-application .mt-sm-6 {
        margin-top: 24px !important
      }

      .v-application .mt-sm-7 {
        margin-top: 28px !important
      }

      .v-application .mt-sm-8 {
        margin-top: 32px !important
      }

      .v-application .mt-sm-9 {
        margin-top: 36px !important
      }

      .v-application .mt-sm-10 {
        margin-top: 40px !important
      }

      .v-application .mt-sm-11 {
        margin-top: 44px !important
      }

      .v-application .mt-sm-12 {
        margin-top: 48px !important
      }

      .v-application .mt-sm-13 {
        margin-top: 52px !important
      }

      .v-application .mt-sm-14 {
        margin-top: 56px !important
      }

      .v-application .mt-sm-15 {
        margin-top: 60px !important
      }

      .v-application .mt-sm-16 {
        margin-top: 64px !important
      }

      .v-application .mt-sm-auto {
        margin-top: auto !important
      }

      .v-application .mr-sm-0 {
        margin-right: 0 !important
      }

      .v-application .mr-sm-1 {
        margin-right: 4px !important
      }

      .v-application .mr-sm-2 {
        margin-right: 8px !important
      }

      .v-application .mr-sm-3 {
        margin-right: 12px !important
      }

      .v-application .mr-sm-4 {
        margin-right: 16px !important
      }

      .v-application .mr-sm-5 {
        margin-right: 20px !important
      }

      .v-application .mr-sm-6 {
        margin-right: 24px !important
      }

      .v-application .mr-sm-7 {
        margin-right: 28px !important
      }

      .v-application .mr-sm-8 {
        margin-right: 32px !important
      }

      .v-application .mr-sm-9 {
        margin-right: 36px !important
      }

      .v-application .mr-sm-10 {
        margin-right: 40px !important
      }

      .v-application .mr-sm-11 {
        margin-right: 44px !important
      }

      .v-application .mr-sm-12 {
        margin-right: 48px !important
      }

      .v-application .mr-sm-13 {
        margin-right: 52px !important
      }

      .v-application .mr-sm-14 {
        margin-right: 56px !important
      }

      .v-application .mr-sm-15 {
        margin-right: 60px !important
      }

      .v-application .mr-sm-16 {
        margin-right: 64px !important
      }

      .v-application .mr-sm-auto {
        margin-right: auto !important
      }

      .v-application .mb-sm-0 {
        margin-bottom: 0 !important
      }

      .v-application .mb-sm-1 {
        margin-bottom: 4px !important
      }

      .v-application .mb-sm-2 {
        margin-bottom: 8px !important
      }

      .v-application .mb-sm-3 {
        margin-bottom: 12px !important
      }

      .v-application .mb-sm-4 {
        margin-bottom: 16px !important
      }

      .v-application .mb-sm-5 {
        margin-bottom: 20px !important
      }

      .v-application .mb-sm-6 {
        margin-bottom: 24px !important
      }

      .v-application .mb-sm-7 {
        margin-bottom: 28px !important
      }

      .v-application .mb-sm-8 {
        margin-bottom: 32px !important
      }

      .v-application .mb-sm-9 {
        margin-bottom: 36px !important
      }

      .v-application .mb-sm-10 {
        margin-bottom: 40px !important
      }

      .v-application .mb-sm-11 {
        margin-bottom: 44px !important
      }

      .v-application .mb-sm-12 {
        margin-bottom: 48px !important
      }

      .v-application .mb-sm-13 {
        margin-bottom: 52px !important
      }

      .v-application .mb-sm-14 {
        margin-bottom: 56px !important
      }

      .v-application .mb-sm-15 {
        margin-bottom: 60px !important
      }

      .v-application .mb-sm-16 {
        margin-bottom: 64px !important
      }

      .v-application .mb-sm-auto {
        margin-bottom: auto !important
      }

      .v-application .ml-sm-0 {
        margin-left: 0 !important
      }

      .v-application .ml-sm-1 {
        margin-left: 4px !important
      }

      .v-application .ml-sm-2 {
        margin-left: 8px !important
      }

      .v-application .ml-sm-3 {
        margin-left: 12px !important
      }

      .v-application .ml-sm-4 {
        margin-left: 16px !important
      }

      .v-application .ml-sm-5 {
        margin-left: 20px !important
      }

      .v-application .ml-sm-6 {
        margin-left: 24px !important
      }

      .v-application .ml-sm-7 {
        margin-left: 28px !important
      }

      .v-application .ml-sm-8 {
        margin-left: 32px !important
      }

      .v-application .ml-sm-9 {
        margin-left: 36px !important
      }

      .v-application .ml-sm-10 {
        margin-left: 40px !important
      }

      .v-application .ml-sm-11 {
        margin-left: 44px !important
      }

      .v-application .ml-sm-12 {
        margin-left: 48px !important
      }

      .v-application .ml-sm-13 {
        margin-left: 52px !important
      }

      .v-application .ml-sm-14 {
        margin-left: 56px !important
      }

      .v-application .ml-sm-15 {
        margin-left: 60px !important
      }

      .v-application .ml-sm-16 {
        margin-left: 64px !important
      }

      .v-application .ml-sm-auto {
        margin-left: auto !important
      }

      .v-application--is-ltr .ms-sm-0 {
        margin-left: 0 !important
      }

      .v-application--is-rtl .ms-sm-0 {
        margin-right: 0 !important
      }

      .v-application--is-ltr .ms-sm-1 {
        margin-left: 4px !important
      }

      .v-application--is-rtl .ms-sm-1 {
        margin-right: 4px !important
      }

      .v-application--is-ltr .ms-sm-2 {
        margin-left: 8px !important
      }

      .v-application--is-rtl .ms-sm-2 {
        margin-right: 8px !important
      }

      .v-application--is-ltr .ms-sm-3 {
        margin-left: 12px !important
      }

      .v-application--is-rtl .ms-sm-3 {
        margin-right: 12px !important
      }

      .v-application--is-ltr .ms-sm-4 {
        margin-left: 16px !important
      }

      .v-application--is-rtl .ms-sm-4 {
        margin-right: 16px !important
      }

      .v-application--is-ltr .ms-sm-5 {
        margin-left: 20px !important
      }

      .v-application--is-rtl .ms-sm-5 {
        margin-right: 20px !important
      }

      .v-application--is-ltr .ms-sm-6 {
        margin-left: 24px !important
      }

      .v-application--is-rtl .ms-sm-6 {
        margin-right: 24px !important
      }

      .v-application--is-ltr .ms-sm-7 {
        margin-left: 28px !important
      }

      .v-application--is-rtl .ms-sm-7 {
        margin-right: 28px !important
      }

      .v-application--is-ltr .ms-sm-8 {
        margin-left: 32px !important
      }

      .v-application--is-rtl .ms-sm-8 {
        margin-right: 32px !important
      }

      .v-application--is-ltr .ms-sm-9 {
        margin-left: 36px !important
      }

      .v-application--is-rtl .ms-sm-9 {
        margin-right: 36px !important
      }

      .v-application--is-ltr .ms-sm-10 {
        margin-left: 40px !important
      }

      .v-application--is-rtl .ms-sm-10 {
        margin-right: 40px !important
      }

      .v-application--is-ltr .ms-sm-11 {
        margin-left: 44px !important
      }

      .v-application--is-rtl .ms-sm-11 {
        margin-right: 44px !important
      }

      .v-application--is-ltr .ms-sm-12 {
        margin-left: 48px !important
      }

      .v-application--is-rtl .ms-sm-12 {
        margin-right: 48px !important
      }

      .v-application--is-ltr .ms-sm-13 {
        margin-left: 52px !important
      }

      .v-application--is-rtl .ms-sm-13 {
        margin-right: 52px !important
      }

      .v-application--is-ltr .ms-sm-14 {
        margin-left: 56px !important
      }

      .v-application--is-rtl .ms-sm-14 {
        margin-right: 56px !important
      }

      .v-application--is-ltr .ms-sm-15 {
        margin-left: 60px !important
      }

      .v-application--is-rtl .ms-sm-15 {
        margin-right: 60px !important
      }

      .v-application--is-ltr .ms-sm-16 {
        margin-left: 64px !important
      }

      .v-application--is-rtl .ms-sm-16 {
        margin-right: 64px !important
      }

      .v-application--is-ltr .ms-sm-auto {
        margin-left: auto !important
      }

      .v-application--is-rtl .ms-sm-auto {
        margin-right: auto !important
      }

      .v-application--is-ltr .me-sm-0 {
        margin-right: 0 !important
      }

      .v-application--is-rtl .me-sm-0 {
        margin-left: 0 !important
      }

      .v-application--is-ltr .me-sm-1 {
        margin-right: 4px !important
      }

      .v-application--is-rtl .me-sm-1 {
        margin-left: 4px !important
      }

      .v-application--is-ltr .me-sm-2 {
        margin-right: 8px !important
      }

      .v-application--is-rtl .me-sm-2 {
        margin-left: 8px !important
      }

      .v-application--is-ltr .me-sm-3 {
        margin-right: 12px !important
      }

      .v-application--is-rtl .me-sm-3 {
        margin-left: 12px !important
      }

      .v-application--is-ltr .me-sm-4 {
        margin-right: 16px !important
      }

      .v-application--is-rtl .me-sm-4 {
        margin-left: 16px !important
      }

      .v-application--is-ltr .me-sm-5 {
        margin-right: 20px !important
      }

      .v-application--is-rtl .me-sm-5 {
        margin-left: 20px !important
      }

      .v-application--is-ltr .me-sm-6 {
        margin-right: 24px !important
      }

      .v-application--is-rtl .me-sm-6 {
        margin-left: 24px !important
      }

      .v-application--is-ltr .me-sm-7 {
        margin-right: 28px !important
      }

      .v-application--is-rtl .me-sm-7 {
        margin-left: 28px !important
      }

      .v-application--is-ltr .me-sm-8 {
        margin-right: 32px !important
      }

      .v-application--is-rtl .me-sm-8 {
        margin-left: 32px !important
      }

      .v-application--is-ltr .me-sm-9 {
        margin-right: 36px !important
      }

      .v-application--is-rtl .me-sm-9 {
        margin-left: 36px !important
      }

      .v-application--is-ltr .me-sm-10 {
        margin-right: 40px !important
      }

      .v-application--is-rtl .me-sm-10 {
        margin-left: 40px !important
      }

      .v-application--is-ltr .me-sm-11 {
        margin-right: 44px !important
      }

      .v-application--is-rtl .me-sm-11 {
        margin-left: 44px !important
      }

      .v-application--is-ltr .me-sm-12 {
        margin-right: 48px !important
      }

      .v-application--is-rtl .me-sm-12 {
        margin-left: 48px !important
      }

      .v-application--is-ltr .me-sm-13 {
        margin-right: 52px !important
      }

      .v-application--is-rtl .me-sm-13 {
        margin-left: 52px !important
      }

      .v-application--is-ltr .me-sm-14 {
        margin-right: 56px !important
      }

      .v-application--is-rtl .me-sm-14 {
        margin-left: 56px !important
      }

      .v-application--is-ltr .me-sm-15 {
        margin-right: 60px !important
      }

      .v-application--is-rtl .me-sm-15 {
        margin-left: 60px !important
      }

      .v-application--is-ltr .me-sm-16 {
        margin-right: 64px !important
      }

      .v-application--is-rtl .me-sm-16 {
        margin-left: 64px !important
      }

      .v-application--is-ltr .me-sm-auto {
        margin-right: auto !important
      }

      .v-application--is-rtl .me-sm-auto {
        margin-left: auto !important
      }

      .v-application .ma-sm-n1 {
        margin: -4px !important
      }

      .v-application .ma-sm-n2 {
        margin: -8px !important
      }

      .v-application .ma-sm-n3 {
        margin: -12px !important
      }

      .v-application .ma-sm-n4 {
        margin: -16px !important
      }

      .v-application .ma-sm-n5 {
        margin: -20px !important
      }

      .v-application .ma-sm-n6 {
        margin: -24px !important
      }

      .v-application .ma-sm-n7 {
        margin: -28px !important
      }

      .v-application .ma-sm-n8 {
        margin: -32px !important
      }

      .v-application .ma-sm-n9 {
        margin: -36px !important
      }

      .v-application .ma-sm-n10 {
        margin: -40px !important
      }

      .v-application .ma-sm-n11 {
        margin: -44px !important
      }

      .v-application .ma-sm-n12 {
        margin: -48px !important
      }

      .v-application .ma-sm-n13 {
        margin: -52px !important
      }

      .v-application .ma-sm-n14 {
        margin: -56px !important
      }

      .v-application .ma-sm-n15 {
        margin: -60px !important
      }

      .v-application .ma-sm-n16 {
        margin: -64px !important
      }

      .v-application .mx-sm-n1 {
        margin-left: -4px !important;
        margin-right: -4px !important
      }

      .v-application .mx-sm-n2 {
        margin-left: -8px !important;
        margin-right: -8px !important
      }

      .v-application .mx-sm-n3 {
        margin-left: -12px !important;
        margin-right: -12px !important
      }

      .v-application .mx-sm-n4 {
        margin-left: -16px !important;
        margin-right: -16px !important
      }

      .v-application .mx-sm-n5 {
        margin-left: -20px !important;
        margin-right: -20px !important
      }

      .v-application .mx-sm-n6 {
        margin-left: -24px !important;
        margin-right: -24px !important
      }

      .v-application .mx-sm-n7 {
        margin-left: -28px !important;
        margin-right: -28px !important
      }

      .v-application .mx-sm-n8 {
        margin-left: -32px !important;
        margin-right: -32px !important
      }

      .v-application .mx-sm-n9 {
        margin-left: -36px !important;
        margin-right: -36px !important
      }

      .v-application .mx-sm-n10 {
        margin-left: -40px !important;
        margin-right: -40px !important
      }

      .v-application .mx-sm-n11 {
        margin-left: -44px !important;
        margin-right: -44px !important
      }

      .v-application .mx-sm-n12 {
        margin-left: -48px !important;
        margin-right: -48px !important
      }

      .v-application .mx-sm-n13 {
        margin-left: -52px !important;
        margin-right: -52px !important
      }

      .v-application .mx-sm-n14 {
        margin-left: -56px !important;
        margin-right: -56px !important
      }

      .v-application .mx-sm-n15 {
        margin-left: -60px !important;
        margin-right: -60px !important
      }

      .v-application .mx-sm-n16 {
        margin-left: -64px !important;
        margin-right: -64px !important
      }

      .v-application .my-sm-n1 {
        margin-bottom: -4px !important;
        margin-top: -4px !important
      }

      .v-application .my-sm-n2 {
        margin-bottom: -8px !important;
        margin-top: -8px !important
      }

      .v-application .my-sm-n3 {
        margin-bottom: -12px !important;
        margin-top: -12px !important
      }

      .v-application .my-sm-n4 {
        margin-bottom: -16px !important;
        margin-top: -16px !important
      }

      .v-application .my-sm-n5 {
        margin-bottom: -20px !important;
        margin-top: -20px !important
      }

      .v-application .my-sm-n6 {
        margin-bottom: -24px !important;
        margin-top: -24px !important
      }

      .v-application .my-sm-n7 {
        margin-bottom: -28px !important;
        margin-top: -28px !important
      }

      .v-application .my-sm-n8 {
        margin-bottom: -32px !important;
        margin-top: -32px !important
      }

      .v-application .my-sm-n9 {
        margin-bottom: -36px !important;
        margin-top: -36px !important
      }

      .v-application .my-sm-n10 {
        margin-bottom: -40px !important;
        margin-top: -40px !important
      }

      .v-application .my-sm-n11 {
        margin-bottom: -44px !important;
        margin-top: -44px !important
      }

      .v-application .my-sm-n12 {
        margin-bottom: -48px !important;
        margin-top: -48px !important
      }

      .v-application .my-sm-n13 {
        margin-bottom: -52px !important;
        margin-top: -52px !important
      }

      .v-application .my-sm-n14 {
        margin-bottom: -56px !important;
        margin-top: -56px !important
      }

      .v-application .my-sm-n15 {
        margin-bottom: -60px !important;
        margin-top: -60px !important
      }

      .v-application .my-sm-n16 {
        margin-bottom: -64px !important;
        margin-top: -64px !important
      }

      .v-application .mt-sm-n1 {
        margin-top: -4px !important
      }

      .v-application .mt-sm-n2 {
        margin-top: -8px !important
      }

      .v-application .mt-sm-n3 {
        margin-top: -12px !important
      }

      .v-application .mt-sm-n4 {
        margin-top: -16px !important
      }

      .v-application .mt-sm-n5 {
        margin-top: -20px !important
      }

      .v-application .mt-sm-n6 {
        margin-top: -24px !important
      }

      .v-application .mt-sm-n7 {
        margin-top: -28px !important
      }

      .v-application .mt-sm-n8 {
        margin-top: -32px !important
      }

      .v-application .mt-sm-n9 {
        margin-top: -36px !important
      }

      .v-application .mt-sm-n10 {
        margin-top: -40px !important
      }

      .v-application .mt-sm-n11 {
        margin-top: -44px !important
      }

      .v-application .mt-sm-n12 {
        margin-top: -48px !important
      }

      .v-application .mt-sm-n13 {
        margin-top: -52px !important
      }

      .v-application .mt-sm-n14 {
        margin-top: -56px !important
      }

      .v-application .mt-sm-n15 {
        margin-top: -60px !important
      }

      .v-application .mt-sm-n16 {
        margin-top: -64px !important
      }

      .v-application .mr-sm-n1 {
        margin-right: -4px !important
      }

      .v-application .mr-sm-n2 {
        margin-right: -8px !important
      }

      .v-application .mr-sm-n3 {
        margin-right: -12px !important
      }

      .v-application .mr-sm-n4 {
        margin-right: -16px !important
      }

      .v-application .mr-sm-n5 {
        margin-right: -20px !important
      }

      .v-application .mr-sm-n6 {
        margin-right: -24px !important
      }

      .v-application .mr-sm-n7 {
        margin-right: -28px !important
      }

      .v-application .mr-sm-n8 {
        margin-right: -32px !important
      }

      .v-application .mr-sm-n9 {
        margin-right: -36px !important
      }

      .v-application .mr-sm-n10 {
        margin-right: -40px !important
      }

      .v-application .mr-sm-n11 {
        margin-right: -44px !important
      }

      .v-application .mr-sm-n12 {
        margin-right: -48px !important
      }

      .v-application .mr-sm-n13 {
        margin-right: -52px !important
      }

      .v-application .mr-sm-n14 {
        margin-right: -56px !important
      }

      .v-application .mr-sm-n15 {
        margin-right: -60px !important
      }

      .v-application .mr-sm-n16 {
        margin-right: -64px !important
      }

      .v-application .mb-sm-n1 {
        margin-bottom: -4px !important
      }

      .v-application .mb-sm-n2 {
        margin-bottom: -8px !important
      }

      .v-application .mb-sm-n3 {
        margin-bottom: -12px !important
      }

      .v-application .mb-sm-n4 {
        margin-bottom: -16px !important
      }

      .v-application .mb-sm-n5 {
        margin-bottom: -20px !important
      }

      .v-application .mb-sm-n6 {
        margin-bottom: -24px !important
      }

      .v-application .mb-sm-n7 {
        margin-bottom: -28px !important
      }

      .v-application .mb-sm-n8 {
        margin-bottom: -32px !important
      }

      .v-application .mb-sm-n9 {
        margin-bottom: -36px !important
      }

      .v-application .mb-sm-n10 {
        margin-bottom: -40px !important
      }

      .v-application .mb-sm-n11 {
        margin-bottom: -44px !important
      }

      .v-application .mb-sm-n12 {
        margin-bottom: -48px !important
      }

      .v-application .mb-sm-n13 {
        margin-bottom: -52px !important
      }

      .v-application .mb-sm-n14 {
        margin-bottom: -56px !important
      }

      .v-application .mb-sm-n15 {
        margin-bottom: -60px !important
      }

      .v-application .mb-sm-n16 {
        margin-bottom: -64px !important
      }

      .v-application .ml-sm-n1 {
        margin-left: -4px !important
      }

      .v-application .ml-sm-n2 {
        margin-left: -8px !important
      }

      .v-application .ml-sm-n3 {
        margin-left: -12px !important
      }

      .v-application .ml-sm-n4 {
        margin-left: -16px !important
      }

      .v-application .ml-sm-n5 {
        margin-left: -20px !important
      }

      .v-application .ml-sm-n6 {
        margin-left: -24px !important
      }

      .v-application .ml-sm-n7 {
        margin-left: -28px !important
      }

      .v-application .ml-sm-n8 {
        margin-left: -32px !important
      }

      .v-application .ml-sm-n9 {
        margin-left: -36px !important
      }

      .v-application .ml-sm-n10 {
        margin-left: -40px !important
      }

      .v-application .ml-sm-n11 {
        margin-left: -44px !important
      }

      .v-application .ml-sm-n12 {
        margin-left: -48px !important
      }

      .v-application .ml-sm-n13 {
        margin-left: -52px !important
      }

      .v-application .ml-sm-n14 {
        margin-left: -56px !important
      }

      .v-application .ml-sm-n15 {
        margin-left: -60px !important
      }

      .v-application .ml-sm-n16 {
        margin-left: -64px !important
      }

      .v-application--is-ltr .ms-sm-n1 {
        margin-left: -4px !important
      }

      .v-application--is-rtl .ms-sm-n1 {
        margin-right: -4px !important
      }

      .v-application--is-ltr .ms-sm-n2 {
        margin-left: -8px !important
      }

      .v-application--is-rtl .ms-sm-n2 {
        margin-right: -8px !important
      }

      .v-application--is-ltr .ms-sm-n3 {
        margin-left: -12px !important
      }

      .v-application--is-rtl .ms-sm-n3 {
        margin-right: -12px !important
      }

      .v-application--is-ltr .ms-sm-n4 {
        margin-left: -16px !important
      }

      .v-application--is-rtl .ms-sm-n4 {
        margin-right: -16px !important
      }

      .v-application--is-ltr .ms-sm-n5 {
        margin-left: -20px !important
      }

      .v-application--is-rtl .ms-sm-n5 {
        margin-right: -20px !important
      }

      .v-application--is-ltr .ms-sm-n6 {
        margin-left: -24px !important
      }

      .v-application--is-rtl .ms-sm-n6 {
        margin-right: -24px !important
      }

      .v-application--is-ltr .ms-sm-n7 {
        margin-left: -28px !important
      }

      .v-application--is-rtl .ms-sm-n7 {
        margin-right: -28px !important
      }

      .v-application--is-ltr .ms-sm-n8 {
        margin-left: -32px !important
      }

      .v-application--is-rtl .ms-sm-n8 {
        margin-right: -32px !important
      }

      .v-application--is-ltr .ms-sm-n9 {
        margin-left: -36px !important
      }

      .v-application--is-rtl .ms-sm-n9 {
        margin-right: -36px !important
      }

      .v-application--is-ltr .ms-sm-n10 {
        margin-left: -40px !important
      }

      .v-application--is-rtl .ms-sm-n10 {
        margin-right: -40px !important
      }

      .v-application--is-ltr .ms-sm-n11 {
        margin-left: -44px !important
      }

      .v-application--is-rtl .ms-sm-n11 {
        margin-right: -44px !important
      }

      .v-application--is-ltr .ms-sm-n12 {
        margin-left: -48px !important
      }

      .v-application--is-rtl .ms-sm-n12 {
        margin-right: -48px !important
      }

      .v-application--is-ltr .ms-sm-n13 {
        margin-left: -52px !important
      }

      .v-application--is-rtl .ms-sm-n13 {
        margin-right: -52px !important
      }

      .v-application--is-ltr .ms-sm-n14 {
        margin-left: -56px !important
      }

      .v-application--is-rtl .ms-sm-n14 {
        margin-right: -56px !important
      }

      .v-application--is-ltr .ms-sm-n15 {
        margin-left: -60px !important
      }

      .v-application--is-rtl .ms-sm-n15 {
        margin-right: -60px !important
      }

      .v-application--is-ltr .ms-sm-n16 {
        margin-left: -64px !important
      }

      .v-application--is-rtl .ms-sm-n16 {
        margin-right: -64px !important
      }

      .v-application--is-ltr .me-sm-n1 {
        margin-right: -4px !important
      }

      .v-application--is-rtl .me-sm-n1 {
        margin-left: -4px !important
      }

      .v-application--is-ltr .me-sm-n2 {
        margin-right: -8px !important
      }

      .v-application--is-rtl .me-sm-n2 {
        margin-left: -8px !important
      }

      .v-application--is-ltr .me-sm-n3 {
        margin-right: -12px !important
      }

      .v-application--is-rtl .me-sm-n3 {
        margin-left: -12px !important
      }

      .v-application--is-ltr .me-sm-n4 {
        margin-right: -16px !important
      }

      .v-application--is-rtl .me-sm-n4 {
        margin-left: -16px !important
      }

      .v-application--is-ltr .me-sm-n5 {
        margin-right: -20px !important
      }

      .v-application--is-rtl .me-sm-n5 {
        margin-left: -20px !important
      }

      .v-application--is-ltr .me-sm-n6 {
        margin-right: -24px !important
      }

      .v-application--is-rtl .me-sm-n6 {
        margin-left: -24px !important
      }

      .v-application--is-ltr .me-sm-n7 {
        margin-right: -28px !important
      }

      .v-application--is-rtl .me-sm-n7 {
        margin-left: -28px !important
      }

      .v-application--is-ltr .me-sm-n8 {
        margin-right: -32px !important
      }

      .v-application--is-rtl .me-sm-n8 {
        margin-left: -32px !important
      }

      .v-application--is-ltr .me-sm-n9 {
        margin-right: -36px !important
      }

      .v-application--is-rtl .me-sm-n9 {
        margin-left: -36px !important
      }

      .v-application--is-ltr .me-sm-n10 {
        margin-right: -40px !important
      }

      .v-application--is-rtl .me-sm-n10 {
        margin-left: -40px !important
      }

      .v-application--is-ltr .me-sm-n11 {
        margin-right: -44px !important
      }

      .v-application--is-rtl .me-sm-n11 {
        margin-left: -44px !important
      }

      .v-application--is-ltr .me-sm-n12 {
        margin-right: -48px !important
      }

      .v-application--is-rtl .me-sm-n12 {
        margin-left: -48px !important
      }

      .v-application--is-ltr .me-sm-n13 {
        margin-right: -52px !important
      }

      .v-application--is-rtl .me-sm-n13 {
        margin-left: -52px !important
      }

      .v-application--is-ltr .me-sm-n14 {
        margin-right: -56px !important
      }

      .v-application--is-rtl .me-sm-n14 {
        margin-left: -56px !important
      }

      .v-application--is-ltr .me-sm-n15 {
        margin-right: -60px !important
      }

      .v-application--is-rtl .me-sm-n15 {
        margin-left: -60px !important
      }

      .v-application--is-ltr .me-sm-n16 {
        margin-right: -64px !important
      }

      .v-application--is-rtl .me-sm-n16 {
        margin-left: -64px !important
      }

      .v-application .pa-sm-0 {
        padding: 0 !important
      }

      .v-application .pa-sm-1 {
        padding: 4px !important
      }

      .v-application .pa-sm-2 {
        padding: 8px !important
      }

      .v-application .pa-sm-3 {
        padding: 12px !important
      }

      .v-application .pa-sm-4 {
        padding: 16px !important
      }

      .v-application .pa-sm-5 {
        padding: 20px !important
      }

      .v-application .pa-sm-6 {
        padding: 24px !important
      }

      .v-application .pa-sm-7 {
        padding: 28px !important
      }

      .v-application .pa-sm-8 {
        padding: 32px !important
      }

      .v-application .pa-sm-9 {
        padding: 36px !important
      }

      .v-application .pa-sm-10 {
        padding: 40px !important
      }

      .v-application .pa-sm-11 {
        padding: 44px !important
      }

      .v-application .pa-sm-12 {
        padding: 48px !important
      }

      .v-application .pa-sm-13 {
        padding: 52px !important
      }

      .v-application .pa-sm-14 {
        padding: 56px !important
      }

      .v-application .pa-sm-15 {
        padding: 60px !important
      }

      .v-application .pa-sm-16 {
        padding: 64px !important
      }

      .v-application .px-sm-0 {
        padding-left: 0 !important;
        padding-right: 0 !important
      }

      .v-application .px-sm-1 {
        padding-left: 4px !important;
        padding-right: 4px !important
      }

      .v-application .px-sm-2 {
        padding-left: 8px !important;
        padding-right: 8px !important
      }

      .v-application .px-sm-3 {
        padding-left: 12px !important;
        padding-right: 12px !important
      }

      .v-application .px-sm-4 {
        padding-left: 16px !important;
        padding-right: 16px !important
      }

      .v-application .px-sm-5 {
        padding-left: 20px !important;
        padding-right: 20px !important
      }

      .v-application .px-sm-6 {
        padding-left: 24px !important;
        padding-right: 24px !important
      }

      .v-application .px-sm-7 {
        padding-left: 28px !important;
        padding-right: 28px !important
      }

      .v-application .px-sm-8 {
        padding-left: 32px !important;
        padding-right: 32px !important
      }

      .v-application .px-sm-9 {
        padding-left: 36px !important;
        padding-right: 36px !important
      }

      .v-application .px-sm-10 {
        padding-left: 40px !important;
        padding-right: 40px !important
      }

      .v-application .px-sm-11 {
        padding-left: 44px !important;
        padding-right: 44px !important
      }

      .v-application .px-sm-12 {
        padding-left: 48px !important;
        padding-right: 48px !important
      }

      .v-application .px-sm-13 {
        padding-left: 52px !important;
        padding-right: 52px !important
      }

      .v-application .px-sm-14 {
        padding-left: 56px !important;
        padding-right: 56px !important
      }

      .v-application .px-sm-15 {
        padding-left: 60px !important;
        padding-right: 60px !important
      }

      .v-application .px-sm-16 {
        padding-left: 64px !important;
        padding-right: 64px !important
      }

      .v-application .py-sm-0 {
        padding-bottom: 0 !important;
        padding-top: 0 !important
      }

      .v-application .py-sm-1 {
        padding-bottom: 4px !important;
        padding-top: 4px !important
      }

      .v-application .py-sm-2 {
        padding-bottom: 8px !important;
        padding-top: 8px !important
      }

      .v-application .py-sm-3 {
        padding-bottom: 12px !important;
        padding-top: 12px !important
      }

      .v-application .py-sm-4 {
        padding-bottom: 16px !important;
        padding-top: 16px !important
      }

      .v-application .py-sm-5 {
        padding-bottom: 20px !important;
        padding-top: 20px !important
      }

      .v-application .py-sm-6 {
        padding-bottom: 24px !important;
        padding-top: 24px !important
      }

      .v-application .py-sm-7 {
        padding-bottom: 28px !important;
        padding-top: 28px !important
      }

      .v-application .py-sm-8 {
        padding-bottom: 32px !important;
        padding-top: 32px !important
      }

      .v-application .py-sm-9 {
        padding-bottom: 36px !important;
        padding-top: 36px !important
      }

      .v-application .py-sm-10 {
        padding-bottom: 40px !important;
        padding-top: 40px !important
      }

      .v-application .py-sm-11 {
        padding-bottom: 44px !important;
        padding-top: 44px !important
      }

      .v-application .py-sm-12 {
        padding-bottom: 48px !important;
        padding-top: 48px !important
      }

      .v-application .py-sm-13 {
        padding-bottom: 52px !important;
        padding-top: 52px !important
      }

      .v-application .py-sm-14 {
        padding-bottom: 56px !important;
        padding-top: 56px !important
      }

      .v-application .py-sm-15 {
        padding-bottom: 60px !important;
        padding-top: 60px !important
      }

      .v-application .py-sm-16 {
        padding-bottom: 64px !important;
        padding-top: 64px !important
      }

      .v-application .pt-sm-0 {
        padding-top: 0 !important
      }

      .v-application .pt-sm-1 {
        padding-top: 4px !important
      }

      .v-application .pt-sm-2 {
        padding-top: 8px !important
      }

      .v-application .pt-sm-3 {
        padding-top: 12px !important
      }

      .v-application .pt-sm-4 {
        padding-top: 16px !important
      }

      .v-application .pt-sm-5 {
        padding-top: 20px !important
      }

      .v-application .pt-sm-6 {
        padding-top: 24px !important
      }

      .v-application .pt-sm-7 {
        padding-top: 28px !important
      }

      .v-application .pt-sm-8 {
        padding-top: 32px !important
      }

      .v-application .pt-sm-9 {
        padding-top: 36px !important
      }

      .v-application .pt-sm-10 {
        padding-top: 40px !important
      }

      .v-application .pt-sm-11 {
        padding-top: 44px !important
      }

      .v-application .pt-sm-12 {
        padding-top: 48px !important
      }

      .v-application .pt-sm-13 {
        padding-top: 52px !important
      }

      .v-application .pt-sm-14 {
        padding-top: 56px !important
      }

      .v-application .pt-sm-15 {
        padding-top: 60px !important
      }

      .v-application .pt-sm-16 {
        padding-top: 64px !important
      }

      .v-application .pr-sm-0 {
        padding-right: 0 !important
      }

      .v-application .pr-sm-1 {
        padding-right: 4px !important
      }

      .v-application .pr-sm-2 {
        padding-right: 8px !important
      }

      .v-application .pr-sm-3 {
        padding-right: 12px !important
      }

      .v-application .pr-sm-4 {
        padding-right: 16px !important
      }

      .v-application .pr-sm-5 {
        padding-right: 20px !important
      }

      .v-application .pr-sm-6 {
        padding-right: 24px !important
      }

      .v-application .pr-sm-7 {
        padding-right: 28px !important
      }

      .v-application .pr-sm-8 {
        padding-right: 32px !important
      }

      .v-application .pr-sm-9 {
        padding-right: 36px !important
      }

      .v-application .pr-sm-10 {
        padding-right: 40px !important
      }

      .v-application .pr-sm-11 {
        padding-right: 44px !important
      }

      .v-application .pr-sm-12 {
        padding-right: 48px !important
      }

      .v-application .pr-sm-13 {
        padding-right: 52px !important
      }

      .v-application .pr-sm-14 {
        padding-right: 56px !important
      }

      .v-application .pr-sm-15 {
        padding-right: 60px !important
      }

      .v-application .pr-sm-16 {
        padding-right: 64px !important
      }

      .v-application .pb-sm-0 {
        padding-bottom: 0 !important
      }

      .v-application .pb-sm-1 {
        padding-bottom: 4px !important
      }

      .v-application .pb-sm-2 {
        padding-bottom: 8px !important
      }

      .v-application .pb-sm-3 {
        padding-bottom: 12px !important
      }

      .v-application .pb-sm-4 {
        padding-bottom: 16px !important
      }

      .v-application .pb-sm-5 {
        padding-bottom: 20px !important
      }

      .v-application .pb-sm-6 {
        padding-bottom: 24px !important
      }

      .v-application .pb-sm-7 {
        padding-bottom: 28px !important
      }

      .v-application .pb-sm-8 {
        padding-bottom: 32px !important
      }

      .v-application .pb-sm-9 {
        padding-bottom: 36px !important
      }

      .v-application .pb-sm-10 {
        padding-bottom: 40px !important
      }

      .v-application .pb-sm-11 {
        padding-bottom: 44px !important
      }

      .v-application .pb-sm-12 {
        padding-bottom: 48px !important
      }

      .v-application .pb-sm-13 {
        padding-bottom: 52px !important
      }

      .v-application .pb-sm-14 {
        padding-bottom: 56px !important
      }

      .v-application .pb-sm-15 {
        padding-bottom: 60px !important
      }

      .v-application .pb-sm-16 {
        padding-bottom: 64px !important
      }

      .v-application .pl-sm-0 {
        padding-left: 0 !important
      }

      .v-application .pl-sm-1 {
        padding-left: 4px !important
      }

      .v-application .pl-sm-2 {
        padding-left: 8px !important
      }

      .v-application .pl-sm-3 {
        padding-left: 12px !important
      }

      .v-application .pl-sm-4 {
        padding-left: 16px !important
      }

      .v-application .pl-sm-5 {
        padding-left: 20px !important
      }

      .v-application .pl-sm-6 {
        padding-left: 24px !important
      }

      .v-application .pl-sm-7 {
        padding-left: 28px !important
      }

      .v-application .pl-sm-8 {
        padding-left: 32px !important
      }

      .v-application .pl-sm-9 {
        padding-left: 36px !important
      }

      .v-application .pl-sm-10 {
        padding-left: 40px !important
      }

      .v-application .pl-sm-11 {
        padding-left: 44px !important
      }

      .v-application .pl-sm-12 {
        padding-left: 48px !important
      }

      .v-application .pl-sm-13 {
        padding-left: 52px !important
      }

      .v-application .pl-sm-14 {
        padding-left: 56px !important
      }

      .v-application .pl-sm-15 {
        padding-left: 60px !important
      }

      .v-application .pl-sm-16 {
        padding-left: 64px !important
      }

      .v-application--is-ltr .ps-sm-0 {
        padding-left: 0 !important
      }

      .v-application--is-rtl .ps-sm-0 {
        padding-right: 0 !important
      }

      .v-application--is-ltr .ps-sm-1 {
        padding-left: 4px !important
      }

      .v-application--is-rtl .ps-sm-1 {
        padding-right: 4px !important
      }

      .v-application--is-ltr .ps-sm-2 {
        padding-left: 8px !important
      }

      .v-application--is-rtl .ps-sm-2 {
        padding-right: 8px !important
      }

      .v-application--is-ltr .ps-sm-3 {
        padding-left: 12px !important
      }

      .v-application--is-rtl .ps-sm-3 {
        padding-right: 12px !important
      }

      .v-application--is-ltr .ps-sm-4 {
        padding-left: 16px !important
      }

      .v-application--is-rtl .ps-sm-4 {
        padding-right: 16px !important
      }

      .v-application--is-ltr .ps-sm-5 {
        padding-left: 20px !important
      }

      .v-application--is-rtl .ps-sm-5 {
        padding-right: 20px !important
      }

      .v-application--is-ltr .ps-sm-6 {
        padding-left: 24px !important
      }

      .v-application--is-rtl .ps-sm-6 {
        padding-right: 24px !important
      }

      .v-application--is-ltr .ps-sm-7 {
        padding-left: 28px !important
      }

      .v-application--is-rtl .ps-sm-7 {
        padding-right: 28px !important
      }

      .v-application--is-ltr .ps-sm-8 {
        padding-left: 32px !important
      }

      .v-application--is-rtl .ps-sm-8 {
        padding-right: 32px !important
      }

      .v-application--is-ltr .ps-sm-9 {
        padding-left: 36px !important
      }

      .v-application--is-rtl .ps-sm-9 {
        padding-right: 36px !important
      }

      .v-application--is-ltr .ps-sm-10 {
        padding-left: 40px !important
      }

      .v-application--is-rtl .ps-sm-10 {
        padding-right: 40px !important
      }

      .v-application--is-ltr .ps-sm-11 {
        padding-left: 44px !important
      }

      .v-application--is-rtl .ps-sm-11 {
        padding-right: 44px !important
      }

      .v-application--is-ltr .ps-sm-12 {
        padding-left: 48px !important
      }

      .v-application--is-rtl .ps-sm-12 {
        padding-right: 48px !important
      }

      .v-application--is-ltr .ps-sm-13 {
        padding-left: 52px !important
      }

      .v-application--is-rtl .ps-sm-13 {
        padding-right: 52px !important
      }

      .v-application--is-ltr .ps-sm-14 {
        padding-left: 56px !important
      }

      .v-application--is-rtl .ps-sm-14 {
        padding-right: 56px !important
      }

      .v-application--is-ltr .ps-sm-15 {
        padding-left: 60px !important
      }

      .v-application--is-rtl .ps-sm-15 {
        padding-right: 60px !important
      }

      .v-application--is-ltr .ps-sm-16 {
        padding-left: 64px !important
      }

      .v-application--is-rtl .ps-sm-16 {
        padding-right: 64px !important
      }

      .v-application--is-ltr .pe-sm-0 {
        padding-right: 0 !important
      }

      .v-application--is-rtl .pe-sm-0 {
        padding-left: 0 !important
      }

      .v-application--is-ltr .pe-sm-1 {
        padding-right: 4px !important
      }

      .v-application--is-rtl .pe-sm-1 {
        padding-left: 4px !important
      }

      .v-application--is-ltr .pe-sm-2 {
        padding-right: 8px !important
      }

      .v-application--is-rtl .pe-sm-2 {
        padding-left: 8px !important
      }

      .v-application--is-ltr .pe-sm-3 {
        padding-right: 12px !important
      }

      .v-application--is-rtl .pe-sm-3 {
        padding-left: 12px !important
      }

      .v-application--is-ltr .pe-sm-4 {
        padding-right: 16px !important
      }

      .v-application--is-rtl .pe-sm-4 {
        padding-left: 16px !important
      }

      .v-application--is-ltr .pe-sm-5 {
        padding-right: 20px !important
      }

      .v-application--is-rtl .pe-sm-5 {
        padding-left: 20px !important
      }

      .v-application--is-ltr .pe-sm-6 {
        padding-right: 24px !important
      }

      .v-application--is-rtl .pe-sm-6 {
        padding-left: 24px !important
      }

      .v-application--is-ltr .pe-sm-7 {
        padding-right: 28px !important
      }

      .v-application--is-rtl .pe-sm-7 {
        padding-left: 28px !important
      }

      .v-application--is-ltr .pe-sm-8 {
        padding-right: 32px !important
      }

      .v-application--is-rtl .pe-sm-8 {
        padding-left: 32px !important
      }

      .v-application--is-ltr .pe-sm-9 {
        padding-right: 36px !important
      }

      .v-application--is-rtl .pe-sm-9 {
        padding-left: 36px !important
      }

      .v-application--is-ltr .pe-sm-10 {
        padding-right: 40px !important
      }

      .v-application--is-rtl .pe-sm-10 {
        padding-left: 40px !important
      }

      .v-application--is-ltr .pe-sm-11 {
        padding-right: 44px !important
      }

      .v-application--is-rtl .pe-sm-11 {
        padding-left: 44px !important
      }

      .v-application--is-ltr .pe-sm-12 {
        padding-right: 48px !important
      }

      .v-application--is-rtl .pe-sm-12 {
        padding-left: 48px !important
      }

      .v-application--is-ltr .pe-sm-13 {
        padding-right: 52px !important
      }

      .v-application--is-rtl .pe-sm-13 {
        padding-left: 52px !important
      }

      .v-application--is-ltr .pe-sm-14 {
        padding-right: 56px !important
      }

      .v-application--is-rtl .pe-sm-14 {
        padding-left: 56px !important
      }

      .v-application--is-ltr .pe-sm-15 {
        padding-right: 60px !important
      }

      .v-application--is-rtl .pe-sm-15 {
        padding-left: 60px !important
      }

      .v-application--is-ltr .pe-sm-16 {
        padding-right: 64px !important
      }

      .v-application--is-rtl .pe-sm-16 {
        padding-left: 64px !important
      }

      .v-application .text-sm-left {
        text-align: left !important
      }

      .v-application .text-sm-right {
        text-align: right !important
      }

      .v-application .text-sm-center {
        text-align: center !important
      }

      .v-application .text-sm-justify {
        text-align: justify !important
      }

      .v-application .text-sm-start {
        text-align: left !important
      }

      .v-application .text-sm-end {
        text-align: right !important
      }

      .v-application .text-sm-h1 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 6rem !important;
        font-weight: 300;
        letter-spacing: -.015625em !important;
        line-height: 6rem
      }

      .v-application .text-sm-h2 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3.75rem !important;
        font-weight: 300;
        letter-spacing: -.0083333333em !important;
        line-height: 3.75rem
      }

      .v-application .text-sm-h3 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 3.125rem
      }

      .v-application .text-sm-h4 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 2.125rem !important;
        font-weight: 400;
        letter-spacing: .0073529412em !important;
        line-height: 2.5rem
      }

      .v-application .text-sm-h5 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.5rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 2rem
      }

      .v-application .text-sm-h6 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.25rem !important;
        font-weight: 500;
        letter-spacing: .0125em !important;
        line-height: 2rem
      }

      .v-application .text-sm-subtitle-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .009375em !important;
        line-height: 1.75rem
      }

      .v-application .text-sm-subtitle-2 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important;
        font-weight: 500;
        letter-spacing: .0071428571em !important;
        line-height: 1.375rem
      }

      .v-application .text-sm-body-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .03125em !important;
        line-height: 1.5rem
      }

      .v-application .text-sm-body-2 {
        font-weight: 400;
        letter-spacing: .0178571429em !important;
        line-height: 1.25rem
      }

      .v-application .text-sm-body-2,
      .v-application .text-sm-button {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important
      }

      .v-application .text-sm-button {
        font-weight: 500;
        letter-spacing: .0892857143em !important;
        line-height: 2.25rem;
        text-transform: uppercase !important
      }

      .v-application .text-sm-caption {
        font-weight: 400;
        letter-spacing: .0333333333em !important;
        line-height: 1.25rem
      }

      .v-application .text-sm-caption,
      .v-application .text-sm-overline {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .75rem !important
      }

      .v-application .text-sm-overline {
        font-weight: 500;
        letter-spacing: .1666666667em !important;
        line-height: 2rem;
        text-transform: uppercase !important
      }
    }

    @media(min-width:960px) {
      .v-application .d-md-none {
        display: none !important
      }

      .v-application .d-md-inline {
        display: inline !important
      }

      .v-application .d-md-inline-block {
        display: inline-block !important
      }

      .v-application .d-md-block {
        display: block !important
      }

      .v-application .d-md-table {
        display: table !important
      }

      .v-application .d-md-table-row {
        display: table-row !important
      }

      .v-application .d-md-table-cell {
        display: table-cell !important
      }

      .v-application .d-md-flex {
        display: flex !important
      }

      .v-application .d-md-inline-flex {
        display: inline-flex !important
      }

      .v-application .float-md-none {
        float: none !important
      }

      .v-application .float-md-left {
        float: left !important
      }

      .v-application .float-md-right {
        float: right !important
      }

      .v-application--is-rtl .float-md-end {
        float: left !important
      }

      .v-application--is-ltr .float-md-end,
      .v-application--is-rtl .float-md-start {
        float: right !important
      }

      .v-application--is-ltr .float-md-start {
        float: left !important
      }

      .v-application .flex-md-fill {
        flex: 1 1 auto !important
      }

      .v-application .flex-md-row {
        flex-direction: row !important
      }

      .v-application .flex-md-column {
        flex-direction: column !important
      }

      .v-application .flex-md-row-reverse {
        flex-direction: row-reverse !important
      }

      .v-application .flex-md-column-reverse {
        flex-direction: column-reverse !important
      }

      .v-application .flex-md-grow-0 {
        flex-grow: 0 !important
      }

      .v-application .flex-md-grow-1 {
        flex-grow: 1 !important
      }

      .v-application .flex-md-shrink-0 {
        flex-shrink: 0 !important
      }

      .v-application .flex-md-shrink-1 {
        flex-shrink: 1 !important
      }

      .v-application .flex-md-wrap {
        flex-wrap: wrap !important
      }

      .v-application .flex-md-nowrap {
        flex-wrap: nowrap !important
      }

      .v-application .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important
      }

      .v-application .justify-md-start {
        justify-content: flex-start !important
      }

      .v-application .justify-md-end {
        justify-content: flex-end !important
      }

      .v-application .justify-md-center {
        justify-content: center !important
      }

      .v-application .justify-md-space-between {
        justify-content: space-between !important
      }

      .v-application .justify-md-space-around {
        justify-content: space-around !important
      }

      .v-application .align-md-start {
        align-items: flex-start !important
      }

      .v-application .align-md-end {
        align-items: flex-end !important
      }

      .v-application .align-md-center {
        align-items: center !important
      }

      .v-application .align-md-baseline {
        align-items: baseline !important
      }

      .v-application .align-md-stretch {
        align-items: stretch !important
      }

      .v-application .align-content-md-start {
        align-content: flex-start !important
      }

      .v-application .align-content-md-end {
        align-content: flex-end !important
      }

      .v-application .align-content-md-center {
        align-content: center !important
      }

      .v-application .align-content-md-space-between {
        align-content: space-between !important
      }

      .v-application .align-content-md-space-around {
        align-content: space-around !important
      }

      .v-application .align-content-md-stretch {
        align-content: stretch !important
      }

      .v-application .align-self-md-auto {
        align-self: auto !important
      }

      .v-application .align-self-md-start {
        align-self: flex-start !important
      }

      .v-application .align-self-md-end {
        align-self: flex-end !important
      }

      .v-application .align-self-md-center {
        align-self: center !important
      }

      .v-application .align-self-md-baseline {
        align-self: baseline !important
      }

      .v-application .align-self-md-stretch {
        align-self: stretch !important
      }

      .v-application .order-md-first {
        order: -1 !important
      }

      .v-application .order-md-0 {
        order: 0 !important
      }

      .v-application .order-md-1 {
        order: 1 !important
      }

      .v-application .order-md-2 {
        order: 2 !important
      }

      .v-application .order-md-3 {
        order: 3 !important
      }

      .v-application .order-md-4 {
        order: 4 !important
      }

      .v-application .order-md-5 {
        order: 5 !important
      }

      .v-application .order-md-6 {
        order: 6 !important
      }

      .v-application .order-md-7 {
        order: 7 !important
      }

      .v-application .order-md-8 {
        order: 8 !important
      }

      .v-application .order-md-9 {
        order: 9 !important
      }

      .v-application .order-md-10 {
        order: 10 !important
      }

      .v-application .order-md-11 {
        order: 11 !important
      }

      .v-application .order-md-12 {
        order: 12 !important
      }

      .v-application .order-md-last {
        order: 13 !important
      }

      .v-application .ma-md-0 {
        margin: 0 !important
      }

      .v-application .ma-md-1 {
        margin: 4px !important
      }

      .v-application .ma-md-2 {
        margin: 8px !important
      }

      .v-application .ma-md-3 {
        margin: 12px !important
      }

      .v-application .ma-md-4 {
        margin: 16px !important
      }

      .v-application .ma-md-5 {
        margin: 20px !important
      }

      .v-application .ma-md-6 {
        margin: 24px !important
      }

      .v-application .ma-md-7 {
        margin: 28px !important
      }

      .v-application .ma-md-8 {
        margin: 32px !important
      }

      .v-application .ma-md-9 {
        margin: 36px !important
      }

      .v-application .ma-md-10 {
        margin: 40px !important
      }

      .v-application .ma-md-11 {
        margin: 44px !important
      }

      .v-application .ma-md-12 {
        margin: 48px !important
      }

      .v-application .ma-md-13 {
        margin: 52px !important
      }

      .v-application .ma-md-14 {
        margin: 56px !important
      }

      .v-application .ma-md-15 {
        margin: 60px !important
      }

      .v-application .ma-md-16 {
        margin: 64px !important
      }

      .v-application .ma-md-auto {
        margin: auto !important
      }

      .v-application .mx-md-0 {
        margin-left: 0 !important;
        margin-right: 0 !important
      }

      .v-application .mx-md-1 {
        margin-left: 4px !important;
        margin-right: 4px !important
      }

      .v-application .mx-md-2 {
        margin-left: 8px !important;
        margin-right: 8px !important
      }

      .v-application .mx-md-3 {
        margin-left: 12px !important;
        margin-right: 12px !important
      }

      .v-application .mx-md-4 {
        margin-left: 16px !important;
        margin-right: 16px !important
      }

      .v-application .mx-md-5 {
        margin-left: 20px !important;
        margin-right: 20px !important
      }

      .v-application .mx-md-6 {
        margin-left: 24px !important;
        margin-right: 24px !important
      }

      .v-application .mx-md-7 {
        margin-left: 28px !important;
        margin-right: 28px !important
      }

      .v-application .mx-md-8 {
        margin-left: 32px !important;
        margin-right: 32px !important
      }

      .v-application .mx-md-9 {
        margin-left: 36px !important;
        margin-right: 36px !important
      }

      .v-application .mx-md-10 {
        margin-left: 40px !important;
        margin-right: 40px !important
      }

      .v-application .mx-md-11 {
        margin-left: 44px !important;
        margin-right: 44px !important
      }

      .v-application .mx-md-12 {
        margin-left: 48px !important;
        margin-right: 48px !important
      }

      .v-application .mx-md-13 {
        margin-left: 52px !important;
        margin-right: 52px !important
      }

      .v-application .mx-md-14 {
        margin-left: 56px !important;
        margin-right: 56px !important
      }

      .v-application .mx-md-15 {
        margin-left: 60px !important;
        margin-right: 60px !important
      }

      .v-application .mx-md-16 {
        margin-left: 64px !important;
        margin-right: 64px !important
      }

      .v-application .mx-md-auto {
        margin-left: auto !important;
        margin-right: auto !important
      }

      .v-application .my-md-0 {
        margin-bottom: 0 !important;
        margin-top: 0 !important
      }

      .v-application .my-md-1 {
        margin-bottom: 4px !important;
        margin-top: 4px !important
      }

      .v-application .my-md-2 {
        margin-bottom: 8px !important;
        margin-top: 8px !important
      }

      .v-application .my-md-3 {
        margin-bottom: 12px !important;
        margin-top: 12px !important
      }

      .v-application .my-md-4 {
        margin-bottom: 16px !important;
        margin-top: 16px !important
      }

      .v-application .my-md-5 {
        margin-bottom: 20px !important;
        margin-top: 20px !important
      }

      .v-application .my-md-6 {
        margin-bottom: 24px !important;
        margin-top: 24px !important
      }

      .v-application .my-md-7 {
        margin-bottom: 28px !important;
        margin-top: 28px !important
      }

      .v-application .my-md-8 {
        margin-bottom: 32px !important;
        margin-top: 32px !important
      }

      .v-application .my-md-9 {
        margin-bottom: 36px !important;
        margin-top: 36px !important
      }

      .v-application .my-md-10 {
        margin-bottom: 40px !important;
        margin-top: 40px !important
      }

      .v-application .my-md-11 {
        margin-bottom: 44px !important;
        margin-top: 44px !important
      }

      .v-application .my-md-12 {
        margin-bottom: 48px !important;
        margin-top: 48px !important
      }

      .v-application .my-md-13 {
        margin-bottom: 52px !important;
        margin-top: 52px !important
      }

      .v-application .my-md-14 {
        margin-bottom: 56px !important;
        margin-top: 56px !important
      }

      .v-application .my-md-15 {
        margin-bottom: 60px !important;
        margin-top: 60px !important
      }

      .v-application .my-md-16 {
        margin-bottom: 64px !important;
        margin-top: 64px !important
      }

      .v-application .my-md-auto {
        margin-bottom: auto !important;
        margin-top: auto !important
      }

      .v-application .mt-md-0 {
        margin-top: 0 !important
      }

      .v-application .mt-md-1 {
        margin-top: 4px !important
      }

      .v-application .mt-md-2 {
        margin-top: 8px !important
      }

      .v-application .mt-md-3 {
        margin-top: 12px !important
      }

      .v-application .mt-md-4 {
        margin-top: 16px !important
      }

      .v-application .mt-md-5 {
        margin-top: 20px !important
      }

      .v-application .mt-md-6 {
        margin-top: 24px !important
      }

      .v-application .mt-md-7 {
        margin-top: 28px !important
      }

      .v-application .mt-md-8 {
        margin-top: 32px !important
      }

      .v-application .mt-md-9 {
        margin-top: 36px !important
      }

      .v-application .mt-md-10 {
        margin-top: 40px !important
      }

      .v-application .mt-md-11 {
        margin-top: 44px !important
      }

      .v-application .mt-md-12 {
        margin-top: 48px !important
      }

      .v-application .mt-md-13 {
        margin-top: 52px !important
      }

      .v-application .mt-md-14 {
        margin-top: 56px !important
      }

      .v-application .mt-md-15 {
        margin-top: 60px !important
      }

      .v-application .mt-md-16 {
        margin-top: 64px !important
      }

      .v-application .mt-md-auto {
        margin-top: auto !important
      }

      .v-application .mr-md-0 {
        margin-right: 0 !important
      }

      .v-application .mr-md-1 {
        margin-right: 4px !important
      }

      .v-application .mr-md-2 {
        margin-right: 8px !important
      }

      .v-application .mr-md-3 {
        margin-right: 12px !important
      }

      .v-application .mr-md-4 {
        margin-right: 16px !important
      }

      .v-application .mr-md-5 {
        margin-right: 20px !important
      }

      .v-application .mr-md-6 {
        margin-right: 24px !important
      }

      .v-application .mr-md-7 {
        margin-right: 28px !important
      }

      .v-application .mr-md-8 {
        margin-right: 32px !important
      }

      .v-application .mr-md-9 {
        margin-right: 36px !important
      }

      .v-application .mr-md-10 {
        margin-right: 40px !important
      }

      .v-application .mr-md-11 {
        margin-right: 44px !important
      }

      .v-application .mr-md-12 {
        margin-right: 48px !important
      }

      .v-application .mr-md-13 {
        margin-right: 52px !important
      }

      .v-application .mr-md-14 {
        margin-right: 56px !important
      }

      .v-application .mr-md-15 {
        margin-right: 60px !important
      }

      .v-application .mr-md-16 {
        margin-right: 64px !important
      }

      .v-application .mr-md-auto {
        margin-right: auto !important
      }

      .v-application .mb-md-0 {
        margin-bottom: 0 !important
      }

      .v-application .mb-md-1 {
        margin-bottom: 4px !important
      }

      .v-application .mb-md-2 {
        margin-bottom: 8px !important
      }

      .v-application .mb-md-3 {
        margin-bottom: 12px !important
      }

      .v-application .mb-md-4 {
        margin-bottom: 16px !important
      }

      .v-application .mb-md-5 {
        margin-bottom: 20px !important
      }

      .v-application .mb-md-6 {
        margin-bottom: 24px !important
      }

      .v-application .mb-md-7 {
        margin-bottom: 28px !important
      }

      .v-application .mb-md-8 {
        margin-bottom: 32px !important
      }

      .v-application .mb-md-9 {
        margin-bottom: 36px !important
      }

      .v-application .mb-md-10 {
        margin-bottom: 40px !important
      }

      .v-application .mb-md-11 {
        margin-bottom: 44px !important
      }

      .v-application .mb-md-12 {
        margin-bottom: 48px !important
      }

      .v-application .mb-md-13 {
        margin-bottom: 52px !important
      }

      .v-application .mb-md-14 {
        margin-bottom: 56px !important
      }

      .v-application .mb-md-15 {
        margin-bottom: 60px !important
      }

      .v-application .mb-md-16 {
        margin-bottom: 64px !important
      }

      .v-application .mb-md-auto {
        margin-bottom: auto !important
      }

      .v-application .ml-md-0 {
        margin-left: 0 !important
      }

      .v-application .ml-md-1 {
        margin-left: 4px !important
      }

      .v-application .ml-md-2 {
        margin-left: 8px !important
      }

      .v-application .ml-md-3 {
        margin-left: 12px !important
      }

      .v-application .ml-md-4 {
        margin-left: 16px !important
      }

      .v-application .ml-md-5 {
        margin-left: 20px !important
      }

      .v-application .ml-md-6 {
        margin-left: 24px !important
      }

      .v-application .ml-md-7 {
        margin-left: 28px !important
      }

      .v-application .ml-md-8 {
        margin-left: 32px !important
      }

      .v-application .ml-md-9 {
        margin-left: 36px !important
      }

      .v-application .ml-md-10 {
        margin-left: 40px !important
      }

      .v-application .ml-md-11 {
        margin-left: 44px !important
      }

      .v-application .ml-md-12 {
        margin-left: 48px !important
      }

      .v-application .ml-md-13 {
        margin-left: 52px !important
      }

      .v-application .ml-md-14 {
        margin-left: 56px !important
      }

      .v-application .ml-md-15 {
        margin-left: 60px !important
      }

      .v-application .ml-md-16 {
        margin-left: 64px !important
      }

      .v-application .ml-md-auto {
        margin-left: auto !important
      }

      .v-application--is-ltr .ms-md-0 {
        margin-left: 0 !important
      }

      .v-application--is-rtl .ms-md-0 {
        margin-right: 0 !important
      }

      .v-application--is-ltr .ms-md-1 {
        margin-left: 4px !important
      }

      .v-application--is-rtl .ms-md-1 {
        margin-right: 4px !important
      }

      .v-application--is-ltr .ms-md-2 {
        margin-left: 8px !important
      }

      .v-application--is-rtl .ms-md-2 {
        margin-right: 8px !important
      }

      .v-application--is-ltr .ms-md-3 {
        margin-left: 12px !important
      }

      .v-application--is-rtl .ms-md-3 {
        margin-right: 12px !important
      }

      .v-application--is-ltr .ms-md-4 {
        margin-left: 16px !important
      }

      .v-application--is-rtl .ms-md-4 {
        margin-right: 16px !important
      }

      .v-application--is-ltr .ms-md-5 {
        margin-left: 20px !important
      }

      .v-application--is-rtl .ms-md-5 {
        margin-right: 20px !important
      }

      .v-application--is-ltr .ms-md-6 {
        margin-left: 24px !important
      }

      .v-application--is-rtl .ms-md-6 {
        margin-right: 24px !important
      }

      .v-application--is-ltr .ms-md-7 {
        margin-left: 28px !important
      }

      .v-application--is-rtl .ms-md-7 {
        margin-right: 28px !important
      }

      .v-application--is-ltr .ms-md-8 {
        margin-left: 32px !important
      }

      .v-application--is-rtl .ms-md-8 {
        margin-right: 32px !important
      }

      .v-application--is-ltr .ms-md-9 {
        margin-left: 36px !important
      }

      .v-application--is-rtl .ms-md-9 {
        margin-right: 36px !important
      }

      .v-application--is-ltr .ms-md-10 {
        margin-left: 40px !important
      }

      .v-application--is-rtl .ms-md-10 {
        margin-right: 40px !important
      }

      .v-application--is-ltr .ms-md-11 {
        margin-left: 44px !important
      }

      .v-application--is-rtl .ms-md-11 {
        margin-right: 44px !important
      }

      .v-application--is-ltr .ms-md-12 {
        margin-left: 48px !important
      }

      .v-application--is-rtl .ms-md-12 {
        margin-right: 48px !important
      }

      .v-application--is-ltr .ms-md-13 {
        margin-left: 52px !important
      }

      .v-application--is-rtl .ms-md-13 {
        margin-right: 52px !important
      }

      .v-application--is-ltr .ms-md-14 {
        margin-left: 56px !important
      }

      .v-application--is-rtl .ms-md-14 {
        margin-right: 56px !important
      }

      .v-application--is-ltr .ms-md-15 {
        margin-left: 60px !important
      }

      .v-application--is-rtl .ms-md-15 {
        margin-right: 60px !important
      }

      .v-application--is-ltr .ms-md-16 {
        margin-left: 64px !important
      }

      .v-application--is-rtl .ms-md-16 {
        margin-right: 64px !important
      }

      .v-application--is-ltr .ms-md-auto {
        margin-left: auto !important
      }

      .v-application--is-rtl .ms-md-auto {
        margin-right: auto !important
      }

      .v-application--is-ltr .me-md-0 {
        margin-right: 0 !important
      }

      .v-application--is-rtl .me-md-0 {
        margin-left: 0 !important
      }

      .v-application--is-ltr .me-md-1 {
        margin-right: 4px !important
      }

      .v-application--is-rtl .me-md-1 {
        margin-left: 4px !important
      }

      .v-application--is-ltr .me-md-2 {
        margin-right: 8px !important
      }

      .v-application--is-rtl .me-md-2 {
        margin-left: 8px !important
      }

      .v-application--is-ltr .me-md-3 {
        margin-right: 12px !important
      }

      .v-application--is-rtl .me-md-3 {
        margin-left: 12px !important
      }

      .v-application--is-ltr .me-md-4 {
        margin-right: 16px !important
      }

      .v-application--is-rtl .me-md-4 {
        margin-left: 16px !important
      }

      .v-application--is-ltr .me-md-5 {
        margin-right: 20px !important
      }

      .v-application--is-rtl .me-md-5 {
        margin-left: 20px !important
      }

      .v-application--is-ltr .me-md-6 {
        margin-right: 24px !important
      }

      .v-application--is-rtl .me-md-6 {
        margin-left: 24px !important
      }

      .v-application--is-ltr .me-md-7 {
        margin-right: 28px !important
      }

      .v-application--is-rtl .me-md-7 {
        margin-left: 28px !important
      }

      .v-application--is-ltr .me-md-8 {
        margin-right: 32px !important
      }

      .v-application--is-rtl .me-md-8 {
        margin-left: 32px !important
      }

      .v-application--is-ltr .me-md-9 {
        margin-right: 36px !important
      }

      .v-application--is-rtl .me-md-9 {
        margin-left: 36px !important
      }

      .v-application--is-ltr .me-md-10 {
        margin-right: 40px !important
      }

      .v-application--is-rtl .me-md-10 {
        margin-left: 40px !important
      }

      .v-application--is-ltr .me-md-11 {
        margin-right: 44px !important
      }

      .v-application--is-rtl .me-md-11 {
        margin-left: 44px !important
      }

      .v-application--is-ltr .me-md-12 {
        margin-right: 48px !important
      }

      .v-application--is-rtl .me-md-12 {
        margin-left: 48px !important
      }

      .v-application--is-ltr .me-md-13 {
        margin-right: 52px !important
      }

      .v-application--is-rtl .me-md-13 {
        margin-left: 52px !important
      }

      .v-application--is-ltr .me-md-14 {
        margin-right: 56px !important
      }

      .v-application--is-rtl .me-md-14 {
        margin-left: 56px !important
      }

      .v-application--is-ltr .me-md-15 {
        margin-right: 60px !important
      }

      .v-application--is-rtl .me-md-15 {
        margin-left: 60px !important
      }

      .v-application--is-ltr .me-md-16 {
        margin-right: 64px !important
      }

      .v-application--is-rtl .me-md-16 {
        margin-left: 64px !important
      }

      .v-application--is-ltr .me-md-auto {
        margin-right: auto !important
      }

      .v-application--is-rtl .me-md-auto {
        margin-left: auto !important
      }

      .v-application .ma-md-n1 {
        margin: -4px !important
      }

      .v-application .ma-md-n2 {
        margin: -8px !important
      }

      .v-application .ma-md-n3 {
        margin: -12px !important
      }

      .v-application .ma-md-n4 {
        margin: -16px !important
      }

      .v-application .ma-md-n5 {
        margin: -20px !important
      }

      .v-application .ma-md-n6 {
        margin: -24px !important
      }

      .v-application .ma-md-n7 {
        margin: -28px !important
      }

      .v-application .ma-md-n8 {
        margin: -32px !important
      }

      .v-application .ma-md-n9 {
        margin: -36px !important
      }

      .v-application .ma-md-n10 {
        margin: -40px !important
      }

      .v-application .ma-md-n11 {
        margin: -44px !important
      }

      .v-application .ma-md-n12 {
        margin: -48px !important
      }

      .v-application .ma-md-n13 {
        margin: -52px !important
      }

      .v-application .ma-md-n14 {
        margin: -56px !important
      }

      .v-application .ma-md-n15 {
        margin: -60px !important
      }

      .v-application .ma-md-n16 {
        margin: -64px !important
      }

      .v-application .mx-md-n1 {
        margin-left: -4px !important;
        margin-right: -4px !important
      }

      .v-application .mx-md-n2 {
        margin-left: -8px !important;
        margin-right: -8px !important
      }

      .v-application .mx-md-n3 {
        margin-left: -12px !important;
        margin-right: -12px !important
      }

      .v-application .mx-md-n4 {
        margin-left: -16px !important;
        margin-right: -16px !important
      }

      .v-application .mx-md-n5 {
        margin-left: -20px !important;
        margin-right: -20px !important
      }

      .v-application .mx-md-n6 {
        margin-left: -24px !important;
        margin-right: -24px !important
      }

      .v-application .mx-md-n7 {
        margin-left: -28px !important;
        margin-right: -28px !important
      }

      .v-application .mx-md-n8 {
        margin-left: -32px !important;
        margin-right: -32px !important
      }

      .v-application .mx-md-n9 {
        margin-left: -36px !important;
        margin-right: -36px !important
      }

      .v-application .mx-md-n10 {
        margin-left: -40px !important;
        margin-right: -40px !important
      }

      .v-application .mx-md-n11 {
        margin-left: -44px !important;
        margin-right: -44px !important
      }

      .v-application .mx-md-n12 {
        margin-left: -48px !important;
        margin-right: -48px !important
      }

      .v-application .mx-md-n13 {
        margin-left: -52px !important;
        margin-right: -52px !important
      }

      .v-application .mx-md-n14 {
        margin-left: -56px !important;
        margin-right: -56px !important
      }

      .v-application .mx-md-n15 {
        margin-left: -60px !important;
        margin-right: -60px !important
      }

      .v-application .mx-md-n16 {
        margin-left: -64px !important;
        margin-right: -64px !important
      }

      .v-application .my-md-n1 {
        margin-bottom: -4px !important;
        margin-top: -4px !important
      }

      .v-application .my-md-n2 {
        margin-bottom: -8px !important;
        margin-top: -8px !important
      }

      .v-application .my-md-n3 {
        margin-bottom: -12px !important;
        margin-top: -12px !important
      }

      .v-application .my-md-n4 {
        margin-bottom: -16px !important;
        margin-top: -16px !important
      }

      .v-application .my-md-n5 {
        margin-bottom: -20px !important;
        margin-top: -20px !important
      }

      .v-application .my-md-n6 {
        margin-bottom: -24px !important;
        margin-top: -24px !important
      }

      .v-application .my-md-n7 {
        margin-bottom: -28px !important;
        margin-top: -28px !important
      }

      .v-application .my-md-n8 {
        margin-bottom: -32px !important;
        margin-top: -32px !important
      }

      .v-application .my-md-n9 {
        margin-bottom: -36px !important;
        margin-top: -36px !important
      }

      .v-application .my-md-n10 {
        margin-bottom: -40px !important;
        margin-top: -40px !important
      }

      .v-application .my-md-n11 {
        margin-bottom: -44px !important;
        margin-top: -44px !important
      }

      .v-application .my-md-n12 {
        margin-bottom: -48px !important;
        margin-top: -48px !important
      }

      .v-application .my-md-n13 {
        margin-bottom: -52px !important;
        margin-top: -52px !important
      }

      .v-application .my-md-n14 {
        margin-bottom: -56px !important;
        margin-top: -56px !important
      }

      .v-application .my-md-n15 {
        margin-bottom: -60px !important;
        margin-top: -60px !important
      }

      .v-application .my-md-n16 {
        margin-bottom: -64px !important;
        margin-top: -64px !important
      }

      .v-application .mt-md-n1 {
        margin-top: -4px !important
      }

      .v-application .mt-md-n2 {
        margin-top: -8px !important
      }

      .v-application .mt-md-n3 {
        margin-top: -12px !important
      }

      .v-application .mt-md-n4 {
        margin-top: -16px !important
      }

      .v-application .mt-md-n5 {
        margin-top: -20px !important
      }

      .v-application .mt-md-n6 {
        margin-top: -24px !important
      }

      .v-application .mt-md-n7 {
        margin-top: -28px !important
      }

      .v-application .mt-md-n8 {
        margin-top: -32px !important
      }

      .v-application .mt-md-n9 {
        margin-top: -36px !important
      }

      .v-application .mt-md-n10 {
        margin-top: -40px !important
      }

      .v-application .mt-md-n11 {
        margin-top: -44px !important
      }

      .v-application .mt-md-n12 {
        margin-top: -48px !important
      }

      .v-application .mt-md-n13 {
        margin-top: -52px !important
      }

      .v-application .mt-md-n14 {
        margin-top: -56px !important
      }

      .v-application .mt-md-n15 {
        margin-top: -60px !important
      }

      .v-application .mt-md-n16 {
        margin-top: -64px !important
      }

      .v-application .mr-md-n1 {
        margin-right: -4px !important
      }

      .v-application .mr-md-n2 {
        margin-right: -8px !important
      }

      .v-application .mr-md-n3 {
        margin-right: -12px !important
      }

      .v-application .mr-md-n4 {
        margin-right: -16px !important
      }

      .v-application .mr-md-n5 {
        margin-right: -20px !important
      }

      .v-application .mr-md-n6 {
        margin-right: -24px !important
      }

      .v-application .mr-md-n7 {
        margin-right: -28px !important
      }

      .v-application .mr-md-n8 {
        margin-right: -32px !important
      }

      .v-application .mr-md-n9 {
        margin-right: -36px !important
      }

      .v-application .mr-md-n10 {
        margin-right: -40px !important
      }

      .v-application .mr-md-n11 {
        margin-right: -44px !important
      }

      .v-application .mr-md-n12 {
        margin-right: -48px !important
      }

      .v-application .mr-md-n13 {
        margin-right: -52px !important
      }

      .v-application .mr-md-n14 {
        margin-right: -56px !important
      }

      .v-application .mr-md-n15 {
        margin-right: -60px !important
      }

      .v-application .mr-md-n16 {
        margin-right: -64px !important
      }

      .v-application .mb-md-n1 {
        margin-bottom: -4px !important
      }

      .v-application .mb-md-n2 {
        margin-bottom: -8px !important
      }

      .v-application .mb-md-n3 {
        margin-bottom: -12px !important
      }

      .v-application .mb-md-n4 {
        margin-bottom: -16px !important
      }

      .v-application .mb-md-n5 {
        margin-bottom: -20px !important
      }

      .v-application .mb-md-n6 {
        margin-bottom: -24px !important
      }

      .v-application .mb-md-n7 {
        margin-bottom: -28px !important
      }

      .v-application .mb-md-n8 {
        margin-bottom: -32px !important
      }

      .v-application .mb-md-n9 {
        margin-bottom: -36px !important
      }

      .v-application .mb-md-n10 {
        margin-bottom: -40px !important
      }

      .v-application .mb-md-n11 {
        margin-bottom: -44px !important
      }

      .v-application .mb-md-n12 {
        margin-bottom: -48px !important
      }

      .v-application .mb-md-n13 {
        margin-bottom: -52px !important
      }

      .v-application .mb-md-n14 {
        margin-bottom: -56px !important
      }

      .v-application .mb-md-n15 {
        margin-bottom: -60px !important
      }

      .v-application .mb-md-n16 {
        margin-bottom: -64px !important
      }

      .v-application .ml-md-n1 {
        margin-left: -4px !important
      }

      .v-application .ml-md-n2 {
        margin-left: -8px !important
      }

      .v-application .ml-md-n3 {
        margin-left: -12px !important
      }

      .v-application .ml-md-n4 {
        margin-left: -16px !important
      }

      .v-application .ml-md-n5 {
        margin-left: -20px !important
      }

      .v-application .ml-md-n6 {
        margin-left: -24px !important
      }

      .v-application .ml-md-n7 {
        margin-left: -28px !important
      }

      .v-application .ml-md-n8 {
        margin-left: -32px !important
      }

      .v-application .ml-md-n9 {
        margin-left: -36px !important
      }

      .v-application .ml-md-n10 {
        margin-left: -40px !important
      }

      .v-application .ml-md-n11 {
        margin-left: -44px !important
      }

      .v-application .ml-md-n12 {
        margin-left: -48px !important
      }

      .v-application .ml-md-n13 {
        margin-left: -52px !important
      }

      .v-application .ml-md-n14 {
        margin-left: -56px !important
      }

      .v-application .ml-md-n15 {
        margin-left: -60px !important
      }

      .v-application .ml-md-n16 {
        margin-left: -64px !important
      }

      .v-application--is-ltr .ms-md-n1 {
        margin-left: -4px !important
      }

      .v-application--is-rtl .ms-md-n1 {
        margin-right: -4px !important
      }

      .v-application--is-ltr .ms-md-n2 {
        margin-left: -8px !important
      }

      .v-application--is-rtl .ms-md-n2 {
        margin-right: -8px !important
      }

      .v-application--is-ltr .ms-md-n3 {
        margin-left: -12px !important
      }

      .v-application--is-rtl .ms-md-n3 {
        margin-right: -12px !important
      }

      .v-application--is-ltr .ms-md-n4 {
        margin-left: -16px !important
      }

      .v-application--is-rtl .ms-md-n4 {
        margin-right: -16px !important
      }

      .v-application--is-ltr .ms-md-n5 {
        margin-left: -20px !important
      }

      .v-application--is-rtl .ms-md-n5 {
        margin-right: -20px !important
      }

      .v-application--is-ltr .ms-md-n6 {
        margin-left: -24px !important
      }

      .v-application--is-rtl .ms-md-n6 {
        margin-right: -24px !important
      }

      .v-application--is-ltr .ms-md-n7 {
        margin-left: -28px !important
      }

      .v-application--is-rtl .ms-md-n7 {
        margin-right: -28px !important
      }

      .v-application--is-ltr .ms-md-n8 {
        margin-left: -32px !important
      }

      .v-application--is-rtl .ms-md-n8 {
        margin-right: -32px !important
      }

      .v-application--is-ltr .ms-md-n9 {
        margin-left: -36px !important
      }

      .v-application--is-rtl .ms-md-n9 {
        margin-right: -36px !important
      }

      .v-application--is-ltr .ms-md-n10 {
        margin-left: -40px !important
      }

      .v-application--is-rtl .ms-md-n10 {
        margin-right: -40px !important
      }

      .v-application--is-ltr .ms-md-n11 {
        margin-left: -44px !important
      }

      .v-application--is-rtl .ms-md-n11 {
        margin-right: -44px !important
      }

      .v-application--is-ltr .ms-md-n12 {
        margin-left: -48px !important
      }

      .v-application--is-rtl .ms-md-n12 {
        margin-right: -48px !important
      }

      .v-application--is-ltr .ms-md-n13 {
        margin-left: -52px !important
      }

      .v-application--is-rtl .ms-md-n13 {
        margin-right: -52px !important
      }

      .v-application--is-ltr .ms-md-n14 {
        margin-left: -56px !important
      }

      .v-application--is-rtl .ms-md-n14 {
        margin-right: -56px !important
      }

      .v-application--is-ltr .ms-md-n15 {
        margin-left: -60px !important
      }

      .v-application--is-rtl .ms-md-n15 {
        margin-right: -60px !important
      }

      .v-application--is-ltr .ms-md-n16 {
        margin-left: -64px !important
      }

      .v-application--is-rtl .ms-md-n16 {
        margin-right: -64px !important
      }

      .v-application--is-ltr .me-md-n1 {
        margin-right: -4px !important
      }

      .v-application--is-rtl .me-md-n1 {
        margin-left: -4px !important
      }

      .v-application--is-ltr .me-md-n2 {
        margin-right: -8px !important
      }

      .v-application--is-rtl .me-md-n2 {
        margin-left: -8px !important
      }

      .v-application--is-ltr .me-md-n3 {
        margin-right: -12px !important
      }

      .v-application--is-rtl .me-md-n3 {
        margin-left: -12px !important
      }

      .v-application--is-ltr .me-md-n4 {
        margin-right: -16px !important
      }

      .v-application--is-rtl .me-md-n4 {
        margin-left: -16px !important
      }

      .v-application--is-ltr .me-md-n5 {
        margin-right: -20px !important
      }

      .v-application--is-rtl .me-md-n5 {
        margin-left: -20px !important
      }

      .v-application--is-ltr .me-md-n6 {
        margin-right: -24px !important
      }

      .v-application--is-rtl .me-md-n6 {
        margin-left: -24px !important
      }

      .v-application--is-ltr .me-md-n7 {
        margin-right: -28px !important
      }

      .v-application--is-rtl .me-md-n7 {
        margin-left: -28px !important
      }

      .v-application--is-ltr .me-md-n8 {
        margin-right: -32px !important
      }

      .v-application--is-rtl .me-md-n8 {
        margin-left: -32px !important
      }

      .v-application--is-ltr .me-md-n9 {
        margin-right: -36px !important
      }

      .v-application--is-rtl .me-md-n9 {
        margin-left: -36px !important
      }

      .v-application--is-ltr .me-md-n10 {
        margin-right: -40px !important
      }

      .v-application--is-rtl .me-md-n10 {
        margin-left: -40px !important
      }

      .v-application--is-ltr .me-md-n11 {
        margin-right: -44px !important
      }

      .v-application--is-rtl .me-md-n11 {
        margin-left: -44px !important
      }

      .v-application--is-ltr .me-md-n12 {
        margin-right: -48px !important
      }

      .v-application--is-rtl .me-md-n12 {
        margin-left: -48px !important
      }

      .v-application--is-ltr .me-md-n13 {
        margin-right: -52px !important
      }

      .v-application--is-rtl .me-md-n13 {
        margin-left: -52px !important
      }

      .v-application--is-ltr .me-md-n14 {
        margin-right: -56px !important
      }

      .v-application--is-rtl .me-md-n14 {
        margin-left: -56px !important
      }

      .v-application--is-ltr .me-md-n15 {
        margin-right: -60px !important
      }

      .v-application--is-rtl .me-md-n15 {
        margin-left: -60px !important
      }

      .v-application--is-ltr .me-md-n16 {
        margin-right: -64px !important
      }

      .v-application--is-rtl .me-md-n16 {
        margin-left: -64px !important
      }

      .v-application .pa-md-0 {
        padding: 0 !important
      }

      .v-application .pa-md-1 {
        padding: 4px !important
      }

      .v-application .pa-md-2 {
        padding: 8px !important
      }

      .v-application .pa-md-3 {
        padding: 12px !important
      }

      .v-application .pa-md-4 {
        padding: 16px !important
      }

      .v-application .pa-md-5 {
        padding: 20px !important
      }

      .v-application .pa-md-6 {
        padding: 24px !important
      }

      .v-application .pa-md-7 {
        padding: 28px !important
      }

      .v-application .pa-md-8 {
        padding: 32px !important
      }

      .v-application .pa-md-9 {
        padding: 36px !important
      }

      .v-application .pa-md-10 {
        padding: 40px !important
      }

      .v-application .pa-md-11 {
        padding: 44px !important
      }

      .v-application .pa-md-12 {
        padding: 48px !important
      }

      .v-application .pa-md-13 {
        padding: 52px !important
      }

      .v-application .pa-md-14 {
        padding: 56px !important
      }

      .v-application .pa-md-15 {
        padding: 60px !important
      }

      .v-application .pa-md-16 {
        padding: 64px !important
      }

      .v-application .px-md-0 {
        padding-left: 0 !important;
        padding-right: 0 !important
      }

      .v-application .px-md-1 {
        padding-left: 4px !important;
        padding-right: 4px !important
      }

      .v-application .px-md-2 {
        padding-left: 8px !important;
        padding-right: 8px !important
      }

      .v-application .px-md-3 {
        padding-left: 12px !important;
        padding-right: 12px !important
      }

      .v-application .px-md-4 {
        padding-left: 16px !important;
        padding-right: 16px !important
      }

      .v-application .px-md-5 {
        padding-left: 20px !important;
        padding-right: 20px !important
      }

      .v-application .px-md-6 {
        padding-left: 24px !important;
        padding-right: 24px !important
      }

      .v-application .px-md-7 {
        padding-left: 28px !important;
        padding-right: 28px !important
      }

      .v-application .px-md-8 {
        padding-left: 32px !important;
        padding-right: 32px !important
      }

      .v-application .px-md-9 {
        padding-left: 36px !important;
        padding-right: 36px !important
      }

      .v-application .px-md-10 {
        padding-left: 40px !important;
        padding-right: 40px !important
      }

      .v-application .px-md-11 {
        padding-left: 44px !important;
        padding-right: 44px !important
      }

      .v-application .px-md-12 {
        padding-left: 48px !important;
        padding-right: 48px !important
      }

      .v-application .px-md-13 {
        padding-left: 52px !important;
        padding-right: 52px !important
      }

      .v-application .px-md-14 {
        padding-left: 56px !important;
        padding-right: 56px !important
      }

      .v-application .px-md-15 {
        padding-left: 60px !important;
        padding-right: 60px !important
      }

      .v-application .px-md-16 {
        padding-left: 64px !important;
        padding-right: 64px !important
      }

      .v-application .py-md-0 {
        padding-bottom: 0 !important;
        padding-top: 0 !important
      }

      .v-application .py-md-1 {
        padding-bottom: 4px !important;
        padding-top: 4px !important
      }

      .v-application .py-md-2 {
        padding-bottom: 8px !important;
        padding-top: 8px !important
      }

      .v-application .py-md-3 {
        padding-bottom: 12px !important;
        padding-top: 12px !important
      }

      .v-application .py-md-4 {
        padding-bottom: 16px !important;
        padding-top: 16px !important
      }

      .v-application .py-md-5 {
        padding-bottom: 20px !important;
        padding-top: 20px !important
      }

      .v-application .py-md-6 {
        padding-bottom: 24px !important;
        padding-top: 24px !important
      }

      .v-application .py-md-7 {
        padding-bottom: 28px !important;
        padding-top: 28px !important
      }

      .v-application .py-md-8 {
        padding-bottom: 32px !important;
        padding-top: 32px !important
      }

      .v-application .py-md-9 {
        padding-bottom: 36px !important;
        padding-top: 36px !important
      }

      .v-application .py-md-10 {
        padding-bottom: 40px !important;
        padding-top: 40px !important
      }

      .v-application .py-md-11 {
        padding-bottom: 44px !important;
        padding-top: 44px !important
      }

      .v-application .py-md-12 {
        padding-bottom: 48px !important;
        padding-top: 48px !important
      }

      .v-application .py-md-13 {
        padding-bottom: 52px !important;
        padding-top: 52px !important
      }

      .v-application .py-md-14 {
        padding-bottom: 56px !important;
        padding-top: 56px !important
      }

      .v-application .py-md-15 {
        padding-bottom: 60px !important;
        padding-top: 60px !important
      }

      .v-application .py-md-16 {
        padding-bottom: 64px !important;
        padding-top: 64px !important
      }

      .v-application .pt-md-0 {
        padding-top: 0 !important
      }

      .v-application .pt-md-1 {
        padding-top: 4px !important
      }

      .v-application .pt-md-2 {
        padding-top: 8px !important
      }

      .v-application .pt-md-3 {
        padding-top: 12px !important
      }

      .v-application .pt-md-4 {
        padding-top: 16px !important
      }

      .v-application .pt-md-5 {
        padding-top: 20px !important
      }

      .v-application .pt-md-6 {
        padding-top: 24px !important
      }

      .v-application .pt-md-7 {
        padding-top: 28px !important
      }

      .v-application .pt-md-8 {
        padding-top: 32px !important
      }

      .v-application .pt-md-9 {
        padding-top: 36px !important
      }

      .v-application .pt-md-10 {
        padding-top: 40px !important
      }

      .v-application .pt-md-11 {
        padding-top: 44px !important
      }

      .v-application .pt-md-12 {
        padding-top: 48px !important
      }

      .v-application .pt-md-13 {
        padding-top: 52px !important
      }

      .v-application .pt-md-14 {
        padding-top: 56px !important
      }

      .v-application .pt-md-15 {
        padding-top: 60px !important
      }

      .v-application .pt-md-16 {
        padding-top: 64px !important
      }

      .v-application .pr-md-0 {
        padding-right: 0 !important
      }

      .v-application .pr-md-1 {
        padding-right: 4px !important
      }

      .v-application .pr-md-2 {
        padding-right: 8px !important
      }

      .v-application .pr-md-3 {
        padding-right: 12px !important
      }

      .v-application .pr-md-4 {
        padding-right: 16px !important
      }

      .v-application .pr-md-5 {
        padding-right: 20px !important
      }

      .v-application .pr-md-6 {
        padding-right: 24px !important
      }

      .v-application .pr-md-7 {
        padding-right: 28px !important
      }

      .v-application .pr-md-8 {
        padding-right: 32px !important
      }

      .v-application .pr-md-9 {
        padding-right: 36px !important
      }

      .v-application .pr-md-10 {
        padding-right: 40px !important
      }

      .v-application .pr-md-11 {
        padding-right: 44px !important
      }

      .v-application .pr-md-12 {
        padding-right: 48px !important
      }

      .v-application .pr-md-13 {
        padding-right: 52px !important
      }

      .v-application .pr-md-14 {
        padding-right: 56px !important
      }

      .v-application .pr-md-15 {
        padding-right: 60px !important
      }

      .v-application .pr-md-16 {
        padding-right: 64px !important
      }

      .v-application .pb-md-0 {
        padding-bottom: 0 !important
      }

      .v-application .pb-md-1 {
        padding-bottom: 4px !important
      }

      .v-application .pb-md-2 {
        padding-bottom: 8px !important
      }

      .v-application .pb-md-3 {
        padding-bottom: 12px !important
      }

      .v-application .pb-md-4 {
        padding-bottom: 16px !important
      }

      .v-application .pb-md-5 {
        padding-bottom: 20px !important
      }

      .v-application .pb-md-6 {
        padding-bottom: 24px !important
      }

      .v-application .pb-md-7 {
        padding-bottom: 28px !important
      }

      .v-application .pb-md-8 {
        padding-bottom: 32px !important
      }

      .v-application .pb-md-9 {
        padding-bottom: 36px !important
      }

      .v-application .pb-md-10 {
        padding-bottom: 40px !important
      }

      .v-application .pb-md-11 {
        padding-bottom: 44px !important
      }

      .v-application .pb-md-12 {
        padding-bottom: 48px !important
      }

      .v-application .pb-md-13 {
        padding-bottom: 52px !important
      }

      .v-application .pb-md-14 {
        padding-bottom: 56px !important
      }

      .v-application .pb-md-15 {
        padding-bottom: 60px !important
      }

      .v-application .pb-md-16 {
        padding-bottom: 64px !important
      }

      .v-application .pl-md-0 {
        padding-left: 0 !important
      }

      .v-application .pl-md-1 {
        padding-left: 4px !important
      }

      .v-application .pl-md-2 {
        padding-left: 8px !important
      }

      .v-application .pl-md-3 {
        padding-left: 12px !important
      }

      .v-application .pl-md-4 {
        padding-left: 16px !important
      }

      .v-application .pl-md-5 {
        padding-left: 20px !important
      }

      .v-application .pl-md-6 {
        padding-left: 24px !important
      }

      .v-application .pl-md-7 {
        padding-left: 28px !important
      }

      .v-application .pl-md-8 {
        padding-left: 32px !important
      }

      .v-application .pl-md-9 {
        padding-left: 36px !important
      }

      .v-application .pl-md-10 {
        padding-left: 40px !important
      }

      .v-application .pl-md-11 {
        padding-left: 44px !important
      }

      .v-application .pl-md-12 {
        padding-left: 48px !important
      }

      .v-application .pl-md-13 {
        padding-left: 52px !important
      }

      .v-application .pl-md-14 {
        padding-left: 56px !important
      }

      .v-application .pl-md-15 {
        padding-left: 60px !important
      }

      .v-application .pl-md-16 {
        padding-left: 64px !important
      }

      .v-application--is-ltr .ps-md-0 {
        padding-left: 0 !important
      }

      .v-application--is-rtl .ps-md-0 {
        padding-right: 0 !important
      }

      .v-application--is-ltr .ps-md-1 {
        padding-left: 4px !important
      }

      .v-application--is-rtl .ps-md-1 {
        padding-right: 4px !important
      }

      .v-application--is-ltr .ps-md-2 {
        padding-left: 8px !important
      }

      .v-application--is-rtl .ps-md-2 {
        padding-right: 8px !important
      }

      .v-application--is-ltr .ps-md-3 {
        padding-left: 12px !important
      }

      .v-application--is-rtl .ps-md-3 {
        padding-right: 12px !important
      }

      .v-application--is-ltr .ps-md-4 {
        padding-left: 16px !important
      }

      .v-application--is-rtl .ps-md-4 {
        padding-right: 16px !important
      }

      .v-application--is-ltr .ps-md-5 {
        padding-left: 20px !important
      }

      .v-application--is-rtl .ps-md-5 {
        padding-right: 20px !important
      }

      .v-application--is-ltr .ps-md-6 {
        padding-left: 24px !important
      }

      .v-application--is-rtl .ps-md-6 {
        padding-right: 24px !important
      }

      .v-application--is-ltr .ps-md-7 {
        padding-left: 28px !important
      }

      .v-application--is-rtl .ps-md-7 {
        padding-right: 28px !important
      }

      .v-application--is-ltr .ps-md-8 {
        padding-left: 32px !important
      }

      .v-application--is-rtl .ps-md-8 {
        padding-right: 32px !important
      }

      .v-application--is-ltr .ps-md-9 {
        padding-left: 36px !important
      }

      .v-application--is-rtl .ps-md-9 {
        padding-right: 36px !important
      }

      .v-application--is-ltr .ps-md-10 {
        padding-left: 40px !important
      }

      .v-application--is-rtl .ps-md-10 {
        padding-right: 40px !important
      }

      .v-application--is-ltr .ps-md-11 {
        padding-left: 44px !important
      }

      .v-application--is-rtl .ps-md-11 {
        padding-right: 44px !important
      }

      .v-application--is-ltr .ps-md-12 {
        padding-left: 48px !important
      }

      .v-application--is-rtl .ps-md-12 {
        padding-right: 48px !important
      }

      .v-application--is-ltr .ps-md-13 {
        padding-left: 52px !important
      }

      .v-application--is-rtl .ps-md-13 {
        padding-right: 52px !important
      }

      .v-application--is-ltr .ps-md-14 {
        padding-left: 56px !important
      }

      .v-application--is-rtl .ps-md-14 {
        padding-right: 56px !important
      }

      .v-application--is-ltr .ps-md-15 {
        padding-left: 60px !important
      }

      .v-application--is-rtl .ps-md-15 {
        padding-right: 60px !important
      }

      .v-application--is-ltr .ps-md-16 {
        padding-left: 64px !important
      }

      .v-application--is-rtl .ps-md-16 {
        padding-right: 64px !important
      }

      .v-application--is-ltr .pe-md-0 {
        padding-right: 0 !important
      }

      .v-application--is-rtl .pe-md-0 {
        padding-left: 0 !important
      }

      .v-application--is-ltr .pe-md-1 {
        padding-right: 4px !important
      }

      .v-application--is-rtl .pe-md-1 {
        padding-left: 4px !important
      }

      .v-application--is-ltr .pe-md-2 {
        padding-right: 8px !important
      }

      .v-application--is-rtl .pe-md-2 {
        padding-left: 8px !important
      }

      .v-application--is-ltr .pe-md-3 {
        padding-right: 12px !important
      }

      .v-application--is-rtl .pe-md-3 {
        padding-left: 12px !important
      }

      .v-application--is-ltr .pe-md-4 {
        padding-right: 16px !important
      }

      .v-application--is-rtl .pe-md-4 {
        padding-left: 16px !important
      }

      .v-application--is-ltr .pe-md-5 {
        padding-right: 20px !important
      }

      .v-application--is-rtl .pe-md-5 {
        padding-left: 20px !important
      }

      .v-application--is-ltr .pe-md-6 {
        padding-right: 24px !important
      }

      .v-application--is-rtl .pe-md-6 {
        padding-left: 24px !important
      }

      .v-application--is-ltr .pe-md-7 {
        padding-right: 28px !important
      }

      .v-application--is-rtl .pe-md-7 {
        padding-left: 28px !important
      }

      .v-application--is-ltr .pe-md-8 {
        padding-right: 32px !important
      }

      .v-application--is-rtl .pe-md-8 {
        padding-left: 32px !important
      }

      .v-application--is-ltr .pe-md-9 {
        padding-right: 36px !important
      }

      .v-application--is-rtl .pe-md-9 {
        padding-left: 36px !important
      }

      .v-application--is-ltr .pe-md-10 {
        padding-right: 40px !important
      }

      .v-application--is-rtl .pe-md-10 {
        padding-left: 40px !important
      }

      .v-application--is-ltr .pe-md-11 {
        padding-right: 44px !important
      }

      .v-application--is-rtl .pe-md-11 {
        padding-left: 44px !important
      }

      .v-application--is-ltr .pe-md-12 {
        padding-right: 48px !important
      }

      .v-application--is-rtl .pe-md-12 {
        padding-left: 48px !important
      }

      .v-application--is-ltr .pe-md-13 {
        padding-right: 52px !important
      }

      .v-application--is-rtl .pe-md-13 {
        padding-left: 52px !important
      }

      .v-application--is-ltr .pe-md-14 {
        padding-right: 56px !important
      }

      .v-application--is-rtl .pe-md-14 {
        padding-left: 56px !important
      }

      .v-application--is-ltr .pe-md-15 {
        padding-right: 60px !important
      }

      .v-application--is-rtl .pe-md-15 {
        padding-left: 60px !important
      }

      .v-application--is-ltr .pe-md-16 {
        padding-right: 64px !important
      }

      .v-application--is-rtl .pe-md-16 {
        padding-left: 64px !important
      }

      .v-application .text-md-left {
        text-align: left !important
      }

      .v-application .text-md-right {
        text-align: right !important
      }

      .v-application .text-md-center {
        text-align: center !important
      }

      .v-application .text-md-justify {
        text-align: justify !important
      }

      .v-application .text-md-start {
        text-align: left !important
      }

      .v-application .text-md-end {
        text-align: right !important
      }

      .v-application .text-md-h1 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 6rem !important;
        font-weight: 300;
        letter-spacing: -.015625em !important;
        line-height: 6rem
      }

      .v-application .text-md-h2 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3.75rem !important;
        font-weight: 300;
        letter-spacing: -.0083333333em !important;
        line-height: 3.75rem
      }

      .v-application .text-md-h3 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 3.125rem
      }

      .v-application .text-md-h4 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 2.125rem !important;
        font-weight: 400;
        letter-spacing: .0073529412em !important;
        line-height: 2.5rem
      }

      .v-application .text-md-h5 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.5rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 2rem
      }

      .v-application .text-md-h6 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.25rem !important;
        font-weight: 500;
        letter-spacing: .0125em !important;
        line-height: 2rem
      }

      .v-application .text-md-subtitle-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .009375em !important;
        line-height: 1.75rem
      }

      .v-application .text-md-subtitle-2 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important;
        font-weight: 500;
        letter-spacing: .0071428571em !important;
        line-height: 1.375rem
      }

      .v-application .text-md-body-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .03125em !important;
        line-height: 1.5rem
      }

      .v-application .text-md-body-2 {
        font-weight: 400;
        letter-spacing: .0178571429em !important;
        line-height: 1.25rem
      }

      .v-application .text-md-body-2,
      .v-application .text-md-button {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important
      }

      .v-application .text-md-button {
        font-weight: 500;
        letter-spacing: .0892857143em !important;
        line-height: 2.25rem;
        text-transform: uppercase !important
      }

      .v-application .text-md-caption {
        font-weight: 400;
        letter-spacing: .0333333333em !important;
        line-height: 1.25rem
      }

      .v-application .text-md-caption,
      .v-application .text-md-overline {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .75rem !important
      }

      .v-application .text-md-overline {
        font-weight: 500;
        letter-spacing: .1666666667em !important;
        line-height: 2rem;
        text-transform: uppercase !important
      }
    }

    @media(min-width:1264px) {
      .v-application .d-lg-none {
        display: none !important
      }

      .v-application .d-lg-inline {
        display: inline !important
      }

      .v-application .d-lg-inline-block {
        display: inline-block !important
      }

      .v-application .d-lg-block {
        display: block !important
      }

      .v-application .d-lg-table {
        display: table !important
      }

      .v-application .d-lg-table-row {
        display: table-row !important
      }

      .v-application .d-lg-table-cell {
        display: table-cell !important
      }

      .v-application .d-lg-flex {
        display: flex !important
      }

      .v-application .d-lg-inline-flex {
        display: inline-flex !important
      }

      .v-application .float-lg-none {
        float: none !important
      }

      .v-application .float-lg-left {
        float: left !important
      }

      .v-application .float-lg-right {
        float: right !important
      }

      .v-application--is-rtl .float-lg-end {
        float: left !important
      }

      .v-application--is-ltr .float-lg-end,
      .v-application--is-rtl .float-lg-start {
        float: right !important
      }

      .v-application--is-ltr .float-lg-start {
        float: left !important
      }

      .v-application .flex-lg-fill {
        flex: 1 1 auto !important
      }

      .v-application .flex-lg-row {
        flex-direction: row !important
      }

      .v-application .flex-lg-column {
        flex-direction: column !important
      }

      .v-application .flex-lg-row-reverse {
        flex-direction: row-reverse !important
      }

      .v-application .flex-lg-column-reverse {
        flex-direction: column-reverse !important
      }

      .v-application .flex-lg-grow-0 {
        flex-grow: 0 !important
      }

      .v-application .flex-lg-grow-1 {
        flex-grow: 1 !important
      }

      .v-application .flex-lg-shrink-0 {
        flex-shrink: 0 !important
      }

      .v-application .flex-lg-shrink-1 {
        flex-shrink: 1 !important
      }

      .v-application .flex-lg-wrap {
        flex-wrap: wrap !important
      }

      .v-application .flex-lg-nowrap {
        flex-wrap: nowrap !important
      }

      .v-application .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important
      }

      .v-application .justify-lg-start {
        justify-content: flex-start !important
      }

      .v-application .justify-lg-end {
        justify-content: flex-end !important
      }

      .v-application .justify-lg-center {
        justify-content: center !important
      }

      .v-application .justify-lg-space-between {
        justify-content: space-between !important
      }

      .v-application .justify-lg-space-around {
        justify-content: space-around !important
      }

      .v-application .align-lg-start {
        align-items: flex-start !important
      }

      .v-application .align-lg-end {
        align-items: flex-end !important
      }

      .v-application .align-lg-center {
        align-items: center !important
      }

      .v-application .align-lg-baseline {
        align-items: baseline !important
      }

      .v-application .align-lg-stretch {
        align-items: stretch !important
      }

      .v-application .align-content-lg-start {
        align-content: flex-start !important
      }

      .v-application .align-content-lg-end {
        align-content: flex-end !important
      }

      .v-application .align-content-lg-center {
        align-content: center !important
      }

      .v-application .align-content-lg-space-between {
        align-content: space-between !important
      }

      .v-application .align-content-lg-space-around {
        align-content: space-around !important
      }

      .v-application .align-content-lg-stretch {
        align-content: stretch !important
      }

      .v-application .align-self-lg-auto {
        align-self: auto !important
      }

      .v-application .align-self-lg-start {
        align-self: flex-start !important
      }

      .v-application .align-self-lg-end {
        align-self: flex-end !important
      }

      .v-application .align-self-lg-center {
        align-self: center !important
      }

      .v-application .align-self-lg-baseline {
        align-self: baseline !important
      }

      .v-application .align-self-lg-stretch {
        align-self: stretch !important
      }

      .v-application .order-lg-first {
        order: -1 !important
      }

      .v-application .order-lg-0 {
        order: 0 !important
      }

      .v-application .order-lg-1 {
        order: 1 !important
      }

      .v-application .order-lg-2 {
        order: 2 !important
      }

      .v-application .order-lg-3 {
        order: 3 !important
      }

      .v-application .order-lg-4 {
        order: 4 !important
      }

      .v-application .order-lg-5 {
        order: 5 !important
      }

      .v-application .order-lg-6 {
        order: 6 !important
      }

      .v-application .order-lg-7 {
        order: 7 !important
      }

      .v-application .order-lg-8 {
        order: 8 !important
      }

      .v-application .order-lg-9 {
        order: 9 !important
      }

      .v-application .order-lg-10 {
        order: 10 !important
      }

      .v-application .order-lg-11 {
        order: 11 !important
      }

      .v-application .order-lg-12 {
        order: 12 !important
      }

      .v-application .order-lg-last {
        order: 13 !important
      }

      .v-application .ma-lg-0 {
        margin: 0 !important
      }

      .v-application .ma-lg-1 {
        margin: 4px !important
      }

      .v-application .ma-lg-2 {
        margin: 8px !important
      }

      .v-application .ma-lg-3 {
        margin: 12px !important
      }

      .v-application .ma-lg-4 {
        margin: 16px !important
      }

      .v-application .ma-lg-5 {
        margin: 20px !important
      }

      .v-application .ma-lg-6 {
        margin: 24px !important
      }

      .v-application .ma-lg-7 {
        margin: 28px !important
      }

      .v-application .ma-lg-8 {
        margin: 32px !important
      }

      .v-application .ma-lg-9 {
        margin: 36px !important
      }

      .v-application .ma-lg-10 {
        margin: 40px !important
      }

      .v-application .ma-lg-11 {
        margin: 44px !important
      }

      .v-application .ma-lg-12 {
        margin: 48px !important
      }

      .v-application .ma-lg-13 {
        margin: 52px !important
      }

      .v-application .ma-lg-14 {
        margin: 56px !important
      }

      .v-application .ma-lg-15 {
        margin: 60px !important
      }

      .v-application .ma-lg-16 {
        margin: 64px !important
      }

      .v-application .ma-lg-auto {
        margin: auto !important
      }

      .v-application .mx-lg-0 {
        margin-left: 0 !important;
        margin-right: 0 !important
      }

      .v-application .mx-lg-1 {
        margin-left: 4px !important;
        margin-right: 4px !important
      }

      .v-application .mx-lg-2 {
        margin-left: 8px !important;
        margin-right: 8px !important
      }

      .v-application .mx-lg-3 {
        margin-left: 12px !important;
        margin-right: 12px !important
      }

      .v-application .mx-lg-4 {
        margin-left: 16px !important;
        margin-right: 16px !important
      }

      .v-application .mx-lg-5 {
        margin-left: 20px !important;
        margin-right: 20px !important
      }

      .v-application .mx-lg-6 {
        margin-left: 24px !important;
        margin-right: 24px !important
      }

      .v-application .mx-lg-7 {
        margin-left: 28px !important;
        margin-right: 28px !important
      }

      .v-application .mx-lg-8 {
        margin-left: 32px !important;
        margin-right: 32px !important
      }

      .v-application .mx-lg-9 {
        margin-left: 36px !important;
        margin-right: 36px !important
      }

      .v-application .mx-lg-10 {
        margin-left: 40px !important;
        margin-right: 40px !important
      }

      .v-application .mx-lg-11 {
        margin-left: 44px !important;
        margin-right: 44px !important
      }

      .v-application .mx-lg-12 {
        margin-left: 48px !important;
        margin-right: 48px !important
      }

      .v-application .mx-lg-13 {
        margin-left: 52px !important;
        margin-right: 52px !important
      }

      .v-application .mx-lg-14 {
        margin-left: 56px !important;
        margin-right: 56px !important
      }

      .v-application .mx-lg-15 {
        margin-left: 60px !important;
        margin-right: 60px !important
      }

      .v-application .mx-lg-16 {
        margin-left: 64px !important;
        margin-right: 64px !important
      }

      .v-application .mx-lg-auto {
        margin-left: auto !important;
        margin-right: auto !important
      }

      .v-application .my-lg-0 {
        margin-bottom: 0 !important;
        margin-top: 0 !important
      }

      .v-application .my-lg-1 {
        margin-bottom: 4px !important;
        margin-top: 4px !important
      }

      .v-application .my-lg-2 {
        margin-bottom: 8px !important;
        margin-top: 8px !important
      }

      .v-application .my-lg-3 {
        margin-bottom: 12px !important;
        margin-top: 12px !important
      }

      .v-application .my-lg-4 {
        margin-bottom: 16px !important;
        margin-top: 16px !important
      }

      .v-application .my-lg-5 {
        margin-bottom: 20px !important;
        margin-top: 20px !important
      }

      .v-application .my-lg-6 {
        margin-bottom: 24px !important;
        margin-top: 24px !important
      }

      .v-application .my-lg-7 {
        margin-bottom: 28px !important;
        margin-top: 28px !important
      }

      .v-application .my-lg-8 {
        margin-bottom: 32px !important;
        margin-top: 32px !important
      }

      .v-application .my-lg-9 {
        margin-bottom: 36px !important;
        margin-top: 36px !important
      }

      .v-application .my-lg-10 {
        margin-bottom: 40px !important;
        margin-top: 40px !important
      }

      .v-application .my-lg-11 {
        margin-bottom: 44px !important;
        margin-top: 44px !important
      }

      .v-application .my-lg-12 {
        margin-bottom: 48px !important;
        margin-top: 48px !important
      }

      .v-application .my-lg-13 {
        margin-bottom: 52px !important;
        margin-top: 52px !important
      }

      .v-application .my-lg-14 {
        margin-bottom: 56px !important;
        margin-top: 56px !important
      }

      .v-application .my-lg-15 {
        margin-bottom: 60px !important;
        margin-top: 60px !important
      }

      .v-application .my-lg-16 {
        margin-bottom: 64px !important;
        margin-top: 64px !important
      }

      .v-application .my-lg-auto {
        margin-bottom: auto !important;
        margin-top: auto !important
      }

      .v-application .mt-lg-0 {
        margin-top: 0 !important
      }

      .v-application .mt-lg-1 {
        margin-top: 4px !important
      }

      .v-application .mt-lg-2 {
        margin-top: 8px !important
      }

      .v-application .mt-lg-3 {
        margin-top: 12px !important
      }

      .v-application .mt-lg-4 {
        margin-top: 16px !important
      }

      .v-application .mt-lg-5 {
        margin-top: 20px !important
      }

      .v-application .mt-lg-6 {
        margin-top: 24px !important
      }

      .v-application .mt-lg-7 {
        margin-top: 28px !important
      }

      .v-application .mt-lg-8 {
        margin-top: 32px !important
      }

      .v-application .mt-lg-9 {
        margin-top: 36px !important
      }

      .v-application .mt-lg-10 {
        margin-top: 40px !important
      }

      .v-application .mt-lg-11 {
        margin-top: 44px !important
      }

      .v-application .mt-lg-12 {
        margin-top: 48px !important
      }

      .v-application .mt-lg-13 {
        margin-top: 52px !important
      }

      .v-application .mt-lg-14 {
        margin-top: 56px !important
      }

      .v-application .mt-lg-15 {
        margin-top: 60px !important
      }

      .v-application .mt-lg-16 {
        margin-top: 64px !important
      }

      .v-application .mt-lg-auto {
        margin-top: auto !important
      }

      .v-application .mr-lg-0 {
        margin-right: 0 !important
      }

      .v-application .mr-lg-1 {
        margin-right: 4px !important
      }

      .v-application .mr-lg-2 {
        margin-right: 8px !important
      }

      .v-application .mr-lg-3 {
        margin-right: 12px !important
      }

      .v-application .mr-lg-4 {
        margin-right: 16px !important
      }

      .v-application .mr-lg-5 {
        margin-right: 20px !important
      }

      .v-application .mr-lg-6 {
        margin-right: 24px !important
      }

      .v-application .mr-lg-7 {
        margin-right: 28px !important
      }

      .v-application .mr-lg-8 {
        margin-right: 32px !important
      }

      .v-application .mr-lg-9 {
        margin-right: 36px !important
      }

      .v-application .mr-lg-10 {
        margin-right: 40px !important
      }

      .v-application .mr-lg-11 {
        margin-right: 44px !important
      }

      .v-application .mr-lg-12 {
        margin-right: 48px !important
      }

      .v-application .mr-lg-13 {
        margin-right: 52px !important
      }

      .v-application .mr-lg-14 {
        margin-right: 56px !important
      }

      .v-application .mr-lg-15 {
        margin-right: 60px !important
      }

      .v-application .mr-lg-16 {
        margin-right: 64px !important
      }

      .v-application .mr-lg-auto {
        margin-right: auto !important
      }

      .v-application .mb-lg-0 {
        margin-bottom: 0 !important
      }

      .v-application .mb-lg-1 {
        margin-bottom: 4px !important
      }

      .v-application .mb-lg-2 {
        margin-bottom: 8px !important
      }

      .v-application .mb-lg-3 {
        margin-bottom: 12px !important
      }

      .v-application .mb-lg-4 {
        margin-bottom: 16px !important
      }

      .v-application .mb-lg-5 {
        margin-bottom: 20px !important
      }

      .v-application .mb-lg-6 {
        margin-bottom: 24px !important
      }

      .v-application .mb-lg-7 {
        margin-bottom: 28px !important
      }

      .v-application .mb-lg-8 {
        margin-bottom: 32px !important
      }

      .v-application .mb-lg-9 {
        margin-bottom: 36px !important
      }

      .v-application .mb-lg-10 {
        margin-bottom: 40px !important
      }

      .v-application .mb-lg-11 {
        margin-bottom: 44px !important
      }

      .v-application .mb-lg-12 {
        margin-bottom: 48px !important
      }

      .v-application .mb-lg-13 {
        margin-bottom: 52px !important
      }

      .v-application .mb-lg-14 {
        margin-bottom: 56px !important
      }

      .v-application .mb-lg-15 {
        margin-bottom: 60px !important
      }

      .v-application .mb-lg-16 {
        margin-bottom: 64px !important
      }

      .v-application .mb-lg-auto {
        margin-bottom: auto !important
      }

      .v-application .ml-lg-0 {
        margin-left: 0 !important
      }

      .v-application .ml-lg-1 {
        margin-left: 4px !important
      }

      .v-application .ml-lg-2 {
        margin-left: 8px !important
      }

      .v-application .ml-lg-3 {
        margin-left: 12px !important
      }

      .v-application .ml-lg-4 {
        margin-left: 16px !important
      }

      .v-application .ml-lg-5 {
        margin-left: 20px !important
      }

      .v-application .ml-lg-6 {
        margin-left: 24px !important
      }

      .v-application .ml-lg-7 {
        margin-left: 28px !important
      }

      .v-application .ml-lg-8 {
        margin-left: 32px !important
      }

      .v-application .ml-lg-9 {
        margin-left: 36px !important
      }

      .v-application .ml-lg-10 {
        margin-left: 40px !important
      }

      .v-application .ml-lg-11 {
        margin-left: 44px !important
      }

      .v-application .ml-lg-12 {
        margin-left: 48px !important
      }

      .v-application .ml-lg-13 {
        margin-left: 52px !important
      }

      .v-application .ml-lg-14 {
        margin-left: 56px !important
      }

      .v-application .ml-lg-15 {
        margin-left: 60px !important
      }

      .v-application .ml-lg-16 {
        margin-left: 64px !important
      }

      .v-application .ml-lg-auto {
        margin-left: auto !important
      }

      .v-application--is-ltr .ms-lg-0 {
        margin-left: 0 !important
      }

      .v-application--is-rtl .ms-lg-0 {
        margin-right: 0 !important
      }

      .v-application--is-ltr .ms-lg-1 {
        margin-left: 4px !important
      }

      .v-application--is-rtl .ms-lg-1 {
        margin-right: 4px !important
      }

      .v-application--is-ltr .ms-lg-2 {
        margin-left: 8px !important
      }

      .v-application--is-rtl .ms-lg-2 {
        margin-right: 8px !important
      }

      .v-application--is-ltr .ms-lg-3 {
        margin-left: 12px !important
      }

      .v-application--is-rtl .ms-lg-3 {
        margin-right: 12px !important
      }

      .v-application--is-ltr .ms-lg-4 {
        margin-left: 16px !important
      }

      .v-application--is-rtl .ms-lg-4 {
        margin-right: 16px !important
      }

      .v-application--is-ltr .ms-lg-5 {
        margin-left: 20px !important
      }

      .v-application--is-rtl .ms-lg-5 {
        margin-right: 20px !important
      }

      .v-application--is-ltr .ms-lg-6 {
        margin-left: 24px !important
      }

      .v-application--is-rtl .ms-lg-6 {
        margin-right: 24px !important
      }

      .v-application--is-ltr .ms-lg-7 {
        margin-left: 28px !important
      }

      .v-application--is-rtl .ms-lg-7 {
        margin-right: 28px !important
      }

      .v-application--is-ltr .ms-lg-8 {
        margin-left: 32px !important
      }

      .v-application--is-rtl .ms-lg-8 {
        margin-right: 32px !important
      }

      .v-application--is-ltr .ms-lg-9 {
        margin-left: 36px !important
      }

      .v-application--is-rtl .ms-lg-9 {
        margin-right: 36px !important
      }

      .v-application--is-ltr .ms-lg-10 {
        margin-left: 40px !important
      }

      .v-application--is-rtl .ms-lg-10 {
        margin-right: 40px !important
      }

      .v-application--is-ltr .ms-lg-11 {
        margin-left: 44px !important
      }

      .v-application--is-rtl .ms-lg-11 {
        margin-right: 44px !important
      }

      .v-application--is-ltr .ms-lg-12 {
        margin-left: 48px !important
      }

      .v-application--is-rtl .ms-lg-12 {
        margin-right: 48px !important
      }

      .v-application--is-ltr .ms-lg-13 {
        margin-left: 52px !important
      }

      .v-application--is-rtl .ms-lg-13 {
        margin-right: 52px !important
      }

      .v-application--is-ltr .ms-lg-14 {
        margin-left: 56px !important
      }

      .v-application--is-rtl .ms-lg-14 {
        margin-right: 56px !important
      }

      .v-application--is-ltr .ms-lg-15 {
        margin-left: 60px !important
      }

      .v-application--is-rtl .ms-lg-15 {
        margin-right: 60px !important
      }

      .v-application--is-ltr .ms-lg-16 {
        margin-left: 64px !important
      }

      .v-application--is-rtl .ms-lg-16 {
        margin-right: 64px !important
      }

      .v-application--is-ltr .ms-lg-auto {
        margin-left: auto !important
      }

      .v-application--is-rtl .ms-lg-auto {
        margin-right: auto !important
      }

      .v-application--is-ltr .me-lg-0 {
        margin-right: 0 !important
      }

      .v-application--is-rtl .me-lg-0 {
        margin-left: 0 !important
      }

      .v-application--is-ltr .me-lg-1 {
        margin-right: 4px !important
      }

      .v-application--is-rtl .me-lg-1 {
        margin-left: 4px !important
      }

      .v-application--is-ltr .me-lg-2 {
        margin-right: 8px !important
      }

      .v-application--is-rtl .me-lg-2 {
        margin-left: 8px !important
      }

      .v-application--is-ltr .me-lg-3 {
        margin-right: 12px !important
      }

      .v-application--is-rtl .me-lg-3 {
        margin-left: 12px !important
      }

      .v-application--is-ltr .me-lg-4 {
        margin-right: 16px !important
      }

      .v-application--is-rtl .me-lg-4 {
        margin-left: 16px !important
      }

      .v-application--is-ltr .me-lg-5 {
        margin-right: 20px !important
      }

      .v-application--is-rtl .me-lg-5 {
        margin-left: 20px !important
      }

      .v-application--is-ltr .me-lg-6 {
        margin-right: 24px !important
      }

      .v-application--is-rtl .me-lg-6 {
        margin-left: 24px !important
      }

      .v-application--is-ltr .me-lg-7 {
        margin-right: 28px !important
      }

      .v-application--is-rtl .me-lg-7 {
        margin-left: 28px !important
      }

      .v-application--is-ltr .me-lg-8 {
        margin-right: 32px !important
      }

      .v-application--is-rtl .me-lg-8 {
        margin-left: 32px !important
      }

      .v-application--is-ltr .me-lg-9 {
        margin-right: 36px !important
      }

      .v-application--is-rtl .me-lg-9 {
        margin-left: 36px !important
      }

      .v-application--is-ltr .me-lg-10 {
        margin-right: 40px !important
      }

      .v-application--is-rtl .me-lg-10 {
        margin-left: 40px !important
      }

      .v-application--is-ltr .me-lg-11 {
        margin-right: 44px !important
      }

      .v-application--is-rtl .me-lg-11 {
        margin-left: 44px !important
      }

      .v-application--is-ltr .me-lg-12 {
        margin-right: 48px !important
      }

      .v-application--is-rtl .me-lg-12 {
        margin-left: 48px !important
      }

      .v-application--is-ltr .me-lg-13 {
        margin-right: 52px !important
      }

      .v-application--is-rtl .me-lg-13 {
        margin-left: 52px !important
      }

      .v-application--is-ltr .me-lg-14 {
        margin-right: 56px !important
      }

      .v-application--is-rtl .me-lg-14 {
        margin-left: 56px !important
      }

      .v-application--is-ltr .me-lg-15 {
        margin-right: 60px !important
      }

      .v-application--is-rtl .me-lg-15 {
        margin-left: 60px !important
      }

      .v-application--is-ltr .me-lg-16 {
        margin-right: 64px !important
      }

      .v-application--is-rtl .me-lg-16 {
        margin-left: 64px !important
      }

      .v-application--is-ltr .me-lg-auto {
        margin-right: auto !important
      }

      .v-application--is-rtl .me-lg-auto {
        margin-left: auto !important
      }

      .v-application .ma-lg-n1 {
        margin: -4px !important
      }

      .v-application .ma-lg-n2 {
        margin: -8px !important
      }

      .v-application .ma-lg-n3 {
        margin: -12px !important
      }

      .v-application .ma-lg-n4 {
        margin: -16px !important
      }

      .v-application .ma-lg-n5 {
        margin: -20px !important
      }

      .v-application .ma-lg-n6 {
        margin: -24px !important
      }

      .v-application .ma-lg-n7 {
        margin: -28px !important
      }

      .v-application .ma-lg-n8 {
        margin: -32px !important
      }

      .v-application .ma-lg-n9 {
        margin: -36px !important
      }

      .v-application .ma-lg-n10 {
        margin: -40px !important
      }

      .v-application .ma-lg-n11 {
        margin: -44px !important
      }

      .v-application .ma-lg-n12 {
        margin: -48px !important
      }

      .v-application .ma-lg-n13 {
        margin: -52px !important
      }

      .v-application .ma-lg-n14 {
        margin: -56px !important
      }

      .v-application .ma-lg-n15 {
        margin: -60px !important
      }

      .v-application .ma-lg-n16 {
        margin: -64px !important
      }

      .v-application .mx-lg-n1 {
        margin-left: -4px !important;
        margin-right: -4px !important
      }

      .v-application .mx-lg-n2 {
        margin-left: -8px !important;
        margin-right: -8px !important
      }

      .v-application .mx-lg-n3 {
        margin-left: -12px !important;
        margin-right: -12px !important
      }

      .v-application .mx-lg-n4 {
        margin-left: -16px !important;
        margin-right: -16px !important
      }

      .v-application .mx-lg-n5 {
        margin-left: -20px !important;
        margin-right: -20px !important
      }

      .v-application .mx-lg-n6 {
        margin-left: -24px !important;
        margin-right: -24px !important
      }

      .v-application .mx-lg-n7 {
        margin-left: -28px !important;
        margin-right: -28px !important
      }

      .v-application .mx-lg-n8 {
        margin-left: -32px !important;
        margin-right: -32px !important
      }

      .v-application .mx-lg-n9 {
        margin-left: -36px !important;
        margin-right: -36px !important
      }

      .v-application .mx-lg-n10 {
        margin-left: -40px !important;
        margin-right: -40px !important
      }

      .v-application .mx-lg-n11 {
        margin-left: -44px !important;
        margin-right: -44px !important
      }

      .v-application .mx-lg-n12 {
        margin-left: -48px !important;
        margin-right: -48px !important
      }

      .v-application .mx-lg-n13 {
        margin-left: -52px !important;
        margin-right: -52px !important
      }

      .v-application .mx-lg-n14 {
        margin-left: -56px !important;
        margin-right: -56px !important
      }

      .v-application .mx-lg-n15 {
        margin-left: -60px !important;
        margin-right: -60px !important
      }

      .v-application .mx-lg-n16 {
        margin-left: -64px !important;
        margin-right: -64px !important
      }

      .v-application .my-lg-n1 {
        margin-bottom: -4px !important;
        margin-top: -4px !important
      }

      .v-application .my-lg-n2 {
        margin-bottom: -8px !important;
        margin-top: -8px !important
      }

      .v-application .my-lg-n3 {
        margin-bottom: -12px !important;
        margin-top: -12px !important
      }

      .v-application .my-lg-n4 {
        margin-bottom: -16px !important;
        margin-top: -16px !important
      }

      .v-application .my-lg-n5 {
        margin-bottom: -20px !important;
        margin-top: -20px !important
      }

      .v-application .my-lg-n6 {
        margin-bottom: -24px !important;
        margin-top: -24px !important
      }

      .v-application .my-lg-n7 {
        margin-bottom: -28px !important;
        margin-top: -28px !important
      }

      .v-application .my-lg-n8 {
        margin-bottom: -32px !important;
        margin-top: -32px !important
      }

      .v-application .my-lg-n9 {
        margin-bottom: -36px !important;
        margin-top: -36px !important
      }

      .v-application .my-lg-n10 {
        margin-bottom: -40px !important;
        margin-top: -40px !important
      }

      .v-application .my-lg-n11 {
        margin-bottom: -44px !important;
        margin-top: -44px !important
      }

      .v-application .my-lg-n12 {
        margin-bottom: -48px !important;
        margin-top: -48px !important
      }

      .v-application .my-lg-n13 {
        margin-bottom: -52px !important;
        margin-top: -52px !important
      }

      .v-application .my-lg-n14 {
        margin-bottom: -56px !important;
        margin-top: -56px !important
      }

      .v-application .my-lg-n15 {
        margin-bottom: -60px !important;
        margin-top: -60px !important
      }

      .v-application .my-lg-n16 {
        margin-bottom: -64px !important;
        margin-top: -64px !important
      }

      .v-application .mt-lg-n1 {
        margin-top: -4px !important
      }

      .v-application .mt-lg-n2 {
        margin-top: -8px !important
      }

      .v-application .mt-lg-n3 {
        margin-top: -12px !important
      }

      .v-application .mt-lg-n4 {
        margin-top: -16px !important
      }

      .v-application .mt-lg-n5 {
        margin-top: -20px !important
      }

      .v-application .mt-lg-n6 {
        margin-top: -24px !important
      }

      .v-application .mt-lg-n7 {
        margin-top: -28px !important
      }

      .v-application .mt-lg-n8 {
        margin-top: -32px !important
      }

      .v-application .mt-lg-n9 {
        margin-top: -36px !important
      }

      .v-application .mt-lg-n10 {
        margin-top: -40px !important
      }

      .v-application .mt-lg-n11 {
        margin-top: -44px !important
      }

      .v-application .mt-lg-n12 {
        margin-top: -48px !important
      }

      .v-application .mt-lg-n13 {
        margin-top: -52px !important
      }

      .v-application .mt-lg-n14 {
        margin-top: -56px !important
      }

      .v-application .mt-lg-n15 {
        margin-top: -60px !important
      }

      .v-application .mt-lg-n16 {
        margin-top: -64px !important
      }

      .v-application .mr-lg-n1 {
        margin-right: -4px !important
      }

      .v-application .mr-lg-n2 {
        margin-right: -8px !important
      }

      .v-application .mr-lg-n3 {
        margin-right: -12px !important
      }

      .v-application .mr-lg-n4 {
        margin-right: -16px !important
      }

      .v-application .mr-lg-n5 {
        margin-right: -20px !important
      }

      .v-application .mr-lg-n6 {
        margin-right: -24px !important
      }

      .v-application .mr-lg-n7 {
        margin-right: -28px !important
      }

      .v-application .mr-lg-n8 {
        margin-right: -32px !important
      }

      .v-application .mr-lg-n9 {
        margin-right: -36px !important
      }

      .v-application .mr-lg-n10 {
        margin-right: -40px !important
      }

      .v-application .mr-lg-n11 {
        margin-right: -44px !important
      }

      .v-application .mr-lg-n12 {
        margin-right: -48px !important
      }

      .v-application .mr-lg-n13 {
        margin-right: -52px !important
      }

      .v-application .mr-lg-n14 {
        margin-right: -56px !important
      }

      .v-application .mr-lg-n15 {
        margin-right: -60px !important
      }

      .v-application .mr-lg-n16 {
        margin-right: -64px !important
      }

      .v-application .mb-lg-n1 {
        margin-bottom: -4px !important
      }

      .v-application .mb-lg-n2 {
        margin-bottom: -8px !important
      }

      .v-application .mb-lg-n3 {
        margin-bottom: -12px !important
      }

      .v-application .mb-lg-n4 {
        margin-bottom: -16px !important
      }

      .v-application .mb-lg-n5 {
        margin-bottom: -20px !important
      }

      .v-application .mb-lg-n6 {
        margin-bottom: -24px !important
      }

      .v-application .mb-lg-n7 {
        margin-bottom: -28px !important
      }

      .v-application .mb-lg-n8 {
        margin-bottom: -32px !important
      }

      .v-application .mb-lg-n9 {
        margin-bottom: -36px !important
      }

      .v-application .mb-lg-n10 {
        margin-bottom: -40px !important
      }

      .v-application .mb-lg-n11 {
        margin-bottom: -44px !important
      }

      .v-application .mb-lg-n12 {
        margin-bottom: -48px !important
      }

      .v-application .mb-lg-n13 {
        margin-bottom: -52px !important
      }

      .v-application .mb-lg-n14 {
        margin-bottom: -56px !important
      }

      .v-application .mb-lg-n15 {
        margin-bottom: -60px !important
      }

      .v-application .mb-lg-n16 {
        margin-bottom: -64px !important
      }

      .v-application .ml-lg-n1 {
        margin-left: -4px !important
      }

      .v-application .ml-lg-n2 {
        margin-left: -8px !important
      }

      .v-application .ml-lg-n3 {
        margin-left: -12px !important
      }

      .v-application .ml-lg-n4 {
        margin-left: -16px !important
      }

      .v-application .ml-lg-n5 {
        margin-left: -20px !important
      }

      .v-application .ml-lg-n6 {
        margin-left: -24px !important
      }

      .v-application .ml-lg-n7 {
        margin-left: -28px !important
      }

      .v-application .ml-lg-n8 {
        margin-left: -32px !important
      }

      .v-application .ml-lg-n9 {
        margin-left: -36px !important
      }

      .v-application .ml-lg-n10 {
        margin-left: -40px !important
      }

      .v-application .ml-lg-n11 {
        margin-left: -44px !important
      }

      .v-application .ml-lg-n12 {
        margin-left: -48px !important
      }

      .v-application .ml-lg-n13 {
        margin-left: -52px !important
      }

      .v-application .ml-lg-n14 {
        margin-left: -56px !important
      }

      .v-application .ml-lg-n15 {
        margin-left: -60px !important
      }

      .v-application .ml-lg-n16 {
        margin-left: -64px !important
      }

      .v-application--is-ltr .ms-lg-n1 {
        margin-left: -4px !important
      }

      .v-application--is-rtl .ms-lg-n1 {
        margin-right: -4px !important
      }

      .v-application--is-ltr .ms-lg-n2 {
        margin-left: -8px !important
      }

      .v-application--is-rtl .ms-lg-n2 {
        margin-right: -8px !important
      }

      .v-application--is-ltr .ms-lg-n3 {
        margin-left: -12px !important
      }

      .v-application--is-rtl .ms-lg-n3 {
        margin-right: -12px !important
      }

      .v-application--is-ltr .ms-lg-n4 {
        margin-left: -16px !important
      }

      .v-application--is-rtl .ms-lg-n4 {
        margin-right: -16px !important
      }

      .v-application--is-ltr .ms-lg-n5 {
        margin-left: -20px !important
      }

      .v-application--is-rtl .ms-lg-n5 {
        margin-right: -20px !important
      }

      .v-application--is-ltr .ms-lg-n6 {
        margin-left: -24px !important
      }

      .v-application--is-rtl .ms-lg-n6 {
        margin-right: -24px !important
      }

      .v-application--is-ltr .ms-lg-n7 {
        margin-left: -28px !important
      }

      .v-application--is-rtl .ms-lg-n7 {
        margin-right: -28px !important
      }

      .v-application--is-ltr .ms-lg-n8 {
        margin-left: -32px !important
      }

      .v-application--is-rtl .ms-lg-n8 {
        margin-right: -32px !important
      }

      .v-application--is-ltr .ms-lg-n9 {
        margin-left: -36px !important
      }

      .v-application--is-rtl .ms-lg-n9 {
        margin-right: -36px !important
      }

      .v-application--is-ltr .ms-lg-n10 {
        margin-left: -40px !important
      }

      .v-application--is-rtl .ms-lg-n10 {
        margin-right: -40px !important
      }

      .v-application--is-ltr .ms-lg-n11 {
        margin-left: -44px !important
      }

      .v-application--is-rtl .ms-lg-n11 {
        margin-right: -44px !important
      }

      .v-application--is-ltr .ms-lg-n12 {
        margin-left: -48px !important
      }

      .v-application--is-rtl .ms-lg-n12 {
        margin-right: -48px !important
      }

      .v-application--is-ltr .ms-lg-n13 {
        margin-left: -52px !important
      }

      .v-application--is-rtl .ms-lg-n13 {
        margin-right: -52px !important
      }

      .v-application--is-ltr .ms-lg-n14 {
        margin-left: -56px !important
      }

      .v-application--is-rtl .ms-lg-n14 {
        margin-right: -56px !important
      }

      .v-application--is-ltr .ms-lg-n15 {
        margin-left: -60px !important
      }

      .v-application--is-rtl .ms-lg-n15 {
        margin-right: -60px !important
      }

      .v-application--is-ltr .ms-lg-n16 {
        margin-left: -64px !important
      }

      .v-application--is-rtl .ms-lg-n16 {
        margin-right: -64px !important
      }

      .v-application--is-ltr .me-lg-n1 {
        margin-right: -4px !important
      }

      .v-application--is-rtl .me-lg-n1 {
        margin-left: -4px !important
      }

      .v-application--is-ltr .me-lg-n2 {
        margin-right: -8px !important
      }

      .v-application--is-rtl .me-lg-n2 {
        margin-left: -8px !important
      }

      .v-application--is-ltr .me-lg-n3 {
        margin-right: -12px !important
      }

      .v-application--is-rtl .me-lg-n3 {
        margin-left: -12px !important
      }

      .v-application--is-ltr .me-lg-n4 {
        margin-right: -16px !important
      }

      .v-application--is-rtl .me-lg-n4 {
        margin-left: -16px !important
      }

      .v-application--is-ltr .me-lg-n5 {
        margin-right: -20px !important
      }

      .v-application--is-rtl .me-lg-n5 {
        margin-left: -20px !important
      }

      .v-application--is-ltr .me-lg-n6 {
        margin-right: -24px !important
      }

      .v-application--is-rtl .me-lg-n6 {
        margin-left: -24px !important
      }

      .v-application--is-ltr .me-lg-n7 {
        margin-right: -28px !important
      }

      .v-application--is-rtl .me-lg-n7 {
        margin-left: -28px !important
      }

      .v-application--is-ltr .me-lg-n8 {
        margin-right: -32px !important
      }

      .v-application--is-rtl .me-lg-n8 {
        margin-left: -32px !important
      }

      .v-application--is-ltr .me-lg-n9 {
        margin-right: -36px !important
      }

      .v-application--is-rtl .me-lg-n9 {
        margin-left: -36px !important
      }

      .v-application--is-ltr .me-lg-n10 {
        margin-right: -40px !important
      }

      .v-application--is-rtl .me-lg-n10 {
        margin-left: -40px !important
      }

      .v-application--is-ltr .me-lg-n11 {
        margin-right: -44px !important
      }

      .v-application--is-rtl .me-lg-n11 {
        margin-left: -44px !important
      }

      .v-application--is-ltr .me-lg-n12 {
        margin-right: -48px !important
      }

      .v-application--is-rtl .me-lg-n12 {
        margin-left: -48px !important
      }

      .v-application--is-ltr .me-lg-n13 {
        margin-right: -52px !important
      }

      .v-application--is-rtl .me-lg-n13 {
        margin-left: -52px !important
      }

      .v-application--is-ltr .me-lg-n14 {
        margin-right: -56px !important
      }

      .v-application--is-rtl .me-lg-n14 {
        margin-left: -56px !important
      }

      .v-application--is-ltr .me-lg-n15 {
        margin-right: -60px !important
      }

      .v-application--is-rtl .me-lg-n15 {
        margin-left: -60px !important
      }

      .v-application--is-ltr .me-lg-n16 {
        margin-right: -64px !important
      }

      .v-application--is-rtl .me-lg-n16 {
        margin-left: -64px !important
      }

      .v-application .pa-lg-0 {
        padding: 0 !important
      }

      .v-application .pa-lg-1 {
        padding: 4px !important
      }

      .v-application .pa-lg-2 {
        padding: 8px !important
      }

      .v-application .pa-lg-3 {
        padding: 12px !important
      }

      .v-application .pa-lg-4 {
        padding: 16px !important
      }

      .v-application .pa-lg-5 {
        padding: 20px !important
      }

      .v-application .pa-lg-6 {
        padding: 24px !important
      }

      .v-application .pa-lg-7 {
        padding: 28px !important
      }

      .v-application .pa-lg-8 {
        padding: 32px !important
      }

      .v-application .pa-lg-9 {
        padding: 36px !important
      }

      .v-application .pa-lg-10 {
        padding: 40px !important
      }

      .v-application .pa-lg-11 {
        padding: 44px !important
      }

      .v-application .pa-lg-12 {
        padding: 48px !important
      }

      .v-application .pa-lg-13 {
        padding: 52px !important
      }

      .v-application .pa-lg-14 {
        padding: 56px !important
      }

      .v-application .pa-lg-15 {
        padding: 60px !important
      }

      .v-application .pa-lg-16 {
        padding: 64px !important
      }

      .v-application .px-lg-0 {
        padding-left: 0 !important;
        padding-right: 0 !important
      }

      .v-application .px-lg-1 {
        padding-left: 4px !important;
        padding-right: 4px !important
      }

      .v-application .px-lg-2 {
        padding-left: 8px !important;
        padding-right: 8px !important
      }

      .v-application .px-lg-3 {
        padding-left: 12px !important;
        padding-right: 12px !important
      }

      .v-application .px-lg-4 {
        padding-left: 16px !important;
        padding-right: 16px !important
      }

      .v-application .px-lg-5 {
        padding-left: 20px !important;
        padding-right: 20px !important
      }

      .v-application .px-lg-6 {
        padding-left: 24px !important;
        padding-right: 24px !important
      }

      .v-application .px-lg-7 {
        padding-left: 28px !important;
        padding-right: 28px !important
      }

      .v-application .px-lg-8 {
        padding-left: 32px !important;
        padding-right: 32px !important
      }

      .v-application .px-lg-9 {
        padding-left: 36px !important;
        padding-right: 36px !important
      }

      .v-application .px-lg-10 {
        padding-left: 40px !important;
        padding-right: 40px !important
      }

      .v-application .px-lg-11 {
        padding-left: 44px !important;
        padding-right: 44px !important
      }

      .v-application .px-lg-12 {
        padding-left: 48px !important;
        padding-right: 48px !important
      }

      .v-application .px-lg-13 {
        padding-left: 52px !important;
        padding-right: 52px !important
      }

      .v-application .px-lg-14 {
        padding-left: 56px !important;
        padding-right: 56px !important
      }

      .v-application .px-lg-15 {
        padding-left: 60px !important;
        padding-right: 60px !important
      }

      .v-application .px-lg-16 {
        padding-left: 64px !important;
        padding-right: 64px !important
      }

      .v-application .py-lg-0 {
        padding-bottom: 0 !important;
        padding-top: 0 !important
      }

      .v-application .py-lg-1 {
        padding-bottom: 4px !important;
        padding-top: 4px !important
      }

      .v-application .py-lg-2 {
        padding-bottom: 8px !important;
        padding-top: 8px !important
      }

      .v-application .py-lg-3 {
        padding-bottom: 12px !important;
        padding-top: 12px !important
      }

      .v-application .py-lg-4 {
        padding-bottom: 16px !important;
        padding-top: 16px !important
      }

      .v-application .py-lg-5 {
        padding-bottom: 20px !important;
        padding-top: 20px !important
      }

      .v-application .py-lg-6 {
        padding-bottom: 24px !important;
        padding-top: 24px !important
      }

      .v-application .py-lg-7 {
        padding-bottom: 28px !important;
        padding-top: 28px !important
      }

      .v-application .py-lg-8 {
        padding-bottom: 32px !important;
        padding-top: 32px !important
      }

      .v-application .py-lg-9 {
        padding-bottom: 36px !important;
        padding-top: 36px !important
      }

      .v-application .py-lg-10 {
        padding-bottom: 40px !important;
        padding-top: 40px !important
      }

      .v-application .py-lg-11 {
        padding-bottom: 44px !important;
        padding-top: 44px !important
      }

      .v-application .py-lg-12 {
        padding-bottom: 48px !important;
        padding-top: 48px !important
      }

      .v-application .py-lg-13 {
        padding-bottom: 52px !important;
        padding-top: 52px !important
      }

      .v-application .py-lg-14 {
        padding-bottom: 56px !important;
        padding-top: 56px !important
      }

      .v-application .py-lg-15 {
        padding-bottom: 60px !important;
        padding-top: 60px !important
      }

      .v-application .py-lg-16 {
        padding-bottom: 64px !important;
        padding-top: 64px !important
      }

      .v-application .pt-lg-0 {
        padding-top: 0 !important
      }

      .v-application .pt-lg-1 {
        padding-top: 4px !important
      }

      .v-application .pt-lg-2 {
        padding-top: 8px !important
      }

      .v-application .pt-lg-3 {
        padding-top: 12px !important
      }

      .v-application .pt-lg-4 {
        padding-top: 16px !important
      }

      .v-application .pt-lg-5 {
        padding-top: 20px !important
      }

      .v-application .pt-lg-6 {
        padding-top: 24px !important
      }

      .v-application .pt-lg-7 {
        padding-top: 28px !important
      }

      .v-application .pt-lg-8 {
        padding-top: 32px !important
      }

      .v-application .pt-lg-9 {
        padding-top: 36px !important
      }

      .v-application .pt-lg-10 {
        padding-top: 40px !important
      }

      .v-application .pt-lg-11 {
        padding-top: 44px !important
      }

      .v-application .pt-lg-12 {
        padding-top: 48px !important
      }

      .v-application .pt-lg-13 {
        padding-top: 52px !important
      }

      .v-application .pt-lg-14 {
        padding-top: 56px !important
      }

      .v-application .pt-lg-15 {
        padding-top: 60px !important
      }

      .v-application .pt-lg-16 {
        padding-top: 64px !important
      }

      .v-application .pr-lg-0 {
        padding-right: 0 !important
      }

      .v-application .pr-lg-1 {
        padding-right: 4px !important
      }

      .v-application .pr-lg-2 {
        padding-right: 8px !important
      }

      .v-application .pr-lg-3 {
        padding-right: 12px !important
      }

      .v-application .pr-lg-4 {
        padding-right: 16px !important
      }

      .v-application .pr-lg-5 {
        padding-right: 20px !important
      }

      .v-application .pr-lg-6 {
        padding-right: 24px !important
      }

      .v-application .pr-lg-7 {
        padding-right: 28px !important
      }

      .v-application .pr-lg-8 {
        padding-right: 32px !important
      }

      .v-application .pr-lg-9 {
        padding-right: 36px !important
      }

      .v-application .pr-lg-10 {
        padding-right: 40px !important
      }

      .v-application .pr-lg-11 {
        padding-right: 44px !important
      }

      .v-application .pr-lg-12 {
        padding-right: 48px !important
      }

      .v-application .pr-lg-13 {
        padding-right: 52px !important
      }

      .v-application .pr-lg-14 {
        padding-right: 56px !important
      }

      .v-application .pr-lg-15 {
        padding-right: 60px !important
      }

      .v-application .pr-lg-16 {
        padding-right: 64px !important
      }

      .v-application .pb-lg-0 {
        padding-bottom: 0 !important
      }

      .v-application .pb-lg-1 {
        padding-bottom: 4px !important
      }

      .v-application .pb-lg-2 {
        padding-bottom: 8px !important
      }

      .v-application .pb-lg-3 {
        padding-bottom: 12px !important
      }

      .v-application .pb-lg-4 {
        padding-bottom: 16px !important
      }

      .v-application .pb-lg-5 {
        padding-bottom: 20px !important
      }

      .v-application .pb-lg-6 {
        padding-bottom: 24px !important
      }

      .v-application .pb-lg-7 {
        padding-bottom: 28px !important
      }

      .v-application .pb-lg-8 {
        padding-bottom: 32px !important
      }

      .v-application .pb-lg-9 {
        padding-bottom: 36px !important
      }

      .v-application .pb-lg-10 {
        padding-bottom: 40px !important
      }

      .v-application .pb-lg-11 {
        padding-bottom: 44px !important
      }

      .v-application .pb-lg-12 {
        padding-bottom: 48px !important
      }

      .v-application .pb-lg-13 {
        padding-bottom: 52px !important
      }

      .v-application .pb-lg-14 {
        padding-bottom: 56px !important
      }

      .v-application .pb-lg-15 {
        padding-bottom: 60px !important
      }

      .v-application .pb-lg-16 {
        padding-bottom: 64px !important
      }

      .v-application .pl-lg-0 {
        padding-left: 0 !important
      }

      .v-application .pl-lg-1 {
        padding-left: 4px !important
      }

      .v-application .pl-lg-2 {
        padding-left: 8px !important
      }

      .v-application .pl-lg-3 {
        padding-left: 12px !important
      }

      .v-application .pl-lg-4 {
        padding-left: 16px !important
      }

      .v-application .pl-lg-5 {
        padding-left: 20px !important
      }

      .v-application .pl-lg-6 {
        padding-left: 24px !important
      }

      .v-application .pl-lg-7 {
        padding-left: 28px !important
      }

      .v-application .pl-lg-8 {
        padding-left: 32px !important
      }

      .v-application .pl-lg-9 {
        padding-left: 36px !important
      }

      .v-application .pl-lg-10 {
        padding-left: 40px !important
      }

      .v-application .pl-lg-11 {
        padding-left: 44px !important
      }

      .v-application .pl-lg-12 {
        padding-left: 48px !important
      }

      .v-application .pl-lg-13 {
        padding-left: 52px !important
      }

      .v-application .pl-lg-14 {
        padding-left: 56px !important
      }

      .v-application .pl-lg-15 {
        padding-left: 60px !important
      }

      .v-application .pl-lg-16 {
        padding-left: 64px !important
      }

      .v-application--is-ltr .ps-lg-0 {
        padding-left: 0 !important
      }

      .v-application--is-rtl .ps-lg-0 {
        padding-right: 0 !important
      }

      .v-application--is-ltr .ps-lg-1 {
        padding-left: 4px !important
      }

      .v-application--is-rtl .ps-lg-1 {
        padding-right: 4px !important
      }

      .v-application--is-ltr .ps-lg-2 {
        padding-left: 8px !important
      }

      .v-application--is-rtl .ps-lg-2 {
        padding-right: 8px !important
      }

      .v-application--is-ltr .ps-lg-3 {
        padding-left: 12px !important
      }

      .v-application--is-rtl .ps-lg-3 {
        padding-right: 12px !important
      }

      .v-application--is-ltr .ps-lg-4 {
        padding-left: 16px !important
      }

      .v-application--is-rtl .ps-lg-4 {
        padding-right: 16px !important
      }

      .v-application--is-ltr .ps-lg-5 {
        padding-left: 20px !important
      }

      .v-application--is-rtl .ps-lg-5 {
        padding-right: 20px !important
      }

      .v-application--is-ltr .ps-lg-6 {
        padding-left: 24px !important
      }

      .v-application--is-rtl .ps-lg-6 {
        padding-right: 24px !important
      }

      .v-application--is-ltr .ps-lg-7 {
        padding-left: 28px !important
      }

      .v-application--is-rtl .ps-lg-7 {
        padding-right: 28px !important
      }

      .v-application--is-ltr .ps-lg-8 {
        padding-left: 32px !important
      }

      .v-application--is-rtl .ps-lg-8 {
        padding-right: 32px !important
      }

      .v-application--is-ltr .ps-lg-9 {
        padding-left: 36px !important
      }

      .v-application--is-rtl .ps-lg-9 {
        padding-right: 36px !important
      }

      .v-application--is-ltr .ps-lg-10 {
        padding-left: 40px !important
      }

      .v-application--is-rtl .ps-lg-10 {
        padding-right: 40px !important
      }

      .v-application--is-ltr .ps-lg-11 {
        padding-left: 44px !important
      }

      .v-application--is-rtl .ps-lg-11 {
        padding-right: 44px !important
      }

      .v-application--is-ltr .ps-lg-12 {
        padding-left: 48px !important
      }

      .v-application--is-rtl .ps-lg-12 {
        padding-right: 48px !important
      }

      .v-application--is-ltr .ps-lg-13 {
        padding-left: 52px !important
      }

      .v-application--is-rtl .ps-lg-13 {
        padding-right: 52px !important
      }

      .v-application--is-ltr .ps-lg-14 {
        padding-left: 56px !important
      }

      .v-application--is-rtl .ps-lg-14 {
        padding-right: 56px !important
      }

      .v-application--is-ltr .ps-lg-15 {
        padding-left: 60px !important
      }

      .v-application--is-rtl .ps-lg-15 {
        padding-right: 60px !important
      }

      .v-application--is-ltr .ps-lg-16 {
        padding-left: 64px !important
      }

      .v-application--is-rtl .ps-lg-16 {
        padding-right: 64px !important
      }

      .v-application--is-ltr .pe-lg-0 {
        padding-right: 0 !important
      }

      .v-application--is-rtl .pe-lg-0 {
        padding-left: 0 !important
      }

      .v-application--is-ltr .pe-lg-1 {
        padding-right: 4px !important
      }

      .v-application--is-rtl .pe-lg-1 {
        padding-left: 4px !important
      }

      .v-application--is-ltr .pe-lg-2 {
        padding-right: 8px !important
      }

      .v-application--is-rtl .pe-lg-2 {
        padding-left: 8px !important
      }

      .v-application--is-ltr .pe-lg-3 {
        padding-right: 12px !important
      }

      .v-application--is-rtl .pe-lg-3 {
        padding-left: 12px !important
      }

      .v-application--is-ltr .pe-lg-4 {
        padding-right: 16px !important
      }

      .v-application--is-rtl .pe-lg-4 {
        padding-left: 16px !important
      }

      .v-application--is-ltr .pe-lg-5 {
        padding-right: 20px !important
      }

      .v-application--is-rtl .pe-lg-5 {
        padding-left: 20px !important
      }

      .v-application--is-ltr .pe-lg-6 {
        padding-right: 24px !important
      }

      .v-application--is-rtl .pe-lg-6 {
        padding-left: 24px !important
      }

      .v-application--is-ltr .pe-lg-7 {
        padding-right: 28px !important
      }

      .v-application--is-rtl .pe-lg-7 {
        padding-left: 28px !important
      }

      .v-application--is-ltr .pe-lg-8 {
        padding-right: 32px !important
      }

      .v-application--is-rtl .pe-lg-8 {
        padding-left: 32px !important
      }

      .v-application--is-ltr .pe-lg-9 {
        padding-right: 36px !important
      }

      .v-application--is-rtl .pe-lg-9 {
        padding-left: 36px !important
      }

      .v-application--is-ltr .pe-lg-10 {
        padding-right: 40px !important
      }

      .v-application--is-rtl .pe-lg-10 {
        padding-left: 40px !important
      }

      .v-application--is-ltr .pe-lg-11 {
        padding-right: 44px !important
      }

      .v-application--is-rtl .pe-lg-11 {
        padding-left: 44px !important
      }

      .v-application--is-ltr .pe-lg-12 {
        padding-right: 48px !important
      }

      .v-application--is-rtl .pe-lg-12 {
        padding-left: 48px !important
      }

      .v-application--is-ltr .pe-lg-13 {
        padding-right: 52px !important
      }

      .v-application--is-rtl .pe-lg-13 {
        padding-left: 52px !important
      }

      .v-application--is-ltr .pe-lg-14 {
        padding-right: 56px !important
      }

      .v-application--is-rtl .pe-lg-14 {
        padding-left: 56px !important
      }

      .v-application--is-ltr .pe-lg-15 {
        padding-right: 60px !important
      }

      .v-application--is-rtl .pe-lg-15 {
        padding-left: 60px !important
      }

      .v-application--is-ltr .pe-lg-16 {
        padding-right: 64px !important
      }

      .v-application--is-rtl .pe-lg-16 {
        padding-left: 64px !important
      }

      .v-application .text-lg-left {
        text-align: left !important
      }

      .v-application .text-lg-right {
        text-align: right !important
      }

      .v-application .text-lg-center {
        text-align: center !important
      }

      .v-application .text-lg-justify {
        text-align: justify !important
      }

      .v-application .text-lg-start {
        text-align: left !important
      }

      .v-application .text-lg-end {
        text-align: right !important
      }

      .v-application .text-lg-h1 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 6rem !important;
        font-weight: 300;
        letter-spacing: -.015625em !important;
        line-height: 6rem
      }

      .v-application .text-lg-h2 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3.75rem !important;
        font-weight: 300;
        letter-spacing: -.0083333333em !important;
        line-height: 3.75rem
      }

      .v-application .text-lg-h3 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 3.125rem
      }

      .v-application .text-lg-h4 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 2.125rem !important;
        font-weight: 400;
        letter-spacing: .0073529412em !important;
        line-height: 2.5rem
      }

      .v-application .text-lg-h5 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.5rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 2rem
      }

      .v-application .text-lg-h6 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.25rem !important;
        font-weight: 500;
        letter-spacing: .0125em !important;
        line-height: 2rem
      }

      .v-application .text-lg-subtitle-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .009375em !important;
        line-height: 1.75rem
      }

      .v-application .text-lg-subtitle-2 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important;
        font-weight: 500;
        letter-spacing: .0071428571em !important;
        line-height: 1.375rem
      }

      .v-application .text-lg-body-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .03125em !important;
        line-height: 1.5rem
      }

      .v-application .text-lg-body-2 {
        font-weight: 400;
        letter-spacing: .0178571429em !important;
        line-height: 1.25rem
      }

      .v-application .text-lg-body-2,
      .v-application .text-lg-button {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important
      }

      .v-application .text-lg-button {
        font-weight: 500;
        letter-spacing: .0892857143em !important;
        line-height: 2.25rem;
        text-transform: uppercase !important
      }

      .v-application .text-lg-caption {
        font-weight: 400;
        letter-spacing: .0333333333em !important;
        line-height: 1.25rem
      }

      .v-application .text-lg-caption,
      .v-application .text-lg-overline {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .75rem !important
      }

      .v-application .text-lg-overline {
        font-weight: 500;
        letter-spacing: .1666666667em !important;
        line-height: 2rem;
        text-transform: uppercase !important
      }
    }

    @media(min-width:1904px) {
      .v-application .d-xl-none {
        display: none !important
      }

      .v-application .d-xl-inline {
        display: inline !important
      }

      .v-application .d-xl-inline-block {
        display: inline-block !important
      }

      .v-application .d-xl-block {
        display: block !important
      }

      .v-application .d-xl-table {
        display: table !important
      }

      .v-application .d-xl-table-row {
        display: table-row !important
      }

      .v-application .d-xl-table-cell {
        display: table-cell !important
      }

      .v-application .d-xl-flex {
        display: flex !important
      }

      .v-application .d-xl-inline-flex {
        display: inline-flex !important
      }

      .v-application .float-xl-none {
        float: none !important
      }

      .v-application .float-xl-left {
        float: left !important
      }

      .v-application .float-xl-right {
        float: right !important
      }

      .v-application--is-rtl .float-xl-end {
        float: left !important
      }

      .v-application--is-ltr .float-xl-end,
      .v-application--is-rtl .float-xl-start {
        float: right !important
      }

      .v-application--is-ltr .float-xl-start {
        float: left !important
      }

      .v-application .flex-xl-fill {
        flex: 1 1 auto !important
      }

      .v-application .flex-xl-row {
        flex-direction: row !important
      }

      .v-application .flex-xl-column {
        flex-direction: column !important
      }

      .v-application .flex-xl-row-reverse {
        flex-direction: row-reverse !important
      }

      .v-application .flex-xl-column-reverse {
        flex-direction: column-reverse !important
      }

      .v-application .flex-xl-grow-0 {
        flex-grow: 0 !important
      }

      .v-application .flex-xl-grow-1 {
        flex-grow: 1 !important
      }

      .v-application .flex-xl-shrink-0 {
        flex-shrink: 0 !important
      }

      .v-application .flex-xl-shrink-1 {
        flex-shrink: 1 !important
      }

      .v-application .flex-xl-wrap {
        flex-wrap: wrap !important
      }

      .v-application .flex-xl-nowrap {
        flex-wrap: nowrap !important
      }

      .v-application .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important
      }

      .v-application .justify-xl-start {
        justify-content: flex-start !important
      }

      .v-application .justify-xl-end {
        justify-content: flex-end !important
      }

      .v-application .justify-xl-center {
        justify-content: center !important
      }

      .v-application .justify-xl-space-between {
        justify-content: space-between !important
      }

      .v-application .justify-xl-space-around {
        justify-content: space-around !important
      }

      .v-application .align-xl-start {
        align-items: flex-start !important
      }

      .v-application .align-xl-end {
        align-items: flex-end !important
      }

      .v-application .align-xl-center {
        align-items: center !important
      }

      .v-application .align-xl-baseline {
        align-items: baseline !important
      }

      .v-application .align-xl-stretch {
        align-items: stretch !important
      }

      .v-application .align-content-xl-start {
        align-content: flex-start !important
      }

      .v-application .align-content-xl-end {
        align-content: flex-end !important
      }

      .v-application .align-content-xl-center {
        align-content: center !important
      }

      .v-application .align-content-xl-space-between {
        align-content: space-between !important
      }

      .v-application .align-content-xl-space-around {
        align-content: space-around !important
      }

      .v-application .align-content-xl-stretch {
        align-content: stretch !important
      }

      .v-application .align-self-xl-auto {
        align-self: auto !important
      }

      .v-application .align-self-xl-start {
        align-self: flex-start !important
      }

      .v-application .align-self-xl-end {
        align-self: flex-end !important
      }

      .v-application .align-self-xl-center {
        align-self: center !important
      }

      .v-application .align-self-xl-baseline {
        align-self: baseline !important
      }

      .v-application .align-self-xl-stretch {
        align-self: stretch !important
      }

      .v-application .order-xl-first {
        order: -1 !important
      }

      .v-application .order-xl-0 {
        order: 0 !important
      }

      .v-application .order-xl-1 {
        order: 1 !important
      }

      .v-application .order-xl-2 {
        order: 2 !important
      }

      .v-application .order-xl-3 {
        order: 3 !important
      }

      .v-application .order-xl-4 {
        order: 4 !important
      }

      .v-application .order-xl-5 {
        order: 5 !important
      }

      .v-application .order-xl-6 {
        order: 6 !important
      }

      .v-application .order-xl-7 {
        order: 7 !important
      }

      .v-application .order-xl-8 {
        order: 8 !important
      }

      .v-application .order-xl-9 {
        order: 9 !important
      }

      .v-application .order-xl-10 {
        order: 10 !important
      }

      .v-application .order-xl-11 {
        order: 11 !important
      }

      .v-application .order-xl-12 {
        order: 12 !important
      }

      .v-application .order-xl-last {
        order: 13 !important
      }

      .v-application .ma-xl-0 {
        margin: 0 !important
      }

      .v-application .ma-xl-1 {
        margin: 4px !important
      }

      .v-application .ma-xl-2 {
        margin: 8px !important
      }

      .v-application .ma-xl-3 {
        margin: 12px !important
      }

      .v-application .ma-xl-4 {
        margin: 16px !important
      }

      .v-application .ma-xl-5 {
        margin: 20px !important
      }

      .v-application .ma-xl-6 {
        margin: 24px !important
      }

      .v-application .ma-xl-7 {
        margin: 28px !important
      }

      .v-application .ma-xl-8 {
        margin: 32px !important
      }

      .v-application .ma-xl-9 {
        margin: 36px !important
      }

      .v-application .ma-xl-10 {
        margin: 40px !important
      }

      .v-application .ma-xl-11 {
        margin: 44px !important
      }

      .v-application .ma-xl-12 {
        margin: 48px !important
      }

      .v-application .ma-xl-13 {
        margin: 52px !important
      }

      .v-application .ma-xl-14 {
        margin: 56px !important
      }

      .v-application .ma-xl-15 {
        margin: 60px !important
      }

      .v-application .ma-xl-16 {
        margin: 64px !important
      }

      .v-application .ma-xl-auto {
        margin: auto !important
      }

      .v-application .mx-xl-0 {
        margin-left: 0 !important;
        margin-right: 0 !important
      }

      .v-application .mx-xl-1 {
        margin-left: 4px !important;
        margin-right: 4px !important
      }

      .v-application .mx-xl-2 {
        margin-left: 8px !important;
        margin-right: 8px !important
      }

      .v-application .mx-xl-3 {
        margin-left: 12px !important;
        margin-right: 12px !important
      }

      .v-application .mx-xl-4 {
        margin-left: 16px !important;
        margin-right: 16px !important
      }

      .v-application .mx-xl-5 {
        margin-left: 20px !important;
        margin-right: 20px !important
      }

      .v-application .mx-xl-6 {
        margin-left: 24px !important;
        margin-right: 24px !important
      }

      .v-application .mx-xl-7 {
        margin-left: 28px !important;
        margin-right: 28px !important
      }

      .v-application .mx-xl-8 {
        margin-left: 32px !important;
        margin-right: 32px !important
      }

      .v-application .mx-xl-9 {
        margin-left: 36px !important;
        margin-right: 36px !important
      }

      .v-application .mx-xl-10 {
        margin-left: 40px !important;
        margin-right: 40px !important
      }

      .v-application .mx-xl-11 {
        margin-left: 44px !important;
        margin-right: 44px !important
      }

      .v-application .mx-xl-12 {
        margin-left: 48px !important;
        margin-right: 48px !important
      }

      .v-application .mx-xl-13 {
        margin-left: 52px !important;
        margin-right: 52px !important
      }

      .v-application .mx-xl-14 {
        margin-left: 56px !important;
        margin-right: 56px !important
      }

      .v-application .mx-xl-15 {
        margin-left: 60px !important;
        margin-right: 60px !important
      }

      .v-application .mx-xl-16 {
        margin-left: 64px !important;
        margin-right: 64px !important
      }

      .v-application .mx-xl-auto {
        margin-left: auto !important;
        margin-right: auto !important
      }

      .v-application .my-xl-0 {
        margin-bottom: 0 !important;
        margin-top: 0 !important
      }

      .v-application .my-xl-1 {
        margin-bottom: 4px !important;
        margin-top: 4px !important
      }

      .v-application .my-xl-2 {
        margin-bottom: 8px !important;
        margin-top: 8px !important
      }

      .v-application .my-xl-3 {
        margin-bottom: 12px !important;
        margin-top: 12px !important
      }

      .v-application .my-xl-4 {
        margin-bottom: 16px !important;
        margin-top: 16px !important
      }

      .v-application .my-xl-5 {
        margin-bottom: 20px !important;
        margin-top: 20px !important
      }

      .v-application .my-xl-6 {
        margin-bottom: 24px !important;
        margin-top: 24px !important
      }

      .v-application .my-xl-7 {
        margin-bottom: 28px !important;
        margin-top: 28px !important
      }

      .v-application .my-xl-8 {
        margin-bottom: 32px !important;
        margin-top: 32px !important
      }

      .v-application .my-xl-9 {
        margin-bottom: 36px !important;
        margin-top: 36px !important
      }

      .v-application .my-xl-10 {
        margin-bottom: 40px !important;
        margin-top: 40px !important
      }

      .v-application .my-xl-11 {
        margin-bottom: 44px !important;
        margin-top: 44px !important
      }

      .v-application .my-xl-12 {
        margin-bottom: 48px !important;
        margin-top: 48px !important
      }

      .v-application .my-xl-13 {
        margin-bottom: 52px !important;
        margin-top: 52px !important
      }

      .v-application .my-xl-14 {
        margin-bottom: 56px !important;
        margin-top: 56px !important
      }

      .v-application .my-xl-15 {
        margin-bottom: 60px !important;
        margin-top: 60px !important
      }

      .v-application .my-xl-16 {
        margin-bottom: 64px !important;
        margin-top: 64px !important
      }

      .v-application .my-xl-auto {
        margin-bottom: auto !important;
        margin-top: auto !important
      }

      .v-application .mt-xl-0 {
        margin-top: 0 !important
      }

      .v-application .mt-xl-1 {
        margin-top: 4px !important
      }

      .v-application .mt-xl-2 {
        margin-top: 8px !important
      }

      .v-application .mt-xl-3 {
        margin-top: 12px !important
      }

      .v-application .mt-xl-4 {
        margin-top: 16px !important
      }

      .v-application .mt-xl-5 {
        margin-top: 20px !important
      }

      .v-application .mt-xl-6 {
        margin-top: 24px !important
      }

      .v-application .mt-xl-7 {
        margin-top: 28px !important
      }

      .v-application .mt-xl-8 {
        margin-top: 32px !important
      }

      .v-application .mt-xl-9 {
        margin-top: 36px !important
      }

      .v-application .mt-xl-10 {
        margin-top: 40px !important
      }

      .v-application .mt-xl-11 {
        margin-top: 44px !important
      }

      .v-application .mt-xl-12 {
        margin-top: 48px !important
      }

      .v-application .mt-xl-13 {
        margin-top: 52px !important
      }

      .v-application .mt-xl-14 {
        margin-top: 56px !important
      }

      .v-application .mt-xl-15 {
        margin-top: 60px !important
      }

      .v-application .mt-xl-16 {
        margin-top: 64px !important
      }

      .v-application .mt-xl-auto {
        margin-top: auto !important
      }

      .v-application .mr-xl-0 {
        margin-right: 0 !important
      }

      .v-application .mr-xl-1 {
        margin-right: 4px !important
      }

      .v-application .mr-xl-2 {
        margin-right: 8px !important
      }

      .v-application .mr-xl-3 {
        margin-right: 12px !important
      }

      .v-application .mr-xl-4 {
        margin-right: 16px !important
      }

      .v-application .mr-xl-5 {
        margin-right: 20px !important
      }

      .v-application .mr-xl-6 {
        margin-right: 24px !important
      }

      .v-application .mr-xl-7 {
        margin-right: 28px !important
      }

      .v-application .mr-xl-8 {
        margin-right: 32px !important
      }

      .v-application .mr-xl-9 {
        margin-right: 36px !important
      }

      .v-application .mr-xl-10 {
        margin-right: 40px !important
      }

      .v-application .mr-xl-11 {
        margin-right: 44px !important
      }

      .v-application .mr-xl-12 {
        margin-right: 48px !important
      }

      .v-application .mr-xl-13 {
        margin-right: 52px !important
      }

      .v-application .mr-xl-14 {
        margin-right: 56px !important
      }

      .v-application .mr-xl-15 {
        margin-right: 60px !important
      }

      .v-application .mr-xl-16 {
        margin-right: 64px !important
      }

      .v-application .mr-xl-auto {
        margin-right: auto !important
      }

      .v-application .mb-xl-0 {
        margin-bottom: 0 !important
      }

      .v-application .mb-xl-1 {
        margin-bottom: 4px !important
      }

      .v-application .mb-xl-2 {
        margin-bottom: 8px !important
      }

      .v-application .mb-xl-3 {
        margin-bottom: 12px !important
      }

      .v-application .mb-xl-4 {
        margin-bottom: 16px !important
      }

      .v-application .mb-xl-5 {
        margin-bottom: 20px !important
      }

      .v-application .mb-xl-6 {
        margin-bottom: 24px !important
      }

      .v-application .mb-xl-7 {
        margin-bottom: 28px !important
      }

      .v-application .mb-xl-8 {
        margin-bottom: 32px !important
      }

      .v-application .mb-xl-9 {
        margin-bottom: 36px !important
      }

      .v-application .mb-xl-10 {
        margin-bottom: 40px !important
      }

      .v-application .mb-xl-11 {
        margin-bottom: 44px !important
      }

      .v-application .mb-xl-12 {
        margin-bottom: 48px !important
      }

      .v-application .mb-xl-13 {
        margin-bottom: 52px !important
      }

      .v-application .mb-xl-14 {
        margin-bottom: 56px !important
      }

      .v-application .mb-xl-15 {
        margin-bottom: 60px !important
      }

      .v-application .mb-xl-16 {
        margin-bottom: 64px !important
      }

      .v-application .mb-xl-auto {
        margin-bottom: auto !important
      }

      .v-application .ml-xl-0 {
        margin-left: 0 !important
      }

      .v-application .ml-xl-1 {
        margin-left: 4px !important
      }

      .v-application .ml-xl-2 {
        margin-left: 8px !important
      }

      .v-application .ml-xl-3 {
        margin-left: 12px !important
      }

      .v-application .ml-xl-4 {
        margin-left: 16px !important
      }

      .v-application .ml-xl-5 {
        margin-left: 20px !important
      }

      .v-application .ml-xl-6 {
        margin-left: 24px !important
      }

      .v-application .ml-xl-7 {
        margin-left: 28px !important
      }

      .v-application .ml-xl-8 {
        margin-left: 32px !important
      }

      .v-application .ml-xl-9 {
        margin-left: 36px !important
      }

      .v-application .ml-xl-10 {
        margin-left: 40px !important
      }

      .v-application .ml-xl-11 {
        margin-left: 44px !important
      }

      .v-application .ml-xl-12 {
        margin-left: 48px !important
      }

      .v-application .ml-xl-13 {
        margin-left: 52px !important
      }

      .v-application .ml-xl-14 {
        margin-left: 56px !important
      }

      .v-application .ml-xl-15 {
        margin-left: 60px !important
      }

      .v-application .ml-xl-16 {
        margin-left: 64px !important
      }

      .v-application .ml-xl-auto {
        margin-left: auto !important
      }

      .v-application--is-ltr .ms-xl-0 {
        margin-left: 0 !important
      }

      .v-application--is-rtl .ms-xl-0 {
        margin-right: 0 !important
      }

      .v-application--is-ltr .ms-xl-1 {
        margin-left: 4px !important
      }

      .v-application--is-rtl .ms-xl-1 {
        margin-right: 4px !important
      }

      .v-application--is-ltr .ms-xl-2 {
        margin-left: 8px !important
      }

      .v-application--is-rtl .ms-xl-2 {
        margin-right: 8px !important
      }

      .v-application--is-ltr .ms-xl-3 {
        margin-left: 12px !important
      }

      .v-application--is-rtl .ms-xl-3 {
        margin-right: 12px !important
      }

      .v-application--is-ltr .ms-xl-4 {
        margin-left: 16px !important
      }

      .v-application--is-rtl .ms-xl-4 {
        margin-right: 16px !important
      }

      .v-application--is-ltr .ms-xl-5 {
        margin-left: 20px !important
      }

      .v-application--is-rtl .ms-xl-5 {
        margin-right: 20px !important
      }

      .v-application--is-ltr .ms-xl-6 {
        margin-left: 24px !important
      }

      .v-application--is-rtl .ms-xl-6 {
        margin-right: 24px !important
      }

      .v-application--is-ltr .ms-xl-7 {
        margin-left: 28px !important
      }

      .v-application--is-rtl .ms-xl-7 {
        margin-right: 28px !important
      }

      .v-application--is-ltr .ms-xl-8 {
        margin-left: 32px !important
      }

      .v-application--is-rtl .ms-xl-8 {
        margin-right: 32px !important
      }

      .v-application--is-ltr .ms-xl-9 {
        margin-left: 36px !important
      }

      .v-application--is-rtl .ms-xl-9 {
        margin-right: 36px !important
      }

      .v-application--is-ltr .ms-xl-10 {
        margin-left: 40px !important
      }

      .v-application--is-rtl .ms-xl-10 {
        margin-right: 40px !important
      }

      .v-application--is-ltr .ms-xl-11 {
        margin-left: 44px !important
      }

      .v-application--is-rtl .ms-xl-11 {
        margin-right: 44px !important
      }

      .v-application--is-ltr .ms-xl-12 {
        margin-left: 48px !important
      }

      .v-application--is-rtl .ms-xl-12 {
        margin-right: 48px !important
      }

      .v-application--is-ltr .ms-xl-13 {
        margin-left: 52px !important
      }

      .v-application--is-rtl .ms-xl-13 {
        margin-right: 52px !important
      }

      .v-application--is-ltr .ms-xl-14 {
        margin-left: 56px !important
      }

      .v-application--is-rtl .ms-xl-14 {
        margin-right: 56px !important
      }

      .v-application--is-ltr .ms-xl-15 {
        margin-left: 60px !important
      }

      .v-application--is-rtl .ms-xl-15 {
        margin-right: 60px !important
      }

      .v-application--is-ltr .ms-xl-16 {
        margin-left: 64px !important
      }

      .v-application--is-rtl .ms-xl-16 {
        margin-right: 64px !important
      }

      .v-application--is-ltr .ms-xl-auto {
        margin-left: auto !important
      }

      .v-application--is-rtl .ms-xl-auto {
        margin-right: auto !important
      }

      .v-application--is-ltr .me-xl-0 {
        margin-right: 0 !important
      }

      .v-application--is-rtl .me-xl-0 {
        margin-left: 0 !important
      }

      .v-application--is-ltr .me-xl-1 {
        margin-right: 4px !important
      }

      .v-application--is-rtl .me-xl-1 {
        margin-left: 4px !important
      }

      .v-application--is-ltr .me-xl-2 {
        margin-right: 8px !important
      }

      .v-application--is-rtl .me-xl-2 {
        margin-left: 8px !important
      }

      .v-application--is-ltr .me-xl-3 {
        margin-right: 12px !important
      }

      .v-application--is-rtl .me-xl-3 {
        margin-left: 12px !important
      }

      .v-application--is-ltr .me-xl-4 {
        margin-right: 16px !important
      }

      .v-application--is-rtl .me-xl-4 {
        margin-left: 16px !important
      }

      .v-application--is-ltr .me-xl-5 {
        margin-right: 20px !important
      }

      .v-application--is-rtl .me-xl-5 {
        margin-left: 20px !important
      }

      .v-application--is-ltr .me-xl-6 {
        margin-right: 24px !important
      }

      .v-application--is-rtl .me-xl-6 {
        margin-left: 24px !important
      }

      .v-application--is-ltr .me-xl-7 {
        margin-right: 28px !important
      }

      .v-application--is-rtl .me-xl-7 {
        margin-left: 28px !important
      }

      .v-application--is-ltr .me-xl-8 {
        margin-right: 32px !important
      }

      .v-application--is-rtl .me-xl-8 {
        margin-left: 32px !important
      }

      .v-application--is-ltr .me-xl-9 {
        margin-right: 36px !important
      }

      .v-application--is-rtl .me-xl-9 {
        margin-left: 36px !important
      }

      .v-application--is-ltr .me-xl-10 {
        margin-right: 40px !important
      }

      .v-application--is-rtl .me-xl-10 {
        margin-left: 40px !important
      }

      .v-application--is-ltr .me-xl-11 {
        margin-right: 44px !important
      }

      .v-application--is-rtl .me-xl-11 {
        margin-left: 44px !important
      }

      .v-application--is-ltr .me-xl-12 {
        margin-right: 48px !important
      }

      .v-application--is-rtl .me-xl-12 {
        margin-left: 48px !important
      }

      .v-application--is-ltr .me-xl-13 {
        margin-right: 52px !important
      }

      .v-application--is-rtl .me-xl-13 {
        margin-left: 52px !important
      }

      .v-application--is-ltr .me-xl-14 {
        margin-right: 56px !important
      }

      .v-application--is-rtl .me-xl-14 {
        margin-left: 56px !important
      }

      .v-application--is-ltr .me-xl-15 {
        margin-right: 60px !important
      }

      .v-application--is-rtl .me-xl-15 {
        margin-left: 60px !important
      }

      .v-application--is-ltr .me-xl-16 {
        margin-right: 64px !important
      }

      .v-application--is-rtl .me-xl-16 {
        margin-left: 64px !important
      }

      .v-application--is-ltr .me-xl-auto {
        margin-right: auto !important
      }

      .v-application--is-rtl .me-xl-auto {
        margin-left: auto !important
      }

      .v-application .ma-xl-n1 {
        margin: -4px !important
      }

      .v-application .ma-xl-n2 {
        margin: -8px !important
      }

      .v-application .ma-xl-n3 {
        margin: -12px !important
      }

      .v-application .ma-xl-n4 {
        margin: -16px !important
      }

      .v-application .ma-xl-n5 {
        margin: -20px !important
      }

      .v-application .ma-xl-n6 {
        margin: -24px !important
      }

      .v-application .ma-xl-n7 {
        margin: -28px !important
      }

      .v-application .ma-xl-n8 {
        margin: -32px !important
      }

      .v-application .ma-xl-n9 {
        margin: -36px !important
      }

      .v-application .ma-xl-n10 {
        margin: -40px !important
      }

      .v-application .ma-xl-n11 {
        margin: -44px !important
      }

      .v-application .ma-xl-n12 {
        margin: -48px !important
      }

      .v-application .ma-xl-n13 {
        margin: -52px !important
      }

      .v-application .ma-xl-n14 {
        margin: -56px !important
      }

      .v-application .ma-xl-n15 {
        margin: -60px !important
      }

      .v-application .ma-xl-n16 {
        margin: -64px !important
      }

      .v-application .mx-xl-n1 {
        margin-left: -4px !important;
        margin-right: -4px !important
      }

      .v-application .mx-xl-n2 {
        margin-left: -8px !important;
        margin-right: -8px !important
      }

      .v-application .mx-xl-n3 {
        margin-left: -12px !important;
        margin-right: -12px !important
      }

      .v-application .mx-xl-n4 {
        margin-left: -16px !important;
        margin-right: -16px !important
      }

      .v-application .mx-xl-n5 {
        margin-left: -20px !important;
        margin-right: -20px !important
      }

      .v-application .mx-xl-n6 {
        margin-left: -24px !important;
        margin-right: -24px !important
      }

      .v-application .mx-xl-n7 {
        margin-left: -28px !important;
        margin-right: -28px !important
      }

      .v-application .mx-xl-n8 {
        margin-left: -32px !important;
        margin-right: -32px !important
      }

      .v-application .mx-xl-n9 {
        margin-left: -36px !important;
        margin-right: -36px !important
      }

      .v-application .mx-xl-n10 {
        margin-left: -40px !important;
        margin-right: -40px !important
      }

      .v-application .mx-xl-n11 {
        margin-left: -44px !important;
        margin-right: -44px !important
      }

      .v-application .mx-xl-n12 {
        margin-left: -48px !important;
        margin-right: -48px !important
      }

      .v-application .mx-xl-n13 {
        margin-left: -52px !important;
        margin-right: -52px !important
      }

      .v-application .mx-xl-n14 {
        margin-left: -56px !important;
        margin-right: -56px !important
      }

      .v-application .mx-xl-n15 {
        margin-left: -60px !important;
        margin-right: -60px !important
      }

      .v-application .mx-xl-n16 {
        margin-left: -64px !important;
        margin-right: -64px !important
      }

      .v-application .my-xl-n1 {
        margin-bottom: -4px !important;
        margin-top: -4px !important
      }

      .v-application .my-xl-n2 {
        margin-bottom: -8px !important;
        margin-top: -8px !important
      }

      .v-application .my-xl-n3 {
        margin-bottom: -12px !important;
        margin-top: -12px !important
      }

      .v-application .my-xl-n4 {
        margin-bottom: -16px !important;
        margin-top: -16px !important
      }

      .v-application .my-xl-n5 {
        margin-bottom: -20px !important;
        margin-top: -20px !important
      }

      .v-application .my-xl-n6 {
        margin-bottom: -24px !important;
        margin-top: -24px !important
      }

      .v-application .my-xl-n7 {
        margin-bottom: -28px !important;
        margin-top: -28px !important
      }

      .v-application .my-xl-n8 {
        margin-bottom: -32px !important;
        margin-top: -32px !important
      }

      .v-application .my-xl-n9 {
        margin-bottom: -36px !important;
        margin-top: -36px !important
      }

      .v-application .my-xl-n10 {
        margin-bottom: -40px !important;
        margin-top: -40px !important
      }

      .v-application .my-xl-n11 {
        margin-bottom: -44px !important;
        margin-top: -44px !important
      }

      .v-application .my-xl-n12 {
        margin-bottom: -48px !important;
        margin-top: -48px !important
      }

      .v-application .my-xl-n13 {
        margin-bottom: -52px !important;
        margin-top: -52px !important
      }

      .v-application .my-xl-n14 {
        margin-bottom: -56px !important;
        margin-top: -56px !important
      }

      .v-application .my-xl-n15 {
        margin-bottom: -60px !important;
        margin-top: -60px !important
      }

      .v-application .my-xl-n16 {
        margin-bottom: -64px !important;
        margin-top: -64px !important
      }

      .v-application .mt-xl-n1 {
        margin-top: -4px !important
      }

      .v-application .mt-xl-n2 {
        margin-top: -8px !important
      }

      .v-application .mt-xl-n3 {
        margin-top: -12px !important
      }

      .v-application .mt-xl-n4 {
        margin-top: -16px !important
      }

      .v-application .mt-xl-n5 {
        margin-top: -20px !important
      }

      .v-application .mt-xl-n6 {
        margin-top: -24px !important
      }

      .v-application .mt-xl-n7 {
        margin-top: -28px !important
      }

      .v-application .mt-xl-n8 {
        margin-top: -32px !important
      }

      .v-application .mt-xl-n9 {
        margin-top: -36px !important
      }

      .v-application .mt-xl-n10 {
        margin-top: -40px !important
      }

      .v-application .mt-xl-n11 {
        margin-top: -44px !important
      }

      .v-application .mt-xl-n12 {
        margin-top: -48px !important
      }

      .v-application .mt-xl-n13 {
        margin-top: -52px !important
      }

      .v-application .mt-xl-n14 {
        margin-top: -56px !important
      }

      .v-application .mt-xl-n15 {
        margin-top: -60px !important
      }

      .v-application .mt-xl-n16 {
        margin-top: -64px !important
      }

      .v-application .mr-xl-n1 {
        margin-right: -4px !important
      }

      .v-application .mr-xl-n2 {
        margin-right: -8px !important
      }

      .v-application .mr-xl-n3 {
        margin-right: -12px !important
      }

      .v-application .mr-xl-n4 {
        margin-right: -16px !important
      }

      .v-application .mr-xl-n5 {
        margin-right: -20px !important
      }

      .v-application .mr-xl-n6 {
        margin-right: -24px !important
      }

      .v-application .mr-xl-n7 {
        margin-right: -28px !important
      }

      .v-application .mr-xl-n8 {
        margin-right: -32px !important
      }

      .v-application .mr-xl-n9 {
        margin-right: -36px !important
      }

      .v-application .mr-xl-n10 {
        margin-right: -40px !important
      }

      .v-application .mr-xl-n11 {
        margin-right: -44px !important
      }

      .v-application .mr-xl-n12 {
        margin-right: -48px !important
      }

      .v-application .mr-xl-n13 {
        margin-right: -52px !important
      }

      .v-application .mr-xl-n14 {
        margin-right: -56px !important
      }

      .v-application .mr-xl-n15 {
        margin-right: -60px !important
      }

      .v-application .mr-xl-n16 {
        margin-right: -64px !important
      }

      .v-application .mb-xl-n1 {
        margin-bottom: -4px !important
      }

      .v-application .mb-xl-n2 {
        margin-bottom: -8px !important
      }

      .v-application .mb-xl-n3 {
        margin-bottom: -12px !important
      }

      .v-application .mb-xl-n4 {
        margin-bottom: -16px !important
      }

      .v-application .mb-xl-n5 {
        margin-bottom: -20px !important
      }

      .v-application .mb-xl-n6 {
        margin-bottom: -24px !important
      }

      .v-application .mb-xl-n7 {
        margin-bottom: -28px !important
      }

      .v-application .mb-xl-n8 {
        margin-bottom: -32px !important
      }

      .v-application .mb-xl-n9 {
        margin-bottom: -36px !important
      }

      .v-application .mb-xl-n10 {
        margin-bottom: -40px !important
      }

      .v-application .mb-xl-n11 {
        margin-bottom: -44px !important
      }

      .v-application .mb-xl-n12 {
        margin-bottom: -48px !important
      }

      .v-application .mb-xl-n13 {
        margin-bottom: -52px !important
      }

      .v-application .mb-xl-n14 {
        margin-bottom: -56px !important
      }

      .v-application .mb-xl-n15 {
        margin-bottom: -60px !important
      }

      .v-application .mb-xl-n16 {
        margin-bottom: -64px !important
      }

      .v-application .ml-xl-n1 {
        margin-left: -4px !important
      }

      .v-application .ml-xl-n2 {
        margin-left: -8px !important
      }

      .v-application .ml-xl-n3 {
        margin-left: -12px !important
      }

      .v-application .ml-xl-n4 {
        margin-left: -16px !important
      }

      .v-application .ml-xl-n5 {
        margin-left: -20px !important
      }

      .v-application .ml-xl-n6 {
        margin-left: -24px !important
      }

      .v-application .ml-xl-n7 {
        margin-left: -28px !important
      }

      .v-application .ml-xl-n8 {
        margin-left: -32px !important
      }

      .v-application .ml-xl-n9 {
        margin-left: -36px !important
      }

      .v-application .ml-xl-n10 {
        margin-left: -40px !important
      }

      .v-application .ml-xl-n11 {
        margin-left: -44px !important
      }

      .v-application .ml-xl-n12 {
        margin-left: -48px !important
      }

      .v-application .ml-xl-n13 {
        margin-left: -52px !important
      }

      .v-application .ml-xl-n14 {
        margin-left: -56px !important
      }

      .v-application .ml-xl-n15 {
        margin-left: -60px !important
      }

      .v-application .ml-xl-n16 {
        margin-left: -64px !important
      }

      .v-application--is-ltr .ms-xl-n1 {
        margin-left: -4px !important
      }

      .v-application--is-rtl .ms-xl-n1 {
        margin-right: -4px !important
      }

      .v-application--is-ltr .ms-xl-n2 {
        margin-left: -8px !important
      }

      .v-application--is-rtl .ms-xl-n2 {
        margin-right: -8px !important
      }

      .v-application--is-ltr .ms-xl-n3 {
        margin-left: -12px !important
      }

      .v-application--is-rtl .ms-xl-n3 {
        margin-right: -12px !important
      }

      .v-application--is-ltr .ms-xl-n4 {
        margin-left: -16px !important
      }

      .v-application--is-rtl .ms-xl-n4 {
        margin-right: -16px !important
      }

      .v-application--is-ltr .ms-xl-n5 {
        margin-left: -20px !important
      }

      .v-application--is-rtl .ms-xl-n5 {
        margin-right: -20px !important
      }

      .v-application--is-ltr .ms-xl-n6 {
        margin-left: -24px !important
      }

      .v-application--is-rtl .ms-xl-n6 {
        margin-right: -24px !important
      }

      .v-application--is-ltr .ms-xl-n7 {
        margin-left: -28px !important
      }

      .v-application--is-rtl .ms-xl-n7 {
        margin-right: -28px !important
      }

      .v-application--is-ltr .ms-xl-n8 {
        margin-left: -32px !important
      }

      .v-application--is-rtl .ms-xl-n8 {
        margin-right: -32px !important
      }

      .v-application--is-ltr .ms-xl-n9 {
        margin-left: -36px !important
      }

      .v-application--is-rtl .ms-xl-n9 {
        margin-right: -36px !important
      }

      .v-application--is-ltr .ms-xl-n10 {
        margin-left: -40px !important
      }

      .v-application--is-rtl .ms-xl-n10 {
        margin-right: -40px !important
      }

      .v-application--is-ltr .ms-xl-n11 {
        margin-left: -44px !important
      }

      .v-application--is-rtl .ms-xl-n11 {
        margin-right: -44px !important
      }

      .v-application--is-ltr .ms-xl-n12 {
        margin-left: -48px !important
      }

      .v-application--is-rtl .ms-xl-n12 {
        margin-right: -48px !important
      }

      .v-application--is-ltr .ms-xl-n13 {
        margin-left: -52px !important
      }

      .v-application--is-rtl .ms-xl-n13 {
        margin-right: -52px !important
      }

      .v-application--is-ltr .ms-xl-n14 {
        margin-left: -56px !important
      }

      .v-application--is-rtl .ms-xl-n14 {
        margin-right: -56px !important
      }

      .v-application--is-ltr .ms-xl-n15 {
        margin-left: -60px !important
      }

      .v-application--is-rtl .ms-xl-n15 {
        margin-right: -60px !important
      }

      .v-application--is-ltr .ms-xl-n16 {
        margin-left: -64px !important
      }

      .v-application--is-rtl .ms-xl-n16 {
        margin-right: -64px !important
      }

      .v-application--is-ltr .me-xl-n1 {
        margin-right: -4px !important
      }

      .v-application--is-rtl .me-xl-n1 {
        margin-left: -4px !important
      }

      .v-application--is-ltr .me-xl-n2 {
        margin-right: -8px !important
      }

      .v-application--is-rtl .me-xl-n2 {
        margin-left: -8px !important
      }

      .v-application--is-ltr .me-xl-n3 {
        margin-right: -12px !important
      }

      .v-application--is-rtl .me-xl-n3 {
        margin-left: -12px !important
      }

      .v-application--is-ltr .me-xl-n4 {
        margin-right: -16px !important
      }

      .v-application--is-rtl .me-xl-n4 {
        margin-left: -16px !important
      }

      .v-application--is-ltr .me-xl-n5 {
        margin-right: -20px !important
      }

      .v-application--is-rtl .me-xl-n5 {
        margin-left: -20px !important
      }

      .v-application--is-ltr .me-xl-n6 {
        margin-right: -24px !important
      }

      .v-application--is-rtl .me-xl-n6 {
        margin-left: -24px !important
      }

      .v-application--is-ltr .me-xl-n7 {
        margin-right: -28px !important
      }

      .v-application--is-rtl .me-xl-n7 {
        margin-left: -28px !important
      }

      .v-application--is-ltr .me-xl-n8 {
        margin-right: -32px !important
      }

      .v-application--is-rtl .me-xl-n8 {
        margin-left: -32px !important
      }

      .v-application--is-ltr .me-xl-n9 {
        margin-right: -36px !important
      }

      .v-application--is-rtl .me-xl-n9 {
        margin-left: -36px !important
      }

      .v-application--is-ltr .me-xl-n10 {
        margin-right: -40px !important
      }

      .v-application--is-rtl .me-xl-n10 {
        margin-left: -40px !important
      }

      .v-application--is-ltr .me-xl-n11 {
        margin-right: -44px !important
      }

      .v-application--is-rtl .me-xl-n11 {
        margin-left: -44px !important
      }

      .v-application--is-ltr .me-xl-n12 {
        margin-right: -48px !important
      }

      .v-application--is-rtl .me-xl-n12 {
        margin-left: -48px !important
      }

      .v-application--is-ltr .me-xl-n13 {
        margin-right: -52px !important
      }

      .v-application--is-rtl .me-xl-n13 {
        margin-left: -52px !important
      }

      .v-application--is-ltr .me-xl-n14 {
        margin-right: -56px !important
      }

      .v-application--is-rtl .me-xl-n14 {
        margin-left: -56px !important
      }

      .v-application--is-ltr .me-xl-n15 {
        margin-right: -60px !important
      }

      .v-application--is-rtl .me-xl-n15 {
        margin-left: -60px !important
      }

      .v-application--is-ltr .me-xl-n16 {
        margin-right: -64px !important
      }

      .v-application--is-rtl .me-xl-n16 {
        margin-left: -64px !important
      }

      .v-application .pa-xl-0 {
        padding: 0 !important
      }

      .v-application .pa-xl-1 {
        padding: 4px !important
      }

      .v-application .pa-xl-2 {
        padding: 8px !important
      }

      .v-application .pa-xl-3 {
        padding: 12px !important
      }

      .v-application .pa-xl-4 {
        padding: 16px !important
      }

      .v-application .pa-xl-5 {
        padding: 20px !important
      }

      .v-application .pa-xl-6 {
        padding: 24px !important
      }

      .v-application .pa-xl-7 {
        padding: 28px !important
      }

      .v-application .pa-xl-8 {
        padding: 32px !important
      }

      .v-application .pa-xl-9 {
        padding: 36px !important
      }

      .v-application .pa-xl-10 {
        padding: 40px !important
      }

      .v-application .pa-xl-11 {
        padding: 44px !important
      }

      .v-application .pa-xl-12 {
        padding: 48px !important
      }

      .v-application .pa-xl-13 {
        padding: 52px !important
      }

      .v-application .pa-xl-14 {
        padding: 56px !important
      }

      .v-application .pa-xl-15 {
        padding: 60px !important
      }

      .v-application .pa-xl-16 {
        padding: 64px !important
      }

      .v-application .px-xl-0 {
        padding-left: 0 !important;
        padding-right: 0 !important
      }

      .v-application .px-xl-1 {
        padding-left: 4px !important;
        padding-right: 4px !important
      }

      .v-application .px-xl-2 {
        padding-left: 8px !important;
        padding-right: 8px !important
      }

      .v-application .px-xl-3 {
        padding-left: 12px !important;
        padding-right: 12px !important
      }

      .v-application .px-xl-4 {
        padding-left: 16px !important;
        padding-right: 16px !important
      }

      .v-application .px-xl-5 {
        padding-left: 20px !important;
        padding-right: 20px !important
      }

      .v-application .px-xl-6 {
        padding-left: 24px !important;
        padding-right: 24px !important
      }

      .v-application .px-xl-7 {
        padding-left: 28px !important;
        padding-right: 28px !important
      }

      .v-application .px-xl-8 {
        padding-left: 32px !important;
        padding-right: 32px !important
      }

      .v-application .px-xl-9 {
        padding-left: 36px !important;
        padding-right: 36px !important
      }

      .v-application .px-xl-10 {
        padding-left: 40px !important;
        padding-right: 40px !important
      }

      .v-application .px-xl-11 {
        padding-left: 44px !important;
        padding-right: 44px !important
      }

      .v-application .px-xl-12 {
        padding-left: 48px !important;
        padding-right: 48px !important
      }

      .v-application .px-xl-13 {
        padding-left: 52px !important;
        padding-right: 52px !important
      }

      .v-application .px-xl-14 {
        padding-left: 56px !important;
        padding-right: 56px !important
      }

      .v-application .px-xl-15 {
        padding-left: 60px !important;
        padding-right: 60px !important
      }

      .v-application .px-xl-16 {
        padding-left: 64px !important;
        padding-right: 64px !important
      }

      .v-application .py-xl-0 {
        padding-bottom: 0 !important;
        padding-top: 0 !important
      }

      .v-application .py-xl-1 {
        padding-bottom: 4px !important;
        padding-top: 4px !important
      }

      .v-application .py-xl-2 {
        padding-bottom: 8px !important;
        padding-top: 8px !important
      }

      .v-application .py-xl-3 {
        padding-bottom: 12px !important;
        padding-top: 12px !important
      }

      .v-application .py-xl-4 {
        padding-bottom: 16px !important;
        padding-top: 16px !important
      }

      .v-application .py-xl-5 {
        padding-bottom: 20px !important;
        padding-top: 20px !important
      }

      .v-application .py-xl-6 {
        padding-bottom: 24px !important;
        padding-top: 24px !important
      }

      .v-application .py-xl-7 {
        padding-bottom: 28px !important;
        padding-top: 28px !important
      }

      .v-application .py-xl-8 {
        padding-bottom: 32px !important;
        padding-top: 32px !important
      }

      .v-application .py-xl-9 {
        padding-bottom: 36px !important;
        padding-top: 36px !important
      }

      .v-application .py-xl-10 {
        padding-bottom: 40px !important;
        padding-top: 40px !important
      }

      .v-application .py-xl-11 {
        padding-bottom: 44px !important;
        padding-top: 44px !important
      }

      .v-application .py-xl-12 {
        padding-bottom: 48px !important;
        padding-top: 48px !important
      }

      .v-application .py-xl-13 {
        padding-bottom: 52px !important;
        padding-top: 52px !important
      }

      .v-application .py-xl-14 {
        padding-bottom: 56px !important;
        padding-top: 56px !important
      }

      .v-application .py-xl-15 {
        padding-bottom: 60px !important;
        padding-top: 60px !important
      }

      .v-application .py-xl-16 {
        padding-bottom: 64px !important;
        padding-top: 64px !important
      }

      .v-application .pt-xl-0 {
        padding-top: 0 !important
      }

      .v-application .pt-xl-1 {
        padding-top: 4px !important
      }

      .v-application .pt-xl-2 {
        padding-top: 8px !important
      }

      .v-application .pt-xl-3 {
        padding-top: 12px !important
      }

      .v-application .pt-xl-4 {
        padding-top: 16px !important
      }

      .v-application .pt-xl-5 {
        padding-top: 20px !important
      }

      .v-application .pt-xl-6 {
        padding-top: 24px !important
      }

      .v-application .pt-xl-7 {
        padding-top: 28px !important
      }

      .v-application .pt-xl-8 {
        padding-top: 32px !important
      }

      .v-application .pt-xl-9 {
        padding-top: 36px !important
      }

      .v-application .pt-xl-10 {
        padding-top: 40px !important
      }

      .v-application .pt-xl-11 {
        padding-top: 44px !important
      }

      .v-application .pt-xl-12 {
        padding-top: 48px !important
      }

      .v-application .pt-xl-13 {
        padding-top: 52px !important
      }

      .v-application .pt-xl-14 {
        padding-top: 56px !important
      }

      .v-application .pt-xl-15 {
        padding-top: 60px !important
      }

      .v-application .pt-xl-16 {
        padding-top: 64px !important
      }

      .v-application .pr-xl-0 {
        padding-right: 0 !important
      }

      .v-application .pr-xl-1 {
        padding-right: 4px !important
      }

      .v-application .pr-xl-2 {
        padding-right: 8px !important
      }

      .v-application .pr-xl-3 {
        padding-right: 12px !important
      }

      .v-application .pr-xl-4 {
        padding-right: 16px !important
      }

      .v-application .pr-xl-5 {
        padding-right: 20px !important
      }

      .v-application .pr-xl-6 {
        padding-right: 24px !important
      }

      .v-application .pr-xl-7 {
        padding-right: 28px !important
      }

      .v-application .pr-xl-8 {
        padding-right: 32px !important
      }

      .v-application .pr-xl-9 {
        padding-right: 36px !important
      }

      .v-application .pr-xl-10 {
        padding-right: 40px !important
      }

      .v-application .pr-xl-11 {
        padding-right: 44px !important
      }

      .v-application .pr-xl-12 {
        padding-right: 48px !important
      }

      .v-application .pr-xl-13 {
        padding-right: 52px !important
      }

      .v-application .pr-xl-14 {
        padding-right: 56px !important
      }

      .v-application .pr-xl-15 {
        padding-right: 60px !important
      }

      .v-application .pr-xl-16 {
        padding-right: 64px !important
      }

      .v-application .pb-xl-0 {
        padding-bottom: 0 !important
      }

      .v-application .pb-xl-1 {
        padding-bottom: 4px !important
      }

      .v-application .pb-xl-2 {
        padding-bottom: 8px !important
      }

      .v-application .pb-xl-3 {
        padding-bottom: 12px !important
      }

      .v-application .pb-xl-4 {
        padding-bottom: 16px !important
      }

      .v-application .pb-xl-5 {
        padding-bottom: 20px !important
      }

      .v-application .pb-xl-6 {
        padding-bottom: 24px !important
      }

      .v-application .pb-xl-7 {
        padding-bottom: 28px !important
      }

      .v-application .pb-xl-8 {
        padding-bottom: 32px !important
      }

      .v-application .pb-xl-9 {
        padding-bottom: 36px !important
      }

      .v-application .pb-xl-10 {
        padding-bottom: 40px !important
      }

      .v-application .pb-xl-11 {
        padding-bottom: 44px !important
      }

      .v-application .pb-xl-12 {
        padding-bottom: 48px !important
      }

      .v-application .pb-xl-13 {
        padding-bottom: 52px !important
      }

      .v-application .pb-xl-14 {
        padding-bottom: 56px !important
      }

      .v-application .pb-xl-15 {
        padding-bottom: 60px !important
      }

      .v-application .pb-xl-16 {
        padding-bottom: 64px !important
      }

      .v-application .pl-xl-0 {
        padding-left: 0 !important
      }

      .v-application .pl-xl-1 {
        padding-left: 4px !important
      }

      .v-application .pl-xl-2 {
        padding-left: 8px !important
      }

      .v-application .pl-xl-3 {
        padding-left: 12px !important
      }

      .v-application .pl-xl-4 {
        padding-left: 16px !important
      }

      .v-application .pl-xl-5 {
        padding-left: 20px !important
      }

      .v-application .pl-xl-6 {
        padding-left: 24px !important
      }

      .v-application .pl-xl-7 {
        padding-left: 28px !important
      }

      .v-application .pl-xl-8 {
        padding-left: 32px !important
      }

      .v-application .pl-xl-9 {
        padding-left: 36px !important
      }

      .v-application .pl-xl-10 {
        padding-left: 40px !important
      }

      .v-application .pl-xl-11 {
        padding-left: 44px !important
      }

      .v-application .pl-xl-12 {
        padding-left: 48px !important
      }

      .v-application .pl-xl-13 {
        padding-left: 52px !important
      }

      .v-application .pl-xl-14 {
        padding-left: 56px !important
      }

      .v-application .pl-xl-15 {
        padding-left: 60px !important
      }

      .v-application .pl-xl-16 {
        padding-left: 64px !important
      }

      .v-application--is-ltr .ps-xl-0 {
        padding-left: 0 !important
      }

      .v-application--is-rtl .ps-xl-0 {
        padding-right: 0 !important
      }

      .v-application--is-ltr .ps-xl-1 {
        padding-left: 4px !important
      }

      .v-application--is-rtl .ps-xl-1 {
        padding-right: 4px !important
      }

      .v-application--is-ltr .ps-xl-2 {
        padding-left: 8px !important
      }

      .v-application--is-rtl .ps-xl-2 {
        padding-right: 8px !important
      }

      .v-application--is-ltr .ps-xl-3 {
        padding-left: 12px !important
      }

      .v-application--is-rtl .ps-xl-3 {
        padding-right: 12px !important
      }

      .v-application--is-ltr .ps-xl-4 {
        padding-left: 16px !important
      }

      .v-application--is-rtl .ps-xl-4 {
        padding-right: 16px !important
      }

      .v-application--is-ltr .ps-xl-5 {
        padding-left: 20px !important
      }

      .v-application--is-rtl .ps-xl-5 {
        padding-right: 20px !important
      }

      .v-application--is-ltr .ps-xl-6 {
        padding-left: 24px !important
      }

      .v-application--is-rtl .ps-xl-6 {
        padding-right: 24px !important
      }

      .v-application--is-ltr .ps-xl-7 {
        padding-left: 28px !important
      }

      .v-application--is-rtl .ps-xl-7 {
        padding-right: 28px !important
      }

      .v-application--is-ltr .ps-xl-8 {
        padding-left: 32px !important
      }

      .v-application--is-rtl .ps-xl-8 {
        padding-right: 32px !important
      }

      .v-application--is-ltr .ps-xl-9 {
        padding-left: 36px !important
      }

      .v-application--is-rtl .ps-xl-9 {
        padding-right: 36px !important
      }

      .v-application--is-ltr .ps-xl-10 {
        padding-left: 40px !important
      }

      .v-application--is-rtl .ps-xl-10 {
        padding-right: 40px !important
      }

      .v-application--is-ltr .ps-xl-11 {
        padding-left: 44px !important
      }

      .v-application--is-rtl .ps-xl-11 {
        padding-right: 44px !important
      }

      .v-application--is-ltr .ps-xl-12 {
        padding-left: 48px !important
      }

      .v-application--is-rtl .ps-xl-12 {
        padding-right: 48px !important
      }

      .v-application--is-ltr .ps-xl-13 {
        padding-left: 52px !important
      }

      .v-application--is-rtl .ps-xl-13 {
        padding-right: 52px !important
      }

      .v-application--is-ltr .ps-xl-14 {
        padding-left: 56px !important
      }

      .v-application--is-rtl .ps-xl-14 {
        padding-right: 56px !important
      }

      .v-application--is-ltr .ps-xl-15 {
        padding-left: 60px !important
      }

      .v-application--is-rtl .ps-xl-15 {
        padding-right: 60px !important
      }

      .v-application--is-ltr .ps-xl-16 {
        padding-left: 64px !important
      }

      .v-application--is-rtl .ps-xl-16 {
        padding-right: 64px !important
      }

      .v-application--is-ltr .pe-xl-0 {
        padding-right: 0 !important
      }

      .v-application--is-rtl .pe-xl-0 {
        padding-left: 0 !important
      }

      .v-application--is-ltr .pe-xl-1 {
        padding-right: 4px !important
      }

      .v-application--is-rtl .pe-xl-1 {
        padding-left: 4px !important
      }

      .v-application--is-ltr .pe-xl-2 {
        padding-right: 8px !important
      }

      .v-application--is-rtl .pe-xl-2 {
        padding-left: 8px !important
      }

      .v-application--is-ltr .pe-xl-3 {
        padding-right: 12px !important
      }

      .v-application--is-rtl .pe-xl-3 {
        padding-left: 12px !important
      }

      .v-application--is-ltr .pe-xl-4 {
        padding-right: 16px !important
      }

      .v-application--is-rtl .pe-xl-4 {
        padding-left: 16px !important
      }

      .v-application--is-ltr .pe-xl-5 {
        padding-right: 20px !important
      }

      .v-application--is-rtl .pe-xl-5 {
        padding-left: 20px !important
      }

      .v-application--is-ltr .pe-xl-6 {
        padding-right: 24px !important
      }

      .v-application--is-rtl .pe-xl-6 {
        padding-left: 24px !important
      }

      .v-application--is-ltr .pe-xl-7 {
        padding-right: 28px !important
      }

      .v-application--is-rtl .pe-xl-7 {
        padding-left: 28px !important
      }

      .v-application--is-ltr .pe-xl-8 {
        padding-right: 32px !important
      }

      .v-application--is-rtl .pe-xl-8 {
        padding-left: 32px !important
      }

      .v-application--is-ltr .pe-xl-9 {
        padding-right: 36px !important
      }

      .v-application--is-rtl .pe-xl-9 {
        padding-left: 36px !important
      }

      .v-application--is-ltr .pe-xl-10 {
        padding-right: 40px !important
      }

      .v-application--is-rtl .pe-xl-10 {
        padding-left: 40px !important
      }

      .v-application--is-ltr .pe-xl-11 {
        padding-right: 44px !important
      }

      .v-application--is-rtl .pe-xl-11 {
        padding-left: 44px !important
      }

      .v-application--is-ltr .pe-xl-12 {
        padding-right: 48px !important
      }

      .v-application--is-rtl .pe-xl-12 {
        padding-left: 48px !important
      }

      .v-application--is-ltr .pe-xl-13 {
        padding-right: 52px !important
      }

      .v-application--is-rtl .pe-xl-13 {
        padding-left: 52px !important
      }

      .v-application--is-ltr .pe-xl-14 {
        padding-right: 56px !important
      }

      .v-application--is-rtl .pe-xl-14 {
        padding-left: 56px !important
      }

      .v-application--is-ltr .pe-xl-15 {
        padding-right: 60px !important
      }

      .v-application--is-rtl .pe-xl-15 {
        padding-left: 60px !important
      }

      .v-application--is-ltr .pe-xl-16 {
        padding-right: 64px !important
      }

      .v-application--is-rtl .pe-xl-16 {
        padding-left: 64px !important
      }

      .v-application .text-xl-left {
        text-align: left !important
      }

      .v-application .text-xl-right {
        text-align: right !important
      }

      .v-application .text-xl-center {
        text-align: center !important
      }

      .v-application .text-xl-justify {
        text-align: justify !important
      }

      .v-application .text-xl-start {
        text-align: left !important
      }

      .v-application .text-xl-end {
        text-align: right !important
      }

      .v-application .text-xl-h1 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 6rem !important;
        font-weight: 300;
        letter-spacing: -.015625em !important;
        line-height: 6rem
      }

      .v-application .text-xl-h2 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3.75rem !important;
        font-weight: 300;
        letter-spacing: -.0083333333em !important;
        line-height: 3.75rem
      }

      .v-application .text-xl-h3 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 3rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 3.125rem
      }

      .v-application .text-xl-h4 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 2.125rem !important;
        font-weight: 400;
        letter-spacing: .0073529412em !important;
        line-height: 2.5rem
      }

      .v-application .text-xl-h5 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.5rem !important;
        font-weight: 400;
        letter-spacing: normal !important;
        line-height: 2rem
      }

      .v-application .text-xl-h6 {
        font-family: "TT Norms Pro Serif Medium" !important;
        font-size: 1.25rem !important;
        font-weight: 500;
        letter-spacing: .0125em !important;
        line-height: 2rem
      }

      .v-application .text-xl-subtitle-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .009375em !important;
        line-height: 1.75rem
      }

      .v-application .text-xl-subtitle-2 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important;
        font-weight: 500;
        letter-spacing: .0071428571em !important;
        line-height: 1.375rem
      }

      .v-application .text-xl-body-1 {
        font-family: "TT Norms Pro Regular" !important;
        font-size: 1rem !important;
        font-weight: 400;
        letter-spacing: .03125em !important;
        line-height: 1.5rem
      }

      .v-application .text-xl-body-2 {
        font-weight: 400;
        letter-spacing: .0178571429em !important;
        line-height: 1.25rem
      }

      .v-application .text-xl-body-2,
      .v-application .text-xl-button {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .875rem !important
      }

      .v-application .text-xl-button {
        font-weight: 500;
        letter-spacing: .0892857143em !important;
        line-height: 2.25rem;
        text-transform: uppercase !important
      }

      .v-application .text-xl-caption {
        font-weight: 400;
        letter-spacing: .0333333333em !important;
        line-height: 1.25rem
      }

      .v-application .text-xl-caption,
      .v-application .text-xl-overline {
        font-family: "TT Norms Pro Regular" !important;
        font-size: .75rem !important
      }

      .v-application .text-xl-overline {
        font-weight: 500;
        letter-spacing: .1666666667em !important;
        line-height: 2rem;
        text-transform: uppercase !important
      }
    }

    @media print {
      .v-application .d-print-none {
        display: none !important
      }

      .v-application .d-print-inline {
        display: inline !important
      }

      .v-application .d-print-inline-block {
        display: inline-block !important
      }

      .v-application .d-print-block {
        display: block !important
      }

      .v-application .d-print-table {
        display: table !important
      }

      .v-application .d-print-table-row {
        display: table-row !important
      }

      .v-application .d-print-table-cell {
        display: table-cell !important
      }

      .v-application .d-print-flex {
        display: flex !important
      }

      .v-application .d-print-inline-flex {
        display: inline-flex !important
      }

      .v-application .float-print-none {
        float: none !important
      }

      .v-application .float-print-left {
        float: left !important
      }

      .v-application .float-print-right {
        float: right !important
      }

      .v-application--is-rtl .float-print-end {
        float: left !important
      }

      .v-application--is-ltr .float-print-end,
      .v-application--is-rtl .float-print-start {
        float: right !important
      }

      .v-application--is-ltr .float-print-start {
        float: left !important
      }
    }

    .theme--light.v-icon {
      color: rgba(0, 0, 0, .54)
    }

    .theme--light.v-icon:focus:after {
      opacity: .12
    }

    .theme--light.v-icon.v-icon.v-icon--disabled {
      color: rgba(0, 0, 0, .38) !important
    }

    .theme--dark.v-icon {
      color: #fff
    }

    .theme--dark.v-icon:focus:after {
      opacity: .24
    }

    .theme--dark.v-icon.v-icon.v-icon--disabled {
      color: hsla(0, 0%, 100%, .5) !important
    }

    .v-icon.v-icon {
      font-feature-settings: "liga";
      align-items: center;
      display: inline-flex;
      font-size: 24px;
      justify-content: center;
      letter-spacing: normal;
      line-height: 1;
      position: relative;
      text-indent: 0;
      transition: .3s cubic-bezier(.25, .8, .5, 1), visibility 0s;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      vertical-align: middle
    }

    .v-icon.v-icon:after {
      background-color: currentColor;
      border-radius: 50%;
      content: "";
      display: inline-block;
      height: 100%;
      left: 0;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      top: 0;
      transform: scale(1.3);
      transition: opacity .2s cubic-bezier(.4, 0, .6, 1);
      width: 100%
    }

    .v-icon.v-icon--dense {
      font-size: 20px
    }

    .v-icon--right {
      margin-left: 8px
    }

    .v-icon--left {
      margin-right: 8px
    }

    .v-icon.v-icon.v-icon--link {
      cursor: pointer;
      outline: 0
    }

    .v-icon--disabled {
      pointer-events: none
    }

    .v-icon--dense .v-icon__component,
    .v-icon--dense .v-icon__svg {
      height: 20px
    }

    .v-icon__component,
    .v-icon__svg {
      height: 24px;
      width: 24px
    }

    .v-icon__svg {
      fill: currentColor
    }

    .v-main {
      display: flex;
      flex: 1 0 auto;
      max-width: 100%;
      transition: .2s cubic-bezier(.4, 0, .2, 1)
    }

    .v-main:not([data-booted=true]) {
      transition: none !important
    }

    .v-main__wrap {
      flex: 1 1 auto;
      max-width: 100%;
      position: relative
    }

    @-moz-document url-prefix() {
      @media print {
        .v-main {
          display: block
        }
      }
    }

    .theme--light.v-overlay {
      color: rgba(0, 0, 0, .87)
    }

    .theme--dark.v-overlay {
      color: #fff
    }

    .v-overlay {
      align-items: center;
      border-radius: inherit;
      bottom: 0;
      display: flex;
      justify-content: center;
      left: 0;
      pointer-events: none;
      position: fixed;
      right: 0;
      top: 0;
      transition: .3s cubic-bezier(.25, .8, .5, 1), z-index 1ms
    }

    .v-overlay__content {
      position: relative
    }

    .v-overlay__scrim {
      border-radius: inherit;
      bottom: 0;
      height: 100%;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      transition: inherit;
      width: 100%;
      will-change: opacity
    }

    .v-overlay--absolute {
      position: absolute
    }

    .v-overlay--active {
      pointer-events: auto
    }

    .theme--light.v-card {
      background-color: #fff;
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-card>.v-card__subtitle,
    .theme--light.v-card>.v-card__text {
      color: rgba(0, 0, 0, .6)
    }

    .theme--dark.v-card {
      background-color: #1e1e1e;
      color: #fff
    }

    .theme--dark.v-card>.v-card__subtitle,
    .theme--dark.v-card>.v-card__text {
      color: hsla(0, 0%, 100%, .7)
    }

    .v-sheet.v-card {
      border-radius: 4px
    }

    .v-sheet.v-card:not(.v-sheet--outlined) {
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    .v-sheet.v-card.v-sheet--shaped {
      border-radius: 24px 4px
    }

    .v-card {
      word-wrap: break-word;
      border-width: thin;
      display: block;
      max-width: 100%;
      outline: 0;
      position: relative;
      -webkit-text-decoration: none;
      text-decoration: none;
      transition-property: box-shadow, opacity;
      white-space: normal
    }

    .v-card>.v-card__progress+:not(.v-btn):not(.v-chip):not(.v-avatar),
    .v-card>:first-child:not(.v-btn):not(.v-chip):not(.v-avatar) {
      border-top-left-radius: inherit;
      border-top-right-radius: inherit
    }

    .v-card>:last-child:not(.v-btn):not(.v-chip):not(.v-avatar) {
      border-bottom-left-radius: inherit;
      border-bottom-right-radius: inherit
    }

    .v-card__progress {
      left: 0;
      overflow: hidden;
      right: 0;
      top: 0
    }

    .v-card__subtitle+.v-card__text {
      padding-top: 0
    }

    .v-card__subtitle,
    .v-card__text {
      font-size: .875rem;
      font-weight: 400;
      letter-spacing: .0071428571em;
      line-height: 1.375rem
    }

    .v-card__subtitle,
    .v-card__text,
    .v-card__title {
      padding: 16px
    }

    .v-card__title {
      align-items: center;
      display: flex;
      flex-wrap: wrap;
      font-size: 1.25rem;
      font-weight: 500;
      letter-spacing: .0125em;
      line-height: 2rem;
      word-break: break-all
    }

    .v-card__title+.v-card__subtitle,
    .v-card__title+.v-card__text {
      padding-top: 0
    }

    .v-card__title+.v-card__subtitle {
      margin-top: -16px
    }

    .v-card__text {
      width: 100%
    }

    .v-card__actions {
      align-items: center;
      display: flex;
      padding: 8px
    }

    .v-card__actions>.v-btn.v-btn {
      padding: 0 8px
    }

    .v-application--is-ltr .v-card__actions>.v-btn.v-btn+.v-btn {
      margin-left: 8px
    }

    .v-application--is-ltr .v-card__actions>.v-btn.v-btn .v-icon--left {
      margin-left: 4px
    }

    .v-application--is-ltr .v-card__actions>.v-btn.v-btn .v-icon--right {
      margin-right: 4px
    }

    .v-application--is-rtl .v-card__actions>.v-btn.v-btn+.v-btn {
      margin-right: 8px
    }

    .v-application--is-rtl .v-card__actions>.v-btn.v-btn .v-icon--left {
      margin-right: 4px
    }

    .v-application--is-rtl .v-card__actions>.v-btn.v-btn .v-icon--right {
      margin-left: 4px
    }

    .v-card--flat {
      box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12) !important
    }

    .v-sheet.v-card--hover {
      cursor: pointer;
      transition: box-shadow .4s cubic-bezier(.25, .8, .25, 1)
    }

    .v-sheet.v-card--hover:focus,
    .v-sheet.v-card--hover:hover {
      box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .v-card--link,
    .v-card--link .v-chip {
      cursor: pointer
    }

    .v-card--link:focus:before {
      opacity: .08
    }

    .v-card--link:before {
      background: currentColor;
      bottom: 0;
      content: "";
      left: 0;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      right: 0;
      top: 0;
      transition: opacity .2s
    }

    .v-card--disabled {
      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-card--disabled>:not(.v-card__progress) {
      opacity: .6;
      transition: inherit
    }

    .v-card--loading {
      overflow: hidden
    }

    .v-card--raised {
      box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .theme--light.v-progress-linear {
      color: rgba(0, 0, 0, .87)
    }

    .theme--dark.v-progress-linear {
      color: #fff
    }

    .v-progress-linear {
      background: 0 0;
      overflow: hidden;
      position: relative;
      transition: .2s cubic-bezier(.4, 0, .6, 1);
      width: 100%
    }

    .v-progress-linear__buffer {
      height: inherit;
      left: 0;
      position: absolute;
      top: 0;
      transition: inherit;
      width: 100%
    }

    .v-progress-linear--reverse .v-progress-linear__buffer {
      left: auto;
      right: 0
    }

    .v-progress-linear__background {
      bottom: 0;
      left: 0;
      position: absolute;
      top: 0;
      transition: inherit
    }

    .v-progress-linear--reverse .v-progress-linear__background {
      left: auto;
      right: 0
    }

    .v-progress-linear__content {
      align-items: center;
      display: flex;
      height: 100%;
      justify-content: center;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%
    }

    .v-progress-linear--reverse .v-progress-linear__content {
      left: auto;
      right: 0
    }

    .v-progress-linear__determinate {
      height: inherit;
      left: 0;
      position: absolute;
      transition: inherit
    }

    .v-progress-linear--reverse .v-progress-linear__determinate {
      left: auto;
      right: 0
    }

    .v-progress-linear .v-progress-linear__indeterminate .long,
    .v-progress-linear .v-progress-linear__indeterminate .short {
      animation-play-state: paused;
      background-color: inherit;
      bottom: 0;
      height: inherit;
      left: 0;
      position: absolute;
      right: auto;
      top: 0;
      width: auto;
      will-change: left, right
    }

    .v-progress-linear .v-progress-linear__indeterminate--active .long {
      animation-duration: 2.2s;
      animation-iteration-count: infinite;
      animation-name: indeterminate-ltr
    }

    .v-progress-linear .v-progress-linear__indeterminate--active .short {
      animation-duration: 2.2s;
      animation-iteration-count: infinite;
      animation-name: indeterminate-short-ltr
    }

    .v-progress-linear--reverse .v-progress-linear__indeterminate .long,
    .v-progress-linear--reverse .v-progress-linear__indeterminate .short {
      left: auto;
      right: 0
    }

    .v-progress-linear--reverse .v-progress-linear__indeterminate--active .long {
      animation-name: indeterminate-rtl
    }

    .v-progress-linear--reverse .v-progress-linear__indeterminate--active .short {
      animation-name: indeterminate-short-rtl
    }

    .v-progress-linear__stream {
      animation: stream-ltr .25s linear infinite;
      animation-play-state: paused;
      border-color: currentColor;
      border-top: 4px dotted;
      bottom: 0;
      left: auto;
      opacity: .3;
      pointer-events: none;
      position: absolute;
      right: -8px;
      top: calc(50% - 2px);
      transition: inherit
    }

    .v-progress-linear--reverse .v-progress-linear__stream {
      animation: stream-rtl .25s linear infinite;
      left: -8px;
      right: auto
    }

    .v-progress-linear__wrapper {
      overflow: hidden;
      position: relative;
      transition: inherit
    }

    .v-progress-linear--absolute,
    .v-progress-linear--fixed {
      left: 0;
      z-index: 1
    }

    .v-progress-linear--absolute {
      position: absolute
    }

    .v-progress-linear--fixed {
      position: fixed
    }

    .v-progress-linear--reactive .v-progress-linear__content {
      pointer-events: none
    }

    .v-progress-linear--rounded {
      border-radius: 4px
    }

    .v-progress-linear--striped .v-progress-linear__determinate {
      background-image: linear-gradient(135deg, hsla(0, 0%, 100%, .25) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .25) 0, hsla(0, 0%, 100%, .25) 75%, transparent 0, transparent);
      background-repeat: repeat;
      background-size: 40px 40px
    }

    .v-progress-linear--query .v-progress-linear__indeterminate--active .long {
      animation-duration: 2s;
      animation-iteration-count: infinite;
      animation-name: query-ltr
    }

    .v-progress-linear--query .v-progress-linear__indeterminate--active .short {
      animation-duration: 2s;
      animation-iteration-count: infinite;
      animation-name: query-short-ltr
    }

    .v-progress-linear--query.v-progress-linear--reverse .v-progress-linear__indeterminate--active .long {
      animation-name: query-rtl
    }

    .v-progress-linear--query.v-progress-linear--reverse .v-progress-linear__indeterminate--active .short {
      animation-name: query-short-rtl
    }

    .v-progress-linear--visible .v-progress-linear__indeterminate--active .long,
    .v-progress-linear--visible .v-progress-linear__indeterminate--active .short,
    .v-progress-linear--visible .v-progress-linear__stream {
      animation-play-state: running
    }

    @keyframes indeterminate-ltr {
      0% {
        left: -90%;
        right: 100%
      }

      60% {
        left: -90%;
        right: 100%
      }

      to {
        left: 100%;
        right: -35%
      }
    }

    @keyframes indeterminate-rtl {
      0% {
        left: 100%;
        right: -90%
      }

      60% {
        left: 100%;
        right: -90%
      }

      to {
        left: -35%;
        right: 100%
      }
    }

    @keyframes indeterminate-short-ltr {
      0% {
        left: -200%;
        right: 100%
      }

      60% {
        left: 107%;
        right: -8%
      }

      to {
        left: 107%;
        right: -8%
      }
    }

    @keyframes indeterminate-short-rtl {
      0% {
        left: 100%;
        right: -200%
      }

      60% {
        left: -8%;
        right: 107%
      }

      to {
        left: -8%;
        right: 107%
      }
    }

    @keyframes query-ltr {
      0% {
        left: 100%;
        right: -90%
      }

      60% {
        left: 100%;
        right: -90%
      }

      to {
        left: -35%;
        right: 100%
      }
    }

    @keyframes query-rtl {
      0% {
        left: -90%;
        right: 100%
      }

      60% {
        left: -90%;
        right: 100%
      }

      to {
        left: 100%;
        right: -35%
      }
    }

    @keyframes query-short-ltr {
      0% {
        left: 100%;
        right: -200%
      }

      60% {
        left: -8%;
        right: 107%
      }

      to {
        left: -8%;
        right: 107%
      }
    }

    @keyframes query-short-rtl {
      0% {
        left: -200%;
        right: 100%
      }

      60% {
        left: 107%;
        right: -8%
      }

      to {
        left: 107%;
        right: -8%
      }
    }

    @keyframes stream-ltr {
      to {
        transform: translateX(-8px)
      }
    }

    @keyframes stream-rtl {
      to {
        transform: translateX(8px)
      }
    }

    .v-ripple__container {
      border-radius: inherit;
      contain: strict;
      height: 100%;
      width: 100%;
      z-index: 0
    }

    .v-ripple__animation,
    .v-ripple__container {
      color: inherit;
      left: 0;
      overflow: hidden;
      pointer-events: none;
      position: absolute;
      top: 0
    }

    .v-ripple__animation {
      background: currentColor;
      border-radius: 50%;
      opacity: 0;
      will-change: transform, opacity
    }

    .v-ripple__animation--enter {
      opacity: 0;
      transition: none
    }

    .v-ripple__animation--in {
      opacity: .25;
      transition: transform .25s cubic-bezier(.4, 0, .2, 1), opacity .1s cubic-bezier(.4, 0, .2, 1)
    }

    .v-ripple__animation--out {
      opacity: 0;
      transition: opacity .3s cubic-bezier(.4, 0, .2, 1)
    }

    .v-dialog {
      border-radius: 4px;
      box-shadow: 0 11px 15px -7px rgba(0, 0, 0, .2), 0 24px 38px 3px rgba(0, 0, 0, .14), 0 9px 46px 8px rgba(0, 0, 0, .12);
      margin: 24px;
      outline: 0;
      overflow-y: auto;
      pointer-events: auto;
      transition: .3s cubic-bezier(.25, .8, .25, 1);
      width: 100%;
      z-index: inherit
    }

    .v-dialog:not(.v-dialog--fullscreen) {
      max-height: 90%
    }

    .v-dialog>* {
      width: 100%
    }

    .v-dialog>.v-card>.v-card__title {
      font-size: 1.25rem;
      font-weight: 500;
      letter-spacing: .0125em;
      padding: 16px 24px 10px
    }

    .v-dialog>.v-card>.v-card__subtitle,
    .v-dialog>.v-card>.v-card__text {
      padding: 0 24px 20px
    }

    .v-dialog>.v-card>.v-card__actions {
      padding: 8px 16px
    }

    .v-dialog__content {
      align-items: center;
      display: flex;
      height: 100%;
      justify-content: center;
      left: 0;
      pointer-events: none;
      position: fixed;
      top: 0;
      transition: .2s cubic-bezier(.25, .8, .25, 1), z-index 1ms;
      width: 100%;
      z-index: 6
    }

    .v-dialog__container {
      display: none
    }

    .v-dialog__container--attached {
      display: inline
    }

    .v-dialog--animated {
      animation-duration: .15s;
      animation-name: animate-dialog;
      animation-timing-function: cubic-bezier(.25, .8, .25, 1)
    }

    .v-dialog--fullscreen {
      border-radius: 0;
      height: 100%;
      left: 0;
      margin: 0;
      overflow-y: auto;
      position: fixed;
      top: 0
    }

    .v-dialog--fullscreen>.v-card {
      margin: 0 !important;
      min-height: 100%;
      min-width: 100%;
      padding: 0 !important
    }

    .v-dialog--scrollable,
    .v-dialog--scrollable>form {
      display: flex
    }

    .v-dialog--scrollable>.v-card,
    .v-dialog--scrollable>form>.v-card {
      display: flex;
      flex: 1 1 100%;
      flex-direction: column;
      max-height: 100%;
      max-width: 100%
    }

    .v-dialog--scrollable>.v-card>.v-card__actions,
    .v-dialog--scrollable>.v-card>.v-card__title,
    .v-dialog--scrollable>form>.v-card>.v-card__actions,
    .v-dialog--scrollable>form>.v-card>.v-card__title {
      flex: 0 0 auto
    }

    .v-dialog--scrollable>.v-card>.v-card__text,
    .v-dialog--scrollable>form>.v-card>.v-card__text {
      backface-visibility: hidden;
      flex: 1 1 auto;
      overflow-y: auto
    }

    @keyframes animate-dialog {
      0% {
        transform: scale(1)
      }

      50% {
        transform: scale(1.03)
      }

      to {
        transform: scale(1)
      }
    }

    .theme--light.v-toolbar.v-sheet {
      background-color: #fff
    }

    .theme--dark.v-toolbar.v-sheet {
      background-color: #272727
    }

    .v-sheet.v-toolbar {
      border-radius: 0
    }

    .v-sheet.v-toolbar:not(.v-sheet--outlined) {
      box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
    }

    .v-sheet.v-toolbar.v-sheet--shaped {
      border-radius: 24px 0
    }

    .v-toolbar {
      box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12);
      contain: layout;
      display: block;
      flex: 1 1 auto;
      max-width: 100%;
      position: relative;
      transition: transform .2s cubic-bezier(.4, 0, .2, 1), background-color .2s cubic-bezier(.4, 0, .2, 1), left .2s cubic-bezier(.4, 0, .2, 1), right .2s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1), max-width .25s cubic-bezier(.4, 0, .2, 1), width .25s cubic-bezier(.4, 0, .2, 1)
    }

    .v-toolbar .v-input {
      margin-top: 0;
      padding-top: 0
    }

    .v-toolbar__content,
    .v-toolbar__extension {
      padding: 4px 16px
    }

    .v-toolbar__content .v-btn.v-btn--icon.v-size--default,
    .v-toolbar__extension .v-btn.v-btn--icon.v-size--default {
      height: 48px;
      width: 48px
    }

    .v-application--is-ltr .v-toolbar__content>.v-btn.v-btn--icon:first-child,
    .v-application--is-ltr .v-toolbar__extension>.v-btn.v-btn--icon:first-child {
      margin-left: -12px
    }

    .v-application--is-rtl .v-toolbar__content>.v-btn.v-btn--icon:first-child,
    .v-application--is-rtl .v-toolbar__extension>.v-btn.v-btn--icon:first-child {
      margin-right: -12px
    }

    .v-application--is-ltr .v-toolbar__content>.v-btn.v-btn--icon:first-child+.v-toolbar__title,
    .v-application--is-ltr .v-toolbar__extension>.v-btn.v-btn--icon:first-child+.v-toolbar__title {
      padding-left: 20px
    }

    .v-application--is-rtl .v-toolbar__content>.v-btn.v-btn--icon:first-child+.v-toolbar__title,
    .v-application--is-rtl .v-toolbar__extension>.v-btn.v-btn--icon:first-child+.v-toolbar__title {
      padding-right: 20px
    }

    .v-application--is-ltr .v-toolbar__content>.v-btn.v-btn--icon:last-child,
    .v-application--is-ltr .v-toolbar__extension>.v-btn.v-btn--icon:last-child {
      margin-right: -12px
    }

    .v-application--is-rtl .v-toolbar__content>.v-btn.v-btn--icon:last-child,
    .v-application--is-rtl .v-toolbar__extension>.v-btn.v-btn--icon:last-child {
      margin-left: -12px
    }

    .v-toolbar__content>.v-tabs,
    .v-toolbar__extension>.v-tabs {
      height: inherit;
      margin-bottom: -4px;
      margin-top: -4px
    }

    .v-toolbar__content>.v-tabs>.v-slide-group.v-tabs-bar,
    .v-toolbar__extension>.v-tabs>.v-slide-group.v-tabs-bar {
      background-color: inherit;
      height: inherit
    }

    .v-toolbar__content>.v-tabs:first-child,
    .v-toolbar__extension>.v-tabs:first-child {
      margin-left: -16px
    }

    .v-toolbar__content>.v-tabs:last-child,
    .v-toolbar__extension>.v-tabs:last-child {
      margin-right: -16px
    }

    .v-toolbar__content,
    .v-toolbar__extension {
      align-items: center;
      display: flex;
      position: relative;
      z-index: 0
    }

    .v-toolbar__image {
      bottom: 0;
      contain: strict;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 0
    }

    .v-toolbar__image,
    .v-toolbar__image .v-image {
      border-radius: inherit
    }

    .v-toolbar__items {
      display: flex;
      height: inherit
    }

    .v-toolbar__items>.v-btn {
      border-radius: 0;
      height: 100% !important;
      max-height: none
    }

    .v-toolbar__title {
      font-size: 1.25rem;
      line-height: 1.5;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .v-toolbar.v-toolbar--absolute {
      position: absolute;
      top: 0;
      z-index: 1
    }

    .v-toolbar.v-toolbar--bottom {
      bottom: 0;
      top: auto
    }

    .v-toolbar.v-toolbar--collapse .v-toolbar__title {
      white-space: nowrap
    }

    .v-toolbar.v-toolbar--collapsed {
      max-width: 112px;
      overflow: hidden
    }

    .v-application--is-ltr .v-toolbar.v-toolbar--collapsed {
      border-bottom-right-radius: 24px
    }

    .v-application--is-rtl .v-toolbar.v-toolbar--collapsed {
      border-bottom-left-radius: 24px
    }

    .v-toolbar.v-toolbar--collapsed .v-toolbar__extension,
    .v-toolbar.v-toolbar--collapsed .v-toolbar__title {
      display: none
    }

    .v-toolbar--dense .v-toolbar__content,
    .v-toolbar--dense .v-toolbar__extension {
      padding-bottom: 0;
      padding-top: 0
    }

    .v-toolbar--flat {
      box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12) !important
    }

    .v-toolbar--floating {
      display: inline-flex
    }

    .v-toolbar--prominent .v-toolbar__content {
      align-items: flex-start
    }

    .v-toolbar--prominent .v-toolbar__title {
      font-size: 1.5rem;
      padding-top: 6px
    }

    .v-toolbar--prominent:not(.v-toolbar--bottom) .v-toolbar__title {
      align-self: flex-end;
      padding-bottom: 6px;
      padding-top: 0
    }

    .theme--light.v-image {
      color: rgba(0, 0, 0, .87)
    }

    .theme--dark.v-image {
      color: #fff
    }

    .v-image {
      z-index: 0
    }

    .v-image__image,
    .v-image__placeholder {
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: -1
    }

    .v-image__image {
      background-repeat: no-repeat
    }

    .v-image__image--preload {
      filter: blur(2px)
    }

    .v-image__image--contain {
      background-size: contain
    }

    .v-image__image--cover {
      background-size: cover
    }

    .v-responsive {
      display: flex;
      flex: 1 0 auto;
      max-width: 100%;
      overflow: hidden;
      position: relative
    }

    .v-responsive__content {
      flex: 1 0 0px;
      max-width: 100%
    }

    .v-application--is-ltr .v-responsive__sizer~.v-responsive__content {
      margin-left: -100%
    }

    .v-application--is-rtl .v-responsive__sizer~.v-responsive__content {
      margin-right: -100%
    }

    .v-responsive__sizer {
      flex: 1 0 0px;
      transition: padding-bottom .2s cubic-bezier(.25, .8, .5, 1)
    }

    .nuxt-progress {
      background-color: #000;
      height: 2px;
      left: 0;
      opacity: 1;
      position: fixed;
      right: 0;
      top: 0;
      transition: width .1s, opacity .4s;
      width: 0;
      z-index: 999999
    }

    .nuxt-progress.nuxt-progress-notransition {
      transition: none
    }

    .nuxt-progress-failed {
      background-color: red
    }

    .footer-container {
      max-width: 1197px
    }

    .footer {
      background: linear-gradient(#2f3146, #2f3146)
    }

    .theme--light.v-footer {
      background-color: #fff !important
    }

    .v-btn__content {
      display: block;
      font-weight: 400;
      width: 100%
    }

    .v-btn:not(.v-btn--round).v-size--default {
      color: #fff;
      display: block;
      font-size: 18px;
      font-weight: 700;
      height: 67px
    }

    .outline {
      align-items: center;
      border: 1px solid var(--brandPurple);
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      margin: 1rem;
      max-width: 95%;
      padding: 1rem 0
    }

    @media(min-width:1026px) {
      .outline {
        padding: 2rem 1rem
      }
    }

    .v-form {
      width: 95%
    }

    @media(min-width:426px) {
      .v-form {
        width: 75%
      }
    }

    .v-text-field .v-label--active {
      transform: translateY(-28px) scale(1) !important
    }

    .theme--light.v-text-field>.v-input__control>.v-input__slot:before {
      border: none !important
    }

    .v-select__slot,
    .v-text-field__slot {
      border: 1px solid #000 !important;
      padding: 0 10px
    }

    .v-list-item__content,
    .v-select__selection,
    .v-text-field input {
      color: #202132 !important;
      font-family: "TT Norms Pro DemiBold", sans-serif;
      font-size: 1rem;
      font-weight: 500;
      line-height: 22px !important;
      overflow: hidden !important
    }

    @media(min-width:768px) {

      .v-list-item__content,
      .v-select__selection,
      .v-text-field input {
        color: #202132 !important;
        font-size: 18px;
        overflow: visible !important
      }
    }

    .v-list-item__content::-moz-placeholder,
    .v-select__selection::-moz-placeholder,
    .v-text-field input::-moz-placeholder {
      -webkit-text-fill-color: #909099 !important;
      color: #909099 !important;
      font-size: 18px !important
    }

    .v-list-item__content::placeholder,
    .v-select__selection::placeholder,
    .v-text-field input::placeholder {
      -webkit-text-fill-color: #909099 !important;
      color: #909099 !important;
      font-size: 18px !important
    }

    .v-list-item__content {
      font-weight: 400
    }

    .v-text-field input {
      line-height: 24px !important;
      padding: 4px 0 !important
    }

    .smallText {
      font-size: 10px
    }

    .card-providers {
      height: -moz-fit-content;
      height: fit-content;
      max-width: 500px
    }

    .goshorty-logo[data-v-66653094] {
      cursor: pointer;
      max-width: 200px
    }

    .navigation-container[data-v-66653094] {
      border-bottom: 4px solid #2e2e3a
    }

    .navigation-bars[data-v-66653094] {
      cursor: pointer;
      font-size: 3.5em
    }

    .side-menu-container[data-v-66653094] {
      background: linear-gradient(122deg, var(--brandBlue) 33%, var(--brandPurple) 72%);
      height: 100%;
      padding: 60px 40px;
      position: fixed;
      right: -100%;
      top: 0;
      transition: .25s ease-in-out;
      width: 100%;
      z-index: 1000
    }

    .side-menu-container.visible[data-v-66653094] {
      right: 0
    }

    .side-menu-container ul[data-v-66653094] {
      border-bottom: 1px solid #fff;
      padding-bottom: 1rem;
      padding-left: 0
    }

    .side-menu-container li[data-v-66653094] {
      font-family: "TT Norms Pro Bold", sans-serif !important;
      font-weight: 900;
      list-style: none;
      margin: 2px 0 !important
    }

    .side-menu-container a[data-v-66653094] {
      color: #fff;
      font-size: 1.125rem !important
    }

    .side-menu-container a[data-v-66653094]:after,
    .side-menu-container a[data-v-66653094]:before {
      content: none
    }

    .header-bar ul li[data-v-66653094] {
      list-style: none
    }

    .header-bar ul li:last-child a[data-v-66653094]:after {
      content: none
    }

    .header-bar ul a[data-v-66653094] {
      --fa-style-family-classic: "Font Awesome 6 Free" !important;
      align-items: flex-start;
      color: #666;
      display: flex;
      flex-direction: row;
      font-size: 14px !important;
      font-weight: 700 !important
    }

    .header-bar ul a[data-v-66653094]:after {
      color: #bfbfbf;
      content: "  ";
      padding: 0 1rem
    }

    .close-button-container[data-v-66653094] {
      position: absolute;
      right: 0;
      top: 0
    }

    .close-button[data-v-66653094] {
      color: #fff;
      cursor: pointer;
      font-size: 2.5em;
      padding: 20px
    }

    .component-fade-enter-active[data-v-3b8d5b18],
    .component-fade-leave-active[data-v-3b8d5b18] {
      transition: opacity .4s ease
    }

    .component-fade-enter[data-v-3b8d5b18],
    .component-fade-leave-to[data-v-3b8d5b18] {
      opacity: 0
    }

    .progress-bar-container[data-v-1d55dd0c] {
      background: #e1e1dc;
      left: 0;
      padding: 7px;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50
    }

    .journey-manager-container {
      max-width: 1197px
    }

    @media(min-width:1264px) {
      .trustpilot-widget {
        left: 6%;
        position: relative
      }

      .trustpilot-widget:before {
        bottom: -2px;
        content: "Our customers say";
        left: 223px;
        position: absolute
      }
    }

    @media(min-width:960px)and (max-width:1264px) {
      .trustpilot-widget {
        left: 10%;
        position: relative
      }

      .trustpilot-widget:before {
        bottom: -2px;
        content: "Our customers say";
        left: 80px;
        position: absolute
      }
    }

    .registration-form-container[data-v-11e20628] {
      max-width: 1197px
    }

    .registration-form-container[data-v-11e20628] button {
      max-width: 50%
    }

    .registration-form-container[data-v-11e20628] input {
      color: #000 !important
    }

    .registration-form-container[data-v-11e20628] input {
      font-weight: 400
    }

    .registration-form-container[data-v-11e20628] input::-moz-placeholder {
      color: #000 !important
    }

    .registration-form-container[data-v-11e20628] input::placeholder {
      color: #000 !important
    }

    @media(max-width:321px) {
      .vehicle-details-container__vehicle-details-col .v-input {
        padding: 16px 8px
      }
    }

    .vehicle-details-container__vehicle-details-col .v-input input {
      border: none !important;
      font-family: "Number Plate", sans-serif;
      font-size: 2.4rem !important;
      max-height: 42px
    }

    @media(min-width:321px) {
      .vehicle-details-container__vehicle-details-col .v-input input {
        font-size: 3.2rem !important
      }
    }

    @media(min-width:768px) {
      .vehicle-details-container__vehicle-details-col .v-input input {
        font-size: 3.8rem !important
      }
    }

    .vehicle-details-container__vehicle-details-col .v-input input::-moz-placeholder {
      -webkit-text-fill-color: #000 !important;
      color: #000 !important;
      font-size: 2.4rem !important
    }

    .vehicle-details-container__vehicle-details-col .v-input input::placeholder {
      -webkit-text-fill-color: #000 !important;
      color: #000 !important;
      font-size: 2.4rem !important
    }

    @media(min-width:321px) {
      .vehicle-details-container__vehicle-details-col .v-input input::-moz-placeholder {
        font-size: 2.8rem !important
      }

      .vehicle-details-container__vehicle-details-col .v-input input::placeholder {
        font-size: 2.8rem !important
      }
    }

    @media(min-width:768px) {
      .vehicle-details-container__vehicle-details-col .v-input input::-moz-placeholder {
        font-size: 3.3rem !important
      }

      .vehicle-details-container__vehicle-details-col .v-input input::placeholder {
        font-size: 3.3rem !important
      }
    }

    .vehicle-details-container__vehicle-details-col .v-input .v-text-field__slot {
      background-color: var(--brandGold);
      padding: 0
    }

    .vehicle-details-container__vehicle-details-col .v-input .v-messages__message {
      color: red !important
    }

    .errormessage {
      color: #fff
    }

    .errorContainer {
      background-color: red;
      border-radius: 5px;
      margin-bottom: 5px;
      padding: 10px;
      width: 100%
    }

    .footer-button[data-v-5ded152e] {
      border: 2px solid var(--brandGreen);
      border-radius: 25px;
      font-family: "TT Norms Pro Serif DemiBold", serif;
      height: 40px;
      min-width: 150px
    }

    @media(max-width:400px) {
      .footer-button[data-v-5ded152e] {
        min-width: auto;
        width: 25%
      }
    }

    .site-footer[data-v-5ded152e] {
      background: linear-gradient(#2f3146, #2f3146)
    }

    .site-footer .botton-nav-container[data-v-5ded152e] {
      min-width: 100%
    }

    @media(min-width:1026px) {
      .site-footer .botton-nav-container[data-v-5ded152e] {
        min-width: auto;
        width: 20%
      }
    }

    .site-footer .container[data-v-5ded152e] {
      max-width: 1200px
    }

    .site-footer h3[data-v-5ded152e] {
      font-size: 16px;
      margin-bottom: 1rem
    }

    .site-footer .footer-section a[data-v-5ded152e] {
      font-size: 15px !important
    }

    .site-footer .footer-section[data-v-5ded152e]:last-child {
      margin-bottom: 0 !important
    }

    .brandPurple[data-v-5ded152e] {
      color: #4f2e87
    }

    .text-h6[data-v-5ded152e] {
      min-height: 32px
    }

    .payment-sheet[data-v-baf24b62] {
      margin: 1px !important
    }
  </style>
  <!--<link rel="preload" href="_nuxt/static/1705401445/state.js" as="script">
    <link rel="preload" href="_nuxt/static/1705401445/payload.js" as="script">
    <link rel="preload" href="_nuxt/static/1705401445/manifest.js" as="script"> -->
  <style type="text/css">
    h1[data-v-35e10596] {
      font-size: 20px
    }
  </style>
  <script async="" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
  <!--<script charset="utf-8" src="_nuxt/static/1705401445/manifest.js"></script>
    <script charset="utf-8" src="_nuxt/static/1705401445/payload.js"></script> -->
  <style data-n-head="vuetify" type="text/css" id="vuetify-theme-stylesheet" nonce="undefined">
    .v-application a {
      color: #64b5f6;
    }

    .v-application .primary {
      background-color: #64b5f6 !important;
      border-color: #64b5f6 !important;
    }

    .v-application .primary--text {
      color: #64b5f6 !important;
      caret-color: #64b5f6 !important;
    }

    .v-application .primary.lighten-5 {
      background-color: #fbffff !important;
      border-color: #fbffff !important;
    }

    .v-application .primary--text.text--lighten-5 {
      color: #fbffff !important;
      caret-color: #fbffff !important;
    }

    .v-application .primary.lighten-4 {
      background-color: #ddffff !important;
      border-color: #ddffff !important;
    }

    .v-application .primary--text.text--lighten-4 {
      color: #ddffff !important;
      caret-color: #ddffff !important;
    }

    .v-application .primary.lighten-3 {
      background-color: #bfffff !important;
      border-color: #bfffff !important;
    }

    .v-application .primary--text.text--lighten-3 {
      color: #bfffff !important;
      caret-color: #bfffff !important;
    }

    .v-application .primary.lighten-2 {
      background-color: #a1edff !important;
      border-color: #a1edff !important;
    }

    .v-application .primary--text.text--lighten-2 {
      color: #a1edff !important;
      caret-color: #a1edff !important;
    }

    .v-application .primary.lighten-1 {
      background-color: #83d0ff !important;
      border-color: #83d0ff !important;
    }

    .v-application .primary--text.text--lighten-1 {
      color: #83d0ff !important;
      caret-color: #83d0ff !important;
    }

    .v-application .primary.darken-1 {
      background-color: #439ad9 !important;
      border-color: #439ad9 !important;
    }

    .v-application .primary--text.text--darken-1 {
      color: #439ad9 !important;
      caret-color: #439ad9 !important;
    }

    .v-application .primary.darken-2 {
      background-color: #1680bd !important;
      border-color: #1680bd !important;
    }

    .v-application .primary--text.text--darken-2 {
      color: #1680bd !important;
      caret-color: #1680bd !important;
    }

    .v-application .primary.darken-3 {
      background-color: #0067a2 !important;
      border-color: #0067a2 !important;
    }

    .v-application .primary--text.text--darken-3 {
      color: #0067a2 !important;
      caret-color: #0067a2 !important;
    }

    .v-application .primary.darken-4 {
      background-color: #005088 !important;
      border-color: #005088 !important;
    }

    .v-application .primary--text.text--darken-4 {
      color: #005088 !important;
      caret-color: #005088 !important;
    }

    .v-application .secondary {
      background-color: #ffe082 !important;
      border-color: #ffe082 !important;
    }

    .v-application .secondary--text {
      color: #ffe082 !important;
      caret-color: #ffe082 !important;
    }

    .v-application .secondary.lighten-5 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .secondary--text.text--lighten-5 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .secondary.lighten-4 {
      background-color: #fffff2 !important;
      border-color: #fffff2 !important;
    }

    .v-application .secondary--text.text--lighten-4 {
      color: #fffff2 !important;
      caret-color: #fffff2 !important;
    }

    .v-application .secondary.lighten-3 {
      background-color: #ffffd5 !important;
      border-color: #ffffd5 !important;
    }

    .v-application .secondary--text.text--lighten-3 {
      color: #ffffd5 !important;
      caret-color: #ffffd5 !important;
    }

    .v-application .secondary.lighten-2 {
      background-color: #ffffb9 !important;
      border-color: #ffffb9 !important;
    }

    .v-application .secondary--text.text--lighten-2 {
      color: #ffffb9 !important;
      caret-color: #ffffb9 !important;
    }

    .v-application .secondary.lighten-1 {
      background-color: #fffd9d !important;
      border-color: #fffd9d !important;
    }

    .v-application .secondary--text.text--lighten-1 {
      color: #fffd9d !important;
      caret-color: #fffd9d !important;
    }

    .v-application .secondary.darken-1 {
      background-color: #e1c468 !important;
      border-color: #e1c468 !important;
    }

    .v-application .secondary--text.text--darken-1 {
      color: #e1c468 !important;
      caret-color: #e1c468 !important;
    }

    .v-application .secondary.darken-2 {
      background-color: #c4a94e !important;
      border-color: #c4a94e !important;
    }

    .v-application .secondary--text.text--darken-2 {
      color: #c4a94e !important;
      caret-color: #c4a94e !important;
    }

    .v-application .secondary.darken-3 {
      background-color: #a78f34 !important;
      border-color: #a78f34 !important;
    }

    .v-application .secondary--text.text--darken-3 {
      color: #a78f34 !important;
      caret-color: #a78f34 !important;
    }

    .v-application .secondary.darken-4 {
      background-color: #8b7519 !important;
      border-color: #8b7519 !important;
    }

    .v-application .secondary--text.text--darken-4 {
      color: #8b7519 !important;
      caret-color: #8b7519 !important;
    }

    .v-application .accent {
      background-color: #eeeeee !important;
      border-color: #eeeeee !important;
    }

    .v-application .accent--text {
      color: #eeeeee !important;
      caret-color: #eeeeee !important;
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
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .accent--text.text--lighten-4 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .accent.lighten-3 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .accent--text.text--lighten-3 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .accent.lighten-2 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .accent--text.text--lighten-2 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .accent.lighten-1 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .accent--text.text--lighten-1 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .accent.darken-1 {
      background-color: #d2d2d2 !important;
      border-color: #d2d2d2 !important;
    }

    .v-application .accent--text.text--darken-1 {
      color: #d2d2d2 !important;
      caret-color: #d2d2d2 !important;
    }

    .v-application .accent.darken-2 {
      background-color: #b6b6b6 !important;
      border-color: #b6b6b6 !important;
    }

    .v-application .accent--text.text--darken-2 {
      color: #b6b6b6 !important;
      caret-color: #b6b6b6 !important;
    }

    .v-application .accent.darken-3 {
      background-color: #9b9b9b !important;
      border-color: #9b9b9b !important;
    }

    .v-application .accent--text.text--darken-3 {
      color: #9b9b9b !important;
      caret-color: #9b9b9b !important;
    }

    .v-application .accent.darken-4 {
      background-color: #818181 !important;
      border-color: #818181 !important;
    }

    .v-application .accent--text.text--darken-4 {
      color: #818181 !important;
      caret-color: #818181 !important;
    }

    .v-application .error {
      background-color: #ff7c5c !important;
      border-color: #ff7c5c !important;
    }

    .v-application .error--text {
      color: #ff7c5c !important;
      caret-color: #ff7c5c !important;
    }

    .v-application .error.lighten-5 {
      background-color: #ffffe1 !important;
      border-color: #ffffe1 !important;
    }

    .v-application .error--text.text--lighten-5 {
      color: #ffffe1 !important;
      caret-color: #ffffe1 !important;
    }

    .v-application .error.lighten-4 {
      background-color: #ffecc5 !important;
      border-color: #ffecc5 !important;
    }

    .v-application .error--text.text--lighten-4 {
      color: #ffecc5 !important;
      caret-color: #ffecc5 !important;
    }

    .v-application .error.lighten-3 {
      background-color: #ffcfaa !important;
      border-color: #ffcfaa !important;
    }

    .v-application .error--text.text--lighten-3 {
      color: #ffcfaa !important;
      caret-color: #ffcfaa !important;
    }

    .v-application .error.lighten-2 {
      background-color: #ffb38f !important;
      border-color: #ffb38f !important;
    }

    .v-application .error--text.text--lighten-2 {
      color: #ffb38f !important;
      caret-color: #ffb38f !important;
    }

    .v-application .error.lighten-1 {
      background-color: #ff9775 !important;
      border-color: #ff9775 !important;
    }

    .v-application .error--text.text--lighten-1 {
      color: #ff9775 !important;
      caret-color: #ff9775 !important;
    }

    .v-application .error.darken-1 {
      background-color: #e06144 !important;
      border-color: #e06144 !important;
    }

    .v-application .error--text.text--darken-1 {
      color: #e06144 !important;
      caret-color: #e06144 !important;
    }

    .v-application .error.darken-2 {
      background-color: #c0472d !important;
      border-color: #c0472d !important;
    }

    .v-application .error--text.text--darken-2 {
      color: #c0472d !important;
      caret-color: #c0472d !important;
    }

    .v-application .error.darken-3 {
      background-color: #a22b16 !important;
      border-color: #a22b16 !important;
    }

    .v-application .error--text.text--darken-3 {
      color: #a22b16 !important;
      caret-color: #a22b16 !important;
    }

    .v-application .error.darken-4 {
      background-color: #840800 !important;
      border-color: #840800 !important;
    }

    .v-application .error--text.text--darken-4 {
      color: #840800 !important;
      caret-color: #840800 !important;
    }

    .v-application .info {
      background-color: #26a69a !important;
      border-color: #26a69a !important;
    }

    .v-application .info--text {
      color: #26a69a !important;
      caret-color: #26a69a !important;
    }

    .v-application .info.lighten-5 {
      background-color: #c3ffff !important;
      border-color: #c3ffff !important;
    }

    .v-application .info--text.text--lighten-5 {
      color: #c3ffff !important;
      caret-color: #c3ffff !important;
    }

    .v-application .info.lighten-4 {
      background-color: #a5ffff !important;
      border-color: #a5ffff !important;
    }

    .v-application .info--text.text--lighten-4 {
      color: #a5ffff !important;
      caret-color: #a5ffff !important;
    }

    .v-application .info.lighten-3 {
      background-color: #87fbed !important;
      border-color: #87fbed !important;
    }

    .v-application .info--text.text--lighten-3 {
      color: #87fbed !important;
      caret-color: #87fbed !important;
    }

    .v-application .info.lighten-2 {
      background-color: #6aded0 !important;
      border-color: #6aded0 !important;
    }

    .v-application .info--text.text--lighten-2 {
      color: #6aded0 !important;
      caret-color: #6aded0 !important;
    }

    .v-application .info.lighten-1 {
      background-color: #4bc2b5 !important;
      border-color: #4bc2b5 !important;
    }

    .v-application .info--text.text--lighten-1 {
      color: #4bc2b5 !important;
      caret-color: #4bc2b5 !important;
    }

    .v-application .info.darken-1 {
      background-color: #008b80 !important;
      border-color: #008b80 !important;
    }

    .v-application .info--text.text--darken-1 {
      color: #008b80 !important;
      caret-color: #008b80 !important;
    }

    .v-application .info.darken-2 {
      background-color: #007167 !important;
      border-color: #007167 !important;
    }

    .v-application .info--text.text--darken-2 {
      color: #007167 !important;
      caret-color: #007167 !important;
    }

    .v-application .info.darken-3 {
      background-color: #00584f !important;
      border-color: #00584f !important;
    }

    .v-application .info--text.text--darken-3 {
      color: #00584f !important;
      caret-color: #00584f !important;
    }

    .v-application .info.darken-4 {
      background-color: #004038 !important;
      border-color: #004038 !important;
    }

    .v-application .info--text.text--darken-4 {
      color: #004038 !important;
      caret-color: #004038 !important;
    }

    .v-application .success {
      background-color: #00e676 !important;
      border-color: #00e676 !important;
    }

    .v-application .success--text {
      color: #00e676 !important;
      caret-color: #00e676 !important;
    }

    .v-application .success.lighten-5 {
      background-color: #ceffff !important;
      border-color: #ceffff !important;
    }

    .v-application .success--text.text--lighten-5 {
      color: #ceffff !important;
      caret-color: #ceffff !important;
    }

    .v-application .success.lighten-4 {
      background-color: #afffe4 !important;
      border-color: #afffe4 !important;
    }

    .v-application .success--text.text--lighten-4 {
      color: #afffe4 !important;
      caret-color: #afffe4 !important;
    }

    .v-application .success.lighten-3 {
      background-color: #8fffc8 !important;
      border-color: #8fffc8 !important;
    }

    .v-application .success--text.text--lighten-3 {
      color: #8fffc8 !important;
      caret-color: #8fffc8 !important;
    }

    .v-application .success.lighten-2 {
      background-color: #6dffac !important;
      border-color: #6dffac !important;
    }

    .v-application .success--text.text--lighten-2 {
      color: #6dffac !important;
      caret-color: #6dffac !important;
    }

    .v-application .success.lighten-1 {
      background-color: #47ff91 !important;
      border-color: #47ff91 !important;
    }

    .v-application .success--text.text--lighten-1 {
      color: #47ff91 !important;
      caret-color: #47ff91 !important;
    }

    .v-application .success.darken-1 {
      background-color: #00c95c !important;
      border-color: #00c95c !important;
    }

    .v-application .success--text.text--darken-1 {
      color: #00c95c !important;
      caret-color: #00c95c !important;
    }

    .v-application .success.darken-2 {
      background-color: #00ad43 !important;
      border-color: #00ad43 !important;
    }

    .v-application .success--text.text--darken-2 {
      color: #00ad43 !important;
      caret-color: #00ad43 !important;
    }

    .v-application .success.darken-3 {
      background-color: #009129 !important;
      border-color: #009129 !important;
    }

    .v-application .success--text.text--darken-3 {
      color: #009129 !important;
      caret-color: #009129 !important;
    }

    .v-application .success.darken-4 {
      background-color: #00760d !important;
      border-color: #00760d !important;
    }

    .v-application .success--text.text--darken-4 {
      color: #00760d !important;
      caret-color: #00760d !important;
    }

    .v-application .warning {
      background-color: #ffc107 !important;
      border-color: #ffc107 !important;
    }

    .v-application .warning--text {
      color: #ffc107 !important;
      caret-color: #ffc107 !important;
    }

    .v-application .warning.lighten-5 {
      background-color: #ffffae !important;
      border-color: #ffffae !important;
    }

    .v-application .warning--text.text--lighten-5 {
      color: #ffffae !important;
      caret-color: #ffffae !important;
    }

    .v-application .warning.lighten-4 {
      background-color: #ffff91 !important;
      border-color: #ffff91 !important;
    }

    .v-application .warning--text.text--lighten-4 {
      color: #ffff91 !important;
      caret-color: #ffff91 !important;
    }

    .v-application .warning.lighten-3 {
      background-color: #ffff74 !important;
      border-color: #ffff74 !important;
    }

    .v-application .warning--text.text--lighten-3 {
      color: #ffff74 !important;
      caret-color: #ffff74 !important;
    }

    .v-application .warning.lighten-2 {
      background-color: #fff956 !important;
      border-color: #fff956 !important;
    }

    .v-application .warning--text.text--lighten-2 {
      color: #fff956 !important;
      caret-color: #fff956 !important;
    }

    .v-application .warning.lighten-1 {
      background-color: #ffdd37 !important;
      border-color: #ffdd37 !important;
    }

    .v-application .warning--text.text--lighten-1 {
      color: #ffdd37 !important;
      caret-color: #ffdd37 !important;
    }

    .v-application .warning.darken-1 {
      background-color: #e0a600 !important;
      border-color: #e0a600 !important;
    }

    .v-application .warning--text.text--darken-1 {
      color: #e0a600 !important;
      caret-color: #e0a600 !important;
    }

    .v-application .warning.darken-2 {
      background-color: #c18c00 !important;
      border-color: #c18c00 !important;
    }

    .v-application .warning--text.text--darken-2 {
      color: #c18c00 !important;
      caret-color: #c18c00 !important;
    }

    .v-application .warning.darken-3 {
      background-color: #a27300 !important;
      border-color: #a27300 !important;
    }

    .v-application .warning--text.text--darken-3 {
      color: #a27300 !important;
      caret-color: #a27300 !important;
    }

    .v-application .warning.darken-4 {
      background-color: #855a00 !important;
      border-color: #855a00 !important;
    }

    .v-application .warning--text.text--darken-4 {
      color: #855a00 !important;
      caret-color: #855a00 !important;
    }

    .v-application .brandPurple {
      background-color: #522e88 !important;
      border-color: #522e88 !important;
    }

    .v-application .brandPurple--text {
      color: #522e88 !important;
      caret-color: #522e88 !important;
    }

    .v-application .brandPurple.lighten-5 {
      background-color: #dcadff !important;
      border-color: #dcadff !important;
    }

    .v-application .brandPurple--text.text--lighten-5 {
      color: #dcadff !important;
      caret-color: #dcadff !important;
    }

    .v-application .brandPurple.lighten-4 {
      background-color: #bf92f7 !important;
      border-color: #bf92f7 !important;
    }

    .v-application .brandPurple--text.text--lighten-4 {
      color: #bf92f7 !important;
      caret-color: #bf92f7 !important;
    }

    .v-application .brandPurple.lighten-3 {
      background-color: #a377da !important;
      border-color: #a377da !important;
    }

    .v-application .brandPurple--text.text--lighten-3 {
      color: #a377da !important;
      caret-color: #a377da !important;
    }

    .v-application .brandPurple.lighten-2 {
      background-color: #875ebe !important;
      border-color: #875ebe !important;
    }

    .v-application .brandPurple--text.text--lighten-2 {
      color: #875ebe !important;
      caret-color: #875ebe !important;
    }

    .v-application .brandPurple.lighten-1 {
      background-color: #6c46a3 !important;
      border-color: #6c46a3 !important;
    }

    .v-application .brandPurple--text.text--lighten-1 {
      color: #6c46a3 !important;
      caret-color: #6c46a3 !important;
    }

    .v-application .brandPurple.darken-1 {
      background-color: #38176e !important;
      border-color: #38176e !important;
    }

    .v-application .brandPurple--text.text--darken-1 {
      color: #38176e !important;
      caret-color: #38176e !important;
    }

    .v-application .brandPurple.darken-2 {
      background-color: #1c0055 !important;
      border-color: #1c0055 !important;
    }

    .v-application .brandPurple--text.text--darken-2 {
      color: #1c0055 !important;
      caret-color: #1c0055 !important;
    }

    .v-application .brandPurple.darken-3 {
      background-color: #0c003e !important;
      border-color: #0c003e !important;
    }

    .v-application .brandPurple--text.text--darken-3 {
      color: #0c003e !important;
      caret-color: #0c003e !important;
    }

    .v-application .brandPurple.darken-4 {
      background-color: #000029 !important;
      border-color: #000029 !important;
    }

    .v-application .brandPurple--text.text--darken-4 {
      color: #000029 !important;
      caret-color: #000029 !important;
    }

    .v-application .brandBlue {
      background-color: #118acb !important;
      border-color: #118acb !important;
    }

    .v-application .brandBlue--text {
      color: #118acb !important;
      caret-color: #118acb !important;
    }

    .v-application .brandBlue.lighten-5 {
      background-color: #c3ffff !important;
      border-color: #c3ffff !important;
    }

    .v-application .brandBlue--text.text--lighten-5 {
      color: #c3ffff !important;
      caret-color: #c3ffff !important;
    }

    .v-application .brandBlue.lighten-4 {
      background-color: #a4f7ff !important;
      border-color: #a4f7ff !important;
    }

    .v-application .brandBlue--text.text--lighten-4 {
      color: #a4f7ff !important;
      caret-color: #a4f7ff !important;
    }

    .v-application .brandBlue.lighten-3 {
      background-color: #86dbff !important;
      border-color: #86dbff !important;
    }

    .v-application .brandBlue--text.text--lighten-3 {
      color: #86dbff !important;
      caret-color: #86dbff !important;
    }

    .v-application .brandBlue.lighten-2 {
      background-color: #66bfff !important;
      border-color: #66bfff !important;
    }

    .v-application .brandBlue--text.text--lighten-2 {
      color: #66bfff !important;
      caret-color: #66bfff !important;
    }

    .v-application .brandBlue.lighten-1 {
      background-color: #44a4e7 !important;
      border-color: #44a4e7 !important;
    }

    .v-application .brandBlue--text.text--lighten-1 {
      color: #44a4e7 !important;
      caret-color: #44a4e7 !important;
    }

    .v-application .brandBlue.darken-1 {
      background-color: #0071af !important;
      border-color: #0071af !important;
    }

    .v-application .brandBlue--text.text--darken-1 {
      color: #0071af !important;
      caret-color: #0071af !important;
    }

    .v-application .brandBlue.darken-2 {
      background-color: #005894 !important;
      border-color: #005894 !important;
    }

    .v-application .brandBlue--text.text--darken-2 {
      color: #005894 !important;
      caret-color: #005894 !important;
    }

    .v-application .brandBlue.darken-3 {
      background-color: #00417a !important;
      border-color: #00417a !important;
    }

    .v-application .brandBlue--text.text--darken-3 {
      color: #00417a !important;
      caret-color: #00417a !important;
    }

    .v-application .brandBlue.darken-4 {
      background-color: #002c61 !important;
      border-color: #002c61 !important;
    }

    .v-application .brandBlue--text.text--darken-4 {
      color: #002c61 !important;
      caret-color: #002c61 !important;
    }

    .v-application .brandWarmBlack {
      background-color: #3a3c59 !important;
      border-color: #3a3c59 !important;
    }

    .v-application .brandWarmBlack--text {
      color: #3a3c59 !important;
      caret-color: #3a3c59 !important;
    }

    .v-application .brandWarmBlack.lighten-5 {
      background-color: #b9b9dd !important;
      border-color: #b9b9dd !important;
    }

    .v-application .brandWarmBlack--text.text--lighten-5 {
      color: #b9b9dd !important;
      caret-color: #b9b9dd !important;
    }

    .v-application .brandWarmBlack.lighten-4 {
      background-color: #9e9ec1 !important;
      border-color: #9e9ec1 !important;
    }

    .v-application .brandWarmBlack--text.text--lighten-4 {
      color: #9e9ec1 !important;
      caret-color: #9e9ec1 !important;
    }

    .v-application .brandWarmBlack.lighten-3 {
      background-color: #8484a6 !important;
      border-color: #8484a6 !important;
    }

    .v-application .brandWarmBlack--text.text--lighten-3 {
      color: #8484a6 !important;
      caret-color: #8484a6 !important;
    }

    .v-application .brandWarmBlack.lighten-2 {
      background-color: #6a6b8b !important;
      border-color: #6a6b8b !important;
    }

    .v-application .brandWarmBlack--text.text--lighten-2 {
      color: #6a6b8b !important;
      caret-color: #6a6b8b !important;
    }

    .v-application .brandWarmBlack.lighten-1 {
      background-color: #525372 !important;
      border-color: #525372 !important;
    }

    .v-application .brandWarmBlack--text.text--lighten-1 {
      color: #525372 !important;
      caret-color: #525372 !important;
    }

    .v-application .brandWarmBlack.darken-1 {
      background-color: #232642 !important;
      border-color: #232642 !important;
    }

    .v-application .brandWarmBlack--text.text--darken-1 {
      color: #232642 !important;
      caret-color: #232642 !important;
    }

    .v-application .brandWarmBlack.darken-2 {
      background-color: #0e122b !important;
      border-color: #0e122b !important;
    }

    .v-application .brandWarmBlack--text.text--darken-2 {
      color: #0e122b !important;
      caret-color: #0e122b !important;
    }

    .v-application .brandWarmBlack.darken-3 {
      background-color: #000018 !important;
      border-color: #000018 !important;
    }

    .v-application .brandWarmBlack--text.text--darken-3 {
      color: #000018 !important;
      caret-color: #000018 !important;
    }

    .v-application .brandWarmBlack.darken-4 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandWarmBlack--text.text--darken-4 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandLightBlue {
      background-color: #4280ff !important;
      border-color: #4280ff !important;
    }

    .v-application .brandLightBlue--text {
      color: #4280ff !important;
      caret-color: #4280ff !important;
    }

    .v-application .brandLightBlue.lighten-5 {
      background-color: #e7ffff !important;
      border-color: #e7ffff !important;
    }

    .v-application .brandLightBlue--text.text--lighten-5 {
      color: #e7ffff !important;
      caret-color: #e7ffff !important;
    }

    .v-application .brandLightBlue.lighten-4 {
      background-color: #c8ecff !important;
      border-color: #c8ecff !important;
    }

    .v-application .brandLightBlue--text.text--lighten-4 {
      color: #c8ecff !important;
      caret-color: #c8ecff !important;
    }

    .v-application .brandLightBlue.lighten-3 {
      background-color: #a9d0ff !important;
      border-color: #a9d0ff !important;
    }

    .v-application .brandLightBlue--text.text--lighten-3 {
      color: #a9d0ff !important;
      caret-color: #a9d0ff !important;
    }

    .v-application .brandLightBlue.lighten-2 {
      background-color: #89b4ff !important;
      border-color: #89b4ff !important;
    }

    .v-application .brandLightBlue--text.text--lighten-2 {
      color: #89b4ff !important;
      caret-color: #89b4ff !important;
    }

    .v-application .brandLightBlue.lighten-1 {
      background-color: #689aff !important;
      border-color: #689aff !important;
    }

    .v-application .brandLightBlue--text.text--lighten-1 {
      color: #689aff !important;
      caret-color: #689aff !important;
    }

    .v-application .brandLightBlue.darken-1 {
      background-color: #0067e2 !important;
      border-color: #0067e2 !important;
    }

    .v-application .brandLightBlue--text.text--darken-1 {
      color: #0067e2 !important;
      caret-color: #0067e2 !important;
    }

    .v-application .brandLightBlue.darken-2 {
      background-color: #0050c5 !important;
      border-color: #0050c5 !important;
    }

    .v-application .brandLightBlue--text.text--darken-2 {
      color: #0050c5 !important;
      caret-color: #0050c5 !important;
    }

    .v-application .brandLightBlue.darken-3 {
      background-color: #003aa9 !important;
      border-color: #003aa9 !important;
    }

    .v-application .brandLightBlue--text.text--darken-3 {
      color: #003aa9 !important;
      caret-color: #003aa9 !important;
    }

    .v-application .brandLightBlue.darken-4 {
      background-color: #00268e !important;
      border-color: #00268e !important;
    }

    .v-application .brandLightBlue--text.text--darken-4 {
      color: #00268e !important;
      caret-color: #00268e !important;
    }

    .v-application .brandNavy {
      background-color: #292a40 !important;
      border-color: #292a40 !important;
    }

    .v-application .brandNavy--text {
      color: #292a40 !important;
      caret-color: #292a40 !important;
    }

    .v-application .brandNavy.lighten-5 {
      background-color: #a4a3bf !important;
      border-color: #a4a3bf !important;
    }

    .v-application .brandNavy--text.text--lighten-5 {
      color: #a4a3bf !important;
      caret-color: #a4a3bf !important;
    }

    .v-application .brandNavy.lighten-4 {
      background-color: #8989a4 !important;
      border-color: #8989a4 !important;
    }

    .v-application .brandNavy--text.text--lighten-4 {
      color: #8989a4 !important;
      caret-color: #8989a4 !important;
    }

    .v-application .brandNavy.lighten-3 {
      background-color: #707089 !important;
      border-color: #707089 !important;
    }

    .v-application .brandNavy--text.text--lighten-3 {
      color: #707089 !important;
      caret-color: #707089 !important;
    }

    .v-application .brandNavy.lighten-2 {
      background-color: #575770 !important;
      border-color: #575770 !important;
    }

    .v-application .brandNavy--text.text--lighten-2 {
      color: #575770 !important;
      caret-color: #575770 !important;
    }

    .v-application .brandNavy.lighten-1 {
      background-color: #3f4057 !important;
      border-color: #3f4057 !important;
    }

    .v-application .brandNavy--text.text--lighten-1 {
      color: #3f4057 !important;
      caret-color: #3f4057 !important;
    }

    .v-application .brandNavy.darken-1 {
      background-color: #14162a !important;
      border-color: #14162a !important;
    }

    .v-application .brandNavy--text.text--darken-1 {
      color: #14162a !important;
      caret-color: #14162a !important;
    }

    .v-application .brandNavy.darken-2 {
      background-color: #000016 !important;
      border-color: #000016 !important;
    }

    .v-application .brandNavy--text.text--darken-2 {
      color: #000016 !important;
      caret-color: #000016 !important;
    }

    .v-application .brandNavy.darken-3 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandNavy--text.text--darken-3 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandNavy.darken-4 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandNavy--text.text--darken-4 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandGreen {
      background-color: #70ed9b !important;
      border-color: #70ed9b !important;
    }

    .v-application .brandGreen--text {
      color: #70ed9b !important;
      caret-color: #70ed9b !important;
    }

    .v-application .brandGreen.lighten-5 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandGreen--text.text--lighten-5 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandGreen.lighten-4 {
      background-color: #e7ffff !important;
      border-color: #e7ffff !important;
    }

    .v-application .brandGreen--text.text--lighten-4 {
      color: #e7ffff !important;
      caret-color: #e7ffff !important;
    }

    .v-application .brandGreen.lighten-3 {
      background-color: #c9ffee !important;
      border-color: #c9ffee !important;
    }

    .v-application .brandGreen--text.text--lighten-3 {
      color: #c9ffee !important;
      caret-color: #c9ffee !important;
    }

    .v-application .brandGreen.lighten-2 {
      background-color: #abffd2 !important;
      border-color: #abffd2 !important;
    }

    .v-application .brandGreen--text.text--lighten-2 {
      color: #abffd2 !important;
      caret-color: #abffd2 !important;
    }

    .v-application .brandGreen.lighten-1 {
      background-color: #8effb6 !important;
      border-color: #8effb6 !important;
    }

    .v-application .brandGreen--text.text--lighten-1 {
      color: #8effb6 !important;
      caret-color: #8effb6 !important;
    }

    .v-application .brandGreen.darken-1 {
      background-color: #51d081 !important;
      border-color: #51d081 !important;
    }

    .v-application .brandGreen--text.text--darken-1 {
      color: #51d081 !important;
      caret-color: #51d081 !important;
    }

    .v-application .brandGreen.darken-2 {
      background-color: #2fb467 !important;
      border-color: #2fb467 !important;
    }

    .v-application .brandGreen--text.text--darken-2 {
      color: #2fb467 !important;
      caret-color: #2fb467 !important;
    }

    .v-application .brandGreen.darken-3 {
      background-color: #00994e !important;
      border-color: #00994e !important;
    }

    .v-application .brandGreen--text.text--darken-3 {
      color: #00994e !important;
      caret-color: #00994e !important;
    }

    .v-application .brandGreen.darken-4 {
      background-color: #007e36 !important;
      border-color: #007e36 !important;
    }

    .v-application .brandGreen--text.text--darken-4 {
      color: #007e36 !important;
      caret-color: #007e36 !important;
    }

    .v-application .brandLightGrey {
      background-color: #f1f1f1 !important;
      border-color: #f1f1f1 !important;
    }

    .v-application .brandLightGrey--text {
      color: #f1f1f1 !important;
      caret-color: #f1f1f1 !important;
    }

    .v-application .brandLightGrey.lighten-5 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandLightGrey--text.text--lighten-5 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandLightGrey.lighten-4 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandLightGrey--text.text--lighten-4 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandLightGrey.lighten-3 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandLightGrey--text.text--lighten-3 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandLightGrey.lighten-2 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandLightGrey--text.text--lighten-2 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandLightGrey.lighten-1 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandLightGrey--text.text--lighten-1 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandLightGrey.darken-1 {
      background-color: #d5d5d5 !important;
      border-color: #d5d5d5 !important;
    }

    .v-application .brandLightGrey--text.text--darken-1 {
      color: #d5d5d5 !important;
      caret-color: #d5d5d5 !important;
    }

    .v-application .brandLightGrey.darken-2 {
      background-color: #b9b9b9 !important;
      border-color: #b9b9b9 !important;
    }

    .v-application .brandLightGrey--text.text--darken-2 {
      color: #b9b9b9 !important;
      caret-color: #b9b9b9 !important;
    }

    .v-application .brandLightGrey.darken-3 {
      background-color: #9e9e9e !important;
      border-color: #9e9e9e !important;
    }

    .v-application .brandLightGrey--text.text--darken-3 {
      color: #9e9e9e !important;
      caret-color: #9e9e9e !important;
    }

    .v-application .brandLightGrey.darken-4 {
      background-color: #848484 !important;
      border-color: #848484 !important;
    }

    .v-application .brandLightGrey--text.text--darken-4 {
      color: #848484 !important;
      caret-color: #848484 !important;
    }

    .v-application .brandGrey {
      background-color: #deded8 !important;
      border-color: #deded8 !important;
    }

    .v-application .brandGrey--text {
      color: #deded8 !important;
      caret-color: #deded8 !important;
    }

    .v-application .brandGrey.lighten-5 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandGrey--text.text--lighten-5 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandGrey.lighten-4 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandGrey--text.text--lighten-4 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandGrey.lighten-3 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandGrey--text.text--lighten-3 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandGrey.lighten-2 {
      background-color: #ffffff !important;
      border-color: #ffffff !important;
    }

    .v-application .brandGrey--text.text--lighten-2 {
      color: #ffffff !important;
      caret-color: #ffffff !important;
    }

    .v-application .brandGrey.lighten-1 {
      background-color: #fbfbf4 !important;
      border-color: #fbfbf4 !important;
    }

    .v-application .brandGrey--text.text--lighten-1 {
      color: #fbfbf4 !important;
      caret-color: #fbfbf4 !important;
    }

    .v-application .brandGrey.darken-1 {
      background-color: #c2c2bc !important;
      border-color: #c2c2bc !important;
    }

    .v-application .brandGrey--text.text--darken-1 {
      color: #c2c2bc !important;
      caret-color: #c2c2bc !important;
    }

    .v-application .brandGrey.darken-2 {
      background-color: #a7a7a1 !important;
      border-color: #a7a7a1 !important;
    }

    .v-application .brandGrey--text.text--darken-2 {
      color: #a7a7a1 !important;
      caret-color: #a7a7a1 !important;
    }

    .v-application .brandGrey.darken-3 {
      background-color: #8d8d87 !important;
      border-color: #8d8d87 !important;
    }

    .v-application .brandGrey--text.text--darken-3 {
      color: #8d8d87 !important;
      caret-color: #8d8d87 !important;
    }

    .v-application .brandGrey.darken-4 {
      background-color: #73736e !important;
      border-color: #73736e !important;
    }

    .v-application .brandGrey--text.text--darken-4 {
      color: #73736e !important;
      caret-color: #73736e !important;
    }

    .v-application .brandDarkGrey {
      background-color: #303030 !important;
      border-color: #303030 !important;
    }

    .v-application .brandDarkGrey--text {
      color: #303030 !important;
      caret-color: #303030 !important;
    }

    .v-application .brandDarkGrey.lighten-5 {
      background-color: #ababab !important;
      border-color: #ababab !important;
    }

    .v-application .brandDarkGrey--text.text--lighten-5 {
      color: #ababab !important;
      caret-color: #ababab !important;
    }

    .v-application .brandDarkGrey.lighten-4 {
      background-color: #909090 !important;
      border-color: #909090 !important;
    }

    .v-application .brandDarkGrey--text.text--lighten-4 {
      color: #909090 !important;
      caret-color: #909090 !important;
    }

    .v-application .brandDarkGrey.lighten-3 {
      background-color: #777777 !important;
      border-color: #777777 !important;
    }

    .v-application .brandDarkGrey--text.text--lighten-3 {
      color: #777777 !important;
      caret-color: #777777 !important;
    }

    .v-application .brandDarkGrey.lighten-2 {
      background-color: #5e5e5e !important;
      border-color: #5e5e5e !important;
    }

    .v-application .brandDarkGrey--text.text--lighten-2 {
      color: #5e5e5e !important;
      caret-color: #5e5e5e !important;
    }

    .v-application .brandDarkGrey.lighten-1 {
      background-color: #464646 !important;
      border-color: #464646 !important;
    }

    .v-application .brandDarkGrey--text.text--lighten-1 {
      color: #464646 !important;
      caret-color: #464646 !important;
    }

    .v-application .brandDarkGrey.darken-1 {
      background-color: #1b1b1b !important;
      border-color: #1b1b1b !important;
    }

    .v-application .brandDarkGrey--text.text--darken-1 {
      color: #1b1b1b !important;
      caret-color: #1b1b1b !important;
    }

    .v-application .brandDarkGrey.darken-2 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandDarkGrey--text.text--darken-2 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandDarkGrey.darken-3 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandDarkGrey--text.text--darken-3 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandDarkGrey.darken-4 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandDarkGrey--text.text--darken-4 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandDarkestGrey {
      background-color: #1d1e2c !important;
      border-color: #1d1e2c !important;
    }

    .v-application .brandDarkestGrey--text {
      color: #1d1e2c !important;
      caret-color: #1d1e2c !important;
    }

    .v-application .brandDarkestGrey.lighten-5 {
      background-color: #9494a6 !important;
      border-color: #9494a6 !important;
    }

    .v-application .brandDarkestGrey--text.text--lighten-5 {
      color: #9494a6 !important;
      caret-color: #9494a6 !important;
    }

    .v-application .brandDarkestGrey.lighten-4 {
      background-color: #7a7a8c !important;
      border-color: #7a7a8c !important;
    }

    .v-application .brandDarkestGrey--text.text--lighten-4 {
      color: #7a7a8c !important;
      caret-color: #7a7a8c !important;
    }

    .v-application .brandDarkestGrey.lighten-3 {
      background-color: #616172 !important;
      border-color: #616172 !important;
    }

    .v-application .brandDarkestGrey--text.text--lighten-3 {
      color: #616172 !important;
      caret-color: #616172 !important;
    }

    .v-application .brandDarkestGrey.lighten-2 {
      background-color: #494a5a !important;
      border-color: #494a5a !important;
    }

    .v-application .brandDarkestGrey--text.text--lighten-2 {
      color: #494a5a !important;
      caret-color: #494a5a !important;
    }

    .v-application .brandDarkestGrey.lighten-1 {
      background-color: #323342 !important;
      border-color: #323342 !important;
    }

    .v-application .brandDarkestGrey--text.text--lighten-1 {
      color: #323342 !important;
      caret-color: #323342 !important;
    }

    .v-application .brandDarkestGrey.darken-1 {
      background-color: #050518 !important;
      border-color: #050518 !important;
    }

    .v-application .brandDarkestGrey--text.text--darken-1 {
      color: #050518 !important;
      caret-color: #050518 !important;
    }

    .v-application .brandDarkestGrey.darken-2 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandDarkestGrey--text.text--darken-2 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandDarkestGrey.darken-3 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandDarkestGrey--text.text--darken-3 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }

    .v-application .brandDarkestGrey.darken-4 {
      background-color: #000000 !important;
      border-color: #000000 !important;
    }

    .v-application .brandDarkestGrey--text.text--darken-4 {
      color: #000000 !important;
      caret-color: #000000 !important;
    }
  </style>
  <style type="text/css">
    .v-btn:not(.v-btn--outlined).accent,
    .v-btn:not(.v-btn--outlined).error,
    .v-btn:not(.v-btn--outlined).info,
    .v-btn:not(.v-btn--outlined).primary,
    .v-btn:not(.v-btn--outlined).secondary,
    .v-btn:not(.v-btn--outlined).success,
    .v-btn:not(.v-btn--outlined).warning {
      color: #fff
    }

    .theme--light.v-btn {
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-btn.v-btn--disabled,
    .theme--light.v-btn.v-btn--disabled .v-btn__loading,
    .theme--light.v-btn.v-btn--disabled .v-icon {
      color: rgba(0, 0, 0, .26) !important
    }

    .theme--light.v-btn.v-btn--disabled.v-btn--has-bg {
      background-color: rgba(0, 0, 0, .12) !important
    }

    .theme--light.v-btn.v-btn--has-bg {
      background-color: #f5f5f5
    }

    .theme--light.v-btn.v-btn--outlined.v-btn--text {
      border-color: rgba(0, 0, 0, .12)
    }

    .theme--light.v-btn.v-btn--icon {
      color: rgba(0, 0, 0, .54)
    }

    .theme--light.v-btn:hover:before {
      opacity: .08
    }

    .theme--light.v-btn:focus:before {
      opacity: .24
    }

    .theme--light.v-btn--active:before,
    .theme--light.v-btn--active:hover:before {
      opacity: .18
    }

    .theme--light.v-btn--active:focus:before {
      opacity: .16
    }

    .theme--dark.v-btn {
      color: #fff
    }

    .theme--dark.v-btn.v-btn--disabled,
    .theme--dark.v-btn.v-btn--disabled .v-btn__loading,
    .theme--dark.v-btn.v-btn--disabled .v-icon {
      color: hsla(0, 0%, 100%, .3) !important
    }

    .theme--dark.v-btn.v-btn--disabled.v-btn--has-bg {
      background-color: hsla(0, 0%, 100%, .12) !important
    }

    .theme--dark.v-btn.v-btn--has-bg {
      background-color: #272727
    }

    .theme--dark.v-btn.v-btn--outlined.v-btn--text {
      border-color: hsla(0, 0%, 100%, .12)
    }

    .theme--dark.v-btn.v-btn--icon {
      color: #fff
    }

    .theme--dark.v-btn:hover:before {
      opacity: .08
    }

    .theme--dark.v-btn:focus:before {
      opacity: .24
    }

    .theme--dark.v-btn--active:before,
    .theme--dark.v-btn--active:hover:before {
      opacity: .18
    }

    .theme--dark.v-btn--active:focus:before {
      opacity: .32
    }

    .v-btn {
      align-items: center;
      border-radius: 4px;
      display: inline-flex;
      flex: 0 0 auto;
      font-weight: 500;
      justify-content: center;
      letter-spacing: .0892857143em;
      outline: 0;
      position: relative;
      -webkit-text-decoration: none;
      text-decoration: none;
      text-indent: .0892857143em;
      text-transform: uppercase;
      transition-duration: .28s;
      transition-property: box-shadow, transform, opacity;
      transition-timing-function: cubic-bezier(.4, 0, .2, 1);
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      vertical-align: middle;
      white-space: nowrap
    }

    .v-btn.v-size--x-small {
      font-size: .625rem
    }

    .v-btn.v-size--small {
      font-size: .75rem
    }

    .v-btn.v-size--default,
    .v-btn.v-size--large {
      font-size: .875rem
    }

    .v-btn.v-size--x-large {
      font-size: 1rem
    }

    .v-btn:before {
      background-color: currentColor;
      border-radius: inherit;
      bottom: 0;
      color: inherit;
      content: "";
      left: 0;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      right: 0;
      top: 0;
      transition: opacity .2s cubic-bezier(.4, 0, .6, 1)
    }

    .v-btn:not(.v-btn--round).v-size--x-small {
      height: 20px;
      min-width: 36px;
      padding: 0 8.8888888889px
    }

    .v-btn:not(.v-btn--round).v-size--small {
      height: 28px;
      min-width: 50px;
      padding: 0 12.4444444444px
    }

    .v-btn:not(.v-btn--round).v-size--default {
      height: 36px;
      min-width: 64px;
      padding: 0 16px
    }

    .v-btn:not(.v-btn--round).v-size--large {
      height: 44px;
      min-width: 78px;
      padding: 0 19.5555555556px
    }

    .v-btn:not(.v-btn--round).v-size--x-large {
      height: 52px;
      min-width: 92px;
      padding: 0 23.1111111111px
    }

    .v-btn>.v-btn__content .v-icon {
      color: inherit
    }

    .v-btn__content {
      align-items: center;
      color: inherit;
      display: flex;
      flex: 1 0 auto;
      justify-content: inherit;
      line-height: normal;
      position: relative;
      transition: inherit;
      transition-property: opacity
    }

    .v-btn__content .v-icon.v-icon--left,
    .v-btn__content .v-icon.v-icon--right {
      font-size: 18px;
      height: 18px;
      width: 18px
    }

    .v-application--is-ltr .v-btn__content .v-icon--left {
      margin-left: -4px;
      margin-right: 8px
    }

    .v-application--is-ltr .v-btn__content .v-icon--right,
    .v-application--is-rtl .v-btn__content .v-icon--left {
      margin-left: 8px;
      margin-right: -4px
    }

    .v-application--is-rtl .v-btn__content .v-icon--right {
      margin-left: -4px;
      margin-right: 8px
    }

    .v-btn__loader {
      align-items: center;
      display: flex;
      height: 100%;
      justify-content: center;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%
    }

    .v-btn--absolute.v-btn--right,
    .v-btn--fixed.v-btn--right {
      right: 16px
    }

    .v-btn--absolute.v-btn--left,
    .v-btn--fixed.v-btn--left {
      left: 16px
    }

    .v-btn--absolute.v-btn--top,
    .v-btn--fixed.v-btn--top {
      top: 16px
    }

    .v-btn--absolute.v-btn--bottom,
    .v-btn--fixed.v-btn--bottom {
      bottom: 16px
    }

    .v-btn--absolute {
      position: absolute
    }

    .v-btn--fixed {
      position: fixed
    }

    .v-btn--block {
      display: flex;
      flex: 1 0 auto;
      max-width: none;
      min-width: 100% !important
    }

    .v-btn--is-elevated {
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    .v-btn--is-elevated:after {
      box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
    }

    .v-btn--is-elevated:active {
      box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .v-btn--is-elevated.v-btn--fab {
      box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
    }

    .v-btn--is-elevated.v-btn--fab:after {
      box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .v-btn--is-elevated.v-btn--fab:active {
      box-shadow: 0 7px 8px -4px rgba(0, 0, 0, .2), 0 12px 17px 2px rgba(0, 0, 0, .14), 0 5px 22px 4px rgba(0, 0, 0, .12)
    }

    .v-btn--disabled {
      pointer-events: none
    }

    .v-btn--fab,
    .v-btn--icon {
      min-height: 0;
      min-width: 0;
      padding: 0
    }

    .v-btn--fab.v-size--x-small .v-icon,
    .v-btn--icon.v-size--x-small .v-icon {
      font-size: 18px;
      height: 18px;
      width: 18px
    }

    .v-btn--fab.v-size--default .v-icon,
    .v-btn--fab.v-size--small .v-icon,
    .v-btn--icon.v-size--default .v-icon,
    .v-btn--icon.v-size--small .v-icon {
      font-size: 24px;
      height: 24px;
      width: 24px
    }

    .v-btn--fab.v-size--large .v-icon,
    .v-btn--icon.v-size--large .v-icon {
      font-size: 28px;
      height: 28px;
      width: 28px
    }

    .v-btn--fab.v-size--x-large .v-icon,
    .v-btn--icon.v-size--x-large .v-icon {
      font-size: 32px;
      height: 32px;
      width: 32px
    }

    .v-btn--icon.v-size--x-small {
      height: 20px;
      width: 20px
    }

    .v-btn--icon.v-size--small {
      height: 28px;
      width: 28px
    }

    .v-btn--icon.v-size--default {
      height: 36px;
      width: 36px
    }

    .v-btn--icon.v-size--large {
      height: 44px;
      width: 44px
    }

    .v-btn--icon.v-size--x-large {
      height: 52px;
      width: 52px
    }

    .v-btn--fab.v-btn--absolute,
    .v-btn--fab.v-btn--fixed {
      z-index: 4
    }

    .v-btn--fab.v-size--x-small {
      height: 32px;
      width: 32px
    }

    .v-btn--fab.v-size--x-small.v-btn--absolute.v-btn--bottom {
      bottom: -16px
    }

    .v-btn--fab.v-size--x-small.v-btn--absolute.v-btn--top {
      top: -16px
    }

    .v-btn--fab.v-size--small {
      height: 40px;
      width: 40px
    }

    .v-btn--fab.v-size--small.v-btn--absolute.v-btn--bottom {
      bottom: -20px
    }

    .v-btn--fab.v-size--small.v-btn--absolute.v-btn--top {
      top: -20px
    }

    .v-btn--fab.v-size--default {
      height: 56px;
      width: 56px
    }

    .v-btn--fab.v-size--default.v-btn--absolute.v-btn--bottom {
      bottom: -28px
    }

    .v-btn--fab.v-size--default.v-btn--absolute.v-btn--top {
      top: -28px
    }

    .v-btn--fab.v-size--large {
      height: 64px;
      width: 64px
    }

    .v-btn--fab.v-size--large.v-btn--absolute.v-btn--bottom {
      bottom: -32px
    }

    .v-btn--fab.v-size--large.v-btn--absolute.v-btn--top {
      top: -32px
    }

    .v-btn--fab.v-size--x-large {
      height: 72px;
      width: 72px
    }

    .v-btn--fab.v-size--x-large.v-btn--absolute.v-btn--bottom {
      bottom: -36px
    }

    .v-btn--fab.v-size--x-large.v-btn--absolute.v-btn--top {
      top: -36px
    }

    .v-btn--loading {
      pointer-events: none;
      transition: none
    }

    .v-btn--loading .v-btn__content {
      opacity: 0
    }

    .v-btn--outlined {
      border: thin solid
    }

    .v-btn--plain:before {
      display: none
    }

    .v-btn--plain:not(.v-btn--active):not(.v-btn--loading):not(:focus):not(:hover) .v-btn__content {
      opacity: .62
    }

    .v-btn--round {
      border-radius: 50%
    }

    .v-btn--rounded {
      border-radius: 28px
    }

    .v-btn--tile {
      border-radius: 0
    }
  </style>
  <style type="text/css">
    .v-progress-circular {
      align-items: center;
      display: inline-flex;
      justify-content: center;
      position: relative;
      vertical-align: middle
    }

    .v-progress-circular>svg {
      bottom: 0;
      height: 100%;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 0;
      width: 100%;
      z-index: 0
    }

    .v-progress-circular--indeterminate>svg {
      animation: progress-circular-rotate 1.4s linear infinite;
      transform-origin: center center;
      transition: all .2s ease-in-out
    }

    .v-progress-circular--indeterminate .v-progress-circular__overlay {
      stroke-linecap: round;
      stroke-dasharray: 80, 200;
      stroke-dashoffset: 0px;
      animation: progress-circular-dash 1.4s ease-in-out infinite
    }

    .v-progress-circular--indeterminate:not(.v-progress-circular--visible) .v-progress-circular__overlay,
    .v-progress-circular--indeterminate:not(.v-progress-circular--visible)>svg {
      animation-play-state: paused !important
    }

    .v-progress-circular__info {
      align-items: center;
      display: flex;
      justify-content: center
    }

    .v-progress-circular__underlay {
      stroke: hsla(0, 0%, 62%, .4);
      z-index: 1
    }

    .v-progress-circular__overlay {
      stroke: currentColor;
      transition: all .6s ease-in-out;
      z-index: 2
    }

    @keyframes progress-circular-dash {
      0% {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0px
      }

      50% {
        stroke-dasharray: 100, 200;
        stroke-dashoffset: -15px
      }

      to {
        stroke-dasharray: 100, 200;
        stroke-dashoffset: -124px
      }
    }

    @keyframes progress-circular-rotate {
      to {
        transform: rotate(1turn)
      }
    }
  </style>
  <style type="text/css">
    .theme--light.v-text-field>.v-input__control>.v-input__slot:before {
      border-color: rgba(0, 0, 0, .42)
    }

    .theme--light.v-text-field:not(.v-input--has-state):hover>.v-input__control>.v-input__slot:before {
      border-color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-text-field.v-input--is-disabled .v-input__slot:before {
      -o-border-image: repeating-linear-gradient(90deg, rgba(0, 0, 0, .38) 0, rgba(0, 0, 0, .38) 2px, transparent 0, transparent 4px) 1 repeat;
      border-image: repeating-linear-gradient(90deg, rgba(0, 0, 0, .38) 0, rgba(0, 0, 0, .38) 2px, transparent 0, transparent 4px) 1 repeat
    }

    .theme--light.v-text-field--filled>.v-input__control>.v-input__slot {
      background: rgba(0, 0, 0, .06)
    }

    .theme--light.v-text-field--filled:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot:hover {
      background: rgba(0, 0, 0, .12)
    }

    .theme--light.v-text-field--solo>.v-input__control>.v-input__slot {
      background: #fff
    }

    .theme--light.v-text-field--solo-inverted>.v-input__control>.v-input__slot {
      background: rgba(0, 0, 0, .06)
    }

    .theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot {
      background: #424242
    }

    .theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input {
      color: #fff
    }

    .theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input::-moz-placeholder {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input::placeholder {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--light.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot .v-label {
      color: hsla(0, 0%, 100%, .7)
    }

    .theme--light.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot fieldset {
      color: rgba(0, 0, 0, .38)
    }

    .theme--light.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state):not(.v-input--is-disabled)>.v-input__control>.v-input__slot:hover fieldset {
      color: rgba(0, 0, 0, .86)
    }

    .theme--light.v-text-field--outlined:not(.v-input--is-focused).v-input--is-disabled>.v-input__control>.v-input__slot fieldset {
      color: rgba(0, 0, 0, .26)
    }

    .theme--dark.v-text-field>.v-input__control>.v-input__slot:before {
      border-color: hsla(0, 0%, 100%, .7)
    }

    .theme--dark.v-text-field:not(.v-input--has-state):hover>.v-input__control>.v-input__slot:before {
      border-color: #fff
    }

    .theme--dark.v-text-field.v-input--is-disabled .v-input__slot:before {
      -o-border-image: repeating-linear-gradient(90deg, hsla(0, 0%, 100%, .5) 0, hsla(0, 0%, 100%, .5) 2px, transparent 0, transparent 4px) 1 repeat;
      border-image: repeating-linear-gradient(90deg, hsla(0, 0%, 100%, .5) 0, hsla(0, 0%, 100%, .5) 2px, transparent 0, transparent 4px) 1 repeat
    }

    .theme--dark.v-text-field--filled>.v-input__control>.v-input__slot {
      background: hsla(0, 0%, 100%, .08)
    }

    .theme--dark.v-text-field--filled:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot:hover {
      background: hsla(0, 0%, 100%, .16)
    }

    .theme--dark.v-text-field--solo>.v-input__control>.v-input__slot {
      background: #1e1e1e
    }

    .theme--dark.v-text-field--solo-inverted>.v-input__control>.v-input__slot {
      background: hsla(0, 0%, 100%, .16)
    }

    .theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot {
      background: #fff
    }

    .theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input {
      color: rgba(0, 0, 0, .87)
    }

    .theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input::-moz-placeholder {
      color: rgba(0, 0, 0, .38)
    }

    .theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot input::placeholder {
      color: rgba(0, 0, 0, .38)
    }

    .theme--dark.v-text-field--solo-inverted.v-input--is-focused>.v-input__control>.v-input__slot .v-label {
      color: rgba(0, 0, 0, .6)
    }

    .theme--dark.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state)>.v-input__control>.v-input__slot fieldset {
      color: hsla(0, 0%, 100%, .24)
    }

    .theme--dark.v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state):not(.v-input--is-disabled)>.v-input__control>.v-input__slot:hover fieldset {
      color: #fff
    }

    .theme--dark.v-text-field--outlined:not(.v-input--is-focused).v-input--is-disabled>.v-input__control>.v-input__slot fieldset {
      color: hsla(0, 0%, 100%, .16)
    }

    .v-text-field {
      margin-top: 4px;
      padding-top: 12px
    }

    .v-text-field__prefix,
    .v-text-field__suffix {
      line-height: 20px
    }

    .v-text-field input {
      flex: 1 1 auto;
      line-height: 20px;
      max-width: 100%;
      min-width: 0;
      padding: 8px 0;
      width: 100%
    }

    .v-text-field .v-input__control,
    .v-text-field .v-input__slot,
    .v-text-field fieldset {
      border-radius: inherit
    }

    .v-text-field .v-input__control,
    .v-text-field fieldset,
    .v-text-field.v-input--has-state .v-input__control>.v-text-field__details>.v-counter,
    .v-text-field.v-input--is-disabled .v-input__control>.v-text-field__details>.v-counter,
    .v-text-field.v-input--is-disabled .v-input__control>.v-text-field__details>.v-messages {
      color: currentColor
    }

    .v-text-field.v-input--dense {
      padding-top: 0
    }

    .v-text-field.v-input--dense .v-label {
      top: 4px
    }

    .v-text-field.v-input--dense:not(.v-text-field--outlined) .v-text-field__prefix,
    .v-text-field.v-input--dense:not(.v-text-field--outlined) .v-text-field__suffix,
    .v-text-field.v-input--dense:not(.v-text-field--outlined) input {
      padding: 4px 0 2px
    }

    .v-text-field.v-input--dense:not(.v-text-field--outlined) .v-text-field__prefix {
      padding-right: 4px
    }

    .v-text-field.v-input--dense:not(.v-text-field--outlined) .v-text-field__suffix {
      padding-left: 4px
    }

    .v-text-field.v-input--dense[type=text]::-ms-clear {
      display: none
    }

    .v-text-field.v-input--dense .v-input__append-inner,
    .v-text-field.v-input--dense .v-input__prepend-inner {
      margin-top: 0
    }

    .v-text-field .v-input__append-inner,
    .v-text-field .v-input__prepend-inner {
      align-self: flex-start;
      display: inline-flex;
      line-height: 1;
      margin-top: 4px;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-application--is-ltr .v-text-field .v-input__prepend-inner {
      margin-right: auto;
      padding-right: 4px
    }

    .v-application--is-ltr .v-text-field .v-input__append-inner,
    .v-application--is-rtl .v-text-field .v-input__prepend-inner {
      margin-left: auto;
      padding-left: 4px
    }

    .v-application--is-rtl .v-text-field .v-input__append-inner {
      margin-right: auto;
      padding-right: 4px
    }

    .v-text-field .v-counter {
      white-space: nowrap
    }

    .v-application--is-ltr .v-text-field .v-counter {
      margin-left: 8px
    }

    .v-application--is-rtl .v-text-field .v-counter {
      margin-right: 8px
    }

    .v-text-field .v-label {
      max-width: 90%;
      overflow: hidden;
      pointer-events: none;
      text-overflow: ellipsis;
      top: 6px;
      white-space: nowrap
    }

    .v-application--is-ltr .v-text-field .v-label {
      transform-origin: top left
    }

    .v-application--is-rtl .v-text-field .v-label {
      transform-origin: top right
    }

    .v-text-field .v-label--active {
      max-width: 133%;
      pointer-events: auto;
      transform: translateY(-18px) scale(.75)
    }

    .v-text-field>.v-input__control>.v-input__slot {
      cursor: text
    }

    .v-text-field>.v-input__control>.v-input__slot:after,
    .v-text-field>.v-input__control>.v-input__slot:before {
      bottom: -1px;
      content: "";
      left: 0;
      position: absolute;
      transition: .3s cubic-bezier(.25, .8, .5, 1);
      width: 100%
    }

    .v-text-field>.v-input__control>.v-input__slot:before {
      border-color: inherit;
      border-style: solid;
      border-width: thin 0 0
    }

    .v-text-field>.v-input__control>.v-input__slot:after {
      background-color: currentColor;
      border-color: currentcolor;
      border-style: solid;
      border-width: thin 0;
      transform: scaleX(0)
    }

    .v-text-field__details {
      display: flex;
      flex: 1 0 auto;
      max-width: 100%;
      min-height: 14px;
      overflow: hidden
    }

    .v-text-field__prefix,
    .v-text-field__suffix {
      align-self: center;
      cursor: default;
      transition: color .3s cubic-bezier(.25, .8, .5, 1);
      white-space: nowrap
    }

    .v-application--is-ltr .v-text-field__prefix {
      padding-right: 4px;
      text-align: right
    }

    .v-application--is-rtl .v-text-field__prefix {
      padding-left: 4px;
      text-align: left
    }

    .v-text-field__suffix {
      white-space: nowrap
    }

    .v-application--is-ltr .v-text-field__suffix {
      padding-left: 4px
    }

    .v-application--is-rtl .v-text-field__suffix {
      padding-right: 4px
    }

    .v-application--is-ltr .v-text-field--reverse .v-text-field__prefix {
      padding-left: 4px;
      padding-right: 0;
      text-align: left
    }

    .v-application--is-rtl .v-text-field--reverse .v-text-field__prefix {
      padding-left: 0;
      padding-right: 4px;
      text-align: right
    }

    .v-application--is-ltr .v-text-field--reverse .v-text-field__suffix {
      padding-left: 0;
      padding-right: 4px
    }

    .v-application--is-rtl .v-text-field--reverse .v-text-field__suffix {
      padding-left: 4px;
      padding-right: 0
    }

    .v-text-field>.v-input__control>.v-input__slot>.v-text-field__slot {
      display: flex;
      flex: 1 1 auto;
      position: relative
    }

    .v-text-field:not(.v-text-field--is-booted) .v-label,
    .v-text-field:not(.v-text-field--is-booted) legend {
      transition: none
    }

    .v-text-field--filled,
    .v-text-field--full-width,
    .v-text-field--outlined {
      position: relative
    }

    .v-text-field--filled>.v-input__control>.v-input__slot,
    .v-text-field--full-width>.v-input__control>.v-input__slot,
    .v-text-field--outlined>.v-input__control>.v-input__slot {
      align-items: stretch;
      min-height: 56px
    }

    .v-text-field--filled.v-input--dense>.v-input__control>.v-input__slot,
    .v-text-field--full-width.v-input--dense>.v-input__control>.v-input__slot,
    .v-text-field--outlined.v-input--dense>.v-input__control>.v-input__slot {
      min-height: 52px
    }

    .v-text-field--filled.v-input--dense.v-text-field--outlined.v-text-field--filled>.v-input__control>.v-input__slot,
    .v-text-field--filled.v-input--dense.v-text-field--outlined>.v-input__control>.v-input__slot,
    .v-text-field--filled.v-input--dense.v-text-field--single-line>.v-input__control>.v-input__slot,
    .v-text-field--full-width.v-input--dense.v-text-field--outlined.v-text-field--filled>.v-input__control>.v-input__slot,
    .v-text-field--full-width.v-input--dense.v-text-field--outlined>.v-input__control>.v-input__slot,
    .v-text-field--full-width.v-input--dense.v-text-field--single-line>.v-input__control>.v-input__slot,
    .v-text-field--outlined.v-input--dense.v-text-field--outlined.v-text-field--filled>.v-input__control>.v-input__slot,
    .v-text-field--outlined.v-input--dense.v-text-field--outlined>.v-input__control>.v-input__slot,
    .v-text-field--outlined.v-input--dense.v-text-field--single-line>.v-input__control>.v-input__slot {
      min-height: 40px
    }

    .v-text-field--outlined {
      border-radius: 4px
    }

    .v-text-field--enclosed .v-input__append-inner,
    .v-text-field--enclosed .v-input__append-outer,
    .v-text-field--enclosed .v-input__prepend-inner,
    .v-text-field--enclosed .v-input__prepend-outer,
    .v-text-field--full-width .v-input__append-inner,
    .v-text-field--full-width .v-input__append-outer,
    .v-text-field--full-width .v-input__prepend-inner,
    .v-text-field--full-width .v-input__prepend-outer {
      margin-top: 17px
    }

    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__append-inner,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__append-outer,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__prepend-inner,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo) .v-input__prepend-outer,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__append-inner,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__append-outer,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__prepend-inner,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo) .v-input__prepend-outer {
      margin-top: 14px
    }

    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-inner,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-outer,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-inner,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-outer,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-inner,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__append-outer,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-inner,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--single-line .v-input__prepend-outer {
      margin-top: 9px
    }

    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-inner,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-outer,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-inner,
    .v-text-field--enclosed.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-outer,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-inner,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__append-outer,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-inner,
    .v-text-field--full-width.v-input--dense:not(.v-text-field--solo).v-text-field--outlined .v-input__prepend-outer {
      margin-top: 8px
    }

    .v-text-field--filled .v-label,
    .v-text-field--full-width .v-label {
      top: 18px
    }

    .v-text-field--filled .v-label--active,
    .v-text-field--full-width .v-label--active {
      transform: translateY(-6px) scale(.75)
    }

    .v-text-field--filled.v-input--dense .v-label,
    .v-text-field--full-width.v-input--dense .v-label {
      top: 17px
    }

    .v-text-field--filled.v-input--dense .v-label--active,
    .v-text-field--full-width.v-input--dense .v-label--active {
      transform: translateY(-10px) scale(.75)
    }

    .v-text-field--filled.v-input--dense.v-text-field--single-line .v-label,
    .v-text-field--full-width.v-input--dense.v-text-field--single-line .v-label {
      top: 11px
    }

    .v-text-field--filled {
      border-radius: 4px 4px 0 0
    }

    .v-text-field--filled:not(.v-text-field--single-line) input {
      margin-top: 22px
    }

    .v-text-field--filled.v-input--dense:not(.v-text-field--single-line).v-text-field--outlined input {
      margin-top: 0
    }

    .v-text-field--filled .v-text-field__prefix,
    .v-text-field--filled .v-text-field__suffix {
      margin-top: 20px;
      max-height: 32px
    }

    .v-text-field--full-width {
      border-radius: 0
    }

    .v-text-field--outlined .v-text-field__slot,
    .v-text-field--single-line .v-text-field__slot {
      align-items: center
    }

    .v-text-field.v-text-field--enclosed {
      margin: 0;
      padding: 0
    }

    .v-text-field.v-text-field--enclosed.v-text-field--single-line .v-text-field__prefix,
    .v-text-field.v-text-field--enclosed.v-text-field--single-line .v-text-field__suffix {
      margin-top: 0
    }

    .v-text-field.v-text-field--enclosed:not(.v-text-field--filled) .v-progress-linear__background {
      display: none
    }

    .v-text-field.v-text-field--enclosed .v-text-field__details,
    .v-text-field.v-text-field--enclosed:not(.v-text-field--rounded)>.v-input__control>.v-input__slot {
      padding: 0 12px
    }

    .v-text-field.v-text-field--enclosed .v-text-field__details {
      margin-bottom: 8px;
      padding-top: 0
    }

    .v-application--is-ltr .v-text-field--reverse input {
      text-align: right
    }

    .v-application--is-rtl .v-text-field--reverse input {
      text-align: left
    }

    .v-application--is-ltr .v-text-field--reverse .v-label {
      transform-origin: top right
    }

    .v-application--is-rtl .v-text-field--reverse .v-label {
      transform-origin: top left
    }

    .v-text-field--reverse .v-text-field__slot,
    .v-text-field--reverse>.v-input__control>.v-input__slot {
      flex-direction: row-reverse
    }

    .v-text-field--outlined>.v-input__control>.v-input__slot:after,
    .v-text-field--outlined>.v-input__control>.v-input__slot:before,
    .v-text-field--rounded>.v-input__control>.v-input__slot:after,
    .v-text-field--rounded>.v-input__control>.v-input__slot:before,
    .v-text-field--solo>.v-input__control>.v-input__slot:after,
    .v-text-field--solo>.v-input__control>.v-input__slot:before {
      display: none
    }

    .v-text-field--outlined,
    .v-text-field--solo {
      border-radius: 4px
    }

    .v-text-field--outlined {
      margin-bottom: 16px;
      transition: border .3s cubic-bezier(.25, .8, .5, 1)
    }

    .v-text-field--outlined .v-label {
      top: 18px
    }

    .v-text-field--outlined .v-label--active {
      transform: translateY(-24px) scale(.75)
    }

    .v-text-field--outlined.v-input--dense .v-label {
      top: 10px
    }

    .v-text-field--outlined.v-input--dense .v-label--active {
      transform: translateY(-16px) scale(.75)
    }

    .v-text-field--outlined fieldset {
      border: 1px solid;
      border-collapse: collapse;
      bottom: 0;
      left: 0;
      pointer-events: none;
      position: absolute;
      right: 0;
      top: -5px;
      transition-duration: .15s;
      transition-property: color;
      transition-timing-function: cubic-bezier(.25, .8, .25, 1)
    }

    .v-application--is-ltr .v-text-field--outlined fieldset {
      padding-left: 8px
    }

    .v-application--is-ltr .v-text-field--outlined.v-text-field--reverse fieldset,
    .v-application--is-rtl .v-text-field--outlined fieldset {
      padding-right: 8px
    }

    .v-application--is-rtl .v-text-field--outlined.v-text-field--reverse fieldset {
      padding-left: 8px
    }

    .v-text-field--outlined legend {
      line-height: 11px;
      padding: 0;
      transition: width .3s cubic-bezier(.25, .8, .5, 1)
    }

    .v-application--is-ltr .v-text-field--outlined legend {
      text-align: left
    }

    .v-application--is-rtl .v-text-field--outlined legend {
      text-align: right
    }

    .v-application--is-ltr .v-text-field--outlined.v-text-field--reverse legend {
      margin-left: auto
    }

    .v-application--is-rtl .v-text-field--outlined.v-text-field--reverse legend {
      margin-right: auto
    }

    .v-application--is-ltr .v-text-field--outlined.v-text-field--rounded legend {
      margin-left: 12px
    }

    .v-application--is-rtl .v-text-field--outlined.v-text-field--rounded legend {
      margin-right: 12px
    }

    .v-text-field--outlined>.v-input__control>.v-input__slot {
      background: transparent
    }

    .v-text-field--outlined .v-text-field__prefix {
      max-height: 32px
    }

    .v-text-field--outlined .v-input__append-outer,
    .v-text-field--outlined .v-input__prepend-outer {
      margin-top: 18px
    }

    .v-text-field--outlined.v-input--has-state fieldset,
    .v-text-field--outlined.v-input--is-focused fieldset {
      border: 2px solid
    }

    .v-text-field--rounded {
      border-radius: 28px
    }

    .v-text-field--rounded>.v-input__control>.v-input__slot {
      padding: 0 24px
    }

    .v-text-field--shaped {
      border-radius: 16px 16px 0 0
    }

    .v-text-field.v-text-field--solo .v-label {
      top: calc(50% - 9px)
    }

    .v-text-field.v-text-field--solo .v-input__control {
      min-height: 48px;
      padding: 0
    }

    .v-text-field.v-text-field--solo .v-input__control input {
      caret-color: auto
    }

    .v-text-field.v-text-field--solo.v-input--dense>.v-input__control {
      min-height: 38px
    }

    .v-text-field.v-text-field--solo:not(.v-text-field--solo-flat)>.v-input__control>.v-input__slot {
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    .v-text-field.v-text-field--solo .v-input__append-inner,
    .v-text-field.v-text-field--solo .v-input__prepend-inner {
      align-self: center;
      margin-top: 0
    }

    .v-text-field.v-text-field--solo .v-input__append-outer,
    .v-text-field.v-text-field--solo .v-input__prepend-outer {
      margin-top: 12px
    }

    .v-text-field.v-text-field--solo.v-input--dense .v-input__append-outer,
    .v-text-field.v-text-field--solo.v-input--dense .v-input__prepend-outer {
      margin-top: 7px
    }

    .v-text-field.v-input--is-focused>.v-input__control>.v-input__slot:after {
      transform: scaleX(1)
    }

    .v-text-field.v-input--has-state>.v-input__control>.v-input__slot:before {
      border-color: currentColor
    }

    .v-text-field .v-input__icon--clear {
      opacity: 0;
      transition: opacity .3s cubic-bezier(.25, .8, .5, 1)
    }

    .v-text-field.v-input--is-dirty:hover .v-input__icon--clear,
    .v-text-field.v-input--is-focused .v-input__icon--clear {
      opacity: 1
    }
  </style>
  <style type="text/css">
    .theme--light.v-input,
    .theme--light.v-input input,
    .theme--light.v-input textarea {
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-input input::-moz-placeholder,
    .theme--light.v-input textarea::-moz-placeholder {
      color: rgba(0, 0, 0, .38)
    }

    .theme--light.v-input input::placeholder,
    .theme--light.v-input textarea::placeholder {
      color: rgba(0, 0, 0, .38)
    }

    .theme--light.v-input--is-disabled,
    .theme--light.v-input--is-disabled input,
    .theme--light.v-input--is-disabled textarea {
      color: rgba(0, 0, 0, .38)
    }

    .theme--dark.v-input,
    .theme--dark.v-input input,
    .theme--dark.v-input textarea {
      color: #fff
    }

    .theme--dark.v-input input::-moz-placeholder,
    .theme--dark.v-input textarea::-moz-placeholder {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--dark.v-input input::placeholder,
    .theme--dark.v-input textarea::placeholder {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--dark.v-input--is-disabled,
    .theme--dark.v-input--is-disabled input,
    .theme--dark.v-input--is-disabled textarea {
      color: hsla(0, 0%, 100%, .5)
    }

    .v-input {
      align-items: flex-start;
      display: flex;
      flex: 1 1 auto;
      font-size: 16px;
      letter-spacing: normal;
      max-width: 100%;
      text-align: left
    }

    .v-input .v-progress-linear {
      left: 0;
      top: calc(100% - 1px)
    }

    .v-input input {
      max-height: 32px
    }

    .v-input input:invalid,
    .v-input textarea:invalid {
      box-shadow: none
    }

    .v-input input:active,
    .v-input input:focus,
    .v-input textarea:active,
    .v-input textarea:focus {
      outline: none
    }

    .v-input .v-label {
      height: 20px;
      letter-spacing: normal;
      line-height: 20px
    }

    .v-input__append-outer,
    .v-input__prepend-outer {
      display: inline-flex;
      line-height: 1;
      margin-bottom: 4px;
      margin-top: 4px
    }

    .v-input__append-outer .v-icon,
    .v-input__prepend-outer .v-icon {
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-application--is-ltr .v-input__append-outer {
      margin-left: 9px
    }

    .v-application--is-ltr .v-input__prepend-outer,
    .v-application--is-rtl .v-input__append-outer {
      margin-right: 9px
    }

    .v-application--is-rtl .v-input__prepend-outer {
      margin-left: 9px
    }

    .v-input__control {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      flex-wrap: wrap;
      height: auto;
      min-width: 0;
      width: 100%
    }

    .v-input__icon {
      align-items: center;
      display: inline-flex;
      flex: 1 0 auto;
      height: 24px;
      justify-content: center;
      min-width: 24px;
      width: 24px
    }

    .v-input__icon--clear {
      border-radius: 50%
    }

    .v-input__icon--clear .v-icon--disabled {
      visibility: hidden
    }

    .v-input__slot {
      align-items: center;
      display: flex;
      margin-bottom: 8px;
      min-height: inherit;
      position: relative;
      transition: .3s cubic-bezier(.25, .8, .5, 1);
      transition-property: height, min-height;
      width: 100%
    }

    .v-input--dense>.v-input__control>.v-input__slot {
      margin-bottom: 4px
    }

    .v-input--is-loading>.v-input__control>.v-input__slot:after,
    .v-input--is-loading>.v-input__control>.v-input__slot:before {
      display: none
    }

    .v-input--hide-details>.v-input__control>.v-input__slot {
      margin-bottom: 0
    }

    .v-input--has-state.error--text .v-label {
      animation: v-shake .6s cubic-bezier(.25, .8, .5, 1)
    }

    .v-input--hide-spin-buttons input::-webkit-inner-spin-button,
    .v-input--hide-spin-buttons input::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0
    }

    .v-input--hide-spin-buttons input[type=number] {
      -moz-appearance: textfield
    }
  </style>
  <style type="text/css">
    .theme--light.v-label {
      color: rgba(0, 0, 0, .6)
    }

    .theme--light.v-label--is-disabled {
      color: rgba(0, 0, 0, .38)
    }

    .theme--dark.v-label {
      color: hsla(0, 0%, 100%, .7)
    }

    .theme--dark.v-label--is-disabled {
      color: hsla(0, 0%, 100%, .5)
    }

    .v-label {
      font-size: 16px;
      line-height: 1;
      min-height: 8px;
      transition: .3s cubic-bezier(.25, .8, .5, 1)
    }
  </style>
  <style type="text/css">
    .theme--light.v-messages {
      color: rgba(0, 0, 0, .6)
    }

    .theme--dark.v-messages {
      color: hsla(0, 0%, 100%, .7)
    }

    .v-messages {
      flex: 1 1 auto;
      font-size: 12px;
      min-height: 14px;
      min-width: 1px;
      position: relative
    }

    .v-application--is-ltr .v-messages {
      text-align: left
    }

    .v-application--is-rtl .v-messages {
      text-align: right
    }

    .v-messages__message {
      word-wrap: break-word;
      -webkit-hyphens: auto;
      hyphens: auto;
      line-height: 12px;
      word-break: break-word
    }
  </style>
  <style type="text/css">
    .theme--light.v-counter {
      color: rgba(0, 0, 0, .6)
    }

    .theme--dark.v-counter {
      color: hsla(0, 0%, 100%, .7)
    }

    .v-counter {
      flex: 0 1 auto;
      font-size: 12px;
      line-height: 12px;
      min-height: 12px
    }
  </style>
  <!--<script charset="utf-8" src="_nuxt/a1df162.js"></script>
    <script charset="utf-8" src="_nuxt/61c0c64.js"></script>
    <script charset="utf-8" src="_nuxt/15675dd.js"></script>
    <script charset="utf-8" src="_nuxt/90fbd91.js"></script>-->
  <script id="tmx_tags_js" type="text/javascript"
    src="https://muziwakk.goshorty.co.uk/630gzhwxbfsm5poi.js?mqfzojoh6r8lfio6=96si7pc0&amp;jqj2rdkd1rncpks0=2-105d70-18d11d8e8cc-9bc3c7a&amp;8hh0ic6wespfq7d6=1">
    </script>
  <style type="text/css">
    .button-container[data-v-4f3c6938] {
      width: 100%
    }

    .button-container[data-v-4f3c6938] .cover-submit-button {
      width: 75% !important
    }

    @media(min-width:1025px) {
      .button-container[data-v-4f3c6938] .cover-submit-button {
        width: 60% !important
      }
    }

    .button-container[data-v-4f3c6938] .back-button {
      background-color: #cbcbcb !important
    }

    .button-container[data-v-4f3c6938] .back-button {
      border: 1px solid #cbcbcb;
      max-width: 200px
    }

    .cover-details-input[data-v-4f3c6938] .v-input {
      padding-top: 4px
    }
  </style>
  <style type="text/css">
    @media(max-width:600px) {
      .reg-container[data-v-cd6e8740] {
        left: 14px;
        margin-bottom: 16px;
        position: relative;
        top: 30px;
        width: 100%
      }
    }

    @media(min-width:600px) {
      .reg-container[data-v-cd6e8740] {
        position: relative;
        right: 50px;
        top: 18px;
        transform: scale(.6)
      }
    }

    .reg-container[data-v-cd6e8740] .v-input {
      padding-left: 10px;
      padding-top: 15px
    }

    .reg-container[data-v-cd6e8740] .v-text-field__details {
      display: none
    }

    .card-detail[data-v-cd6e8740] {
      word-break: break-word
    }
  </style>
  <style type="text/css">
    .theme--light.v-select .v-select__selections {
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-select .v-select__selection--disabled,
    .theme--light.v-select.v-input--is-disabled .v-select__selections {
      color: rgba(0, 0, 0, .38)
    }

    .theme--dark.v-select .v-select__selections,
    .theme--light.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections {
      color: #fff
    }

    .theme--dark.v-select .v-select__selection--disabled,
    .theme--dark.v-select.v-input--is-disabled .v-select__selections {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--dark.v-select.v-text-field--solo-inverted.v-input--is-focused .v-select__selections {
      color: rgba(0, 0, 0, .87)
    }

    .v-select {
      position: relative
    }

    .v-select:not(.v-select--is-multi).v-text-field--single-line .v-select__selections {
      flex-wrap: nowrap
    }

    .v-select>.v-input__control>.v-input__slot {
      cursor: pointer
    }

    .v-select .v-chip {
      flex: 0 1 auto;
      margin: 4px
    }

    .v-select .v-chip--selected:after {
      opacity: .22
    }

    .v-select .fade-transition-leave-active {
      left: 0;
      position: absolute
    }

    .v-select.v-input--is-dirty ::-moz-placeholder {
      color: transparent !important
    }

    .v-select.v-input--is-dirty ::placeholder {
      color: transparent !important
    }

    .v-select:not(.v-input--is-dirty):not(.v-input--is-focused) .v-text-field__prefix {
      line-height: 20px;
      top: 7px;
      transition: .3s cubic-bezier(.25, .8, .5, 1)
    }

    .v-select.v-text-field--enclosed:not(.v-text-field--single-line):not(.v-text-field--outlined) .v-select__selections {
      padding-top: 20px
    }

    .v-select.v-text-field--outlined:not(.v-text-field--single-line) .v-select__selections {
      padding: 8px 0
    }

    .v-select.v-text-field--outlined:not(.v-text-field--single-line).v-input--dense .v-select__selections {
      padding: 4px 0
    }

    .v-select.v-text-field input {
      flex: 1 1;
      min-width: 0;
      position: relative
    }

    .v-select.v-text-field:not(.v-text-field--single-line) input {
      margin-top: 0
    }

    .v-select.v-select--is-menu-active .v-input__icon--append .v-icon {
      transform: rotate(180deg)
    }

    .v-select.v-select--chips input {
      margin: 0
    }

    .v-select.v-select--chips .v-select__selections {
      min-height: 42px
    }

    .v-select.v-select--chips.v-input--dense .v-select__selections {
      min-height: 40px
    }

    .v-select.v-select--chips .v-chip--select.v-chip--active:before {
      opacity: .2
    }

    .v-select.v-select--chips.v-select--chips--small .v-select__selections {
      min-height: 26px
    }

    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box .v-select__selections,
    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed .v-select__selections {
      min-height: 68px
    }

    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-input--dense .v-select__selections,
    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-input--dense .v-select__selections {
      min-height: 40px
    }

    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-select--chips--small .v-select__selections,
    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-select--chips--small .v-select__selections {
      min-height: 26px
    }

    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--box.v-select--chips--small.v-input--dense .v-select__selections,
    .v-select.v-select--chips:not(.v-text-field--single-line).v-text-field--enclosed.v-select--chips--small.v-input--dense .v-select__selections {
      min-height: 38px
    }

    .v-select.v-text-field--reverse .v-select__selections,
    .v-select.v-text-field--reverse .v-select__slot {
      flex-direction: row-reverse
    }

    .v-select.v-input--is-disabled:not(.v-input--is-readonly):not(.v-autocomplete) {
      pointer-events: none
    }

    .v-select__selections {
      align-items: center;
      display: flex;
      flex: 1 1;
      flex-wrap: wrap;
      line-height: 18px;
      max-width: 100%;
      min-width: 0
    }

    .v-select__selection {
      max-width: 90%
    }

    .v-select__selection--comma {
      margin: 7px 4px 7px 0;
      min-height: 10px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .v-select.v-input--dense .v-select__selection--comma {
      margin: 5px 4px 3px 0
    }

    .v-select.v-input--dense .v-chip {
      margin: 0 4px
    }

    .v-select__slot {
      align-items: center;
      display: flex;
      max-width: 100%;
      min-width: 0;
      position: relative;
      width: 100%
    }

    .v-select:not(.v-text-field--single-line):not(.v-text-field--outlined) .v-select__slot>input {
      align-self: flex-end
    }
  </style>
  <style type="text/css">
    .v-chip:not(.v-chip--outlined).accent,
    .v-chip:not(.v-chip--outlined).error,
    .v-chip:not(.v-chip--outlined).info,
    .v-chip:not(.v-chip--outlined).primary,
    .v-chip:not(.v-chip--outlined).secondary,
    .v-chip:not(.v-chip--outlined).success,
    .v-chip:not(.v-chip--outlined).warning {
      color: #fff
    }

    .theme--light.v-chip {
      border-color: rgba(0, 0, 0, .12);
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-chip:not(.v-chip--active) {
      background: #e0e0e0
    }

    .theme--light.v-chip:hover:before {
      opacity: .04
    }

    .theme--light.v-chip--active:before,
    .theme--light.v-chip--active:hover:before,
    .theme--light.v-chip:focus:before {
      opacity: .12
    }

    .theme--light.v-chip--active:focus:before {
      opacity: .16
    }

    .theme--dark.v-chip {
      border-color: hsla(0, 0%, 100%, .12);
      color: #fff
    }

    .theme--dark.v-chip:not(.v-chip--active) {
      background: #555
    }

    .theme--dark.v-chip:hover:before {
      opacity: .08
    }

    .theme--dark.v-chip--active:before,
    .theme--dark.v-chip--active:hover:before,
    .theme--dark.v-chip:focus:before {
      opacity: .24
    }

    .theme--dark.v-chip--active:focus:before {
      opacity: .32
    }

    .v-chip {
      align-items: center;
      cursor: default;
      display: inline-flex;
      line-height: 20px;
      max-width: 100%;
      outline: none;
      overflow: hidden;
      padding: 0 12px;
      position: relative;
      -webkit-text-decoration: none;
      text-decoration: none;
      transition-duration: .28s;
      transition-property: box-shadow, opacity;
      transition-timing-function: cubic-bezier(.4, 0, .2, 1);
      vertical-align: middle;
      white-space: nowrap
    }

    .v-chip:before {
      background-color: currentColor;
      border-radius: inherit;
      bottom: 0;
      content: "";
      left: 0;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      right: 0;
      top: 0
    }

    .v-chip .v-avatar {
      height: 24px !important;
      min-width: 24px !important;
      width: 24px !important
    }

    .v-chip .v-icon {
      font-size: 24px
    }

    .v-application--is-ltr .v-chip .v-avatar--left,
    .v-application--is-ltr .v-chip .v-icon--left {
      margin-left: -6px;
      margin-right: 6px
    }

    .v-application--is-ltr .v-chip .v-avatar--right,
    .v-application--is-ltr .v-chip .v-icon--right,
    .v-application--is-rtl .v-chip .v-avatar--left,
    .v-application--is-rtl .v-chip .v-icon--left {
      margin-left: 6px;
      margin-right: -6px
    }

    .v-application--is-rtl .v-chip .v-avatar--right,
    .v-application--is-rtl .v-chip .v-icon--right {
      margin-left: -6px;
      margin-right: 6px
    }

    .v-chip:not(.v-chip--no-color) .v-icon {
      color: inherit
    }

    .v-chip .v-chip__close.v-icon {
      font-size: 18px;
      max-height: 18px;
      max-width: 18px;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-application--is-ltr .v-chip .v-chip__close.v-icon.v-icon--right {
      margin-right: -4px
    }

    .v-application--is-rtl .v-chip .v-chip__close.v-icon.v-icon--right {
      margin-left: -4px
    }

    .v-chip .v-chip__close.v-icon:active,
    .v-chip .v-chip__close.v-icon:focus,
    .v-chip .v-chip__close.v-icon:hover {
      opacity: .72
    }

    .v-chip .v-chip__content {
      align-items: center;
      display: inline-flex;
      height: 100%;
      max-width: 100%
    }

    .v-chip--active .v-icon {
      color: inherit
    }

    .v-chip--link:before {
      transition: opacity .3s cubic-bezier(.25, .8, .5, 1)
    }

    .v-chip--link:focus:before {
      opacity: .32
    }

    .v-chip--clickable {
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-chip--clickable:active {
      box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    .v-chip--disabled {
      opacity: .4;
      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-chip__filter {
      max-width: 24px
    }

    .v-chip__filter.v-icon {
      color: inherit
    }

    .v-chip__filter.expand-x-transition-enter,
    .v-chip__filter.expand-x-transition-leave-active {
      margin: 0
    }

    .v-chip--pill .v-chip__filter {
      margin: 0 16px 0 0
    }

    .v-chip--pill .v-avatar {
      height: 32px !important;
      width: 32px !important
    }

    .v-application--is-ltr .v-chip--pill .v-avatar--left {
      margin-left: -12px
    }

    .v-application--is-ltr .v-chip--pill .v-avatar--right,
    .v-application--is-rtl .v-chip--pill .v-avatar--left {
      margin-right: -12px
    }

    .v-application--is-rtl .v-chip--pill .v-avatar--right {
      margin-left: -12px
    }

    .v-chip--label {
      border-radius: 4px !important
    }

    .v-chip.v-chip--outlined {
      border-style: solid;
      border-width: thin
    }

    .v-chip.v-chip--outlined.v-chip--active:before {
      opacity: .08
    }

    .v-chip.v-chip--outlined .v-icon {
      color: inherit
    }

    .v-chip.v-chip--outlined.v-chip.v-chip {
      background-color: transparent !important
    }

    .v-chip.v-chip--selected {
      background: transparent
    }

    .v-chip.v-chip--selected:after {
      opacity: .28
    }

    .v-chip.v-size--x-small {
      border-radius: 8px;
      font-size: 10px;
      height: 16px
    }

    .v-chip.v-size--small {
      border-radius: 12px;
      font-size: 12px;
      height: 24px
    }

    .v-chip.v-size--default {
      border-radius: 16px;
      font-size: 14px;
      height: 32px
    }

    .v-chip.v-size--large {
      border-radius: 27px;
      font-size: 16px;
      height: 54px
    }

    .v-chip.v-size--x-large {
      border-radius: 33px;
      font-size: 18px;
      height: 66px
    }
  </style>
  <style type="text/css">
    .v-menu {
      display: none
    }

    .v-menu--attached {
      display: inline
    }

    .v-menu__content {
      border-radius: 4px;
      box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12);
      contain: content;
      display: inline-block;
      max-width: 80%;
      overflow-x: hidden;
      overflow-y: auto;
      position: absolute
    }

    .v-menu__content--active {
      pointer-events: none
    }

    .v-menu__content--auto .v-list-item {
      transition-duration: .3s;
      transition-property: transform, opacity;
      transition-timing-function: cubic-bezier(.25, .8, .25, 1)
    }

    .v-menu__content--fixed {
      position: fixed
    }

    .v-menu__content>.card {
      backface-visibility: hidden;
      contain: content
    }

    .v-menu>.v-menu__content {
      max-width: none
    }

    .v-menu-transition-enter .v-list-item {
      min-width: 0;
      pointer-events: none
    }

    .v-menu-transition-enter-to .v-list-item {
      transition-delay: .1s
    }

    .v-menu-transition-leave-active,
    .v-menu-transition-leave-to {
      pointer-events: none
    }

    .v-menu-transition-enter,
    .v-menu-transition-leave-to {
      opacity: 0
    }

    .v-menu-transition-enter-active,
    .v-menu-transition-leave-active {
      transition: all .3s cubic-bezier(.25, .8, .25, 1)
    }

    .v-menu-transition-enter.v-menu__content--auto {
      transition: none !important
    }

    .v-menu-transition-enter.v-menu__content--auto .v-list-item {
      opacity: 0;
      transform: translateY(-15px)
    }

    .v-menu-transition-enter.v-menu__content--auto .v-list-item--active {
      opacity: 1;
      pointer-events: auto;
      transform: none !important
    }
  </style>
  <style type="text/css">
    .v-simple-checkbox {
      align-self: center;
      line-height: normal;
      position: relative;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-simple-checkbox .v-icon {
      cursor: pointer
    }

    .v-simple-checkbox--disabled {
      cursor: default
    }
  </style>
  <style type="text/css">
    .theme--light.v-subheader {
      color: rgba(0, 0, 0, .6)
    }

    .theme--dark.v-subheader {
      color: hsla(0, 0%, 100%, .7)
    }

    .v-subheader {
      align-items: center;
      display: flex;
      font-size: .875rem;
      font-weight: 400;
      height: 48px;
      padding: 0 16px
    }

    .v-subheader--inset {
      margin-left: 56px
    }
  </style>
  <style type="text/css">
    .theme--light.v-list-item--disabled {
      color: rgba(0, 0, 0, .38)
    }

    .theme--light.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled) {
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-list-item .v-list-item__mask {
      background: #eee;
      color: rgba(0, 0, 0, .38)
    }

    .theme--light.v-list-item:not(.v-list-item--disabled) .v-list-item__action-text,
    .theme--light.v-list-item:not(.v-list-item--disabled) .v-list-item__subtitle {
      color: rgba(0, 0, 0, .6)
    }

    .theme--light.v-list-item:hover:before {
      opacity: .04
    }

    .theme--light.v-list-item--active:before,
    .theme--light.v-list-item--active:hover:before,
    .theme--light.v-list-item:focus:before {
      opacity: .12
    }

    .theme--light.v-list-item--active:focus:before,
    .theme--light.v-list-item.v-list-item--highlighted:before {
      opacity: .16
    }

    .theme--dark.v-list-item--disabled {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--dark.v-list-item:not(.v-list-item--active):not(.v-list-item--disabled) {
      color: #fff
    }

    .theme--dark.v-list-item .v-list-item__mask {
      background: #494949;
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--dark.v-list-item:not(.v-list-item--disabled) .v-list-item__action-text,
    .theme--dark.v-list-item:not(.v-list-item--disabled) .v-list-item__subtitle {
      color: hsla(0, 0%, 100%, .7)
    }

    .theme--dark.v-list-item:hover:before {
      opacity: .08
    }

    .theme--dark.v-list-item--active:before,
    .theme--dark.v-list-item--active:hover:before,
    .theme--dark.v-list-item:focus:before {
      opacity: .24
    }

    .theme--dark.v-list-item--active:focus:before,
    .theme--dark.v-list-item.v-list-item--highlighted:before {
      opacity: .32
    }

    .v-list-item {
      align-items: center;
      display: flex;
      flex: 1 1 100%;
      letter-spacing: normal;
      min-height: 48px;
      outline: none;
      padding: 0 16px;
      position: relative;
      -webkit-text-decoration: none;
      text-decoration: none
    }

    .v-list-item--disabled {
      pointer-events: none
    }

    .v-list-item--selectable {
      -webkit-user-select: auto;
      -moz-user-select: auto;
      user-select: auto
    }

    .v-list-item:after {
      content: "";
      font-size: 0;
      min-height: inherit
    }

    .v-list-item__action {
      align-self: center;
      margin: 12px 0
    }

    .v-list-item__action .v-input,
    .v-list-item__action .v-input--selection-controls__input,
    .v-list-item__action .v-input__control,
    .v-list-item__action .v-input__slot {
      margin: 0 !important
    }

    .v-list-item__action .v-input {
      padding: 0
    }

    .v-list-item__action .v-input .v-messages {
      display: none
    }

    .v-list-item__action-text {
      font-size: .75rem
    }

    .v-list-item__avatar {
      align-self: center;
      justify-content: flex-start
    }

    .v-list-item__avatar,
    .v-list-item__avatar.v-list-item__avatar--horizontal {
      margin-bottom: 8px;
      margin-top: 8px
    }

    .v-application--is-ltr .v-list-item__avatar.v-list-item__avatar--horizontal:first-child {
      margin-left: -16px
    }

    .v-application--is-rtl .v-list-item__avatar.v-list-item__avatar--horizontal:first-child {
      margin-right: -16px
    }

    .v-application--is-ltr .v-list-item__avatar.v-list-item__avatar--horizontal:last-child {
      margin-left: -16px
    }

    .v-application--is-rtl .v-list-item__avatar.v-list-item__avatar--horizontal:last-child {
      margin-right: -16px
    }

    .v-list-item__content {
      align-items: center;
      align-self: center;
      display: flex;
      flex: 1 1;
      flex-wrap: wrap;
      overflow: hidden;
      padding: 12px 0
    }

    .v-list-item__content>* {
      flex: 1 0 100%;
      line-height: 1.1
    }

    .v-list-item__content>:not(:last-child) {
      margin-bottom: 2px
    }

    .v-list-item__icon {
      align-self: flex-start;
      margin: 16px 0
    }

    .v-application--is-ltr .v-list-item__action:last-of-type:not(:only-child),
    .v-application--is-ltr .v-list-item__avatar:last-of-type:not(:only-child),
    .v-application--is-ltr .v-list-item__icon:last-of-type:not(:only-child) {
      margin-left: 16px
    }

    .v-application--is-ltr .v-list-item__avatar:first-child,
    .v-application--is-rtl .v-list-item__action:last-of-type:not(:only-child),
    .v-application--is-rtl .v-list-item__avatar:last-of-type:not(:only-child),
    .v-application--is-rtl .v-list-item__icon:last-of-type:not(:only-child) {
      margin-right: 16px
    }

    .v-application--is-rtl .v-list-item__avatar:first-child {
      margin-left: 16px
    }

    .v-application--is-ltr .v-list-item__action:first-child,
    .v-application--is-ltr .v-list-item__icon:first-child {
      margin-right: 32px
    }

    .v-application--is-rtl .v-list-item__action:first-child,
    .v-application--is-rtl .v-list-item__icon:first-child {
      margin-left: 32px
    }

    .v-list-item__action,
    .v-list-item__avatar,
    .v-list-item__icon {
      display: inline-flex;
      min-width: 24px
    }

    .v-list-item .v-list-item__subtitle,
    .v-list-item .v-list-item__title {
      line-height: 1.2
    }

    .v-list-item__subtitle,
    .v-list-item__title {
      flex: 1 1 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .v-list-item__title {
      align-self: center;
      font-size: 1rem
    }

    .v-list-item__title>.v-badge {
      margin-top: 16px
    }

    .v-list-item__subtitle {
      font-size: .875rem
    }

    .v-list--dense .v-list-item,
    .v-list-item--dense {
      min-height: 40px
    }

    .v-list--dense .v-list-item .v-list-item__icon,
    .v-list-item--dense .v-list-item__icon {
      height: 24px;
      margin-bottom: 8px;
      margin-top: 8px
    }

    .v-list--dense .v-list-item .v-list-item__content,
    .v-list-item--dense .v-list-item__content {
      padding: 8px 0
    }

    .v-list--dense .v-list-item .v-list-item__subtitle,
    .v-list--dense .v-list-item .v-list-item__title,
    .v-list-item--dense .v-list-item__subtitle,
    .v-list-item--dense .v-list-item__title {
      font-size: .8125rem;
      font-weight: 500;
      line-height: 1rem
    }

    .v-list--dense .v-list-item.v-list-item--two-line,
    .v-list-item--dense.v-list-item--two-line {
      min-height: 60px
    }

    .v-list--dense .v-list-item.v-list-item--three-line,
    .v-list-item--dense.v-list-item--three-line {
      min-height: 76px
    }

    .v-list-item--link {
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-list-item--link:before {
      background-color: currentColor;
      bottom: 0;
      content: "";
      left: 0;
      opacity: 0;
      pointer-events: none;
      position: absolute;
      right: 0;
      top: 0;
      transition: .3s cubic-bezier(.25, .8, .5, 1)
    }

    .v-list .v-list-item--active,
    .v-list .v-list-item--active .v-icon {
      color: inherit
    }

    .v-list-item__action--stack {
      align-items: flex-end;
      align-self: stretch;
      flex-direction: column;
      justify-content: space-between;
      white-space: nowrap
    }

    .v-list--three-line .v-list-item .v-list-item__avatar:not(.v-list-item__avatar--horizontal),
    .v-list--three-line .v-list-item .v-list-item__icon,
    .v-list--two-line .v-list-item .v-list-item__avatar:not(.v-list-item__avatar--horizontal),
    .v-list--two-line .v-list-item .v-list-item__icon,
    .v-list-item--three-line .v-list-item__avatar:not(.v-list-item__avatar--horizontal),
    .v-list-item--three-line .v-list-item__icon,
    .v-list-item--two-line .v-list-item__avatar:not(.v-list-item__avatar--horizontal),
    .v-list-item--two-line .v-list-item__icon {
      margin-bottom: 16px;
      margin-top: 16px
    }

    .v-list--two-line .v-list-item,
    .v-list-item--two-line {
      min-height: 64px
    }

    .v-list--two-line .v-list-item .v-list-item__icon,
    .v-list-item--two-line .v-list-item__icon {
      margin-bottom: 32px
    }

    .v-list--three-line .v-list-item,
    .v-list-item--three-line {
      min-height: 88px
    }

    .v-list--three-line .v-list-item .v-list-item__action,
    .v-list--three-line .v-list-item .v-list-item__avatar,
    .v-list-item--three-line .v-list-item__action,
    .v-list-item--three-line .v-list-item__avatar {
      align-self: flex-start;
      margin-bottom: 16px;
      margin-top: 16px
    }

    .v-list--three-line .v-list-item .v-list-item__content,
    .v-list-item--three-line .v-list-item__content {
      align-self: stretch
    }

    .v-list--three-line .v-list-item .v-list-item__subtitle,
    .v-list-item--three-line .v-list-item__subtitle {
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      display: -webkit-box;
      white-space: normal
    }
  </style>
  <style type="text/css">
    .v-list.accent>.v-list-item,
    .v-list.error>.v-list-item,
    .v-list.info>.v-list-item,
    .v-list.primary>.v-list-item,
    .v-list.secondary>.v-list-item,
    .v-list.success>.v-list-item,
    .v-list.warning>.v-list-item {
      color: #fff
    }

    .theme--light.v-list {
      background: #fff;
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-list .v-list--disabled {
      color: rgba(0, 0, 0, .38)
    }

    .theme--light.v-list .v-list-group--active:after,
    .theme--light.v-list .v-list-group--active:before {
      background: rgba(0, 0, 0, .12)
    }

    .theme--dark.v-list {
      background: #1e1e1e;
      color: #fff
    }

    .theme--dark.v-list .v-list--disabled {
      color: hsla(0, 0%, 100%, .5)
    }

    .theme--dark.v-list .v-list-group--active:after,
    .theme--dark.v-list .v-list-group--active:before {
      background: hsla(0, 0%, 100%, .12)
    }

    .v-sheet.v-list {
      border-radius: 0
    }

    .v-sheet.v-list:not(.v-sheet--outlined) {
      box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
    }

    .v-sheet.v-list.v-sheet--shaped {
      border-radius: 0
    }

    .v-list {
      display: block;
      padding: 8px 0;
      position: static;
      transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1)
    }

    .v-list--disabled {
      pointer-events: none
    }

    .v-list--flat .v-list-item:before {
      display: none
    }

    .v-list--dense .v-subheader {
      font-size: .75rem;
      height: 40px;
      padding: 0 8px
    }

    .v-list--nav .v-list-item:not(:last-child):not(:only-child),
    .v-list--rounded .v-list-item:not(:last-child):not(:only-child) {
      margin-bottom: 8px
    }

    .v-list--nav .v-list-item--dense:not(:last-child):not(:only-child),
    .v-list--nav.v-list--dense .v-list-item:not(:last-child):not(:only-child),
    .v-list--rounded .v-list-item--dense:not(:last-child):not(:only-child),
    .v-list--rounded.v-list--dense .v-list-item:not(:last-child):not(:only-child) {
      margin-bottom: 4px
    }

    .v-list--nav {
      padding-left: 8px;
      padding-right: 8px
    }

    .v-list--nav .v-list-item {
      padding: 0 8px
    }

    .v-list--nav .v-list-item,
    .v-list--nav .v-list-item:before {
      border-radius: 4px
    }

    .v-application--is-ltr .v-list.v-sheet--shaped .v-list-item,
    .v-application--is-ltr .v-list.v-sheet--shaped .v-list-item:before,
    .v-application--is-ltr .v-list.v-sheet--shaped .v-list-item>.v-ripple__container {
      border-bottom-right-radius: 32px !important;
      border-top-right-radius: 32px !important
    }

    .v-application--is-rtl .v-list.v-sheet--shaped .v-list-item,
    .v-application--is-rtl .v-list.v-sheet--shaped .v-list-item:before,
    .v-application--is-rtl .v-list.v-sheet--shaped .v-list-item>.v-ripple__container {
      border-bottom-left-radius: 32px !important;
      border-top-left-radius: 32px !important
    }

    .v-application--is-ltr .v-list.v-sheet--shaped.v-list--two-line .v-list-item,
    .v-application--is-ltr .v-list.v-sheet--shaped.v-list--two-line .v-list-item:before,
    .v-application--is-ltr .v-list.v-sheet--shaped.v-list--two-line .v-list-item>.v-ripple__container {
      border-bottom-right-radius: 42.6666666667px !important;
      border-top-right-radius: 42.6666666667px !important
    }

    .v-application--is-rtl .v-list.v-sheet--shaped.v-list--two-line .v-list-item,
    .v-application--is-rtl .v-list.v-sheet--shaped.v-list--two-line .v-list-item:before,
    .v-application--is-rtl .v-list.v-sheet--shaped.v-list--two-line .v-list-item>.v-ripple__container {
      border-bottom-left-radius: 42.6666666667px !important;
      border-top-left-radius: 42.6666666667px !important
    }

    .v-application--is-ltr .v-list.v-sheet--shaped.v-list--three-line .v-list-item,
    .v-application--is-ltr .v-list.v-sheet--shaped.v-list--three-line .v-list-item:before,
    .v-application--is-ltr .v-list.v-sheet--shaped.v-list--three-line .v-list-item>.v-ripple__container {
      border-bottom-right-radius: 58.6666666667px !important;
      border-top-right-radius: 58.6666666667px !important
    }

    .v-application--is-rtl .v-list.v-sheet--shaped.v-list--three-line .v-list-item,
    .v-application--is-rtl .v-list.v-sheet--shaped.v-list--three-line .v-list-item:before,
    .v-application--is-rtl .v-list.v-sheet--shaped.v-list--three-line .v-list-item>.v-ripple__container {
      border-bottom-left-radius: 58.6666666667px !important;
      border-top-left-radius: 58.6666666667px !important
    }

    .v-application--is-ltr .v-list.v-sheet--shaped {
      padding-right: 8px
    }

    .v-application--is-rtl .v-list.v-sheet--shaped {
      padding-left: 8px
    }

    .v-list--rounded {
      padding: 8px
    }

    .v-list--rounded .v-list-item,
    .v-list--rounded .v-list-item:before,
    .v-list--rounded .v-list-item>.v-ripple__container {
      border-radius: 32px !important
    }

    .v-list--rounded.v-list--two-line .v-list-item,
    .v-list--rounded.v-list--two-line .v-list-item:before,
    .v-list--rounded.v-list--two-line .v-list-item>.v-ripple__container {
      border-radius: 42.6666666667px !important
    }

    .v-list--rounded.v-list--three-line .v-list-item,
    .v-list--rounded.v-list--three-line .v-list-item:before,
    .v-list--rounded.v-list--three-line .v-list-item>.v-ripple__container {
      border-radius: 58.6666666667px !important
    }

    .v-list--subheader {
      padding-top: 0
    }
  </style>
  <style type="text/css">
    .v-list-group .v-list-group__header .v-list-item__icon.v-list-group__header__append-icon {
      align-self: center;
      justify-content: flex-end;
      margin: 0;
      min-width: 48px
    }

    .v-list-group--sub-group {
      align-items: center;
      display: flex;
      flex-wrap: wrap
    }

    .v-list-group__header.v-list-item--active:not(:hover):not(:focus):before {
      opacity: 0
    }

    .v-list-group__items {
      flex: 1 1 auto
    }

    .v-list-group__items .v-list-group__items,
    .v-list-group__items .v-list-item {
      overflow: hidden
    }

    .v-list-group--active>.v-list-group__header.v-list-group__header--sub-group>.v-list-group__header__prepend-icon .v-icon,
    .v-list-group--active>.v-list-group__header>.v-list-group__header__append-icon .v-icon {
      transform: rotate(-180deg)
    }

    .v-list-group--active>.v-list-group__header .v-list-group__header__prepend-icon .v-icon,
    .v-list-group--active>.v-list-group__header .v-list-item,
    .v-list-group--active>.v-list-group__header .v-list-item__content {
      color: inherit
    }

    .v-application--is-ltr .v-list-group--sub-group .v-list-item__action:first-child,
    .v-application--is-ltr .v-list-group--sub-group .v-list-item__avatar:first-child,
    .v-application--is-ltr .v-list-group--sub-group .v-list-item__icon:first-child {
      margin-right: 16px
    }

    .v-application--is-rtl .v-list-group--sub-group .v-list-item__action:first-child,
    .v-application--is-rtl .v-list-group--sub-group .v-list-item__avatar:first-child,
    .v-application--is-rtl .v-list-group--sub-group .v-list-item__icon:first-child {
      margin-left: 16px
    }

    .v-application--is-ltr .v-list-group--sub-group .v-list-group__header {
      padding-left: 32px
    }

    .v-application--is-rtl .v-list-group--sub-group .v-list-group__header {
      padding-right: 32px
    }

    .v-application--is-ltr .v-list-group--sub-group .v-list-group__items .v-list-item {
      padding-left: 40px
    }

    .v-application--is-rtl .v-list-group--sub-group .v-list-group__items .v-list-item {
      padding-right: 40px
    }

    .v-list-group--sub-group.v-list-group--active .v-list-item__icon.v-list-group__header__prepend-icon .v-icon {
      transform: rotate(-180deg)
    }

    .v-application--is-ltr .v-list-group--no-action>.v-list-group__items>.v-list-item {
      padding-left: 72px
    }

    .v-application--is-rtl .v-list-group--no-action>.v-list-group__items>.v-list-item {
      padding-right: 72px
    }

    .v-application--is-ltr .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item {
      padding-left: 88px
    }

    .v-application--is-rtl .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item {
      padding-right: 88px
    }

    .v-application--is-ltr .v-list--dense .v-list-group--sub-group .v-list-group__header {
      padding-left: 24px
    }

    .v-application--is-rtl .v-list--dense .v-list-group--sub-group .v-list-group__header {
      padding-right: 24px
    }

    .v-application--is-ltr .v-list--dense.v-list--nav .v-list-group--no-action>.v-list-group__items>.v-list-item {
      padding-left: 64px
    }

    .v-application--is-rtl .v-list--dense.v-list--nav .v-list-group--no-action>.v-list-group__items>.v-list-item {
      padding-right: 64px
    }

    .v-application--is-ltr .v-list--dense.v-list--nav .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item {
      padding-left: 80px
    }

    .v-application--is-rtl .v-list--dense.v-list--nav .v-list-group--no-action.v-list-group--sub-group>.v-list-group__items>.v-list-item {
      padding-right: 80px
    }
  </style>
  <style type="text/css">
    .v-list-item-group .v-list-item--active {
      color: inherit
    }
  </style>
  <style type="text/css">
    .v-item-group {
      flex: 0 1 auto;
      max-width: 100%;
      position: relative;
      transition: .3s cubic-bezier(.25, .8, .5, 1)
    }
  </style>
  <style type="text/css">
    .v-avatar {
      align-items: center;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      line-height: normal;
      overflow: hidden;
      position: relative;
      text-align: center;
      vertical-align: middle
    }

    .v-avatar .v-icon,
    .v-avatar .v-image,
    .v-avatar .v-responsive__content,
    .v-avatar img,
    .v-avatar svg {
      border-radius: inherit;
      display: inline-flex;
      height: inherit;
      width: inherit
    }
  </style>
  <style type="text/css">
    .formLabel[data-v-0d86b310] {
      font-family: "TT Norms Pro Bold", sans-serif
    }
  </style>
  <style type="text/css">
    .theme--light.v-btn-toggle:not(.v-btn-toggle--group) {
      background: #fff;
      color: rgba(0, 0, 0, .87)
    }

    .theme--light.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn {
      border-color: rgba(0, 0, 0, .12) !important
    }

    .theme--light.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn:focus:not(:active) {
      border-color: rgba(0, 0, 0, .26)
    }

    .theme--light.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn .v-icon {
      color: #000
    }

    .theme--dark.v-btn-toggle:not(.v-btn-toggle--group) {
      background: #1e1e1e;
      color: #fff
    }

    .theme--dark.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn {
      border-color: hsla(0, 0%, 100%, .12) !important
    }

    .theme--dark.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn:focus:not(:active) {
      border-color: hsla(0, 0%, 100%, .3)
    }

    .theme--dark.v-btn-toggle:not(.v-btn-toggle--group) .v-btn.v-btn .v-icon {
      color: #fff
    }

    .v-btn-toggle {
      border-radius: 4px;
      display: inline-flex;
      max-width: 100%
    }

    .v-btn-toggle>.v-btn.v-btn {
      border-radius: 0;
      border-style: solid;
      border-width: thin;
      box-shadow: none;
      opacity: .8;
      padding: 0 12px
    }

    .v-application--is-ltr .v-btn-toggle>.v-btn.v-btn:first-child {
      border-bottom-left-radius: inherit;
      border-top-left-radius: inherit
    }

    .v-application--is-ltr .v-btn-toggle>.v-btn.v-btn:last-child,
    .v-application--is-rtl .v-btn-toggle>.v-btn.v-btn:first-child {
      border-bottom-right-radius: inherit;
      border-top-right-radius: inherit
    }

    .v-application--is-rtl .v-btn-toggle>.v-btn.v-btn:last-child {
      border-bottom-left-radius: inherit;
      border-top-left-radius: inherit
    }

    .v-btn-toggle>.v-btn.v-btn--active {
      color: inherit;
      opacity: 1
    }

    .v-btn-toggle>.v-btn.v-btn:after {
      display: none
    }

    .v-application--is-ltr .v-btn-toggle>.v-btn.v-btn:not(:first-child),
    .v-application--is-rtl .v-btn-toggle>.v-btn.v-btn:not(:last-child) {
      border-left-width: 0
    }

    .v-btn-toggle .v-btn.v-btn.v-size--default {
      min-height: 0;
      min-width: 48px
    }

    .v-btn-toggle:not(.v-btn-toggle--dense) .v-btn.v-btn.v-size--default {
      height: 48px
    }

    .v-btn-toggle--borderless>.v-btn.v-btn {
      border-width: 0
    }

    .v-btn-toggle--dense>.v-btn.v-btn {
      padding: 0 8px
    }

    .v-btn-toggle--group {
      border-radius: 0
    }

    .v-btn-toggle--group>.v-btn.v-btn {
      background-color: transparent !important;
      border-color: transparent;
      margin: 4px;
      min-width: auto
    }

    .v-btn-toggle--rounded {
      border-radius: 24px
    }

    .v-btn-toggle--shaped {
      border-radius: 24px 4px
    }

    .v-btn-toggle--tile {
      border-radius: 0
    }
  </style>
  <style type="text/css">
    .active-button[data-v-2a2eab15] {
      color: #000 !important;
      opacity: 1
    }

    .btnGroup[data-v-2a2eab15] .toggle-button {
      border-color: #fff !important
    }

    .btnGroup[data-v-2a2eab15] .toggle-button .toggle-button {
      background-color: #f5f5f5 !important;
      font-family: "TT Norms Pro Serif Regular", serif !important
    }

    .btnGroup[data-v-2a2eab15] .square-btn {
      max-height: 46px !important
    }

    .btnGroup[data-v-2a2eab15] .square-btn {
      font-size: 1rem;
      margin-top: 2px
    }

    .btnGroup[data-v-2a2eab15] .square-btn .v-btn__content {
      font-size: 1rem
    }

    .v-btn--active[data-v-2a2eab15] {
      background-color: var(--brandGreen) !important
    }

    .v-btn--active[data-v-2a2eab15]:before {
      opacity: 0
    }

    .widthClass[data-v-2a2eab15] {
      max-width: 95%;
      width: 95%
    }
  </style>
  <style type="text/css">
    .start-time[data-v-23e74741] .v-text-field__slot {
      min-height: 44px
    }
  </style>
  <style type="text/css">
    .v-input--checkbox.v-input--indeterminate.v-input--is-disabled {
      opacity: .6
    }

    .v-input--checkbox.v-input--dense {
      margin-top: 4px
    }
  </style>
  <style type="text/css">
    .v-input--selection-controls {
      margin-top: 16px;
      padding-top: 4px
    }

    .v-input--selection-controls>.v-input__append-outer,
    .v-input--selection-controls>.v-input__prepend-outer {
      margin-bottom: 0;
      margin-top: 0
    }

    .v-input--selection-controls:not(.v-input--hide-details)>.v-input__slot {
      margin-bottom: 12px
    }

    .v-input--selection-controls .v-input__slot,
    .v-input--selection-controls .v-radio {
      cursor: pointer
    }

    .v-input--selection-controls .v-input__slot>.v-label,
    .v-input--selection-controls .v-radio>.v-label {
      align-items: center;
      display: inline-flex;
      flex: 1 1 auto;
      height: auto
    }

    .v-input--selection-controls__input {
      color: inherit;
      display: inline-flex;
      flex: 0 0 auto;
      height: 24px;
      position: relative;
      transition: .3s cubic-bezier(.25, .8, .5, 1);
      transition-property: transform;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      width: 24px
    }

    .v-input--selection-controls__input .v-icon {
      width: 100%
    }

    .v-application--is-ltr .v-input--selection-controls__input {
      margin-right: 8px
    }

    .v-application--is-rtl .v-input--selection-controls__input {
      margin-left: 8px
    }

    .v-input--selection-controls__input input[role=checkbox],
    .v-input--selection-controls__input input[role=radio],
    .v-input--selection-controls__input input[role=switch] {
      cursor: pointer;
      height: 100%;
      opacity: 0;
      position: absolute;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      width: 100%
    }

    .v-input--selection-controls__input+.v-label {
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .v-input--selection-controls__ripple {
      border-radius: 50%;
      cursor: pointer;
      height: 34px;
      left: -12px;
      margin: 7px;
      position: absolute;
      top: calc(50% - 24px);
      transition: inherit;
      width: 34px
    }

    .v-input--selection-controls__ripple:before {
      border-radius: inherit;
      bottom: 0;
      content: "";
      left: 0;
      opacity: .2;
      position: absolute;
      right: 0;
      top: 0;
      transform: scale(.2);
      transform-origin: center center;
      transition: inherit
    }

    .v-input--selection-controls__ripple>.v-ripple__container {
      transform: scale(1.2)
    }

    .v-input--selection-controls.v-input--dense .v-input--selection-controls__ripple {
      height: 28px;
      left: -9px;
      width: 28px
    }

    .v-input--selection-controls.v-input--dense:not(.v-input--switch) .v-input--selection-controls__ripple {
      top: calc(50% - 21px)
    }

    .v-input--selection-controls.v-input {
      flex: 0 1 auto
    }

    .v-input--selection-controls .v-radio--is-focused .v-input--selection-controls__ripple:before,
    .v-input--selection-controls.v-input--is-focused .v-input--selection-controls__ripple:before {
      background: currentColor;
      transform: scale(1.2)
    }

    .v-input--selection-controls.v-input--is-disabled:not(.v-input--indeterminate) .v-icon {
      color: inherit
    }

    .v-input--selection-controls.v-input--is-disabled:not(.v-input--is-readonly) {
      pointer-events: none
    }

    .v-input--selection-controls__input:hover .v-input--selection-controls__ripple:before {
      background: currentColor;
      transform: scale(1.2);
      transition: none
    }
  </style>
  <style type="text/css">
    .custom-checkbox[data-v-7d9ba031] .v-input--selection-controls__input i {
      caret-color: red !important;
      color: red !important
    }
  </style>
  <meta http-equiv="origin-trial"
    content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
  <script type="text/javascript" async=""
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/622512607/?random=1705580880609&amp;cv=11&amp;fst=1705580880609&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45He41a0v813094902&amp;gcd=11r1r1l1l5&amp;dma=0&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fbuy.v2.goshorty.co.uk%2F%3Freg%3DGF17HNO%26gclid%3DCj0KCQiAhomtBhDgARIsABcaYyk9Ay2CwP-IbqAoSZdmOAwmqtDGckvjKwY-bj1mK1eS7rjjGAL8HnoaAlk5EALw_wcB&amp;ref=https%3A%2F%2Fgoshorty.co.uk%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Temporary%20Insurance%20Instant%20Quote%20%7C%201hr-%201%20Short%20Term%20Insurance%20%7C%20GoShorty&amp;auid=607326266.1705515086&amp;uaa=x86&amp;uab=64&amp;uafvl=Not_A%2520Brand%3B8.0.0.0%7CChromium%3B120.0.6099.217%7CGoogle%2520Chrome%3B120.0.6099.217&amp;uamb=0&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0&amp;rfmt=3&amp;fmt=4">
    </script>
  <script src="https://cdn-ukwest.onetrust.com/scripttemplates/202308.2.0/otBannerSdk.js" async=""
    type="text/javascript"></script>
  <script async="" type="text/javascript" src="https://www.clickcease.com/monitor/stat.js"></script>
  <script src="https://bat.bing.com/p/action/56290114.js" type="text/javascript" async="" data-ueto="ueto_76e7a0ba1e">
  </script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/sizzle.min.js" async="true"
    defer="true"></script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/common.js" async="true"
    defer="true"></script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/wt_debugger.js" async="true"
    defer="true"></script>
  <script type="text/javascript" src="/c.webtrends-optimize.com/acs/common/js/5.4/wt_lib.js" async="true"
    defer="true"></script>
  <style id="onetrust-style">
    #onetrust-banner-sdk {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
    }

    #onetrust-banner-sdk .onetrust-vendors-list-handler {
      cursor: pointer;
      color: #1f96db;
      font-size: inherit;
      font-weight: bold;
      text-decoration: none;
      margin-left: 5px
    }

    #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
      color: #1f96db
    }

    #onetrust-banner-sdk:focus {
      outline: 2px solid #000;
      outline-offset: -2px
    }

    #onetrust-banner-sdk a:focus {
      outline: 2px solid #000
    }

    #onetrust-banner-sdk #onetrust-accept-btn-handler,
    #onetrust-banner-sdk #onetrust-reject-all-handler,
    #onetrust-banner-sdk #onetrust-pc-btn-handler {
      outline-offset: 1px
    }

    #onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo {
      height: 64px;
      width: 64px
    }

    #onetrust-banner-sdk .ot-tcf2-vendor-count.ot-text-bold {
      font-weight: bold
    }

    #onetrust-banner-sdk .ot-close-icon,
    #onetrust-pc-sdk .ot-close-icon,
    #ot-sync-ntfy .ot-close-icon {
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      height: 12px;
      width: 12px
    }

    #onetrust-banner-sdk .powered-by-logo,
    #onetrust-banner-sdk .ot-pc-footer-logo a,
    #onetrust-pc-sdk .powered-by-logo,
    #onetrust-pc-sdk .ot-pc-footer-logo a,
    #ot-sync-ntfy .powered-by-logo,
    #ot-sync-ntfy .ot-pc-footer-logo a {
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      height: 25px;
      width: 152px;
      display: block;
      text-decoration: none;
      font-size: .75em
    }

    #onetrust-banner-sdk .powered-by-logo:hover,
    #onetrust-banner-sdk .ot-pc-footer-logo a:hover,
    #onetrust-pc-sdk .powered-by-logo:hover,
    #onetrust-pc-sdk .ot-pc-footer-logo a:hover,
    #ot-sync-ntfy .powered-by-logo:hover,
    #ot-sync-ntfy .ot-pc-footer-logo a:hover {
      color: #565656
    }

    #onetrust-banner-sdk h3 *,
    #onetrust-banner-sdk h4 *,
    #onetrust-banner-sdk h6 *,
    #onetrust-banner-sdk button *,
    #onetrust-banner-sdk a[data-parent-id] *,
    #onetrust-pc-sdk h3 *,
    #onetrust-pc-sdk h4 *,
    #onetrust-pc-sdk h6 *,
    #onetrust-pc-sdk button *,
    #onetrust-pc-sdk a[data-parent-id] *,
    #ot-sync-ntfy h3 *,
    #ot-sync-ntfy h4 *,
    #ot-sync-ntfy h6 *,
    #ot-sync-ntfy button *,
    #ot-sync-ntfy a[data-parent-id] * {
      font-size: inherit;
      font-weight: inherit;
      color: inherit
    }

    #onetrust-banner-sdk .ot-hide,
    #onetrust-pc-sdk .ot-hide,
    #ot-sync-ntfy .ot-hide {
      display: none !important
    }

    #onetrust-banner-sdk button.ot-link-btn:hover,
    #onetrust-pc-sdk button.ot-link-btn:hover,
    #ot-sync-ntfy button.ot-link-btn:hover {
      text-decoration: underline;
      opacity: 1
    }

    #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
      padding: 0
    }

    #onetrust-pc-sdk .ot-sdk-container {
      padding-right: 0
    }

    #onetrust-pc-sdk .ot-sdk-row {
      flex-direction: initial;
      width: 100%
    }

    #onetrust-pc-sdk [type=checkbox]:checked,
    #onetrust-pc-sdk [type=checkbox]:not(:checked) {
      pointer-events: initial
    }

    #onetrust-pc-sdk [type=checkbox]:disabled+label::before,
    #onetrust-pc-sdk [type=checkbox]:disabled+label:after,
    #onetrust-pc-sdk [type=checkbox]:disabled+label {
      pointer-events: none;
      opacity: .7
    }

    #onetrust-pc-sdk #vendor-list-content {
      transform: translate3d(0, 0, 0)
    }

    #onetrust-pc-sdk li input[type=checkbox] {
      z-index: 1
    }

    #onetrust-pc-sdk li .ot-checkbox label {
      z-index: 2
    }

    #onetrust-pc-sdk li .ot-checkbox input[type=checkbox] {
      height: auto;
      width: auto
    }

    #onetrust-pc-sdk li .host-title a,
    #onetrust-pc-sdk li .ot-host-name a,
    #onetrust-pc-sdk li .accordion-text,
    #onetrust-pc-sdk li .ot-acc-txt {
      z-index: 2;
      position: relative
    }

    #onetrust-pc-sdk input {
      margin: 3px .1ex
    }

    #onetrust-pc-sdk .pc-logo,
    #onetrust-pc-sdk .ot-pc-logo {
      height: 60px;
      width: 180px;
      background-position: center;
      background-size: contain;
      background-repeat: no-repeat;
      display: inline-flex;
      justify-content: center;
      align-items: center
    }

    #onetrust-pc-sdk .pc-logo img,
    #onetrust-pc-sdk .ot-pc-logo img {
      max-height: 100%;
      max-width: 100%
    }

    #onetrust-pc-sdk .screen-reader-only,
    #onetrust-pc-sdk .ot-scrn-rdr,
    .ot-sdk-cookie-policy .screen-reader-only,
    .ot-sdk-cookie-policy .ot-scrn-rdr {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px
    }

    #onetrust-pc-sdk.ot-fade-in,
    .onetrust-pc-dark-filter.ot-fade-in,
    #onetrust-banner-sdk.ot-fade-in {
      animation-name: onetrust-fade-in;
      animation-duration: 400ms;
      animation-timing-function: ease-in-out
    }

    #onetrust-pc-sdk.ot-hide {
      display: none !important
    }

    .onetrust-pc-dark-filter.ot-hide {
      display: none !important
    }

    #ot-sdk-btn.ot-sdk-show-settings,
    #ot-sdk-btn.optanon-show-settings {
      color: #68b631;
      border: 1px solid #68b631;
      height: auto;
      white-space: normal;
      word-wrap: break-word;
      padding: .8em 2em;
      font-size: .8em;
      line-height: 1.2;
      cursor: pointer;
      -moz-transition: .1s ease;
      -o-transition: .1s ease;
      -webkit-transition: 1s ease;
      transition: .1s ease
    }

    #ot-sdk-btn.ot-sdk-show-settings:hover,
    #ot-sdk-btn.optanon-show-settings:hover {
      color: #fff;
      background-color: #68b631
    }

    .onetrust-pc-dark-filter {
      background: rgba(0, 0, 0, .5);
      z-index: 2147483646;
      width: 100%;
      height: 100%;
      overflow: hidden;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0
    }

    @keyframes onetrust-fade-in {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    .ot-cookie-label {
      text-decoration: underline
    }

    @media only screen and (min-width: 426px)and (max-width: 896px)and (orientation: landscape) {
      #onetrust-pc-sdk p {
        font-size: .75em
      }
    }

    #onetrust-banner-sdk .banner-option-input:focus+label {
      outline: 1px solid #000;
      outline-style: auto
    }

    .category-vendors-list-handler+a:focus,
    .category-vendors-list-handler+a:focus-visible {
      outline: 2px solid #000
    }

    #onetrust-pc-sdk .ot-userid-title {
      margin-top: 10px
    }

    #onetrust-pc-sdk .ot-userid-title>span,
    #onetrust-pc-sdk .ot-userid-timestamp>span {
      font-weight: 700
    }

    #onetrust-pc-sdk .ot-userid-desc {
      font-style: italic
    }

    #onetrust-pc-sdk .ot-host-desc a {
      pointer-events: initial
    }

    #onetrust-pc-sdk .ot-ven-hdr>p a {
      position: relative;
      z-index: 2;
      pointer-events: initial
    }

    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info a {
      margin-right: auto
    }

    #onetrust-pc-sdk .ot-pc-footer-logo img {
      width: 136px;
      height: 16px
    }

    #onetrust-pc-sdk .ot-pur-vdr-count {
      font-weight: 400;
      font-size: .7rem;
      padding-top: 3px;
      display: block
    }

    #onetrust-banner-sdk .ot-optout-signal,
    #onetrust-pc-sdk .ot-optout-signal {
      border: 1px solid #32ae88;
      border-radius: 3px;
      padding: 5px;
      margin-bottom: 10px;
      background-color: #f9fffa;
      font-size: .85rem;
      line-height: 2
    }

    #onetrust-banner-sdk .ot-optout-signal .ot-optout-icon,
    #onetrust-pc-sdk .ot-optout-signal .ot-optout-icon {
      display: inline;
      margin-right: 5px
    }

    #onetrust-banner-sdk .ot-optout-signal svg,
    #onetrust-pc-sdk .ot-optout-signal svg {
      height: 20px;
      width: 30px;
      transform: scale(0.5)
    }

    #onetrust-banner-sdk .ot-optout-signal svg path,
    #onetrust-pc-sdk .ot-optout-signal svg path {
      fill: #32ae88
    }

    #onetrust-banner-sdk,
    #onetrust-pc-sdk,
    #ot-sdk-cookie-policy,
    #ot-sync-ntfy {
      font-size: 16px
    }

    #onetrust-banner-sdk *,
    #onetrust-banner-sdk ::after,
    #onetrust-banner-sdk ::before,
    #onetrust-pc-sdk *,
    #onetrust-pc-sdk ::after,
    #onetrust-pc-sdk ::before,
    #ot-sdk-cookie-policy *,
    #ot-sdk-cookie-policy ::after,
    #ot-sdk-cookie-policy ::before,
    #ot-sync-ntfy *,
    #ot-sync-ntfy ::after,
    #ot-sync-ntfy ::before {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box
    }

    #onetrust-banner-sdk div,
    #onetrust-banner-sdk span,
    #onetrust-banner-sdk h1,
    #onetrust-banner-sdk h2,
    #onetrust-banner-sdk h3,
    #onetrust-banner-sdk h4,
    #onetrust-banner-sdk h5,
    #onetrust-banner-sdk h6,
    #onetrust-banner-sdk p,
    #onetrust-banner-sdk img,
    #onetrust-banner-sdk svg,
    #onetrust-banner-sdk button,
    #onetrust-banner-sdk section,
    #onetrust-banner-sdk a,
    #onetrust-banner-sdk label,
    #onetrust-banner-sdk input,
    #onetrust-banner-sdk ul,
    #onetrust-banner-sdk li,
    #onetrust-banner-sdk nav,
    #onetrust-banner-sdk table,
    #onetrust-banner-sdk thead,
    #onetrust-banner-sdk tr,
    #onetrust-banner-sdk td,
    #onetrust-banner-sdk tbody,
    #onetrust-banner-sdk .ot-main-content,
    #onetrust-banner-sdk .ot-toggle,
    #onetrust-banner-sdk #ot-content,
    #onetrust-banner-sdk #ot-pc-content,
    #onetrust-banner-sdk .checkbox,
    #onetrust-pc-sdk div,
    #onetrust-pc-sdk span,
    #onetrust-pc-sdk h1,
    #onetrust-pc-sdk h2,
    #onetrust-pc-sdk h3,
    #onetrust-pc-sdk h4,
    #onetrust-pc-sdk h5,
    #onetrust-pc-sdk h6,
    #onetrust-pc-sdk p,
    #onetrust-pc-sdk img,
    #onetrust-pc-sdk svg,
    #onetrust-pc-sdk button,
    #onetrust-pc-sdk section,
    #onetrust-pc-sdk a,
    #onetrust-pc-sdk label,
    #onetrust-pc-sdk input,
    #onetrust-pc-sdk ul,
    #onetrust-pc-sdk li,
    #onetrust-pc-sdk nav,
    #onetrust-pc-sdk table,
    #onetrust-pc-sdk thead,
    #onetrust-pc-sdk tr,
    #onetrust-pc-sdk td,
    #onetrust-pc-sdk tbody,
    #onetrust-pc-sdk .ot-main-content,
    #onetrust-pc-sdk .ot-toggle,
    #onetrust-pc-sdk #ot-content,
    #onetrust-pc-sdk #ot-pc-content,
    #onetrust-pc-sdk .checkbox,
    #ot-sdk-cookie-policy div,
    #ot-sdk-cookie-policy span,
    #ot-sdk-cookie-policy h1,
    #ot-sdk-cookie-policy h2,
    #ot-sdk-cookie-policy h3,
    #ot-sdk-cookie-policy h4,
    #ot-sdk-cookie-policy h5,
    #ot-sdk-cookie-policy h6,
    #ot-sdk-cookie-policy p,
    #ot-sdk-cookie-policy img,
    #ot-sdk-cookie-policy svg,
    #ot-sdk-cookie-policy button,
    #ot-sdk-cookie-policy section,
    #ot-sdk-cookie-policy a,
    #ot-sdk-cookie-policy label,
    #ot-sdk-cookie-policy input,
    #ot-sdk-cookie-policy ul,
    #ot-sdk-cookie-policy li,
    #ot-sdk-cookie-policy nav,
    #ot-sdk-cookie-policy table,
    #ot-sdk-cookie-policy thead,
    #ot-sdk-cookie-policy tr,
    #ot-sdk-cookie-policy td,
    #ot-sdk-cookie-policy tbody,
    #ot-sdk-cookie-policy .ot-main-content,
    #ot-sdk-cookie-policy .ot-toggle,
    #ot-sdk-cookie-policy #ot-content,
    #ot-sdk-cookie-policy #ot-pc-content,
    #ot-sdk-cookie-policy .checkbox,
    #ot-sync-ntfy div,
    #ot-sync-ntfy span,
    #ot-sync-ntfy h1,
    #ot-sync-ntfy h2,
    #ot-sync-ntfy h3,
    #ot-sync-ntfy h4,
    #ot-sync-ntfy h5,
    #ot-sync-ntfy h6,
    #ot-sync-ntfy p,
    #ot-sync-ntfy img,
    #ot-sync-ntfy svg,
    #ot-sync-ntfy button,
    #ot-sync-ntfy section,
    #ot-sync-ntfy a,
    #ot-sync-ntfy label,
    #ot-sync-ntfy input,
    #ot-sync-ntfy ul,
    #ot-sync-ntfy li,
    #ot-sync-ntfy nav,
    #ot-sync-ntfy table,
    #ot-sync-ntfy thead,
    #ot-sync-ntfy tr,
    #ot-sync-ntfy td,
    #ot-sync-ntfy tbody,
    #ot-sync-ntfy .ot-main-content,
    #ot-sync-ntfy .ot-toggle,
    #ot-sync-ntfy #ot-content,
    #ot-sync-ntfy #ot-pc-content,
    #ot-sync-ntfy .checkbox {
      font-family: inherit;
      font-weight: normal;
      -webkit-font-smoothing: auto;
      letter-spacing: normal;
      line-height: normal;
      padding: 0;
      margin: 0;
      height: auto;
      min-height: 0;
      max-height: none;
      width: auto;
      min-width: 0;
      max-width: none;
      border-radius: 0;
      border: none;
      clear: none;
      float: none;
      position: static;
      bottom: auto;
      left: auto;
      right: auto;
      top: auto;
      text-align: left;
      text-decoration: none;
      text-indent: 0;
      text-shadow: none;
      text-transform: none;
      white-space: normal;
      background: none;
      overflow: visible;
      vertical-align: baseline;
      visibility: visible;
      z-index: auto;
      box-shadow: none
    }

    #onetrust-banner-sdk label:before,
    #onetrust-banner-sdk label:after,
    #onetrust-banner-sdk .checkbox:after,
    #onetrust-banner-sdk .checkbox:before,
    #onetrust-pc-sdk label:before,
    #onetrust-pc-sdk label:after,
    #onetrust-pc-sdk .checkbox:after,
    #onetrust-pc-sdk .checkbox:before,
    #ot-sdk-cookie-policy label:before,
    #ot-sdk-cookie-policy label:after,
    #ot-sdk-cookie-policy .checkbox:after,
    #ot-sdk-cookie-policy .checkbox:before,
    #ot-sync-ntfy label:before,
    #ot-sync-ntfy label:after,
    #ot-sync-ntfy .checkbox:after,
    #ot-sync-ntfy .checkbox:before {
      content: "";
      content: none
    }

    #onetrust-banner-sdk .ot-sdk-container,
    #onetrust-pc-sdk .ot-sdk-container,
    #ot-sdk-cookie-policy .ot-sdk-container {
      position: relative;
      width: 100%;
      max-width: 100%;
      margin: 0 auto;
      padding: 0 20px;
      box-sizing: border-box
    }

    #onetrust-banner-sdk .ot-sdk-column,
    #onetrust-banner-sdk .ot-sdk-columns,
    #onetrust-pc-sdk .ot-sdk-column,
    #onetrust-pc-sdk .ot-sdk-columns,
    #ot-sdk-cookie-policy .ot-sdk-column,
    #ot-sdk-cookie-policy .ot-sdk-columns {
      width: 100%;
      float: left;
      box-sizing: border-box;
      padding: 0;
      display: initial
    }

    @media(min-width: 400px) {

      #onetrust-banner-sdk .ot-sdk-container,
      #onetrust-pc-sdk .ot-sdk-container,
      #ot-sdk-cookie-policy .ot-sdk-container {
        width: 90%;
        padding: 0
      }
    }

    @media(min-width: 550px) {

      #onetrust-banner-sdk .ot-sdk-container,
      #onetrust-pc-sdk .ot-sdk-container,
      #ot-sdk-cookie-policy .ot-sdk-container {
        width: 100%
      }

      #onetrust-banner-sdk .ot-sdk-column,
      #onetrust-banner-sdk .ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-column,
      #onetrust-pc-sdk .ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-column,
      #ot-sdk-cookie-policy .ot-sdk-columns {
        margin-left: 4%
      }

      #onetrust-banner-sdk .ot-sdk-column:first-child,
      #onetrust-banner-sdk .ot-sdk-columns:first-child,
      #onetrust-pc-sdk .ot-sdk-column:first-child,
      #onetrust-pc-sdk .ot-sdk-columns:first-child,
      #ot-sdk-cookie-policy .ot-sdk-column:first-child,
      #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
        margin-left: 0
      }

      #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
        width: 13.3333333333%
      }

      #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
        width: 22%
      }

      #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
        width: 30.6666666667%
      }

      #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
        width: 65.3333333333%
      }

      #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
        width: 74%
      }

      #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
        width: 82.6666666667%
      }

      #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
        width: 91.3333333333%
      }

      #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
      #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
      #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
        width: 100%;
        margin-left: 0
      }
    }

    #onetrust-banner-sdk h1,
    #onetrust-banner-sdk h2,
    #onetrust-banner-sdk h3,
    #onetrust-banner-sdk h4,
    #onetrust-banner-sdk h5,
    #onetrust-banner-sdk h6,
    #onetrust-pc-sdk h1,
    #onetrust-pc-sdk h2,
    #onetrust-pc-sdk h3,
    #onetrust-pc-sdk h4,
    #onetrust-pc-sdk h5,
    #onetrust-pc-sdk h6,
    #ot-sdk-cookie-policy h1,
    #ot-sdk-cookie-policy h2,
    #ot-sdk-cookie-policy h3,
    #ot-sdk-cookie-policy h4,
    #ot-sdk-cookie-policy h5,
    #ot-sdk-cookie-policy h6 {
      margin-top: 0;
      font-weight: 600;
      font-family: inherit
    }

    #onetrust-banner-sdk h1,
    #onetrust-pc-sdk h1,
    #ot-sdk-cookie-policy h1 {
      font-size: 1.5rem;
      line-height: 1.2
    }

    #onetrust-banner-sdk h2,
    #onetrust-pc-sdk h2,
    #ot-sdk-cookie-policy h2 {
      font-size: 1.5rem;
      line-height: 1.25
    }

    #onetrust-banner-sdk h3,
    #onetrust-pc-sdk h3,
    #ot-sdk-cookie-policy h3 {
      font-size: 1.5rem;
      line-height: 1.3
    }

    #onetrust-banner-sdk h4,
    #onetrust-pc-sdk h4,
    #ot-sdk-cookie-policy h4 {
      font-size: 1.5rem;
      line-height: 1.35
    }

    #onetrust-banner-sdk h5,
    #onetrust-pc-sdk h5,
    #ot-sdk-cookie-policy h5 {
      font-size: 1.5rem;
      line-height: 1.5
    }

    #onetrust-banner-sdk h6,
    #onetrust-pc-sdk h6,
    #ot-sdk-cookie-policy h6 {
      font-size: 1.5rem;
      line-height: 1.6
    }

    @media(min-width: 550px) {

      #onetrust-banner-sdk h1,
      #onetrust-pc-sdk h1,
      #ot-sdk-cookie-policy h1 {
        font-size: 1.5rem
      }

      #onetrust-banner-sdk h2,
      #onetrust-pc-sdk h2,
      #ot-sdk-cookie-policy h2 {
        font-size: 1.5rem
      }

      #onetrust-banner-sdk h3,
      #onetrust-pc-sdk h3,
      #ot-sdk-cookie-policy h3 {
        font-size: 1.5rem
      }

      #onetrust-banner-sdk h4,
      #onetrust-pc-sdk h4,
      #ot-sdk-cookie-policy h4 {
        font-size: 1.5rem
      }

      #onetrust-banner-sdk h5,
      #onetrust-pc-sdk h5,
      #ot-sdk-cookie-policy h5 {
        font-size: 1.5rem
      }

      #onetrust-banner-sdk h6,
      #onetrust-pc-sdk h6,
      #ot-sdk-cookie-policy h6 {
        font-size: 1.5rem
      }
    }

    #onetrust-banner-sdk p,
    #onetrust-pc-sdk p,
    #ot-sdk-cookie-policy p {
      margin: 0 0 1em 0;
      font-family: inherit;
      line-height: normal
    }

    #onetrust-banner-sdk a,
    #onetrust-pc-sdk a,
    #ot-sdk-cookie-policy a {
      color: #565656;
      text-decoration: underline
    }

    #onetrust-banner-sdk a:hover,
    #onetrust-pc-sdk a:hover,
    #ot-sdk-cookie-policy a:hover {
      color: #565656;
      text-decoration: none
    }

    #onetrust-banner-sdk .ot-sdk-button,
    #onetrust-banner-sdk button,
    #onetrust-pc-sdk .ot-sdk-button,
    #onetrust-pc-sdk button,
    #ot-sdk-cookie-policy .ot-sdk-button,
    #ot-sdk-cookie-policy button {
      margin-bottom: 1rem;
      font-family: inherit
    }

    #onetrust-banner-sdk .ot-sdk-button,
    #onetrust-banner-sdk button,
    #onetrust-pc-sdk .ot-sdk-button,
    #onetrust-pc-sdk button,
    #ot-sdk-cookie-policy .ot-sdk-button,
    #ot-sdk-cookie-policy button {
      display: inline-block;
      height: 38px;
      padding: 0 30px;
      color: #555;
      text-align: center;
      font-size: .9em;
      font-weight: 400;
      line-height: 38px;
      letter-spacing: .01em;
      text-decoration: none;
      white-space: nowrap;
      background-color: rgba(0, 0, 0, 0);
      border-radius: 2px;
      border: 1px solid #bbb;
      cursor: pointer;
      box-sizing: border-box
    }

    #onetrust-banner-sdk .ot-sdk-button:hover,
    #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
    #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,
    #onetrust-pc-sdk .ot-sdk-button:hover,
    #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
    #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,
    #ot-sdk-cookie-policy .ot-sdk-button:hover,
    #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
    #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus {
      color: #333;
      border-color: #888;
      opacity: .7
    }

    #onetrust-banner-sdk .ot-sdk-button:focus,
    #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
    #onetrust-pc-sdk .ot-sdk-button:focus,
    #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
    #ot-sdk-cookie-policy .ot-sdk-button:focus,
    #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus {
      outline: 2px solid #000
    }

    #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
    #onetrust-banner-sdk button.ot-sdk-button-primary,
    #onetrust-banner-sdk input[type=submit].ot-sdk-button-primary,
    #onetrust-banner-sdk input[type=reset].ot-sdk-button-primary,
    #onetrust-banner-sdk input[type=button].ot-sdk-button-primary,
    #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
    #onetrust-pc-sdk button.ot-sdk-button-primary,
    #onetrust-pc-sdk input[type=submit].ot-sdk-button-primary,
    #onetrust-pc-sdk input[type=reset].ot-sdk-button-primary,
    #onetrust-pc-sdk input[type=button].ot-sdk-button-primary,
    #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
    #ot-sdk-cookie-policy button.ot-sdk-button-primary,
    #ot-sdk-cookie-policy input[type=submit].ot-sdk-button-primary,
    #ot-sdk-cookie-policy input[type=reset].ot-sdk-button-primary,
    #ot-sdk-cookie-policy input[type=button].ot-sdk-button-primary {
      color: #fff;
      background-color: #33c3f0;
      border-color: #33c3f0
    }

    #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
    #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
    #onetrust-banner-sdk input[type=submit].ot-sdk-button-primary:hover,
    #onetrust-banner-sdk input[type=reset].ot-sdk-button-primary:hover,
    #onetrust-banner-sdk input[type=button].ot-sdk-button-primary:hover,
    #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
    #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
    #onetrust-banner-sdk input[type=submit].ot-sdk-button-primary:focus,
    #onetrust-banner-sdk input[type=reset].ot-sdk-button-primary:focus,
    #onetrust-banner-sdk input[type=button].ot-sdk-button-primary:focus,
    #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
    #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
    #onetrust-pc-sdk input[type=submit].ot-sdk-button-primary:hover,
    #onetrust-pc-sdk input[type=reset].ot-sdk-button-primary:hover,
    #onetrust-pc-sdk input[type=button].ot-sdk-button-primary:hover,
    #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
    #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
    #onetrust-pc-sdk input[type=submit].ot-sdk-button-primary:focus,
    #onetrust-pc-sdk input[type=reset].ot-sdk-button-primary:focus,
    #onetrust-pc-sdk input[type=button].ot-sdk-button-primary:focus,
    #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
    #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
    #ot-sdk-cookie-policy input[type=submit].ot-sdk-button-primary:hover,
    #ot-sdk-cookie-policy input[type=reset].ot-sdk-button-primary:hover,
    #ot-sdk-cookie-policy input[type=button].ot-sdk-button-primary:hover,
    #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
    #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
    #ot-sdk-cookie-policy input[type=submit].ot-sdk-button-primary:focus,
    #ot-sdk-cookie-policy input[type=reset].ot-sdk-button-primary:focus,
    #ot-sdk-cookie-policy input[type=button].ot-sdk-button-primary:focus {
      color: #fff;
      background-color: #1eaedb;
      border-color: #1eaedb
    }

    #onetrust-banner-sdk input[type=text],
    #onetrust-pc-sdk input[type=text],
    #ot-sdk-cookie-policy input[type=text] {
      height: 38px;
      padding: 6px 10px;
      background-color: #fff;
      border: 1px solid #d1d1d1;
      border-radius: 4px;
      box-shadow: none;
      box-sizing: border-box
    }

    #onetrust-banner-sdk input[type=text],
    #onetrust-pc-sdk input[type=text],
    #ot-sdk-cookie-policy input[type=text] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    #onetrust-banner-sdk input[type=text]:focus,
    #onetrust-pc-sdk input[type=text]:focus,
    #ot-sdk-cookie-policy input[type=text]:focus {
      border: 1px solid #000;
      outline: 0
    }

    #onetrust-banner-sdk label,
    #onetrust-pc-sdk label,
    #ot-sdk-cookie-policy label {
      display: block;
      margin-bottom: .5rem;
      font-weight: 600
    }

    #onetrust-banner-sdk input[type=checkbox],
    #onetrust-pc-sdk input[type=checkbox],
    #ot-sdk-cookie-policy input[type=checkbox] {
      display: inline
    }

    #onetrust-banner-sdk ul,
    #onetrust-pc-sdk ul,
    #ot-sdk-cookie-policy ul {
      list-style: circle inside
    }

    #onetrust-banner-sdk ul,
    #onetrust-pc-sdk ul,
    #ot-sdk-cookie-policy ul {
      padding-left: 0;
      margin-top: 0
    }

    #onetrust-banner-sdk ul ul,
    #onetrust-pc-sdk ul ul,
    #ot-sdk-cookie-policy ul ul {
      margin: 1.5rem 0 1.5rem 3rem;
      font-size: 90%
    }

    #onetrust-banner-sdk li,
    #onetrust-pc-sdk li,
    #ot-sdk-cookie-policy li {
      margin-bottom: 1rem
    }

    #onetrust-banner-sdk th,
    #onetrust-banner-sdk td,
    #onetrust-pc-sdk th,
    #onetrust-pc-sdk td,
    #ot-sdk-cookie-policy th,
    #ot-sdk-cookie-policy td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #e1e1e1
    }

    #onetrust-banner-sdk button,
    #onetrust-pc-sdk button,
    #ot-sdk-cookie-policy button {
      margin-bottom: 1rem;
      font-family: inherit
    }

    #onetrust-banner-sdk .ot-sdk-container:after,
    #onetrust-banner-sdk .ot-sdk-row:after,
    #onetrust-pc-sdk .ot-sdk-container:after,
    #onetrust-pc-sdk .ot-sdk-row:after,
    #ot-sdk-cookie-policy .ot-sdk-container:after,
    #ot-sdk-cookie-policy .ot-sdk-row:after {
      content: "";
      display: table;
      clear: both
    }

    #onetrust-banner-sdk .ot-sdk-row,
    #onetrust-pc-sdk .ot-sdk-row,
    #ot-sdk-cookie-policy .ot-sdk-row {
      margin: 0;
      max-width: none;
      display: block
    }

    #onetrust-banner-sdk {
      box-shadow: 0 0 18px rgba(0, 0, 0, .2)
    }

    #onetrust-banner-sdk.otCenterRounded {
      z-index: 2147483645;
      top: 10%;
      position: fixed;
      right: 0;
      background-color: #fff;
      width: 60%;
      max-width: 650px;
      border-radius: 2.5px;
      left: 1em;
      margin: 0 auto;
      font-size: 14px;
      max-height: 90%;
      overflow-x: hidden;
      overflow-y: auto
    }

    #onetrust-banner-sdk.otRelFont {
      font-size: .875rem
    }

    #onetrust-banner-sdk::-webkit-scrollbar {
      width: 11px
    }

    #onetrust-banner-sdk::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background: #c1c1c1
    }

    #onetrust-banner-sdk {
      scrollbar-arrow-color: #c1c1c1;
      scrollbar-darkshadow-color: #c1c1c1;
      scrollbar-face-color: #c1c1c1;
      scrollbar-shadow-color: #c1c1c1
    }

    #onetrust-banner-sdk h3,
    #onetrust-banner-sdk p {
      color: dimgray
    }

    #onetrust-banner-sdk #onetrust-policy {
      margin-top: 40px
    }

    #onetrust-banner-sdk #onetrust-policy-title {
      float: left;
      text-align: left;
      font-size: 1em;
      line-height: 1.4;
      margin-bottom: 0;
      padding: 0 0 10px 30px;
      width: calc(100% - 90px)
    }

    #onetrust-banner-sdk #onetrust-policy-text,
    #onetrust-banner-sdk .ot-b-addl-desc,
    #onetrust-banner-sdk .ot-gv-list-handler {
      clear: both;
      float: left;
      margin: 0 30px 10px 30px;
      font-size: .813em;
      line-height: 1.5
    }

    #onetrust-banner-sdk #onetrust-policy-text *,
    #onetrust-banner-sdk .ot-b-addl-desc *,
    #onetrust-banner-sdk .ot-gv-list-handler * {
      line-height: inherit;
      font-size: inherit;
      margin: 0
    }

    #onetrust-banner-sdk .ot-optout-signal {
      margin: 0 1.875rem .625rem 1.875rem
    }

    #onetrust-banner-sdk .ot-gv-list-handler {
      padding: 0;
      border: 0;
      height: auto;
      width: auto
    }

    #onetrust-banner-sdk .ot-b-addl-desc {
      display: block
    }

    #onetrust-banner-sdk #onetrust-button-group-parent {
      padding: 15px 30px;
      text-align: center
    }

    #onetrust-banner-sdk #onetrust-button-group-parent:not(.has-reject-all-button) #onetrust-button-group {
      text-align: right
    }

    #onetrust-banner-sdk #onetrust-button-group {
      text-align: center;
      display: inline-block;
      width: 100%
    }

    #onetrust-banner-sdk #onetrust-reject-all-handler,
    #onetrust-banner-sdk #onetrust-pc-btn-handler {
      margin-right: 1em
    }

    #onetrust-banner-sdk #onetrust-pc-btn-handler {
      border: 1px solid #6cc04a;
      max-width: 45%
    }

    #onetrust-banner-sdk .banner-actions-container {
      float: right;
      width: 50%
    }

    #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
      background-color: #fff;
      border: none;
      color: #6cc04a;
      text-decoration: underline;
      padding-left: 0;
      padding-right: 0
    }

    #onetrust-banner-sdk #onetrust-accept-btn-handler,
    #onetrust-banner-sdk #onetrust-reject-all-handler,
    #onetrust-banner-sdk #onetrust-pc-btn-handler {
      background-color: #6cc04a;
      color: #fff;
      border-color: #6cc04a;
      min-width: 135px;
      padding: 12px 10px;
      letter-spacing: .05em;
      line-height: 1.4;
      font-size: .813em;
      font-weight: 600;
      height: auto;
      white-space: normal;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
      float: left;
      max-width: calc(40% - 18px)
    }

    #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
      text-align: left;
      margin-right: 0
    }

    #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
      max-width: 60%;
      width: auto
    }

    #onetrust-banner-sdk .ot-close-icon {
      width: 44px;
      height: 44px;
      background-size: 12px;
      margin: -18px -18px 0 0;
      border: none;
      display: inline-block;
      padding: 0
    }

    #onetrust-banner-sdk #onetrust-close-btn-container {
      position: absolute;
      right: 24px;
      top: 20px
    }

    #onetrust-banner-sdk .banner_logo {
      display: none
    }

    #onetrust-banner-sdk.ot-bnr-w-logo #onetrust-policy {
      margin-top: 10px
    }

    #onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo {
      margin: 4px 25px
    }

    #onetrust-banner-sdk #banner-options {
      float: left;
      padding: 0 30px;
      width: calc(100% - 90px)
    }

    #onetrust-banner-sdk .banner-option {
      margin-bottom: 10px
    }

    #onetrust-banner-sdk .banner-option-input {
      cursor: pointer;
      width: auto;
      height: auto;
      border: none;
      padding: 0;
      padding-right: 3px;
      margin: 0 0 6px;
      font-size: .82em;
      line-height: 1.4
    }

    #onetrust-banner-sdk .banner-option-input * {
      pointer-events: none;
      font-size: inherit;
      line-height: inherit
    }

    #onetrust-banner-sdk .banner-option-input[aria-expanded=true] .ot-arrow-container {
      transform: rotate(90deg)
    }

    #onetrust-banner-sdk .banner-option-input[aria-expanded=true]~.banner-option-details {
      height: auto;
      display: block
    }

    #onetrust-banner-sdk .banner-option-header {
      cursor: pointer;
      display: inline-block
    }

    #onetrust-banner-sdk .banner-option-header :first-child {
      color: dimgray;
      font-weight: bold;
      float: left
    }

    #onetrust-banner-sdk .ot-arrow-container,
    #onetrust-banner-sdk .banner-option-details {
      transition: all 300ms ease-in 0s;
      -webkit-transition: all 300ms ease-in 0s;
      -moz-transition: all 300ms ease-in 0s;
      -o-transition: all 300ms ease-in 0s
    }

    #onetrust-banner-sdk .ot-arrow-container {
      display: inline-block;
      border-top: 6px solid rgba(0, 0, 0, 0);
      border-bottom: 6px solid rgba(0, 0, 0, 0);
      border-left: 6px solid dimgray;
      margin-left: 10px;
      vertical-align: middle
    }

    #onetrust-banner-sdk .banner-option-details {
      display: none;
      font-size: .83em;
      line-height: 1.5;
      height: 0px;
      padding: 10px 10px 5px 10px
    }

    #onetrust-banner-sdk .banner-option-details * {
      font-size: inherit;
      line-height: inherit;
      color: dimgray
    }

    #onetrust-banner-sdk .ot-dpd-container {
      float: left;
      margin: 0 30px 10px 30px
    }

    #onetrust-banner-sdk .ot-dpd-title {
      font-weight: bold;
      padding-bottom: 10px
    }

    #onetrust-banner-sdk .ot-dpd-title {
      font-size: 1em;
      line-height: 1.4
    }

    #onetrust-banner-sdk .ot-dpd-desc {
      font-size: .813em;
      line-height: 1.5;
      margin-bottom: 0
    }

    #onetrust-banner-sdk .ot-dpd-desc * {
      margin: 0
    }

    #onetrust-banner-sdk .onetrust-vendors-list-handler {
      display: block;
      margin-left: 0px;
      margin-top: 5px;
      padding: 0;
      margin-bottom: 0;
      border: 0;
      line-height: normal;
      height: auto;
      width: auto
    }

    #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc {
      float: left;
      margin: 0 30px 10px 30px
    }

    #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc {
      margin-top: 10px;
      margin-bottom: 10px;
      font-size: 1em;
      line-height: 1.5;
      float: none
    }

    #onetrust-banner-sdk #onetrust-policy-text a {
      font-weight: bold;
      margin-left: 5px
    }

    #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container {
      top: 15px;
      transform: none;
      right: 15px
    }

    #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container button {
      padding: 0;
      white-space: pre-wrap;
      border: none;
      height: auto;
      line-height: 1.5;
      text-decoration: underline;
      font-size: .75em
    }

    #onetrust-banner-sdk.ot-close-btn-link.ot-wo-title #onetrust-group-container {
      margin-top: 20px
    }

    @media only screen and (max-width: 425px) {

      #onetrust-banner-sdk #onetrust-accept-btn-handler,
      #onetrust-banner-sdk #onetrust-reject-all-handler,
      #onetrust-banner-sdk #onetrust-pc-btn-handler {
        width: 100%;
        margin-bottom: 10px
      }

      #onetrust-banner-sdk #onetrust-pc-btn-handler,
      #onetrust-banner-sdk #onetrust-reject-all-handler {
        margin-right: 0
      }

      #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
        text-align: center
      }

      #onetrust-banner-sdk .banner-actions-container,
      #onetrust-banner-sdk #onetrust-pc-btn-handler {
        width: 100%;
        max-width: none
      }

      #onetrust-banner-sdk.otCenterRounded {
        left: 0;
        width: 95%;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%)
      }
    }

    @media only screen and (max-width: 600px) {
      #onetrust-banner-sdk .ot-sdk-container {
        width: auto;
        padding: 0
      }

      #onetrust-banner-sdk #onetrust-policy-title {
        padding: 0 22px 10px 22px
      }

      #onetrust-banner-sdk #onetrust-policy-text,
      #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc,
      #onetrust-banner-sdk .ot-dpd-container {
        margin: 0 22px 10px 22px;
        width: calc(100% - 44px)
      }

      #onetrust-banner-sdk #onetrust-button-group-parent {
        padding: 15px 22px
      }

      #onetrust-banner-sdk #banner-options {
        padding: 0 22px;
        width: calc(100% - 44px)
      }

      #onetrust-banner-sdk .banner-option {
        margin-bottom: 6px
      }

      #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
        float: none;
        max-width: 100%
      }

      #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
        width: 100%;
        text-align: center;
        max-width: 100%
      }

      #onetrust-banner-sdk.ot-close-btn-link #onetrust-group-container {
        margin-top: 20px
      }
    }

    @media only screen and (min-width: 426px)and (max-width: 896px) {
      #onetrust-banner-sdk.otCenterRounded {
        left: 0;
        top: 15%;
        transform: translateY(-13%);
        -webkit-transform: translateY(-13%);
        max-width: 600px;
        width: 95%
      }
    }

    #onetrust-consent-sdk #onetrust-banner-sdk {
      background-color: #FFFFFF;
    }

    #onetrust-consent-sdk #onetrust-policy-title,
    #onetrust-consent-sdk #onetrust-policy-text,
    #onetrust-consent-sdk .ot-b-addl-desc,
    #onetrust-consent-sdk .ot-dpd-desc,
    #onetrust-consent-sdk .ot-dpd-title,
    #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
    #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
    #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
    #onetrust-banner-sdk .ot-cat-header,
    #onetrust-banner-sdk .ot-optout-signal {
      color: #696969;
    }

    #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
      background-color: #E9E9E9;
    }

    #onetrust-consent-sdk #onetrust-banner-sdk a[href],
    #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
    #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
      color: #3860BE;
    }

    #onetrust-consent-sdk #onetrust-accept-btn-handler,
    #onetrust-banner-sdk #onetrust-reject-all-handler {
      background-color: #70ed9b;
      border-color: #70ed9b;
      color: #0f1027;
    }

    #onetrust-consent-sdk #onetrust-banner-sdk *:focus,
    #onetrust-consent-sdk #onetrust-banner-sdk:focus {
      outline-color: #0f1027;
      outline-width: 1px;
    }

    #onetrust-consent-sdk #onetrust-pc-btn-handler,
    #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
      color: #0f1027;
      border-color: #0f1027;
      background-color:
        #ffffff;
    }

    #onetrust-policy-text,
    #onetrust-button-group {
      font-size: 0.9rem !important;
    }

    #onetrust-pc-sdk.otPcCenter {
      overflow: hidden;
      position: fixed;
      margin: 0 auto;
      top: 5%;
      right: 0;
      left: 0;
      width: 40%;
      max-width: 575px;
      min-width: 575px;
      border-radius: 2.5px;
      z-index: 2147483647;
      background-color: #fff;
      -webkit-box-shadow: 0px 2px 10px -3px #999;
      -moz-box-shadow: 0px 2px 10px -3px #999;
      box-shadow: 0px 2px 10px -3px #999
    }

    #onetrust-pc-sdk.otPcCenter[dir=rtl] {
      right: 0;
      left: 0
    }

    #onetrust-pc-sdk.otRelFont {
      font-size: 1rem
    }

    #onetrust-pc-sdk .ot-optout-signal {
      margin-top: .625rem
    }

    #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr,
    #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus,
    #onetrust-pc-sdk .ot-hide-tgl {
      visibility: hidden
    }

    #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr *,
    #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus *,
    #onetrust-pc-sdk .ot-hide-tgl * {
      visibility: hidden
    }

    #onetrust-pc-sdk #ot-gn-venlst .ot-ven-item .ot-acc-hdr {
      min-height: 40px
    }

    #onetrust-pc-sdk .ot-pc-header {
      height: 39px;
      padding: 10px 0 10px 30px;
      border-bottom: 1px solid #e9e9e9
    }

    #onetrust-pc-sdk #ot-pc-title,
    #onetrust-pc-sdk #ot-category-title,
    #onetrust-pc-sdk .ot-cat-header,
    #onetrust-pc-sdk #ot-lst-title,
    #onetrust-pc-sdk .ot-ven-hdr .ot-ven-name,
    #onetrust-pc-sdk .ot-always-active {
      font-weight: bold;
      color: dimgray
    }

    #onetrust-pc-sdk .ot-always-active-group .ot-cat-header {
      width: 55%;
      font-weight: 700
    }

    #onetrust-pc-sdk .ot-cat-item p {
      clear: both;
      float: left;
      margin-top: 10px;
      margin-bottom: 5px;
      line-height: 1.5;
      font-size: .812em;
      color: dimgray
    }

    #onetrust-pc-sdk .ot-close-icon {
      height: 44px;
      width: 44px;
      background-size: 10px
    }

    #onetrust-pc-sdk #ot-pc-title {
      float: left;
      font-size: 1em;
      line-height: 1.5;
      margin-bottom: 10px;
      margin-top: 10px;
      width: 100%
    }

    #onetrust-pc-sdk #accept-recommended-btn-handler {
      margin-right: 10px;
      margin-bottom: 25px;
      outline-offset: -1px
    }

    #onetrust-pc-sdk #ot-pc-desc {
      clear: both;
      width: 100%;
      font-size: .812em;
      line-height: 1.5;
      margin-bottom: 25px
    }

    #onetrust-pc-sdk #ot-pc-desc a {
      margin-left: 5px
    }

    #onetrust-pc-sdk #ot-pc-desc * {
      font-size: inherit;
      line-height: inherit
    }

    #onetrust-pc-sdk #ot-pc-desc ul li {
      padding: 10px 0px
    }

    #onetrust-pc-sdk a {
      color: #656565;
      cursor: pointer
    }

    #onetrust-pc-sdk a:hover {
      color: #3860be
    }

    #onetrust-pc-sdk label {
      margin-bottom: 0
    }

    #onetrust-pc-sdk #vdr-lst-dsc {
      font-size: .812em;
      line-height: 1.5;
      padding: 10px 15px 5px 15px
    }

    #onetrust-pc-sdk button {
      max-width: 394px;
      padding: 12px 30px;
      line-height: 1;
      word-break: break-word;
      word-wrap: break-word;
      white-space: normal;
      font-weight: bold;
      height: auto
    }

    #onetrust-pc-sdk .ot-link-btn {
      padding: 0;
      margin-bottom: 0;
      border: 0;
      font-weight: normal;
      line-height: normal;
      width: auto;
      height: auto
    }

    #onetrust-pc-sdk #ot-pc-content {
      position: absolute;
      overflow-y: scroll;
      padding-left: 0px;
      padding-right: 30px;
      top: 60px;
      bottom: 110px;
      margin: 1px 3px 0 30px;
      width: calc(100% - 63px)
    }

    #onetrust-pc-sdk .ot-vs-list .ot-always-active,
    #onetrust-pc-sdk .ot-cat-grp .ot-always-active {
      float: right;
      clear: none;
      color: #3860be;
      margin: 0;
      font-size: .813em;
      line-height: 1.3
    }

    #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-track {
      margin-right: 20px
    }

    #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar {
      width: 11px
    }

    #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background: #d8d8d8
    }

    #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
      outline: #000 1px solid
    }

    #onetrust-pc-sdk .ot-pc-scrollbar {
      scrollbar-arrow-color: #d8d8d8;
      scrollbar-darkshadow-color: #d8d8d8;
      scrollbar-face-color: #d8d8d8;
      scrollbar-shadow-color: #d8d8d8
    }

    #onetrust-pc-sdk .save-preference-btn-handler {
      margin-right: 20px
    }

    #onetrust-pc-sdk .ot-pc-refuse-all-handler {
      margin-right: 10px
    }

    #onetrust-pc-sdk #ot-pc-desc .privacy-notice-link {
      margin-left: 0;
      margin-right: 8px
    }

    #onetrust-pc-sdk #ot-pc-desc .ot-imprint-handler {
      margin-left: 0;
      margin-right: 8px
    }

    #onetrust-pc-sdk .ot-subgrp-cntr {
      display: inline-block;
      clear: both;
      width: 100%;
      padding-top: 15px
    }

    #onetrust-pc-sdk .ot-switch+.ot-subgrp-cntr {
      padding-top: 10px
    }

    #onetrust-pc-sdk ul.ot-subgrps {
      margin: 0;
      font-size: initial
    }

    #onetrust-pc-sdk ul.ot-subgrps li p,
    #onetrust-pc-sdk ul.ot-subgrps li h5 {
      font-size: .813em;
      line-height: 1.4;
      color: dimgray
    }

    #onetrust-pc-sdk ul.ot-subgrps .ot-switch {
      min-height: auto
    }

    #onetrust-pc-sdk ul.ot-subgrps .ot-switch-nob {
      top: 0
    }

    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr {
      display: inline-block;
      width: 100%
    }

    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-txt {
      margin: 0
    }

    #onetrust-pc-sdk ul.ot-subgrps li {
      padding: 0;
      border: none
    }

    #onetrust-pc-sdk ul.ot-subgrps li h5 {
      position: relative;
      top: 5px;
      font-weight: bold;
      margin-bottom: 0;
      float: left
    }

    #onetrust-pc-sdk li.ot-subgrp {
      margin-left: 20px;
      overflow: auto
    }

    #onetrust-pc-sdk li.ot-subgrp>h5 {
      width: calc(100% - 100px)
    }

    #onetrust-pc-sdk .ot-cat-item p>ul,
    #onetrust-pc-sdk li.ot-subgrp p>ul {
      margin: 0px;
      list-style: disc;
      margin-left: 15px;
      font-size: inherit
    }

    #onetrust-pc-sdk .ot-cat-item p>ul li,
    #onetrust-pc-sdk li.ot-subgrp p>ul li {
      font-size: inherit;
      padding-top: 10px;
      padding-left: 0px;
      padding-right: 0px;
      border: none
    }

    #onetrust-pc-sdk .ot-cat-item p>ul li:last-child,
    #onetrust-pc-sdk li.ot-subgrp p>ul li:last-child {
      padding-bottom: 10px
    }

    #onetrust-pc-sdk .ot-pc-logo {
      height: 40px;
      width: 120px
    }

    #onetrust-pc-sdk .ot-pc-footer {
      position: absolute;
      bottom: 0px;
      width: 100%;
      max-height: 160px;
      border-top: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-refuse-all-handler {
      margin-bottom: 0px
    }

    #onetrust-pc-sdk.ot-ftr-stacked #ot-pc-content {
      bottom: 160px
    }

    #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-footer button {
      width: 100%;
      max-width: none
    }

    #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
      margin: 0 30px;
      width: calc(100% - 60px);
      padding-right: 0
    }

    #onetrust-pc-sdk .ot-pc-footer-logo {
      height: 30px;
      width: 100%;
      text-align: right;
      background: #f4f4f4
    }

    #onetrust-pc-sdk .ot-pc-footer-logo a {
      display: inline-block;
      margin-top: 5px;
      margin-right: 10px
    }

    #onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo {
      direction: rtl
    }

    #onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo a {
      margin-right: 25px
    }

    #onetrust-pc-sdk .ot-tgl {
      float: right;
      position: relative;
      z-index: 1
    }

    #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
      background-color: #cddcf2;
      border: 1px solid #3860be
    }

    #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
      -webkit-transform: translateX(20px);
      -ms-transform: translateX(20px);
      transform: translateX(20px);
      background-color: #3860be;
      border-color: #3860be
    }

    #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch {
      outline: #000 solid 1px
    }

    #onetrust-pc-sdk .ot-switch {
      position: relative;
      display: inline-block;
      width: 45px;
      height: 25px
    }

    #onetrust-pc-sdk .ot-switch-nob {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #f2f1f1;
      border: 1px solid #ddd;
      transition: all .2s ease-in 0s;
      -moz-transition: all .2s ease-in 0s;
      -o-transition: all .2s ease-in 0s;
      -webkit-transition: all .2s ease-in 0s;
      border-radius: 20px
    }

    #onetrust-pc-sdk .ot-switch-nob:before {
      position: absolute;
      content: "";
      height: 21px;
      width: 21px;
      bottom: 1px;
      background-color: #7d7d7d;
      -webkit-transition: .4s;
      transition: .4s;
      border-radius: 20px
    }

    #onetrust-pc-sdk .ot-chkbox input:checked~label::before {
      background-color: #3860be
    }

    #onetrust-pc-sdk .ot-chkbox input+label::after {
      content: none;
      color: #fff
    }

    #onetrust-pc-sdk .ot-chkbox input:checked+label::after {
      content: ""
    }

    #onetrust-pc-sdk .ot-chkbox input:focus+label::before {
      outline-style: solid;
      outline-width: 2px;
      outline-style: auto
    }

    #onetrust-pc-sdk .ot-chkbox label {
      position: relative;
      display: inline-block;
      padding-left: 30px;
      cursor: pointer;
      font-weight: 500
    }

    #onetrust-pc-sdk .ot-chkbox label::before,
    #onetrust-pc-sdk .ot-chkbox label::after {
      position: absolute;
      content: "";
      display: inline-block;
      border-radius: 3px
    }

    #onetrust-pc-sdk .ot-chkbox label::before {
      height: 18px;
      width: 18px;
      border: 1px solid #3860be;
      left: 0px;
      top: auto
    }

    #onetrust-pc-sdk .ot-chkbox label::after {
      height: 5px;
      width: 9px;
      border-left: 3px solid;
      border-bottom: 3px solid;
      transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
      left: 4px;
      top: 5px
    }

    #onetrust-pc-sdk .ot-label-txt {
      display: none
    }

    #onetrust-pc-sdk .ot-chkbox input,
    #onetrust-pc-sdk .ot-tgl input {
      position: absolute;
      opacity: 0;
      width: 0;
      height: 0
    }

    #onetrust-pc-sdk .ot-arw-cntr {
      float: right;
      position: relative;
      pointer-events: none
    }

    #onetrust-pc-sdk .ot-arw-cntr .ot-arw {
      width: 16px;
      height: 16px;
      margin-left: 5px;
      color: dimgray;
      display: inline-block;
      vertical-align: middle;
      -webkit-transition: all 150ms ease-in 0s;
      -moz-transition: all 150ms ease-in 0s;
      -o-transition: all 150ms ease-in 0s;
      transition: all 150ms ease-in 0s
    }

    #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw,
    #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw-cntr svg {
      transform: rotate(90deg);
      -o-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      -webkit-transform: rotate(90deg)
    }

    #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
      outline: #000 1px solid
    }

    #onetrust-pc-sdk .ot-tgl-cntr,
    #onetrust-pc-sdk .ot-arw-cntr {
      display: inline-block
    }

    #onetrust-pc-sdk .ot-tgl-cntr {
      width: 45px;
      float: right;
      margin-top: 2px
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-tgl-cntr {
      margin-top: 10px
    }

    #onetrust-pc-sdk .ot-always-active-subgroup {
      width: auto;
      padding-left: 0px !important;
      top: 3px;
      position: relative
    }

    #onetrust-pc-sdk .ot-label-status {
      padding-left: 5px;
      font-size: .75em;
      display: none
    }

    #onetrust-pc-sdk .ot-arw-cntr {
      margin-top: -1px
    }

    #onetrust-pc-sdk .ot-arw-cntr svg {
      -webkit-transition: all 300ms ease-in 0s;
      -moz-transition: all 300ms ease-in 0s;
      -o-transition: all 300ms ease-in 0s;
      transition: all 300ms ease-in 0s;
      height: 10px;
      width: 10px
    }

    #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
      transform: rotate(90deg);
      -o-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      -webkit-transform: rotate(90deg)
    }

    #onetrust-pc-sdk .ot-arw {
      width: 10px;
      margin-left: 15px;
      transition: all 300ms ease-in 0s;
      -webkit-transition: all 300ms ease-in 0s;
      -moz-transition: all 300ms ease-in 0s;
      -o-transition: all 300ms ease-in 0s
    }

    #onetrust-pc-sdk .ot-vlst-cntr {
      margin-bottom: 0
    }

    #onetrust-pc-sdk .ot-hlst-cntr {
      margin-top: 5px;
      display: inline-block;
      width: 100%
    }

    #onetrust-pc-sdk .category-vendors-list-handler,
    #onetrust-pc-sdk .category-vendors-list-handler+a,
    #onetrust-pc-sdk .category-host-list-handler {
      clear: both;
      color: #3860be;
      margin-left: 0;
      font-size: .813em;
      text-decoration: none;
      float: left;
      overflow: hidden
    }

    #onetrust-pc-sdk .category-vendors-list-handler:hover,
    #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
    #onetrust-pc-sdk .category-host-list-handler:hover {
      text-decoration-line: underline
    }

    #onetrust-pc-sdk .category-vendors-list-handler+a {
      clear: none
    }

    #onetrust-pc-sdk .ot-vlst-cntr .ot-ext-lnk,
    #onetrust-pc-sdk .ot-ven-hdr .ot-ext-lnk {
      display: inline-block;
      height: 13px;
      width: 13px;
      background-repeat: no-repeat;
      margin-left: 1px;
      margin-top: 6px;
      cursor: pointer
    }

    #onetrust-pc-sdk .ot-ven-hdr .ot-ext-lnk {
      margin-bottom: -1px
    }

    #onetrust-pc-sdk .back-btn-handler {
      font-size: 1em;
      text-decoration: none
    }

    #onetrust-pc-sdk .back-btn-handler:hover {
      opacity: .6
    }

    #onetrust-pc-sdk #ot-lst-title h3 {
      display: inline-block;
      word-break: break-word;
      word-wrap: break-word;
      margin-bottom: 0;
      color: #656565;
      font-size: 1em;
      font-weight: bold;
      margin-left: 15px
    }

    #onetrust-pc-sdk #ot-lst-title {
      margin: 10px 0 10px 0px;
      font-size: 1em;
      text-align: left
    }

    #onetrust-pc-sdk #ot-pc-hdr {
      margin: 0 0 0 30px;
      height: auto;
      width: auto
    }

    #onetrust-pc-sdk #ot-pc-hdr input::placeholder {
      color: #d4d4d4;
      font-style: italic
    }

    #onetrust-pc-sdk #vendor-search-handler {
      height: 31px;
      width: 100%;
      border-radius: 50px;
      font-size: .8em;
      padding-right: 35px;
      padding-left: 15px;
      float: left;
      margin-left: 15px
    }

    #onetrust-pc-sdk .ot-ven-name {
      display: block;
      width: auto;
      padding-right: 5px
    }

    #onetrust-pc-sdk #ot-lst-cnt {
      overflow-y: auto;
      margin-left: 20px;
      margin-right: 7px;
      width: calc(100% - 27px);
      max-height: calc(100% - 80px);
      height: 100%;
      transform: translate3d(0, 0, 0)
    }

    #onetrust-pc-sdk #ot-pc-lst {
      width: 100%;
      bottom: 100px;
      position: absolute;
      top: 60px
    }

    #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr,
    #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr * {
      visibility: hidden
    }

    #onetrust-pc-sdk #ot-pc-lst .ot-tgl-cntr {
      right: 12px;
      position: absolute
    }

    #onetrust-pc-sdk #ot-pc-lst .ot-arw-cntr {
      float: right;
      position: relative
    }

    #onetrust-pc-sdk #ot-pc-lst .ot-arw {
      margin-left: 10px
    }

    #onetrust-pc-sdk #ot-pc-lst .ot-acc-hdr {
      overflow: hidden;
      cursor: pointer
    }

    #onetrust-pc-sdk .ot-vlst-cntr {
      overflow: hidden
    }

    #onetrust-pc-sdk #ot-sel-blk {
      overflow: hidden;
      width: 100%;
      position: sticky;
      position: -webkit-sticky;
      top: 0;
      z-index: 3
    }

    #onetrust-pc-sdk #ot-back-arw {
      height: 12px;
      width: 12px
    }

    #onetrust-pc-sdk .ot-lst-subhdr {
      width: 100%;
      display: inline-block
    }

    #onetrust-pc-sdk .ot-search-cntr {
      float: left;
      width: 78%;
      position: relative
    }

    #onetrust-pc-sdk .ot-search-cntr>svg {
      width: 30px;
      height: 30px;
      position: absolute;
      float: left;
      right: -15px
    }

    #onetrust-pc-sdk .ot-fltr-cntr {
      float: right;
      right: 50px;
      position: relative
    }

    #onetrust-pc-sdk #filter-btn-handler {
      background-color: #3860be;
      border-radius: 17px;
      display: inline-block;
      position: relative;
      width: 32px;
      height: 32px;
      -moz-transition: .1s ease;
      -o-transition: .1s ease;
      -webkit-transition: 1s ease;
      transition: .1s ease;
      padding: 0;
      margin: 0
    }

    #onetrust-pc-sdk #filter-btn-handler:hover {
      background-color: #3860be
    }

    #onetrust-pc-sdk #filter-btn-handler svg {
      width: 12px;
      height: 12px;
      margin: 3px 10px 0 10px;
      display: block;
      position: static;
      right: auto;
      top: auto
    }

    #onetrust-pc-sdk .ot-ven-link,
    #onetrust-pc-sdk .ot-ven-legclaim-link {
      color: #3860be;
      text-decoration: none;
      font-weight: 100;
      display: inline-block;
      padding-top: 10px;
      transform: translate(0, 1%);
      -o-transform: translate(0, 1%);
      -ms-transform: translate(0, 1%);
      -webkit-transform: translate(0, 1%);
      position: relative;
      z-index: 2
    }

    #onetrust-pc-sdk .ot-ven-link *,
    #onetrust-pc-sdk .ot-ven-legclaim-link * {
      font-size: inherit
    }

    #onetrust-pc-sdk .ot-ven-link:hover,
    #onetrust-pc-sdk .ot-ven-legclaim-link:hover {
      text-decoration: underline
    }

    #onetrust-pc-sdk .ot-ven-hdr {
      width: calc(100% - 160px);
      height: auto;
      float: left;
      word-break: break-word;
      word-wrap: break-word;
      vertical-align: middle;
      padding-bottom: 3px
    }

    #onetrust-pc-sdk .ot-ven-link,
    #onetrust-pc-sdk .ot-ven-legclaim-link {
      letter-spacing: .03em;
      font-size: .75em;
      font-weight: 400
    }

    #onetrust-pc-sdk .ot-ven-dets {
      border-radius: 2px;
      background-color: #f8f8f8
    }

    #onetrust-pc-sdk .ot-ven-dets li:first-child p:first-child {
      border-top: none
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:not(:first-child) {
      border-top: 1px solid #ddd !important
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p {
      display: inline-block
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(odd) {
      width: 30%
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(even) {
      width: 50%;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p,
    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc h4 {
      padding-top: 5px;
      padding-bottom: 5px;
      display: block
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc h4 {
      display: inline-block
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p:nth-last-child(-n+1) {
      padding-bottom: 10px
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p:nth-child(-n+2):not(.disc-pur) {
      padding-top: 10px
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc .disc-pur-cont {
      display: inline
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc .disc-pur {
      position: relative;
      width: 50% !important;
      word-break: break-word;
      word-wrap: break-word;
      left: calc(30% + 17px)
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc .disc-pur:nth-child(-n+1) {
      position: static
    }

    #onetrust-pc-sdk .ot-ven-dets p,
    #onetrust-pc-sdk .ot-ven-dets h4,
    #onetrust-pc-sdk .ot-ven-dets span {
      font-size: .69em;
      text-align: left;
      vertical-align: middle;
      word-break: break-word;
      word-wrap: break-word;
      margin: 0;
      padding-bottom: 10px;
      padding-left: 15px;
      color: #2e3644
    }

    #onetrust-pc-sdk .ot-ven-dets h4 {
      padding-top: 5px
    }

    #onetrust-pc-sdk .ot-ven-dets span {
      color: dimgray;
      padding: 0;
      vertical-align: baseline
    }

    #onetrust-pc-sdk .ot-ven-dets .ot-ven-pur h4 {
      border-top: 1px solid #e9e9e9;
      border-bottom: 1px solid #e9e9e9;
      padding-bottom: 5px;
      margin-bottom: 5px;
      font-weight: bold
    }

    #onetrust-pc-sdk #ot-host-lst .ot-sel-all {
      float: right;
      position: relative;
      margin-right: 42px;
      top: 10px
    }

    #onetrust-pc-sdk #ot-host-lst .ot-sel-all input[type=checkbox] {
      width: auto;
      height: auto
    }

    #onetrust-pc-sdk #ot-host-lst .ot-sel-all label {
      height: 20px;
      width: 20px;
      padding-left: 0px
    }

    #onetrust-pc-sdk #ot-host-lst .ot-acc-txt {
      overflow: hidden;
      width: 95%
    }

    #onetrust-pc-sdk .ot-host-hdr {
      position: relative;
      z-index: 1;
      pointer-events: none;
      width: calc(100% - 125px);
      float: left
    }

    #onetrust-pc-sdk .ot-host-name,
    #onetrust-pc-sdk .ot-host-desc {
      display: inline-block;
      width: 90%
    }

    #onetrust-pc-sdk .ot-host-name {
      pointer-events: none
    }

    #onetrust-pc-sdk .ot-host-hdr>a {
      text-decoration: underline;
      font-size: .82em;
      position: relative;
      z-index: 2;
      float: left;
      margin-bottom: 5px;
      pointer-events: initial
    }

    #onetrust-pc-sdk .ot-host-name+a {
      margin-top: 5px
    }

    #onetrust-pc-sdk .ot-host-name,
    #onetrust-pc-sdk .ot-host-name a,
    #onetrust-pc-sdk .ot-host-desc,
    #onetrust-pc-sdk .ot-host-info {
      color: dimgray;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk .ot-host-name,
    #onetrust-pc-sdk .ot-host-name a {
      font-weight: bold;
      font-size: .82em;
      line-height: 1.3
    }

    #onetrust-pc-sdk .ot-host-name a {
      font-size: 1em
    }

    #onetrust-pc-sdk .ot-host-expand {
      margin-top: 3px;
      margin-bottom: 3px;
      clear: both;
      display: block;
      color: #3860be;
      font-size: .72em;
      font-weight: normal
    }

    #onetrust-pc-sdk .ot-host-expand * {
      font-size: inherit
    }

    #onetrust-pc-sdk .ot-host-desc,
    #onetrust-pc-sdk .ot-host-info {
      font-size: .688em;
      line-height: 1.4;
      font-weight: normal
    }

    #onetrust-pc-sdk .ot-host-desc {
      margin-top: 10px
    }

    #onetrust-pc-sdk .ot-host-opt {
      margin: 0;
      font-size: inherit;
      display: inline-block;
      width: 100%
    }

    #onetrust-pc-sdk .ot-host-opt li>div div {
      font-size: .8em;
      padding: 5px 0
    }

    #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(1) {
      width: 30%;
      float: left
    }

    #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(2) {
      width: 70%;
      float: left;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk .ot-host-info {
      border: none;
      display: inline-block;
      width: calc(100% - 10px);
      padding: 10px;
      margin-bottom: 10px;
      background-color: #f8f8f8
    }

    #onetrust-pc-sdk .ot-host-info>div {
      overflow: auto
    }

    #onetrust-pc-sdk #no-results {
      text-align: center;
      margin-top: 30px
    }

    #onetrust-pc-sdk #no-results p {
      font-size: 1em;
      color: #2e3644;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk #no-results p span {
      font-weight: bold
    }

    #onetrust-pc-sdk #ot-fltr-modal {
      width: 100%;
      height: auto;
      display: none;
      -moz-transition: .2s ease;
      -o-transition: .2s ease;
      -webkit-transition: 2s ease;
      transition: .2s ease;
      overflow: hidden;
      opacity: 1;
      right: 0
    }

    #onetrust-pc-sdk #ot-fltr-modal .ot-label-txt {
      display: inline-block;
      font-size: .85em;
      color: dimgray
    }

    #onetrust-pc-sdk #ot-fltr-cnt {
      z-index: 2147483646;
      background-color: #fff;
      position: absolute;
      height: 90%;
      max-height: 300px;
      width: 325px;
      left: 210px;
      margin-top: 10px;
      margin-bottom: 20px;
      padding-right: 10px;
      border-radius: 3px;
      -webkit-box-shadow: 0px 0px 12px 2px #c7c5c7;
      -moz-box-shadow: 0px 0px 12px 2px #c7c5c7;
      box-shadow: 0px 0px 12px 2px #c7c5c7
    }

    #onetrust-pc-sdk .ot-fltr-scrlcnt {
      overflow-y: auto;
      overflow-x: hidden;
      clear: both;
      max-height: calc(100% - 60px)
    }

    #onetrust-pc-sdk #ot-anchor {
      border: 12px solid rgba(0, 0, 0, 0);
      display: none;
      position: absolute;
      z-index: 2147483647;
      right: 55px;
      top: 75px;
      transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      background-color: #fff;
      -webkit-box-shadow: -3px -3px 5px -2px #c7c5c7;
      -moz-box-shadow: -3px -3px 5px -2px #c7c5c7;
      box-shadow: -3px -3px 5px -2px #c7c5c7
    }

    #onetrust-pc-sdk .ot-fltr-btns {
      margin-left: 15px
    }

    #onetrust-pc-sdk #filter-apply-handler {
      margin-right: 15px
    }

    #onetrust-pc-sdk .ot-fltr-opt {
      margin-bottom: 25px;
      margin-left: 15px;
      width: 75%;
      position: relative
    }

    #onetrust-pc-sdk .ot-fltr-opt p {
      display: inline-block;
      margin: 0;
      font-size: .9em;
      color: #2e3644
    }

    #onetrust-pc-sdk .ot-chkbox label span {
      font-size: .85em;
      color: dimgray
    }

    #onetrust-pc-sdk .ot-chkbox input[type=checkbox]+label::after {
      content: none;
      color: #fff
    }

    #onetrust-pc-sdk .ot-chkbox input[type=checkbox]:checked+label::after {
      content: ""
    }

    #onetrust-pc-sdk .ot-chkbox input[type=checkbox]:focus+label::before {
      outline-style: solid;
      outline-width: 2px;
      outline-style: auto
    }

    #onetrust-pc-sdk #ot-selall-vencntr,
    #onetrust-pc-sdk #ot-selall-adtlvencntr,
    #onetrust-pc-sdk #ot-selall-hostcntr,
    #onetrust-pc-sdk #ot-selall-licntr,
    #onetrust-pc-sdk #ot-selall-gnvencntr {
      right: 15px;
      position: relative;
      width: 20px;
      height: 20px;
      float: right
    }

    #onetrust-pc-sdk #ot-selall-vencntr label,
    #onetrust-pc-sdk #ot-selall-adtlvencntr label,
    #onetrust-pc-sdk #ot-selall-hostcntr label,
    #onetrust-pc-sdk #ot-selall-licntr label,
    #onetrust-pc-sdk #ot-selall-gnvencntr label {
      float: left;
      padding-left: 0
    }

    #onetrust-pc-sdk #ot-ven-lst:first-child {
      border-top: 1px solid #e2e2e2
    }

    #onetrust-pc-sdk ul {
      list-style: none;
      padding: 0
    }

    #onetrust-pc-sdk ul li {
      position: relative;
      margin: 0;
      padding: 15px 15px 15px 10px;
      border-bottom: 1px solid #e2e2e2
    }

    #onetrust-pc-sdk ul li h3 {
      font-size: .75em;
      color: #656565;
      margin: 0;
      display: inline-block;
      width: 70%;
      height: auto;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk ul li p {
      margin: 0;
      font-size: .7em
    }

    #onetrust-pc-sdk ul li input[type=checkbox] {
      position: absolute;
      cursor: pointer;
      width: 100%;
      height: 100%;
      opacity: 0;
      margin: 0;
      top: 0;
      left: 0
    }

    #onetrust-pc-sdk .ot-cat-item>button:focus,
    #onetrust-pc-sdk .ot-acc-cntr>button:focus,
    #onetrust-pc-sdk li>button:focus {
      outline: #000 solid 2px
    }

    #onetrust-pc-sdk .ot-cat-item>button,
    #onetrust-pc-sdk .ot-acc-cntr>button,
    #onetrust-pc-sdk li>button {
      position: absolute;
      cursor: pointer;
      width: 100%;
      height: 100%;
      margin: 0;
      top: 0;
      left: 0;
      z-index: 1;
      max-width: none;
      border: none
    }

    #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=false]~.ot-acc-txt,
    #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=false]~.ot-acc-txt,
    #onetrust-pc-sdk li>button[aria-expanded=false]~.ot-acc-txt {
      margin-top: 0;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      width: 100%;
      transition: .25s ease-out;
      display: none
    }

    #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-txt,
    #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-txt,
    #onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-txt {
      transition: .1s ease-in;
      margin-top: 10px;
      width: 100%;
      overflow: auto;
      display: block
    }

    #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-grpcntr,
    #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-grpcntr,
    #onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-grpcntr {
      width: auto;
      margin-top: 0px;
      padding-bottom: 10px
    }

    #onetrust-pc-sdk .ot-host-item>button:focus,
    #onetrust-pc-sdk .ot-ven-item>button:focus {
      outline: 0;
      border: 2px solid #000
    }

    #onetrust-pc-sdk .ot-hide-acc>button {
      pointer-events: none
    }

    #onetrust-pc-sdk .ot-hide-acc .ot-plus-minus>*,
    #onetrust-pc-sdk .ot-hide-acc .ot-arw-cntr>* {
      visibility: hidden
    }

    #onetrust-pc-sdk .ot-hide-acc .ot-acc-hdr {
      min-height: 30px
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) {
      padding-right: 10px;
      width: calc(100% - 37px);
      margin-top: 10px;
      max-height: calc(100% - 90px)
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk {
      background-color: #f9f9fc;
      border: 1px solid #e2e2e2;
      width: calc(100% - 2px);
      padding-bottom: 5px;
      padding-top: 5px
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt {
      border: unset;
      background-color: unset
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt .ot-sel-all-hdr {
      display: none
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt .ot-sel-all {
      padding-right: .5rem
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk.ot-vnd-list-cnt .ot-sel-all .ot-chkbox {
      right: 0
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all {
      padding-right: 34px
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all-chkbox {
      width: auto
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) ul li {
      border: 1px solid #e2e2e2;
      margin-bottom: 10px
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-acc-cntr>.ot-acc-hdr {
      padding: 10px 0 10px 15px
    }

    #onetrust-pc-sdk.ot-addtl-vendors .ot-sel-all-chkbox {
      float: right
    }

    #onetrust-pc-sdk.ot-addtl-vendors .ot-plus-minus~.ot-sel-all-chkbox {
      right: 34px
    }

    #onetrust-pc-sdk.ot-addtl-vendors #ot-ven-lst:first-child {
      border-top: none
    }

    #onetrust-pc-sdk .ot-acc-cntr {
      position: relative;
      border-left: 1px solid #e2e2e2;
      border-right: 1px solid #e2e2e2;
      border-bottom: 1px solid #e2e2e2
    }

    #onetrust-pc-sdk .ot-acc-cntr input {
      z-index: 1
    }

    #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr {
      background-color: #f9f9fc;
      padding: 5px 0 5px 15px;
      width: auto
    }

    #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-plus-minus {
      vertical-align: middle;
      top: auto
    }

    #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-arw-cntr {
      right: 10px
    }

    #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr input {
      z-index: 2
    }

    #onetrust-pc-sdk .ot-acc-cntr.ot-add-tech .ot-acc-hdr {
      padding: 10px 0 10px 15px
    }

    #onetrust-pc-sdk .ot-acc-cntr>input[type=checkbox]:checked~.ot-acc-hdr {
      border-bottom: 1px solid #e2e2e2
    }

    #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-txt {
      padding-left: 10px;
      padding-right: 10px
    }

    #onetrust-pc-sdk .ot-acc-cntr button[aria-expanded=true]~.ot-acc-txt {
      width: auto
    }

    #onetrust-pc-sdk .ot-acc-cntr .ot-addtl-venbox {
      display: none
    }

    #onetrust-pc-sdk .ot-vlst-cntr {
      margin-bottom: 0;
      width: 100%
    }

    #onetrust-pc-sdk .ot-vensec-title {
      font-size: .813em;
      vertical-align: middle;
      display: inline-block
    }

    #onetrust-pc-sdk .category-vendors-list-handler,
    #onetrust-pc-sdk .category-vendors-list-handler+a {
      margin-left: 0;
      margin-top: 10px
    }

    #onetrust-pc-sdk #ot-selall-vencntr.line-through label::after,
    #onetrust-pc-sdk #ot-selall-adtlvencntr.line-through label::after,
    #onetrust-pc-sdk #ot-selall-licntr.line-through label::after,
    #onetrust-pc-sdk #ot-selall-hostcntr.line-through label::after,
    #onetrust-pc-sdk #ot-selall-gnvencntr.line-through label::after {
      height: auto;
      border-left: 0;
      transform: none;
      -o-transform: none;
      -ms-transform: none;
      -webkit-transform: none;
      left: 5px;
      top: 9px
    }

    #onetrust-pc-sdk #ot-category-title {
      float: left;
      padding-bottom: 10px;
      font-size: 1em;
      width: 100%
    }

    #onetrust-pc-sdk .ot-cat-grp {
      margin-top: 10px
    }

    #onetrust-pc-sdk .ot-cat-item {
      line-height: 1.1;
      margin-top: 10px;
      display: inline-block;
      width: 100%
    }

    #onetrust-pc-sdk .ot-btn-container {
      text-align: right
    }

    #onetrust-pc-sdk .ot-btn-container button {
      display: inline-block;
      font-size: .75em;
      letter-spacing: .08em;
      margin-top: 19px
    }

    #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
      position: absolute;
      top: 10px;
      right: 0;
      z-index: 1;
      padding: 0;
      background-color: rgba(0, 0, 0, 0);
      border: none
    }

    #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon svg {
      display: block;
      height: 10px;
      width: 10px
    }

    #onetrust-pc-sdk #clear-filters-handler {
      margin-top: 20px;
      margin-bottom: 10px;
      float: right;
      max-width: 200px;
      text-decoration: none;
      color: #3860be;
      font-size: .9em;
      font-weight: bold;
      background-color: rgba(0, 0, 0, 0);
      border-color: rgba(0, 0, 0, 0);
      padding: 1px
    }

    #onetrust-pc-sdk #clear-filters-handler:hover {
      color: #2285f7
    }

    #onetrust-pc-sdk #clear-filters-handler:focus {
      outline: #000 solid 1px
    }

    #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl,
    #onetrust-pc-sdk .ot-enbl-chr h4~.ot-always-active {
      right: 45px
    }

    #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl+.ot-tgl {
      right: 120px
    }

    #onetrust-pc-sdk .ot-enbl-chr .ot-pli-hdr.ot-leg-border-color span:first-child {
      width: 90px
    }

    #onetrust-pc-sdk .ot-enbl-chr li.ot-subgrp>h5+.ot-tgl-cntr {
      padding-right: 25px
    }

    #onetrust-pc-sdk .ot-plus-minus {
      width: 20px;
      height: 20px;
      font-size: 1.5em;
      position: relative;
      display: inline-block;
      margin-right: 5px;
      top: 3px
    }

    #onetrust-pc-sdk .ot-plus-minus span {
      position: absolute;
      background: #27455c;
      border-radius: 1px
    }

    #onetrust-pc-sdk .ot-plus-minus span:first-of-type {
      top: 25%;
      bottom: 25%;
      width: 10%;
      left: 45%
    }

    #onetrust-pc-sdk .ot-plus-minus span:last-of-type {
      left: 25%;
      right: 25%;
      height: 10%;
      top: 45%
    }

    #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-arw,
    #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:first-of-type,
    #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
      transform: rotate(90deg)
    }

    #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
      left: 50%;
      right: 50%
    }

    #onetrust-pc-sdk #ot-selall-vencntr label,
    #onetrust-pc-sdk #ot-selall-adtlvencntr label,
    #onetrust-pc-sdk #ot-selall-hostcntr label,
    #onetrust-pc-sdk #ot-selall-licntr label {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px
    }

    #onetrust-pc-sdk .ot-host-item .ot-plus-minus,
    #onetrust-pc-sdk .ot-ven-item .ot-plus-minus {
      float: left;
      margin-right: 8px;
      top: 10px
    }

    #onetrust-pc-sdk .ot-ven-item ul {
      list-style: none inside;
      font-size: 100%;
      margin: 0
    }

    #onetrust-pc-sdk .ot-ven-item ul li {
      margin: 0 !important;
      padding: 0;
      border: none !important
    }

    #onetrust-pc-sdk .ot-pli-hdr {
      color: #77808e;
      overflow: hidden;
      padding-top: 7.5px;
      padding-bottom: 7.5px;
      width: calc(100% - 2px);
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    #onetrust-pc-sdk .ot-pli-hdr span:first-child {
      top: 50%;
      transform: translateY(50%);
      max-width: 90px
    }

    #onetrust-pc-sdk .ot-pli-hdr span:last-child {
      padding-right: 10px;
      max-width: 95px;
      text-align: center
    }

    #onetrust-pc-sdk .ot-li-title {
      float: right;
      font-size: .813em
    }

    #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color {
      background-color: #f4f4f4;
      border: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color span:first-child {
      text-align: left;
      width: 70px
    }

    #onetrust-pc-sdk li.ot-subgrp>h5,
    #onetrust-pc-sdk .ot-cat-header {
      width: calc(100% - 130px)
    }

    #onetrust-pc-sdk li.ot-subgrp>h5+.ot-tgl-cntr {
      padding-left: 13px
    }

    #onetrust-pc-sdk .ot-acc-grpcntr .ot-acc-grpdesc {
      margin-bottom: 5px
    }

    #onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr {
      border-top: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk .ot-acc-grpcntr .ot-vlst-cntr+.ot-subgrp-cntr {
      border-top: none
    }

    #onetrust-pc-sdk .ot-acc-hdr .ot-arw-cntr+.ot-tgl-cntr,
    #onetrust-pc-sdk .ot-acc-txt h4+.ot-tgl-cntr {
      padding-left: 13px
    }

    #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-subgrp>h5,
    #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header {
      width: calc(100% - 145px)
    }

    #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item h5+.ot-tgl-cntr,
    #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header+.ot-tgl {
      padding-left: 28px
    }

    #onetrust-pc-sdk .ot-sel-all-hdr,
    #onetrust-pc-sdk .ot-sel-all-chkbox {
      display: inline-block;
      width: 100%;
      position: relative
    }

    #onetrust-pc-sdk .ot-sel-all-chkbox {
      z-index: 1
    }

    #onetrust-pc-sdk .ot-sel-all {
      margin: 0;
      position: relative;
      padding-right: 23px;
      float: right
    }

    #onetrust-pc-sdk .ot-consent-hdr,
    #onetrust-pc-sdk .ot-li-hdr {
      float: right;
      font-size: .812em;
      line-height: normal;
      text-align: center;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk .ot-li-hdr {
      max-width: 100px;
      padding-right: 10px
    }

    #onetrust-pc-sdk .ot-consent-hdr {
      max-width: 55px
    }

    #onetrust-pc-sdk #ot-selall-licntr {
      display: block;
      width: 21px;
      height: auto;
      float: right;
      position: relative;
      right: 80px
    }

    #onetrust-pc-sdk #ot-selall-licntr label {
      position: absolute
    }

    #onetrust-pc-sdk .ot-ven-ctgl {
      margin-left: 66px
    }

    #onetrust-pc-sdk .ot-ven-litgl+.ot-arw-cntr {
      margin-left: 81px
    }

    #onetrust-pc-sdk .ot-enbl-chr .ot-host-cnt .ot-tgl-cntr {
      width: auto
    }

    #onetrust-pc-sdk #ot-lst-cnt:not(.ot-host-cnt) .ot-tgl-cntr {
      width: auto;
      top: auto;
      height: 20px
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox label {
      position: absolute;
      padding: 0;
      width: 20px;
      height: 20px
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info-cntr {
      border: 1px solid #d8d8d8;
      padding: .75rem 2rem;
      padding-bottom: 0;
      width: auto;
      margin-top: .5rem
    }

    #onetrust-pc-sdk .ot-acc-grpdesc+.ot-leg-btn-container {
      padding-left: 20px;
      padding-right: 20px;
      width: calc(100% - 40px);
      margin-bottom: 5px
    }

    #onetrust-pc-sdk .ot-subgrp .ot-leg-btn-container {
      margin-bottom: 5px
    }

    #onetrust-pc-sdk #ot-ven-lst .ot-leg-btn-container {
      margin-top: 10px
    }

    #onetrust-pc-sdk .ot-leg-btn-container {
      display: inline-block;
      width: 100%;
      margin-bottom: 10px
    }

    #onetrust-pc-sdk .ot-leg-btn-container button {
      height: auto;
      padding: 6.5px 8px;
      margin-bottom: 0;
      letter-spacing: 0;
      font-size: .75em;
      line-height: normal
    }

    #onetrust-pc-sdk .ot-leg-btn-container svg {
      display: none;
      height: 14px;
      width: 14px;
      padding-right: 5px;
      vertical-align: sub
    }

    #onetrust-pc-sdk .ot-active-leg-btn {
      cursor: default;
      pointer-events: none
    }

    #onetrust-pc-sdk .ot-active-leg-btn svg {
      display: inline-block
    }

    #onetrust-pc-sdk .ot-remove-objection-handler {
      text-decoration: underline;
      padding: 0;
      font-size: .75em;
      font-weight: 600;
      line-height: 1;
      padding-left: 10px
    }

    #onetrust-pc-sdk .ot-obj-leg-btn-handler span {
      font-weight: bold;
      text-align: center;
      font-size: inherit;
      line-height: 1.5
    }

    #onetrust-pc-sdk.ot-close-btn-link #close-pc-btn-handler {
      border: none;
      height: auto;
      line-height: 1.5;
      text-decoration: underline;
      font-size: .69em;
      background: none;
      right: 15px;
      top: 15px;
      width: auto;
      font-weight: normal
    }

    #onetrust-pc-sdk .ot-pgph-link {
      font-size: .813em !important;
      margin-top: 5px;
      position: relative
    }

    #onetrust-pc-sdk .ot-pgph-link.ot-pgph-link-subgroup {
      margin-bottom: 1rem
    }

    #onetrust-pc-sdk .ot-pgph-contr {
      margin: 0 2.5rem
    }

    #onetrust-pc-sdk .ot-pgph-title {
      font-size: 1.18rem;
      margin-bottom: 2rem
    }

    #onetrust-pc-sdk .ot-pgph-desc {
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 2rem;
      line-height: 1.5rem
    }

    #onetrust-pc-sdk .ot-pgph-desc:not(:last-child):after {
      content: "";
      width: 96%;
      display: block;
      margin: 0 auto;
      padding-bottom: 2rem;
      border-bottom: 1px solid #e9e9e9
    }

    #onetrust-pc-sdk .ot-cat-header {
      float: left;
      font-weight: 600;
      font-size: .875em;
      line-height: 1.5;
      max-width: 90%;
      vertical-align: middle
    }

    #onetrust-pc-sdk .ot-vnd-item>button:focus {
      outline: #000 solid 2px
    }

    #onetrust-pc-sdk .ot-vnd-item>button {
      position: absolute;
      cursor: pointer;
      width: 100%;
      height: 100%;
      margin: 0;
      top: 0;
      left: 0;
      z-index: 1;
      max-width: none;
      border: none
    }

    #onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=false]~.ot-acc-txt {
      margin-top: 0;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      width: 100%;
      transition: .25s ease-out;
      display: none
    }

    #onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=true]~.ot-acc-txt {
      transition: .1s ease-in;
      margin-top: 10px;
      width: 100%;
      overflow: auto;
      display: block
    }

    #onetrust-pc-sdk .ot-vnd-item>button[aria-expanded=true]~.ot-acc-grpcntr {
      width: auto;
      margin-top: 0px;
      padding-bottom: 10px
    }

    #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item {
      position: relative;
      border-radius: 2px;
      margin: 0;
      padding: 0;
      border: 1px solid #d8d8d8;
      border-top: none;
      width: calc(100% - 2px);
      float: left
    }

    #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type {
      margin-top: 10px;
      border-top: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc {
      padding-left: 20px;
      padding-right: 20px;
      width: calc(100% - 40px);
      font-size: .812em;
      margin-bottom: 10px;
      margin-top: 15px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul {
      padding-top: 10px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul li {
      padding-top: 0;
      line-height: 1.5;
      padding-bottom: 10px
    }

    #onetrust-pc-sdk .ot-accordion-layout div+.ot-acc-grpdesc {
      margin-top: 5px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:first-child {
      margin-top: 10px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:last-child,
    #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr:last-child {
      margin-bottom: 5px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
      padding-top: 11.5px;
      padding-bottom: 11.5px;
      padding-left: 20px;
      padding-right: 20px;
      width: calc(100% - 40px);
      display: inline-block
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt {
      width: 100%;
      padding: 0
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr {
      padding-left: 20px;
      padding-right: 15px;
      padding-bottom: 0;
      width: calc(100% - 35px)
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp {
      padding-right: 5px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr {
      z-index: 1;
      position: relative
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 20px;
      margin-top: -2px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr .ot-arw {
      width: 15px;
      height: 20px;
      margin-left: 5px;
      color: dimgray
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header {
      float: none;
      color: #2e3644;
      margin: 0;
      display: inline-block;
      height: auto;
      word-wrap: break-word;
      min-height: inherit
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,
    #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr {
      padding-left: 20px;
      width: calc(100% - 20px);
      display: inline-block;
      margin-top: 0;
      padding-bottom: 2px
    }

    #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
      position: relative;
      min-height: 25px
    }

    #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
    #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 20px
    }

    #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
      right: 95px
    }

    #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler,
    #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler+a {
      margin-top: 5px
    }

    #onetrust-pc-sdk #ot-lst-cnt {
      margin-top: 1rem;
      max-height: calc(100% - 96px)
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info-cntr {
      border: 1px solid #d8d8d8;
      padding: .75rem 2rem;
      padding-bottom: 0;
      width: auto;
      margin-top: .5rem
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info {
      margin-bottom: 1rem;
      padding-left: .75rem;
      padding-right: .75rem;
      display: flex;
      flex-direction: column
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info[data-vnd-info-key*=DPOEmail] {
      border-top: 1px solid #d8d8d8;
      padding-top: 1rem
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info[data-vnd-info-key*=DPOLink] {
      border-bottom: 1px solid #d8d8d8;
      padding-bottom: 1rem
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info .ot-vnd-lbl {
      font-weight: bold;
      font-size: .85em;
      margin-bottom: .5rem
    }

    #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info .ot-vnd-cnt {
      margin-left: .5rem;
      font-weight: 500;
      font-size: .85rem
    }

    #onetrust-pc-sdk .ot-vs-list,
    #onetrust-pc-sdk .ot-vnd-serv {
      width: auto;
      padding: 1rem 1.25rem;
      padding-bottom: 0
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-serv-hdr-cntr,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-serv-hdr-cntr {
      padding-bottom: .75rem;
      border-bottom: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr {
      font-weight: 600;
      font-size: .95em;
      line-height: 2;
      margin-left: .5rem
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item {
      border: none;
      margin: 0;
      padding: 0
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item button,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item button {
      outline: none;
      border-bottom: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item button[aria-expanded=true],
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item button[aria-expanded=true] {
      border-bottom: none
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item:first-child,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:first-child {
      margin-top: .25rem;
      border-top: unset
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item:last-child,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:last-child {
      margin-bottom: .5rem
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item:last-child button,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item:last-child button {
      border-bottom: none
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info-cntr,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info-cntr {
      border: 1px solid #d8d8d8;
      padding: .75rem 1.75rem;
      padding-bottom: 0;
      width: auto;
      margin-top: .5rem
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info {
      margin-bottom: 1rem;
      padding-left: .75rem;
      padding-right: .75rem;
      display: flex;
      flex-direction: column
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOEmail],
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOEmail] {
      border-top: 1px solid #d8d8d8;
      padding-top: 1rem
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOLink],
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info[data-vnd-info-key*=DPOLink] {
      border-bottom: 1px solid #d8d8d8;
      padding-bottom: 1rem
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info .ot-vnd-lbl,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info .ot-vnd-lbl {
      font-weight: bold;
      font-size: .85em;
      margin-bottom: .5rem
    }

    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info .ot-vnd-cnt,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info .ot-vnd-cnt {
      margin-left: .5rem;
      font-weight: 500;
      font-size: .85rem
    }

    #onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt,
    #onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt {
      padding-left: 40px
    }

    #onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr,
    #onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr {
      font-size: .8em
    }

    #onetrust-pc-sdk .ot-vs-list.ot-vnd-subgrp-cnt .ot-cat-header,
    #onetrust-pc-sdk .ot-vnd-serv.ot-vnd-subgrp-cnt .ot-cat-header {
      font-size: .8em
    }

    #onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv {
      margin-bottom: 1rem;
      padding: 1rem .95rem
    }

    #onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv .ot-vnd-serv-hdr-cntr {
      padding-bottom: .75rem;
      border-bottom: 1px solid #d8d8d8
    }

    #onetrust-pc-sdk .ot-subgrp-cntr .ot-vnd-serv .ot-vnd-serv-hdr-cntr .ot-vnd-serv-hdr {
      font-weight: 700;
      font-size: .8em;
      line-height: 20px;
      margin-left: .82rem
    }

    #onetrust-pc-sdk .ot-subgrp-cntr .ot-cat-header {
      font-weight: 700;
      font-size: .8em;
      line-height: 20px
    }

    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-vnd-serv .ot-vnd-lst-cont .ot-accordion-layout .ot-acc-hdr div.ot-chkbox {
      margin-left: .82rem
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr {
      padding: .7rem 0;
      margin: 0;
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: space-between
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr div:first-child,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr div:first-child,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr div:first-child,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr div:first-child,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr div:first-child,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr div:first-child,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr div:first-child {
      margin-left: .5rem
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr div:last-child,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr div:last-child,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr div:last-child,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr div:last-child,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr div:last-child,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr div:last-child,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr div:last-child {
      margin-right: .5rem;
      margin-left: .5rem
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-always-active,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-always-active,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-always-active,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-always-active,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-always-active,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-always-active,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-always-active {
      position: relative;
      right: unset;
      top: unset;
      transform: unset
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-plus-minus,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-plus-minus,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-plus-minus,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-plus-minus,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-plus-minus,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-plus-minus,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-plus-minus {
      top: 0
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-arw-cntr,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-arw-cntr,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-arw-cntr,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-arw-cntr,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-arw-cntr {
      float: none;
      top: unset;
      right: unset;
      transform: unset;
      margin-top: -2px;
      position: relative
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-cat-header,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-cat-header,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-cat-header,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-cat-header,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-cat-header,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-cat-header,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-cat-header {
      flex: 1;
      margin: 0 .5rem
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-tgl,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-tgl,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-tgl,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-tgl,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-tgl,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-tgl,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-tgl {
      position: relative;
      transform: none;
      right: 0;
      top: 0;
      float: none
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox {
      position: relative;
      margin: 0 .5rem
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox label,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox label,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox label,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox label,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox label {
      padding: 0
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox label::before,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox label::before,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox label::before,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox label::before,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox label::before {
      position: relative
    }

    #onetrust-pc-sdk .ot-vs-config .ot-acc-hdr .ot-chkbox input,
    #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr .ot-chkbox input,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps .ot-acc-hdr .ot-chkbox input,
    #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox input,
    #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-acc-hdr .ot-chkbox input,
    #onetrust-pc-sdk #ot-pc-lst .ot-vs-list .ot-vnd-item .ot-acc-hdr .ot-chkbox input,
    #onetrust-pc-sdk .ot-accordion-layout.ot-checkbox-consent .ot-acc-hdr .ot-chkbox input {
      position: absolute;
      cursor: pointer;
      width: 100%;
      height: 100%;
      opacity: 0;
      margin: 0;
      top: 0;
      left: 0;
      z-index: 1
    }

    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp .ot-acc-hdr h5.ot-cat-header,
    #onetrust-pc-sdk .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp .ot-acc-hdr h4.ot-cat-header {
      margin: 0
    }

    #onetrust-pc-sdk .ot-vs-config .ot-subgrp-cntr ul.ot-subgrps li.ot-subgrp h5 {
      top: 0;
      line-height: 20px
    }

    #onetrust-pc-sdk .ot-vs-list {
      display: flex;
      flex-direction: column;
      padding: 0;
      margin: .5rem 4px
    }

    #onetrust-pc-sdk .ot-vs-selc-all {
      display: flex;
      padding: 0;
      float: unset;
      align-items: center;
      justify-content: flex-start
    }

    #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf {
      justify-content: flex-end
    }

    #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf.ot-caret-conf .ot-sel-all-chkbox {
      margin-right: 48px
    }

    #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf .ot-sel-all-chkbox {
      margin: 0;
      padding: 0;
      margin-right: 14px;
      justify-content: flex-end
    }

    #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr.ot-chkbox,
    #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr.ot-tgl {
      display: inline-block;
      right: unset;
      width: auto;
      height: auto;
      float: none
    }

    #onetrust-pc-sdk .ot-vs-selc-all.ot-toggle-conf #ot-selall-vencntr label {
      width: 45px;
      height: 25px
    }

    #onetrust-pc-sdk .ot-vs-selc-all .ot-sel-all-chkbox {
      margin-right: 11px;
      margin-left: .75rem;
      display: flex;
      align-items: center
    }

    #onetrust-pc-sdk .ot-vs-selc-all .sel-all-hdr {
      margin: 0 1.25rem;
      font-size: .812em;
      line-height: normal;
      text-align: center;
      word-break: break-word;
      word-wrap: break-word
    }

    #onetrust-pc-sdk .ot-vnd-list-cnt #ot-selall-vencntr.ot-chkbox {
      float: unset;
      right: 0
    }

    #onetrust-pc-sdk[dir=rtl] #ot-back-arw,
    #onetrust-pc-sdk[dir=rtl] input~.ot-acc-hdr .ot-arw {
      transform: rotate(180deg);
      -o-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      -webkit-transform: rotate(180deg)
    }

    #onetrust-pc-sdk[dir=rtl] input:checked~.ot-acc-hdr .ot-arw {
      transform: rotate(270deg);
      -o-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
      -webkit-transform: rotate(270deg)
    }

    #onetrust-pc-sdk[dir=rtl] .ot-chkbox label::after {
      transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      border-left: 0;
      border-right: 3px solid
    }

    #onetrust-pc-sdk[dir=rtl] .ot-search-cntr>svg {
      right: 0
    }

    @media only screen and (max-width: 600px) {
      #onetrust-pc-sdk.otPcCenter {
        left: 0;
        min-width: 100%;
        height: 100%;
        top: 0;
        border-radius: 0
      }

      #onetrust-pc-sdk #ot-pc-content,
      #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
        margin: 1px 3px 0 10px;
        padding-right: 10px;
        width: calc(100% - 23px)
      }

      #onetrust-pc-sdk .ot-btn-container button {
        max-width: none;
        letter-spacing: .01em
      }

      #onetrust-pc-sdk #close-pc-btn-handler {
        top: 10px;
        right: 17px
      }

      #onetrust-pc-sdk p {
        font-size: .7em
      }

      #onetrust-pc-sdk #ot-pc-hdr {
        margin: 10px 10px 0 5px;
        width: calc(100% - 15px)
      }

      #onetrust-pc-sdk .vendor-search-handler {
        font-size: 1em
      }

      #onetrust-pc-sdk #ot-back-arw {
        margin-left: 12px
      }

      #onetrust-pc-sdk #ot-lst-cnt {
        margin: 0;
        padding: 0 5px 0 10px;
        min-width: 95%
      }

      #onetrust-pc-sdk .switch+p {
        max-width: 80%
      }

      #onetrust-pc-sdk .ot-ftr-stacked button {
        width: 100%
      }

      #onetrust-pc-sdk #ot-fltr-cnt {
        max-width: 320px;
        width: 90%;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        margin: 0;
        margin-left: 15px;
        left: auto;
        right: 40px;
        top: 85px
      }

      #onetrust-pc-sdk .ot-fltr-opt {
        margin-left: 25px;
        margin-bottom: 10px
      }

      #onetrust-pc-sdk .ot-pc-refuse-all-handler {
        margin-bottom: 0
      }

      #onetrust-pc-sdk #ot-fltr-cnt {
        right: 40px
      }
    }

    @media only screen and (max-width: 476px) {

      #onetrust-pc-sdk .ot-fltr-cntr,
      #onetrust-pc-sdk #ot-fltr-cnt {
        right: 10px
      }

      #onetrust-pc-sdk #ot-anchor {
        right: 25px
      }

      #onetrust-pc-sdk button {
        width: 100%
      }

      #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-sel-all {
        padding-right: 9px
      }

      #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr {
        right: 0
      }
    }

    @media only screen and (max-width: 896px)and (max-height: 425px)and (orientation: landscape) {
      #onetrust-pc-sdk.otPcCenter {
        left: 0;
        top: 0;
        min-width: 100%;
        height: 100%;
        border-radius: 0
      }

      #onetrust-pc-sdk #ot-anchor {
        left: initial;
        right: 50px
      }

      #onetrust-pc-sdk #ot-lst-title {
        margin-top: 12px
      }

      #onetrust-pc-sdk #ot-lst-title * {
        font-size: inherit
      }

      #onetrust-pc-sdk #ot-pc-hdr input {
        margin-right: 0;
        padding-right: 45px
      }

      #onetrust-pc-sdk .switch+p {
        max-width: 85%
      }

      #onetrust-pc-sdk #ot-sel-blk {
        position: static
      }

      #onetrust-pc-sdk #ot-pc-lst {
        overflow: auto
      }

      #onetrust-pc-sdk #ot-lst-cnt {
        max-height: none;
        overflow: initial
      }

      #onetrust-pc-sdk #ot-lst-cnt.no-results {
        height: auto
      }

      #onetrust-pc-sdk input {
        font-size: 1em !important
      }

      #onetrust-pc-sdk p {
        font-size: .6em
      }

      #onetrust-pc-sdk #ot-fltr-modal {
        width: 100%;
        top: 0
      }

      #onetrust-pc-sdk ul li p,
      #onetrust-pc-sdk .category-vendors-list-handler,
      #onetrust-pc-sdk .category-vendors-list-handler+a,
      #onetrust-pc-sdk .category-host-list-handler {
        font-size: .6em
      }

      #onetrust-pc-sdk.ot-shw-fltr #ot-anchor {
        display: none !important
      }

      #onetrust-pc-sdk.ot-shw-fltr #ot-pc-lst {
        height: 100% !important;
        overflow: hidden;
        top: 0px
      }

      #onetrust-pc-sdk.ot-shw-fltr #ot-fltr-cnt {
        margin: 0;
        height: 100%;
        max-height: none;
        padding: 10px;
        top: 0;
        width: calc(100% - 20px);
        position: absolute;
        right: 0;
        left: 0;
        max-width: none
      }

      #onetrust-pc-sdk.ot-shw-fltr .ot-fltr-scrlcnt {
        max-height: calc(100% - 65px)
      }
    }

    #onetrust-consent-sdk #onetrust-pc-sdk,
    #onetrust-consent-sdk #ot-search-cntr,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
    #onetrust-consent-sdk #onetrust-pc-sdk ot-grp-hdr1 .checkbox,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title:after,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-sel-blk,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-cnt,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-anchor {
      background-color: #FFFFFF;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk h3,
    #onetrust-consent-sdk #onetrust-pc-sdk h4,
    #onetrust-consent-sdk #onetrust-pc-sdk h5,
    #onetrust-consent-sdk #onetrust-pc-sdk h6,
    #onetrust-consent-sdk #onetrust-pc-sdk p,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title h3,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
    #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-optout-signal {
      color: #696969;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-pgph-link,
    #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
    #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a,
    #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-legclaim-link,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-content #ot-pc-desc .ot-link-btn,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
    #onetrust-consent-sdk #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info a {
      color: #3860BE;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
      text-decoration: underline;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-grpcntr.ot-acc-txt,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-subgrp-tgl .ot-switch.ot-toggle {
      background-color: #E9E9E9;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets {
      background-color: #E9E9E9;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
      background-color: #70ed9b;
      border-color: #70ed9b;
      color: #0f1027;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .ot-active-menu {
      border-color: #70ed9b;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler {
      background-color: transparent;
      border: 1px solid transparent;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
      background-color: #FFFFFF;
      color: #78808E;
      border-color: #78808E;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch,
    .ot-switch .ot-switch-nob,
    .ot-switch .ot-switch-nob:before,
    #onetrust-pc-sdk .ot-checkbox input[type="checkbox"]:focus+label::before,
    #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]:focus+label::before {
      outline-color: #0f1027;
      outline-width: 1px;
    }

    #onetrust-pc-sdk .ot-host-item>button:focus,
    #onetrust-pc-sdk .ot-ven-item>button:focus {
      border: 1px solid #0f1027;
    }

    #onetrust-consent-sdk #onetrust-pc-sdk *:focus,
    #onetrust-consent-sdk #onetrust-pc-sdk .ot-vlst-cntr>a:focus {
      outline: 1px solid #0f1027;
    }

    #onetrust-pc-sdk .ot-vlst-cntr .ot-ext-lnk,
    #onetrust-pc-sdk .ot-ven-hdr .ot-ext-lnk {
      background-image: url('https://cdn-ukwest.onetrust.com/logos/static/ot_external_link.svg');
    }

    .ot-sdk-cookie-policy {
      font-family: inherit;
      font-size: 16px
    }

    .ot-sdk-cookie-policy.otRelFont {
      font-size: 1rem
    }

    .ot-sdk-cookie-policy h3,
    .ot-sdk-cookie-policy h4,
    .ot-sdk-cookie-policy h6,
    .ot-sdk-cookie-policy p,
    .ot-sdk-cookie-policy li,
    .ot-sdk-cookie-policy a,
    .ot-sdk-cookie-policy th,
    .ot-sdk-cookie-policy #cookie-policy-description,
    .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
    .ot-sdk-cookie-policy #cookie-policy-title {
      color: dimgray
    }

    .ot-sdk-cookie-policy #cookie-policy-description {
      margin-bottom: 1em
    }

    .ot-sdk-cookie-policy h4 {
      font-size: 1.2em
    }

    .ot-sdk-cookie-policy h6 {
      font-size: 1em;
      margin-top: 2em
    }

    .ot-sdk-cookie-policy th {
      min-width: 75px
    }

    .ot-sdk-cookie-policy a,
    .ot-sdk-cookie-policy a:hover {
      background: #fff
    }

    .ot-sdk-cookie-policy thead {
      background-color: #f6f6f4;
      font-weight: bold
    }

    .ot-sdk-cookie-policy .ot-mobile-border {
      display: none
    }

    .ot-sdk-cookie-policy section {
      margin-bottom: 2em
    }

    .ot-sdk-cookie-policy table {
      border-collapse: inherit
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
      font-family: inherit;
      font-size: 1rem
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
      color: dimgray
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
      margin-bottom: 1em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
      margin-left: 1.5em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
      font-size: .9em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
      font-size: inherit
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
      font-size: 1em;
      margin-bottom: .6em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
      margin-bottom: 1.2em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
      margin-bottom: 1em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
      min-width: 75px
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
      background: #fff
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
      background-color: #f6f6f4;
      font-weight: bold
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
      display: none
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
      margin-bottom: 2em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
      list-style: disc;
      margin-left: 1.5em
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
      display: inline-block
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
      border-collapse: inherit;
      margin: auto;
      border: 1px solid #d7d7d7;
      border-radius: 5px;
      border-spacing: initial;
      width: 100%;
      overflow: hidden
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
      border-bottom: 1px solid #d7d7d7;
      border-right: 1px solid #d7d7d7
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
      border-bottom: 0px
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
      border-right: 0px
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
      width: 25%
    }

    .ot-sdk-cookie-policy[dir=rtl] {
      text-align: left
    }

    #ot-sdk-cookie-policy h3 {
      font-size: 1.5em
    }

    @media only screen and (max-width: 530px) {

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
        display: block
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
        margin: 0 0 1em 0
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
        background: #f6f6f4
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
        position: absolute;
        height: 100%;
        left: 6px;
        width: 40%;
        padding-right: 10px
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
        display: inline-block;
        background-color: #e4e4e4;
        position: absolute;
        height: 100%;
        top: 0;
        left: 45%;
        width: 2px
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
        content: attr(data-label);
        font-weight: bold
      }

      .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
        word-break: break-word;
        word-wrap: break-word
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
        overflow: hidden
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
        border: none;
        border-bottom: 1px solid #d7d7d7
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
        display: block
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
        width: auto
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
        margin: 0 0 1em 0
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
        height: 100%;
        width: 40%;
        padding-right: 10px
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
        content: attr(data-label);
        font-weight: bold
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
        word-break: break-word;
        word-wrap: break-word
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
        z-index: -9999
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
        border-bottom: 1px solid #d7d7d7;
        border-right: 0px
      }

      #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
        border-bottom: 0px
      }
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
      color: #696969;
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
      color: #696969;
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
      color: #696969;
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
      color: #696969;
    }

    #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
      background-color: #F8F8F8;
    }

    .ot-floating-button__front {
      background-image: url('https://cdn-ukwest.onetrust.com/logos/static/ot_persistent_cookie_icon.png')
    }
  </style>
  <script charset="utf-8" src="https://analytics.tiktok.com/i18n/pixel/static/identify_55404.js"></script>
</head>

<body>
  <noscript data-n-head="ssr" data-hid="gtm-noscript" data-pbody="true">
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G37GMM&" height="0" width="0"
      style="display:none;visibility:hidden" title="gtm"></iframe>
  </noscript>
  <div id="__nuxt">
    <!---->
    <div id="__layout">
      <div data-app="true" id="app" class="v-application v-application--is-ltr theme--light">
        <div class="v-application--wrap">
          <main class="v-main" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0" data-booted="true">
            <div class="v-main__wrap">
              <div id="gtm--navigation" data-zuko-id="zuko--navigation" class="navigation-container" data-v-66653094="">
                <div class="row grey lighten-2 d-none d-sm-flex header-bar mb-1" data-v-66653094="">
                  <div class="col col-12" data-v-66653094="">
                    <ul class="d-flex flex-row justify-end px-10 pt-2" data-v-66653094="">
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://goshorty.co.uk/" target="_blank" id="gtm--navigation-home"
                          data-zuko-id="zuko--navigation-home" class="text-body-1" data-v-66653094=""> Home </a>
                      </li>
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://goshorty.co.uk/faqs/" target="_blank" id="gtm--navigation-faqs"
                          data-zuko-id="zuko--navigation-faqs" class="text-body-1" data-v-66653094=""> FAQs </a>
                      </li>
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://goshorty.co.uk/blog/" target="_blank" id="gtm--navigation-blog"
                          data-zuko-id="zuko--navigation-blog" class="text-body-1" data-v-66653094=""> Blog </a>
                      </li>
                      <li class="my-1 footer-section" data-v-66653094="">
                        <a href="https://goshorty.co.uk/contact" target="_blank" id="gtm--navigation-contactUs"
                          data-zuko-id="zuko--navigation-contactUs" class="text-body-1" data-v-66653094=""> Contact us
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="container px-5 py-8" data-v-66653094="">
                  <div class="d-flex justify-space-between align-center" data-v-66653094="">
                    <img src="imgs/goshorty-logo-master-rgb.svg" alt="GoShorty short term vehicle insurance"
                      class="goshorty-logo" data-v-66653094="">
                    <div class="d-block d-sm-none" data-v-66653094="">
                      <button type="button"
                        class="v-icon notranslate navigation-bars brandDarkestGrey--text v-icon--link mdi mdi-menu theme--light"
                        data-v-66653094=""></button>
                    </div>
                  </div>
                </div>
                <div class="side-menu-container" data-v-66653094="">
                  <ul data-v-66653094="">
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://goshorty.co.uk/" target="_blank" id="gtm--navigation-home-mobile"
                        data-zuko-id="zuko--navigation-home-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> Home </a>
                    </li>
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://goshorty.co.uk/faqs/" target="_blank" id="gtm--navigation-faqs-mobile"
                        data-zuko-id="zuko--navigation-faqs-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> FAQs </a>
                    </li>
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://goshorty.co.uk/blog/" target="_blank" id="gtm--navigation-blog-mobile"
                        data-zuko-id="zuko--navigation-blog-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> Blog </a>
                    </li>
                    <li class="my-2 footer-section" data-v-66653094="">
                      <a href="https://goshorty.co.uk/contact" target="_blank" id="gtm--navigation-contactUs-mobile"
                        data-zuko-id="zuko--navigation-contactUs-mobile" class="text-decoration-none text-body-1"
                        data-v-66653094=""> Contact us
                      </a>
                    </li>
                  </ul>
                  <div class="close-button-container" data-v-66653094="">
                    <i aria-hidden="true"
                      class="v-icon notranslate close-button mdi mdi-close-circle-outline theme--light"
                      data-v-66653094=""></i>
                  </div>
                </div>
              </div>
              <div class="container" data-v-3b8d5b18="">
                <div id="progress-bar-wrapper" data-v-1d55dd0c="" data-v-3b8d5b18="">
                  <div data-v-1d55dd0c="" class="">
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="20"
                      class="v-progress-linear v-progress-linear--rounded v-progress-linear--visible theme--light"
                      style="height:15px" data-v-1d55dd0c="">
                      <div class="v-progress-linear__background brandGreen"
                        style="opacity: 0.3; left: 20%; width: 80%;"></div>
                      <div class="v-progress-linear__buffer"></div>
                      <div class="v-progress-linear__determinate brandGreen" style="width: 20%;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" data-v-3b8d5b18="" style="display: none;">
                  <div class="text-center col" style="margin-top:50px;margin-bottom:50px" data-v-3b8d5b18="">
                    <div style="max-width:200px;margin-left:auto;margin-right:auto" data-v-3b8d5b18="">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1000 1000" width="1000" height="1000" preserveAspectRatio="xMidYMid meet"
                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                        <defs>
                          <clipPath id="__lottie_element_2">
                            <rect width="1000" height="1000" x="0" y="0"></rect>
                          </clipPath>
                          <g id="__lottie_element_3">
                            <g style="display: block;"
                              transform="matrix(7.800000190734863,0,0,7.800000190734863,-11200,-11199.2197265625)"
                              opacity="1">
                              <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                <g opacity="1" transform="matrix(1,0,0,1,500,499.95001220703125)">
                                  <g opacity="1" transform="matrix(1,0,0,1,500,499.95001220703125)">
                                    <g opacity="1" transform="matrix(1,0,0,1,500,499.95001220703125)">
                                      <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                        <path fill="url(#__lottie_element_6)" fill-opacity="1"
                                          d=" M-12.100000381469727,-20.950000762939453 C-13.899999618530273,-20.950000762939453 -15.5,-19.850000381469727 -16.100000381469727,-18.149999618530273 C-16.100000381469727,-18.149999618530273 -16.100000381469727,-18.149999618530273 -16.100000381469727,-18.049999237060547 C-16.100000381469727,-18.049999237060547 -18.100000381469727,-13.449999809265137 -18.100000381469727,-13.449999809265137 C-18.100000381469727,-13.449999809265137 -22.700000762939453,-13.449999809265137 -22.700000762939453,-13.449999809265137 C-25.100000381469727,-13.449999809265137 -27,-11.550000190734863 -27,-9.149999618530273 C-27,-6.75 -25.100000381469727,-4.849999904632568 -22.700000762939453,-4.849999904632568 C-22.700000762939453,-4.849999904632568 -22.600000381469727,-4.849999904632568 -22.600000381469727,-4.849999904632568 C-23.799999237060547,-3.549999952316284 -24.5,-1.75 -24.5,0.15000000596046448 C-24.5,0.15000000596046448 -24.5,12.449999809265137 -24.5,12.449999809265137 C-24.5,13.149999618530273 -24,13.649999618530273 -23.299999237060547,13.649999618530273 C-23.299999237060547,13.649999618530273 -19.700000762939453,13.649999618530273 -19.700000762939453,13.649999618530273 C-19.700000762939453,13.649999618530273 -19.700000762939453,19.850000381469727 -19.700000762939453,19.850000381469727 C-19.700000762939453,20.549999237060547 -19.200000762939453,21.049999237060547 -18.5,21.049999237060547 C-18.5,21.049999237060547 -11.100000381469727,21.049999237060547 -11.100000381469727,21.049999237060547 C-10.399999618530273,21.049999237060547 -9.899999618530273,20.450000762939453 -9.899999618530273,19.850000381469727 C-9.899999618530273,19.850000381469727 -9.899999618530273,13.649999618530273 -9.899999618530273,13.649999618530273 C-9.899999618530273,13.649999618530273 9.699999809265137,13.649999618530273 9.699999809265137,13.649999618530273 C9.699999809265137,13.649999618530273 9.699999809265137,19.850000381469727 9.699999809265137,19.850000381469727 C9.699999809265137,20.549999237060547 10.199999809265137,21.049999237060547 10.899999618530273,21.049999237060547 C10.899999618530273,21.049999237060547 18.299999237060547,21.049999237060547 18.299999237060547,21.049999237060547 C19,21.049999237060547 19.5,20.450000762939453 19.5,19.850000381469727 C19.5,19.850000381469727 19.5,13.649999618530273 19.5,13.649999618530273 C19.5,13.649999618530273 23.299999237060547,13.649999618530273 23.299999237060547,13.649999618530273 C24,13.649999618530273 24.5,13.050000190734863 24.5,12.449999809265137 C24.5,12.449999809265137 24.5,0.05000000074505806 24.5,0.05000000074505806 C24.5,-1.850000023841858 23.799999237060547,-3.6500000953674316 22.600000381469727,-4.949999809265137 C22.600000381469727,-4.949999809265137 22.700000762939453,-4.949999809265137 22.700000762939453,-4.949999809265137 C25.100000381469727,-4.949999809265137 27,-6.849999904632568 27,-9.25 C27,-11.649999618530273 25.100000381469727,-13.550000190734863 22.700000762939453,-13.550000190734863 C22.700000762939453,-13.550000190734863 18.100000381469727,-13.550000190734863 18.100000381469727,-13.550000190734863 C18.100000381469727,-13.550000190734863 16.100000381469727,-18.149999618530273 16.100000381469727,-18.149999618530273 C16.100000381469727,-18.149999618530273 16.100000381469727,-18.149999618530273 16.100000381469727,-18.25 C15.5,-19.950000762939453 13.899999618530273,-21.049999237060547 12.100000381469727,-21.049999237060547 C12.100000381469727,-21.049999237060547 -12.100000381469727,-21.049999237060547 -12.100000381469727,-21.049999237060547 C-12.100000381469727,-21.049999237060547 -12.100000381469727,-20.950000762939453 -12.100000381469727,-20.950000762939453z M-12.100000381469727,-18.450000762939453 C-12.100000381469727,-18.450000762939453 12,-18.450000762939453 12,-18.450000762939453 C12.600000381469727,-18.450000762939453 13.600000381469727,-17.75 13.800000190734863,-17.25 C13.800000190734863,-17.25 13.800000190734863,-17.25 13.800000190734863,-17.149999618530273 C13.800000190734863,-17.149999618530273 18.100000381469727,-7.25 18.100000381469727,-7.25 C17.799999237060547,-7.25 17.5,-7.349999904632568 17.100000381469727,-7.349999904632568 C17.100000381469727,-7.349999904632568 -17.200000762939453,-7.349999904632568 -17.200000762939453,-7.349999904632568 C-17.5,-7.349999904632568 -17.799999237060547,-7.349999904632568 -18.200000762939453,-7.25 C-18.200000762939453,-7.25 -13.899999618530273,-17.149999618530273 -13.899999618530273,-17.149999618530273 C-13.899999618530273,-17.149999618530273 -13.899999618530273,-17.149999618530273 -13.899999618530273,-17.25 C-13.600000381469727,-17.75 -12.600000381469727,-18.450000762939453 -12.100000381469727,-18.450000762939453 C-12.100000381469727,-18.450000762939453 -12.100000381469727,-18.450000762939453 -12.100000381469727,-18.450000762939453z M-22.700000762939453,-11.050000190734863 C-22.700000762939453,-11.050000190734863 -19.200000762939453,-11.050000190734863 -19.200000762939453,-11.050000190734863 C-19.200000762939453,-11.050000190734863 -20.799999237060547,-7.349999904632568 -20.799999237060547,-7.349999904632568 C-20.799999237060547,-7.349999904632568 -22.700000762939453,-7.349999904632568 -22.700000762939453,-7.349999904632568 C-23.700000762939453,-7.349999904632568 -24.5,-8.149999618530273 -24.5,-9.25 C-24.5,-10.350000381469727 -23.799999237060547,-11.050000190734863 -22.700000762939453,-11.050000190734863z M19.200000762939453,-11.050000190734863 C19.200000762939453,-11.050000190734863 22.700000762939453,-11.050000190734863 22.700000762939453,-11.050000190734863 C23.700000762939453,-11.050000190734863 24.5,-10.25 24.5,-9.149999618530273 C24.5,-8.050000190734863 23.700000762939453,-7.349999904632568 22.700000762939453,-7.349999904632568 C22.700000762939453,-7.349999904632568 20.799999237060547,-7.349999904632568 20.799999237060547,-7.349999904632568 C20.799999237060547,-7.349999904632568 19.200000762939453,-11.050000190734863 19.200000762939453,-11.050000190734863z M-17.200000762939453,-4.949999809265137 C-17.200000762939453,-4.949999809265137 17.100000381469727,-4.949999809265137 17.100000381469727,-4.949999809265137 C19.799999237060547,-4.949999809265137 22,-2.75 22,0.05000000074505806 C22,0.05000000074505806 22,11.149999618530273 22,11.149999618530273 C22,11.149999618530273 -22.100000381469727,11.149999618530273 -22.100000381469727,11.149999618530273 C-22.100000381469727,11.149999618530273 -22.100000381469727,0.05000000074505806 -22.100000381469727,0.05000000074505806 C-22.100000381469727,-2.75 -19.899999618530273,-4.949999809265137 -17.200000762939453,-4.949999809265137 C-17.200000762939453,-4.949999809265137 -17.200000762939453,-4.949999809265137 -17.200000762939453,-4.949999809265137z M-18.5,0.05000000074505806 C-19.200000762939453,0.05000000074505806 -19.700000762939453,0.6499999761581421 -19.700000762939453,1.25 C-19.700000762939453,1.25 -19.700000762939453,7.449999809265137 -19.700000762939453,7.449999809265137 C-19.700000762939453,8.149999618530273 -19.200000762939453,8.649999618530273 -18.5,8.649999618530273 C-18.5,8.649999618530273 -13.5,8.649999618530273 -13.5,8.649999618530273 C-11.199999809265137,8.649999618530273 -9.300000190734863,6.650000095367432 -9.300000190734863,4.349999904632568 C-9.300000190734863,2.049999952316284 -11.100000381469727,0.05000000074505806 -13.5,0.05000000074505806 C-13.5,0.05000000074505806 -18.5,0.05000000074505806 -18.5,0.05000000074505806 C-18.5,0.05000000074505806 -18.5,0.05000000074505806 -18.5,0.05000000074505806z M13.300000190734863,0.05000000074505806 C11,0.05000000074505806 9.100000381469727,2.049999952316284 9.100000381469727,4.349999904632568 C9.100000381469727,6.650000095367432 10.899999618530273,8.649999618530273 13.300000190734863,8.649999618530273 C13.300000190734863,8.649999618530273 18.299999237060547,8.649999618530273 18.299999237060547,8.649999618530273 C19,8.649999618530273 19.5,8.050000190734863 19.5,7.449999809265137 C19.5,7.449999809265137 19.5,1.25 19.5,1.25 C19.5,0.550000011920929 19,0.05000000074505806 18.299999237060547,0.05000000074505806 C18.299999237060547,0.05000000074505806 13.300000190734863,0.05000000074505806 13.300000190734863,0.05000000074505806 C13.300000190734863,0.05000000074505806 13.300000190734863,0.05000000074505806 13.300000190734863,0.05000000074505806z M-17.200000762939453,2.549999952316284 C-17.200000762939453,2.549999952316284 -13.399999618530273,2.549999952316284 -13.399999618530273,2.549999952316284 C-12.5,2.549999952316284 -11.699999809265137,3.3499999046325684 -11.699999809265137,4.449999809265137 C-11.699999809265137,5.550000190734863 -12.5,6.349999904632568 -13.399999618530273,6.349999904632568 C-13.399999618530273,6.349999904632568 -17.200000762939453,6.349999904632568 -17.200000762939453,6.349999904632568 C-17.200000762939453,6.349999904632568 -17.200000762939453,2.549999952316284 -17.200000762939453,2.549999952316284z M13.300000190734863,2.549999952316284 C13.300000190734863,2.549999952316284 17.100000381469727,2.549999952316284 17.100000381469727,2.549999952316284 C17.100000381469727,2.549999952316284 17.100000381469727,6.25 17.100000381469727,6.25 C17.100000381469727,6.25 13.300000190734863,6.25 13.300000190734863,6.25 C12.399999618530273,6.25 11.600000381469727,5.449999809265137 11.600000381469727,4.349999904632568 C11.600000381469727,3.25 12.399999618530273,2.549999952316284 13.300000190734863,2.549999952316284z M-17.200000762939453,13.649999618530273 C-17.200000762939453,13.649999618530273 -12.300000190734863,13.649999618530273 -12.300000190734863,13.649999618530273 C-12.300000190734863,13.649999618530273 -12.300000190734863,18.549999237060547 -12.300000190734863,18.549999237060547 C-12.300000190734863,18.549999237060547 -17.200000762939453,18.549999237060547 -17.200000762939453,18.549999237060547 C-17.200000762939453,18.549999237060547 -17.200000762939453,13.649999618530273 -17.200000762939453,13.649999618530273z M12.300000190734863,13.649999618530273 C12.300000190734863,13.649999618530273 17.200000762939453,13.649999618530273 17.200000762939453,13.649999618530273 C17.200000762939453,13.649999618530273 17.200000762939453,18.549999237060547 17.200000762939453,18.549999237060547 C17.200000762939453,18.549999237060547 12.300000190734863,18.549999237060547 12.300000190734863,18.549999237060547 C12.300000190734863,18.549999237060547 12.300000190734863,13.649999618530273 12.300000190734863,13.649999618530273z">
                                        </path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </g>
                          <linearGradient id="__lottie_element_6" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-44775.55078125" y1="-2531.199951171875" x2="25.385000228881836"
                            y2="15.562999725341797">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_10" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-138" y1="-150" x2="136" y2="102">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <mask id="__lottie_element_3_1" mask-type="alpha">
                            <use xlink:href="#__lottie_element_3"></use>
                          </mask>
                          <linearGradient id="__lottie_element_15" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-107.3499984741211" y1="-37.29999923706055" x2="4.573999881744385"
                            y2="-37.29999923706055">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_19" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-94.75" y1="-77.6500015258789" x2="17.173999786376953" y2="-77.6500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_23" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-74.5" y1="-103.6500015258789" x2="37.42399978637695" y2="-103.6500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_27" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-50.349998474121094" y1="-109.50800323486328" x2="61.57400131225586"
                            y2="-109.50800323486328">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_31" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-27.200000762939453" y1="-94.9000015258789" x2="84.7239990234375"
                            y2="-94.9000015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_35" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-9.800000190734863" y1="-60.79999923706055" x2="102.1240005493164"
                            y2="-60.79999923706055">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_39" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-1.75" y1="-13.699999809265137" x2="110.17400360107422" y2="-13.699999809265137">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_43" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-4.599999904632568" y1="35.099998474121094" x2="107.3239974975586"
                            y2="35.099998474121094">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_47" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-17.649999618530273" y1="76.55000305175781" x2="94.27400207519531"
                            y2="76.55000305175781">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_51" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-38.5" y1="101.1500015258789" x2="73.42400360107422" y2="101.1500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_55" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-62.95000076293945" y1="106.6500015258789" x2="48.9739990234375" y2="106.6500015258789">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_59" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-85.5" y1="90.44999694824219" x2="26.423999786376953" y2="90.44999694824219">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_63" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-102.1500015258789" y1="55.25" x2="9.77400016784668" y2="55.25">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                          <linearGradient id="__lottie_element_67" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-109.9000015258789" y1="10.649999618530273" x2="2.0239999294281006"
                            y2="10.649999618530273">
                            <stop offset="0%" stop-color="rgb(206,67,255)"></stop>
                            <stop offset="26%" stop-color="rgb(136,97,255)"></stop>
                            <stop offset="51%" stop-color="rgb(66,128,255)"></stop>
                            <stop offset="76%" stop-color="rgb(89,183,205)"></stop>
                            <stop offset="100%" stop-color="rgb(112,237,155)"></stop>
                          </linearGradient>
                        </defs>
                        <g clip-path="url(#__lottie_element_2)">
                          <g style="display: block;"
                            transform="matrix(7.797178268432617,0.209794819355011,-0.209794819355011,7.797178268432617,913.5405883789062,558.333984375)"
                            opacity="0.17671941764041996">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_67)" fill-opacity="1"
                                d=" M0.8999999761581421,-6.050000190734863 C0.8999999761581421,-1.9500000476837158 0.5,2.049999952316284 -0.4000000059604645,6.050000190734863 C-0.4000000059604645,6.050000190734863 -0.8999999761581421,5.949999809265137 -0.8999999761581421,5.949999809265137 C0,2.049999952316284 0.4000000059604645,-1.9500000476837158 0.4000000059604645,-6.050000190734863 C0.4000000059604645,-6.050000190734863 0.8999999761581421,-6.050000190734863 0.8999999761581421,-6.050000190734863z">
                              </path>
                            </g>
                          </g>
                          <g style="display: block;"
                            transform="matrix(7.797178268432617,0.209794819355011,-0.209794819355011,7.797178268432617,848.3711547851562,732.92431640625)"
                            opacity="0.003996300622626251">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_63)" fill-opacity="1"
                                d=" M3.450000047683716,-5.050000190734863 C1.75,-1.350000023841858 -0.3499999940395355,2.1500000953674316 -2.8499999046325684,5.349999904632568 C-2.8499999046325684,5.349999904632568 -3.450000047683716,4.849999904632568 -3.450000047683716,4.849999904632568 C-0.949999988079071,1.75 1.25,-1.75 2.950000047683716,-5.349999904632568 C2.950000047683716,-5.349999904632568 3.450000047683716,-5.050000190734863 3.450000047683716,-5.050000190734863z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(1.3848506212234497,7.676079273223877,-7.676079273223877,1.3848506212234497,187.9354705810547,784.5664672851562)"
                            opacity="0.039267969342820945">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_59)" fill-opacity="1"
                                d=" M5.400000095367432,-3.049999952316284 C2.299999952316284,-0.3499999940395355 -1.2000000476837158,1.9500000476837158 -4.800000190734863,3.8499999046325684 C-4.800000190734863,3.8499999046325684 -5.400000095367432,2.549999952316284 -5.400000095367432,2.549999952316284 C-1.7999999523162842,0.8500000238418579 1.600000023841858,-1.350000023841858 4.800000190734863,-3.8499999046325684 C4.800000190734863,-3.8499999046325684 5.400000095367432,-3.049999952316284 5.400000095367432,-3.049999952316284z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-1.0078907012939453,7.734607696533203,-7.734607696533203,-1.0078907012939453,75.6451416015625,493.86480712890625)"
                            opacity="0.0011617967027713406">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_55)" fill-opacity="1"
                                d=" M6.150000095367432,0.05000000074505806 C2.1500000953674316,1.0499999523162842 -2.049999952316284,1.649999976158142 -6.150000095367432,1.75 C-6.150000095367432,1.75 -6.150000095367432,-0.44999998807907104 -6.150000095367432,-0.44999998807907104 C-2.1500000953674316,-0.44999998807907104 1.850000023841858,-0.8500000238418579 5.75,-1.75 C5.75,-1.75 6.150000095367432,0.05000000074505806 6.150000095367432,0.05000000074505806z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-1.927068829536438,7.558201313018799,-7.558201313018799,-1.927068829536438,145.4473876953125,263.100341796875)"
                            opacity="0.04836262912610735">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_51)" fill-opacity="1"
                                d=" M5.699999809265137,3.25 C1.600000023841858,2.450000047683716 -2.5,1.149999976158142 -6.300000190734863,-0.550000011920929 C-6.300000190734863,-0.550000011920929 -5,-3.25 -5,-3.25 C-1.399999976158142,-1.5499999523162842 2.4000000953674316,-0.15000000596046448 6.300000190734863,0.75 C6.300000190734863,0.75 5.699999809265137,3.25 5.699999809265137,3.25z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-4.058742523193359,6.660826683044434,-6.660826683044434,-4.058742523193359,399.0546875,81.80671691894531)"
                            opacity="0.003638033465044828">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_47)" fill-opacity="1"
                                d=" M3.549999952316284,5.550000190734863 C0.15000000596046448,2.950000047683716 -2.950000047683716,-0.05000000074505806 -5.650000095367432,-3.3499999046325684 C-5.650000095367432,-3.3499999046325684 -2.8499999046325684,-5.550000190734863 -2.8499999046325684,-5.550000190734863 C-0.3499999940395355,-2.450000047683716 2.549999952316284,0.44999998807907104 5.650000095367432,2.950000047683716 C5.650000095367432,2.950000047683716 3.549999952316284,5.550000190734863 3.549999952316284,5.550000190734863z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-5.125704765319824,5.879383563995361,-5.879383563995361,-5.125704765319824,658.2806396484375,98.85857391357422)"
                            opacity="0.016935196191513173">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_43)" fill-opacity="1"
                                d=" M0.4000000059604645,6.5 C-1.5,2.5999999046325684 -2.9000000953674316,-1.399999976158142 -3.9000000953674316,-5.599999904632568 C-3.9000000953674316,-5.599999904632568 -0.10000000149011612,-6.5 -0.10000000149011612,-6.5 C0.800000011920929,-2.5999999046325684 2.0999999046325684,1.2000000476837158 3.9000000953674316,4.800000190734863 C3.9000000953674316,4.800000190734863 0.4000000059604645,6.5 0.4000000059604645,6.5z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-6.361971855163574,4.5127949714660645,-4.5127949714660645,-6.361971855163574,878.0209350585938,292.10235595703125)"
                            opacity="0.0006881517706453622">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_39)" fill-opacity="1"
                                d=" M-2.6500000953674316,6.400000095367432 C-2.6500000953674316,2.0999999046325684 -2.1500000953674316,-2.200000047683716 -1.149999976158142,-6.400000095367432 C-1.149999976158142,-6.400000095367432 2.6500000953674316,-5.5 2.6500000953674316,-5.5 C1.75,-1.600000023841858 1.350000023841858,2.4000000953674316 1.350000023841858,6.400000095367432 C1.350000023841858,6.400000095367432 -2.6500000953674316,6.400000095367432 -2.6500000953674316,6.400000095367432z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.019726753234863,3.400505781173706,-3.400505781173706,-7.019726753234863,929.2000732421875,546.896240234375)"
                            opacity="0.001417241992994036">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_35)" fill-opacity="1"
                                d=" M-4.900000095367432,4.5 C-3,0.699999988079071 -0.6000000238418579,-2.9000000953674316 2.0999999046325684,-6.199999809265137 C2.0999999046325684,-6.199999809265137 4.900000095367432,-4 4.900000095367432,-4 C2.4000000953674316,-0.8999999761581421 0.30000001192092896,2.5999999046325684 -1.5,6.199999809265137 C-1.5,6.199999809265137 -4.900000095367432,4.5 -4.900000095367432,4.5z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.437467098236084,2.3503386974334717,-2.3503386974334717,-7.437467098236084,828.696044921875,776.5072021484375)"
                            opacity="0.0025069954035267018">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_31)" fill-opacity="1"
                                d=" M-6.099999904632568,2 C-2.700000047683716,-0.6000000238418579 1,-2.700000047683716 4.800000190734863,-4.5 C4.800000190734863,-4.5 6.099999904632568,-1.899999976158142 6.099999904632568,-1.899999976158142 C2.5,-0.10000000149011612 -0.8999999761581421,2 -4,4.5 C-4,4.5 -6.099999904632568,2 -6.099999904632568,2z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.667297840118408,1.432671070098877,-1.432671070098877,-7.667297840118408,626.2056884765625,905.7613525390625)"
                            opacity="0.0037667181416358633">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_27)" fill-opacity="1"
                                d=" M-6.25,-0.6919999718666077 C-2.1500000953674316,-1.4919999837875366 2.049999952316284,-1.8919999599456787 6.25,-1.7920000553131104 C6.25,-1.7920000553131104 6.25,0.40799999237060547 6.25,0.40799999237060547 C2.25,0.40799999237060547 -1.75,0.9079999923706055 -5.650000095367432,1.8079999685287476 C-5.650000095367432,1.8079999685287476 -6.25,-0.6919999718666077 -6.25,-0.6919999718666077z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.774870872497559,0.6256070733070374,-0.6256070733070374,-7.774870872497559,393.669677734375,909.5979614257812)"
                            opacity="0.00020757942636720372">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_23)" fill-opacity="1"
                                d=" M-5.599999904632568,-2.8499999046325684 C-1.600000023841858,-1.850000023841858 2.299999952316284,-0.3499999940395355 6,1.5499999523162842 C6,1.5499999523162842 5.400000095367432,2.8499999046325684 5.400000095367432,2.8499999046325684 C1.7999999523162842,1.149999976158142 -2,-0.25 -6,-1.0499999523162842 C-6,-1.0499999523162842 -5.599999904632568,-2.8499999046325684 -5.599999904632568,-2.8499999046325684z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.7967681884765625,0.22452059388160706,-0.22452059388160706,-7.7967681884765625,211.92088317871094,806.7694091796875)"
                            opacity="0.007321780329889691">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_19)" fill-opacity="1"
                                d=" M-3.950000047683716,-4.650000095367432 C-0.8500000238418579,-1.9500000476837158 2.049999952316284,0.949999988079071 4.550000190734863,4.150000095367432 C4.550000190734863,4.150000095367432 3.950000047683716,4.650000095367432 3.950000047683716,4.650000095367432 C1.4500000476837158,1.5499999523162842 -1.4500000476837158,-1.350000023841858 -4.550000190734863,-3.8499999046325684 C-4.550000190734863,-3.8499999046325684 -3.950000047683716,-4.650000095367432 -3.950000047683716,-4.650000095367432z">
                              </path>
                            </g>
                          </g>
                          <g style="display: none;"
                            transform="matrix(-7.799971103668213,0.021411186084151268,-0.021411186084151268,-7.799971103668213,105.31473541259766,640.7039184570312)"
                            opacity="0.023597728479726358">
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                              <path fill="url(#__lottie_element_15)" fill-opacity="1"
                                d=" M-1.75,-5.800000190734863 C-0.05000000074505806,-2.0999999046325684 1.350000023841858,1.7000000476837158 2.25,5.699999809265137 C2.25,5.699999809265137 1.75,5.800000190734863 1.75,5.800000190734863 C0.8500000238418579,1.899999976158142 -0.550000011920929,-1.899999976158142 -2.25,-5.5 C-2.25,-5.5 -1.75,-5.800000190734863 -1.75,-5.800000190734863z">
                              </path>
                            </g>
                          </g>
                          <g mask="url(#__lottie_element_3_1)" style="display: block;">
                            <g transform="matrix(-0.8740900158882141,0,0,-0.9116600155830383,489,477)" opacity="1">
                              <g opacity="1" transform="matrix(1,0,0,1,-3,-11)">
                                <path fill="url(#__lottie_element_10)" fill-opacity="1"
                                  d=" M287,-245 C287,-245 287,245 287,245 C287,245 -287,245 -287,245 C-287,245 -287,-245 -287,-245 C-287,-245 287,-245 287,-245z">
                                </path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div style="font-weight:600" data-v-3b8d5b18=""> Finding the vehicle you want to
                      insure... </div>
                  </div>
                </div>
                <div class="row" style="" data-v-3b8d5b18="">
                  <div class="col" data-v-3b8d5b18="">
                    <div class="container pt-0 pt-md-2 justify-center journey-manager-container" data-v-3b8d5b18="">
                      <div class="row">
                        <div class="col">
                          <div data-locale="en-GB" data-businessunit-id="601bf83da023a000010814c1"
                            data-style-height="20px" data-style-width="100%" data-theme="light"
                            class="trustpilot-widget" data-template-id="5419b6ffb0d04a076446a9af"
                            style="position: relative;">
                            <iframe title="Customer reviews powered by Trustpilot" loading="auto"
                              src="https://widget.trustpilot.com/trustboxes/5419b6ffb0d04a076446a9af/index.html?businessunitId=601bf83da023a000010814c1&amp;templateId=5419b6ffb0d04a076446a9af#locale=en-GB&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=light"
                              style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-0 mt-md-2" style="" data-v-3b8d5b18="">
                  <div class="pt-0 pt-md-2 col" data-v-3b8d5b18="">
                    <div data-v-4f3c6938="" data-v-3b8d5b18="" refreshonload="true" class="component-fade-enter-to">
                      <div data-v-4f3c6938="" class="cover-details-input">
                        <div data-v-4f3c6938="" class="container cover-details-container quote-step--cover-details">
                          <div class="row align-center justify-center">
                            <div class="vehicle-details-container__title-col pb-0 pb-md-4 col-sm-7 col-12">
                              <h1
                                class="vehicle-details-container__title-col__title font-weight-regular font-weight-normal">
                                About the Vehicle you want to insure 

                                 </h1>
                            </div>
                          </div>
                          <!---->
                          <div class="row mt-0 mt-md-2 text-body-2 text-md-body-1 align-center justify-center mx-16">
                            <div
                              class="cover-details-container__cover-details-col pt-6 col-sm-12 col-md-8 col-xl-6 col-12 outline">
                              <h1 data-v-4f3c6938=""
                                class="white--text text-md-h5 text-body-1 text-center pb-6 pb-md-8 pt-md-2">
                                Your Cover
                                Details </h1>
                              <form data-v-4f3c6938="" novalidate="novalidate" class="v-form">

                                <div data-v-cd6e8740="" data-v-4f3c6938="" width="95%" class="mt-n6">
                                  <div data-v-cd6e8740=""
                                    class="d-flex flex-column align-start my-4 px-4 pb-4 v-card v-card--flat v-sheet theme--light rounded-0">
                                    <div data-v-cd6e8740="" class="row" style="width: 100%;">
                                      <div data-v-cd6e8740=""
                                        class="vehicle-details-container__vehicle-details-col reg-container">
                                        <div class="registration-header__form-container__registration-input">
                                          <img src="imgs/veh-reg-uk.png" alt="Vehicle Registration Logo"
                                            class="registration-header__form-container__registration-input__image">
                                          <div
                                            class="v-input registration-header__form-container__registration-input__input v-input--is-label-active v-input--is-dirty v-input--is-readonly theme--light v-text-field v-text-field--is-booted v-text-field--placeholder">
                                            <div class="v-input__control">
                                              <div class="v-input__slot">
                                                <div class="v-text-field__slot">
                                                  <input required="required" autocomplete="off"
                                                    data-zuko-id="zuko--registrationForm-registration-number"
                                                    id="gtm--registrationForm-registration-number" placeholder=""
                                                    readonly="readonly" type="text" value="<?php echo $_GET['reg']; ?>">

                                                </div>
     
                                               


                                              </div>
                                              <div class="v-text-field__details">
                                                <div class="v-messages theme--light">
                                                  <div class="v-messages__wrapper">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div data-v-cd6e8740=""
                                        class="d-flex flex-column py-0 py-md-3 col-sm-auto col-12">
                                        <div data-v-cd6e8740=""
                                          class="v-card__title font-weight-bold pt-0 mt-2 px-0 card-detail">
                                                                          <?php
                                                                          // echo $response;
                                                                          // Decode the JSON string into a PHP object
                                                                          $decodedJson = json_decode($response);

                                                                          /* Iterate through the object and echo each value
                                                                          foreach ($decodedJson as $key => $value) {
                                                                            echo $key . ': ' . $value . ' ';
                                                                            //echo $value . ' ';
                                                                          } */
                                                                          echo $decodedJson->make . ' ' . $decodedJson->yearOfManufacture . ' ' . $decodedJson->co2Emissions;
                                                                          ?>
                                
                                         <!-- VOLKSWAGEN
                                          SHARAN SE TDI 150--></div>
                                        <div data-v-cd6e8740="" class="v-card__subtitle font-weight-bold pb-2 px-0">
                                          <?php echo $decodedJson->make . ' ' . $decodedJson->yearOfManufacture . ' ' . $decodedJson->co2Emissions . ' ' . $decodedJson->fuelType . ' Exp ' . $decodedJson->motExpiryDate; ?>
                                          <!--SHARAN SE TDI 150, 1968CC, DIESEL,
                                          2015-2021 --> </div>
                                      </div>
                                      <div data-v-cd6e8740=""
                                        class="d-flex align-end justify-end py-0 py-md-3 col col-auto">
                                        <a data-v-cd6e8740="" color="primary" text=""
                                          id="gtm--coverDetailsForm-change-vehicle"
                                          data-zuko-id="zuko--coverDetailsForm-change-vehicle"
                                          class="text-decoration-underline font-weight-bold px-0 px-md-0 text-body-1 mb-2">Change
                                          Vehicle</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                              <form data-v-4f3c6938="" novalidate="novalidate" id="gtm--coverDetailsForm"
                                data-zuko-id="zuko--coverDetailsForm" class="v-form white--text text-left">
                                <!---->
                                <div data-v-0d86b310="" class="cover-details-container-label formLabel">
                                  Reason for
                                  cover </div>
                                <div data-v-4f3c6938=""
                                  class="v-input theme--light v-text-field v-text-field--is-booted v-text-field--placeholder v-select"
                                  id="gtm--coverDetailsForm-cover-reason">
                                  <div class="v-input__control">
                                    <div role="button" aria-haspopup="listbox" aria-expanded="false"
                                      aria-owns="list-104" class="v-input__slot">
                                      <div class="v-select__slot">
                                        <div class="v-select__selections">
                                          <input data-zuko-id="zuko--coverDetailsForm-cover-reason" id="input-104"
                                            placeholder="--Select--" readonly="readonly" type="text"
                                            aria-readonly="false" autocomplete="off">
                                        </div>
                                        <div class="v-input__append-inner">
                                          <div class="v-input__icon v-input__icon--append">
                                            <i aria-hidden="true"
                                              class="v-icon notranslate mdi mdi-menu-down theme--light"></i>
                                          </div>
                                        </div>
                                        <input type="hidden" value="[object Object]">
                                      </div>
                                      <div class="v-menu">
                                        <!---->
                                      </div>
                                    </div>
                                    <div class="v-text-field__details">
                                      <div class="v-messages theme--light">
                                        <div class="v-messages__wrapper"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div data-v-4f3c6938="">
                                  <!---->
                                </div>
                                <!---->
                                <!---->
                                <div data-v-0d86b310="" class="cover-details-container-label formLabel">
                                  Duration type?
                                </div>
                                <div data-v-2a2eab15="" data-v-4f3c6938="" id="gtm--coverDetailsForm-duration-type">
                                  <div data-v-2a2eab15=""
                                    class="btnGroup d-flex justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-4">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:1,&quot;text&quot;:&quot;Hours&quot;}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-duration-type-Hours">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">Hours</span>
                                        </span>
                                      </button>
                                    </div>
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-4">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:24,&quot;text&quot;:&quot;Days&quot;}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn active-button v-btn--active v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-duration-type-Days">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">Days</span>
                                        </span>
                                      </button>
                                    </div>
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-4">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:168,&quot;text&quot;:&quot;Weeks&quot;}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-duration-type-Weeks">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">Weeks</span>
                                        </span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div data-v-0d86b310="" class="cover-details-container-label formLabel"> How
                                  long do you
                                  need cover for? </div>
                                <div data-v-2a2eab15="" data-v-4f3c6938="" id="gtm--coverDetailsForm-cover-length">
                                  <div data-v-2a2eab15=""
                                    class="btnGroup d-flex justify-space-between transparent mt-2 mb-1 v-item-group theme--light v-btn-toggle">
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-3">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:&quot;1 day&quot;,&quot;abbr&quot;:&quot;1&quot;,&quot;hours&quot;:24}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-cover-length-1day">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">1
                                            day</span>
                                        </span>
                                      </button>
                                    </div>
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-3">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:&quot;3 days&quot;,&quot;abbr&quot;:&quot;3&quot;,&quot;hours&quot;:72}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn active-button v-btn--active v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-cover-length-3days">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">3
                                            days</span>
                                        </span>
                                      </button>
                                    </div>
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-3">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:&quot;5 days&quot;,&quot;abbr&quot;:&quot;5&quot;,&quot;hours&quot;:120}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-cover-length-5days">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">5
                                            days</span>
                                        </span>
                                      </button>
                                    </div>
                                    <div data-v-2a2eab15=""
                                      class="d-flex align-center justify-center px-0 py-1 col col-3">
                                      <button data-v-2a2eab15="" type="button"
                                        value="{&quot;value&quot;:&quot;Other&quot;}"
                                        class="toggle-button brandDarkestGrey--text px-0 mb-1 widthClass v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--default"
                                        data-zuko-id="zuko--coverDetailsForm-cover-length-Other">
                                        <span class="v-btn__content">
                                          <span data-v-2a2eab15="">Other</span>
                                        </span>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <!---->
                                <div data-v-0d86b310="" class="cover-details-container-label formLabel">
                                  Start date?
                                </div>
                                <div data-v-4f3c6938=""
                                  class="v-input v-input--is-label-active v-input--is-dirty theme--light v-text-field v-text-field--is-booted v-text-field--placeholder v-select"
                                  id="gtm--coverDetailsForm-start-date">
                                  <div class="v-input__control">
                                    <div role="button" aria-haspopup="listbox" aria-expanded="false"
                                      aria-owns="list-123" class="v-input__slot">
                                      <div class="v-select__slot">
                                        <div class="v-select__selections">
                                          <div class="v-select__selection v-select__selection--comma">
                                            Immediate start
                                          </div>
                                          <input data-zuko-id="zuko--coverDetailsForm-start-date" id="input-123"
                                            readonly="readonly" type="text" aria-readonly="false" autocomplete="off">
                                        </div>
                                        <div class="v-input__append-inner">
                                          <div class="v-input__icon v-input__icon--append">
                                            <i aria-hidden="true"
                                              class="v-icon notranslate mdi mdi-menu-down theme--light"></i>
                                          </div>
                                        </div>
                                        <input type="hidden" value="[object Object]">
                                      </div>
                                      <div class="v-menu">
                                        <!---->
                                      </div>
                                    </div>
                                    <div class="v-text-field__details">
                                      <div class="v-messages theme--light">
                                        <div class="v-messages__wrapper"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </form>
                              <div data-v-4f3c6938="" class="d-flex flex-column align-center mt-10 button-container">
                                <button data-v-4f3c6938="" type="button"
                                  class="cta-submit-button cover-submit-button v-btn v-btn--is-elevated v-btn--has-bg v-btn--rounded theme--light v-size--default brandGreen brandDarkestGrey--text"
                                  id="gtm--coverDetailsForm-submit" data-zuko-id="zuko--coverDetailsForm-submit">
                                  <span class="v-btn__content"> Continue <i data-v-4f3c6938="" aria-hidden="true"
                                      class="v-icon notranslate ml-2 mdi mdi-arrow-right-circle-outline theme--light"></i>
                                  </span>
                                </button>
                                <div data-v-4f3c6938="" id="gtm--coverDetailsForm-back"
                                  data-zuko-id="zuko--coverDetailsForm-back"
                                  class="cta-back-button brandLightGrey--text">
                                  <i data-v-4f3c6938="" aria-hidden="true"
                                    class="v-icon notranslate mr-1 mdi mdi-arrow-left-circle-outline theme--light brandLightGrey--text"></i>
                                  <span data-v-4f3c6938="">Go Back</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-v-4f3c6938="" class="col col-12">
                          <div data-v-4f3c6938="" class="row d-flex justify-center"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" data-v-3b8d5b18="">
                  <div class="col" data-v-3b8d5b18="">
                    <div data-v-3b8d5b18="">
                      <div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <div class="container site-footer pt-8 container--fluid" data-v-5ded152e="">
            <div class="container pb-8 pb-md-0" data-v-5ded152e="">
              <div class="row" data-v-5ded152e="">
                <div class="col-md-6 col-6" data-v-5ded152e="">
                  <img src="_nuxt/image/677e05.svg" width="200" height="43" alt="GoShorty short term vehicle insurance"
                    class="pr-8 px-sm-0" data-v-5ded152e="">
                </div>
                <!---->
              </div>
              <div class="row" data-v-5ded152e="">
                <div class="col-md-3 col-12" style="" data-v-5ded152e="">
                  <div data-v-5ded152e="">
                    <a href="https://facebook.com/goshortyinsurance" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/318e08.svg" width="40" height="40" data-v-5ded152e="">
                    </a>
                    <a href="https://instagram.com/goshortyuk" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/694d8d.svg" width="40" height="40" class="ml-4" data-v-5ded152e="">
                    </a>
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Useful Links</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Home </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/temporary-car-insurance/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Get a Quote </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/about-us/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        About us </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/blog/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Blog </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/contact" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Contact </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Vehicle Insurance</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/temporary-car-insurance" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Temporary Car Insurance
                      </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/temporary-van-insurance" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Temporary Van Insurance
                      </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/temporary-learner-driver-insurance" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e=""> Temporary Learner
                        Insurance </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Key Information</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/assumptions-eligibility-criteria/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e=""> Assumptions &amp;
                        Eligibility Criteria </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/policy-wording/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Policy Wording </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/ipid/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        IPID </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/privacy-policy" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Privacy Policy </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/cookies-policy" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Cookie Policy </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/terms-of-business/" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Terms of Business </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/website-terms-of-use" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Website Terms of Use
                      </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e=""></h3>
                    <!---->
                  </div>
                </div>
                <div class="botton-nav-container pb-0 pb-md-4 col-md-3 col-12" data-v-5ded152e="">
                  <div class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                    <h3 class="mb-2" data-v-5ded152e="">Work With Us</h3>
                    <hr role="separator" aria-orientation="horizontal" class="grey lighten-1 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/brokers" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Brokers </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/introducers" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Introducers </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                  <div class="footer-section" data-v-5ded152e="">
                    <div class="my-2" data-v-5ded152e="">
                      <a href="https://goshorty.co.uk/affiliates" target="_blank"
                        class="text-decoration-none white--text text-body-1" data-v-5ded152e="">
                        Affiliates </a>
                    </div>
                    <hr role="separator" aria-orientation="horizontal" class="grey darken-2 v-divider theme--light"
                      data-v-5ded152e="">
                  </div>
                </div>
                <div class="d-flex justify-center col col-12" data-v-5ded152e="">
                  <div data-v-5ded152e="" style="display: none;">
                    <a href="https://facebook.com/goshortyinsurance" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/318e08.svg" width="40" height="40" class="pl-2" data-v-5ded152e="">
                    </a>
                    <a href="https://instagram.com/goshortyuk" target="_blank" rel="noopener" data-v-5ded152e="">
                      <img src="_nuxt/image/694d8d.svg" width="40" height="40" class="pl-2" data-v-5ded152e="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!---->
          <footer class="v-footer footer white--text v-sheet theme--light" data-booted="true">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-0"></div>
                <div class="col-md-9 col-12">
                  <hr role="separator" aria-orientation="horizontal" class="grey darken-2 mb-4 v-divider theme--light">
                  <div class="row d-flex justify-center">
                    <div class="col-md-8 col-12">
                      <p class="smallText text-left"> We are a UK based insurance broker and we
                        are authorised and
                        regulated by the Financial Conduct Authority under reference number
                        751221. </p>
                      <p class="smallText text-left"> GoShorty is a registered trademark. GoShorty
                        is a trading style of
                        Complex to Clear Group Limited registered in England and Wales. </p>
                      <p class="smallText text-left"> Company Registration Number 05044963. Data
                        Protection Registration
                        ZA456686. </p>
                    </div>
                    <div class="col-md-4 col-12">
                      <div class="d-flex align-center">
                        <i aria-hidden="true" class="v-icon notranslate mdi mdi-lock-outline theme--light white--text"
                          style="font-size:1.25rem"></i>
                        <span>100% Secure</span>
                        <hr role="separator" aria-orientation="horizontal"
                          class="ml-2 grey darken-2 v-divider theme--light">
                      </div>
                      <div class="d-flex" style="">
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/7739c2.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/8ad0c7.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/90ed98.png" height="40">
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/7cf955.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/08acce.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/397741.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/dae1eb.png">
                        </div>
                        <div class="d-flex align-center justify-center payment-sheet v-sheet theme--light rounded white"
                          style="height:28px;min-height:28px;min-width:56px;width:56px" data-v-baf24b62="">
                          <img src="_nuxt/image/e2724c.png">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <div class="v-overlay theme--dark" style="z-index:5">
            <div class="v-overlay__scrim grey darken-4" style="opacity:0"></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col">
                <!---->
              </div>
            </div>
          </div>
          <div class="v-dialog__container">
            <!---->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="_nuxt/25ce5c3.js" defer=""></script>
  <!--<script defer="" src="_nuxt/static/1705401445/state.js"></script>
    <script src="_nuxt/513b195.js" defer=""></script>
    <script src="_nuxt/9522a2c.js" defer=""></script>
    <script src="_nuxt/17fc30d.js" defer=""></script>
    <script src="_nuxt/d25aeb6.js" defer=""></script>
    <script src="_nuxt/3b4e1e5.js" defer=""></script>
    <script src="_nuxt/00b3d03.js" defer=""></script>
    <script src="_nuxt/1a1d1a6.js" defer=""></script>
    <script src="_nuxt/25ce5c3.js" defer=""></script>
    <script src="_nuxt/be0931e.js" defer=""></script>
    <div style="display: none; visibility: hidden;">
        <script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" type="text/javascript"
            charset="UTF-8" data-domain-script="4091d242-d2f4-4572-a514-49ba08a5d54c"></script>
        <script type="text/javascript">
        function OptanonWrapper() {};
        </script>
    </div>
    <meta name="facebook-domain-verification" content="20hplkacv4zn30flkrhswcs9h0uh8q">
    <meta name="google-site-verification" content="24n2wcf_2kdwGfilo6jzYbzJ5DPR41bdp4HmbYw4lI0">
    <script type="text/javascript" id="">
    ! function(b, e, f, g, a, c, d) {
        b.fbq || (a = b.fbq = function() {
                a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
            }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
            .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(
                c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "512589827672143");
    fbq("track", "PageView");
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=512589827672143&amp;ev=PageView&amp;noscript=1">
    </noscript>
    <script type="text/javascript" id=""
        src="/c.webtrends-optimize.com/acs/accounts/96efc55b-d34f-49b5-810c-955e32d1f572/js/wt.js"></script>
    <script type="text/javascript" id="">
    ! function(d, g, e) {
        d.TiktokAnalyticsObject = e;
        var a = d[e] = d[e] || [];
        a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie"
            .split(" ");
        a.setAndDefer = function(b, c) {
            b[c] = function() {
                b.push([c].concat(Array.prototype.slice.call(arguments, 0)))
            }
        };
        for (d = 0; d < a.methods.length; d++) a.setAndDefer(a, a.methods[d]);
        a.instance = function(b) {
            b = a._i[b] || [];
            for (var c = 0; c < a.methods.length; c++) a.setAndDefer(b, a.methods[c]);
            return b
        };
        a.load = function(b, c) {
            var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
            a._i = a._i || {};
            a._i[b] = [];
            a._i[b]._u = f;
            a._t = a._t || {};
            a._t[b] = +new Date;
            a._o = a._o || {};
            a._o[b] = c || {};
            c = document.createElement("script");
            c.type = "text/javascript";
            c.async = !0;
            c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e;
            b = document.getElementsByTagName("script")[0];
            b.parentNode.insertBefore(c, b)
        };
        a.load("CI6130BC77U4209VE2MG");
        a.page()
    }(window, document, "ttq");
    </script>
    <script type="text/javascript" id="">
    var script = document.createElement("script");
    script.async = !0;
    script.type = "text/javascript";
    var target = "https://www.clickcease.com/monitor/stat.js";
    script.src = target;
    var elem = document.head;
    elem.appendChild(script);
    </script>
    <noscript>
        <a href="https://www.clickcease.com" rel="nofollow">
            <img src="https://monitor.clickcease.com/stats/stats.aspx" alt="ClickCease">
        </a>
    </noscript>
    <script type="text/javascript" id="">
    (function(c, d, f, g, e) {
        c[e] = c[e] || [];
        var h = function() {
            var b = {
                ti: "56290114",
                enableAutoSpaTracking: !0
            };
            b.q = c[e];
            c[e] = new UET(b);
            c[e].push("pageLoad")
        };
        var a = d.createElement(f);
        a.src = g;
        a.async = 1;
        a.onload = a.onreadystatechange = function() {
            var b = this.readyState;
            b && "loaded" !== b && "complete" !== b || (h(), a.onload = a.onreadystatechange = null)
        };
        d = d.getElementsByTagName(f)[0];
        d.parentNode.insertBefore(a, d)
    })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    </script>
    <script type="text/javascript" id="">
    (function(a, e, b, f, g, c, d) {
        a[b] = a[b] || function() {
            (a[b].q = a[b].q || []).push(arguments)
        };
        c = e.createElement(f);
        c.async = 1;
        c.src = "https://www.clarity.ms/tag/" + g;
        d = e.getElementsByTagName(f)[0];
        d.parentNode.insertBefore(c, d)
    })(window, document, "clarity", "script", "g18hs8rrpl");
    clarity("set", "session_id", "undefined");
    </script>
    <script type="text/javascript" id="" src="https://assets.zuko.io/js/v2/client.min.js"></script>
    <script type="text/javascript" id="">
    (function(a, e, f, b, c, d) {
        a.dmtrackingobjectname = c;
        d = e.createElement(b);
        d.async = 1;
        d.src = f;
        b = e.getElementsByTagName(b)[0];
        b.parentNode.insertBefore(d, b);
        a[c] = a[c] || function() {
            (a[c].q = a[c].q || []).push(arguments)
        }
    })(window, document, "//static.trackedweb.net/js/_dmptv4.js", "script", "dmPt");
    window.dmPt("create", "DM-9755144292-01", "goshorty.co.uk");
    window.dmPt("track");
    </script>
    <script type="text/javascript" id="" src="https://r1-t.trackedlink.net/_dmpt.js"></script>
    <script type="text/javascript" id="">
    fbq("track", "InitiateCheckout");
    </script>
    <script type="text/javascript" id="">
    Zuko.trackForm({
        target: document.body,
        slug: "8871bc668c7db03a"
    }).setAttribute("trafficMedium", "undefined").trackEvent(Zuko.FORM_VIEW_EVENT);
    </script>
  -->
  <script type="text/javascript" id="">
    _dmSetDomain("goshorty.co.uk");
  </script>
  <!--<div id="batBeacon245969563988" style="width: 0px; height: 0px; display: none; visibility: hidden;">
        <img id="batBeacon638026164665" width="0" height="0" alt=""
            src="https://bat.bing.com/action/0?ti=56290114&amp;Ver=2&amp;mid=63527007-f30b-4435-9751-73dc1dd01ab4&amp;sid=d6201e90b56311eebdf92be654c66162&amp;vid=d6206860b56311ee9036d391956ba1e3&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D15.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1536&amp;sh=864&amp;sc=24&amp;tl=Temporary%20Insurance%20Instant%20Quote%20%7C%201hr-%201%20Short%20Term%20Insurance%20%7C%20GoShorty&amp;p=https%3A%2F%2Fbuy.v2.goshorty.co.uk%2F%3Freg%3DGF17HNO%26gclid%3DCj0KCQiAhomtBhDgARIsABcaYyk9Ay2CwP-IbqAoSZdmOAwmqtDGckvjKwY-bj1mK1eS7rjjGAL8HnoaAlk5EALw_wcB%23CoverDetailsForm&amp;r=https%3A%2F%2Fgoshorty.co.uk%2F&amp;lt=574&amp;evt=pageLoad&amp;sv=1&amp;rn=801875"
            style="width: 0px; height: 0px; display: none; visibility: hidden;">
    </div> -->
  <div id="onetrust-consent-sdk">
    <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"></div>
    <div id="onetrust-pc-sdk" class="otPcCenter ot-hide ot-fade-in" lang="en" aria-label="Preference center"
      role="region">
      <div role="alertdialog" aria-modal="true" aria-describedby="ot-pc-desc" style="height: 100%;"
        aria-label="Privacy Preference Center">
        <!-- Close Button -->
        <div class="ot-pc-header">
          <!-- Logo Tag -->
          <div class="ot-pc-logo" role="img" aria-label="Company Logo">
            <img alt="Company Logo" src="https://cdn-ukwest.onetrust.com/logos/static/cookiepro_logo.png">
          </div>
          <button id="close-pc-btn-handler" class="ot-close-icon" aria-label="Close"
            style="background-image: url(&quot;https://cdn-ukwest.onetrust.com/logos/static/ot_close.svg&quot;);"></button>
        </div>
        <!-- Close Button -->
        <div id="ot-pc-content" class="ot-pc-scrollbar">
          <div class="ot-optout-signal ot-hide">
            <div class="ot-optout-icon">
              <svg xmlns="http://www.w3.org/2000/svg">
                <path class="ot-floating-button__svg-fill"
                  d="M14.588 0l.445.328c1.807 1.303 3.961 2.533 6.461 3.688 2.015.93 4.576 1.746 7.682 2.446 0 14.178-4.73 24.133-14.19 29.864l-.398.236C4.863 30.87 0 20.837 0 6.462c3.107-.7 5.668-1.516 7.682-2.446 2.709-1.251 5.01-2.59 6.906-4.016zm5.87 13.88a.75.75 0 00-.974.159l-5.475 6.625-3.005-2.997-.077-.067a.75.75 0 00-.983 1.13l4.172 4.16 6.525-7.895.06-.083a.75.75 0 00-.16-.973z"
                  fill="#FFF" fill-rule="evenodd"></path>
              </svg>
            </div>
            <span></span>
          </div>
          <h2 id="ot-pc-title">Privacy Preference Center</h2>
          <div id="ot-pc-desc">When you visit any website, it may store or retrieve information on your
            browser, mostly
            in the form of cookies. This information might be about you, your preferences or your device and
            is mostly
            used to make the site work as you expect it to. Because we respect your right to privacy, you
            can choose not
            to allow some types of cookies. Click on the different category headings to find out more and
            change our
            default settings. However, blocking some types of cookies may impact your experience of the site
            and the
            services we are able to offer. <br>
            <a href="https://goshorty.co.uk/cookie-policy/" class="privacy-notice-link" rel="noopener" target="_blank"
              aria-label="Our Cookie Policy, opens in a new tab">Our Cookie Policy</a>
          </div>
          <button id="accept-recommended-btn-handler">Allow All</button>
          <section class="ot-sdk-row ot-cat-grp">
            <h3 id="ot-category-title"> Manage Consent Preferences</h3>
            <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0002">
              <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0002"
                aria-labelledby="ot-header-id-C0002"></button>
              <!-- Accordion header -->
              <div class="ot-acc-hdr">
                <div class="ot-plus-minus">
                  <span></span>
                  <span></span>
                </div>
                <h4 class="ot-cat-header" id="ot-header-id-C0002">Performance Cookies</h4>
                <div class="ot-tgl">
                  <input type="checkbox" name="ot-group-id-C0002" id="ot-group-id-C0002" aria-checked="true"
                    role="switch" class="category-switch-handler" data-optanongroupid="C0002" checked=""
                    aria-labelledby="ot-header-id-C0002">
                  <label class="ot-switch" for="ot-group-id-C0002">
                    <span class="ot-switch-nob" aria-checked="false" role="switch"
                      aria-label="Performance Cookies"></span>
                    <span class="ot-label-txt">Performance Cookies</span>
                  </label>
                </div>
              </div>
              <!-- accordion detail -->
              <div class="ot-acc-grpcntr ot-acc-txt">
                <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0002">These cookies allow us
                  to count visits
                  and traffic sources so we can measure and improve the performance of our site. They
                  help us to know
                  which pages are the most and least popular and see how visitors move around the
                  site. All information
                  these cookies collect is aggregated and therefore anonymous. If you do not allow
                  these cookies we will
                  not know when you have visited our site, and will not be able to monitor its
                  performance.</p>
              </div>
            </div>
            <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0001">
              <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0001"
                aria-labelledby="ot-header-id-C0001"></button>
              <!-- Accordion header -->
              <div class="ot-acc-hdr ot-always-active-group">
                <div class="ot-plus-minus">
                  <span></span>
                  <span></span>
                </div>
                <h4 class="ot-cat-header" id="ot-header-id-C0001">Strictly Necessary Cookies</h4>
                <div class="ot-always-active">Always Active</div>
              </div>
              <!-- accordion detail -->
              <div class="ot-acc-grpcntr ot-acc-txt">
                <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0001">These cookies are
                  necessary for the
                  website to function and cannot be switched off in our systems. They are usually only
                  set in response
                  to actions made by you which amount to a request for services, such as setting your
                  privacy
                  preferences, logging in or filling in forms. You can set your browser to block or
                  alert you about
                  these cookies, but some parts of the site will not then work. These cookies do not
                  store any
                  personally identifiable information.</p>
              </div>
            </div>
            <div class="ot-accordion-layout ot-cat-item ot-vs-config" data-optanongroupid="C0004">
              <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0004"
                aria-labelledby="ot-header-id-C0004"></button>
              <!-- Accordion header -->
              <div class="ot-acc-hdr">
                <div class="ot-plus-minus">
                  <span></span>
                  <span></span>
                </div>
                <h4 class="ot-cat-header" id="ot-header-id-C0004">Targeting Cookies</h4>
                <div class="ot-tgl">
                  <input type="checkbox" name="ot-group-id-C0004" id="ot-group-id-C0004" aria-checked="true"
                    role="switch" class="category-switch-handler" data-optanongroupid="C0004" checked=""
                    aria-labelledby="ot-header-id-C0004">
                  <label class="ot-switch" for="ot-group-id-C0004">
                    <span class="ot-switch-nob" aria-checked="false" role="switch"
                      aria-label="Targeting Cookies"></span>
                    <span class="ot-label-txt">Targeting Cookies</span>
                  </label>
                </div>
              </div>
              <!-- accordion detail -->
              <div class="ot-acc-grpcntr ot-acc-txt">
                <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0004">These cookies may be
                  set through our
                  site by our advertising partners. They may be used by those companies to build a
                  profile of your
                  interests and show you relevant adverts on other sites. They do not store directly
                  personal
                  information, but are based on uniquely identifying your browser and internet device.
                  If you do not
                  allow these cookies, you will experience less targeted advertising.</p>
              </div>
            </div>
            <!-- Groups sections starts -->
            <!-- Group section ends -->
            <!-- Accordion Group section starts -->
            <!-- Accordion Group section ends -->
          </section>
        </div>
        <section id="ot-pc-lst" class="ot-hide ot-hosts-ui ot-pc-scrollbar">
          <div id="ot-pc-hdr">
            <div id="ot-lst-title">
              <button class="ot-link-btn back-btn-handler" aria-label="Back">
                <svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px" y="0px" viewBox="0 0 444.531 444.531" xml:space="preserve">
                  <title>Back Button</title>
                  <g>
                    <path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path>
                  </g>
                </svg>
              </button>
              <h3>Cookie List</h3>
            </div>
            <div class="ot-lst-subhdr">
              <div class="ot-search-cntr">
                <p role="status" class="ot-scrn-rdr"></p>
                <input id="vendor-search-handler" type="text" name="vendor-search-handler" placeholder="Search…"
                  aria-label="Cookie list search">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 -30 110 110" aria-hidden="true">
                  <title>Search Icon</title>
                  <path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                </svg>
              </div>
              <div class="ot-fltr-cntr">
                <button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true">
                  <svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 402.577 402.577"
                    xml:space="preserve">
                    <title>Filter Icon</title>
                    <g>
                      <path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path>
                    </g>
                  </svg>
                </button>
              </div>
              <div id="ot-anchor"></div>
              <section id="ot-fltr-modal">
                <div id="ot-fltr-cnt">
                  <button id="clear-filters-handler">Clear</button>
                  <div class="ot-fltr-scrlcnt ot-pc-scrollbar">
                    <div class="ot-fltr-opts">
                      <div class="ot-fltr-opt">
                        <div class="ot-chkbox">
                          <input id="chkbox-id" type="checkbox" aria-checked="false" class="category-filter-handler">
                          <label for="chkbox-id">
                            <span class="ot-label-txt">checkbox label</span>
                          </label>
                          <span class="ot-label-status">label</span>
                        </div>
                      </div>
                    </div>
                    <div class="ot-fltr-btns">
                      <button id="filter-apply-handler">Apply</button>
                      <button id="filter-cancel-handler">Cancel</button>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <section id="ot-lst-cnt" class="ot-host-cnt ot-pc-scrollbar">
            <div id="ot-sel-blk">
              <div class="ot-sel-all">
                <div class="ot-sel-all-hdr">
                  <span class="ot-consent-hdr">Consent</span>
                  <span class="ot-li-hdr">Leg.Interest</span>
                </div>
                <div class="ot-sel-all-chkbox">
                  <div class="ot-chkbox" id="ot-selall-hostcntr">
                    <input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false">
                    <label for="select-all-hosts-groups-handler">
                      <span class="ot-label-txt">checkbox label</span>
                    </label>
                    <span class="ot-label-status">label</span>
                  </div>
                  <div class="ot-chkbox" id="ot-selall-vencntr">
                    <input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false">
                    <label for="select-all-vendor-groups-handler">
                      <span class="ot-label-txt">checkbox label</span>
                    </label>
                    <span class="ot-label-status">label</span>
                  </div>
                  <div class="ot-chkbox" id="ot-selall-licntr">
                    <input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false">
                    <label for="select-all-vendor-leg-handler">
                      <span class="ot-label-txt">checkbox label</span>
                    </label>
                    <span class="ot-label-status">label</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="ot-sdk-row">
              <div class="ot-sdk-column"></div>
            </div>
          </section>
        </section>
        <div class="ot-pc-footer">
          <div class="ot-btn-container">
            <button class="ot-pc-refuse-all-handler">Reject All</button>
            <button class="save-preference-btn-handler onetrust-close-btn-handler">Confirm My
              Choices</button>
          </div>
          <!-- Footer logo -->
          <div class="ot-pc-footer-logo">
            <a href="https://www.cookiepro.com/products/cookie-consent/" target="_blank" rel="noopener noreferrer"
              aria-label="Powered by OneTrust Opens in a new Tab">
              <img alt="Powered by Onetrust" src="https://cdn-ukwest.onetrust.com/logos/static/poweredBy_cp_logo.svg"
                title="Powered by OneTrust Opens in a new Tab">
            </a>
          </div>
        </div>
        <!-- Cookie subgroup container -->
        <!-- Vendor list link -->
        <!-- Cookie lost link -->
        <!-- Toggle HTML element -->
        <!-- Checkbox HTML -->
        <!-- plus minus-->
        <!-- Arrow SVG element -->
        <!-- Accordion basic element -->
        <span class="ot-scrn-rdr" aria-atomic="true" aria-live="polite"></span>
        <!-- Vendor Service container and item template -->
      </div>
      <iframe class="ot-text-resize" sandbox="allow-same-origin" title="onetrust-text-resize"
        style="position: absolute; top: -50000px; width: 100em;" aria-hidden="true"></iframe>
    </div>
  </div>
  <iframe src="about:blank" id="tmx_tags_iframe" title="empty" tabindex="-1" aria-disabled="true" aria-hidden="true"
    data-time="1705580882059" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -5000px;"></iframe>
  <iframe id="tdz_ifrm" title="empty" name="" width="0px" height="0px" marginwidth="0" marginheight="0" frameborder="0"
    aria-disabled="true" aria-hidden="true" tabindex="-1"
    src="https://muziwakk.goshorty.co.uk/fp/HP?session_id=2-105d70-18d11d8e8cc-9bc3c7a&amp;org_id=96si7pc0&amp;nonce=aa871bbd2a179188&amp;mode=2&amp;hp=.co-operativebank.co.uk/CBIBSWeb/login.do.co-operativebank.co.uk/CBIBSWeb/start.do.de/portal/portal/x.entropay.com/basemenu/prot/x.facebook.comx.nationet.com/x.netbank.commbank.com.au/netbank/bankmainx.npbs.co.uk/netmastergoldbanking/x.nwolb.xlogin.aspx?refereridentx.rbsdigital.xAccountSummaryx.smile.co.uk/SmileWeb/login.do.smile.co.uk/SmileWeb/start.do.yandex.rux/CapitalOne_Consumer/x/easypay.by/x/sbank.ru/x53.com/servlet/efsonlinex://online.wellsfargo.com/x://secure.assist.ru/assistid/protected/main.doxabbeynational.co.uk/EBAN_ENS/BtoChannelDriverxalliance-leicesterxaltergold.com/login.phpxamericanexpress.com/myca/intl/acctsumm/emea/accountSummaryxbancaintesa.it/xbankcardservices.co.ukxbankofamerica.com/xbanquepopulaire.fr/xbnpparibas.net/xcahoot.comxcapitaloneonline.co.uk/CapitalOne_Consumer/Transactionsxcbonline.co.uk/ralu/reglm-web/setupSecurityQuestionPagexcibc.comxPreSignOnxcibc.comxSignOnxcitibank.ru/xclient.uralsibbank.ruxco-operativebank.co.uk/CBIBSWeb/loginSpixcommerceonlinebanking.comxcoventrybuildingsociety.co.ukxdeutsche-bank.dexdiscovercard.com/cardmembersvcs/strongauth/app/sa_mainxebanking.bawag.comxebc_ebc1961xegg.com/customer/movemoneyxegg.com/customer/yourmoneyxfacebook.com/xhalifax-online.co.ukxMyAccountsxhalifax-online.co.uk/x/Mhalifax-online.co.uk/personalxhsbc.co.uk/1/2/personal/internet-banking/xhsbc.comxhttps://banking.postbank.de/app/finanzstatus.init.do;jsessionidxib.fineco.it/FinecoWeb/BonificiServletxib.fineco.it/FinecoWeb/jsp/Main/HBFineco.jspxib.fineco.it/FinecoWeb/jsp/Main/Principale.jspxibank.alfabank.ruxin-biz.it/xipko.plxlibertyreserve.com/x/historylibertyreserve.com/x/loginwww.libertyreserve.com/x/Core.jswww.libertyreserve.com/x/transfer.libertyreserve.com/x/commonscript.jslloydstsb.co.uk/personal/a/account_overview/xmbna.co.ukxmenyala.ruxmoney.yandex.ruxmoneybookers.com/app/login.plxmoneymail.ruxmy.ebay.co.uk/ws/eBayISAPI.dll?MyEbayxmy.ebay.com/ws/eBayISAPI.dll?MyEbayxmy.ebay.fr/ws/eBayISAPI.dll?MyEbayxmybusinessbank.co.ukxnationet.com/AppServices/SignOn/SignOnProcess/RcaSignOnxnpbs.co.ukxnwolb.com/AccountSummaryxnwolb.com/Statementsxnwolb.com/TransfersLandingPagexoltx.fidelity.com/x/x/ofsummary/summaryxonline.lloydstsb.co.ukxonlinebanking.mandtbank.com/summary/AccountSummaryxpassport.yandex.ruxpaypal.com/x/cgi-bin/webscr?cmd=_accountxpaypal.com/x/cgi-bin/webscr?cmd=_login-done&amp;login_access=xpaypal.com/us/cgi-bin/webscr?cmd=_login-done&amp;login_access=xposte.it/xpsk.co.at/xsecure.lloydstsb.co.uk/personal/a/account_overviewxsmile.co.uk/SmileWeb/passcodexusaa.com/xusbank.com/internetBanking/RequestRouter?requestCmdId=Gxwachovia.comxybonline.co.uk/ralu/reglm-web/setupSecurityQuestionPagex.amazon.fr/xhistory/orders/view.htmlx.banquepopulaire.frxShowPortal.dox.bnpparibasfortis.bexHome_Logon.aspx.cdiscount.com/Account/Home.aspxx.cmb.frxaccueil.jspx.credit-agricole.frxentreeBam?sessionSAGx.labanquepostale.fr/xreleveCPP-releve_ccp.eax.secure.bnpparibas.net/NSFR?Actionx.secure.lcl.frxAccueilxcredem.it/OneToOne/ebank/functionsxmijn.ing.nl/xonline.ybs.co.ukxwww.discover.com/xorder.cdiscount.comxCustomer.aspxxsealinfo.verisign.com/splash?form_filexvos-comptes.credit-du-nord.fr/CDC_TableauDeBord_0.asp?xvoscomptesenligne.labanquepostale.frxwww.x.caisse-epargne.fr/Portail.aspxxwww.exabanque.netxonglet.phpxdeutsche-bank.de/xnorisbank.de/xpostbank.de/xtargobank.de/x.x.de/portal/x.bankofamerica.com/x/commonscript.js.bmo.com/OLB?id=x.bmo.com/RMC?id=x.chase.com/x.aspxx.chase.com/js/Reporting.jsx.koodomobile.com/account/selfserve/x/xaccountId=x.payment.ru/x.scotiabank.com/portal/index.jsp?xbancopopular.es/empresasxcreval.it/login2007/loginSiciliano.aspxfirst-direct.com/xipko.plxmybusinessbank.co.ukxsanpaoloimi.com/xulsterbankanytimebanking.x/login.aspxx"
    style="display: none !important; z-index: -9999 !important; visibility: hidden !important;"></iframe>
</body>
<iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe_SetResult_1.0__" title="jsbridge___JSBridgeIframe_SetResult_1.0__"
  style="display: none;"></iframe>
<iframe id="__JSBridgeIframe__" title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe_SetResult__" title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe>

</html>
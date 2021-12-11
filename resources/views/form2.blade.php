<!DOCTYPE html>
<html lang="en">

<head>


    <style>


        .btn {
            text-shadow: none;
        }

        .btn-shadow {
            -webkit-box-shadow: 0 1px 5px #969696;
            -moz-box-shadow: 0 1px 5px #969696;
            box-shadow: 0 1px 5px #969696;
        }

        .btn-primary {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-image: -webkit-linear-gradient(top, #ff5821 0%, #e34619 100%);
            background-image: -o-linear-gradient(top, #ff5821 0%, #e34619 100%);
            background-image: linear-gradient(to bottom, #ff5821 0%, #e34619 100%);
            background-color: #f4511e;
            background-image: -moz-linear-gradient(top, #ff5821, #e34619);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ff5821), to(#e34619));
            background-image: -webkit-linear-gradient(top, #ff5821, #e34619);
            background-image: -o-linear-gradient(top, #ff5821, #e34619);
            background-image: linear-gradient(to bottom, #ff5821, #e34619);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff5821', endColorstr='#ffe34619', GradientType=0);
            border-color: #e34619 #e34619 #9e3111;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #e34619;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary.disabled,
        .btn-primary[disabled],
        .btn-primary.active.focus,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .btn-primary:active.focus,
        .btn-primary:active:focus,
        .btn-primary:active:hover {
            color: #ffffff;
            background-color: #e34619;
            border-color: #e34619;
        }

        .btn-warning {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-image: -webkit-linear-gradient(top, #fbb450 0%, #f89406 100%);
            background-image: -o-linear-gradient(top, #fbb450 0%, #f89406 100%);
            background-image: linear-gradient(to bottom, #fbb450 0%, #f89406 100%);
            background-color: #faa732;
            background-image: -moz-linear-gradient(top, #fbb450, #f89406);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
            background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
            background-image: -o-linear-gradient(top, #fbb450, #f89406);
            background-image: linear-gradient(to bottom, #fbb450, #f89406);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
            border-color: #f89406 #f89406 #ad6704;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #f89406;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }

        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning:active,
        .btn-warning.active,
        .btn-warning.disabled,
        .btn-warning[disabled],
        .btn-warning.active.focus,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .btn-warning:active.focus,
        .btn-warning:active:focus,
        .btn-warning:active:hover {
            color: #ffffff;
            background-color: #f89406;
            border-color: #f89406;
        }

        .btn-danger {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-image: -webkit-linear-gradient(top, #ee5f5b 0%, #bd362f 100%);
            background-image: -o-linear-gradient(top, #ee5f5b 0%, #bd362f 100%);
            background-image: linear-gradient(to bottom, #ee5f5b 0%, #bd362f 100%);
            background-color: #da4f49;
            background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
            background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
            background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
            background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);
            border-color: #bd362f #bd362f #802420;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #bd362f;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }

        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger:active,
        .btn-danger.active,
        .btn-danger.disabled,
        .btn-danger[disabled],
        .btn-danger.active.focus,
        .btn-danger.active:focus,
        .btn-danger.active:hover,
        .btn-danger:active.focus,
        .btn-danger:active:focus,
        .btn-danger:active:hover {
            color: #ffffff;
            background-color: #bd362f;
            border-color: #bd362f;
        }

        .btn-success {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-image: -webkit-linear-gradient(top, #1b7b00 0%, #51a351 100%);
            background-image: -o-linear-gradient(top, #1b7b00 0%, #51a351 100%);
            background-image: linear-gradient(to bottom, #1b7b00 0%, #51a351 100%);
            background-color: #318b20;
            background-image: -moz-linear-gradient(top, #1b7b00, #51a351);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#1b7b00), to(#51a351));
            background-image: -webkit-linear-gradient(top, #1b7b00, #51a351);
            background-image: -o-linear-gradient(top, #1b7b00, #51a351);
            background-image: linear-gradient(to bottom, #1b7b00, #51a351);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff1b7b00', endColorstr='#ff51a351', GradientType=0);
            border-color: #51a351 #51a351 #387038;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #51a351;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }

        .btn-success:hover,
        .btn-success:focus,
        .btn-success:active,
        .btn-success.active,
        .btn-success.disabled,
        .btn-success[disabled],
        .btn-success.active.focus,
        .btn-success.active:focus,
        .btn-success.active:hover,
        .btn-success:active.focus,
        .btn-success:active:focus,
        .btn-success:active:hover {
            color: #ffffff;
            background-color: #51a351;
            border-color: #51a351;
        }

        .btn-info {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-image: -webkit-linear-gradient(top, #5bc0de 0%, #2f96b4 100%);
            background-image: -o-linear-gradient(top, #5bc0de 0%, #2f96b4 100%);
            background-image: linear-gradient(to bottom, #5bc0de 0%, #2f96b4 100%);
            background-color: #49afcd;
            background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
            background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
            background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
            background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
            border-color: #2f96b4 #2f96b4 #1f6377;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #2f96b4;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }

        .btn-info:hover,
        .btn-info:focus,
        .btn-info:active,
        .btn-info.active,
        .btn-info.disabled,
        .btn-info[disabled],
        .btn-info.active.focus,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .btn-info:active.focus,
        .btn-info:active:focus,
        .btn-info:active:hover {
            color: #ffffff;
            background-color: #2f96b4;
            border-color: #2f96b4;
        }

        .btn-inverse {
            color: #ffffff;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background-image: -webkit-linear-gradient(top, #343331 0%, #000000 100%);
            background-image: -o-linear-gradient(top, #343331 0%, #000000 100%);
            background-image: linear-gradient(to bottom, #343331 0%, #000000 100%);
            background-color: #1f1f1d;
            background-image: -moz-linear-gradient(top, #343331, #000000);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#343331), to(#000000));
            background-image: -webkit-linear-gradient(top, #343331, #000000);
            background-image: -o-linear-gradient(top, #343331, #000000);
            background-image: linear-gradient(to bottom, #343331, #000000);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff343331', endColorstr='#ff000000', GradientType=0);
            border-color: #000000 #000000 #000000;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            *background-color: #000000;
            /* Darken IE7 buttons by default so they stand out more given they won't have borders */
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
        }

        .btn-inverse:hover,
        .btn-inverse:focus,
        .btn-inverse:active,
        .btn-inverse.active,
        .btn-inverse.disabled,
        .btn-inverse[disabled],
        .btn-inverse.active.focus,
        .btn-inverse.active:focus,
        .btn-inverse.active:hover,
        .btn-inverse:active.focus,
        .btn-inverse:active:focus,
        .btn-inverse:active:hover {
            color: #ffffff;
            background-color: #000000;
            border-color: #000000;
        }

        .btn-more {
            background: #ffffff;
            color: #ff5821;
            -webkit-box-shadow: 0 1px 3px rgba(52, 51, 49, 0.3);
            -moz-box-shadow: 0 1px 3px rgba(52, 51, 49, 0.3);
            box-shadow: 0 1px 3px rgba(52, 51, 49, 0.3);
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            padding: 0 12px 0 0;
            text-transform: none;
            display: inline-block;
            line-height: 20px;
            border: none;
            margin: 0;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
            font-weight: bold;
        }

        .btn-more.block-link {
            display: block;
        }

        .btn-more.block-link:before,
        .btn-more.block-link:after {
            content: " ";
            display: table;
        }

        .btn-more.block-link:after {
            clear: both;
        }

        .btn-more.block-link i {
            float: left;
        }

        .btn-more:hover {
            background: #ff5821;
            color: #ffffff !important;
            text-decoration: none;
            text-shadow: none;
        }

        .btn-more i,
        .btn-more [class*=" icon-"] {
            background: #e34619;
            color: #ffffff;
            font-style: normal;
            font-weight: 100;
            -webkit-border-radius: 2px 0 0 2px;
            -moz-border-radius: 2px 0 0 2px;
            border-radius: 2px 0 0 2px;
            height: 20px;
            width: 20px;
            display: inline-block;
            line-height: 20px;
            text-align: center;
            margin: 0;
            padding: 0;
            margin-right: 8px;
        }

        .btn-more i.default:before,
        .btn-more [class*=" icon-"].default:before {
            content: "\f067";
            font-family: 'FontAwesome';
        }

        .btn-more.i-right {
            padding: 0 0 0 12px;
        }

        .btn-more.i-right i,
        .btn-more.i-right [class*=" icon-"] {
            margin-right: 0;
            margin-left: 8px;
            -webkit-border-radius: 0 2px 2px 0;
            -moz-border-radius: 0 2px 2px 0;
            border-radius: 0 2px 2px 0;
        }

        .btn-more.large,
        .btn-more.btn-lg {
            line-height: 38px;
        }

        .btn-more.large i,
        .btn-more.btn-lg i {
            height: 38px;
            line-height: 40px;
            width: 38px;
            font-size: 22px;
            vertical-align: top;
        }

        .block {
            padding: 4em 0;
        }

        .block:before,
        .block:after {
            content: " ";
            display: table;
        }

        .block:after {
            clear: both;
        }

        .block .block-title {
            margin-top: 0;
            position: relative;
            margin-bottom: 30px;
        }

        .block .block-title:after {
            width: 80px;
            height: 1px;
            background: #ff5821;
            content: '';
            display: block;
            position: absolute;
            bottom: -10px;
        }

        .block.block-pd-sm {
            padding: 2em 0;
        }

        .block.block-pd-lg {
            padding: 8em 0;
        }

        .block.block-pd-h {
            padding: 4em;
        }

        .block.block-pd-h.block-pd-sm {
            padding: 2em;
        }

        .block.block-pd-h.block-pd-lg {
            padding: 8em;
        }

        .block.block-bg-primary,
        .block.block-bg-primary:after {
            background-color: #ff5821;
            color: #ffffff;
        }

        .block.block-bg-noise,
        .block.block-bg-noise:after {
            background: #ededed url(../img/bg_noise-bg.png) left top repeat;
        }

        .block.block-bg-grey,
        .block.block-bg-grey:after {
            background-color: #f3f3f3;
        }

        .block.block-bg-gradient,
        .block.block-bg-gradient:after {
            background-image: -webkit-linear-gradient(top, #f9f9f9 0%, #f6f6f6 100%);
            background-image: -o-linear-gradient(top, #f9f9f9 0%, #f6f6f6 100%);
            background-image: linear-gradient(to bottom, #f9f9f9 0%, #f6f6f6 100%);
            background-color: #f8f8f8;
            background-image: -moz-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f9f9f9), to(#f6f6f6));
            background-image: -webkit-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: -o-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: linear-gradient(to bottom, #f9f9f9, #f6f6f6);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9f9f9', endColorstr='#fff6f6f6', GradientType=0);
        }

        .block.block-bg-gradient-flip,
        .block.block-bg-gradient-flip:after {
            background-image: -webkit-linear-gradient(top, #f6f6f6 0%, #f9f9f9 100%);
            background-image: -o-linear-gradient(top, #f6f6f6 0%, #f9f9f9 100%);
            background-image: linear-gradient(to bottom, #f6f6f6 0%, #f9f9f9 100%);
            background-color: #f7f7f7;
            background-image: -moz-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f6f6f6), to(#f9f9f9));
            background-image: -webkit-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: -o-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: linear-gradient(to bottom, #f6f6f6, #f9f9f9);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff6f6f6', endColorstr='#fff9f9f9', GradientType=0);
        }

        .block.block-bg-grey-dark,
        .block.block-bg-grey-dark:after {
            background-color: #212324;
            color: white;
        }

        .block.block-bg-img {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            transition: 0s linear;
            transition-property: background-position;
        }

        .block.block-bg-overlay {
            position: relative;
        }

        .block.block-bg-overlay:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            opacity: 0.5;
            filter: alpha(opacity=50);
            display: block !important;
        }

        .block.block-bg-overlay > * {
            z-index: 2;
            position: relative;
        }

        .block.block-bg-overlay.block-bg-overlay-1:after {
            opacity: 0.1;
            filter: alpha(opacity=10);
        }

        .block.block-bg-overlay.block-bg-overlay-2:after {
            opacity: 0.2;
            filter: alpha(opacity=20);
        }

        .block.block-bg-overlay.block-bg-overlay-3:after {
            opacity: 0.3;
            filter: alpha(opacity=30);
        }

        .block.block-bg-overlay.block-bg-overlay-4:after {
            opacity: 0.4;
            filter: alpha(opacity=40);
        }

        .block.block-bg-overlay.block-bg-overlay-5:after {
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .block.block-bg-overlay.block-bg-overlay-6:after {
            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        .block.block-bg-overlay.block-bg-overlay-7:after {
            opacity: 0.7;
            filter: alpha(opacity=70);
        }

        .block.block-bg-overlay.block-bg-overlay-8:after {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .block.block-bg-overlay.block-bg-overlay-9:after {
            opacity: 0.9;
            filter: alpha(opacity=90);
        }

        .block.block-border-bottom {
            border-bottom: 1px solid #ff5821;
        }

        .block.block-border-top {
            border-top: 1px solid #ff5821;
        }

        .block.block-border-bottom-grey {
            border-bottom: 1px solid #eeeeee;
        }

        .block.block-border-top-grey {
            border-top: 1px solid #eeeeee;
        }

        .block-contained {
            padding: 4em 0;
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .block-contained:before,
        .block-contained:after {
            content: " ";
            display: table;
        }

        .block-contained:after {
            clear: both;
        }

        .block-contained .block-title {
            margin-top: 0;
            position: relative;
            margin-bottom: 30px;
        }

        .block-contained .block-title:after {
            width: 80px;
            height: 1px;
            background: #ff5821;
            content: '';
            display: block;
            position: absolute;
            bottom: -10px;
        }

        .block-contained.block-pd-sm {
            padding: 2em 0;
        }

        .block-contained.block-pd-lg {
            padding: 8em 0;
        }

        .block-contained.block-pd-h {
            padding: 4em;
        }

        .block-contained.block-pd-h.block-pd-sm {
            padding: 2em;
        }

        .block-contained.block-pd-h.block-pd-lg {
            padding: 8em;
        }

        .block-contained.block-bg-primary,
        .block-contained.block-bg-primary:after {
            background-color: #ff5821;
            color: #ffffff;
        }

        .block-contained.block-bg-noise,
        .block-contained.block-bg-noise:after {
            background: #ededed url(../img/bg_noise-bg.png) left top repeat;
        }

        .block-contained.block-bg-grey,
        .block-contained.block-bg-grey:after {
            background-color: #f3f3f3;
        }

        .block-contained.block-bg-gradient,
        .block-contained.block-bg-gradient:after {
            background-image: -webkit-linear-gradient(top, #f9f9f9 0%, #f6f6f6 100%);
            background-image: -o-linear-gradient(top, #f9f9f9 0%, #f6f6f6 100%);
            background-image: linear-gradient(to bottom, #f9f9f9 0%, #f6f6f6 100%);
            background-color: #f8f8f8;
            background-image: -moz-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f9f9f9), to(#f6f6f6));
            background-image: -webkit-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: -o-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: linear-gradient(to bottom, #f9f9f9, #f6f6f6);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9f9f9', endColorstr='#fff6f6f6', GradientType=0);
        }

        .block-contained.block-bg-gradient-flip,
        .block-contained.block-bg-gradient-flip:after {
            background-image: -webkit-linear-gradient(top, #f6f6f6 0%, #f9f9f9 100%);
            background-image: -o-linear-gradient(top, #f6f6f6 0%, #f9f9f9 100%);
            background-image: linear-gradient(to bottom, #f6f6f6 0%, #f9f9f9 100%);
            background-color: #f7f7f7;
            background-image: -moz-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f6f6f6), to(#f9f9f9));
            background-image: -webkit-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: -o-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: linear-gradient(to bottom, #f6f6f6, #f9f9f9);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff6f6f6', endColorstr='#fff9f9f9', GradientType=0);
        }

        .block-contained.block-bg-grey-dark,
        .block-contained.block-bg-grey-dark:after {
            background-color: #212324;
            color: white;
        }

        .block-contained.block-bg-img {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            transition: 0s linear;
            transition-property: background-position;
        }

        .block-contained.block-bg-overlay {
            position: relative;
        }

        .block-contained.block-bg-overlay:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            opacity: 0.5;
            filter: alpha(opacity=50);
            display: block !important;
        }

        .block-contained.block-bg-overlay > * {
            z-index: 2;
            position: relative;
        }

        .block-contained.block-bg-overlay.block-bg-overlay-1:after {
            opacity: 0.1;
            filter: alpha(opacity=10);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-2:after {
            opacity: 0.2;
            filter: alpha(opacity=20);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-3:after {
            opacity: 0.3;
            filter: alpha(opacity=30);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-4:after {
            opacity: 0.4;
            filter: alpha(opacity=40);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-5:after {
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-6:after {
            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-7:after {
            opacity: 0.7;
            filter: alpha(opacity=70);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-8:after {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .block-contained.block-bg-overlay.block-bg-overlay-9:after {
            opacity: 0.9;
            filter: alpha(opacity=90);
        }

        .block-contained.block-border-bottom {
            border-bottom: 1px solid #ff5821;
        }

        .block-contained.block-border-top {
            border-top: 1px solid #ff5821;
        }

        .block-contained.block-border-bottom-grey {
            border-bottom: 1px solid #eeeeee;
        }

        .block-contained.block-border-top-grey {
            border-top: 1px solid #eeeeee;
        }

        @media (min-width: 768px) {
            .block-contained {
                width: 750px;
            }
        }

        @media (min-width: 992px) {
            .block-contained {
                width: 970px;
            }
        }

        @media (min-width: 1200px) {
            .block-contained {
                width: 1170px;
            }
        }

        .block-highlight {
            padding: 4em 0;
            background-color: #f3f3f3;
            border-bottom: 1px solid #ff5821;
        }

        .block-highlight:before,
        .block-highlight:after {
            content: " ";
            display: table;
        }

        .block-highlight:after {
            clear: both;
        }

        .block-highlight .block-title {
            margin-top: 0;
            position: relative;
            margin-bottom: 30px;
        }

        .block-highlight .block-title:after {
            width: 80px;
            height: 1px;
            background: #ff5821;
            content: '';
            display: block;
            position: absolute;
            bottom: -10px;
        }

        .block-highlight.block-pd-sm {
            padding: 2em 0;
        }

        .block-highlight.block-pd-lg {
            padding: 8em 0;
        }

        .block-highlight.block-pd-h {
            padding: 4em;
        }

        .block-highlight.block-pd-h.block-pd-sm {
            padding: 2em;
        }

        .block-highlight.block-pd-h.block-pd-lg {
            padding: 8em;
        }

        .block-highlight.block-bg-primary,
        .block-highlight.block-bg-primary:after {
            background-color: #ff5821;
            color: #ffffff;
        }

        .block-highlight.block-bg-noise,
        .block-highlight.block-bg-noise:after {
            background: #ededed url(../img/bg_noise-bg.png) left top repeat;
        }

        .block-highlight.block-bg-grey,
        .block-highlight.block-bg-grey:after {
            background-color: #f3f3f3;
        }

        .block-highlight.block-bg-gradient,
        .block-highlight.block-bg-gradient:after {
            background-image: -webkit-linear-gradient(top, #f9f9f9 0%, #f6f6f6 100%);
            background-image: -o-linear-gradient(top, #f9f9f9 0%, #f6f6f6 100%);
            background-image: linear-gradient(to bottom, #f9f9f9 0%, #f6f6f6 100%);
            background-color: #f8f8f8;
            background-image: -moz-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f9f9f9), to(#f6f6f6));
            background-image: -webkit-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: -o-linear-gradient(top, #f9f9f9, #f6f6f6);
            background-image: linear-gradient(to bottom, #f9f9f9, #f6f6f6);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff9f9f9', endColorstr='#fff6f6f6', GradientType=0);
        }

        .block-highlight.block-bg-gradient-flip,
        .block-highlight.block-bg-gradient-flip:after {
            background-image: -webkit-linear-gradient(top, #f6f6f6 0%, #f9f9f9 100%);
            background-image: -o-linear-gradient(top, #f6f6f6 0%, #f9f9f9 100%);
            background-image: linear-gradient(to bottom, #f6f6f6 0%, #f9f9f9 100%);
            background-color: #f7f7f7;
            background-image: -moz-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f6f6f6), to(#f9f9f9));
            background-image: -webkit-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: -o-linear-gradient(top, #f6f6f6, #f9f9f9);
            background-image: linear-gradient(to bottom, #f6f6f6, #f9f9f9);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff6f6f6', endColorstr='#fff9f9f9', GradientType=0);
        }

        .block-highlight.block-bg-grey-dark,
        .block-highlight.block-bg-grey-dark:after {
            background-color: #212324;
            color: white;
        }

        .block-highlight.block-bg-img {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            transition: 0s linear;
            transition-property: background-position;
        }

        .block-highlight.block-bg-overlay {
            position: relative;
        }

        .block-highlight.block-bg-overlay:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            opacity: 0.5;
            filter: alpha(opacity=50);
            display: block !important;
        }

        .block-highlight.block-bg-overlay > * {
            z-index: 2;
            position: relative;
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-1:after {
            opacity: 0.1;
            filter: alpha(opacity=10);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-2:after {
            opacity: 0.2;
            filter: alpha(opacity=20);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-3:after {
            opacity: 0.3;
            filter: alpha(opacity=30);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-4:after {
            opacity: 0.4;
            filter: alpha(opacity=40);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-5:after {
            opacity: 0.5;
            filter: alpha(opacity=50);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-6:after {
            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-7:after {
            opacity: 0.7;
            filter: alpha(opacity=70);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-8:after {
            opacity: 0.8;
            filter: alpha(opacity=80);
        }

        .block-highlight.block-bg-overlay.block-bg-overlay-9:after {
            opacity: 0.9;
            filter: alpha(opacity=90);
        }

        .block-highlight.block-border-bottom {
            border-bottom: 1px solid #ff5821;
        }

        .block-highlight.block-border-top {
            border-top: 1px solid #ff5821;
        }

        .block-highlight.block-border-bottom-grey {
            border-bottom: 1px solid #eeeeee;
        }

        .block-highlight.block-border-top-grey {
            border-top: 1px solid #eeeeee;
        }

        .block-highlight h1:first-child,
        .block-highlight h3:first-child,
        .block-highlight h3:first-child,
        .block-highlight h4:first-child,
        .block-highlight h5:first-child {
            margin-top: 0;
        }

        .block-highlight p {
            font-size: 1.4em;
            font-weight: 100;
        }

        .scrolltop {
            width: 40px;
            height: 40px;
            line-height: 40px;
            opacity: 80;
            filter: alpha(opacity=8000);
            position: fixed;
            bottom: 10px;
            right: 10px;
            display: none;
            font-size: 0;
            background: #343331;
            z-index: 999999;
            text-align: center;
            color: #ffffff !important;
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
        }

        .scrolltop:hover {
            text-decoration: none;
            opacity: 90;
            filter: alpha(opacity=9000);
        }

        .scrolltop:before {
            content: "\f106";
            font-family: 'FontAwesome';
            font-size: 30px;
            font-style: normal;
        }

        .social-media.social-media-inline {
            margin: 8px;
        }

        @media (min-width: 768px) {
            .social-media.social-media-inline {
                margin-top: 15px;
                margin-bottom: 15px;
                margin-left: 15px;
                margin-right: 15px;
            }
        }

        .social-media a {
            text-decoration: none;
            color: #ff5821;
            display: inline-block;
            line-height: 1;
            background: #ffffff;
            padding: 3px;
            text-align: center;
            -webkit-box-shadow: 0 1px 2px rgba(52, 51, 49, 0.2);
            -moz-box-shadow: 0 1px 2px rgba(52, 51, 49, 0.2);
            box-shadow: 0 1px 2px rgba(52, 51, 49, 0.2);
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
        }

        .social-media a i {
            border: 2px solid #ff5821;
            font-size: 14px;
            padding: 0;
            margin: 0;
            line-height: 24px;
            width: 24px;
            height: 24px;
            text-align: center;
            display: block;
        }

        .social-media a:hover {
            text-decoration: none;
            background: #ff5821;
            color: #ffffff;
        }

        .social-media a:hover i {
            border-color: #ffffff;
        }

        .social-media.social-media-stacked a {
            background: transparent !important;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            display: block;
            color: #ff5821;
            text-align: left;
            margin-bottom: 0.5em;
            font-weight: bold;
        }

        .social-media.social-media-stacked a:hover {
            color: white !important;
        }

        .social-media.social-media-stacked a i {
            display: inline-block;
            margin-right: 10px;
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            color: white;
            border-color: white;
            border-width: 3px;
            line-height: 23px;
            width: 26px;
            height: 26px;
        }

        .item-slider {
            overflow: hidden;
        }

        @media (min-width: 960px) {
            .item-slider {
                height: 380px;
            }
        }

        @media (min-width: 769px) and (max-width:959px) {
            .item-slider {
                height: 580px;
            }
        }

        @media (max-width: 768px) {
            .item-slider {
                height: 300px;
            }
        }

        .owl-carousel .owl-controls {
            margin: 0;
        }

        .owl-carousel .owl-controls .owl-buttons div {
            text-indent: 0;
            font-size: 0;
            background: #343331;
            width: 40px;
            height: 75px;
            line-height: 75px;
            color: #ffffff;
            text-align: center;
            -webkit-border-radius: 0 2px 2px 0;
            -moz-border-radius: 0 2px 2px 0;
            border-radius: 0 2px 2px 0;
            opacity: 0.3;
            filter: alpha(opacity=30);
            position: absolute;
            top: 50%;
            margin-top: -75px;
            right: 0;
            left: auto;
            -webkit-transition: all 220ms ease-out;
            -moz-transition: all 220ms ease-out;
            -o-transition: all 220ms ease-out;
            transition: all 220ms ease-out;
        }

        .owl-carousel .owl-controls .owl-buttons div:before {
            content: '\f105';
            font-family: 'FontAwesome';
            font-size: 32px;
        }

        .owl-carousel .owl-controls .owl-buttons div.owl-prev {
            -webkit-border-radius: 2px 0 0 2px;
            -moz-border-radius: 2px 0 0 2px;
            border-radius: 2px 0 0 2px;
            left: 0;
            right: auto;
        }

        .owl-carousel .owl-controls .owl-buttons div.owl-prev:before {
            content: '\f104';
        }

        .owl-carousel .owl-controls .owl-buttons div:hover {
            text-decoration: none;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .owl-carousel:hover .owl-controls .owl-buttons div {
            opacity: 0.6;
            filter: alpha(opacity=60);
        }

        .owl-carousel .owl-controls .owl-pagination {
            bottom: 10px;
            right: 5px;
            width: auto;
            position: absolute;
        }

        .owl-carousel .owl-controls .owl-pagination .owl-page span {
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            opacity: 1;
            filter: alpha(opacity=100);
            height: 16px;
            width: 16px;
            border: 2px solid #ff5821;
            background: transparent;
            margin: 2px 4px;
            -webkit-transition: all 220ms ease-out;
            -moz-transition: all 220ms ease-out;
            -o-transition: all 220ms ease-out;
            transition: all 220ms ease-out;
        }

        .owl-carousel .owl-controls .owl-pagination .owl-page.active span {
            background: #ff5821;
        }

        .item-slider .item-caption {
            padding: 2em;
        }

        @media (min-width: 992px) {
            .item-slider .item-caption {
                padding: 0;
            }
        }

        .item-carousel .item {
            display: block;
            float: left;
            padding: 0 5px;
        }

        .item-carousel .item-details {
            padding: 1em;
            background: #f3f3f3;
            border-bottom: 1px solid #bfbfbf;
        }

        .item-carousel .item-details .item-title {
            font-weight: 600;
        }

        .item-carousel .item-details .item-title a {
            color: #343331;
        }

        .item-carousel.owl-carousel .owl-controls .owl-buttons div {
            background-color: #ff5821;
        }

        .date-wrapper {
            color: #ffffff;
            text-align: center;
            margin: 0 0 1em 0;
            border-bottom: 2px solid #e5e5e5;
            width: 40px;
            font-size: 16px;
            display: block;
        }

        .date-wrapper .date-m {
            padding: 2px;
            text-transform: uppercase;
            font-weight: 100;
            background: #ff5821;
            font-size: 11px;
            line-height: 1;
            display: block;
        }

        .date-wrapper .date-d {
            font-size: 16px;
            line-height: 1;
            padding: 4px 0;
            background: #ffffff;
            color: #343331;
            display: block;
        }

        .overlay-wrapper {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .overlay-wrapper.overlay-wrapper-bordered {
            border-bottom: 5px solid transparent;
        }

        .overlay-wrapper.overlay-wrapper-bordered:hover {
            border-bottom: 5px solid #e34619;
        }

        .overlay-wrapper .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 100;
            display: block;
            top: 100%;
            bottom: 0;
            right: 0;
            left: 0;
            -webkit-transition: all 220ms ease-out;
            -moz-transition: all 220ms ease-out;
            -o-transition: all 220ms ease-out;
            transition: all 220ms ease-out;
            text-align: center;
            padding: 5% 0;
            color: white;
        }

        .overlay-wrapper .overlay.on {
            top: 0;
        }

        .overlay-wrapper .overlay .overlay-content {
            display: block;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .overlay-wrapper .underlay {
            z-index: 99;
        }

        .overlay-wrapper:hover .overlay {
            top: 0;
        }

        .map-wrapper {
            position: relative;
            margin-bottom: 10px;
        }

        .map-wrapper .btn-map {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .panel-pricing {
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            border: none;
            border-bottom: 1px solid #bfbfbf;
            padding: 0;
            background: #ededed url(../img/bg_noise-bg.png) left top repeat;
            -webkit-box-shadow: 1px 1px 5px #d5d5d5;
            -moz-box-shadow: 1px 1px 5px #d5d5d5;
            box-shadow: 1px 1px 5px #d5d5d5;
        }

        .panel-pricing .panel-heading {
            padding-bottom: 15px;
            padding-top: 15px;
            position: relative;
        }

        .panel-pricing .panel-title {
            font-weight: 600;
            text-transform: uppercase;
        }

        .panel-pricing .panel-title em {
            text-transform: none;
            font-weight: 100;
        }

        .panel-pricing .panel-pricing-price {
            text-shadow: none;
            color: #b5b5b5;
            background: #6b7175;
            text-align: center;
            padding: 15px 0 10px 0;
            font-weight: 100;
            vertical-align: text-top;
            margin: 0;
            font-weight: 14px;
        }

        .panel-pricing .panel-pricing-price .digits {
            font-size: 40px;
            color: #ffffff;
        }

        .panel-pricing .panel-body {
            background-color: white;
        }

        .panel-pricing .panel-pricing-popular {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 2px;
            color: #ff5821;
            padding: 1px 5px 1px 0;
            font-size: 10px;
            line-height: 1;
            text-transform: uppercase;
            text-align: center;
        }

        .panel-pricing .panel-pricing-popular i {
            font-size: 12px;
        }

        .panel-pricing.panel-pricing-highlighted {
            -webkit-box-shadow: 1px 2px 5px #d5d5d5;
            -moz-box-shadow: 1px 2px 5px #d5d5d5;
            box-shadow: 1px 2px 5px #d5d5d5;
        }

        .panel-pricing.panel-pricing-highlighted .panel-pricing-price {
            background: #212324;
            padding: 25px 0 20px 0;
        }

        .stat {
            padding: 30px;
            border: 2px solid #ff5821;
            font-size: 62px;
            text-align: center;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            margin-bottom: 10px;
        }

        .stat small {
            font-size: 14px;
            display: block;
        }

        .text-primary {
            color: #ff5821;
        }

        .bg-primary {
            background-color: #ff5821;
        }

        .popover-title {
            font-size: 16px;
            font-weight: bold;
        }

        .popover-content {
            font-size: 12px;
            font-weight: normal;
        }

        .page-header small {
            font-size: 18px;
            display: block;
        }

        .jumbotron {
            border-radius: 0;
        }

        .text-fancy {
            font-family: serif;
            font-style: italic;
        }

        .text-lowercase {
            text-transform: lowercase;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .text-capitalize {
            text-transform: capitalize;
        }

        .text-weight-light {
            font-weight: 100 !important;
        }

        .text-weight-strong {
            font-weight: bold !important;
        }

        .text-shadow-white {
            text-shadow: 1px 1px 0 #ffffff;
        }

        @media (min-width: 768px) {
            .text-center-sm {
                text-align: center !important;
            }

            .text-left-sm {
                text-align: left !important;
            }

            .text-right-sm {
                text-align: right !important;
            }
        }

        @media (min-width: 992px) {
            .text-center-md {
                text-align: center !important;
            }

            .text-left-md {
                text-align: left !important;
            }

            .text-right-md {
                text-align: right !important;
            }
        }

        @media (min-width: 1200px) {
            .text-center-lg {
                text-align: center !important;
            }

            .text-left-lg {
                text-align: left !important;
            }

            .text-right-lg {
                text-align: right !important;
            }
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            line-height: 1;
        }

        h1,
        .h1 {
            font-size: 50.4px;
        }

        h2,
        .h2 {
            font-size: 30px;
        }

        h3,
        .h3 {
            font-size: 24px;
        }

        h4,
        .h4 {
            font-size: 18px;
        }

        h5,
        .h5 {
            font-size: 14px;
        }

        h6,
        .h6 {
            font-size: 12px;
        }

        h1.h-lg,
        .h-lg h1,
        .h-lg .h1,
        .h-lg.h1 {
            font-size: 72px;
        }

        h2.h-lg,
        .h-lg h2,
        .h-lg .h2,
        .h-lg.h2 {
            font-size: 54px;
        }

        h3.h-lg,
        .h-lg h3,
        .h-lg .h3,
        .h-lg.h3 {
            font-size: 38.400000000000006px;
        }

        h4.h-lg,
        .h-lg h4,
        .h-lg .h4,
        .h-lg.h4 {
            font-size: 25.2px;
        }

        h5.h-lg,
        .h-lg h5,
        .h-lg .h5,
        .h-lg.h5 {
            font-size: 16.8px;
        }

        h6.h-lg,
        .h-lg h6,
        .h-lg .h6,
        .h-lg.h6 {
            font-size: 13.200000000000001px;
        }

        h1.h-xlg,
        .h-xlg h1,
        .h-xlg .h1,
        .h-xlg.h1 {
            font-size: 122.39999999999999px;
        }

        h2.h-xlg,
        .h-xlg h2,
        .h-xlg .h2,
        .h-xlg.h2 {
            font-size: 84px;
        }

        h3.h-xlg,
        .h-xlg h3,
        .h-xlg .h3,
        .h-xlg.h3 {
            font-size: 62.400000000000006px;
        }

        h4.h-xlg,
        .h-xlg h4,
        .h-xlg .h4,
        .h-xlg.h4 {
            font-size: 43.199999999999996px;
        }

        h5.h-xlg,
        .h-xlg h5,
        .h-xlg .h5,
        .h-xlg.h5 {
            font-size: 30.800000000000004px;
        }

        h6.h-xlg,
        .h-xlg h6,
        .h-xlg .h6,
        .h-xlg.h6 {
            font-size: 25.200000000000003px;
        }

        ul.big-list {
            font-size: 1.2em;
            padding: 0;
            margin: 0;
        }

        ul.big-list li {
            list-style: none;
            margin: 0;
            padding: 0.5em;
            border-bottom: 1px solid #eee;
        }

        ul.big-list li:hover {
            background: #ededed;
        }

        ul.list-dotted {
            padding: 0 30px 20px 30px;
            margin: 0;
        }

        ul.list-dotted li {
            padding: 0.2em;
            list-style: none;
        }

        ul.list-dotted li:before {
            content: "\f111";
            font-family: 'FontAwesome';
            font-size: 6px;
            color: #ff5821;
            margin: 0 6px 0 0;
            vertical-align: middle;
        }

        blockquote {
            border: none;
            padding: 0;
            margin: 1em 0 0 0;
            position: relative;
            background: url(../img/bg_blockquote.png) left top no-repeat;
        }

        blockquote:before,
        blockquote:after {
            content: " ";
            display: table;
        }

        blockquote:after {
            clear: both;
        }

        blockquote p {
            padding: 0 1em 1em 160px;
            text-align: center;
            font-style: italic;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-weight: normal;
            line-height: 1.55;
        }

        blockquote img {
            position: absolute;
            bottom: 0;
            left: 50px;
            max-width: 120px;
        }

        blockquote small {
            display: block;
            padding: 10px;
            padding-left: 160px;
            background: #6b7175;
            color: #d0d3d4;
        }

        blockquote small:before {
            content: ' ';
        }

        blockquote small strong,
        blockquote small .spacer {
            color: #ffffff;
            font-size: 15px;
        }

        blockquote small a {
            color: #d0d3d4;
        }

        blockquote small a:hover {
            color: #d0d3d4;
        }

        blockquote.right {
            background: url(../img/bg_blockquote-flipped.png) right top no-repeat;
        }

        blockquote.right p {
            padding: 0 160px 1em 1em;
        }

        blockquote.right img {
            left: auto;
            right: 50px;
        }

        blockquote.right small {
            padding-right: 180px;
            text-align: right;
            padding-left: 0;
        }

        .bg-noise {
            background: #ededed url(../img/bg_noise-bg.png) left top repeat;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        body,
        html {
            font-family: "Roboto", sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-weight: 100;
        }

        a {
            color: #ff5821;
        }

        a:hover {
            color: #ff5821;
        }

        #background-wrapper {
            background-color: #000000;
            background-position: left top;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-bottom: 0;
            border-bottom: 2px solid #ff5821;
        }

        .benches {
            background-image: url(../img/backgrounds/benches.png);
        }

        .boots {
            background-image: url(../img/backgrounds/boots.png);
        }

        .buildings {
            background-image: url(../img/backgrounds/buildings.png);
        }

        .city {
            background-image: url(../img/backgrounds/city.png);
        }

        .metro {
            background-image: url(../img/backgrounds/metro.png);
        }

        a.btn-hh-trigger {
            display: block;
            font-size: 0 !important;
            line-height: 32px;
            width: 30px;
            height: 32px;
            background: #ff5821;
            text-align: center;
            color: #ffffff;
            padding: 0;
            margin: 0 0 0 10px;
            text-decoration: none;
            position: relative;
            top: -11px;
            -webkit-border-radius: 0 0 2px 2px;
            -moz-border-radius: 0 0 2px 2px;
            border-radius: 0 0 2px 2px;
            border: none;
        }

        a.btn-hh-trigger:before,
        a.btn-hh-trigger:after {
            content: "\f067";
            font-family: 'FontAwesome';
            font-size: 18px;
            font-style: normal;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            -o-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            padding: 0;
            margin: 0;
            position: absolute;
            line-height: 30px;
            width: 30px;
            height: 30px;
            top: 2px;
            bottom: 0;
            left: -1px;
            right: 0;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        a.btn-hh-trigger:after {
            content: "\f068";
            opacity: 0;
            filter: alpha(opacity=0);
        }

        a.btn-hh-trigger.target-open:before {
            opacity: 0;
            filter: alpha(opacity=0);
        }

        a.btn-hh-trigger.target-open:after {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .header-hidden {
            background: #ff5821;
            color: #ffffff;
        }

        .header-hidden a:not(.btn),
        .header-hidden p {
            color: #ffffff;
        }

        .header {
            padding: 20px 0 30px 0;
            position: relative;
            color: white;
        }

        .header a:not(.btn) {
            color: white;
        }

        #highlighted {
            color: #ffffff;
        }

        #content {
            padding: 20px 0 20px 0;
            background: #ffffff;
        }

        #content > .block:first-child {
            margin-top: -20px;
        }

        #footer {
            min-height: 400px;
            color: #999;
        }

        #footer h1,
        #footer h2,
        #footer h3,
        #footer h4,
        #footer h5,
        #footer h6,
        #footer strong {
            color: #ffffff;
        }

        #footer a:not(.btn) {
            color: #ff5821;
        }

        #footer .subfooter {
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            margin-top: 1em;
            padding-top: 1em;
        }

        /* Contact Section */
        #contact address {
            color: #999;
        }

        #contact .form #sendmessage {
            color: green;
            background: #fff;
            border: 1px solid green;
            display: none;
            text-align: center;
            padding: 15px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        #contact .form #errormessage {
            color: red;
            display: none;
            border: 1px solid red;
            text-align: center;
            padding: 15px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        #contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
            display: block;
        }

        #contact .form .validation {
            color: red;
            display: none;
            margin: 0 0 20px;
            font-weight: 400;
            font-size: 13px;
        }

        #contact .form input, #contact .form textarea {
            border-radius: 0;
            box-shadow: none;
        }

        #contact .form button[type="submit"] {
            background: #333;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
        }

        #contact .form button[type="submit"]:hover {
            background: #555;
        }

        .sidebar {
            min-height: 450px;
            background: url(../img/misc/bg_sidebar-left.png) right 15px top -60px no-repeat;
            padding-top: 30px;
        }

        .sidebar.sidebar-right {
            background: url(../img/misc/bg_sidebar-right.png) right 15px top -60px no-repeat;
        }

        .fullscreen-centered #background-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            overflow: auto;
        }

        .fullscreen-centered #content {
            background: transparent;
            position: fixed;
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
            width: 80%;
        }

        .navbar-default {
            background-image: -webkit-linear-gradient(top, #f3f3f3 0%, #e6e6e6 100%);
            background-image: -o-linear-gradient(top, #f3f3f3 0%, #e6e6e6 100%);
            background-image: linear-gradient(to bottom, #f3f3f3 0%, #e6e6e6 100%);
            background-color: #eeeeee;
            background-image: -moz-linear-gradient(top, #f3f3f3, #e6e6e6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3f3f3), to(#e6e6e6));
            background-image: -webkit-linear-gradient(top, #f3f3f3, #e6e6e6);
            background-image: -o-linear-gradient(top, #f3f3f3, #e6e6e6);
            background-image: linear-gradient(to bottom, #f3f3f3, #e6e6e6);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff3f3f3', endColorstr='#ffe6e6e6', GradientType=0);
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-default .navbar-collapse {
            padding-left: 0;
            padding-right: 0;
            clear: both;
        }

        @media (min-width: 768px) {
            .navbar-default .navbar-collapse {
                clear: none;
            }
        }

        .navbar-btn {
            margin-top: 13px;
            margin-bottom: 13px;
        }

        .navbar-btn.btn-sm {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .navbar-btn.btn-xs {
            margin-top: 19px;
            margin-bottom: 19px;
        }

        .navbar-text {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .navbar-form {
            margin-top: 13px;
            margin-bottom: 13px;
        }

        .navbar-toggle {
            float: left;
            margin-right: 0;
            margin-left: 8px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            padding: 7px;
        }

        .navbar-brand {
            padding: 0;
            margin: 0;
            display: block;
            text-shadow: none;
            line-height: 1;
            background: url(../img/logo.png) left top no-repeat;
            height: 30px;
            width: 145px;
        }

        .navbar-brand:hover {
            text-decoration: none;
            cursor: pointer;
        }

        .navbar-brand.center-block {
            float: none !important;
            margin-left: auto;
            margin-right: auto;
        }

        .navbar-slogan {
            float: left;
            width: 180px;
            padding-left: 1.5em;
            margin-left: 1.5em;
            border-left: 2px dotted #bcbfc4;
            font-size: 13px;
            line-height: 1.2;
            color: #bcbfc4;
            display: none;
        }

        @media (min-width: 768px) {
            .navbar-slogan {
                display: block;
            }
        }

        .navbar-slogan.center-block {
            float: none !important;
            margin: 10px auto;
            border-left: none !important;
            display: block !important;
            width: auto;
            text-align: center;
            padding: 0;
        }

        .navbar-default .navbar-nav {
            margin: 0;
            padding: 0;
        }

        .navbar-default .navbar-nav .caret {
            color: #ff5821;
            vertical-align: middle;
            margin: 0;
            border: none;
            line-height: 1;
            font-size: 18px;
            font-weight: normal;
            float: right;
            width: auto;
            height: auto;
        }

        @media (min-width: 768px) {
            .navbar-default .navbar-nav .caret {
                margin: -4px 0 0 8px;
                font-size: 10px;
                float: none;
            }
        }

        .navbar-default .navbar-nav .caret:after {
            content: "\f078";
            font-family: 'FontAwesome';
        }

        .navbar-default .navbar-nav li {
            margin: 0;
            border-bottom: 1px solid #D3D3D3;
        }

        @media (min-width: 768px) {
            .navbar-default .navbar-nav li {
                border-right: 1px solid #D3D3D3;
                border-bottom: none;
            }
        }

        .navbar-default .navbar-nav li:first-child {
            border-left-color: #ffffff;
        }

        .navbar-default .navbar-nav li a {
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            -o-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            font-weight: 600;
        }

        .navbar-default .navbar-nav li > a:not(.btn) {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            padding: 20px 15px;
            font-size: 14.5px;
            font-weight: 600;
            text-transform: uppercase;
            color: #343331;
        }

        @media (min-width: 768px) {
            .navbar-default .navbar-nav li > a:not(.btn) {
                height: 60px;
                line-height: 60px;
                padding: 0 25px;
            }
        }

        .navbar-default .navbar-nav li > a:not(.btn) small {
            display: block;
            line-height: 1;
        }

        .navbar-default .navbar-nav li > a:not(.btn):hover .dropdown-menu {
            display: block;
        }

        .navbar-default .navbar-nav li.icon-link a {
            text-align: left;
            font-size: 20px;
            color: #343331;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        @media (min-width: 768px) {
            .navbar-default .navbar-nav li.icon-link a {
                height: 60px;
                line-height: 60px;
                padding-top: 0;
                padding-bottom: 0;
                text-align: center;
            }
        }

        .navbar-default .navbar-nav li > a:not(.btn):hover,
        .navbar-default .navbar-nav li.icon-link a:hover {
            background: #ffffff;
            color: #ff5821;
        }

        .navbar-default .navbar-nav li.open a:hover,
        .navbar-default .navbar-nav li.open a:focus,
        .navbar-default .navbar-nav li.open a.dropdown-toggle,
        .navbar-default .navbar-nav li.active a.top-level,
        .navbar-default .navbar-nav li.active a:hover {
            background: #ff5821;
            color: #ffffff !important;
            text-shadow: none;
        }

        .navbar-default .navbar-nav li.open a:hover .caret,
        .navbar-default .navbar-nav li.open a:focus .caret,
        .navbar-default .navbar-nav li.open a.dropdown-toggle .caret,
        .navbar-default .navbar-nav li.active a.top-level .caret,
        .navbar-default .navbar-nav li.active a:hover .caret {
            color: #ffffff;
        }

        .navbar-default .navbar-nav li.open a.dropdown-toggle {
            border-bottom-color: transparent;
        }

        .navbar-default .navbar-nav .dropdown-menu {
            margin-top: 0px;
            padding: 15px;
            left: auto;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            border-top: 3px solid #ff5821;
            background: #f3f3f3;
            min-width: 200px;
        }

        .navbar-default .navbar-nav .dropdown-menu li {
            border: none;
            list-style: none;
        }

        .navbar-default .navbar-nav .dropdown-menu li.dropdown-header {
            padding-left: 0;
            padding-right: 0;
            text-transform: uppercase;
            font-weight: 300;
        }

        .navbar-default .navbar-nav .dropdown-menu li.dropdown-footer {
            background: #6b7175;
            padding: 7.5px 15px;
            margin: 15px -15px -15px -15px;
            color: rgba(255, 255, 255, 0.8);
        }

        .navbar-default .navbar-nav .dropdown-menu li.dropdown-footer:before,
        .navbar-default .navbar-nav .dropdown-menu li.dropdown-footer:after {
            content: " ";
            display: table;
        }

        .navbar-default .navbar-nav .dropdown-menu li.dropdown-footer:after {
            clear: both;
        }

        .navbar-default .navbar-nav .dropdown-menu li.dropdown-footer strong {
            color: #ffffff;
        }

        .navbar-default .navbar-nav .dropdown-menu li.row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .navbar-default .navbar-nav .dropdown-menu li a:not(.btn) {
            margin: 0;
            padding: 8px;
            height: auto;
            line-height: 1.2;
            font-size: 13.5px;
            border: none;
            text-transform: none;
            position: relative;
            color: #343331;
            display: block;
        }

        .navbar-default .navbar-nav .dropdown-menu li a:not(.btn):before {
            content: "\f111";
            font-family: 'FontAwesome';
            font-size: 5px;
            color: #ff5821;
            margin: 0 6px 0 0;
            padding: 0;
            vertical-align: middle;
        }

        .navbar-default .navbar-nav .dropdown-menu li a:not(.btn):hover {
            color: #ffffff;
            background: #343331;
            text-decoration: none;
        }

        .navbar-default .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        .navbar-default .navbar-nav .dropdown-mm {
            position: static;
        }

        .navbar-default .navbar-nav .dropdown-menu.dropdown-menu-mm {
            list-style: none;
        }

        @media (min-width: 768px) {
            .navbar-default .navbar-nav .dropdown-menu.dropdown-menu-mm {
                min-width: 480px;
                max-width: 620px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        .user-menu {
            margin-top: -10px;
        }

        .user-menu a {
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .user-register {
                display: block !important;
            }
        }


        ul.nav-stacked {
            padding: 0;
            margin: 0;
            text-align: right;
        }

        ul.nav-stacked li a {
            color: #ff5821;
            font-size: 18px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            font-weight: bold;
            border: none;
            margin: 0;
            padding: 8px 25px 8px 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            text-shadow: none;
        }

        ul.nav-stacked li a:hover {
            background: #e6e6e6;
        }

        ul.nav-stacked li a i {
            font-size: 14px;
        }

        ul.nav-stacked li a small {
            display: block;
            font-weight: normal;
            color: #343331;
            font-size: 12px;
        }

        ul.nav-stacked li.active a,
        ul.nav-stacked li.active a:hover {
            color: #ffffff;
            margin: 0;
            background: #212324;
            padding-right: 25px;
        }

        ul.nav-stacked li.active a:after,
        ul.nav-stacked li.active a:hover:after {
            left: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(15, 20, 23, 0);
            border-left-color: #212324;
            border-width: 10px;
            margin-top: -10px;
        }

        ul.nav-stacked li.active a small,
        ul.nav-stacked li.active a:hover small {
            color: #ababab;
        }

        ul.nav-stacked.nav-stacked-right li.active a:after,
        ul.nav-stacked.nav-stacked-right li.active a:hover:after {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(15, 20, 23, 0);
            border-right-color: #0f1417;
            border-width: 10px;
            margin-top: -10px;
        }

        ul.nav-tabs {
            border-bottom: 1px dashed #BFBFBF;
            margin-bottom: 1em;
        }

        ul.nav-tabs li {
            border: 1px dashed #BFBFBF;
            border-bottom: none;
            border-right: none;
            padding: 0;
            margin: 0;
        }

        ul.nav-tabs li:last-child {
            border-right: 1px dashed #BFBFBF;
        }

        ul.nav-tabs li a {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            font-size: 1.2em;
            color: #ff5821;
            padding: 8px 1.4em;
            border: none;
            margin: 0;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            -o-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }

        ul.nav-tabs li.active a,
        ul.nav-tabs li.active a:hover,
        ul.nav-tabs li.active a:focus {
            color: #ffffff;
            background: #6C7175;
            border: none;
        }

        ul.nav-tabs.nav-tabs-left,
        ul.nav-tabs.nav-tabs-right {
            border-bottom: none;
        }

        ul.nav-tabs.nav-tabs-left > li,
        ul.nav-tabs.nav-tabs-right > li {
            float: none;
            border-right: 1px dashed #BFBFBF;
        }

        ul.nav-tabs.nav-tabs-left > li:last-child,
        ul.nav-tabs.nav-tabs-right > li:last-child {
            border-bottom: 1px dashed #BFBFBF;
        }


        .m-a-0 {
            margin: 0 !important;
        }

        .m-t-0 {
            margin-top: 0 !important;
        }

        .m-r-0 {
            margin-right: 0 !important;
        }

        .m-b-0 {
            margin-bottom: 0 !important;
        }

        .m-l-0 {
            margin-left: 0 !important;
        }

        .m-x-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .m-y-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .m-a {
            margin: 1rem !important;
        }

        .m-t {
            margin-top: 1rem !important;
        }

        .m-r {
            margin-right: 1rem !important;
        }

        .m-b {
            margin-bottom: 1rem !important;
        }

        .m-l {
            margin-left: 1rem !important;
        }

        .m-x {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .m-y {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .m-x-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .m-a-md {
            margin: 1.5rem !important;
        }

        .m-t-md {
            margin-top: 1.5rem !important;
        }

        .m-r-md {
            margin-right: 1.5rem !important;
        }

        .m-b-md {
            margin-bottom: 1.5rem !important;
        }

        .m-l-md {
            margin-left: 1.5rem !important;
        }

        .m-x-md {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important;
        }

        .m-y-md {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .m-a-lg {
            margin: 3rem !important;
        }

        .m-t-lg {
            margin-top: 3rem !important;
        }

        .m-r-lg {
            margin-right: 3rem !important;
        }

        .m-b-lg {
            margin-bottom: 3rem !important;
        }

        .m-l-lg {
            margin-left: 3rem !important;
        }

        .m-x-lg {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .m-y-lg {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .p-a-0 {
            padding: 0 !important;
        }

        .p-t-0 {
            padding-top: 0 !important;
        }

        .p-r-0 {
            padding-right: 0 !important;
        }

        .p-b-0 {
            padding-bottom: 0 !important;
        }

        .p-l-0 {
            padding-left: 0 !important;
        }

        .p-x-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .p-y-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .p-a {
            padding: 1rem !important;
        }

        .p-t {
            padding-top: 1rem !important;
        }

        .p-r {
            padding-right: 1rem !important;
        }

        .p-b {
            padding-bottom: 1rem !important;
        }

        .p-l {
            padding-left: 1rem !important;
        }

        .p-x {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .p-y {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .p-a-md {
            padding: 1.5rem !important;
        }

        .p-t-md {
            padding-top: 1.5rem !important;
        }

        .p-r-md {
            padding-right: 1.5rem !important;
        }

        .p-b-md {
            padding-bottom: 1.5rem !important;
        }

        .p-l-md {
            padding-left: 1.5rem !important;
        }

        .p-x-md {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .p-y-md {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .p-a-lg {
            padding: 3rem !important;
        }

        .p-t-lg {
            padding-top: 3rem !important;
        }

        .p-r-lg {
            padding-right: 3rem !important;
        }

        .p-b-lg {
            padding-bottom: 3rem !important;
        }

        .p-l-lg {
            padding-left: 3rem !important;
        }

        .p-x-lg {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .p-y-lg {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .switcher:before,
        .switcher:after {
            content: " ";
            display: table;
        }

        .switcher:after {
            clear: both;
        }

        .switcher a {
            text-indent: -10000px;
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 4px solid #ccc;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }

        .switcher a.active {
            border-color: #ffffff;
        }

        .switcher div.cols {
            float: left;
            margin-right: 2em;
            margin-bottom: 5px;
        }

        .switcher.page a {
            display: block;
            width: 80%;
            height: 100px;
            margin-bottom: 10px;
        }

        .switcher.page a.active {
            border-color: rgba(0, 0, 0, 0.3);
        }

        .switcher.page .background {
            background-size: contain;
        }

        .switcher .orange {
            background: #ff5821;
        }

        .switcher .green {
            background: #00bb5c;
        }

        .switcher .blue {
            background: #00a8cc;
        }

        .switcher .lavender {
            background: #ad4dd3;
        }

        .switcher .background {
            background-color: #000000;
            background-position: right center no-repeat;
            background-attachment: fixed;
        }


    </style>




</head>







<!-- ======== @Region: body ======== -->

<body class="page-about">
<!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
        <!--Hidden Header Region-->
        <div class="header-hidden collapse">
            <div class="header-hidden-inner container">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <!--Colour & Background Switch for demo - @todo: remove in production-->
                        <h3>
                            Theme Variations
                        </h3>
                        <div class="switcher">

                        </div>
                        <p>
                            <small>Selection is not persistent.</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Header & navbar-branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <!--header rightside-->
                    <div class="col-md-4">
                        <!--user menu-->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ======== @Region: #content ======== -->
<div id="content">

    <div class="container" id="about">
        <div class="text-right">
            <h1>
                Javier Rodriguez Gomez
            </h1>
            <h4 class="fa fa-user"></h4>&nbsp 80.902.486<br />
            <h4 class="fa fa-phone"></h4> &nbsp 3003033150
        </div>
        <br />

        <div class="row">
            <div class="col-md-9 col-md-push-3" style="border:solid; border-width:1px">
                <div class="block block-border-bottom-grey block-pd-sm">
                    <h3 class="block-title">
                        Hospital Militar Central
                    </h3>

                    <p>
                        Tareas realizadas:
                    </p>
                    <p>
                        •	Sistematizar proceso de adecuación de volúmenes para los servicios asistenciales. En C# y SQL server.
                        •	Sistematizar proceso cargas laborales de las áreas de la entidad. En C# y SQL server
                        •	Sistematizar proceso de adecuación de volúmenes para los servicios asistenciales. En C# y SQL server.
                        •	Sistematizar proceso cargas laborales de las áreas de la entidad. En C# y SQL server
                        •	Sistematizar proceso de asignación de turnos, registro de novedades, administración de personal, informes en el servicio de enfermería. En C# y SQL server
                        •	Generar manual de usuario para los aplicativos ofimáticos creados.
                        •	Participar en el proceso de mejora de la unidad de talento humano en cuanto a la sistematización de los procesos del área.
                        •	Asistir a las reuniones citadas por el supervisor/a del contrato y/o las directivas de la entidad en cumplimiento de sus obligaciones contractuales.
                    </p>
                    <br />
                    <h3 class="block-title">
                        Direccion de Sanidad de la Policia Nacional
                    </h3>
                    <p>
                        Responsable del Desarrollo del módulo cuentas medicas en el sistema de Salud de la policía nacional. Con tareas Puntuales como:
                    </p>
                    <p>
                        •	Crear y desarrollar nuevos programas o sistemas:
                        o	Investigar las necesidades de los usuarios
                        o	Levantamiento Requerimientos.
                        o	Diseñar y elaborar nuevos programas.
                        o	Front y Back End
                        o	Probar los nuevos programas.
                        o	Testing
                        •	Mejorar programas existentes (Marcha blanca)
                        o	Analizar los requerimientos y sugerencias de los usuarios.
                        o	Crear soluciones para fallas existentes.
                        o	Implementar las soluciones.

                    </p>
                    <br />
                    <h3 class="block-title">
                        Colpensiones
                    </h3>
                    <p>
                        Analista BD IV
                    </p>
                    <p>
                        ••	Implementación y desarrollo de manuales.

                        •	Requerimientos para desarrollo de trámites internos en bizagi – capacitaciones – tablas de promedios de producción de devoluciones a los revisores para toma de decisiones administrativas en la gerencia – apoyo a las coordinares.

                        •	Proyección de producción para informes a la corte constitucional a partir de las novedades en la planta personal.

                        •	Informes para entes, y demás áreas de la entidad – requerimientos al área de control interno – implementación de procedimientos a través de formularios en google para captura de información y posterior gestión de la misma.

                        •	Actualizar la información cada 4 horas aproximadamente a partir de las bases oficiales de colpensiones como liquidador y bizagi.

                        •	Apoyar la gerencia y el equipo asesor en temas de información y cifras de producción y novedades.

                        •	Desarrollar en visual estudio (c#, visual Basic, asp.net) con motores de bases de datos (sql server) que sirve para la captura y visualización de información de la gerencia nacional de reconocimientos y otras áreas de colpensiones como talento humano, defensa judicial, grupo de innovación, gerencia de planeación, entre otros.

                        •	Asistir a reuniones de reparto con áreas como planeación, tutelas.

                        •	Administrar cifras de producción y novedades la vicepresidencia de beneficios y prestaciones en reparto y personal para toma de decisiones gerenciales.

                        •	Apoyar la gerencia y el equipo asesor en temas de información y cifras de producción y novedades.

                        •	Actualizar la base de personal en el momento inmediato en que se presente una novedad para no afectar el reparto.

                        •	Realizar cada 4 horas el informe de seguimiento de la gerente para adopción de medidas de contingencia.

                    </p>
                </div>
            </div>
            <!-- sidebar -->
            <div class="col-md-3 col-md-pull-9 sidebar visible-lg-block">
                <ul class="nav nav-stacked">
                    <li>
                        <a>
                            Experiencia Profesional
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <br />

        <div class="row">
            <div class="col-md-3 col-md-push-3">
                <div class="block block-border-bottom-grey block-pd-sm">

                    <ul class="nav nav-stacked">
                        <li>
                            <a class="text-center">
                                Estudios
                            </a>
                        </li>
                    </ul>


                    <p>
                        1.Esp. Ingeniería de Software<br />
                        Universidad Innca de Colombia<br />
                        (Estudiando actualmente)
                    </p>
                    <p>
                        2018<br />
                        Ingeniería Industrial<br />
                        Universidad Cooperativa de Colombia<br />
                        Ciudad-País
                    </p>
                    <p>
                        2004<br />
                        Técnico en Sistemas<br />
                        Instituto Ingabo

                    </p>
                </div>
            </div>



            <div class="col-md-3 col-md-push-3">
                <div class="block block-border-bottom-grey block-pd-sm">
                    <ul class="nav nav-stacked">
                        <li>
                            <a class="text-center">
                                Programas-Lenguajes
                            </a>
                        </li>
                    </ul>
                    <p>
                        1. C#
                    </p>
                    <p>
                        2. Excel
                    </p>
                    <p>
                        3. Oracle
                    </p>
                    <p>
                        4. SqlServer
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-md-push-3">
                <div class="block block-border-bottom-grey block-pd-sm">
                    <ul class="nav nav-stacked text-left">
                        <li>
                            <a class="text-center">
                                Experiencia Profesional
                            </a>
                        </li>
                    </ul>
                    <p>
                        Esp. Ingeniería de Software<br />
                        Universidad Innca de Colombia<br />
                        (Estudiando actualmente)
                    </p>
                    <p>
                        2018<br />
                        Ingeniería Industrial<br />
                        Universidad Cooperativa de Colombia<br />
                        Ciudad-País
                    </p>
                    <p>
                        2004<br />
                        Técnico en Sistemas<br />
                        Instituto Ingabo

                    </p>
                </div>
            </div>
        </div>
        <hr />

        <div class="row">
            <div class="col-md-3 col-md-push-3">
                <div class="block block-border-bottom-grey block-pd-sm">

                    <ul class="nav nav-stacked">
                        <li>
                            <a class="text-center">
                                Intereses
                            </a>
                        </li>
                    </ul>

                    <p>
                        Auto Aprendizaje
                    </p>
                    <p>
                        Deportes: Futbol.
                    </p>
                    <p>
                        Viajar en Familia
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-md-push-3">
                <div class="block block-border-bottom-grey block-pd-sm">
                    <ul class="nav nav-stacked">
                        <li>
                            <a class="text-center">
                                Habilidades
                            </a>
                        </li>
                    </ul>
                    <p>
                        Trabajo en equipo
                    </p>
                    <p>
                        Liderazgo
                    </p>
                    <p>
                        Tolerancia
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-md-push-3">
                <div class="block block-border-bottom-grey block-pd-sm">
                    <ul class="nav nav-stacked text-left">
                        <li>
                            <a class="text-center">
                                Idiomas
                            </a>
                        </li>
                    </ul>
                    <p>
                        Español:     Natal
                    </p>
                    <p>
                        Inglés:        B1
                    </p>

                </div>
            </div>

        </div>

    </div>
</div>



<script>
    * /
    if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery"); +function (a) { "use strict"; var b = a.fn.jquery.split(" ")[0].split("."); if (b[0] < 2 && b[1] < 9 || 1 == b[0] && 9 == b[1] && b[2] < 1 || b[0] > 3) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4") }(jQuery), +function (a) { "use strict"; function b() { var a = document.createElement("bootstrap"), b = { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend" }; for (var c in b) if (void 0 !== a.style[c]) return { end: b[c] }; return !1 } a.fn.emulateTransitionEnd = function (b) { var c = !1, d = this; a(this).one("bsTransitionEnd", function () { c = !0 }); var e = function () { c || a(d).trigger(a.support.transition.end) }; return setTimeout(e, b), this }, a(function () { a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = { bindType: a.support.transition.end, delegateType: a.support.transition.end, handle: function (b) { if (a(b.target).is(this)) return b.handleObj.handler.apply(this, arguments) } }) }) }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var c = a(this), e = c.data("bs.alert"); e || c.data("bs.alert", e = new d(this)), "string" == typeof b && e[b].call(c) }) } var c = '[data-dismiss="alert"]', d = function (b) { a(b).on("click", c, this.close) }; d.VERSION = "3.3.7", d.TRANSITION_DURATION = 150, d.prototype.close = function (b) { function c() { g.detach().trigger("closed.bs.alert").remove() } var e = a(this), f = e.attr("data-target"); f || (f = e.attr("href"), f = f && f.replace(/.*(?=#[^\s]*$)/, "")); var g = a("#" === f ? [] : f); b && b.preventDefault(), g.length || (g = e.closest(".alert")), g.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (g.removeClass("in"), a.support.transition && g.hasClass("fade") ? g.one("bsTransitionEnd", c).emulateTransitionEnd(d.TRANSITION_DURATION) : c()) }; var e = a.fn.alert; a.fn.alert = b, a.fn.alert.Constructor = d, a.fn.alert.noConflict = function () { return a.fn.alert = e, this }, a(document).on("click.bs.alert.data-api", c, d.prototype.close) }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var d = a(this), e = d.data("bs.button"), f = "object" == typeof b && b; e || d.data("bs.button", e = new c(this, f)), "toggle" == b ? e.toggle() : b && e.setState(b) }) } var c = function (b, d) { this.$element = a(b), this.options = a.extend({}, c.DEFAULTS, d), this.isLoading = !1 }; c.VERSION = "3.3.7", c.DEFAULTS = { loadingText: "loading..." }, c.prototype.setState = function (b) { var c = "disabled", d = this.$element, e = d.is("input") ? "val" : "html", f = d.data(); b += "Text", null == f.resetText && d.data("resetText", d[e]()), setTimeout(a.proxy(function () { d[e](null == f[b] ? this.options[b] : f[b]), "loadingText" == b ? (this.isLoading = !0, d.addClass(c).attr(c, c).prop(c, !0)) : this.isLoading && (this.isLoading = !1, d.removeClass(c).removeAttr(c).prop(c, !1)) }, this), 0) }, c.prototype.toggle = function () { var a = !0, b = this.$element.closest('[data-toggle="buttons"]'); if (b.length) { var c = this.$element.find("input"); "radio" == c.prop("type") ? (c.prop("checked") && (a = !1), b.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == c.prop("type") && (c.prop("checked") !== this.$element.hasClass("active") && (a = !1), this.$element.toggleClass("active")), c.prop("checked", this.$element.hasClass("active")), a && c.trigger("change") } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active") }; var d = a.fn.button; a.fn.button = b, a.fn.button.Constructor = c, a.fn.button.noConflict = function () { return a.fn.button = d, this }, a(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (c) { var d = a(c.target).closest(".btn"); b.call(d, "toggle"), a(c.target).is('input[type="radio"], input[type="checkbox"]') || (c.preventDefault(), d.is("input,button") ? d.trigger("focus") : d.find("input:visible,button:visible").first().trigger("focus")) }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (b) { a(b.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(b.type)) }) }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var d = a(this), e = d.data("bs.carousel"), f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b), g = "string" == typeof b ? b : f.slide; e || d.data("bs.carousel", e = new c(this, f)), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle() }) } var c = function (b, c) { this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this)) }; c.VERSION = "3.3.7", c.TRANSITION_DURATION = 600, c.DEFAULTS = { interval: 5e3, pause: "hover", wrap: !0, keyboard: !0 }, c.prototype.keydown = function (a) { if (!/input|textarea/i.test(a.target.tagName)) { switch (a.which) { case 37: this.prev(); break; case 39: this.next(); break; default: return }a.preventDefault() } }, c.prototype.cycle = function (b) { return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this }, c.prototype.getItemIndex = function (a) { return this.$items = a.parent().children(".item"), this.$items.index(a || this.$active) }, c.prototype.getItemForDirection = function (a, b) { var c = this.getItemIndex(b), d = "prev" == a && 0 === c || "next" == a && c == this.$items.length - 1; if (d && !this.options.wrap) return b; var e = "prev" == a ? -1 : 1, f = (c + e) % this.$items.length; return this.$items.eq(f) }, c.prototype.to = function (a) { var b = this, c = this.getItemIndex(this.$active = this.$element.find(".item.active")); if (!(a > this.$items.length - 1 || a < 0)) return this.sliding ? this.$element.one("slid.bs.carousel", function () { b.to(a) }) : c == a ? this.pause().cycle() : this.slide(a > c ? "next" : "prev", this.$items.eq(a)) }, c.prototype.pause = function (b) { return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this }, c.prototype.next = function () { if (!this.sliding) return this.slide("next") }, c.prototype.prev = function () { if (!this.sliding) return this.slide("prev") }, c.prototype.slide = function (b, d) { var e = this.$element.find(".item.active"), f = d || this.getItemForDirection(b, e), g = this.interval, h = "next" == b ? "left" : "right", i = this; if (f.hasClass("active")) return this.sliding = !1; var j = f[0], k = a.Event("slide.bs.carousel", { relatedTarget: j, direction: h }); if (this.$element.trigger(k), !k.isDefaultPrevented()) { if (this.sliding = !0, g && this.pause(), this.$indicators.length) { this.$indicators.find(".active").removeClass("active"); var l = a(this.$indicators.children()[this.getItemIndex(f)]); l && l.addClass("active") } var m = a.Event("slid.bs.carousel", { relatedTarget: j, direction: h }); return a.support.transition && this.$element.hasClass("slide") ? (f.addClass(b), f[0].offsetWidth, e.addClass(h), f.addClass(h), e.one("bsTransitionEnd", function () { f.removeClass([b, h].join(" ")).addClass("active"), e.removeClass(["active", h].join(" ")), i.sliding = !1, setTimeout(function () { i.$element.trigger(m) }, 0) }).emulateTransitionEnd(c.TRANSITION_DURATION)) : (e.removeClass("active"), f.addClass("active"), this.sliding = !1, this.$element.trigger(m)), g && this.cycle(), this } }; var d = a.fn.carousel; a.fn.carousel = b, a.fn.carousel.Constructor = c, a.fn.carousel.noConflict = function () { return a.fn.carousel = d, this }; var e = function (c) { var d, e = a(this), f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, "")); if (f.hasClass("carousel")) { var g = a.extend({}, f.data(), e.data()), h = e.attr("data-slide-to"); h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault() } }; a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e), a(window).on("load", function () { a('[data-ride="carousel"]').each(function () { var c = a(this); b.call(c, c.data()) }) }) }(jQuery), +function (a) { "use strict"; function b(b) { var c, d = b.attr("data-target") || (c = b.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, ""); return a(d) } function c(b) { return this.each(function () { var c = a(this), e = c.data("bs.collapse"), f = a.extend({}, d.DEFAULTS, c.data(), "object" == typeof b && b); !e && f.toggle && /show|hide/.test(b) && (f.toggle = !1), e || c.data("bs.collapse", e = new d(this, f)), "string" == typeof b && e[b]() }) } var d = function (b, c) { this.$element = a(b), this.options = a.extend({}, d.DEFAULTS, c), this.$trigger = a('[data-toggle="collapse"][href="#' + b.id + '"],[data-toggle="collapse"][data-target="#' + b.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle() }; d.VERSION = "3.3.7", d.TRANSITION_DURATION = 350, d.DEFAULTS = { toggle: !0 }, d.prototype.dimension = function () { var a = this.$element.hasClass("width"); return a ? "width" : "height" }, d.prototype.show = function () { if (!this.transitioning && !this.$element.hasClass("in")) { var b, e = this.$parent && this.$parent.children(".panel").children(".in, .collapsing"); if (!(e && e.length && (b = e.data("bs.collapse"), b && b.transitioning))) { var f = a.Event("show.bs.collapse"); if (this.$element.trigger(f), !f.isDefaultPrevented()) { e && e.length && (c.call(e, "hide"), b || e.data("bs.collapse", null)); var g = this.dimension(); this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1; var h = function () { this.$element.removeClass("collapsing").addClass("collapse in")[g](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse") }; if (!a.support.transition) return h.call(this); var i = a.camelCase(["scroll", g].join("-")); this.$element.one("bsTransitionEnd", a.proxy(h, this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i]) } } } }, d.prototype.hide = function () { if (!this.transitioning && this.$element.hasClass("in")) { var b = a.Event("hide.bs.collapse"); if (this.$element.trigger(b), !b.isDefaultPrevented()) { var c = this.dimension(); this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1; var e = function () { this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse") }; return a.support.transition ? void this.$element[c](0).one("bsTransitionEnd", a.proxy(e, this)).emulateTransitionEnd(d.TRANSITION_DURATION) : e.call(this) } } }, d.prototype.toggle = function () { this[this.$element.hasClass("in") ? "hide" : "show"]() }, d.prototype.getParent = function () { return a(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(a.proxy(function (c, d) { var e = a(d); this.addAriaAndCollapsedClass(b(e), e) }, this)).end() }, d.prototype.addAriaAndCollapsedClass = function (a, b) { var c = a.hasClass("in"); a.attr("aria-expanded", c), b.toggleClass("collapsed", !c).attr("aria-expanded", c) }; var e = a.fn.collapse; a.fn.collapse = c, a.fn.collapse.Constructor = d, a.fn.collapse.noConflict = function () { return a.fn.collapse = e, this }, a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (d) { var e = a(this); e.attr("data-target") || d.preventDefault(); var f = b(e), g = f.data("bs.collapse"), h = g ? "toggle" : e.data(); c.call(f, h) }) }(jQuery), +function (a) { "use strict"; function b(b) { var c = b.attr("data-target"); c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, "")); var d = c && a(c); return d && d.length ? d : b.parent() } function c(c) { c && 3 === c.which || (a(e).remove(), a(f).each(function () { var d = a(this), e = b(d), f = { relatedTarget: this }; e.hasClass("open") && (c && "click" == c.type && /input|textarea/i.test(c.target.tagName) && a.contains(e[0], c.target) || (e.trigger(c = a.Event("hide.bs.dropdown", f)), c.isDefaultPrevented() || (d.attr("aria-expanded", "false"), e.removeClass("open").trigger(a.Event("hidden.bs.dropdown", f))))) })) } function d(b) { return this.each(function () { var c = a(this), d = c.data("bs.dropdown"); d || c.data("bs.dropdown", d = new g(this)), "string" == typeof b && d[b].call(c) }) } var e = ".dropdown-backdrop", f = '[data-toggle="dropdown"]', g = function (b) { a(b).on("click.bs.dropdown", this.toggle) }; g.VERSION = "3.3.7", g.prototype.toggle = function (d) { var e = a(this); if (!e.is(".disabled, :disabled")) { var f = b(e), g = f.hasClass("open"); if (c(), !g) { "ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click", c); var h = { relatedTarget: this }; if (f.trigger(d = a.Event("show.bs.dropdown", h)), d.isDefaultPrevented()) return; e.trigger("focus").attr("aria-expanded", "true"), f.toggleClass("open").trigger(a.Event("shown.bs.dropdown", h)) } return !1 } }, g.prototype.keydown = function (c) { if (/(38|40|27|32)/.test(c.which) && !/input|textarea/i.test(c.target.tagName)) { var d = a(this); if (c.preventDefault(), c.stopPropagation(), !d.is(".disabled, :disabled")) { var e = b(d), g = e.hasClass("open"); if (!g && 27 != c.which || g && 27 == c.which) return 27 == c.which && e.find(f).trigger("focus"), d.trigger("click"); var h = " li:not(.disabled):visible a", i = e.find(".dropdown-menu" + h); if (i.length) { var j = i.index(c.target); 38 == c.which && j > 0 && j--, 40 == c.which && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus") } } } }; var h = a.fn.dropdown; a.fn.dropdown = d, a.fn.dropdown.Constructor = g, a.fn.dropdown.noConflict = function () { return a.fn.dropdown = h, this }, a(document).on("click.bs.dropdown.data-api", c).on("click.bs.dropdown.data-api", ".dropdown form", function (a) { a.stopPropagation() }).on("click.bs.dropdown.data-api", f, g.prototype.toggle).on("keydown.bs.dropdown.data-api", f, g.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", g.prototype.keydown) }(jQuery), +function (a) { "use strict"; function b(b, d) { return this.each(function () { var e = a(this), f = e.data("bs.modal"), g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b); f || e.data("bs.modal", f = new c(this, g)), "string" == typeof b ? f[b](d) : g.show && f.show(d) }) } var c = function (b, c) { this.options = c, this.$body = a(document.body), this.$element = a(b), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, a.proxy(function () { this.$element.trigger("loaded.bs.modal") }, this)) }; c.VERSION = "3.3.7", c.TRANSITION_DURATION = 300, c.BACKDROP_TRANSITION_DURATION = 150, c.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }, c.prototype.toggle = function (a) { return this.isShown ? this.hide() : this.show(a) }, c.prototype.show = function (b) { var d = this, e = a.Event("show.bs.modal", { relatedTarget: b }); this.$element.trigger(e), this.isShown || e.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function () { d.$element.one("mouseup.dismiss.bs.modal", function (b) { a(b.target).is(d.$element) && (d.ignoreBackdropClick = !0) }) }), this.backdrop(function () { var e = a.support.transition && d.$element.hasClass("fade"); d.$element.parent().length || d.$element.appendTo(d.$body), d.$element.show().scrollTop(0), d.adjustDialog(), e && d.$element[0].offsetWidth, d.$element.addClass("in"), d.enforceFocus(); var f = a.Event("shown.bs.modal", { relatedTarget: b }); e ? d.$dialog.one("bsTransitionEnd", function () { d.$element.trigger("focus").trigger(f) }).emulateTransitionEnd(c.TRANSITION_DURATION) : d.$element.trigger("focus").trigger(f) })) }, c.prototype.hide = function (b) { b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(c.TRANSITION_DURATION) : this.hideModal()) }, c.prototype.enforceFocus = function () { a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) { document === a.target || this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus") }, this)) }, c.prototype.escape = function () { this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", a.proxy(function (a) { 27 == a.which && this.hide() }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal") }, c.prototype.resize = function () { this.isShown ? a(window).on("resize.bs.modal", a.proxy(this.handleUpdate, this)) : a(window).off("resize.bs.modal") }, c.prototype.hideModal = function () { var a = this; this.$element.hide(), this.backdrop(function () { a.$body.removeClass("modal-open"), a.resetAdjustments(), a.resetScrollbar(), a.$element.trigger("hidden.bs.modal") }) }, c.prototype.removeBackdrop = function () { this.$backdrop && this.$backdrop.remove(), this.$backdrop = null }, c.prototype.backdrop = function (b) { var d = this, e = this.$element.hasClass("fade") ? "fade" : ""; if (this.isShown && this.options.backdrop) { var f = a.support.transition && e; if (this.$backdrop = a(document.createElement("div")).addClass("modal-backdrop " + e).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", a.proxy(function (a) { return this.ignoreBackdropClick ? void (this.ignoreBackdropClick = !1) : void (a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide())) }, this)), f && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b) return; f ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : b() } else if (!this.isShown && this.$backdrop) { this.$backdrop.removeClass("in"); var g = function () { d.removeBackdrop(), b && b() }; a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : g() } else b && b() }, c.prototype.handleUpdate = function () { this.adjustDialog() }, c.prototype.adjustDialog = function () { var a = this.$element[0].scrollHeight > document.documentElement.clientHeight; this.$element.css({ paddingLeft: !this.bodyIsOverflowing && a ? this.scrollbarWidth : "", paddingRight: this.bodyIsOverflowing && !a ? this.scrollbarWidth : "" }) }, c.prototype.resetAdjustments = function () { this.$element.css({ paddingLeft: "", paddingRight: "" }) }, c.prototype.checkScrollbar = function () { var a = window.innerWidth; if (!a) { var b = document.documentElement.getBoundingClientRect(); a = b.right - Math.abs(b.left) } this.bodyIsOverflowing = document.body.clientWidth < a, this.scrollbarWidth = this.measureScrollbar() }, c.prototype.setScrollbar = function () { var a = parseInt(this.$body.css("padding-right") || 0, 10); this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth) }, c.prototype.resetScrollbar = function () { this.$body.css("padding-right", this.originalBodyPad) }, c.prototype.measureScrollbar = function () { var a = document.createElement("div"); a.className = "modal-scrollbar-measure", this.$body.append(a); var b = a.offsetWidth - a.clientWidth; return this.$body[0].removeChild(a), b }; var d = a.fn.modal; a.fn.modal = b, a.fn.modal.Constructor = c, a.fn.modal.noConflict = function () { return a.fn.modal = d, this }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (c) { var d = a(this), e = d.attr("href"), f = a(d.attr("data-target") || e && e.replace(/.*(?=#[^\s]+$)/, "")), g = f.data("bs.modal") ? "toggle" : a.extend({ remote: !/#/.test(e) && e }, f.data(), d.data()); d.is("a") && c.preventDefault(), f.one("show.bs.modal", function (a) { a.isDefaultPrevented() || f.one("hidden.bs.modal", function () { d.is(":visible") && d.trigger("focus") }) }), b.call(f, g, this) }) }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof b && b; !e && /destroy|hide/.test(b) || (e || d.data("bs.tooltip", e = new c(this, f)), "string" == typeof b && e[b]()) }) } var c = function (a, b) { this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", a, b) }; c.VERSION = "3.3.7", c.TRANSITION_DURATION = 150, c.DEFAULTS = { animation: !0, placement: "top", selector: !1, template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, container: !1, viewport: { selector: "body", padding: 0 } }, c.prototype.init = function (b, c, d) { if (this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d), this.$viewport = this.options.viewport && a(a.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = { click: !1, hover: !1, focus: !1 }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!"); for (var e = this.options.trigger.split(" "), f = e.length; f--;) { var g = e[f]; if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this)); else if ("manual" != g) { var h = "hover" == g ? "mouseenter" : "focusin", i = "hover" == g ? "mouseleave" : "focusout"; this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this)) } } this.options.selector ? this._options = a.extend({}, this.options, { trigger: "manual", selector: "" }) : this.fixTitle() }, c.prototype.getDefaults = function () { return c.DEFAULTS }, c.prototype.getOptions = function (b) { return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = { show: b.delay, hide: b.delay }), b }, c.prototype.getDelegateOptions = function () { var b = {}, c = this.getDefaults(); return this._options && a.each(this._options, function (a, d) { c[a] != d && (b[a] = d) }), b }, c.prototype.enter = function (b) { var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type); return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusin" == b.type ? "focus" : "hover"] = !0), c.tip().hasClass("in") || "in" == c.hoverState ? void (c.hoverState = "in") : (clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? void (c.timeout = setTimeout(function () { "in" == c.hoverState && c.show() }, c.options.delay.show)) : c.show()) }, c.prototype.isInStateTrue = function () { for (var a in this.inState) if (this.inState[a]) return !0; return !1 }, c.prototype.leave = function (b) { var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type); if (c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusout" == b.type ? "focus" : "hover"] = !1), !c.isInStateTrue()) return clearTimeout(c.timeout), c.hoverState = "out", c.options.delay && c.options.delay.hide ? void (c.timeout = setTimeout(function () { "out" == c.hoverState && c.hide() }, c.options.delay.hide)) : c.hide() }, c.prototype.show = function () { var b = a.Event("show.bs." + this.type); if (this.hasContent() && this.enabled) { this.$element.trigger(b); var d = a.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]); if (b.isDefaultPrevented() || !d) return; var e = this, f = this.tip(), g = this.getUID(this.type); this.setContent(), f.attr("id", g), this.$element.attr("aria-describedby", g), this.options.animation && f.addClass("fade"); var h = "function" == typeof this.options.placement ? this.options.placement.call(this, f[0], this.$element[0]) : this.options.placement, i = /\s?auto?\s?/i, j = i.test(h); j && (h = h.replace(i, "") || "top"), f.detach().css({ top: 0, left: 0, display: "block" }).addClass(h).data("bs." + this.type, this), this.options.container ? f.appendTo(this.options.container) : f.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type); var k = this.getPosition(), l = f[0].offsetWidth, m = f[0].offsetHeight; if (j) { var n = h, o = this.getPosition(this.$viewport); h = "bottom" == h && k.bottom + m > o.bottom ? "top" : "top" == h && k.top - m < o.top ? "bottom" : "right" == h && k.right + l > o.width ? "left" : "left" == h && k.left - l < o.left ? "right" : h, f.removeClass(n).addClass(h) } var p = this.getCalculatedOffset(h, k, l, m); this.applyPlacement(p, h); var q = function () { var a = e.hoverState; e.$element.trigger("shown.bs." + e.type), e.hoverState = null, "out" == a && e.leave(e) }; a.support.transition && this.$tip.hasClass("fade") ? f.one("bsTransitionEnd", q).emulateTransitionEnd(c.TRANSITION_DURATION) : q() } }, c.prototype.applyPlacement = function (b, c) { var d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight, g = parseInt(d.css("margin-top"), 10), h = parseInt(d.css("margin-left"), 10); isNaN(g) && (g = 0), isNaN(h) && (h = 0), b.top += g, b.left += h, a.offset.setOffset(d[0], a.extend({ using: function (a) { d.css({ top: Math.round(a.top), left: Math.round(a.left) }) } }, b), 0), d.addClass("in"); var i = d[0].offsetWidth, j = d[0].offsetHeight; "top" == c && j != f && (b.top = b.top + f - j); var k = this.getViewportAdjustedDelta(c, b, i, j); k.left ? b.left += k.left : b.top += k.top; var l = /top|bottom/.test(c), m = l ? 2 * k.left - e + i : 2 * k.top - f + j, n = l ? "offsetWidth" : "offsetHeight"; d.offset(b), this.replaceArrow(m, d[0][n], l) }, c.prototype.replaceArrow = function (a, b, c) { this.arrow().css(c ? "left" : "top", 50 * (1 - a / b) + "%").css(c ? "top" : "left", "") }, c.prototype.setContent = function () { var a = this.tip(), b = this.getTitle(); a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right") }, c.prototype.hide = function (b) { function d() { "in" != e.hoverState && f.detach(), e.$element && e.$element.removeAttr("aria-describedby").trigger("hidden.bs." + e.type), b && b() } var e = this, f = a(this.$tip), g = a.Event("hide.bs." + this.type); if (this.$element.trigger(g), !g.isDefaultPrevented()) return f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", d).emulateTransitionEnd(c.TRANSITION_DURATION) : d(), this.hoverState = null, this }, c.prototype.fixTitle = function () { var a = this.$element; (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "") }, c.prototype.hasContent = function () { return this.getTitle() }, c.prototype.getPosition = function (b) { b = b || this.$element; var c = b[0], d = "BODY" == c.tagName, e = c.getBoundingClientRect(); null == e.width && (e = a.extend({}, e, { width: e.right - e.left, height: e.bottom - e.top })); var f = window.SVGElement && c instanceof window.SVGElement, g = d ? { top: 0, left: 0 } : f ? null : b.offset(), h = { scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop() }, i = d ? { width: a(window).width(), height: a(window).height() } : null; return a.extend({}, e, h, i, g) }, c.prototype.getCalculatedOffset = function (a, b, c, d) { return "bottom" == a ? { top: b.top + b.height, left: b.left + b.width / 2 - c / 2 } : "top" == a ? { top: b.top - d, left: b.left + b.width / 2 - c / 2 } : "left" == a ? { top: b.top + b.height / 2 - d / 2, left: b.left - c } : { top: b.top + b.height / 2 - d / 2, left: b.left + b.width } }, c.prototype.getViewportAdjustedDelta = function (a, b, c, d) { var e = { top: 0, left: 0 }; if (!this.$viewport) return e; var f = this.options.viewport && this.options.viewport.padding || 0, g = this.getPosition(this.$viewport); if (/right|left/.test(a)) { var h = b.top - f - g.scroll, i = b.top + f - g.scroll + d; h < g.top ? e.top = g.top - h : i > g.top + g.height && (e.top = g.top + g.height - i) } else { var j = b.left - f, k = b.left + f + c; j < g.left ? e.left = g.left - j : k > g.right && (e.left = g.left + g.width - k) } return e }, c.prototype.getTitle = function () { var a, b = this.$element, c = this.options; return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title) }, c.prototype.getUID = function (a) { do a += ~~(1e6 * Math.random()); while (document.getElementById(a)); return a }, c.prototype.tip = function () { if (!this.$tip && (this.$tip = a(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!"); return this.$tip }, c.prototype.arrow = function () { return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow") }, c.prototype.enable = function () { this.enabled = !0 }, c.prototype.disable = function () { this.enabled = !1 }, c.prototype.toggleEnabled = function () { this.enabled = !this.enabled }, c.prototype.toggle = function (b) { var c = this; b && (c = a(b.currentTarget).data("bs." + this.type), c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c))), b ? (c.inState.click = !c.inState.click, c.isInStateTrue() ? c.enter(c) : c.leave(c)) : c.tip().hasClass("in") ? c.leave(c) : c.enter(c) }, c.prototype.destroy = function () { var a = this; clearTimeout(this.timeout), this.hide(function () { a.$element.off("." + a.type).removeData("bs." + a.type), a.$tip && a.$tip.detach(), a.$tip = null, a.$arrow = null, a.$viewport = null, a.$element = null }) }; var d = a.fn.tooltip; a.fn.tooltip = b, a.fn.tooltip.Constructor = c, a.fn.tooltip.noConflict = function () { return a.fn.tooltip = d, this } }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var d = a(this), e = d.data("bs.popover"), f = "object" == typeof b && b; !e && /destroy|hide/.test(b) || (e || d.data("bs.popover", e = new c(this, f)), "string" == typeof b && e[b]()) }) } var c = function (a, b) { this.init("popover", a, b) }; if (!a.fn.tooltip) throw new Error("Popover requires tooltip.js"); c.VERSION = "3.3.7", c.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, { placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' }), c.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), c.prototype.constructor = c, c.prototype.getDefaults = function () { return c.DEFAULTS }, c.prototype.setContent = function () { var a = this.tip(), b = this.getTitle(), c = this.getContent(); a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof c ? "html" : "append" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide() }, c.prototype.hasContent = function () { return this.getTitle() || this.getContent() }, c.prototype.getContent = function () { var a = this.$element, b = this.options; return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content) }, c.prototype.arrow = function () { return this.$arrow = this.$arrow || this.tip().find(".arrow") }; var d = a.fn.popover; a.fn.popover = b, a.fn.popover.Constructor = c, a.fn.popover.noConflict = function () { return a.fn.popover = d, this } }(jQuery), +function (a) {
        "use strict"; function b(c, d) { this.$body = a(document.body), this.$scrollElement = a(a(c).is(document.body) ? window : c), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", a.proxy(this.process, this)), this.refresh(), this.process() } function c(c) { return this.each(function () { var d = a(this), e = d.data("bs.scrollspy"), f = "object" == typeof c && c; e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]() }) } b.VERSION = "3.3.7", b.DEFAULTS = { offset: 10 }, b.prototype.getScrollHeight = function () { return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight) }, b.prototype.refresh = function () { var b = this, c = "offset", d = 0; this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), a.isWindow(this.$scrollElement[0]) || (c = "position", d = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function () { var b = a(this), e = b.data("target") || b.attr("href"), f = /^#./.test(e) && a(e); return f && f.length && f.is(":visible") && [[f[c]().top + d, e]] || null }).sort(function (a, b) { return a[0] - b[0] }).each(function () { b.offsets.push(this[0]), b.targets.push(this[1]) }) }, b.prototype.process = function () { var a, b = this.$scrollElement.scrollTop() + this.options.offset, c = this.getScrollHeight(), d = this.options.offset + c - this.$scrollElement.height(), e = this.offsets, f = this.targets, g = this.activeTarget; if (this.scrollHeight != c && this.refresh(), b >= d) return g != (a = f[f.length - 1]) && this.activate(a); if (g && b < e[0]) return this.activeTarget = null, this.clear(); for (a = e.length; a--;)g != f[a] && b >= e[a] && (void 0 === e[a + 1] || b < e[a + 1]) && this.activate(f[a]) }, b.prototype.activate = function (b) {
            this.activeTarget = b, this.clear(); var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]', d = a(c).parents("li").addClass("active"); d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate.bs.scrollspy")
        }, b.prototype.clear = function () { a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active") }; var d = a.fn.scrollspy; a.fn.scrollspy = c, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () { return a.fn.scrollspy = d, this }, a(window).on("load.bs.scrollspy.data-api", function () { a('[data-spy="scroll"]').each(function () { var b = a(this); c.call(b, b.data()) }) })
    }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var d = a(this), e = d.data("bs.tab"); e || d.data("bs.tab", e = new c(this)), "string" == typeof b && e[b]() }) } var c = function (b) { this.element = a(b) }; c.VERSION = "3.3.7", c.TRANSITION_DURATION = 150, c.prototype.show = function () { var b = this.element, c = b.closest("ul:not(.dropdown-menu)"), d = b.data("target"); if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) { var e = c.find(".active:last a"), f = a.Event("hide.bs.tab", { relatedTarget: b[0] }), g = a.Event("show.bs.tab", { relatedTarget: e[0] }); if (e.trigger(f), b.trigger(g), !g.isDefaultPrevented() && !f.isDefaultPrevented()) { var h = a(d); this.activate(b.closest("li"), c), this.activate(h, h.parent(), function () { e.trigger({ type: "hidden.bs.tab", relatedTarget: b[0] }), b.trigger({ type: "shown.bs.tab", relatedTarget: e[0] }) }) } } }, c.prototype.activate = function (b, d, e) { function f() { g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), h ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu").length && b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), e && e() } var g = d.find("> .active"), h = e && a.support.transition && (g.length && g.hasClass("fade") || !!d.find("> .fade").length); g.length && h ? g.one("bsTransitionEnd", f).emulateTransitionEnd(c.TRANSITION_DURATION) : f(), g.removeClass("in") }; var d = a.fn.tab; a.fn.tab = b, a.fn.tab.Constructor = c, a.fn.tab.noConflict = function () { return a.fn.tab = d, this }; var e = function (c) { c.preventDefault(), b.call(a(this), "show") }; a(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', e).on("click.bs.tab.data-api", '[data-toggle="pill"]', e) }(jQuery), +function (a) { "use strict"; function b(b) { return this.each(function () { var d = a(this), e = d.data("bs.affix"), f = "object" == typeof b && b; e || d.data("bs.affix", e = new c(this, f)), "string" == typeof b && e[b]() }) } var c = function (b, d) { this.options = a.extend({}, c.DEFAULTS, d), this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(b), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition() }; c.VERSION = "3.3.7", c.RESET = "affix affix-top affix-bottom", c.DEFAULTS = { offset: 0, target: window }, c.prototype.getState = function (a, b, c, d) { var e = this.$target.scrollTop(), f = this.$element.offset(), g = this.$target.height(); if (null != c && "top" == this.affixed) return e < c && "top"; if ("bottom" == this.affixed) return null != c ? !(e + this.unpin <= f.top) && "bottom" : !(e + g <= a - d) && "bottom"; var h = null == this.affixed, i = h ? e : f.top, j = h ? g : b; return null != c && e <= c ? "top" : null != d && i + j >= a - d && "bottom" }, c.prototype.getPinnedOffset = function () { if (this.pinnedOffset) return this.pinnedOffset; this.$element.removeClass(c.RESET).addClass("affix"); var a = this.$target.scrollTop(), b = this.$element.offset(); return this.pinnedOffset = b.top - a }, c.prototype.checkPositionWithEventLoop = function () { setTimeout(a.proxy(this.checkPosition, this), 1) }, c.prototype.checkPosition = function () { if (this.$element.is(":visible")) { var b = this.$element.height(), d = this.options.offset, e = d.top, f = d.bottom, g = Math.max(a(document).height(), a(document.body).height()); "object" != typeof d && (f = e = d), "function" == typeof e && (e = d.top(this.$element)), "function" == typeof f && (f = d.bottom(this.$element)); var h = this.getState(g, b, e, f); if (this.affixed != h) { null != this.unpin && this.$element.css("top", ""); var i = "affix" + (h ? "-" + h : ""), j = a.Event(i + ".bs.affix"); if (this.$element.trigger(j), j.isDefaultPrevented()) return; this.affixed = h, this.unpin = "bottom" == h ? this.getPinnedOffset() : null, this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix", "affixed") + ".bs.affix") } "bottom" == h && this.$element.offset({ top: g - b - f }) } }; var d = a.fn.affix; a.fn.affix = b, a.fn.affix.Constructor = c, a.fn.affix.noConflict = function () { return a.fn.affix = d, this }, a(window).on("load", function () { a('[data-spy="affix"]').each(function () { var c = a(this), d = c.data(); d.offset = d.offset || {}, null != d.offsetBottom && (d.offset.bottom = d.offsetBottom), null != d.offsetTop && (d.offset.top = d.offsetTop), b.call(c, d) }) }) }(jQuery);




    /*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */

    if (typeof jQuery === 'undefined') {
        throw new Error('Bootstrap\'s JavaScript requires jQuery')
    }

    +function ($) {
        'use strict';
        var version = $.fn.jquery.split(' ')[0].split('.')
        if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
            throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
        }
    }(jQuery);

    /* ========================================================================
         * Bootstrap: transition.js v3.3.7
         * http://getbootstrap.com/javascript/#transitions
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
        // ============================================================

        function transitionEnd() {
            var el = document.createElement('bootstrap')

            var transEndEventNames = {
                WebkitTransition: 'webkitTransitionEnd',
                MozTransition: 'transitionend',
                OTransition: 'oTransitionEnd otransitionend',
                transition: 'transitionend'
            }

            for (var name in transEndEventNames) {
                if (el.style[name] !== undefined) {
                    return { end: transEndEventNames[name] }
                }
            }

            return false // explicit for ie8 (  ._.)
        }

        // http://blog.alexmaccaw.com/css-transitions
        $.fn.emulateTransitionEnd = function (duration) {
            var called = false
            var $el = this
            $(this).one('bsTransitionEnd', function () { called = true })
            var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
            setTimeout(callback, duration)
            return this
        }

        $(function () {
            $.support.transition = transitionEnd()

            if (!$.support.transition) return

            $.event.special.bsTransitionEnd = {
                bindType: $.support.transition.end,
                delegateType: $.support.transition.end,
                handle: function (e) {
                    if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                }
            }
        })

    }(jQuery);

    /* ========================================================================
         * Bootstrap: alert.js v3.3.7
         * http://getbootstrap.com/javascript/#alerts
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // ALERT CLASS DEFINITION
        // ======================

        var dismiss = '[data-dismiss="alert"]'
        var Alert = function (el) {
            $(el).on('click', dismiss, this.close)
        }

        Alert.VERSION = '3.3.7'

        Alert.TRANSITION_DURATION = 150

        Alert.prototype.close = function (e) {
            var $this = $(this)
            var selector = $this.attr('data-target')

            if (!selector) {
                selector = $this.attr('href')
                selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
            }

            var $parent = $(selector === '#' ? [] : selector)

            if (e) e.preventDefault()

            if (!$parent.length) {
                $parent = $this.closest('.alert')
            }

            $parent.trigger(e = $.Event('close.bs.alert'))

            if (e.isDefaultPrevented()) return

            $parent.removeClass('in')

            function removeElement() {
                // detach from parent, fire event then clean up data
                $parent.detach().trigger('closed.bs.alert').remove()
            }

            $.support.transition && $parent.hasClass('fade') ?
                $parent
                    .one('bsTransitionEnd', removeElement)
                    .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
                removeElement()
        }


        // ALERT PLUGIN DEFINITION
        // =======================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.alert')

                if (!data) $this.data('bs.alert', (data = new Alert(this)))
                if (typeof option == 'string') data[option].call($this)
            })
        }

        var old = $.fn.alert

        $.fn.alert = Plugin
        $.fn.alert.Constructor = Alert


        // ALERT NO CONFLICT
        // =================

        $.fn.alert.noConflict = function () {
            $.fn.alert = old
            return this
        }


        // ALERT DATA-API
        // ==============

        $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

    }(jQuery);

    /* ========================================================================
         * Bootstrap: button.js v3.3.7
         * http://getbootstrap.com/javascript/#buttons
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // BUTTON PUBLIC CLASS DEFINITION
        // ==============================

        var Button = function (element, options) {
            this.$element = $(element)
            this.options = $.extend({}, Button.DEFAULTS, options)
            this.isLoading = false
        }

        Button.VERSION = '3.3.7'

        Button.DEFAULTS = {
            loadingText: 'loading...'
        }

        Button.prototype.setState = function (state) {
            var d = 'disabled'
            var $el = this.$element
            var val = $el.is('input') ? 'val' : 'html'
            var data = $el.data()

            state += 'Text'

            if (data.resetText == null) $el.data('resetText', $el[val]())

            // push to event loop to allow forms to submit
            setTimeout($.proxy(function () {
                $el[val](data[state] == null ? this.options[state] : data[state])

                if (state == 'loadingText') {
                    this.isLoading = true
                    $el.addClass(d).attr(d, d).prop(d, true)
                } else if (this.isLoading) {
                    this.isLoading = false
                    $el.removeClass(d).removeAttr(d).prop(d, false)
                }
            }, this), 0)
        }

        Button.prototype.toggle = function () {
            var changed = true
            var $parent = this.$element.closest('[data-toggle="buttons"]')

            if ($parent.length) {
                var $input = this.$element.find('input')
                if ($input.prop('type') == 'radio') {
                    if ($input.prop('checked')) changed = false
                    $parent.find('.active').removeClass('active')
                    this.$element.addClass('active')
                } else if ($input.prop('type') == 'checkbox') {
                    if (($input.prop('checked')) !== this.$element.hasClass('active')) changed = false
                    this.$element.toggleClass('active')
                }
                $input.prop('checked', this.$element.hasClass('active'))
                if (changed) $input.trigger('change')
            } else {
                this.$element.attr('aria-pressed', !this.$element.hasClass('active'))
                this.$element.toggleClass('active')
            }
        }


        // BUTTON PLUGIN DEFINITION
        // ========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.button')
                var options = typeof option == 'object' && option

                if (!data) $this.data('bs.button', (data = new Button(this, options)))

                if (option == 'toggle') data.toggle()
                else if (option) data.setState(option)
            })
        }

        var old = $.fn.button

        $.fn.button = Plugin
        $.fn.button.Constructor = Button


        // BUTTON NO CONFLICT
        // ==================

        $.fn.button.noConflict = function () {
            $.fn.button = old
            return this
        }


        // BUTTON DATA-API
        // ===============

        $(document)
            .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
                var $btn = $(e.target).closest('.btn')
                Plugin.call($btn, 'toggle')
                if (!($(e.target).is('input[type="radio"], input[type="checkbox"]'))) {
                    // Prevent double click on radios, and the double selections (so cancellation) on checkboxes
                    e.preventDefault()
                    // The target component still receive the focus
                    if ($btn.is('input,button')) $btn.trigger('focus')
                    else $btn.find('input:visible,button:visible').first().trigger('focus')
                }
            })
            .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
                $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
            })

    }(jQuery);

    /* ========================================================================
         * Bootstrap: carousel.js v3.3.7
         * http://getbootstrap.com/javascript/#carousel
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // CAROUSEL CLASS DEFINITION
        // =========================

        var Carousel = function (element, options) {
            this.$element = $(element)
            this.$indicators = this.$element.find('.carousel-indicators')
            this.options = options
            this.paused = null
            this.sliding = null
            this.interval = null
            this.$active = null
            this.$items = null

            this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this))

            this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
                .on('mouseenter.bs.carousel', $.proxy(this.pause, this))
                .on('mouseleave.bs.carousel', $.proxy(this.cycle, this))
        }

        Carousel.VERSION = '3.3.7'

        Carousel.TRANSITION_DURATION = 600

        Carousel.DEFAULTS = {
            interval: 5000,
            pause: 'hover',
            wrap: true,
            keyboard: true
        }

        Carousel.prototype.keydown = function (e) {
            if (/input|textarea/i.test(e.target.tagName)) return
            switch (e.which) {
                case 37: this.prev(); break
                case 39: this.next(); break
                default: return
            }

            e.preventDefault()
        }

        Carousel.prototype.cycle = function (e) {
            e || (this.paused = false)

            this.interval && clearInterval(this.interval)

            this.options.interval
            && !this.paused
            && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))

            return this
        }

        Carousel.prototype.getItemIndex = function (item) {
            this.$items = item.parent().children('.item')
            return this.$items.index(item || this.$active)
        }

        Carousel.prototype.getItemForDirection = function (direction, active) {
            var activeIndex = this.getItemIndex(active)
            var willWrap = (direction == 'prev' && activeIndex === 0)
                || (direction == 'next' && activeIndex == (this.$items.length - 1))
            if (willWrap && !this.options.wrap) return active
            var delta = direction == 'prev' ? -1 : 1
            var itemIndex = (activeIndex + delta) % this.$items.length
            return this.$items.eq(itemIndex)
        }

        Carousel.prototype.to = function (pos) {
            var that = this
            var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'))

            if (pos > (this.$items.length - 1) || pos < 0) return

            if (this.sliding) return this.$element.one('slid.bs.carousel', function () { that.to(pos) }) // yes, "slid"
            if (activeIndex == pos) return this.pause().cycle()

            return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos))
        }

        Carousel.prototype.pause = function (e) {
            e || (this.paused = true)

            if (this.$element.find('.next, .prev').length && $.support.transition) {
                this.$element.trigger($.support.transition.end)
                this.cycle(true)
            }

            this.interval = clearInterval(this.interval)

            return this
        }

        Carousel.prototype.next = function () {
            if (this.sliding) return
            return this.slide('next')
        }

        Carousel.prototype.prev = function () {
            if (this.sliding) return
            return this.slide('prev')
        }

        Carousel.prototype.slide = function (type, next) {
            var $active = this.$element.find('.item.active')
            var $next = next || this.getItemForDirection(type, $active)
            var isCycling = this.interval
            var direction = type == 'next' ? 'left' : 'right'
            var that = this

            if ($next.hasClass('active')) return (this.sliding = false)

            var relatedTarget = $next[0]
            var slideEvent = $.Event('slide.bs.carousel', {
                relatedTarget: relatedTarget,
                direction: direction
            })
            this.$element.trigger(slideEvent)
            if (slideEvent.isDefaultPrevented()) return

            this.sliding = true

            isCycling && this.pause()

            if (this.$indicators.length) {
                this.$indicators.find('.active').removeClass('active')
                var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)])
                $nextIndicator && $nextIndicator.addClass('active')
            }

            var slidEvent = $.Event('slid.bs.carousel', { relatedTarget: relatedTarget, direction: direction }) // yes, "slid"
            if ($.support.transition && this.$element.hasClass('slide')) {
                $next.addClass(type)
                $next[0].offsetWidth // force reflow
                $active.addClass(direction)
                $next.addClass(direction)
                $active
                    .one('bsTransitionEnd', function () {
                        $next.removeClass([type, direction].join(' ')).addClass('active')
                        $active.removeClass(['active', direction].join(' '))
                        that.sliding = false
                        setTimeout(function () {
                            that.$element.trigger(slidEvent)
                        }, 0)
                    })
                    .emulateTransitionEnd(Carousel.TRANSITION_DURATION)
            } else {
                $active.removeClass('active')
                $next.addClass('active')
                this.sliding = false
                this.$element.trigger(slidEvent)
            }

            isCycling && this.cycle()

            return this
        }


        // CAROUSEL PLUGIN DEFINITION
        // ==========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.carousel')
                var options = $.extend({}, Carousel.DEFAULTS, $this.data(), typeof option == 'object' && option)
                var action = typeof option == 'string' ? option : options.slide

                if (!data) $this.data('bs.carousel', (data = new Carousel(this, options)))
                if (typeof option == 'number') data.to(option)
                else if (action) data[action]()
                else if (options.interval) data.pause().cycle()
            })
        }

        var old = $.fn.carousel

        $.fn.carousel = Plugin
        $.fn.carousel.Constructor = Carousel


        // CAROUSEL NO CONFLICT
        // ====================

        $.fn.carousel.noConflict = function () {
            $.fn.carousel = old
            return this
        }


        // CAROUSEL DATA-API
        // =================

        var clickHandler = function (e) {
            var href
            var $this = $(this)
            var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) // strip for ie7
            if (!$target.hasClass('carousel')) return
            var options = $.extend({}, $target.data(), $this.data())
            var slideIndex = $this.attr('data-slide-to')
            if (slideIndex) options.interval = false

            Plugin.call($target, options)

            if (slideIndex) {
                $target.data('bs.carousel').to(slideIndex)
            }

            e.preventDefault()
        }

        $(document)
            .on('click.bs.carousel.data-api', '[data-slide]', clickHandler)
            .on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler)

        $(window).on('load', function () {
            $('[data-ride="carousel"]').each(function () {
                var $carousel = $(this)
                Plugin.call($carousel, $carousel.data())
            })
        })

    }(jQuery);

    /* ========================================================================
         * Bootstrap: collapse.js v3.3.7
         * http://getbootstrap.com/javascript/#collapse
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */

    /* jshint latedef: false */

    +function ($) {
        'use strict';

        // COLLAPSE PUBLIC CLASS DEFINITION
        // ================================

        var Collapse = function (element, options) {
            this.$element = $(element)
            this.options = $.extend({}, Collapse.DEFAULTS, options)
            this.$trigger = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                '[data-toggle="collapse"][data-target="#' + element.id + '"]')
            this.transitioning = null

            if (this.options.parent) {
                this.$parent = this.getParent()
            } else {
                this.addAriaAndCollapsedClass(this.$element, this.$trigger)
            }

            if (this.options.toggle) this.toggle()
        }

        Collapse.VERSION = '3.3.7'

        Collapse.TRANSITION_DURATION = 350

        Collapse.DEFAULTS = {
            toggle: true
        }

        Collapse.prototype.dimension = function () {
            var hasWidth = this.$element.hasClass('width')
            return hasWidth ? 'width' : 'height'
        }

        Collapse.prototype.show = function () {
            if (this.transitioning || this.$element.hasClass('in')) return

            var activesData
            var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

            if (actives && actives.length) {
                activesData = actives.data('bs.collapse')
                if (activesData && activesData.transitioning) return
            }

            var startEvent = $.Event('show.bs.collapse')
            this.$element.trigger(startEvent)
            if (startEvent.isDefaultPrevented()) return

            if (actives && actives.length) {
                Plugin.call(actives, 'hide')
                activesData || actives.data('bs.collapse', null)
            }

            var dimension = this.dimension()

            this.$element
                .removeClass('collapse')
                .addClass('collapsing')[dimension](0)
                .attr('aria-expanded', true)

            this.$trigger
                .removeClass('collapsed')
                .attr('aria-expanded', true)

            this.transitioning = 1

            var complete = function () {
                this.$element
                    .removeClass('collapsing')
                    .addClass('collapse in')[dimension]('')
                this.transitioning = 0
                this.$element
                    .trigger('shown.bs.collapse')
            }

            if (!$.support.transition) return complete.call(this)

            var scrollSize = $.camelCase(['scroll', dimension].join('-'))

            this.$element
                .one('bsTransitionEnd', $.proxy(complete, this))
                .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
        }

        Collapse.prototype.hide = function () {
            if (this.transitioning || !this.$element.hasClass('in')) return

            var startEvent = $.Event('hide.bs.collapse')
            this.$element.trigger(startEvent)
            if (startEvent.isDefaultPrevented()) return

            var dimension = this.dimension()

            this.$element[dimension](this.$element[dimension]())[0].offsetHeight

            this.$element
                .addClass('collapsing')
                .removeClass('collapse in')
                .attr('aria-expanded', false)

            this.$trigger
                .addClass('collapsed')
                .attr('aria-expanded', false)

            this.transitioning = 1

            var complete = function () {
                this.transitioning = 0
                this.$element
                    .removeClass('collapsing')
                    .addClass('collapse')
                    .trigger('hidden.bs.collapse')
            }

            if (!$.support.transition) return complete.call(this)

            this.$element
                [dimension](0)
                .one('bsTransitionEnd', $.proxy(complete, this))
                .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
        }

        Collapse.prototype.toggle = function () {
            this[this.$element.hasClass('in') ? 'hide' : 'show']()
        }

        Collapse.prototype.getParent = function () {
            return $(this.options.parent)
                .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
                .each($.proxy(function (i, element) {
                    var $element = $(element)
                    this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
                }, this))
                .end()
        }

        Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
            var isOpen = $element.hasClass('in')

            $element.attr('aria-expanded', isOpen)
            $trigger
                .toggleClass('collapsed', !isOpen)
                .attr('aria-expanded', isOpen)
        }

        function getTargetFromTrigger($trigger) {
            var href
            var target = $trigger.attr('data-target')
                || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

            return $(target)
        }


        // COLLAPSE PLUGIN DEFINITION
        // ==========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.collapse')
                var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

                if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
                if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }

        var old = $.fn.collapse

        $.fn.collapse = Plugin
        $.fn.collapse.Constructor = Collapse


        // COLLAPSE NO CONFLICT
        // ====================

        $.fn.collapse.noConflict = function () {
            $.fn.collapse = old
            return this
        }


        // COLLAPSE DATA-API
        // =================

        $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
            var $this = $(this)

            if (!$this.attr('data-target')) e.preventDefault()

            var $target = getTargetFromTrigger($this)
            var data = $target.data('bs.collapse')
            var option = data ? 'toggle' : $this.data()

            Plugin.call($target, option)
        })

    }(jQuery);

    /* ========================================================================
         * Bootstrap: dropdown.js v3.3.7
         * http://getbootstrap.com/javascript/#dropdowns
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // DROPDOWN CLASS DEFINITION
        // =========================

        var backdrop = '.dropdown-backdrop'
        var toggle = '[data-toggle="dropdown"]'
        var Dropdown = function (element) {
            $(element).on('click.bs.dropdown', this.toggle)
        }

        Dropdown.VERSION = '3.3.7'

        function getParent($this) {
            var selector = $this.attr('data-target')

            if (!selector) {
                selector = $this.attr('href')
                selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
            }

            var $parent = selector && $(selector)

            return $parent && $parent.length ? $parent : $this.parent()
        }

        function clearMenus(e) {
            if (e && e.which === 3) return
            $(backdrop).remove()
            $(toggle).each(function () {
                var $this = $(this)
                var $parent = getParent($this)
                var relatedTarget = { relatedTarget: this }

                if (!$parent.hasClass('open')) return

                if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

                $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

                if (e.isDefaultPrevented()) return

                $this.attr('aria-expanded', 'false')
                $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
            })
        }

        Dropdown.prototype.toggle = function (e) {
            var $this = $(this)

            if ($this.is('.disabled, :disabled')) return

            var $parent = getParent($this)
            var isActive = $parent.hasClass('open')

            clearMenus()

            if (!isActive) {
                if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
                    // if mobile we use a backdrop because click events don't delegate
                    $(document.createElement('div'))
                        .addClass('dropdown-backdrop')
                        .insertAfter($(this))
                        .on('click', clearMenus)
                }

                var relatedTarget = { relatedTarget: this }
                $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

                if (e.isDefaultPrevented()) return

                $this
                    .trigger('focus')
                    .attr('aria-expanded', 'true')

                $parent
                    .toggleClass('open')
                    .trigger($.Event('shown.bs.dropdown', relatedTarget))
            }

            return false
        }

        Dropdown.prototype.keydown = function (e) {
            if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

            var $this = $(this)

            e.preventDefault()
            e.stopPropagation()

            if ($this.is('.disabled, :disabled')) return

            var $parent = getParent($this)
            var isActive = $parent.hasClass('open')

            if (!isActive && e.which != 27 || isActive && e.which == 27) {
                if (e.which == 27) $parent.find(toggle).trigger('focus')
                return $this.trigger('click')
            }

            var desc = ' li:not(.disabled):visible a'
            var $items = $parent.find('.dropdown-menu' + desc)

            if (!$items.length) return

            var index = $items.index(e.target)

            if (e.which == 38 && index > 0) index--         // up
            if (e.which == 40 && index < $items.length - 1) index++         // down
            if (!~index) index = 0

            $items.eq(index).trigger('focus')
        }


        // DROPDOWN PLUGIN DEFINITION
        // ==========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.dropdown')

                if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
                if (typeof option == 'string') data[option].call($this)
            })
        }

        var old = $.fn.dropdown

        $.fn.dropdown = Plugin
        $.fn.dropdown.Constructor = Dropdown


        // DROPDOWN NO CONFLICT
        // ====================

        $.fn.dropdown.noConflict = function () {
            $.fn.dropdown = old
            return this
        }


        // APPLY TO STANDARD DROPDOWN ELEMENTS
        // ===================================

        $(document)
            .on('click.bs.dropdown.data-api', clearMenus)
            .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
            .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
            .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
            .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

    }(jQuery);

    /* ========================================================================
         * Bootstrap: modal.js v3.3.7
         * http://getbootstrap.com/javascript/#modals
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // MODAL CLASS DEFINITION
        // ======================

        var Modal = function (element, options) {
            this.options = options
            this.$body = $(document.body)
            this.$element = $(element)
            this.$dialog = this.$element.find('.modal-dialog')
            this.$backdrop = null
            this.isShown = null
            this.originalBodyPad = null
            this.scrollbarWidth = 0
            this.ignoreBackdropClick = false

            if (this.options.remote) {
                this.$element
                    .find('.modal-content')
                    .load(this.options.remote, $.proxy(function () {
                        this.$element.trigger('loaded.bs.modal')
                    }, this))
            }
        }

        Modal.VERSION = '3.3.7'

        Modal.TRANSITION_DURATION = 300
        Modal.BACKDROP_TRANSITION_DURATION = 150

        Modal.DEFAULTS = {
            backdrop: true,
            keyboard: true,
            show: true
        }

        Modal.prototype.toggle = function (_relatedTarget) {
            return this.isShown ? this.hide() : this.show(_relatedTarget)
        }

        Modal.prototype.show = function (_relatedTarget) {
            var that = this
            var e = $.Event('show.bs.modal', { relatedTarget: _relatedTarget })

            this.$element.trigger(e)

            if (this.isShown || e.isDefaultPrevented()) return

            this.isShown = true

            this.checkScrollbar()
            this.setScrollbar()
            this.$body.addClass('modal-open')

            this.escape()
            this.resize()

            this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this))

            this.$dialog.on('mousedown.dismiss.bs.modal', function () {
                that.$element.one('mouseup.dismiss.bs.modal', function (e) {
                    if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
                })
            })

            this.backdrop(function () {
                var transition = $.support.transition && that.$element.hasClass('fade')

                if (!that.$element.parent().length) {
                    that.$element.appendTo(that.$body) // don't move modals dom position
                }

                that.$element
                    .show()
                    .scrollTop(0)

                that.adjustDialog()

                if (transition) {
                    that.$element[0].offsetWidth // force reflow
                }

                that.$element.addClass('in')

                that.enforceFocus()

                var e = $.Event('shown.bs.modal', { relatedTarget: _relatedTarget })

                transition ?
                    that.$dialog // wait for modal to slide in
                        .one('bsTransitionEnd', function () {
                            that.$element.trigger('focus').trigger(e)
                        })
                        .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
                    that.$element.trigger('focus').trigger(e)
            })
        }

        Modal.prototype.hide = function (e) {
            if (e) e.preventDefault()

            e = $.Event('hide.bs.modal')

            this.$element.trigger(e)

            if (!this.isShown || e.isDefaultPrevented()) return

            this.isShown = false

            this.escape()
            this.resize()

            $(document).off('focusin.bs.modal')

            this.$element
                .removeClass('in')
                .off('click.dismiss.bs.modal')
                .off('mouseup.dismiss.bs.modal')

            this.$dialog.off('mousedown.dismiss.bs.modal')

            $.support.transition && this.$element.hasClass('fade') ?
                this.$element
                    .one('bsTransitionEnd', $.proxy(this.hideModal, this))
                    .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
                this.hideModal()
        }

        Modal.prototype.enforceFocus = function () {
            $(document)
                .off('focusin.bs.modal') // guard against infinite focus loop
                .on('focusin.bs.modal', $.proxy(function (e) {
                    if (document !== e.target &&
                        this.$element[0] !== e.target &&
                        !this.$element.has(e.target).length) {
                        this.$element.trigger('focus')
                    }
                }, this))
        }

        Modal.prototype.escape = function () {
            if (this.isShown && this.options.keyboard) {
                this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
                    e.which == 27 && this.hide()
                }, this))
            } else if (!this.isShown) {
                this.$element.off('keydown.dismiss.bs.modal')
            }
        }

        Modal.prototype.resize = function () {
            if (this.isShown) {
                $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this))
            } else {
                $(window).off('resize.bs.modal')
            }
        }

        Modal.prototype.hideModal = function () {
            var that = this
            this.$element.hide()
            this.backdrop(function () {
                that.$body.removeClass('modal-open')
                that.resetAdjustments()
                that.resetScrollbar()
                that.$element.trigger('hidden.bs.modal')
            })
        }

        Modal.prototype.removeBackdrop = function () {
            this.$backdrop && this.$backdrop.remove()
            this.$backdrop = null
        }

        Modal.prototype.backdrop = function (callback) {
            var that = this
            var animate = this.$element.hasClass('fade') ? 'fade' : ''

            if (this.isShown && this.options.backdrop) {
                var doAnimate = $.support.transition && animate

                this.$backdrop = $(document.createElement('div'))
                    .addClass('modal-backdrop ' + animate)
                    .appendTo(this.$body)

                this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
                    if (this.ignoreBackdropClick) {
                        this.ignoreBackdropClick = false
                        return
                    }
                    if (e.target !== e.currentTarget) return
                    this.options.backdrop == 'static'
                        ? this.$element[0].focus()
                        : this.hide()
                }, this))

                if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

                this.$backdrop.addClass('in')

                if (!callback) return

                doAnimate ?
                    this.$backdrop
                        .one('bsTransitionEnd', callback)
                        .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
                    callback()

            } else if (!this.isShown && this.$backdrop) {
                this.$backdrop.removeClass('in')

                var callbackRemove = function () {
                    that.removeBackdrop()
                    callback && callback()
                }
                $.support.transition && this.$element.hasClass('fade') ?
                    this.$backdrop
                        .one('bsTransitionEnd', callbackRemove)
                        .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
                    callbackRemove()

            } else if (callback) {
                callback()
            }
        }

        // these following methods are used to handle overflowing modals

        Modal.prototype.handleUpdate = function () {
            this.adjustDialog()
        }

        Modal.prototype.adjustDialog = function () {
            var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

            this.$element.css({
                paddingLeft: !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
                paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
            })
        }

        Modal.prototype.resetAdjustments = function () {
            this.$element.css({
                paddingLeft: '',
                paddingRight: ''
            })
        }

        Modal.prototype.checkScrollbar = function () {
            var fullWindowWidth = window.innerWidth
            if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
                var documentElementRect = document.documentElement.getBoundingClientRect()
                fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
            }
            this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
            this.scrollbarWidth = this.measureScrollbar()
        }

        Modal.prototype.setScrollbar = function () {
            var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
            this.originalBodyPad = document.body.style.paddingRight || ''
            if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
        }

        Modal.prototype.resetScrollbar = function () {
            this.$body.css('padding-right', this.originalBodyPad)
        }

        Modal.prototype.measureScrollbar = function () { // thx walsh
            var scrollDiv = document.createElement('div')
            scrollDiv.className = 'modal-scrollbar-measure'
            this.$body.append(scrollDiv)
            var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
            this.$body[0].removeChild(scrollDiv)
            return scrollbarWidth
        }


        // MODAL PLUGIN DEFINITION
        // =======================

        function Plugin(option, _relatedTarget) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.modal')
                var options = $.extend({}, Modal.DEFAULTS, $this.data(), typeof option == 'object' && option)

                if (!data) $this.data('bs.modal', (data = new Modal(this, options)))
                if (typeof option == 'string') data[option](_relatedTarget)
                else if (options.show) data.show(_relatedTarget)
            })
        }

        var old = $.fn.modal

        $.fn.modal = Plugin
        $.fn.modal.Constructor = Modal


        // MODAL NO CONFLICT
        // =================

        $.fn.modal.noConflict = function () {
            $.fn.modal = old
            return this
        }


        // MODAL DATA-API
        // ==============

        $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
            var $this = $(this)
            var href = $this.attr('href')
            var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
            var option = $target.data('bs.modal') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

            if ($this.is('a')) e.preventDefault()

            $target.one('show.bs.modal', function (showEvent) {
                if (showEvent.isDefaultPrevented()) return // only register focus restorer if modal will actually get shown
                $target.one('hidden.bs.modal', function () {
                    $this.is(':visible') && $this.trigger('focus')
                })
            })
            Plugin.call($target, option, this)
        })

    }(jQuery);

    /* ========================================================================
         * Bootstrap: tooltip.js v3.3.7
         * http://getbootstrap.com/javascript/#tooltip
         * Inspired by the original jQuery.tipsy by Jason Frame
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // TOOLTIP PUBLIC CLASS DEFINITION
        // ===============================

        var Tooltip = function (element, options) {
            this.type = null
            this.options = null
            this.enabled = null
            this.timeout = null
            this.hoverState = null
            this.$element = null
            this.inState = null

            this.init('tooltip', element, options)
        }

        Tooltip.VERSION = '3.3.7'

        Tooltip.TRANSITION_DURATION = 150

        Tooltip.DEFAULTS = {
            animation: true,
            placement: 'top',
            selector: false,
            template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            trigger: 'hover focus',
            title: '',
            delay: 0,
            html: false,
            container: false,
            viewport: {
                selector: 'body',
                padding: 0
            }
        }

        Tooltip.prototype.init = function (type, element, options) {
            this.enabled = true
            this.type = type
            this.$element = $(element)
            this.options = this.getOptions(options)
            this.$viewport = this.options.viewport && $($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : (this.options.viewport.selector || this.options.viewport))
            this.inState = { click: false, hover: false, focus: false }

            if (this.$element[0] instanceof document.constructor && !this.options.selector) {
                throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!')
            }

            var triggers = this.options.trigger.split(' ')

            for (var i = triggers.length; i--;) {
                var trigger = triggers[i]

                if (trigger == 'click') {
                    this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
                } else if (trigger != 'manual') {
                    var eventIn = trigger == 'hover' ? 'mouseenter' : 'focusin'
                    var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout'

                    this.$element.on(eventIn + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
                    this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
                }
            }

            this.options.selector ?
                (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
                this.fixTitle()
        }

        Tooltip.prototype.getDefaults = function () {
            return Tooltip.DEFAULTS
        }

        Tooltip.prototype.getOptions = function (options) {
            options = $.extend({}, this.getDefaults(), this.$element.data(), options)

            if (options.delay && typeof options.delay == 'number') {
                options.delay = {
                    show: options.delay,
                    hide: options.delay
                }
            }

            return options
        }

        Tooltip.prototype.getDelegateOptions = function () {
            var options = {}
            var defaults = this.getDefaults()

            this._options && $.each(this._options, function (key, value) {
                if (defaults[key] != value) options[key] = value
            })

            return options
        }

        Tooltip.prototype.enter = function (obj) {
            var self = obj instanceof this.constructor ?
                obj : $(obj.currentTarget).data('bs.' + this.type)

            if (!self) {
                self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
                $(obj.currentTarget).data('bs.' + this.type, self)
            }

            if (obj instanceof $.Event) {
                self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true
            }

            if (self.tip().hasClass('in') || self.hoverState == 'in') {
                self.hoverState = 'in'
                return
            }

            clearTimeout(self.timeout)

            self.hoverState = 'in'

            if (!self.options.delay || !self.options.delay.show) return self.show()

            self.timeout = setTimeout(function () {
                if (self.hoverState == 'in') self.show()
            }, self.options.delay.show)
        }

        Tooltip.prototype.isInStateTrue = function () {
            for (var key in this.inState) {
                if (this.inState[key]) return true
            }

            return false
        }

        Tooltip.prototype.leave = function (obj) {
            var self = obj instanceof this.constructor ?
                obj : $(obj.currentTarget).data('bs.' + this.type)

            if (!self) {
                self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
                $(obj.currentTarget).data('bs.' + this.type, self)
            }

            if (obj instanceof $.Event) {
                self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false
            }

            if (self.isInStateTrue()) return

            clearTimeout(self.timeout)

            self.hoverState = 'out'

            if (!self.options.delay || !self.options.delay.hide) return self.hide()

            self.timeout = setTimeout(function () {
                if (self.hoverState == 'out') self.hide()
            }, self.options.delay.hide)
        }

        Tooltip.prototype.show = function () {
            var e = $.Event('show.bs.' + this.type)

            if (this.hasContent() && this.enabled) {
                this.$element.trigger(e)

                var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0])
                if (e.isDefaultPrevented() || !inDom) return
                var that = this

                var $tip = this.tip()

                var tipId = this.getUID(this.type)

                this.setContent()
                $tip.attr('id', tipId)
                this.$element.attr('aria-describedby', tipId)

                if (this.options.animation) $tip.addClass('fade')

                var placement = typeof this.options.placement == 'function' ?
                    this.options.placement.call(this, $tip[0], this.$element[0]) :
                    this.options.placement

                var autoToken = /\s?auto?\s?/i
                var autoPlace = autoToken.test(placement)
                if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

                $tip
                    .detach()
                    .css({ top: 0, left: 0, display: 'block' })
                    .addClass(placement)
                    .data('bs.' + this.type, this)

                this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element)
                this.$element.trigger('inserted.bs.' + this.type)

                var pos = this.getPosition()
                var actualWidth = $tip[0].offsetWidth
                var actualHeight = $tip[0].offsetHeight

                if (autoPlace) {
                    var orgPlacement = placement
                    var viewportDim = this.getPosition(this.$viewport)

                    placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top' :
                        placement == 'top' && pos.top - actualHeight < viewportDim.top ? 'bottom' :
                            placement == 'right' && pos.right + actualWidth > viewportDim.width ? 'left' :
                                placement == 'left' && pos.left - actualWidth < viewportDim.left ? 'right' :
                                    placement

                    $tip
                        .removeClass(orgPlacement)
                        .addClass(placement)
                }

                var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

                this.applyPlacement(calculatedOffset, placement)

                var complete = function () {
                    var prevHoverState = that.hoverState
                    that.$element.trigger('shown.bs.' + that.type)
                    that.hoverState = null

                    if (prevHoverState == 'out') that.leave(that)
                }

                $.support.transition && this.$tip.hasClass('fade') ?
                    $tip
                        .one('bsTransitionEnd', complete)
                        .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
                    complete()
            }
        }

        Tooltip.prototype.applyPlacement = function (offset, placement) {
            var $tip = this.tip()
            var width = $tip[0].offsetWidth
            var height = $tip[0].offsetHeight

            // manually read margins because getBoundingClientRect includes difference
            var marginTop = parseInt($tip.css('margin-top'), 10)
            var marginLeft = parseInt($tip.css('margin-left'), 10)

            // we must check for NaN for ie 8/9
            if (isNaN(marginTop)) marginTop = 0
            if (isNaN(marginLeft)) marginLeft = 0

            offset.top += marginTop
            offset.left += marginLeft

            // $.fn.offset doesn't round pixel values
            // so we use setOffset directly with our own function B-0
            $.offset.setOffset($tip[0], $.extend({
                using: function (props) {
                    $tip.css({
                        top: Math.round(props.top),
                        left: Math.round(props.left)
                    })
                }
            }, offset), 0)

            $tip.addClass('in')

            // check to see if placing tip in new offset caused the tip to resize itself
            var actualWidth = $tip[0].offsetWidth
            var actualHeight = $tip[0].offsetHeight

            if (placement == 'top' && actualHeight != height) {
                offset.top = offset.top + height - actualHeight
            }

            var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight)

            if (delta.left) offset.left += delta.left
            else offset.top += delta.top

            var isVertical = /top|bottom/.test(placement)
            var arrowDelta = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight
            var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight'

            $tip.offset(offset)
            this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical)
        }

        Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
            this.arrow()
                .css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%')
                .css(isVertical ? 'top' : 'left', '')
        }

        Tooltip.prototype.setContent = function () {
            var $tip = this.tip()
            var title = this.getTitle()

            $tip.find('.tooltip-inner')[this.options.html ? 'html' : 'text'](title)
            $tip.removeClass('fade in top bottom left right')
        }

        Tooltip.prototype.hide = function (callback) {
            var that = this
            var $tip = $(this.$tip)
            var e = $.Event('hide.bs.' + this.type)

            function complete() {
                if (that.hoverState != 'in') $tip.detach()
                if (that.$element) { // TODO: Check whether guarding this code with this `if` is really necessary.
                    that.$element
                        .removeAttr('aria-describedby')
                        .trigger('hidden.bs.' + that.type)
                }
                callback && callback()
            }

            this.$element.trigger(e)

            if (e.isDefaultPrevented()) return

            $tip.removeClass('in')

            $.support.transition && $tip.hasClass('fade') ?
                $tip
                    .one('bsTransitionEnd', complete)
                    .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
                complete()

            this.hoverState = null

            return this
        }

        Tooltip.prototype.fixTitle = function () {
            var $e = this.$element
            if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
                $e.attr('data-original-title', $e.attr('title') || '').attr('title', '')
            }
        }

        Tooltip.prototype.hasContent = function () {
            return this.getTitle()
        }

        Tooltip.prototype.getPosition = function ($element) {
            $element = $element || this.$element

            var el = $element[0]
            var isBody = el.tagName == 'BODY'

            var elRect = el.getBoundingClientRect()
            if (elRect.width == null) {
                // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
                elRect = $.extend({}, elRect, { width: elRect.right - elRect.left, height: elRect.bottom - elRect.top })
            }
            var isSvg = window.SVGElement && el instanceof window.SVGElement
            // Avoid using $.offset() on SVGs since it gives incorrect results in jQuery 3.
            // See https://github.com/twbs/bootstrap/issues/20280
            var elOffset = isBody ? { top: 0, left: 0 } : (isSvg ? null : $element.offset())
            var scroll = { scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop() }
            var outerDims = isBody ? { width: $(window).width(), height: $(window).height() } : null

            return $.extend({}, elRect, scroll, outerDims, elOffset)
        }

        Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
            return placement == 'bottom' ? { top: pos.top + pos.height, left: pos.left + pos.width / 2 - actualWidth / 2 } :
                placement == 'top' ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2 } :
                    placement == 'left' ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
                        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width }

        }

        Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
            var delta = { top: 0, left: 0 }
            if (!this.$viewport) return delta

            var viewportPadding = this.options.viewport && this.options.viewport.padding || 0
            var viewportDimensions = this.getPosition(this.$viewport)

            if (/right|left/.test(placement)) {
                var topEdgeOffset = pos.top - viewportPadding - viewportDimensions.scroll
                var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight
                if (topEdgeOffset < viewportDimensions.top) { // top overflow
                    delta.top = viewportDimensions.top - topEdgeOffset
                } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) { // bottom overflow
                    delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset
                }
            } else {
                var leftEdgeOffset = pos.left - viewportPadding
                var rightEdgeOffset = pos.left + viewportPadding + actualWidth
                if (leftEdgeOffset < viewportDimensions.left) { // left overflow
                    delta.left = viewportDimensions.left - leftEdgeOffset
                } else if (rightEdgeOffset > viewportDimensions.right) { // right overflow
                    delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset
                }
            }

            return delta
        }

        Tooltip.prototype.getTitle = function () {
            var title
            var $e = this.$element
            var o = this.options

            title = $e.attr('data-original-title')
                || (typeof o.title == 'function' ? o.title.call($e[0]) : o.title)

            return title
        }

        Tooltip.prototype.getUID = function (prefix) {
            do prefix += ~~(Math.random() * 1000000)
            while (document.getElementById(prefix))
            return prefix
        }

        Tooltip.prototype.tip = function () {
            if (!this.$tip) {
                this.$tip = $(this.options.template)
                if (this.$tip.length != 1) {
                    throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!')
                }
            }
            return this.$tip
        }

        Tooltip.prototype.arrow = function () {
            return (this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow'))
        }

        Tooltip.prototype.enable = function () {
            this.enabled = true
        }

        Tooltip.prototype.disable = function () {
            this.enabled = false
        }

        Tooltip.prototype.toggleEnabled = function () {
            this.enabled = !this.enabled
        }

        Tooltip.prototype.toggle = function (e) {
            var self = this
            if (e) {
                self = $(e.currentTarget).data('bs.' + this.type)
                if (!self) {
                    self = new this.constructor(e.currentTarget, this.getDelegateOptions())
                    $(e.currentTarget).data('bs.' + this.type, self)
                }
            }

            if (e) {
                self.inState.click = !self.inState.click
                if (self.isInStateTrue()) self.enter(self)
                else self.leave(self)
            } else {
                self.tip().hasClass('in') ? self.leave(self) : self.enter(self)
            }
        }

        Tooltip.prototype.destroy = function () {
            var that = this
            clearTimeout(this.timeout)
            this.hide(function () {
                that.$element.off('.' + that.type).removeData('bs.' + that.type)
                if (that.$tip) {
                    that.$tip.detach()
                }
                that.$tip = null
                that.$arrow = null
                that.$viewport = null
                that.$element = null
            })
        }


        // TOOLTIP PLUGIN DEFINITION
        // =========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.tooltip')
                var options = typeof option == 'object' && option

                if (!data && /destroy|hide/.test(option)) return
                if (!data) $this.data('bs.tooltip', (data = new Tooltip(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }

        var old = $.fn.tooltip

        $.fn.tooltip = Plugin
        $.fn.tooltip.Constructor = Tooltip


        // TOOLTIP NO CONFLICT
        // ===================

        $.fn.tooltip.noConflict = function () {
            $.fn.tooltip = old
            return this
        }

    }(jQuery);

    /* ========================================================================
         * Bootstrap: popover.js v3.3.7
         * http://getbootstrap.com/javascript/#popovers
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // POPOVER PUBLIC CLASS DEFINITION
        // ===============================

        var Popover = function (element, options) {
            this.init('popover', element, options)
        }

        if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js')

        Popover.VERSION = '3.3.7'

        Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
            placement: 'right',
            trigger: 'click',
            content: '',
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
        })


        // NOTE: POPOVER EXTENDS tooltip.js
        // ================================

        Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype)

        Popover.prototype.constructor = Popover

        Popover.prototype.getDefaults = function () {
            return Popover.DEFAULTS
        }

        Popover.prototype.setContent = function () {
            var $tip = this.tip()
            var title = this.getTitle()
            var content = this.getContent()

            $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
            $tip.find('.popover-content').children().detach().end()[ // we use append for html objects to maintain js events
                this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
                ](content)

            $tip.removeClass('fade top bottom left right in')

            // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
            // this manually by checking the contents.
            if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide()
        }

        Popover.prototype.hasContent = function () {
            return this.getTitle() || this.getContent()
        }

        Popover.prototype.getContent = function () {
            var $e = this.$element
            var o = this.options

            return $e.attr('data-content')
                || (typeof o.content == 'function' ?
                    o.content.call($e[0]) :
                    o.content)
        }

        Popover.prototype.arrow = function () {
            return (this.$arrow = this.$arrow || this.tip().find('.arrow'))
        }


        // POPOVER PLUGIN DEFINITION
        // =========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.popover')
                var options = typeof option == 'object' && option

                if (!data && /destroy|hide/.test(option)) return
                if (!data) $this.data('bs.popover', (data = new Popover(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }

        var old = $.fn.popover

        $.fn.popover = Plugin
        $.fn.popover.Constructor = Popover


        // POPOVER NO CONFLICT
        // ===================

        $.fn.popover.noConflict = function () {
            $.fn.popover = old
            return this
        }

    }(jQuery);

    /* ========================================================================
         * Bootstrap: scrollspy.js v3.3.7
         * http://getbootstrap.com/javascript/#scrollspy
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // SCROLLSPY CLASS DEFINITION
        // ==========================

        function ScrollSpy(element, options) {
            this.$body = $(document.body)
            this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
            this.options = $.extend({}, ScrollSpy.DEFAULTS, options)
            this.selector = (this.options.target || '') + ' .nav li > a'
            this.offsets = []
            this.targets = []
            this.activeTarget = null
            this.scrollHeight = 0

            this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this))
            this.refresh()
            this.process()
        }

        ScrollSpy.VERSION = '3.3.7'

        ScrollSpy.DEFAULTS = {
            offset: 10
        }

        ScrollSpy.prototype.getScrollHeight = function () {
            return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
        }

        ScrollSpy.prototype.refresh = function () {
            var that = this
            var offsetMethod = 'offset'
            var offsetBase = 0

            this.offsets = []
            this.targets = []
            this.scrollHeight = this.getScrollHeight()

            if (!$.isWindow(this.$scrollElement[0])) {
                offsetMethod = 'position'
                offsetBase = this.$scrollElement.scrollTop()
            }

            this.$body
                .find(this.selector)
                .map(function () {
                    var $el = $(this)
                    var href = $el.data('target') || $el.attr('href')
                    var $href = /^#./.test(href) && $(href)

                    return ($href
                        && $href.length
                        && $href.is(':visible')
                        && [[$href[offsetMethod]().top + offsetBase, href]]) || null
                })
                .sort(function (a, b) { return a[0] - b[0] })
                .each(function () {
                    that.offsets.push(this[0])
                    that.targets.push(this[1])
                })
        }

        ScrollSpy.prototype.process = function () {
            var scrollTop = this.$scrollElement.scrollTop() + this.options.offset
            var scrollHeight = this.getScrollHeight()
            var maxScroll = this.options.offset + scrollHeight - this.$scrollElement.height()
            var offsets = this.offsets
            var targets = this.targets
            var activeTarget = this.activeTarget
            var i

            if (this.scrollHeight != scrollHeight) {
                this.refresh()
            }

            if (scrollTop >= maxScroll) {
                return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
            }

            if (activeTarget && scrollTop < offsets[0]) {
                this.activeTarget = null
                return this.clear()
            }

            for (i = offsets.length; i--;) {
                activeTarget != targets[i]
                && scrollTop >= offsets[i]
                && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
                && this.activate(targets[i])
            }
        }

        ScrollSpy.prototype.activate = function (target) {
            this.activeTarget = target

            this.clear()

            var selector = this.selector +
                '[data-target="' + target + '"],' +
                this.selector + '[href="' + target + '"]'

            var active = $(selector)
                .parents('li')
                .addClass('active')

            if (active.parent('.dropdown-menu').length) {
                active = active
                    .closest('li.dropdown')
                    .addClass('active')
            }

            active.trigger('activate.bs.scrollspy')
        }

        ScrollSpy.prototype.clear = function () {
            $(this.selector)
                .parentsUntil(this.options.target, '.active')
                .removeClass('active')
        }


        // SCROLLSPY PLUGIN DEFINITION
        // ===========================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.scrollspy')
                var options = typeof option == 'object' && option

                if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }

        var old = $.fn.scrollspy

        $.fn.scrollspy = Plugin
        $.fn.scrollspy.Constructor = ScrollSpy


        // SCROLLSPY NO CONFLICT
        // =====================

        $.fn.scrollspy.noConflict = function () {
            $.fn.scrollspy = old
            return this
        }


        // SCROLLSPY DATA-API
        // ==================

        $(window).on('load.bs.scrollspy.data-api', function () {
            $('[data-spy="scroll"]').each(function () {
                var $spy = $(this)
                Plugin.call($spy, $spy.data())
            })
        })

    }(jQuery);

    /* ========================================================================
         * Bootstrap: tab.js v3.3.7
         * http://getbootstrap.com/javascript/#tabs
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // TAB CLASS DEFINITION
        // ====================

        var Tab = function (element) {
            // jscs:disable requireDollarBeforejQueryAssignment
            this.element = $(element)
            // jscs:enable requireDollarBeforejQueryAssignment
        }

        Tab.VERSION = '3.3.7'

        Tab.TRANSITION_DURATION = 150

        Tab.prototype.show = function () {
            var $this = this.element
            var $ul = $this.closest('ul:not(.dropdown-menu)')
            var selector = $this.data('target')

            if (!selector) {
                selector = $this.attr('href')
                selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
            }

            if ($this.parent('li').hasClass('active')) return

            var $previous = $ul.find('.active:last a')
            var hideEvent = $.Event('hide.bs.tab', {
                relatedTarget: $this[0]
            })
            var showEvent = $.Event('show.bs.tab', {
                relatedTarget: $previous[0]
            })

            $previous.trigger(hideEvent)
            $this.trigger(showEvent)

            if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

            var $target = $(selector)

            this.activate($this.closest('li'), $ul)
            this.activate($target, $target.parent(), function () {
                $previous.trigger({
                    type: 'hidden.bs.tab',
                    relatedTarget: $this[0]
                })
                $this.trigger({
                    type: 'shown.bs.tab',
                    relatedTarget: $previous[0]
                })
            })
        }

        Tab.prototype.activate = function (element, container, callback) {
            var $active = container.find('> .active')
            var transition = callback
                && $.support.transition
                && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

            function next() {
                $active
                    .removeClass('active')
                    .find('> .dropdown-menu > .active')
                    .removeClass('active')
                    .end()
                    .find('[data-toggle="tab"]')
                    .attr('aria-expanded', false)

                element
                    .addClass('active')
                    .find('[data-toggle="tab"]')
                    .attr('aria-expanded', true)

                if (transition) {
                    element[0].offsetWidth // reflow for transition
                    element.addClass('in')
                } else {
                    element.removeClass('fade')
                }

                if (element.parent('.dropdown-menu').length) {
                    element
                        .closest('li.dropdown')
                        .addClass('active')
                        .end()
                        .find('[data-toggle="tab"]')
                        .attr('aria-expanded', true)
                }

                callback && callback()
            }

            $active.length && transition ?
                $active
                    .one('bsTransitionEnd', next)
                    .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
                next()

            $active.removeClass('in')
        }


        // TAB PLUGIN DEFINITION
        // =====================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.tab')

                if (!data) $this.data('bs.tab', (data = new Tab(this)))
                if (typeof option == 'string') data[option]()
            })
        }

        var old = $.fn.tab

        $.fn.tab = Plugin
        $.fn.tab.Constructor = Tab


        // TAB NO CONFLICT
        // ===============

        $.fn.tab.noConflict = function () {
            $.fn.tab = old
            return this
        }


        // TAB DATA-API
        // ============

        var clickHandler = function (e) {
            e.preventDefault()
            Plugin.call($(this), 'show')
        }

        $(document)
            .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
            .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

    }(jQuery);

    /* ========================================================================
         * Bootstrap: affix.js v3.3.7
         * http://getbootstrap.com/javascript/#affix
         * ========================================================================
         * Copyright 2011-2016 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         * ======================================================================== */


    +function ($) {
        'use strict';

        // AFFIX CLASS DEFINITION
        // ======================

        var Affix = function (element, options) {
            this.options = $.extend({}, Affix.DEFAULTS, options)

            this.$target = $(this.options.target)
                .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
                .on('click.bs.affix.data-api', $.proxy(this.checkPositionWithEventLoop, this))

            this.$element = $(element)
            this.affixed = null
            this.unpin = null
            this.pinnedOffset = null

            this.checkPosition()
        }

        Affix.VERSION = '3.3.7'

        Affix.RESET = 'affix affix-top affix-bottom'

        Affix.DEFAULTS = {
            offset: 0,
            target: window
        }

        Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
            var scrollTop = this.$target.scrollTop()
            var position = this.$element.offset()
            var targetHeight = this.$target.height()

            if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

            if (this.affixed == 'bottom') {
                if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
                return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
            }

            var initializing = this.affixed == null
            var colliderTop = initializing ? scrollTop : position.top
            var colliderHeight = initializing ? targetHeight : height

            if (offsetTop != null && scrollTop <= offsetTop) return 'top'
            if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

            return false
        }

        Affix.prototype.getPinnedOffset = function () {
            if (this.pinnedOffset) return this.pinnedOffset
            this.$element.removeClass(Affix.RESET).addClass('affix')
            var scrollTop = this.$target.scrollTop()
            var position = this.$element.offset()
            return (this.pinnedOffset = position.top - scrollTop)
        }

        Affix.prototype.checkPositionWithEventLoop = function () {
            setTimeout($.proxy(this.checkPosition, this), 1)
        }

        Affix.prototype.checkPosition = function () {
            if (!this.$element.is(':visible')) return

            var height = this.$element.height()
            var offset = this.options.offset
            var offsetTop = offset.top
            var offsetBottom = offset.bottom
            var scrollHeight = Math.max($(document).height(), $(document.body).height())

            if (typeof offset != 'object') offsetBottom = offsetTop = offset
            if (typeof offsetTop == 'function') offsetTop = offset.top(this.$element)
            if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

            var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

            if (this.affixed != affix) {
                if (this.unpin != null) this.$element.css('top', '')

                var affixType = 'affix' + (affix ? '-' + affix : '')
                var e = $.Event(affixType + '.bs.affix')

                this.$element.trigger(e)

                if (e.isDefaultPrevented()) return

                this.affixed = affix
                this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

                this.$element
                    .removeClass(Affix.RESET)
                    .addClass(affixType)
                    .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
            }

            if (affix == 'bottom') {
                this.$element.offset({
                    top: scrollHeight - height - offsetBottom
                })
            }
        }


        // AFFIX PLUGIN DEFINITION
        // =======================

        function Plugin(option) {
            return this.each(function () {
                var $this = $(this)
                var data = $this.data('bs.affix')
                var options = typeof option == 'object' && option

                if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
                if (typeof option == 'string') data[option]()
            })
        }

        var old = $.fn.affix

        $.fn.affix = Plugin
        $.fn.affix.Constructor = Affix


        // AFFIX NO CONFLICT
        // =================

        $.fn.affix.noConflict = function () {
            $.fn.affix = old
            return this
        }


        // AFFIX DATA-API
        // ==============

        $(window).on('load', function () {
            $('[data-spy="affix"]').each(function () {
                var $spy = $(this)
                var data = $spy.data()

                data.offset = data.offset || {}

                if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
                if (data.offsetTop != null) data.offset.top = data.offsetTop

                Plugin.call($spy, data)
            })
        })

    }(jQuery);




</script>



</body>

</html>

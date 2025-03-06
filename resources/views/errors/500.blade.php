<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ translate('Error 500') }} | {{ \App\CentralLogics\Helpers::get_business_settings('restaurant_name') }}</title>

    @php($icon = \App\Model\BusinessSetting::where(['key' => 'fav_icon'])->first()?->value??'')
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/restaurant/' . $icon ?? '') }}">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/admin')}}/css/vendor.min.css">
    <link rel="stylesheet" href="{{asset('assets/admin')}}/vendor/icon-set/style.css">

    <link rel="stylesheet" href="{{asset('assets/admin')}}/css/theme.minc619.css?v=1.0">
</head>

<body>

<div class="container">
    <div class="footer-height-offset d-flex justify-content-center align-items-center flex-column">
        <div class="row align-items-sm-center w-100">
            <div class="col-sm-6">
                <div class="text-center text-sm-right mr-sm-4 mb-5 mb-sm-0">
                    <img class="w-60 w-sm-100 mx-auto" src="{{asset('assets/admin')}}/svg/illustrations/think.svg" alt="Image Description" style="max-width: 15rem;">
                </div>
            </div>

            <div class="col-sm-6 col-md-4 text-center text-sm-left">
                <h1 class="display-1 mb-0">500</h1>
                <p class="lead">{{ translate('The server encountered an internal error or misconfiguration and was unable to complete your request.') }}</p>
                <a class="btn btn-primary" href="{{url()->current()}}">{{ translate('Reload page') }}</a>
            </div>
        </div>
    </div>
</div>

<div class="footer text-center">
    <ul class="list-inline list-separator">
        <li class="list-inline-item">
            <a class="list-separator-link" target="_blank" href="{{env('APP_MODE')=='demo'?'https://6amtech.com/':''}}">{{ \App\CentralLogics\Helpers::get_business_settings('restaurant_name') }} {{ translate('Support') }}</a>
        </li>
    </ul>
</div>

<script src="{{asset('assets/admin')}}/js/theme.min.js"></script>
</body>

</html>

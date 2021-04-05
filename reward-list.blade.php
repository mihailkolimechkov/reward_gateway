<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reward Gateway</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{!! URL::asset('assets/css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="scroll-assist">
    <div class="container">
        @foreach($result as $item)
            <div class="row">
                <div class="col-lg-1">
                    <img src="{!! $item['avatar'] !!}" alt="{!! $item['avatar'] !!}">
                </div>
                <div class="col-lg-11">
                    <div class="col-lg-12">
                        <b>{!! $item['name'] !!}</b>
                    </div>
                    <div class="col-lg-12">
                        {!! $item['company'] !!}
                    </div>
                    <div class="col-lg-12">
                        {!! $item['bio'] !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
<script src="{!! URL::asset('assets/js/jquery.min.js') !!}"></script>
<script src="{!! URL::asset('assets/js/bootstrap.min.js') !!}"></script>
</body>
</html>
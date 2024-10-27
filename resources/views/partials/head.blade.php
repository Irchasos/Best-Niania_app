@yield('head')
<!DOCTYPE html>
<html lang="">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chillaid</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Use the latest Font Awesome from the reliable CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Poppins:700" rel="stylesheet" />
    <link href="{{ secure_asset('Search/css/main.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ secure_asset('css/framework.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ secure_asset('css/table.css') }}" rel="stylesheet" type="text/css" media="all">
</head>

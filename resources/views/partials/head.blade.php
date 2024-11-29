<!DOCTYPE html>
<html lang="">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chillaid</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
          integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Poppins:700" rel="stylesheet"/>
    <link href="{{ secure_asset('Search/css/main.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ secure_asset('css/framework.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ secure_asset('css/table.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/achievements.css') }}">
</head>

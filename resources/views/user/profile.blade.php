<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title></title>
  </head>
  {{-- @php
    dd($post);
  @endphp --}}
    @foreach ($post as $key => $value)
      <p>{{ $value->title }}</p>
      <p>{{ $value->body }}</p>
    @endforeach
  <body>
  </body>
</html>

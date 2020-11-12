<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/penny.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid back">
      <div class="row justify-content-md-center p-5">
        <img style="width:300px;" src="{{URL::asset('/image/logo.png')}}">
      </div>
      <div class="slogan row justify-content-md-center mt-5">
        <p>a penny saved is a penny earned.</p>
      </div>
      <div class="slogan row justify-content-md-center">
        <p>省一分錢賺一分錢</p>
      </div>
      <div class="row m-3">
        <button type="button" class="btn1 offset-md-7" onclick="location.href='{{ route('home') }}'">GO --></button>
      </div>
    </div>
  </body>
</html>

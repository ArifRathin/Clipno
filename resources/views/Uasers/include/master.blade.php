<!DOCTYPE html>
<html lang="en">

<head>

  @include('Uasers.include.head')

</head>

<body id="page-top">

    @include('Uasers.include.top')
  

  <div id="wrapper">

    @include('Uasers.include.navbar')
    <div id="content-wrapper">

      <div class="">
        @section('content')
        @show

      </div>

    @include('Uasers.include.footer')


  @include('Uasers.include.script')

  @section('script')
  @show

</body>

</html>
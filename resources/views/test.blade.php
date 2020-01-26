<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KUTLS</title>

  <!-- jQuery / jQuery UI -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

  <!-- jQuery Touch Punch - Enable Touch Drag and Drop -->
  <script src="{{ asset('js/jquery.shapeshift/core/vendor/jquery.touch-punch.min.js') }}"></script>

  <!-- jQuery.Shapeshift -->
  <script src="{{ asset('js/jquery.shapeshift/core/jquery.shapeshift.js') }}"></script>

  <!-- CSS -->
  <style>
    .container {
      border: 1px dashed #CCC;
      position: relative;
    }
    p {
      text-align: center;
    }

    .container > div {
      background: #AAA;
      position: absolute;
      height: 100px;
      width: 100px;
    }

    .container > .ss-placeholder-child {
      background: transparent;
      border: 1px dashed blue;
    }
  </style>

  <!-- Javascript -->
  <script>
    $(document).ready(function() {
      $(".container").shapeshift();
    })
  </script>
</head>
<body>
  <div class="container">
    <div><p>a</p></div>
    <div><p>b</p></div>
    <div><p>c</p></div>
    <div><p>d</p></div>
    <div><p>e</p></div>
    <div><p>f</p></div>
    <div><p>g</p></div>
    <div><p>h</p></div>
  </div>

  <div class="container">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</body>
</html>

<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="{{asset('site/css/materialize.min.css')}}"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="{{asset('site/css/custom.css')}}">
  <title>{{ $title }}</title>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
    .grade:hover{
      cursor: pointer;
      color: #f44336;
    }
    .teal{
      color: #E6E6E6;
      font-size: 20px;
    }
    body{
        background-color: gainsboro;
    }

    
  </style>
  <script type="text/javascript">
    var baseUrl = '{{asset('/')}}';
    var updateAbleUrl = null;
  </script>

</head>
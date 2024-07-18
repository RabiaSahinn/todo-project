<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/custom/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/frontend/css/modern-business.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Comfortaa&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/backend/bower_components/jquery-ui/jquery-ui.js"></script>

  

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>
<body>
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Todo List App</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield("content")

  <script src="/frontend/vendor/jquery/jquery.min.js"></script>
  <script src="/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    @if(session()->has("success"))
        <script>
            alertify.success('{{session('success')}}');
        </script>
    @endif

    @if(session()->has("error"))
        <script>
            alertify.error('{{session('error')}}');
        </script>
    @endif

</body>
</html>
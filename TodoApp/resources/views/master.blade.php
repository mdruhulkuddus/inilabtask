<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Todo</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/mediumish.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" ></head>
<body>
<!-- Begin Nav
================================================== -->
@include('components.header')
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
    @yield('content')


    @include('components.footer')
</div>

<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>

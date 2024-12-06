<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>
<body>
@include('includes.header')

 <!-- include page -->
@yield('content')

<footer>@include('includes.footer')</footer>

</body>
</html>
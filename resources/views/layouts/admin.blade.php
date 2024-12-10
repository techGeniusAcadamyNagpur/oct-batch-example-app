<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.admin-panel.head')
</head>
<body>
@include('includes.admin-panel.header')

@include('includes.admin-panel.sidebar')

 <!-- include page -->
@yield('content')

<footer>@include('includes.admin-panel.footer')</footer>

</body>
</html>
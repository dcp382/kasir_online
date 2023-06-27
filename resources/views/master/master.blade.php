<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	@include('master.css')
</head>
<body class="sidebar-dark">
	<div class="main-wrapper">
        @include('master.sidebar')
        <div class="page-wrapper">
        @include('master.navbar')
        @yield('konten')
        </div>
    </div>

	<!-- core:js -->
    @include('master.java_script')
</body>
</html>    
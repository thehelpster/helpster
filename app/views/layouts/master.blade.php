<!DOCTYPE html>
<html lang="en">
<head>
    <title>Helpster</title>
    
    <!-- Add CSRF Token as a meta tag in your head -->
    <meta name="csrf-token" content="{{{ csrf_token() }}}">

	{{-- link tag for bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
	
    @yield('top-script')
</head>
<body>
	@include('partials.navigation')
    @yield('content')



    {{-- script tags for jquery and bootstrap --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    @yield('bottom_script')
    @include('partials.footer')
</body>
</html>
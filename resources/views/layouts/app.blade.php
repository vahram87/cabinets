<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>
	@include("layouts.header")

    @section("mine-content")
      @show

    @include("layouts.footer")
</body>
</html>
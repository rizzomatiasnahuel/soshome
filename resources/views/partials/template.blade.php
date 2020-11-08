...
<body>

	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	
	@include('store.partials.nav')
...
@if(session()->has('userid'))

@extends('Client Side.constant.content')

@else
	<script>
        window.location = "/loginPage"; // Redirect to loginPage if not logged in
    </script>
@endif
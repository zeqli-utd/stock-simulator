@extends('layouts.simulator')


@section('nav-pills')
    <li role="presentation" class="active"><a href="{{ route('markets') }}">markets</a></li>
    <li role="presentation"><a href="{{ route('watchlist') }}">watchlist</a></li>
@stop

@section('page-header')
    <h1 class="page-header">Markets</h1>
    <div>
    	<form>
    		<input type="text" name="symbol" placeholder="enter symbol you want to Lookup" size="35">
    		<input type="submit" name="submit" value="Lookup symbol">
    	</form>
    </div>
@stop

@section('content')
                       

<form class="form-horizontal" role="form" method="POST" action="{{ url('/simulator/markets/search/') }}">
    {{ csrf_field() }}
    <input type="text" name="symbol" placeholder="Search a symbol"/>
    <input type="submit" value="Search"/>
</form>
@stop




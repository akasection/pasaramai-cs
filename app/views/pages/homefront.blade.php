@extends('layouts.home')

@section('pagetitle')
	Knowledge Base 
@stop

@section('pagesubtitle')
	Index
@stop

@section('breadcumb')
		<li><a href="#"><i class="fa fa-dashboard"></i> Index</a></li>
		<li class="active">Knowledge Base</li>
@stop

@section('pagecontents')
	<div class='row'>
	<section class="col-lg-9 connectedSortable ui-sortable">
	
	</section>
	
	<section class="col-lg-3 connectedSortable ui-sortable">
	
	</section>
	</div>
@stop
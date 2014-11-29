
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		@yield('pagetitle') <small>@yield('pagesubtitle')</small>
	</h1>
	<ol class="breadcrumb">
		@yield('breadcumb')
	</ol>
</section>

<!-- Main content -->
<section class="content">
@yield('pagecontents')
</section>
<!-- /.content -->
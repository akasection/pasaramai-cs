<!DOCTYPE html>
<html>
    <head>
		<!-- Header -->
		@include('includes.head')
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
			<!-- HEADER CONTENT .PHP -->
			@include('includes.navbar')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
        	<!--  Content -->
            <!-- Left side column. contains the logo and sidebar -->
            
            <aside class="left-side sidebar-offcanvas">                
				@include('includes.sidebar')
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
				@include('includes.content')
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		@include('includes.scripts')
    </body>
</html>
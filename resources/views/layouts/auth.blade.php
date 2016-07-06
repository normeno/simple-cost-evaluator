<!DOCTYPE html>
<html lang="es">
	<header>
    	@include('layouts.partials.frontend_header')
    	@stack('css')
    </header>
    <body>

        <div class="container">
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>

	        @include('layouts.partials.frontend_footer')

	        @include('layouts.partials.frontend_scripts')
        </div>
    </body>
</html>
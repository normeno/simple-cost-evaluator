<!DOCTYPE html>
<html lang="es">
	<header>
    	@include('layouts.partials.frontend_header')
    	@stack('css')
    </header>
    <body>

		@include('layouts.partials.frontend_nav')

        <div class="container">
			<div class="row">
				<div class="col-md-12">

                    @if (session('success'))
                        @include('alerts.success')
                    @endif

					@yield('content')
				</div>
			</div>

	        @include('layouts.partials.frontend_footer')

	        @include('layouts.partials.frontend_scripts')
        </div>
    </body>
</html>
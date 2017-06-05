


@if (Auth::guard('web')->check())
	<p>
	<span class="text-succcess">
		logged in<strong>USER</strong>
	</span>
		
	</p>
	@else
	<div class="text-danger">
		logged out <strong>USER</strong>
	</div>
@endif


@if (Auth::guard('admin')->check())
	<p>
	<span class="text-succcess">
		logged in<strong>ADMIN</strong>
	</span>
		
	</p>
	@else
	<div class="text-danger">
		logged out <strong>ADMIN</strong>
	</div>
@endif



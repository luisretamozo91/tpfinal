@if(session()->has('mensaje'))
<div class="alert alert-success container">
	{{ session()->get('mensaje')}}
</div>
@endif
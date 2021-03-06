@extends('admin.layouts.app')

@section('title', 'User')

@section('head-script')

	<style type="text/css">
		.photo-border {
			height: 250px;
			width: 250px;
			border-radius: 150px;
		}
	</style>

@endsection

@section('body')

	<div class="container">

	    <div class="card shadow mb-4">

	      <div class="card-header py-3 d-flex justify-content-between">
	      	<div>
	        	<h6 class="m-0 font-weight-bold text-primary my-auto">My Profile</h6>
	      	</div>
	      	<div>
		        <a class="" href="{{ route('admin.users.edit', $data->id) }}">
		            <button class="btn btn-outline-primary btn-icon btn-transparent-dark mr-2"><span class="font-weight-bold">Edit Your Profile </span></button>
		        </a>
	      	</div>

	      </div>
	      <div class="card-body">

	        <div class="bg-dark photo-border m-auto overflow-hidden">
	        	{{-- <img class="photo h-100" src="https://cdn.newsapi.com.au/image/v1/13d65de9c6442e625c0931ad854a945a?width=650"> --}}
	        	<img class="photo h-100" src="https://icon-library.com/images/user-png-icon/user-png-icon-16.jpg">
	        </div>

	        <div class="mt-4">
	        	<p class="font-weight-bold text-dark h2 text-center ">{{ $data->name }}</p>
	        	<p class="text-dark h4 text-center ">{{ $data->email }}</p>
	        	<p class="bg-primary px-2 py-1 font-weight-bold text-sm m-auto text-white text-center rounded">{{ $data->role }}</p>
	        </div>

	        <hr>

	        <form method="post" action="{{ route('admin.users.delete', $data->id) }}">
	        	@csrf
	        	@method('DELETE')
	        	<button class="btn btn-outline-danger">
	        		Delete your account
	        	</button>
	        </form>

	      </div>

	    </div>

	</div>
@endsection

@section('end-script')
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
@endsection

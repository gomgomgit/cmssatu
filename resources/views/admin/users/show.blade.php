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

	      <div class="card-header py-3">
	        <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
	      </div>
	      <div class="card-body">

	        <div class="bg-dark photo-border m-auto overflow-hidden">
	        	<img class="photo h-100" src="https://cdn.newsapi.com.au/image/v1/13d65de9c6442e625c0931ad854a945a?width=650">
	        </div>

	        <div class="mt-4">
	        	<p class="font-weight-bold text-dark h2 text-center ">{{ $data->name }}</p>
	        	<p class="text-dark h4 text-center ">{{ $data->email }}</p>
	        	<p class="bg-primary px-2 py-1 font-weight-bold text-sm m-auto text-white text-center rounded">{{ $data->role }}</p>
	        </div>

	        <hr>
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

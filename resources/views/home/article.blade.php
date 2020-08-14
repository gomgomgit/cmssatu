<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
	<style type="text/css">
		.f-pts {
			font-family: 'PT Sans', sans-serif;
		}
		.f-ubuntu {
			    font-family: 'Ubuntu', sans-serif;
		}
	</style>
</head>
<body>
	<nav class="bg-gray-800 border-b-4 border-orange-500 sticky top-0">
		<div class="flex items-center justify-between flex-wrap px-32">
			<div>
			  <div class="flex items-center flex-shrink-0 text-white mr-6">
			    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
			    <span class="font-extrabold text-4xl tracking-tight">SUP?</span>
			  </div>
			  <div class="block lg:hidden">
			    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
			      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			    </button>
			  </div>
			</div>
			<div class="flex w-full block items-center lg:w-auto">
			    <div class="text-sm lg:flex-grow">
			      <a href="/" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-500 hover:text-white text-xl font-bold">
			        Home
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-500 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-500 hover:text-white text-xl font-bold">
			        Blog
			      </a>
			    </div>
			</div>
		</div>
	</nav>

	<div class="bg-gray-900 py-16 px-32">
		<div class="f-pts">
			<h2 class="font-bold text-5xl text-white">{{$article->title}}</h2>
			<h3 class="font-bold text-gray-500"><a class="text-orange-500" href="/">HOME</a> / THE COLDEST SUNSET</h3>
		</div>

		<div class="grid grid-cols-3 pt-10 gap-5">

			<div class="col-span-2">
				<div class="w-full rounded mb-3">
					<div class="p-1 border-2 border-gray-700">
				  		<img class="w-full" src="https://i.insider.com/5ec2038019182438795d88b3?width=1100&format=jpeg&auto=webp" alt="Sunset in the mountains">
					</div>
				</div>

				<div class="text-gray-500 f-ubuntu">
						{!! $article->content !!}
				</div>
			</div>

			<div>

				<div class="px-5">
					<h3 class="font-bold text-3xl text-white pb-4 border-b-2 border-gray-700">Category</h3>
				</div>


			</div>

		</div>
	</div>

</body>
</html>

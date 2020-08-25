<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Aladin&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

	{{-- Custom Css --}}
	<link rel="stylesheet" href="/css/custom.css">
</head>
<body>
	<nav class="bg-gray-900 border-b-4 border-orange-600 z-50">
		<div class="flex items-center justify-between flex-wrap px-48">
			<div>
			  <div class="flex items-center flex-shrink-0 text-white mr-6">
			    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
			    <span class="font-extrabold text-5xl tracking-tight f-aladin">SUP?</span>
			  </div>
			  <div class="block lg:hidden">
			    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
			      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			    </button>
			  </div>
			</div>
			<div class="flex w-full block items-center lg:w-auto">
			    <div class="text-sm lg:flex-grow">
			      <a href="/" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Home
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-white text-xl font-bold">
			        Blog
			      </a>
			    </div>
			</div>
		</div>
	</nav>


	<div class="bg-p-typo px-48">
		<div class="grid gap-8">
			<div class="my-12">
				<div class="">
					<h3 class="font-bold text-4xl f-ubuntu text-gray-100  mb-10 border-b-2 border-gray-700 py-5">{{ $category->name }}</h3>

					<div class="grid grid-cols-1 gap-6">

						@foreach($articles as $article)

							<div class="max-w-sm w-full lg:max-w-full lg:flex border-b-2 border-gray-700 pb-5">
							  <div class="h-56 w-1/3 flex-none rounded bg-cover" style="background-image: url('/img/{{ $article->image }}')">
							  </div>
							  <div class="bg-transparent rounded-b lg:rounded-b-none lg:rounded-r pl-6 flex flex-col justify-between leading-normal">
							    <div class="mb-4">
							    	<div>
								      <span class="text-md text-gray-200 font-bold">
								        {{ $article->category->name }} -
								      </span>
								      <span class="text-gray-400 text-sm font-bold">{{ date("d M Y", strtotime($article->created_at)) }}</span>

							    	</div>
							      <div class="text-gray-200 font-bold text-3xl mb-2 text-orange-500 hover:text-gray-100 inline-block cursor-pointer">
							      	<a href="/article/{{ $article->slug }}">{{ $article->title }}</a>
							      </div>

							      <div style="">
							      	<span class="text-gray-200 text-base text-gray-100 content-article">{!! Str::limit($article->content,200,'...') !!}</span>
							      </div>

							    </div>
						    	<div class="text-gray-400 mb-4"><i class="fas fa-tags mr-2"></i>
						    		@foreach($article->tags as $tag)
						    			<span class="text-sm">{{ $tag->name }}, </span>
						    		@endforeach
						    	</div>
							    {{-- <div class="flex items-center">
							      <img class="w-10 h-10 rounded-full mr-4" src="https://lofrev.net/wp-content/photos/2017/03/user_blue_logo.png">
							      <div class="text-sm">
							        <p class="text-gray-300 leading-none mb-1">{{ $article->user->name }}</p>
							        <p class="text-gray-500">{{ date("d M Y", strtotime($article->created_at)) }}</p>
							      </div>
							    </div> --}}
							  </div>
							</div>

						@endforeach

						<div class="float-right text-gray-100">
							{{ $articles->links() }}
						</div>
					</div>


				</div>
			</div>

		</div>

	</div>



	<footer class="border-t-4 border-orange-600 bg-gray-900 px-48 py-12">
		<div class="grid grid-cols-9">
			<div class="col-span-2">
				<h5 class="text-2xl font-bold text-gray-100 mb-3">NEWS</h5>
				<span class="text-gray-400 font-bold ">
					<p><i class="fas fa-chevron-right text-xs"></i> Elementum velit</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consequat</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Ipsum dolor</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Sit amet</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consectetuer</p>
				</span>
			</div>
			<div class="col-span-2">
				<h5 class="text-2xl font-bold text-gray-100 mb-3">OVERVIEW</h5>
				<span class="text-gray-400 font-bold ">
					<p><i class="fas fa-chevron-right text-xs"></i> Elementum velit</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consequat</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Ipsum dolor</p>
				</span>
			</div>
			<div class="col-span-2">
				<h5 class="text-2xl font-bold text-gray-100 mb-3">NAVIGATION</h5>
				<span class="text-gray-400 font-bold ">
					<p><i class="fas fa-chevron-right text-xs"></i> Pellentesque sed</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Consequat</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Adipiscing elit</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Colaque eunak</p>
					<p><i class="fas fa-chevron-right text-xs"></i> Lorem ipsum</p>
				</span>
			</div>
			<div class="col-span-3">
				<div class="ml-32 w-auto">
					<div class="text-gray-100 flex justify-start mb-4">
						<div class="mr-3">
							<i class="fas fa-home text-3xl"></i>
						</div>
						<div class="text-gray-400">
							<p>Jl.Kesana 4kali, Pintu Barat</p>
							<p>98990 Sohor, Lalaisia.</p>
						</div>
					</div>
					<div class="text-gray-100 flex justify-start mb-4">
						<div class="mr-3">
							<i class="fas fa-phone text-3xl"></i>
						</div>
						<div class="text-gray-400">
							<p>Telephone: +623457890</p>
							<p>Fax: +1928374650</p>
						</div>
					</div>
					<div class="text-gray-100 flex justify-start mb-4">
						<div class="mr-3">
							<i class="fab fa-instagram text-4xl m-2"></i>
							<i class="fab fa-facebook text-4xl m-2"></i>
							<i class="fab fa-twitter text-4xl m-2"></i>
							<i class="fab fa-telegram text-4xl m-2"></i>
							<p class="align-middle font-bold text-xl m-auto w-3/5 text-gray-400">@SUP.WHAT</p>
						</div>
						<div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>

	{{-- font-awesome-5 --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="/css/main.css">

	{{-- owlcarousel --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Aladin&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

	{{-- AOS --}}
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	{{-- Custom Css --}}
	<link rel="stylesheet" href="/css/custom.css">
</head>
<body>
	<nav class="bg-gray-900 border-b-4 border-orange-600 z-50">
		<div class="flex items-center justify-between flex-wrap w-screen lg:max-w-6xl m-auto">
			<div>
			  <div class="flex items-center flex-shrink-0 text-gray-100 mr-6">
			    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
			    <span class="font-extrabold text-5xl tracking-tight f-aladin ">SUP?</span>
			  </div>
			  <div class="block lg:hidden">
			    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-gray-100 hover:border-white">
			      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			    </button>
			  </div>
			</div>
			<div class="flex w-full block items-center lg:w-auto">
			    <div class="text-sm lg:flex-grow">
			      <a href="/" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-gray-100 text-xl font-bold">
			        Home
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-gray-100 text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-gray-100 text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-gray-100 text-xl font-bold">
			        Examples
			      </a>
			      <a href="#responsive-header" class="px-5 py-8 block inline-block mt-0 text-gray-300 hover:bg-orange-600 hover:text-gray-100 text-xl font-bold">
			        Blog
			      </a>
			    </div>
			</div>
		</div>
	</nav>



	<div class="py-12 w-full bg-p-typo relative">

		<div class="w-screen lg:max-w-6xl m-auto p-4">
			<div class="owl-theme top-0 z-10">
			     <div class="owl-controls">
			          <div id="customNav" class="owl-nav"></div>
			     </div>
			</div>

			<div class="owl-carousel owl-theme">

				@foreach($populars as $popular)
					<div class="item w-full bg-cover z-30" style="background-image: url(/img/{{ $popular->image }}); height: 550px;">
							<div class="pl-16 py-20 pr-64 z-40">
								<h3 class="font-bold text-2xl text-orange-500 ">{{ $popular->category->name }}</h3>
								<h2 class="font-extrabold text-6xl text-gray-200 f-pts w-50 leading-none">{{ Str::upper($popular->title) }}</h2>

								<div class="mt-8">
									<a href="/article/{{ $popular->slug }}" class="bg-transparent hover:bg-gray-200 text-gray-200 hover:text-gray-900 f-pts text-lg font-bold hover:text-gray-100 py-2 px-6 border border-gray-200 hover:border-transparent rounded">
									  READ MORE
									</a>

								</div>

							</div>
					</div>
				@endforeach

				<div class="item w-full bg-cover" style="background-image: url(https://i.pinimg.com/originals/87/08/39/87083943e97792b46b0d8194243af949.jpg); height: 550px;">
						<div class="px-16 py-32">
							<h2 class="font-extrabold text-6xl text-gray-200 f-pts">THE LAST DANCE</h2>
							<h3 class="font-bold text-2xl text-gray-300">CHICAGO BULLS -- 1988</h3>
						</div>
				</div>

			</div>

		</div>


	</div>

	<div class="h-56 border-b-4 border-t-4 border-orange-600 bg-gray-900">
		<div class="w-screen lg:max-w-6xl m-auto py-8 grid grid-cols-4 gap-6 f-pts p-4">
			<div class="flex justify-start">
				<div class="h-16 w-16 text-gray-300 rounded-full mr-6">
					<p class="font-bold text-5xl m-auto inline-block"><i class="fas fa-clock"></i></p>
				</div>
				<div>
					<h5 class="text-gray-100 font-bold text-2xl f-ubuntu">LOREM</h5>
					<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
				</div>
			</div>
			<div class="flex justify-start">
				<div class="h-16 w-16 text-gray-300 rounded-full mr-6">
					<p class="font-bold text-5xl m-auto inline-block"><i class="fas fa-comments"></i></p>
				</div>
				<div>
					<h5 class="text-gray-100 font-bold text-2xl f-ubuntu">LOREM</h5>
					<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>
			<div class="flex justify-start">
				<div class="h-16 w-16 text-gray-300 rounded-full mr-6">
					<p class="font-bold text-5xl m-auto inline-block"><i class="fas fa-bell"></i></p>
				</div>
				<div>
					<h5 class="text-gray-100 font-bold text-2xl f-ubuntu">LOREM</h5>
					<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				</div>
			</div>
			<div class="flex justify-start">
				<div class="h-16 w-16 text-gray-300 rounded-full mr-6">
					<p class="font-bold text-5xl m-auto inline-block"><i class="fas fa-hands-helping"></i></p>
				</div>
				<div>
					<h5 class="text-gray-100 font-bold text-2xl f-ubuntu">LOREM</h5>
					<p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
				</div>
			</div>

		</div>
	</div>


	<div class="bg-p-typo">
		<div class="w-screen lg:max-w-6xl m-auto p-4">
		<h3 class="font-bold text-4xl f-ubuntu text-gray-100 mb-10 border-b-2 border-gray-700 py-5">Update</h3>

		<div class="grid grid-cols-4 grid-flow-col gap-4">
			@foreach($latests as $key => $latest)
					<div class="max-w-sm rounded overflow-hidden shadow-lg" style="background: #21293b" data-aos="fade-up" data-aos-offset="600" data-aos-delay="{{ 100 + ($key * 300) }}" data-aos-duration="1200">
						<div class="p-1 border-2 border-gray-700 h-64 relative latest-card">
							<div class="absolute inset-0 overlay-trigger overflow-hidden">
								<div class="absolute show-overlay">
									<i class="fas fa-search show-logo cursor-pointer"></i>
								</div>
						  		<img class="object-cover h-full rounded transform image-latest" src="/img/{{ $latest->image }}" alt="{{ $latest->title }}">

							</div>

						</div>
					  <div class="px-6 py-4" style="height: 230px;">
					    <div class="font-bold text-2xl mb-2 text-orange-500 hover:text-gray-100 cursor-pointer inline-block">
					    	<a href="/article/{{ $latest->slug }}">{{ $latest->title }}</a>
						</div>
					    <span class="text-gray-100 text-base">
					      {!! Str::limit($latest->content,100,'...') !!}
					    </span>
					  </div>
					  <div class="px-6 py-4 ">
					  	<p class="text-gray-100">tags:</p>
					  	@foreach($latest->tags as $tag)

					    	<span class="inline-block bg-gray-700 rounded-full px-3 py-1 text-sm font-semibold text-gray-100 mt-2 mr-2">{{ $tag->name }}</span>

					  	@endforeach
					  </div>
					</div>

			@endforeach
		</div>


		<div class="grid grid-cols-4 gap-8">
			<div class="my-12 col-span-3">
				<div class="">
					<h3 class="font-bold text-4xl f-ubuntu text-gray-100  mb-10 border-b-2 border-gray-700 py-5">For You</h3>

					<div class="grid grid-cols-1 gap-6">

						@foreach($articles as $article)

							<div class="max-w-sm w-full lg:max-w-full lg:flex border-b-2 border-gray-700 pb-5">
							  <div class="h-48 w-1/3 flex-none rounded bg-cover" style="background-image: url('/img/{{ $article->image }}')">
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

			<div class="col-span-1 mt-12">
				<div class="">
					<h4 class="font-bold text-4xl f-pts text-gray-100 mb-4 border-b-2 border-gray-700 py-5">Top Category</h4>
					<div class="w-full f-pts rounded p-2">
						<ul class="list-disc list-inside font-bold">

							@foreach($categories as $category)
								<li class="my-3 list-none">
									<a href="/category/{{ $category->id }}" class=" cursor-pointer hover:text-gray-100 text-orange-500"><i class="fas fa-chevron-right text-xs align-baseline"> </i> {{ Str::upper($category->name) }}</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>

		</div>


	</div>

	<footer class="border-t-4 border-orange-600 bg-gray-900 py-12">
		<div class="grid grid-cols-9 w-screen lg:max-w-6xl m-auto p-4">
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

	{{-- font-awesome-5 --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

	{{-- AOS --}}
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
		  $(".owl-carousel").owlCarousel({
		  	items:1,
		  	loop: true,
		  	nav: true,
		  	animateOut: 'fadeOut',
		  	autoplay: true,
		  	autoplayHoverPause: true,
     		navContainer: '#customNav',
		    navText: [
		        '<i class="fas fa-angle-left" aria-hidden="true"></i>',
		        '<i class="fas fa-angle-right" aria-hidden="true"></i>'
		    ],
		  });
		});
	</script>
	<script>
	  AOS.init();
	</script>
</body>
</html>

@if (!$hero?->image)
	<p class="text-lg">Feltöltés alatt.</p>
@else
	<section class="relative w-full">
		<img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}"
			class="absolute inset-0 h-full w-full object-cover object-center">

		<div class="absolute inset-0 bg-[#08080A]/30"></div>

		<div class="relative mx-auto flex pt-68 pb-56 max-w-screen-2xl items-center">
			<div class="max-w-3xl">

				@if ($hero?->title)
					<h1 class="font-grotesk text-6xl font-bold leading-tight tracking-tight text-white">
						{{ $hero->title }}
					</h1>
				@endif

				@if ($hero?->description)
					<p class="mt-5 font-sans text-lg font-normal leading-8 text-white/80 max-w-lg">
						{{ $hero->description }}
					</p>
				@endif

				<div class="mt-8 flex gap-4">
					<a href="#"
						class="border border-white bg-white px-7 py-3 font-mono text-xs font-normal leading-5 tracking-wide text-[#16161A]">
						Kezdjük a tervezést
					</a>

					<a href="#"
						class="border border-white/40 bg-transparent px-6 py-3 font-mono text-xs font-normal leading-5 tracking-wide text-white">
						A stúdióról
					</a>
				</div>
			</div>
		</div>
	</section>
@endif

<article class="w-[calc((100%-96px)/4)]">
	<img src="{{ asset('storage/' . $reference->image) }}" alt="{{ $reference->title }}"
		class="h-68 w-full object-cover object-center">

	<p class="mt-5 font-mono text-xs font-normal leading-5 tracking-wide text-[#7C7C84]">
		{{ $reference->created_at->format('Y.m.d.') }}
	</p>

	<h3 class="font-grotesk text-lg font-medium leading-6 tracking-tight text-[#16161A] mt-2">
		{{ $reference->title }}
	</h3>
</article>

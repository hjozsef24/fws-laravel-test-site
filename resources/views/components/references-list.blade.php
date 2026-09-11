<div class="mx-auto max-w-screen-2xl py-28">
	<h2 class="font-grotesk text-5xl font-bold leading-none tracking-tight">
		Munkáink
	</h2>

	<div class="mt-9 mb-12 border-t border-[#E4E4E0]"></div>

	@if ($references->isNotEmpty())
		<div class="flex flex-wrap gap-8">
			@foreach ($references as $reference)
				<x-references-card :reference="$reference" />
			@endforeach
		</div>
	@else
		<p class="text-lg">Feltöltés alatt.</p>
	@endif
</div>

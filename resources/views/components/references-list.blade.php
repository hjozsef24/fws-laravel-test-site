<div class="mx-auto max-w-screen-2xl py-28">
	<h2 class="font-sans text-4xl font-bold leading-none tracking-tight">
		Munkáink
	</h2>

	<div class="mt-9 mb-12 border-t border-[#E4E4E0]"></div>

	<div class="flex flex-wrap gap-8">
		@for ($i = 0; $i < 4; $i++)
			<x-references-card />
		@endfor
	</div>
</div>

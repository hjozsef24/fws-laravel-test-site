<div class="js-contact-modal fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
	<div class="w-full max-w-lg bg-white p-8">
		<div class="flex items-center justify-between">
			<h2 class="font-sans text-3xl font-bold text-[#16161A]">
				Kapcsolatfelvétel
			</h2>

			<button type="button" class="js-close-contact-modal cursor-pointer text-2xl text-[#16161A]">
				&times;
			</button>
		</div>

		<form class="js-contact-form mt-8 flex flex-col gap-5">
			@csrf
			<div>
				<label for="name" class="font-mono text-xs text-[#16161A]">
					Név
				</label>

				<input type="text" id="name" name="name" class="mt-2 w-full border border-[#16161A] px-4 py-3">

				<p class="js-form-error mt-2 hidden text-xs text-red-600" data-field="name"></p>
			</div>

			<div>
				<label for="email" class="font-mono text-xs text-[#16161A]">
					Email cím
				</label>

				<input type="email" id="email" name="email" class="mt-2 w-full border border-[#16161A] px-4 py-3">

				<p class="js-form-error mt-2 hidden text-xs text-red-600" data-field="email"></p>
			</div>

			<div>
				<label for="message" class="font-mono text-xs text-[#16161A]">
					Üzenet
				</label>

				<textarea maxlength="255" id="message" name="message" rows="5"
				 class="mt-2 w-full border border-[#16161A] px-4 py-3"></textarea>

				<p class="js-form-error mt-2 hidden text-xs text-red-600" data-field="message"></p>
			</div>

			<button type="submit"
				class="cursor-pointer border border-[#16161A] bg-[#16161A] px-4 py-3 font-mono text-xs font-normal leading-5 tracking-wide text-white disabled:cursor-default disabled:opacity-80">
				Üzenet küldése
			</button>

			<p class="js-form-message hidden text-sm"></p>
		</form>
	</div>
</div>

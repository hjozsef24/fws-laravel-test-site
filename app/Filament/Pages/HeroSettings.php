<?php

namespace App\Filament\Pages;

use App\Models\Hero;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

class HeroSettings extends Page
{
	protected static ?string $title = 'Hero settings';

	protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-photo';

	protected static ?string $navigationLabel = 'Hero';

	protected string $view = 'filament.pages.hero-settings';

	public ?array $data = [];

	public function mount(): void
	{
		$hero = Hero::first();

		$this->form->fill([
			'title' => $hero?->title,
			'description' => $hero?->description,
			'image' => $hero?->image,
		]);
	}

	public function form(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('title')
					->label('Title')
					->maxLength(255),

				Textarea::make('description')
					->label('Description')
					->rows(4),

				FileUpload::make('image')
					->label('Image')
					->image()
					->required()
					->disk('public')
					->directory('hero')
					->maxSize(2048),
			])
			->statePath('data');
	}

	public function save(): void
	{
		$data = $this->form->getState();

		$hero = Hero::first();

		if ($hero) {
			if ($hero->image !== $data['image']) {
				Storage::disk('public')->delete($hero->image);
			}

			$hero->update($data);
		} else {
			Hero::create($data);
		}

		$this->form->fill($data);

		\Filament\Notifications\Notification::make()
			->title('A Hero sikeresen mentve.')
			->success()
			->send();
	}
}

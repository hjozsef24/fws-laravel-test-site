<?php

namespace App\Filament\Resources\References\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReferenceForm
{
	public static function configure(Schema $schema): Schema
	{
		return $schema
			->components([
				TextInput::make('title')
					->required()
					->maxLength(255),
				FileUpload::make('image')
					->image()
					->required()
					->disk('public')
					->directory('references')
					->maxSize(2048),
			]);
	}
}

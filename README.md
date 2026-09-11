# FWS Laravel Test Site

A Laravel-based landing page with Filament Admin.

#### The frontend is built with:
- Blade Template Files
- Tailwind CSS
- jQuery

#### Dynamic content is managed through a Filament admin panel:
- Hero section's title, description and image
- References's title and image individually
- Contact messages with in-built export option

#### Contact Form
- Uses AJAX for asynchronous submission
- Laravel custom request for validation
- E-mail notifications for administrators based on users table, tested with MailPit

#### How to install

1. Clone the repository and install the dependencies:
```
git clone <github-project-url>
cd <project-name>

composer i
npm i
```

2. Create the environment file and generate the application key:
```
cp .env.example .env
php artisan key:generate
```

3. Configure the database connection in .env, then run:
```
php artisan migrate
php artisan storage:link
```

4. Create a Filament admin user:
```
php artisan make:filament-user
```

5. Start the development servers:
```
php artisan serve
npm run dev
php artisan queue:work
```
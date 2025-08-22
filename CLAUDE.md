# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Commands

### Primary Development
- `composer dev` - Start full development environment (server, queue, logs, vite)
- `php artisan serve` - Start Laravel server only
- `npm run dev` - Start Vite development server for assets
- `npm run build` - Build production assets

### Testing
- `composer test` - Run full test suite (clears config first)
- `php artisan test` - Run tests with current config
- Uses Pest testing framework, not PHPUnit

### Code Quality
- `composer format` - Format code with Laravel Pint
- `composer format-check` - Check code formatting without modifying files
- `vendor/bin/pint` - Direct Pint command
- Tests located in `tests/Feature/` and `tests/Unit/`

### Database
- `php artisan migrate` - Run database migrations
- `php artisan migrate:fresh --seed` - Fresh migration with seeders
- Uses SQLite database (`database/database.sqlite`)

## Architecture Overview

### Core Domain
This is a **house-based notification system** with three main entities:
- **User**: Belongs to a house, has authentication
- **House**: Container for users and notifications  
- **Notification**: Belongs to house, created by user, has name/description/image

### Key Relationships
- User belongsTo House
- House hasMany Users, hasMany Notifications
- Notification belongsTo House, belongsTo User (creator)

### Technology Stack
- **Backend**: Laravel 12 with Livewire/Volt
- **Frontend**: Livewire Flux components with TailwindCSS 4
- **Admin Panel**: Filament v4 with custom resource organization
- **Database**: SQLite
- **Testing**: Pest (not PHPUnit)
- **Build**: Vite with Laravel plugin

### Filament Admin Structure
- Resources organized in subdirectories (`app/Filament/Resources/Users/`)
- Separate files for Pages, Schemas (Forms/Infolists), Tables
- Uses Filament v4 schema-based approach rather than legacy form builders

### Key Directories
- `app/Models/` - Eloquent models
- `app/Filament/Resources/` - Admin panel resources (organized by entity)
- `app/Http/Controllers/` - Web controllers
- `app/Livewire/` - Livewire components
- `resources/views/` - Blade templates with Flux components
- `database/migrations/` - Database schema
- `routes/web.php` - Web routes

### Authentication
- Uses Laravel's built-in authentication
- Custom Livewire auth components
- Email verification available but commented out
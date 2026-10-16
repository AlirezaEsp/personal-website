# Personal Website

My personal website, built with Vanilla PHP, Twig, and SQLite.

## Tech Stack

- **PHP** — Server-side development
- **Twig** — Template rendering
- **SQLite** — Database
- **Composer** — Dependency management
- **HTML, CSS, JavaScript** — Frontend

## Requirements

- PHP 8.4 or later
- Composer
- PDO SQLite extension

## Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/AlirezaEsp/personal-website.git
cd personal-website
```

### 2. Install dependencies

```bash
composer install
```

### 3. Run the development server

```bash
php -S localhost:8000 -t public
```

Open [http://localhost:8000](http://localhost:8000) in your browser.

## Project Structure

```text
personal-website/
├── public/          # Public entry point and static assets
├── templates/       # Twig templates
├── config/          # Application configuration
├── storage/         # SQLite database and runtime files
├── composer.json
├── composer.lock
└── README.md
```

## Deployment

The website is intended to run on PHP-compatible shared hosting. The web server document root should point to the `public/` directory whenever possible.

## License

No license has been specified yet.

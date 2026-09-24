# CABS — Clinic Appointment Booking System

Two-page Laravel Blade app for a lab assignment: a landing page and an appointment
booking form. No backend persistence required — the form validates and displays
results client-side.

## Stack

- Laravel 11 (routing, controllers, Blade templating)
- Blade layouts/partials/components for shared markup
- Vite for asset bundling (CSS/JS)
- Vanilla JS for client-side form validation (no backend submission needed)

## Project Structure

```
CABS/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php      # Page 1 — landing page
│           └── BookingController.php   # Page 2 — booking form
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php           # Shared HTML shell (head, nav, footer, scripts)
│   │   ├── partials/
│   │   │   ├── navbar.blade.php        # Nav bar (4+ links, hamburger on mobile)
│   │   │   └── footer.blade.php        # Footer (contact info, social links)
│   │   └── pages/
│   │       ├── home.blade.php          # Page 1: hero + service cards
│   │       └── booking.blade.php       # Page 2: booking form + validation
│   ├── css/
│   │   └── app.css                     # Global styles
│   └── js/
│       ├── app.js                      # Entry JS (bootstraps page scripts)
│       └── bootstrap.js                # Laravel's default JS bootstrap
├── routes/
│   └── web.php                         # / -> Home, /booking -> Booking form
├── public/
│   └── images/                         # Static image assets
└── database/                           # Present via Laravel scaffold, unused (no backend needed)
```

## Routes

| Method | URI       | Controller               | View                |
|--------|-----------|---------------------------|----------------------|
| GET    | `/`       | HomeController@index      | pages.home           |
| GET    | `/booking`| BookingController@index   | pages.booking         |

## Requirement Mapping

**Page 1 — Home** (`resources/views/pages/home.blade.php`)
- Navbar: `partials/navbar.blade.php` — 4+ links, collapses to hamburger on small screens
- Hero: heading, description, 2 CTA buttons (primary "Book Now" -> `/booking`, secondary "Learn More")
- Cards: 3+ service cards, each with icon/image, title, description, button
- Footer: `partials/footer.blade.php` — contact info + social icons

**Page 2 — Booking** (`resources/views/pages/booking.blade.php`)
- Form: 7+ fields across 5+ input types (text, email, tel, date, select, radio, checkbox, textarea)
- Client-side validation: required fields, email format, one pattern/length rule, one cross-field rule
- Inline error messages per field (no generic alert box)
- Submit + Reset buttons; on valid submit, show success message / summary of entered data (no backend)

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

Visit `http://localhost:8000` (via `php artisan serve`) or your configured host.

## Status

Structure scaffolded (routes, controllers, layout, partials, page stubs). Markup, styling,
and validation JS are implemented next, page by page, on request.

# Library Management App

A Laravel 11 + Vite project for basic library management with modules for:
- Books
- Members
- Borrowings

## Requirements

- PHP `8.2+`
- Composer
- Node.js `18+`
- `pnpm` (recommended) or `npm`
- SQLite (default in this project)

## Run Locally

1. Install PHP dependencies:

   ```bash
   composer install
   ```

2. Install frontend dependencies:

   ```bash
   pnpm install
   ```

   If you do not use `pnpm`:

   ```bash
   npm install
   ```

3. Create environment file:

   ```bash
   cp .env.example .env
   ```

   PowerShell equivalent:

   ```powershell
   Copy-Item .env.example .env
   ```

4. Generate app key:

   ```bash
   php artisan key:generate
   ```

5. Prepare SQLite database (if `database/database.sqlite` does not exist):

   ```bash
   touch database/database.sqlite
   ```

   PowerShell equivalent:

   ```powershell
   New-Item -Path database/database.sqlite -ItemType File -Force
   ```

6. Run migrations (and optional seed data):

   ```bash
   php artisan migrate --seed
   ```

7. Start the app.

   Terminal 1:

   ```bash
   php artisan serve
   ```

   Terminal 2:

   ```bash
   pnpm run dev
   ```

   Then open:
   - `http://127.0.0.1:8000`

## One-Command Dev Option

You can also run everything together (Laravel server + queue listener + logs + Vite):

```bash
composer run dev
```

## Useful Commands

- Run tests:
  ```bash
  php artisan test
  ```
- Build frontend assets:
  ```bash
  pnpm run build
  ```

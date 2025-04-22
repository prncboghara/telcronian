# Laravel + Vite Starter

This is a Laravel application configured with [Vite](https://vitejs.dev/) for modern frontend asset bundling. It supports hot module replacement (HMR) during development and optimized builds for production.

## 📦 Requirements

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- NPM or Yarn
- MySQL / PostgreSQL / SQLite (or any DB you prefer)

## 🚀 Getting Started

### 1. Clone the Repository
```bash
git clone https://github.com/prncboghara/telcronian.git
cd telcronian
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Setup
Copy the .env file and configure it with your environment variables:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Run Migrations (if needed)
```bash
php artisan migrate
```

### 5. Start the Development Servers
```bash
# Start Laravel server
php artisan serve

# In a separate terminal, start Vite
npm run dev
```
Now your Laravel backend is running at http://127.0.0.1:8000 and Vite handles assets with HMR.


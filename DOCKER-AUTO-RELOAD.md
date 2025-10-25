# 🐳 Docker Auto-Reload Setup

This project is configured with Docker containers and auto-reload functionality for seamless development.

## 🚀 Quick Start

### Option 1: Simple Start
```bash
./start-dev.sh
```

### Option 2: Manual Start
```bash
docker-compose up -d
```

## 🔄 Auto-Reload Features

### PHP/Laravel Auto-Reload
- **Monitored directories:**
  - `app/` - PHP application files
  - `config/` - Configuration files
  - `routes/` - Route definitions
  - `resources/views/` - Blade templates

- **What happens on file change:**
  - Laravel caches are automatically cleared
  - Configuration cache cleared
  - View cache cleared
  - Route cache cleared

### Frontend Auto-Reload
- **Monitored directories:**
  - `resources/assets/` - CSS, JS, SCSS files
  - `public/` - Static assets

- **What happens on file change:**
  - Assets are automatically recompiled
  - Browser can be refreshed to see changes

## 🛠️ Development Commands

### Container Management
```bash
# Start all containers
docker-compose up -d

# Stop all containers
docker-compose down

# Restart containers
docker-compose restart

# View container status
docker-compose ps
```

### Laravel Commands
```bash
# Run artisan commands
docker-compose exec app php artisan [command]

# Access PHP container
docker-compose exec app bash

# Clear all caches manually
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear
```

### Frontend Commands
```bash
# Access Node container
docker-compose exec node bash

# Install dependencies
docker-compose exec node npm install

# Build assets
docker-compose exec node npm run dev

# Watch for changes
docker-compose exec node npm run watch
```

## 📊 Container Details

| Container | Purpose | Port | Auto-Reload |
|-----------|---------|------|-------------|
| `rtandrew-app` | PHP/Laravel | 9000 | ✅ PHP files |
| `rtandrew-nginx` | Web server | 8000 | - |
| `rtandrew-db` | MySQL database | 3306 | - |
| `rtandrew-redis` | Cache/Sessions | 6379 | - |
| `rtandrew-node` | Frontend assets | - | ✅ CSS/JS |
| `rtandrew-watcher` | File monitoring | - | ✅ All files |

## 🌐 Access Points

- **Application:** http://localhost:8000
- **Database:** localhost:3306
  - Username: `rtandrew`
  - Password: `rtandrew`
  - Database: `rtandrew`
- **Redis:** localhost:6379

## 🔧 Troubleshooting

### Auto-reload not working?
1. Check if watcher container is running:
   ```bash
   docker-compose ps
   ```

2. Check watcher logs:
   ```bash
   docker-compose logs watcher
   ```

3. Restart containers:
   ```bash
   docker-compose down && docker-compose up -d
   ```

### Application not accessible?
1. Check if all containers are running:
   ```bash
   docker-compose ps
   ```

2. Check application logs:
   ```bash
   docker-compose logs app
   ```

3. Test database connection:
   ```bash
   docker-compose exec app php artisan migrate:status
   ```

## 📝 Development Tips

1. **File Changes:** Simply save your files - auto-reload will handle the rest
2. **Database Changes:** Run migrations as usual with `docker-compose exec app php artisan migrate`
3. **Frontend Changes:** CSS/JS changes are automatically compiled
4. **Logs:** Use `docker-compose logs -f [service]` to follow logs in real-time

## 🎯 Next Steps

1. Start developing - auto-reload is active!
2. Visit http://localhost:8000 to see your application
3. Make changes to any monitored files
4. Watch the magic happen automatically! ✨

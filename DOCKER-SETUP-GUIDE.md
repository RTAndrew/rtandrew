# 🐳 Docker Setup Guide - Development & Production

This guide covers setting up both development and production environments for the rtandrew Laravel project.

## 📁 Environment Files

### Development Environment
- **File**: `env.development` → Copy to `.env`
- **Features**: Auto-reload, debug mode, development tools
- **Database**: Docker MySQL with test credentials

### Production Environment
- **File**: `env.production` → Copy to `.env`
- **Features**: Optimized, secure, no debug tools
- **Database**: Production MySQL with secure credentials

## 🚀 Quick Start

### Development Setup
```bash
# Copy development environment
cp env.development .env

# Deploy development environment
./deploy-dev.sh
```

### Production Setup
```bash
# Copy production environment
cp env.production .env

# Deploy production environment
./deploy-prod.sh
```

## 🛠️ Manual Setup

### Development Environment

1. **Environment Setup:**
   ```bash
   cp env.development .env
   ```

2. **Start Development Containers:**
   ```bash
   docker-compose -f docker-compose.yml -f docker-compose.override.yml up -d
   ```

3. **Initialize Application:**
   ```bash
   docker-compose exec app php artisan key:generate
   docker-compose exec app php artisan migrate
   docker-compose exec app php artisan voyager:install --with-dummy
   docker-compose exec app php artisan storage:link
   ```

4. **Build Frontend Assets:**
   ```bash
   docker-compose exec node npm install
   docker-compose exec node npm run dev
   ```

### Production Environment

1. **Environment Setup:**
   ```bash
   cp env.production .env
   # Edit .env with your production values
   ```

2. **Start Production Containers:**
   ```bash
   docker-compose -f docker-compose.production.yml up -d
   ```

3. **Initialize Application:**
   ```bash
   docker-compose -f docker-compose.production.yml exec app php artisan key:generate
   docker-compose -f docker-compose.production.yml exec app php artisan migrate
   docker-compose -f docker-compose.production.yml exec app php artisan voyager:install --with-dummy
   docker-compose -f docker-compose.production.yml exec app php artisan storage:link
   ```

4. **Optimize for Production:**
   ```bash
   docker-compose -f docker-compose.production.yml exec app php artisan config:cache
   docker-compose -f docker-compose.production.yml exec app php artisan route:cache
   docker-compose -f docker-compose.production.yml exec app php artisan view:cache
   ```

## 🔧 Configuration Files

### Docker Compose Files
- `docker-compose.yml` - Base configuration
- `docker-compose.override.yml` - Development overrides
- `docker-compose.production.yml` - Production configuration

### Dockerfiles
- `Dockerfile` - Base PHP-FPM image
- `Dockerfile.dev` - Development with auto-reload
- `Dockerfile.production` - Optimized production image

### Nginx Configurations
- `docker/nginx/default.conf` - Development nginx config
- `docker/nginx/production.conf` - Production nginx with SSL

## 🌐 Access Points

### Development
- **Application**: http://localhost:8000
- **Database**: localhost:3306
- **Redis**: localhost:6379
- **Admin Panel**: http://localhost:8000/admin

### Production
- **Application**: https://yourdomain.com
- **Admin Panel**: https://yourdomain.com/admin
- **Database**: Internal Docker network only

## 🔐 Security Considerations

### Development
- Debug mode enabled
- Auto-reload active
- Test database credentials
- No SSL required

### Production
- Debug mode disabled
- SSL/HTTPS required
- Secure database credentials
- Optimized PHP settings
- Security headers enabled

## 📊 Container Details

| Service | Development | Production | Purpose |
|---------|-------------|------------|---------|
| app | rtandrew-app | rtandrew-app-prod | PHP/Laravel |
| nginx | rtandrew-nginx | rtandrew-nginx-prod | Web server |
| db | rtandrew-db | rtandrew-db-prod | MySQL database |
| redis | rtandrew-redis | rtandrew-redis-prod | Cache/Sessions |
| node | rtandrew-node | - | Frontend assets |
| watcher | rtandrew-watcher | - | File monitoring |

## 🚨 Production Checklist

Before deploying to production:

- [ ] Update `.env.production` with real values
- [ ] Set secure database passwords
- [ ] Configure SSL certificates in `./ssl/`
- [ ] Update domain in environment file
- [ ] Set up proper backup procedures
- [ ] Configure monitoring and logging
- [ ] Test the deployment in staging

## 🔄 Auto-Reload Features

### Development Only
- **PHP Files**: Auto-clear Laravel caches on file changes
- **Frontend**: Auto-compile CSS/JS on file changes
- **Monitored Directories**: `app/`, `config/`, `routes/`, `resources/views/`

### Production
- No auto-reload (files are compiled and optimized)
- Static assets served directly
- PHP opcache enabled for performance

## 📋 Useful Commands

### Development
```bash
# View logs
docker-compose logs -f app

# Access container
docker-compose exec app bash

# Run artisan commands
docker-compose exec app php artisan [command]

# Stop containers
docker-compose down
```

### Production
```bash
# View logs
docker-compose -f docker-compose.production.yml logs -f app

# Access container
docker-compose -f docker-compose.production.yml exec app bash

# Run artisan commands
docker-compose -f docker-compose.production.yml exec app php artisan [command]

# Stop containers
docker-compose -f docker-compose.production.yml down
```

## 🆘 Troubleshooting

### Common Issues

1. **Port conflicts**: Change ports in docker-compose files
2. **Permission issues**: Run `chown -R www-data:www-data storage bootstrap/cache`
3. **Database connection**: Check environment variables
4. **SSL issues**: Ensure certificates are in `./ssl/` directory

### Debug Commands

```bash
# Check container status
docker-compose ps

# View container logs
docker-compose logs [service-name]

# Restart specific service
docker-compose restart [service-name]

# Rebuild containers
docker-compose build --no-cache
```

## 🎯 Next Steps

1. **Development**: Use `./deploy-dev.sh` to start developing
2. **Production**: Configure `.env.production` and use `./deploy-prod.sh`
3. **Monitoring**: Set up logging and monitoring for production
4. **Backup**: Implement database and file backup procedures

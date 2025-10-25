#!/bin/bash

# Production deployment script for rtandrew Laravel project

echo "🚀 Deploying to PRODUCTION environment..."

# Check if production environment file exists
if [ ! -f .env.production ]; then
    echo "❌ Production environment file (.env.production) not found!"
    echo "Please create .env.production with your production settings."
    exit 1
fi

# Copy production environment file
echo "📝 Setting up production environment..."
cp .env.production .env

# Build production containers
echo "🏗️  Building production containers..."
docker-compose -f docker-compose.production.yml build

# Stop any existing containers
echo "🛑 Stopping existing containers..."
docker-compose -f docker-compose.production.yml down

# Start production containers
echo "🚀 Starting production containers..."
docker-compose -f docker-compose.production.yml up -d

# Wait for database to be ready
echo "⏳ Waiting for database to be ready..."
sleep 15

# Generate application key if needed
echo "🔑 Checking application key..."
docker-compose -f docker-compose.production.yml exec app php artisan key:generate --force

# Run migrations
echo "📊 Running database migrations..."
docker-compose -f docker-compose.production.yml exec app php artisan migrate --force

# Install Voyager if not already installed
echo "⚓ Setting up Voyager admin panel..."
docker-compose -f docker-compose.production.yml exec app php artisan voyager:install --with-dummy || echo "Voyager already installed"

# Create storage link
echo "🔗 Creating storage link..."
docker-compose -f docker-compose.production.yml exec app php artisan storage:link

# Optimize for production
echo "⚡ Optimizing for production..."
docker-compose -f docker-compose.production.yml exec app php artisan config:cache
docker-compose -f docker-compose.production.yml exec app php artisan route:cache
docker-compose -f docker-compose.production.yml exec app php artisan view:cache

# Set permissions
echo "🔐 Setting proper permissions..."
docker-compose -f docker-compose.production.yml exec app chown -R www-data:www-data /var/www/html/storage
docker-compose -f docker-compose.production.yml exec app chown -R www-data:www-data /var/www/html/bootstrap/cache

echo "✅ Production deployment complete!"
echo "🌐 Your application is available at: https://yourdomain.com"
echo "📊 Admin panel: https://yourdomain.com/admin"
echo ""
echo "📋 Useful commands:"
echo "  docker-compose -f docker-compose.production.yml logs -f app    # View app logs"
echo "  docker-compose -f docker-compose.production.yml exec app bash # Access app container"
echo "  docker-compose -f docker-compose.production.yml down          # Stop all containers"
echo ""
echo "⚠️  IMPORTANT: Make sure to:"
echo "  1. Update your domain in .env.production"
echo "  2. Set up SSL certificates in ./ssl/"
echo "  3. Configure your production database passwords"
echo "  4. Set up proper backup procedures"

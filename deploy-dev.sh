#!/bin/bash

# Development deployment script for rtandrew Laravel project

echo "🚀 Deploying to DEVELOPMENT environment..."

# Copy development environment file
if [ ! -f .env ]; then
    echo "📝 Creating .env file from development template..."
    cp env.development .env
fi

# Build and start development containers
echo "🏗️  Building development containers..."
docker-compose -f docker-compose.yml -f docker-compose.override.yml build

echo "🚀 Starting development containers..."
docker-compose -f docker-compose.yml -f docker-compose.override.yml up -d

# Wait for database to be ready
echo "⏳ Waiting for database to be ready..."
sleep 10

# Generate application key if needed
echo "🔑 Checking application key..."
docker-compose exec app php artisan key:generate --force

# Run migrations
echo "📊 Running database migrations..."
docker-compose exec app php artisan migrate --force

# Install Voyager if not already installed
echo "⚓ Setting up Voyager admin panel..."
docker-compose exec app php artisan voyager:install --with-dummy || echo "Voyager already installed"

# Create storage link
echo "🔗 Creating storage link..."
docker-compose exec app php artisan storage:link

# Set permissions
echo "🔐 Setting proper permissions..."
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chown -R www-data:www-data /var/www/html/bootstrap/cache

# Build frontend assets
echo "🎨 Building frontend assets..."
docker-compose exec node npm install
docker-compose exec node npm run dev

echo "✅ Development deployment complete!"
echo "🌐 Your application is available at: http://localhost:8000"
echo "🗄️  Database is available at: localhost:3306"
echo "📊 Admin panel: http://localhost:8000/admin"
echo ""
echo "📋 Useful commands:"
echo "  docker-compose logs -f app    # View app logs"
echo "  docker-compose exec app bash # Access app container"
echo "  docker-compose down          # Stop all containers"

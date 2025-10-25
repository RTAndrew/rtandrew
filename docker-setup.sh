#!/bin/bash

# Docker setup script for rtandrew Laravel project

echo "🐳 Setting up Docker environment for rtandrew project..."

# Copy environment file for Docker
if [ ! -f .env ]; then
    echo "📝 Creating .env file from .env.example..."
    cp .env.example .env
fi

# Update .env file for Docker
echo "🔧 Updating .env file for Docker configuration..."
sed -i '' 's/DB_HOST=127.0.0.1/DB_HOST=db/' .env
sed -i '' 's/REDIS_HOST=127.0.0.1/REDIS_HOST=redis/' .env
sed -i '' 's/APP_URL=http:\/\/localhost/APP_URL=http:\/\/localhost:8000/' .env

# Build and start containers
echo "🏗️  Building Docker containers..."
docker-compose build

echo "🚀 Starting Docker containers..."
docker-compose up -d

# Wait for database to be ready
echo "⏳ Waiting for database to be ready..."
sleep 10

# Generate application key
echo "🔑 Generating application key..."
docker-compose exec app php artisan key:generate

# Run migrations
echo "📊 Running database migrations..."
docker-compose exec app php artisan migrate

# Install Voyager
echo "⚓ Installing Voyager admin panel..."
docker-compose exec app php artisan voyager:install

# Create storage link
echo "🔗 Creating storage link..."
docker-compose exec app php artisan storage:link

# Set permissions
echo "🔐 Setting proper permissions..."
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chown -R www-data:www-data /var/www/html/bootstrap/cache

echo "✅ Docker setup complete!"
echo "🌐 Your application is available at: http://localhost:8000"
echo "🗄️  Database is available at: localhost:3306"
echo "📊 Admin panel: http://localhost:8000/admin"
echo ""
echo "📋 Useful commands:"
echo "  docker-compose logs -f app    # View app logs"
echo "  docker-compose exec app bash # Access app container"
echo "  docker-compose down          # Stop all containers"

#!/bin/bash

# Development auto-reload script for rtandrew project

echo "🚀 Starting rtandrew development environment with auto-reload..."

# Start the containers
docker-compose up -d

# Wait for containers to be ready
echo "⏳ Waiting for containers to start..."
sleep 10

# Check if containers are running
if ! docker-compose ps | grep -q "Up"; then
    echo "❌ Failed to start containers"
    exit 1
fi

echo "✅ Containers started successfully!"

# Set up file watching for auto-reload
echo "👀 Setting up file watching for auto-reload..."

# Function to clear Laravel caches
clear_caches() {
    echo "🔄 Clearing Laravel caches..."
    docker-compose exec app php artisan config:clear
    docker-compose exec app php artisan cache:clear
    docker-compose exec app php artisan view:clear
    docker-compose exec app php artisan route:clear
}

# Watch for changes in key directories
watch_directories() {
    echo "📁 Watching directories: app/, config/, routes/, resources/views/"

    # Use fswatch if available, otherwise use inotifywait
    if command -v fswatch &> /dev/null; then
        fswatch -o app/ config/ routes/ resources/views/ | while read; do
            clear_caches
        done
    else
        # Fallback to inotifywait (Linux)
        while inotifywait -e modify,create,delete -r app/ config/ routes/ resources/views/; do
            clear_caches
        done
    fi
}

# Start watching in background
watch_directories &

echo "🎉 Development environment ready!"
echo "🌐 Application: http://localhost:8000"
echo "📊 Database: localhost:3306"
echo "🔄 Auto-reload: Active"
echo ""
echo "Press Ctrl+C to stop"

# Keep script running
wait

#!/bin/bash

# Development environment with auto-reload for rtandrew project

echo "🚀 Starting rtandrew development environment with auto-reload..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

print_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if Docker is running
if ! docker info > /dev/null 2>&1; then
    print_error "Docker is not running. Please start Docker Desktop first."
    exit 1
fi

# Stop any existing containers
print_status "Stopping existing containers..."
docker-compose down > /dev/null 2>&1

# Start the containers
print_status "Starting Docker containers..."
docker-compose up -d

# Wait for containers to be ready
print_status "Waiting for containers to start..."
sleep 10

# Check if containers are running
if ! docker-compose ps | grep -q "Up"; then
    print_error "Failed to start containers"
    docker-compose logs
    exit 1
fi

print_success "Containers started successfully!"

# Check if application is accessible
print_status "Testing application accessibility..."
if curl -s http://localhost:8000 > /dev/null; then
    print_success "Application is accessible at http://localhost:8000"
else
    print_warning "Application may not be fully ready yet"
fi

# Display container status
print_status "Container status:"
docker-compose ps

echo ""
print_success "🎉 Development environment ready!"
echo ""
echo -e "${GREEN}🌐 Application:${NC} http://localhost:8000"
echo -e "${GREEN}📊 Database:${NC} localhost:3306 (user: rtandrew, password: rtandrew)"
echo -e "${GREEN}🔄 Redis:${NC} localhost:6379"
echo -e "${GREEN}⚡ Auto-reload:${NC} Active for PHP files"
echo -e "${GREEN}🎨 Frontend:${NC} Auto-reload for CSS/JS changes"
echo ""
echo -e "${BLUE}📋 Useful commands:${NC}"
echo "  docker-compose logs -f app     # View application logs"
echo "  docker-compose exec app bash  # Access PHP container"
echo "  docker-compose exec node bash # Access Node container"
echo "  docker-compose down           # Stop all containers"
echo ""
echo -e "${YELLOW}🔄 Auto-reload is monitoring:${NC}"
echo "  • app/ directory (PHP files)"
echo "  • config/ directory (configuration)"
echo "  • routes/ directory (routes)"
echo "  • resources/views/ directory (Blade templates)"
echo "  • resources/assets/ directory (CSS/JS/SCSS)"
echo ""
echo -e "${BLUE}Press Ctrl+C to stop all containers${NC}"

# Keep script running and show logs
docker-compose logs -f

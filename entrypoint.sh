#!/bin/bash

# Install dependencies if not already installed
if [ ! -d "vendor" ]; then
  echo "Installing composer dependencies..."
  composer install
fi

php artisan serve --host=127.0.0.1 --port=8080

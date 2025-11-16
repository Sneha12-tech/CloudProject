# Dockerfile for EcoCart PHP Application
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy all files to container
COPY . .

# Expose port (Render will set PORT environment variable)
EXPOSE 8080

# Start PHP built-in server with router
CMD php -S 0.0.0.0:${PORT:-8080} router.php


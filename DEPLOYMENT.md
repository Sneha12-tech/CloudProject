# EcoCart Cloud Deployment Guide

This guide will help you deploy the EcoCart project to various cloud platforms.

## Prerequisites

- Git repository (GitHub, GitLab, or Bitbucket)
- Account on your chosen cloud platform
- Gemini API key (for chatbot functionality)

## Environment Variables

The following environment variables need to be configured:

- `DB_HOST` - Database host (e.g., `localhost` or cloud database URL)
- `DB_USER` - Database username
- `DB_PASSWORD` - Database password
- `DB_NAME` - Database name (default: `ecocart`)
- `GEMINI_API_KEY` - Your Google Gemini API key

## Deployment Options

### Option 1: Railway (Recommended)

Railway is a modern platform that makes deployment easy.

#### Steps:

1. **Sign up** at [railway.app](https://railway.app)

2. **Create a new project** and connect your Git repository

3. **Add a MySQL database:**
   - Click "New" → "Database" → "MySQL"
   - Railway will automatically create a MySQL instance

4. **Set environment variables:**
   - Go to your service settings
   - Add the following variables:
     ```
     DB_HOST=<your-mysql-host>
     DB_USER=<your-mysql-user>
     DB_PASSWORD=<your-mysql-password>
     DB_NAME=ecocart
     GEMINI_API_KEY=<your-gemini-api-key>
     ```
   - Railway provides these values in your MySQL service settings

5. **Deploy:**
   - Railway will automatically detect the `railway.json` file
   - Your app will be deployed and available at a Railway URL

6. **Initialize database:**
   - Connect to your MySQL database using Railway's database tools
   - Run the SQL commands from `db.sql` to create tables

### Option 2: Render

Render offers free tier hosting for PHP applications.

#### Steps:

1. **Sign up** at [render.com](https://render.com)

2. **Create a new Web Service:**
   - Connect your Git repository
   - Select "Web Service"
   - Choose "PHP" as the environment

3. **Configure the service:**
   - Build Command: (leave empty)
   - Start Command: `php -S 0.0.0.0:$PORT -t .`

4. **Add a PostgreSQL or MySQL database:**
   - Create a new database service
   - Note the connection details

5. **Set environment variables:**
   - In your web service settings, add:
     ```
     DB_HOST=<your-db-host>
     DB_USER=<your-db-user>
     DB_PASSWORD=<your-db-password>
     DB_NAME=ecocart
     GEMINI_API_KEY=<your-gemini-api-key>
     ```

6. **Deploy:**
   - Render will automatically deploy from your repository
   - The `render.yaml` file will be used for configuration

7. **Initialize database:**
   - Use Render's database console or connect via a MySQL client
   - Run the SQL commands from `db.sql`

### Option 3: Heroku

#### Steps:

1. **Install Heroku CLI** and login

2. **Create a Heroku app:**
   ```bash
   heroku create your-app-name
   ```

3. **Add MySQL addon:**
   ```bash
   heroku addons:create cleardb:ignite
   ```

4. **Set environment variables:**
   ```bash
   heroku config:set GEMINI_API_KEY=your-api-key
   heroku config:set DB_HOST=your-db-host
   heroku config:set DB_USER=your-db-user
   heroku config:set DB_PASSWORD=your-db-password
   heroku config:set DB_NAME=ecocart
   ```

5. **Deploy:**
   ```bash
   git push heroku main
   ```

### Option 4: DigitalOcean App Platform

#### Steps:

1. **Sign up** at [digitalocean.com](https://www.digitalocean.com)

2. **Create a new app** from your Git repository

3. **Configure:**
   - Environment: PHP
   - Build command: (leave empty)
   - Run command: `php -S 0.0.0.0:$PORT -t .`

4. **Add a database:**
   - Create a MySQL database component
   - Note the connection details

5. **Set environment variables** in the app settings

6. **Deploy** - DigitalOcean will handle the rest

## Database Setup

After deployment, you need to initialize your database:

1. **Connect to your database** (using your platform's database console or a MySQL client)

2. **Run the SQL script:**
   ```sql
   CREATE DATABASE IF NOT EXISTS ecocart;
   
   USE ecocart;
   
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) UNIQUE NOT NULL,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   
   CREATE TABLE IF NOT EXISTS chatbot (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(100) DEFAULT 'Guest',
       user_message TEXT NOT NULL,
       bot_reply TEXT NOT NULL,
       timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   
   CREATE TABLE IF NOT EXISTS feedback (
       id INT AUTO_INCREMENT PRIMARY KEY,
       message TEXT NOT NULL,
       user_feedback TEXT NOT NULL,
       submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

   Or simply import the `db.sql` file.

## Post-Deployment Checklist

- [ ] Database tables created successfully
- [ ] Environment variables configured
- [ ] Website accessible via provided URL
- [ ] User registration/login working
- [ ] Cart functionality working
- [ ] Chatbot (Gemini API) working
- [ ] Images loading correctly (check image paths)

## Troubleshooting

### Database Connection Issues
- Verify all environment variables are set correctly
- Check database host allows connections from your app's IP
- Ensure database name, user, and password are correct

### API Key Issues
- Verify GEMINI_API_KEY is set correctly
- Check API key has proper permissions
- Review API usage limits

### File Path Issues
- Ensure image paths are relative (e.g., `images/1.jpg`)
- Check file permissions on uploaded files

### PHP Errors
- Enable error logging in your platform
- Check PHP version compatibility (requires PHP 7.4+)

## Security Notes

- **Never commit** `.env` file to Git
- Use strong database passwords
- Keep your Gemini API key secure
- Enable HTTPS on your production site
- Regularly update dependencies

## Support

For issues specific to:
- **Railway**: Check [Railway Docs](https://docs.railway.app)
- **Render**: Check [Render Docs](https://render.com/docs)
- **Heroku**: Check [Heroku Docs](https://devcenter.heroku.com)

---

**Note:** Make sure to update your `.gitignore` to exclude `.env` files before pushing to Git!


# 🚀 Render Deployment Guide for EcoCart

This is a step-by-step guide to deploy your EcoCart project on Render.

## Prerequisites

- ✅ GitHub, GitLab, or Bitbucket account
- ✅ Your code pushed to a Git repository
- ✅ Render account (sign up at [render.com](https://render.com) - free tier available)
- ✅ Gemini API key (get it from [Google AI Studio](https://makersuite.google.com/app/apikey))

---

## Step-by-Step Deployment

### Step 1: Prepare Your Repository

Make sure all your code is committed and pushed to GitHub/GitLab/Bitbucket:

```bash
git add .
git commit -m "Ready for Render deployment"
git push origin main
```

### Step 2: Sign Up / Login to Render

1. Go to [render.com](https://render.com)
2. Click **"Get Started for Free"** or **"Sign In"**
3. Sign up with GitHub (recommended) or email

### Step 3: Create a New Web Service

1. In your Render dashboard, click **"New +"** button
2. Select **"Web Service"**
3. Connect your Git repository:
   - If using GitHub, authorize Render
   - Select your repository: `final EcoCart` (or your repo name)
   - Click **"Connect"**

### Step 4: Configure Web Service

Fill in the following settings:

- **Name**: `ecocart` (or any name you prefer)
- **Region**: Choose closest to your users (e.g., `Oregon (US West)`)
- **Branch**: `main` (or `master`)
- **Root Directory**: Leave empty (or `/` if your files are in root)
- **Environment**: `PHP`
- **Build Command**: Leave **empty**
- **Start Command**: `php -S 0.0.0.0:$PORT -t .`
- **Plan**: Select **"Free"** (or paid plan if you prefer)

Click **"Create Web Service"**

### Step 5: Create MySQL Database

1. While your web service is being created, click **"New +"** again
2. Select **"PostgreSQL"** or **"MySQL"** (if available)
   - **Note**: Render's free tier offers PostgreSQL by default
   - If MySQL is not available on free tier, you can:
     - Use PostgreSQL (requires code changes)
     - Upgrade to a paid plan for MySQL
     - Use an external MySQL service (like PlanetScale, Aiven, etc.)

3. Configure database:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **User**: `ecocart_user` (or auto-generated)
   - **Plan**: `Free` (or your preferred plan)
   - **Region**: Same as your web service

4. Click **"Create Database"**

5. **Wait for database to be ready** (takes 1-2 minutes)

### Step 6: Link Database to Web Service

1. Go back to your **Web Service** dashboard
2. Click on **"Environment"** tab
3. Scroll down to **"Environment Variables"**

4. Add these variables:

   **Option A: If using render.yaml (Auto-sync)**
   - Render will automatically sync database credentials if you use `render.yaml`
   - Just add: `GEMINI_API_KEY` = `your-actual-gemini-api-key`

   **Option B: Manual Setup**
   - Click **"Add Environment Variable"**
   - Add each variable:
     ```
     DB_HOST = <from database dashboard - Internal Database URL>
     DB_USER = <from database dashboard>
     DB_PASSWORD = <from database dashboard>
     DB_NAME = ecocart
     GEMINI_API_KEY = your-gemini-api-key-here
     ```

5. **To get database credentials:**
   - Go to your database service dashboard
   - Click on **"Info"** tab
   - Copy the values:
     - **Internal Database URL** → Use for `DB_HOST`
     - **User** → Use for `DB_USER`
     - **Password** → Use for `DB_PASSWORD`
     - **Database** → Use for `DB_NAME`

### Step 7: Initialize Database

1. Go to your **Database** service dashboard
2. Click on **"Connect"** or **"Info"** tab
3. Find **"psql"** command or use **"Connect"** button
4. Or use Render's **"Shell"** feature:
   - Go to your database service
   - Click **"Shell"** tab
   - Run the SQL commands from `db.sql`:

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

CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    upi_id VARCHAR(255) NOT NULL,
    rating INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS ratings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    rating INT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

**Or simply copy and paste the entire contents of `db.sql` file.**

**Alternative: Using Render's Database Console**
- Click on your database service
- Use the **"Connect"** button to open database console
- Paste and run the SQL commands

### Step 8: Deploy

1. Go back to your **Web Service**
2. Render will automatically start deploying
3. Watch the **"Logs"** tab for deployment progress
4. Wait for **"Your service is live"** message

### Step 9: Access Your Site

Once deployed, your site will be available at:
```
https://ecocart.onrender.com
```
(Your URL will be: `https://your-service-name.onrender.com`)

---

## 🔧 Troubleshooting

### Database Connection Issues

**Problem**: "Connection failed" errors

**Solutions**:
1. Verify environment variables are set correctly
2. Check database is fully provisioned (wait 2-3 minutes)
3. For Render, use **Internal Database URL** (not external)
4. Ensure `DB_NAME` matches the database name you created

### Build/Deploy Fails

**Problem**: Deployment fails

**Solutions**:
1. Check **Logs** tab for specific errors
2. Verify `startCommand` is: `php -S 0.0.0.0:$PORT -t .`
3. Ensure all files are committed and pushed
4. Check PHP version (Render uses PHP 8.x by default)

### Images Not Loading

**Problem**: Images show broken links

**Solutions**:
1. Verify `images/` folder is in your repository
2. Check image paths are relative (e.g., `images/1.jpg`)
3. Ensure images are committed to Git

### API Key Issues

**Problem**: Chatbot not working

**Solutions**:
1. Verify `GEMINI_API_KEY` is set in environment variables
2. Check API key is valid and has proper permissions
3. Review Gemini API usage limits

---

## 📋 Post-Deployment Checklist

- [ ] Website is accessible at Render URL
- [ ] Database tables created successfully
- [ ] User registration works
- [ ] User login works
- [ ] Cart functionality works
- [ ] Chatbot (Gemini) responds correctly
- [ ] Images load properly
- [ ] All pages accessible (Home, About, Cart, etc.)

---

## 🔄 Updating Your Deployment

To update your site after making changes:

1. Commit and push changes to your Git repository
2. Render will automatically detect changes
3. A new deployment will start automatically
4. Wait for deployment to complete (usually 2-3 minutes)

---

## 💡 Tips

1. **Free Tier Limitations**:
   - Services spin down after 15 minutes of inactivity
   - First request after spin-down takes ~30 seconds
   - Consider upgrading for production use

2. **Database Backups**:
   - Render automatically backs up databases
   - Check **"Backups"** tab in database dashboard

3. **Custom Domain**:
   - Go to your web service → **"Settings"** → **"Custom Domain"**
   - Add your domain and follow DNS instructions

4. **Environment Variables**:
   - Never commit `.env` files
   - Always use Render's environment variables for secrets

---

## 🆘 Need Help?

- **Render Docs**: [render.com/docs](https://render.com/docs)
- **Render Support**: [render.com/support](https://render.com/support)
- **Community**: [community.render.com](https://community.render.com)

---

**Your EcoCart project should now be live on Render! 🎉**


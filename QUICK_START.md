# Quick Start Deployment Guide

## 🚀 Fastest Way to Deploy (Railway - Recommended)

### Step 1: Prepare Your Repository
```bash
# Make sure all files are committed
git add .
git commit -m "Prepare for cloud deployment"
git push
```

### Step 2: Deploy on Railway

1. Go to [railway.app](https://railway.app) and sign up/login
2. Click **"New Project"** → **"Deploy from GitHub repo"**
3. Select your EcoCart repository
4. Railway will automatically detect it's a PHP app

### Step 3: Add Database

1. In your Railway project, click **"New"** → **"Database"** → **"MySQL"**
2. Railway will create a MySQL database automatically

### Step 4: Configure Environment Variables

1. Click on your web service
2. Go to **"Variables"** tab
3. Add these variables (Railway provides DB values automatically):
   ```
   DB_HOST=<from MySQL service>
   DB_USER=<from MySQL service>
   DB_PASSWORD=<from MySQL service>
   DB_NAME=ecocart
   GEMINI_API_KEY=<your-gemini-api-key>
   ```

### Step 5: Initialize Database

1. Click on your MySQL service
2. Go to **"Data"** tab → **"Query"**
3. Copy and paste the contents of `db.sql`
4. Click **"Run Query"**

### Step 6: Access Your Site

Your site will be live at: `https://your-app-name.up.railway.app`

---

## 🔄 Alternative: Render.com

1. Sign up at [render.com](https://render.com)
2. Create **"New Web Service"** from your Git repo
3. Select **"PHP"** environment
4. Build Command: (leave empty)
5. Start Command: `php -S 0.0.0.0:$PORT -t .`
6. Add MySQL database from **"New +"** → **"PostgreSQL"** (or MySQL if available)
7. Set environment variables (same as Railway)
8. Deploy!

---

## 📝 Important Notes

- **Never commit** your `.env` file (it's in `.gitignore`)
- Update `GEMINI_API_KEY` with your actual API key
- Database credentials are provided by your hosting platform
- Make sure to run `db.sql` to create tables

---

## ✅ Post-Deployment Checklist

- [ ] Site is accessible
- [ ] Database tables created
- [ ] User registration works
- [ ] Login works
- [ ] Cart functionality works
- [ ] Chatbot (Gemini) works
- [ ] Images load correctly

---

**Need help?** Check `DEPLOYMENT.md` for detailed instructions.


# 🚀 Deploy on Render - Step by Step

## Follow these exact steps to deploy your EcoCart on Render

---

## ✅ STEP 1: Push to GitHub (If Not Done)

### Check if you have GitHub remote:
```bash
git remote -v
```

### If no remote, add GitHub:

1. **Create GitHub Repository:**
   - Go to [github.com](https://github.com)
   - Click **"+"** → **"New repository"**
   - Name: `ecocart`
   - Make it **Public**
   - **Don't** initialize with README
   - Click **"Create repository"**

2. **Push Your Code:**
   ```bash
   git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
   git branch -M main
   git push -u origin main
   ```
   (Replace `YOUR_USERNAME` with your GitHub username)

---

## ✅ STEP 2: Deploy on Render

### 2.1 Sign Up / Login
1. Go to **[render.com](https://render.com)**
2. Click **"Get Started for Free"** or **"Sign In"**
3. **Sign up with GitHub** (one-click - recommended!)

### 2.2 Create Web Service
1. Click **"New +"** button (top right corner)
2. Select **"Web Service"**
3. Click **"Connect account"** → Authorize Render to access GitHub
4. Find and select your repository: **`ecocart`**
5. Click **"Connect"**

### 2.3 Configure Web Service Settings

Fill in these settings **EXACTLY**:

- **Name**: `ecocart` (or any name you prefer)
- **Region**: `Oregon (US West)` (or closest to you)
- **Branch**: `main`
- **Root Directory**: (leave **EMPTY**)
- **Environment**: **`PHP`** ⚠️ **IMPORTANT!**
- **Build Command**: (leave **EMPTY**)
- **Start Command**: `php -S 0.0.0.0:$PORT router.php` ⚠️ **Copy exactly!**
- **Plan**: **`Free`** ✅

Click **"Create Web Service"**

### 2.4 Create Database
1. While web service is being created, click **"New +"** again
2. Select **"PostgreSQL"** (FREE tier available)
   - **Note**: If you need MySQL specifically, you can use external service
3. Configure:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **Plan**: **`Free`** ✅
   - **Region**: Same as web service
4. Click **"Create Database"**
5. **Wait 1-2 minutes** for database to be ready

### 2.5 Set Environment Variables

**Easy Way (Using render.yaml - Auto-sync):**
1. Go to your **Web Service** dashboard
2. Click **"Environment"** tab
3. Scroll to **"Environment Variables"** section
4. Click **"Add Environment Variable"**
5. Add only this variable:
   - **Key**: `GEMINI_API_KEY`
   - **Value**: `your-actual-gemini-api-key`
   - (Get it from [Google AI Studio](https://makersuite.google.com/app/apikey) - FREE)
6. **Database credentials will sync automatically!** ✅ (from render.yaml)

**Manual Way (If auto-sync doesn't work):**
1. Go to **Database** → **"Info"** tab
2. Copy these values:
   - **Internal Database URL** (host)
   - **User**
   - **Password**
   - **Database name**
3. Go to **Web Service** → **"Environment"** tab
4. Add these 5 variables:
   ```
   DB_HOST = <Internal Database URL>
   DB_USER = <User>
   DB_PASSWORD = <Password>
   DB_NAME = ecocart
   GEMINI_API_KEY = your-actual-api-key
   ```

### 2.6 Initialize Database
1. Go to your **Database** service dashboard
2. Click **"Connect"** button or **"Info"** tab
3. You'll see connection details
4. Use one of these methods:

   **Method 1: Render Shell**
   - Click **"Shell"** tab in database dashboard
   - Connect to database
   - Copy **entire contents** of `db.sql` file
   - Paste and run the SQL commands

   **Method 2: External Tool**
   - Use DBeaver, pgAdmin, or any PostgreSQL client
   - Connect using credentials from **"Info"** tab
   - Run `db.sql` file

   **Method 3: Render Console**
   - Some Render plans offer web-based SQL console
   - Check **"Data"** or **"Query"** tab

### 2.7 Deploy!
1. Go back to your **Web Service** dashboard
2. Render will automatically start deploying
3. Watch the **"Logs"** tab for deployment progress
4. Wait for **"Your service is live"** message ✅
5. This usually takes 2-3 minutes

---

## ✅ STEP 3: Get Your Live URL! 🎉

After deployment completes, Render gives you:

```
https://ecocart.onrender.com
```

**This is your LIVE PUBLIC URL!** 🌐

(Your actual URL will be: `https://your-service-name.onrender.com`)

---

## ✅ Post-Deployment Checklist

- [ ] Website loads at Render URL
- [ ] Database tables created (check via database dashboard)
- [ ] User registration works
- [ ] User login works
- [ ] Cart functionality works
- [ ] Chatbot responds (Gemini API working)
- [ ] Images load correctly

---

## 🆘 Troubleshooting

### "Service failed to start"
- Check **"Logs"** tab for specific errors
- Verify Start Command is: `php -S 0.0.0.0:$PORT router.php`
- Check environment variables are set correctly

### "404 Not Found"
- Make sure Start Command uses `router.php`
- Check `index.html` exists in root directory
- Review **"Logs"** for routing errors

### "Database connection failed"
- Wait 2-3 minutes after creating database
- Verify all DB environment variables are correct
- Use **Internal Database URL** (not external)
- Check database is fully provisioned

### "Build failed"
- Check **"Logs"** tab for build errors
- Verify all files are committed and pushed to GitHub
- Check PHP version compatibility

---

## 📋 Important Notes

1. **Free Tier Limitations:**
   - Services may spin down after 15 minutes of inactivity
   - First request after spin-down takes ~30 seconds
   - Perfect for testing and small projects

2. **Auto-Deploy:**
   - Render automatically deploys when you push to GitHub
   - Just push changes and Render will update your site

3. **Custom Domain:**
   - You can add your own domain in Render settings
   - Go to Web Service → **"Settings"** → **"Custom Domain"**

---

## 🎯 Quick Reference

**Start Command (IMPORTANT!):**
```
php -S 0.0.0.0:$PORT router.php
```

**Environment Variables Needed:**
- `GEMINI_API_KEY` (required)
- Database credentials (auto-sync from render.yaml)

**Database Initialization:**
- Run `db.sql` file in database console

---

**Follow these steps and your website will be LIVE on Render! 🚀**


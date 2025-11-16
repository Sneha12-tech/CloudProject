# 🚀 Deploy Your Website LIVE - Step by Step

## Get Your Live Public URL in 5 Minutes!

---

## Step 1: Push to GitHub (2 minutes)

### 1.1 Create GitHub Repository

1. Go to [github.com](https://github.com) and sign in
2. Click **"+"** (top right) → **"New repository"**
3. Repository name: `ecocart` (or any name)
4. Make it **Public** (or Private if you have GitHub Pro)
5. **DO NOT** check "Initialize with README"
6. Click **"Create repository"**

### 1.2 Push Your Code

Copy these commands (replace YOUR_USERNAME with your GitHub username):

```bash
git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
git branch -M main
git push -u origin main
```

**Example:**
```bash
git remote add origin https://github.com/john/ecocart.git
git branch -M main
git push -u origin main
```

---

## Step 2: Deploy on Render (3 minutes)

### 2.1 Sign Up / Login

1. Go to [render.com](https://render.com)
2. Click **"Get Started for Free"**
3. **Sign up with GitHub** (one-click login - recommended!)

### 2.2 Create Web Service

1. Click **"New +"** button (top right)
2. Select **"Web Service"**
3. Click **"Connect account"** → Authorize Render
4. Find and select your repository: `ecocart`
5. Click **"Connect"**

### 2.3 Configure Settings

Fill in exactly:

- **Name**: `ecocart` (or your preferred name)
- **Region**: `Oregon (US West)` (or closest to you)
- **Branch**: `main`
- **Root Directory**: (leave empty)
- **Environment**: **`PHP`** ⚠️ Important!
- **Build Command**: (leave **EMPTY**)
- **Start Command**: `php -S 0.0.0.0:$PORT router.php` ⚠️ Copy exactly!
- **Plan**: **`Free`**

Click **"Create Web Service"**

### 2.4 Create Database

1. Click **"New +"** again
2. Select **"PostgreSQL"** (or **"MySQL"** if available)
3. Configure:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **Plan**: `Free`
4. Click **"Create Database"**
5. **Wait 1-2 minutes** for database to be ready

### 2.5 Set Environment Variables

1. Go to your **Web Service** dashboard
2. Click **"Environment"** tab
3. Scroll to **"Environment Variables"**
4. Click **"Add Environment Variable"**
5. Add:
   - **Key**: `GEMINI_API_KEY`
   - **Value**: `your-actual-gemini-api-key`
   - (Get it from [Google AI Studio](https://makersuite.google.com/app/apikey))
6. Database credentials will sync automatically from `render.yaml`! ✅

### 2.6 Initialize Database

1. Go to **Database** dashboard
2. Click **"Connect"** or **"Info"** tab
3. Use **"Shell"** tab or external tool
4. Copy entire contents of `db.sql` file
5. Paste and run the SQL commands

### 2.7 Deploy!

1. Go back to **Web Service** dashboard
2. Render will automatically start deploying
3. Watch **"Logs"** tab for progress
4. Wait for **"Your service is live"** message ✅

---

## Step 3: Get Your LIVE Public URL! 🎉

After deployment completes, Render gives you:

```
https://ecocart.onrender.com
```

**This is your LIVE PUBLIC URL!** 🌐

(Your actual URL will be: `https://your-service-name.onrender.com`)

---

## ✅ Your Website is Now LIVE!

Share this URL with anyone:
- ✅ Works from anywhere in the world
- ✅ Accessible 24/7
- ✅ Free hosting on Render
- ✅ Permanent URL

---

## 🆘 Troubleshooting

### "Service failed to start"
- Check **"Logs"** tab for errors
- Verify Start Command: `php -S 0.0.0.0:$PORT router.php`
- Check environment variables are set

### "404 Not Found"
- Make sure Start Command uses `router.php`
- Check `index.html` exists in root
- Review **"Logs"** for routing errors

### "Database connection failed"
- Wait 2-3 minutes after creating database
- Verify environment variables are set
- Check database is fully provisioned

---

## 📋 Quick Checklist

- [ ] Code pushed to GitHub
- [ ] Render account created
- [ ] Web service created with correct Start Command
- [ ] Database created
- [ ] Environment variables set (GEMINI_API_KEY)
- [ ] Database initialized (db.sql run)
- [ ] Deployment completed
- [ ] **LIVE URL received!** 🎉

---

**Follow these steps and your website will be LIVE in 5 minutes! 🚀**


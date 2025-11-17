# 🚀 START DEPLOYMENT ON RENDER NOW

## Quick Checklist Before Starting:

- [ ] Code is committed locally
- [ ] GitHub account ready
- [ ] Render account ready (or will create one)

---

## 🎯 DEPLOYMENT STEPS

### STEP 1: Push to GitHub (If Not Done)

**Check if GitHub is connected:**
```bash
git remote -v
```

**If you see a GitHub URL, skip to Step 2.**

**If no GitHub remote, do this:**

1. **Create GitHub Repository:**
   - Go to [github.com](https://github.com)
   - Click **"+"** → **"New repository"**
   - Name: `ecocart`
   - **Public**
   - **Don't** initialize with README
   - Click **"Create repository"**

2. **Connect and Push:**
   ```bash
   git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
   git branch -M main
   git push -u origin main
   ```
   (Replace `YOUR_USERNAME` with your GitHub username)

---

### STEP 2: Deploy on Render

#### 2.1 Go to Render
👉 **[render.com](https://render.com)** → Sign up/Login

#### 2.2 Create Web Service
1. Click **"New +"** → **"Web Service"**
2. **Connect GitHub** → Select repository: `ecocart`
3. **Settings:**
   - Name: `ecocart`
   - Environment: **`PHP`**
   - Start Command: **`php -S 0.0.0.0:$PORT router.php`** ⚠️
   - Plan: **`Free`**
4. Click **"Create Web Service"**

#### 2.3 Create Database
1. Click **"New +"** → **"PostgreSQL"**
2. Name: `ecocart-db`
3. Plan: **`Free`**
4. Click **"Create Database"**

#### 2.4 Set Environment Variable
1. Go to **Web Service** → **"Environment"** tab
2. Add: `GEMINI_API_KEY` = `your-api-key`
3. Database credentials sync automatically! ✅

#### 2.5 Initialize Database
1. Go to **Database** → **"Connect"** or **"Shell"**
2. Run SQL from `db.sql` file

#### 2.6 Wait for Deployment
- Watch **"Logs"** tab
- Wait 2-3 minutes
- Get your **LIVE URL!** 🎉

---

## ✅ Your Live URL Will Be:

```
https://ecocart.onrender.com
```

---

## 📖 Detailed Guide

See **`RENDER_DEPLOY_STEPS.md`** for complete step-by-step instructions.

---

**Let's deploy! Start with Step 1 above! 🚀**


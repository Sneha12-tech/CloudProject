# 🚀 Deploy to FREE Live URL - Complete Guide

## Get Your Website LIVE for FREE on Render.com

**Your website will be live at:** `https://your-app.onrender.com`

---

## ✅ Step-by-Step Deployment (FREE)

### STEP 1: Push to GitHub (2 minutes)

#### 1.1 Create GitHub Account (if you don't have one)
- Go to [github.com](https://github.com) → Sign up (FREE)

#### 1.2 Create New Repository
1. Click **"+"** (top right) → **"New repository"**
2. Repository name: `ecocart`
3. Make it **Public** ✅
4. **DO NOT** check "Initialize with README"
5. Click **"Create repository"**

#### 1.3 Push Your Code
Run these commands in your terminal:

```bash
cd "C:\xampp\htdocs\final EcoCart"
git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
git branch -M main
git push -u origin main
```

**Replace `YOUR_USERNAME` with your GitHub username!**

**Example:**
```bash
git remote add origin https://github.com/john/ecocart.git
git branch -M main
git push -u origin main
```

---

### STEP 2: Deploy on Render (FREE) (5 minutes)

#### 2.1 Sign Up on Render
1. Go to [render.com](https://render.com)
2. Click **"Get Started for Free"**
3. **Sign up with GitHub** (one-click - recommended!)

#### 2.2 Create Web Service
1. Click **"New +"** button (top right)
2. Select **"Web Service"**
3. Click **"Connect account"** → Authorize Render
4. Find and select your repository: `ecocart`
5. Click **"Connect"**

#### 2.3 Configure Settings
Fill in these settings **EXACTLY**:

- **Name**: `ecocart` (or any name you like)
- **Region**: `Oregon (US West)` (or closest to you)
- **Branch**: `main`
- **Root Directory**: (leave **EMPTY**)
- **Environment**: **`PHP`** ⚠️ Important!
- **Build Command**: (leave **EMPTY**)
- **Start Command**: `php -S 0.0.0.0:$PORT router.php` ⚠️ Copy exactly!
- **Plan**: **`Free`** ✅

Click **"Create Web Service"**

#### 2.4 Create Database (FREE)
1. Click **"New +"** again
2. Select **"PostgreSQL"** (FREE tier available)
   - **Note**: If you need MySQL, you can use external service later
3. Configure:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **Plan**: **`Free`** ✅
4. Click **"Create Database"**
5. **Wait 1-2 minutes** for database to be ready

#### 2.5 Set Environment Variables
1. Go to your **Web Service** dashboard
2. Click **"Environment"** tab
3. Scroll to **"Environment Variables"**
4. Click **"Add Environment Variable"**
5. Add this variable:
   - **Key**: `GEMINI_API_KEY`
   - **Value**: `your-actual-gemini-api-key`
   - (Get it from [Google AI Studio](https://makersuite.google.com/app/apikey) - FREE)
6. **Database credentials sync automatically!** ✅ (from render.yaml)

#### 2.6 Initialize Database
1. Go to **Database** dashboard
2. Click **"Connect"** or **"Info"** tab
3. Use **"Shell"** tab or external tool
4. Copy **entire contents** of `db.sql` file
5. Paste and run the SQL commands

#### 2.7 Deploy!
1. Go back to **Web Service** dashboard
2. Render will automatically start deploying
3. Watch **"Logs"** tab for progress
4. Wait for **"Your service is live"** message ✅

---

### STEP 3: Get Your FREE LIVE URL! 🎉

After deployment completes (2-3 minutes), Render gives you:

```
https://ecocart.onrender.com
```

**This is your FREE LIVE PUBLIC URL!** 🌐

(Your actual URL will be: `https://your-service-name.onrender.com`)

---

## ✅ What You Get (ALL FREE!)

- ✅ **Permanent Public URL** - Accessible from anywhere
- ✅ **Free Hosting** - Render free tier
- ✅ **Free Database** - PostgreSQL free tier
- ✅ **24/7 Availability** - Your site is always online
- ✅ **HTTPS Enabled** - Secure connection
- ✅ **Auto-Deploy** - Updates automatically on git push

---

## 📋 Checklist

- [ ] GitHub account created
- [ ] Repository created and code pushed
- [ ] Render account created
- [ ] Web service created with correct Start Command
- [ ] Database created
- [ ] Environment variables set
- [ ] Database initialized (db.sql run)
- [ ] Deployment completed
- [ ] **LIVE URL received!** 🎉

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

## 🎯 Quick Commands Reference

```bash
# Push to GitHub
git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
git branch -M main
git push -u origin main
```

---

## 📚 Resources

- **Render Docs**: [render.com/docs](https://render.com/docs)
- **GitHub**: [github.com](https://github.com)
- **Google AI Studio**: [makersuite.google.com](https://makersuite.google.com/app/apikey)

---

## 🚀 Next Steps After Deployment

1. **Test Your Live URL**: Visit your Render URL
2. **Share It**: Share with friends, family, or clients
3. **Update Anytime**: Just push to GitHub and Render auto-deploys!

---

**Follow these steps and your website will be LIVE for FREE! 🎉**


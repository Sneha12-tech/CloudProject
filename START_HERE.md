# 🚀 START HERE - Deploy to Render

## ✅ Your project is ready! Follow these steps:

---

## Step 1: Push to GitHub (2 minutes)

### 1.1 Create GitHub Repository
1. Go to [github.com](https://github.com) and sign in
2. Click **"+"** → **"New repository"**
3. Name: `ecocart` (or any name)
4. **Make it Public** (or Private if you have GitHub Pro)
5. **DO NOT** check "Initialize with README"
6. Click **"Create repository"**

### 1.2 Push Your Code
Copy the commands GitHub shows you, or use these (replace YOUR_USERNAME):

```bash
git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
git branch -M main
git push -u origin main
```

**Your code is now on GitHub! ✅**

---

## Step 2: Deploy on Render (5 minutes)

### 2.1 Sign Up / Login
1. Go to [render.com](https://render.com)
2. Click **"Get Started for Free"** or **"Sign In"**
3. **Sign up with GitHub** (recommended - one click!)

### 2.2 Create Web Service
1. Click **"New +"** (top right)
2. Select **"Web Service"**
3. Click **"Connect account"** → Authorize Render
4. Find and select your repository: `ecocart`
5. Click **"Connect"**

### 2.3 Configure Settings
Fill in exactly:

- **Name**: `ecocart`
- **Region**: `Oregon (US West)` (or closest to you)
- **Branch**: `main`
- **Root Directory**: (leave empty)
- **Environment**: **`PHP`** ⚠️ Important!
- **Build Command**: (leave **EMPTY**)
- **Start Command**: `php -S 0.0.0.0:$PORT -t .` ⚠️ Copy exactly!
- **Plan**: **`Free`**

Click **"Create Web Service"** (don't worry about errors yet)

### 2.4 Create Database
1. Click **"New +"** again
2. Select **"PostgreSQL"** (or **"MySQL"** if available)
   - **Note**: Free tier usually has PostgreSQL
   - If you need MySQL, consider external service or paid plan
3. Configure:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **Plan**: `Free`
4. Click **"Create Database"**
5. **Wait 1-2 minutes** for it to be ready

### 2.5 Set Environment Variables

**Easy Way (Using render.yaml):**
1. Go to **Web Service** → **"Environment"** tab
2. Scroll to **"Environment Variables"**
3. Click **"Add Environment Variable"**
4. Add:
   - **Key**: `GEMINI_API_KEY`
   - **Value**: `your-actual-gemini-api-key`
5. Database credentials will sync automatically! ✅

**Manual Way:**
1. Go to **Database** → **"Info"** tab
2. Copy: Internal Database URL, User, Password
3. Go to **Web Service** → **"Environment"** tab
4. Add these 5 variables:
   ```
   DB_HOST = <Internal Database URL>
   DB_USER = <User>
   DB_PASSWORD = <Password>
   DB_NAME = ecocart
   GEMINI_API_KEY = your-api-key
   ```

### 2.6 Initialize Database
1. Go to **Database** dashboard
2. Click **"Connect"** or **"Info"** tab
3. Use one of these:

   **Option A: Render Shell**
   - Click **"Shell"** tab
   - Connect to database
   - Copy entire contents of `db.sql` file
   - Paste and run

   **Option B: External Tool**
   - Use MySQL Workbench, DBeaver, or phpMyAdmin
   - Connect using credentials from **"Info"** tab
   - Import `db.sql` file

### 2.7 Deploy!
1. Go to **Web Service** dashboard
2. Click **"Manual Deploy"** → **"Deploy latest commit"** (if needed)
3. Watch **"Logs"** tab
4. Wait for **"Your service is live"** ✅

---

## Step 3: Access Your Site! 🎉

Your site will be live at:
```
https://ecocart.onrender.com
```
(Your URL: `https://your-service-name.onrender.com`)

---

## ✅ Test Your Deployment

1. **Homepage**: Visit your Render URL
2. **Register**: Create a test account
3. **Login**: Test login functionality
4. **Cart**: Add items to cart
5. **Chatbot**: Test Gemini chatbot
6. **Images**: Verify images load

---

## 🆘 Common Issues & Fixes

### ❌ "Service failed to start"
**Fix**: 
- Check **"Logs"** tab for errors
- Verify Start Command: `php -S 0.0.0.0:$PORT -t .`
- Check environment variables are set

### ❌ "Database connection failed"
**Fix**:
- Verify all DB environment variables
- Wait 2-3 minutes after creating database
- Use **Internal Database URL** (not external)

### ❌ "404 Not Found"
**Fix**:
- Check `index.html` exists in root
- Verify file paths are correct
- Check **"Logs"** for routing errors

### ❌ Images not loading
**Fix**:
- Verify `images/` folder is in repository
- Check image paths: `images/1.jpg` (relative paths)

---

## 📚 More Help

- **Detailed Guide**: `RENDER_DEPLOYMENT.md`
- **Quick Reference**: `RENDER_QUICK_START.md`
- **Render Docs**: [render.com/docs](https://render.com/docs)

---

## 🎯 Quick Checklist

- [ ] Code pushed to GitHub
- [ ] Render account created
- [ ] Web service created
- [ ] Database created
- [ ] Environment variables set
- [ ] Database initialized (db.sql run)
- [ ] Site is live and accessible
- [ ] All features tested

---

**You're all set! Follow the steps above and your EcoCart will be live on Render! 🚀**


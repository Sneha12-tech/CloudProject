# 🌐 Make Your Website LIVE - Quick Guide

## Your website will be LIVE at: `https://your-app.onrender.com`

---

## ⚡ Quick Steps (5 Minutes)

### 1️⃣ Push to GitHub

**If you haven't created a GitHub repo yet:**

1. Go to [github.com](https://github.com) → Sign in
2. Click **"+"** → **"New repository"**
3. Name: `ecocart`
4. Make it **Public**
5. **Don't** initialize with README
6. Click **"Create repository"**

**Then run these commands:**
```bash
cd "C:\xampp\htdocs\final EcoCart"
git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
git branch -M main
git push -u origin main
```

*(Replace YOUR_USERNAME with your GitHub username)*

---

### 2️⃣ Deploy on Render

1. **Go to**: [render.com](https://render.com)
2. **Sign up** with GitHub (one click!)
3. **Click**: "New +" → "Web Service"
4. **Connect** your GitHub repo: `ecocart`
5. **Settings**:
   - Environment: `PHP`
   - Start Command: `php -S 0.0.0.0:$PORT router.php`
   - Plan: `Free`
6. **Create Database**: "New +" → "PostgreSQL"
   - Name: `ecocart-db`
7. **Environment Variables**:
   - Add: `GEMINI_API_KEY` = your-api-key
8. **Initialize Database**: Run `db.sql` in database console
9. **Deploy!**

---

### 3️⃣ Get Your LIVE URL! 🎉

After deployment (2-3 minutes), Render gives you:

```
https://ecocart.onrender.com
```

**This is your LIVE PUBLIC URL!** ✅

---

## 📋 What You Need

- ✅ GitHub account (free)
- ✅ Render account (free)
- ✅ Gemini API key (get from [Google AI Studio](https://makersuite.google.com/app/apikey))

---

## 🆘 Need Help?

- **Detailed Guide**: See `DEPLOY_LIVE_NOW.md`
- **Render Docs**: [render.com/docs](https://render.com/docs)

---

**Follow these steps and your website will be LIVE! 🚀**


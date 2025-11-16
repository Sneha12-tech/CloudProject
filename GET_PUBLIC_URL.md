# 🌐 Get Public URL for Your Website

You have **2 options** to get a public URL:

---

## Option 1: Deploy to Render (Recommended - Permanent URL) ✅

This gives you a **permanent public URL** like: `https://ecocart.onrender.com`

### Quick Steps:

1. **Push to GitHub** (if not done):
   ```bash
   git push origin main
   ```

2. **Go to Render.com**:
   - Sign up/Login at [render.com](https://render.com)
   - Click **"New +"** → **"Web Service"**
   - Connect your GitHub repository

3. **Configure**:
   - Environment: `PHP`
   - Start Command: `php -S 0.0.0.0:$PORT router.php`
   - Plan: `Free`

4. **Create Database**:
   - Click **"New +"** → **"PostgreSQL"** or **"MySQL"**
   - Name: `ecocart-db`

5. **Set Environment Variables**:
   - `GEMINI_API_KEY` = your-api-key
   - Database credentials sync automatically

6. **Get Your Public URL**:
   - After deployment, Render gives you: `https://your-app-name.onrender.com`
   - This is your **permanent public URL**!

**Time**: 5-10 minutes  
**Result**: Permanent public URL ✅

---

## Option 2: Use ngrok (Quick - Temporary URL)

This gives you a **temporary public URL** that works right now.

### Steps:

1. **Download ngrok**:
   - Go to [ngrok.com/download](https://ngrok.com/download)
   - Download for Windows
   - Extract the .exe file

2. **Start ngrok** (in a new terminal):
   ```bash
   ngrok http 8000
   ```

3. **Get Your Public URL**:
   - ngrok will show a URL like: `https://abc123.ngrok.io`
   - This is your **temporary public URL**!

**Time**: 2 minutes  
**Result**: Temporary public URL (works until you close ngrok)

---

## 🎯 Which Should You Choose?

- **Render**: Best for production, permanent URL, free hosting
- **ngrok**: Quick testing, temporary URL, requires keeping ngrok running

---

## 📋 Current Status

Your project is running locally at: `http://localhost:8000`

To make it public:
- **Deploy to Render** → Get permanent URL
- **Use ngrok** → Get temporary URL now

---

**I recommend deploying to Render for a permanent solution! 🚀**


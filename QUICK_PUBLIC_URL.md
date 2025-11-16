# ⚡ Quick Public URL Setup

## Fastest Way: Deploy to Render (5 minutes)

### Step 1: Push to GitHub
```bash
git push origin main
```

### Step 2: Deploy on Render
1. Go to [render.com](https://render.com) → Sign up
2. **"New +"** → **"Web Service"**
3. Connect your GitHub repo
4. Settings:
   - Environment: `PHP`
   - Start Command: `php -S 0.0.0.0:$PORT router.php`
5. Create Database: **"New +"** → **"PostgreSQL"**
6. Set `GEMINI_API_KEY` environment variable
7. **Deploy!**

### Step 3: Get Your Public URL
After deployment, Render gives you:
```
https://your-app-name.onrender.com
```

**This is your permanent public URL! ✅**

---

## Alternative: ngrok (2 minutes - Temporary)

1. Download: [ngrok.com/download](https://ngrok.com/download)
2. Run: `ngrok http 8000`
3. Get URL: `https://abc123.ngrok.io`

**This is temporary - works until you close ngrok**

---

**For permanent public URL → Deploy to Render! 🚀**


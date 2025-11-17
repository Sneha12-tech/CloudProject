# 🐳 Render Deployment with Docker

## Render Doesn't Support PHP Natively - Use Docker Instead

---

## ✅ Solution: Use Docker

Render requires Docker for PHP applications. I've created a `Dockerfile` for you!

---

## 📋 Updated Render Settings

When creating Web Service on Render, use these settings:

| Setting | Value |
|---------|-------|
| **Name** | `ecocart` |
| **Region** | `Oregon (US West)` |
| **Branch** | `main` |
| **Root Directory** | **(leave EMPTY)** |
| **Language/Environment** | **`Docker`** ⚠️ Select this! |
| **Dockerfile Path** | **`Dockerfile`** ⚠️ Important! |
| **Plan** | `Free` |

---

## ✅ Step-by-Step Deployment

### Step 1: Commit Dockerfile

The `Dockerfile` has been created. Commit it:

```bash
git add Dockerfile
git commit -m "Add Dockerfile for Render deployment"
git push origin main
```

### Step 2: Deploy on Render

1. **Go to Render**: [render.com](https://render.com)
2. **Create Web Service**: Click "New +" → "Web Service"
3. **Connect GitHub**: Select your repository
4. **Settings**:
   - **Environment**: Select **`Docker`** ⚠️
   - **Dockerfile Path**: `Dockerfile` ⚠️
   - **Root Directory**: (leave empty)
   - **Plan**: `Free`
5. **Create Database**: "New +" → "PostgreSQL"
6. **Set Environment Variables**: `GEMINI_API_KEY`
7. **Deploy!**

---

## 🎯 Key Settings

### Environment
- Select: **`Docker`** (not PHP, not Static Site)

### Dockerfile Path
- Enter: **`Dockerfile`** (exactly as shown)

### Root Directory
- Leave: **EMPTY**

---

## ✅ What the Dockerfile Does

The Dockerfile I created:
- Uses PHP 8.2
- Copies all your files
- Runs PHP built-in server with router.php
- Works exactly like before, but in Docker!

---

## 🆘 Alternative: Use Railway (Easier for PHP)

If Docker seems complicated, Railway supports PHP natively:

1. Go to [railway.app](https://railway.app)
2. Connect GitHub repo
3. Railway auto-detects PHP
4. Deploy! (No Dockerfile needed)

---

## 📋 Complete Checklist

- [ ] Dockerfile created ✅ (I did this for you)
- [ ] Commit and push Dockerfile
- [ ] Create Render Web Service
- [ ] Select **`Docker`** as environment
- [ ] Set Dockerfile Path: **`Dockerfile`**
- [ ] Create database
- [ ] Set environment variables
- [ ] Deploy!

---

## ✅ Summary

**Render Settings:**
- **Environment**: `Docker`
- **Dockerfile Path**: `Dockerfile`
- **Root Directory**: (empty)

The Dockerfile is ready - just commit it and deploy! 🚀


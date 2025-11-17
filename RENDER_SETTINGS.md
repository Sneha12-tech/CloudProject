# ⚙️ Render Settings Configuration

## Settings for Your EcoCart Project

---

## ✅ Root Directory

**What to write:** Leave it **EMPTY** or put `/`

**Why:**
- All your project files (index.html, router.php, etc.) are in the root directory
- No subdirectory structure
- Render will look for files in the root

**In Render Dashboard:**
- **Root Directory**: (leave empty) or `/`

---

## ✅ Dockerfile Path

**What to write:** Leave it **EMPTY** (don't fill this)

**Why:**
- You're using **PHP environment**, not Docker
- Dockerfile Path is only for Docker deployments
- Your project uses PHP built-in server, not Docker

**In Render Dashboard:**
- **Dockerfile Path**: (leave empty) - **Don't fill this field**

---

## 📋 Complete Render Settings

When creating Web Service on Render, use these **EXACT** settings:

| Setting | Value |
|---------|-------|
| **Name** | `ecocart` (or any name) |
| **Region** | `Oregon (US West)` (or closest) |
| **Branch** | `main` |
| **Root Directory** | **(leave EMPTY)** ✅ |
| **Environment** | **`PHP`** ⚠️ Important! |
| **Build Command** | **(leave EMPTY)** |
| **Start Command** | **`php -S 0.0.0.0:$PORT router.php`** ⚠️ Copy exactly! |
| **Dockerfile Path** | **(leave EMPTY)** ✅ |
| **Plan** | **`Free`** |

---

## 🎯 Important Notes

### Root Directory
- ✅ **Leave EMPTY** - Your files are in root
- ❌ Don't put `/app` or any subdirectory
- ❌ Don't put `./` or `../`

### Dockerfile Path
- ✅ **Leave EMPTY** - Not using Docker
- ❌ Don't create a Dockerfile
- ❌ Don't fill this field

### Start Command
- ✅ **Must be:** `php -S 0.0.0.0:$PORT router.php`
- This uses the router.php file we created
- This ensures index.html is served correctly

---

## ✅ Quick Checklist

When creating Web Service on Render:

- [ ] Root Directory: **EMPTY** ✅
- [ ] Environment: **PHP** ✅
- [ ] Build Command: **EMPTY** ✅
- [ ] Start Command: **`php -S 0.0.0.0:$PORT router.php`** ✅
- [ ] Dockerfile Path: **EMPTY** ✅
- [ ] Plan: **Free** ✅

---

## 🆘 Common Mistakes

### ❌ Wrong: Root Directory = `/app`
- **Why wrong:** Your files aren't in /app folder
- **Result:** 404 errors, files not found

### ❌ Wrong: Dockerfile Path = `Dockerfile`
- **Why wrong:** You're not using Docker
- **Result:** Build errors, deployment fails

### ✅ Correct: Both fields EMPTY
- **Why correct:** PHP project in root, no Docker
- **Result:** Everything works! ✅

---

## 📝 Summary

**Root Directory:** Leave **EMPTY**  
**Dockerfile Path:** Leave **EMPTY**

That's it! Simple! 🎉

---

**Use these settings and your deployment will work perfectly! ✅**


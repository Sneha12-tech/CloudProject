# ⚡ Quick Render Deployment (5 Minutes)

## Prerequisites
- ✅ Code pushed to GitHub/GitLab/Bitbucket
- ✅ Render account ([render.com](https://render.com))
- ✅ Gemini API key

---

## 🚀 Deployment Steps

### 1. Create Web Service
1. Go to [render.com](https://render.com) → **"New +"** → **"Web Service"**
2. Connect your Git repository
3. Configure:
   - **Name**: `ecocart`
   - **Environment**: `PHP`
   - **Build Command**: (leave empty)
   - **Start Command**: `php -S 0.0.0.0:$PORT -t .`
   - **Plan**: `Free`

### 2. Create Database
1. **"New +"** → **"PostgreSQL"** or **"MySQL"** (if available)
2. Configure:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **Plan**: `Free`

### 3. Set Environment Variables
In your **Web Service** → **"Environment"** tab, add:

```
DB_HOST = <from database Info tab>
DB_USER = <from database Info tab>
DB_PASSWORD = <from database Info tab>
DB_NAME = ecocart
GEMINI_API_KEY = your-actual-api-key
```

### 4. Initialize Database
1. Go to **Database** → **"Connect"** or **"Shell"**
2. Run SQL from `db.sql`:
   ```sql
   CREATE TABLE users (...);
   CREATE TABLE chatbot (...);
   CREATE TABLE feedback (...);
   CREATE TABLE payments (...);
   CREATE TABLE ratings (...);
   ```

### 5. Deploy!
- Render auto-deploys on git push
- Your site: `https://ecocart.onrender.com`

---

## ✅ Done!

See `RENDER_DEPLOYMENT.md` for detailed instructions.


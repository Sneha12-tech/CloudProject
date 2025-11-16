# 🚀 Deploy to Render - Step by Step

Follow these steps to deploy your EcoCart project on Render RIGHT NOW!

---

## Step 1: Initialize Git Repository (If Not Done)

Open terminal in your project folder and run:

```bash
git init
git add .
git commit -m "Initial commit - Ready for Render deployment"
```

---

## Step 2: Push to GitHub/GitLab/Bitbucket

### Option A: GitHub (Recommended)

1. Go to [github.com](https://github.com) and create a new repository
2. Name it: `ecocart` (or any name)
3. **Don't** initialize with README
4. Copy the repository URL

Then run:
```bash
git remote add origin https://github.com/YOUR_USERNAME/ecocart.git
git branch -M main
git push -u origin main
```

### Option B: GitLab

1. Go to [gitlab.com](https://gitlab.com) and create a new project
2. Follow similar steps as GitHub

---

## Step 3: Deploy on Render

### 3.1 Create Render Account
1. Go to [render.com](https://render.com)
2. Click **"Get Started for Free"**
3. Sign up with GitHub (easiest) or email

### 3.2 Create Web Service
1. Click **"New +"** button (top right)
2. Select **"Web Service"**
3. Click **"Connect account"** if prompted (connect GitHub)
4. Select your repository: `ecocart` (or your repo name)
5. Click **"Connect"**

### 3.3 Configure Web Service
Fill in these settings:

- **Name**: `ecocart` (or your preferred name)
- **Region**: Choose closest to you (e.g., `Oregon (US West)`)
- **Branch**: `main`
- **Root Directory**: (leave empty)
- **Environment**: Select **`PHP`**
- **Build Command**: (leave **EMPTY**)
- **Start Command**: `php -S 0.0.0.0:$PORT -t .`
- **Plan**: Select **`Free`**

Click **"Create Web Service"** (don't deploy yet!)

### 3.4 Create Database
1. While web service is being created, click **"New +"** again
2. Select **"PostgreSQL"** (or **"MySQL"** if available on free tier)
   - **Note**: If MySQL not available, you can use PostgreSQL (requires code changes) or external MySQL
3. Configure:
   - **Name**: `ecocart-db`
   - **Database**: `ecocart`
   - **User**: (auto-generated or `ecocart_user`)
   - **Plan**: `Free`
   - **Region**: Same as web service
4. Click **"Create Database"**
5. **Wait 1-2 minutes** for database to be ready

### 3.5 Set Environment Variables

**Option A: Using render.yaml (Easier - Auto-sync)**
1. Go to your **Web Service** dashboard
2. Click **"Environment"** tab
3. Scroll to **"Environment Variables"**
4. Click **"Add Environment Variable"**
5. Add only:
   - **Key**: `GEMINI_API_KEY`
   - **Value**: `your-actual-gemini-api-key-here`
6. The database credentials will sync automatically from `render.yaml`!

**Option B: Manual Setup**
1. Go to your **Database** service → **"Info"** tab
2. Copy these values:
   - **Internal Database URL** (host)
   - **User**
   - **Password**
   - **Database name**
3. Go to your **Web Service** → **"Environment"** tab
4. Add these variables:
   ```
   DB_HOST = <Internal Database URL from step 2>
   DB_USER = <User from step 2>
   DB_PASSWORD = <Password from step 2>
   DB_NAME = ecocart
   GEMINI_API_KEY = your-actual-gemini-api-key
   ```

### 3.6 Initialize Database
1. Go to your **Database** service dashboard
2. Click **"Connect"** button (or **"Info"** tab)
3. You'll see connection details
4. Use one of these methods:

   **Method 1: Render Shell**
   - Click **"Shell"** tab in database dashboard
   - Run: `mysql -u <user> -p<password> <database>` (or `psql` for PostgreSQL)
   - Paste contents of `db.sql` file

   **Method 2: External Tool**
   - Use MySQL Workbench, DBeaver, or any MySQL client
   - Connect using credentials from **"Info"** tab
   - Run `db.sql` file

   **Method 3: Render Console**
   - Some Render plans offer web-based SQL console
   - Check **"Data"** or **"Query"** tab

### 3.7 Deploy!
1. Go back to your **Web Service** dashboard
2. Click **"Manual Deploy"** → **"Deploy latest commit"** (if needed)
3. Or just wait - Render auto-deploys on git push
4. Watch the **"Logs"** tab for deployment progress
5. Wait for **"Your service is live"** message

---

## Step 4: Access Your Site

Once deployed, your site will be available at:
```
https://ecocart.onrender.com
```
(Your actual URL will be: `https://your-service-name.onrender.com`)

---

## ✅ Post-Deployment Checklist

- [ ] Website loads at Render URL
- [ ] Database tables created (check via database dashboard)
- [ ] User registration works
- [ ] User login works
- [ ] Cart functionality works
- [ ] Chatbot responds (Gemini API working)
- [ ] Images load correctly

---

## 🆘 Troubleshooting

### "Service failed to start"
- Check **"Logs"** tab for errors
- Verify `startCommand` is: `php -S 0.0.0.0:$PORT -t .`
- Check environment variables are set

### "Database connection failed"
- Verify all DB environment variables are correct
- Check database is fully provisioned (wait 2-3 minutes)
- Use **Internal Database URL** (not external)

### "404 Not Found"
- Check file paths are correct
- Verify `index.html` exists in root
- Check **"Logs"** for routing issues

### Images not loading
- Verify `images/` folder is in repository
- Check image paths are relative (e.g., `images/1.jpg`)

---

## 📞 Need Help?

- **Render Docs**: [render.com/docs](https://render.com/docs)
- **Render Support**: [render.com/support](https://render.com/support)
- **Detailed Guide**: See `RENDER_DEPLOYMENT.md`

---

**Good luck with your deployment! 🚀**


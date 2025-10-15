# Render Deployment Instructions

## Prerequisites
1. Your code should be in a Git repository (GitHub, GitLab, etc.)
2. You need a Render account (free tier available)

## Steps to Deploy:

### Option 1: Using render.yaml (Infrastructure as Code)
1. Push your code to GitHub/GitLab
2. Connect your repository to Render
3. Render will automatically detect the render.yaml file
4. Your app will be deployed using the configuration

### Option 2: Manual Web Service Creation
1. Go to Render Dashboard
2. Click "New" → "Web Service"
3. Connect your repository
4. Configure:
   - Name: miappmvc
   - Environment: Docker
   - Dockerfile Path: ./dockerfile
   - Port: 80
   - Plan: Free

## Environment Variables (if needed)
- APACHE_DOCUMENT_ROOT: /var/www/html/public

## Important Notes:
- The free tier has limitations (apps sleep after 15 minutes of inactivity)
- No database included in free tier (use external MySQL service if needed)
- SSL/HTTPS is automatically provided

## Local Testing:
Run `docker-compose up` to test locally before deploying
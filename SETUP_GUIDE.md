# Portfolio Setup Guide

## Quick Start Guide

### 1. Prerequisites
- XAMPP, WAMP, or MAMP installed
- PHP 7.4 or higher
- MySQL 5.7 or higher

### 2. Installation Steps

#### Step 1: Place Project in Web Server
```
Copy the Portfolio- folder to your web server's document root:
- XAMPP: C:\xampp\htdocs\
- WAMP: C:\wamp64\www\
- MAMP: /Applications/MAMP/htdocs/
```

#### Step 2: Start Services
- Start Apache
- Start MySQL

#### Step 3: Create Database
1. Open phpMyAdmin: `http://localhost/phpmyadmin`
2. Click "New" to create a new database
3. Name it: `portfolio_db`
4. Click "Import" tab
5. Choose file: `database/portfolio.sql`
6. Click "Go"

#### Step 4: Configure Database Connection (if needed)
Open `database/connection.php` and update if your credentials differ:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'portfolio_db');
```

### 3. Access Your Portfolio

#### User Side (Public Portfolio)
```
http://localhost/Portfolio-/index.php
```

Pages available:
- Home: `index.php`
- About: `about.php`
- Projects: `projects.php`
- Contact: `contact.php`

#### Admin Panel
```
http://localhost/Portfolio-/admin/auth/login.php
```

**Default Login Credentials:**
- Username: `admin`
- Email: `admin@example.com`
- Password: `admin123`

⚠️ **Important:** Change the default password after first login!

### 4. Admin Panel Features

After logging in, you can:
- **Dashboard**: View statistics and overview
- **Manage Projects**: Add, edit, delete projects
- **Manage Skills**: Add, edit, delete skills
- **Manage Certificates**: Add, edit, delete certificates
- **Settings**: Update site settings and profile

### 5. File Structure Overview

```
Portfolio-/
├── index.php              # Main landing page
├── about.php              # About page
├── projects.php           # Projects showcase
├── contact.php            # Contact page
│
├── user/                  # User-facing files
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   ├── images/            # Upload portfolio images here
│   ├── includes/          # Reusable components (header, footer, navbar)
│   └── pages/             # Page content templates
│
├── admin/                 # Admin panel
│   ├── auth/              # Login, logout, register
│   ├── pages/             # Admin pages (dashboard, manage content)
│   ├── includes/          # Admin components (sidebar, header, footer)
│   ├── css/               # Admin styles
│   └── js/                # Admin scripts
│
├── database/              # Database files
│   ├── connection.php     # Database connection
│   └── portfolio.sql      # Database schema and sample data
│
└── assets/                # Shared assets
    ├── fonts/             # Custom fonts
    └── icons/             # Icons and SVGs
```

### 6. Customization

#### Update Site Information
1. Login to admin panel
2. Go to Settings
3. Update site name, email, phone, location
4. Save changes

#### Add Your Projects
1. Login to admin panel
2. Click "Manage Projects"
3. Click "Add New Project"
4. Fill in project details
5. Upload project image to `user/images/`
6. Save

#### Add Your Skills
1. Login to admin panel
2. Click "Manage Skills"
3. Click "Add New Skill"
4. Enter skill name, category, and proficiency level
5. Save

### 7. Troubleshooting

#### Database Connection Error
- Check if MySQL is running
- Verify database credentials in `database/connection.php`
- Ensure database `portfolio_db` exists

#### Page Not Found (404)
- Check if Apache is running
- Verify the URL path is correct
- Check file permissions

#### Admin Login Not Working
- Verify database is imported correctly
- Check if `admin_users` table exists
- Default password is `admin123`

### 8. Security Recommendations

⚠️ **Before going live:**
1. Change default admin password
2. Update database credentials
3. Enable HTTPS
4. Remove or secure `database/portfolio.sql` file
5. Set proper file permissions
6. Add input validation and sanitization
7. Implement CSRF protection

### 9. Next Steps

- [ ] Customize the design and colors
- [ ] Add your personal information
- [ ] Upload your projects
- [ ] Add your skills and certificates
- [ ] Test contact form functionality
- [ ] Add your social media links
- [ ] Optimize images for web
- [ ] Test on mobile devices

### 10. Support

For issues or questions:
- Check the README.md file
- Review the code comments
- Check database connection settings
- Verify web server is running properly

---

**Happy Coding! 🚀**

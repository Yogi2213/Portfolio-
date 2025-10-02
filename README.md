# Portfolio Website

A modern, responsive portfolio website with an admin panel for content management.

## Features

- **User Side**
  - Responsive design
  - Project showcase
  - About section
  - Contact form
  - Clean and modern UI

- **Admin Panel**
  - Secure login system
  - Manage projects
  - Update skills and certifications
  - View messages
  - Dashboard with statistics

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

## Installation

1. Clone the repository:
   ```bash
   git clone [your-repository-url]
   cd Portfolio-
   ```

2. Set up your local web server (XAMPP, WAMP, or MAMP):
   - Place the project folder in your web server's document root (e.g., `htdocs` for XAMPP)
   - Start Apache and MySQL services

3. Create the database:
   - Open phpMyAdmin or MySQL command line
   - Import the database schema: `database/portfolio.sql`
   - Or manually create the database by running the SQL file

4. Configure database connection:
   - Open `database/connection.php`
   - Update the database credentials if needed:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     define('DB_NAME', 'portfolio_db');
     ```

5. Access the website:
   - User side: `http://localhost/Portfolio-/index.php`
   - Admin panel: `http://localhost/Portfolio-/admin/auth/login.php`

## Admin Access

- Default Admin Credentials:
  - Username: admin
  - Email: admin@example.com
  - Password: admin123

## Project Structure

```
portfolio/
├── index.php                 # Main entry point
├── user/                     # User-facing files
│   ├── css/                  # User styles
│   ├── js/                   # User scripts
│   ├── images/               # User images
│   ├── includes/             # Reusable components
│   └── pages/                # Page templates
├── admin/                    # Admin panel
│   ├── css/                  # Admin styles
│   ├── js/                   # Admin scripts
│   ├── includes/             # Admin components
│   ├── pages/                # Admin pages
│   └── auth/                 # Authentication files
├── database/                 # Database files
│   ├── connection.php        # Database connection
│   └── portfolio.sql         # Database schema
└── assets/                   # Shared assets
    ├── fonts/                # Custom fonts
    └── icons/                # Icons and SVGs
```

## Security

- Always use strong passwords
- Keep the application and dependencies up to date
- Never commit sensitive information to version control
- Use HTTPS in production

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Font Awesome](https://fontawesome.com/)
- [Google Fonts](https://fonts.google.com/)
- [Unsplash](https://unsplash.com/) for placeholder images

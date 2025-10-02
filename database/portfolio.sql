-- Portfolio Database Schema
-- Created: 2025-10-02

-- Create database
CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

-- Admin users table
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Projects table
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    technologies VARCHAR(255),
    category VARCHAR(100),
    image_url VARCHAR(255),
    project_url VARCHAR(255),
    demo_url VARCHAR(255),
    is_featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Skills table
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    proficiency INT DEFAULT 0,
    icon_class VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Certificates table
CREATE TABLE IF NOT EXISTS certificates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    certificate_name VARCHAR(200) NOT NULL,
    issuer VARCHAR(100),
    issue_date DATE,
    certificate_url VARCHAR(255),
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Contact messages table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200),
    message TEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Site settings table
CREATE TABLE IF NOT EXISTS site_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(100) NOT NULL UNIQUE,
    setting_value TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert default admin user (password: admin123 - hashed)
INSERT INTO admin_users (username, email, password) VALUES 
('admin', 'admin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Insert sample projects
INSERT INTO projects (title, description, technologies, category, is_featured) VALUES
('E-Commerce Website', 'A fully functional e-commerce platform with payment integration', 'PHP, MySQL, JavaScript', 'Web Development', TRUE),
('Portfolio CMS', 'Content management system for portfolio websites', 'PHP, MySQL, Bootstrap', 'Web Development', TRUE),
('Task Manager App', 'A productivity app for managing daily tasks', 'React, Node.js, MongoDB', 'Web Application', FALSE);

-- Insert sample skills
INSERT INTO skills (skill_name, category, proficiency) VALUES
('PHP', 'Backend', 90),
('JavaScript', 'Frontend', 85),
('MySQL', 'Database', 80),
('HTML/CSS', 'Frontend', 95),
('React', 'Frontend', 75);

-- Insert sample certificates
INSERT INTO certificates (certificate_name, issuer, issue_date) VALUES
('Web Development Certificate', 'Coursera', '2023-08-15'),
('JavaScript Advanced', 'Udemy', '2023-09-20'),
('Database Design', 'LinkedIn Learning', '2023-07-10');

-- Insert default site settings
INSERT INTO site_settings (setting_key, setting_value) VALUES
('site_name', 'My Portfolio'),
('admin_email', 'admin@example.com'),
('phone', '+1 (123) 456-7890'),
('location', 'City, Country'),
('github_url', 'https://github.com/yourusername'),
('linkedin_url', 'https://linkedin.com/in/yourusername'),
('twitter_url', 'https://twitter.com/yourusername');

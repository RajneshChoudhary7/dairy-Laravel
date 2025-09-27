# Dairy Saathi - Laravel Application

## Project Overview
This is a Laravel 12 application for a dairy products delivery service called "Dairy Saathi". The application includes features for:
- User authentication with face recognition
- Product management 
- Role-based dashboards (admin, staff, supplier, customer)
- Dairy product catalog and ordering

## Setup Completed
- **Laravel 12** application with PHP 8.2
- **SQLite database** with all migrations completed
- **Vite** for frontend asset compilation with Tailwind CSS
- **Face recognition models** included for authentication
- **Bootstrap 5** and custom styling

## Architecture
- **Backend**: Laravel 12 (PHP 8.2) on port 5000
- **Frontend Assets**: Vite dev server on port 3000
- **Database**: SQLite (development)
- **Authentication**: Laravel Auth with face recognition capability
- **Styling**: Bootstrap 5 + Tailwind CSS + custom CSS

## Development Environment
- Laravel development server runs on `0.0.0.0:5000`
- Vite asset server runs on `0.0.0.0:3000` 
- Both servers run concurrently via workflow
- Hot module replacement enabled for development

## Database Schema
- **Users table**: id, name, email, phone, role, face_image, timestamps
- **Products table**: for dairy product management
- **Cache/Jobs tables**: for Laravel system functionality
- **Role-based access**: admin, staff, supplier, customer roles

## Deployment Configuration
- **Type**: Autoscale (stateless web application)
- **Build**: Composer install (production) + npm build
- **Run**: Laravel serve on port 5000
- **Environment**: Production-ready with optimized autoloader

## Key Files Modified for Replit
- `vite.config.js`: Configured for 0.0.0.0 host binding
- `.env`: Updated APP_URL for Replit domain
- Database migrations: Fixed user schema for application requirements
- Workflow: Concurrent Laravel + Vite development servers

## Face Recognition Feature
The application includes pre-trained models for face recognition authentication:
- Age/gender detection
- Face landmark detection  
- Face expression analysis
- Multiple face detection models (MTCNN, SSD MobileNet, etc.)

This enables users to login using facial recognition as an alternative to traditional password authentication.

## Recent Changes (2025-09-27)
- Installed PHP 8.2 and Node.js 20
- Set up Laravel environment for Replit
- Configured dual-server development setup
- Fixed database schema alignment with User model
- Deployed application successfully on Replit infrastructure
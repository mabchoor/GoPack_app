# GoPack - Delivery Management System

## Overview
GoPack is a comprehensive delivery management system designed to streamline and optimize the delivery process. The system provides a modern, user-friendly interface for managing deliveries, tracking packages, and handling customer interactions.

## Features

### For Customers
- Real-time package tracking
- Secure payment processing with Stripe integration
- User-friendly interface for placing delivery orders
- Order history and status updates
- Customer support chat system

### For Delivery Personnel
- Mobile-responsive dashboard
- Real-time delivery status updates
- Route optimization
- Delivery confirmation system
- Earnings tracking

### For Administrators
- Comprehensive admin dashboard
- User management system
- Delivery analytics and reporting
- Payment processing management
- System configuration tools

## Design

### User Interface
- Modern and clean design using Bootstrap framework
- Responsive layout for all device sizes
- Intuitive navigation system
- Real-time updates and notifications
- Interactive maps integration

### Security Features
- Secure authentication system
- Encrypted data transmission
- Secure payment processing
- Role-based access control
- Environment variable protection

### Technical Architecture
- PHP backend with MVC architecture
- MySQL database for data storage
- RESTful API design
- Stripe integration for payments
- Real-time chat functionality

## Installation

1. Clone the repository:
```bash
git clone https://github.com/mabchoor/GoPack-app.git
```

2. Install dependencies:
```bash
composer install
```

3. Configure environment variables:
- Copy `.env.example` to `.env`
- Update the configuration values in `.env`

4. Set up the database:
- Create a new MySQL database
- Import the database schema
- Update database credentials in `.env`

5. Configure web server:
- Point your web server to the project directory
- Ensure proper permissions are set

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer
- Web server (Apache/Nginx)
- SSL certificate (for secure payments)

## Configuration

### Environment Variables
Create a `.env` file with the following structure:
```
DB_HOST=your_database_host
DB_NAME=your_database_name
DB_USER=your_database_user
DB_PASS=your_database_password

STRIPE_PUBLIC_KEY=your_stripe_public_key
STRIPE_SECRET_KEY=your_stripe_secret_key
```

### Database Setup
1. Create a new MySQL database
2. Import the database schema from `database/schema.sql`
3. Update the database credentials in `.env`

## Usage

### Customer Portal
1. Register/Login to your account
2. Place a new delivery order
3. Track your delivery status
4. Make secure payments
5. Access order history

### Delivery Personnel
1. Login to the delivery dashboard
2. View assigned deliveries
3. Update delivery status
4. Confirm deliveries
5. Track earnings

### Admin Panel
1. Access admin dashboard
2. Manage users and deliveries
3. View analytics and reports
4. Configure system settings
5. Monitor payment transactions


## Support

For support, email m.abderrahmane.dev@gmail.com or create an issue in the repository.

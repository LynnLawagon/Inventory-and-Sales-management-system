# ClearLedger — General Sales & Management System

A simple, locally hosted sales and inventory website for small businesses and personal use. It is not tied to a specific store type. Users can create their own product catalog, customers, suppliers, and sales records.

## Requirements
- Windows computer
- [Laragon](https://laragon.org/download/)
- PHP 8.0+ and MySQL/MariaDB (included with Laragon)
- A modern browser

## Install using Laragon
1. Extract the `GeneralSalesSystem` folder into `C:\laragon\www\`.
2. Open Laragon and click **Start All**.
3. Open `http://localhost/phpmyadmin` (or Laragon's Database tool).
4. Create/import the database by selecting **Import** and choosing `database.sql`. The SQL creates `general_sales_db` automatically.
5. Open `http://localhost/GeneralSalesSystem/` in your browser.
6. On the first visit, choose **Set up your workspace** and create the administrator account.
7. Sign in and add products before recording your first sale.

## Database settings
Default Laragon settings are used in `config.php`:
- Host: `127.0.0.1`
- Database: `general_sales_db`
- Username: `root`
- Password: blank

If your MySQL password is different, update `$user` and `$pass` in `config.php`.

## Main features
- Overview dashboard with daily/monthly sales and low-stock count
- Product management (add, view, edit, delete, category, prices, stock)
- Customer directory (add, view, edit, delete)
- Supplier directory (add, view, edit, delete)
- Sales checkout with customer, payment method, quantities, and automatic stock deduction
- Sales reports with date filters
- Login with securely hashed passwords
- Search lists and responsive layout for desktop, tablet, and phone

## Notes
- This version uses PHP and MySQL through Laragon. It does not use browser localStorage or the old Java text-file storage.
- Data is stored in your local MySQL database and is available on that computer while Laragon is running.
- The first account is the administrator account. Additional staff-account management can be added later if needed.
- Keep regular backups of the `general_sales_db` database using phpMyAdmin.

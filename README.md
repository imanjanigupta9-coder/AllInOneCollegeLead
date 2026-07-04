# Premium Online Degree Admission Landing Page

A complete, production-ready, high-converting EdTech landing page. Built with PHP 8+, PDO MySQL, Vanilla JS, Tailwind CSS, and GSAP.

## Features
- **Frontend:** Responsive, Glassmorphism UI, GSAP Animations, Tailwind CSS.
- **Backend:** PHP API returning JSON, AJAX submission without page reload.
- **Security:** PDO Prepared Statements (Anti-SQLi), CSRF Protection, XSS prevention, basic Rate Limiting.
- **UX:** Toast notifications, loading spinners, form validation.

## 🚀 How to Run Locally (XAMPP)

1. **Copy Files:** Extract/Copy the `online-degree` folder into your XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\online-degree`).
2. **Start Servers:** Open XAMPP Control Panel and start **Apache** and **MySQL**.
3. **Database Import:**
   - Go to `http://localhost/phpmyadmin`
   - Create a new database named `online_degree` with collation `utf8mb4_unicode_ci`.
   - Click on the `online_degree` database, go to the **Import** tab.
   - Choose the file `database/admissions.sql` and click **Import**.
4. **View Website:** Open your browser and go to `http://localhost/online-degree`.

## 🌐 How to Deploy on Hostinger Shared Hosting

1. **Upload Files:**
   - Log in to your Hostinger hPanel.
   - Open File Manager and navigate to `public_html`.
   - Upload all files from the `online-degree` folder directly into `public_html`.
2. **Create Database:**
   - In hPanel, go to **MySQL Databases**.
   - Create a new Database and User. Note down the Database Name, Username, and Password.
3. **Import SQL:**
   - In hPanel, click on **phpMyAdmin** next to your new database.
   - Import the `database/admissions.sql` file.
4. **Update Credentials:**
   - Open `config/database.php` in the Hostinger File Manager.
   - Update the following lines with your new Hostinger credentials:
     ```php
     $host = 'localhost'; // Usually remains 'localhost' on Hostinger
     $dbname = 'u123456789_online_degree'; // Replace with your DB Name
     $username = 'u123456789_user'; // Replace with your DB Username
     $password = 'YourStrongPassword123!'; // Replace with your DB Password
     ```
5. **SSL Setup:** Ensure Force HTTPS is enabled in your Hostinger dashboard for security.

## Important Files to Edit
- `index.php` - To change text, programs, phone numbers, or email addresses visible on the frontend.
- `config/database.php` - To manage database connection credentials.
- `api/submit.php` - To add email notification logic (e.g., using PHPMailer) after a successful database insertion. 
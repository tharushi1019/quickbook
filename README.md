# 🚀 QuickBook – Service Booking System

QuickBook is a simple and user-friendly **service booking web application** built using PHP and MySQL.  
It allows users to book services easily, while administrators can securely manage and approve bookings through a dedicated dashboard.

This project was developed as a **full-stack mini project** to demonstrate core web development concepts and practical CRUD operations.

---

## ✨ Features

### 👤 User Features
- Clean and modern landing page
- Simple service booking form
- Date validation to prevent past bookings
- Booking confirmation with success message

### 🔐 Admin Features
- Secure admin login (session-based authentication)
- View all service bookings
- Approve bookings (disabled after approval)
- Delete bookings with confirmation
- Flash messages for actions (approve / delete)

---

## 🛠 Tech Stack

| Layer | Technology |
|------|-----------|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP |
| Database | MySQL |
| Server | Apache (XAMPP) |
| Version Control | Git & GitHub |

---

## 🎨 UI & UX Highlights
- Modern gradient-based UI
- Responsive design for all screen sizes
- Confirmation dialogs to prevent accidental actions
- Consistent theme across all pages

---

## 📂 Project Structure

```

quickbook/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
│
├── config/
│   └── db.php
│
├── index.php
├── book.php
├── submit_booking.php
├── login.php
├── admin_dashboard.php
├── approve.php
├── delete.php
├── logout.php
└── README.md

````

---

## ⚙️ How to Run Locally

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/quickbook.git
````

2. **Move the project to XAMPP htdocs**

   ```
   C:\xampp\htdocs\quickbook
   ```

3. **Create the database**

   * Open **phpMyAdmin**
   * Create a database named `quickbook`
   * Import the provided SQL file or create the `bookings` table manually

4. **Configure database connection**

   * Update credentials inside:

     ```
     config/db.php
     ```

5. **Start XAMPP**

   * Start **Apache** and **MySQL**

6. **Open in browser**

   ```
   http://localhost/quickbook
   ```

---

## 🔐 Admin Login (Demo)

> For demonstration purposes:

* **Username:** admin
* **Password:** 1234

*(Credentials can be easily upgraded to hashed passwords for production use.)*

---

## 🔮 Future Improvements

* Convert backend to **Laravel (MVC architecture)**
* Password hashing and role-based access control
* Booking search and filtering
* Email notifications
* REST API integration

---

## 📌 Learning Outcomes

* PHP form handling and sessions
* MySQL CRUD operations
* Frontend-backend integration
* UI consistency and UX improvements
* Git & GitHub version control

---

## 📄 License

This project is for educational purposes and personal learning.

---

### 👩‍💻 Author

**Tharushi Nimnadi Karunarathna**
Undergraduate – BSc (Hons) in Information Technology
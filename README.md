
# Personal Book Library

A simple CRUD application for managing a personal book collection, built with vanilla PHP as a learning project.

## About

This is my first complete PHP application, created while working through "PHP for Beginners" on Laracasts. It's intentionally simple and demonstrates basic CRUD operations without frameworks or advanced patterns.

## Features

- **Create**: Add new books to your library
- **Read**: View all books and individual book details  
- **Update**: Edit existing book information
- **Delete**: Remove books from your library

Each book includes: title, author, genre, year, and rating.

## Tech Stack

- **Backend**: Vanilla PHP with PDO
- **Database**: MySQL
- **Frontend**: HTML with Bootswatch CSS (Lux theme)

## Getting Started

### Prerequisites

- PHP 7.4+ 
- MySQL
- Local development server (XAMPP, MAMP, Laravel Herd, etc.)

### Database Setup

1. Create a MySQL database named `myapp`
2. Create the `library` table:

```sql
CREATE TABLE library (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    rating INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. Update database connection settings in each controller file:
   - Host: `localhost`
   - Port: `3307` (or your MySQL port)
   - Database: `myapp`
   - Username/Password: Update as needed

### Running Locally

1. Clone or download this repository
2. Place in your web server directory
3. Start your local server
4. Navigate to `http://localhost` (or your local domain)

## Project Structure

```
├── controllers/books/       # CRUD logic
│   ├── index.php           # List all books
│   ├── show.php            # Show single book
│   ├── create.php          # Create new book
│   ├── update.php          # Update existing book
│   └── delete.php          # Delete book
├── partials/
│   ├── header.php          # HTML head
│   ├── nav.php             # Navigation
│   ├── footer.php          # Footer
│   └── views/books/        # View templates
└── index.php               # Router
```

## Known Issues & Limitations

This is a learning project with several known issues that would need to be addressed in a production application:

### Security Issues
- Database credentials hardcoded in controllers
- Missing input validation and sanitization
- Some XSS vulnerabilities in views
- No CSRF protection
- Delete operations without confirmation

### Code Quality
- Database connection duplicated across controllers
- No error handling for database operations
- No 404 handling for missing books
- "Spaghetti code" structure (intentional for learning)

### Missing Features
- No authentication/user management
- No search or filtering
- No pagination
- No form validation feedback

## Learning Goals Achieved

- ✅ Basic PHP syntax and superglobals
- ✅ PDO for database operations
- ✅ Prepared statements (SQL injection prevention)
- ✅ Basic MVC-like structure
- ✅ HTML form handling
- ✅ Simple routing

## Next Steps

Before moving to Laravel, I plan to improve:
1. Input validation and output escaping
2. Centralized database connection
3. Basic error handling
4. User confirmation for destructive actions

## Contributing

This is a personal learning project, but feedback and suggestions are welcome!

## Acknowledgments

- Built following [Laracasts PHP for Beginners](https://laracasts.com/series/php-for-beginners)
- UI styled with [Bootswatch Lux theme](https://bootswatch.com/lux/)
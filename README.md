# QuickPOS Landing Page

![QuickPOS CI](https://github.com/ammarahmed/quickpos/actions/workflows/ci.yml/badge.svg)

QuickPOS is a modern, responsive landing page for a Point of Sale software solution. This project includes a sleek UI, contact form validation, and automated testing via GitHub Actions.

## 🚀 Features

* **Premium UI**: Modern dark mode aesthetic with gradient backgrounds, glassmorphism cards, and smooth hover animations.
* **Responsive Design**: Fully optimized for mobile, tablet, and desktop viewing.
* **Form Validation**: Robust PHP validation logic separated into reusable functions.
* **Automated Testing**: Comprehensive PHPUnit test suite ensuring validation functions work correctly.
* **CI/CD Pipeline**: GitHub Actions workflow that automatically runs syntax checks and PHPUnit tests on every push and pull request.

## 🛠️ Technologies Used

* **Frontend**: HTML5, CSS3, Vanilla JavaScript
* **Backend**: PHP 8.2
* **Testing**: PHPUnit 11
* **CI/CD**: GitHub Actions

## 📦 Setup Instructions

Follow these steps to set up the project on your local machine:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/quickpos.git
   cd quickpos
   ```

2. **Install Dependencies:**
   Ensure you have [Composer](https://getcomposer.org/) installed. Run the following command to install PHPUnit and other required dependencies:
   ```bash
   composer install
   ```

3. **Run the Application:**
   You can use PHP's built-in server to run the application locally:
   ```bash
   php -S localhost:8000
   ```
   Open your browser and navigate to `http://localhost:8000`.

## 🧪 Running Tests

To execute the automated PHPUnit test suite, run:
```bash
vendor/bin/phpunit tests
```

## 📸 Screenshots

### 1. Landing Page UI
*(Add your landing page screenshot here)*

### 2. GitHub Actions CI/CD Pipeline
*(Add screenshot of successful pipeline here)*

*(Add screenshot of failed pipeline here)*

### 3. Jira Sprint Board
*(Add screenshot of your Jira sprint board here)*

## 📄 License
This project is for educational purposes.

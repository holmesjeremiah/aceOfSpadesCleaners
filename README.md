# Ace of Spades Cleaners Website
This is a PHP-based website for Ace of Spades Cleaners, a professional cleaning service. The website provides information about the company's services and includes contact information.

## Project Structure

- **.vscode/launch.json**: Configuration for debugging PHP scripts using Xdebug in Visual Studio Code.
- **aboutUs.php**: Page displaying information about the company.
- **bookNow.php**: Page for booking cleaning services.
- **content.php**: Contains shared content and variables used across different pages.
- **index.php**: The homepage of the website.
- **README.md**: This file.

## Getting Started

### Prerequisites

- PHP installed on your local machine.
- A web server (e.g., Apache, Nginx) or PHP's built-in server.
- Visual Studio Code with the PHP extension and Xdebug configured for debugging.

### Running the Project

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Start the PHP built-in server:
```sh
php -S localhost:8000
```
4. Open your web browser and go to `http://localhost:8000` to view the website.

### Debugging

To debug the PHP scripts using Visual Studio Code:

1. Open the project in Visual Studio Code.
2. Set breakpoints in your PHP code.
3. Open the Debug panel and select "Listen for Xdebug" or "Launch currently open script".
4. Start debugging.

### Project Pages

- **Home Page (index.php)**: Displays the company's services and a banner with options to book now or request a quote.
- **About Us Page (aboutUs.php)**: Provides information about the company.
- **Book Now Page (bookNow.php)**: Allows users to book cleaning services.

### Shared Content

The `content.php` file contains shared content and variables used across different pages, such as the company name, contact information, and HTML templates for the header, navigation, and footer.

## License

This project is licensed under the MIT License.
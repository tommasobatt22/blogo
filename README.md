# Bolgo - Fake Blog with Laravel

Bolgo is a project developed using the Laravel framework, designed to create a fictional blog. This project has been created with the intention of providing developers with a testing environment for learning and practicing Laravel.

## Key Features

- **Article Management**: Easily create, edit, and delete articles.
- **Category Management**: Organize articles into categories for better navigation.
- **Authentication System**: Secure access with user authentication.
- **Intuitive User Interface**: A clean and intuitive interface for easy and effective navigation.

## System Requirements

- PHP >= 7.3
- Composer
- MySQL
- Node.js and npm

## Installation

1. Clone the repository locally using the command:
   git clone https://github.com/yourname/bolgo.git
   
2. Navigate to the project directory and install dependencies with Composer:
   `cd bolgo`
3. Install dependencies with Composer: `composer install`
4.  Copy the environment configuration file: `cp .env.example .env`
5.  Modify the `.env` file:
Update the database configurations and other settings if necessary.
6. Generate an application key:` php artisan key:generate `
7. Run database migrations: `php artisan migrate`
8.  Start the local server: `php artisan serve`
9. Access the application:
Open your browser and go to `http://localhost:8000`.

10. Create a new account or log in:
 Use the default credentials or create a new account.

11. Start creating articles and categories:
 Populate the fake blog with content.

## Contribute

If you wish to contribute to this project, fork the repository, and create a pull request with your changes.

## Bug Reporting

If you find bugs or issues, please open a new issue on GitHub [here](https://github.com/yourname/bolgo/issues).

## License

This project is distributed under the [MIT license](LICENSE).

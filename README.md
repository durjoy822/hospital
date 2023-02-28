# Hospital Management Website

This is a hospital management website built using Laravel. It allows the admin to register patients, doctors, manage appointments, payments, room booking, and sell medicines online. The admin can also update all the information on the website, view order information, invoices, and create blog posts. Normal users can purchase medicines, book appointments, and update their profile information.

## Contributors

- [Opu saha](https://github.com/opusaha/)
- [Md Nayem Hossain](https://github.com/durjoy822)

## Installation

1. Clone the repository using `git clone`.
2. Run `composer install` to install the required dependencies.
3. Rename `.env.example` to `.env` and fill in the required database credentials.
4. Run `php artisan key:generate` to generate a new application key.
5. Run `php artisan migrate` to create the necessary database tables.
6. Run `php artisan db:seed` to seed the database with sample data.

## Usage

1. Run `php artisan serve` to start the development server.
2. Visit http://localhost:8000 in your web browser to access the website.
3. Use the admin credentials to log in and manage the website.

## License

This project is licensed under the MIT License.

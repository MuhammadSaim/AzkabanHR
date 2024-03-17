# AzkabanHR

AzkabanHR is an open-source HR management system built on Laravel, Inertia.js, and React. It aims to provide businesses with a modern, user-friendly platform for managing employee information, leave requests, payroll processing, and more.

## Features

- **Employee Management**: Easily manage employee information, including personal details, contact information, and employment history.
- **Leave Management**: Streamline the process of requesting, approving, and tracking employee leave requests.
- **Payroll Processing**: Automate payroll calculations and generate pay stubs for employees.
- **Performance Evaluation**: Conduct performance reviews and track employee performance over time.
- **Reporting**: Generate custom reports on various HR metrics, such as employee turnover, attendance, and more.

## Technologies Used

- **Laravel**: A PHP framework for building web applications.
- **Inertia.js**: A modern JavaScript library for building single-page applications with server-side routing.
- **React**: A JavaScript library for building user interfaces.
- **MySQL**: A relational database management system for storing HR-related data.

## Installation

1. Clone the repository:
```shell
git clone https://github.com/MuhammadSaim/azkabanhr.git
```
2. Install PHP dependencies:
```shell
composer install
```
3. Install JavaScript dependencies:
```shell
npm install
```
4. Copy the `.env.example` file and rename it to `.env`. Update the database configuration and other settings as needed.

5. Generate application key:
```shell
php artisan key:generate
```

6. Migrate the database:
```shell
php artisan migrate --seed
```

7. Run the development server:
```shell
php artisan serve
```

8. Visit `http://localhost:8000` in your web browser to access AzkabanHR.

## Contributing

Contributions are welcome! Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on how to contribute to this project.

## License

AzkabanHR is open-source software licensed under the [MIT license](LICENSE).

## Support

For questions or issues, please [open an issue](https://github.com/yourusername/azkabanhr/issues) on GitHub.

## Acknowledgements

- [Laravel](https://laravel.com)
- [Inertia.js](https://inertiajs.com)
- [React](https://reactjs.org)

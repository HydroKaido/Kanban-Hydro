# HyBan Project

## Overview

This project is a Kanban board application designed to help manage tasks efficiently by organizing them into columns. Users can create, update, and delete tasks, and move them between columns to track their progress.

## Features

- **Task Management**: Create, update, and delete tasks.
- **Column Management**: Add, update, and delete columns.
- **User Authentication**: Secure login and registration for users.
- **Responsive Design**: Built with Bootstrap 5 for a responsive UI.

## Technology Stack

- **Frontend**: HTML, CSS, JavaScript (Bootstrap 5)
- **Backend**: PHP (Laravel 11)
- **Templating Engine**: Laravel Blade
- **Database**: MySQL

## Installation

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js and npm (for asset compilation)
- MySQL

### Steps

1. **Clone the repository**
    ```sh
    git clone https://github.com/yourusername/kanban-hydro.git
    cd kanban-project
    ```

2. **Install dependencies**
    ```sh
    composer install
    npm install
    ```

3. **Set up the environment variables**

    Copy the `.env.example` file to `.env` and update the necessary variables, including database credentials.

    ```sh
    cp .env.example .env
    ```

4. **Generate an application key**
    ```sh
    php artisan key:generate
    ```

5. **Run the migrations**
    ```sh
    php artisan migrate
    ```

6. **Build the frontend assets**
    ```sh
    npm run dev
    ```

7. **Serve the application**
    ```sh
    php artisan serve
    ```

8. **Access the application**

    Open your browser and go to `http://127.0.0.1:8000`.

## Usage

1. **Register** or **Log in** to access your Kanban board.
2. **Create columns** to organize your tasks.
3. **Add tasks** to the columns.
5. **Edit** or **delete** tasks as needed.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch.
3. Make your changes.
4. Submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

If you have any questions or need further assistance, feel free to contact us at [julzhafiz@gmail.com].

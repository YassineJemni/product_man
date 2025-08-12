# Product Management CRUD Application

This is a full-stack web application for managing products, built with the Laravel framework. The application allows users to perform basic Create, Read, Update, and Delete (CRUD) operations on a list of products.

## Features

- **Product Listing:** View a list of all products.
- **Product Creation:** Add new products with a title, price, and country of origin.
- **Product Details:** View the details of a single product.
- **Product Editing:** Update the information for an existing product.
- **Product Deletion:** Remove a product from the database.

## Technologies

-   **Backend:** Laravel Framework
-   **Database:** SQLite (default) or any other database supported by Laravel
-   **Frontend:** Blade templates with Tailwind CSS for styling

## Installation

Follow these steps to get the project up and running on your local machine.



### Steps

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/your-username/your-repo-name.git](https://github.com/your-username/your-repo-name.git)
    cd your-repo-name
    ```

2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```

3.  **Install npm dependencies and compile assets:**
    ```bash
    npm install
    npm run dev
    ```

4.  **Create and configure the `.env` file:**
    Copy the `.env.example` file and create a new `.env` file.
    ```bash
    cp .env.example .env
    ```
    Generate a new application key:
    ```bash
    php artisan key:generate
    ```

5.  **Run Migrations and Seeders:**
    This command will create your database tables and populate them with 100 fake products using the `ProductFactory` and `ProductSeeder`.
    ```bash
    php artisan migrate --seed
    ```

6.  **Start the local development server:**
    ```bash
    php artisan serve
    ```

You can now access the application at `http://127.0.0.1:8000` in your web browser.

## Database Setup

The project is configured to use a `sqlite` database by default. The database file is located at `database/database.sqlite`.

If you prefer to use a different database, update the `DB_CONNECTION` and other relevant settings in your `.env` file.

## Usage

-   **Home Page:** The main landing page provides an introduction to the project.
-   **Products:** Click on the "Products" link in the navigation bar to view the list of all products.
-   **Create Product:** On the products page, you can find a link or button to create a new product.
-   **Edit/Delete:** From the product list or a specific product's page, you can edit or delete an existing product.

## Credits

This website was created by **Yassine Jemni**.

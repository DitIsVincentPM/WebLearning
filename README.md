# WebLearning

WebLearning is a web development learning platform designed to help aspiring developers master HTML, CSS, JavaScript, PHP, and more through hands-on exercises and interactive lessons.

## Features

- **Interactive Lessons**: Engage with practical, hands-on coding challenges and real-world examples to solidify your skills.
- **Code Challenges**: Enhance your knowledge with tasks designed to test your creativity and problem-solving abilities.
- **Community Support**: Connect with other developers and get guidance from mentors to improve your learning journey.

## Installation

### Prerequisites

- PHP
- Composer
- Node.js & npm

### Steps

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/WebLearning.git
    cd WebLearning
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install JavaScript dependencies:
    ```sh
    npm install
    ```

4. Copy the example environment file and configure it:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Run database migrations:
    ```sh
    php artisan migrate
    ```

6. Build the front-end assets:
    ```sh
    npm run dev
    ```

7. Start the development server:
    ```sh
    php artisan serve
    ```

## Usage

- Visit `http://localhost:8000` in your browser to access the platform.
- Register or log in to start learning web development.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

## Acknowledgements

- [Laravel](https://laravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- [Jetstream](https://jetstream.laravel.com/)
- [Livewire](https://laravel-livewire.com/)

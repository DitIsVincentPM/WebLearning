<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebLearning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Fira Code', monospace;
        }
        .code-snippet {
            background-color: #1e293b;
            color: #facc15;
            font-family: 'Fira Code', monospace;
            padding: 16px;
            border-radius: 8px;
            line-height: 1.6;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }
        .console-output {
            background-color: #0f172a;
            color: #38bdf8;
            padding: 20px;
            border-radius: 8px;
            margin-top: 10px;
            font-family: 'Fira Code', monospace;
            font-size: 16px;
            height: 140px;
            overflow-y: auto;
            box-shadow: inset 0 4px 6px rgba(0, 0, 0, 0.5);
        }
        .feature-icon {
            height: 40px;
            margin-bottom: 16px;
        }
        .partner-badge {
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">

<!-- Navbar -->
<header class="bg-gray-800">
    <nav class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="#" class="text-xl font-semibold text-yellow-400">WebLearning</a>
        <div class="flex items-center space-x-6">
            <a href="/login" class="text-sm text-gray-300 hover:text-yellow-400">Login</a>
            <a href="/register" class="px-4 py-2 bg-yellow-400 text-gray-900 text-sm rounded hover:bg-yellow-500">Register</a>
        </div>
    </nav>
</header>

<!-- Hero Section -->
<section class="container mx-auto flex flex-col md:flex-row items-center text-center md:text-left py-20 px-6">
    <div class="md:w-1/2">
        <h1 class="text-4xl font-bold leading-tight text-white mb-4">
            Learn Web Development Like a Pro
        </h1>
        <p class="text-lg text-gray-300 mb-6">
            Master HTML, CSS, JavaScript, PHP, and more with hands-on exercises and interactive lessons.
        </p>
        <a href="/register" class="px-6 py-3 bg-yellow-400 text-gray-900 text-sm rounded hover:bg-yellow-500">Start Learning Now</a>
    </div>
    <div class="md:w-1/2 mt-10 md:mt-0">
        <!-- Code Snippet with Console -->
        <div class="code-snippet">
            <code>
                &lt;div class="container"&gt;<br>
                &nbsp;&nbsp;&lt;h1&gt;Hello, World!&lt;/h1&gt;<br>
                &nbsp;&nbsp;&lt;script&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;console.log("Welcome to WebLearning.");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;console.log("Start learning today!");<br>
                &nbsp;&nbsp;&lt;/script&gt;<br>
                &lt;/div&gt;
            </code>
        </div>
        <div id="consoleOutput" class="console-output"></div>
    </div>
</section>

<!-- Partners Section -->
<section class="bg-gray-800 py-8">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold text-yellow-400 mb-6">Trusted by Our Partners</h2>
        <div class="flex justify-center space-x-4">
            <span class="partner-badge bg-orange-500">Smartschool</span>
            <span class="partner-badge bg-green-500">TheLearningPlatform</span>
            <span class="partner-badge bg-red-500">Don Bosco Hoboken</span>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="container mx-auto py-16 px-6">
    <h2 class="text-2xl font-bold text-center mb-10 text-yellow-400">Features</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="bg-gray-800 p-6 rounded-3xl shadow-lg hover:scale-105 transition-transform">
            <img src="https://via.placeholder.com/40" alt="Interactive Lessons" class="feature-icon mx-auto">
            <h3 class="text-xl font-semibold text-yellow-400 mb-2">Interactive Lessons</h3>
            <p class="text-gray-300">Engage with practical, hands-on coding challenges and real-world examples to solidify your skills.</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-3xl shadow-lg hover:scale-105 transition-transform">
            <img src="https://via.placeholder.com/40" alt="Code Challenges" class="feature-icon mx-auto">
            <h3 class="text-xl font-semibold text-yellow-400 mb-2">Code Challenges</h3>
            <p class="text-gray-300">Enhance your knowledge with tasks designed to test your creativity and problem-solving abilities.</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-3xl shadow-lg hover:scale-105 transition-transform">
            <img src="https://via.placeholder.com/40" alt="Community Support" class="feature-icon mx-auto">
            <h3 class="text-xl font-semibold text-yellow-400 mb-2">Community Support</h3>
            <p class="text-gray-300">Connect with other developers and get guidance from mentors to improve your learning journey.</p>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="bg-gray-800 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold text-yellow-400 mb-10">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <p class="text-gray-300 italic">"WebLearning is the best platform for aspiring web developers!"</p>
                <h4 class="text-sm font-semibold text-yellow-400 mt-4">- Abuddalah Reduan Emre Acheraf Surer.</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <p class="text-gray-300 italic">"The lessons are concise, practical, and easy to follow."</p>
                <h4 class="text-sm font-semibold text-yellow-400 mt-4">- John F. K.</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <p class="text-gray-300 italic">"I learned so much about JavaScript in just a few weeks!"</p>
                <h4 class="text-sm font-semibold text-yellow-400 mt-4">- Leon K.</h4>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-12">
    <div class="container mx-auto text-center text-gray-300">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-yellow-400 font-bold mb-2">WebLearning</h3>
                <p>Empowering the next generation of developers.</p>
            </div>
            <div>
                <h4 class="font-bold mb-2">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-yellow-400">Dashboard</a></li>
                    <li><a href="/about" class="hover:text-yellow-400">About</a></li>
                    <li><a href="/features" class="hover:text-yellow-400">Features</a></li>
                    <li><a href="/pricing" class="hover:text-yellow-400">Pricing</a></li>
                    <li><a href="/faq" class="hover:text-yellow-400">FAQ</a></li>
                    <li><a href="/contact" class="hover:text-yellow-400">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-2">Follow Us</h4>
                <p>Stay connected on social media!</p>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    const consoleOutput = document.getElementById("consoleOutput");
    setTimeout(() => {
        consoleOutput.innerHTML = "Welcome to WebLearning.";
        setTimeout(() => {
            consoleOutput.innerHTML = "Welcome to WebLearning<br> Start learning today!";
        }, 1000);
    }, 1000);
</script>
</body>
</html>

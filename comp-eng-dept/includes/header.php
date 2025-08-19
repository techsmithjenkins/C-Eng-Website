<?php
// Database connection
$host = 'localhost';
$user = 'root';
$pass = '';  // Empty for default XAMPP; change if you set a password
$db = 'comp_eng_db';  // Ensure this matches your DB name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en" data-aos-easing="ease" data-aos-duration="800" data-aos-delay="200" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CENG Dept&mdash;GCTU | Home</title>
  <!-- Tailwind + AOS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: '#003366', accent: '#FFC107' }
        }
      }
    }
  </script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="flex flex-col min-h-screen bg-white overflow-x-hidden">

  <!-- NAV -->
  <header class="bg-primary/90 text-white fixed top-0 w-full z-20 shadow-lg">
    <div class="container w-full max-w-full mx-auto flex flex-wrap items-center justify-between px-2 sm:px-4 py-2 sm:py-4">
      <a href="index.php" class="text-lg xs:text-xl sm:text-2xl font-extrabold hover:text-accent transition whitespace-nowrap">COMPUTER ENG Dept.</a>
      <!-- Hamburger Button (Mobile) -->
      <button id="mobile-menu-btn" class="lg:hidden flex items-center px-3 py-2 border rounded text-accent border-accent focus:outline-none ml-2" aria-label="Open Menu">
        <svg class="h-7 w-7 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <!-- Desktop Nav -->
      <nav id="main-nav" class="hidden lg:block w-full lg:w-auto mt-3 lg:mt-0">
        <ul class="flex flex-col lg:flex-row lg:space-x-6 space-y-2 lg:space-y-0 w-full lg:w-auto">
          <li><a href="index.php" class="hover:text-accent transition block py-2 px-2 font-bold">Home</a></li>
          <li><a href="about.php" class="hover:text-accent transition block py-2 px-2">About</a></li>
          <li><a href="news.php" class="hover:text-accent transition block py-2 px-2">News</a></li>
          <li><a href="alumni.php" class="hover:text-accent transition block py-2 px-2">Alumni</a></li>
          <li><a href="projects.php" class="hover:text-accent transition block py-2 px-2">Projects</a></li>
        </ul>
      </nav>
    </div>
    <!-- Mobile Nav -->
    <nav id="mobile-nav" class="lg:hidden hidden bg-primary/95 w-full absolute left-0 top-full shadow-lg">
      <ul class="flex flex-col divide-y divide-accent">
        <li><a href="index.php" class="block px-6 py-4 hover:text-accent transition font-bold">Home</a></li>
        <li><a href="about.php" class="block px-6 py-4 hover:text-accent transition">About</a></li>
        <li><a href="news.php" class="block px-6 py-4 hover:text-accent transition">News</a></li>
        <li><a href="alumni.php" class="block px-6 py-4 hover:text-accent transition">Alumni</a></li>
        <li><a href="projects.php" class="block px-6 py-4 hover:text-accent transition">Projects</a></li>
      </ul>
    </nav>
  </header>

  <main class="mt-24 flex-grow">
    <!-- Main Content -->
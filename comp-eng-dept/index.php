<?php include 'includes/header.php'; ?>

<!-- Intro Carousel -->
<section id="intro-carousel" class="relative h-72 sm:h-96 overflow-hidden">
    <!-- Slide 1 -->
    <div class="absolute inset-0 bg-cover bg-center flex items-center justify-center opacity-100 transition-opacity duration-1000 w-full max-w-full"
        style="background-image:url('https://site.gctu.edu.gh/wp-content/uploads/2024/08/Ghana-Gas-Delegation4.jpg')"
        data-index="0">
        <div class="bg-white/80 p-4 sm:p-6 rounded-lg shadow-lg w-11/12 max-w-xl mx-auto" data-aos="fade-up">
            <h1 class="text-2xl sm:text-4xl font-bold text-primary mb-2">Welcome from the HoD</h1>
            <p class="text-primary mb-4 text-base sm:text-lg">Engineering tomorrow’s innovations, today.</p>
            <a href="about.html"
                class="inline-block bg-accent text-primary font-semibold px-4 sm:px-5 py-2 rounded-lg transition text-sm sm:text-base">Learn
                More</a>
        </div>
    </div>
    <!-- Slide 2 -->
    <div class="absolute inset-0 bg-cover bg-center flex items-center justify-center opacity-0 transition-opacity duration-1000 w-full max-w-full"
        style="background-image:url('https://site.gctu.edu.gh/wp-content/uploads/2024/08/gctu-computer-lab5.jpg')"
        data-index="1">
        <div class="bg-white/80 p-4 sm:p-6 rounded-lg shadow-lg w-11/12 max-w-xl mx-auto" data-aos="fade-up">
            <h1 class="text-2xl sm:text-4xl font-bold text-primary mb-2">Discover Our Labs</h1>
            <p class="text-primary mb-4 text-base sm:text-lg">State-of-the-art facilities for hands-on research.</p>
        </div>
    </div>
    <!-- Slide 3 -->
    <div class="absolute inset-0 bg-cover bg-center flex items-center justify-center opacity-0 transition-opacity duration-1000 w-full max-w-full"
        style="background-image:url('https://site.gctu.edu.gh/wp-content/uploads/2024/03/world-engineering-day-main.jpg')"
        data-index="2">
        <div class="bg-white/80 p-4 sm:p-6 rounded-lg shadow-lg w-11/12 max-w-xl mx-auto" data-aos="fade-up">
            <h1 class="text-2xl sm:text-4xl font-bold text-primary mb-2">Student Innovation</h1>
            <p class="text-primary mb-4 text-base sm:text-lg">See our teams bring ideas to life.</p>
            <a href="projects.html#projects"
                class="inline-block bg-accent text-primary font-semibold px-4 sm:px-5 py-2 rounded-lg transition text-sm sm:text-base">Explore
                Gallery</a>
        </div>
    </div>
    <script>
        const slides = document.querySelectorAll('#intro-carousel > div');
        let idx = 0;
        setInterval(() => {
            slides[idx].classList.remove('opacity-100');
            slides[idx].classList.add('opacity-0');
            idx = (idx + 1) % slides.length;
            slides[idx].classList.remove('opacity-0');
            slides[idx].classList.add('opacity-100');
        }, 6000);
    </script>
</section>


<!-- Hero Banner -->
<section id="hero-banner" class="py-10 sm:py-16 px-2 sm:px-6 bg-gray-400">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        <div data-aos="fade-right">
            <div class="bg-primary text-white rounded-xl p-4 sm:p-8 hover:bg-primary/90 transition">
                <h2 class="text-xl sm:text-2xl font-semibold mb-2">Latest News</h2>
                <p class="mb-4 text-sm sm:text-base">Computer Engineering Students engage in practical Mobile
                    Development Exam</p>
                <a href="news.html" class="underline text-sm sm:text-base">Read More</a>
            </div>
        </div>
        <div data-aos="fade-up" class="order-last md:order-none">
            <div class="bg-primary text-white rounded-xl p-4 sm:p-8 hover:bg-primary/90 transition">
                <h2 class="text-xl sm:text-2xl font-semibold mb-2">Next Big Event</h2>
                <p class="mb-4 text-sm sm:text-base">GAIAFest — somewhere in August, 2025</p>
                <button
                    class="bg-accent text-primary font-semibold px-4 sm:px-5 py-2 rounded-lg transition text-sm sm:text-base">Read
                    More</button>
            </div>
        </div>
        <div data-aos="fade-left">
            <div class="bg-gray-200 border-2 border-accent rounded-xl p-4 sm:p-8 hover:shadow-lg transition">
                <h2 class="text-xl sm:text-2xl font-semibold mb-2 text-primary">Quick Spotlight</h2>
                <p class="mb-4 text-sm sm:text-base">Check out our Late Summer Bootcamp.</p>
                <a href="news.html" class="text-accent underline text-sm sm:text-base">Learn More</a>
            </div>
        </div>

        <?php
        // Query the latest news item
        $news_result = $conn->query("SELECT * FROM news ORDER BY date DESC LIMIT 1");
        if ($news_result->num_rows > 0) {
            $row = $news_result->fetch_assoc();
            ?>
            <div data-aos="fade-right">
                <div class="bg-primary text-white rounded-xl p-4 sm:p-8 hover:bg-primary/90 transition">
                    <h2 class="text-xl sm:text-2xl font-semibold mb-2">Latest News</h2>
                    <p class="mb-4 text-sm sm:text-base"><?php echo $row['description']; ?></p>
                    <a href="<?php echo $row['link']; ?>" class="underline text-sm sm:text-base">Read More</a>
                </div>
            </div>
            <?php
        } else {
        echo '<div data-aos="fade-right"><div class="bg-primary text-white rounded-xl p-4 sm:p-8 hover:bg-primary/90 transition"><h2 class="text-xl sm:text-2xl font-semibold mb-2">Latest News</h2><p class="mb-4 text-sm sm:text-base">No news available.</p></div></div>';
        }
        ?>

    </div>



</section>

<!-- CTA -->
<section id="cta" class="py-12 text-center" data-aos="zoom-in">
    <a href="projects.html#projects"
        class="bg-accent text-primary font-bold px-8 py-4 rounded-full shadow-lg transition">Watch Student Projects</a>
</section>

<!-- Quick Highlights -->
<section id="highlights" class="py-10 sm:py-16 px-2 sm:px-6 bg-gray-400">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg hover:shadow-2xl transition" data-aos="flip-left">
            <h3 class="font-semibold text-xl mb-2 text-primary">State-of-the-Art Labs</h3>
            <p>Explore cutting-edge research facilities.</p>
        </div>
        <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg hover:shadow-2xl transition" data-aos="flip-up">
            <h3 class="font-semibold text-xl mb-2 text-primary">Publications</h3>
            <p>Access our latest peer-reviewed papers.</p>
        </div>
        <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg hover:shadow-2xl transition" data-aos="flip-right">
            <h3 class="font-semibold text-xl mb-2 text-primary">Student Life</h3>
            <p>Join vibrant clubs & communities.</p>
        </div>
    </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
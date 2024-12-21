<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Frontend Layout Clone</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="spotlight"></div>
    <div class="container">
            <div class="left-column">
                <div class="left-header">
                <h1>Brittany Chiang</h1>
                <h2>Front End Engineer</h2>
                <p>I build accessible, pixel-perfect digital experiences for the web.</p>
            </div>

            <div class="menu">
                <a href="#" class="active">ABOUT</a>
                <a href="#">EXPERIENCE</a>
                <a href="#">PROJECTS</a>
            </div>
            <div class="social-icons">
                <a href="#" class="text-light"><i class="bi bi-github"></i></a>
                <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-light"><i class="bi bi-code-slash"></i></a>
                <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light"><i class="bi bi-book"></i></a>
            </div>
        </div>
        <div class="right-column">
            <p>I'm a developer passionate about crafting accessible, pixel-perfect user interfaces that blend thoughtful design with robust engineering. My favorite work lies at the intersection of design and development, creating experiences that not only look great but are meticulously built for performance and usability.</p>

            <p>Currently, I'm a Senior Front-End Engineer at <strong>Klaviyo</strong>, specializing in accessibility. I contribute to the creation and maintenance of UI components that power Klaviyo’s frontend, ensuring our platform meets web accessibility standards and best practices to deliver an inclusive user experience.</p>

            <p>In the past, I've had the opportunity to develop software across a variety of settings — from <strong>advertising agencies</strong> and <strong>large corporations</strong> to <strong>start-ups</strong> and <strong>small digital product studios</strong>. Additionally, I also released a <strong>comprehensive video course</strong> a few years ago, guiding learners through building a web app with the Spotify API.</p>

            <p>In my spare time, I’m usually climbing, reading, hanging out with my wife and two cats, or running around Hyrule searching for Korok seeds.</p>

            <div class="timeline">
                <span>2024 — PRESENT</span>
                Senior Frontend Engineer, Accessibility · Klaviyo
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("mousemove", (e) => {
        document.documentElement.style.setProperty('--mouse-x', e.clientX + 'px');
        document.documentElement.style.setProperty('--mouse-y', e.clientY + 'px');
    });

</script>
</body>
</html>
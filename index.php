<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Frontend Layout Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="spotlight"></div>
    <div class="container">
            <div class="left-column">
                <div class="left-header">
                    <h1>Memecoin</h1>
                    <h2>Cryptocurrency</h2>
                    <p>I build accessible, pixel-perfect digital experiences for the web.</p>
                </div>

                <div class="menu">
                    <a href="#" class="active">About</a>
                    <a href="#">Experience</a>
                    <a href="#">Projects</a>
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
            <div class="right-header">
                <p>I'm a developer passionate about crafting accessible, pixel-perfect user interfaces that blend thoughtful design with robust engineering. My favorite work lies at the intersection of design and development, creating experiences that not only look great but are meticulously built for performance and usability.</p>

                <p>Currently, I'm a Senior Front-End Engineer at <strong>Klaviyo</strong>, specializing in accessibility. I contribute to the creation and maintenance of UI components that power Klaviyo’s frontend, ensuring our platform meets web accessibility standards and best practices to deliver an inclusive user experience.</p>

                <p>In the past, I've had the opportunity to develop software across a variety of settings — from <strong>advertising agencies</strong> and <strong>large corporations</strong> to <strong>start-ups</strong> and <strong>small digital product studios</strong>. Additionally, I also released a <strong>comprehensive video course</strong> a few years ago, guiding learners through building a web app with the Spotify API.</p>

                <p>In my spare time, I’m usually climbing, reading, hanging out with my wife and two cats, or running around Hyrule searching for Korok seeds.</p>
            </div>

            <div class="timeline">
                 <div class="timeline-container">
                    <div class="date">2024 — PRESENT</div>
                    <div class="content">
                    <h3>Senior Frontend Engineer, Accessibility &middot; Klaviyo</h3>
                    <p>
                        Build and maintain critical components used to construct Klaviyo's frontend, across the whole product. Work closely with cross-functional teams, including developers, designers, and product managers, to implement and advocate for best practices in web accessibility.
                    </p>
                    <div class="tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">React</span>
                        <span class="tag">Storybook</span>
                    </div>
                    </div>
                </div>

                 <div class="timeline-container">
                    <div class="date">2024 — PRESENT</div>
                    <div class="content">
                    <h3>Senior Frontend Engineer, Accessibility &middot; Klaviyo</h3>
                    <p>
                        Build and maintain critical components used to construct Klaviyo's frontend, across the whole product. Work closely with cross-functional teams, including developers, designers, and product managers, to implement and advocate for best practices in web accessibility.
                    </p>
                    <div class="tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">React</span>
                        <span class="tag">Storybook</span>
                    </div>
                    </div>
                </div>

                <div class="timeline-container">
                    <div class="date">2024 — PRESENT</div>
                    <div class="content">
                    <h3>Senior Frontend Engineer, Accessibility &middot; Klaviyo</h3>
                    <p>
                        Build and maintain critical components used to construct Klaviyo's frontend, across the whole product. Work closely with cross-functional teams, including developers, designers, and product managers, to implement and advocate for best practices in web accessibility.
                    </p>
                    <div class="tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">React</span>
                        <span class="tag">Storybook</span>
                    </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
   
<script>
document.addEventListener("DOMContentLoaded", function() {
    const timelineContainers = document.querySelectorAll('.timeline-container');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.6 });

    timelineContainers.forEach(container => {
        observer.observe(container);
    });
});

document.addEventListener("mousemove", (e) => {
    const x = (e.clientX / window.innerWidth) * 100; // Normalize to percentage
    const y = ((e.clientY + window.scrollY) / document.documentElement.scrollHeight) * 100; // Normalize with scroll offset

    document.documentElement.style.setProperty("--mouse-x", x + "%");
    document.documentElement.style.setProperty("--mouse-y", y + "%");
});
</script>
</body>
</html>

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
                <p>Exploring the world of memecoins, I delve into the creation of accessible, pixel-perfect digital experiences that capture the humor and viral nature of internet culture.</p>
            </div>

            <div class="menu">
                <a href="#right-header" class="active" id="about-link">About</a>
                <a href="#timeline" id="timeline-link">Timeline</a>
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
            <div class="right-header" id="right-header">
                <p>Memecoins are cryptocurrencies inspired by internet memes and humor. They often start as jokes but can grow into assets with large communities and significant market value. Their popularity stems from playful origins and viral online trends.</p>

                <p>The memecoin journey began in December 2013 with <strong>Dogecoin</strong>, created by Billy Markus and Jackson Palmer. Based on the "Doge" meme featuring a Shiba Inu, Dogecoin gained attention for its lighthearted branding and charitable causes.</p>

                <p>Building on Dogecoin's success, <strong>Shiba Inu (SHIB)</strong> launched in 2020, branding itself as the "Dogecoin killer." It quickly gained popularity, forming an ecosystem of tokens and riding the 2021 crypto boom. Other memecoins, like <strong>PepeCoin</strong> and <strong>Floki Inu</strong>, followed suit.</p>

                <p>Today, memecoins blend humor with speculative investing. While some question their utility, others view them as accessible tools for new investors, keeping them central to cryptocurrency discussions.</p>
            </div>

            <div class="timeline" id="timeline">
                <div class="timeline-container">
                    <div class="date">2013-2014</div>
                    <div class="content">
                        <h3>Launch of Dogecoin</h3>
                        <p>Dogecoin, created by Billy Markus and Jackson Palmer, is introduced as the first memecoin, inspired by the "Doge" meme featuring a Shiba Inu dog. It quickly gains popularity for its humor and charitable fundraising efforts, becoming a staple in the cryptocurrency community.</p>
                        <div class="tags">
                            <span class="tag">Dogecoin</span>
                            <span class="tag">Shiba Inu</span>
                            <span class="tag">Crypto</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-container">
                    <div class="date">2020-2021</div>
                    <div class="content">
                        <h3>Rise of Shiba Inu (SHIB)</h3>
                        <p>Shiba Inu launches as the "Dogecoin killer," introducing an ecosystem of tokens and leveraging internet culture to build a strong following. The project gains significant attention and quickly amasses a large community, riding the wave of the 2021 crypto boom.</p>
                        <div class="tags">
                            <span class="tag">SHIB</span>
                            <span class="tag">Dogecoin Killer</span>
                            <span class="tag">Crypto Boom</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-container">
                    <div class="date">2021-2023</div>
                    <div class="content">
                        <h3>Expansion of Memecoins</h3>
                        <p>Additional memecoins like PepeCoin and Floki Inu emerge, reflecting the viral nature of internet culture and speculative investing trends. These coins attract a new wave of investors looking to capitalize on the popularity of memecoins, further expanding the market.</p>
                        <div class="tags">
                            <span class="tag">PepeCoin</span>
                            <span class="tag">Floki Inu</span>
                            <span class="tag">Speculative Investing</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-container">
                    <div class="date">2021-2021</div>
                    <div class="content">
                        <h3>Elon Musk's Influence</h3>
                        <p>Elon Musk's tweets significantly boost the popularity and value of Dogecoin, leading to widespread media coverage. His influence brings mainstream attention to memecoins, driving up their value and attracting new investors.</p>
                        <div class="tags">
                            <span class="tag">Elon Musk</span>
                            <span class="tag">Dogecoin</span>
                            <span class="tag">Media</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-container">
                    <div class="date">2022-2022</div>
                    <div class="content">
                        <h3>Introduction of Baby DogeCoin</h3>
                        <p>Baby DogeCoin is launched, aiming to capitalize on the success of Dogecoin with a focus on community and charity. The coin quickly gains a following, leveraging the popularity of its predecessor and promoting charitable causes.</p>
                        <div class="tags">
                            <span class="tag">Baby DogeCoin</span>
                            <span class="tag">Community</span>
                            <span class="tag">Charity</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-container">
                    <div class="date">2023-2023</div>
                    <div class="content">
                        <h3>Continued Growth</h3>
                        <p>Memecoins continue to grow in popularity, with new coins emerging and attracting speculative investors. The market for memecoins expands, driven by their viral nature and the potential for high returns on investment.</p>
                        <div class="tags">
                            <span class="tag">Growth</span>
                            <span class="tag">New Coins</span>
                            <span class="tag">Speculation</span>
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
    }, { threshold: 0.4 });

    timelineContainers.forEach(container => {
        observer.observe(container);
    });

    // Smooth scrolling
    document.querySelectorAll('.menu a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Update active menu item on scroll
    const sections = document.querySelectorAll('.right-header, .timeline');
    const menuLinks = document.querySelectorAll('.menu a');

    window.addEventListener('scroll', () => {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
                current = section.getAttribute('id');
            }
        });

        menuLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').substring(1) === current) {
                link.classList.add('active');
            }
        });
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
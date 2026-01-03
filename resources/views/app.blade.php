<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Your Name</title>
    <link rel="stylesheet" href="{{ asset('style.css ')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar">
    <div class="container">
        <div class="nav-brand">
            <a href="#home">Portfolio</a>
        </div>
        <ul class="nav-menu">
            <li><a href="#home" class="nav-link">Home</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#skills" class="nav-link">Skills</a></li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Hi, I'm <span class="highlight">@if (isset($name))
                        {{ $name }}
                        
                        @else
                        Your Name
                    @endif </span>
                </h1>
                <h2 class="hero-subtitle">Full Stack Developer</h2>
                <p class="hero-description">
                    I create beautiful, functional, and user-friendly websites and applications.
                    Passionate about clean code and innovative solutions.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-placeholder">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="80" fill="#667eea" opacity="0.2"/>
                        <circle cx="100" cy="80" r="30" fill="#667eea"/>
                        <ellipse cx="100" cy="140" rx="50" ry="30" fill="#667eea"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-text">
                {{-- @dd($about) --}}
                {!!$about!!}
                <div class="about-stats">
                    <div class="stat">
                        <h3>{{ $ProjectsCompleted }}+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat">
                        <h3>3+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div class="stat">
                        <h3>100+</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills">
    <div class="container">
        <h2 class="section-title">Skills & Technologies</h2>
        <div class="skills-grid">

            

            @forelse ($skills as  $item)
                {{-- @if ()   --}}
                    <div class="skill-card">
                    <div class="skill-icon " ><img src="{{ asset($item->image) }}" style="max-width:50%; height:auto;" alt=""></div>
                    <h3>{{ $item->name}}</h3>
                    <p>{{ $item->sub_skills }}</p>
                </div>
                {{-- @endif --}}
                 
            @empty
                
            @endforelse

                {{-- $item->id !==66 --}}
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <h2 class="section-title">Featured Projects</h2>
        <div class="projects-grid">

            @forelse ($projects as  $project)
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset($project->image) }}" style=" width: 450px; height:auto;" alt="">
                    <div class="project-overlay">
                        <a href="#" class="project-link">View Project</a>
                        <a href="#" class="project-link">Source Code</a>
                    </div>
                </div>
                <div class="project-content">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                   <div class="project-tags">
                        
                        @php
                            $techs = is_array($project->technology) ? $project->technology  : explode(' ', $project->technology);
                        @endphp

                    @foreach($techs as $technology)
                        <span class="tag">{{ $technology }}</span>
                    @endforeach
                </div>


                </div>
            </div>

            @empty
                "No projects found"
            @endforelse

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <div class="contact-content">
            <div class="contact-info">
                <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <span class="contact-icon">📧</span>
                        <div>
                            <h4>Email</h4>
                            <p>your.email@example.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📱</span>
                        <div>
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <div>
                            <h4>Location</h4>
                            <p>Your City, Country</p>
                        </div>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="GitHub">GitHub</a>
                    <a href="#" class="social-link" aria-label="LinkedIn">LinkedIn</a>
                    <a href="#" class="social-link" aria-label="Twitter">Twitter</a>
                    <a href="#" class="social-link" aria-label="Instagram">Instagram</a>
                </div>
            </div>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Portfolio. All rights reserved. Made with ❤️</p>
    </div>
</footer>

<script>
    // Mobile menu toggle
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Navbar background on scroll
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
</body>
</html>
---------------------------------------------------------------------------------?
<div class="project-card">
    <div class="project-image">
        <div class="project-overlay">
            <a href="#" class="project-link">View Project</a>
            <a href="#" class="project-link">Source Code</a>
        </div>
    </div>
    <div class="project-content">
        @isset($project)
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <div class="project-tags">
                @foreach($project->tags ?? [] as $tag)
                    <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
        @else
            <h3>E-Commerce Platform</h3>
            <p>A fully functional e-commerce platform with payment integration, user authentication, and admin dashboard.</p>
            <div class="project-tags">
                <span class="tag">React</span>
                <span class="tag">Node.js</span>
                <span class="tag">MongoDB</span>
            </div>
        @endisset
    </div>
</div>



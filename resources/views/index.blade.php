<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Web Development Solutions</title>
</head>
<body>
    <nav>
        <div class="nav__bar">
            <div class="nav__header">
                <div class="nav__logo">
                    <a href="#">DVK</a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                  <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <header class="section__container header__container" id="home">
        <img src="images/developer.png" alt="header" />
        <h1>Need a <span>website</span>?</h1>
        <p>Hi! It's my mission to share my skills & expertise to people who want to level up their
           business through effective digital marketing via web development solutions. Here, you will
           find a showcase of my web projects and insights in web development.
        </p>
    </header>

    <div class="header__btns">
        <button class="btn">Get in Touch</button>
        <a href="resume/CV.pdf" download>Download CV</a>
    </div>

    <br><br>

    <section class="section__container skill__container">
        <h2>EXPERIENCED WITH</h2>
        <ul class="skills__flex">
          <li>
           <span><i class="ri-javascript-fill"></i></span>
          </li>
          <li>
           <span><i class="ri-html5-fill"></i></span>
          </li>
          <li>
           <span><i class="ri-css3-fill"></i></span>
          </li>
          <li>
           <span><i class="ri-php-fill"></i></span>
          </li>
          <li>
           <span><i class="ri-bootstrap-fill"></i></span>
          </li>
        </ul>
   </section>

   <section class="section__container project__container" id="project">
      <h2>PROJECTS</h2>
      <div class="project__grid">
        <div class="project__card">
            <img src="images/project-1.jpg" alt="project">
            <div class="project__card__details">
                <div>
                    <p>Seamless User Experience</p>
                    <h4>Stunning Landing Page</h4>
                </div>
                <a href="#"><i class="ri-arrow-right-up-line"></i></a>
            </div>
        </div>
        <div class="project__card">
            <img src="images/project-2.jpg" alt="project">
            <div class="project__card__details">
                <div>
                    <p>Discover New Destinations</p>
                    <h4>Explore The World</h4>
                </div>
                <a href="#"><i class="ri-arrow-right-up-line"></i></a>
            </div>
        </div>
      </div>
   </section>

   <section class="section__container experience__container" id="experience">
        <h2>EXPERIENCE</h2>
        <ul class="experience__list">
            <li>
               <div class="experience__header">
                <div>
                    <img src="images/de-la-salle-college-of-saint-benilde-logo.png" alt="College of Saint Benilde">
                    <h4>Web Development intern</h4>
                </div>
                <p>May 2021 to August 2021</p>
               </div>
               <p>During my tenure at Benilde, I honed my skills in front-end and
                back-end development, working on diverse projects that improved
                platform functionality. My responsibilities included coding,
                testing, and deploying software, as well as supporting senior
                engineers in creating innovative social media solutions.
               </p>
            </li>
        </ul>
   </section>

   <footer>
    <div class="section__container footer__container" id="contact">
        <h2>Contact</h2>
        <p>
            I'd love to hear from you! Whether you have a project in mind, a
            question about my work, or just want to connect, feel free to reach
            out. You can contact me via email or through my social media channels.
            I am always excited to collaborate with like-minded individuals and
            explore new opportunities.
        </p>
        <div class="mail__to">
              <a href="mailto:dalevincent.kakilala@gmail.com">
                <span><i class="ri-mail-line"></i></span>
                dalevincent.kakilala@gmail.com
              </a>
        </div>
        <ul class="footer__socials">
            <li>
                <a href="#"><i class="ri-messenger-fill"></i></a>
            </li>
            <li>
                <a href="https://github.com/dvkak1"><i class="ri-github-fill"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/dale-vincent-kakilala-a2375a138/"><i class="ri-linkedin-box-fill"></i></a>
            </li>
        </ul>
    </div>
   </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="app.js"></script>
</body>
</html>

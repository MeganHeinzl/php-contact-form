<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129656168-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-129656168-2');
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Megan Heinzl | Web Developer</title>
    <meta property="og:title" content="Megan Heinzl | Web Developer" />
    <meta property="og:description" content="Megan Heinzl is an aspiring web designer and developer, located in the Vancouver region of BC, Canada." />
    <meta property="og:url" content="http://meganheinzl.com/" />
    <meta property="og:image" content="http://meganheinzl.com/images/meta-image.jpg" />
    <meta name="description" content="Megan Heinzl is an aspiring web designer and developer, located in the Vancouver region of BC, Canada."/>
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style/styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nixie+One|Raleway:400,400i,700,700i"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>
            <a
              class="contact-nav contact-active hvr-underline-from-left hvr-ripple-out"
              href="contact.php"
              >Contact</a
            >
          </li>
          <li>
            <a
              class="home-nav hvr-underline-from-center hvr-ripple-out"
              href="/"
              >Home<img class="logo" src="logo.png" alt="logo"
            /></a>
          </li>
          <li>
            <a
              class="portfolio-nav hvr-underline-from-right hvr-ripple-out"
              href="portfolio.html"
              >Portfolio</a
            >
          </li>
        </ul>
      </nav>
    </header>
    <main class="contact-main">
      <hr>
      <section class="direct">
        <h2>Contact Me Directly</h2>
        <p><b>E-mail:</b> <a
              href="mailto:me@meganheinzl.com"
              class="hvr-underline-from-center-grad"
              >me@meganheinzl.com</a
            >
            <br />
            <b>Phone:</b>
            <a href="tel:1-604-803-3847" class="hvr-underline-from-center-grad"
              >604-803-3847</a
            ></p>
            <div class="social-nav">
            <nav>
              <ul>
                <li>
                  <a
                    href="https://www.linkedin.com/in/megan-heinzl/"
                    target="_blank"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                </li>
                <li>
                  <a href="https://github.com/MeganHeinzl" target="_blank"
                    ><i class="fab fa-github-square"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/paddedwall/"
                    target="_blank"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </li>
              </ul>
            </nav>
          </div>
      </section>
      <hr>
      <section class="coolform">
        <div class="formhead">
          <h2>Use My Cool Form</h2>
          <p>It really works!</p>
        </div>
       <?php @session_start();
        if(isset($_SESSION['errormessage'])){
	      echo "<b>" . $_SESSION['errormessage'] . "</b>";
         unset($_SESSION['errormessage']);
          }
          if(isset($_SESSION['success'])){
            echo "<b>" . $_SESSION['success'] . "</b>";
             unset($_SESSION['success']);
              }
          ?>

        <form action="form-processing.php" method="post">

            <label for="name">Name </label>
            <input type="text" name="name" placeholder="Enter your name">
            <label for="email">Email </label>
            <input type="text" name="email" placeholder="Enter your email">
            <label for="subject">Subject </label>
            <input type="text" name="subject" placeholder="Enter a subject"><br>

            <label for="message">Message </label>
            <textarea rows=11 name="message" placeholder="Type your message here"></textarea><br>
            <input type="submit" value="Send">

        </form>
      </section>
    </main>
    <footer>
      <div class="pleasehireme" data-aos="fade-up" data-aos-duration="1000">
        <hr />
        <p>
          Like what you see? Caught your attention? Piqued your interest?
          <a href="contact.php" class="hvr-underline-from-center-grad"
            >Contact me</a
          >
          or go see more of
          <a href="portfolio.html" class="hvr-underline-from-center-grad"
            >my work.</a
          >
        </p>
        <hr />
      </div>
      <div class="footer-wrapper">
        <div class="footer-contact">
          <h3>Contact Information</h3>
          <p>
            E-mail:
            <a
              href="mailto:me@meganheinzl.com"
              class="hvr-underline-from-center-grad"
              >me@meganheinzl.com</a
            >
            <br />
            Phone:
            <a href="tel:1-604-803-3847" class="hvr-underline-from-center-grad"
              >604-803-3847</a
            >
          </p>
        </div>
        <div class="social-wrapper">
          <div class="social-nav">
            <nav>
              <ul>
                <li>
                  <a
                    href="https://www.linkedin.com/in/megan-heinzl/"
                    target="_blank"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                </li>
                <li>
                  <a href="https://github.com/MeganHeinzl" target="_blank"
                    ><i class="fab fa-github-square"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/paddedwall/"
                    target="_blank"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="pet-nav">
            <h3>Meet My Pets</h3>
            <ul>
              <li>
                <a
                  href="https://www.instagram.com/cooper.the.cardigan.corgi/"
                  target="_blank"
                  class="hvr-underline-from-center-grad"
                  ><i class="fas fa-dog"></i
                ></a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/noob.the.bengal.cat/"
                  target="_blank"
                  class="hvr-underline-from-center-grad"
                  ><i class="fas fa-cat"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr />
      <p>&copy Megan Heinzl 2019</p>
      <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src ="js/scroll-to-top.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Vulnerabilities Hub</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    

<link rel="stylesheet" href="css/bootstrap.css">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">78.9% of all the websites whose server-side programming language we know are powered by PHP behind the scenes. Without much fanfare, PHP has become the de-facto technology underlying most of the web as we know it today. This popularity has, in turn, introduced a new challenge: Web security. We tell you about the famous vulnerabilities and how to fix those all with ease.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">          
          <li><a href="mailto:hacknation28@gmail.com" class="text-white">Email me</a></li>
          
            <li><a href="https://www.instagram.com/bakshish_28/" class="text-white" target="_blank">Follow on Instagram</a></li>  
           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        
        <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M368 128C368 172.4 342.6 211.5 304 234.4V256C304 273.7 289.7 288 272 288H175.1C158.3 288 143.1 273.7 143.1 256V234.4C105.4 211.5 79.1 172.4 79.1 128C79.1 57.31 144.5 0 223.1 0C303.5 0 368 57.31 368 128V128zM167.1 176C185.7 176 199.1 161.7 199.1 144C199.1 126.3 185.7 112 167.1 112C150.3 112 135.1 126.3 135.1 144C135.1 161.7 150.3 176 167.1 176zM280 112C262.3 112 248 126.3 248 144C248 161.7 262.3 176 280 176C297.7 176 312 161.7 312 144C312 126.3 297.7 112 280 112zM3.378 273.7C11.28 257.9 30.5 251.5 46.31 259.4L223.1 348.2L401.7 259.4C417.5 251.5 436.7 257.9 444.6 273.7C452.5 289.5 446.1 308.7 430.3 316.6L295.6 384L430.3 451.4C446.1 459.3 452.5 478.5 444.6 494.3C436.7 510.1 417.5 516.5 401.7 508.6L223.1 419.8L46.31 508.6C30.5 516.5 11.28 510.1 3.378 494.3C-4.526 478.5 1.881 459.3 17.69 451.4L152.4 384L17.69 316.6C1.881 308.7-4.526 289.5 3.378 273.7V273.7z" fill="white"></path></svg>
        <strong style="padding-left: 8px">Vuln-Hub</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="padding-bottom: 10px">Vulnerabilities Hub</h1>
        <p class="lead text-muted">This Website is designed to showcase the most spreaded <br> Security Issues And Vulnerabilities over the internet.</p>
        
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/sql.jpg" alt="">
            <div class="card-body">
              <p class="card-text">SQL Injection</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/xss.png" alt="">

            <div class="card-body">
              <p class="card-text">XSS (Cross-Site Scripting)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/shell.png" alt="">

            <div class="card-body">
              <p class="card-text">Shell Injection</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/" alt="">

            <div class="card-body">
              <p class="card-text">Cross-site request forgery (CSRF)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/" alt="">

            <div class="card-body">
              <p class="card-text">Directory indexing</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/" alt="">

            <div class="card-body">
              <p class="card-text">Unrestricted File Upload</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/" alt="">

            <div class="card-body">
              <p class="card-text">Broken Authentication </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/" alt="">

            <div class="card-body">
              <p class="card-text"> Denial-of-Service (DoS)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/" alt="">

            <div class="card-body">
              <p class="card-text">Broken Access Control</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Learn</button>
                </div>
                <small class="text-muted">Vuln-Hub</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
    <a href="#">Back to top</a>
    </p>
    
  </div>
</footer>


<script src="js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>

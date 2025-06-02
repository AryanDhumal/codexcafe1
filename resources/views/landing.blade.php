<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CodexCafe - Where Code Meets Coffee</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

 <header>
  <div class="video-container">
  <iframe
  src="https://www.youtube.com/embed/aTC_RNYtEb0?rel=0&autoplay=1&mute=1&loop=1&playlist=aTC_RNYtEb0&controls=0&modestbranding=1"
  frameborder="0"
  allow="autoplay; encrypted-media"
  allowfullscreen
  title="CodexCafe Intro Video"
></iframe>

  </div>
  <!-- Removed the button below -->
  <!-- <div class="header-content">
    <a href="#explore" class="btn btn-primary">Explore Our Space</a>
  </div> -->
</header>




  <main>
    <section id="explore">
      <h2>Our Vibe</h2>
      <p>Step into a space where the aroma of freshly brewed coffee meets the hum of innovative minds. CodexCafe is designed for creators, thinkers, and dreamers.</p>
      <div class="gallery row">
        <div class="col-md-4"><img src="{{ asset('images/im1.jpg') }}" alt="Cozy coding corner" /></div>
        <div class="col-md-4"><img src="{{ asset('images/im2.jpg') }}" alt="Barista preparing coffee" /></div>
        <div class="col-md-4"><img src="{{ asset('images/im3.jpg') }}" alt="Community events at CodexCafe" /></div>
      </div>
    </section>

    <!-- Signature Dishes Section -->
    <section class="container my-5" id="signature-dishes">
      <h2 class="text-center mb-4">🍽️ Signature Dishes</h2>
      <p class="text-center mb-5">Our most loved items — handpicked for coders & coffee lovers!</p>
      <div class="row text-center">
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/download.png') }}" class="card-img-top" alt="Debug Drip">
            <div class="card-body">
              <h5 class="card-title">Debug Drip</h5>
              <p class="card-text">Strong filter coffee that keeps bugs away.</p>
              <p><strong>₹149</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/Pumpkin-Chocolate-Chip-Cookies-17.png') }}" class="card-img-top" alt="Cookie Overflow">
            <div class="card-body">
              <h5 class="card-title">Cookie Overflow</h5>
              <p class="card-text">Warm choco-chip cookies with a dev's twist.</p>
              <p><strong>₹99</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/download (1).png') }}" class="card-img-top" alt="Caffeinated Stack">
            <div class="card-body">
              <h5 class="card-title">Caffeinated Stack</h5>
              <p class="card-text">Layered chocolate-coffee pastry for a coder's sweet break.</p>
              <p><strong>₹179</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/download (2).jpg') }}" class="card-img-top" alt="Compile & Chill">
            <div class="card-body">
              <h5 class="card-title">Compile & Chill</h5>
              <p class="card-text">Iced mocha crafted to cool your debugging stress.</p>
              <p><strong>₹159</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Menu Section -->
<section class="container my-5 text-center" id="our-menu">
  <h2>Our Menu</h2>
  <p>Explore our full range of delicious dishes curated specially for you!</p>
  <a href="{{ url('/menu') }}" class="btn btn-primary">View Full Menu</a>
</section>


    <section id="what-codexcafe-is">
  <h2>What CodexCafe Is?</h2>
  <p>
    Whether you're debugging code or brainstorming your next big idea, CodexCafe is the perfect backdrop. Come for the coffee, stay for the community.
  </p>
  <a href="{{ url('/about') }}" class="btn-white-green">Know more about us</a>
</section>

  </main>

  <footer>
    <p>&copy; {{ date('Y') }} CodexCafe. All rights reserved. |
      <a href="https://www.instagram.com/yourcafename" target="_blank">Follow us on Instagram</a>
    </p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

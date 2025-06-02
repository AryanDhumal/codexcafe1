<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CodexCafe - Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #1a1a1a;
      color: #f5f5f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2.section-title {
      font-size: 2rem;
      color: orange;
      margin-bottom: 10px;
    }

    .card {
      background-color: #2c2c2c;
      border: none;
      border-radius: 12px;
    }

    .card img {
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      color: orange;
    }

    .card-text {
      color: #ddd;
    }

    .price {
      color: #00c853;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <section class="py-5">
    <div class="container">
      <h2 class="section-title text-center">🍽️ Our Top Quality Dishes</h2>
      <p class="text-center mb-5">Handcrafted with perfection to delight every coder’s taste buds.</p>

      <div class="row" id="foods-container">
        <!-- Food items will be inserted here using JS -->
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const foods = [
        {
          title: "Debug Drip",
          desc: "Strong filter coffee that keeps bugs away.",
          price: "₹149",
          img: "{{ asset('images/download.png') }}",
          alt: "Debug Drip"
        },
        {
          title: "Cookie Overflow",
          desc: "Warm choco-chip cookies with a dev's twist.",
          price: "₹99",
          img: "{{ asset('images/Pumpkin-Chocolate-Chip-Cookies-17.png') }}",
          alt: "Cookie Overflow"
        },
        {
          title: "Pixel Punch",
          desc: "A zesty citrus iced tea with a splash of mint — refreshing like a fresh new code deploy..",
          price: "₹159",
          img: "{{ asset('images/download (3).jpg') }}",
          alt: "Pixel Punch"
        },
        {
          title: "Cache Crunch",
          desc: "Savory cheese and herb croissant, because coders need snacks too!.",
          price: "₹129",
          img: "{{ asset('images/download (4).jpg') }}",
          alt: "Cache Crunch"
        },
         {
          title: "Runtime-Rolls",
          desc: "Cinnamon rolls baked fresh, soft and gooey for your coding breaks.",
          price: "₹149",
          img: "{{ asset('images/download (5).jpg') }}",
          alt: "Runtime-Rolls"
        },
         {
          title: "Stackoverflow smoothie",
          desc: "A refreshing banana and berry smoothie to recharge your brain.",
          price: "₹99",
          img: "{{ asset('images/download (6).jpg') }}",
          alt: "Stackoverflow smoothie"
        },
         {
          title: "Loop latte",
          desc: "Creamy caramel latte with a swirl of honey for endless coding loops.",
          price: "₹189",
          img: "{{ asset('images/download (7).jpg') }}",
          alt: "Loop latte"
        },
         {
          title: "Java Jolt",
          desc: "Espresso shot to energize your coding sprints.",
          price: "₹129",
          img: "{{ asset('images/download (8).jpg') }}",
          alt: "Java Jolt"
        },
         {
          title: "Syntax Sips",
          desc: "Rich vanilla latte with a hint of cinnamon, perfect for smooth coding sessions.",
          price: "₹129",
          img: "{{ asset('images/download (9).jpg') }}",
          alt: "Syntax Sips"
        },
         {
          title: "Byte Bites",
          desc: "Crunchy almond biscotti to nibble while you hack away.",
          price: "₹89",
          img: "{{ asset('images/download (10).jpg') }}",
          alt: "Byte Bites"
        },
        {
          title: "Buggy Brownie",
          desc: "Decadent fudgy brownie with chocolate chunks to fix your sweet cravings.",
          price: "₹199",
          img: "{{ asset('images/download (11).jpg') }}",
          alt: "Buggy Brownie"
        },
        {
          title: "Binary Bites",
          desc: "Crunchy snacks in perfect 1s and 0s.",
          price: "₹79",
          img: "{{ asset('images/download (12).jpg') }}",
          alt: "Binary Bites"
        }
      ];

      const container = document.getElementById("foods-container");

      foods.forEach(food => {
        const col = document.createElement("div");
        col.className = "col-12 col-sm-6 col-md-4 col-lg-3 mb-4";

        const card = document.createElement("div");
        card.className = "card h-100 shadow";

        const img = document.createElement("img");
        img.src = food.img;
        img.alt = food.alt;
        img.className = "card-img-top";
        card.appendChild(img);

        const body = document.createElement("div");
        body.className = "card-body text-center";

        const title = document.createElement("h5");
        title.className = "card-title";
        title.textContent = food.title;
        body.appendChild(title);

        const desc = document.createElement("p");
        desc.className = "card-text";
        desc.textContent = food.desc;
        body.appendChild(desc);

        const price = document.createElement("p");
        price.className = "price";
        price.textContent = food.price;
        body.appendChild(price);

        card.appendChild(body);
        col.appendChild(card);
        container.appendChild(col);
      });
    });
  </script>

</body>
</html>

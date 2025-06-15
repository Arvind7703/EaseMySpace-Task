<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Arvind J Vishwakarma">
    <title>EaseMySpace.in</title>
    <link rel="shortcut icon" href="./assets/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

</head>
<body class='mode-toggle transition-colors duration-500 ease-in-out'>

      <!-- Landing page  -->
  <section id='landing'>
 <header>
    <nav class="lg:pl-20 lg:pr-10 px-0 fixed w-full h-[5rem] flex items-center justify-between bg-white/40 backdrop-blur-md z-50">
  <a class="lg:text-3xl text-xl font-bold text-shadow-lg lg:pl-0 pl-5" href="">EaseMy<span class="text-yellow-400">Space</span>.in</a>
  <input type="checkbox" id="menu-toggle" class="hidden peer" />

   <div class='lg:hidden flex'>

     <i id="toggleIconMobile" class="fa-solid fa-moon text-2xl text-black transition-colors duration-300 block lg:hidden pr-14 pb-4"></i>
   </div>
  <label for="menu-toggle" class="lg:hidden fixed top-4 right-4 z-50 cursor-pointer text-3xl text-zinc-800 flex items-center gap-3">
    
    
    <!-- Hamburger Icon -->
    <i class="fa-solid fa-bars peer-checked:hidden block"></i>
  </label>

  <!-- Mobile Menu -->
  <div class="lg:hidden fixed top-[5rem] left-0 w-full bg-white z-40 px-6 py-6 overflow-hidden 
    max-h-0 opacity-0 pointer-events-none transition-all duration-500 ease-in-out
    peer-checked:max-h-[500px] peer-checked:opacity-100 peer-checked:pointer-events-auto">
    
    <ul class="flex flex-col space-y-6 text-zinc-800 font-semibold text-center w-full max-w-xs mx-auto">
      <li>Home</li>
      <li>About</li>
      <li>Services</li>
      <li>Contact</li>
      <li>
        <button class="w-full mt-4 px-5 py-2 bg-yellow-400 hover:bg-yellow-500 transition rounded-lg font-semibold">Login</button>
      </li>
    </ul>
  </div>

  <!-- laptop Nav -->
  <ul class="lg:flex items-center justify-center gap-7 text-zinc-700 font-semibold hidden">
    <li class="nav-link relative group cursor-pointer text-zinc-800 hover:text-zinc-900 transition-all duration-300 ease-in-out">Home</li>
    <li class="nav-link relative group cursor-pointer text-zinc-800 hover:text-zinc-900 transition-all duration-300 ease-in-out">About</li>
    <li class="nav-link relative group cursor-pointer text-zinc-800 hover:text-zinc-900 transition-all duration-300 ease-in-out">Find Flatmate</li>
    <li class="nav-link relative group cursor-pointer text-zinc-800 hover:text-zinc-900 transition-all duration-300 ease-in-out">Contact</li>
    <button class="relative group px-6 w-[100px] h-[50px] py-2 bg-yellow-400 hover:bg-zinc-800 text-zinc-800 hover:text-yellow-200 rounded-lg font-semibold ml-5 overflow-hidden shadow-lg transition-all duration-200 ease-in-out">
      <span class="absolute inset-0 flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-full">Login</span>
      <span class="absolute inset-0 flex items-center justify-center translate-x-full transition-transform duration-300 group-hover:translate-x-0">Login</span>
    </button>
    <!-- laptop mode toggle -->
    <i id="toggleIcon" class="fa-solid fa-moon text-2xl text-black cursor-pointer transition-colors duration-300"></i>
  </ul>
</nav>


  </header>
  <main class='pt-32 lg:pt-24 flex flex-col items-center justify-center gap-5 lg:px-0 px-5'>
    <div>
      <div class=' overflow-hidden'>

        <h1 class='heading font-serif  lg:text-5xl leading-normal font-extrabold text-2xl text-center'>Welcome to EaseMySpace </h1>
      </div>
      <div class=' overflow-hidden'>
        <div class='landing-heading-span font-serif  lg:text-5xl leading-normal font-extrabold text-2xl text-center'>Your Gateway to Hassle-Free Living</div>
      </div>

    </div>
      <img class='landing-img lg:w-[68rem] lg:h-[32rem]  object-cover rounded-xl' src="./assets/hero.jpg" alt="hero-banner">
    <p class='conflict-txt-test font-semibold text-zinc-500 '>Discover Your Dream Home</p>
  </main>
  
  </section>

  <!-- Offered Features  -->
  <section class='features'>

  <main>
    <div class='pt-20 flex flex-col items-center justify-center gap-5'>
<div class='overflow-hidden'>

  <h2 class='heading font-serif lg:text-4xl text-3xl font-bold  text-center'>Simplify Your Rental Journey</h2>
</div>
      <p class='desc-txt font-semibold text-zinc-500 lg:text-xl text-lg text-center px-5'>At EaseMySpace, we strive to make finding verified flatmates and rental spaces easy, safe, and broker-free.</p>
    </div>
    
    <?php
$features = [
  [
    "img" => "./assets/home-icon.jpg",
    "text" => "Seamless Rentals",
    "info" => "Enjoy a hassle-free experience with our intuitive and smooth platform design."
  ],
  [
    "img" => "./assets/secure-transact.jpg",
    "text" => "Secure Transactions",
    "info" => "Your data and payments are protected with advanced security protocols."
  ],
  [
    "img" => "./assets/streamlined-process.jpg",
    "text" => "Streamlined Process",
    "info" => "From search to move-in, every step is optimized for speed and clarity."
  ],
  [
    "img" => "./assets/trusted-platform.jpg",
    "text" => "Trusted Platform",
    "info" => "Backed by real users and verified listings to ensure reliability."
  ],
];

?>

<div class='grid lg:grid-cols-4 xs:grid-rows-4 h-auto lg:gap-0 gap-5 py-12 place-items-center   '>
  <?php foreach ($features as $feature): ?>
    <div class='group w-[18rem] bg-white border border-zinc-200 shadow-xl rounded-xl flex flex-col gap-5 items-center justify-between p-10 overflow-hidden cursor-pointer '>
      <img class='w-[8rem] h-[8rem] group-hover:scale-120 transition duration-500 ease-in-out' src="<?= $feature['img'] ?>" alt="<?= $feature['text'] ?>">
      <p class='text-xl font-semibold text-zinc-500'><?= $feature['text'] ?></p>
      <p class=' lg:opacity-0 lg:max-h-0 group-hover:opacity-100 group-hover:max-h-40 text-md font-semibold text-zinc-700 transition-all duration-1000 ease-in-out text-center'><?= $feature['info'] ?></p>
    </div>
  <?php endforeach; ?>
</div>

      
  </main>

  </section>

  <!-- CTA  -->
<section>
  <main class=' w-full h-screen flex lg:flex-row flex-col  items-center justify-center '>
    <!-- text-part for cta  -->
    <div class='lg:w-1/2 lg:h-2/3 w-full flex flex-col items-start justify-center gap-7 lg:px-20 px-5 bg-[#21232E] lg:pl-30 pl-5 lg:py-0 py-10'>
    <div class='overflow-hidden'>

      <h3 class='heading font-serif tracking-wider text-white lg:text-6xl text-4xl font-bold pb-5'>Explore Our Services</h3>
    </div>  
      <p class='desc-txt text-zinc-400 text-lg lg:w-2/3 '>At EaseMySpace, we believe that finding your ideal living space should be a breeze. Our platform connects you with verified flatmates and rental </p>
      <button class="relative group px-6 w-[150px] h-[50px] py-2 bg-yellow-400 hover:bg-white text-zinc-800 hover:text-zinc-800 rounded-lg font-semibold  overflow-hidden shadow-lg transition-all duration-200 ease-in-out">
  <span class="absolute inset-0 flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-full">
    Get Started
  </span>
  <span class="absolute inset-0 flex items-center justify-center translate-x-full transition-transform duration-300 group-hover:translate-x-0">
    Get Started
  </span>
</button>
      </div>

      <!-- img section  -->
       <img class='lg:w-1/2 lg:h-2/3 w-full ' src="./assets/cta.jpg" alt="cta-banner">
    
  </main>
</section>

<!-- SHowcase  -->
 <section>
  <div class='pt-5 flex flex-col items-center justify-center gap-5'>
<div class='overflow-hidden'>

  <h2 class='heading font-serif lg:text-6xl text-4xl lg:font-bold font-semibold text-center'>Discover Your Dream Home</h2>
</div>
      <p class='desc-txt lg:w-1/3 w-full lg:px-0 px-5 font-semibold text-zinc-500 text-center py-5 text-xl'>Explore a wide range of verified rental listings, from cozy studios to spacious apartments</p>
    </div>
  <?php
  $showcaseItems = [
  [
    "img" => "./assets/showcase1.jpg",
    "title" => "Streamlined Rental Process",
    "button" => "Learn More"
  ],
  [
    "img" => "./assets/showcase2.jpg",
    "title" => "Personalized",
    "button" => "Apply Now"
  ]
];
  ?>
<div class='flex lg:flex-row flex-col items-center justify-center gap-20 py-10 lg:px-0 px-5 '>
  <?php foreach ($showcaseItems as $item): ?>
    <div class='shadow-xl rounded-lg bg-white'>
      <img class='w-[35rem] rounded-lg' src="<?= $item['img'] ?>" alt="showcase-image">
      <h3 class='py-5 font-semibold text-zinc-700 text-2xl pl-10'><?= $item['title'] ?></h3>
      <button class="relative group px-6 w-[150px] mb-5 h-[50px] py-2 bg-yellow-400 hover:bg-zinc-800 text-zinc-800 hover:text-yellow-200 rounded-lg font-semibold ml-10 overflow-hidden shadow-lg transition-all duration-200 ease-in-out">
        <span class="absolute inset-0 flex items-center justify-center transition-transform duration-300 group-hover:-translate-x-full">
          <?= $item['button'] ?>
        </span>
        <span class="absolute inset-0 flex items-center justify-center translate-x-full transition-transform duration-300 group-hover:translate-x-0">
          <?= $item['button'] ?>
        </span>
      </button>
    </div>
  <?php endforeach; ?>
</div>


 </section>

 <!-- Our team  -->
  <section>
    <main class='conflictelem bg-[#FFF5E9] flex flex-col items-center justify-center py-10 transition-colors duration-500 ease-in-out'>
      <div class='overflow-hidden'>

        <h2 class='conflict-txt heading font-serif lg:text-6xl text-4xl text-center font-bold py-3'>Empowering Conversations</h2>
      </div>
      <p class=' desc-txt font-semibold text-zinc-500 text-center py-5 px-5 text-lg'>Connect with our knowledgeable team of experts who are dedicated to guiding you through every step of your rental journey</p>
   <?php
$teamMembers = [
  [
    "img" => "./assets/team/rakesh-goswami.jpeg",
    "name" => "Rakesh Goswami",
    "role" => "Founder & CEO",
    "desc" => "Leads the vision, strategy, and growth of <span class='font-medium text-gray-800'>EaseMySpace</span>.",
    "linkedin" => ""
  ],
  [
    "img" => "./assets/team/yogita-rathi.jpeg",
    "name" => "Yogita Rathi",
    "role" => "Social Media",
    "desc" => "Handles partnerships and social media engagement. <span class='font-medium text-gray-800'>EaseMySpace</span>.",
    "linkedin" => ""
  ],
  [
    "img" => "./assets/team/taniya-sarkar.jpeg",
    "name" => "Taniya Sarkar",
    "role" => "Business Data Analytics",
    "desc" => "Prepares & Analyse business data & give insights. <span class='font-medium text-gray-800'>EaseMySpace</span>.",
    "linkedin" => ""
  ],
];
?>
<div class='grid lg:grid-cols-3 xs:grid-rows-3 gap-8 place-items-center py-10 px-5'>
  <?php foreach ($teamMembers as $member): ?>
    <div class="group w-full max-w-md bg-white shadow-2xl rounded-2xl p-8 flex flex-col items-center text-center space-y-6 transform lg:hover:scale-105 lg:hover:shadow-3xl transition duration-500 ease-in-out">
      <img src="<?= $member['img'] ?>" alt="<?= $member['name'] ?>" class="w-36 h-36 rounded-full object-cover shadow-xl border-4 border-white lg:group-hover:border-yellow-300 xs:border-yellow-300  transition-all duration-500 ease-in-out group-hover:shadow-xl" />
      
      <div>
        <p class="font-serif text-3xl font-extrabold text-gray-800"><?= $member['name'] ?></p>
        <p class="text-yellow-500 font-semibold text-lg tracking-wide"><?= $member['role'] ?></p>
        <p class="text-gray-600 mt-3 text-base leading-relaxed px-2"><?= $member['desc'] ?></p>
      </div>

      <a href="<?= $member['linkedin'] ?>" target="_blank"
         class="mt-2 inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-full hover:bg-blue-700 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-current" viewBox="0 0 24 24">
          <path d="M4.98 3.5C4.98 4.88 3.87 6 2.49 6S0 4.88 0 3.5 1.11 1 2.49 1 4.98 2.12 4.98 3.5zM0 8h5v16H0V8zm7.5 0h4.7v2.2h.07c.65-1.2 2.24-2.45 4.6-2.45 4.92 0 5.83 3.24 5.83 7.46V24h-5v-7.43c0-1.77-.03-4.04-2.46-4.04-2.47 0-2.85 1.93-2.85 3.91V24h-5V8z"/>
        </svg>
        Connect
      </a>
    </div>
  <?php endforeach; ?>
</div>

   
    </main>
  </section>

  <!-- Footer  -->

  <footer class=" border-t-4 border-yellow-200">
  <div class="max-w-7xl mx-auto px-6 py-8 grid gap-10 lg:grid-cols-4 grid-cols-2 grid-cols-1 text-center md:text-left">

    <!-- Logo and Description -->
    <div>
       <a class='lg:text-3xl text-xl font-bold text-shadow-lg lg:pl-0' href="">EaseMy<span class='text-yellow-400'>Space</span>.in
    </a>
      <p class="text-sm leading-relaxed pt-5">
        Making rental & flatmate search easier, safer and faster for everyone.
      </p>
    </div>

    <!-- Navigation Links -->
    <div>
      <h3 class="text-lg font-semibold mb-2 ">Quick Links</h3>
      <ul class="space-y-1 text-sm">
        <li><a href="#" class="hover:text-yellow-400 transition">Home</a></li>
        <li><a href="#" class="hover:text-yellow-400 transition">About Us</a></li>
        <li><a href="#" class="hover:text-yellow-400 transition">Find Flatmate</a></li>
        <li><a href="#" class="hover:text-yellow-400 transition">Contact</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div>
      <h3 class="text-lg font-semibold mb-2 ">Resources</h3>
      <ul class="space-y-1 text-sm">
        <li><a href="#" class="hover:text-yellow-400 transition">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-yellow-400 transition">Terms & Conditions</a></li>
        <li><a href="#" class="hover:text-yellow-400 transition">FAQs</a></li>
      </ul>
    </div>

    <!-- Social Icons -->
    <div>
      <h3 class="text-lg font-semibold mb-2 ">Connect</h3>
      <div class="flex justify-center md:justify-start space-x-4 mt-2">
        <a href="#" class="text-yellow-400 hover:text-yellow-500 transition"><i class="fab fa-facebook text-2xl"></i></a>
        <a href="#" class="text-yellow-400 hover:text-yellow-500 transition"><i class="fab fa-instagram text-2xl"></i></a>
        <a href="#" class="text-yellow-400 hover:text-yellow-500 transition"><i class="fab fa-linkedin text-2xl"></i></a>
        <a href="#" class="text-yellow-400 hover:text-yellow-500 transition"><i class="fab fa-twitter text-2xl"></i></a>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-yellow-200 text-sm text-center py-5 text-gray-500 bg-yellow-100">
    &copy; <?= date("Y") ?> EaseMySpace. All rights reserved.
  </div>
</footer>


  <script src="script.js"></script>
</body>
</html>
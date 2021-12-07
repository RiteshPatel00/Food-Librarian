<head>
  <!-- Links to Bootstrap's cs style sheet, js script and a link to our own external style sheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5982edd98c.js" crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet" />

  <!-- Meta tag for charset -->
  <meta charset="utf-8">




  <!-- Meta tags for IOS and Android devices so that the website scales and saving the website to a mobile's homescreen is done intelligently-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="application-name" content="FoodLibrarian">
  <meta name="mobile-web-app-capable" content="yes">

  <title>FoodLibrarian</title>
</head>

<body>

  <!--Navigation bar used from Bootstrap that has 4 links-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <!--Contains the branding of the website on the navigation bar-->
    <!-- Also adding in animation class to use to animate the specific HTML language -->
    <a class="navbar-brand animation" href="search.html">Food Librarian</a>
    <!--Navigation toggler allows the links on the nav bar to collapse, implemented as a button when the screen size reaches a certain dimension-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--Collapsing the navagation bar is implemented with unordered list tag and list item tags-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link animation" href="submission.html">Add Restaurant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animation" href="search.html">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animation" href="registration.html">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animation" href="sign_in.html">Sign In</a>
        </li>
      </ul>
    </div>
  </nav>
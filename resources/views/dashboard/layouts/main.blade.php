<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Admin Dashboard Template">
  <meta name="keywords" content="admin,dashboard">
  <meta name="author" content="stacks">
  <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Dashboard</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700,800&display=swap">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css"
    integrity="sha512-ygIxOy3hmN2fzGeNqys7ymuBgwSCet0LVfqQbWY10AszPMn2rB9JY0eoG0m1pySicu+nvORrBmhHVSt7+GI9VA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/themes/purple/pace-theme-minimal.css" integrity="sha512-NdBsobvtWyNqhj1ObpsoeEfrkAo02bvrEPJxsc8wm7EWPTjMs/LO15zgKxpmdyNCsC4H/aTAMI5Dre7ugPQm+A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.33.1/apexcharts.min.css"
    integrity="sha512-72LrFm5Wau6YFp7GGd7+qQJYkzRKj5UMQZ4aFuEo3WcRzO0xyAkVjK3NEw8wXjEsEG/skqvXKR5+VgOuzuqPtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.css" integrity="sha256-EpZ4gghpiHtNH8WufydxT5I9pJeFTRKKti78cuEjBwY=" crossorigin="anonymous">

  <!-- Theme Styles -->
  <link href="/css/dashboard.css" rel="stylesheet">

  <style>
    trix-toolbar [data-trix-button-group='file-tools'] {
      display: none;
    }
  </style>
</head>

<body class="page-sidebar-collapsed">
   <div class="page-container">
      <div class="page-sidebar">
         @include('dashboard.partials.sidebar')
      </div>
      <div class="page-content">
         <div class="page-header">
            @include('dashboard.partials.navbar')
         </div>
         <div class="main-wrapper">
            @yield('main-wrapper')
         </div>
      </div>
   </div>

  <!-- Javascript CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js"
    integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/pace.min.js"
    integrity="sha512-2cbsQGdowNDPcKuoBd2bCcsJky87Mv0LEtD/nunJUgk6MOYTgVMGihS/xCEghNf04DPhNiJ4DZw5BxDd1uyOdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.33.1/apexcharts.min.js"
    integrity="sha512-oyNqW6ArxqcGtg9kzTbOQqKC+q7+tS9Ab09S44+VbZiKY6xJtMNA6v13vJwoqiKLGJuQQwams0W5E19QnLfxWw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"
    integrity="sha512-3PRVLmoBYuBDbCEojg5qdmd9UhkPiyoczSFYjnLhFb2KAFsWWEMlAPt0olX1Nv7zGhDfhGEVkXsu51a55nlYmw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
    <script rel="stylesheet" href="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.min.js"></script>

  <script src="/js/dashboard.js"></script>
</body>

</html>
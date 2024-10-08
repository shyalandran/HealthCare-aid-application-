<?php
  include "lib/load.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
      <script src="assets/js/color-modes.js"></script>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.122.0">
      <title>Healthcare Aid</title>

      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">



      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

      <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
          width: 100%;
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

          .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
          }

          .bd-mode-toggle {
          z-index: 1500;
          }

          .bd-mode-toggle .dropdown-menu .active .bi {
          display: block !important;
          }
      </style>

  </head>

  <body>
    <?php loadTemplate("header") ?>

    <main>
      <div class="container  px-4 py-5">
        <div class="row align-items-center g-5 py-5">
            <!-- Text Section -->
            <div class="col-lg-6" style="margin-left: -70px;">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-4">Healthcare Aid at Your Fingertips</h1>
              <p class="lead mb-5">Our platform helps you understand diseases based on symptoms, estimate insurance premiums, and get healthcare insights tailored to you. Powered by machine learning models and the latest datasets, we aim to provide the best healthcare support possible.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Start Prediction</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Insurance Estimation</button>
              </div>
          </div>
          <!--img section-->
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/img/ai-in-healthcare-removebg.png" class="d-block mx-lg-5 img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
        </div>
        <!-- Features Section -->
        <div class="row g-4 py-2 row-cols-1 row-cols-lg-3" style="margin-left: -70px;">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
              </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Disease Prediction</h3>
              <p>Get reliable insights on potential diseases based on your symptoms.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
              </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Insurance Estimation</h3>
              <p>Estimate your insurance premiums based on your health profile.</p>
            </div>
          </div>

          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                <path d="M0 0h1v15H0V0zm5 7h1v8H5V7zm4-4h1v12H9V3zm4 2h1v10h-1V5z"/>
              </svg>
            </div>
            <div>
              <h3 class="fs-2 text-body-emphasis">Healthcare Insights</h3>
              <p>Get personalized healthcare insights powered by data analysis.</p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php loadTemplate("footer") ?>

  </body>
</html>

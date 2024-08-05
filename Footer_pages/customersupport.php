<?php
  include('C:\xampp\htdocs\GHAR_1\dbconnect\connect.php');
  include('feedback.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Support</title>
  <link rel="stylesheet" href="customersupport.css">
  <link rel="website icon" type="png" href="/GHAR_1/gharimg/ghar.png" />
</head>
<body>
  <div class="container">
    <section class="section-primary">
      <div class="content-center">
        <h1 class="title">Customer Support</h1>
        <p class="subtitle">
          Welcome to the GHAR customer support page. We're here to help you with all your construction needs in Nepal.
        </p>
      </div>
    </section>
    <section class="section">
      <div class="grid">
        <div>
          <h2 class="title">Contact Information</h2>
          <div class="info">
            <div>
              <h3 class="subheading">Phone</h3>
              <p>+977 9840668898</p>
            </div>
            <div>
              <h3 class="subheading">Email</h3>
              <p>support@ghar.com</p>
            </div>
            <div>
              <h3 class="subheading">Address</h3>
              <p>
                Balkot-3,<br>
                Bhaktapur,Nepal
              </p>
            </div>
          </div>
        </div>
        <div>
          <h2 class="title">Frequently Asked Questions</h2>
          <div class="collapsible">
            <div class="collapsible-item">
              <button class="collapsible-trigger">
                <h3 class="subheading">What services does GHAR provide?</h3>
                <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m6 9 6 6 6-6" />
                </svg>
              </button>
              <div class="collapsible-content">
                <p class="text-muted">
                  GHAR provides a range of services for the construction of houses in Nepal, including architectural design, engineering, labor management, and contractor coordination.
                </p>
              </div>
            </div>
            <div class="collapsible-item">
              <button class="collapsible-trigger">
                <h3 class="subheading">How do I get started with GHAR?</h3>
                <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m6 9 6 6 6-6" />
                </svg>
              </button>
              <div class="collapsible-content">
                <p class="text-muted">
                  To get started with GHAR, you can visit our website and fill out the contact form or give us a call. Our team will guide you through the process of setting up your account and getting started with our services.
                </p>
              </div>
            </div>
            <div class="collapsible-item">
              <button class="collapsible-trigger">
                <h3 class="subheading">What is the cost of GHAR's services?</h3>
                <svg class="icon-chevron" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m6 9 6 6 6-6" />
                </svg>
              </button>
              <div class="collapsible-content">
                <p class="text-muted">
                  The cost of GHAR's services varies depending on the specific needs of your construction project. Our team will provide a detailed quote based on the scope of work and the services required.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-muted">
      <div class="form-container">
        <h2 class="title">Submit Feedback or Inquiry</h2>
        <form class="form" method=post>
          <div>
            <label for="name" class="label">Name</label>
            <input id="name" type="text" class="input" placeholder="Enter your name" name="name">
          </div>
          <div>
            <label for="email" class="label">Email</label>
            <input id="email" type="email" class="input" placeholder="Enter your email">
          </div>
          <div>
            <label for="message" class="label">Message</label>
            <textarea id="message" class="textarea" placeholder="Enter your message" name="message"></textarea>
          </div>
          <button type="submit" class="button">Submit</button>
        </form>
      </div>
    </section>
    <section class="section">
      <div class="form-container">
        <h2 class="title">Additional Resources</h2>
        <div class="resources">
          <a href="#" class="resource-link">
            <div>Architecture</div>
            <svg class="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </a>
          <a href="#" class="resource-link">
            <div>Engineering</div>
            <svg class="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </a>
          <a href="#" class="resource-link">
            <div>Labor</div>
            <svg class="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </a>
          <a href="#" class="resource-link">
            <div>Contractors</div>
            <svg class="icon-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m12 5 7 7-7 7" />
            </svg>
          </a>
        </div>
      </div>
    </section>
  </div>
</body>
</html>

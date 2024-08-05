document.getElementById('customer-service-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    const dropdown = document.getElementById('customer-service-dropdown');
    dropdown.classList.toggle('visible');
  });
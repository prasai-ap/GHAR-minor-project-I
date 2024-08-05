document.getElementById('product-inventory-link').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    const dropdown = document.getElementById('product-inventory-dropdown');
    dropdown.classList.toggle('visible');
  });
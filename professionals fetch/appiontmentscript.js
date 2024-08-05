document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('appointment-modal');
    const appointmentButton = document.querySelector('.appointment-button');
    const closeButton = document.querySelector('.close');
    const confirmButton = document.getElementById('confirm-appointment');
  
    appointmentButton.addEventListener('click', () => {
        modal.style.display = 'flex';
    });
  
    closeButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });
  
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
  
    confirmButton.addEventListener('click', () => {
        const date = document.getElementById('appointment-date').value;
        const time = document.getElementById('appointment-time').value;
        if (date && time) {
            alert(`Appointment booked on ${date} from ${time}`);
            modal.style.display = 'none';
        } else {
            alert('Please select a date and time slot.');
        }
    });
  });
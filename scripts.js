// Highlights current date on contact page
window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})
function greet() {
    alert("Thank you for choosing us!");
  }
  const text = "WELLCOME TO THE ERAS"; 
  let index = 0;
  let direction = 1; 
  
  function type() {
    if (direction === 1) {
      document.getElementById('text').textContent = text.slice(0, index++);
    } else {
      document.getElementById('text').textContent = text.slice(0, index--);
    }
    
    if (index === text.length) {
      direction = -1; 
    } else if (index === 0) {
      direction = 1; 
    }
  }  
  setInterval(type, 150);

  document.getElementById('myForm').addEventListener('submit', function(e) {
    e.preventDefault(); // prevent form from refreshing the page
  
    const formData = new FormData(this);
  
    fetch('backend.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      alert('Server response: ' + data);
    })
    .catch(error => console.error('Error:', error));
  });
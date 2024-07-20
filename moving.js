document.addEventListener('DOMContentLoaded', function() {
    const dropbtn = document.querySelector('.dropbtn');
    const dropdownContent = document.querySelector('.dropdown-content');
    const bookNowBtn = document.querySelector('.book-now-btn');

    dropbtn.addEventListener('click', function() {
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('click', function() {
            this.classList.toggle('selected');
        });
    });

    bookNowBtn.addEventListener('click', function() {
        const selectedCards = document.querySelectorAll('.card.selected');
        const taskDetails = document.querySelector('.dropdown-content textarea').value.trim();

        if (selectedCards.length === 0 && taskDetails === "") {
            alert('Please select at least one service or provide a task description.');
            return;
        }

        const selectedServices = Array.from(selectedCards).map(card => card.querySelector('h3').textContent);

        const data = {
            selectedServices: selectedServices,
            taskDetails: taskDetails
        };

        console.log('Data submitted:', data);
        // Here you can add code to submit the data to your server or handle it as needed
        alert('Data submitted. Check console for details.');
    });
});

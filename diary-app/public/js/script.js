// Diary Management System JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Form submission handler
    const diaryForm = document.getElementById('diary-form');
    if (diaryForm) {
        diaryForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const date = document.getElementById('entry-date').value;
            const title = document.getElementById('entry-title').value;
            const content = document.getElementById('entry-content').value;
            
            // Basic validation
            if (!date || !title || !content) {
                alert('Please fill in all fields');
                return;
            }
            
            // In a real application, you would send this data to the server
            console.log('New diary entry:', { date, title, content });
            
            // Show success message
            alert('Entry saved successfully!');
            
            // Reset form
            diaryForm.reset();
        });
    }
    
    // Search functionality
    const searchInput = document.querySelector('input[type="text"]');
    const searchButton = document.querySelector('.btn-outline-secondary');
    
    if (searchInput && searchButton) {
        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.trim();
            if (searchTerm) {
                // In a real application, you would filter entries based on search term
                console.log('Searching for:', searchTerm);
                alert('Search functionality would show entries containing: ' + searchTerm);
            } else {
                alert('Please enter a search term');
            }
        });
    }
    
    // Entry click handler
    const entries = document.querySelectorAll('.list-group-item');
    entries.forEach(entry => {
        entry.addEventListener('click', function(e) {
            e.preventDefault();
            const title = this.querySelector('h6').textContent;
            // In a real application, you would show the full entry
            console.log('Viewing entry:', title);
            alert('Would show full entry: ' + title);
        });
    });
});
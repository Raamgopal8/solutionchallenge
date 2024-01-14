document.addEventListener('DOMContentLoaded', function() {
    // Replace 'https://api.example.com/current' with your actual API endpoint
    const apiUrl = 'https://api.example.com/current';

    // Fetch current value from the API
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Assuming the API returns data in the format { current: value }
            const currentValue = data.current || 'N/A';
            document.getElementById('currentValue').innerText = `Current: ${currentValue} A`;
        })
        .catch(error => {
            console.error('Error fetching data:', error);
            document.getElementById('currentValue').innerText = 'Error fetching data';
        });
});

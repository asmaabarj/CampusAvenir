document.addEventListener('DOMContentLoaded', function() {
    const favoriForms = document.querySelectorAll('form[id^="favoriForm"]');

    favoriForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formId = form.id;
            const universityId = formId.replace('favoriForm', '');
            const formData = new FormData(form);
            const favoriButton = document.getElementById(`favoriButton${universityId}`);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const isFavorited = data.favori === '1';
                        favoriButton.querySelector('path').setAttribute('class',
                            isFavorited ? 'fill-red-500' : 'fill-gray-500');
                        form.querySelector('input[name="favori"]').value = isFavorited ?
                            '0' : '1';
                    } else {
                        console.error('Failed to update favorite status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
});

document.getElementById('favButton').addEventListener('click', function() {
    const checkbox = document.getElementById('favCheckbox');
    const icon = document.getElementById('favIcon');
    checkbox.checked = !checkbox.checked;
    if (checkbox.checked) {
        icon.setAttribute('class', 'fill-[#ed1b24]'); 
    } else {
        icon.setAttribute('class', 'fill-[#cccccc]'); 
    }
});
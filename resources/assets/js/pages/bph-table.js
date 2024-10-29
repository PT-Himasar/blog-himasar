// Auto-hide success alert after 3 seconds
setTimeout(function() {
    fadeOutAndRemove("successAlert");
}, 3000);

// Auto-hide hapus alert after 3 seconds
setTimeout(function() {
    fadeOutAndRemove("hapusAlert");
}, 3000);

setTimeout(function() {
    fadeOutAndRemove("errorAlert");
}, 3000);

function fadeOutAndRemove(elementId) {
    var element = document.getElementById(elementId);
    if (element) {
        // Pastikan elemen ditemukan
        var opacity = 1;
        var interval = setInterval(function() {
            if (opacity <= 0) {
                clearInterval(interval);
                element.style.display = "none";
            } else {
                element.style.opacity = opacity;
                opacity -= 0.1; // Sesuaikan kecepatan fading sesuai kebutuhan
            }
        }, 200); // Sesuaikan interval sesuai kebutuhan
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const saveButton = document.getElementById('saveButton');

    // Function to check if all required fields are filled in add form
    function checkAddFormValidity() {
        const addForm = document.getElementById('addAnggotaForm');
        const isFormValid = addForm.checkValidity();
        saveButton.disabled = !isFormValid;
    }

    // Function to check if all required fields are filled in edit form
    function checkEditFormValidity(editFormId, editButtonId) {
        const editForm = document.getElementById(editFormId);
        const editButton = document.getElementById(editButtonId);
        const isFormValid = editForm.checkValidity();
        editButton.disabled = !isFormValid;
    }

    // Add event listeners to input fields in add form
    const addForm = document.getElementById('addAnggotaForm');
    if (addForm) {
        addForm.addEventListener('input', checkAddFormValidity);
        addForm.addEventListener('change', checkAddFormValidity);
        checkAddFormValidity(); // Initial check on page load for add form
    }

    // Loop through each edit form and add event listeners dynamically
    document.querySelectorAll('[id^=editAnggotaForm-]').forEach(form => {
        const formId = form.id;
        const buttonId = `editButton-${formId.split('-')[1]}`;
        form.addEventListener('input', function() {
            checkEditFormValidity(formId, buttonId);
        });
        form.addEventListener('change', function() {
            checkEditFormValidity(formId, buttonId);
        });
        checkEditFormValidity(formId, buttonId); // Initial check on page load for edit form
    });
});

function handleImageUpload(event) {
    const file = event.target.files[0];
    if (file) {
        console.log('Image file selected:', file.name);
        const row = event.target.closest('tr');
        const imgElement = row.querySelector('img');
        const fileURL = URL.createObjectURL(file);
        imgElement.src = fileURL;
    }
}

function showEditForm(editButton) {
    const row = editButton.closest('tr');
    const editForm = row.querySelector('.edit-form');
    if (editForm.style.display === 'none' || editForm.style.display === '') {
        editForm.style.display = 'table-cell';
    } else {
        editForm.style.display = 'none';
    }
}

function updateData(event, form) {
    event.preventDefault();
    const newQuantity = form.querySelector('[name="quantity"]').value;
    const newDescription = form.querySelector('[name="description"]').value;
    const newName = form.querySelector('[name="newName"]').value;

    const row = form.closest('tr');

    const stockLevelCell = row.querySelector('.stock-level');
    stockLevelCell.textContent = newQuantity;

    const nameCell = row.querySelector('td:nth-child(2)');
    nameCell.textContent = newName;

    const descriptionCell = row.querySelector('.description');
    descriptionCell.textContent = newDescription;

    const editForm = row.querySelector('.edit-form');
    editForm.style.display = 'none';
}




document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('imageInput2');
    const imagePreview = document.getElementById('imagePreview2');
    const imageCount = document.getElementById('imageCount');
    const imagePreviewdiv2 = document.getElementById('imagePreviewdiv2');

    let currentPreview = null; // Track the currently displayed image

    function previewImage(file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const previewDiv = document.createElement('div');
            previewDiv.classList.add('preview-image2');
            const image = new Image();
            image.src = e.target.result;
            image.classList.add('preview-img2');
            const deleteButton = document.createElement('span');
            deleteButton.classList.add('delete-button');
            deleteButton.innerHTML = '<i class="fa-solid fa-xmark close-xmark-for-img"></i>';
            deleteButton.addEventListener('click', function () {
                // Remove the current image preview
                if (currentPreview) {
                    currentPreview.remove();
                }
                currentPreview = null;
                imageInput.value = ''; // Clear the input field
                updateImageCount();
            });
            previewDiv.appendChild(image);
            previewDiv.appendChild(deleteButton);
            if (currentPreview) {
                // Replace the current image preview
                currentPreview.replaceWith(previewDiv);
            } else {
                // Add the new image preview
                imagePreview.appendChild(previewDiv);
            }
            currentPreview = previewDiv;
            updateImageCount();
        };
        reader.readAsDataURL(file);
    }

    function updateImageCount() {
        const count = currentPreview ? 1 : 0;
        if (count === 0) {
            imagePreviewdiv2.style.display = 'none';
        } else {
            imagePreviewdiv2.style.display = 'block';
        }
        // imageCount.textContent = `Total Images: ${count}`;
    }

    imageInput.addEventListener('change', function () {
        const files = imageInput.files;
        if (files.length > 0) {
            // Display only the newly selected image
            previewImage(files[0]);
        } else {
            imagePreviewdiv2.style.display = 'none';
        }
    });
});
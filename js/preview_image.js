document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');
    const imageCount = document.getElementById('imageCount');
    const imagePreviewdiv = document.getElementById('imagePreviewdiv');

    function previewImage(file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            if (document.querySelectorAll('.preview-image:not([data-removing])').length < 10) {
                const previewDiv = document.createElement('div');
                previewDiv.classList.add('preview-image');
                const image = new Image();
                image.src = e.target.result;
                image.classList.add('preview-img');
                const deleteButton = document.createElement('span');
                deleteButton.classList.add('delete-button');
                deleteButton.innerHTML = '<i class="fa-solid fa-xmark close-xmark-for-img"></i>';
                deleteButton.addEventListener('click', function () {
                    // Add data-removing attribute to track the removal state
                    previewDiv.setAttribute('data-removing', 'true');
                    // Use a timeout to trigger the removal animation
                    setTimeout(function () {
                        previewDiv.remove();
                        updateImageCount();
                    }, 300); // Animation duration (0.3s)
                });
                previewDiv.appendChild(image);
                previewDiv.appendChild(deleteButton);
                imagePreview.appendChild(previewDiv);
                updateImageCount();
            }
        };
        reader.readAsDataURL(file);
    }

    function updateImageCount() {
        const count = document.querySelectorAll('.preview-image:not([data-removing])').length;
        if (count === 0) {
            imagePreviewdiv.style.display = 'none';
        } else {
            imagePreviewdiv.style.display = 'block';
        }
        // imageCount.textContent = `Total Images: ${count}`;
    }

    imageInput.addEventListener('change', function () {
        const files = imageInput.files;
        if (files.length > 0) {
            imagePreviewdiv.style.display = 'block';
            for (let i = 0; i < files.length; i++) {
                previewImage(files[i]);
            }
        } else {
            imagePreviewdiv.style.display = 'none';
        }
    });
});
function showImages(category) {
    // Hide all images
    var allImageSections = document.querySelectorAll('.top-images');
    allImageSections.forEach(function(imageSection) {
        imageSection.style.display = 'none';
    });

    // Show images for the selected category
    var imagesToShow = document.querySelector('.' + category + '-products');
    imagesToShow.style.display = 'flex'; // Ensure the container is displayed as flex

    // Center images horizontally
    centerImages(imagesToShow);
}

// Function to center images horizontally
function centerImages(container) {
    var containerHeight = container.offsetHeight;
    var images = container.querySelectorAll('.image');
    images.forEach(function(image) {
        var imageHeight = image.offsetHeight;
        var marginTop = (containerHeight - imageHeight) / 2;
        image.style.marginTop = marginTop + 'px';
    });
}

let currentIndex = 0;
let imageFilenames = [];
let currentFolder = "cot";

function loadGallery(folder) {
  currentFolder = folder;

  // Hardcoded for example — you should generate this dynamically in production
  if (folder === "cot") {
    imageFilenames = [
      "cot1.jpg", "cot2.jpg", "cot3.jpg", "cot4.jpg", "cot5.jpg"
      // Add more cot images here...
    ];
  } else if (folder === "ladder") {
    imageFilenames = [
      "ladder1.jpg", "ladder2.jpg", "ladder3.jpg"
      // Add more ladder images here...
    ];
  } else if (folder === "alamari") {
    imageFilenames = [
      "alamari1.jpg", "alamari2.jpg", "alamari3.jpg"
      // Add more alamari images here...
    ];
  }

  currentIndex = 0;
  updateImage();
}

function updateImage() {
  const imgElement = document.getElementById("galleryImage");
  const caption = document.getElementById("caption");

  if (imageFilenames.length === 0) {
    imgElement.src = "";
    caption.textContent = "No images found!";
    return;
  }

  const imagePath = `images/${currentFolder}/${imageFilenames[currentIndex]}`;
  imgElement.src = imagePath;
  caption.textContent = `${currentFolder.toUpperCase()} - Image ${currentIndex + 1} of ${imageFilenames.length}`;
}

function showNext() {
  currentIndex = (currentIndex + 1) % imageFilenames.length;
  updateImage();
}

function showPrev() {
  currentIndex = (currentIndex - 1 + imageFilenames.length) % imageFilenames.length;
  updateImage();
}

// Load default
window.onload = () => loadGallery("cot");

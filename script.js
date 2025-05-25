function loadImages(category) {
  const gallery = document.getElementById("gallery");
  gallery.innerHTML = "";

  if (category === 'cot') {
    imageFilenames.forEach(filename => {
      const img = document.createElement("img");
      img.src = `images/cot/${filename}`; // corrected path
      img.alt = filename;
      img.classList.add("gallery-image");
      gallery.appendChild(img);
    });
  }
}

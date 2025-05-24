<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>National Welding Works</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    header {
      background-color: #333;
      color: white;
      padding: 20px 10px;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 28px;
    }
    .buttons {
      text-align: center;
      padding: 20px;
    }
    .buttons button {
      margin: 5px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #444;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .buttons button:hover {
      background-color: #555;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      padding: 20px;
    }
    .gallery img {
      width: 300px;
      max-width: 90vw;
      height: auto;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: transform 0.2s;
    }
    .gallery img:hover {
      transform: scale(1.05);
    }
    footer {
      background-color: #333;
      color: white;
      padding: 20px 10px;
      text-align: center;
    }
    footer a {
      color: #ffd700;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <h1>National Welding Works</h1>
  </header>

  <div class="buttons">
    <button onclick="loadImages('almari')">Almari</button>
    <button onclick="loadImages('cot')">Cot</button>
    <button onclick="loadImages('chair')">Chair</button>
    <button onclick="loadImages('table')">Table</button>
    <button onclick="loadImages('ladder')">Ladder</button>
    <button onclick="loadImages('rack')">Rack</button>
    <button onclick="loadImages('dressing')">Dressing Set</button>
    <button onclick="loadImages('sofa')">Sofa</button>
  </div>

  <div id="gallery" class="gallery"></div>

  <footer>
    <p>📞 Contact: 9343503350, 7022846485</p>
    <p>📧 Email: <a href="mailto:azamp442@gmail.com">azamp442@gmail.com</a></p>
    <p>📍 <a href="https://maps.app.goo.gl/dTFHY5L37inTHn3v5" target="_blank">National Welding Works, Abbul Kalam Azad, Azad Circle, Hussan Road, Koppal, Karnataka 583231</a></p>
    <p>&copy; 2025 National Welding Works</p>
  </footer>

  <script>
    function loadImages(folder) {
      fetch(`get_images.php?folder=${folder}`)
        .then(response => response.json())
        .then(data => {
          const gallery = document.getElementById('gallery');
          gallery.innerHTML = '';
          data.forEach(img => {
            const image = document.createElement('img');
            image.src = `${folder}/${img}`;
            image.alt = img;
            image.loading = 'lazy';
            image.onclick = () => window.open(`${folder}/${img}`, '_blank');
            gallery.appendChild(image);
          });
        });
    }
  </script>
</body>
</html>

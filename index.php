<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPLOAD FILE USING AJAX</title>
  <link rel="stylesheet" href="upload.css">
</head>

<body>
  <main>
    <div id="data"></div>

    <h3>UPLOAD FILE</h3>
    <div class="choose-file">
      <label for="file" id="label">CHOOSE FILE</label>
      <input type="file" id="file">
    </div>

    <div class="container">
      <button id="upload">Upload</button>
      <div class="progress-fill" id="progress-bar"></div>
    </div>

    <output id="log"></output>
  </main>
  <script src="upload.js"></script>
</body>

</html>
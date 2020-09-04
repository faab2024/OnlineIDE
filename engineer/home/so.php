<head>
  <link rel="import" href="https://github.com/abfa123">
 
  <!-- avoid including script -->
</head>
<body>
  <!-- avoid including script -->

  <div id="container"></div>

  <!-- avoid including script -->
  ...

  <script>
    // Other scripts n' stuff.

    // Bring in the import content.
    var link = document.querySelector('link[rel="import"]');
    var post = link.import.querySelector('#blog-post');

    var container = document.querySelector('#container');
    container.appendChild(post.cloneNode(true));
  </script>
</body>
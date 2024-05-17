<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get | Published</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./assets/images/logo.jpg" />
    <link rel="stylesheet" href="./styles/published.css">
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/header.css" />
</head>
<body>
  <style>
    body{
      background:white;
      background-image: url(./assets/images/logo.png);
      background-repeat: no-repeat;
      background-position: center;
      padding:100px;
      opacity: 10.5;
      width:100%;
    }
  </style>
  <form method="post" class="mx-auto ">
  <section class="flex justify-center items-center newsletter py-10 mb-50">
      <div class="box">
        <h2 class="text-center text-blue text-3xl">
          Publish Your Article
        </h2>
        <p>
          fill the space provided for to let us know whom is trying to publish it's articles
        </p>
        <div class="form-control">
          <input type="text" class="mb-4 input" placeholder="Enter First Name" required />
          <input type="text" class="input my-4" placeholder="Enter e-mail address" required />
          <input type="file" class="input mb-12" placeholder="pdf/documents">
          <button name="submit" class="btn my-20 mb-10">Publish</button>
        </div>
      </div>
    </section>
  </form>
</body>
</html>
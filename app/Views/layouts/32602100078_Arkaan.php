<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Layouting</title>
    <style>
@import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
}

.banner,
.navbar {
    padding: 40px 70px;
    background-color: #0406a6;
    text-align: center;
}

.navbar-icon {
    flex-grow: 1;
}

.navbar-page {
    flex-grow: 2;
}

.navbar-sosmed {
    flex-grow: 1;
}

.navbar-page li,
.navbar-sosmed li {
    display: inline;
}

.navbar-page ul {
    justify-content: center;
    text-align: center;
    display: flex;
}

.navbar-page li {
    margin: 0px 20px;
}

.navbar-page a {
    text-decoration: none;
    color: black;
}

.fa-brans {
    margin-right: 5px;
}

.banner {
    line-height: 350%;
    background-color: #fffdfd;
    width: 100%;
}

.name {
    letter-spacing: 3px;
    font-size: 50px;
    font-weight: 1000;
}

.description {
    opacity: 0.5;
    font-size: 15px;
    line-height: 250px;
}

.about {
  background-color: #3f8bba;
    color: #1d0d79;
    padding: 70px;
}
@media (min-width: 120px) {
  /* Styles for larger screens */
  .about {
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
  }

  .about-us,
  .about-experience {
    flex: 1;
    margin: 0 10px;
  }

  .about-us p {
    font-size: 18px;
  }

  .about-experience-list td {
    font-size: 16px;
  }
}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Portfolio</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: black;">
              <li><a href="#">LinkedInd</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Whatsapp</a></li>
            </ul>
          </li>
        </ul>
      </div>
    <div class="banner">
        <span class="name">
            Muhammad Hibatullah Arkaan
        </span><br>
        <span class="description">
            Mahasiswa Fakultas Teknologi Industri Jurusan Teknik Informatika
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>
</html>
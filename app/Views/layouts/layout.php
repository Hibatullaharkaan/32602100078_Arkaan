<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
</head>
<body>
    <header>
        <!-- isi header disini -->
        <h1>Header</h1>
    </header>
    <nav>
        <!-- isi navigasi disini -->
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Aboute</a></li>
            <li><a href="#">Skills</a></li>
        </ul>
    </nav>
    <main>
        <!-- render konten main disini -->
        <?= $this -> renderSection ('content') ?>
    </main>
    <footer>
        <!-- isi footer disini  -->
        <p>Footer</p>
    </footer>
</body>
</html>
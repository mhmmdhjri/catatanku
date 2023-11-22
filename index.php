<?php
include "config.php";

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM `tb_note` WHERE `title_note` LIKE '%$searchTerm%' OR `note_note` LIKE '%$searchTerm%'";
$sql = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catatanku</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="favicon.png" height="70px" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("note-search").addEventListener("input", function () {
            var searchTerm = this.value.toLowerCase();
            var notes = document.querySelectorAll(".card");

            notes.forEach(function (note) {
                var title = note.querySelector(".card-title").innerText.toLowerCase();
                var content = note.querySelector(".card-text").innerText.toLowerCase();

                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    note.style.display = "block";
                } else {
                    note.style.display = "none";
                }
            });
        });
    });
</script>

</head>

<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo2.png" alt="Logo" width="300" height="80"
                        class="d-inline-block align-text-top">

                </a>
                <div class="search-bar mt-5 border-dark-5" >
    <form  action="" method="get">
        <input class=" border border-dark border-2 rounded shadow-lg p-2 mb-5"  type="text" id="note-search" name="search" placeholder="cari catatan mu 😁">
        <button type="submit" class="btn btn-success border border-dark border-2 p-2">Search</button>
    </form>
</div>

            </div>
        </nav>
        <div class="card shadow bg-body-tertiary rounded mb-4">
            <div class="card-body">
                <form action="insert.php" method="post" class="d-flex">
                    <input class="form-control me-2 rounded shadow p-3 " name="title_note" placeholder="Your Title...">
                    <input class="form-control me-2 rounded shadow p-3 " name="note_note" placeholder="Your Catatan...">
                    <button class="btn btn-primary  border border-dark border-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-folder-plus" viewBox="0 0 16 16">
                            <path
                                d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2Zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z" />
                            <path
                                d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                    </button>
                </form>


            </div>
        </div>
        <div class="card ">
        <?php  while($result=mysqli_fetch_assoc($sql)){
             
                        
             ?>
  <div class="card-header border border-dark border-1 ">
  <?php  echo $result[ 'id_note']; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title "><?php  echo $result[ 'title_note']; ?></h5>
    <p class="card-text"><?php  echo $result[ 'note_note']; ?></p>
    <a href="update.php?edit=<?php  echo $result[ 'id_note']; ?>" class="btn btn-success mt  border border-dark border-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                            <a href="delete.php?delete=<?php  echo $result[ 'id_note']; ?>" class="btn btn-danger mt  border border-dark border-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg></a>
  </div>
  <?php    } ?>
</div>
    

   <!-- footer section -->
<footer class="footer" >
    <div class="footer-text">
        <h3>Copyright &copy;2023 by @mhmmdhjri__ | ALL Right Reserved</h3>
    </div>
    <div class="footer-icontop">
        <a href="https://www.instagram.com/mhmmdhjri__/"><i class='bx bxl-instagram'></i></a>
       
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
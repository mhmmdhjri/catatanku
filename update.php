<?php 
include"config.php";
$id=$_GET['edit'];
$query="SELECT * FROM `tb_note` WHERE id_note='$id' ";
$sql=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($sql);

// var_dump($result);
// die();





?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="favicon.png" height="70px" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo2.png" alt="Logo" width="300" height="80"
                        class="d-inline-block align-text-top">

                </a>
            </div>
        </nav>
        <div class="card shadow bg-body-tertiary rounded mb-4">
            <div class="card-body">
                <form action="updateupdate.php" method="post" class="d-flex">
                    <input class="form-control me-2" value="<?php echo $result['title_note'] ?>" name="title_note" placeholder="edit title...">
                    <input class="form-control me-2" value="<?php echo $result['note_note'] ?>" name="note_note" placeholder="edit catatan...">
                    <input type="hidden" name="id" value="<?php echo $result['id_note'] ?>">
                    <button class="btn btn-primary" type="submit">
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
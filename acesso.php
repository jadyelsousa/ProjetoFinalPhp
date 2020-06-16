<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php 
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'exemplo.html';
                </script>";

        }
        $logado = $_SESSION['login'];
        ?>
    </head>
    <body>
        <div>Somente usuário logado</div><br>
        <a href="logout.php"><button>Logout</button></a></h3>
    </body>
</html>

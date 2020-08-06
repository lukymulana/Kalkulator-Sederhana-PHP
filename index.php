<html>
    <head>
        <title>Tugas 6 - Kalkulator</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <style>
            .container {
                width: 500px;
                margin-top: 20px;
                border: 3px solid black;
                border-radius: 10px;
            }
            .hasil {
                width: 500px;
                margin: 20px 433px;
                padding: 10px 40px 20px;
                border: 3px solid black;
                border-radius: 10px;
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
            }
            .button-position {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h1>Kalkulator</h1>
        
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label>Bilangan 1</label>
                    <input type="text" name="bil1" class="form-control" placeholder="Masukan bilangan pertama" required>
                </div>
                <div class="form-group">
                    <label>Bilangan 2</label>
                    <input type="text" name="bil2" class="form-control" placeholder="Masukan bilangan kedua">
                </div>
                <div class="button-position">
                    <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
                    <a class="btn btn-secondary" href="kalkulator.php">Reset</a>
                </div>
                
            </form>
    </div>
                <?php
                    if (isset($_POST['submit'])){
                        $bil1 = $_POST['bil1']; 
                        $bil2 = $_POST['bil2'];

                        $tambah = $bil1 + $bil2; 
                        $kurang = $bil1 - $bil2; 
                        $kali = $bil1 * $bil2; 
                        $bagi = $bil1 / $bil2;

                        echo '
                        <div class="hasil">
                            <h1>Hasil</h1>
                            <table align="center">
                                <tr>
                                    <td>'.$bil1.'</td>
                                    <td> + </td>
                                    <td>'.$bil2.'</td>
                                    <td> = </td>
                                    <td>'.$tambah.'</td>
                                </tr>
                                <tr>
                                    <td>'.$bil1.'</td>
                                    <td> - </td>
                                    <td>'.$bil2.'</td>
                                    <td> = </td>
                                    <td>'.$kurang.'</td>
                                </tr>
                                <tr>
                                    <td>'.$bil1.'</td>
                                    <td> * </td>
                                    <td>'.$bil2.'</td>
                                    <td> = </td>
                                    <td>'.$kali.'</td>
                                </tr>
                                <tr>
                                    <td>'.$bil1.'</td>
                                    <td> / </td>
                                    <td>'.$bil2.'</td>
                                    <td> = </td>
                                    <td>'.$bagi.'</td>
                                </tr>
                            </table>
                        </div>';
                    }
                ?>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="gaya.css">
    <link rel="icon" href="beluga-modified.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Dasar</title>
</head>
<body>
    <?php
    class bebas{
        public $nama;
        public $jenis;
        public $umur;

        public function setnama($nama){
            $this->nama=$nama;
        }
        public function setjenis($jenis){
            $this->jenis=$jenis;
        }
        public function setbebas($nama, $jenis){
            $this->nama=$nama;
            $this->jenis=$jenis;
        }
        public function getCetak(){
            echo "nama hewan: $this->nama";
            echo "<br>";
            echo "Jenis hewan: $this->jenis";
            echo "<br>==========================</br>";
        }
    }
    $jerapah = new bebas();
    $jerapah->setnama("Jerapah Afrika");
    $jerapah->setjenis("Herbivora");
    $jerapah->getCetak();

    $harimau = new bebas();
    $harimau->setnama("Harimau Jawa");
    $harimau->setjenis("Karnivora");
    $harimau->getCetak();

    $k = new bebas ();
    $k->setnama("Kucing Anggora");
    $k->setjenis("Omnivora");
    $k->getCetak();
    
    $u = new bebas ();
    $u->setbebas("Ular","Karnivora");
    $u->getCetak();

    #Belajar OOP
?>
</body>
</html>
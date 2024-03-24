<?php
		class Hewan {
			  protected $nama;
              protected $warna;
              protected $umur;

              
              protected function __construct($nama, $warna, $umur){
                $this->nama = $nama;
                $this->warna = $warna;
                $this->umur = $umur;
            }
		
            protected function getInfo(){
                echo "Nama Hewan : " . $this->nama . "<br>";
                echo "Warna Hewan : " . $this->warna . "<br>";
                echo "Umur hewan : " . $this->umur . "<br>";
              }
		}
		
        class Kucing extends hewan{
            public $daging;
    
            public function __construct($nama, $warna, $umur, $daging){
                parent::__construct($nama, $warna, $umur, $daging);
                $this->daging = $daging;
            }
    
            public function getInfoKucing(){
                parent::getInfo();
                echo "Pemakan : " . $this->daging . "<br>";
            } 
		}


        class Domba extends hewan{
            public $tumbuhan;
    
            public function __construct($nama, $warna, $umur, $tumbuhan){
                parent::__construct($nama, $warna, $umur, $tumbuhan);
                $this->tumbuhan = $tumbuhan;
            }

            public function getInfoDomba(){
                parent::getInfo();
                echo "Pemakan : " . $this->tumbuhan . "<br>";
            }
        }
?>
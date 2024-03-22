<?php

class MediaSosial {
    protected $nama;
    protected $pengguna;

    protected function __construct($nama, $pengguna) {
        $this->nama = $nama;
        $this->pengguna = $pengguna;
    }

    protected function getInfo() {
        echo 'Nama Media Sosial: ' . $this->nama . '<br>';
        echo 'Pengguna: ' . $this->pengguna . '<br>';
    }
}

class Facebook extends MediaSosial {
    public $teman;

    public function __construct($nama, $pengguna, $teman) {
        parent::__construct($nama, $pengguna);
        $this->teman = $teman;
    }

    public function getInfoFacebook() {
        parent::getInfo();
        echo "Jumlah Teman: " . $this->teman . "<br>";
    }
}

class Instagram extends MediaSosial {
    public $followers;

    public function __construct($nama, $pengguna, $followers) {
        parent::__construct($nama, $pengguna);
        $this->followers = $followers;
    }

    public function getInfoInstagram() {
        parent::getInfo();
        echo 'Jumlah Followers: ' . $this->followers . '<br>';
    }
}

class Twitter extends MediaSosial {
    public $tweet;

    public function __construct($nama, $pengguna, $tweet) {
        parent::__construct($nama, $pengguna);
        $this->tweet = $tweet;
    }

    public function getInfoTwitter() {
        parent::getInfo();
        echo 'Jumlah Tweet: ' . $this->tweet . '<br>';
    }
}

?>


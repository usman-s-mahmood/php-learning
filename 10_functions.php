
<?php
    class test
    {
        public $test_var;
        protected $prt_var;
        public function __construct() {
            $this->test_var = null;
            $this->prt_var = null;
            echo "constructor invoked!<br>";
        }

    };
    
    function hbd($first_name, $age=10)
    {
        echo "Happy Birthday {$first_name}!<br>";
    }
    hbd("spongebob");
?>
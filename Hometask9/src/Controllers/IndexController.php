<?php
namespace Cakes\Controllers;

// /

use Cakes\Kernel\Controller;
use Cakes\Db\CakeDb;
class IndexController extends Controller
{
    private $mountainsDb;
    private $expeditionsDb;

  public function __construct(){
    $this->cakesDB = new CakeDb();

  }

    public function index(){


        echo $this->getTemplate('main.php');
    }
}

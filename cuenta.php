<?php
class cuenta
{
    private $cbu;
    private $balance;
    private $fechaUltimoMovimiento;

      public function __construct($cbu)
      {
          $this->setcbu;
      }

    public function setcbu($cbu){
      $this->cbu =$cbu;
    }
    public function getcbu($cbu){
      $this->cbu =$cbu;
    }
    public function setbalance($balance){

      $this->balance =$balance;
    }
    public function getbalance($balance){

      $this->balance =$balance;
    }
    public function setfechaUltimoMovimiento(){

    }
    abstract public function debitar($monto,$origen);

    public function acreditar($monto)
    {
      $this->actualizarUltimosMovimientos();
      $this->balance = $this->balance + $monto;
    }

    protected function actualizarUltimosMovimientos()
    {
        $this->$fechaUltimoMovimiento = new DateTime;
    }

}

class Platinum extends cuenta
{
  public function debitar($monto,$origen)
  {
    $this->actualizarUltimosMovimientos();
    $this->balance = $this->balance - $monto;
  }


}

class Classic extends cuenta
{
  public function debitar($monto,$origen)
  {
    if ($origen =='banelco' ){
      $extra = ($monto*5)/100;
      $monto = $monto + $extra;
    }
    if ($origen =='link' ){
      $extra = ($monto*10)/100;
      $monto = $monto + $extra;
    }
    $this->balance = $this->b$balance + $monto;
  }
}


 ?>

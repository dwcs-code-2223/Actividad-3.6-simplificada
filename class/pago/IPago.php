<?php
namespace pago;
interface IPago {

    public function pagar(float $importe): bool;
}

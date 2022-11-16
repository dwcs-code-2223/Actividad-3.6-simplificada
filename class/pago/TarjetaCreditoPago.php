<?php

namespace pago;

/**
 * Description of TarjetaCreditoPago
 *
 * @author maria
 */
class TarjetaCreditoPago implements IPago {

    use \log\Logger;
    use \classInfo\ClassTraitInfo;

    private $nombre;
    private $num;
    private $cvv;
    private $fecha_expiracion;

    public function __construct(string $nombre, string $num, int $cvv, \DateTime $fecha_expiracion) {
        $this->nombre = $nombre;
        $this->num = $num;
        $this->cvv = $cvv;
        $this->fecha_expiracion = $fecha_expiracion;
    }

    public function pagar(float $importe): bool {
        $this->log("Pagando $importe con Tarjeta de crédito:<br/> " . $this);
        return true;
    }

    public function __toString() {
        return "Nombre: $this->nombre <br/>" .
                "Nº: $this->num <br/>" .
                "CVV: $this->cvv <br/>" .
                "Fecha:" . $this->fecha_expiracion->format('d/m/Y') . " <br/>";
    }

}

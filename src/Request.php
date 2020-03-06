<?php


namespace Rentit;


class Request
{
private $controller;
private $action;
private $method;
private $parrams;


protected $arrURI; //el array de la uri
function __construct()
{
    //construir la consulta, el objeto
    $requestString=htmlentities($_SERVER['REQUEST_URI']); //htmlentities para dar seguridad al sistema
    $this->arrURI=explode('/',$requestString); //delimitador esta separando el string en trosos adic a http://app/nfnnf   /nfnnf es request uri
    //EL ARRAY_SHIFT CORRE UNA POSICIÓN, ASÍ ELIMINAMOS EL PRIMER "" DEL ARRAY;
    array_shift($this->arrURI);
   $this->extractURI(); //setear todos los elementos que vamos a pasar action method y params

}

private function extractURI(){
    //todos los setters y getters aqui dentro
    $lenght=count($this->arrURI);
    switch ($lenght){
        case 1:
            //EL FICHERO POR DEFECTO SI NO SE HA INDICADO NADA
            if($this->arrURI[0]==""){
                $this->setController('sede');
            }else{
                $this->setController($this->arrURI[0]);
            }
            $this->setAction('index'); //action por defecto el index
            break;
        case 2:
            $this->setController($this->arrURI[0]); //sies la posicion 0 es el controlador si es pos 1 es la action
           //comprobacion si esta escrito en la posicion 1 o no
        if($this->arrURI[1]==""){
            $this->setAction('index');
        }else {
            $this->setAction($this->arrURI[1]);
        }
            break;

        default: //por defecto
            //>2
            $this->setController($this->arrURI[0]);
            $this->setAction($this->arrURI[1]);
            //llenar los parametros
        $this->Params();
            //  $this->setParrams();

        break;

    }
    $this->setMethod(htmlentities($_SERVER['REQUEST_METHOD']));
}

private function Params(){
    //la llamamos de otro sitio //nul si no son
    if($this->arrURI!=null){ //daca sunt
        $arr_lenght=count($this->arrURI); //contador , un objeto contable
        if($arr_lenght>2){ //primeros controlador si action me sobra "[cont","action"]->no lo coje
            array_shift($this->arrURI);//array por izquierda y lo hacemos 2 veces de arriba, cont si action
            array_shift($this->arrURI);
            $arr_lenght=count($this->arrURI);
            //la longitud cambia
            if($arr_lenght%2==0){ //si es par se puede extraer el array asociativo y este array no es par!
                //recorer pares y impares los array asociativos
                for($i=0;$i<$arr_lenght;$i++){ //recore el parametro y el valor
                    if($i%2==0){ //si es par se va acumulando con diferentes indices, agregarse al array del elemendo que estamos sacando del array
                       $arr_k[]=$this->arrURI[$i]; //posicion 0 es la k la clave
                    }else{
                        $arr_v[]=$this->arrURI[$i];//sacamos el valor,si es la pos 1 es valor -> hhtp//:localhost:8084/cont/action ->empiesan las posiciones
                    }
                }
                $res=array_combine($arr_k,$arr_v);
                $this->setParrams($res);
            }else{
                //array asociativo no disponible
                $this->setParrams(null);
            }
            //Como es un método privado necesitamos funciones públicas para recoger los datos;
        }
    }
}

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller): void
    {
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        //return $this->method;
        return htmlentities($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getParrams()
    {
        return $this->parrams;
    }

    /**
     * @param mixed $parrams
     */
    public function setParrams($parrams): void
    {

        $this->params = $params;
    }


}
<?php

class Wall 
{
    
    protected $beers;
    protected $bottlesOfBeer = " bottles of beer ";
    protected $onTheWall     = "on the wall, ";
    protected $passAround    = " take one down one pass it around ";
    protected $outOfBeer     = " what the hell! I'm out of beer!";

    public function validate($input)
    {
        if (ctype_digit(strval($input))) {
            return true;
        }

        return false;
    }

    public function bottles($beers = 0)
    {
        $this->beers = $beers;
    }

    public function howManyBottles($response = '')
    {
        if ($this->beers == 1) {
            $response .= $this->beers. 
                $this->bottlesOfBeer. 
                $this->onTheWall. 
                $this->beers. 
                $this->bottlesOfBeer. 
                $this->outOfBeer.
                '<hr>';
                
            return $response;
        }

        return $this->howManyBottles(
            $response.
            $this->beers.
            $this->bottlesOfBeer.
            $this->onTheWall.
            $this->beers.
            $this->bottlesOfBeer.
            $this->passAround.
            --$this->beers.
            $this->bottlesOfBeer.
            '<br>'
        );
    }
}

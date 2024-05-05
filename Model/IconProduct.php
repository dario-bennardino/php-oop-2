<?php
require_once __DIR__ . '/Product.php';

class IconProduct extends Product
{

    public function getSpeciesIcon()
    {
        $icons = [];

        foreach ($this->species as $specie) {
            if ($specie === 'cani') {
                $icons[] = '<i class="fas fa-dog"></i>';
            } elseif ($specie === 'gatti') {
                $icons[] = '<i class="fas fa-cat"></i>';
            }
        }
        return implode(' ', $icons);
    }
}

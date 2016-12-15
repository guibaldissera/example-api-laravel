<?php 

namespace App\Providers\Transform;

abstract class Transform 
{
	
	/**
     * Tranform a collection of itens
     * 
     * @param array $itens
     * @return array
     */
    public function transformCollection(array $itens)
    {
        return array_map([$this, 'transform'], $itens);
    }

    /**
     * Transform a single item
     * 
     * @param $item
     * @return array
     */
    public abstract function transform($item);

}
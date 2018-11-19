<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Old extends Model
{
    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		if($item->price_sale == 0){
			$giohang = ['qty'=>0, 'price' => $item->price_out, 'item' => $item];
		}
		else{
			$giohang = ['qty'=>0, 'price' => $item->price_sale, 'item' => $item];
		}
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		if($item->price_sale == 0){
			$giohang['price'] = $item->price_out * $giohang['qty'];
		}
		else{
			$giohang['price'] = $item->price_sale * $giohang['qty'];
		}
		$this->items[$id] = $giohang;
		$this->totalQty++;
		if($item->price_sale == 0){
			$this->totalPrice += $item->price_out;
		}
		else{
			$this->totalPrice += $item->price_sale;
		}
	}
	
	//update
	public function update_new($id,$amount){
		if($amount>$this->items[$id]['qty']){
			$this->items[$id]['price'] *=($amount-$this->items[$id]['qty']);
			$this->items[$id]['qty']=$amount;
			$this->totalQty+=($this->items[$id]['qty']-1);
			$this->totalPrice += $this->items[$id]['price'];
					// dd($this->items[$id]['qty'],$this->totalQty,$this->items[$id]['price'],$this->totalPrice);
			if($this->items[$id]['qty']<=0){
				unset($this->items[$id]);
			}
		}
		else
		{
			$this->items[$id]['price'] -=($this->items[$id]['item']['price']*($this->items[$id]['qty']-$amount));
			$this->totalQty=$this->totalQty-($this->items[$id]['qty']-$amount);
			$this->items[$id]['qty']=$amount;
			//dd($this->items[$id]['qty'],$this->totalQty,$this->items[$id]['price']);
			$this->totalPrice -= $this->items[$id]['price'];
					 dd($this->items[$id]['qty'],$this->totalQty,$this->items[$id]['price'],$this->totalPrice);
			if($this->items[$id]['qty']<=0){
				unset($this->items[$id]);
			}
		}
	}

	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}

<?php namespace platonov;

Class Line{
	public function equation($a, $b){
			
			if($a == 0){
                throw new PlatonovException("Ошибка: уравнения не существует.");
			}
            MyLog::log("Определено, что это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>
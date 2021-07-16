<?php
	$date = $_POST["date"];
	$sumDeposit = $_POST["sumDeposit"];
	$termDeposit = $_POST["termDeposit"];
	$replenishDeposit = $_POST["replenishDeposit"];
	$sumReplenishDeposit = $_POST["sumReplenishDeposit"];

	$percent = 0.1;
	$daysy = 0;
	//echo "$date";
	list($month, $day, $year) = explode("/", $date);
	if($replenishDeposit == "Нет"){
		$sumReplenishDeposit = 0;
	}
		DaysAYear($year);//колчество дней в году начальное значение, использует глобальную переменную daysy
		$days0 = cal_days_in_month(CAL_GREGORIAN, $month, $year);//количество дней в первом месяце
		$summ = 0;
		
		$summ = intval($sumDeposit) + ((intval($sumDeposit) + intval($sumReplenishDeposit) ) * $days0 * ($percent / $daysy ));//расчет начального значения с учетом начального вклада
		
		for ($i=1; $i < intval($termDeposit)*12; $i++) { //цикл от первого месяца до срока вклада в годах *12месяцев
			if( !CheckEndYear($month) ){ // проверяю на крайний месяц года
				$days0 = cal_days_in_month(CAL_GREGORIAN, $month + 1, $year);//если это не крайний месяц то вычисляем новое количетсво дней следующего месяца этого года
				$summ = $summ + ($summ + intval($sumReplenishDeposit) ) * $days0 * ($percent / $daysy )  ;// прибавляем к предыдущей сумме новую сумму с новым $days0  
			}
			else{// иначе если это конец года, в функции проверки month и year переопределены поэтому
				$days0 = cal_days_in_month(CAL_GREGORIAN, $month, $year);//здесь пересчитываем количество дней в новом месяце нового года
				DaysAYear($year);//пересчет количества дней в году
				$summ = $summ + ($summ + intval($sumReplenishDeposit) ) * $days0 * ($percent / $daysy )  ;//расчет суммы 
			}
		}
		echo "$summ";//вывод в скрипт
		//это если я конечно правильно понял формулировки переменных

/*4.5.1 summn = summn-1 + (summn-1 + summadd)daysn(percent / daysy)

4.5.2 где summn – сумма на счете на месяц n (руб),

4.5.3 summn-1 – сумма на счете на конец прошлого месяца

4.5.4 summadd – сумма ежемесячного пополнения

4.5.5 daysn – количество дней в данном месяце, на которые приходился вклад

4.5.6 percent – процентная ставка банка - 10%

4.5.7 daysy – количество дней в году.*/
	
	

function CheckEndYear($_month){
	global $month , $year;
	if($_month == 12){
		$month = 1;
		$year++;
		return true;
	}
	else return false;
}
//функция определения количества дней в году
	function DaysAYear($year)
	{
		global $daysy;
		if(strlen($year) == 4) {
	    if (isLeap($year)) {
	        $daysy = 366; //високосный
	    } else {
	        $daysy = 365; //обычный
	    }
		}
	}
	function isLeap($year) {
    return date('L', mktime(0, 0, 0, 1, 1, $year));
}
?>
<?php
/*
GoodDate: from yymmdd to human-readable date format
Author: Heydar Gerayzade
*/

class GoodDate {
	private $dateN, $monthStr, $yearN, $monthN, $dayN;
	private $month_en = array('Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'June', 'July', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');
	private $month_de = array('Jän.', 'Feb.', 'März', 'Apr.', 'Mai', 'Juni', 'Juli', 'Aug.', 'Sept.', 'Okt.', 'Nov.', 'Dez.');
	private $month_fr = array('Janv.', 'Févr.', 'Mars.', 'Avril', 'Mai', 'Juin', 'Juil', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.');
	private $month_es = array('Enero', 'Feb.', 'Marzo', 'Abr.', 'Mayo', 'Jun.', 'Jul.', 'Agosto', 'Sept.', 'Oct.', 'Nov.', 'Dic.');
	private $month_it = array('Genn.', 'Febbr.', 'Mar.', 'Apr.', 'Magg', 'Giugno', 'Luglio', 'Ag.', 'Sett.', 'Ott.', 'Nov.', 'Dic.');
	private $month_ru = array('Янв.', 'Фев.', 'Мар.', 'Апр.', 'Мая', 'Июня', 'Июля', 'Авг.', 'Сент.', 'Окт.', 'Нояб.', 'Дек.');
	private $month_az = array('Yan.', 'Fev.', 'Mar.', 'Apr.', 'May', 'Iyun', 'Iyul', 'Avg.', 'Sent.', 'Okt.', 'Noy.', 'Dek.');
	  
	public function __construct($dateN) {
		$this->dateN = $dateN; // yyddmm: 170117
		$this->organizeDate();
	}
	
	private function organizeDate() {
		$this->yearN = substr($this->dateN,0,2);
		$this->monthN = $this->removeZero(substr($this->dateN,2,2));
		$this->dayN = $this->removeZero(substr($this->dateN,4,2));
		// year = 17, month = 1, day = 17 (without leading zeroes)
	}
	
	private function removeZero($strnum) {
		if(substr($strnum,0,1) == '0') {
			return substr($strnum,1);
		} else {
			return $strnum;
		}
		// removing leading zaeroes
	}
	
	public function convertDate($lang) {
		$month_lang = 'month_' . $lang; // month_en
		$month_ar = $this->$month_lang; // $this->month_en
		
		$this->monthStr = $month_ar[$this->monthN - 1]; // Jan (month_en[0])
		
		return $this->dayN . " " . $this->monthStr . " 20" . $this->yearN;
		// returning formatted date in given language: 17 Jan 2017
	}
}

?>

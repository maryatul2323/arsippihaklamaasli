<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'HOME', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'tb_pihak', 
			'label' => 'DATA PIHAK ', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'tb_hapus', 
			'label' => 'BERKAS DIHAPUS', 
			'icon' => '<i class="fa fa-trash "></i>'
		)
	);
		
	
	
			public static $JENIS_PERKARA = array(
		array(
			"value" => "Cerai Gugat", 
			"label" => "Cerai Gugat", 
		),
		array(
			"value" => "Cerai Talak", 
			"label" => "Cerai Talak", 
		),
		array(
			"value" => "Dispensasi Kawin", 
			"label" => "Dispensasi Kawin", 
		),
		array(
			"value" => "Istbat Nikah", 
			"label" => "Istbat Nikah", 
		),
		array(
			"value" => "Poligami", 
			"label" => "Poligami", 
		),
		array(
			"value" => "Ahli Waris", 
			"label" => "Ahli Waris", 
		),
		array(
			"value" => "Wali Adhol", 
			"label" => "Wali Adhol", 
		),
		array(
			"value" => "Pengangkatan Anak", 
			"label" => "Pengangkatan Anak", 
		),
		array(
			"value" => "Harta Bersama", 
			"label" => "Harta Bersama", 
		),);
		
}
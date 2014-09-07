<?php
	/**
	 * Classe Tempo Teste
	 **/
	/** Returns the physical address of the web server */
	$SERVER_ADDRESS = $_SERVER['DOCUMENT_ROOT'];
	require_once $SERVER_ADDRESS."/TecProg2014-2/RadarCriminal/model/Tempo.php";
	
	class TempoTeste extends PHPUnit_Framework_Testcase{
		
		public function setUp(){
			$this->tempo = new Tempo();
		}
		
		public function testSetIdTempo(){
			$this->tempo->__setIdTempo(1);
			$this->assertEquals(1, $this->tempo->__getIdTempo());
		}
		public function testExceptionIdTempo(){
			$this->setExpectedException('ETipoErrado');
			$this->tempo->__setIdTempo('erro');
		}
		public function testSetIntervalo(){
			$this->tempo->__setIntervalo(1);
			$this->assertEquals(1,$this->tempo->__getIntervalo());
		}
		public function testExceptionIntervalo(){
			$this->setExpectedException('ETipoErrado');
			$this->tempo->__setIntervalo("erro");
		}
		public function testSetMes(){
			$this->tempo->__setMes('teste');
			$this->assertEquals('teste',$this->tempo->__getMes());
		}
		public function testConstructOverLoad(){
			$this->tempo->__constructOverload(1, '2001','janeiro');
			$this->assertEquals(1,$this->tempo->__getIdTempo());
			$this->assertEquals('2001',$this->tempo->__getIntervalo());
			$this->assertEquals('janeiro',$this->tempo->__getMes());
		}
	}
?>
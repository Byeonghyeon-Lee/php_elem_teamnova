<?php
	/**
	* 
	*/
	class Member
	{
		// 등록한 회원들의 정보를 저장할 변수
		public $name;
		public $id;
		public $password;
		public $memberClass; // 직분
		public $mission; // 소속선교회
		public $community; // 교구
		
		// constructor
		function __construct($name, $id, $password, $memberClass, $mission, $community)
		{
			$this->name = $name;
			$this->id = $id;
			$this->password = $password;
			$this->memberClass = $memberClass;
			$this->mission = $mission;
			$this->community = $community;
		}

		/*
			이 밑에는 이곳 DAO 클래스에서 DB에 접속하여 회원정보를 저장할 수 있는 메소드를 만든다
		*/
	}
?>
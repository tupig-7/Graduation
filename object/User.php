<?php
	/**
	 * Created by PhpStorm.
	 * User: X555Y
	 * Date: 2018/10/18
	 * Time: 16:06
	 */

	class User
	{
		var $username = "";
		var $password = "";
		var $identity = "";
		/**
		 * @return string
		 */
		public function getUsername (): string
		{
			return $this->username;
		}

		/**
		 * @param string $username
		 */
		public function setUsername (string $username): void
		{
			$this->username = $username;
		}

		/**
		 * @return string
		 */
		public function getPassword (): string
		{
			return $this->password;
		}

		/**
		 * @param string $password
		 */
		public function setPassword (string $password): void
		{
			$this->password = $password;
		}

		/**
		 * @return string
		 */
		public function getIdentity (): string
		{
			return $this->identity;
		}

		/**
		 * @param string $identity
		 */
		public function setIdentity (string $identity): void
		{
			$this->identity = $identity;
		}





	}
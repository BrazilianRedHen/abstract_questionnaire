<?php

class Usuario {

	private $id;
	private $nome;
	private $usuario;
	private $senha;
	private $ambiente;
	private $ativo;
	private $ultimo_acesso;

	/**
	 * Gets the value of id.
	 *
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the value of id.
	 *
	 * @param mixed $id the id
	 *
	 * @return self
	 */
	public function _setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Gets the value of nome.
	 *
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * Sets the value of nome.
	 *
	 * @param mixed $nome the nome
	 *
	 * @return self
	 */
	public function _setNome($nome) {
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Gets the value of usuario.
	 *
	 * @return mixed
	 */
	public function getUsuario() {
		return $this->usuario;
	}

	/**
	 * Sets the value of usuario.
	 *
	 * @param mixed $usuario the usuario
	 *
	 * @return self
	 */
	public function _setUsuario($usuario) {
		$this->usuario = $usuario;

		return $this;
	}
}
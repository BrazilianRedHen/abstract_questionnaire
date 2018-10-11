<?php

interface Repository {

	public function Save($object);

	public function Update($object);

	public function Delete($condicao);

	public function FindById($id);

}
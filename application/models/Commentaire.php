<?php

	class Commentaire extends My_Model
	{
		
		public function insert($id_pub,$id_client,$texte_commentaire)
		{
			$sql = "INSERT INTO Commentaire (id_publication,id_client,texte_commentaire,vu) VALUES ($id_pub,$id_client,'$texte_commentaire',false)";
			$this->db->query($sql);
 		}
	}
?>
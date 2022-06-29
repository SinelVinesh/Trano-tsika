<?php
    class Publication extends MY_Model{

        public function insert($id_publication, $id_client, $id_location,$titre,$description, $prix,$lieu,$latitude,$longitude,$nbr_piece,$surface){
            $sql="INSERT INTO Publication(id_publication, id_client,id_location,titre,description,prix,lieu,date_publication,latitude,longitude, nbr_piece,surface) values(%s, %s, %s, %s, %s, %s,%s,NOW(),%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_client),$this->db->escape($id_location),$this->db->escape($titre),$this->db->escape($description),$this->db->escape($prix),$this->db->escape($lieu),$this->db->escape($latitude),$this->db->escape($longitude),$this->db->escape($nbr_piece),$this->db->escape($surface));
            $this->db->query($sql);
        }

        public function get_pub($id){
            return $this->get_by_id("publication","id_publication",$id)[0];
        }

        public function get_next_pub($limit,$offset){
            $sql="SELECT * from v_publication limit %s offset %s ";
            $sql=sprintf($sql,$this->db->escape($limit),$this->db->escape($offset));
            $query=$this->db->query($sql);
            return $query->result_array();
        }

        public function  get_detail_utilite($id)
		{
			return $this->get_by_id("v_detail_utilite","id_publication", $id);
		} 

		public function get_commentaire($id,$limit)
		{
			$sql = "select * from v_commentaire where id_publication=$id limit $limit";
			$requete = $this->db->query($sql);
			return $requete;
		}

		public function get_detail_tags($id)
		{
			return $this->get_by_id("v_detail_tags","id_publication",$id);
		}

		public function get_photo($id)
		{
			return $this->get_by_id("photo","id_publication",$id);
		}
    }
?>
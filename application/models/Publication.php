<?php
    class Publication extends MY_Model{

        public function insert($id_publication, $id_client, $id_location,$titre,$description, $prix,$latitude,$longitude,$nbr_piece,$surface){
            $sql="INSERT INTO Publication(id_publication, id_client,id_localisation,titre,description,prix,date_publication,latitude,longitude, nombre_piece,surface) values(%s, %s, %s, '%s', '%s', %s,NOW(),%s,%s,%s,%s)";
            $sql=sprintf($sql,$id_publication,$id_client,$id_location,$titre,$description,$prix,$latitude,$longitude,$nbr_piece,$surface);
            $this->db->query($sql);
            // echo "sql   ".$sql;
        }

        public function get_pub($id){
            return $this->get_by_id("v_publication","id_publication",$id);
        }

        public function get_next_pub($limit,$offset,$id_client){
            $sql="SELECT * from getpublicationspoint($id_client) limit %s offset %s ";
            $sql=sprintf($sql,$this->db->escape($limit),$this->db->escape($offset));
            $query=$this->db->query($sql);
            return $query->result_array();
        }

        public function getPosition($id) {
            return $this
                ->db
                ->query("select longitude lng , latitude lat from publication where id_publication=$id")
                ->row_array();
        }

        public function  get_detail_utilite($id)
		{
			return $this->get_all("v_detail_utilite","id_publication=$id");
		} 

        public function get_id_client($id){
            $data = $this->get_row("publication","id_publication=$id");
            return $data["id_client"];
        }

		public function get_commentaire($id)
		{
			return $this->get_all("v_commentaire","id_publication=$id");
		}

        public function get_limited_commentaire($id,$limit,$offset)
		{
            $sql = "select * from v_commentaire where id_publication=$id limit $limit offset $offset ";
            $query = $this->db->query($sql);
			return $query->result_array() ;
		}


		public function get_detail_tags($id)
		{
			return $this->get_all("v_detail_tags","id_publication=$id");
		}

		public function get_photo($id)
		{
			return $this->get_all("photo","id_publication=$id");
		}

        public function createSearchCondition($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util){
            $condition = "";
            if($titre!=""){ //ou isset?
                $condition = $condition." and titre like '%".$titre."%'";
            }
            if($location!=""){
                $condition = $condition." and id_localisation=".$location;
            }
            if($prix_min!=""){
                $condition = $condition." and prix >= ".$prix_min;
            }
            if($prix_max!=""){
                $condition = $condition." and prix <= ".$prix_max;
            }
            if($room_min!=""){
                $condition = $condition." and nombre_piece >= ".$room_min;
            }
            if($room_max!=""){
                $condition = $condition." and nombre_piece <= ".$room_max;
            }
            if($tags != null && count($tags)!=0){
                $condition = $condition." and id_publication in (select id_publication from detail_tags where id_tag = ".$tags[0];
                foreach($tags as $tag){
                    if($tag != $tags[0]){
                        $condition = $condition." or id_tag = ".$tag;
                    }
                }
                $condition = $condition.")";
            }
            if($tags_util != null && count($tags_util)!=0){
                $condition = $condition."and id_publication in (select id_publication from detail_utilite where id_utilite = ".$tags_util[0];
                foreach($$tags_util as $tag){
                    if($tag != $tags_util[0]){
                        $condition = $condition." or id_utilite = ".$tag;
                    }
                }
                $condition = $condition.")";
            }
            return $condition;
        }

        public function search($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util,$limit,$offset){
            $condition=$this->Publication->createSearchCondition($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util);
            $sql = "SELECT * FROM v_publication WHERE 1=1".$condition." limit $limit offset $offset ";  
            // echo $sql;
            $query = $this->execute_query($sql);
            return $query->result_array();
        }

        public function count_search($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util){
            $condition=$this->Publication->createSearchCondition($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util);
            $sql = "SELECT count(id_publication) len FROM v_publication WHERE 1=1".$condition;
            $query = $this->execute_query($sql)->row_array();
            return $query["len"];
        }

        public function count_simple_search($criteria){
            $tag = "id_publication in (select id_publication from v_detail_tags where nom_tag ilike '%$criteria%')";
            $util = "id_publication in (select id_publication from v_detail_utilite where nom_utilite ilike '%$criteria%')";
            $sql = "select count(id_publication) len from v_publication where titre ilike '%$criteria%' or $tag or $util ";
            $query = $this->execute_query($sql)->row_array();
            return $query["len"];

        }

        public function simpleSearch($criteria,$limit,$offset){
            $tag = "id_publication in (select id_publication from v_detail_tags where nom_tag ilike '%$criteria%')";
            $util = "id_publication in (select id_publication from v_detail_utilite where nom_utilite ilike '%$criteria%')";
            $sql = "select * from v_publication where titre ilike '%$criteria%' or $tag or $util limit $limit offset $offset";
            // echo $sql;
            $query = $this->execute_query($sql);

            return $query->result_array();
        }
    }
?>
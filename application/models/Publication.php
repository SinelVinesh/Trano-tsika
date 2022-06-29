<?php
    class Publication extends MY_Model{

        public function insert($id_publication, $id_client, $id_location,$titre,$description, $prix,$lieu,$latitude,$longitude,$nbr_piece,$surface){
            $sql="INSERT INTO Publication(id_publication, id_client,id_location,titre,description,prix,lieu,date_publication,latitude,longitude, nbr_piece,surface) values(%s, %s, %s, %s, %s, %s,%s,NOW(),%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_client),$this->db->escape($id_location),$this->db->escape($titre),$this->db->escape($description),$this->db->escape($prix),$this->db->escape($lieu),$this->db->escape($latitude),$this->db->escape($longitude),$this->db->escape($nbr_piece),$this->db->escape($surface));
            $this->db->query($sql);
        }

        public function get_pub($id){
            return $this->get_by_id("publication","id_publication",$id);
        }

        public function get_next_pub($limit,$offset){
            $sql="SELECT * from v_publication limit %s offset %s ";
            $sql=sprintf($sql,$this->db->escape($limit),$this->db->escape($offset));
            $query=$this->db->query($sql);
            return $query->result_array();
        }

        // public function get_number_comment($id_publication){
        //     $sql="SELECT count(*) as total_comment from Commentaire where id_publication = %s";
        //     $sql=sprintf($sql,$this->db->escape($id_publication));
        //     $query=$this->db->query($sql);
        //     return $query->row_array();
        // }

        // public function get_number_like($id_publication){
        //     $sql="SELECT count(*) as total_like from 
        //         Reaction as r join Reaction_item as ri on r.id_reaction_item = ri.id_reaction_item 
        //         where id_reaction_item = 1 and id_publication = %s";
        //     $sql=sprintf($sql,$this->db->escape($id_publication));
        //     $query=$this->db->query($sql);
        //     return $query->row_array();
        // }

        // public function get_number_like($id_publication){
        //     $sql="SELECT count(*) as total_dislike from 
        //         Reaction as r join Reaction_item as ri on r.id_reaction_item = ri.id_reaction_item 
        //         where id_reaction_item = 2 and id_publication = %s";
        //     $sql=sprintf($sql,$this->db->escape($id_publication));
        //     $query=$this->db->query($sql);
        //     return $query->row_array();
        // }

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
            if(count($tags)!=0){
                $condition = $condition." and id_publication in (select id_publication from detail_tags where id_tag = ".$tags[0];
                foreach($tags as $tag){
                    if($tag != $tags[0]){
                        $condition = $condition." or id_tag = ".$tag;
                    }
                }
                $condition = $condition.")";
            }
            if(count($tags_util)!=0){
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

        public function search($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util){
            $condition=$this->Publication->createSearchCondition($titre,$location,$prix_min,$prix_max,$room_min,$room_max,$tags,$tags_util);
            $sql = "SELECT * FROM v_publication WHERE 1=1".$condition;  
            $query = execute_query($sql);
        }
    }
?>
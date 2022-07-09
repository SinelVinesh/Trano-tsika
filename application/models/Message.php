<?php

class Message extends MY_Model
{

    function insert($id_client_sender, $id_pub, $id_client_receiver, $message_texte)
    {
        $sql = "INSERT INTO Message (id_client_sender,id_publication, id_client_receiver, date_envoye, message_texte) VALUES (%s,%s,%s,now(),%s)";
        $sql = sprintf($sql, $this->db->escape($id_client_sender), $this->db->escape($id_pub), $this->db->escape($id_client_receiver), $this->db->escape($message_texte));
        // echo $sql;
        $this->db->query($sql);
    }

    function get_messages($idClient, $id_pub)
    {
        $condition = "id_publication = $id_pub and (id_client_sender=$idClient or id_client_receiver=$idClient)";
        return $this->get_all("v_message", $condition);
    }

    function getMessages($client1,$client2, $idPub) {
        $condition = "id_publication = $idPub and ((id_client_sender=$client1 and id_client_receiver=$client2) or (id_client_sender=$client2 and id_client_receiver=$client1) )";
        return $this->get_all("v_message", $condition);
    }

    public function getDiscussionOf($id)
    {

        // select the distinct discussion of the user who has the id = '$id'
        $sqlDistinct = "
            select t.id_publication, another, p.id_client from (select
                distinct id_publication,
                case
                    when id_client_sender = $id then id_client_receiver
                    else id_client_sender
                end another
            from message
            where id_client_receiver = $id
               or id_client_sender = $id) t
            join publication p on t.id_publication = p.id_publication;
        ";


        // last messages for each discussion
        $lastMessage = "
            select *
            from v_message
            where id_publication = %s
              and ((id_client_receiver = $id and id_client_sender = %s) or
                   (id_client_receiver = %s and id_client_sender = $id))
            order by date_envoye desc
            limit 1;
        ";

        $discussions = $this
            ->db
            ->query($sqlDistinct)
            ->result_array();

        // setting the last messages for each discussion
        for ($i = 0; $i < count($discussions); $i++) {
            $another = $discussions[$i]["another"];
            $discussions[$i]["lastMessage"] = $this
                ->db
                ->query(sprintf($lastMessage, $discussions[$i]["id_publication"], $another,$another))
                ->row_array();
        }

        return $discussions;
    }

}

-- commentaire + client : v_commentaire
CREATE OR REPLACE VIEW v_commentaire AS(
    SELECT
    Client.id_client AS id_client,
    Client.first_name AS first_name,
    Client.last_name AS last_name,
    Commentaire.date_commentaire AS date_commentaire,
    Commentaire.texte_commentaire AS texte_commentaire
    FROM Publication
    JOIN Commentaire ON
    Commentaire.id_publication=Publication.id_publication
    JOIN Client ON
    Client.id_client=Commentaire.id_client
);

-- message + client_sender + client_receiver : v_message
CREATE OR REPLACE VIEW v_message AS(
    SELECT
    c1.id_client AS id_client_sender,
    c1.first_name AS first_name_sender,
    c1.last_name AS last_name_sender,
    c2.id_client AS id_client_receiver,
    c2.first_name AS first_name_receiver,
    c2.last_name AS last_name_receiver,
    Message.date_envoye AS date_envoye,
    Message.message_texte AS message_texte
    FROM Message
    JOIN Client as c1 ON
    c1.id_client=Message.id_client_sender
    JOIN Client as c2 ON
    c2.id_client=Message.id_client_receiver
);


-- question non repondu
CREATE OR REPLACE VIEW v_question_non_replied AS(
    SELECT
    Question.id_question AS id_question,
    Question.intitule AS intitule
    FROM Question
    JOIN Reponse_client ON
    Question.id_question=Reponse_client.id_question
    where Question.id_question not in (select id_question from Reponse_client)
);
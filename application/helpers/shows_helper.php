<?php

    function displayPubs($pubs): string
    {
        $display = '<div class="row pl-1 pr-1">
        <!-- Single Featured Property -->';
        foreach ($pubs as $pub) {
            $id = $pub["id_publication"];
            $display = $display.'<div class="col-12 col-md-6 col-xl-4">
                <a href="'.site_url("DetailPublicationController/load_detail/$id").'" class="pub-link" title="Voir details">
                    <div class="single-featured-property mb-5 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="'.base_url().'assets/bg-img/feature1.jpg" alt="">

                            <div class="tag">
                                <span>A louer</span>
                            </div>
                            <div class="list-price">
                                <p>'.number_format($pub["prix"]).'Ar</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>'.$pub["titre"].'</h5>
                            <p class="location"><i class="fa-solid fa-location-dot"></i> Andoharanofotsy</p>
                            <p>'.$pub["description"].'</p>

                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <!--                            <a href="#" class="custom-btn">Plus de details</a>-->
                                <div class="pub-details">
                                    <i class="fa-solid fa-thumbs-up"></i> '.($pub["nblike"] ?? 0).'
                                </div>
                                <div class="pub-details">
                                    <i class="fa-solid fa-thumbs-down"></i> '.($pub["nbunlike"] ?? 0).'
                                </div>
                                <div class="pub-details">
                                    by <i>'.$pub["first_name"] . " " . $pub["last_name"].'</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>';
        }

        return $display.'</div>';
    }

    function displayComments($coms) {
        $display = '';

        foreach ($coms as $com) {
                $display = $display.'
                <li>
                    <div class="we-comment">
                        <div class="coment-head">
                            <h5>
            <!--                                                            <a href="time-line.html" title="">-->
                                     '.$com["first_name"] . " " . $com["last_name"].'
            <!--                                                            </a>-->
                            </h5>
                            <span>'.displayDate($com["date_commentaire"]).'</span>
                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                        </div>
                        <p>'.$com["texte_commentaire"].'</p>
                    </div>
                </li>
                ';
        }
        
        return $display;
    }

    function displayNextQuestion($survey) {
        if($survey == null){
            return "";
        }
        $type =($survey["question"]["multi_res"]) ? "checkbox" : "radio";
        $id_question = $survey["question"]["id_question"];
        $question_intitule = $survey["question"]["intitule"];
        $reponse_type = ($type == "checkbox") ? "( Reponse multicriteres )" : "" ;
        $reponse = '';
        foreach ($survey["reponses"] as $res) { 
            $id_tag = $res["id_tag"];
            $intitule = $res["intitule"]; 
            $tmp = '
            <div class="form-check">
                <input class="form-check-input check" type="'.$type.'" name="response" value="'.$id_tag.'">
                <label class="form-check-label">'.$intitule.'</label>
            </div>';
            $reponse .= $tmp;
        }
        
        $display = '
        <div class="modal-header">
            <h6 id="questionSurvey">'.$question_intitule.' '.$reponse_type.' </h6>
            <a type="button" class="closeSurvey" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
        </div>
        <div class="modal-body">
            <input type="hidden" id="survey_question" value="'.$id_question.'">'.$reponse;     
        $display .= '
        </div>
        <div class="modal-footer d-flex justify-content-between">
            <button class="btn btn-outline-secondary rounded-0 next"><span><i>Valider</i></span>
            </button>
            <button class="btn btn-primary rounded-0 ignorer"><span>Ignorer</span></button>
        </div>';
        return $display;
    }




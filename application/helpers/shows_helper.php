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

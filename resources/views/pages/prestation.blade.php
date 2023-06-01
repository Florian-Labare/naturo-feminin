<section class="section-prestations p-5 mt-4 max-w-7xl mx-auto md:mt-10">
    <div id="bien-etre-trigger"></div>
    <img class="prestation-title" src="{{url('images/prestations.png')}}" alt="" data-aos="fade-left">
    <div id="bien-etre">
        <h2 class="bien-etre-title text-sm font-semibold uppercase lg:text-lg md:items-center lg:mr-5" data-aos="fade-right">
            Bien-être en entreprise
        </h2>
        <div class="align-between flex flex-col lg:flex-row justify-between mt-7">
            <div class="paragraphe-prestation" data-aos="fade-down">
                La notion de bien-être au travail est un concept de portée plus large que les notions de santé physique et mentale. Elle fait référence à un sentiment général de
                satisfaction et d’épanouissement dans et par le travail qui dépasse l’absence d’atteinte à la santé. (définition de l’INRS)
            </div>
            <div class="line-separator" data-aos="fade-down"></div>
            <img class="img-bien-etre-prestation rounded-bl-xl" src="{{url('images/feng-shui-ge705ca832_1920.jpg')}}" alt="" data-aos="fade-right">
        </div>
        <div class="main-etude-collab-container">
            <div class="chart-container flex flex-col lg:flex-row lg:justify-between">
                <div class="bar-container flex flex-col" data-aos="fade-right">
                    <h2 class="etude-bien-etre-title font-semibold mb-5">*Étude sur le bien-être et le mental en entreprise</h2>
                    <p class="objectif-bien-etre-paragraphe mb-7"><strong>Objectif :</strong> évaluer les perceptions du bien-être mental et son impact sur les performances ou les comportements des salariés envers l’employeur.</p>
                    <canvas id="barCanvas"></canvas>
                    <h2 class="alan-et-harris-paragraphe font-semibold mt-4">par Alan et Harris Interactive réalisée en octobre 2022</h2>
                    <p class="italic mt-3" style="font-size: .7rem; font-weight: lighter;">https://alan.com/lp/barometre-bien-etre-mental-entreprise</p>
                </div>
                <div class="line-separator" data-aos="fade-down"></div>
                <div class="collabs-container flex flex-col" data-aos="fade-down">
                    <div class="square-and-paragraphe-container flex justify-between mb-4">
                        <div class="square light-green rounded-bl-lg"></div>
                        <span class="collab-paragraphe" style="width: 40rem; font-weight:lighter"><strong>91%</strong> des collaborateurs estiment que les difficultés psychologiques sont de plus en plus répandues au travail</span>
                    </div>
                    <div class="square-and-paragraphe-container flex justify-between mb-4">
                        <div class="square dark-pink rounded-bl-lg"></div>
                        <span class="collab-paragraphe" style="width: 40rem; font-weight:lighter"><strong>71%</strong> des collaborateurs ayant fait face à une difficulté psychologique ont une envie de changement profond (poste, ou reconversion)</span>
                    </div>
                    <div class="square-and-paragraphe-container flex justify-between">
                        <div class="square light-pink rounded-bl-lg lg:mt-1"></div>
                        <span class="collab-paragraphe" style="width: 40rem; font-weight:lighter"><strong>85%</strong> déclarent que l’amélioration du bien-être mental renforcerait leur fidélité à leur employeur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="qvct-trigger"></div>
    <div id="qvct">
        <h2 class="bien-etre-title text-sm font-semibold uppercase lg:text-lg md:items-center lg:mr-5" data-aos="fade-right">
            qualité de vie et des conditions de travail en entreprise
        </h2>
        <div class="align-between flex flex-col lg:flex-row justify-between mt-7">
            <div class="paragraphe-prestation-qvct" data-aos="fade-down">
                La qualité de vie et des conditions de travail désigne et regroupe sous un même intitulé les actions qui permettent de concilier à la fois l’amélioration des
                conditions de travail pour les salariés et la performance globale des entreprises (Définition de l’ANACT).<br>
                Cette notion est apparue dans les années 70 dans les pays anglo-saxons, et renvoie aux conditions et aux caractéristiques du travail qui contribuent à la
                performance, la satisfaction et la motivation au travail.
            </div>
            <div class="line-separator" data-aos="fade-down"></div>
            <img class="img-bien-etre-prestation-qvct rounded-bl-xl" src="{{url('images/qvct.png')}}" alt="" data-aos="fade-right">
        </div>
        <div class="pie-and-line-chart-container">
            <h2 class="etude-bien-etre-title font-semibold mb-5" data-aos="fade-down">*Étude publiée dans HBR – HS Le Must automne 2020 sur la productivité et les risques psychosociaux</h2>
            <div class="pie-and-line-chart-flex-container flex flex-col lg:flex-row justify-between">
                <div class="pie-chart-flex-container flex flex-col" data-aos="fade-right">
                    <div id="pieChart">
                        <canvas id="pieCanvas"></canvas>
                    </div>
                    <div class="flex mt-10">
                        <div class="square light-pink rounded-bl-lg mt-2"></div>
                        <span class="doughnut-paragraphe ml-5"><strong>Plus de 50%</strong> des collaborateurs s’étant trouvés en situation d’incivilité réduisent délibérément leurs efforts</span>
                    </div>
                    <div class="flex mt-5">
                        <div class="square light-green rounded-bl-lg"></div>
                        <span class="doughnut-paragraphe ml-5"><strong>Plus d’1/3</strong> réduit également volontairement la qualité du travail fourni</span>
                    </div>
                </div>
                <div class="line-separator" data-aos="fade-down"></div>
                <div class="line-chart-flex-container flex flex-col" data-aos="fade-right">
                    <div id="lineCnavas">
                        <canvas id="speedChart"></canvas>
                    </div>
                    <div class="square-and-paragraphe-container flex justify-between mt-10">
                        <div class="square light-pink square-line-chart-1 rounded-bl-lg mt-2"></div>
                        <span class="line-paragraphe ml-5" style="width: 40rem; font-weight:lighter"><strong>Une augmentation de plus de 54%</strong> des problèmes de santé, apportant leur lot d’arrêts maladies, de désorganisation, d’insatisfaction clientèle…</span>
                    </div>
                    <div class="flex mt-5">
                        <div class="square light-green square-line-chart-2 light-green-ipad  light-green-iphone rounded-bl-lg"></div>
                        <div class="ml-5" style="width: 100%">
                            <div class="flex">
                                <span class="line-paragraphe"><strong>Une perte de 21%</strong> d’efficacité chez les collaborateurs non enthousiastes et non épanouis.</span>
                                <a id="line-chart-accordion"><i id="toggleChartLineButton" class="fas fa-add" style="color: #efafab"></i></a>
                            </div>
                            <div id="content-etude">
                                1 collaborateur sur 5 dans une équipe dont le travail n'était ni efficace ni
                                efficient, avec tous les problèmes en résultant : perte colossale de temps, impossibilité de recruter face au surmenage, perte de cohésion en interne, demandes
                                de revalorisations salariales non maîtrisées, démissions potentielles, perte de confiance, etc.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particuliers-trigger"></div>
    <div id="pariculiers">
        <h2 class="particuliers-title text-sm font-semibold uppercase lg:text-lg md:items-center lg:mr-5" data-aos="fade-right">
            Partiucliers
        </h2>
        <p class="naturopathie-subtitle mt-3" data-aos="fade-right">Naturopathie</p>
        <div class="align-between flex flex-col lg:flex-row justify-between mt-9">
            <div class="paragraphe-prestation-accopmpagnement-complet" data-aos="fade-down">
                Pourquoi consulter: pour conserver une bonne santé, prévenir des maladies, mais aussi pour retrouver la santé avec
                des méthodes douces et naturelles. Stress, mauvaise alimentation, conception d’un enfant, environnement pollué,
                fatigue, mauvaise immunité etc. Votre naturopathe peut également accompagner certaines pathologies, sans pour
                autant se substituer à la médecine allopathique, et sous réserve d’un diagnostic médical préalable.
                Quelque soit la cause de consultation j’agirais en synergie sur les plans psychiques, physiques et nutritionnels.
            </div>
            <div class="line-separator" data-aos="fade-down"></div>
            <div class="accompagnement-complet-container" data-aos="fade-right">
                <h2 class="accompagnement-complet-title font-semibold">Pour un accompagnement complet Pack 4 séances <b>- 240 €</b> (soit 60€ la séance)</h2>
                <div class="content-accompagnement-complet-container" style="width: 100%">
                    <div class="content-accompagnement-complet-grid">
                        <div>
                            <h4 class="bilan-title">1 Bilan vital 1h30 (envoi préalable du questionnaire)</h4>
                            <div class="ml-4">
                                <ul class="bilan font-light mt-3">
                                    <li class="bilan-item">Bilan global d'hygiène vitale</li>

                                    <div class="flex">
                                        <li class="bilan-item">Envoi du compte-rendu par courriel :</li>
                                        <div id="compte-rendu-items"><em class="em-element" id="compte-rendu">(voir plus)</em></div>
                                    </div>
                                </ul>
                                <div id="compte-rendu-content">
                                    <ul class="accompagnement-complet-list font-light italic">
                                        <li class="accompagnement-complet-item">Des conseils,</li>

                                        <li class="accompagnement-complet-item">Des menus personnalisés,</li>

                                        <li class="accompagnement-complet-item">Des bonnes lectures,</li>

                                        <li class="accompagnement-complet-item">Des bonnes adresses,</li>

                                        <li class="accompagnement-complet-item">Votre programme personnalisé</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ml-4">
                                <h4 class="bilan-title-2">3 consultations de suivi 1h chacune</h4>
                                <ul class="bilan font-light mt-3">
                                    <li class="bilan-item">Ajustement du programme</li>

                                    <li class="bilan-item">Suivi et bilan personnalisé</li>

                                    <li class="bilan-item">Envoi du nouveau programme par courriel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="line-separator-hor"></div>
                    <div class="consulation-seule-section">
                        <h2 class="consultation-seule-title font-semibold">La consultation seule <b>- 70 €</b></h2>
                        <div class="consultation-seule-content">
                            <h4 class="bilan-title-3"e>1 Bilan vital 1h (envoi préalable du questionnaire)</h4>
                            <ul class="consultation-seule-bilan-list mt-3">
                                <li class="bilan-item">Bilan global d’hygiène vital</li>

                                <li class="bilan-item">Envoi du programme personnalisé par courriel</li>

                                <li class="bilan-item">Des conseils et menus personnalisés</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="consultations-seul-fleurs-container">
            <div class="consultation-fleurs-section flex flex-col lg:flex-row justify-between">
                <p class="consultation-fleurs-paragraphe" data-aos="fade-down">
                    Mis au point dans les années 1930 par le Dr Edward Bach, les élixirs floraux, Fleurs de bach, sont des remèdes naturels qui
                    permettent de traiter les états émotionnels négatifs qui affectent notre vie quotidienne : peurs, colère, manque de confiance en soi,
                    jalousie, déprime, impatience etc. Elles ne produisent pas d’effets secondaires et sont compatibles avec les autres formes de
                    thérapie.
                </p>
                <div class="line-separator" data-aos="fade-down" data-aos-offset= "250"></div>
                <div class="consulation-seule-et-fleurs-width">
                    <div class="consultation-fleurs-bach-container-flex flex flex-col lg:flex-row justify-between">
                        <div class="consultation-fleurs-bach-container" data-aos="fade-right">
                            <h2 class="consultation-fleurs-title font-semibold">Consultation en Fleurs de Bach <b>- 75 €</b></h2>

                            <div class="flex">
                                <h4 class="fleurs-bach-title">La consultation: 1h à 1h30 en fonction de vos besoins</h4>
                            </div>
                            <div class="consult-fonction-des-besoins-content mt-3">
                                <ul class="consultation-fleurs-bach-list">
                                    <li class="bilan-item">Anamnèse, et bilan d’hygiène de vie</li>

                                    <li class="bilan-item">Conseils personnalisés</li>

                                    <li class="bilan-item">Préparation de votre flacon personnalisé</li>
                                </ul>
                            </div>
                        </div>
                        <div class="line-separator line-vertical-fleurs-bach" data-aos="fade-down" data-aos-offset= "250"></div>
                        <div class="fleurs-bach-container">
                            <div class="flex" data-aos="fade-right">
                                <h4 class="italic">A qui s’adressent les Fleurs de Bach ?</h4><em class="em-element-fleur-bach" id="fleurs-bach">(voir plus)</em>
                            </div>
                            <div id="fleurs-bach-content" class="mt-3">
                                <ul class="fleurs-bach-list italic">
                                    <li class="accompagnement-complet-item">A toute la famille, à tous les âges de la vie: enfants, adultes, femmes enceintes et allaitantes</li>

                                    <li class="accompagnement-complet-item">Pour le traitement aigu de situations</li>

                                    <li class="accompagnement-complet-item">Pour aider à passer une étape importante, un changement (par exemple : grossesse, examens, déménagement, puberté…)</li>

                                    <li class="accompagnement-complet-item">En traitement d’accompagnement de maladies aigües et chroniques (troubles du sommeil, problèmes de peau, suite d’opérations)</li>

                                    <li class="accompagnement-complet-item">Pour aider à gérer les émotions négatives, retrouver ses qualités, sa joie de vivre (jalousie, colère, angoisses, découragement…)</li>
                                </ul>
                            </div>
                            <div>
                                <img class="img-bien-fleurs-bach rounded-bl-xl" src="{{url('images/fleurs-bach-flacons.jpg')}}" alt="" data-aos="fade-right">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="massage-main-container">
            <h2 class="particuliers-title text-sm font-semibold uppercase lg:text-lg md:items-center lg:mr-5" data-aos="fade-right">
                Partiucliers
            </h2>
            <p class="naturopathie-subtitle mt-3" data-aos="fade-right">Massages</p>
            <div class="massage-container-flex flex flex-col lg:flex-row justify-between">
                <p class="massage-paragraphe italic" data-aos="fade-down">
                    Je vous propose également de prendre soin de votre corps, car le corps
                    et l’esprit sont indissociablement liés. Lors de mes massages j’utilise
                    différentes techniques dont le massage à l’huile, le massage
                    thaïlandais original de style Wat Po, et la réflexologie énergétique
                    faciale
                </p>
                <div class="line-separator" data-aos="fade-down" data-aos-offset= "250"></div>
                <div>
                    <img class="img-massage rounded-bl-xl" src="{{url('images/fleurs-bach-flacons.jpg')}}" alt="" data-aos="fade-right">
                </div>
            </div>
        </div>
        <div class="massage-prestations-main-container flex flex-col lg:flex-row justify-between">
            <div class="message-prestation-section" data-aos="fade-right">
                <h2 class="massage-prestations-title font-semibold">Massage Thai Général Wat Pho Style <b>- 130 € 1h30</b></h2>
                <p>Comprend :</p>
                <div class="massage-prestations-content-list mt-3">
                    <ul class="massage-prestations-list">
                        <div class="flex"><li class="bilan-item">une anamnèse:</li><em class="em-element-massage-first-section" id="massage-presta-1">(voir plus)</em></div>
                        <div id="massage-content-1" class="content-anamnese italic">avant toute séance je procède gratuitement à une analyse personnalisée de vos besoins</div>

                        <li class="bilan-item">Une tisane</li>

                        <li class="bilan-item">Le massage</li>
                    </ul>
                </div>
            </div>
            <div class="line-separator" data-aos="fade-down" data-aos-offset= "250"></div>
            <div class="message-prestation-section" data-aos="fade-right">
                <h2 class="massage-prestations-title font-semibold">Massage aux huiles végétales et essentielles <b>- 90 € 1h</b></h2>
                <p>Comprend :</p>
                <div class="massage-prestations-content-list mt-3">
                    <ul class="massage-prestations-list">
                        <div class="flex"><li class="bilan-item">une anamnèse:</li><em class="em-element-massage-second-section" id="massage-presta-2">(voir plus)</em></div>
                        <div id="massage-content-2" class="content-anamnese italic">avant toute séance je procède gratuitement à une analyse personnalisée de vos besoins</div>
                        <li class="bilan-item">Une tisane</li>
                        <div class="flex">
                            <li class="bilan-item">Le massage personnalisé</li><em class="em-element-massage-third-section" id="massage-presta-3">(voir plus)</em>
                        </div>
                        <div id="massage-content-3" class="content-anamnese italic">(parmi les techniques utilisées: les ventouses, la réflexologie énergétique faciale, techniques manuelles)</div>
                    </ul>
                </div>
            </div>
            <div class="line-separator" data-aos="fade-down" data-aos-offset= "250"></div>
            <div class="message-prestation-section-after-line" data-aos="fade-right">
                <h2 class="massage-prestations-title font-semibold">Réflexologie dorsale <b>- 60 € 1h</b></h2>
                <p>Comprend :</p>
                <div class="massage-prestations-content-list mt-3">
                    <ul class="massage-prestations-list">
                        <div class="flex"><li class="bilan-item">une anamnèse:</li><em class="em-element-fourth-section" id="massage-presta-4">(voir plus)</em></div>
                        <div id="massage-content-4"class="content-anamnese italic">avant toute séance je procède gratuitement à une analyse personnalisée de vos besoins</div>
                        <li class="bilan-item">La séance de réflexologie</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

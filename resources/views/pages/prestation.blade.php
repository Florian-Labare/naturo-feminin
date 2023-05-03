<section class="section-prestations p-5 mt-4 max-w-7xl mx-auto md:mt-10">
    <div id="bien-etre-trigger"></div>
    <img class="prestation-title" src="{{url('images/prestations.png')}}" alt="" data-aos="fade-left">
    <div id="bien-etre">
        <h2 class="bien-etre-title text-sm font-semibold uppercase lg:text-lg md:items-center lg:mr-5" data-aos="fade-right">
            Bien-être
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
            qualité de vie et des conditions de travail
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
                        <div class="square light-green square-line-chart-2 rounded-bl-lg"></div>
                        <div class="ml-5">
                            <div class="flex">
                                <span class="line-paragraphe"><strong>Une perte de 21%</strong> d’efficacité chez les collaborateurs non enthousiastes et non épanouis. <br> <em><i></i>voir plus</em> </span>
                                <a href="#content-etude" id="line-chart-accordion"><i id="toggleChartLineButton" class="fas fa-add" style="color: #efafab"></i></a>
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
</section>

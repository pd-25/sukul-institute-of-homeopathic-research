@extends('website.main.main')
@section('content')
@include("website.banner-component")

    <section id="marqe-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-4 redCol mb-0">
                    <p>Archive on Homoeopathy</p>
                </div>
                <div class="col-lg-10 col-8">
                    <div class="marquee-box">
                        <marquee direction="right">
                            <ul>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                                <li>Contributor Generously, as We Preserve History of Homoeopathy! </li>
                            </ul>

                        </marquee>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="profile-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 profile-head">
                    <h2>Our Profile</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dui elit, bibendum vitae metus
                        non, dignissim vehicula elit. Ut id porta massa. Aliquam viverra, metus ac condimentum
                        scelerisque, libero sem pretium lorem, nec tincidunt tortor massa eu turpis. Praesent eget
                        aliquam velit. Vivamus viverra vulputate venenatis. Donec vel venenatis massa. Aliquam erat
                        volutpat.</p>
                </div>
                <div class="col-lg-4">
                    <div class="profile-box">
                        <img src="{{asset("f_assets/images/pro-pic1.jpg")}}" class="img-fluid" alt="...">
                        <h3>Prof. Nirmal C Sukul</h3>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                href="mailto:sukulinst@gmail.com">sukulinst@gmail.com</a></p>
                        <a href="#" class="rm-btn" data-toggle="modal" data-target="#exampleModal">View
                            Profile <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-left">
                                                <h3 class="mb-0">Prof. Nirmal C Sukul</h3>
                                                <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                                        href="mailto:sukulinst@gmail.com">sukulinst@gmail.com</a></p>
                                            </div>
                                            <div class="col-lg-12">
                                                <img src="{{asset("f_assets/images/pro-pic1.jpg")}}" class="img-fluid w-100 mb-3" alt="...">
                                            </div>


                                            <div class="col-lg-12 text-left p-3">
                                                <h4>1. Taxonomy : Nematodes:</h4>
                                                <p> 15 new species, 4 new genera and one new family of soil nematodes
                                                    described.</p>
                                                <h4>2. Nematode behavior:</h4>
                                                <p>Demonstated that the orientation of nematodes in electric fields as
                                                    well as in soil environment is mediated through cations. Hypothesis:
                                                    Nematodes are thought to sample their environment by sensing the
                                                    potential change resulting from any disturbance of ionic atmosphere
                                                    of the anionic amphidial molecules in a concentration gradient of
                                                    cations in their enviroment (soil).</p>
                                                <h4>3. Nematode ecology:</h4>
                                                <ul>
                                                    <li>In the nematode community dynamics in soil peak populations are
                                                        mostly formed of a single species. The patterns of population
                                                        fluctuation of individual species in different seasons have been
                                                        found to differ from each other showing minimal inter specific
                                                        competition.</li>
                                                    <li>The pathogenic effect (root-galling) of root knot nematoes is
                                                        independent of soil types( sand,clay,lateritic) studies. </li>
                                                </ul>
                                                <h4>Plant pathology:</h4>
                                                <ul>
                                                    <li>Root-protein content in host plants is directly proportional to
                                                        the intensity of nematode (root-knot) infestation.</li>
                                                    <li>The susceptibility of a host plant to root-knot nematodes
                                                        depends on its age with growth hormone IAA playing the key role.
                                                    </li>
                                                    <li>Unlike uninfected (by root-knot nematodes) plants,
                                                        nematode-infected plants show unequal distribution of lectins in
                                                        galled roots ( more in galls).</li>
                                                </ul>
                                                <h4>Nematode Control:</h4>
                                                <ul>
                                                    <li>Nematicidal properties reported in 18 species of plants.</li>
                                                    <li>Nematicidal principles discovered in 6 species of plants (formic
                                                        acid in poly gonum hydropiper, eugenol in Ocimum sanctum,
                                                        linalool in O.basilicum, solamargine in Solanum viarum,
                                                        acadiasides in Acacia Auriculiformis, essential oils in Xanthium
                                                        Strumarium).</li>
                                                    <li>Root-knot nemadode extract induces resistance to root-knot
                                                        disease in plants.</li>
                                                </ul>
                                                <h4>Acnylostomiasis and filariasis:</h4>
                                                <ul>
                                                    <li>Hook-worm larvae cannot penetrate healthy skin of man but only
                                                        through interdigital dermatitis where stratum cornium is broken.
                                                    </li>
                                                    <li>Endemicity of human lymphatic filariasis restricted to
                                                        non-flooded areas.</li>
                                                    <li>Antifilarial properties reported in 7 species of plants. </li>
                                                </ul>
                                                <h4>Neuropharmacology:</h4>
                                                <ul>
                                                    <li>Alpha nor – adrenergic agonists promote catalepsy in albino
                                                        mice.Catalepsy and hypokinasia are two different phenomena.</li>
                                                    <li>Developed a highly sensitive inclined floor model for testing
                                                        catalepsy in mice.</li>
                                                </ul>
                                                <h4>Alocoholism:</h4>
                                                <ul>
                                                    <li>Demonstrated that the extract from the seeds of Strychnos
                                                        nuxvomica reduces voluntary ethanol intake in rats.</li>
                                                </ul>
                                                <h4>IGH dilution effects:</h4>
                                                <ul>
                                                    <li>Developed three non-sacrifice animal models to demonstrate the
                                                        biological effects of potentized homeopathic drgs at ultra high
                                                        dilution ( mice, rats,toads). </li>
                                                    <li>Demonstrated that potentized homeopathic drugs act through oral
                                                        receptors in mammals.</li>
                                                    <li>Demonstrated that potentized Nux vomica can help in regeneration
                                                        of alcohol-induced degeneration of adrenergic nerve plexus in
                                                        the atrioventricular valve of rats.</li>
                                                    <li>Demonstrated that potentized homeopathic drugs have
                                                        characteristic NMR,IR and UV spectra. Hypothesis: Hydrogen
                                                        bonding differs with different potentized drugs.</li>
                                                    <li>Introduced sonication for succussion in producing effective
                                                        homeopathic potencies.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="profile-box">
                        <img src="{{asset("f_assets/images/pro-pic2.jpg")}}" class="img-fluid" alt="...">
                        <h3>Dr. Anirban Sukul</h3>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                href="maailto:anirsukul@gmail.com">anirsukul@gmail.com</a></p>
                        <a href="#" class="rm-btn" data-toggle="modal" data-target="#exampleModal2">View
                            Profile <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>



                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-left">
                                                <h3 class="mb-0">Dr. Anirban Sukul</h3>
                                                <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                                        href="mailto:anirsukul@gmail.com">anirsukul@gmail.com</a></p>
                                            </div>
                                            <div class="col-lg-12">
                                                <img src="{{asset("f_assets/images/pro-pic2.jpg")}}" class="img-fluid w-100 mb-3"
                                                    alt="...">
                                            </div>


                                            <div class="col-lg-12 text-left p-3">
                                                <p> Dr Anirban Sukul completed his schooling from Patha Bhavana,
                                                    Santiniketan. He later studied in the Faculty of Science for his
                                                    graduation in Zoology and completed the Masters on the same field
                                                    from Visva-Bharati, a central University in 1996.</p>
                                                <p> Dr Sukul then started working as a PhD student on an area that,
                                                    then, has got little exposure to the scientists. The research in the
                                                    field of Ultra High Dilution Pharmacology was itself considered as
                                                    the stumbling block because of several factors associated with. Dr
                                                    Sukul initially engaged on animal model experiments to put forward
                                                    that homeopathic drugs also act on animals other than human being.
                                                </p>
                                                <p> He first published his paper entitled “Reduction of alcohol induced
                                                    sleep time in albino mice by potentized Nux vomica prepared with 90%
                                                    ethanol” came out in the British Homeopathic Journal in 1999. A
                                                    collaborative research on Neuropharmacology using homeopathic drugs
                                                    with the Institute of Biocybernetics, Naples, Italy of which Dr
                                                    Anirban Sukul was one of the scientist. Dr Sukul also visited the
                                                    Institute of Biocybernetics, Naples, Italy and delivered lecture
                                                    there.</p>
                                                <p> Soon after the return from Italy Dr Anirban Sukul put forward his
                                                    hypothesis on the mode of action of a potentized homeopathic drug in
                                                    mice. Dr Sukul then able to find out the difference between two
                                                    homeopathic potencies and the difference between potencies (like 30
                                                    and 200) of a single drug. He worked with the scientists in National
                                                    Institute of Mental Health and Neurosciences (NIMHANS), Bangalore,
                                                    India, National Center for Biological Research (NCBS), Bangalore,
                                                    India and Indian Institute of Science (IISc) Bangalore, India. He
                                                    awarded his PhD degree from Visva-Bharati University in the year
                                                    2001. Since his work mostly relates with homeopathy he has undergone
                                                    a diploma course in Homeopathy from Royal London Homeopathic
                                                    Hospital. He later completed the degree course in homeopathy. He
                                                    underwent the research associateship under the University Grants
                                                    Commission and worked on the growth of gonads by injecting the
                                                    ethanolic extract of Cantharis in catfish.</p>
                                                <p><b>Title of the PhD thesis:</b> Effect of some potentized drugs on
                                                    the catalepsy and righting reflex of mice.</p>
                                                <p><b>Present position:</b> Lecturer, Department of Pharmacy, NCC
                                                    Homeopathic Medical College & Hospital, Howrah, West Bengal, India.
                                                </p>
                                                <p><b>Position held:</b> Research Associate, DSA (UGC) Programme,
                                                    Department of Zoology, Visva-Bharati University, Santiniketan,
                                                    India.</p>
                                                <p><b>Presented paper in seminars:</b> 16</p>
                                                <p><b> Paper published:</b> 18</p>
                                                <p> Subject of research – Neuropharmacology and Homeopathy</p>
                                                <h4> Workshop Attended:</h4>
                                                <ul>
                                                    <li>Emerging Trends in Neurophysiology organized by National
                                                        Institute of Mental Health and Neurosciences (NIMHANS) and
                                                        National Centre for Biological Sciences (NCBS), Bangalore, India
                                                        during March 1-12, 1999.</li>
                                                    <li>International course on Memory and Emotion organized by
                                                        International School of Biocybernetics, Naples, Italy during
                                                        October 18-23, 1999.</li>
                                                    <li>National Workshop on Solid State NMR: Practice and Prospects
                                                        organized by Sophisticated Instruments Facility, Indian
                                                        Institute of Science, Bangalore, India during November 5-7,
                                                        2001.</li>
                                                </ul>
                                                <p> Received grants of 1,500,000 Italian lires from Istituto Italiano
                                                    per gli Studi Filosofici for attending a workshop in Naples, Italy
                                                    in 1999.</p>
                                                <p> Recipient of JUNIOR SCIENTIST AWARD 2002 awarded by Dr.
                                                    S.P.Chatterjee Memorial Health Association, Jamshedpur, India.</p>
                                                <h4> Research for doctoral degree:</h4>
                                                <p>Topics:</p>
                                                <ul>
                                                    <li>Effect of neurotransmitter drugs on experimental catalepsy in
                                                        mice. </li>
                                                    <li>Alcoholism: Antialcoholic effects of few homeopathic drugs on
                                                        the loss of righting reflex in mice.</li>
                                                    <li>Electronic and NMR spectra of few homeopathic drugs tested.
                                                    </li>
                                                </ul>
                                                <h4> Post-doctoral work: </h4>
                                                <p>Topics:</p>
                                                <ul>
                                                    <li>Anti alcoholic drugs of plant origin, homeopathic on voluntary
                                                        ethanol intake in rats.</li>
                                                    <li>Anti alcoholic drugs of plant origin, homeopathic on
                                                        alcohol-induced loss of righting reflex in tadpoles, toads and
                                                        mice.</li>
                                                    <li>Anti alcoholic drugs of plant origin, homeopathic on
                                                        alcohol-induced degeneration of adrenergic nerve plexus in the
                                                        atrio-ventricular valves of mice.</li>
                                                    <li>Physical properties of the homeopathic drugs tested using UV-VIS
                                                        Spectrophotometer, IR and NMR.</li>
                                                </ul>
                                                <p> Instruments operated: HPLC, UV-VIS Spectrophotometer, IR
                                                    Spectrophotometer, Sonicator, Spectrofluorimeter,
                                                    Electrophysiological recording unit with oscilloscope, Cooling
                                                    Ultra-centrifuge, Micro balance, pH meter etc. </p>
                                                <p> Co-author of a book "High Dilution Effects: Physical and Biological
                                                    basis” published by Kluwer Academic Publishers, The Netherlands.
                                                    2004.</p>
                                                <p> Translated in Italian language “ Farmacologia dellealte diluizioni:
                                                    Studi Biochimici E Fisici Sul Medicinale Omeopatico” published by
                                                    Salus Infirmorum.2005. </p>
                                                <h4>Conferences / Seminars / Workshop attended: </h4>
                                                <ul>
                                                    <li>49th International LMHI Congress during March 3-7, 1995, Vigyan
                                                        Bhaban, New Delhi, India 0rganized by LMHI. – Participant.</li>
                                                    <li>Second Global Meet on Parasitic Diseases during August 18-22,
                                                        1997, Hyderabad, India organized by Indian Society for
                                                        Parasitology. – Poster presentation.</li>
                                                    <li>International Conference on Ecological Engineering during
                                                        November 23-27, 1998, Calcutta, India organized by University of
                                                        Kalyani. – Speaker.</li>
                                                    <li>IXth HMAI Seminar during November 25-26, 1995, Pune organized by
                                                        HMAI. – Participant.</li>
                                                    <li>National seminar on Fish Biology during March 17-19, 1997,
                                                        Santiniketan, organized by the Department of Zoology,
                                                        Visva-Bharati University. – Participant.</li>
                                                    <li>Xth HMAI Seminar during October 19-20, 1997, Kanpur organized by
                                                        HMAI. – Speaker.</li>
                                                    <li>National seminar on Environmental Biology during April 3-5,1998,
                                                        Santiniketan organized by the Department of Zoology,
                                                        Visva-Bharati University. – Participant.</li>
                                                    <li>Seminar on Genetic Disorder – A Therapeutic Solution during
                                                        September 20-21, 1998, Jamshedpur organized by Dr. S. P.
                                                        Chatterjee Memorial Health Association. – Speaker.</li>
                                                    <li>National seminar on Environmental Biology and Fish Biology
                                                        during April 6-7,1999, Santiniketan organized by the Department
                                                        of Zoology, Visva-Bharati University. – Speaker.</li>
                                                    <li>Seminar on Sex – A Global View Point during November 28-30,
                                                        1999, Jamshedpur organized by Dr. S. P. Chatterjee Memorial
                                                        Health Association. – Speaker.</li>
                                                    <li>Seminar on Drug Induced Disease during September 22-23,2001,
                                                        Jamshedpur organized by Dr. S. P. Chatterjee Memorial Health
                                                        Association. – Speaker.</li>
                                                    <li>Seminar on Homeopathy:zero molecules through macromolecules.
                                                        February 19, 2006.Calcutta.India. – Speaker.</li>
                                                </ul>
                                                <h4> International / National workshop: </h4>
                                                <ul>
                                                    <li>International workshop on Memory and Emotion during October
                                                        18-23, 1999, Naples, Italy organized by International School of
                                                        Biocybernetics. – Oral presentation.</li>
                                                    <li>Workshop on the Emerging Trends in Neurophysiology during March
                                                        1-12, 1999, Bangalore organized by National Institute for Mental
                                                        Health and Neurosciences (NIMHANS) and National Centre for
                                                        Biological Sciences (NCBS). – Participant by selection.</li>
                                                    <li>National Workshop on Solid State NMR: Practice and Prospects
                                                        during November 5-7 , 2001 organized by Sophisticated
                                                        Instruments Facility, Indian Institute of Science, Bangalore.
                                                        Participant by selection. </li>
                                                </ul>
                                                <h4> Previous Employment</h4>
                                                <ul>
                                                    <li> Research Fellow, Dr. B. N. Chakravarty Foundation, 5, Subal
                                                        Koley Lane, HOWRAH 1, West Bengal, India.</li>
                                                    <li> Topic: Spectroscopic studies of drugs at ultra high dilutions.
                                                    </li>
                                                    <li> Lecturer, Department of Zoology, Bolpur College, Bolpur 731
                                                        204, West Bengal, India.</li>
                                                </ul>
                                                <h4>Topic of interests</h4>
                                                <ul>
                                                    <li>Spectroscopic studies of homeopathic drugs, particularly NMR,
                                                        FTIR, and UV studies.</li>
                                                    <li>Biological effects of homeopathic drugs on fish, toads, mice and
                                                        rats.</li>
                                                    <li>Fluorescence spectra of homeopathic drugs at ultra high
                                                        dilution. </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="profile-box">
                        <img src="{{asset("f_assets/images/pro-pic3.jpg")}}" class="img-fluid" alt="...">
                        <h3>Dr. Soma Sukul</h3>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                href="mailto:sukulinst@gmail.com">sukulinst@gmail.com</a></p>
                        <a href="#" class="rm-btn" data-toggle="modal" data-target="#exampleModal3">View
                            Profile <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>

                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-left">
                                                <h3 class="mb-0">Dr. Soma Sukul</h3>
                                                <p><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                                        href="mailto:anirsukul@gmail.com">anirsukul@gmail.com</a></p>
                                            </div>
                                            <div class="col-lg-12">
                                                <img src="{{asset("f_assets/images/pro-pic3.jpg")}}" class="img-fluid w-100 mb-3"
                                                    alt="...">
                                            </div>


                                            <div class="col-lg-12 text-left p-3">
                                                <p>Dr. Soma Sukul nee Chunari, PhD</p>
                                                <p> Assistant Professor II</p>
                                                <p> Department of Botany, Visva-Bharati (A Central University),
                                                    Santiniketan, India.</p>
                                                <h4>Conferences/Seminars attended by the research scholars under
                                                    supervision 2009-2010:</h4>
                                                <ul>
                                                    <li>National Seminar on “Climate Change and Vector borne disease” by
                                                        The Asiatic Society collaboration with Post graduate department
                                                        of Zoology, Asutosh College, Kolkata on 6th February,2010.</li>
                                                    <li> International Seminar on “Darwin and Human Evolution” by The
                                                        Asiatic Society from 10-12th February, 2010 </li>
                                                    <li>International conference on “Mother Earth: Save it for future
                                                        generations” by Dept of Environmental Science, The University of
                                                        Burdwan, West Bengal from 13-15th February, 2010 -Speaker.</li>
                                                    <li> International Conference on “Recent trends on homeopathy” by
                                                        National Institute of Homeopathy, Kolkata from 19-21th
                                                        February,2010 </li>
                                                </ul>
                                                <h4>Conference/seminars attended by research scholars under supervision
                                                    during 2010-2011:</h4>
                                                <ul>
                                                    <li> National Conference on: “Diversity and Biotechnology of
                                                        Cryptogams” 3rd to 5th December 2010. Conducted Workshop on ‘HOW
                                                        TO WORK OUT WITH FERNS’. </li>
                                                    <li> “International Conference on Homeopathy, molecular to
                                                        organismal level” 10-12 December, 2010, Kolkata. Organised by
                                                        Sukul Institute of Homeopathic Research, Kolkata And
                                                        International Society for Bioregulatory Medicine, London.
                                                        Presented paper on ‘TRANSFER OF EFFECT OF HEAT SHOCK AND DRUG
                                                        TREATMENT FROM ONE PLANT TO ANOTHER THROUGH WATER’.</li>
                                                    <li>National seminar on “Science and Nature: Tagore’s vision and its
                                                        relevance”12-13th March,2011. Organised by Siksha Bhavana,
                                                        Visva- Bharati, Santiniketan. Attended.</li>
                                                </ul>
                                                <h4>Conference/seminars attended by research scholars under supervision
                                                    2011-2012: </h4>
                                                <ul>
                                                    <li> 99th Indian Science Congress from 3-7th Jan, 2012 at KIIT
                                                        University, Bhubaneswar, Odisha. </li>
                                                    <li>XXIII Annual National Conference of Physiological Society of
                                                        India, Physicon 2011 from 21-23 Dec, 2011 at NRI Medical
                                                        College, Guntur, Andhra Pradesh. </li>
                                                    <li>“Ethnobotanical and Phytochemical studies of two Edible Fern” in
                                                        the UGC sponsored National seminar on Essence of Medicinal
                                                        Plants its Cultivation, Conservation & Sustainable Exploitation
                                                        held at Vivekananda Mahavidyalaya, Haripal, Hooghly on 9th
                                                        December, 2011. </li>
                                                    <li> 99th Indian Science Congress from 3-7th Jan, 2012 at KIIT
                                                        University, Bhubaneswar, Odisha. </li>
                                                    <li> “Recent advances in Microbial Biotechnology” at department of
                                                        Botany, Kabi Nazrul College, Murarai, Birbhum during January
                                                        10th-11th, 2012. </li>
                                                    <li> “Medicinal Plants- Biodiversity, Sustainable Utilization and
                                                        Cultivation” held during 14th-15th January, 2012 organized by
                                                        Department of Botany, Visva-Bharati. </li>
                                                    <li> ‘National Seminar on Plant and Microbial resourse’ held on 17-
                                                        18 March, 2012. Organized by Department of Botany,
                                                        Visva-Bharati. </li>
                                                </ul>
                                                <h4>On-going projects:</h4>
                                                <ul>
                                                    <li>The Asiatic Society funded project “Homeopathic potencies, their
                                                        Spectroscopic characteristics and their effect on proteins” from
                                                        May, 2009 -April, 2012.</li>
                                                    <li>UGC funded major project “Study of Pteridophytic flora and its
                                                        Ethanobotany in rarh area, West Bengal” from Feb, 2010-Jan,
                                                        2013.</li>
                                                </ul>
                                                <h4>Publications during April 2009 – March 2010:</h4>
                                                <ul>
                                                    <li>Sukul NC, Singh RK, Sukul (Chunari) S, Sukul A. 2009. Potentized
                                                        Cina reduces root-knot nematode infestation and altered root
                                                        protein profile of Cowpea. Sci. & cult. 75 (7-8) 291- 293.</li>
                                                    <li>Sukul NC, Singh RK, Sukul (Chunari) S, Sen P, Bhattacharya A,
                                                        Sukul A, Chakraborty R. 2009. Homeopathic potencies promote
                                                        growth of Lady’s finger, Abelmoschus esculentus. J. Nat. Hist..
                                                        90-97.</li>
                                                    <li>Sukul (Chunari) S, Mukhopadhyaya R. Spore morphology and mode of
                                                        reproduction of some Indian Lindsaeoid ferns. Phytomorphology.
                                                        (Communicate).</li>
                                                </ul>
                                                <h4>Publications during April 2010-March 2011:</h4>
                                                <ul>
                                                    <li>S Sukul, S Mondal, N C Sukul, 2010, Homeopathic Potencies and
                                                        their mixture with sucrose show differences in their Fourier
                                                        Transform Infrared Spectra, J Asiatic Soc, LII: 25-32. </li>
                                                    <li> Sukul N C, Mondal S, Sukul S (nee Chunari), 2010, Cantharis
                                                        200c may induce expression of small heat shock like proteins in
                                                        Adhatoda vasica leaves, Sci & Cult 76: 540-543. </li>
                                                    <li> Nirmal C Sukul, Soma Sukul, and Sandhimita Mondal, 2011, Plant
                                                        growth inhibitors at ultra high dilution enhance chlorophyll
                                                        content and alter leaf protein profile, J Alt Med Res , 3. In
                                                        press.</li>
                                                </ul>
                                                <h3>Publications during April 2011-March 2012:</h3>
                                                <h4>International Journal </h4>
                                                <ul>
                                                    <li> Sandhimita Mondal, S. Sukul and N. C. Sukul, 2012. Transfer of
                                                        effect of heat shock and drug treatment from one plant to
                                                        another through water. J Altern Med Res; 4 (2).</li>
                                                    <li>Nirmal C Sukul, Soma Sukul, and Sandhimita Mondal, 2011, Plant
                                                        growth inhibitors at ultra high dilution enhance chlorophyll
                                                        content and alter leaf protein profile, J Altern Med Res; 3(2):
                                                        189-194. </li>
                                                </ul>
                                                <h4>National Journal </h4>
                                                <ul>
                                                    <li> Sandhimita Mondal, S. Sukul (nee Chunari), N. C. Sukul and
                                                        Swapan Kr. Rudra, 2012, Homeopathic potencies alter salivary
                                                        protein profile in filarial patients. Sci & Cult. In press.</li>
                                                    <li>Subhajit Mondal, Soma Sukul nee Chunari and Mrinmoy Ghosh, 2012.
                                                        Phytochemicals analysis and screening for active compounds in
                                                        lycopodium cernuum. Indian Fern Journal, Vol. 29 (2012), in
                                                        press</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

<div class="pb-16">
    <section id="home">
        <h2></h2>
        <h4>A votre disposition</h4>
        <p>Obtenez des informations en temp réel avec les données surlignées par nos soins pour vous permettre de puiser
            des sources fiables et essentielles.</p>
        <p>En un clic et une solution.</p>
        <a href="#" class="btn-reservation home-btn">Bienvenue chez vous</a>
        <div class="find_trip">
            <form action="">
                <div>
                    <label>Prenom</label>
                    <input type="text" placeholder="Entrez un Prenom">
                </div>
                <div>
                    <label>Nom</label>
                    <input type="text" placeholder="Entrez un Nom">
                </div>
                <div>
                    <label>Promotion</label>
                    <input type="text" placeholder="Entrez une Promotion">
                </div>
                <input type="submit" value="voir">
            </form>
        </div>
    </section>

    <section id="a-propos">
        <h1 class="title">à propos</h1>
        <div class="img-desc">
            <div class="left">
                <video src="images/Vidéo Labo.MP4.mov" autoplay loop></video>
            </div>
            <div class="right">
                <h3>Les éléments inclus dans ce site est un second guide pour les etudiants de l'UCC ayant pour objectif
                    de se référer sur la prise de commande d'un cours par un professeur sur une période qui le rend
                    disponible.</h3>
                <p>il vous permet de vous conditionner à un rythme de travail qui peut varier selon la tonalité émise
                    par le détenteur.</p>
                <a href="#">Accueil mesuré</a>i
            </div>
        </div>

    </section>

    <!-- section professeurs -->
    <section id="popular-professeurs">
        <h1 class="title">Professeurs répertoriés</h1>
        <div class="grid gap-6 lg:grid-cols-3">
            <!-- box -->
            @forelse ($professeurs as $professeur)

            <div class="box overflow-hidden relative h-[250px] transition">
                <img src="{{Storage::disk('local')->url('/images/'.$professeur->image) }}" alt="">
                <div class="content">
                    <div>
                        <a href="{{route('professeurOne',['id' => $professeur->id])}}" wire:navigate
                            class="text-2xl my-2 hover:underline text-[#29d9d5] cursor-pointer">{{$professeur->nom}}
                            {{$professeur->prenom}}</a>
                        <p>{{$professeur->fonction}}</p>
                        <p>{{$professeur->titre}}</p>
                        <p>{{$professeur->description}}</p>


                    </div>
                </div>
            </div>
            @empty

            @endforelse
            <!-- box -->

            <!-- box -->
        </div>
    </section>

    <!--  contact section -->
    <section id="contact">
        <h1 class="title">Contact</h1>
        <form action="">
            <div class="left-right">
                <div class="left">
                    <label>Nom Complet</label>
                    <input type="text">
                    <label>Objet</label>
                    <input type="text">
                    <label>Email</label>
                    <input type="text">
                    <label>Message</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="right">
                    <label>Numéro</label>
                    <input type="text">
                    <label>Date</label>
                    <input type="text">
                    <label>Autres Details</label>
                    <input type="text">
                    <label>Adresse</label>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.292292615509614!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1647531560805!5m2!1sfr!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <button>Envoyer</button>
        </form>
    </section>
</div>

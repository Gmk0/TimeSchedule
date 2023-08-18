<div>





    <div class="">
        <div class="mx-[10%]  max-w-8xl">
            <form class="gap-4 p-6 m-4 bg-gray-900 " action="">
                <div class="relative">
                    <div class="absolute flex items-center h-full ml-4">
                        <svg class="w-6 h-6 text-gray-100 fill-current" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                            </path>
                        </svg>
                    </div>

                    <input wire:model.live='query' type="text" placeholder="Nom ou Prenom..."
                        class="w-full px-12 py-4 text-white text-base bg-transparent border-[#29d9d5] rounded-md focus:border-[#294d4c]  focus:ring-0">
                </div>

                {{--<div class="flex flex-col gap-1">
                    <label class="text-[16px] text-gray-50">Recherche</label>
                    <input
                        class="w-full px-2  py-3 bg-transparent text-white text-[16px]  border border-[#29d9d5] rounded focus:outline-none"
                        type="text" placeholder="Entrez un Prenom">
                </div>--}}


                <div class="pt-10">



                </div>





            </form>
        </div>
    </div>


    <div id="popular-professeurs">
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

            {{--
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/IMG UCC.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Didier Yangonzela</h4>
                        <p>Cours:Droit océanique et maritime & historique politique.</p>
                        <p>Est un docteur en droit et professeur des universités.</p>
                        <p>Sa présence dans les cours qu'il a en sa possesion intervient sur une période allant du mois
                            de FEVRIER à MARS et début AVRIL.</p>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/Pr.Manzanza .JPG" alt="">
                <div class="content">
                    <div>
                        <h4>Yves Manzanza</h4>
                        <p>Cours:Droit des assurances et droit de la sécurité social.</p>
                        <p>Est un docteur en droit économique et social,ayant une multitudes d'assistant qui assure
                            l'intérim dans une majeur partie de cours qu'il a en sa possesion. </p>
                        <p>sa présence est souvent retenue pour la période qui va du mois DE JANVIER à début Mars.</p>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/Pr.Sakata.JPG" alt="">
                <div class="content">
                    <div>
                        <h4>Garry Sakata</h4>
                        <p>Cours:Droit de la concurrence et droit des contrats commerciaux.</p>
                        <p>Esr un docteur en sciences juridiques et député national en RDC,Garry sakata est membre du
                            parti lumumbiste unifié (Palu).</p>
                        <p>Ayant des occupations politiques bien garnis sa présence au sein de son cours se fait en
                            intermittence,sa présence intervient sur la période allant du mois D'AVRIL à MAI.</p>

                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/IMG UCC.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Jean Louis mukendi ngindu</h4>
                        <p>Cours:Statistiques & mathématiques. </p>
                        <p>Est un docteur en sciences et professeur des universités.</p>
                        <p>Souvent présent en début d'année,il cumule un totale de présence sur une période allant du
                            mois de JANVIER à MARS avant de faire place à des intérimaires.</p>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="images/Pr.Bakandeja.JPG" alt="">
                <div class="content">
                    <div>
                        <h4>Grégoire Bakandeja</h4>
                        <p>Cours:Finances publiques et droit du commerce international.</p>
                        <p>Est un docteur d'Etat en droit Economique.</p>
                        <p>il est un ancien parlementaire de la RDC etc...</p>
                        <p>son expériences passée fait de lui un sage inégalée pour des avis juridiques dans le cadre
                            des projets d'investissements en RD congo.</p>
                        <p>ses conseils sont ardemment recherchés pour des grands projets,sa présence au sein des ses
                            cours sont habituellement retenus pour le mois allant D'OCTOBRE à DECEMBRE.</p>
                    </div>
                </div>
            </div>--}}
            <!-- box -->
        </div>
    </div>

    <div class="items-start justify-start max-w-xl mx-auto my-8 text-white">

        {{$professeurs->links()}}
    </div>








</div>

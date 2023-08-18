<div class="min-h-screen  mx-[10%]">


    <div class="relative grid grid-cols-12">
        <div class="sticky top-[10rem] flex flex-col col-span-4 bg-transparent">
            <div class="p-4 mx-12 w-[50%]">
                <img src="{{Storage::disk('local')->url('/images/'.$professeur->image) }}" class="w-full rounded-full"
                    alt="">
            </div>
            <div class="flex flex-col gap-3 p-4 text-white ">
                <p class="text-lg">{{$professeur->nom}}-{{$professeur->prenom}}</p>
                <p class="text-base">{{$professeur->titre}}</p>
                <p class="text-base">{{$professeur->fonction}}</p>
            </div>

        </div>
        <div class="col-span-8 px-4 mx-2 rounded-md">

            <div class="flex flex-col gap-2 px-4 py-2 ">
                <h1 class="mb-8 text-xl text-center text-gray-100">Description</h1>
                <p class="space-x-0 text-base font-normal text-gray-200 ">

                    {{$professeur->description}}

                </p>

            </div>


            <div class="mt-8">
                <h1 class="mt-4 text-xl text-center text-gray-100">Cours Dispense</h1>

                <div class="w-full mt-8 ">

                    <!-- component -->
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="text-xl bg-transparent border-b">
                                            <tr>
                                                <th scope="col" class="px-6 py-4 font-medium text-left text-gray-100">
                                                    #
                                                </th>
                                                <th scope="col" class="px-6 py-4 font-medium text-left text-gray-100">
                                                    Cours
                                                </th>
                                                <th scope="col" class="px-6 py-4 font-medium text-left text-gray-100">
                                                    Faculte
                                                </th>
                                                <th scope="col" class="px-6 py-4 font-medium text-left text-gray-100">
                                                    Promotion
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $count=1;
                                            @endphp

                                            @forelse ($professeur->courses as $course )

                                            <tr
                                                class="transition duration-300 ease-in-out bg-gray-600 border-b hover:bg-gray-700">
                                                <td
                                                    class="px-6 py-4 text-base font-medium text-gray-100 whitespace-nowrap">
                                                    {{$count++}}</td>
                                                <td
                                                    class="px-6 py-4 text-base font-light text-gray-100 whitespace-nowrap">
                                                    {{$course->intitule}}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-base font-light text-gray-100 whitespace-nowrap">
                                                    {{$course->faculte}}
                                                </td>
                                                <td
                                                    class="px-6 py-4 text-base font-light text-gray-100 whitespace-nowrap">
                                                    {{$course->promotion}}
                                                </td>
                                            </tr>
                                            @empty



                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

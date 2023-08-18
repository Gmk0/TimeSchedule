<div>

    <div class="min-h-screen px-12">

        <div
            class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="mb-4">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                        aria-current="page">courses</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All courses</h1>
                </div>
                <div
                    class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <div class="sm:pr-3" action="#" method="GET">
                            <label for="products-search" class="sr-only">Search</label>
                            <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                <input type="text" wire:model.live='query' name="name" id="products-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search for course">
                            </div>
                        </div>
                        <div class="flex items-center w-full sm:justify-end">
                            <div class="flex pl-2 space-x-1">

                            </div>
                        </div>
                    </div>
                    <button id="createProductButton" wire:click="showModal()"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        type="button">
                        Add new cours
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Cours
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Faculte
                                    </th>
                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Profeseur
                                    </th>

                                    <th scope="col"
                                        class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                @forelse ($courses as $cours)


                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-{{$cours->id}}" aria-describedby="checkbox-1"
                                                type="checkbox"
                                                class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-{{$cours->id}}" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        <div class="text-base font-semibold text-gray-900 dark:text-white">
                                            {{$cours->intitule }}
                                        </div>
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            {{$cours->promotion
                                            }}
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$cours->faculte
                                        }}</td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                        {{$cours->professeur->nomcomplet();
                                        }}</td>


                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <button wire:click="updatecours({{$cours->id}})" type="button"
                                            id="updateProductButton"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                </path>
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Update
                                        </button>
                                        <button type="button" id="deleteProductButton"
                                            wire:click='deleteCours({{$cours->id}})'
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete cours
                                        </button>
                                    </td>
                                </tr>
                                @empty

                                @endforelse

                            </tbody>
                        </table>

                        {{$courses->links()}}
                    </div>
                </div>
            </div>
        </div>


        <x-modal name="add-user" focusable>


            <div class="p-6 space-y-6">
                <form action="#">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <!-- Name -->
                            <div>

                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    Professeur
                                    option</label>
                                <select id="countries" wire:model="cours.professeur_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Choose a country</option>
                                    @foreach ($professeurs as $prof)
                                    <option value="{{$prof->id}}">{{$prof->nomcomplet()}} </option>
                                    @endforeach


                                </select>
                                <x-input-error :messages="$errors->get('cours.professeur_id')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div>
                                <x-input-label for="name" :value="__('Intitule')" />
                                <x-text-input id="name" class="block w-full mt-1" wire:model='cours.intitule'
                                    type="text" name="name" autocomplete="name" />
                                <x-input-error :messages="$errors->get('cours.intitule')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div>
                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    Faculte
                                    option</label>
                                <select id="countries" wire:model="cours.faculte"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a faculte</option>

                                    <option value="Sciences informatique">Sciences informatique</option>
                                    <option value="Economie et Developement">Economie et Developement</option>
                                    <option value="Droit">Droit</option>



                                </select>
                                <x-input-error :messages="$errors->get('cours.faculte')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div>
                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                    Promotion
                                    option</label>
                                <select id="countries" wire:model="cours.promotion"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="">Choose a Promotion</option>

                                    <option value="L1">L1</option>
                                    <option value="L2">L2</option>
                                    <option value="L3">L3</option>



                                </select>
                                <x-input-error :messages="$errors->get('cours.promotion')" class="mt-2" />
                            </div>

                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div>
                                <x-input-label for="name" :value="__('options')" />
                                <x-text-input id="name" class="block w-full mt-1" wire:model='cours.option' type="text"
                                    name="name" autocomplete="name" />
                                <x-input-error :messages="$errors->get('cours.option')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <div>
                                <x-input-label for="name" :value="__('Heures')" />
                                <x-text-input id="name" class="block w-full mt-1" wire:model='cours.heures' type="text"
                                    name="name" autocomplete="name" />
                                <x-input-error :messages="$errors->get('cours.heures')" class="mt-2" />
                            </div>
                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                        <x-secondary-button x-on:click="$dispatch('close')">
                            {{ __('Cancel') }}
                        </x-secondary-button>

                        @if($update)

                        <button wire:click="updateC()"
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="button">Modifier</button>



                        @else
                        <button wire:click="save()"
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="button">Ajouter</button>


                        @endif
                    </div>
                </form>
            </div>

        </x-modal>

    </div>
</div>

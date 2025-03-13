<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-f">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 dark:text-gray-100">
                                Formulaire de création d'un utilisateur
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{-- {{ __('Ensure your account is using a long, random password to stay secure.') }} --}}
                            </p>
                        </header>
                        <form id="profileForm">
                            <!-- Photo de profil -->
                            <div class="mb-6 w-full">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 dark:text-gray-100">Photo
                                    de
                                    profil</label>
                                <div class="flex flex-col items-center">
                                    <div class="mb-4">
                                        <img id="imagePreview" class="preview-image rounded-full border border-gray-300"
                                            src="/api/placeholder/200/200" alt="Aperçu de la photo">
                                    </div>
                                    <input type="file" id="profilePhoto" name="profilePhoto" accept="image/*"
                                        class="hidden" onchange="previewImage(event)">
                                    <label for="profilePhoto"
                                        class="cursor-pointer bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">
                                        Choisir une photo
                                    </label>
                                </div>
                            </div>

                            <!-- Informations personnelles -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Type -->
                                <div class="mb-4">
                                    <label for="type"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Type
                                        d'utilisateurs</label>
                                    <select id="type" name="type"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                                        <option value="" selected disabled>Type d'utilisateurs</option>
                                        <option value="particulier">Particulier</option>
                                        <option value="entreprise">Entreprise</option>
                                    </select>
                                </div>

                                <!-- Pseudo -->
                                <div class="mb-4">
                                    <label for="pseudo"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Pseudo</label>
                                    <input type="text" id="lastName" name="lastName"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>
                            </div>

                            <!-- Info personnelles -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Prenoms -->
                                <div class="mb-4">
                                    <label for="pseudo"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Prénoms</label>
                                    <input type="text" id="lastName" name="lastName"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>

                                <!-- Nom -->
                                <div class="mb-4">
                                    <label for="nom"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nom</label>
                                    <input type="text" id="nom" name="nom"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>

                            </div>
                            <!-- Coordonnees -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>

                                <!-- Adresse -->
                                <div class="mb-4">
                                    <label for="adresse"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Adresse</label>
                                    <input type="text" id="adresse" name="adresse_geographique"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>

                                <!-- Adresse -->
                                <div class="mb-4">
                                    <label for="adresse"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Adresse</label>
                                    <input type="text" id="adresse" name="adresse_geographique"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                        required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Secteur -->
                                <div class="mb-4">
                                    <label for="secteur_activite"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Secteur
                                        d'activité
                                    </label>
                                    <select id="secteur_activite" name="secteur_activite"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                                        <option value="" selected disabled>Selectionner un secteur d'activité
                                        </option>
                                        @foreach ($secteurs as $secteur)
                                            <option value="{{ $secteur->libelle }}">{{ $secteur->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Cetre d'interet -->
                                <div class="mb-4">
                                    <label for="centre_interet"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Centre
                                        d'interêt
                                    </label>
                                    <select id="centre_interet" name="centre_interet"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                                        <option value="" selected disabled>Selectionner un Centre
                                            d'interêt
                                        </option>
                                        @foreach ($secteurs as $secteur)
                                            <option value="{{ $secteur->libelle }}">{{ $secteur->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Secteur -->
                                <div class="mb-4">
                                    <label for="secteur_activite"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Secteur
                                        d'activité
                                    </label>
                                    <select id="secteur_activite" name="secteur_activite"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                                        <option value="" selected disabled>Selectionner un secteur d'activité
                                        </option>
                                        @foreach ($secteurs as $secteur)
                                            <option value="{{ $secteur->libelle }}">{{ $secteur->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Cetre d'interet -->
                                <div class="mb-4">
                                    <label for="centre_interet"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Centre
                                        d'interêt
                                    </label>
                                    <select id="centre_interet" name="centre_interet"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                                        <option value="" selected disabled>Selectionner un Centre
                                            d'interêt
                                        </option>
                                        @foreach ($secteurs as $secteur)
                                            <option value="{{ $secteur->libelle }}">{{ $secteur->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <!-- Téléphone -->
                            <div class="mb-4">
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Téléphone</label>
                                <input type="tel" id="phone" name="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 dark:text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>

                            <!-- Date de naissance -->
                            <div class="mb-4">
                                <label for="birthDate"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Date de
                                    naissance</label>
                                <input type="date" id="birthDate" name="birthDate"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 dark:text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>

                            <!-- Adresse -->
                            <div class="mb-4">
                                <label for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Adresse</label>
                                <textarea id="address" name="address" rows="2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 dark:text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                            </div>

                            <!-- Pays -->
                            <div class="mb-4">
                                <label for="country"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Pays</label>
                                <select id="country" name="country"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 dark:text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" selected disabled>Sélectionner un pays</option>
                                    <option value="FR">France</option>
                                    <option value="BE">Belgique</option>
                                    <option value="CH">Suisse</option>
                                    <option value="CA">Canada</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>

                            <!-- Biographie -->
                            <div class="mb-4">
                                <label for="bio"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Biographie</label>
                                <textarea id="bio" name="bio" rows="4"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 dark:text-gray-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                            </div>

                            <!-- Centres d'intérêt -->
                            <div class="mb-6">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">Centres
                                    d'intérêt</label>
                                <div class="flex flex-wrap gap-2">
                                    <div class="flex items-center">
                                        <input id="interest1" type="checkbox" name="interests[]" value="sport"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="interest1"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Sport</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="interest2" type="checkbox" name="interests[]" value="music"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="interest2"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Musique</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="interest3" type="checkbox" name="interests[]" value="travel"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="interest3"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Voyage</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="interest4" type="checkbox" name="interests[]" value="tech"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="interest4"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Technologie</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="interest5" type="checkbox" name="interests[]" value="art"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="interest5"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Art</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Boutons -->
                            <div class="flex justify-end space-x-2">
                                <button type="reset"
                                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                                    Annuler
                                </button>
                                <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Créer le profil
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }

        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Ici, vous pouvez ajouter le code pour envoyer les données du formulaire
            // Par exemple, avec fetch API ou une autre méthode
            alert('Profil créé avec succès !');
        });
    </script>
</x-app-layout>

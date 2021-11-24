<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deine Übersicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dein aktueller BMI beträgt:
                </div>
            </div>
        </div>
            <!DOCTYPE html>
            <html>
                <head>
                    <script>
                        $(document).ready(function(){
                        $("#hide").click(function(){
                            $("p").hide();
                        });
                        $("#show").click(function(){
                            $("p").show();
                        });
                        });
                    </script>
                </head>
                    <body>

                        <p>If you click on the "Hide" button, I will disappear.</p>

                        <button id="hide">Hide</button>
                        <button id="show">Show</button>

                    </body>
            </html>
    </div>
</x-app-layout>

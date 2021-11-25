<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BMI-Rechner ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Berechne deinen aktuellen BMI:
                    <div class="container">
                            <p>Größe (in cm)</p>
                            <input type="text" id="height">
                            <p>Gewicht (in kg)</p>
                            <input type="text" id="weight">
                            <button id="btn">Berechnen</button>
                            
                    </div>
                    <div id="result"></div>
                    <h1>Auswertung:</h1>
                    <div id="auswertung">
                        <div id="bewertung"></div>
                            <p>Der BMI ist keine eindeutige Kennzahl um eine qualifizierte Aussage über Über-, Unter- oder Normalgewicht treffen zu können. 
                                Bitte berücksichtigen Sie dies und lassen Sie Ihr Ergebnis von einem Arzt prüfen.</p>
                    </div>
                        <button id="hide">Ausblenden</button>
                        <button id="show">Anzeigen</button>
                </div>
            </div>
        </div>
            <!DOCTYPE html>
            <html>
                <head>
                    <script>
                            $(document).ready(function(){
                                $("#auswertung").hide();
                                $("#hide").hide();
                                
                            });
                            
                            /*function buttoncheck(){
                            if(i = 1){
                                $("#hide").hide();
                                
                            } else(i = 2) {
                                $("#show").hide();
                                i = 1;
                            }};*/

                                    $("#hide").click(function(){
                                        $("#auswertung").hide();
                                        $("#hide").hide();
                                        $("#show").show();
                                        
                                    });
                                    $("#show").click(function(){
                                        $("#auswertung").show();
                                        $("#show").hide();
                                        $("#hide").show();
                                      
                                    });
                    </script>
                    <script>
                                window.onload = () => {
                                let button = document.querySelector("#btn");
                            
                                button.addEventListener("click", calculateBMI);
                                };
                            
                                function calculateBMI() {
                            
                                    let height = parseInt(document
                                            .querySelector("#height").value);
                            
                                    let weight = parseInt(document
                                            .querySelector("#weight").value);
                            
                                let result = document.querySelector("#result");
                            
                                //Keine Eingabe
                                    if (height === "" || isNaN(height)) 
                                        result.innerHTML = "Bitte geben Sie ein Wert für die Größe ein!";
                                
                                    else if (weight === "" || isNaN(weight)) 
                                        result.innerHTML = "Bitte geben Sie ein Wert für das Gewicht ein!";
                            
                                
                                else {
                            
                                    //BMI-Formel
                                    let bmi = (weight / ((height * height) 
                                                        / 10000)).toFixed(2);
                                    
                                    result.innerHTML =
                                        `Ihr BMI beträgt : <span>${bmi}</span>`;

                                    //Bewertung
                                    if (bmi < 18.6) bewertung.innerHTML =
                                        `Mit Ihrem BMI von <span>${bmi}</span> zählen Sie als untergewichtig.`;
                            
                                    else if (bmi >= 18.6 && bmi < 24.9) 
                                    bewertung.innerHTML = 
                                        `Mit Ihrem BMI von <span>${bmi}</span> zählen Sie als normalgewichtig.`;
                            
                                    else bewertung.innerHTML =
                                        `Mit Ihrem BMI von <span>${bmi}</span> zählen Sie als übergewichtig.`;
                                }
                            }
                    </script>
                </head>
                <body> 
                    
                </body>
            </html>
</x-app-layout>
  



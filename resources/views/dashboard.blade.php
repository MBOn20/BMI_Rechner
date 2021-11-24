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

                        
                    <p>Auf Grundlage Ihres aktuellen BMIs wird Ihnen vorgeschlagen: </p>

                        <button id="hide">Hide</button>
                        <button id="show">Show</button>

                       


                    </body>
            </html>
    </div>
</x-app-layout>
<html>
  
<head>
    <!-- Include JS files -->
    
</head>
  
<body>
    <div class="container">
        <h1>BMI Calculator</h1>
  
        <!-- Option for providing height 
            and weight to the user-->
        <p>Height (in cm)</p>
  
        <input type="text" id="height">
  
        <p>Weight (in kg)</p>
  
        <input type="text" id="weight">
  
        <button id="btn">Calculate</button>
  
        <div id="result"></div>
    </div>
</body>
  
</html>
<script>
window.onload = () => {
    let button = document.querySelector("#btn");
  
    // Function for calculating BMI
    button.addEventListener("click", calculateBMI);
};
  
function calculateBMI() {
  
    /* Getting input from user into height variable.
    Input is string so typecasting is necessary. */
    let height = parseInt(document
            .querySelector("#height").value);
  
    /* Getting input from user into weight variable. 
    Input is string so typecasting is necessary.*/
    let weight = parseInt(document
            .querySelector("#weight").value);
  
    let result = document.querySelector("#result");
  
    // Checking the user providing a proper
    // value or not
    if (height === "" || isNaN(height)) 
        result.innerHTML = "Provide a valid Height!";
  
    else if (weight === "" || isNaN(weight)) 
        result.innerHTML = "Provide a valid Weight!";
  
    // If both input is valid, calculate the bmi
    else {
  
        // Fixing upto 2 decimal places
        let bmi = (weight / ((height * height) 
                            / 10000)).toFixed(2);
  
        // Dividing as per the bmi conditions
        if (bmi < 18.6) result.innerHTML =
            `Under Weight : <span>${bmi}</span>`;
  
        else if (bmi >= 18.6 && bmi < 24.9) 
            result.innerHTML = 
                `Normal : <span>${bmi}</span>`;
  
        else result.innerHTML =
            `Over Weight : <span>${bmi}</span>`;
    }
}</script>

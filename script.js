/* mudar de background*/

document.addEventListener('DOMContentLoaded', function() {
    const backgrounds = ['background-image1', 'background-image2', 'background-image3'];
    let current = 0;
    
    setInterval(() => {
        const container = document.getElementById('background-container');
        container.classList.remove(backgrounds[current]);
        current = (current + 1) % backgrounds.length;
        container.classList.add(backgrounds[current]);
    }, 5000); // Muda a cada 5 segundos
});


  // Date and time
 var now = new Date();
 document.getElementById("time").innerHTML = datetime;

    // show text 
 function showText() {
    var hiddenElement = document.getElementById("hiddenText");
    hiddenElement.classList.remove("hidden-element");
}








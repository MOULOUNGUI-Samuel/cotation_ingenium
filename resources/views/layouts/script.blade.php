
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<!-- Script JavaScript -->
<script>
    function toggleDialog() {
const popupContainer = document.getElementById('popupContainer');
popupContainer.classList.toggle('hidden');

// Lance l'effet de dactylographie uniquement si le pop-up est visible
if (!popupContainer.classList.contains('hidden')) {
 typeWriter();
}
}

function closeOnClickOutside(event) {
const popupContainer = document.getElementById('popupContainer');
// Vérifie si l'utilisateur a cliqué en dehors du contenu
if (event.target === popupContainer) {
 toggleDialog();
}
}

// Fonction pour l'effet de dactylographie
function typeWriter() {
const textElement = document.getElementById('dialogText');
const fullText = textElement.textContent; // Récupère le texte existant dans la balise <p>
textElement.textContent = ''; // Réinitialise le texte avant de le rédiger à nouveau
let index = 0;

function type() {
 if (index < fullText.length) {
     textElement.textContent += fullText.charAt(index);
     index++;
     setTimeout(type, 8); // Vitesse de dactylographie, ajustable en millisecondes
 }
}

type();
}

 </script>
<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
<script>
 var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {
        // Toggle icons inside the button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // If set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        } else {
            // If NOT set via local storage previously
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
    
</script>

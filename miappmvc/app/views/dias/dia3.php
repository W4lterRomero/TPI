<!-- Página de Error 404 - Días de Lluvia -->
<div class="min-h-screen bg-gradient-to-b from-gray-400 via-gray-500 to-gray-600 flex items-center justify-center px-4">
    <div class="max-w-2xl mx-auto text-center">
 
        <div class="relative mb-8">
            <div class="rain-container">
                <div class="rain-drop" style="left: 10%; animation-delay: 0s;"></div>
                <div class="rain-drop" style="left: 20%; animation-delay: 0.2s;"></div>
                <div class="rain-drop" style="left: 30%; animation-delay: 0.4s;"></div>
                <div class="rain-drop" style="left: 40%; animation-delay: 0.6s;"></div>
                <div class="rain-drop" style="left: 50%; animation-delay: 0.8s;"></div>
                <div class="rain-drop" style="left: 60%; animation-delay: 1s;"></div>
                <div class="rain-drop" style="left: 70%; animation-delay: 1.2s;"></div>
                <div class="rain-drop" style="left: 80%; animation-delay: 1.4s;"></div>
                <div class="rain-drop" style="left: 90%; animation-delay: 1.6s;"></div>
            </div>
        </div>

        <div class="mb-8">
            <h1 class="text-9xl font-bold text-white opacity-80 mb-4">404</h1>
        </div>


        <div class="bg-white bg-opacity-90 rounded-xl p-8 mb-8 shadow-lg">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">¡Oops! Día Lluvioso</h2>
        </div>
    </div>

    <div>
        <img src="/images/laselecta.jpeg" alt="">
    </div>
</div>

<style>
    .rain-container {
        position: relative;
        height: 100px;
        overflow: hidden;
    }
    
    .rain-drop {
        position: absolute;
        top: -10px;
        width: 2px;
        height: 20px;
        background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.8), transparent);
        animation: rain-fall 2s linear infinite;
    }
    
    @keyframes rain-fall {
        0% {
            transform: translateY(-20px);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(120px);
            opacity: 0;
        }
    }
    .transition-colors {
        transition: all 0.3s ease;
    }
</style>
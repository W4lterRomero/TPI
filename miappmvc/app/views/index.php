<!-- Contenido principal de la página de inicio -->
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
         
            <h1 class="text-4xl md:text-6xl font-bold mb-6">SDS2025</h1>
            <div class="mb-8">
                <div class="bg-[url('/images/sds.jpg')] h-60 bg-cover bg-center rounded-lg mx-auto max-w-2xl shadow-2xl"></div>
            </div>
            
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Semana de Sistemas 2025 - Universidad Nacional de El Salvador
            </p>
        </div>
    </section>
    <!-- Historia Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Historia de Ing En Sistemas</h2>
                    <div class="historia-basica space-y-4">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            En los años 2012, se creó la Asociación de Estudiantes de Ingeniería en Sistemas Informáticos (ASEIS)
                            todo esto debido a las injusticias, malos tratos y abusos que sufrían por parte de los docentes de ese entonces, además de el hecho de que por motivos de recursos económicos les tocaba ir a finalizar
                        la carrera a San Salvador, cosa que no muchos se podían permitir, es por ello que debido a todo esto los estudiantes decidieron organizarse y crear ASEIS, es por ello que cada segunda semana de octubre se celebra la semana de sistemas
                    en honor a aquellos valientes estudiantes que decidieron hacer valer sus derechos, que decidieron ser escuchados, que decidieron decir "¡Basta!".</p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Esta página web es una tarea en la cual se exploran todas las maravillosas actividades que se realizan en la semana de sistemas, es por ello que puedes navegar para descrubrir lo maravilloso de la semana de sistemas
                        </p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-80 h-80 rounded-full overflow-hidden shadow-2xl">
                        <img src="/images/aseis.jpg" alt="Foto de perfil" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="registro">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Regístrate para más información</h2>
                
                <?php if (isset($_GET['mensaje'])): ?>
                    <?php if ($_GET['mensaje'] === 'exito'): ?>
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                            ¡Gracias por registrarte! Tu visita ha sido guardada exitosamente.
                        </div>
                    <?php elseif ($_GET['mensaje'] === 'error'): ?>
                        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
                            Ocurrió un error al procesar tu registro. Por favor, intenta nuevamente.
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                
                <form action="/registrar-visita" method="POST" class="space-y-6 max-w-md mx-auto" id="formulario-registro">
                    <div>
                        <label for="nombre" class="block text-left text-lg font-medium text-gray-700 mb-2">Nombre Completo *</label>
                        <input type="text" id="nombre" name="nombre" required 
                               pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}"
                               title="Solo letras y espacios, entre 2 y 50 caracteres"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-left text-lg font-medium text-gray-700 mb-2">Correo Electrónico *</label>
                        <input type="email" id="email" name="email" required 
                               pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                               title="Formato de email válido"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="telefono" class="block text-left text-lg font-medium text-gray-700 mb-2">Teléfono *</label>
                        <input type="tel" id="telefono" name="telefono" required 
                               pattern="[0-9\-\s]{8,15}"
                               title="Solo números, guiones y espacios, entre 8 y 15 caracteres"
                               placeholder="2234-5678 o 7231 7890"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="edad" class="block text-left text-lg font-medium text-gray-700 mb-2">Edad</label>
                        <input type="number" id="edad" name="edad" min="1" max="120" 
                               title="Edad entre 1 y 120 años"
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="ocupacion" class="block text-left text-lg font-medium text-gray-700 mb-2">Ocupación</label>
                        <select id="ocupacion" name="ocupacion" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Selecciona una opción</option>
                            <option value="estudiante">Estudiante</option>
                            <option value="profesional">Profesional</option>
                            <option value="docente">Docente</option>
                            <option value="empresario">Empresario</option>
                            <option value="freelancer">Freelancer</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div>
                        <label for="comentario" class="block text-left text-lg font-medium text-gray-700 mb-2">Comentarios</label>
                        <textarea id="comentario" name="comentario" rows="3" maxlength="500"
                                  placeholder="¿Cómo te enteraste de la Semana de Sistemas? ¿Qué esperas del evento?" 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 resize-vertical"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors font-semibold">
                            Registrar Visita
                        </button>
                    </div>
                    <p class="text-sm text-gray-600">Los campos marcados con * son obligatorios</p>
                </form>
                
                <script>
                document.getElementById('formulario-registro').addEventListener('submit', function(e) {
                    const nombre = document.getElementById('nombre').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const telefono = document.getElementById('telefono').value.trim();
                    
                    // Validar nombre
                    if (!/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$/.test(nombre)) {
                        alert('El nombre debe contener solo letras y espacios, entre 2 y 50 caracteres');
                        e.preventDefault();
                        return;
                    }
                    
                    // Validar email
                    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
                        alert('Por favor ingresa un email válido');
                        e.preventDefault();
                        return;
                    }
                    
                    // Validar teléfono
                    if (!/^[0-9\-\s]{8,15}$/.test(telefono)) {
                        alert('El teléfono debe contener solo números, guiones y espacios, entre 8 y 15 caracteres');
                        e.preventDefault();
                        return;
                    }
                });
                </script>
            </div>
        </div>
    </section>
</div>
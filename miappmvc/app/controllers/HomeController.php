<?php  

namespace app\controllers;
use app\models\Database;
use app\models\Visita;

class HomeController
{
    public function view($view, $data = [])
    {
        extract($data);

        if (file_exists("../app/views/dias/$view.php"))
        {
            ob_start();
            include("../app/views/dias/$view.php");
            $content = ob_get_clean();
            include("../app/views/components/plantilla.php");
            return $content;
        }
        else { echo 'No se encontro la vista'; }
    }

    /**
     * Renderizar vista con plantilla y componentes
     */
    public function render($view, $data = [], $titulo = 'SDS2025')
    {
        // Extraer datos como variables
        extract($data);
        
        // Capturar el contenido de la vista
        ob_start();
        include("../app/views/$view.php");
        $contenido = ob_get_clean();
        
        // Renderizar con plantilla (que incluye header, nav, footer)
        include("../app/views/components/plantilla.php");
    }

    public function Index()
    {
        // Usar el nuevo método render con plantilla
        $this->render('index', ['title' => 'INICIO'], 'SDS2025 - Página Principal');
    }
    public function dia1()
    {
        // Usar el nuevo método render con plantilla
        $this->render('dias/dia1', ['title' => 'DIA 1'], 'SDS2025 - Día 1');
    }
    public function dia2()
    {
        // Usar el nuevo método render con plantilla
        $this->render('dias/dia2', ['title' => 'DIA 2'], 'SDS2025 - Día 2');
    }
    public function dia3()
    {
        // Usar el nuevo método render con plantilla
        $this->render('dias/dia3', ['title' => 'DIA 3'], 'SDS2025 - Día 3');
    }
    public function dia4()
    {
        // Usar el nuevo método render con plantilla
        $this->render('dias/dia4', ['title' => 'DIA 4'], 'SDS2025 - Día 4');
    }
    public function dia5()
    {
        // Usar el nuevo método render con plantilla
        $this->render('dias/dia5', ['title' => 'DIA 5'], 'SDS2025 - Día 5');
    }
    public function autor()
    {
        // Usar el nuevo método render con plantilla
        $this->render('autor', ['title' => 'AUTOR'], 'SDS2025 - Acerca del Autor');
    }

    public function registrarVisita()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Validaciones básicas con regex
                $nombre = trim($_POST['nombre'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $telefono = trim($_POST['telefono'] ?? '');
                $edad = trim($_POST['edad'] ?? '');
                $ocupacion = trim($_POST['ocupacion'] ?? '');
                $comentario = trim($_POST['comentario'] ?? '');
                
                // Validar nombre (solo letras y espacios, 2-50 caracteres)
                if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$/', $nombre)) {
                    header('Location: /');
                    exit;
                }
                
                // Validar email
                if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
                    header('Location: /');
                    exit;
                }
                
                // Validar teléfono (números, guiones y espacios, 8-15 caracteres)
                if (!preg_match('/^[0-9\-\s]{8,15}$/', $telefono)) {
                    header('Location: /');
                    exit;
                }
                
                // Validar edad (opcional, pero si se envía debe ser 1-120)
                if (!empty($edad) && !preg_match('/^[1-9][0-9]?$|^1[01][0-9]$|^120$/', $edad)) {
                    header('Location: /');
                    exit;
                }
                
                // Crear conexión a base de datos
                $database = new Database();
                $conn = $database->getConnection();
                
                // Crear instancia del modelo Visita
                $visita = new Visita($conn);
                
                // Asignar datos validados
                $visita->nombre = $nombre;
                $visita->email = $email;
                $visita->telefono = $telefono;
                $visita->edad = !empty($edad) ? intval($edad) : null;
                $visita->ocupacion = $ocupacion;
                $visita->comentario = $comentario;
                
                // Crear registro en base de datos
                if ($visita->create()) {
                    // Redirigir al inicio sin mensaje
                    header('Location: /');
                    exit;
                } else {
                    // Redirigir al inicio sin mensaje
                    header('Location: /');
                    exit;
                }
                
            } catch (\Exception $e) {
                // En caso de error, redirigir al inicio sin mensaje
                header('Location: /');
                exit;
            }
        }
        
        // Si no es POST, redirigir a inicio
        header('Location: /');
        exit;
    }
}



?>
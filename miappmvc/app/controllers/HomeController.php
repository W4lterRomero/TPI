<?php  

namespace app\controllers;

class HomeController
{
    public function view($view, $data = [])
    {
        extract($data);

        if (file_exists("../app/views/$view.php"))
        {
            ob_start();
            include("../app/views/$view.php");
            $content = ob_get_clean();
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
}



?>
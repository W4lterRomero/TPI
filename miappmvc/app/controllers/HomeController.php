<?php  

namespace app\controllers;

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
}



?>
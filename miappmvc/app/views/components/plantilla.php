<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'Sistema Contable MVC' ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Configuración personalizada de Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#64748b',
                        success: '#059669',
                        warning: '#d97706',
                        danger: '#dc2626'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Header -->
    <?php include('header.php'); ?>
    
    <!-- Navigation -->
    <?php include('nav.php'); ?>
    
    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-8">
        <?= $contenido ?? '' ?>
    </main>
    
    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
<?php
    include_once('clases/DigitalHouseManager.php');
    include_once('clases/ProfesorEspecialista.php');
    echo '<pre>';
    /*
    //Primera Forma (Nombre completamente Calificado)
    //Instanciando objeto de la clase Externa a Nosotros
    $profeEspecilista = new Profesor();

    //Instanciando objeto de la clase de Nosotros
    $miProfe = new MiApp\ProfesorTitular('Diego', 'Caplan', 2, 1, 'HTML');

    var_dump($profeEspecilista);
    var_dump($miProfe);

    //Segunda Forma (Nombre no Calificado)
    use MiApp\DigitalHouseManager;
    //hasta puedo darle un alias a mi clase
    use MiApp\Profesor as MiProfe;
    //le di alias a la clase Externa
    use Diegote\Profesor as ClaseDiegoteProfe;
    //$DH = new MiApp\DigitalHouseManager();
    $profeDiego = new ClaseDiegoteProfe();
    $miProfe = new MiProfe('Diego', 'Caplan', 2, 1);
    $DH = new DigitalHouseManager();

    var_dump($profeDiego);
    var_dump($miProfe);
    exit;

    
    $DH->darDeAltaCurso("FullStack", "c0002", 15);
    $DH->darDeAltaCurso("Android", "c0003", 15);


    $DH->altaProfesorAdjunto("Nico", "Rodrigues", 0, "ad004", 36);
    $DH->altaProfesorTitular("Nick", "Damico", 0, "tit002", "Javascript");
    $DH->altaProfesorAdjunto("Lopi", "Lopi", 0, "ad005", 36);
    $DH->altaProfesorTitular("Andres", "Furlan", 0, "tit003", "Java");

    $DH->altaAlumno("Nelson", "Nunez", "al010");
    $DH->altaAlumno("Gordo", "Valor", "al011");
    $DH->altaAlumno("Ale", "Perez", "al012");
    $DH->altaAlumno("Sofia", "Kirchner", "al016");

    $DH->inscribirAlumno("al010", "c0002");
    $DH->inscribirAlumno("al011", "c0002");
    $DH->inscribirAlumno("al012", "c0003");
    $DH->inscribirAlumno("al016", "c0003");

    $DH->asignarProfesores("c0002", "ad004", "tit002");

    $DH->asignarProfesores("c0003", "ad005", "tit003");

    echo '<pre>';
    var_dump($DH);

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    
    $experiencias = $_POST['cargo'];
    $empresas = $_POST['empresa'];
    $periodos = $_POST['periodo'];

    
    $cursos = $_POST['curso'];
    $instituicoes = $_POST['instituicao'];
    $periodos_cursos = $_POST['periodo_curso'];

    
    $habilidades = $_POST['habilidades'];

    echo '<style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 800px;
                background-color: #fff;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 20px auto;
            }
            h2 {
                font-size: 2em;
                color: #333;
                margin-bottom: 10px;
            }
            h3 {
                font-size: 1.5em;
                color: #007bff;
                margin-top: 20px;
                margin-bottom: 10px;
            }
            p {
                margin-bottom: 5px;
            }
            ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
            ul li {
                margin-bottom: 10px;
            }
          </style>';

    
    echo "<div class='container'>";
    echo "<h2>Currículo de $nome</h2>";
    echo "<h3>Dados Pessoais</h3>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";

    echo "<h3>Experiência Profissional</h3>";
    echo "<ul>";
    foreach ($experiencias as $index => $cargo) {
        echo "<li><strong>$cargo</strong> - $empresas[$index] ($periodos[$index])</li>";
    }
    echo "</ul>";

    echo "<h3>Formação Acadêmica</h3>";
    echo "<ul>";
    foreach ($cursos as $index => $curso) {
        echo "<li><strong>$curso</strong> - $instituicoes[$index] ($periodos_cursos[$index])</li>";
    }
    echo "</ul>";

    echo "<h3>Habilidades</h3>";
    echo "<p>$habilidades</p>";
    echo "</div>"; 
}
?>
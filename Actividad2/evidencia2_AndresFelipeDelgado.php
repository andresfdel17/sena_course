<!DOCTYPE html>
<html>

<head>
    <title>Unidad 2 - Ejemplo 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <style>
        tr,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <?php
    /**
     * @author Andrés Felipe Delgado
     * Desarrollo web php
     * Actividad 2 Uso de arreglos
     */
    $people = [
        [
            "Juan Pérez",
            "Cll 23 # 12 - 19 SUR",
            "3456789",
            "23/12/1997",
            "Amarillo"
        ],
        [
            "Pablo Manrique",
            "Cra. 45 # 45 -  56",
            "3456789",
            "12/10/1980",
            "Verde"
        ],
        [
            "Nancy Peña",
            "Av 34 # 16-12",
            "3456789",
            "07/06/2000",
            "Rojo"
        ]
    ];
    $colors = [
        "Amarillo" => "Riqueza y alegría"
    ];
    ?>
    <table style="width: 100%;border: 1px solid;border-collapse:collapse">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de Cumpleaños</th>
                <th>Color favorito</th>
                <th>Significado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($people as $key => $value) {
                echo "<tr>";
                foreach ($value as $key1 => $value1) {
                    echo "<td>" . $value1 . "</td>";
                }
                if (isset($colors[$value[count($value) - 1]])) {
                    echo "<td>" . $colors[$value[4]] . "</td>";
                } else {
                    echo "<td>No se   encuentra el   significado.</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>
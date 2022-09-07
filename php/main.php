<?php
   if (isset($_POST['enviar'])) {
      if (!empty($_POST['nombres']) && !empty($_POST['salario']) && !empty($_POST['dias_laborados']) && !empty($_POST['comisiones']) && !empty($_POST['libranza'])) {
         $nombres = $_POST['nombres'];
         $salario_mensual = (int) $_POST['salario'];
         $dias_laborados = (int) $_POST['dias_laborados'];
         $hdiurnas = (int) $_POST['horas_diurnas'];
         $hnocturnas = (int) $_POST['horas_nocturnas'];
         $hdominicales = (int) $_POST['horas_dominicales'];
         $comisiones = (int) $_POST['comisiones'];
         $libranza = (int) $_POST['libranza'];
         
         $total_salario = ($salario_mensual / 30);
         $tl_salario = ($total_salario * $dias_laborados);
         
         $HD = 1500;
         $HN = 2000;
         $HDOM = 2500;
         $VHD = ($hdiurnas * $HD);
         $VHN = ($hnocturnas * $HN);
         $VHDOM = ($hdominicales * $HDOM);
         
         $valor_total = ($VHD + $VHN + $VHDOM);
         $total_devengado = ($salario_mensual + $valor_total);

         $arregloNomina = [
            [
                    'Nombre y Apellido',
                    'Salario Mensual',
                    'Días Laborados',
                    'Total Salario',
                    'Horas Diurnas',
                    'Horas Nocturnas',
                    'Horas Dominicales',
                    'VHD',
                    'VHN',
                    'VHDOM',
                    'Valor Total',
                    'Comisiones',
                    'Total Devengado',
                    'Libranza'
            ],
            [
                    $nombres,
                    $salario_mensual,
                    $dias_laborados,
                    $tl_salario,
                    $hdiurnas,
                    $hnocturnas,
                    $hdominicales,
                    $VHD,
                    $VHN,
                    $VHDOM,
                    $valor_total,
                    $comisiones,
                    $total_devengado,
                    $libranza,
            ]
         ];

         $s = '<table border="1">';
         foreach ( $arregloNomina as $r ) {
            $s .= '<tr>';
            foreach ( $r as $v ) {
               $s .= '<td>'.$v.'</td>';
            }
            $s .= '</tr>';
         }
         $s .= '</table>';
         echo $s;
      }
   }
?>